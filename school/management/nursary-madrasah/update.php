<?php 
include '../three-four-madrasah/gpa_function.php';
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$classs = 'Nursary';
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$admin_id = $_POST['admin_id'];
		$student_id = $_POST['student_id'];
		$department = "General";
		$semester_id = $_POST['semester_id'];
		
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
		
		// Masnunnah/Islamic Study
		//$ms_is = $_POST['ms_is'];
		$ms_is_mark = $_POST['ms_is_mark'];
		$ms_is_incourse = $_POST['ms_is_incourse'];
		
		//General MathMatic 
		$arts = $_POST['arts'];
		$arts_incourse = $_POST['arts_incourse'];
		// Insert Time
		date_default_timezone_set("Asia/Dhaka");
		$last_update = date("d-m-y h:i:s A");
		
		if(!empty($name) && !empty($roll) && !empty($classs) && !empty($year) && !empty($semester)){
			if($arabic <= 100 and $arabic_incourse <= 20){
				if($math <= 100 and $math_incourse <= 20){
					if($ms_is_mark <= 50 and $ms_is_incourse <= 10){
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
									
									// Masnunnah/Islamic Study
									$ms_is_parcent = $ms_is_mark * 0.8;
									$ms_is_total = $ms_is_incourse + $ms_is_parcent;
									$ms_is_total_t = $ms_is_total * 2;
									$ms_is_gpa = gpacal($ms_is_total_t);
									$ms_is_gread = greadcal($ms_is_total_t);
									$ms_is_status = status($ms_is_gpa);
									
									// Arts
									$arts_parcent = $arts * 0.8;
									$arts_total = $arts_incourse + $arts_parcent;
									$arts_total_t = $arts_total * 2;
									$arts_gpa = gpacal($arts_total_t);
									$arts_gread = greadcal($arts_total_t);
									$arts_status = status($arts_gpa);
									
									include 'failcount.php';
									
									$total_mark = $arabic_total + $bangla_total + $english_total + $math_total + $ms_is_total + $arts_total;
									
									if($arabic_gpa > 0 && $bangla_gpa > 0 && $english_gpa > 0 && $math_gpa > 0 && $ms_is_gpa > 0 && $arts_gpa > 0){
										$gpat = ($arabic_gpa + $bangla_gpa + $english_gpa + $math_gpa + $ms_is_gpa + $arts_gpa) / 6;
									}else{
										$gpat = 0;
									}
									$gpa_r = round($gpat,2);
									$gpa = gpa_total($gpa_r);
									$gread = total_gread($gpa);
									$status = status($gpa);
									$sql = "UPDATE nursary_madrasah SET name = '$name', roll = '$roll', student_id = '$student_id', classs = '$classs', semester = '$semester', year = '$year', arabic = '$arabic', arabic_parcent = '$arabic_parcent', arabic_incourse = '$arabic_incourse', arabic_total = '$arabic_total', arabic_gpa = '$arabic_gpa', arabic_gread = '$arabic_gread', arabic_status = '$arabic_status', bangla = '$bangla', bangla_parcent = '$bangla_parcent', bangla_incourse = '$bangla_incourse', bangla_total = '$bangla_total', bangla_gpa = '$bangla_gpa', bangla_gread = '$bangla_gread', bangla_status = '$bangla_status', english = '$english', english_parcent = '$english_parcent', english_incourse = '$english_incourse', english_total = '$english_total', english_gpa = '$english_gpa', english_gread = '$english_gread', english_status =  '$english_status', math = '$math', math_parcent = '$math_parcent', math_incourse = '$math_incourse', math_total = '$math_total', math_gpa = '$math_gpa', math_gread = '$math_gread', math_status = '$math_status', ms_is_mark = '$ms_is_mark', ms_is_parcent = '$ms_is_parcent', ms_is_incourse = '$ms_is_incourse', ms_is_total = '$ms_is_total', ms_is_gpa = '$ms_is_gpa', ms_is_gread = '$ms_is_gread', ms_is_status = '$ms_is_status', arts = '$arts', arts_parcent = '$arts_parcent', arts_incourse = '$arts_incourse', arts_total = '$arts_total', arts_gpa = '$arts_gpa', arts_gread = '$arts_gread', arts_status = '$arts_status', total_mark = '$total_mark', gpa = '$gpa', gread = '$gread', status = '$status', total_fail = '$total_fail', last_update = '$last_update' WHERE id = '$semester_id'";
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
						$msg['error'] = "(Masnunnah) Your Current Input Mark = (".$ms_is_mark.") and Incourse = (".$ms_is_incourse.") You Must Entered Mark <= 50 and Incourse <= 20";
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