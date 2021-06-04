<?php 
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// query baju berdasarkan id
$bj = query("SELECT * FROM baju WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Baju</title>
</head>

<body>
  <h3>Detail Baju</h3>
  <ul>
    <li><img src="img/<?= $bj['gambar']; ?>" alt=""></li>
    <li>Nama : <?= $bj['nama']; ?></li>
    <li>Bahan : <?= $bj['bahan']; ?></li>
    <li>Harga : <?= $bj['harga']; ?></li>
    <li>Stok : <?= $bj['stok']; ?></li>
    <li><a href="ubah.php?id=<?= $bj['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $bj['id']; ?>" onclick="return confirm ('apakah anda yakin?');">hapus</a></li>
    <li><a href="index.php">Kembali</a></li>

  </ul>
</body>

</html>