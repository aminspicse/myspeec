<?php 
	include '../config/db_connection.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header('Location:../index.php');
	}
	$ses = $_SESSION['user'];
	
	$ses_id = $ses['id'];
	$sql0 = "SELECT * FROM setting WHERE user_id = $ses_id";
	$exe0 = mysqli_query($con, $sql0);
	$setting = mysqli_fetch_array($exe0);
	//array 
	//$title['two'] = "Play madrasah";
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php 
		if(isset($title)){
			echo "Class: ".$title." || ".$ses['school_name']. " || User: ". $ses['email']." || Admin: ".$ses['admin_name']. " || Admin ID: ".$ses['id'];
		}else{
			echo $ses['school_name']. " || User: ". $ses['email']." || Admin: ".$ses['admin_name'];
		}
	?></title>
  <link rel="icon" type="text/css" href="<?= $ses['institute_logu']?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="MD. AL AMIN">
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/admin.css" rel="stylesheet" type="text/css">
  <link href="../register/image_upload_plugin/dist/css/bootstrap-imageupload.css" rel="stylesheet">
  <script src="../js/07b0ce5d10.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery3.1.1.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/resultsheet.css" />

</head>
<body>
	