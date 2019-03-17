<?php 
	require('fpdf/fpdf.php');
	$conn = mysqli_connect("localhost","root","","jgtdsl");
	
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
		$pdf->Cell(192,10,'Active Bank Account of Jalalabad Gas T & D System Ltd.',1,1,'C');
		
		$pdf->SetFont('Arial','b','12');
		$pdf->Cell(20, 8, 'A. Code',1,0,'C');
		$pdf->Cell(30, 8, 'Area',1,0,'C');
		$pdf->Cell(60, 8, 'Bank Name',1,0,'C');
		$pdf->Cell(60, 8, 'Branch Name',1,0,'C');
		$pdf->Cell(22, 8, 'Bank Code',1,1,'C');
		
		$sql = "SELECT * FROM jgtdsl_bank ORDER BY area_code ASC";
		$exe = $conn->query($sql);
		while($row = $exe->fetch_assoc()){
			$pdf->SetFont('Arial','','12');
			$pdf->Cell(20, 7, $row['area_code'],1,0,'C');
			$pdf->Cell(30, 7, $row['area_name'],1,0,'L');
			$pdf->Cell(60, 7, $row['bank_name'],1,0,'L');
			$pdf->Cell(60, 7, $row['branch_name'],1,0,'L');
			$pdf->Cell(22, 7, $row['bank_code'],1,1,'C');
		
		}
	}
	
	
	$pdf->Output();

?>