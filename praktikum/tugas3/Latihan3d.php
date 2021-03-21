<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php 
$pemain = [
	[
	    "nama" => "Cristiano Ronaldo",
	    "club" => "Juventus",
	    "jumlah main" => 100,
	    "jumlah gol" => 76,
	    "jumlah assist" => 30
	],
	[
	    "nama" => "Lionel Messi",
	    "club" => "Barcelona",
	    "jumlah main" => 120,
	    "jumlah gol" => 80,
	    "jumlah assist" => 12
	],
	[
	    "nama" => "Luca Modric",
	    "club" => "Real Madrid",
	    "jumlah main" => 87,
	    "jumlah gol" => 12,
	    "jumlah assist" => 48
	],
	[
	    "nama" => "Mohammad Salah",
	    "club" => "Liverpool",
	    "jumlah main" => 90,
	    "jumlah gol" => 103,
	    "jumlah assist" => 8
	],
	[
	    "nama" => "Neymar Jr",
	    "club" => "Paris Saint Germain",
	    "jumlah main" => 109,
	    "jumlah gol" => 56,
	    "jumlah assist" => 15
	],
	[
	    "nama" => "Sadio Mane",
	    "club" => "Liverpool",
	    "jumlah main" => 63,
	    "jumlah gol" => 30,
	    "jumlah assist" => 70
	],
	[
	    "nama" => "Zlatan Ibrahimovic",
	    "club" => "Ac Milan",
	    "jumlah main" => 100,
	    "jumlah gol" => 10,
	    "jumlah assist" =>12
	]
];

$totalMain    = 0;
$totalGol     = 0;
$totalAssist  = 0;
for($i=0; $i<count($pemain); $i++){
    $totalMain += $pemain[$i]["jumlah main"];
    $totalGol += $pemain[$i]["jumlah gol"];
    $totalAssist += $pemain[$i]["jumlah assist"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d</title>
    <style>
        table, th, td {
            font-family: arial;
            border: 2px solid black;
            border-collapse: collapse;
            text-align: left;
            padding: 5px;
        }
        
    </style>
</head>
<body>
    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>

        <?php foreach ($pemain as $sort => $pmn) : ?>
        <tr>
            <td><?= $sort+1; ?></td>
            <td><?= $pmn ["nama"]; ?></td>
            <td><?= $pmn ["club"]; ?></td>
            <td><?= $pmn ["jumlah main"]; ?></td>
            <td><?= $pmn ["jumlah gol"]; ?></td>
            <td><?= $pmn ["jumlah assist"]; ?></td>
        </tr>
        <?php endforeach;?>

        <tr>
            <td>#</td>
            <td colspan="2" style=text-align:center><b>Jumlah</b></td>
            <td><?= $totalMain ?></td>
            <td><?= $totalGol ?></td>
            <td><?= $totalAssist ?></td>
        </tr>
    </table>
</body>
</html>