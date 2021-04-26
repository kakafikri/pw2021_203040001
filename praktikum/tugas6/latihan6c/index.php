<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
require 'php/functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $baju = query("SELECT * FROM baju WHERE
            nama LIKE '%$keyword' OR
            bahan LIKE '%$keyword' OR
            harga LIKE '%$keyword' OR
            stok LIKE '%$keyword' ");
} else {
    $baju = query("SELECT * FROM baju");
}

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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
    h1{
        padding-top: 30px;
        padding-bottom: 20px;
        font-size: 70px;
        font-family: 'Roboto', sans-serif;
    }
    table{
        text-align: center;
        font-family: arial;
        font-size: 20px;
        border-bottom: 2px solid #ebebeb;
    }

    img {
        width: 200px;
        padding-top: 10px;
    }

    td, tr {
        color: black;
    }

    td button {
        margin-top: 35%;
    }

    .add button {
        margin-bottom: 20px;
        margin-left: 20px;
    }

    .add input {
        margin-left: 20px;
    }
    </style>
</head>
<body>

<h1 style="text-align: center"><a href="index.php" style="color:black">The Clothes.Co</a></h1>
    
    <div class="container">
        <div>
            <?php foreach ($baju as $bj) :?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $bj['id'] ?>">
                        <?= $bj["nama"]?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>

        <button class="tombol-admin"><a href="php/login.php">Halaman Admin</a></button>
    </div>

</body>
</html>

                    