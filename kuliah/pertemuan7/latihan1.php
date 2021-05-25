<?php
/*
Fikri Ridwan Faturohman
203040001
https://github.com/kakafikri/pw2021_203040001
Pertemuan 7 - 21 Maret 2021
Membuat halaman login dan memahami GET & POST
*/
?>

<?php 
// variable scope / lingkup variabel
// $x = 10;

// function tampilX() {
// 	global $x;
// 	echo $x;
// }

// tampilX();

// SUPERGLOBALS
// Variabel global milik php merupakan Array Asscociative
// echo $_SERVER["SERVER_NAME"];

// $_GET
$mahasiswa = [
    [
        "nama" => "Fikri Ridwan Faturohman",
        "nrp" => "203040001",
        "email" => "fikriridwan@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fikri.jpg"
    ],
    [
        "nama" => "Faisal Ibnul Hakim",
        "nrp" => "203040027",
        "email" => "faisal@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "faisal.jpg"
    ],
    [
        "nama" => "Eldi Anugrah Pratama",
        "nrp" => "203040031",
        "email" => "eldi@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "eldi.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ($mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
        <?= $mhs["nrp"]; ?>&email= <?= $mhs["email"]; ?>&jurusan= <?=$mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>











</body>
</html>