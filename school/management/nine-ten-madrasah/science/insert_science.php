<?php 
	include 'gpa_function.php';
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		//$classs = "Nine";
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$admin_id = $ses['id'];
		$department = "Science";
		$student_id = $_POST['student_id'];
		//Quran Mazid 
		$quran_mcq = $_POST['quran_mcq'];
		$quran_wr = $_POST['quran_wr'];
		$quran_incourse = $_POST['quran_incourse'];
		//Hadith Sharif
		$hadith = $_POST['hadith'];
		$hadith_incourse = $_POST['hadith_incourse'];
		//Arabic 1st paper
		$arabic1st = $_POST['arabic1st'];
		$arabic1st_incourse = $_POST['arabic1st_incourse'];
		//Arabic 2nd
		$arabic2nd = $_POST['arabic2nd'];
		$arabic2nd_incourse = $_POST['arabic2nd_incourse'];
		//Fiqh & U.Fiqh 
		$fiqh = $_POST['fiqh'];
		$fiqh_incourse = $_POST['fiqh_incourse'];
		//Bangla 1st Paper
		$bangla1_mcq = $_POST['bangla1_mcq'];
		$bangla1_wr = $_POST['bangla1_wr'];
		$bangla1_incourse = $_POST['bangla1_incourse'];
		//Bangla 2nd Paper
		$bangla2_mcq = $_POST['bangla2_mcq'];
		$bangla2_wr = $_POST['bangla2_wr'];
		$bangla2_incourse = $_POST['bangla2_incourse'];
		//English 1st
		$english1st = $_POST['english1st'];
		$english1st_incourse = $_POST['english1st_incourse'];
		// English 2nd
		$english2nd = $_POST['english2nd'];
		$english2nd_incourse = $_POST['english2nd_incourse'];
		//General MathMatic 
		$math_mcq = $_POST['math_mcq'];
		$math_wr = $_POST['math_wr'];
		$math_incourse = $_POST['math_incourse'];
		//Physics
		$ph_mcq = $_POST['ph_mcq'];
		$ph_wr = $_POST['ph_wr'];
		$ph_pt = $_POST['ph_pt'];
		$ph_incourse = $_POST['ph_incourse'];
		// Chemistry
		$ch_mcq = $_POST['ch_mcq'];
		$ch_wr = $_POST['ch_wr'];
		$ch_pt = $_POST['ch_pt'];
		$ch_incourse = $_POST['ch_incourse'];
		//Biology
		$bio_mcq = $_POST['bio_mcq'];
		$bio_wr = $_POST['bio_wr'];
		$bio_pt = $_POST['bio_pt'];
		$bio_incourse = $_POST['bio_incourse'];
		//Agricultural Studies (Optional) 
		$agri_mcq = $_POST['agri_mcq'];
		$agri_wr = $_POST['agri_wr'];
		$agri_pt = $_POST['agri_pt'];
		$agri_incourse = $_POST['agri_incourse'];
		//Input time
		date_default_timezone_set("Asia/Dhaka");
		$insert_time = date("d-m-y h:i:s A");
		//End Asssign
	
		if(!empty($name)&& !empty($roll) && !empty($classs)){
			if($quran_mcq <= 30 && $quran_wr <= 70 && $quran_incourse <= 20){
				if($hadith <= 100 && $hadith_incourse <= 20){
					if($arabic1st <= 100 && $arabic1st_incourse <= 20 && $arabic2nd <= 100 && $arabic2nd_incourse <= 20){
						if($fiqh <= 100 && $fiqh_incourse <= 20){
							if($bangla1_mcq <= 30 && $bangla1_wr <= 70 && $bangla1_incourse <= 20){
								if($bangla2_mcq <= 30 && $bangla2_wr <= 70 && $bangla2_incourse <= 20){
									if($english1st <= 100 && $english1st_incourse <= 20 && $english2nd <= 100 && $english2nd_incourse <= 20){
										if($math_mcq <= 30 && $math_wr <= 70 && $math_incourse <= 20){
											if($ph_mcq <= 25 && $ph_wr <= 50 && $ph_pt <= 25 && $ph_incourse <=20){
												if($ch_mcq <= 25 && $ch_wr <= 50 && $ch_pt <= 25 && $ch_incourse <= 20){
													if($bio_mcq <= 25 && $bio_wr <= 50 && $bio_pt <= 25 && $bio_incourse <= 20){
														if($agri_mcq <= 25 && $agri_wr <= 50 && $agri_pt <= 25 && $agri_incourse <= 20){
														
															//Quran Mazi processing
															$quran_mcq_wr = ($quran_mcq + $quran_wr);
															$quran_total_t = check2($quran_mcq, $quran_wr);//form use
															$quran_parcent = $quran_mcq_wr * 0.8;
															$quran_parcent_t = $quran_total_t * 0.8;//form use
															$quran_total =  $quran_parcent + $quran_incourse;
															$quran_total_tt = $quran_parcent_t + $quran_incourse;
															$quran_gpa = gpacal($quran_total_tt);
															$quran_gread = greadcal($quran_total_tt);
															$quran_status = status($quran_gpa);
															
															//Hadith Sharif
															$hadith_check = Check1($hadith);//just use form 
															$hadith_parcent = $hadith * 0.8;
															$hadith_parcent_t = $hadith_check * 0.8;//form use 
															$hadith_total = $hadith_parcent + $hadith_incourse;
															$hadith_total_t = $hadith_parcent_t + $hadith_incourse; //form use 
															$hadith_gpa = gpacal($hadith_total);
															$hadith_gread  = greadcal($hadith_total);
															$hadith_status = status($hadith_gpa);
																
															//Quran + Hadith 
															$quran_hadith = $quran_total + $hadith_total;
															if($quran_total_tt >= 33 && $hadith_total_t >= 33){	
																$quran_hadith_total = ($quran_total + $hadith_total) / 2;
															}else{
																$quran_hadith_total = 0;
															}
															$quran_hadith_gpa = gpacal($quran_hadith_total);
															$quran_hadith_gread = greadcal($quran_hadith_total);
															$quran_hadith_status = status($quran_hadith_gpa);
															
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
															
															
															$fiqh_check = Check1($fiqh);//use form
															$fiqh_parcent = $fiqh * 0.8;
															$fiqh_parcent_t = $fiqh_check * 0.8; //use form
															$fiqh_total = $fiqh_parcent + $fiqh_incourse;
															$fiqh_total_t = $fiqh_parcent_t + $fiqh_incourse;//use form
															$fiqh_gpa = gpacal($fiqh_total_t);
															$fiqh_gread = greadcal($fiqh_total_t);
															$fiqh_status = status($fiqh_gpa);
															
															//Bangla 1st Paper
															$bangla1_mcq_wr = ($bangla1_mcq + $bangla1_wr);
															$bangla1_total_t = check2($bangla1_mcq, $bangla1_wr);//form use
															$bangla1_parcent = $bangla1_mcq_wr * 0.8;
															$bangla1_parcent_t = $bangla1_total_t * 0.8;//form use
															$bangla1_total =  $bangla1_parcent + $bangla1_incourse;
															$bangla1_total_tt = $bangla1_parcent_t + $bangla1_incourse;
															$bangla1_gpa = gpacal($bangla1_total_tt);
															$bangla1_gread = greadcal($bangla1_total_tt);
															$bangla1_status = status($bangla1_gpa);
															
															// Bangla 2nd Paper
															$bangla2_mcq_wr = ($bangla2_mcq + $bangla2_wr);
															$bangla2_total_t = check2($bangla2_mcq, $bangla2_wr);//form use
															$bangla2_parcent = $bangla2_mcq_wr * 0.8;
															$bangla2_parcent_t = $bangla2_total_t * 0.8;//form use
															$bangla2_total =  $bangla2_parcent + $bangla2_incourse;
															$bangla2_total_tt = $bangla2_parcent_t + $bangla2_incourse;
															$bangla2_gpa = gpacal($bangla2_total_tt);
															$bangla2_gread = greadcal($bangla2_total_tt);
															$bangla2_status = status($bangla2_gpa);
															
															// Bangla 1st + 2nd
															$bangla_total = $bangla1_total  + $bangla2_total;
															if($bangla1_total_tt >= 33 && $bangla2_total_tt >= 33){
																$bangla_total_t = ($bangla1_total  + $bangla2_total) / 2;
															}else{
																$bangla_total_t = 0;
															}
															$bangla_gpa = gpacal($bangla_total_t);
															$bangla_gread = greadcal($bangla_total_t);
															$bangla_status = status($bangla_gpa);
															
															$english1st_check = Check1($english1st);// use form
															$english1st_parcent = $english1st * 0.8;
															$english1st_parcent_t = $english1st_check * 0.8;//use form
															$english1st_total = $english1st_parcent + $english1st_incourse;
															$english1st_total_t = $english1st_parcent_t + $english1st_incourse;//use form
															$english1st_gpa =  gpacal($english1st_total_t);
															$english1st_gread = greadcal($english1st_total_t);
															$english1st_status = status($english1st_gpa);
															
															// English 2nd Paper
															$english2nd_check = Check1($english2nd);// use form
															$english2nd_parcent = $english2nd * 0.8;
															$english2nd_parcent_t = $english2nd_check * 0.8;//use form
															$english2nd_total = $english2nd_parcent + $english2nd_incourse;
															$english2nd_total_t = $english2nd_parcent_t + $english2nd_incourse;//use form
															$english2nd_gpa =  gpacal($english2nd_total_t);
															$english2nd_gread = greadcal($english2nd_total_t);
															$english2nd_status = status($english2nd_gpa);
															
															//English 1st + 2nd
															$english_total = $english1st_total + $english2nd_total;
															if($english1st_total_t >= 33 && $english2nd_total_t >= 33){
																$english_total_t = ($english1st_total + $english2nd_total) / 2;
															}else{
																$english_total_t = 0;
															}
															$english_gpa = gpacal($english_total_t);
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
															
															// Physics
															$ph_mcq_wr_pt = $ph_mcq + $ph_wr + $ph_pt;
															$ph_total_t = check3($ph_mcq, $ph_wr, $ph_pt);
															$ph_parcent = $ph_mcq_wr_pt * 0.8;
															$ph_parcent_t = $ph_total_t * 0.8;//use form 
															$ph_total = $ph_parcent + $ph_incourse;
															$ph_total_tt = $ph_parcent_t + $ph_incourse;//use form 
															$ph_gpa = gpacal($ph_total_tt);
															$ph_gread = greadcal($ph_total_tt);
															$ph_status = status($ph_gpa);
															
															//Chemistry
															$ch_mcq_wr_pt = $ch_mcq + $ch_wr + $ch_pt;
															$ch_total_t = check3($ch_mcq, $ch_wr, $ch_pt);
															$ch_parcent = $ch_mcq_wr_pt * 0.8;
															$ch_parcent_t = $ch_total_t * 0.8;//use form 
															$ch_total = $ch_parcent + $ch_incourse;
															$ch_total_tt = $ch_parcent_t + $ch_incourse;//use form 
															$ch_gpa = gpacal($ch_total_tt);
															$ch_gread = greadcal($ch_total_tt);
															$ch_status = status($ch_gpa);
															
															//Biology
															$bio_mcq_wr_pt = $bio_mcq + $bio_wr + $bio_pt;
															$bio_total_t = check3($bio_mcq, $bio_wr, $bio_pt);
															$bio_parcent = $bio_mcq_wr_pt * 0.8;
															$bio_parcent_t = $bio_total_t * 0.8;//use form 
															$bio_total = $bio_parcent + $bio_incourse;
															$bio_total_tt = $bio_parcent_t + $bio_incourse;//use form 
															$bio_gpa = gpacal($bio_total_tt);
															$bio_gread = greadcal($bio_total_tt);
															$bio_status = status($bio_gpa);
															
															//Agricultural Studies
															$agri_mcq_wr_pt = $agri_mcq + $agri_wr + $agri_pt;
															$agri_total_t = check3($agri_mcq, $agri_wr, $agri_pt);
															$agri_parcent = $agri_mcq_wr_pt * 0.8;
															$agri_parcent_t = $agri_total_t * 0.8;//use form 
															$agri_total = $agri_parcent + $agri_incourse;
															$agri_total_tt = $agri_parcent_t + $agri_incourse;//use form 
															$agri_gpa = gpacal($agri_total_tt);
															$agri_gread = greadcal($agri_total_tt);
															$agri_status = status($agri_gpa);
															
															if($agri_gpa >= 2){
																$agri_gpa_t = $agri_gpa - 2;
															}else{
																$agri_gpa_t = 0;
															}
															
															include 'failcount.php';
															
															$total_mark = $quran_hadith + $arabic + $fiqh_total + $bangla_total + $english_total + $math_total + $ph_total + $ch_total + $bio_total + $agri_total;
																
															//GPA Calculation 
															if($quran_hadith_gpa > 0 && $arabic_gpa > 0 && $fiqh_gpa > 0 && $bangla_gpa > 0 && $english_gpa > 0 && $math_gpa > 0 && $ph_gpa > 0 && $ch_gpa > 0 && $bio_gpa && $agri_gpa_t >= 0){	
															$science = ($quran_hadith_gpa + $arabic_gpa + $fiqh_gpa + $bangla_gpa + $english_gpa + $math_gpa + $ph_gpa + $ch_gpa + $bio_gpa + $agri_gpa_t) / 9;
															$science_out_opt = ($quran_hadith_gpa + $arabic_gpa + $fiqh_gpa + $bangla_gpa + $english_gpa + $math_gpa + $ph_gpa + $ch_gpa + $bio_gpa) / 9;
															}else{
																$science = 0.00;
																$science_out_opt = 0.00;
															}
															$gpa_without_opt = round($science_out_opt,2);
															$hum = round($science,2);
															$gpa = gpa_total($hum);
															
															// Gread Calculation
															$gread = total_gread($gpa);
															$status = status($gpa);
															// Sql code
															//$sql = "INSERT INTO class_nine(user_id, name, roll, classs, semester, year, department, quran_mcq, quran_wr, quran_total, quran_gpa, quran_gread, quran_status, hadith, hadith_gpa, hadith_gread, hadith_status, quran_hadith, quran_hadith_gpa, quran_hadith_gread, quran_hadith_status, arabic1st, arabic1st_gpa, arabic1st_gread, arabic1st_status, arabic2nd, arabic2nd_gpa, arabic2nd_gread, arabic2nd_status, arabic, arabic_gpa, arabic_gread, arabic_status, fiqh, fiqh_gpa, fiqh_gread, fiqh_status, bangla1_mcq, bangla1_wr, bangla1_total, bangla1_gpa, bangla1_gread, bangla1_status, bangla2_mcq, bangla2_wr, bangla2_total, bangla2_gpa, bangla2_gread, bangla2_status, bangla_total, bangla_gpa, bangla_gread, bangla_status, english1st, english1st_gpa, english1st_gread, english1st_status, english2nd, english2nd_gpa, english2nd_gread, english2nd_status, english_total, english_gpa, english_gread, english_status, math_mcq, math_wr, math_total, math_gpa, math_gread, math_status, ph_mcq, ph_wr, ph_pt, ph_total, ph_gpa, ph_gread, ph_status, ch_mcq, ch_wr, ch_pt, ch_total, ch_gpa, ch_gread, ch_status, bio_mcq, bio_wr, bio_pt, bio_total, bio_gpa, bio_gread, bio_status, agri_mcq, agri_wr, agri_pt, agri_total, agri_gpa, agri_gpa_t, agri_gread, agri_status, gpa_without_opt, gpa, gread, status) VALUES('$user_id', '$name', '$roll', '$classs', '$semester', '$year', '$department', '$quran_mcq', '$quran_wr', '$quran_total', '$quran_gpa', '$quran_gread', '$quran_status', '$hadith', '$hadith_gpa', '$hadith_gread', '$hadith_status', '$quran_hadith', '$quran_hadith_gpa', '$quran_hadith_gread', '$quran_hadith_status', '$arabic1st', '$arabic1st_gpa', '$arabic1st_gread', '$arabic1st_status', '$arabic2nd', '$arabic2nd_gpa', '$arabic2nd_gread', '$arabic2nd_status', '$arabic', '$arabic_gpa', '$arabic_gread', '$arabic_status', '$fiqh', '$fiqh_gpa', '$fiqh_gread', '$fiqh_status', '$bangla1_mcq', '$bangla1_wr', '$bangla1_total', '$bangla1_gpa', '$bangla1_gread', '$bangla1_status', '$bangla2_mcq', '$bangla2_wr', '$bangla2_total', '$bangla2_gpa', '$bangla2_gread', '$bangla2_status', '$bangla_total', '$bangla_gpa', '$bangla_gread', '$bangla_status', '$english1st', '$english1st_gpa', '$english1st_gread', '$english1st_status', '$english2nd', '$english2nd_gpa', '$english2nd_gread', '$english2nd_status', '$english_total', '$english_gpa', '$english_gread', '$english_status', '$math_mcq', '$math_wr', '$math_total', '$math_gpa', '$math_gread', '$math_status', '$ph_mcq', '$ph_wr', '$ph_pt', '$ph_total', '$ph_gpa', '$ph_gread', '$ph_status', '$ch_mcq', '$ch_wr', '$ch_pt', '$ch_total', '$ch_gpa', '$ch_gread', '$ch_status', '$bio_mcq', '$bio_wr', '$bio_pt', '$bio_total', '$bio_gpa', '$bio_gread', '$bio_status', '$agri_mcq', '$agri_wr', '$agri_pt', '$agri_total', '$agri_gpa', '$agri_gpa_t', '$agri_gread', '$agri_status', '$gpa_without_opt', '$gpa', '$gread', '$status')";
															$sql = "INSERT INTO $table(admin_id, name, roll, student_id, classs, semester, year, department, quran_mcq, quran_wr, quran_mcq_wr, quran_parcent, quran_incourse, quran_total, quran_gpa, quran_gread, quran_status, hadith, hadith_parcent, hadith_incourse, hadith_total, hadith_gpa, hadith_gread, hadith_status, quran_hadith, quran_hadith_gpa, quran_hadith_gread, quran_hadith_status, arabic1st, arabic1st_parcent, arabic1st_incourse, arabic1st_total, arabic1st_gpa, arabic1st_gread, arabic1st_status, arabic2nd, arabic2nd_parcent, arabic2nd_incourse, arabic2nd_total, arabic2nd_gpa, arabic2nd_gread, arabic2nd_status, arabic, arabic_gpa, arabic_gread, arabic_status, fiqh, fiqh_parcent, fiqh_incourse, fiqh_total, fiqh_gpa, fiqh_gread, fiqh_status, bangla1_mcq, bangla1_wr, bangla1_mcq_wr, bangla1_parcent, bangla1_incourse, bangla1_total, bangla1_gpa, bangla1_gread, bangla1_status, bangla2_mcq, bangla2_wr, bangla2_mcq_wr, bangla2_parcent, bangla2_incourse, bangla2_total, bangla2_gpa, bangla2_gread, bangla2_status, bangla_total, bangla_gpa, bangla_gread, bangla_status, english1st, english1st_parcent, english1st_incourse, english1st_total, english1st_gpa, english1st_gread, english1st_status, english2nd, english2nd_parcent, english2nd_incourse, english2nd_total, english2nd_gpa, english2nd_gread, english2nd_status, english_total, english_gpa, english_gread, english_status, math_mcq, math_wr, math_mcq_wr, math_parcent, math_incourse, math_total, math_gpa, math_gread, math_status, ph_mcq, ph_wr, ph_pt, ph_mcq_wr_pt, ph_parcent, ph_incourse, ph_total, ph_gpa, ph_gread, ph_status, ch_mcq, ch_wr, ch_pt, ch_mcq_wr_pt, ch_parcent, ch_incourse, ch_total, ch_gpa, ch_gread, ch_status, bio_mcq, bio_wr, bio_pt, bio_mcq_wr_pt, bio_parcent, bio_incourse, bio_total, bio_gpa, bio_gread, bio_status, agri_mcq, agri_wr, agri_pt, agri_mcq_wr_pt, agri_parcent, agri_incourse, agri_total, agri_gpa, agri_gpa_t, agri_gread, agri_status, total_mark, gpa_without_opt, gpa, gread, status, total_fail, insert_time) VALUES('$admin_id', '$name', '$roll', '$student_id', '$classs', '$semester', '$year', '$department', '$quran_mcq', '$quran_wr', '$quran_mcq_wr', '$quran_parcent', '$quran_incourse', '$quran_total', '$quran_gpa', '$quran_gread', '$quran_status', '$hadith', '$hadith_parcent', '$hadith_incourse', '$hadith_total', '$hadith_gpa', '$hadith_gread', '$hadith_status', '$quran_hadith', '$quran_hadith_gpa', '$quran_hadith_gread', '$quran_hadith_status', '$arabic1st', '$arabic1st_parcent', '$arabic1st_incourse', '$arabic1st_total', '$arabic1st_gpa', '$arabic1st_gread', '$arabic1st_status', '$arabic2nd', '$arabic2nd_parcent', '$arabic2nd_incourse', '$arabic2nd_total', '$arabic2nd_gpa', '$arabic2nd_gread', '$arabic2nd_status', '$arabic', '$arabic_gpa', '$arabic_gread', '$arabic_status', '$fiqh', '$fiqh_parcent', '$fiqh_incourse', '$fiqh_total', '$fiqh_gpa', '$fiqh_gread', '$fiqh_status', '$bangla1_mcq', '$bangla1_wr', '$bangla1_mcq_wr', '$bangla1_parcent', '$bangla1_incourse', '$bangla1_total', '$bangla1_gpa', '$bangla1_gread', '$bangla1_status', '$bangla2_mcq', '$bangla2_wr', '$bangla2_mcq_wr', '$bangla2_parcent', '$bangla2_incourse', '$bangla2_total', '$bangla2_gpa', '$bangla2_gread', '$bangla2_status', '$bangla_total', '$bangla_gpa', '$bangla_gread', '$bangla_status', '$english1st', '$english1st_parcent', '$english1st_incourse', '$english1st_total', '$english1st_gpa', '$english1st_gread', '$english1st_status', '$english2nd', '$english2nd_parcent', '$english2nd_incourse', '$english2nd_total', '$english2nd_gpa', '$english2nd_gread', '$english2nd_status', '$english_total', '$english_gpa', '$english_gread', '$english_status', '$math_mcq', '$math_wr', '$math_mcq_wr', '$math_parcent', '$math_incourse', '$math_total', '$math_gpa', '$math_gread', '$math_status', '$ph_mcq', '$ph_wr', '$ph_pt', '$ph_mcq_wr_pt', '$ph_parcent', '$ph_incourse', '$ph_total', '$ph_gpa', '$ph_gread', '$ph_status', '$ch_mcq', '$ch_wr', '$ch_pt', '$ch_mcq_wr_pt', '$ch_parcent', '$ch_incourse', '$ch_total', '$ch_gpa', '$ch_gread', '$ch_status', '$bio_mcq', '$bio_wr', '$bio_pt', '$bio_mcq_wr_pt', '$bio_parcent', '$bio_incourse', '$bio_total', '$bio_gpa', '$bio_gread', '$bio_status', '$agri_mcq', '$agri_wr', '$agri_pt', '$agri_mcq_wr_pt', '$agri_parcent', '$agri_incourse', '$agri_total', '$agri_gpa', '$agri_gpa_t', '$agri_gread', '$agri_status', '$total_mark', '$gpa_without_opt', '$gpa', '$gread', '$status', '$total_fail', '$insert_time')";
																
															$result = mysqli_query($con, $sql);
															//echo var_dump($sql);
															if($result){
																$msg['success'] = "<b>Successfully Inserted All Data  GPA: </b>".$gpa." Grade: ".$gread." Status: ".$status;
															}else{
																$msg['error'] = "Something Problem";
															}
														}else{
															$msg['error'] = "(Agricultural Studies) Your Current Input MCQ = (".$agri_mcq."), CQ = (".$agri_wr.")"." PT = (".$agri_pt.") Incourse = (".$agri_incourse.") You Must Entered  MCQ <= 25 AND CQ <= 50 AND PT <= 25 and Incourse <= 20";
														}
													}else{
														$msg['error'] = "(Biology) Your Current Input MCQ = (".$bio_mcq."), CQ = (".$bio_wr."), PT = (".$bio_pt.") and Incourse = (".$bio_incourse.") You Must Entered  MCQ <= 25, CQ <= 50, PT <= 25 and Incourse <= 20";
													}
												}else{
													$msg['error'] = "(Chemistry) Your Current Input MCQ = (".$ch_mcq."), CQ = (".$ch_wr."), PT = (".$ch_pt.") and Incourse = (".$ch_incourse.") You Must Entered  MCQ <= 25, CQ <= 50, PT <= 25 and Incourse <= 20";
												}
											}else{
												$msg['error'] = "(Physics) Your Current Input MCQ = (".$ph_mcq."), CQ = (".$ph_wr."), PT = (".$ph_pt.") and Incourse = (".$ph_incourse.") You Must Entered Physics MCQ <= 25, CQ <= 50, PT <= 25 and Incourse <= 20";
											}
										}else{
											$msg['error'] = "(Mathmatic) Your Current Input MCQ = (".$math_mcq."), CQ = (".$math_wr.") and Incourse = (".$math_incourse.") You Must Entered Math MCQ <= 30, CQ <= 70 and Incourse <= 20";
										}
									}
									else{
										$msg['error'] = "(English) Your Current Input English1st = (".$english1st."), Eng1. Incourse = (".$english1st_incourse.") and English2nd = (".$english2nd."), Eng2. Incourse = (".$english2nd_incourse.") You Must Entered English1st <= 100, Incourse <= 20 AND English2nd <= 100, Incourse <= 20";
									}
								}else{
									$msg['error'] = "(Bangla 2nd) Your Current Input MCQ = (".$bangla2_mcq."), CQ = (".$bangla2_wr.") and Incourse = (".$bangla2_incourse.") You Must Entered MCQ <= 30, CQ <= 70 and Incourse <= 20";
								}
							}else{
								$msg['error'] = "(Bangla 1st) Your Current Input MCQ = (".$bangla1_mcq."), CQ = (".$bangla1_wr.") and (".$bangla1_incourse.") You Must Entered MCQ <= 30, CQ <= 70 and Incourse <= 20";
							}
						}else{
							$msg['error'] = "(Fiqh and U.Fiqh) Your Current Input Fiqh = (".$fiqh.") and Incourse = (".$fiqh_incourse.") You Must Entered Fiqh <= 100 and Incourse <= 20";
						}
					}else{
						$msg['error'] = "(Arabic) Your Current Input Arabic1st = (".$arabic1st."), Incourse = (".$arabic1st_incourse.") and Arabic 2nd = (".$arabic2nd."), Incourse = (".$arabic2nd_incourse.") You Must Entered A1 <= 100, Incourse <= 20 and A2 <= 100, Incourse <= 20";
					}
				}else{
					$msg['error'] = "(Hadith Sharif)"." Your Current Input Mark = (".$hadith.") and Incourse = (".$hadith_incourse.") You Must Entered Hadith <= 100 and Incourse <= 20";
				}
			}else{
				$msg['error'] = "(Quran Mazid) ". "Your Current Input MCQ = (".$quran_mcq.") CQ = (".$quran_wr.") and Incourse = (".$quran_incourse.") Your Must Entered Quran MCQ <= 30, CQ <= 70 and Incourse <= 20";
			}
		}else{
			$msg['error'] = "Name, Roll, Semester and Year Are Required";
		}
	}
?>