<?php
$conn = new mysqli("localhost", "root", "","management");
$sql= "SELECT * FROM admission";
$exe = $conn->query($sql);
//$row = $exe->fetch_assoc();
//echo $row['name'];
require('barcode128.php');

$pdf=new PDF_Code128('L','cm',array(9,6));
$pdf->SetLeftMargin(0.30);
$pdf->AddPage();
$pdf->SetFillColor(150);
while($row = $exe->fetch_assoc()){
$pdf->Image('bifm.png',0.50,0.30,8,1);
$pdf->Image('amin.png',7.1,1.2,1.5,1);
$pdf->SetFont('Helvetica','b',11);
$pdf->Cell(0,0.90,'Student ID Card', 0,1,'C');
$pdf->Cell(4,0.50,'ID: '.$row['student_id'],0,0);
$pdf->Cell(3,0.50,'Roll: '.$row['serial'],0,1);

$pdf->Cell(3,0.50,'Name: '.$row['name'],0,1);
$pdf->Cell(3,0.50,"Father's Name: ".$row['fname'],0,1);

$pdf->SetFont('Helvetica','b',10);
$pdf->Cell(4.5,0.50,"Tana/UP: ".$row['present_thana'],0,0);
$pdf->Cell(3,0.50,"District: ".$row['present_district'],0,1);

//A set
$code='Boroykandi '.$row['name'];
$pdf->Code128(0.5,5,$code,8,1);
$pdf->SetXY(5,4);
$pdf->Write(5,'A set: "'.$code.'"');

//$pdf->RoundedRect(5, 5, 100, 100, 5, '0', 'DF'); if inside background
$pdf->RoundedRect(0.25, 0.25, 8.5, 5.5, 1, '0');
}
$pdf->Output();
?>
