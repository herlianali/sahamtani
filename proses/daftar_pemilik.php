<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$tmp = $_FILES['foto']["tmp_name"];


if ($ukuran < 5000000) {
	move_uploaded_file($tmp, '../gambar/upload/ktp'.$foto);
	$query	= mysqli_query($koneksi, "INSERT INTO pemilik_lahan (nama ,nik ,username ,password ,no_hp ,foto ,alamat) VALUES ('$nama' , '$nik' , '$username' , '$password' , '$no_hp' ,'$foto' ,'$alamat')");
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