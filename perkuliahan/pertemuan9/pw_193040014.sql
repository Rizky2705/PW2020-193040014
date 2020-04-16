-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 04.24
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
-- Struktur dari tabel `pw_193040014`
--

CREATE TABLE `pw_193040014` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pw_193040014`
--

INSERT INTO `pw_193040014` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Muhamad Rizky Fauzan', '193040014', '193040014.muhammad@mail.unpas.ac.id', 'Teknik Informatika', 'rizky.jpg'),
(2, 'Agung Gumelar', '193040008', '193040008.agung@unpas.mail.ac.id', 'Teknik Informatika', 'agung.jpeg'),
(3, 'Daffa', '193040036', '193040036.daffa@unpas.mail.ac.id', 'Teknik Informatika', 'daffa.jpg'),
(4, 'Yusril Ismail Azi', '193040024', '193040024.yusril@unpas.mail.ac.id', 'Teknik Informatika', 'azi.jpg'),
(5, 'Alwi Ramadhan', '193040029', '193040029.alwi@unpas.mail.ac.id', 'Teknik Informatika', 'alwi.jpeg'),
(6, 'Aji Fattah', '193040012', '193040012.aji@unpas.mail.ac.id', 'Teknik Informatika', 'aji.jpg'),
(7, 'Zahra Dwi Ameilia', '193040027', '193040027.zahra@unpas.mail.ac.id', 'Teknik Informatika', 'zahra.jpg'),
(8, 'Taufik Hidayat', '193040019', '193040019.taufik@unpas.mailac.id', 'Teknik Informatika', 'taufik.png'),
(9, 'Mohamad Rizki Ramdani', '193040016', '193040016.mohamad@unpas.mail.ac.id', 'Teknik Informatika', 'rizki.png'),
(10, 'Ilham Akmal Rafi ', '193040038', '193040038.ilham@unpas.mail.ac.id', 'Teknik Informatika', 'ilham.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pw_193040014`
--
ALTER TABLE `pw_193040014`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pw_193040014`
--
ALTER TABLE `pw_193040014`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
