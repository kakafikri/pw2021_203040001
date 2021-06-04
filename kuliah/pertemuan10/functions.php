<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_203040001');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows =  [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $bahan = htmlspecialchars($data['bahan']);
  $harga = htmlspecialchars($data['harga']);
  $stok = htmlspecialchars($data['stok']);
  $gambar = htmlspecialchars($data['gambar']);


  $query = "INSERT INTO baju VALUES
            (null, '$nama',  '$bahan', '$harga', '$stok', '$gambar');";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
