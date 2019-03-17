<?php
	//include'../elements/simpleheader.php';
	//include 'file';
	$sesid = $ses['id'];
	//total student of class
	$sql = "SELECT * FROM class_nine WHERE user_id = $sesid";
	$exe = mysqli_query($con, $sql);
	$student = mysqli_num_rows($exe);
	
?>