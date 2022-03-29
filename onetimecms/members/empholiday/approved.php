<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>holiday</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/button.css">
	<link rel="stylesheet" href="../../style/indexmenu.css">
	<div class="header">
	<a href="../../indexpost.php" class="logo">Home</a> <i class="fas fa-database"></i> 
	<div class="header-right">
		<a class="active" href="../../indexpost.php">Back</i></a>
		<a href="../../index.php">Logout</a>
	</div>
  </div>
</head>
<body>
<div class="container">
	<h3 class="page-header text-center">Holidays OneTimeHR</h3>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Book holiday</a>
			<a href="#" class="previous">&laquo; Previous</a>
			<a href="../../indexpost.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-arrow"></span> Back To Notices</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>Id</th>
					<th>Employee Name</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Status</th>
				</thead>
				<tbody>
					<?php
						//include our connection
						include_once('connection.php');

						$database = new Connection();
    					$db = $database->open();
						try{	
						    $sql = 'SELECT * FROM holidays WHERE (Holiday_status = `pending`) ';
						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['Id']; ?></td>
						    		<td><?php echo $row['employee']; ?></td>
						    		<td><?php echo $row['startdate']; ?></td>
						    		<td><?php echo $row['enddate']; ?></td>
									<td><?php echo $row['Holiday_status']; ?></td>
						    		
						    	</tr>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						//close connection
						$database->close();

					?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Bottom Bar start -->
	<div class="alert alert-info text-center" style="margin-top:20px;">
                        
						</div>
						<!-- Bottom Bar finish -->
	
</div>
<?php include('add_modal.php'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>