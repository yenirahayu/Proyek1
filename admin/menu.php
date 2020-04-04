<?php include 'header.php';  ?>
<div class="content-wrapper">
 	<section class="content container-fluid">
 		<?php
 		if(isset($_GET['halaman'])){
 			if($_GET['halaman'] == "user"){
 				include 'user/user.php';
 		}elseif ($_GET['halaman'] == "tambah_user"){
 			include 'user/tambah_user.php';
 		}elseif ($_GET['halaman'] == "hapus_user") {
 			include 'user/hapus_user.php';	
 		}elseif ($_GET['halaman'] == "edit_user"){
 			include 'user/edit_user.php';	
 		}elseif ($_GET['halaman'] == "logaktivitas"){
 			include 'logaktivitas/logaktivitas.php';	
 		}elseif ($_GET['halaman'] == "tambah_kp"){
 			include 'kp/tambah_kp.php';	
 		}elseif ($_GET['halaman'] == "edit_kp"){
 			include 'kp/edit_kp.php';	
 		}elseif ($_GET['halaman'] == "hapus_kp"){
 			include 'kp/hapus_kp.php';
 		}elseif ($_GET['halaman'] == "sampah"){
 			include 'Data_Sampah/sampah.php';
 		}elseif ($_GET['halaman'] == "tambah_sampah"){
 			include 'Data_Sampah/tambah_sampah.php';
 		}elseif ($_GET['halaman'] == "hapus_sampah"){
 			include 'Data_Sampah/hapus_sampah.php';
 		}elseif ($_GET['halaman'] == "ubah_sampah"){
 			include 'Data_Sampah/ubah_sampah.php';
 		}elseif ($_GET['halaman'] == "tambah_rekam"){
 			include 'rekam/tambah_rekam.php';
 		}elseif ($_GET['halaman'] == "info"){
 			include 'rekam/info.php';
 		}elseif($_GET['halaman'] == "laporan") {
 			include '../laporan/laporan.php';
		}elseif($_GET['halaman'] == "cetak") {
 			include '../laporan/cetak.php';
 	
		}elseif($_GET['halaman'] == "transaksi") {
 			include '../laporan_transaksi/laporan_transaksi.php';
 		}
 	}else{
 			include 'home.php';  
 		}
 		?>
 	</section>
</div>

