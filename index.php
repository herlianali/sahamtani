<?php 
include "proses/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>.::saham tani::.</title>
</head>
<body>
<h1>halaman pencarian lahan</h1>
<!-- header -->
<nav>
	<form action="" method="POST">
		<input type="text" name="pencarian">
		<button type="submit">cari</button>
	</form>
</nav><br>
<!-- menampilkan semua lahan -->
<table border="1">
	<thead>
		<td>foto lahan</td>
		<td>keterangan</td>
		<td>alamat</td>
		<td>biaya</td>
	</thead>
	<?php
	$query = mysqli_query($koneksi,"SELECT * FROM Lahan");
	while ($data = mysqli_fetch_array($query)) {

	?> 
	<tbody>
		<td><?php echo $data['foto_lahan']; ?></td>
		<td><?php echo $data['keterangan']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['biaya']; ?></td>
	</tbody>
	<?php } ?>
</table>

<!-- footer -->
<footer>
	<h5>&copy create by wadau_icimonji</h5>
</footer>
</body>
</html>