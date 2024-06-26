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

    <div class="content">
        <h1>Ini Halaman Data Buku</h1>
        <?php
            include_once "koneksi.php";
            $data_buku = $koneksi->query(
                "SELECT * FROM users"
            );
        ?>
        <br>
        <a href="form_data_buku.php">Tambah Data Buku</a>

        <table style="width: 100%;" border="1">
            <tr>
                <th>ID</th>
                <th>Nama Buku</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        <?php
            foreach ($data_buku as $item) {
                
        ?>

            <tr>
                <td><?php echo $item['ID'] ?></td>
                <td><?php echo $item['Nama'] ?></td>
                <td><?php echo $item['Tahun'] ?></td>
                <td><?php echo $item['Stok'] ?></td>
                <td>
                    <a href="edit_buku.php?id=<?php echo $item['ID'] ?>"><button>Edit</button></a>
                    <a href="handler_buku.php?delete_id=<?php echo $item['ID'] ?>"><button>Delete</button></a>
                    
                </td>
            </tr>

        <?php
            }
        ?>
        </table>
        


    </div>
</body>
</html>