-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 09.04
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
(31, '1-hd.jpg', 'Article 01', 'Combed 30s', 'Rp 85,000', 'Ready'),
(32, '2-hd.jpg', 'Article 02', 'Combed 30s', 'Rp 85,000', 'Coming Soon'),
(33, '3-hd.jpg', 'Article 03', 'Combed 30s', 'Rp 85,000', 'Coming Soon'),
(34, '4-hd.jpg', 'Article 04', 'Combed 30s', 'Rp 85,000', 'Coming Soon'),
(35, '5-hd.jpg', 'Article 05', 'Combed 30s', 'Rp 85,000', 'Coming Soon'),
(36, '6-hd.jpg', 'Article 06', 'Combed 30s', 'Rp 85,000', 'Coming Soon'),
(37, '7-hd.jpg', 'Article 07', 'Combed 30s', 'Rp 85,000', 'Coming Soon'),
(38, '8-hd.jpg', 'Article 08', 'Combed 30s', 'Rp 85,000', 'Coming Soon'),
(39, '9-hd.jpg', 'Article 09', 'Combed 30s', 'Rp 85,000', 'Coming Soon'),
(40, '10-hd.jpg', 'Article 10', 'Combed 30s', 'Rp 85,000', 'Coming Soon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(11, 'fikri', '$2y$10$pb8lNqNfYR9w8rXpJer7nuWHmC54ItNaPOujqyHaCbh/Ui3QXDBny'),
(12, 'kaka', '$2y$10$caIgNPnaagypYybzcaUSgu0KLaZdUP8RLj402FsmJE3spPM1azm/a'),
(15, 'theclothes', '$2y$10$SC6N3TSw./Yw/awk379chuxClQv.C4ghykFW48fFj2nGiY41CFr16'),
(16, 'admin', '$2y$10$30Fyuq3uw/42bM9tI1z5k.C2hKPCJrwUGNffc2koKVf6wJ9kakp82');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `baju`
--
ALTER TABLE `baju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
