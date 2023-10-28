-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 04.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab`
--

CREATE TABLE `lab` (
  `ID` int(11) NOT NULL,
  `PEMESAN` varchar(50) NOT NULL,
  `PRODI` varchar(50) NOT NULL,
  `RUANG LAB` varchar(50) NOT NULL,
  `HARI` varchar(10) NOT NULL,
  `TANGGAL PINJAM` date NOT NULL,
  `JAM MULAI` time(6) NOT NULL,
  `JAM SELESAI` time(6) NOT NULL,
  `KETERANGAN` varchar(225) NOT NULL,
  `PENANGGUNG JAWAB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lab`
--

INSERT INTO `lab` (`ID`, `PEMESAN`, `PRODI`, `RUANG LAB`, `HARI`, `TANGGAL PINJAM`, `JAM MULAI`, `JAM SELESAI`, `KETERANGAN`, `PENANGGUNG JAWAB`) VALUES
(35, 'yovita', '-pilih prodi-', 'Lab Komputer 2', '', '2023-10-24', '13:17:00.000000', '00:00:00.000000', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lab`
--
ALTER TABLE `lab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
