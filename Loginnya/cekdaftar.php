<?php
include 'koneksi.php';
$username = $_POST['username'];
$telpon     = $_POST['telpon'];
$email    = $_POST['email'];
$password = $_POST['password'];
$level   = $_POST['level'];
    $sql = "SELECT * FROM user where username='$username'";
    $result = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($result) == 0)
    {
         mysqli_query($koneksi,"insert into user (username,email,telepon,password,level)
         values ('$username','$email','$telpon','$password','$level')");
         header('Location: index.php');
    } else  { echo '<script language="javascript">
             window.alert("username sudah digunakan, silahkan gunakan nama lain");
             window.location.href="daftar.php";
             </script>';
    }
?>
