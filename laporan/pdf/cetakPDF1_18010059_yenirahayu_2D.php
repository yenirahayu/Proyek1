<?php
	require ('fpdf.php');
	$pdf = new FPDF();
	$pdf->AddPage('P','A4');
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'18010059_yenirahayu_2D');
	$pdf->Output('I','18010059_yenirahayu_2D.pdf');
?>