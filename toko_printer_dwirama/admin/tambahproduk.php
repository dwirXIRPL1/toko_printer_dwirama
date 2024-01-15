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
if(isset($_POST["kirim"])){
    if(tambahProduk ($_POST) > 0){
        echo "
        <script type='text/javascript'>
        alert('Data Berhasil Di Tambahkan')
        window.location = 'produk.php'
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
        alert('Data Gagal Di Tambahkan')
        window.location = 'produk.php'
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="content">
        <h3 class="text-4xl font-bold text-center my-3 bg-gradient-to-r from-pink-500 to-blue-500 bg-clip-text text-transparent">Tambah Data Produk - Toko Printer R4mzz</h3>
        <form action="" class="bg-slate-200 rounded-lg p-4 w-1/4 mx-auto mt-5" method="post" enctype="multipart/form-data" >
        <div class="mb-3 flex flex-col">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama Produk" class="border px-4 py-2">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" placeholder="Harga Produk" class="border px-4 py-2">
        </div>

        <div class="mb-3 flex flex-col">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" placeholder="Foto Produk" class="border px-4 py-2">
        </div>

        <div class="mb-3 flex flex-col">
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" placeholder="Stok Produk" class="border px-4 py-2">
        </div>

        <div class="mb-3 flex flex-col">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi Produk" class="px-4 py-2"></textarea>
        </div>

        <div class="mb-3 flex flex-col">
            <button type="submit" name="kirim" class="bg-purple-600 text-white rounded-lg px-3 py-2">Tambah</button>
        </div>
        </form>

    </div>
</body>
</html>