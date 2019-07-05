<?php
$host = "localhost";
$name = "wadau";
$pass = "herlianali";
$db   = "sahamtani";

$koneksi = mysqli_connect($host, $name, $pass, $db);
if ($koneksi) {
    echo "berhasil konek ke database";
}else{
    echo "tidak berhasil konek database";
}
?>