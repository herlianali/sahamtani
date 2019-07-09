<?php 
include "koneksi.php";

$alamat = $_POST['alamat'];
$biaya = $_POST['biaya'];
$keterangan = $_POST['keterangan'];
$foto_lahan = $_FILES['foto_lahan']['name'];
$ukuran = $_FILES['foto_lahan']['size'];
$tmp = $_FILES['foto_lahan']["tmp_name"];

var_dump($alamat);
if ($ukuran < 5000000) {
	move_uploaded_file($tmp, '../gambar/upload/lahan/'.$foto_lahan);
	$query	= mysqli_query($koneksi, "INSERT INTO Lahan (alamat ,biaya ,keterangan ,foto_lahan) VALUES ('$alamat' , '$biaya' , '$keterangan' , '$foto_lahan')");
	if ($query) {
		echo "berhasil upload";
	}else{
		echo "gagal upload";
	}
}else{
	echo "ukuran tidak sesuai ketentuan";
}
header("location:../index.php");
?>