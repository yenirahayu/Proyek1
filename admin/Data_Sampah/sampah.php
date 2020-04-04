<?php include '../koneksi.php'; ?>
<h2 class="text-center"> Data Sampah </h2>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th> Nama Sampah</th>
			<th> Kategori</th>
			<th> Gambar Sampah</th>
			<th> Harga</th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil = $koneksi->query('SELECT * FROM data_sampah'); ?>
		<?php while ($tampil = $ambil->fetch_assoc()) {
		?>
		
		<tr>
			<td><?php echo $tampil['nama_sampah']; ?></td>
			<td><?php echo $tampil['kategori']; ?></td>
			<td><img src ="foto/<?php echo $tampil['gambar']; ?>" width = "150px"></td>
			<td><?php echo $tampil['harga']; ?></td>
			<td> <a href="menu.php?halaman=ubah_sampah&id=<?php echo $tampil['id_sampah'] ?>" class="btn btn-info"> Edit Data</a>
			<a href="menu.php?halaman=hapus_sampah&id=<?php echo $tampil['id_sampah'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?') ">Hapus</a></td>
	
		</tr>
	</tbody>
<?php } ?>
</table>
<a href="menu.php?halaman=tambah_sampah" class="btn btn-primary"> Tambah Sampah </a>


