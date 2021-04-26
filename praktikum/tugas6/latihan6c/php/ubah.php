<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$bj = query("SELECT * FROM baju WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
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
    <title>Document</title>
</head>
<body>
    <h3>Form Ubah Data Baju</h3>

    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $bj['id']; ?>">

    <ul>
        <li>
            <label for="img">Gambar :</label><br>
            <input type="text" name="img" id="img" required value="<?= $bj['img']?>"><br><br>
        </li>

        <li>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $bj['nama']?>"><br><br>
        </li>

        <li>
            <label for="bahan">Bahan :</label><br>
            <input type="text" name="bahan" id="bahan" required value="<?= $bj['bahan']?>"><br><br>
        </li>

        <li>
            <label for="harga">Harga :</label><br>
            <input type="text" name="harga" id="harga" required value="<?= $bj['harga']?>"><br><br>
        </li>

        <li>
            <label for="stok">Stok :</label><br>
            <select name="stok" id="stok" required>
                <option value="">Pilih Stok</option>
                <option value="Tersedia">Tersedia</option>
                <option value="Coming Soon">Coming Soon</option>
            </select>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="admin.php" style="color: black;">Kembali</a>
        </button>

    </ul>

    </form>

</body>
</html>