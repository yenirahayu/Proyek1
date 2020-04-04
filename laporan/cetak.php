<?php include '../koneksi.php' ; // Koneksi library FPDF
require('../laporan/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A5');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'Daftar Harga Motor Dealer Maju Motor',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'Jl. Abece No. 80 Kodamar, jakarta Utara.',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'pasien',1,0);
$pdf->Cell(50,6,'tanggal',1,0);
$pdf->Cell(35,6,'diagnosa',1,0);
$pdf->Cell(30,6,'obat',1,0);
$pdf->Cell(25,6,'jenis_obat',1,0);
$pdf->Cell(25,6,'keterangan',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($conn, "SELECT * FROM rekam JOIN pasien ON rekam.pasien = pasien.nama WHERE id_rekam = '$id'");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,6,$row['pasien'],1,0);
    $pdf->Cell(50,6,$row['tanggal'],1,0);
    $pdf->Cell(35,6,$row['diagnosa'],1,0);
    $pdf->Cell(30,6,$row['obat'],1,0);
    $pdf->Cell(25,6,$row['jenis_obat'],1,0);
    $pdf->Cell(25,6,$row['keterangan'],1,1);
}

$pdf->Output();
?>