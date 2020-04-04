<?php include '../koneksi.php' ;?>
<h2 class="text-center">Rekam Pasien</h2>
<?php $ambil = $koneksi->query("SELECT * FROM rekam WHERE id_rekam = '$_GET[id]'");
	$tampil = $ambil->fetch_assoc();
 ?>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
 		<label for="">Tanggal</label>
 		<input type="date" class="form-control"  value="<?php echo date('Y-m-d'); ?>"  readonly="" name="tanggal">
 	</div>
 <div class="form-group">
 		<label for="">Pasien</label>
 		<input type="text" class="form-control"  value="<?php echo $tampil['pasien'] ?>" readonly="" name="pasien">
 	</div>
 <div class="form-group">
 		<label for="">Jenis Pasien</label>
 		<input type="text" class="form-control" readonly="" value="<?php echo $tampil['jenis'] ?>" readonly="" name="jenis">
 	</div>
 	<div class="form-group">
 		<label for="">Nama Dokter</label>
 		<input type="text" class="form-control" readonly="" value="<?php echo $tampil['nama_dokter'] ?>" name="nama_dokter">
 	</div>
 	 <div class="form-group">
 		<label for="">Poli Tujuan</label>
 		<input type="text" class="form-control" readonly="" value="<?php echo $tampil['poliklinik'] ?>" name="poliklinik">
 	</div>
 	<div class="form-group">
 		<label for="">Diagnosa</label>
<textarea name="diagnosa" id="" rows="4" class="form-control"></textarea>
</div>
<button class="btn btn-primary" name="proses">Tambah Resep </button><br>
<br> <?php if (isset($_POST['proses'])) {?>
	<div class="form-row">
	<div class="form-group col-md-4">
		<select name="obat" id="" class="form-control">
			<option value="">--Obat--</option>
			<?php $ambil= $koneksi->query("SELECT * FROM obat ORDER BY nama_obat asc") ?>
			<?php while ($obat = $ambil->fetch_assoc()) { ?>
				<option  ><?php echo $obat['nama_obat']?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group col-md-4">
		<select name="jenis_obat" id="" class="form-control">
			<option value="">--Jenis Obat--</option>
			<option value="Tube">Tube</option>
				<option value="Botol">Botol</option>
				<option value="Sachet">Sachet</option>
				<option value="Kaplet">Kaplet</option>
				<option value="Tablet">Tablet</option>
		</select>
	</div>
	<div class="form-group col-md-4">
		<input type="text" name="keterangan" placeholder="keterangan" class="form-control">
	</div>
	</div>
<?php } ?>
<br> 
 <button class="btn btn-success" name="rekam">Periksa</button>
 	<a href="menu.php?halaman=pasien" class="btn btn-primary">Kembali</a>
 </form>
 <?php
 if(isset($_POST['rekam'])){
 	$tanggal =$_POST['tanggal'];
 	$pasien =$_POST['pasien'];
 	$jenis = $_POST['jenis'];
 	$nama_dokter= $_POST['nama_dokter'];
 	$poliklinik = $_POST['poliklinik'];
 	$diagnosa = $_POST['diagnosa'];
 	$obat = $_POST['obat'];
 	$jenis_obat = $_POST['jenis_obat'];
 	$keterangan = $_POST['keterangan'];

 	$koneksi->query("UPDATE rekam SET pasien = '$pasien', tanggal = '$tanggal', diagnosa ='$diagnosa', jenis ='$jenis', status = 'Telah diperiksa', obat = '$obat', jenis_obat ='$jenis_obat', keterangan = '$keterangan' where id_rekam = '$_GET[id]'");
 	echo "<br><div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=info'>";
 }
 ?> 