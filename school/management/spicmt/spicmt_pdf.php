<?php 
	require('../fpdf/fpdf.php');
	$conn = mysqli_connect("localhost","root","","spicmt");
	
	if(isset($_GET['download'])){
		
		class PDFI extends FPDF{
		
			function Footer(){
				// Position at 1.5 cm from bottom
				$this->SetY(-15);
				// Arial italic 8
				$this->SetFont('Arial','b',8);
				
				$this->Cell(50,4,date("d-m-y h:i:s A"),0,0,'L');
				// Page number
				$this->Cell(140,4,''.$this->PageNo().'/{nb}',0,0,'C');
			}

			
		}
		
		$pdf = new PDFI('P','mm','A4');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial','b', 15);
		$pdf->Cell(192,7,'Sylhet Polytechnic Institute, Sylhet',1,1,'C');
		$pdf->Cell(192,7,'DEPARTMENT OF COMPUTER TECHNOLOGY',1,1,'C');
		
		$pdf->SetFont('Arial','b','12');
		$pdf->Cell(20, 8, 'Roll',1,0,'C');
		$pdf->Cell(30, 8, 'Reg.',1,0,'C');
		$pdf->Cell(65, 8, 'Name',1,0,'C');
		$pdf->Cell(77, 8, 'Company Name',1,1,'C');
		//$pdf->Cell(22, 8, 'Bank Code',1,1,'C');
		
		$sql = "SELECT * FROM spicmt ORDER BY roll ASC";
		$exe = $conn->query($sql);
		while($row = $exe->fetch_assoc()){
			$pdf->SetFont('Arial','','12');
			$pdf->Cell(20, 7, $row['roll'],1,0,'C');
			$pdf->Cell(30, 7, $row['reg'],1,0,'C');
			$pdf->Cell(65, 7, $row['name'],1,0,'L');
			$pdf->Cell(77, 7, $row['company'],1,1,'L');
			//$pdf->Cell(22, 7, $row['roll'],1,1,'C');
		
		}
	}
	
	
	$pdf->Output();

?>