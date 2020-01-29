-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2020 pada 03.13
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--
CREATE DATABASE IF NOT EXISTS `rumah_sakit` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rumah_sakit`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpasien`
--

CREATE TABLE `tblpasien` (
  `no_pasien` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` int(2) NOT NULL,
  `keluhan` varchar(15) NOT NULL,
  `No Hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblpasien`
--

INSERT INTO `tblpasien` (`no_pasien`, `nama`, `alamat`, `jenis_kelamin`, `umur`, `keluhan`, `No Hp`) VALUES
(12, 'Diah Sulistiani', 'kalisari', 'perempuan', 17, 'sariawan', 0),
(14, 'wisnu kusuma wardani', 'wringinjajar', 'laki laki', 37, 'sariawan', 0),
(15, 'komsatun', 'wringinjajar', 'perempuan', 29, 'sehat', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpasien`
--
ALTER TABLE `tblpasien`
  ADD PRIMARY KEY (`no_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpasien`
--
ALTER TABLE `tblpasien`
  MODIFY `no_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
