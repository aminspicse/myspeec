<?php
	require('../fpdf/round_rect.php');
	date_default_timezone_set("Asia/Dhaka");
	  if(isset($_GET['summary'])){
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
	 
	if($department == 'All'){
		$sql = "SELECT * FROM $table WHERE admin_id = '$admin_id' and classs = '$class' and semester = '$semester' and year = '$year' and delete_status = '0' and status != 'Fail' ORDER BY gpa DESC, total_fail ASC, total_mark DESC";
		$exe = $conn->query($sql);
	}else{
		$sql = "SELECT * FROM $table WHERE admin_id = '$admin_id' and classs = '$class' and semester = '$semester' and year = '$year' and department = '$department' and delete_status = '0' and status != 'Fail' ORDER BY gpa DESC, total_fail ASC, total_mark DESC";
		$exe = $conn->query($sql);
	}
	
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
		
		$this->Cell(30,1,"----------------------------------------",0,0,'C');
		$this->Cell(50,1,'',0,0);
		$this->Cell(30,1,"----------------------------------------",0,0,'C');
		$this->Cell(50,1,'',0,0);
		$this->Cell(30,1,"----------------------------------------",0,1,'C');
		
		$this->Cell(30,4,"Prepared/Class Teacher",0,0,'C');
		$this->Cell(50,4,'',0,0);
		$this->Cell(30,4,"Controlar of Examination",0,0,'C');
		$this->Cell(50,4,'',0,0);
		$this->Cell(30,4,"Principal/VP",0,1,'C');
		
		$this->Cell(50,4,date("d-m-y h:i:s A"),0,0,'L');
		// Page number
		$this->Cell(140,4,''.$this->PageNo().'/{nb}',0,0,'C');
	}
	}

	// Instanciation of inherited class
	$pdf = new PDFI('P','mm','A4');
	$pdf->AliasNbPages();
	//$pdf->SetTopMargin(5);
	$pdf->AddPage();
	$pdf->SetFont('Times','b',18);
	$pdf->Image($institute_logu,10,10,25,20);
	
	$pdf->Cell(25,8,'',0,0);
	$pdf->Cell(165,8,$school_name,0,1,'C');
	
	$pdf->SetFont('Times','b',14);
	$pdf->Cell(25,6,'',0,0);
	$pdf->Cell(165,6,$second_line,0,1,'C');
	
	$pdf->SetFont('Times','',14);
	$pdf->Cell(25,6,'',0,0);
	$pdf->Cell(165,6,$semester.' Examination '.'- '.$year.'         Class: '.$class,0,1,'C');
	
	$pdf->Cell(190,4,'',0,1);
	
	$pdf->SetFont('Times','b',12);
	$pdf->Cell(8,8,'MP',1,0,'C');
	$pdf->Cell(90,8,'Name',1,0,'C');
	$pdf->Cell(12,8,'Roll',1,0,'C');
	$pdf->Cell(15,8,'Group',1,0,'C');
	$pdf->Cell(10,8,'GPA',1,0,'C');
	$pdf->Cell(12,8,'Grade',1,0,'C');
	$pdf->Cell(8,8,'NF',1,0,'C');
	$pdf->Cell(40,8,'Remarks',1,1,'C');
	$sl = 1;
	$total = $exe->num_rows;
	while($sl <= $total){while($row = $exe->fetch_assoc()){
		$pdf->SetFont('Times','',11);
		$pdf->Cell(8,7,$sl,1,0,'C');
		$pdf->Cell(90,7,$row['name'],1,0);
		$pdf->Cell(12,7,$row['roll'],1,0,'C');
		$pdf->Cell(15,7,$row['department'],1,0);
		$pdf->Cell(10,7,$row['gpa'],1,0,'C');
		$pdf->Cell(12,7,$row['gread'],1,0,'C');
		$pdf->Cell(8,7,$row['total_fail'],1,0,'C');
		$pdf->Cell(40,7,$row['status'],1,1,'C');
		
		$sl++;
	}
	///$sl++;
	}
	//$pdf->Cell(10,10,$total,1,1);
	//$pdf->SetFillColor(150);
	//$pdf->RoundedRect(10,10,190,275,5,'0');
	$pdf->Output();
?>