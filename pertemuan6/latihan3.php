<?php
/*
Fikri Ridwan Faturohman
203040001
https://github.com/kakafikri/pw2021_203040001
Pertemuan 6 - 8 Maret 2021
Mencoba tugas pada pertemuan 6, kasus mandiri
*/
?>

<?php
// latihan membuat kasus sendiri
$mobil = [
    [
        "merk" => "Toyota",
        "jenis" => "Supra",
        "cc" => "2998 cc",
        "tempat duduk" => "2 kursi",
        "gambar" => "mobil1.png"
    ],
    [
        "merk" => "Toyota",
        "jenis" => "Avanza",
        "cc" => "1496 cc",
        "tempat duduk" => "7 kursi",
        "gambar" => "mobil2.jpg"
    ],
    [
        "merk" => "Honda",
        "jenis" => "Civic",
        "cc" => "1498 cc",
        "tempat duduk" => "5 kursi",
        "gambar" => "mobil3.jpg"
    ],
    [
        "merk" => "Honda",
        "jenis" => "Brio",
        "cc" => "1199 cc",
        "tempat duduk" => "5 kursi",
        "gambar" => "mobil4.jpg"
    ],
    [
        "merk" => "Daihatsu",
        "jenis" => "Xenia",
        "cc" => "1496 cc",
        "tempat duduk" => "7 kursi",
        "gambar" => "mobil5.jpg"
    ],
    [
        "merk" => "Toyota",
        "jenis" => "Alphard",
        "cc" => "2500 cc",
        "tempat duduk" => "7 kursi",
        "gambar" => "mobil6.jpg"
    ],
    [
        "merk" => "Toyota",
        "jenis" => "Kijang Innova",
        "cc" => "1998 cc",
        "tempat duduk" => "7 kursi",
        "gambar" => "mobil7.jpg"
    ],
    [
        "merk" => "Honda",
        "jenis" => "Jazz",
        "cc" => "1497 cc",
        "tempat duduk" => "5 kursi",
        "gambar" => "mobil8.jpg"
    ],
    [
        "merk" => "Honda",
        "jenis" => "HRV",
        "cc" => "1497 cc",
        "tempat duduk" => "5 kursi",
        "gambar" => "mobil9.jpg"
    ],
    [
        "merk" => "Honda",
        "jenis" => "Mobilio",
        "cc" => "1496 cc",
        "tempat duduk" => "7 kursi",
        "gambar" => "mobil10.jpg"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Nama Mobil</title>
</head>
<body>

<h1>Daftar Nama Mobil</h1>
    
    <?php foreach( $mobil as $mbl ) : ?>   
    <ul>
        <li>
            <img src="img/<?= $mbl ["gambar"]; ?>" alt="">
        </li>
        <li>Merk : <?= $mbl["merk"]; ?></li>
        <li>Jenis : <?= $mbl["jenis"]; ?></li>
        <li>CC : <?= $mbl["cc"]; ?></li>
        <li>Tempat Duduk : <?= $mbl["tempat duduk"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>