<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php 
    $pemain = [
        "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "barcelona",
        "Luca Modric" => "Real Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "Ac Milan"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
    .border{
        border: 2px solid black;
        width:500px;
        font-size: 15px;
        font-family: arial;
        padding-left: 10px;
        padding-bottom: 15px;
    }
    </style>
</head>
<body>
    <div class="border">
        <h3>Daftar pemain bola terkenal dan clubnya</h3>
            <table width="350px">
                <?php foreach($pemain as $pmn => $club) : ?>
                    <td><b><?= $pmn ?></b></td>
                    <td>:</td>
                    <td><?= $club ?></td>
                    <tr></tr>
                <?php endforeach;?>
            </table>
    </div>
</body>
</html>