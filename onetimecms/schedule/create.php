<?php
require_once 'dbconfig.php';
	
	if($_POST)
	{
		$emp_name = $_POST['employee_name'];
		$week_start = $_POST['week_start'];
		$day1 = $_POST['monday'];
		$day2 = $_POST['tuesday'];
		$day3 = $_POST['wednesday'];
		$day4 = $_POST['thursday'];
		$day5 = $_POST['friday'];
		$day6 = $_POST['saturday'];
		$day7 = $_POST['sunday'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO rota(employee_name,week_start,monday,tuesday,wednesday,thursday,friday,saturday,sunday) VALUES(:ename, :wstart, :hday1, :hday2, :hday3, :hday4, :hday5, :hday6, :hday7)");
			$stmt->bindParam(":ename", $emp_name);
			$stmt->bindParam(":wstart", $week_start);
			$stmt->bindParam(":hday1", $day1);
			$stmt->bindParam(":hday2", $day2);
			$stmt->bindParam(":hday3", $day3);
			$stmt->bindParam(":hday4", $day4);
			$stmt->bindParam(":hday5", $day5);
			$stmt->bindParam(":hday6", $day6);
			$stmt->bindParam(":hday7", $day7);

			
			if($stmt->execute())
			{
				echo "Employess Schedule Successfully Created ";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>