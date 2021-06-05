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

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //       alert('pilih gambar terlebih dahulu');
    //      </script>";
    return 'default.png';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
          alert('yang anada pilih bukan gambar');
         </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
          alert('yang anda pilih bukan gambar');
         </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5Mb == 5,000,000 byte
  if ($ukuran_file > 5000000) {
    echo "<script>
          alert('ukuran tertalu besar!');
         </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $bahan = htmlspecialchars($data['bahan']);
  $harga = htmlspecialchars($data['harga']);
  $stok = htmlspecialchars($data['stok']);
  // $gambar = htmlspecialchars($data['gambar']);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO baju VALUES
            (null, '$nama',  '$bahan', '$harga', '$stok', '$gambar');";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  // menghapus gambar di folder img
  $bj = query("SELECT * FROM baju WHERE id = $id");
  if ($bj['gambar'] != 'default.png') {
    unlink('img/'. $bj['gambar']);
  }

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
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'default.png') {
    $gambar = $gambar_lama;
  }

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

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu uname
  if ($user = query("SELECT * FROM user WHERE username = '$username' ")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}


function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username atau password kosong
  if (empty($username) || empty($password2) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!);
            document.location.href = 'registrasi.php'
          </script>";
    return  false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username' ")) {
    echo "<script>
            alert('username sudah terdaftar!);
            document.location.href = 'registrasi.php'
          </script>";
    return  false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!);
            document.location.href = 'registrasi.php'
          </script>";
    return  false;
  }

  // jika password kurang dari 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert(password terlalu pendek!);
            document.location.href = 'registrasi.php'
          </script>";
    return  false;
  }

  // jika uname & pass sudah sesuai
  // enkripsi
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke table user
  $query = "INSERT INTO user
                VALUES
            (null, '$username', '$password_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
