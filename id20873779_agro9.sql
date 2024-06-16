-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2023 at 05:13 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20873779_agro9`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuaca`
--

CREATE TABLE `cuaca` (
  `Kode` int(11) NOT NULL,
  `Bulan` varchar(250) DEFAULT NULL,
  `Tahun` varchar(4) DEFAULT NULL,
  `Temperatur_Minimal` decimal(10,2) DEFAULT NULL,
  `Temperatur_Maximal` decimal(10,2) DEFAULT NULL,
  `Curah_Hujan` decimal(10,2) DEFAULT NULL,
  `Lama_Sinar_Matahari` decimal(10,2) DEFAULT NULL,
  `Musim` varchar(255) NOT NULL,
  `Tanaman` varchar(255) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuaca`
--

INSERT INTO `cuaca` (`Kode`, `Bulan`, `Tahun`, `Temperatur_Minimal`, `Temperatur_Maximal`, `Curah_Hujan`, `Lama_Sinar_Matahari`, `Musim`, `Tanaman`, `Foto`, `Keterangan`) VALUES
(1, 'Januari', '2022', 20.00, 30.00, 30.00, 40.00, 'Hujan', 'Tomat', 'img/tanaman_tomat.png', 'Tanaman tomat tumbuh baik pada cuaca yang hangat hingga panas, dengan suhu sekitar 20-30°C. Musim semi dan musim panas adalah waktu yang cocok untuk menanam tomat.'),
(2, 'Februari', '2022', 20.00, 30.00, 30.00, 40.00, 'Hujan', 'Tomat', 'img/tanaman_tomat.png', 'Tanaman tomat tumbuh baik pada cuaca yang hangat hingga panas, dengan suhu sekitar 20-30°C. Musim semi dan musim panas adalah waktu yang cocok untuk menanam tomat.'),
(3, 'Maret', '2022', 20.00, 30.00, 30.00, 40.00, 'Hujan', 'Tomat', 'img/tanaman_tomat.png', 'Tanaman tomat tumbuh baik pada cuaca yang hangat hingga panas, dengan suhu sekitar 20-30°C. Musim semi dan musim panas adalah waktu yang cocok untuk menanam tomat.'),
(4, 'April', '2022', 20.00, 30.00, 10.00, 50.00, 'Kemarau', 'Jagung', 'img/tanaman_jagung.png', 'Jagung membutuhkan cuaca yang hangat, dengan suhu sekitar 20-30°C. Musim panas adalah waktu yang cocok untuk menanam jagung.'),
(5, 'Mei', '2022', 20.00, 30.00, 10.00, 50.00, 'Kemarau', 'Jagung', 'img/tanaman_jagung.png', 'Jagung membutuhkan cuaca yang hangat, dengan suhu sekitar 20-30°C. Musim panas adalah waktu yang cocok untuk menanam jagung.'),
(6, 'Juni', '2022', 20.00, 30.00, 10.00, 50.00, 'Kemarau', 'Jagung', 'img/tanaman_jagung.png', 'Jagung membutuhkan cuaca yang hangat, dengan suhu sekitar 20-30°C. Musim panas adalah waktu yang cocok untuk menanam jagung.'),
(7, 'Juli', '2022', 25.00, 35.00, 10.00, 60.00, 'Kemarau', 'Cabai', 'img/tanaman_cabai.png', 'Cabai membutuhkan suhu hangat hingga panas, sekitar 25-35°C, untuk tumbuh dan berbuah dengan baik. Musim panas adalah waktu yang cocok untuk menanam cabai.'),
(8, 'Agustus', '2022', 25.00, 35.00, 10.00, 60.00, 'Kemarau', 'Cabai', 'img/tanaman_cabai.png', 'Cabai membutuhkan suhu hangat hingga panas, sekitar 25-35°C, untuk tumbuh dan berbuah dengan baik. Musim panas adalah waktu yang cocok untuk menanam cabai.'),
(9, 'September', '2022', 25.00, 35.00, 10.00, 60.00, 'Kemarau', 'Cabai', 'img/tanaman_cabai.png', 'Cabai membutuhkan suhu hangat hingga panas, sekitar 25-35°C, untuk tumbuh dan berbuah dengan baik. Musim panas adalah waktu yang cocok untuk menanam cabai.'),
(10, 'Oktober', '2022', 10.00, 20.00, 50.00, 50.00, 'Hujan', 'Kol', 'img/kol.png', 'Kol lebih suka tumbuh pada cuaca yang lebih sejuk atau sedang, dengan suhu sekitar 10-20°C. Musim semi atau musim gugur adalah waktu yang cocok untuk menanam Kol.'),
(11, 'November', '2022', 10.00, 20.00, 50.00, 50.00, 'Hujan', 'Kol', 'img/kol.png', 'Kol lebih suka tumbuh pada cuaca yang lebih sejuk atau sedang, dengan suhu sekitar 10-20°C. Musim semi atau musim gugur adalah waktu yang cocok untuk menanam Kol.'),
(12, 'Desember', '2022', 10.00, 20.00, 50.00, 50.00, 'Hujan', 'Kol', 'img/kol.png', 'Kol lebih suka tumbuh pada cuaca yang lebih sejuk atau sedang, dengan suhu sekitar 10-20°C. Musim semi atau musim gugur adalah waktu yang cocok untuk menanam Kol.');

-- --------------------------------------------------------

--
-- Table structure for table `hitung`
--

CREATE TABLE `hitung` (
  `Kode` int(11) NOT NULL,
  `Value` decimal(10,0) NOT NULL,
  `Tanaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hitung`
--

INSERT INTO `hitung` (`Kode`, `Value`, `Tanaman`) VALUES
(1, 37, 'Tomat'),
(2, 37, 'Tomat'),
(3, 37, 'Tomat'),
(4, 35, 'Jagung'),
(5, 35, 'Jagung'),
(6, 35, 'Jagung'),
(7, 42, 'Cabai'),
(8, 42, 'Cabai'),
(9, 42, 'Cabai'),
(10, 48, 'Kol'),
(11, 48, 'Kol'),
(12, 48, 'Kol');

-- --------------------------------------------------------

--
-- Table structure for table `hitung2`
--

CREATE TABLE `hitung2` (
  `Kode` int(11) NOT NULL,
  `Value` decimal(10,0) NOT NULL,
  `Tanaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hitung2`
--

INSERT INTO `hitung2` (`Kode`, `Value`, `Tanaman`) VALUES
(1, 37, 'Tomat'),
(2, 37, 'Tomat'),
(4, 35, 'Jagung'),
(5, 35, 'Jagung'),
(6, 35, 'Jagung');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(200) NOT NULL DEFAULT '',
  `Password` varchar(100) DEFAULT NULL,
  `Active` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Password`, `Active`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
('ela@gmail.com', '8100240622c5494b0cb9086f15957813', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuaca`
--
ALTER TABLE `cuaca`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `hitung2`
--
ALTER TABLE `hitung2`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
