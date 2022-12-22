-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 04:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jabatan`, `gender`, `telepon`, `alamat`, `foto`) VALUES
(14, 'Dilan', 'Manager', 'Pria', '080000000000', 'Kamu nanya alamat aku dimana?', '087977400_1666591841-6_mikey22287.jpg'),
(15, 'Rehan Baik', 'Manager', 'Wanita', '081111111111', 'Begitu Syulit', 'rehan.jpg'),
(16, 'Roger Sumatera', 'CEO', 'Pria', '086969696969', 'Jika kau bertemu aku begini', 'meme-roger-sumatera-feature-640x360.jpg'),
(17, 'Wailah Enak', 'Wakil Sekretaris', 'Pria', '084204204204', 'Wailah enak', 'wailah.jpg'),
(18, 'Cuan', 'Wakil Direktur', 'Wanita', '080808080808', 'Kepak sayap kebhinekaan', '96b7a24c-498c-480e-b901-d652a416980a_169.jpeg'),
(19, 'Soe hearth o', 'Direktur', 'Pria', '086942069420', 'Piye kabare, isih penak jamanku to', 'soeharto.jpg'),
(20, 'Adit', 'Wakil Direktur', 'Pria', '081234567890', 'Buaya hole', 'DNAidit1963.jpg'),
(21, 'Megalodon', 'CEO', 'Wanita', '087654321098', 'RedBull Struggle', 'megacwann.png'),
(22, 'Juniari Batubata', 'Bendahara', 'Pria', '081470258369', 'Lapas Klas 1 Tangerang', 'bansos.jpg'),
(23, 'Rambo', 'Manager', 'Pria', '083690258147', 'Dor dor', 'dordor.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('admin@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
