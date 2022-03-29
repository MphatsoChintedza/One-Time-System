<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST ['sched_id'];
		$emp_name = $_POST['employee_name'];
		$week_start = $_POST['week_start'];
		$day1 = $_POST['monday'];
		$day2 = $_POST['tuesday'];
		$day3 = $_POST['wednesday'];
		$day4 = $_POST['thursday'];
		$day5 = $_POST['friday'];
		$day6 = $_POST['saturday'];
		$day7 = $_POST['sunday'];
		
		$stmt = $db_con->prepare("UPDATE rota SET employee_name=:ename, week_start=:wstart, monday=:hday1, tuesday=:hday2, wednesday=:hday3, thursday=:hday4, friday=:hday5, saturday, =:hday6, sunday=:hday7  WHERE sched_id=:sched_id");
		$stmt->bindParam(":ename", $emp_name);
		$stmt->bindParam(":wstart", $week_start);
		$stmt->bindParam(":hday1", $day1);
		$stmt->bindParam(":hday2", $day2);
		$stmt->bindParam(":hday3", $day3);
		$stmt->bindParam(":hday4", $day4);
		$stmt->bindParam(":hday5", $day5);
		$stmt->bindParam(":hday6", $day6);
		$stmt->bindParam(":hday7", $day7);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>