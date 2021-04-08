-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 01:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbspp_ibad`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(10) NOT NULL,
  `nmsis` varchar(30) DEFAULT NULL,
  `nhnajar` varchar(4) DEFAULT NULL,
  `jurusan` varchar(3) DEFAULT NULL,
  `jksis` varchar(6) DEFAULT NULL,
  `wali` varchar(30) DEFAULT NULL,
  `tlpwl` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nmsis`, `nhnajar`, `jurusan`, `jksis`, `wali`, `tlpwl`, `created_at`, `updated_at`) VALUES
('181910200', 'Ahmad Dzaky', '2020', 'RPL', 'Pria', 'Umairah', '085773560604', '2020-12-23 12:22:10', '2020-12-22 21:19:50'),
('181910245', 'Gari Baldhi', '2020', 'TKJ', 'Pria', 'Suherman', '08574590903', '2020-12-23 12:22:10', '2020-12-22 21:17:32'),
('181910250', 'Mohammad Iksan Sabila', '2021', 'TKJ', 'Pria', 'Ujang Susanto', '889883973767', '2020-12-23 12:22:10', '2020-12-22 21:16:49'),
('181910288', 'Muhammad Nassal', '2020', 'MM', 'Pria', 'Ahmad', '08958898763', '2020-12-23 12:22:10', '2020-12-22 21:16:02'),
('181910300', 'Muamar Sahruj', '2020', 'RPL', 'Pria', 'Udin', '0218893991', '2020-12-23 12:22:10', '2020-12-22 21:15:14'),
('181910308', 'Muhammad Ibad', '2020', 'RPL', 'Pria', 'Meldian', '085773590904', '2020-12-23 03:18:02', '0000-00-00 00:00:00'),
('181910310', 'Umar Saputra', '2020', 'RPL', 'Pria', 'Andrianoto', '085765904321', '2020-12-23 12:22:10', '2020-12-22 21:18:09'),
('181910321', 'Murtia Aira Zahra', '2020', 'TKJ', 'Wanita', 'Januar Sahrir', '08763590887', '2020-12-23 12:22:10', '2020-12-22 21:22:16'),
('181910325', 'Aldila Mutiara Saskia', '2020', 'MM', 'Wanita', 'Nasrudin', '085735902788', '2020-12-23 12:22:10', '2020-12-22 21:21:00'),
('181910350', 'Ahmad Davi', '2020', 'MM', 'Pria', 'Kustriyanto', '0218898321', '2020-12-23 12:22:10', '2020-12-22 21:19:09'),
('181910380', 'Trisaputra', '2021', 'MM', 'Pria', 'Andra', '082188387920', '2020-12-23 12:22:10', '2020-12-22 21:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `noid` varchar(10) NOT NULL,
  `tglkwi` date DEFAULT NULL,
  `jml_bulan` int(11) DEFAULT NULL,
  `jml_rupiah` int(11) DEFAULT NULL,
  `nis` varchar(10) NOT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`noid`, `tglkwi`, `jml_bulan`, `jml_rupiah`, `nis`, `keterangan`, `created_at`, `updated_at`) VALUES
('1', '2020-12-01', 1, 400, '181910308', 'Pembayaran awal bulan desember', '2020-12-23 12:24:39', '2020-12-23 05:24:39'),
('3', '2021-01-06', 1, 400, '181910308', 'Januari 2021', '2020-12-22 21:32:58', '2020-12-22 21:32:58'),
('4', '2020-12-25', 2, 800, '181910300', 'November Desember', '2020-12-22 21:33:56', '2020-12-22 21:33:56'),
('5', '2020-12-15', 1, 400, '181910350', 'Pembayaran Bulan Desember', '2020-12-22 21:34:36', '2020-12-22 21:34:36'),
('6', '2020-12-28', 2, 800, '181910321', 'November Desember', '2020-12-22 21:35:22', '2020-12-22 21:35:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`noid`),
  ADD KEY `nis` (`nis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
