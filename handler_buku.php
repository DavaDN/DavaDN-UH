<?php
include_once "koneksi.php";

if (isset($_POST['add_buku'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];

    $insert = $koneksi->query(
        "INSERT INTO users
        (ID, Nama, Tahun, Stok) 
        values
        ($id, '$nama', '$tahun', $stok)");

    if ($insert) {
        header('Location: data_buku.php');
    }else{
        echo "Data Buku Gagal masuk";
        
    }
}

if(isset($_POST['update_buku'])){
    $ID = $_POST['ID'];
    $Nama = $_POST['Nama'];
    $Tahun = $_POST['Tahun'];
    $Stok = $_POST['Stok'];

    $insert = $koneksi->query(
        "UPDATE users SET Nama='$Nama', Tahun = '$Tahun', Stok=$Stok 
        where ID = $ID
        ");

    if ($insert) {
        header('Location: data_buku.php');
    }else{
        echo "Data Buku Gagal masuk";
        
    }
}

if (isset($_GET['delete_id'])) {
    $ID = $_GET['delete_id'];
    $delete = $koneksi->query(
        "DELETE from users where ID = $ID
        ");
    if ($delete) {
        header('Location: data_buku.php');
    }else{
        echo "Data Buku Gagal masuk";
        
    }
}

?>
