<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>";
  } else {
    echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Baju</title>
</head>

<body>
  <h3>Form Tambah Data baju</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Bahan :
          <input type="text" name="bahan" required>
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="harga" required>
        </label>
      </li>
      <li>
        <label>
          Stok :
          <input type="text" name="stok" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>