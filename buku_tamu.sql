-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 01:40 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nip`, `nama`, `jabatan`, `username`, `password`) VALUES
(1, '1234567891', 'Darma Dwi Budiman', 'Admin', 'darmadwi', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, '1234567892', 'Sudomo Purnama Gunardi', 'Admin', 'sudomopurnama', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, '1234567890', 'Benito Danneswara Widyatama', 'IT Programmer', 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `data_tamu`
--

CREATE TABLE `data_tamu` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `keperluan` varchar(120) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tamu`
--

INSERT INTO `data_tamu` (`id`, `nik`, `nama`, `pekerjaan`, `alamat`, `no_telp`, `keperluan`, `foto`) VALUES
(1, '9876543211', 'Widya Dewi', 'Library assistant', 'Jl Raya Perancis Bl A-7/17,Kosambi Barat', '5559091', 'Darma Dwi Budiman', 'widyadewi.jpg'),
(2, '9876543212', 'Cia', 'Belum/Tidak Bekerja', 'Jalan Raya Indah no. 5', '080989999', 'Sudomo Purnama Gunardi', 'avatar.png'),
(3, '9876543212', 'Cia', 'Belum/Tidak Bekerja', 'Jalan Raya Indah no. 5', '080989999', 'Darma Dwi Budiman', 'avatar.png'),
(4, '9876543213', 'Benito Danneswara Widyatama', 'Developer', 'Jalan jalan santai no. 3', '08123456789', 'Sudomo Purnama Gunardi', 'avatar.png'),
(5, '9876543212', 'Cia', 'Belum/Tidak Bekerja', 'Jalan Raya Indah no. 5', '080989999', 'Darma Dwi Budiman', 'avatar51.png'),
(6, '9876543211', 'Widya Dewi', 'Library assistant', 'Jl Raya Perancis Bl A-7/17,Kosambi Barat', '5559091', 'Darma Dwi Budiman', 'img_avatar2.png'),
(7, '9876543213', 'Benito Danneswara Widyatama', 'Developer', 'Jalan jalan santai no. 3', '08123456789', 'Sudomo Purnama Gunardi', 'to_swirl.JPG'),
(10, '9876543214', 'Andi Adinata', 'Accountant', 'Jalan Panca no. 1', '08564321987', 'Sudomo Purnama Gunardi', 'img_avatar.png'),
(11, '9876543211', 'Widya Dewi', 'Library assistant', 'Jl Raya Perancis Bl A-7/17,Kosambi Barat', '5559091', 'Sudomo Purnama Gunardi', 'avatar52.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tamu`
--
ALTER TABLE `data_tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_tamu`
--
ALTER TABLE `data_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
