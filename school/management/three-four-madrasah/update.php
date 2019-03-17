<?php 
include '../six-eight-madrasah/gpa_function.php';
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$classs = $class;
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$admin_id = $session_user['id'];
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
		//Science
		$science = $_POST['science'];
		$science_incourse = $_POST['science_incourse'];
 
		// Bangladesh & Global Study
		$bgs = $_POST['bgs'];
		$bgs_incourse = $_POST['bgs_incourse'];
		// General knowledge arts and masnunna
		$gkam = $_POST['gkam'];
		$gkam_incourse = $_POST['gkam_incourse'];
		// Insert Time
		date_default_timezone_set("Asia/Dhaka");
		$last_update = date("d-m-y h:i:s A");
		
		// Semester ID
		$semester_id = $_POST['semester_id'];
		
		if(!empty($name) && !empty($roll) && !empty($classs) && !empty($year) && !empty($semester)){
			if($quran <= 100 and $quran_incourse <= 20){
				if($arabic <= 100 and $arabic_incourse <= 20){
					if($aqaid <= 100 and $aqaid_incourse <= 20){
						if($bangla <= 100 and $bangla_incourse <= 20){
							if($english <= 100 and $english_incourse <= 20){
								if($science <= 100 and $science_incourse <= 20){
									if($bgs <= 100 and $science_incourse <= 20){
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
											// Science
											///$science_check = check1($science);
											$science_parcent = $science * 0.8;
											$science_total = $science_incourse + $science_parcent;
											$science_gpa = gpacal($science_total);
											$science_gread = greadcal($science_total);
											$science_status = status($science_gpa);
											// Bangladesh and Global Studys
											//$bgs_check = check1($bgs);
											$bgs_parcent = $bgs * 0.8;
											$bgs_total = $bgs_incourse + $bgs_parcent;
											$bgs_gpa = gpacal($bgs_total);
											$bgs_gread = greadcal($bgs_total);
											$bgs_status = status($bgs_gpa);
											// General Knowledge
											$gkam_parcent = $gkam * 0.8;
											$gkam_total = $gkam_incourse + $gkam_parcent;
											$gkam_gpa = gpacal($gkam_total);
											$gkam_gread = greadcal($gkam_total);
											$gkam_status = status($gkam_gpa);
											
											include'failcount.php';
											
											$total_mark = $quran_total + $arabic_total + $aqaid_total + $bangla_total + $english_total + $math_total + $bgs_total + $science_total + $gkam_total;
											
											if($quran_gpa > 0 and $arabic_gpa > 0 and $aqaid_gpa > 0 and $bangla_gpa > 0 and $english_gpa > 0 and $math_gpa > 0 and $bgs_gpa > 0 and $science_gpa > 0 and $gkam_gpa > 0){
												$gpat = ($quran_gpa + $arabic_gpa + $aqaid_gpa + $bangla_gpa + $english_gpa + $math_gpa + $bgs_gpa + $science_gpa + $gkam_gpa) / 9;
											}else{
												$gpat = 0;
											}
											$gpa_r = round($gpat,2);
											$gpa = gpa_total($gpa_r);
											$gread = total_gread($gpa);
											$status = status($gpa);
											$sql = "UPDATE $table SET name = '$name', roll = '$roll', student_id = '$student_id', classs = '$classs', semester = '$semester', year = '$year', quran = '$quran', quran_parcent = '$quran_parcent', quran_incourse = '$quran_incourse', quran_total = '$quran_total', quran_gpa = '$quran_gpa', quran_gread = '$quran_gread', quran_status = '$quran_status', arabic = '$arabic', arabic_parcent = '$arabic_parcent', arabic_incourse = '$arabic_incourse', arabic_total = '$arabic_total', arabic_gpa = '$arabic_gpa', arabic_gread = '$arabic_gread', arabic_status = '$arabic_status', aqaid = '$aqaid', aqaid_parcent = '$aqaid_parcent', aqaid_incourse = '$aqaid_incourse', aqaid_total = '$aqaid_total', aqaid_gpa = '$aqaid_gpa', aqaid_gread = '$aqaid_gread', aqaid_status = '$aqaid_status', bangla = '$bangla', bangla_parcent = '$bangla_parcent', bangla_incourse = '$bangla_incourse', bangla_total = '$bangla_total', bangla_gpa = '$bangla_gpa', bangla_gread = '$bangla_gread', bangla_status = '$bangla_status', english = '$english', english_parcent = '$english_parcent', english_incourse = '$english_incourse', english_total = '$english_total', english_gpa = '$english_gpa', english_gread = '$english_gread', english_status =  '$english_status', math = '$math', math_parcent = '$math_parcent', math_incourse = '$math_incourse', math_total = '$math_total', math_gpa = '$math_gpa', math_gread = '$math_gread', math_status = '$math_status', science = '$science', science_parcent = '$science_parcent', science_incourse = '$science_incourse', science_total = '$science_total', science_gpa = '$science_gpa', science_gread = '$science_gread', science_status = '$science_status', bgs = '$bgs', bgs_parcent = '$bgs_parcent', bgs_incourse = '$bgs_incourse', bgs_total = '$bgs_total', bgs_gpa = '$bgs_gpa', bgs_gread = '$bgs_gread', bgs_status = '$bgs_status', gkam = '$gkam', gkam_parcent = '$gkam_parcent', gkam_incourse = '$gkam_incourse', gkam_total = '$gkam_total', gkam_gpa = '$gkam_gpa', gkam_gread = '$gkam_gread', gkam_status = '$gkam_status', total_mark = '$total_mark', gpa = '$gpa', gread = '$gread', status = '$status', total_fail = '$total_fail', last_update = '$last_update' WHERE id = '$semester_id'";
											$result = mysqli_query($con, $sql);
											
											if($result == true){
												$msg['success'] = 'Successfully Submit Result. <b>GPA : '.$gpa.', Grade : '.$gread.'and Status : '.$status.'</b>';
											}else{
												$msg['error'] = 'Subjects Mark Accept Just Integer Number. Space, Semicolon and other Character is Not Accept. Please Check Again';
											}
										}else{
											$msg['error'] = '(General Knowledge, Arts and Masnuna) Yor Current Input GKAM = ('.$gkam.') and Incourse = ('.$gkam_incourse.') You Must Entered GKAM <= 100 and Incourse <= 20';
										}
									}else{
										$msg['error'] = "(Bangladesh and Global Studies) Your Current Input BGS = (".$bgs.") and Incourse = (".$bgs_incourse.") You Must Entered BGS <= 100 and Incourse <= 20";
									}
								}else{
									$msg['error'] = "(Science) Your Current Input Science = (".$science.") and Incourse = (".$science_incourse.") You Must Entered Science <= 100 and Incourse <= 20";
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