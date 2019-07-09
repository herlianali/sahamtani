<!DOCTYPE html>
<html>
<head>
	<title>.::Saham Tani::.</title>
</head>
<body>
<!-- header -->
<h1>Daftar Pemilik Lahan</h1>

<!-- isi -->
<form action="proses/daftar_pemilik.php" method="POST" enctype="multipart/form-data">
	<label for="nama">Nama : </label>
	<input type="text" name="nama"><br>

	<label for="nik">Nik : </label>
	<input type="text" name="nik"><br>

	<label for="username">Username : </label>
	<input type="text" name="username"><br>

	<label for="password">Password : </label>
	<input type="password" name="password"><br>

	<label for="no_hp">No telp : </label>
	<input type="text" name="no_hp"><br>

	<label for="alamat">Alamat : </label>
	<input type="text" name="alamat"><br>

	<label for="foto">gambar KTP</label>
	<input type="file" name="foto"><br>
	<br>
	<input type="submit" name="submit" value="Daftar">
</form>

<!-- footer -->
<footer>
	<h5>&copy create by wadau_icimonji</h5>
</footer>
</body>
</html>