<?php
require('barcode128.php');

$pdf=new PDF_Code128('P','mm','A4');
$pdf->AddPage();
$pdf->SetFillColor(150);

//A set
$code='CODE 128';
$pdf->Code128(50,20,$code,80,20);
$pdf->SetXY(50,45);
$pdf->Write(5,'A set: "'.$code.'"');

//$pdf->RoundedRect(5, 5, 100, 100, 5, '0', 'DF'); if inside background
$pdf->RoundedRect(10, 10, 190, 275, 5, '0');

$pdf->Output();
?>
