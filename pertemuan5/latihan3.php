<?php
/*
Fikri Ridwan Faturohman
203040001
https://github.com/kakafikri/pw2021_203040001
Pertemuan 5 - 4 Maret 2021
Melakukan pengulangan pada array
*/
?>

<?php
$mahasiswa = [
    ["Fikri Ridwan Faturohman", "203040001", "Teknik Informatika", "fikriridwan@unpas.ac.id"], 
    ["Fikri", "203040002", "Teknik Informatika", "fikri@unpas.ac.id"],
    ["Ridwan Faturohman", "203040003", "Teknik Informatika", "ridwanfaturohman@unpas.ac.id"]
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
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html> 