<?php 
	include 'gpa_function.php';
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$classs = $_POST['class'];
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$admin_id = $session_user['id'];
		$department = "General";
		$semester_id = $_POST['semester_id'];
		$student_id = $_POST['student_id'];
		//Quran Mazid 
		$quran_mcq = $_POST['quran_mcq'];
		$quran_wr = $_POST['quran_wr'];
		$quran_incourse = $_POST['quran_incourse'];
		//Arabic 1st paper
		$arabic1st = $_POST['arabic1st'];
		$arabic1st_incourse = $_POST['arabic1st_incourse'];
		//Arabic 2nd
		$arabic2nd = $_POST['arabic2nd'];
		$arabic2nd_incourse = $_POST['arabic2nd_incourse'];
		//Fiqh & U.Fiqh 
		$aqaid_mcq = $_POST['aqaid_mcq'];
		$aqaid_wr = $_POST['aqaid_wr'];
		$aqaid_incourse = $_POST['aqaid_incourse'];
		//Bangla
		$bangla = $_POST['bangla'];
		$bangla_incourse = $_POST['bangla_incourse'];

		//English
		$english = $_POST['english'];
		$english_incourse = $_POST['english_incourse'];
		
		//General MathMatic 
		$math_mcq = $_POST['math_mcq'];
		$math_wr = $_POST['math_wr'];
		$math_incourse = $_POST['math_incourse'];
		//Science
		$science_mcq = $_POST['science_mcq'];
		$science_wr = $_POST['science_wr'];
		$science_incourse = $_POST['science_incourse'];
 
		// Bangladesh & Global Study replace pe
		$bgs_mcq = $_POST['bgs_mcq'];
		$bgs_wr = $_POST['bgs_wr'];
		$bgs_incourse = $_POST['bgs_incourse'];
		//Information Technology 
		$ict = $_POST['ict'];
		$ict_incourse = $_POST['ict_incourse'];
		//Extra Subject
		$extra_subject = $_POST['extra_subject'];
		$extra_mcq = $_POST['extra_mcq'];
		$extra_wr = $_POST['extra_wr'];
		$extra_incourse = $_POST['extra_incourse'];
		//Prectical Subject
		$pt_subject = $_POST['pt_subject'];
		$pt = $_POST['pt'];
		$pt_incourse = $_POST['pt_incourse'];
		
		// Last UPDATE
		date_default_timezone_set("Asia/Dhaka");
		$last_update = date("d-m-y h:i:s A");
		
			if(!empty($name)&& !empty($roll) && !empty($classs) && !empty($year) && !empty($semester)){
				if($quran_mcq <= 30 && $quran_wr <= 70 && $quran_incourse <= 20){
					if($arabic1st <= 100 && $arabic2nd <= 100 && $arabic1st_incourse <= 20 && $arabic2nd_incourse <= 20){
						if($aqaid_mcq <= 30 && $aqaid_wr <= 70 && $aqaid_incourse <= 20){
							if($bangla <= 100 && $bangla_incourse <= 20){
								if($english <= 100 && $english_incourse <= 20){
									if($math_mcq <= 30 && $math_wr <= 70 && $math_incourse <= 20){
										if($science_mcq <= 30 && $science_wr <= 70 && $science_incourse <= 20){
											if($bgs_mcq <= 30 && $bgs_wr <= 70 && $bgs_incourse <=20){
												if($ict <= 50 && $ict_incourse <= 10){
													if($pt <= 50 && $pt_incourse <= 10){
														if($extra_mcq <= 30 && $extra_wr <= 70 && $extra_incourse <= 20){
															//Quran Mazid processing
															$quran_mcq_wr = ($quran_mcq + $quran_wr);
															$quran_total_t = check1($quran_mcq_wr);//form use
															$quran_parcent = $quran_mcq_wr * 0.8;
															$quran_parcent_t = $quran_total_t * 0.8;//form use
															$quran_total =  $quran_parcent + $quran_incourse;
															$quran_total_tt = $quran_parcent_t + $quran_incourse;
															$quran_gpa = gpacal($quran_total_tt);
															$quran_gread = greadcal($quran_total_tt);
															$quran_status = status($quran_gpa);
															//Arabic 1st Paper
															$arabic1st_check = Check1($arabic1st);//use form
															$arabic1st_parcent = $arabic1st * 0.8;
															$arabic1st_parcent_t = $arabic1st_check * 0.8;//use form
															$arabic1st_total = $arabic1st_parcent + $arabic1st_incourse;
															$arabic1st_total_t = $arabic1st_parcent_t + $arabic1st_incourse;//use form
															$arabic1st_gpa = gpacal($arabic1st_total_t);
															$arabic1st_gread = greadcal($arabic1st_total_t);
															$arabic1st_status = status($arabic1st_gpa);
															
															//Arabic 2nd Paper
															$arabic2nd_check = Check1($arabic2nd);//use form
															$arabic2nd_parcent = $arabic2nd * 0.8;
															$arabic2nd_parcent_t = $arabic2nd_check * 0.8;//use form
															$arabic2nd_total = $arabic2nd_parcent + $arabic2nd_incourse;
															$arabic2nd_total_t = $arabic2nd_parcent_t + $arabic2nd_incourse;//use form
															$arabic2nd_gpa = gpacal($arabic2nd_total_t);
															$arabic2nd_gread = greadcal($arabic2nd_total_t);
															$arabic2nd_status = status($arabic2nd_gpa);
															
															//Arabic 1st + 2nd
															$arabic = $arabic1st_total + $arabic2nd_total;
															if($arabic1st_total_t >= 33 && $arabic2nd_total_t >= 33){
																$arabic_total = ($arabic1st_total_t + $arabic2nd_total_t) / 2;
															}else{
																$arabic_total = 0;
															}
															$arabic_gpa = gpacal($arabic_total);
															$arabic_gread = greadcal($arabic_total);
															$arabic_status = status($arabic_gpa);
															
															//Aqaid & Fiqh
															$aqaid_mcq_wr = $aqaid_mcq + $aqaid_wr;
															$aqaid_total_t = check2($aqaid_mcq, $aqaid_wr);
															$aqaid_parcent = $aqaid_mcq_wr * 0.8;
															$aqaid_parcent_t = $aqaid_total_t * 0.8;//form use 
															$aqaid_total = $aqaid_parcent + $aqaid_incourse;
															$aqaid_total_tt = $aqaid_parcent_t + $aqaid_incourse;//use form
															$aqaid_gpa = gpacal($aqaid_total_tt);
															$aqaid_gread = greadcal($aqaid_total_tt);
															$aqaid_status = status($aqaid_gpa);
												
															//Bangla 
															$bangla_check = Check1($bangla);// use form
															$bangla_parcent = $bangla * 0.8;
															$bangla_parcent_t = $bangla_check * 0.8;//use form
															$bangla_total = $bangla_parcent + $bangla_incourse;
															$bangla_total_t = $bangla_parcent_t + $bangla_incourse;//use form
															$bangla_gpa =  gpacal($bangla_total_t);
															$bangla_gread = greadcal($bangla_total_t);
															$bangla_status = status($bangla_gpa);
															
														
															//English 
															$english_check = Check1($english);// use form
															$english_parcent = $english * 0.8;
															$english_parcent_t = $english_check * 0.8;//use form
															$english_total = $english_parcent + $english_incourse;
															$english_total_t = $english_parcent_t + $english_incourse;//use form
															$english_gpa =  gpacal($english_total_t);
															$english_gread = greadcal($english_total_t);
															$english_status = status($english_gpa);
															
															
															//General Mathmatic
															$math_mcq_wr = $math_mcq + $math_wr;
															$math_total_t = check2($math_mcq, $math_wr);
															$math_parcent = $math_mcq_wr * 0.8;
															$math_parcent_t = $math_total_t * 0.8;//use form
															$math_total = $math_parcent + $math_incourse;
															$math_total_tt = $math_parcent_t + $math_incourse;//use form
															$math_gpa = gpacal($math_total_tt);
															$math_gread = greadcal($math_total_tt);
															$math_status = status($math_gpa);
															
															//General Science
															$science_mcq_wr = $science_mcq + $science_wr;
															$science_total_t = check2($science_mcq, $science_wr);
															$science_parcent = $science_mcq_wr * 0.8;
															$science_parcent_t = $science_total_t * 0.8;//use form
															$science_total = $science_parcent + $science_incourse;
															$science_total_tt = $science_parcent_t + $science_incourse;//use form
															$science_gpa = gpacal($science_total_tt);
															$science_gread = greadcal($science_total_tt);
															$science_status = status($science_gpa);
															
															//Bangladesh and Global Studies
															$bgs_mcq_wr = $bgs_mcq + $bgs_wr;
															$bgs_total_t = check2($bgs_mcq, $bgs_wr);
															$bgs_parcent = $bgs_mcq_wr * 0.8;
															$bgs_parcent_t = $bgs_total_t * 0.8;//use form
															$bgs_total = $bgs_parcent + $bgs_incourse;
															$bgs_total_tt = $bgs_parcent_t + $bgs_incourse;//use form
															$bgs_gpa = gpacal($bgs_total_tt);
															$bgs_gread = greadcal($bgs_total_tt);
															$bgs_status  = status($bgs_gpa);
															
															//Information and Communication Technology
															$ict_parcent = $ict * 0.8;
															$ict_total = $ict_parcent + $ict_incourse;
															if($ict >= 17){
																
																$ict_total_tt = ($ict_parcent + $ict_incourse) * 2;
															}else{
																$ict_total_tt = 0;
															}
															$ict_gpa = gpacal($ict_total_tt);
															$ict_gread = greadcal($ict_total_tt);
															$ict_status = status($ict_gpa);
															
															//Extra Subject
															$extra_mcq_wr = $extra_mcq + $extra_wr;
															$extra_total_t = check2($extra_mcq, $extra_wr);
															$extra_parcent = $extra_mcq_wr * 0.8;
															$extra_parcent_t = $extra_total_t * 0.8;//use form
															$extra_total = $extra_parcent + $extra_incourse;
															$extra_total_tt = $extra_parcent_t + $extra_incourse;//use form
															$extra_gpa = gpacal($extra_total_tt);
															$extra_gread = greadcal($extra_total_tt);
															$extra_status = status($extra_gpa);
															/*if($extra_gpa >= 2){ //if extra is additional subject
																$extra_gpa_t = $extra_gpa - 2;
															}else{
																$extra_gpa_t = 0;
															}*/
															
															//Prectical Subject
															
															$pt_parcent = $pt * 0.8;
															$pt_total = $pt_parcent + $pt_incourse;
															if($pt >= 17){
																
																$pt_total_tt = ($pt_parcent + $pt_incourse) * 2;
															}else{
																$pt_total_tt = 0;
															}
															$pt_gpa = gpacal($pt_total_tt);
															$pt_gread = greadcal($pt_total_tt);
															$pt_status = status($pt_gpa);
															
															include 'failcount.php';
															
															$total_mark = $quran_total + $arabic + $aqaid_total + $bangla_total + $english_total + $math_total + $science_total + $bgs_total + $ict_total;
															
															//GPA Calculation 
															if($quran_gpa > 0 && $arabic_gpa > 0 && $aqaid_gpa > 0 && $bangla_gpa > 0 && $english_gpa > 0 && $math_gpa > 0 && $science_gpa > 0 && $bgs_gpa > 0 && $ict_gpa > 0){	
															$main_gpa_withextra = ($quran_gpa + $arabic_gpa + $aqaid_gpa + $bangla_gpa + $english_gpa + $math_gpa + $science_gpa + $bgs_gpa + $ict_gpa) / 9;
															$main_gpa_withoutextra = ($quran_gpa + $arabic_gpa + $aqaid_gpa + $bangla_gpa + $english_gpa + $math_gpa + $science_gpa + $bgs_gpa + $ict_gpa) / 9;
															}else{
																$main_gpa_withextra = 0.00;
																$main_gpa_withoutextra = 0.00;
															}
															$gpas = round($main_gpa_withextra,2);
															$gpa = gpa_total($gpas);
															$gpa_without_extra = round($main_gpa_withoutextra,2);
															$gread = total_gread($gpa);
															$status = status($gpa);
															//$sql = "INSERT INTO $table(admin_id, name, roll, student_id, classs, semester, year, department, quran_mcq, quran_wr, quran_mcq_wr, quran_parcent, quran_incourse, quran_total, quran_gpa, quran_gread, quran_status, arabic1st, arabic1st_parcent, arabic1st_incourse, arabic1st_total, arabic1st_gpa, arabic1st_gread, arabic1st_status, arabic2nd, arabic2nd_parcent, arabic2nd_incourse, arabic2nd_total, arabic2nd_gpa, arabic2nd_gread, arabic2nd_status, arabic, arabic_gpa, arabic_gread, arabic_status, aqaid, aqaid_parcent, aqaid_incourse, aqaid_total, aqaid_gpa, aqaid_gread, aqaid_status, bangla_mcq, bangla_wr, bangla_mcq_wr, bangla_parcent, bangla_incourse, bangla_total, bangla_gpa, bangla_gread, bangla_status, english, english_parcent, english_incourse, english_total, english_gpa, english_gread, english_status, math_mcq, math_wr, math_mcq_wr, math_parcent, math_incourse, math_total, math_gpa, math_gread, math_status, science_mcq, science_wr, science_mcq_wr, science_parcent, science_incourse, science_total, science_gpa, science_gread, science_status, bgs_mcq, bgs_wr, bgs_mcq_wr, bgs_parcent, bgs_incourse, bgs_total, bgs_gpa, bgs_gread, bgs_status, ict, ict_parcent, ict_incourse, ict_total, ict_gpa, ict_gread, ict_status, extra_subject, extra_mcq, extra_wr, extra_mcq_wr, extra_parcent, extra_incourse, extra_total, extra_gpa, extra_gpa_t, extra_gread, extra_status, pt_subject, pt, pt_parcent, pt_incourse, pt_total, pt_gpa, pt_gread, pt_status, gpa_without_extra, gpa, gread, status, insert_time)VALUES('$admin_id', '$name', '$roll', '$student_id', '$classs', '$semester', '$year', '$department', '$quran_mcq', '$quran_wr', '$quran_mcq_wr', '$quran_parcent', '$quran_incourse', '$quran_total', '$quran_gpa', '$quran_gread', '$quran_status', '$arabic1st', '$arabic1st_parcent', '$arabic1st_incourse', '$arabic1st_total', '$arabic1st_gpa', '$arabic1st_gread', '$arabic1st_status', '$arabic2nd','$arabic2nd_parcent', '$arabic2nd_incourse', '$arabic2nd_total', '$arabic2nd_gpa', '$arabic2nd_gread', '$arabic2nd_status', '$arabic', '$arabic_gpa', '$arabic_gread', '$arabic_status', '$aqaid', '$aqaid_parcent', '$aqaid_incourse', '$aqaid_total', '$aqaid_gpa', '$aqaid_gread', '$aqaid_status', '$bangla_mcq', '$bangla_wr', '$bangla_mcq_wr', '$bangla_parcent', '$bangla_incourse', '$bangla_total', '$bangla_gpa', '$bangla_gread', '$bangla_status', '$english', '$english_parcent', '$english_incourse', '$english_total', '$english_gpa', '$english_gread', '$english_status', '$math_mcq', '$math_wr', '$math_mcq_wr', '$math_parcent', '$math_incourse', '$math_total', '$math_gpa', '$math_gread', '$math_status', '$science_mcq', '$science_wr', '$science_mcq_wr', '$science_parcent', '$science_incourse', '$science_total', '$science_gpa', '$science_gread', '$science_status', '$bgs_mcq', '$bgs_wr', '$bgs_mcq_wr', '$bgs_parcent', '$bgs_incourse', '$bgs_total', '$bgs_gpa', '$bgs_gread', '$bgs_status', '$ict', '$ict_parcent', '$ict_incourse', '$ict_total', '$ict_gpa', '$ict_gread', '$ict_status', '$extra_subject', '$extra_mcq', '$extra_wr', '$extra_mcq_wr', '$extra_parcent', '$extra_incourse', '$extra_total', '$extra_gpa', '$extra_gpa_t', '$extra_gread', '$extra_status', '$pt_subject', '$pt', '$pt_parcent', '$pt_incourse', '$pt_total', '$pt_gpa', '$pt_gread', '$pt_status', '$gpa_without_extra', '$gpa', '$gread', '$status', '$insert_time')";
															$sql = "UPDATE $table SET name = '$name', roll = '$roll', student_id = '$student_id', classs = '$classs', semester = '$semester', year = '$year', quran_mcq = '$quran_mcq', quran_wr = '$quran_wr', quran_mcq_wr = '$quran_mcq_wr', quran_parcent = '$quran_parcent', quran_incourse = '$quran_incourse', quran_total = '$quran_total', quran_gpa = '$quran_gpa', quran_gread = '$quran_gread', quran_status = '$quran_status', arabic1st = '$arabic1st', arabic1st_parcent = '$arabic1st_parcent', arabic1st_incourse = '$arabic1st_incourse', arabic1st_total = '$arabic1st_total', arabic1st_gpa = '$arabic1st_gpa', arabic1st_gread = '$arabic1st_gread', arabic1st_status = '$arabic1st_status', arabic2nd = '$arabic2nd', arabic2nd_parcent = '$arabic2nd_parcent', arabic2nd_incourse = '$arabic2nd_incourse', arabic2nd_total = '$arabic2nd_total', arabic2nd_gpa = '$arabic2nd_gpa', arabic2nd_gread = '$arabic2nd_gread', arabic2nd_status = '$arabic2nd_status', arabic = '$arabic', arabic_gpa = '$arabic_gpa', arabic_gread = '$arabic_gread', arabic_status = '$arabic_status', aqaid_mcq = '$aqaid_mcq', aqaid_wr = '$aqaid_wr', aqaid_mcq_wr = '$aqaid_mcq_wr', aqaid_parcent = '$aqaid_parcent', aqaid_incourse = '$aqaid_incourse', aqaid_total = '$aqaid_total', aqaid_gpa = '$aqaid_gpa', aqaid_gread = '$aqaid_gread', aqaid_status = '$aqaid_status', bangla = '$bangla', bangla_parcent = '$bangla_parcent', bangla_incourse = '$bangla_incourse', bangla_total = '$bangla_total', bangla_gpa = '$bangla_gpa', bangla_gread = '$bangla_gread', bangla_status = '$bangla_status', english = '$english', english_parcent = '$english_parcent', english_incourse = '$english_incourse', english_total = '$english_total', english_gpa = '$english_gpa', english_gread = '$english_gread', english_status = '$english_status', math_mcq = '$math_mcq', math_wr = '$math_wr', math_mcq_wr = '$math_mcq_wr', math_parcent = '$math_parcent', math_incourse = '$math_incourse', math_total = '$math_total', math_gpa = '$math_gpa', math_gread = '$math_gread', math_status = '$math_status', science_mcq = '$science_mcq', science_wr = '$science_wr', science_mcq_wr = '$science_mcq_wr', science_parcent = '$science_parcent', science_incourse = '$science_incourse', science_total = '$science_total', science_gpa = '$science_gpa', science_gread = '$science_gread', science_status = '$science_status', bgs_mcq = '$bgs_mcq', bgs_wr = '$bgs_wr', bgs_mcq_wr = '$bgs_mcq_wr', bgs_parcent = '$bgs_parcent', bgs_incourse = '$bgs_incourse', bgs_total = '$bgs_total', bgs_gpa = '$bgs_gpa', bgs_gread = '$bgs_gread', bgs_status = '$bgs_status', ict = '$ict', ict_parcent = '$ict_parcent', ict_incourse = '$ict_incourse', ict_total = '$ict_total', ict_gpa = '$ict_gpa', ict_gread = '$ict_gread', ict_status = '$ict_status', extra_subject = '$extra_subject', extra_mcq = '$extra_mcq', extra_wr = '$extra_wr', extra_mcq_wr = '$extra_mcq_wr', extra_parcent = '$extra_parcent', extra_incourse = '$extra_incourse', extra_total = '$extra_total', extra_gpa = '$extra_gpa', extra_gread = '$extra_gread', extra_status = '$extra_status', pt_subject = '$pt_subject', pt = '$pt', pt_parcent = '$pt_parcent', pt_incourse = '$pt_incourse', pt_total = '$pt_total', pt_gpa = '$pt_gpa', pt_gread = '$pt_gread', pt_status = '$pt_status', total_mark = '$total_mark', gpa_without_extra = '$gpa_without_extra', gpa = '$gpa', gread = '$gread', status = '$status', total_fail = '$total_fail', last_update = '$last_update' WHERE id = '$semester_id'";
																
															$result = mysqli_query($con, $sql);
															if($result){
																$msg['success'] = "<b>Update Successfully GPA: </b>".$gpa." Grade: ".$gread." Status: ".$status." <a class='btn btn-success' href='../six-eight-madrasah/search_update.php'>Next</a>";
															}else{
																$msg['error'] = "Input or Database Problem";
															}
														}else{
															$msg['error'] = $extra_subject." Your Current Input MCQ = (".$extra_mcq."), CQ = (".$extra_wr."), Incourse = (".$extra_incourse.") You Must Entered  MCQ <= 30, CQ <= 70 Incourse <= 20";
														}
													}else{
														$msg['error'] = $pt_subject." Your Current Input = (".$pt."), Incourse = (".$pt_incourse.") You Must Entered  <= 50 and Incourse <= 10";
													}
												}else{
													$msg['error'] = "(Information and Communication Technology) Your Current Input ICT = (".$ict.")and Incourse = (".$ict_incourse.") You Must Entered  ICT <= 50 and Incourse <= 10";
												}
											}else{
												$msg['error'] = "(Bangladesh & Global Studies) Your Current Input MCQ = (".$bgs_mcq."), CQ = (".$bgs_wr.") AND Incourse = (".$bgs_incourse.") You Must Entered  MCQ <= 30, CQ <= 70 AND Incourse <= 20";
											}
										}else{
											$msg['error'] = "(Science) Your Current Input MCQ = (".$science_mcq.") and CQ = (".$science_wr.") AND Incourse = (".$science_incourse.") You Must Entered Science MCQ <= 30, CQ <= 70 and Incourse <= 20";
										}
									}else{
										$msg['error'] = "(Mathmatic) Your Current Input MCQ = (".$math_mcq."), CQ = (".$math_wr.") and Incourse = (".$math_incourse.") You Must Entered Math MCQ <= 30, CQ <= 70 Incourse <= 20";
									}
								}
								else{
									$msg['error'] = "(English) Your Current Input English1st = (".$english."), Incourse = (".$english_incourse.")You Must Entered English <= 100, Incourse <= 20";
								}
								
							}else{
								$msg['error'] = "(Bangla) Your Current Input Bangla = (".$bangla.") AND Incourse = (".$bangla_incourse.") You Must Entered Bangla <= 100 and Incourse <= 20";
							}
						}else{
							$msg['error'] = "(Aqaid and Fiqh) Your Current Input MCQ = (".$aqaid_mcq."), CQ = (".$aqaid_wr.") and Incourse = (".$aqaid_incourse.") You Must Entered MCQ <= 30, CQ <= 70 AND Incourse <= 20";
						}
					}else{
						$msg['error'] = "(Arabic) Your Current Input Arabic1st = (".$arabic1st."), Incourse = (".$arabic1st_incourse.") and Arabic 2nd = (".$arabic2nd."), Incourse = (".$arabic2nd_incourse.") You Must Entered A1 <= 100, Incourse <= 20 and A2 <= 100, Incourse <= 20";
					}
				}else{
					$msg['error'] = "(Quran Mazid) ". "Your Current Inpute MCQ = (".$quran_mcq."),  CQ = (".$quran_wr.") and Incourse = (".$quran_incourse.") Your Must Entered Quran MCQ <= 30, CQ <= 70 AND Incourse <= 20";
				}
			}else{
				$msg['error'] = "Name, Roll, Class, Year are Required";
			}
	}
?>