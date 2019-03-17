<?php 
include '../three-four-madrasah/gpa_function.php';
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$classs = 'Play';
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$admin_id = $_POST['admin_id'];
		$student_id = $_POST['student_id'];
		$department = "General";
		
		//Arabic 
		$arabic = $_POST['arabic'];
		$arabic_incourse = $_POST['arabic_incourse'];
		
		//Bangla
		$bangla = $_POST['bangla'];
		$bangla_incourse = $_POST['bangla_incourse'];
		//English
		$english = $_POST['english'];
		$english_incourse = $_POST['english_incourse'];
		//General MathMatic 
		$math = $_POST['math'];
		$math_incourse = $_POST['math_incourse'];
		
		//General MathMatic 
		$arts = $_POST['arts'];
		$arts_incourse = $_POST['arts_incourse'];
		// Insert Time
		date_default_timezone_set("Asia/Dhaka");
		$insert_time = date("d-m-y h:i:s A");
		
		if(!empty($name) && !empty($roll) && !empty($classs) && !empty($year) && !empty($semester)){
			if($arabic <= 100 and $arabic_incourse <= 20){
				if($math <= 100 and $math_incourse <= 20){
					if($bangla <= 100 and $bangla_incourse <= 20){
						if($english <= 100 and $english_incourse <= 20){
							if($arts <= 50 and $arts_incourse <= 10){
								
								//Arabic
								//$arabic1st_check = check1($arabic1st);
								$arabic_parcent = $arabic * 0.8;
								$arabic_total = $arabic_parcent + $arabic_incourse;
								$arabic_gpa = gpacal($arabic_total);
								$arabic_gread = greadcal($arabic_total);
								$arabic_status = status($arabic_gpa);
								
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
								$arts_parcent = $arts * 0.8;
								$arts_total = $arts_incourse + $arts_parcent;
								$arts_total_t = $arts_total * 2;
								$arts_gpa = gpacal($arts_total_t);
								$arts_gread = greadcal($arts_total_t);
								$arts_status = status($arts_gpa);
								
								include 'failcount.php';
								
								$total_mark = $arabic_total + $bangla_total + $english_total + $math_total + $arts_total;
								
								if($arabic_gpa > 0 && $bangla_gpa > 0 && $english_gpa > 0 && $math_gpa > 0 && $arts_gpa > 0){
									$gpat = ($arabic_gpa + $bangla_gpa + $english_gpa + $math_gpa + $arts_gpa) / 5;
								}else{
									$gpat = 0;
								}
								$gpa_r = round($gpat,2);
								$gpa = gpa_total($gpa_r);
								$gread = total_gread($gpa);
								$status = status($gpa);
								$sql = "INSERT INTO play_madrasah(admin_id, name, roll, student_id, classs, semester, year, department, arabic, arabic_parcent, arabic_incourse, arabic_total, arabic_gpa, arabic_gread, arabic_status, bangla, bangla_parcent, bangla_incourse, bangla_total, bangla_gpa, bangla_gread, bangla_status, english, english_parcent, english_incourse, english_total, english_gpa, english_gread, english_status, math, math_parcent, math_incourse, math_total, math_gpa, math_gread, math_status, arts, arts_parcent, arts_incourse, arts_total, arts_gpa, arts_gread, arts_status, total_mark, gpa, gread, status, total_fail, insert_time) VALUES('$admin_id', '$name', '$roll', '$student_id', '$classs', '$semester', '$year', '$department', '$arabic', '$arabic_parcent', '$arabic_incourse', '$arabic_total', '$arabic_gpa', '$arabic_gread', '$arabic_status', '$bangla', '$bangla_parcent', '$bangla_incourse', '$bangla_total', '$bangla_gpa', '$bangla_gread', '$bangla_status', '$english', '$english_parcent', '$english_incourse', '$english_total', '$english_gpa', '$english_gread', '$english_status', '$math', '$math_parcent', '$math_incourse', '$math_total', '$math_gpa', '$math_gread', '$math_status', '$arts', '$arts_parcent', '$arts_incourse', '$arts_total', '$arts_gpa', '$arts_gread', '$arts_status', '$total_mark', '$gpa', '$gread', '$status', '$total_fail', '$insert_time')";
								$result = mysqli_query($con, $sql);
								
								if($result == true){
									$msg['success'] = 'Successfully Submit Result. <b>GPA : '.$gpa.', Grade : '.$gread.'and Status : '.$status.'</b>';
								}else{
									$msg['error'] = 'Subjects Mark Accept Just Integer Number. Space, Semicolon and other Character is Not Accept. Please Check Again';
								}
							}else{
								$msg['error'] = '(Arts Yor Current Input Arts = ('.$arts.') and Incourse = ('.$arts_incourse.') You Must Entered Arts <= 50 and Incourse <= 10';
							}
								
						}else{
							$msg['error'] = "(English) Your Current Input English = (".$english.") and Incourse = (".$english_incourse.") You Must Entered English <= 100 and Incourse <= 20";
						}
					}else{
						$msg['error'] = "(Bangla) Your Current Input Bangla = (".$bangla.") and Incourse = (".$bangla_incourse.") You Must Entered Bangla <= 100 and Incourse <= 20";
					}
				}else{
					$msg['error'] = "(Mathmatic) Your Current Input Math = (".$math."), Incourse = (".$math_incourse.")  You Must Entered Math <= 100 and incourse <= 20";
				}
			}else{
				$msg['error'] = "(Arabic) Arabic = (".$arabic."), Incourse = (".$arabic_incourse.") You Must Entered Arabic <= 100, Incourse <= 20";
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