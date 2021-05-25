<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <title>Fikri Ridwan Faturohman</title>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Fikri Ridwan Faturohman</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Looking For
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Kuliah</a></li>
              <li><a class="dropdown-item" href="#">Praktikum</a></li>
              <li><a class="dropdown-item" href="#">Tubes</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- profil -->
  <div class="container" style="margin-top: 50px;">
    <div class="card border-light mb-3">
      <img src="tubes/assets/img/profil-1.JPG" class="card-img-top" alt="..." style="border: 0px solid black; border-radius: 360px; max-width: 300px; margin: auto; margin-top:;">
      <figure class="text-center" style="margin-top: 20px;">
        <blockquote class="blockquote">
          <p>Fikri Ridwan Faturohman</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">Someone who tries to do his best</cite>
        </figcaption>
      </figure>
    </div>
  </div>

  <!-- isi -->
  <div class="container">
    <div class="row" style="text-align: center;">
      <div class="col bg-light mb-3" style="border: 0px; border-radius: 50px;">
        <h3>Kuliah</h3>
        <p>
          <button style="background-color: transparent; color: black; border: 2px solid #4CAF50; border-radius:50px;">
            <a href="kuliah" target="none" style="color: green; text-decoration:none;">Click Here</a>
          </button>
        </p>
      </div>
      <div class="col">
        <h3>Praktikum</h3>
        <button style="background-color: transparent; color: black; border: 2px solid #4CAF50; border-radius:50px;">
            <a href="praktikum" target="none" style="color: green; text-decoration:none;">Click Here</a>
          </button>
      </div>
      <div class="col bg-light mb-3" style="border: 0px; border-radius: 50px;">
        <h3>Tubes</h3>
        <button style="background-color: transparent; color: black; border: 2px solid #4CAF50; border-radius:50px;">
            <a href="tubes" target="none" style="color: green; text-decoration:none;">Click Here</a>
          </button>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="bg-light mb-3">
    <div class="container">
      <br>
      <br>
      <p style="font-size: 20px; text-align:center; margin-top: 20px;">Copyright &copy; 2021 - The Clothes.co.</p>
    </div>
  </footer>
</body>

</html>