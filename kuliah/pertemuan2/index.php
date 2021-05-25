<?php
/*
Fikri Ridwan Faturohman
203040001
https://github.com/kakafikri/pw2021_203040001
Pertemuan 2 - 17 Februari 2021
Mempelajari mengenai sintaks PHP
*/
?>
<?php
// Standar Output
// echo, print
// print_r
// var_dumb

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTMl di dalam PHP

// Variabel dam Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama1 = "Fikri";
// echo "Halo, nama saya $nama";

// Operator
// Aritmatika
// + - * / % (Modulus)
// $x = 10;
// $y = 20;
// echo $x * y;

// penggabung string / concatenation / concat
// . (Operatorya titik)
// $nama_depan = "Fikri"; //tidak boleh memakai spasi, jika ada spasi, gunakan tanda "_" atau underscore
// $nama_belakang = "Ridwan";
// echo $nama_depan ." " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Fikri";
// $nama .= " ";
// $nama .= "Fikri";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, != (biasanya dipakai pada saat penngkondisian)
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, ! (biasanya dipakai pada saat penngkondisian)
// $x = 30;
// var_dump($x < 20 || $x %2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo "Fikri"; ?> </h1>

</body>
</html>
?>