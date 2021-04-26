<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php

if (!isset($_GET['id'])) {
    header("location: ..index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$baju = query("SELECT * FROM baju where id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Detail</title>
    <style>
    h1 {
        text-align: center;
        font-size: 50px;
        font-family: 'Roboto', sans-serif;
    }

    body {
        color: black;
        font-family: arial;
        background-image: url(../assets/img/bg.png);
    }

    .container {
        border: 1px solid black;
        border-radius: 10px;
        text-align: center;
        padding-bottom: 10px;
    }

    img {
        width: 500px;
        padding-top: 10px;
    }


    </style>
</head>
<body>
<h1>The Clothes</h1>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $baju["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $baju["nama"]; ?></p>
            <p><?= $baju["bahan"]; ?></p>
            <p><?= $baju["harga"]; ?></p>
            <p><?= $baju["stok"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
        <button class="tombol-beli"><a href="">Beli</a></button>
    </div>
</body>
</html>