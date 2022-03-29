
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee Schedule</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../style/indexmenu.css">
	
	<div class="header">
	<a href="../indexpost.php" class="logo">Home</a> <i class="fas fa-database"></i> 
	<div class="header-right">
		<a class="active" href="./../admin/index.php">Back</i></a>
		<a href="../index.php">Logout</a>
	</div>
  </div>
  <div id="logo">
  		<img src="logo.JPG" alt="Company logo" width="300" height="150">
	</div>

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});
	
});
</script>

</head>

<body>
    


	<div class="container">
      
        <h2 class="form-signin-heading">Schedule.</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Create New</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Schedule</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Emp ID</th>
        <th>Emp Name</th>
        <th>Week Commercing</th>
        <th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
		<th>Saturday</th>
		<th>Sunday</th>
        <th>edit</th>
        <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM rota ORDER BY sched_id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['sched_id']; ?></td>
			<td><?php echo $row['employee_name']; ?></td>
			<td><?php echo $row['week_start']; ?></td>
			<td><?php echo $row['monday']; ?></td>
			<td><?php echo $row['tuesday']; ?></td>
			<td><?php echo $row['wednesday']; ?></td>
			<td><?php echo $row['thursday']; ?></td>
			<td><?php echo $row['friday']; ?></td>
			<td><?php echo $row['saturday']; ?></td>
			<td><?php echo $row['sunday']; ?></td>
			<td align="center">
			<a id="<?php echo $row['sched_id']; ?>" class="edit-link" href="#" title="Edit">
			<img src="edit.png" width="20px" />
            </a></td>
			<td align="center"><a id="<?php echo $row['sched_id']; ?>" class="delete-link" href="#" title="Delete">
			<img src="delete.png" width="20px" />
            </a></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
        <a href="http://www.onetimesystems.com" target="_blank">OneTime App </a>
        </div>
        <button class="btn btn-info" type="button" id="btn-add"> Back </i></button>
    </div>
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>