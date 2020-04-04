<?php include '../koneksi.php' ;?>
<h2 class="text-center">Rekam Pasien</h2>
<?php $ambil = $koneksi->query("SELECT * FROM pasien WHERE id_pasien = '$_GET[id]'");
	$tampil = $ambil->fetch_assoc();
 ?>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
 		<label for="">Tanggal</label>
 		<input type="date" class="form-control"  value="<?php echo date('Y-m-d'); ?>"  readonly="" name="tanggal">
 	</div>
 <div class="form-group">
 		<label for="">Pasien</label>
 		<input type="text" class="form-control" readonly="" value="<?php echo $tampil['nama'] ?>" name="pasien">
 	</div>
 <div class="form-group">
 		<label for="">Jenis Pasien</label>
 		<input type="text" class="form-control" readonly="" value="<?php echo $tampil['jenis'] ?>" name="jenis">
 	</div>
  <div class="form-group">
 		<label for="">Nama Dokter</label>
 		<input type="text" class="form-control" readonly="" value="<?php echo $tampil['nama_dokter'] ?>" name="nama_dokter">
 	</div>
 	 <div class="form-group">
 		<label for="">Poli Tujuan</label>
 		<input type="text" class="form-control" readonly="" value="<?php echo $tampil['poliklinik'] ?>" name="poliklinik">
 	</div>



 <button class="btn btn-success" name="rekam">Rekam</button>
 	<a href="menu.php?halaman=pasien" class="btn btn-primary">Kembali</a>
 </form>
 <?php
 if(isset($_POST['rekam'])){
 	$tanggal =$_POST['tanggal'];
 	$pasien =$_POST['pasien'];
 	$jenis = $_POST['jenis'];
 	$nama_dokter= $_POST['nama_dokter'];
 	$poliklinik = $_POST['poliklinik'];


 	$koneksi->query("INSERT INTO rekam (pasien, tanggal, jenis, status,nama_dokter,poliklinik) VALUES ('$pasien', '$tanggal', '$jenis', 'Belum diperiksa','$nama_dokter','$poliklinik')");
 	echo "<br><div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=info'>";
 }
 ?> 