<?php
	require_once('../fpdf/round_rect.php');
	date_default_timezone_set("Asia/Dhaka");
	  if(isset($_GET['tabulation'])){
		  $table = $_GET['table'];
		  $semester = $_GET['semester'];
		  $year = $_GET['year'];
		  $admin_id = $_GET['ses'];
		  $school_name = $_GET['school_name'];
		  $class = $_GET['class'];
		  $date1 = $_GET['date'];
		  //$head = $_GET['head'];
		  //$head_name = $_GET['head_name'];
		  //$class_teacher = $_GET['class_teacher'];
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
		 $insert = "INSERT INTO generate_marksheet(admin_id, tables, semester, year, school_name, class, department, second_line, institute_logu, date, times)VALUES('$admin_id', '$tables', '$semester', '$year', '$school_name', '$class', '$department', '$second_line', '$institute_logu', '$date', '$times')";
		 $conn->query($insert);
	  }
	 
	$sql = "SELECT * FROM $table WHERE admin_id = '$admin_id' and classs = '$class' and semester = '$semester' and year = '$year' and department = '$department' and delete_status = '0' ORDER BY gpa DESC, total_mark DESC";
	$exe = $conn->query($sql);
	
	
	
	class PDFI extends PDF
	{
	// Page header
			
	 
	function Header()
	{
		// Logo
		//$this->Image($institute_logu,10,6,30);
		// Arial bold 15
		//$this->SetFont('Arial','B',15);
		// Move to the right
		//$this->Cell(80);
		// Title
		//$this->Cell(30,10,$school_name,1,0,'C');
		// Line break
	$this->Ln(7);
	$this->SetFont('Times','b',14);
	$this->Cell(15,16,'Roll',1,0,'C');
	$this->Cell(50,16,'Name',1,0,'C');
	$this->SetFont('Times','b',10);
	$this->Cell(24,4,'Quran Mazid',1,0,'C');
	$this->Cell(16,4,'Hadith',1,0,'C');
	$this->Cell(10,4,'Q.H',1,0,'C');
	$this->Cell(16,4,'Arabic I',1,0,'C');
	$this->Cell(16,4,'Arabic II',1,0,'C');
	$this->Cell(10,4,'Arabic',1,0,'C');
	$this->Cell(16,4,'Fiqh',1,0,'C');
	$this->Cell(24,4,'Bangla I',1,0,'C');
	$this->Cell(24,4,'Bangla II',1,0,'C');
	$this->Cell(10,4,'Bang.',1,0,'C');
	$this->Cell(16,4,'English I',1,0,'C');
	$this->Cell(16,4,'English II',1,0,'C');
	$this->Cell(10,4,'Eng.',1,0,'C');
	$this->Cell(24,4,'Mathmatic',1,0,'C');
	$this->Cell(24,4,'Physics',1,0,'C');
	$this->Cell(24,4,'Chemistry',1,0,'C');
	$this->Cell(24,4,'Biology',1,0,'C');
	$this->Cell(24,4,'Agriculture',1,0,'C');
	$this->Cell(20,4,'Total',1,0,'C');
	//$this->Cell(40,16,'Remarks',1,0,'C');
	$this->Cell(1,4,'',0,1,'C');
	
	//MCQ CQ Act. 1st row
		//Quran Mazid
	$this->SetFont('Times','',9);
	$this->Cell(65,4,'',0,0);
	$this->Cell(8,4,'MCQ',1,0,'C');
	$this->Cell(8,4,'CQ',1,0,'C');
	$this->Cell(8,4,'Act',1,0,'C');
		// Hadith Saraf 
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
		//Quran Hadith
	$this->Cell(10,4,'Total',1,0,'C');
		
	// Arabic I 
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
		// Arabic II 
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
		//Arabic
	$this->Cell(10,4,'Total',1,0,'C');
		//fiqh
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
		//bangla 1
	$this->Cell(8,4,'MCQ',1,0,'C');
	$this->Cell(8,4,'CQ',1,0,'C');
	$this->Cell(8,4,'Act.',1,0,'C');
		//Bangla 2
	$this->Cell(8,4,'MCQ',1,0,'C');
	$this->Cell(8,4,'CQ',1,0,'C');
	$this->Cell(8,4,'Act.',1,0,'C');
		//Bangla
	$this->Cell(10,4,'Total',1,0,'C');
		
		//english1st
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
		
		//english2nd
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
		//English
	$this->Cell(10,4,'Total',1,0,'C');
		
		//Mathmatic
	$this->Cell(8,4,'MCQ',1,0,'C');
	$this->Cell(8,4,'CQ',1,0,'C');
	$this->Cell(8,4,'Act.',1,0,'C');
		//Physics  
	$this->Cell(8,4,'MCQ',1,0,'C');
	$this->Cell(8,4,'CQ',1,0,'C');
	$this->Cell(8,4,'PT.',1,0,'C');
		//Chemistry 
	$this->Cell(8,4,'MCQ',1,0,'C');
	$this->Cell(8,4,'CQ',1,0,'C');
	$this->Cell(8,4,'PT.',1,0,'C');
		//Biology
	$this->Cell(8,4,'MCQ',1,0,'C');
	$this->Cell(8,4,'CQ',1,0,'C');
	$this->Cell(8,4,'PT.',1,0,'C');
		//Agriculture
	$this->Cell(8,4,'MCQ',1,0,'C');
	$this->Cell(8,4,'CQ',1,0,'C');
	$this->Cell(8,4,'PT',1,0,'C');
		//Total
	$this->Cell(10,4,'GPA',1,0,'C');
	$this->Cell(10,4,'Grade',1,1,'C');
	
	//80% Incourse and Total 2nd row 
		//Quran Mazid
	$this->SetFont('Times','',9);
	$this->Cell(65,4,'',0,0);
	$this->Cell(8,4,'80%',1,0,'C');
	$this->Cell(8,4,'Inc',1,0,'C');
	$this->Cell(8,4,'Total.',1,0,'C');
		//Hadith Saraf
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		//Quran Hadith
	$this->Cell(10,4,'GPA',1,0,'C');
		
		//Arabic I
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		// Arabic II
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		//Arabic
	$this->Cell(10,4,'GPA',1,0,'C');
		//fiqh
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		//bangla1
	$this->Cell(8,4,'80%',1,0,'C');
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		//Bangla 2
	$this->Cell(8,4,'80%',1,0,'C');
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		//Bangla
	$this->Cell(10,4,'GPA',1,0,'C');
		
		//english1st 
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		//english2nd
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		//Arabic
	$this->Cell(10,4,'GPA',1,0,'C');
		
		//Mathmatic
	$this->Cell(8,4,'80%',1,0,'C');
	$this->Cell(8,4,'Inc.',1,0,'C');
	$this->Cell(8,4,'Total',1,0,'C');
		//Physcis 
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
	$this->Cell(8,4,'Inc.',1,0,'C');
		//Chemistry 
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
	$this->Cell(8,4,'Inc.',1,0,'C');
		//Biology 
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
	$this->Cell(8,4,'Inc.',1,0,'C');
		//Agriculture
	$this->Cell(8,4,'Act.',1,0,'C');
	$this->Cell(8,4,'80%',1,0,'C');
	$this->Cell(8,4,'Inc.',1,0,'C');
		
		//GPA
	$this->Cell(20,4,'Status',1,1,'C');
	
	//MCQ WR Inc. 3rd row
		//Quran Mazid
	$this->SetFont('Times','',9);
	$this->Cell(65,4,'',0,0);
	$this->Cell(16,4,'GPA',1,0,'C');
	$this->Cell(8,4,'LG.',1,0,'C');
		//Hadith Sarif
	$this->Cell(8,4,'GPA',1,0,'C');
	$this->Cell(8,4,'LG',1,0,'C');
		//Quran Hadith
	$this->Cell(10,4,'LG',1,0,'C');
		
		//Arabic I
	$this->Cell(8,4,'GPA',1,0,'C');
	$this->Cell(8,4,'LG',1,0,'C');
		// Arabic II 
	$this->Cell(8,4,'GPA',1,0,'C');
	$this->Cell(8,4,'LG',1,0,'C');
		//Arabic
	$this->Cell(10,4,'LG',1,0,'C');
		//fiqh
	$this->Cell(8,4,'GPA',1,0,'C');
	$this->Cell(8,4,'LG',1,0,'C');
		//bangla1
	$this->Cell(16,4,'GPA',1,0,'C');
	$this->Cell(8,4,'LG',1,0,'C');
		//Bangla 2
	$this->Cell(16,4,'GPA',1,0,'C');;
	$this->Cell(8,4,'LG',1,0,'C');
		//Bangla
	$this->Cell(10,4,'LG',1,0,'C');
		
		//english1st 
	$this->Cell(8,4,'GPA',1,0,'C');
	$this->Cell(8,4,'LG',1,0,'C');
		//english2nd  
	$this->Cell(8,4,'GPA',1,0,'C');
	$this->Cell(8,4,'LG',1,0,'C');
		//Arabic
	$this->Cell(10,4,'LG',1,0,'C');
		
		//Mathmatic
	$this->Cell(16,4,'GPA',1,0,'C');;
	$this->Cell(8,4,'LG',1,0,'C');
		//Physics 
	$this->Cell(8,4,'Total',1,0,'C');;
	$this->Cell(8,4,'GPA',1,0,'C');;
	$this->Cell(8,4,'LG',1,0,'C');
		//Chemistry 
	$this->Cell(8,4,'Total',1,0,'C');;
	$this->Cell(8,4,'GPA',1,0,'C');;
	$this->Cell(8,4,'LG',1,0,'C');
		//Biology
	$this->Cell(8,4,'Total',1,0,'C');;
	$this->Cell(8,4,'GPA',1,0,'C');;
	$this->Cell(8,4,'LG',1,0,'C');
		//Agriculture
	$this->Cell(8,4,'Total',1,0,'C');;
	$this->Cell(8,4,'GPA',1,0,'C');;
	$this->Cell(8,4,'LG',1,0,'C');
		
		//Total
	$this->Cell(20,4,'Merit/Position',1,1);
	
	}

	// Page footer
	function Footer()
	{
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','b',8);
		
		$this->Cell(30,1,"----------------------------------------",0,0,'C');
		$this->Cell(150,1,'',0,0);
		$this->Cell(30,1,"----------------------------------------",0,0,'C');
		$this->Cell(150,1,'',0,0);
		$this->Cell(30,1,"----------------------------------------",0,1,'C');
		
		$this->Cell(30,4,"Prepared/Class Teacher",0,0,'C');
		$this->Cell(150,4,'',0,0);
		$this->Cell(30,4,"Controlar of Examination",0,0,'C');
		$this->Cell(150,4,'',0,0);
		$this->Cell(30,4,"Principal/VP",0,1,'C');
		
		$this->Cell(190,4,date("d-m-y h:i:s A"),0,0,'C');
		// Page number
		$this->Cell(190,4,''.$this->PageNo().'/{nb}',0,0,'C');
	}
	}

	// Instanciation of inherited class
	
	//$pdf1->Output();
	$pdf = new PDFI('L','mm','A3');
	$pdf->AliasNbPages();
	$pdf->SetLeftMargin(5);
	$pdf->SetTopMargin(7);
	$pdf->AddPage();
	$pdf->SetFont('Times','b',18);
	$pdf->SetTitle('Tabulation Sheet Science Class: '.$class);
	//$pdf->Image($school_name,30,5,25,20);
	
	
	$sl = 1;
	$total = $exe->num_rows;
	while($sl <= $total){while($row = $exe->fetch_assoc()){
		$pdf->SetFont('Times','b',10);
		$pdf->Cell(15,15,$row['roll'],1,0,'C');
		$pdf->Cell(50,15,$row['name'],1,0);

		//MCQ WR Inc. 1st row 
		$pdf->SetFont('Times','',9);
			//Quran Mazid
		$pdf->Cell(8,5,$row['quran_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['quran_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['quran_mcq'] + $row['quran_wr'],1,0,'C');
			//Hadith Sarif
		$pdf->Cell(8,5,$row['hadith'],1,0,'C');
		$pdf->Cell(8,5,$row['hadith_parcent'],1,0,'C');
			//Quran Hadith
		$pdf->Cell(10,5,$row['quran_hadith'],1,0,'C');
			//Arabic I
		$pdf->Cell(8,5,$row['arabic1st'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic1st_parcent'],1,0,'C');
			//Arabic II
		$pdf->Cell(8,5,$row['arabic2nd'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic2nd_parcent'],1,0,'C');
			//Arabic
		$pdf->Cell(10,5,$row['arabic'],1,0,'C');
			//fiqh
		$pdf->Cell(8,5,$row['fiqh'],1,0,'C');
		$pdf->Cell(8,5,$row['fiqh_parcent'],1,0,'C');
			// bangla1
		$pdf->Cell(8,5,$row['bangla1_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla1_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla1_wr'] + $row['bangla1_mcq'],1,0,'C');
			//Bangla 2
		$pdf->Cell(8,5,$row['bangla2_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla2_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla2_wr'] + $row['bangla2_mcq'],1,0,'C');
			//Bangla
		$pdf->Cell(10,5,$row['bangla_total'],1,0,'C');
			
			//english1st
		$pdf->Cell(8,5,$row['english1st'],1,0,'C');
		$pdf->Cell(8,5,$row['english1st_parcent'],1,0,'C');
			//english2nd
		$pdf->Cell(8,5,$row['english2nd'],1,0,'C');
		$pdf->Cell(8,5,$row['english2nd_parcent'],1,0,'C');
			//English
		$pdf->Cell(10,5,$row['english_total'],1,0,'C');
			
			//Mathmatic
		$pdf->Cell(8,5,$row['math_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['math_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['math_wr'] + $row['math_mcq'],1,0,'C');
			//Physics 
		$pdf->Cell(8,5,$row['ph_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['ph_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['ph_pt'],1,0,'C');
			//Chemistry
		$pdf->Cell(8,5,$row['ch_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['ch_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['ch_pt'],1,0,'C');
			//Biology
		$pdf->Cell(8,5,$row['bio_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['bio_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['bio_pt'],1,0,'C');
			//Agriculture 
		$pdf->Cell(8,5,$row['agri_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['agri_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['agri_pt'],1,0,'C');
	
			
			//Total
		$pdf->Cell(10,5,$row['gpa'],1,0,'C');
		$pdf->Cell(10,5,$row['gread'],1,0,'C');
		//$pdf->Cell(40,15,'',1,0,'C');//remarks
		$pdf->Cell(1,5,'',0,1);
		
			// 2nd row
				//Quran Mazid
		$pdf->Cell(65,5,'',0,0);
		$pdf->Cell(8,5,$row['quran_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['quran_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['quran_total'],1,0,'C');
				//Hadith Sarif
		$pdf->Cell(8,5,$row['hadith_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['hadith_total'],1,0,'C');
			//Quran Hadith
		$pdf->Cell(10,5,$row['quran_hadith_gpa'],1,0,'C');
			//Arabic I
		$pdf->Cell(8,5,$row['arabic1st_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic1st_total'],1,0,'C');
				//Arabic II
		$pdf->Cell(8,5,$row['arabic2nd_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic2nd_total'],1,0,'C');
			//Arabic
		$pdf->Cell(10,5,$row['arabic_gpa'],1,0,'C');
			//fiqh 
		$pdf->Cell(8,5,$row['fiqh_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['fiqh_total'],1,0,'C');
			//bangla1
		$pdf->Cell(8,5,$row['bangla1_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla1_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla1_total'],1,0,'C');
			//Bangla 2
		$pdf->Cell(8,5,$row['bangla2_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla2_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla2_total'],1,0,'C');
			//Bangla
		$pdf->Cell(10,5,$row['bangla_gpa'],1,0,'C');
			
			//english1st 
		$pdf->Cell(8,5,$row['english1st_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['english1st_total'],1,0,'C');
			//english2nd 
		$pdf->Cell(8,5,$row['english2nd_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['english2nd_total'],1,0,'C');
			//Bangla
		$pdf->Cell(10,5,$row['english_gpa'],1,0,'C');
			
			//Mathmatic
		$pdf->Cell(8,5,$row['math_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['math_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['math_total'],1,0,'C');
			//Physcis 
		$pdf->Cell(8,5,$row['ph_mcq_wr_pt'],1,0,'C');
		$pdf->Cell(8,5,$row['ph_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['ph_incourse'],1,0,'C');
			//Chemistry
		$pdf->Cell(8,5,$row['ch_mcq_wr_pt'],1,0,'C');
		$pdf->Cell(8,5,$row['ch_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['ch_incourse'],1,0,'C');
			//Biology 
		$pdf->Cell(8,5,$row['bio_mcq_wr_pt'],1,0,'C');
		$pdf->Cell(8,5,$row['bio_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['bio_incourse'],1,0,'C');
			//Agriculture
		$pdf->Cell(8,5,$row['agri_mcq_wr_pt'],1,0,'C');
		$pdf->Cell(8,5,$row['agri_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['agri_incourse'],1,0,'C');
			
			//Total
		$pdf->Cell(20,5,$row['status'],1,1,'C');
		
		///$pdf->Cell(1,5,'',0,1);
		//MCQ WR Inc. 3rd row
			//Quran Mazid
		$pdf->Cell(65,5,'',0,0);
		$pdf->Cell(16,5,$row['quran_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['quran_gread'],1,0,'C');
			//Hadith Sarif
		$pdf->Cell(8,5,$row['hadith_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['hadith_gread'],1,0,'C');
			//Quran Hadith
		$pdf->Cell(10,5,$row['quran_hadith_gread'],1,0,'C');
			
			//Arabic I
		$pdf->Cell(8,5,$row['arabic1st_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic1st_gread'],1,0,'C');
			//Arabic II
		$pdf->Cell(8,5,$row['arabic2nd_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic2nd_gread'],1,0,'C');
			//Arabic
		$pdf->Cell(10,5,$row['arabic_gread'],1,0,'C');
			//fiqh
		$pdf->Cell(8,5,$row['fiqh_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['fiqh_gread'],1,0,'C');
			//bangla1 
		$pdf->Cell(16,5,$row['bangla1_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla1_gread'],1,0,'C');
			//Bangla 2
		$pdf->Cell(16,5,$row['bangla2_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla2_gread'],1,0,'C');
			//Bangla
		$pdf->Cell(10,5,$row['bangla_gread'],1,0,'C');
			
			//english1st 
		$pdf->Cell(8,5,$row['english1st_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['english1st_gread'],1,0,'C');
			//english2nd 
		$pdf->Cell(8,5,$row['english2nd_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['english2nd_gread'],1,0,'C');
			//Bangla
		$pdf->Cell(10,5,$row['english_gread'],1,0,'C');
			
			//Mathmatic
		$pdf->Cell(16,5,$row['math_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['math_gread'],1,0,'C');
			//Physcis
		$pdf->Cell(8,5,$row['ph_total'],1,0,'C');
		$pdf->Cell(8,5,$row['ph_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['ph_gread'],1,0,'C');
			//Chemistry
		$pdf->Cell(8,5,$row['ch_total'],1,0,'C');
		$pdf->Cell(8,5,$row['ch_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['ch_gread'],1,0,'C');
			//Biology
		$pdf->Cell(8,5,$row['bio_total'],1,0,'C');
		$pdf->Cell(8,5,$row['bio_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['bio_gread'],1,0,'C');
			//Agriculture
		$pdf->Cell(8,5,$row['agri_total'],1,0,'C');
		$pdf->Cell(8,5,$row['agri_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['agri_gread'],1,0,'C');
			
			//Total
		$pdf->Cell(20,5,$sl++,1,1,'C');
		
		$pdf->Cell(0.5,1,'',0,1);
	}
	$sl++;
	}
	
	$pdf->Cell(356,10,'',0,1,'C');
	$pdf->SetFont('Times','',14);
	//$pdf->Cell(25,6,'',0,0);
	$pdf->Cell(356,2,$semester.' Examination '.'- '.$year.' Tabulation Sheet of '.' Class: '.$class,0,1,'C');
	$pdf->SetFont('Times','b',16);
	$pdf->Cell(356,10,$school_name,0,1,'C');
	
	$pdf->SetFont('Times','b',14);
	$pdf->Cell(356,5,$second_line,0,1,'C');
	
	
	//$pdf->Cell(10,10,$total,1,1);
	//$pdf->SetFillColor(150);
	//$pdf->RoundedRect(10,10,190,275,5,'0');
	$pdf->Output();
?>