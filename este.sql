-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 04:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `este`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload_guru`
--

CREATE TABLE `upload_guru` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` text NOT NULL,
  `materi` text NOT NULL,
  `video` text,
  `dokumen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_guru`
--

INSERT INTO `upload_guru` (`id_kelas`, `nama_kelas`, `materi`, `video`, `dokumen`) VALUES
(12345678, 'Kelas Belajar Seru', '<p>Bismillah</p>\r\n', NULL, NULL),
(123456781, 'Kelas Belajar Seru 2', '<p>Ayo Semangat</p>\r\n', NULL, NULL),
(471628921, 'Kelas Matematika SD kelas 6 A ', '<p style=\"text-align:center\"><strong>Selamat belajar matematika :)</strong></p>\r\n', NULL, NULL),
(1234567812, 'Kelas Belajar Seru 3', '<p>Ayo Semangat Dong</p>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(40) NOT NULL,
  `instansi` text NOT NULL,
  `role` enum('guru','siswa','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `instansi`, `role`) VALUES
(1, 'guru', 'a1872e333d0e52644f6125da2276530f7ebe5e77', 'Gurukuhh', 'Jauh Sekaleee', 'guru'),
(2, 'siswa', '7a24156a1971d85acf2ae64d9dbdf5322566636f', 'Siswanto', 'Jauh sekaleee juga', 'siswa'),
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Ngadimin', 'Server dong', 'admin'),
(4, 'pak_ahmad', 'a53a33601b8dd9d06ae9e50f1f30fbe957aba866', 'Ahmad Uhuy', 'SMA 1001 SM', 'guru'),
(7, 'sri', '532f110e089ab7f9606f1ba1fe4648a4a4d5dcc2', 'sri', 'SMA 1001 SM', 'guru'),
(8, 'wahyu', '3b7375a688b1820b016224646365e127de125ff0', 'wahyu', 'SMA 1001 SM', 'guru'),
(9, 'Rohman', 'f0dd1c8e549ae8ceba822167e255e48ce961eb87', 'Rohman', 'SMA 1001 SM', 'siswa'),
(10, 'fahru', '225f681d014cc368919a4467f1c2e083a7d785b1', 'Ahmad Fahru Uhuy', 'SMA 1001 SM', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_guru`
--
ALTER TABLE `upload_guru`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
