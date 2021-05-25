<?php
require 'php/functions.php';

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
  <title>The Clothes.co</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="icon" href="assets/img/Logo-The-Clothes-bulat-putih.png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: black;
    }

    h2 {
      padding-top: 25px;
      padding-bottom: 25px;
    }
  </style>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="assets/img/logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#products">PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#contacts">CONTACTS</a>
          </li>
          <li class="nav-item">
            <a href="php/login.php" class="nav-link active" href="#">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="php/shop.php"><img src="assets/img/cart-putih.png"></a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
  </nav>

  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/cr1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black;">First slide label</h5>
          <p style="color: black;">Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/cr2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black;">Second slide label</h5>
          <p style="color: black;">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/cr3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black;">Third slide label</h5>
          <p style="color: black;">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- About -->
  <section id="about" style="border: 2px solid white; border-radius: 90px; margin-top: 20px;
  -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: white;">
    <h2 style="color: black; text-align: center;">
      About Us
    </h2>
    <p style="color: black; text-align: center; font-size: 30px;">
      The Clothes is a new clothing brand originating from Sumedang City.
    </p>

    <p style="color: black; text-align: center; font-size: 30px;">
      Founded in 2020, and continues to grow today.
    </p>
    <p style="color: black; text-align: center; font-size: 30px; margin-bottom: 20px;">
      Carrying a casual and simple theme, which is one of the characteristics.
    </p>
  </section>

  <!-- Products -->
  <section id="products">
    <h2 style="color: black; text-align: center; -webkit-text-stroke-width: 0.5px;
                -webkit-text-stroke-color: white; margin-top:20px;">
      See Our Products Below!
    </h2>
    <div class="container">
      <div class="card-group">
        <div class="card bg-transparent" style="border: 1px solid grey;">
          <img src="assets/img/1-hd.png" class="card-img-top" alt="...">
          <div class="card-body" style="color: white; text-align: center;">
            <h5 class="card-title">Article 01</h5>
            <p class="card-text">Our First Article</p>
          </div>
        </div>
        <div class="card bg-transparent" style="border: 1px solid grey;">
          <img src="assets/img/2-hd.png" class="card-img-top" alt="...">
          <div class="card-body" style="color: white; text-align: center;">
            <h5 class="card-title">Article 03</h5>
            <p class="card-text">Coming Soon</p>
          </div>
        </div>
        <div class="card bg-transparent" style="border: 1px solid grey;">
          <img src="assets/img/3-hd.png" class="card-img-top" alt="...">
          <div class="card-body" style="color: white; text-align: center;">
            <h5 class="card-title">Article 03</h5>
            <p class="card-text">Coming Soon</p>
          </div>
        </div>
      </div>
      <p><a href="php/shop.php" style="color: white; text-decoration: none;" target="blank">See More..</a></p>
    </div>

  </section>

  <!-- contacts -->
  <section id="contacts">
    <div class="container">
      <h2 style="color: black; text-align: center; -webkit-text-stroke-width: 0.5px;
                -webkit-text-stroke-color: white; margin-top:20px; padding-bottom: 5px;">Have a questions?</h2>
      <p style="color: white; font-size: 15px; text-align: center;">
        You can contact us on
      </p>
      <div class="card bg-transparent" style=" color: white; width: 18rem; text-align: center; margin: auto; width: 50%; border: 1px solid grey; padding: 10px;">
        <div class="card-header">
          theclothesc@gmail.com
        </div>
        <ul class="list-group list-group-flush rounded">
          <li class="list-group-item"><a href="https://www.instagram.com/theclothes_co/" style="text-decoration:none; color: black;" target="none;">Instagram</a></li>
          <li class="list-group-item"><a href="https://shopee.co.id/theclothes.co" style="text-decoration:none; color: black;" target="none;">Shopee</a></li>
          <li class="list-group-item"><a href="https://wa.wizard.id/f77d6d" style="text-decoration:none; color: black;" target="none;">Whatsapp</a></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer>
    <section id="footer" style="background-color: white; margin-top: 50px; height: max-content;">
      <div class="container">
        <div class="row" style="text-align:center;">
          <div class="col">
            <h3>Visit Our Store</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6969812228103!2d107.9506169147723!3d-6.806666695080394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDgnMjQuMCJTIDEwN8KwNTcnMTAuMSJF!5e0!3m2!1sid!2sid!4v1621179693545!5m2!1sid!2sid" width="80%" height="80%" style="border:1px solid black; border-radius: 10px; margin-bottom: 20px;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col">
            <img src="assets/img/logo.png" alt="" style="max-height: 75px; margin-top: 30px;">
            <br>
            <br>
            <a href="https://shopee.co.id/theclothes.co" style="text-decoration: none;" target="blank">
              <img src="assets/img/shopee-logo.png" style="max-height: 50px;" alt="">
            </a>
            <a href="https://www.instagram.com/theclothes_co/" style="text-decoration: none;" target="blank">
              <img src="assets/img/logo ig.png" style="max-height: 50px; margin-left: 15px;" alt="">
            </a>
            <a href="https://wa.wizard.id/f77d6d" style="text-decoration: none;" target="blank">
              <img src="assets/img/whatsapp.png" style="max-height: 50px; margin-left: 15px;" alt="">
            </a>

            <div class="mb-3" style="margin-top: 15px; margin-right: 15px;">
              <h4>Give your suggestions or criticisms</h4>
              <label for="exampleFormControlInput1" class="form-label" style="text-align: right;">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3" style="margin-top: 15px; margin-right: 15px;">
              <label for="exampleFormControlTextarea1" class="form-label">Your suggestions or criticisms</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-light btn-outline-dark">Send</button>
          </div>
        </div>
        <div class="container" style="text-align: right;">
          <p><b>Hours</b></p>
          <p>(Mon - Fri) 8:00am - 5:00pm</p>
        </div>
        <p style="font-size: 20px; color: black; text-align:center; margin-top: 20px;">
          Copyright &copy; 2021 - The Clothes.co.
        </p>
      </div>
    </section>
  </footer>
</body>


</html>