<?php
// mengaktifkan session pada php
session_start();
 // menghubungkan php dengan koneksi databese
include 'koneksi.php';
 // menangkap data yang dikirim dari from login
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
 // menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
 // menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 // cek apakah username dan password di temukan pada databese
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:../rapip/index.php");
}else{
    // alihkan ke halaman login kembali
    header("location:index.php?alert=gagal");
}