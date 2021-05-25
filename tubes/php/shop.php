<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

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
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <title>Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="icon" href="../assets/img/Logo-The-Clothes-bulat-putih.png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>

  <style>
    body {
      background-color: white;
      color: black;
      font-size: 25px;
    }

    .dark-mode {
      background-color: black;
      color: white;
    }

    .container-fluid img {
      max-height: 50px;
    }

    .navbar-collapse {
      padding-left: 20%;
    }

    .nav-item {
      padding-left: 10px;
    }

    .nav-item img {
      max-height: 25px;
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="shop.php"><img src="../assets/img/logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" style="color: white;" href="../index.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style="color: white;" href="#products">PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style="color: white;" href="../index.php">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><img src="../assets/img/cart-putih.png"></a>
          </li>
        </ul>
        <form class="d-flex" action="" method="GET">
        <input type="text" name="keyword" autofocus>
          <button class="btn btn-outline-light" name="cari" style="margin-right: 10px;" type="submit">Search</button>
        </form>
        <button class="btn btn-outline-light bg-transparent" onclick="myFunction()" style="margin-right: 10px;"><img src="../assets/img/icon-dark-mode-white.png" alt="" style="max-height: 20px;"></button>
        <button class="btn btn-outline-light bg-transparent"><a href="logout.php" style="color: white; text-decoration:none;">Logout</a></button>
      </div>
    </div>
  </nav>

  <!-- products -->
  <div class="container" style="margin-top: 20px;">
    <h1 style="text-align: center; margin-top: 100px; margin-bottom: 20px;">Our Products</h1>
    <?php if (empty($baju)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan!</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1 ?>
      <?php foreach ($baju as $bj) : ?>
        <div class="container">
          <div class="col" style="margin-left: 30px;">
            <div class="rounded float-start shadow bg-body" style="border: 1px solid grey; margin: 10px;">
              <a href="detail.php?id=<?= $bj['id'] ?>" target="none">
                <img src="../assets/img/<?= $bj["img"]; ?>" class="rounded start" alt="..." style="border: 1px solid grey; max-height: 500px; margin: 15px;">
              </a>
              <p style="text-align:center; color: black;"><?= $bj["nama"]; ?></p>
              <p style="text-align:center; color: black;"><?= $bj["bahan"]; ?></p>
              <p style="text-align:center; color: black;"><?= $bj["harga"]; ?></p>
              <p style="text-align:center; color: black;"><?= $bj["stok"]; ?></p>
              <div class="button" style="margin-left: 135px; margin-bottom:20px;">
                <button type="button" class="btn btn-secondary"><a href="detail.php?id=<?= $bj['id'] ?>" style="color: white; text-decoration: none;" target="none">View</a></button>
                <button type="button" class="btn btn-secondary"><a href="" style="color: white; text-decoration: none;">Buy</a></button>
              </div>
            </div>
          </div>
        </div>
        <?php $i++ ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</body>

</html>