-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 04:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordernow`
--

-- --------------------------------------------------------

--
-- Table structure for table `juru_masak`
--

CREATE TABLE `juru_masak` (
  `id_jm` int(11) NOT NULL,
  `kode_jm` varchar(4) NOT NULL,
  `nama_jm` varchar(50) NOT NULL,
  `password_jm` varchar(50) NOT NULL,
  `no_hp_jm` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `juru_masak`
--

INSERT INTO `juru_masak` (`id_jm`, `kode_jm`, `nama_jm`, `password_jm`, `no_hp_jm`) VALUES
(1, 'J01', 'Putri Aulia', '1234554321', '082360050793');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `kode_kasir` varchar(4) NOT NULL,
  `nama_kasir` varchar(50) NOT NULL,
  `password_kasir` varchar(50) NOT NULL,
  `no_hp_kasir` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `kode_kasir`, `nama_kasir`, `password_kasir`, `no_hp_kasir`) VALUES
(1, 'K01', 'Mariza Agustia', '12345678', '085260104277');

-- --------------------------------------------------------

--
-- Table structure for table `level_users`
--

CREATE TABLE `level_users` (
  `level_user_id` int(2) NOT NULL,
  `level_users` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_users`
--

INSERT INTO `level_users` (`level_user_id`, `level_users`) VALUES
(1, 'pelanggan'),
(2, 'kasir'),
(3, 'juru masak'),
(4, 'pelayan');

-- --------------------------------------------------------

--
-- Table structure for table `menu_jus`
--

CREATE TABLE `menu_jus` (
  `id_jus` int(4) NOT NULL,
  `nama_jus` varchar(50) NOT NULL,
  `harga_jus` int(10) NOT NULL,
  `jenis_jus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_jus`
--

INSERT INTO `menu_jus` (`id_jus`, `nama_jus`, `harga_jus`, `jenis_jus`) VALUES
(1, 'Kolak Dingin', 10000, 'jus'),
(2, 'Lemon Tea', 9000, 'jus'),
(3, 'Jeruk Nipis', 9000, 'jus'),
(4, 'Jeruk Peras', 9000, 'jus'),
(5, 'Jus Semangka', 9000, 'jus'),
(6, 'Jus Timun', 9000, 'jus'),
(7, 'Jus Tomat', 9000, 'jus'),
(8, 'Jus Melon', 9000, 'jus'),
(9, 'Jus Tape', 10000, 'jus'),
(10, 'Jus Wortel', 10000, 'jus'),
(11, 'Jus Kedondong', 10000, 'jus'),
(12, 'Jus Belimbing', 10000, 'jus'),
(13, 'Jus Jambu Klutuk', 10000, 'jus'),
(14, 'Jus Mangga', 10000, 'jus'),
(15, 'Buah Segar', 10000, 'buah'),
(16, 'Jus Marquisa', 12000, 'jus'),
(17, 'Jus Terong Belanda', 12000, 'jus'),
(18, 'Jus Pokat', 12000, 'jus'),
(19, 'Jus Wortel + Susu', 15000, 'jus'),
(20, 'Jus Murni', 15000, 'jus');

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id_makanan` int(4) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `harga_makanan` int(10) NOT NULL,
  `jenis_makanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`id_makanan`, `nama_makanan`, `harga_makanan`, `jenis_makanan`) VALUES
(1, 'Ayam Bakar', 13000, 'lauk'),
(2, 'Ayam Siram', 13000, 'lauk'),
(3, 'Ayam Bakar Pedas', 13000, 'lauk'),
(4, 'Mie Soto Ayam', 12000, 'mie'),
(5, 'Mie Bakso', 12000, 'mie'),
(6, 'Bakso Tok', 12000, 'bakso'),
(7, 'Bakso Tok + Ayam', 15000, 'bakso'),
(8, 'Mie Bakso + Ayam', 15000, 'mie'),
(9, 'Mie Goreng/Rebus', 10000, 'mie'),
(10, 'Mie Goreng Spesial', 16000, 'mie'),
(11, 'Mie Hun Goreng', 10000, 'mie'),
(12, 'Mie Goreng Spesial', 16000, 'mie'),
(13, 'Mie Tiaw Goreng', 16000, 'mie'),
(14, 'Indomie Rebus', 10000, 'mie'),
(15, 'Nasi Goreng Telur/Dadar', 10000, 'nasi'),
(16, 'Nasi Goreng Lele Goreng', 18000, 'nasi'),
(17, 'Nasi Goreng Ayam', 18000, 'nasi'),
(18, 'Nasi Goreng Ayam Bakar', 19000, 'nasi'),
(19, 'Nasi Goreng Ayam Siram', 19000, 'nasi'),
(20, 'Nasi Goreng Spesial', 20000, 'nasi'),
(21, 'Nasi Goreng Mbak Moel', 27000, 'nasi'),
(22, 'Nasi Goreng Seafood', 27000, 'nasi'),
(23, 'Nasi Goreng Spesial Udang', 27000, 'nasi'),
(24, 'Nasi Goreng Spesial Cumi', 27000, 'nasi'),
(25, 'Nasi Goreng Tok', 7000, 'nasi'),
(26, 'nasi putih', 4000, 'nasi'),
(27, 'telur dadar/mata sapi', 4000, 'lauk');

-- --------------------------------------------------------

--
-- Table structure for table `menu_minuman`
--

CREATE TABLE `menu_minuman` (
  `id_minuman` int(4) NOT NULL,
  `nama_minuman` varchar(50) NOT NULL,
  `harga_minuman` int(10) NOT NULL,
  `jenis_minuman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_minuman`
--

INSERT INTO `menu_minuman` (`id_minuman`, `nama_minuman`, `harga_minuman`, `jenis_minuman`) VALUES
(1, 'Teh Panas', 4000, 'minuman'),
(2, 'Teh Dingin', 5000, 'minuman'),
(3, 'Teh Susu Panas', 7000, 'minuman'),
(4, 'Teh Susu Dingin', 9000, 'minuman'),
(5, 'Kopi Nescafe Panas', 4000, 'minuman'),
(6, 'Kopi Nescafe Dingin', 6000, 'minuman'),
(7, 'Kopi Susu Panas', 7000, 'minuman'),
(8, 'Kopi Susu Dingin', 10000, 'minuman'),
(9, 'Susu Panas', 6000, 'minuman'),
(10, 'Susu Dingin', 8000, 'minuman'),
(11, 'Milo Panas', 6000, 'minuman'),
(12, 'Milo Dingin', 8000, 'minuman'),
(13, 'Milo Susu Panas', 8000, 'minuman'),
(14, 'Milo Susu Dingin', 13000, 'minuman'),
(15, 'Sirup ABC Orange', 6000, 'minuman'),
(16, 'Sirup Kurnia', 6000, 'minuman'),
(17, 'Hemaviton/Extra Joss Dingin ', 5000, 'minuman'),
(18, 'Hemaviton/Extra Joss + Susu Dingin', 12000, 'minuman'),
(19, 'Cappucino Panas', 6000, 'minuman'),
(20, 'Cappucino Dingin', 8000, 'minuman'),
(21, 'Cappucino Cincau Dingin', 10000, 'minuman'),
(22, 'Coffemix Panas', 6000, 'minuman'),
(23, 'Coffemix Dingin', 8000, 'minuman'),
(24, 'Teh Tarik Panas', 6000, 'minuman'),
(25, 'Teh Tarik Dingin', 8000, 'minuman'),
(26, 'teh botol sosro', 5000, 'minuman'),
(27, 'sirup limau', 9000, 'minuman'),
(28, 'cincau dingin', 7000, ''),
(29, 'air mineral gelas', 1000, 'minuman'),
(30, 'air mineral sedang', 3000, 'minuman');

-- --------------------------------------------------------

--
-- Table structure for table `menu_pesanan`
--

CREATE TABLE `menu_pesanan` (
  `id_menu_pesanan` int(5) NOT NULL,
  `id_pemesanan` int(5) NOT NULL,
  `id_item` int(5) NOT NULL,
  `jenis_pesanan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_sayuran`
--

CREATE TABLE `menu_sayuran` (
  `id_sayuran` int(4) NOT NULL,
  `nama_sayuran` varchar(50) NOT NULL,
  `harga_sayuran` int(10) NOT NULL,
  `jenis_sayuran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_sayuran`
--

INSERT INTO `menu_sayuran` (`id_sayuran`, `nama_sayuran`, `harga_sayuran`, `jenis_sayuran`) VALUES
(1, 'Soto Daging', 15000, 'lauk'),
(2, 'Soto Bakso', 15000, 'lauk'),
(3, 'Soto Ayam', 12000, 'lauk'),
(4, 'Sop Ayam', 12000, 'lauk'),
(5, 'Sop Daging', 15000, 'lauk'),
(6, 'Tumis Kangkung Terasi', 10000, 'lauk'),
(7, 'Tumis Kangkung Jamur Terasi', 16000, 'lauk'),
(8, 'Capcay', 14000, 'lauk'),
(9, 'Capcay Jamur', 20000, 'lauk'),
(10, 'Jamur Tumis', 20000, 'lauk'),
(11, 'Tumis Tauge', 14000, 'lauk'),
(12, 'Lalapan', 6000, 'lauk'),
(13, 'Lele Siram/Peyet', 15000, 'lauk'),
(14, 'Pecel Lele', 15000, 'lauk'),
(15, 'Lele Goreng', 12000, 'lauk'),
(16, 'Kerupuk', 3000, 'lauk'),
(17, 'Tahu', 5000, 'lauk'),
(18, 'Sambal Terasi/Kecap/A.Siram', 3000, 'lauk');

-- --------------------------------------------------------

--
-- Table structure for table `menu_seafood`
--

CREATE TABLE `menu_seafood` (
  `id_seafood` int(4) NOT NULL,
  `nama_seafood` varchar(50) NOT NULL,
  `harga_seafood` int(10) NOT NULL,
  `jenis_seafood` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_seafood`
--

INSERT INTO `menu_seafood` (`id_seafood`, `nama_seafood`, `harga_seafood`, `jenis_seafood`) VALUES
(1, 'Udang Goreng Tepung', 20000, 'lauk'),
(2, 'Udang Tauco/Udang Tumis', 25000, 'lauk'),
(3, 'Udang Jamur Tumis', 30000, 'lauk'),
(4, 'Udang Asam Manis', 35000, 'lauk'),
(5, 'Cumi-Cumi Goreng Tepung', 20000, 'lauk'),
(6, 'Cumi-Cumi Tumis/Tauco', 25000, 'lauk'),
(7, 'Cumi-Cumi Jamur Tumis', 30000, 'lauk'),
(8, 'Cumi-Cumi Asam Manis', 35000, 'lauk'),
(9, 'Kepiting Lunak Asam Manis', 40000, 'lauk');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `no_meja` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `no_meja`) VALUES
(1, 'M01'),
(2, 'M02'),
(3, 'M03'),
(4, 'M04'),
(5, 'M05'),
(6, 'M06'),
(7, 'M07'),
(8, 'M08'),
(9, 'M09'),
(10, 'M10'),
(11, 'M11'),
(12, 'M12'),
(13, 'M13'),
(14, 'M14'),
(15, 'M15'),
(16, 'M16'),
(17, 'M17'),
(18, 'M18'),
(19, 'M19'),
(20, 'M20');

-- --------------------------------------------------------

--
-- Table structure for table `pelayan`
--

CREATE TABLE `pelayan` (
  `id_pelayan` int(11) NOT NULL,
  `kode_pelayan` varchar(4) NOT NULL,
  `nama_pelayan` varchar(50) NOT NULL,
  `password_pelayan` varchar(50) NOT NULL,
  `no_hp_pelayan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayan`
--

INSERT INTO `pelayan` (`id_pelayan`, `kode_pelayan`, `nama_pelayan`, `password_pelayan`, `no_hp_pelayan`) VALUES
(1, 'P01', 'Eko Riswanto Bagaskara', 'ekoo001', '085166782342');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(5) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level_login_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `nama`, `password`, `level_login_id`) VALUES
(1, 'M01', NULL, NULL, 1),
(2, 'M02', NULL, NULL, 1),
(3, 'M03', NULL, NULL, 1),
(4, 'M04', NULL, NULL, 1),
(5, 'M05', NULL, NULL, 1),
(6, 'M06', NULL, NULL, 1),
(7, 'M07', NULL, NULL, 1),
(8, 'M08', NULL, NULL, 1),
(9, 'M09', NULL, NULL, 1),
(10, 'M10', NULL, NULL, 1),
(11, 'M11', NULL, NULL, 1),
(12, 'M12', NULL, NULL, 1),
(13, 'M13', NULL, NULL, 1),
(14, 'M14', NULL, NULL, 1),
(15, 'M15', NULL, NULL, 1),
(16, 'M16', NULL, NULL, 1),
(17, 'M17', NULL, NULL, 1),
(18, 'M18', NULL, NULL, 1),
(19, 'M19', NULL, NULL, 1),
(20, 'M20', NULL, NULL, 1),
(21, 'K01', 'Mariza Agustia', 'sayakasir', 2),
(22, 'J01', 'Muthia Deliana', 'sayajurumasak', 3),
(23, 'P01', 'Putri Aulia', 'sayapelayan', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `juru_masak`
--
ALTER TABLE `juru_masak`
  ADD PRIMARY KEY (`id_jm`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `level_users`
--
ALTER TABLE `level_users`
  ADD PRIMARY KEY (`level_user_id`);

--
-- Indexes for table `menu_jus`
--
ALTER TABLE `menu_jus`
  ADD PRIMARY KEY (`id_jus`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `menu_minuman`
--
ALTER TABLE `menu_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
  ADD PRIMARY KEY (`id_menu_pesanan`),
  ADD KEY `fk_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `menu_sayuran`
--
ALTER TABLE `menu_sayuran`
  ADD PRIMARY KEY (`id_sayuran`);

--
-- Indexes for table `menu_seafood`
--
ALTER TABLE `menu_seafood`
  ADD PRIMARY KEY (`id_seafood`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pelayan`
--
ALTER TABLE `pelayan`
  ADD PRIMARY KEY (`id_pelayan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `fk_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `juru_masak`
--
ALTER TABLE `juru_masak`
  MODIFY `id_jm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `level_users`
--
ALTER TABLE `level_users`
  MODIFY `level_user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_jus`
--
ALTER TABLE `menu_jus`
  MODIFY `id_jus` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id_makanan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `menu_minuman`
--
ALTER TABLE `menu_minuman`
  MODIFY `id_minuman` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
  MODIFY `id_menu_pesanan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_sayuran`
--
ALTER TABLE `menu_sayuran`
  MODIFY `id_sayuran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menu_seafood`
--
ALTER TABLE `menu_seafood`
  MODIFY `id_seafood` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pelayan`
--
ALTER TABLE `pelayan`
  MODIFY `id_pelayan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_pesanan`
--
ALTER TABLE `menu_pesanan`
  ADD CONSTRAINT `fk_pemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
