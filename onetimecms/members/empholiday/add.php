<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$stmt = $db->prepare("INSERT INTO Holidays (employee, startdate, enddate, Holiday_status) VALUES (:employee, :startdate, :enddate, :Holiday_status )");
			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $stmt->execute(array(':employee' => $_POST['employee'] , ':startdate' => $_POST['startdate'] , ':enddate' => $_POST['enddate'] ,':Holiday_status' => $_POST['Holiday_status'] )) ) ? 'holiday form  sent successfully' : 'Something went wrong. Cannot send holiday form at the moment';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: index.php');
	
?>