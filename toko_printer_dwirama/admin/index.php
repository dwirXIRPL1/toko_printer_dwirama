<?php

session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login/index.php';
    </script>
    ";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            margin-left: 550px;
            padding-top: 250px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <?php require '../layouts/sidebar.php'; ?>

    <h1>Halo, Selamat Datang <?= $_SESSION["nama_lengkap"]; ?></h1>
</body>
</html>