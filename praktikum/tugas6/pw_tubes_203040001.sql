-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2021 pada 03.07
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
-- Database: `pw_tubes_203040001`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baju`
--

CREATE TABLE `baju` (
  `id` int(11) NOT NULL,
  `img` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `stok` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `baju`
--

INSERT INTO `baju` (`id`, `img`, `nama`, `bahan`, `harga`, `stok`) VALUES
(1, '1.png', 'Article 01', 'Combed 30s', 'Rp 85,000', 'Tersedia'),
(2, '2.png', 'Article 02', 'Combed 30s', 'Rp 85,000', 'Coming soon'),
(3, '3.png', 'Article 03', 'Combed 30s', 'Rp 85,000', 'Coming soon'),
(4, '4.png', 'Article 04', 'Combed 30s', 'Rp 85,000', 'Coming soon'),
(5, '5.png', 'Article 05', 'combed 30s', 'Rp 85,000', 'Coming soon'),
(6, '6.png', 'Article 06', 'Combed 30s', 'Rp 85,000', 'Coming soon'),
(7, '7.png', 'Article 07', 'Combed 30s', 'Rp 85,000', 'Coming sonn'),
(8, '8.png', 'Article 08', 'Combed 30s', 'Rp 85,000', 'Coming soon'),
(9, '9.png', 'Article 09', 'Combed 30s', 'Rp 85,000', 'Coming sonn'),
(10, '10.png', 'Article 10', 'Combed 30s', 'Rp 85,000', 'Coming soon');

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
