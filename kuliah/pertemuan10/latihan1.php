<?php 
// Koneksi ke DB & pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040001');

// Query isi tabel baju
$result = mysqli_query($conn, "SELECT * FROM baju");

// Ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows =  [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows [] = $row;
}

// tampung ke variabel baju
$baju = $rows;

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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Bahan</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach( $baju as $bj) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $bj['gambar']; ?>"></td> 
        <td><?= $bj['nama']; ?></td>
        <td><?= $bj['bahan']; ?></td>
        <td><?= $bj['harga']; ?></td>
        <td><?= $bj['stok']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>