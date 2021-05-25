<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php

if (!isset($_GET['id'])) {
    header("location: ..index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$baju = query("SELECT * FROM baju where id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="icon" href="../assets/img/Logo-The-Clothes-bulat-putih.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <style>
        body {
            color: black;
            font-family: arial;
        }

        .gambar img {
            width: 500px;
            padding-top: 10px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            margin: 0 auto;
        }

        .heading {
            font-size: 25px;
            margin-right: 25px;
        }

        .fa {
            font-size: 25px;
        }

        .checked {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top: 10px;
        }

        .middle {
            float: left;
            width: 70%;
            margin-top: 10px;
        }

        /* Place text to the right */
        .right {
            text-align: right;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {
            width: 60%;
            height: 18px;
            background-color: #04AA6D;
        }

        .bar-4 {
            width: 30%;
            height: 18px;
            background-color: #2196F3;
        }

        .bar-3 {
            width: 10%;
            height: 18px;
            background-color: #00bcd4;
        }

        .bar-2 {
            width: 4%;
            height: 18px;
            background-color: #ff9800;
        }

        .bar-1 {
            width: 15%;
            height: 18px;
            background-color: #f44336;
        }

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {

            .side,
            .middle {
                width: 100%;
            }

            /* Hide the right column on small screens */
            .right {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <button class="tombol-kembali btn btn-dark">
            <a href="shop.php" style="text-decoration: none; color:white; font-size: 20px;">
                < </a>
        </button>
        <div class="container" style="text-align: center;">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/logo.png" alt="" width="25%" height="12%">
            </a>
        </div>
    </nav>
    <div class="container" style="border: 1px solid black; border-radius: 10px; text-align: center; padding-bottom: 10px; margin-top: 90px;">
        <div class="gambar">
            <img src="../assets/img/<?= $baju["img"]; ?>" alt="" style="border: 1px solid black; margin-top: 20px; border-radius: 50px;">
        </div>
        <div class="keterangan">
            <p><?= $baju["nama"]; ?></p>
            <p><?= $baju["bahan"]; ?></p>
            <p><?= $baju["harga"]; ?></p>
            <p><?= $baju["stok"]; ?></p>
        </div>

        <button type="button" class="tombol-kembali btn btn-dark"><a href="shop.php" style="text-decoration: none; color:white;">Back</a></button>
        <button type="button" class="tombol-beli btn btn-dark"><a href="" style="text-decoration: none; color:white;">Buy</a></button>
        <br>
        <span class="heading">User Rating</span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <p>4.1 average based on 254 reviews.</p>
        <hr style="border:3px solid #f1f1f1">

        <div class="row">
            <div class="side">
                <div>5 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-5"></div>
                </div>
            </div>
            <div class="side right">
                <div>150</div>
            </div>
            <div class="side">
                <div>4 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-4"></div>
                </div>
            </div>
            <div class="side right">
                <div>63</div>
            </div>
            <div class="side">
                <div>3 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-3"></div>
                </div>
            </div>
            <div class="side right">
                <div>15</div>
            </div>
            <div class="side">
                <div>2 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-2"></div>
                </div>
            </div>
            <div class="side right">
                <div>6</div>
            </div>
            <div class="side">
                <div>1 star</div>
            </div>
            <div class="middle">
                <div class="bar-container">
                    <div class="bar-1"></div>
                </div>
            </div>
            <div class="side right">
                <div>20</div>
            </div>
        </div>

    </div>

    <!-- footer -->
    <footer style="margin-top: 50px;" class="bg-dark">
        <section id="footer" style="margin-top: 50px;">
            <div class="container">
                <div class="row" style="text-align:center; color: white;">
                    <div class="col">
                        <h3 style="margin-top: 10px;;">Visit Our Store</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6969812228103!2d107.9506169147723!3d-6.806666695080394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDgnMjQuMCJTIDEwN8KwNTcnMTAuMSJF!5e0!3m2!1sid!2sid!4v1621179693545!5m2!1sid!2sid" width="80%" height="80%" style="border:1px solid black; border-radius: 10px; margin-bottom: 20px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col">
                        <img src="../assets/img/logo.png" alt="" style="max-height: 75px; margin-top: 30px;">
                        <br>
                        <br>
                        <a href="https://shopee.co.id/theclothes.co" style="text-decoration: none;" target="blank">
                            <img src="../assets/img/shopee-logo.png" style="max-height: 50px;" alt="">
                        </a>
                        <a href="https://www.instagram.com/theclothes_co/" style="text-decoration: none;" target="blank">
                            <img src="../assets/img/logo ig.png" style="max-height: 50px; margin-left: 15px;" alt="">
                        </a>
                        <a href="https://wa.wizard.id/f77d6d" style="text-decoration: none;" target="blank">
                            <img src="../assets/img/whatsapp.png" style="max-height: 50px; margin-left: 15px;" alt="">
                        </a>

                        <div class="mb-3" style="margin-top: 15px; margin-right: 15px; color: white;">
                            <h4>Give your suggestions or criticisms</h4>
                            <label for="exampleFormControlInput1" class="form-label" style="text-align: right;">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3" style="margin-top: 15px; margin-right: 15px; color: white;">
                            <label for="exampleFormControlTextarea1" class="form-label">Your suggestions or criticisms</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-dark btn-outline-light">Send</button>
                    </div>
                </div>
                <div class="container" style="text-align: right; color: white;">
                    <p><b>Hours</b></p>
                    <p>(Mon - Fri) 8:00am - 5:00pm</p>
                </div>
                <p style="font-size: 20px; color: white; text-align:center; margin-top: 20px;">
                    Copyright &copy; 2021 - The Clothes.co.
                </p>
            </div>
        </section>
    </footer>
</body>

</html>