<?php include'../koneksi.php'; 
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM rekam WHERE id_rekam = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();
$gabung = $koneksi->query ("SELECT * FROM rekam JOIN pasien ON rekam.pasien = pasien.nama WHERE id_rekam = '$id'");
$satu = $gabung->fetch_assoc();

if (!isset($id)) {
	echo "<script>alert('Belum Memilih Data')</script>";
	echo "<script>location= 'menu.php?halaman=info';</script>";
}
?>
 <h2>Detail Laporan</h2><br>
<table class="table table-bordereless col-md-5">
    <tr>
        <td>Nama Pasien</td>
        <td>:</td>
        <td><?php echo $satu['nama']?></td>
    </tr>
    	<tr>
        <td>Tanggal Berobat</td>
        <td>:</td>
        <td><?php echo $tampil['tanggal']?></td>
    </tr>
    <tr>
        <td>Hasil Pemeriksaan</td>
        <td>:</td>
        <td><?php echo $tampil['diagnosa']?></td>
    </tr>
</table>
<label for=""><strong>Keterangan Obat</strong></label>
<table class="table table-bordered">
	<tr>
		<th>Obat</th>
		<th>Jenis Obat</th>
		<th>Keterangan</th>
	</tr>
	<tr>
		<td><?php echo $tampil['obat']?></td>
		<td><?php echo $tampil['jenis_obat']?></td>
		<td><?php echo $tampil['keterangan']?> hari</td>
	</tr>
</table>
<!--   <a href="cetak.php"  class="btn btn-danger" name="cetak">Cetak</a> -->