-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 09:07 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualantsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `noid` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `namapembeli` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `ongkosjahit` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`noid`, `tanggal`, `namapembeli`, `no_hp`, `namabarang`, `panjang`, `lebar`, `hargabarang`, `ongkosjahit`, `total`) VALUES
(1, '2018-02-02 19:11:57', '', '081314141313', 'Terpal Lele', 5, 1, 50000, 10000, 0),
(2, '2018-02-02 19:18:18', 'tes2', '081314141515', 'Terpal Kura kura', 10, 2, 30000, 5000, 0),
(3, '2018-02-02 19:19:24', 'tes3', '081115150000', 'Terpal Macan', 7, 1, 1000000, 5000, 0),
(4, '2018-02-02 19:20:13', 'tes4', '077788885555', 'Terpal Gedung', 8, 1, 500000, 10000, 0),
(5, '2018-02-02 19:21:49', 'tes5', '081311112222', 'Terpal Ayam', 8, 1, 10000, 3500, 0),
(6, '2018-02-02 19:23:36', 'tes6', '12345678910', 'Terpal Mobil', 7, 1, 10500, 6000, 16500),
(7, '2018-02-02 19:24:50', 'tes terakhir', '111133330000', 'Terpal VPC', 7, 2, 1000000, 75000, 0),
(8, '2018-02-02 19:26:07', 'tes7', '12345678910', 'Terpal Ayam', 7, 1, 50000, 10000, 60001),
(9, '2018-02-02 19:31:53', 'tes8', '123456781111', 'Terpal Meja', 7, 1, 30, 30, 60),
(10, '2018-02-02 19:32:28', 'tes terakhir lagi', '081314141515', 'Terpal Lele', 7, 1, 200000, 35000, 235000),
(11, '2018-02-02 19:50:24', 'tes sekali lagi', '081314141515', 'Terpal Macan', 8, 1, 230000, 10000, 240000);

-- --------------------------------------------------------

--
-- Table structure for table `stocktoko`
--

CREATE TABLE `stocktoko` (
  `noid` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocktoko`
--

INSERT INTO `stocktoko` (`noid`, `nama_barang`, `panjang`, `lebar`) VALUES
(1, 'Terpal Lele', 3, 1),
(2, 'Terpal Ikan', 60, 2),
(3, 'Terpal Ayam', 6, 1),
(4, 'Terpal Macan', 5, 2),
(5, 'Terpal Meja', 6, 1),
(6, 'Terpal Tenda', 7, 2),
(7, 'Terpal Apa Aja', 20, 1),
(8, 'Terpal Kura kura', 8, 1),
(9, 'Terpal VPC', 9, 1),
(10, 'Terpal Gedung', 10, 1),
(11, 'Terpal Mobil', 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `noid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`noid`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `stocktoko`
--
ALTER TABLE `stocktoko`
  ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`noid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `stocktoko`
--
ALTER TABLE `stocktoko`
  MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `noid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
