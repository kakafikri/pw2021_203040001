<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php 
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
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
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
    body {
        background-image: url(../assets/img/robots.png);
        color: white;
    }
    .container {
        margin-top: 10%;
        font-size: 25px;
    }
    </style>
</head>
<body>
    <div class="container">
    <h1 style="text-align: left;">Registrasi</h1>
    <p>Silahkan daftar!</p>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label" name="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" aria-describedby="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" name="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" name="register" class="btn btn-primary">REGISTER</button>
        </form>
    </div>
</body>
</html>