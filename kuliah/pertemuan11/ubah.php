<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$bj = query("SELECT * FROM baju WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>";
  } else {
    echo "<script>
        alert('data gagal diubah!');
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
  <title>Ubah Data Baju</title>
</head>

<body>
  <h3>Form Ubah Data baju</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $bj['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $bj['nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          Bahan :
          <input type="text" name="bahan" required value="<?= $bj['bahan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="harga" required value="<?= $bj['harga']; ?>">
        </label>
      </li>
      <li>
        <label>
          Stok :
          <input type="text" name="stok" required value="<?= $bj['stok']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $bj['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>