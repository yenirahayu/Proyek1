<?php include 'header.php';  ?>
<div class="content-wrapper">
 	<section class="content container-fluid">
 		<?php
 		if(isset($_GET['halaman'])){
 		if($_GET['halaman'] == "rekam"){
 				include 'rekam/rekam.php';
 		}elseif ($_GET['halaman'] == "info") {
 			include 'rekam/info.php';
 		}elseif($_GET['halaman'] == "edit_rekam") {
 			include 'rekam/edit_rekam.php';
 		}elseif($_GET['halaman'] == "laporan") {
 			include '../laporan/laporan.php';
 		}elseif($_GET['halaman'] == "cetak") {
 			include '../laporan/cetak.php';
 		}
 	}else{
 			include 'home.php';  
 		}
 		?>
 	</section>
</div>
