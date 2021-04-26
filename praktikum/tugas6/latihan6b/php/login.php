<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user melakukan Login jika redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
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
    <title>Login</title>
    <style>
    body {
        background-image: url(../assets/img/papyrus-dark.png);
    }

    h1 {
        font-size: 70px;
    }

    .container {
        margin-top: 8%;
        font-size: 25px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: white;">Selamat Datang!</h1>
        <form action="" method="post">
            <?php if (isset($error)) : ?>
                <p style="color: red;">Username atau Password salah!</p>
            <?php endif; ?>
            <div class="mb-3">
                <label for="username" class="form-label" style="color: white;">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="username" name="username">
                <div id="usernameHelp" class="form-text">We'll never share your username and password with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color: white;">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember">
                <label class="form-check-label" for="remember" style="color: white;">Remember me!</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
        </form>
        <div class="registrasi">
            <p style="color: white;">Belum punya akun? Regsistrasi <a href="registrasi.php">Disini</a></p>
        </div>
    </div>
</body>
</html>