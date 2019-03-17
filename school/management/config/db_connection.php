<?php
	/*
		$host_name = 'sql212.byethost.com';
		$usename = 'b31_21115994';
		$password = 'amin766855';
		$db_name = 'b31_21115994_management';
	*/
	$host_name = 'localhost';
	$usename = 'root';
	$password = '';
	$db_name = 'management';
	
	$con = mysqli_connect($host_name, $usename, $password, $db_name);
	if(mysqli_connect_errno()){
		echo 'Connection Failed';
	}
	
	$conn = new mysqli($host_name, $usename, $password, $db_name);
	if($conn->connect_error){
		die("Connection Error".$conn->connect_error);
	}
?>