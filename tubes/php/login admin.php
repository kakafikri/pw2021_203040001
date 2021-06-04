<?php
/*Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB*/
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['$_COOKIE'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// melakukan pengecekan apakah user melakukan Login jika redirect ke halaman admin
if (isset($_SESSION['username']) === 'admin') {
  header("Location: admin.php");
  exit;
} else if (!isset($_SESSION['username']) != 'admin') {
  header("Location: shop.php");
  exit;
}
// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dientang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="icon" href="../assets/img/Logo-The-Clothes-bulat-putih.png">
  <style>
    body {
      background-image: url(../assets/img/papyrus-dark.png);
      color: white;
    }

    h1 {
      font-size: 40px;
      text-align: center;
    }

    p {
      font-size: 15px;
    }

    .container {
      margin-top: 10px;
      font-size: 25px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 style="color: white;">Welcome Admin!</h1>
    <form action="" method="post">
      <div class="card bg-transparent" style="width: 16rem; margin: auto; width: 50%; padding: 10px;">
        <img src="../assets/img/Logo-The-Clothes-bulat-putih.png" class="card text-white bg-dark mb-3" alt="..." style="border: 1px solid black; border-radius: 360px; max-width: 200px; margin: auto; width: 50%; border: 1px solid white; padding: 10px;">
        <?php if (isset($error)) : ?>
          <p style="color: red; text-align: center;">Wrong username or password!</p>
        <?php endif; ?>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" aria-describedby="username" name="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <a href="admin.php">
              <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </a>
          </form>
        </div>
      </div>
    </form>
  </div>
</body>

</html>