<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$baju = query("SELECT * FROM baju");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $baju = cari($_POST['keyword']);
}

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
  <a href="logout.php">logout</a>
  <h3>Daftar Baju</h3>

  <a href="tambah.php">Tambah Data Baju</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Masukkan keyword pencarian" autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari</button>
  </form>
  <br>
  <div class="container">
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>

      <?php if (empty($baju)) : ?>
        <tr>
          <td colspan="4" style="color:red; font-style: italic;">
            <p>Data Tidak Ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>
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
  </div>

  <script src="js/script.js"></script>
</body>

</html>