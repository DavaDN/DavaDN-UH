<?php
include_once "koneksi.php";

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$akun = $koneksi->query("SELECT * FROM akun where Username = '$Username' AND Password = '$Password'");

$check_login = $akun->fetch_array();

if($check_login[0]) {
    session_start();
    $_SESSION['akun'] = $check_login;

    header("Location: dashboard.php");
}else {
    echo "User Tidak Terdaftar";
    header("Location: login.php");
}
?>