<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Holiday</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php?Id=<?php echo $row['Id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Employee:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="employee" value="<?php echo $row['employee']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Start Date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="startdate" value="<?php echo $row['startdate']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">End date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="enddate" value="<?php echo $row['enddate']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Holiday Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Holiday_status" value="<?php echo $row['Holiday_status']; ?>">
						<input type="radio" name="Holiday_status" value="pending"> pending<br>
						<input type="radio" name="Holiday_status" value="approved"> Approve<br>
                        <input type="radio" name="Holiday_status" value="denied"> Deny<br>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Record</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete?</p>
				<h2 class="text-center"><?php echo $row['employee'].' '.$row['startdate'].' '.$row['enddate']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?Id=<?php echo $row['Id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>