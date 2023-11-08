-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 04:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `qty`) VALUES
(1, 13, 0, 0),
(2, 1, 1, 1),
(3, 17, 0, 0),
(4, 17, 0, 0),
(5, 18, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `telfon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `alamat`, `jenis_kelamin`, `telfon`) VALUES
(1, 'Dara', 'Blitar', 'Perempuan', '081372463'),
(8, 'bundret', 'Blitar', 'Perempuan', '08125161');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(50) NOT NULL,
  `category` enum('kiloan','selimut','bed_cover','kaos') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `deskripsi`, `harga`, `category`, `gambar`) VALUES
(1, 'Baju kering', 'Baju yang kering', 2000, 'kiloan', 'public.png'),
(2, 'Baju basah', 'baju yang basah', 5000, 'kiloan', 'basah.jpg'),
(3, 'Selimut', 'selimut hangat yang lagi kotor ayo dibersihkan', 8000, 'selimut', 'selimut.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Nama` text NOT NULL,
  `Username` text NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `status` enum('baru','proses','selesai','diambil') DEFAULT NULL,
  `dibayar` enum('dibayar','belum_dibayar') DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `batas_waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tgl`, `tgl_bayar`, `status`, `dibayar`, `id_user`, `id_member`, `batas_waktu`) VALUES
(1, '2023-11-08', '2023-11-08', 'baru', 'dibayar', 5, 1, '2023-11-10'),
(2, '2023-11-08', '2023-11-08', 'baru', 'dibayar', 5, 1, '2023-11-10'),
(3, '2023-11-08', '2023-11-08', 'baru', 'dibayar', 5, 1, '2023-11-10'),
(4, '2023-11-08', '2023-11-08', 'baru', 'dibayar', 5, 1, '2023-11-10'),
(5, '2023-11-08', '2023-11-08', 'baru', 'dibayar', 5, 2, '2023-11-10'),
(6, '2023-11-08', '2023-11-08', 'selesai', 'dibayar', 5, 2, '2023-11-10'),
(7, '2023-11-08', '2023-11-08', 'baru', 'dibayar', 5, 2, '2023-11-10'),
(8, '2023-11-08', '2023-11-08', 'baru', 'dibayar', 5, 2, '2023-11-10'),
(9, '2023-11-08', NULL, 'baru', 'belum_dibayar', 5, 1, '2023-11-10'),
(10, '2023-11-08', NULL, 'baru', 'belum_dibayar', 5, 1, '2023-11-10'),
(11, '2023-11-08', NULL, 'baru', 'belum_dibayar', 5, 1, '2023-11-10'),
(12, '2023-11-08', NULL, 'baru', 'belum_dibayar', 5, 1, '2023-11-10'),
(13, '2023-11-08', NULL, 'baru', 'belum_dibayar', 5, 1, '2023-11-10'),
(14, '2023-11-08', NULL, 'baru', 'belum_dibayar', 5, 1, '2023-11-10'),
(15, '2023-11-08', NULL, 'baru', 'belum_dibayar', 5, 1, '2023-11-10'),
(16, '2023-11-08', NULL, 'baru', 'belum_dibayar', 5, 1, '2023-11-10'),
(17, '2023-11-08', '2023-11-08', 'diambil', 'dibayar', 5, 1, '2023-11-10'),
(18, '2023-11-08', NULL, 'baru', 'belum_dibayar', 4, 1, '2023-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` enum('admin','kasir') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `role`) VALUES
(3, 'sabrina ', 'sabrinayey', '09aff5dfcd28c382001f7f6b78f4e29d', ' sabrina@gmail.com', 'kasir'),
(4, 'sasi', 'sasirhd', 'Sasi1810', ' sasirhd@gmail.com', 'kasir'),
(5, 'olip', 'olipslebew', '12345', ' olipeww@gmail.com', 'admin'),
(6, 'sany', 'sanyy', 'sany', ' sany', 'admin'),
(7, 'twiska', 'twiskaa', '1234', ' twiska@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
