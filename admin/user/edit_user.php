<?php include '../koneksi.php';

 ?>

 <h2 class="text-center"> Edit Data User</h2>
 <?php $ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$_GET[id]'");
	$tampil = $ambil->fetch_assoc();
 ?>
 <!--<pre><?php print_r($tampil); ?></pre> -->
 <form action="" method="POST" enctype="multipart/form-data">
 	<div class="form-group">
 		<label for="Nama">Nama Lengkap</label>
 		<input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama'] ?>">
 	</div>
    <div class="form-group">
 		<label for="Alamat">Alamat</label>
 		<input type="text" class="form-control" name="Alamat" value="<?php echo $tampil['alamat']?>">
 	</div>
 	 <div class="form-group">
 		<label for="No">No HP</label>
 		<input type="number" class="form-control" name="no_hp" value="<?php echo $tampil['no_hp']?>">
 	</div>
 	 <div class="form-group">
 		<label for="Username">Username</label>
 		<input type="text" class="form-control" name="username" value="<?php echo $tampil['username']?>">
 	</div>
 	 <div class="form-group">
 		<label for="Password">Password</label>
 		<input type="password" class="form-control" name="password" value="<?php echo $tampil['password']?>">
 	</div>
 	 <div class="form-group">
 		<label for="Level_user">Level User</label>
 		<select class="form-control"  id="Level_user" name="level_user">
 			<option value="admin" <?php if($tampil['sebagai'] == "admin"){
 				echo "selected";
 			}?>>admin</option>
 			<option value="kurir" <?php if($tampil['sebagai'] == "kurir"){
 				echo "selected";
 			}?>>kurir</option>
 			<option value="pelanggan" <?php if($tampil['sebagai'] == "pelanggan"){
 				echo "selected";
 			}?>>pelanggan</option>
 		</select>
 	</div>

 	<button class="btn btn-primary" name="simpan">Simpan</button>
 	<a href="menu.php?halaman=user" class="btn btn-warning">Kembali</a>
 </form>
 <?php
 if (isset($_POST['simpan'])){
 	$nama = $_POST['nama'];
 	$Alamat = $_POST['Alamat'];
 	$no_hp = $_POST['no_hp'];
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$level = $_POST['level_user'];

 $koneksi->query("UPDATE user SET nama= '$nama', Alamat='$Alamat', no_hp='$no_hp', username='$username', password='$password', sebagai = '$level' WHERE id_user = '$_GET[id]'");
 echo "<div class='alert alert-success text-center'> Data Berhasil Diedit </div>";
 echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=user'>";
 }
 ?>