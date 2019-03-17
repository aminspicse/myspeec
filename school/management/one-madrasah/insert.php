<?php 
include '../three-four-madrasah/gpa_function.php';
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$classs = 'One';
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$admin_id = $_POST['admin_id'];
		$student_id = $_POST['student_id'];
		$department = "General";
		//Quran Mazid 
		$quran = $_POST['quran'];
		$quran_incourse = $_POST['quran_incourse'];
		//Arabic 
		$arabic = $_POST['arabic'];
		$arabic_incourse = $_POST['arabic_incourse'];
		//Fiqh & U.Fiqh 
		$aqaid = $_POST['aqaid'];
		$aqaid_incourse = $_POST['aqaid_incourse'];
		//Bangla
		$bangla = $_POST['bangla'];
		$bangla_incourse = $_POST['bangla_incourse'];
		//English
		$english = $_POST['english'];
		$english_incourse = $_POST['english_incourse'];
		//General MathMatic 
		$math = $_POST['math'];
		$math_incourse = $_POST['math_incourse'];
		
		// General knowledge arts and masnunna
		$gkam = $_POST['gkam'];
		$gkam_incourse = $_POST['gkam_incourse'];
		// Insert Time
		date_default_timezone_set("Asia/Dhaka");
		$insert_time = date("d-m-y h:i:s A");
		
		if(!empty($name) && !empty($roll) && !empty($classs) && !empty($year) && !empty($semester)){
			if($quran <= 100 and $quran_incourse <= 20){
				if($arabic <= 100 and $arabic_incourse <= 20){
					if($aqaid <= 100 and $aqaid_incourse <= 20){
						if($bangla <= 100 and $bangla_incourse <= 20){
							if($english <= 100 and $english_incourse <= 20){
								if($gkam <= 100 and $gkam_incourse <= 20){
									// Quran Mazid
									//$quran_check = check1($quran);
									$quran_parcent = $quran * 0.8;
									$quran_total = $quran_parcent + $quran_incourse;
									$quran_gpa = gpacal($quran_total);
									$quran_gread = greadcal($quran_total);
									$quran_status = status($quran_gpa);
									
									//Arabic 1st Paper
									//$arabic1st_check = check1($arabic1st);
									$arabic_parcent = $arabic * 0.8;
									$arabic_total = $arabic_parcent + $arabic_incourse;
									$arabic_gpa = gpacal($arabic_total);
									$arabic_gread = greadcal($arabic_total);
									$arabic_status = status($arabic_gpa);
											
									//Aqaid & Fiqh
									//$aqaid_check = check1($aqaid);
									$aqaid_parcent = $aqaid * 0.8;
									$aqaid_total = $aqaid_parcent + $aqaid_incourse;
									$aqaid_gpa = gpacal($aqaid_total);
									$aqaid_gread = greadcal($aqaid_total);
									$aqaid_status = status($aqaid_gpa);
									// Bangla
									//$bangla_check = check1($bangla);
									$bangla_parcent = $bangla * 0.8;
									$bangla_total = $bangla_incourse + $bangla_parcent;
									$bangla_gpa = gpacal($bangla_total);
									$bangla_gread = greadcal($bangla_total);
									$bangla_status = status($bangla_gpa);
									// English
									//$english_check = check1($english);
									$english_parcent = $english * 0.8;
									$english_total = $english_incourse + $english_parcent;
									$english_gpa = gpacal($english_total);
									$english_gread = greadcal($english_total);
									$english_status = status($english_gpa);
									// MathMatic
									//$math_check = check1($math);
									$math_parcent = $math * 0.8;
									$math_total = $math_incourse + $math_parcent;
									$math_gpa = gpacal($math_total);
									$math_gread = greadcal($math_total);
									$math_status = status($math_gpa);
									
									// Arts
									$gkam_parcent = $gkam * 0.8;
									$gkam_total = $gkam_incourse + $gkam_parcent;
									//$gkam_total_t = $gkam_total * 2;
									$gkam_gpa = gpacal($gkam_total);
									$gkam_gread = greadcal($gkam_total);
									$gkam_status = status($gkam_gpa);
									
									include 'failcount.php';
									$total_mark = $quran_total + $arabic_total + $aqaid_total + $bangla_total + $english_total + $math_total + $gkam_total;
									
									if($quran_gpa > 0 and $arabic_gpa > 0 and $aqaid_gpa > 0 and $bangla_gpa > 0 and $english_gpa > 0 and $math_gpa > 0 and $gkam_gpa > 0){
										$gpat = ($quran_gpa + $arabic_gpa + $aqaid_gpa + $bangla_gpa + $english_gpa + $math_gpa + $gkam_gpa) / 9;
									}else{
										$gpat = 0;
									}
									$gpa_r = round($gpat,2);
									$gpa = gpa_total($gpa_r);
									$gread = total_gread($gpa);
									$status = status($gpa);
									$sql = "INSERT INTO one_madrasah(admin_id, name, roll, student_id, classs, semester, year, department, quran, quran_parcent, quran_incourse, quran_total, quran_gpa, quran_gread, quran_status, arabic, arabic_parcent, arabic_incourse, arabic_total, arabic_gpa, arabic_gread, arabic_status, aqaid, aqaid_parcent, aqaid_incourse, aqaid_total, aqaid_gpa, aqaid_gread, aqaid_status, bangla, bangla_parcent, bangla_incourse, bangla_total, bangla_gpa, bangla_gread, bangla_status, english, english_parcent, english_incourse, english_total, english_gpa, english_gread, english_status, math, math_parcent, math_incourse, math_total, math_gpa, math_gread, math_status, gkam, gkam_parcent, gkam_incourse, gkam_total, gkam_gpa, gkam_gread, gkam_status, total_mark, gpa, gread, status, total_fail, insert_time) VALUES('$admin_id', '$name', '$roll', '$student_id', '$classs', '$semester', '$year', '$department', '$quran', '$quran_parcent', '$quran_incourse', '$quran_total', '$quran_gpa', '$quran_gread', '$quran_status', '$arabic', '$arabic_parcent', '$arabic_incourse', '$arabic_total', '$arabic_gpa', '$arabic_gread', '$arabic_status', '$aqaid', '$aqaid_parcent', '$aqaid_incourse', '$aqaid_total', '$aqaid_gpa', '$aqaid_gread', '$aqaid_status', '$bangla', '$bangla_parcent', '$bangla_incourse', '$bangla_total', '$bangla_gpa', '$bangla_gread', '$bangla_status', '$english', '$english_parcent', '$english_incourse', '$english_total', '$english_gpa', '$english_gread', '$english_status', '$math', '$math_parcent', '$math_incourse', '$math_total', '$math_gpa', '$math_gread', '$math_status', '$gkam', '$gkam_parcent', '$gkam_incourse', '$gkam_total', '$gkam_gpa', '$gkam_gread', '$gkam_status', '$total_mark', '$gpa', '$gread', '$status', '$total_fail', '$insert_time')";
									$result = mysqli_query($con, $sql);
									
									if($result == true){
										 $msg['success'] = 'Successfully Submit Result. <b>GPA : '.$gpa.', Grade : '.$gread.'and Status : '.$status.'</b>';
									}else{
										 $msg['error'] = 'Subjects Mark Accept Just Integer Number. Space, Semicolon and other Character is Not Accept. Please Check Again';
									}
								}else{
									$msg['error'] = '(Arts Yor Current Input Arts = ('.$gkam.') and Incourse = ('.$gkam_incourse.') You Must Entered Arts <= 50 and Incourse <= 10';
								}
									
							}else{
								$msg['error'] = "(English) Your Current Input English = (".$english.") and Incourse = (".$english_incourse.") You Must Entered English <= 100 and Incourse <= 20";
							}
						}else{
							$msg['error'] = "(Bangla) Your Current Input Bangla = (".$bangla.") and Incourse = (".$bangla_incourse.") You Must Entered Bangla <= 100 and Incourse <= 20";
						}
					}else{
						$msg['error'] = "(Aqaid) Your Current Input Aqaid = (".$aqaid.") and Incourse = (".$aqaid_incourse.") You Must Entered Aqaid <= 100 and Incourse <= 20";
					}
				}else{
					$msg['error'] = "(Arabic) Arabic = (".$arabic."), Incourse = (".$arabic_incourse.") You Must Entered Arabic <= 100, Incourse <= 20";
				}
			}else{
				$msg['error'] = "(Quran) Your Current Input Quran = (".$quran."), Incourse = (".$quran_incourse.")  You Must Entered Quran <= 100 and incourse <= 20";
			}
		}else{
			$msg['error'] = "Name, Roll, Semester and Year are Required";
		}
	}
	
	if(isset($msg['error'])){
		echo '<div class="text-center text-danger">'.$msg['error'].'</div>';
	}
	
	if(isset($msg['success'])){
		
		echo '<div class="text-center text-success">'.$msg['success'].'</div>';
	}