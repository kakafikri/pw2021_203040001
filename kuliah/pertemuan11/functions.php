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

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM baju WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $bahan = htmlspecialchars($data['bahan']);
  $harga = htmlspecialchars($data['harga']);
  $stok = htmlspecialchars($data['stok']);
  $gambar = htmlspecialchars($data['gambar']);


  $query = "UPDATE baju SET
            nama = '$nama',
            bahan = '$bahan',
            harga = '$harga',
            stok = '$stok',
            gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM baju
            WHERE
            nama LIKE '%$keyword%' OR 
            bahan LIKE '%$keyword%'
            ";

  $result = mysqli_query($conn, $query);

  $rows =  [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
