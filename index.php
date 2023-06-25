<?php

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(80,10,'TECH SHAMBANI',0,1,'C');
$pdf->Image('logo.jpg', 10, 50, -300);
$pdf->Output('Tech Shambani handbook.PDF', 'I');

?>