<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$Id = $_GET['Id'];
			$employee = $_POST['employee'];
			$startdate = $_POST['startdate'];
			$enddate = $_POST['enddate'];
			$Holiday_status = $_POST['Holiday_status'];

			$sql = "UPDATE Holidays SET employee = '$employee', startdate = '$startdate', enddate = '$enddate' , Holiday_status = '$Holiday_status' WHERE Id = '$Id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Holiday form updated successfully' : 'Something went wrong. Cannot update holidays';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Fill up edit form first';
	}

	header('location: index.php');

?>