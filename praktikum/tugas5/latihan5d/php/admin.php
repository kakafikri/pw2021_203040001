<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
require 'functions.php';

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
    <title>Latihan5e</title>
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

<h1 style="text-align: center"><a href="admin.php" style="color:black">The Clothes.Co</a></h1>

<div class="add">
    <button><a href="tambah.php" style="color:black">Tambah Data</a></button>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
</div>

<div class="table-responsive">

        <table class="table">
            <tr class="table-active">
                <th>No</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Bahan</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>

            <?php if (empty($baju)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data Tidak Ditemukan!</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ($baju as $bj) : ?>
                    <tr>
                    <td class="table-active"><?= $i; ?></td>
                        <td>
                            <button><a href="ubah.php?id=<?= $bj['id'] ?>">Ubah</a></button>
                            <button><a href="hapus.php?id=<?= $bj['id'] ?>" onclick="return confirm('Hapus Data?')">Hapus</a></button>
                            
                        </td>

                        <td>
                            <p class="$img">
                                <a href="detail.php?id=<?= $bj['id'] ?>">
                                    <img src="../assets/img/<?= $bj["img"]; ?>" alt="">
                                </a>
                            </p>
                            <p style="font-size:15px">*klik gambar untuk lebih jelas</p>
                        </td>

                        <td class="table-active">
                            <p class="nama">
                                <a href="detail.php?id=<?= $bj['id'] ?>" style="color:black">
                                    <?= $bj["nama"]; ?>
                                </a>
                            </p>
                        </td>

                        <td><?= $bj["bahan"]; ?></td>
                        <td class="table-active"><?= $bj["harga"]; ?></td>
                        <td><?= $bj["stok"]; ?></td>

                    </tr>
                <?php $i++ ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

</body>
</html>

                    