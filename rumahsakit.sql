-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Nov 2024 pada 02.04
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbantrian`
--

CREATE TABLE `tbantrian` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `nomor_antrian` int(11) NOT NULL,
  `waktu_kedatangan` datetime NOT NULL,
  `status` enum('(''Belum Dilayani'', ''Selesai'')','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbantrian`
--

INSERT INTO `tbantrian` (`id`, `nama_pasien`, `nomor_antrian`, `waktu_kedatangan`, `status`) VALUES
(6, 'salsa', 1, '2024-11-19 10:16:00', '(\'Belum Dilayani\', \'Selesai\')'),
(7, 'kia', 2, '2024-11-19 10:17:00', '(\'Belum Dilayani\', \'Selesai\')'),
(8, 'nursyakia', 4, '2024-11-19 15:57:00', '(\'Belum Dilayani\', \'Selesai\')'),
(9, 'citra', 7, '2024-11-19 16:50:00', '(\'Belum Dilayani\', \'Selesai\')'),
(10, 'alfatih', 9, '2024-11-19 16:51:00', '(\'Belum Dilayani\', \'Selesai\')'),
(11, 'imah', 5, '2024-11-19 16:51:00', '(\'Belum Dilayani\', \'Selesai\')'),
(12, 'maulida', 25, '2024-11-19 16:52:00', '(\'Belum Dilayani\', \'Selesai\')'),
(13, 'lida', 29, '2024-11-19 16:52:00', '(\'Belum Dilayani\', \'Selesai\')');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id`, `username`, `email`) VALUES
(1, 'syakia', 'nursyakia@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbantrian`
--
ALTER TABLE `tbantrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbantrian`
--
ALTER TABLE `tbantrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
