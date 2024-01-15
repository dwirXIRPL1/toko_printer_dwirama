<?php
session_start();
require '../functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login/index.php';
    </script>
    ";
}

$produk = query("SELECT * FROM produk");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>

    <?php require '../layouts/sidebar.php'; ?>

    <div class="content">
        <h3>Data Produk - Toko Printer R4mzz</h3>

    <a href="tambahproduk.php">Tambah Produk</a>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Stok</th>
                <th>Desekripsi</th>
                <th>Aksi</th>
            </tr>

            <?php $no = 1; ?>
            <?php foreach($produk as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp. <?= number_format($data["harga"]); ?></td>
                <td><img src="../assets/images/<?= $data["foto"]; ?>" width="100"></td>
                <td><?= $data["stok"]; ?></td>
                <td><?= $data["deskripsi"]; ?></td>
                <td>
                    <a href="editproduk.php?id=<?= $data['id_produk'] ?>">Edit</a>
                    <a href="hapusproduk.php?id=<?= $data['id_produk'] ?>">Hapus</a>
                </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
        
    </div>
</body>
</html>