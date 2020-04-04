<?php include '../koneksi.php'; ?>
<h2 class="text-center"> Data User </h2>

<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th> Id User</th>
			<th> Username</th>
			<th> Password</th>
			<th> Nama Lengkap</th>
			<th> No. HP</th>
			<th> Alamat</th>
			<th> Sebagai</th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		
		<?php $ambil = $koneksi->query('SELECT * FROM user'); ?>
		<?php while ($tampil = $ambil->fetch_assoc()) {
		?>
		
		<tr>
			<td><?php echo $tampil['id_user']; ?></td>
			<td><?php echo $tampil['username']; ?></td>
			<td><?php echo $tampil['password']; ?></td>
			<td><?php echo $tampil['nama']; ?></td>
			<td><?php echo $tampil['no_hp']; ?></td>
			<td><?php echo $tampil['alamat']; ?></td>
			<td><?php echo $tampil['sebagai']; ?></td>
			<td> <a href="menu.php?halaman=edit_user&id=<?php echo $tampil['id_user'] ?>" class="btn btn-info"> Edit Data</a>
			<a href="menu.php?halaman=hapus_user&id=<?php echo $tampil['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?') ">Hapus</a></td>
			
		</tr>
	</tbody>
<?php } ?>
</table>
<a href="menu.php?halaman=tambah_user" class="btn btn-primary"> Tambah User </a>


