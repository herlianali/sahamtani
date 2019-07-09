<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];


$query = mysqli_query($koneksi,"INSERT INTO pemodal (nama , username , password , email , alamat , no_telp) VALUES ('$nama' , '$username' , '$password' , '$email' , '$alamat' , '$no_telp')");
if ($query) {
	echo "berhasil masuk data";
	header("location:../index.php");
}else{
	echo "gagal input";
	header("location:../pemodal.php");
}
?>