<?php
	include '../config/db_connection.php';
	$sql = 'SELECT * FROM users';
	$data = mysqli_query($con, $sql);
	$result = mysql_fetch_array($data);
	mysql_real_escape_string($result);
?>