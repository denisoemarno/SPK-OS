-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 01:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `os`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hp`
--

CREATE TABLE `data_os` (
  `id_os` int(4) NOT NULL,
  `nama_os` varchar(256) COLLATE utf8_bin NOT NULL,
  `harga_os` varchar(64) COLLATE utf8_bin NOT NULL,
  `tingkat_kemahiran_os` varchar(64) COLLATE utf8_bin NOT NULL,
  `dapat_berjalan_os` varchar(64) COLLATE utf8_bin NOT NULL,
  `platform_os` varchar(64) COLLATE utf8_bin NOT NULL,
  `tingkat_kesulitan_os` varchar(64) COLLATE utf8_bin NOT NULL,
  `stability_os` varchar(64) COLLATE utf8_bin NOT NULL,
  `harga_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `tingkat_kemahiran_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `dapat_berjalan_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `platform_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `tingkat_kesulitan_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `stability_angka` varchar(64) COLLATE utf8_bin NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_os`
--

INSERT INTO `data_os` (`id_os`, `nama_os`, `harga_os`, `tingkat_kemahiran_os`, `dapat_berjalan_os`, `platform_os`, `tingkat_kesulitan_os`,`stability_os`, `harga_angka`, `tingkat_kemahiran_angka`, `dapat_berjalan_angka`, `platform_angka`, `tingkat_kesulitan_angka`, `stability_angka`) VALUES
(1, 'Slackware', 'Gratis', 'Tidak Mahir', 'Ya', 'Desktop', 'Menggunakan antar muka command line', 'Stabilitas', '5', '4', '10', '10', '10', '9'),
(2, 'Debian', 'Gratis\r\n', 'Sedang', 'Ya', 'Desktop', 'Menggunakan antar muka graphical', 'Stabilitas', '5', '7', '10', '10', '15', '9'),
(3, 'Rhel', 'Berbayar\r\n', 'Tidak Mahir', 'Tidak', 'Server', 'Menggunakan antar muka command line', 'Stabilitas', '1', '4', '5', '5', '10', '9'),
(4, 'Fedora', 'Gratis', 'Tidak Mahir', 'Ya', 'Desktop', 'Menggunakan antar muka graphical', 'Stabilitas', '5', '4', '10', '10', '15', '9'),
(5, 'Ubuntu', 'Gratis\r\n', 'Tidak Mahir', 'Tidak', 'Server', 'Menggunakan antar muka command line', 'Stabilitas', '5', '4', '5', '5','10', '9'),
(6, 'openSUSE', 'Gratis', 'Tidak Mahir', 'Tidak', 'Desktop', 'Menggunakan antar muka command line', 'Stabilitas', '5', '4', '5', '10', '10', '9'),
(7, 'Arch', 'Gratis\r\n', 'Tidak Mahir', 'Tidak', 'Desktop', 'Menggunakan antar muka graphical', 'Stabilitas', '5', '5', '5', '10', '15', '9'),
(8, 'Centos', 'Gratis\r\n', 'Tidak Mahir', 'Ya', 'Desktop', 'Menggunakan antar muka command line', 'Stabilitas', '5', '4', '10', '10', '10', '9');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hp`
--
ALTER TABLE `data_os`
  ADD PRIMARY KEY (`id_os`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_hp`
--
ALTER TABLE `data_os`
  MODIFY `id_os` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
