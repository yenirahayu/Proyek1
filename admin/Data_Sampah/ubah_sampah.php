<?php include '../koneksi.php';

 ?>

 <h2 class="text-center"> Edit Data Sampah</h2>
 <?php $ambil = $koneksi->query("SELECT * FROM data_sampah WHERE id_sampah = '$_GET[id]'");
	$tampil = $ambil->fetch_assoc();
 ?>
 <!--<pre><?php print_r($tampil); ?></pre> -->
 <form action="" method="POST" enctype="multipart/form-data">
 	<div class="form-group">
 		<label for="sampah">Nama Sampah</label>
 		<input type="text" class="form-control" name="sampah" value="<?php echo $tampil['nama_sampah'] ?>">
 	</div>
    <div class="form-group">
 		<label for="kategori">Kategori</label>
 		<input type="text" class="form-control" name="kategori" value="<?php echo $tampil['kategori']?>">
 	</div>
	<div class="form-group">
 		<label for="kategori">Gambar Sampah</label>
 		<input type="file" class="form-control" name="gambar" value="<?php echo $tampil['gambar']?>">
 	</div>
 	 <div class="form-group">
 		<label for="harga">harga</label>
 		<input type="text" class="form-control" name="harga" value="<?php echo $tampil['harga']?>">
 	</div>
 	

 	<button class="btn btn-primary" name="edit">Edit</button>
 	<a href="menu.php?halaman=sampah" class="btn btn-warning">Kembali</a>
 </form>
 <?php
 if (isset($_POST['edit'])){
 	$smp = $_POST['sampah'];
 	$ktg = $_POST['kategori'];
 	$hrg = $_POST['harga'];
	
	$extensi = explode(".",$_FILES['gambar']['name']);
	$gambar = "brg-" .round(microtime(true)).".".end($extensi);
	$sumber = $_FILES['gambar']['tmp_name'];
	$upload = move_uploaded_file($sumber, "foto/".$gambar);
	

 $koneksi->query("UPDATE data_sampah SET nama_sampah= '$smp', kategori='$ktg', harga='$hrg' WHERE id_sampah = '$_GET[id]'");
 echo "<div class='alert alert-success text-center'> Data Berhasil Diedit </div>";
 echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=sampah'>";
 }
 ?>