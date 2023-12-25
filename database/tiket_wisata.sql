-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 04:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tiket`
--

CREATE TABLE `data_tiket` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `nomor_identitas` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `tempat_wisata` varchar(20) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(11) NOT NULL,
  `pengunjung_anak` int(11) NOT NULL,
  `harga_tiket` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tiket`
--

INSERT INTO `data_tiket` (`id`, `nama_pemesan`, `nomor_identitas`, `no_hp`, `tempat_wisata`, `tanggal_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`, `harga_tiket`, `total_bayar`) VALUES
(11, 'I Nyoman', 7686522, 81267893, 'Taman Rusa Kemang', '2022-09-06', 2, 2, 'Rp. 10.000', '30000'),
(12, 'arya', 34532, 8976123, 'Curug Parigi', '2022-09-26', 3, 4, 'Rp. 10.000', '50000'),
(13, 'nyoman', 65234, 812832562, 'Curug Parigi', '2022-09-13', 2, 2, 'Rp. 10.000', '30000'),
(14, 'nyoman', 652343, 812832562, 'Curug Parigi', '2022-09-13', 2, 2, 'Rp. 10.000', '30000'),
(15, 'Nyoman Arya Putra', 232344, 812763242, 'Curug Parigi', '2022-09-26', 4, 2, 'Rp. 10.000', '50000'),
(16, '', 33344, 0, 'Danau Cibereum', '0000-00-00', 1, 1, 'Rp. 10.000', '15000'),
(17, 'asdas', 3432, 3435, 'Danau Cibereum', '0000-00-00', 3, 3, 'Rp. 10.000', '45000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tiket`
--
ALTER TABLE `data_tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tiket`
--
ALTER TABLE `data_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
