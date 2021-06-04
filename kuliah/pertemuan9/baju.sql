-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2021 pada 10.21
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baju`
--

CREATE TABLE `baju` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `baju`
--

INSERT INTO `baju` (`id`, `nama`, `bahan`, `harga`, `stok`, `gambar`) VALUES
(1, 'Article 01', 'Combed 30s', 'Rp 75,000', 'Tersedia', '1.png'),
(2, 'Article 02', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '2.png'),
(3, 'Article 03', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '3.png'),
(4, 'Article 04', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '4.png'),
(5, 'Article 05', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '5.png'),
(6, 'Article 06', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '6.png'),
(7, 'Article 07', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '7.png'),
(8, 'Article 08', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '8.png'),
(9, 'Article 09', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '9.png'),
(10, 'Article 10', 'Combed 30s', 'Rp 75,000', 'Coming Soon', '10.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `baju`
--
ALTER TABLE `baju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
