<?php include '../koneksi.php'; ?>
<h2 class="text-center"> Rekam Medis </h2>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th> No Urut</th>
			<th> Pasien</th>
			<th> Tanggal</th>
			<th> Diagnosa</th>
			<th> Jenis</th>
			<th> Status</th>
			<th> Nama Dokter</th>
			<th> Poli Tujuan</th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM rekam") ?>
		<?php while ($tampil = $ambil->fetch_assoc()) {?>
		
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $tampil['pasien'] ?></td>
			<td><?php echo $tampil['tanggal'] ?></td>
			<td><?php echo $tampil['diagnosa'] ?></td>
			<td><?php echo $tampil['jenis'] ?></td>
			<td><?php echo $tampil['status'] ?></td>
			<td><?php echo $tampil['nama_dokter'] ?></td>
			<td><?php echo $tampil['poliklinik'] ?></td>
			<td> 
				<?php if ($tampil['status'] == "Belum diperiksa"):?>
				<label for="">Tunggu Dokter Memeriksa </label>
			    <?php endif ?>
			    <?php if ($tampil['status'] !== "Belum diperiksa"):?>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Id<?php echo $tampil['id_rekam']?>">Laporan</button>
	<div class="modal" Id="Id<?php echo $tampil['id_rekam']?>">
		
		<div class="modal-dialog modal-dialog-centered">
			
			<div class="modal-content">
				
				<div class="modal-header">
					<div class="modal-title">Laporan Singkat</div>
					<button type="button" class="close" data-dismiss="modal">x</button>
				</div>
				<div class="modal-body">
					<table class="table-borderless">
						<tr>
							<th>Diagnosa</th>
							<th>Obat</th>
							<th>Keterangan</th>
							<th>Status</th> 

						</tr>
						<tr>
							<td><?php echo $tampil['diagnosa'] ?></td>
						    <td><?php echo $tampil['obat'] ?></td>
							<td><?php echo $tampil['keterangan'] ?> hari</td>
							<td><?php echo $tampil['status'] ?></td>
						</tr>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					<?php if ($tampil['status'] == "Obat Telah Diberikan"):?>
						<a href="menu.php?halaman=laporan&id=<?php echo $tampil['id_rekam']?>" class=" btn btn-primary">Lebih Lengkap</a>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif ?>
		</td>
	</tr>
	</tbody>
	<?php $nomor++; ?>
<?php } ?>
</table>  
