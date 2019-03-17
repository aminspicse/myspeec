<?php
	$host_name = 'localhost';
	$usename = 'root';
	$password = '';
	$db_name = 'result';
	$con = mysqli_connect($host_name, $usename, $password, $db_name);
	if(mysqli_connect_errno()){
		echo 'Connection Failed';
	}
	
?>