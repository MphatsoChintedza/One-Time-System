<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
include_once 'dbconfig.php';
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div><br/>

<div class="line_red">

<link rel="stylesheet" href="line1.css">
</div><br />

<div class="container">
<a href="add-data.php" class="btn btn-large btn-info"> <i class="fa fa-calendar" style="font-size:26px"></i> Book Holiday</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 <table class='table table-bordered table-responsive'>
     <tr>
     <th>ID #</th>
     <th>Employee Name</th>
     <th>Start Date</th>
     <th>End Date</th>
     <th>Status</th>
     <th colspan="2" align="center">Actions</th>
     </tr>
     <?php
		$query = "SELECT * FROM holidays";       
		$records_per_page=3;
		$newquery = $crud->paging($query,$records_per_page);
		$crud->dataview($newquery);
	 ?>
    <tr>
        <td colspan="7" align="center">
 			<div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
        	</div>
        </td>
    </tr>
 
</table>
   
       
</div>

<?php include_once 'footer.php'; ?>