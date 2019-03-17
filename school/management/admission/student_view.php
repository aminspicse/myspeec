<?php
	include'../elements/simpleheader.php';
	$admin_id = $ses['id'];
	$uniqid = $_GET['uniqid'];
	$sql = "SELECT * FROM admission WHERE admin_id = '$admin_id' and id = '$uniqid'";
	$exe = $conn->query($sql);
	$row = $exe->fetch_assoc();
	//echo $row['id'];
//	echo $ses['school_name'];

?>
	<div class="thumbnail container">
		<div class="row"><h3 class="text-center"><b><?php echo $ses['school_name']?></b></h3></div>
		<div class="row container-fluid">
			<div class="col-md-11"><h3 class="text-center" style="margin-top:0px">Student Wish Admission Information</h3></div>
			<div class="col-md-1">
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($ses['institute_logu']).'" alt="" style="height:50px; width:50px" />'?>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-3">
				<h4 style="margin-top:-5px">Institute Code: <?php echo $ses['institute_code']?></h4>
			</div>
			<div class="col-md-3">
				<h4 style="margin-top:-5px">Institute EIN: <?php echo $ses['institute_ein']?></h4>
			</div>
			<div class="col-md-3">
				<h4 style="margin-top:-5px">Board Code: <?php echo $ses['board']?></h4>
			</div>
			<div class="col-md-3">
				<h4 style="margin-top:-5px">District Code: <?php echo $ses['district_code']?></h4>
			</div>
		</div>
	
		<div class="row">
			<h4 class="text-center text-info"><b><i><u>Personal Information</u></i></b></h4>
		</div>
		<div class="row container-fluid">
			<div class="col-md-4">
				<h4>Student ID: <b><?php echo $row['student_id']?></b></h4>
			</div>
			<div class="col-md-2">
				<h4>Roll No: <b><?php echo $row['serial']?></b></h4>
			</div>
			<div class="col-md-5">
				<h4 class="">Name:<b> <?php echo $row['name']?></b></h4>
			</div>
			<div class="col-md-1">
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['student_photo']).'" alt="Photo" style="height:50px; width:50px"/>'?>
			</div>
		</div>
		<div class="row container-fluid">
			
			<div class="col-md-6">
				<h4 class="">F'Name:<b> <?php echo $row['fname']?></b></h4>
			</div>
			<div class="col-md-5">
				<h4 class="">M'Name:<b> <?php echo $row['mname']?></b></h4>
			</div>
			
		</div>
		<div class="row container-fluid">
			<div class="col-md-4">
				<h4><b>Phone:</b> <?php echo $row['phone']?></h4>
			</div>
			<div class="col-md-4">
				<h4><b>F'Occupation:</b> <?php echo $row['father_occupation']?></h4>
			</div>
			<div class="col-md-4">
				<h4><b>Email:</b> <?php echo $row['email']?></h4>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-4">
				<h4><b>Annual Income:</b> <?php echo $row['annualincome']?></h4>
			</div>
			<div class="col-md-4">
				<h4><b>Date of Birth:</b> <?php echo $row['dateofbirth']?></h4>
			</div>
			<div class="col-md-4">
				<h4><b>Nationality:</b> <?php echo $row['nationality']?></h4>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-4">
				<h4><b>Gender: </b><?php echo $row['gender']?></h4>
			</div>
			<div class="col-md-4">
				<h4><b>Religion: </b><?php echo $row['religion']?></h4>
			</div>
			<div class="col-md-4">
				<h4><b>Quota:</b> <?php echo $row['quota']?></h4>
			</div>
		</div>
		<div class="row">
			<h4 class="text-center text-danger"><b><i><u>Present Address</u></i></b></h4>
		</div>
		<div class="row container-fluid">
			<div class="col-md-3">
				<h4><b>Country:</b> <?php echo $row['present_country']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Division: </b><?php echo $row['present_division'] ?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>District: </b><?php echo $row['present_district']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Thana/UP:</b><?php echo $row['present_thana']?></h4>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-3">
				<h4><b>Union/City: </b><?php echo $row['present_union_city']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Village/Word: </b><?php echo $row['present_village']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Post office: </b><?php echo $row['present_postoffice']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Phone: </b><?php echo $row['present_contact']?></h4>
			</div>
		</div>
		<div class="row">
			<h4 class="text-center text-success"><b><i><u>Permanent Address<u></i></b></h4>
		</div>
		<div class="row container-fluid">
			<div class="col-md-3">
				<h4><b>Country:</b> <?php echo $row['permanent_country']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Division: </b><?php echo $row['permanent_division'] ?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>District: </b><?php echo $row['permanent_district']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Thana/UP:</b><?php echo $row['permanent_thana']?></h4>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-3">
				<h4><b>Union/City: </b><?php echo $row['permanent_union_city']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Village/Word: </b><?php echo $row['permanent_village']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Post office: </b><?php echo $row['permanent_postoffice']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Phone: </b><?php echo $row['permanent_contact']?></h4>
			</div>
		</div>
		<div class="row container-fluid">
			<h4 class="text-center text-info"><b><i><u>Previous Educational Information</u></i></b></h4>
		</div>
		<div class="row container-fluid">
			<div class="col-md-6">
				<h4><b>Institute: </b><?php echo $row['preinstitute']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Last class: </b><?php echo $row['lastclass']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Session: </b><?php echo $row['session_year']?></h4>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-3">
				<h4><b>Passing Year: </b><?php echo $row['passingyear']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Roll No: </b><?php echo $row['pre_roll_no']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>Reg. No: </b><?php echo $row['pre_reg_no']?></h4>
			</div>
			<div class="col-md-3">
				<h4><b>ID: </b><?php echo $row['pre_id']?></h4>
			</div>
		</div>
		<div class="row container-fluid">
			<div class="col-md-3">
				<h4><b>GPA/Mark: </b><?php echo $row['pre_gpa']?></h4>
			</div>
			<div class="col-md-9">
				<h4><b>Reason Leaving: </b><small><?php echo $row['reason_leaving']?></small></h4>
			</div>
		</div>
		<div class="row container-fluid">
			<h4 class="text-center text-success"><b><i><u>Admission Information</u></i></b></h4>
		</div>
		<div class="row container-fluid">
			<div class="col-md-12"><h4><b>I Want to Admitted in Class <?php echo $row['admission_class'].', '.$row['department_group'].' in '.$row['admission_institute'].'.'?></b></h4></div>
		</div>
	</div>