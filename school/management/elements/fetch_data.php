<?php 
	include('../config/db_connection.php');
	if(isset($_POST['student_id'])){
		$admin_id = $_POST['admin_id'];
		$student_id = $_POST['student_id'];
		$count = strlen($student_id);
		if($count == 15){
			$sql = "SELECT * FROM admission WHERE student_id = '$student_id' && admin_id = '$admin_id'";
		}elseif($count == 6){
			$sql = "SELECT * FROM admission WHERE serial = '$student_id' && admin_id = '$admin_id'";
		}else{
			$sql = "SELECT * FROM admission WHERE name = '$student_id' && admin_id = '$admin_id'";
		}
		$exe = $conn->query($sql);
		$row = $exe->fetch_assoc();
		if($exe->num_rows > 0){
			$output = '<div class="col-md-12">
				<div class="row text-center"> <h5 style="margin: 0px"><b>Name: '.$row["name"].'</b></h5></div>
				<div class="row">
					<div class="col-md-4"> Student ID: <b>'.$row["student_id"].'</b></div>
					<div class="col-md-4"> Roll: <b>'.$row["serial"].'</b></div>
					<div class="col-md-4"> Date of Birth: <b>'.$row["dateofbirth"].'</b></div>
				</div>
				<div class="row">
					<div class="col-md-4"> Father"s Name: <b>'.$row["fname"].'</b></div>
					<div class="col-md-4"> Mother"s Name: <b>'.$row["mname"].'</b></div>
					<div class="col-md-4"> Mobile Number: <b>'.$row["phone"].'</b></div>
				</div>
				<div class="row">
					<div class="col-md-4"> Gender: <b>'.$row["gender"].'</b></div>
					<div class="col-md-4"> Religion: <b>'.$row["religion"].'</b></div>
					<div class="col-md-4"> Quota: <b>'.$row["quota"].'</b></div>
				</div>
				<div class="row">
					<div class="col-md-4"> Admitted Class: <b>'.$row["admission_class"].'</b></div>
					<div class="col-md-4"> Department/Group: <b>'.$row["department_group"].'</b></div>
					<div class="col-md-4"> Admission Date: <b>'.$row["admission_date"].'</b></div>
				</div>
				<div class="row"><div class="col-md-12">Pre Institute:<b>'.$row['preinstitute'].' </b></div></div>
				<div class="row"><div class="col-md-2"><b>Present Address: </b></div></div>
				<div class="row col-md-offset-1">
					<div class="col-md-2"> District: <b>'.$row["present_district"].'</b></div>
					<div class="col-md-3"> Thana/UP: <b>'.$row["present_thana"].'</b></div>
					<div class="col-md-3"> Union/City: <b>'.$row["present_union_city"].'</b></div>
					<div class="col-md-3"> Post Office: <b>'.$row["present_postoffice"].'</b></div>
				</div>
				<div class="row"><div class="col-md-2"><b>Permanent Address: </b></div></div>
				<div class="row col-md-offset-1">
					<div class="col-md-2"> District: <b>'.$row["permanent_district"].'</b></div>
					<div class="col-md-3"> Thana/UP: <b>'.$row["permanent_thana"].'</b></div>
					<div class="col-md-3"> Union/City: <b>'.$row["permanent_union_city"].'</b></div>
					<div class="col-md-3"> Post Office: <b>'.$row["permanent_postoffice"].'</b></div>
				</div>
				<div class="row"><div class="col-md-4"><img style="height: 300px; width: 300px" src="'.$row['student_photo'].'" alt="Picture" /></div></div>
			</div>';
		}else{
			$output = "Not Found";
		}
		echo $output;
	}
?>