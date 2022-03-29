<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Notice - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/menu.css">
	<link rel="stylesheet" href="style/indexmenu.css">
</head>
<body>
     
	<div class="header">
	<a href="#default" class="logo">OneTimeSystem</a> <i class="fas fa-database"></i> 
	<div class="header-right">
		<a class="active" href="indexhome.php">Home</i></a>
		<a href="indexpost.php">Back</a>
		<a href="logout.php">Logout</a>
	</div>
	</div>


		<div style="padding-left:16px">
		<h2> </h2>
		<p>  </p>
		</div>

	<div id="wrapper">

		<h1>Notice</h1>
		<hr />
		<p><a href="indexpost.php">Notices Index</a></p>


		<?php	
			echo '<div>';
				echo '<h1>'.$row['postTitle'].'</h1>';
				echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			echo '</div>';
		?>

	</div>

</body>
</html>