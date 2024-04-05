-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 03:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_set_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekap_aset`
--

CREATE TABLE `rekap_aset` (
  `id` int(11) NOT NULL,
  `host_id` int(11) NOT NULL,
  `nama_aset` varchar(255) NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `jenis_aset` varchar(50) NOT NULL,
  `kode_aset` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekap_aset`
--

INSERT INTO `rekap_aset` (`id`, `host_id`, `nama_aset`, `wilayah`, `jenis_aset`, `kode_aset`, `alamat`) VALUES
(1, 1, 'GANDA KOST 64', 'Jakarta', 'Kost', 'KO001', 'Jl. Kebon Kacang II No. 64 RT.002 - Jakarta Pusat'),
(3, 3, 'Rawamangun', 'Jakarta', 'Rumah Petak', 'RP0007', 'Jl. H.Daimin No 30 RT 007 RW 03 Pulo Gadung'),
(4, 1, 'Ganda Kost', 'Jakarta', 'Kost', 'KO0012', 'Jl. Kebon Kacang II No 37 Tanah Abang');

-- --------------------------------------------------------

--
-- Table structure for table `tuan_rumah`
--

CREATE TABLE `tuan_rumah` (
  `id` int(11) NOT NULL,
  `nama_penyewa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuan_rumah`
--

INSERT INTO `tuan_rumah` (`id`, `nama_penyewa`) VALUES
(1, 'Dummy_01'),
(2, 'Dummy_02'),
(3, 'Dummy_03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekap_aset`
--
ALTER TABLE `rekap_aset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_id` (`host_id`);

--
-- Indexes for table `tuan_rumah`
--
ALTER TABLE `tuan_rumah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekap_aset`
--
ALTER TABLE `rekap_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tuan_rumah`
--
ALTER TABLE `tuan_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rekap_aset`
--
ALTER TABLE `rekap_aset`
  ADD CONSTRAINT `rekap_aset_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `tuan_rumah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
