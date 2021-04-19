<!-- 
Nama : Fikri Ridwan Faturohman
NRP : 203040001
Praktikum : Rabu pukul 09:00 - 10:00 WIB
-->

<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040001");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $bahan = htmlspecialchars($data['bahan']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO baju
                    VALUES
                    ('', '$img', '$nama', '$bahan', '$harga', '$stok')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM baju WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $bahan = htmlspecialchars($data['bahan']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    $query = "UPDATE baju2
            SET
            img = '$img',
            nama = '$nama',
            bahan = '$bahan',
            harga = '$harga',
            stok = '$stok',
            WHERE id = '$id'
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>