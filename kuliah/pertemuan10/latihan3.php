<?php
require 'functions.php';
$baju = query("SELECT * FROM baju");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Baju</title>
</head>

<body>
  <h3>Daftar Baju</h3>

  <a href="tambah.php">Tambah Data Baju</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($baju as $bj) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $bj['gambar']; ?>"></td>
        <td><?= $bj['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $bj['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>