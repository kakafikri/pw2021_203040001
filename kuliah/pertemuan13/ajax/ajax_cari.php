<?php
require '../functions.php';
$baju = cari($_GET['keyword']);
?>
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