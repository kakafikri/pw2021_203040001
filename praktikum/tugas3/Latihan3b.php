<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php
    $pemain = [
        "Mohammad Salah",
        "Cristiano Ronaldo",
        "Lionel Messi",
        "Zlatan Ibrahimovic",
        "Neymar Jr"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
    <style>
    .border {
        border: 1px solid black;
        font-family: arial;
        width: 50%;
        margin: auto;
        padding-left: 10px;
        line-height: 25px;
        padding-bottom: 30px;
    }
    .menjorok {
        padding-left: 3em;
    }
    </style>
</head>
<body>

<div class="border">
<h2>Daftar pemain bola terkenal</h2>
    <div class="menjorok">
        <ol>
            <?php foreach($pemain as $pmn) : ?>
                <li><?= $pmn?></li>
            <?php endforeach; ?>
        </ol>
    </div>

<?php 
    array_push($pemain, "Luca Modric", "Sadio Mane");
    sort($pemain);
?>

<h2>Daftar pemain bola terkenal baru</h2>
    <div class="menjorok">
        <ol>
            <?php foreach($pemain as $pmn) : ?>
                <li><?= $pmn?></li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>

</body>
</html>