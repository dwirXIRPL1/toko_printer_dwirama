<?php

require '../functions.php';

$id = $_GET["id"];


if(hapusProduk($id) > 0){
    echo"
        <script type=text/javascript>
            alert('Data Berhasil Di Hapus');
            window.location = 'produk.php';
        </script>
    ";
}else{
    echo"
        <script typw=text/javascript>
            alert('Data Gagal Di Hapus');
            window.location = 'produk.php';
        </script>
    ";
}

?>