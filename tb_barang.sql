-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 10:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori_barang` varchar(50) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_barang` double NOT NULL,
  `harga_jual` double NOT NULL,
  `stok_barang` int(50) NOT NULL,
  `supplier_barang` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `kategori_barang`, `deskripsi_barang`, `harga_barang`, `harga_jual`, `stok_barang`, `supplier_barang`, `tanggal_masuk`) VALUES
(2, '1024', 'laptop asus', 'elektronik', 'barang elektronik kondisi beru', 22, 24, 5, 'asus', '2024-05-18'),
(3, '3024', 'laptop taf', 'elektronik', 'barang elektronik kondisi beru', 15, 20, 5, 'asus', '2024-05-18'),
(4, '36024', 'laptop msi', 'elektronik', 'barang elektronik kondisi beru', 15, 20, 5, 'asus', '2024-05-18'),
(5, '32024', 'hp iphone 11', 'elektronik', 'barang elektronik kondisi beru', 6, 7, 5, 'apple', '2024-05-18'),
(6, '31024', 'hp oppo', 'elektronik', 'barang elektronik kondisi beru', 7, 8, 5, 'oppo', '2024-05-18'),
(7, '9024', 'hp iphone 12 pro', 'elektronik', 'barang elektronik kondisi beru', 8, 10, 5, 'apple', '2024-05-18'),
(8, '20024', 'hp iphone 13', 'elektronik', 'barang elektronik kondisi beru', 15, 24, 5, 'apple', '2024-05-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
