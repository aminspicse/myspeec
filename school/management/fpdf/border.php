<?php
require('round_rect.php');

$pdf=new PDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFillColor(150);

//$pdf->RoundedRect(5, 5, 100, 100, 5, '0', 'DF'); if inside background
$pdf->RoundedRect(10, 10, 190, 275, 5, '0');

$pdf->Output();
?>
