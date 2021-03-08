<?php
/*
Fikri Ridwan Faturohman
203040001
https://github.com/kakafikri/pw2021_203040001
Pertemuan 6 - 8 Maret 2021
Associative Array
*/
?>

<?php
// $mahasiswa = [
//     ["Fikri Ridwan Faturohman", "203040001", "fikriridwan@unpas.ac.id", "Teknik Informatika"],
//     ["Fikri", "203040002", "fikri@unpas.ac.id", "Teknik Informatika"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
    
    <?php foreach( $mahasiswa as $mhs ) : ?>   
    <ul>
        <li>
            <img src="img/<?= $mhs ["gambar"]; ?>" alt="">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>