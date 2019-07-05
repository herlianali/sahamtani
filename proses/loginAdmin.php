<?php
include "koneksi.php";
if(isset($_POST['submit']))
{
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $query = mysqli_query($koneksi, "SELECT * FROM sahamtani WHERE username='$username' AND password='$password'");
    
    $data = mysqli_fetch_array($query);
    
    if (empty($data))
    {
        $_SESSION['username'] = $data['username'];
        $_SESSION['name'] = $data['name'];

        header("location: ../admin/admin.php");
    }else{
        setcookie("message","maaf tidak bisa login");
        header("location: index.php");
    }
}
?> 