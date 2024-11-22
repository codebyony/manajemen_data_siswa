-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 12:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_user` varchar(100) COLLATE utf8_bin NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `tgl` date NOT NULL,
  `jk` varchar(50) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(225) COLLATE utf8_bin NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_user`, `nis`, `nama`, `password`, `tgl`, `jk`, `alamat`, `level`) VALUES
('36894689', 46864377, 'ony', 'e807f1fcf82d132f9bb018ca6738a19f', '1998-11-13', 'Perempuan', 'Malang', 1),
('5c22facab7564', 75936934, 'Salsabila Putri', '', '1992-03-19', 'Perempuan', 'Solo', 2),
('5c22fb4633a4d', 63845284, 'Fathah Dede Saputra', '', '1998-06-24', 'Laki Laki', 'Aceh', 2),
('5c22fb95d763a', 73549632, 'Bunga Laila', '', '1991-05-16', 'Perempuan', 'Yogyakarta', 2),
('5c22fbc834f5a', 75358644, 'Bella Cici', '', '1997-11-25', 'Perempuan', 'Lombok', 2),
('5c22fc6971b3d', 56756734, 'Agung Kurniawan', '', '1995-09-26', 'Laki Laki', 'Bali', 2),
('5c22fcc7cc16b', 52846294, 'Reva Lestari', '', '1994-03-16', 'Perempuan', 'Bogor', 2),
('5c232d16de9c8', 75638364, 'Citra Ayu Wulandari', '', '1194-05-13', 'Perempuan', 'Cirebon', 2),
('5c23343964376', 63826382, 'Kelly Jhon', '', '1993-06-08', 'Laki Laki', 'Surabaya', 2),
('5c236aa2aa555', 63853849, 'Fery Andreas', '', '1997-06-03', 'Laki Laki', 'Jambi', 2),
('5c236b0384f66', 74937483, 'Farel Cahyo', '', '1994-02-15', 'Laki Laki', 'Banyuwangi', 2),
('5c236b07154a3', 74937483, 'Farel Cahyo', '', '1994-02-15', 'Laki Laki', 'Banyuwangi', 2),
('5c236b085e107', 74937483, 'Farel Cahyo', '', '1994-02-15', 'Laki Laki', 'Banyuwangi', 2),
('5c236c30d5db7', 73947283, 'Sindi Olivia', '', '1993-06-18', 'Perempuan', 'Manado', 2),
('5c288cf93ccb9', 64725482, 'Sony Bob', '', '1997-04-03', 'Perempuan', 'Riau', 2),
('5c39c55a95842', 111112345, 'Rere Ary', '', '1993-05-12', 'Perempuan', 'Kebumen', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
