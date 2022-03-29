<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
    $id = $_GET['edit_id'];
	$ename = $_POST['employee'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$Holiday_status = $_POST['Holiday_status'];
	
	if($crud->update($id,$ename,$startdate,$enddate,$Holiday_status))
	{
		$msg = "<div class='alert alert-info'>
				<strong>SUCESSSFULLY!</strong> Record was updated successfully <a href='index.php'>HOME</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>SORRY!</strong> ERROR while updating record please try again!
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));	
}

?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 
     <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Employee Name</td>
            <td><input type='text' name='employee' class='form-control' value="<?php echo $employee; ?>" required></td>
        </tr>
 
        <tr>
            <td>Start Date</td>
            <td><input type='date' name='startdate' class='form-control' value="<?php echo $startdate; ?>" required></td>
        </tr>
 
        <tr>
            <td>End Date</td>
            <td><input type='date' name='enddate' class='form-control' value="<?php echo $enddate; ?>" required></td>
        </tr>
 
        <tr>
            <td>Status</td>
            <td><input type='text' name='Holiday_status' class='form-control' value="<?php echo $Holiday_status; ?>" required></td>
        </tr>
 
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Update this Record
				</button>
                <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>