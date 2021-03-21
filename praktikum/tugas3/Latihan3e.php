<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
$baju = [
    ["nama"     => "Article 01",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "1.png",
    "stok"      => "Tersedia"],

    ["nama"     => "Article 02",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "2.png",
    "stok"      => "Coming Soon"],

    ["nama"     => "Article 03",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "3.png",
    "stok"      => "Coming Soon"],

    ["nama"     => "Article 04",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "4.png",
    "stok"      => "Coming Soon"],

    ["nama"     => "Article 05",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "5.png",
    "stok"      => "Coming Soon"],

    ["nama"     => "Article 06",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "6.png",
    "stok"      => "Coming Soon"],

    ["nama"     => "Article 07",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "7.png",
    "stok"      => "Coming Soon"],

    ["nama"     => "Article 08",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "8.png",
    "stok"      => "Coming Soon"],

    ["nama"     => "Article 09",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "9.png",
    "stok"      => "Coming Soon"],

    ["nama"     => "Article 10",
    "bahan"     => "Combed 30s",
    "harga"     => "Rp 85.000",
    "gambar"    => "10.png",
    "stok"      => "Coming Soon"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Latihan3e</title>
    <style>
    h1{
        padding-top: 20px;
        padding-bottom: 20px;
        font-size: 50px;
        font-family: 'Roboto', sans-serif;
    }
    table{
        text-align: center;
        font-family: arial;
        font-size: 15px;
        border-bottom: 2px solid #ebebeb;
    }

    img {
        width: 200px;
    }

    </style>
</head>
<body>

<h1 style="text-align: center">The Clothes.Co</h1>

<div class="table-responsive">
        <table class="table">
            <tr class="table-active">
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Bahan</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ( $baju as $bj ) : ?>
                <tr>
                    <td class="table-active"><?= $i; ?></td>
                    <td><img src="img/<?= $bj["gambar"]; ?>" alt=""></td>
                    <td class="table-active"><?= $bj["nama"]; ?></td>
                    <td><?= $bj["bahan"]; ?></td>
                    <td class="table-active"><?= $bj["harga"]; ?></td>
                    <td><?= $bj["stok"]; ?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>