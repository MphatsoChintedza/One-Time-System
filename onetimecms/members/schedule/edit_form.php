<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM rota WHERE sched_id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='sched_id' value='<?php echo $row['sched_id']; ?>' />
        <tr>
            <td>Employee Name</td>
            <td><input type='text' name='employee_name' class='form-control' value='<?php echo $row['employee_name']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Week Commercing</td>
            <td><input type='text' name='week_start' class='form-control' value='<?php echo $row['week_start']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Monday</td>
            <td><input type='text' name='monday' class='form-control' value='<?php echo $row['monday']; ?>' required></td>
        </tr>

        <tr>
            <td>Tuesday</td>
            <td><input type='text' name='tuesday' class='form-control' value='<?php echo $row['tuesday']; ?>' required></td>
        </tr>

        <tr>
            <td>Wednesday</td>
            <td><input type='text' name='wednesday' class='form-control' value='<?php echo $row['wednesday']; ?>' required></td>
        </tr>

        <tr>
            <td>Thursday</td>
            <td><input type='text' name='thursday' class='form-control' value='<?php echo $row['thursday']; ?>' required></td>
        </tr>

        <tr>
            <td>Friday</td>
            <td><input type='text' name='friday' class='form-control' value='<?php echo $row['friday']; ?>' required></td>
        </tr>

        <tr>
            <td>Saturday</td>
            <td><input type='text' name='saturday' class='form-control' value='<?php echo $row['saturday']; ?>' required></td>
        </tr>

        <tr>
            <td>Sunday</td>
            <td><input type='text' name='sunday' class='form-control' value='<?php echo $row['sunday']; ?>' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Update
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
