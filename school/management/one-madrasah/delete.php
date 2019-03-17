<?php
	include'../elements/simpleheader.php';
	//include'../config/db_connection.php';
//	echo $ses['school_name'];
	//$table = $_GET['table'];
	$uniqid = $_GET['uniqid'];
	$sql = "UPDATE one_madrasah SET delete_status = '1' WHERE id='$uniqid'";
//echo var_dump($table);
	if ($conn->query($sql) === TRUE) {
	//	header("Location:view_admission.php");
		echo "Successfully Deleted";
	} else {
		echo "Error deleting record: " . $conn->error;
	}

	
?>