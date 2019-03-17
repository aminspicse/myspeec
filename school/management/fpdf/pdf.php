<?php
	require('fpdf.php');
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('arial','b',16);
	$pdf->Cell(100,10,'This is My First PDF',0,1,'c');
	$pdf->Output();
?>