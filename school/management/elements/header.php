<?php 
	//php include'query.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header ('Location:../index.php');
	}
	include '../config/db_connection.php';
	
	$ses = $_SESSION['user'];
	//$sesid = $_SESSION['id'];
	
	//$sql = "SELECT * FROM class_nine WHERE user_id = $sesid";
	//$exe = mysqli_query($con, $sql);
	//$count = mysqli_num_rows($exe);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="MD. AL AMIN">
  <title><?= "Admin-Pannel of ".$ses['school_name']. " || User: ". $ses['email']." || Admin: ".$ses['admin_name']. " || Admin ID: ".$ses['id']?></title>
  <link rel="stylesheet" href="dashboard.css" />
  <link rel="icon" type="text/css" href="image/band5.png">
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/admin.css" rel="stylesheet" type="text/css">
 <script src="../js/07b0ce5d10.js"></script>
 <script src="../js/jquery.js"></script>
 <script src="../js/jquery3.1.1.js"></script>
  <script src="../js/bootstrap.min.js"></script>
 </head>

<body>
  <!--=============================
                                             NAVIGATION
                                   =============================-->
  <!--top nav start=======-->
  <nav class="navbar navbar-inverse top-bar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> <span class="menu-icon" id="menu-icon"><i class="fa fa-times" aria-hidden="true" id="chang-menu-icon"></i></span>
        <a class="navbar-brand" href="index.php"><img src="image/band5.png" width="150" height="40" class=""> </a>
      </div>
      
      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        <form class="navbar-form navbar-left" id="submit_form">
          <div class="input-group">
			
            <input type="text" class="form-control" placeholder="ID/Roll/Full Name" id="student_id" name="student_id">
            <div class="input-group-btn">
              <input type="button" class="btn btn-default" id="submit" value="Search" name="search">
            </div>
          </div>
		  <input type="text" style="display:none" name="admin_id" value="<?= $ses['id'] ?>" />
        </form>
        <ul class="nav navbar-nav">
          
          <li class=""><a href=""><i class="fa fa-refresh fa-spin fa-fw"></i> Refreash</a> </li>
          <li class=""><a href="#"><i class="fa fa-volume-up"></i></a> </li>
          <li class=""><a href="#"><i class="fa fa-envelope"></i> <span class="badge">5</span></a> </li>
          <li class=""><a href="#"><i class="fa fa-bell"></i> <span class="badge">9</span></a> </li>
          <li class="">
            <a href="#" class="user-profile"> <span class=""><img class="img-responsive" src="<?php echo $ses['institute_logu']?>" alt="Logu" /></span> </a>
          </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $ses['admin_name']?>
           <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li onclick="profile()"> <a><i class="fa fa-user"></i> Profile</a> </li>
              <li onclick="activity()"> <a><i class="fa fa-sign-in"></i> Activity Log</a> </li>
              <li onclick="setting()"> <a><i class="fa fa-cog fa-spin fa-fw"></i> Setting</a> </li>
              <li> <a href="../logout.php"><i class="fa fa-power-off"></i> Logout</a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!--    top nav end===========-->
  
  <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var student_id = $('#student_id').val();   
           if(student_id == '')  
           {  
                $('#right-container').html('<span class="text-danger">Please Put 15 Digit Student ID or 6 Digit Roll Number or Full Name of Student</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"fetch_data.php",  
                     method:"POST",  
                     data:$('#submit_form').serialize(),  
                     beforeSend:function(){  
                          $('#right-container').html('<span class=" row text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#right-container').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#right-container').fadeOut("slow");  
                          }, 50000000);  
                     }  
                });  
           }  
      });  
 });  
 </script>  