<?php 
	//include('../config/db_connection.php');
	session_start();
	session_unset();
	/*if(session_unset()){
		$login_date = date('d-m-y');
		$login_time = date('h:i:s A');
		
		$sql1 = "INSERT INTO login_control(login_date, login_time)VALUES('$login_date', '$login_time')";
		mysqli_query($con, $sql1);
		*/		
		header ("Location:index.php");
	//}
?>