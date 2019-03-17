<?php
	require('../fpdf/fpdf.php');
	
	$pdf = new FPDF('P','cm','A3');
	$pdf->AddPage();
	$pdf->SetFont('arial','b',16);
	$pdf->Cell(120,5,'Making Under Construction',1,1,'c');
	
	$pdf->SetFont('arial','b',16);
	$pdf->Cell(8.6,5.50,'',1,0,'c');
	$pdf->Cell(8.6,5.50,'',1,0,'c');
	$pdf->Cell(1,5.50,'',0,0,'c');
	$pdf->Cell(8.6,5.50,'',1,1,'c');
	$pdf->Cell(20,1,'',0,1,'c');
		
	$pdf->Cell(8.6,5.50,'',1,0,'c');
	$pdf->Cell(1,5.50,'',0,0,'c');
	$pdf->Cell(8.6,5.50,'',1,1,'c');
	$pdf->Cell(20,1,'',0,1,'c');
	
	$pdf->Cell(8.6,5.50,'',1,0,'c');
	$pdf->Cell(1,5.50,'',0,0,'c');
	$pdf->Cell(8.6,5.50,'',1,1,'c');
	$pdf->Cell(20,1,'',0,1,'c');
	
	$pdf->Cell(8.6,5.50,'',1,0,'c');
	$pdf->Cell(1,5.50,'',0,0,'c');
	$pdf->Cell(8.6,5.50,'',1,1,'c');
	//$pdf->Cell(2.5,3.5,'',1,1,'c');
	
	$pdf->Output();
?>