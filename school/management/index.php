<?php 
	session_start();
    include 'config/db_connection.php';
    date_default_timezone_set("Asia/Dhaka");
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = sha1($_POST['password']); 

        if(!empty($email) && !empty($password)) {
            $sql = "SELECT * FROM admin_teachers WHERE email = '$email' AND password = '$password'";
            $exe = mysqli_query($con, $sql);
            $result = mysqli_fetch_array($exe);
			//header("Location: index.php");
			$user_name =$email;// $result['email'];
			$login_date = date('d-m-y');
			$login_time = date('h:i:s A');
			
            if($result){
				$login_status = 1;
				$sql1 = "INSERT INTO login_control(user_name, login_date, login_time, login_status)VALUES('$user_name', '$login_date', '$login_time', '$login_status')";
				mysqli_query($con, $sql1);
				
			   $_SESSION['user'] = $result;
               header('Location:elements/');

              
            }else{
                $msg['error'] = 'Email or Password Incorrect';
				$sql2 = "INSERT INTO login_control(user_name, login_date, login_time)VALUES('$user_name', '$login_date', '$login_time')";
				mysqli_query($con, $sql2);
            }

        }else{
            $msg['error'] = 'Email and Password required';
        }
    }
	


 ?>
 
<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Login.............</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scal=1">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/login.css">
		<script type="text/javascript" src="js/jquery.js"> </script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
				<?php if (isset($msg['error'])) { ?>
				<div class="alert alert-danger">
					<h5><?php echo $msg['error']  . "!" ?></h5>
				</div>
				<?php } ?>
			
				<?php if(isset($msg['success'])) { ?>
					<div class="alert alert-success">
						<h5><?php echo $msg['success'] ?></h5>
					</div>
				<?php } ?>
            <h1 class="text-center login-title">School Management System Bangladesh.</h1>
             <div class="account-wall">
                <form class="form-signin" action="index.php" method="POST">
                    <input type="email" name="email" class="form-control" placeholder="Email"  autofocus>
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                    <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left" style="margin-left:25px">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            <a href="register/index.php" class="text-center new-account">Create an account </a>
            </div>
        </div>
    </div>
</div>
	</body>
</html>
<?php
	if(isset($_SESSION['user'])){
		header('Location:elements/index.php');
	}
?>