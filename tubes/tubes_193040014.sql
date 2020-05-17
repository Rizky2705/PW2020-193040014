-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 04.05
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040014`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tubes_193040014`
--

CREATE TABLE `tubes_193040014` (
  `Nomor` int(11) NOT NULL,
  `Gambar` varchar(100) DEFAULT NULL,
  `Nama_alat_musik` varchar(100) DEFAULT NULL,
  `Asal_daerah` varchar(100) DEFAULT NULL,
  `Cara_main` varchar(100) DEFAULT NULL,
  `bahan_pembuatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Kesalahan membaca data untuk tabel pw_193040014.tubes_193040014: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `pw_193040014`.`tubes_193040014`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tubes_193040014`
--
ALTER TABLE `tubes_193040014`
  ADD PRIMARY KEY (`Nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tubes_193040014`
--
ALTER TABLE `tubes_193040014`
  MODIFY `Nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
