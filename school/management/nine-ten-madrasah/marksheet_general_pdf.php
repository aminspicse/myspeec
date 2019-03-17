<?php
	// $con = new mysqli("localhost","root", "", "management");
	require('../fpdf/round_rect.php');
	date_default_timezone_set("Asia/Dhaka");	
	  if(isset($_GET['generate'])){
		  $table = $_GET['table'];
		  $semester = $_GET['semester'];
		  $year = $_GET['year'];
		  $admin_id = $_GET['ses'];
		  $school_name = $_GET['school_name'];
		  $class = $_GET['class'];
		  $date1 = $_GET['date'];
		   // Prepaired Of Marksheet
		  $prepaired_type = $_GET['prepaired_type'];
		  $prepaired_name = $_GET['prepaired_name'];
		  // Examination Head/Controller
		  $examhead_type = $_GET['examhead_type'];
		  $examhead_name = $_GET['examhead_name'];
		  // Institute Head Master
		  $head_type = $_GET['head_type'];
		  $head_name = $_GET['head_name'];
		  
		  $department = $_GET['department'];
		  $second_line = $_GET['second_line'];
		  $institute_logu = $_GET['institute_logu'];
		  if($date1 == true){
			  $date = $date1;
		  }else{
			  $date = date('d-m-y');
		  }
		 
		 $tables = $table;
		 $times = date("h:i:s A");
		 $insert = "INSERT INTO generate_marksheet(admin_id, tables, semester, year, school_name, class, prepaired_type, prepaired_name, examhead_type, examhead_name, head_type, head_name, department, second_line, institute_logu, date, times)VALUES('$admin_id', '$tables', '$semester', '$year', '$school_name', '$class', '$prepaired_type', '$prepaired_name', '$examhead_type', '$examhead_name', '$head_type', '$head_name', '$department', '$second_line', '$institute_logu', '$date', '$times')";
		 $conn->query($insert);
	  }
	 
	$sql = "SELECT * FROM $table WHERE admin_id = '$admin_id' and classs = '$class' and semester = '$semester' and year = '$year' and department = '$department' and delete_status = '0' ORDER BY gpa DESC, total_fail ASC, total_mark DESC";
	$exe = $conn->query($sql);

	$pdf = new PDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetLeftMargin(20);
	$pdf->SetTitle('Marksheet General',false);
	
	while($result = $exe->fetch_assoc()){
	
	$pdf->SetFont('Arial','u',14);
	$pdf->Cell(170,6,'ACADEMIC TRANSCRIPT',0,1,'C');
	
	$pdf->SetFont('arial','b',20);
	$pdf->Cell(170,8,$school_name,0,1,'C');
	
	$pdf->SetFont('arial','',14);
	$pdf->Cell(170,6,$second_line,0,1,'C');
	
	$pdf->SetFont('arial','',14);
	$pdf->Cell(170,7, $semester.' Examination - '. $year,0,1,'C');
	
	$pdf->SetFont('arial','b',14);
	$pdf->Cell(170,7, " Class: ".$class."",0,1,'C');
	
	$pdf->Cell(170,5,'',0,1);
	
	$pdf->SetFont('arial','',12);
	$pdf->Cell(30,10,'Semester ID:',1);
	$pdf->Cell(8,10,'10',1);
	$pdf->Cell(20,10,$result['id'],1,0);
	
	$pdf->Cell(61,20,'Logo',0,0,'C');
	$pdf->Image($institute_logu,90,47,40,35);
	
	//right side
	$pdf->SetFont('arial','',10);
	$pdf->Cell(21,5,'Letter Grade',1,0,'C');
	$pdf->Cell(22,5,'Class Interval',1,0,'C');
	$pdf->Cell(8,5,'G P',1,1,'C');
	
	$pdf->SetFont('arial','',10);
	$pdf->Cell(119,5,'',0,0);
	$pdf->Cell(21,5,'A+',1,0,'C');
	$pdf->Cell(22,5,'80-100',1,0,'C');
	$pdf->Cell(8,5,'5.00',1,1,'C');
	
	$pdf->Cell(119,5,'',0,0);
	$pdf->Cell(21,5,'A',1,0,'C');
	$pdf->Cell(22,5,'70-79',1,0,'C');
	$pdf->Cell(8,5,'4.00',1,1,'C');

	$pdf->Cell(119,5,'',0,0);
	$pdf->Cell(21,5,'A-',1,0,'C');
	$pdf->Cell(22,5,'60-69',1,0,'C');
	$pdf->Cell(8,5,'3.50',1,1,'C');
	
	$pdf->Cell(119,5,'',0,0);
	$pdf->Cell(21,5,'B',1,0,'C');
	$pdf->Cell(22,5,'50-59',1,0,'C');
	$pdf->Cell(8,5,'3.00',1,1,'C');
	
	$pdf->Cell(119,5,'',0,0);
	$pdf->Cell(21,5,'C',1,0,'C');
	$pdf->Cell(22,5,'40-49',1,0,'C');
	$pdf->Cell(8,5,'2.00',1,1,'C');
	
	$pdf->Cell(119,5,'',0,0);
	$pdf->Cell(21,5,'D',1,0,'C');
	$pdf->Cell(22,5,'33-39',1,0,'C');
	$pdf->Cell(8,5,'1.00',1,1,'C');

	$pdf->Cell(119,5,'',0,0);
	$pdf->SetFont('arial','',10);
	$pdf->Cell(21,5,'F',1,0,'C');
	$pdf->Cell(22,5,'00-32',1,0,'C');
	$pdf->Cell(8,5,'00',1,1,'C');
	
	$pdf->SetFont('arial','',12);
	$pdf->Cell(30,7,'Name',0,0);
	$pdf->Cell(10,7,':',0,0);
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(74,7,$result['name'],0,1);
	
	$pdf->SetFont('arial','',12);
	$pdf->Cell(30,7,'Roll',0,0);
	$pdf->Cell(10,7,':',0,0);
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(50,7,$result['roll'],0,0);
	
	$pdf->SetFont('arial','',12);
	$pdf->Cell(30,7,'Group',0,0);
	$pdf->Cell(5,7,':',0,0);
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(40,7,$result['department'],0,1);
	
	$pdf->SetFont('arial','',12);
	$pdf->Cell(30,7,'Result Status',0,0);
	$pdf->Cell(10,7,':',0,0);
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(50,7,$result['status'],0,0);
	
	$pdf->SetFont('arial','',12);
	$pdf->Cell(30,7,'Admin Code',0,0);
	$pdf->Cell(5,7,':',0,0);
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(40,7,$result['admin_id'],0,1);
	
	$pdf->SetFont('arial','',12);
	$pdf->Cell(30,7,'Merit Position',0,0);
	$pdf->Cell(10,7,':',0,0);
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(50,7,$pdf->PageNo(),0,0);
	
	$pdf->SetFont('arial','',12);
	$pdf->Cell(30,7,'Student ID',0,0);
	$pdf->Cell(5,7,':',0,0);
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(40,7,$result['student_id'],0,1);
	
	$pdf->Cell(170,6,'',0,1);
	
	$pdf->SetFont('arial','b', 12);
	$pdf->Cell(8,8,'S.L',1,0,'C');
	$pdf->Cell(60,8,'Subject Name',1,0,'C');
	$pdf->Cell(10,8,'MCQ',1,0,'C');
	$pdf->Cell(10,8,'CQ',1,0,'C');
	$pdf->Cell(10,8,'PT',1,0,'C');
	$pdf->Cell(13,8,'Act.',1,0,'C');
	$pdf->Cell(15,8,'80%',1,0,'C');
	$pdf->Cell(10,8,'Inc.',1,0,'C');
	$pdf->Cell(15,8,'Total',1,0,'C');
	$pdf->Cell(10,8,'LG',1,0,'C');
	$pdf->Cell(12,8,'GP',1,1,'C');

	$pdf->SetFont('arial','', 12);
	$pdf->Cell(8,6,'01',1,0,'C');
	$pdf->Cell(60,6,'Quran Mazid',1,0,'L');
	$pdf->Cell(10,6,$result['quran_mcq'],1,0,'C');
	$pdf->Cell(10,6,$result['quran_wr'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['quran_mcq'] + $result['quran_wr'],1,0,'C');
	$pdf->Cell(15,6,$result['quran_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['quran_incourse'],1,0,'C');
	$pdf->Cell(15,12,$result['quran_hadith'],1,0,'C');
	$pdf->Cell(10,12,$result['quran_gread'],1,0,'C');
	$pdf->Cell(12,12,$result['quran_gpa'],1,0,'C');
	$pdf->Cell(0,6,'',0,1,'C');
	
	$pdf->Cell(8,6,'02',1,0,'C');
	$pdf->Cell(60,6,'Hadith Sarif',1,0,'L');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['hadith'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['hadith'],1,0,'C');
	$pdf->Cell(15,6,$result['hadith_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['hadith_incourse'],1,1,'C');
	
	$pdf->Cell(8,6,'03',1,0,'C');
	$pdf->Cell(60,6,'Arabic I',1,0,'L');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['arabic1st'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['arabic1st'],1,0,'C');
	$pdf->Cell(15,6,$result['arabic1st_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['arabic1st_incourse'],1,0,'C');
	$pdf->Cell(15,12,$result['arabic'],1,0,'C');
	$pdf->Cell(10,12,$result['arabic_gread'],1,0,'C');
	$pdf->Cell(12,12,$result['arabic_gpa'],1,0,'C');
	$pdf->Cell(1,6,'',0,1);

	$pdf->Cell(8,6,'04',1,0,'C');
	$pdf->Cell(60,6,'Arabic II',1,0,'L');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['arabic2nd'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['arabic2nd'],1,0,'C');
	$pdf->Cell(15,6,$result['arabic2nd_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['arabic2nd_incourse'],1,1,'C');
	
	$pdf->Cell(8,6,'05',1,0,'C');
	$pdf->Cell(60,6,'Fiqh And Usul - E - Fiqh',1,0,'L');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['fiqh'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['fiqh'],1,0,'C');
	$pdf->Cell(15,6,$result['fiqh_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['fiqh_incourse'],1,0,'C');
	$pdf->Cell(15,6,$result['fiqh_total'],1,0,'C');
	$pdf->Cell(10,6,$result['fiqh_gread'],1,0,'C');
	$pdf->Cell(12,6,$result['fiqh_gpa'],1,1,'C');
	
	$pdf->Cell(8,6,'06',1,0,'C');
	$pdf->Cell(60,6,'Bangla I',1,0,'L');
	$pdf->Cell(10,6,$result['bangla1_mcq'],1,0,'C');
	$pdf->Cell(10,6,$result['bangla1_wr'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['bangla1_mcq'] + $result['bangla1_wr'],1,0,'C');
	$pdf->Cell(15,6,$result['bangla1_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['bangla1_incourse'],1,0,'C');
	$pdf->Cell(15,12,$result['bangla_total'],1,0,'C');
	$pdf->Cell(10,12,$result['bangla_gread'],1,0,'C');
	$pdf->Cell(12,12,$result['bangla_gpa'],1,0,'C');
	$pdf->Cell(1,6,'',0,1);
	
	$pdf->Cell(8,6,'07',1,0,'C');
	$pdf->Cell(60,6,'Bangla II',1,0,'L');
	$pdf->Cell(10,6,$result['bangla2_mcq'],1,0,'C');
	$pdf->Cell(10,6,$result['bangla2_wr'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['bangla2_mcq'] + $result['bangla2_wr'],1,0,'C');
	$pdf->Cell(15,6,$result['bangla2_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['bangla2_incourse'],1,1,'C');
	
	$pdf->Cell(8,6,'08',1,0,'C');
	$pdf->Cell(60,6,'English I',1,0,'L');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['english1st'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['english1st'],1,0,'C');
	$pdf->Cell(15,6,$result['english1st_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['english1st_incourse'],1,0,'C');
	$pdf->Cell(15,12,$result['english_total'],1,0,'C');
	$pdf->Cell(10,12,$result['english_gread'],1,0,'C');
	$pdf->Cell(12,12,$result['english_gpa'],1,0,'C');
	$pdf->Cell(1,6,'',0,1,'C');
	
	$pdf->Cell(8,6,'09',1,0,'C');
	$pdf->Cell(60,6,'English II',1,0,'L');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['english2nd'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['english2nd'],1,0,'C');
	$pdf->Cell(15,6,$result['english2nd_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['english2nd_incourse'],1,1,'C');
	
	
	$pdf->Cell(8,6,'10',1,0,'C');
	$pdf->Cell(60,6,'Mathmatics	',1,0,'L');
	$pdf->Cell(10,6,$result['math_mcq'],1,0,'C');
	$pdf->Cell(10,6,$result['math_wr'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['math_mcq'] + $result['math_wr'],1,0,'C');
	$pdf->Cell(15,6,$result['math_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['math_incourse'],1,0,'C');
	$pdf->Cell(15,6,$result['math_total'],1,0,'C');
	$pdf->Cell(10,6,$result['math_gread'],1,0,'C');
	$pdf->Cell(12,6,$result['math_gpa'],1,1,'C');
	
	$pdf->Cell(8,6,'11',1,0,'C');
	$pdf->Cell(60,6,'Islamic History',1,0,'L');
	$pdf->Cell(10,6,$result['ih_mcq'],1,0,'C');
	$pdf->Cell(10,6,$result['ih_wr'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(13,6,$result['ih_mcq'] + $result['ih_wr'],1,0,'C');
	$pdf->Cell(15,6,$result['ih_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['ih_incourse'],1,0,'C');
	$pdf->Cell(15,6,$result['ih_total'],1,0,'C');
	$pdf->Cell(10,6,$result['ih_gread'],1,0,'C');
	$pdf->Cell(12,6,$result['ih_gpa'],1,1,'C');
	
	$pdf->Cell(8,6,'12',1,0,'C');
	$pdf->Cell(60,6,'Information and C. Technology',1,0,'L');
	$pdf->Cell(10,6,$result['ict_mcq'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['ict_pt'],1,0,'C');
	$pdf->Cell(13,6,$result['ict_mcq'] + $result['ict_pt'],1,0,'C');
	$pdf->Cell(15,6,$result['ict_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['ict_incourse'],1,0,'C');
	$pdf->Cell(15,6,$result['ict_total'],1,0,'C');
	$pdf->Cell(10,6,$result['ict_gread'],1,0,'C');
	$pdf->Cell(12,6,$result['ict_gpa'],1,1,'C');
	
	$pdf->Cell(126,6,'Additional Subject:',0,0,'L');
	$pdf->Cell(35,6,'GP above 2',1,0,'C');
	$pdf->Cell(12,6,$result['agri_gpa_t'],1,1,'C');
	
	$pdf->Cell(8,6,'13',1,0,'C');
	$pdf->Cell(60,6,'Agriculture Studies',1,0,'L');
	$pdf->Cell(10,6,$result['agri_mcq'],1,0,'C');
	$pdf->Cell(10,6,$result['agri_wr'],1,0,'C');
	$pdf->Cell(10,6,$result['agri_pt'],1,0,'C');
	$pdf->Cell(13,6,$result['agri_mcq'] + $result['agri_wr'] + $result['agri_pt'],1,0,'C');
	$pdf->Cell(15,6,$result['agri_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['agri_incourse'],1,0,'C');
	$pdf->Cell(15,6,$result['agri_total'],1,0,'C');
	$pdf->Cell(10,6,$result['agri_gread'],1,0,'C');
	$pdf->Cell(12,6,$result['agri_gpa'],1,1,'C');
	
	$pdf->Cell(173,6,'SUBJECT WISE GRADE/MARKS FOR CONTINUOUS ASSESMENT',1,1,'C');

	$pdf->Cell(8,6,'14',1,0,'C');
	$pdf->Cell(60,6,'Carrer Studies',1,0,'L');
	$pdf->Cell(10,6,$result['carrer_mcq'],1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['carrer_pt'],1,0,'C');
	$pdf->Cell(13,6,$result['carrer_mcq'] + $result['carrer_pt'],1,0,'C');
	$pdf->Cell(15,6,$result['carrer_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['carrer_incourse'],1,0,'C');
	$pdf->Cell(15,6,$result['carrer_total'],1,0,'C');
	$pdf->Cell(10,6,$result['carrer_gread'],1,0,'C');
	$pdf->Cell(12,6,$result['carrer_gpa'],1,1,'C');
	
	$pdf->Cell(8,6,'15',1,0,'C');
	$pdf->Cell(60,6,'Physical Education',1,0,'L');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,'',1,0,'C');
	$pdf->Cell(10,6,$result['physical'],1,0,'C');
	$pdf->Cell(13,6,$result['physical'],1,0,'C');
	$pdf->Cell(15,6,$result['physical_parcent'],1,0,'C');
	$pdf->Cell(10,6,$result['physical_incourse'],1,0,'C');
	$pdf->Cell(15,6,$result['physical_total'],1,0,'C');
	$pdf->Cell(10,6,$result['physical_gread'],1,0,'C');
	$pdf->Cell(12,6,$result['physical_gpa'],1,1,'C');

	
	$pdf->Cell(170,4,'',0,1);
	
	$pdf->SetFont('arial','b', 12);
	$pdf->Cell(98,7,'GPA (without additional subject) : ' .$result['gpa_without_opt'],1,0,'L');
	$pdf->Cell(38,7,'GPA : ' .$result['gpa'],1,0,'C');
	$pdf->Cell(37,7,'Grade : ' .$result['gread'],1,1,'C');
	
	$pdf->Cell(170,2,'',0,1);
	$pdf->Cell(170,5,'Result Published on : ' .$date,0,1,'L');
	
	$pdf->Cell(170,16,'',0,1);
	
		$pdf->SetFont('arial','B',10);
		$pdf->Cell(5,1,'',0,0);
		$pdf->Cell(40,1,'-------------------------------------',0,0,'C');
		$pdf->Cell(85,1,'-------------------------------------',0,0,'C');
		$pdf->Cell(40,1,'-------------------------------------',0,1,'C');
		
		$pdf->Cell(5,4,'',0,0);
		$pdf->Cell(40,4,$prepaired_name,0,0,'C');
		$pdf->Cell(85,4,$examhead_name,0,0,'C');
		$pdf->Cell(40,4,$head_name,0,1,'C');
		
		$pdf->SetFont('arial','i',10);
		$pdf->Cell(5,4,'',0,0);
		$pdf->Cell(40,4,$prepaired_type,0,0,'C');
		$pdf->Cell(85,4,$examhead_type,0,0,'C');
		$pdf->Cell(40,4,$head_type,0,1,'C');
	
	//Start page Margin
	$pdf->SetFillColor(150);
	$pdf->RoundedRect(10, 10, 190, 275, 5, '0');
	//End Page Margin
	}
		
	$pdf->Output();
	
	
	
?>