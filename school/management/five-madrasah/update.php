<?php 
include '../three-four-madrasah/gpa_function.php';
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$classs = 'Five';
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$admin_id = $_POST['admin_id'];
		$student_id = $_POST['student_id'];
		$semester_id  = $_POST['semester_id'];
		$department = "General";
		
		//Quran Mazid  and Aqaid 
		$quran_aqaid = $_POST['quran_aqaid'];
		$quran_aqaid_incourse = $_POST['quran_aqaid_incourse'];
		//Arabic 1st and 2nd  paper
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
		//Science and  Bangladesh & Global Study
		$science_bgs = $_POST['science_bgs'];
		$science_bgs_incourse = $_POST['science_bgs_incourse'];
 
		// Upadate Time
		date_default_timezone_set("Asia/Dhaka");
		$last_update = date("d-m-y h:i:s A");
		
		if(!empty($name) && !empty($roll) && !empty($classs) && !empty($year) && !empty($semester)){
			if($quran_aqaid <= 100 and $quran_aqaid_incourse <= 20){
				if($arabic <= 100 and $arabic_incourse <= 20){
					if($bangla <= 100 and $bangla_incourse <= 20){
						if($english <= 100 and $english_incourse <= 20){
							if($science_bgs <= 100 and $science_bgs_incourse <= 20){
								if($math <= 100 and $math_incourse <= 20){
									// Quran Mazid and Aqaid
									//$quran_aqaid_check = check1($quran_aqaid);
									$quran_aqaid_parcent = $quran_aqaid * 0.8;
									$quran_aqaid_total = $quran_aqaid_parcent + $quran_aqaid_incourse;
									$quran_aqaid_gpa = gpacal($quran_aqaid_total);
									$quran_aqaid_gread = greadcal($quran_aqaid_total);
									$quran_aqaid_status = status($quran_aqaid_gpa);
									
									//Arabic 1st Paper and 2nd 
									//$arabic_check = check1($arabic);
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
									// Science
									//$science_bgs_check = check1($science_bgs);
									$science_bgs_parcent = $science_bgs * 0.8;
									$science_bgs_total = $science_bgs_incourse + $science_bgs_parcent;
									$science_bgs_gpa = gpacal($science_bgs_total);
									$science_bgs_gread = greadcal($science_bgs_total);
									$science_bgs_status = status($science_bgs_gpa);
									
									if($quran_aqaid_gpa == 0){
										$fail1 = 1;
									}else{
										$fail1 = 0;
									}
									
									if($arabic_gpa == 0){
										$fail2 = 1;
									}else{
										$fail2 = 0;
									}
									
									if($bangla_gpa == 0){
										$fail3 = 1;
									}else{
										$fail3 = 0;
									}
									
									if($english_gpa == 0){
										$fail4 = 1;
									}else{
										$fail4 = 0;
									}
									
									if($math_gpa == 0){
										$fail5 = 1;
									}else{
										$fail5 = 0;
									}
									
									if($science_bgs_gpa == 0){
										$fail6 = 1;
									}else{
										$fail6 = 0;
									}
									
									$total_fail = $fail1 + $fail2 + $fail3 + $fail4 + $fail5 + $fail6;
									//echo $total_fail;
									
									$total_mark = $quran_aqaid_total + $arabic_total + $bangla_total + $english_total + $math_total + $science_bgs_total;
									
									if($quran_aqaid_gpa > 0 and $arabic_gpa > 0 and $bangla_gpa > 0 and $english_gpa > 0 and $math_gpa > 0 and $science_bgs_gpa > 0){
										$gpat = ($quran_aqaid_gpa + $arabic_gpa + $bangla_gpa + $english_gpa + $math_gpa + $science_bgs_gpa) / 6;
									}else{
										$gpat = 0;
									}
									$gpa_r = round($gpat,2);
									$gpa = gpa_total($gpa_r);
									$gread = total_gread($gpa);
									$status = status($gpa);	
									$sql = "UPDATE five_madrasah SET name = '$name', roll = '$roll', student_id = '$student_id', classs = '$classs', semester = '$semester', year = '$year', quran_aqaid = '$quran_aqaid', quran_aqaid_parcent = '$quran_aqaid_parcent', quran_aqaid_incourse = '$quran_aqaid_incourse', quran_aqaid_total = '$quran_aqaid_total', quran_aqaid_gpa = '$quran_aqaid_gpa', quran_aqaid_gread = '$quran_aqaid_gread', quran_aqaid_status = '$quran_aqaid_status', arabic = '$arabic', arabic_parcent = '$arabic_parcent', arabic_incourse = '$arabic_incourse', arabic_total = '$arabic_total', arabic_gpa = '$arabic_gpa', arabic_gread = '$arabic_gread', arabic_status = '$arabic_status', bangla = '$bangla', bangla_parcent = '$bangla_parcent', bangla_incourse = '$bangla_incourse', bangla_total = '$bangla_total', bangla_gpa = '$bangla_gpa', bangla_gread = '$bangla_gread', bangla_status = '$bangla_status', english = '$english', english_parcent = '$english_parcent', english_incourse = '$english_incourse', english_total = '$english_total', english_gpa = '$english_gpa', english_gread = '$english_gread', english_status =  '$english_status', math = '$math', math_parcent = '$math_parcent', math_incourse = '$math_incourse', math_total = '$math_total', math_gpa = '$math_gpa', math_gread = '$math_gread', math_status = '$math_status', science_bgs = '$science_bgs', science_bgs_parcent = '$science_bgs_parcent', science_bgs_incourse = '$science_bgs_incourse', science_bgs_total = '$science_bgs_total', science_bgs_gpa = '$science_bgs_gpa', science_bgs_gread = '$science_bgs_gread', science_bgs_status = '$science_bgs_status', total_mark = '$total_mark', gpa = '$gpa', gread = '$gread', status = '$status', total_fail = '$total_fail', last_update = '$last_update' WHERE id = '$semester_id'";
									$result = mysqli_query($con, $sql);
									
									if($result == true){
										$msg['success'] = 'Successfully Submit Result. <b>GPA : '.$gpa.', Grade : '.$gread.'and Status : '.$status.'</b>';
									}else{
										$msg['error'] = 'Subjects Mark Accept Just Integer Number. Space, Semicolon and other Character is Not Accept. Please Check Again';
									}
								}else{
									$msg['error'] = "MathMatic Your current Input Math = (".$math.") and Incourse = (".$math_incourse.") You Must Enter Math <= 100 and Incourse <= 20";
								}
							}else{
								$msg['error'] = "(Science and B.G.S) Your Current Input S and BGS = (".$science_bgs.") and Incourse = (".$science_bgs_incourse.") You Must Entered S & BGS <= 100 and Incourse <= 20";
							}
						}else{
							$msg['error'] = "(English) Your Current Input English = (".$english.") and Incourse = (".$english_incourse.") You Must Entered English <= 100 and Incourse <= 20";
						}
					}else{
						$msg['error'] = "(Bangla) Your Current Input Bangla = (".$bangla.") and Incourse = (".$bangla_incourse.") You Must Entered Bangla <= 100 and Incourse <= 20";
					}
				}else{
					$msg['error'] = "(Arabic) Your Current Input Arabic = (".$arabic."), Incourse = (".$arabic_incourse.") Arabic <= 100, Incourse <= 20";
				}
			}else{
				$msg['error'] = "(Quran and Aqaid) Your Current Input Q. A  = (".$quran_aqaid."), Incourse = (".$quran_aqaid_incourse.")  You Must Entered Q.A <= 100 and incourse <= 20";
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