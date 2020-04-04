<?php include '../koneksi.php' ;?>
<h2 class="text-center"> Tambah Sampah</h2>
 <form action="" method="POST" enctype="multipart/form-data">
 	<div class="form-group">
 		<label for="nama">Nama Sampah</label>
 		<input type="text" class="form-control" name="sampah">
 	</div>
    <div class="form-group">
 		<label for="kategori">Kategori</label>
 		<input type="text" class="form-control" name="kategori">
 	</div>
	<div class="form-group">
 		<label for="harga">Gambar Sampah</label>
 		<input type="file" class="form-control" name="gambar">
 	</div>
 	 <div class="form-group">
 		<label for="harga">Harga</label>
 		<input type="text" class="form-control" name="harga">
 	</div>
		<button class="btn btn-primary" name="simpan">Simpan</button>
		<a href="menu.php?halaman=sampah" class="btn btn-warning">Kembali</a></br>
	</div>

</form>
<?php
if (isset($_POST['simpan'])){
	$sampah = $_POST['sampah'];
	$kategori = $_POST['kategori'];
	$harga = $_POST['harga'];
	
	$extensi = explode(".",$_FILES['gambar']['name']);
	$gambar = "brg-" .round(microtime(true)).".".end($extensi);
	$sumber = $_FILES['gambar']['tmp_name'];
	$upload = move_uploaded_file($sumber, "foto/".$gambar);
	

	$koneksi->query("INSERT INTO data_sampah (nama_sampah, kategori, gambar, harga) VALUES('$sampah', '$kategori', '$gambar','$harga')");
	echo "<br><div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=sampah'>";
}?> 