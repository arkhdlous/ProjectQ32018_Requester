-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2018 pada 12.14
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectq3`
--
CREATE DATABASE IF NOT EXISTS `projectq3` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projectq3`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_request`
--

CREATE TABLE `tb_request` (
  `id_request` int(11) NOT NULL,
  `plant_name` varchar(50) NOT NULL,
  `date_request` date NOT NULL,
  `date_test` date DEFAULT NULL,
  `date_install` date DEFAULT NULL,
  `content` enum('insert','update','delete','') NOT NULL,
  `summary` text NOT NULL,
  `test_method` text NOT NULL,
  `monitoring_method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_request`
--

INSERT INTO `tb_request` (`id_request`, `plant_name`, `date_request`, `date_test`, `date_install`, `content`, `summary`, `test_method`, `monitoring_method`) VALUES
(1, 'SINTER', '2018-08-16', '0000-00-00', '0000-00-00', 'insert', 'adsasd', 'asdasd', 'asdasd'),
(2, 'CCP', '2018-08-15', '2018-08-16', '2018-08-17', 'update', 'asdasd', 'adasd', 'asdasd'),
(3, 'RMH', '2018-08-17', '0000-00-00', '0000-00-00', 'insert', 'asdasdasd\r\nasdasdasd\r\n-sdasda\r\n-line kedua', '-line pertama\r\n-kedua\r\n-ketiga', '-asas\r\n-asas\r\n-asas\r\n-asas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_request`
--
ALTER TABLE `tb_request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_request`
--
ALTER TABLE `tb_request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
