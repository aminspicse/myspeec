<?php 
	//session_start();
    include '../config/db_connection.php';
    
    if(isset($_POST['submit'])) {
		
		$classes = $_POST['classes'];
		$semester = $_POST['semester'];
		$year = $_POST['year'];
        $roll = $_POST['roll'];
		$adminid = $_POST['adminid'];

        if(!empty($roll) && !empty($classes) && !empty($adminid)) {
            $sql = "SELECT * FROM $classes WHERE roll = '$roll' and semester = '$semester' and year = '$year' AND admin_id = '$adminid' and delete_status = '0'";
            $exe = mysqli_query($con, $sql);
            $result = mysqli_fetch_array($exe);
			$count = mysqli_fetch_assoc($exe);
           
		   
		    $sql1 = "SELECT * FROM admin_teachers WHERE id = '$adminid'";
			$exe1 = mysqli_query($con, $sql1);
            $result1 = mysqli_fetch_array($exe1);

        }else{
            $msg['error'] = 'Roll, Password and Admin id is required';
        }
    }
	


 ?>
 
<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>School Management System</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scal=1">
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="../css/login.css">
		<script type="text/javascript" src="../js/jquery.js"> </script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
            <h1 class="text-center login-title">School Management System Bangladesh</h1>
             <div class="account-wall">
                <form class="form-signin" action="" method="POST">
					<select name="classes" id="" class="form-control">
						<option>Select Your Class</option>
						<option value="play_madrasah">Play</option>
						<option value="nursary_madrasah">Nursary</option>
						<option value="one_madrasah">One</option>
						<option value="two_madrasah">Two</option>
						<option value="three_madrasah">Three</option>
						<option value="four_madrasah">Four</option>
						<option value="five_madrasah">Five</option>
						<option value="six_madrasah">Six</option>
						<option value="seven_madrasah">Seven</option>
						<option value="eight_madrasah">Eight</option>
						<option value="nine_madrasah">Nine</option>
						<option value="ten_madrasah">Ten</option>
					</select>
					<select name="semester" id="" class="form-control">
						<option>Select Your Semester</option>
						<option value='Mid Term'>Mid Term</option>
						<option value='Half Yearly'>Half Yearly</option>
						<option value='Annual'>Annual</option>
						<option value='Pre-Test'>Pre-Test</option>
						<option value='Test'>Test</option>
						<option value='Final'>Final</option>
						<option value='1st Semester'>1st Semester </option>
						<option value='2nd Semester'>2nd Semester</option>
						<option value='3rd Semester'>3rd Semester</option>
					</select>
					<select name="year" id="" class="form-control">
						<option value="">Exam. Year</option>
						
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
					</select>
                    <input type="text" name="roll" class="form-control" placeholder="Roll"  autofocus>
                    <input type="text" name="adminid" class="form-control" placeholder="Admin ID" > <br />
                    <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Submit</button>
                    
                </form>
           <!-- <a href="register/index.php" class="text-center new-account">Create an account </a> -->
            </div>
        </div>
    </div>
</div>
		<?php 
		
			 if($result){
				echo $out = "
					<table class='container table-bordered' width='80px'>
						<tr>
							<th>Institute Name: </th>
							<th colspan='5'>".$result1['school_name']."</th>
						</tr>
						<tr>
							<th>Roll No: </th>
							<th>".$result['roll']."</th>
							<th>Name: </th>
							<th>".$result['name']."</th>
							<th>Class: </th>
							<th>".$result['classs']."</th>
						</tr>
						<tr>
							<th>Group: </th>
							<th>".$result['department']."</th>
							<th>GPA: </th>
							<th>".$result['gpa']."</th>
							<th>Result</th>
							<th>".$result['status']."</th>
						</tr>
					</table>
				";
				echo $count;
            }else{
                $msg['error'] = 'Roll, Password or Admin ID is  Incorrect';
            }
		?>
	</body>
</html>
