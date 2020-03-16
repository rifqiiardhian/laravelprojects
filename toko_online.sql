-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 05:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_produk` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8_esperanto_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `catatan` text COLLATE utf8_esperanto_ci NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `telepon` varchar(20) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `gender` varchar(5) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `foto` blob DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_esperanto_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `nama`, `email`, `telepon`, `alamat`, `gender`, `foto`, `password`, `status`) VALUES
(1, 'chaernh', 'Chaerfansyah', 'chaer@localhost.com', '085155087701', 'Jl. Sigura Gura III No. 9', 'Cowok', NULL, 'chaer123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_esperanto_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `nama`, `email`, `password`, `role_id`, `status`) VALUES
(1, 'admincso', 'Admin CSO', 'admincso@localhost.com', 'admin123', 1, 'active'),
(2, 'adminfinance', 'Admin Finance', 'adminfinance@localhost.com', 'admin123', 2, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8_esperanto_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_esperanto_ci DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preview`
--

CREATE TABLE `preview` (
  `id` int(11) NOT NULL,
  `preview1` blob DEFAULT NULL,
  `preview2` blob DEFAULT NULL,
  `preview3` blob DEFAULT NULL,
  `preview4` blob DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_esperanto_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8_esperanto_ci DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_esperanto_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama`) VALUES
(1, 'Admin CSO'),
(2, 'Admin Finance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer` (`id_customer`);

--
-- Indexes for table `preview`
--
ALTER TABLE `preview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori` (`id_kategori`),
  ADD KEY `fk_pegawai` (`id_pegawai`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `preview`
--
ALTER TABLE `preview`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
