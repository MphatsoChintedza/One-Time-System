<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Notice</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/indexmenu.css">
    <link rel="stylesheet" href="style/adminmenu.css">
    <link rel="stylesheet" href="style/postmenu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/footer.css">
	<link rel="stylesheet" href="style/scroll.css">
</head>
<body>
<div style="padding-left:20px">
  <h1></h1>
</div>

	<div class="topnav">
	
			<a class="active" href="indexhome.php">Home</a>
			<a href="members/empholiday/index.php">Holidays</a>
			<a href="members/schedule/index.php">Schedule</a>
          <div class="topnav-right">
            <a href="admin/index.php"> <i class="fa fa-cog"style="font-size:20px" aria-hidden="true">Config</i></a>>
            <a href="logout.php"><i class="fa fa-sign-out" style="font-size:20px"></i>Logout</a>
          </div>
  </div>
		</div>
		<div id="logo">
  <img src="logo.JPG" alt="Company logo" width="300" height="150">

	
</div>
	<div id="wrapper">

		<h1>Notice Board</h1>
		<hr />

		<?php
			try {

				$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
				while($row = $stmt->fetch()){
					
					echo '<div>';
						echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
						echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
						echo '<p>'.$row['postDesc'].'</p>';				
						echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';				
					echo '</div>';

				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>

	</div>
<div class="footer">
  <p>OneTimeSystem</p>
</div>
</body>
</html>