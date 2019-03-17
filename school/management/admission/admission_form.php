<?php
	include'../elements/simpleheader.php';
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$father_occupation = $_POST['father_occupation'];
		$annualincome = $_POST['annualincome'];
		$nid_bc = $_POST['nid_bc'];
		$dateofbirth = $_POST['dateofbirth'];
		$admission_date = $_POST['admission_date'];
		$gender = $_POST['gender'];
		$nationality = $_POST['nationality'];
		$religion = $_POST['religion'];
		$quota = $_POST['quota'];
		// Present Address
		$present_country = $_POST['present_country'];
		$present_division = $_POST['List1'];
		$present_district = $_POST['List2'];
		$present_thana = $_POST['List3'];
		$present_union_city = $_POST['present_union_city'];
		$present_village = $_POST['present_village'];
		$present_postoffice = $_POST['present_postoffice'];
		$present_contact = $_POST['present_contact'];
		// Permanent Address
		if(isset($_POST['same'])){
			$permanent_country = $_POST['present_country'];
			$permanent_division = $_POST['List1'];
			$permanent_district = $_POST['List2'];
			$permanent_thana = $_POST['List3'];
			$permanent_union_city = $_POST['present_union_city'];
			$permanent_village = $_POST['present_village'];
			$permanent_postoffice = $_POST['present_postoffice'];
			$permanent_contact = $_POST['present_contact'];
		}else{
			$permanent_country = $_POST['permanent_country'];
			$permanent_division = $_POST['permanent_division'];
			$permanent_district = $_POST['permanent_district'];
			$permanent_thana = $_POST['permanent_thana'];
			$permanent_union_city = $_POST['permanent_union_city'];
			$permanent_village = $_POST['permanent_village'];
			$permanent_postoffice = $_POST['permanent_postoffice'];
			$permanent_contact = $_POST['permanent_contact'];
		}
		// Previous Educational Information
		$preinstitute = $_POST['preinstitute'];
		$lastclass = $_POST['lastclass'];
		$session_year = $_POST['session'];
		$passingyear = $_POST['passingyear'];
		$pre_roll_no = $_POST['pre_roll_no'];
		$pre_reg_no = $_POST['pre_reg_no'];
		$pre_id = $_POST['pre_id'];
		$pre_gpa = $_POST['pre_gpa'];
		$reason_leaving = $_POST['reason_leaving'];
		
		// Admin Id 
		$admin_id = $ses['id'];
		
		// Admission Information
		$agriment = $_POST['agriment'];
		$admission_class = $_POST['admission_class'];
		$department_group = $_POST['department_group'];
		$admission_institute = $_POST['current_institute'];
		
		// Make Student ID
		$query = "SELECT * FROM admission WHERE admin_id = '$admin_id' ORDER BY id DESC";
		$exe = $conn->query($query);
		$row = $exe->fetch_assoc();
		$brd = $ses['board'];
		$dist = $ses['district_code'];
		$inst = $ses['institute_code'];
		$serial = ++$row['serial'];
		
		$student_id = $brd.$dist.$inst.$serial;
		
		//$student_photo = addslashes(file_get_contents($_FILES["student_photo"]["tmp_name"]));
		
		// Insert Time
		date_default_timezone_set("Asia/Dhaka");
		$insert_time = date("d-m-y h:i:s A");
		
		// Image Upload Starting
		$logu = $_FILES['student_photo']['name']; 
		$explogu = explode('.',$logu);
		$loguexptype = $explogu[1];
		date_default_timezone_set('Asia/Dhaka');
		$date = date('m/d/Yh:i:sa', time());
		$rand = rand(10000,99999);
		$encname = $date.$rand;
		$loguname = md5($encname).'.'.$loguexptype;
		$student_photo = "../../uploadimage/".$loguname;
		// Image Upload End
		
		if(!empty($name) and !empty($fname) and !empty($phone)){
			$sql = "INSERT INTO admission(admin_id, serial, student_id, name,fname, mname, email, phone, father_occupation, annualincome, nid_bc, dateofbirth, admission_date, gender, nationality, religion, quota, student_photo, present_country, present_division, present_district, present_thana, present_union_city, present_village, present_postoffice, present_contact, permanent_country, permanent_division, permanent_district, permanent_thana, permanent_union_city, permanent_village, permanent_postoffice, permanent_contact, preinstitute, lastclass, session_year, passingyear, pre_roll_no, pre_reg_no, pre_id, pre_gpa, reason_leaving, agriment, admission_class, department_group, admission_institute, insert_time)VALUES('$admin_id', '$serial', '$student_id', '$name', '$fname','$mname', '$email', '$phone', '$father_occupation', '$annualincome', '$nid_bc', '$dateofbirth', '$admission_date', '$gender', '$nationality', '$religion', '$quota', '$student_photo', '$present_country', '$present_division', '$present_district', '$present_thana', '$present_union_city', '$present_village', '$present_postoffice', '$present_contact', '$permanent_country', '$permanent_division', '$permanent_district', '$permanent_thana', '$permanent_union_city', '$permanent_village', '$permanent_postoffice', '$permanent_contact', '$preinstitute', '$lastclass', '$session_year', '$passingyear', '$pre_roll_no', '$pre_reg_no', '$pre_id', '$pre_gpa', '$reason_leaving', '$agriment', '$admission_class', '$department_group', '$admission_institute', '$insert_time')";
			$query = $conn->query($sql);
			if($query){
				$file = move_uploaded_file($_FILES["student_photo"]["tmp_name"],$student_photo);
				$msg['success'] =  "Your Admission Is Successfully Completed";
			}else{ 
				$msg['error'] = "Problem Your Admission Data or Database";
			}
		}else{
			$msg['error'] = "Name, F'Name, M'Name MustBe Entered";
		}
		
		
	}
		//$code = $ses['district_code'].$ses['institute_code'];
			//echo var_dump($code);
		$admin_id = $ses['id'];
		$query = "SELECT * FROM admission WHERE admin_id = '$admin_id' ORDER BY id DESC";
		$exe = $conn->query($query);
		$row = $exe->fetch_assoc();
		//$admin_id = $row['admin_id'];
		
?>
		<?php if($row == true) {?>
        <form action="" method="post" class="container-fluid" enctype="multipart/form-data">
			<div class="row container-fluid marquee">
				<h3 class="fixed-top"><marquee>Admission Form Must Fill-up Name, F'Name, M'Name, F'Occupation, F'Income, Date of Birth, Gender, Agriment. (Student Photo Upload must 300*300 pixel and <= 100 kb)</marquee></h3>
			</div>
		<div class="thumbnail" style="background-color:#f9eded">

			<div class="row" style="margin-top: -22px">
				<h3 class="text-center text-success">Admission Form</h3>
				<h3 class="text-center" style="margin-top:-13px"><?php echo $ses['school_name']?></h3>
			</div>
			<div class="row">
			
				<div class="col-md-9">
					<div class="col-md-6">
						<input type="text" name="name" required class="form-control" value="" placeholder="Name" /> <br>
					</div>
					<div class="col-md-6">
						<input type="text" name="fname" required class="form-control" placeholder="Father's Name"/><br>
					</div>
					<div class="col-md-6 box-margin">
						<input type="text" name="mname" required class="form-control" placeholder="Mother's Name"/><br>
					</div>
					<div class="col-md-6 box-margin">
						<input type="email" name="email" class="form-control" placeholder="Email ID (if any)"/><br>
					</div>
					<div class="col-md-6 box-margin">
						<input type="number" name="phone" required class="form-control" placeholder="Phone Number"/><br>
					</div>
					<div class="col-md-6 box-margin">
						<input type="text" name="father_occupation" required class="form-control" placeholder="Father's Occupation"/><br>					
					</div>
					<div class="col-md-6 box-margin">
						<input type="number" name="annualincome" class="form-control" maxlength="17" placeholder="Annual Income"/>
					</div>
					<div class="col-md-6 box-margin">
						<input type="number" name="nid_bc" class="form-control" maxlength="17" placeholder="NID/Birth Certificate No"/>
					</div>
					<div class="col-md-6">
						<span class="badge text-success">Date of Birth</span>
						<input type="date" name="dateofbirth" required class="form-control"/>
					</div>
					<div class="col-md-6">
						<span class="badge badge-info">Admission Date</span>
						<input type="date" name="admission_date" required class="form-control"/>
					</div>
					<div class="col-md-3 box-margin1">
						<select name="gender" required id="" class="form-control">
							<option>Gender</option>
							<option value="Mail">Mail</option>
							<option value="Femail">Femail</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="col-md-3 box-margin1">
						<select name="nationality" required id="" class="form-control">
							<option>Nationality</option>
							<option value="Bangladeshi">Bangladeshi</option>
							<option value="Indian">Indian</option>
						</select>
					</div>
					<div class="col-md-3 box-margin1">
						<select name="religion" required id="" class="form-control"> 
							<option>Religion</option>
							<option value="Islam">Islam</option>
							<option value="Hindu">Hindu</option>
							<option value="Buddo">Buddo</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="col-md-3 box-margin1">
						<select name="quota" id="" class="form-control">
							<option>Quota</option>
							<option value="None Quota">None Quota</option>
							<option value="Freedom Fighter">Freedom Fighter</option>
							<option value="Answar B.D.P">Answar B.D.P</option>
							<option value="Other">Other</option>
							
						</select>
					</div>
				</div>
				<div class="col-md-3" >
						<!-- bootstrap-imageupload. -->
						<div class="imageupload panel panel-default">
							
							<div class="file-tab panel-body" style="height:264px; width:300px; margin-left: -10px; margin-top: -12px;">
								<label class="btn btn-default btn-file" >
									<span>Browse</span>
									<!-- The file is stored here. -->
									<input type="file" name="student_photo" id="image">
								</label>
								<button type="button" class="btn btn-default">Remove</button>
							</div>
							
						</div>	
				</div>
			</div>
		</div>
		<div class="thumbnail" style="background-color:#F7F5F4">
			<h3 class="text-center box-margin address">Present Address</h3>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<select name="present_country" id="" class="form-control">
							<option>Select Current Country</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="India">India</option>
							<option value="USA">USA</option>
							<option value="UK">UK</option>
							<option value="Canada">Canada</option>
							<option value="Katar">Katar</option>
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<select name="List1" id="" class="form-control" onchange="fillSelect(this.value,this.form['List2'])">
						<option selected>Select Division</option>
						<!-- <option value="Dhaka">Dhaka</option>
						<option value="Mymensingh">Mymensingh</option>
						<option value="Chittagonj">Chittagonj</option>
						<option value="Borisal">Borisal</option>
						<option value="Kulna">Kulna</option>
						<option value="Rajsahi">Rajsahi</option>
						<option value="Ranjpur">Ranjpur</option>
						<option value="Sylhet">Sylhet</option> -->
					</select>
				</div>
				<div class="col-md-3">
					<select name='List2' class="form-control" onchange="fillSelect(this.value,this.form['List3'])">
						<option selected>Select Your Distric</option>
					</select>
				</div>
				<div class="col-md-3">
					<select name='List3' class="form-control" onchange="getValue(this.value)">
						<option selected >Select Your Thana/Upazila</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 box-margin">
					<input type="text" name="present_union_city" class="form-control" placeholder="Union/City" />
				</div>
				<div class="col-md-3 box-margin">
					<input type="text" name="present_village" class="form-control" placeholder="word/village" />
				</div>
				<div class="col-md-3 box-margin">
					<input type="text" name="present_postoffice" class="form-control" placeholder="Post office(with Code no)" />
				</div>
				<div class="col-md-3 box-margin">
					<input type="text" name="present_contact" class="form-control" placeholder="Contact No" />
				</div>
			</div>
		</div>
		
		<div class="thumbnail" style="background-color:#F0EEF6">
			<h3 class="text-center address">Permanent Address <small>(Same <input type="checkbox" id="check" name="same" onclick="showhide()">)</small></h3>
			<div id="same">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<select name="permanent_country" id="" class="form-control">
								<option>Select Current Country</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="India">India</option>
								<option value="USA">USA</option>
								<option value="UK">UK</option>
								<option value="Canada">Canada</option>
								<option value="Katar">Katar</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<select name="permanent_division" id="" class="form-control">
							<option>Select Division</option>
							<option value="Dhaka">Dhaka</option>
							<option value="Mymensingh">Mymensingh</option>
							<option value="Chittagonj">Chittagonj</option>
							<option value="Borisal">Borisal</option>
							<option value="Kulna">Kulna</option>
							<option value="Rajsahi">Rajsahi</option>
							<option value="Ranjpur">Ranjpur</option>
							<option value="Sylhet">Sylhet</option>
						</select>
					</div>
					<div class="col-md-3">
						<input type="text" name="permanent_district" class="form-control" placeholder="District" />
					</div>
					<div class="col-md-3">
						<input type="text" name="permanent_thana" class="form-control" placeholder="Tana/Upozila" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 box-margin">
						<input type="text" name="permanent_union_city" class="form-control" placeholder="Union/City" />
					</div>
					<div class="col-md-3 box-margin">
						<input type="text" name="permanent_village" class="form-control" placeholder="Word/village" />
					</div>
					<div class="col-md-3 box-margin">
						<input type="text" name="permanent_postoffice" class="form-control" placeholder="Post office(with Code no)" />
					</div>
					<div class="col-md-3 box-margin">
						<input type="text" name="permanent_contact" class="form-control" placeholder="Contact No" />
					</div>
				</div>
			</div>
			
			<h4 id="pre_par" class="text-center text-danger" style="display:none">Present address and Permanent Address is Same</h4>
		</div>
		
		<div class="thumbnail" style="background-color:#E8E8E3">
			<h3 class="text-center address">Previous Educational Information <small>(if any)</small></h3>
			<div class="row">
				<div class="col-md-4"> 
					<input type="text" name="preinstitute" class="form-control" placeholder="Institute Name" />
					<!-- <select name="" id="" class="form-control">
						<option>Institute Name</option>
						<option value="Sylhet Polytechnic Institute">Sylhet Polytechnic INstitute</option>
						<option value="Dhaka Polytechnic Institute">Dhaka Polytechnic INstitute</option>
						<option value="Mymensingh Polytechnic Institute">Mymensingh Polytechnic INstitute</option>
						<option value="Bogra Polytechnic Institute">Bogra Polytechnic INstitute</option>
						<option value="Hobigonj Polytechnic Institute">Hobigonj Polytechnic INstitute</option>
					</select> -->
				</div>
				<div class="col-md-2">
					<select name="lastclass" id="" class="form-control">
						<option>Last Class</option>
						<option value="PSC">PSC</option>
						<option value="DPE">DPE</option>
						<option value="JSC">JSC</option>
						<option value="JDC">JDC</option>
						<option value="SSC">SSC</option>
						<option value="Dakil">Dakil</option>
						<option value="Alim">Alim</option>
						<option value="HSC">HSC</option>
						<option value="One">One</option>
						<option value="Two">Two</option>
						<option value="Three">Three</option>
						<option value="Four">Four</option>
						<option value="Five">Five</option>
						<option value="Six">Six</option>
						<option value="Seven">Seven</option>
						<option value="Eight">Eight</option>
						<option value="Nine">Nine</option>
						<option value="Ten">Ten</option>
						<option value="HSC 1st Year">HSC 1<sup>st</sup> Year</option>
						<option value="HSC 2nd Year">HSC 2<sup>nd</sup> Year</option>
					</select>
				</div>
				<div class="col-md-2">
					<select name="session" id="" class="form-control">
						<option>Session or Year</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
						<option value="2004-2005">2004-2005</option>
						<option value="2005-2006">2005-2006</option>
						<option value="2006-2007">2006-2007</option>
						<option value="2007-2008">2007-2008</option>
						<option value="2008-2009">2008-2009</option>
						<option value="2009-2010">2009-2010</option>
						<option value="2010-11">2010-11</option>
						<option value="2011-12">2011-12</option>
						<option value="2012-13">2012-13</option>
						<option value="2013-14">2013-14</option>
						<option value="2014-15">2014-15</option>
						<option value="2015-16">2015-16</option>
						<option value="2016-17">2016-17</option>
					</select>
				</div>
				<div class="col-md-2">
					<select name="passingyear" id="" class="form-control">
						<option>Passing Year</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="Running">Running</option>
					</select>
				</div>
				<div class="col-md-2">
					<input type="text" name="pre_roll_no" class="form-control" placeholder="Roll No" />
				</div>
			</div><br>
			
			<div class="row">
				<div class="col-md-2 box-margin">
					<input type="text box-margin" name="pre_reg_no" class="form-control" placeholder="Registration No" />
				</div>
				<div class="col-md-2 box-margin">
					<input type="text" name="pre_id" class="form-control" placeholder="Student ID (If any)" />
				</div>
				<div class="col-md-2 box-margin">
					<input type="text" name="pre_gpa" class="form-control" placeholder="GPA/Mark" />
				</div>
				<div class="col-md-6 box-margin">
					<input type="text" name="reason_leaving" class="form-control" placeholder="Reason for Leaving This Institute" />
				</div>
			</div>
		</div>
		<div class="thumbnail" style="background-color:#f9f7f7">
			<h3 class="text-center address">Current Educational Information</h3>
			<div class="row">
				<div class="col-md-3">
					<h4><input type="checkbox" name="agriment" required class="" />I want to admitted at Class</h4> 
				</div>
				<div class="col-md-2">
					<select name="admission_class" required id="" class="form-control">
						<option value="None">None</option>
						<option value="Play">Play</option>
						<option value="Nursari">Nursari</option>
						<option value="One">One</option>
						<option value="Two">Two</option>
						<option value="Three">Three</option>
						<option value="Four">Four</option>
						<option value="Five">Five</option>
						<option value="Six">Six</option>
						<option value="Seven">Seven</option>
						<option value="Eight">Eight</option>
						<option value="Nine">Nine</option>
						<option value="Ten">Ten</option>
						<option value="Alim">Alim</option>
						<option value="Fazil">Fazil</option>
						<option value="Alim">Kamil</option>
						<option value="HSC 1st Year">HSC 1<sup>st</sup> Year</option>
						<option value="HSC 2nd Year">HSC 2<sup>nd</sup> Year</option>
					</select>
				</div>
				<div class="col-md-3">
					<select name="department_group" id="" class="form-control">
						<option>Group/Department</option>
						<option value="Science">Science</option>
						<option value="Humanity">Humanity</option>
						<option value="General">General</option>
						<option value="Commarce">Commarce</option>
						<option value="Computer">Computer</option>
						<option value="None">None</option>
					</select>
				</div>
				<div class="col-md-4">
					<input type="text" name="current_institute" required value="<?php echo $ses['school_name']?>" class="form-control" placeholder="Institute Name"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				<button class="btn btn-lg btn-block btn-info">Update</button>
			</div>
			<div class="col-md-3">
				<input type="submit" class="btn btn-lg btn-block btn-success" onclick="clicked()" name="submit" value="Submit"/>
			</div>
			<div class="col-md-3">
				
			</div>
		</div><br>
		</form>
		<?php } else{ 
			if(isset($_POST['send'])){
				$admin_id = $_POST['admin_id'];
				$serial = $_POST['serial'];
				$ses_id = $ses['id'];
				$sl = 100000;
				if($ses_id == $admin_id and $sl == $serial){
					$sql3 = "INSERT INTO admission(admin_id,serial)VALUES('$admin_id','$serial')";
					$conn->query($sql3);
				}else{
					echo"Admin Code or Serial Key is Incorrect";
				}
			}
		?>
			<form action="" method="post" class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<input type="number" name="admin_id" class="form-control" placeholder="Admin Code" />
					</div>
					<div class="col-md-4">
						<input type="number" name="serial" class="form-control" placeholder="Form Activation Code" />
					</div>
					<div class="col-md-3">
						<input type="submit" name="send" value="Active Account" class="btn btn-success"/>
					</div>
			</form>
		<?php }?>
		<link rel="stylesheet" href="admission_form.css" />
        <script src="../js/jquery3.1.1.js"></script>
        <script src="../js/bootstrap.min.js" ></script>
        <script src="../register/location.js" ></script>
        <script src="../register/image_upload_plugin/dist/js/bootstrap-imageupload.js"></script>

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
			
			function showhide(){
				if(document.getElementById('check').checked == true){
					document.getElementById('same').style.display='none';
					//document.getElementById('pre_par').innerHTML = "Present address and Permanent Address is Same";
					document.getElementById('pre_par').style.display="block";
				}else{
					document.getElementById('same').style.display ='block';
					document.getElementById('pre_par').style.display ='none';
				}
			}
			
			function clicked(){
				
				alert("Are you Sure All Information is True");
			}
        </script>

    </body>

</html>
