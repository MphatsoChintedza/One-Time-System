<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	$ename = $_POST['employee'];
	$sdate = $_POST['startdate'];
	$endate = $_POST['enddate'];
	$Holiday_status = $_POST['Holiday_status'];
	
	if($crud->create($ename,$sdate,$endate,$Holiday_status))
	{
		header("Location: add-data.php?inserted");
	}
	else
	{
		header("Location: add-data.php?failure");
	}
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>Attention!</strong> you holiday has been sent to your manager please check again After 24 hrs Thank you  <a href="index.php"><i class="fa fa-home" style="font-size:36px"></i>HOME</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
	</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

 	
	 <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Employee Name</td>
            <td><input type='text' name='employee' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Start Date</td>
            <td><input type='text' name='startdate' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>End Date</td>
            <td><input type='text' name='enddate' class='form-control' required></td>
        </tr>

          <tr>
            <td>Default : this part dont need to be filled</td>
            <td><input type="text" name="Holiday_status" value ="Pending" readonly></td>
        </tr>
 
 
        
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<i class="fa fa-check-square" style="font-size:24px;"></i> Send Request
			</button>  
            <a href="../indexpost.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back</a>
            </td>
        </tr>
 
    </table> 
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>