<?php 
	/*$conn = new mysqli("localhost","root","","management");
	if($conn->connect_error){
		die("Connection Error".$conn->connect_error);
	}*/
	include '../config/db_connection.php';
	if(isset($_POST['submit'])){
		$school_name = $_POST['institute_name'];
		$email = $_POST['email'];
		$password = sha1($_POST['password']);
		$repassword = sha1($_POST['repassword']);
		$backup = $_POST['password'];
		$head_name = $_POST['namehead'];
		$head_phone = $_POST['phonehead'];
		$admin_name = $_POST['admin'];
		$admin_phone = $_POST['adminphone'];
		$establish_date = $_POST['establishdate'];
		$institute_code = $_POST['institute_code'];
		$institute_ein = $_POST['institute_ein'];
		$board = $_POST['board'];
		$total_student = $_POST['total_student'];
		$division = $_POST['List1'];
		$district = $_POST['List2'];
		$district_code = $_POST['district_code'];
		$thana = $_POST['List3'];
		$postoffice = $_POST['postoffice'];
		$postcode = $_POST['postcode'];
		$institute_type = $_POST['institute_type'];
		$history = $_POST['history'];
		// Insert Time
		date_default_timezone_set("Asia/Dhaka");
		$create_time = date("d-m-y h:i:s A");
		// Logu Upload Starting
		$logu = $_FILES['logu']['name']; 
		$explogu = explode('.',$logu);
		$loguexptype = $explogu[1];
		date_default_timezone_set('Asia/Dhaka');
		$date = date('m/d/Yh:i:sa', time());
		$rand = rand(10000,99999);
		$encname = $date.$rand;
		$loguname = md5($encname).'.'.$loguexptype;
		$institute_logu = "../../uploadimage/".$loguname;
		// Logu Upload End
		
		//$institute_logu = addslashes(file_get_contents($_FILES["logu"]["tmp_name"]));
		$institute_licence = addslashes(file_get_contents($_FILES["licencephoto"]["tmp_name"]));
		$institute_head = addslashes(file_get_contents($_FILES["headphoto"]["tmp_name"]));
		//$software_admin = addslashes(file_get_contents($_FILES["software_admin"]["tmp_name"]));
		
		if(!empty($school_name) and !empty($email) and !empty($password) and !empty($admin_name) and !empty($institute_code) and !empty($board) and !empty($district_code) and !empty($institute_logu)){
			if($password == $repassword){
				$query = "SELECT email FROM admin_teachers WHERE email = '$email'";
				$exe = $conn->query($query);
				$check_email = $exe->fetch_assoc();
				if(!$check_email){
					$file = move_uploaded_file($_FILES["logu"]["tmp_name"],$institute_logu);
					$sql = "INSERT INTO admin_teachers(school_name, email, password, head_name, head_phone, admin_name, admin_phone, establish_date, institute_code, institute_ein, board, total_student, division, district, district_code, thana, postoffice, postcode, institute_type, history, institute_logu, institute_licence, institute_head, backup, create_time)VALUES('$school_name', '$email', '$password', '$head_name', '$head_phone', '$admin_name', '$admin_phone', '$establish_date', '$institute_code', '$institute_ein', '$board', '$total_student', '$division', '$district', '$district_code', '$thana', '$postoffice', '$postcode', '$institute_type', '$history', '$institute_logu', '$institute_licence', '$institute_head', '$backup', '$create_time')";
					$result = $conn->query($sql);
					if($result){
						$msg['success'] = 'Your Account has been Created Successfull <a class="btn btn-success" href="../index.php">Login Your Account</a>';
					}else{
						$msg['error'] = "Problem".$conn->connect_error;
					}
				}else{
					$msg['error'] = $email." is already Taken Please try another email";
				}
			}else{
				$msg['error'] = "Password Doesn't Match Please Try Again!";
			}
		}else{
			$msg['error'] = "Some Field are Required";
		}
		
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
		<link href="image_upload_plugin/dist/css/bootstrap-imageupload.css" rel="stylesheet">
		<!-- <link type="text/css" rel="stylesheet" href="register.css"> -->
		<script type="text/javascript" src="../js/jquery.js"> </script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="register.js"></script>
		<script type="text/javascript" src="location.js"></script>
	</head>
	<body class="container-fluid" style="background:#eee">
		<div class="row container-fluid">
			<?php if (isset($msg['error'])) { ?>
				<div class="alert alert-danger">
					<h3 class="text-center"><?php echo $msg['error']  . "!" ?></h3>
				</div>
			<?php } ?>
			
			<?php if(isset($msg['success'])) { ?>
				<div class="alert alert-success">
					<h3 class="text-center"><?php echo $msg['success'] ?></h3>
				</div>
			<?php } ?>
		</div>
		<form name="" method="post" class="" action="" enctype="multipart/form-data">
			<div class="thumbnail" style="background:#f5f5f5">
				<div class="row">
					<div class="panel-heading">
						<h3 class="text-center text-info">Registration Form of Online School Management System</h3>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-6">
						<div class="form-group">
							<input id="sname" name="institute_name" placeholder="Institute Name" class="form-control" type="text" >
							<span id="error_sname" class="text-danger"></span>
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input id="email" name="email" placeholder="User Email" class="form-control" type="email" data-validation="email">
							<span id="error_email" class="text-danger"></span>
						</div>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-6">
						<div class="form-group">
							<input id="password" name="password" placeholder="Password (Password Must Capital Small and Numeric Character)" class="form-control" type="password">
							<span id="error_password" class="text-danger"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input id="repassword" placeholder="Re-Enter Password" name="repassword" class="form-control" type="password">
							<span id="error_repassword" class="text-danger"></span>
						</div>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-6">
						<div class="form-group">
							<input id="ceo" name="namehead" placeholder="Name of Institute Head"  class="form-control" type="text" >
							<span id="error_ceo" class="text-danger"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="phonehead" id="phone" placeholder="Phone Number of Institute Head" class="form-control" >
							<span id="error_phone" class="text-danger"></span>
						</div>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-6">
						<div class="form-group">
							<input id="admin" name="admin" placeholder="Admin Name (Who Person Use This Software)"  class="form-control" type="text" >
							<span id="error_admin" class="text-danger"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="adminphone" id="phone" placeholder="Admin Phone Number" class="form-control" >
							<span id="error_phone" class="text-danger"></span>
						</div>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" name="establishdate" id="dob" placeholder="Date of Established (Like 12-12-1995)" class="form-control" >
							<span id="error_dob" class="text-danger"></span>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="institute_code" id="code" placeholder="Institute Code" required class="form-control" >
							<span id="error_code" class="text-danger"></span>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="institute_ein" id="ein" placeholder="Institute EIN" required class="form-control" >
							<span id="error_ein" class="text-danger"></span>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<select name="board" id="" required class="form-control">
								<option>Board</option>
								<option value="1">Dhaka</option>
								<option value="2">Chittagong</option>
								<option value="3">Rajshahi</option>
								<option value="4">Comilla</option>
								<option value="5">Sylhet</option>
								<option value="6">Barishal</option>
								<option value="7">Dinajpur</option>
								<option value="8">Jessor</option>
								<option value="9">Mymensingh</option>
								<option value="10">Madrasah</option>
								<option value="11">Technical</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="number" name="total_student" id="total_student" required placeholder="Total Student" class="form-control" >
							<span id="error_total" class="text-danger"></span>
						</div>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-2">
						<select name='List1' class="form-control" required onchange="fillSelect(this.value,this.form['List2'])">
							<option selected >Division</option>
						</select>
					</div>
					<div class="col-md-2">
						<select name='List2' class="form-control" required onchange="fillSelect(this.value,this.form['List3'])">
							<option selected >District</option>
						</select>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="text" name="district_code" required class="form-control" placeholder="District Code" />
						</div>
					</div>
					<div class="col-md-2">
						<select name='List3' class="form-control" required onchange="getValue(this.value)">
							<option selected >Thana/Upazila</option>
						</select>
					</div>
					<div class="col-md-3">
						<input type="text" name="postoffice" required class="form-control" placeholder="Post office" />
					</div>
					<div class="col-md-1">
						<input type="text" name="postcode" required class="form-control" placeholder="Code" />
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-3">
						<select name="institute_type" id="" class="form-control">
							<option>Institute Type</option>
							<option value="High School">High School</option>
							<option value="College">College</option>
							<option value="School and College">School and College</option>
							<option value="Dakhil Madrasah">Dakhil Madrasah</option>
							<option value="Technical School">Technical School</option>
							<option value="Technical School and College">Technical School and College</option>
							<option value="Primary School">Primary School</option>
							<option value="Others">Others</option>
						</select>
					</div>
					<div class="col-md-9">
						<input type="text" name="history" class="form-control" placeholder="History of Institute" />
					</div>
				</div>
				<div class="row container-fluid">
					<!-- image upload start-->
					<div class="col-md-4" >
						<!-- bootstrap-imageupload. -->
						<caption class="text-danger"><h4 class="text-center text-danger">Institute Logu</h4></caption>
						<div class="imageupload panel panel-default">
							<div class="file-tab panel-body" >
								<label class="btn btn-default btn-file" >
									<span>Browse</span>
									<!-- The file is stored here. -->
									<input type="file" name="logu" id="image">
								</label>
								<button type="button" class="btn btn-default">Remove</button>
							</div>
							
						</div>	
					</div>
					<div class="col-md-4" >
					<caption class="text-danger"><h4 class="text-center text-danger">Photo of Institute</h4></caption>
						<div class="imageupload panel panel-default">
							
							<div class="file-tab panel-body" >
								<label class="btn btn-default btn-file" >
									<span>Browse</span>
									<!-- The file is stored here. -->
									<input type="file" name="licencephoto" id="image">
								</label>
								<button type="button" class="btn btn-default">Remove</button>
							</div>
							
						</div>	
					</div>
					
					<div class="col-md-4" >
					<caption class="text-danger"><h4 class="text-center text-danger">Photo Admin of This Software</h4></caption>
						<div class="imageupload panel panel-default">
							<div class="file-tab panel-body" >
								<label class="btn btn-default btn-file" >
									<span>Browse</span>
									<!-- The file is stored here. -->
									<input type="file" name="headphoto" id="image">
								</label>
								<button type="button" class="btn btn-default">Remove</button>
							</div>
							
						</div>	
					</div><!-- image upload end-->
				</div>
							
				<div class="row">
					<div class="col-md-4 pull-left need-help"><a href="../index.php"><h4>Login</h4></a></div>
					<div class="col-md-4">
						<button id="submit" type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
					</div>
					<div class="col-md-2 col-md-offset-2 pull-right need-help"><h4><a href="help.php">Need Help?</a></h4></div>
				</div>
				</br>
				
			</div>
		</form>

	<!-- Image Upload Down-->
		 <script src="image_upload_plugin/dist/js/bootstrap-imageupload.js"></script>
		<script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
			
			//image upload
			
			$(document).ready(function(){ 
	$('#insert').click(function(){ 
	var image_name = $('#image').val(); 
	if(image_name == '') { 
		alert("Please Select Image"); 
		return false; 
	} else { 
	var extension = $('#image').val().split('.').pop().toLowerCase(); 
	if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){ 
		alert('Invalid Image File'); 
		$('#image').val(''); 
		return false; 
	} 
	} 
	}); 
 });
        </script>
		
	</body>
</html>