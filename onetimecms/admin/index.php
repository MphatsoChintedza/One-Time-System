<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['delpost'])){ 

	$stmt = $db->prepare('DELETE FROM blog_posts WHERE postID = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost']));

	header('Location: index.php?action=deleted');
	exit;
} 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="stylesheet" href="../style/normalize.css">
  <link rel="stylesheet" href="../style/main.css">
  <link rel="stylesheet" href="../style/adminmenu.css">
  <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'index.php?delpost=' + id;
	  }
  }
  </script>
<!--dropdwon menu start here css-->
  <style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<!--dropdown menu fisnish here css-->
</head>
<body background="com.png">
<ul class="topnav">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="../schedule/index.php">Schedule</a></li>
  <li><a href="../holiday0/index.php">Holidays</a></li>
  <li class="right"><a href="logout.php"><i class="fa fa-sign-out" style="font-size:20px"></i>Logout</a> </li>
  <li class="right"><a href="Notification.php"><i class="fa fa-flag-checkered" aria-hidden="true"></i></i>Notifications</a> </li>
  <div class="dropdown">
    <button class="dropbtn"> Manage users <i class="fa fa-users" style="font-size:25px" aria-hidden="true"></i>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="add-user.php">Add User</a>
      <a href="users.php">View Users</a>
	  <a href="users.php">Remove User</a>
      <a href="../holiday0/index.php">Amend Holidays</a>
	</div>
	
</ul>
<div id="logo">
  		<img src="logo.JPG" alt="Company logo" width="300" height="150">
	</div>

<div style="padding:0 16px;">
<center>	
<h1>Currently live web pages</h1>
</center>
  
</div>


	<div id="wrapper">

	<?php include('menu.php');?>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>Post '.$_GET['action'].'.</h3>'; 
	} 
	?>

	<table>
	<tr>
		<th>Title</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
	<?php
		try {

			$stmt = $db->query('SELECT postID, postTitle, postDate FROM blog_posts ORDER BY postID DESC');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$row['postTitle'].'</td>';
				echo '<td>'.date('jS M Y', strtotime($row['postDate'])).'</td>';
				?>

				<td>
					<a href="edit-post.php?id=<?php echo $row['postID'];?>">Edit</a> | 
					<a href="javascript:delpost('<?php echo $row['postID'];?>','<?php echo $row['postTitle'];?>')">Delete</a>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>

	<p><a href='add-post.php'>Add page</a></p>

</div>

</body>
</html>
