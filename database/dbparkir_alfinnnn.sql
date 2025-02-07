-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2025 at 02:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbparkir_alfinnnn`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `Plat_no` varchar(30) NOT NULL,
  `id_tempat` int DEFAULT NULL,
  `waktu_masuk` time DEFAULT NULL,
  `type_kendaraan` varchar(30) DEFAULT NULL,
  `nama_pemilik` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`Plat_no`, `id_tempat`, `waktu_masuk`, `type_kendaraan`, `nama_pemilik`) VALUES
('D 1001 WOW', 2114, '00:00:15', 'mio kuning', 'jaki'),
('D 1387 ABC', 2112, '00:00:13', 'aerok', 'ata'),
('D 1996 ZZZ', 2115, '00:00:20', 'nmax', 'peri'),
('D 7997 AHH', 2116, '00:00:20', 'beat', 'alfin'),
('D 8701 CCK', 2113, '00:00:13', 'xride', 'hapip');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_parkir`
--

CREATE TABLE `tempat_parkir` (
  `id_tempat` int NOT NULL,
  `nama_tempat` varchar(30) DEFAULT NULL,
  `harga` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tempat_parkir`
--

INSERT INTO `tempat_parkir` (`id_tempat`, `nama_tempat`, `harga`) VALUES
(2112, 'citylink', 10),
(2113, 'mikomall', 5),
(2114, 'paris van java', 9),
(2115, 'ciwalk', 8),
(2116, 'mcd', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`Plat_no`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indexes for table `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD PRIMARY KEY (`id_tempat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
