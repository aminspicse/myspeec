<?php
include'../config/db_connection.php';
require('../fpdf/fpdf.php');
	if(isset($_GET['submit'])){
		  $section = $_GET['section'];
		  $year = $_GET['year'];
		  $admin_id = $_GET['ses'];
		  $school_name = $_GET['school_name'];
		  $class = $_GET['class'];
		  $department = $_GET['department'];
		  $second_line = $_GET['second_line'];
		  $institute_logu = $_GET['institute_logu'];
	}
	$sql = "SELECT * FROM class_routin WHERE user_id = '$admin_id' && class = '$class' && year = '$year' && groups = '$department' && section = '$section' ORDER BY id DESC";
	$exe = $conn->query($sql);
	$row = $exe->fetch_assoc();

	
	class Routin extends FPDF{
		function myCell($w,$h,$x,$t){
			$height = $h/3;
			$first = $height + 2;
			$second = $height + $height + $height + 3;
			$len = strlen($t);
			if($len > 15){
				$txt = str_split($t,15);
				$this->Setx($x);
				$this->Cell($w,$first,$txt[0],'','','');
				
				$this->Setx($x);
				$this->Cell($w,$second,$txt[1],'','','');
				
				$this->Setx($x);
				$this->Cell($w,$h,'','LTRB',0,'L',0);
			}else{
				$this->Setx($x);
				$this->Cell($w,$h,$t,'LTRB',0,'L',0);
			}
		}
		function Footer()
	{
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','b',8);
		
		$this->Cell(30,1,"----------------------------------------",0,0,'C');
		$this->Cell(210,1,'',0,0);
		// $this->Cell(30,1,"----------------------------------------",0,0,'C');
		// $this->Cell(50,1,'',0,0);
		$this->Cell(30,1,"----------------------------------------",0,1,'C');
		
		$this->Cell(30,4,"Prepared/Class Teacher",0,0,'C');
		// $this->Cell(50,4,'',0,0);
		// $this->Cell(30,4,"Controlar of Examination",0,0,'C');
		$this->Cell(210,4,'',0,0);
		$this->Cell(30,4,"Principal/VP",0,1,'C');
		
		$this->Cell(50,4,date("d-m-y h:i:s A"),0,0,'L');
		// Page number
		//$this->Cell(140,4,''.$this->PageNo().'/{nb}',0,0,'C');
	}
	}
	$pdf = new Routin('P', 'mm', 'A4');
	$pdf -> AddPage('L');
	$pdf->SetFont('arial','b',20);
	
	$pdf->SetFont('arial','b',20);
	$pdf->Image($institute_logu,10,10,25,20);
	$pdf->Cell(280,10,$school_name,1,1,'C');
	$pdf->Cell(280,10,$second_line,1,1,'C');

	$pdf->SetFont('arial', 'b', '15');
	$pdf->Cell(10, 10, '', 1,0);
	$pdf->Cell(35, 10, 'Class: '.$row['class'], 1,0);
	$pdf->Cell(35, 10, 'Year: '.$row['year'], 1,0, 'C');
	$pdf->Cell(55, 10, 'Group: '.$row['groups'], 1,0, 'C');
	$pdf->Cell(35, 10, 'Section: '.$row['section'], 1,0);
	$pdf->Cell(110, 10, 'Class Teacher: '.$row['class_teacher'], 1,1);

	$pdf->Cell(280,7,'',0,1);

	$pdf->Cell(25,10,'Day',1,0,'C');
	$pdf->Cell(35,10,'1st Class',1,0,'C');
	$pdf->Cell(35,10,'2nd Class',1,0,'C');
	$pdf->Cell(35,10,'3rd Class',1,0,'C');
	$pdf->Cell(35,10,'4th Class',1,0,'C');
	$pdf->Cell(35,10,'5th Class',1,0,'C');
	$pdf->Cell(35,10,'6th Class',1,0,'C');
	$pdf->Cell(35,10,'7th Class',1,0,'C');
	$pdf->Cell(12,10,'Total',1,1,'C');

	$pdf->SetFont('arial','b',12);
	$pdf->Cell(25,20,$row['day1'],1,0,'C');
	$pdf->SetFont('arial','',12);
	$w = 35;
	$h = 20;
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class1st_day1']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class2nd_day1']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class3rd_day1']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class4th_day1']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class5th_day1']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class6th_day1']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class7th_day1']);
	$x = $pdf->Getx();
	$pdf->Cell(12,20,$row['total_class_day1'],1,1,'C');
	
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(25,20,$row['day2'],1,0,'C');
	$pdf->SetFont('arial','',12);

	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class1_day2']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class2_day2']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class3_day2']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class4_day2']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class5_day2']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class6_day2']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class7_day2']);
	$x = $pdf->Getx();
	$pdf->Cell(12,20,$row['total_class_day2'],1,1,'C');
	
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(25,20,$row['day3'],1,0,'C');
	$pdf->SetFont('arial','',12);

	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class1_day3']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class2_day3']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class3_day3']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class4_day3']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class5_day3']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class6_day3']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class7_day3']);
	$x = $pdf->Getx();
	$pdf->Cell(12,20,$row['total_class_day3'],1,1,'C');
	
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(25,20,$row['day4'],1,0,'C');
	$pdf->SetFont('arial','',12);

	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class1_day4']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class2_day4']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class3_day4']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class4_day4']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class5_day4']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class6_day4']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class7_day4']);
	$x = $pdf->Getx();
	$pdf->Cell(12,20,$row['total_class_day4'],1,1,'C');
	
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(25,20,$row['day5'],1,0,'C');
	$pdf->SetFont('arial','',12);

	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class1_day5']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class2_day5']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class3_day5']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class4_day5']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class5_day5']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class6_day5']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class7_day5']);
	$x = $pdf->Getx();
	$pdf->Cell(12,20,$row['total_class_day5'],1,1,'C');
	
	$pdf->SetFont('arial','b',12);
	$pdf->Cell(25,20,$row['day6'],1,0,'C');
	$pdf->SetFont('arial','',12);

	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class1_day6']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class2_day6']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class3_day6']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class4_day6']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class5_day6']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class6_day6']);
	$x = $pdf->Getx();
	$pdf->myCell($w,$h,$x,$row['class7_day6']);
	$x = $pdf->Getx();
	$pdf->Cell(12,20,$row['total_class_day6'],1,1,'C');
	

	
	
	$pdf -> Output();
?>