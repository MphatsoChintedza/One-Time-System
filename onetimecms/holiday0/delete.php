<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['Id'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM Holidays WHERE Id = '".$_GET['Id']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'One record deleted successfully' : 'Something went wrong. Cannot delete record';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Select holiday requested to delete first';
	}

	header('location: index.php');

?>