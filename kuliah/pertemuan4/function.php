<?php
/*
Fikri Ridwan Faturohman
203040001
https://github.com/kakafikri/pw2021_203040001
Pertemuan 4 - 26 Februari 2021
Belajar Function
*/
?>

<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Fikri"); ?></h1>
</body>
</html>