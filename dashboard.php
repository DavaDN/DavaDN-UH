<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="data_buku.php">Data Buku</a>
        <a href="data_pengguna.php">Data Pengguna</a>
    </div>
    <?php
    session_start();
    if (!isset($_SESSION['akun'])) {
        # code... 
        header("location: login.php");
    }
    ?>
        <div class="Home" id="#Home">
            <h1>Ini Home</h1>
            Hallo,<?php echo $_SESSION['akun']['Username'];?>
        </div>
        <a href="logout.php">logout</a>
</body>
</html>