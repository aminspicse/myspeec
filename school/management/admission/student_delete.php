<?php
	include'../elements/simpleheader.php';
//	echo $ses['school_name'];
	$uniqid = $_GET['uniqid'];
	$sql = "UPDATE admission SET delete_status = 1 WHERE id='$uniqid'";

	if ($conn->query($sql) === TRUE) {
		header("Location:view_admission.php");
	} else {
		echo "Error deleting record: " . $conn->error;
	}

	
?>