<!DOCTYPE html>
<html>
<head>
	<title>.::sahamtani::.</title>
</head>
<body>
	<!-- header -->
	<h1>Input Lahan</h1>
	<!-- isi -->
<form action="proses/lahan.php" method="POST" enctype="multipart/form-data">
	<label>Alamat Lahan : </label>
	<input type="text" name="alamat">
	<br>
	<label>Biaya : Rp </label>
	<input type="number" name="biaya">
	<br>
	<label>Keterangan : </label>
	<input type="text" name="keterangan">
	<br>
	<label>Foto Lahan : </label>
	<input type="file" name="foto_lahan">
	<br>
	<input type="submit" name="submit" value="submit">
</form>
<!-- footer -->
<footer>
	<h5>&copy created by wadau_icimonji</h5>
</footer>
</body>
</html>