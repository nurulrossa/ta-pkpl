-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 05:44 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulanansantri`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(5) NOT NULL,
  `jenjangsekolah` varchar(5) DEFAULT NULL,
  `nama_kls` varchar(10) DEFAULT NULL,
  `kapasitas` int(2) DEFAULT NULL,
  `jenis_kelas` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `jenjangsekolah`, `nama_kls`, `kapasitas`, `jenis_kelas`) VALUES
(1, 'MA', 'VII-B', 21, 'PUTRI');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idspp` int(10) NOT NULL,
  `idsantri` int(10) NOT NULL,
  `jatuhtempo` date DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `nobayar` varchar(10) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `jumlah_bayar` int(20) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `idpetugas` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idspp`, `idsantri`, `jatuhtempo`, `bulan`, `nobayar`, `tgl_bayar`, `jumlah_bayar`, `keterangan`, `idpetugas`) VALUES
(37, 10, '2020-07-10', 'Juli 2020', '2004080001', '2020-04-08', 500000, 'LUNAS', 1),
(38, 10, '2020-08-10', 'Agustus 2020', '2004150001', '2020-04-15', 500000, 'LUNAS', 1),
(39, 10, '2020-09-10', 'September 2020', '2004150002', '2020-04-15', 500000, 'LUNAS', 1),
(40, 10, '2020-10-10', 'Oktober 2020', '2004150003', '2020-04-15', 500000, 'LUNAS', 1),
(41, 10, '2020-11-10', 'November 2020', '2004150004', '2020-04-15', 500000, 'LUNAS', 1),
(42, 10, '2020-12-10', 'Desember 2020', '2005280001', '2020-05-28', 500000, 'LUNAS', 1),
(43, 10, '2021-01-10', 'Januari 2021', NULL, NULL, 500000, NULL, NULL),
(44, 10, '2021-02-10', 'Februari 2021', NULL, NULL, 500000, NULL, NULL),
(45, 10, '2021-03-10', 'Maret 2021', NULL, NULL, 500000, NULL, NULL),
(46, 10, '2021-04-10', 'April 2021', NULL, NULL, 500000, NULL, NULL),
(47, 10, '2021-05-10', 'Mei 2021', NULL, NULL, 500000, NULL, NULL),
(48, 10, '2021-06-10', 'Juni 2021', NULL, NULL, 500000, NULL, NULL),
(49, 11, '2020-07-10', 'Juli 2020', '2004080002', '2020-04-08', 500000, 'LUNAS', 1),
(50, 11, '2020-08-10', 'Agustus 2020', '2005210001', '2020-05-21', 500000, 'LUNAS', 1),
(51, 11, '2020-09-10', 'September 2020', '2005210002', '2020-05-21', 500000, 'LUNAS', 1),
(52, 11, '2020-10-10', 'Oktober 2020', '2005210003', '2020-05-21', 500000, 'LUNAS', 1),
(53, 11, '2020-11-10', 'November 2020', NULL, NULL, 500000, NULL, NULL),
(54, 11, '2020-12-10', 'Desember 2020', NULL, NULL, 500000, NULL, NULL),
(55, 11, '2021-01-10', 'Januari 2021', NULL, NULL, 500000, NULL, NULL),
(56, 11, '2021-02-10', 'Februari 2021', NULL, NULL, 500000, NULL, NULL),
(57, 11, '2021-03-10', 'Maret 2021', NULL, NULL, 500000, NULL, NULL),
(58, 11, '2021-04-10', 'April 2021', NULL, NULL, 500000, NULL, NULL),
(59, 11, '2021-05-10', 'Mei 2021', NULL, NULL, 500000, NULL, NULL),
(60, 11, '2021-06-10', 'Juni 2021', NULL, NULL, 500000, NULL, NULL),
(73, 13, '2020-07-10', 'Juli 2020', NULL, NULL, 500000, NULL, NULL),
(74, 13, '2020-08-10', 'Agustus 2020', NULL, NULL, 500000, NULL, NULL),
(75, 13, '2020-09-10', 'September 2020', NULL, NULL, 500000, NULL, NULL),
(76, 13, '2020-10-10', 'Oktober 2020', NULL, NULL, 500000, NULL, NULL),
(77, 13, '2020-11-10', 'November 2020', NULL, NULL, 500000, NULL, NULL),
(78, 13, '2020-12-10', 'Desember 2020', NULL, NULL, 500000, NULL, NULL),
(79, 13, '2021-01-10', 'Januari 2021', NULL, NULL, 500000, NULL, NULL),
(80, 13, '2021-02-10', 'Februari 2021', NULL, NULL, 500000, NULL, NULL),
(81, 13, '2021-03-10', 'Maret 2021', NULL, NULL, 500000, NULL, NULL),
(82, 13, '2021-04-10', 'April 2021', NULL, NULL, 500000, NULL, NULL),
(83, 13, '2021-05-10', 'Mei 2021', NULL, NULL, 500000, NULL, NULL),
(84, 13, '2021-06-10', 'Juni 2021', NULL, NULL, 500000, NULL, NULL),
(85, 14, '2020-07-10', 'Juli 2020', NULL, NULL, 500000, NULL, NULL),
(86, 14, '2020-08-10', 'Agustus 2020', NULL, NULL, 500000, NULL, NULL),
(87, 14, '2020-09-10', 'September 2020', NULL, NULL, 500000, NULL, NULL),
(88, 14, '2020-10-10', 'Oktober 2020', NULL, NULL, 500000, NULL, NULL),
(89, 14, '2020-11-10', 'November 2020', NULL, NULL, 500000, NULL, NULL),
(90, 14, '2020-12-10', 'Desember 2020', NULL, NULL, 500000, NULL, NULL),
(91, 14, '2021-01-10', 'Januari 2021', NULL, NULL, 500000, NULL, NULL),
(92, 14, '2021-02-10', 'Februari 2021', NULL, NULL, 500000, NULL, NULL),
(93, 14, '2021-03-10', 'Maret 2021', NULL, NULL, 500000, NULL, NULL),
(94, 14, '2021-04-10', 'April 2021', NULL, NULL, 500000, NULL, NULL),
(95, 14, '2021-05-10', 'Mei 2021', NULL, NULL, 500000, NULL, NULL),
(96, 14, '2021-06-10', 'Juni 2021', NULL, NULL, 500000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idpetugas` int(10) NOT NULL,
  `NIP` varchar(10) DEFAULT NULL,
  `nama_ptgs` varchar(40) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `NIP`, `nama_ptgs`, `username`, `password`, `status`) VALUES
(1, 'P00001', 'Rossaaaa', 'nurulrossa', '12345', 'Admin'),
(3, 'P0003', 'syafira jafar', 'syafira', '12354', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `idsantri` int(10) NOT NULL,
  `NIS` varchar(10) DEFAULT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `jenis_santri` varchar(5) DEFAULT NULL,
  `tahunajaran` varchar(10) DEFAULT NULL,
  `biaya` int(20) DEFAULT NULL,
  `kd_kelas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`idsantri`, `NIS`, `Nama`, `jenis_santri`, `tahunajaran`, `biaya`, `kd_kelas`) VALUES
(10, 'S02', 'Haikal', 'PUTRA', '2020/2021', 500000, 1),
(11, '19000110', 'Muhammad Fikram', 'PUTRA', '2020/2021', 500000, 1),
(13, 'S032', 'Iraaaaa', 'PUTRA', '2020/2021', 500000, 1),
(14, 'S021', 'zulvikramoh', 'PUTRA', '2020/2021', 500000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idspp`),
  ADD KEY `fk_petugas` (`idpetugas`),
  ADD KEY `idsantri` (`idsantri`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`idsantri`),
  ADD KEY `fk_santri` (`kd_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idspp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idpetugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `idsantri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_petugas` FOREIGN KEY (`idpetugas`) REFERENCES `petugas` (`idpetugas`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`idsantri`) REFERENCES `santri` (`idsantri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `fk_santri` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
