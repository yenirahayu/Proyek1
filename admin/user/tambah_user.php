<?php include '../koneksi.php';

 ?>

 <h2 class="text-center"> Tambah User</h2>
 <form action="" method="POST" enctype="multipart/form-data">
 	<div class="form-group">
 		<label for="Nama">Nama Lengkap</label>
 		<input type="text" class="form-control" name="nama_lengkap">
 	</div>
    <div class="form-group">
 		<label for="Alamat">Alamat</label>
 		<input type="text" class="form-control" name="Alamat">
 	</div>
 	 <div class="form-group">
 		<label for="No">No Hp</label>
 		<input type="number" class="form-control" name="no_hp">
 	</div>
 	 <div class="form-group">
 		<label for="Username">Username</label>
 		<input type="text" class="form-control" name="username">
 	</div>
 	 <div class="form-group">
 		<label for="Password">Password</label>
 		<input type="password" class="form-control" name="password">
 	</div>
 	 <div class="form-group">
 		<label for="Level_user">Level User</label>
 		<select class="form-control"  id="Level_user" name="level_user">
 			<option value="admin">admin</option>
 			<option value="kurir">kurir</option>
 			<option value="pelanggan">pelanggan</option>
 		</select>
 	</div>

 	<button class="btn btn-primary" name="simpan">Simpan</button>
 	<a href="" class="btn btn-warning">Kembali</a>
 </form>
 <?php
 if (isset($_POST['simpan'])){
 	$nama = $_POST['nama_lengkap'];
 	$Alamat = $_POST['Alamat'];
 	$no_hp = $_POST['no_hp'];
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$level = $_POST['level_user'];

 $koneksi->query("INSERT INTO user(nama, alamat, no_hp, username, password, sebagai) VALUES ('$nama', '$Alamat', '$no_hp', '$username', '$password', '$level')");
 echo "<div class='alert alert-success text-center'> Data Berhasil Disimpan </div>";
 echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=user'>";
 }
 ?>