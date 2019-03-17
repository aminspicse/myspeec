<?php
	require('../fpdf/round_rect.php');
	date_default_timezone_set("Asia/Dhaka");
	  if(isset($_GET['tabulation'])){
		  $table = 'five_madrasah';//$_GET['table'];
		  $semester = $_GET['semester'];
		  $year = $_GET['year'];
		  $admin_id = $_GET['ses'];
		  $school_name = $_GET['school_name'];
		  $class = 'Five';$_GET['class'];
		  $date1 = $_GET['date'];
		  $head = $_GET['head'];
		  $head_name = $_GET['head_name'];
		  $class_teacher = $_GET['class_teacher'];
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
		// $insert = "INSERT INTO generate_marksheet(admin_id, tables, semester, year, school_name, class, department, second_line, institute_logu, date, times)VALUES('$admin_id', '$tables', '$semester', '$year', '$school_name', '$class', '$department', '$second_line', '$institute_logu', '$date', '$times')";
		// $conn->query($insert);
	  }
	 
	$sql = "SELECT * FROM $table WHERE admin_id = '$admin_id' and classs = '$class' and semester = '$semester' and year = '$year' and department = '$department' ORDER BY gpa DESC";
	$exe = $conn->query($sql);
	
	class PDFI extends PDF
	{
	// Page header
/*
	function Header()
	{
		// Logo
		//$this->Image($institute_logu,10,6,30);
		// Arial bold 15
		$this->SetFont('Arial','B',15);
		// Move to the right
		$this->Cell(80);
		// Title
		//$this->Cell(30,10,$school_name,1,0,'C');
		// Line break
		$this->Ln(20);
	}
*/
	// Page footer
	function Footer()
	{
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','b',8);
		
		$this->Cell(30,1,"--------------------",0,0,'C');
		$this->Cell(160,1,'',0,0);
		$this->Cell(30,1,"-------------------------",0,0,'C');
		$this->Cell(160,1,'',0,0);
		$this->Cell(30,1,"--------------------",0,1,'C');
		
		$this->Cell(30,4,"Prepared By",0,0,'C');
		$this->Cell(160,4,'',0,0);
		$this->Cell(30,4,"Class Teacher",0,0,'C');
		$this->Cell(160,4,'',0,0);
		$this->Cell(30,4,"Principal",0,1,'C');
		
		$this->Cell(190,4,date("d-m-y h:i:s A"),0,0,'C');
		// Page number
		$this->Cell(190,4,''.$this->PageNo().'/{nb}',0,0,'C');
	}
	}

	// Instanciation of inherited class
	$pdf = new PDFI('L','mm','A3');
	$pdf->AliasNbPages();
	$pdf->SetLeftMargin(20);
	$pdf->SetTopMargin(10);
	$pdf->AddPage();
	$pdf->SetFont('Times','b',18);
	$pdf->Image($institute_logu,30,10,25,20);
	
	//$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(356,7,$school_name,0,1,'C');
	
	$pdf->SetFont('Times','b',14);
	//$pdf->Cell(25,6,'',0,0);
	$pdf->Cell(356,5,$second_line,0,1,'C');
	
	$pdf->SetFont('Times','',14);
	//$pdf->Cell(25,6,'',0,0);
	$pdf->Cell(356,5,$semester.' Examination '.'- '.$year.' Class: '.$class,0,1,'C');
	
	$pdf->Cell(356,4,'',0,1);
	
	$pdf->SetFont('Times','b',14);
	$pdf->Cell(15,16,'Roll',1,0,'C');
	$pdf->Cell(50,16,'Name',1,0,'C');
	//Subject
	$pdf->SetFont('Times','b',10);
	$pdf->Cell(24,4,'Quran Mazid',1,0,'C');
	$pdf->Cell(16,4,'Arabic I',1,0,'C');
	$pdf->Cell(16,4,'Arabic II',1,0,'C');
	$pdf->Cell(10,4,'Arabic',1,0,'C');
	$pdf->Cell(16,4,'Aqaid',1,0,'C');
	$pdf->Cell(24,4,'Bangla',1,0,'C');
	$pdf->Cell(16,4,'English',1,0,'C');
	$pdf->Cell(24,4,'Mathmatic',1,0,'C');
	$pdf->Cell(24,4,'Science',1,0,'C');
	$pdf->Cell(24,4,'B.W.S',1,0,'C');
	$pdf->Cell(16,4,'I.C.T',1,0,'C');
	$pdf->Cell(24,4,'Agriculture',1,0,'C');
	$pdf->Cell(16,4,'Phy/Art',1,0,'C');
	$pdf->Cell(20,4,'Total',1,0,'C');
	$pdf->Cell(40,16,'Remarks',1,0,'C');
	$pdf->Cell(1,4,'',0,1,'C');
	
	//MCQ CQ Act. 1st row
		//Quran Mazid
	$pdf->SetFont('Times','',9);
	$pdf->Cell(65,4,'',0,0);
	$pdf->Cell(8,4,'MCQ',1,0,'C');
	$pdf->Cell(8,4,'CQ',1,0,'C');
	$pdf->Cell(8,4,'Act',1,0,'C');
		// Arabic I 
	$pdf->Cell(8,4,'Act.',1,0,'C');
	$pdf->Cell(8,4,'80%',1,0,'C');
		// Arabic II 
	$pdf->Cell(8,4,'Act.',1,0,'C');
	$pdf->Cell(8,4,'80%',1,0,'C');
		//Arabic
	$pdf->Cell(10,4,'Total',1,0,'C');
		//Bangla
	$pdf->Cell(8,4,'MCQ',1,0,'C');
	$pdf->Cell(8,4,'CQ',1,0,'C');
	$pdf->Cell(8,4,'Act.',1,0,'C');
		//English
	$pdf->Cell(8,4,'Act.',1,0,'C');
	$pdf->Cell(8,4,'80%',1,0,'C');
		//Mathmatic
	$pdf->Cell(8,4,'MCQ',1,0,'C');
	$pdf->Cell(8,4,'CQ',1,0,'C');
	$pdf->Cell(8,4,'Act.',1,0,'C');
		//Science 
	$pdf->Cell(8,4,'MCQ',1,0,'C');
	$pdf->Cell(8,4,'CQ',1,0,'C');
	$pdf->Cell(8,4,'Act.',1,0,'C');
	
	
	//80% Incourse and Total 2nd row 
		//Quran Mazid
	$pdf->SetFont('Times','',9);
	$pdf->Cell(65,4,'',0,0);
	$pdf->Cell(8,4,'80%',1,0,'C');
	$pdf->Cell(8,4,'Inc',1,0,'C');
	$pdf->Cell(8,4,'Total.',1,0,'C');
	//Arabic I
	$pdf->Cell(8,4,'Inc.',1,0,'C');
	$pdf->Cell(8,4,'Total',1,0,'C');
		// Arabic II
	$pdf->Cell(8,4,'Inc.',1,0,'C');
	$pdf->Cell(8,4,'Total',1,0,'C');
		//Arabic
	$pdf->Cell(10,4,'GPA',1,0,'C');
		//Bangla
	$pdf->Cell(8,4,'80%',1,0,'C');
	$pdf->Cell(8,4,'Inc.',1,0,'C');
	$pdf->Cell(8,4,'Total',1,0,'C');
		//English 
	$pdf->Cell(8,4,'Inc.',1,0,'C');
	$pdf->Cell(8,4,'Total',1,0,'C');
		//Mathmatic
	$pdf->Cell(8,4,'80%',1,0,'C');
	$pdf->Cell(8,4,'Inc.',1,0,'C');
	$pdf->Cell(8,4,'Total',1,0,'C');
		//Science 
	$pdf->Cell(8,4,'80%',1,0,'C');
	$pdf->Cell(8,4,'Inc.',1,0,'C');
	$pdf->Cell(8,4,'Total',1,0,'C');
		
	//MCQ WR Inc. 3rd row
		//Quran Mazid
	$pdf->SetFont('Times','',9);
	$pdf->Cell(65,4,'',0,0);
	$pdf->Cell(16,4,'GPA',1,0,'C');
	$pdf->Cell(8,4,'LG.',1,0,'C');
		//Arabic I
	$pdf->Cell(8,4,'GPA',1,0,'C');
	$pdf->Cell(8,4,'LG',1,0,'C');
		// Arabic II 
	$pdf->Cell(8,4,'GPA',1,0,'C');
	$pdf->Cell(8,4,'LG',1,0,'C');
		//Arabic
	$pdf->Cell(10,4,'LG',1,0,'C');
		//Bangla
	$pdf->Cell(16,4,'GPA',1,0,'C');
	$pdf->Cell(8,4,'LG',1,0,'C');
		//English 
	$pdf->Cell(8,4,'GPA',1,0,'C');
	$pdf->Cell(8,4,'LG',1,0,'C');
		//Mathmatic
	$pdf->Cell(16,4,'GPA',1,0,'C');;
	$pdf->Cell(8,4,'LG',1,0,'C');
		//Science 
	$pdf->Cell(16,4,'GPA',1,0,'C');;
	$pdf->Cell(8,4,'LG',1,0,'C');

		//Total
	$pdf->Cell(20,4,'Merit/Position',1,1);
	
	//$pdf->Cell()
	
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
			//Arabic I
		$pdf->Cell(8,5,$row['arabic1st'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic1st_parcent'],1,0,'C');
			//Arabic II
		$pdf->Cell(8,5,$row['arabic2nd'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic2nd_parcent'],1,0,'C');
			//Arabic
		$pdf->Cell(10,5,$row['arabic'],1,0,'C');
			// Bangla
		$pdf->Cell(8,5,$row['bangla_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla_wr'] + $row['bangla_mcq'],1,0,'C');
			//English
		$pdf->Cell(8,5,$row['english'],1,0,'C');
		$pdf->Cell(8,5,$row['english_parcent'],1,0,'C');
			//Mathmatic
		$pdf->Cell(8,5,$row['math_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['math_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['math_wr'] + $row['math_mcq'],1,0,'C');
			//Science
		$pdf->Cell(8,5,$row['science_mcq'],1,0,'C');
		$pdf->Cell(8,5,$row['science_wr'],1,0,'C');
		$pdf->Cell(8,5,$row['science_wr'] + $row['science_mcq'],1,0,'C');
			//Total
		$pdf->Cell(10,5,$row['gpa'],1,0,'C');
		$pdf->Cell(10,5,$row['gread'],1,0,'C');
		$pdf->Cell(40,15,'',1,0,'C');
		$pdf->Cell(1,5,'',0,1);
		
			// 2nd row
				//Quran Mazid
		$pdf->Cell(65,5,'',0,0);
		$pdf->Cell(8,5,$row['quran_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['quran_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['quran_total'],1,0,'C');
				//Arabic I
		$pdf->Cell(8,5,$row['arabic1st_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic1st_total'],1,0,'C');
				//Arabic II
		$pdf->Cell(8,5,$row['arabic2nd_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic2nd_total'],1,0,'C');
			//Arabic
		$pdf->Cell(10,5,$row['arabic_gpa'],1,0,'C');
			//Bangla
		$pdf->Cell(8,5,$row['bangla_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla_total'],1,0,'C');
			//English 
		$pdf->Cell(8,5,$row['english_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['english_total'],1,0,'C');
			//Mathmatic
		$pdf->Cell(8,5,$row['math_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['math_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['math_total'],1,0,'C');
			//Science
		$pdf->Cell(8,5,$row['science_parcent'],1,0,'C');
		$pdf->Cell(8,5,$row['science_incourse'],1,0,'C');
		$pdf->Cell(8,5,$row['science_total'],1,0,'C');
			//Total
		$pdf->Cell(20,5,$row['status'],1,1,'C');
		
		///$pdf->Cell(1,5,'',0,1);
		//MCQ WR Inc. 3rd row
			//Quran Mazid
		$pdf->Cell(65,5,'',0,0);
		$pdf->Cell(16,5,$row['quran_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['quran_gread'],1,0,'C');
			//Arabic I
		$pdf->Cell(8,5,$row['arabic1st_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic1st_gread'],1,0,'C');
			//Arabic II
		$pdf->Cell(8,5,$row['arabic2nd_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['arabic2nd_gread'],1,0,'C');
			//Arabic
		$pdf->Cell(10,5,$row['arabic_gread'],1,0,'C');
			//Bangla 
		$pdf->Cell(16,5,$row['bangla_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['bangla_gread'],1,0,'C');
			
			//English 
		$pdf->Cell(8,5,$row['english_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['english_gread'],1,0,'C');
			//Mathmatic
		$pdf->Cell(16,5,$row['math_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['math_gread'],1,0,'C');
			//Science
		$pdf->Cell(16,5,$row['science_gpa'],1,0,'C');
		$pdf->Cell(8,5,$row['science_gread'],1,0,'C');
			//Total
		$pdf->Cell(20,5,$sl++,1,1,'C');
		
		$pdf->Cell(0.5,1,'',0,1);
	}
	$sl++;
	}
	//$pdf->Cell(10,10,$total,1,1);
	//$pdf->SetFillColor(150);
	//$pdf->RoundedRect(10,10,190,275,5,'0');
	$pdf->Output();
?>