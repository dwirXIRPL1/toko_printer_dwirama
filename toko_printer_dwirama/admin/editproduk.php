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

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editProduk($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data produk berhasil diedit');
                window.location = 'produk.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data produk gagal diedit');
            window.location = 'produk.php'
        </script>
    ";
    }
}


?>
<script src="https://cdn.tailwindcss.com"></script>

<div class="main">
    <div class="box">

        <h3 class="text-4xl font-bold text-center my-3 bg-gradient-to-r from-pink-500 to-blue-500 bg-clip-text text-transparent">Edit Data Produk</h3>

        <form action="" method="POST" enctype="multipart/form-data" class="bg-slate-200 rounded-lg p-4 w-1/4 mx-auto mt-5">

            <input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>">
            <div class="mb-3 flex flex-col">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="border px-4 py-2" placeholder="Nama Produk" value="<?= $produk["nama_produk"] ?>">
            </div>
            
            <div class="mb-3 flex flex-col">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" class="border px-4 py-2" placeholder="Harga Produk" value="<?= $produk["harga"] ?>">
            </div>

            <div class="mb-3 flex flex-col">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="border px-4 py-2" placeholder="Foto Produk" value="<?= $produk["foto"] ?>">
            </div>

            <div class="mb-3 flex flex-col">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="border px-4 py-2" placeholder="Stok Produk" value="<?= $produk["stok"] ?>">
            </div>

            <div class="mb-3 flex flex-col">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" class="px-4 py-2" placeholder="Deskripsi Produk"><?= $produk["deskripsi"] ?></textarea>
            </div>

            <div class="mb-3 flex flex-col">
                <button type="submit" name="kirim" class="bg-purple-600 text-white rounded-lg px-3 py-2">Edit</button>
            </div>
        </form>
    </div>
</div>