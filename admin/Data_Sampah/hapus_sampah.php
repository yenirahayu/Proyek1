<?php include '../koneksi.php';

$ambil = $koneksi->query("SELECT * FROM data_sampah WHERE id_sampah = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM data_sampah WHERE id_sampah ='$_GET[id]'");

echo "<script>location='menu.php?halaman=sampah'; </script>";


 ?>