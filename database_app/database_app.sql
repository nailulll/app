-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 01:41 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asset`
--

CREATE TABLE `tbl_asset` (
  `id_asset` int(11) NOT NULL,
  `nama_barang` varchar(99) NOT NULL,
  `jumlah` int(99) NOT NULL,
  `kondisi` varchar(99) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_asset`
--

INSERT INTO `tbl_asset` (`id_asset`, `nama_barang`, `jumlah`, `kondisi`, `keterangan`) VALUES
(1, 'Kursi', 41, 'Bagus', 'Pemerintah'),
(2, 'Meja', 20, 'Bagus', 'Pemerintah'),
(3, 'Papan tulis', 2, 'Bagus', 'Dana Bos'),
(4, 'Proyektor', 1, 'Bagus', 'Komite'),
(5, 'Air Conditioner(AC)', 2, 'Bagus', 'Dana Bos'),
(8, 'Monitor', 50, 'Bagus', 'Pemerintah'),
(9, 'PC(Personal Computer)', 50, 'Bagus', 'Pemerintah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_investor`
--

CREATE TABLE `tbl_investor` (
  `id_investor` int(11) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_investor`
--

INSERT INTO `tbl_investor` (`id_investor`, `nama`, `alamat`, `keterangan`) VALUES
(1, 'Ir. Drs. Bean S.Pd', 'karangsari rt001/012', '2021-05-15'),
(4, 'mr. Bean', 'Lakbok', '2020-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`) VALUES
(3, 'Nailul', 'ilul', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_asset`
--
ALTER TABLE `tbl_asset`
  ADD PRIMARY KEY (`id_asset`);

--
-- Indexes for table `tbl_investor`
--
ALTER TABLE `tbl_investor`
  ADD PRIMARY KEY (`id_investor`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_asset`
--
ALTER TABLE `tbl_asset`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_investor`
--
ALTER TABLE `tbl_investor`
  MODIFY `id_investor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
