<?php include '../koneksi.php'; ?>
<h2 class="text-center"> Data User </h2>

<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th>Id Transaksi</th>
			<th>Nama Pelanggan</th>
			<th>Nama barang</th>
			<th>Kategori</th>
			<th>Jumlah</th>
			<th>Total</th>
			<th>Nama Kurir</th>
			<th> Aksi </th>
		</tr>
	</thead>
	<tbody>
		
<?php $ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_transaksi = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();
$gabung = $koneksi->query ("SELECT * FROM transaksi JOIN user ON berat.user, total_harga.user, tanggal.user = user.nama WHERE id_transakso = '$id'");
$satu = $gabung->fetch_assoc();
?>
		
		<tr>
			<td><?php echo $tampil['id_transaksi']; ?></td>
			<td><?php echo $tampil['nama']; ?></td>
			<td><?php echo $tampil['nama_barang']; ?></td>
			<td><?php echo $tampil['kategori']; ?></td>
			<td><?php echo $tampil['jumlah']; ?></td>
			<td><?php echo $tampil['total']; ?></td>
			<td> <a href="menu.php?halaman=edit_user&id=<?php echo $tampil['id_user'] ?>" class="btn btn-info"> Edit Data</a>
			<a href="menu.php?halaman=hapus_user&id=<?php echo $tampil['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?') ">Hapus</a></td>
			
		</tr>
	</tbody>
<?php } ?>
</table>
<a href="menu.php?halaman=tambah_user" class="btn btn-primary"> Tambah User </a>


