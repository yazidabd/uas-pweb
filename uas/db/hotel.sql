-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220628.14f90d77f8
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 03:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `kd_kamar` varchar(3) NOT NULL,
  `jenis_kamar` varchar(15) NOT NULL,
  `kd_pesan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`kd_kamar`, `jenis_kamar`, `kd_pesan`) VALUES
('', '', ''),
('101', 'reguler', '001'),
('102', 'reguler', '002'),
('103', 'reguler', '003'),
('104', 'reguler', '004'),
('105', 'vip', '005'),
('206', 'reguler', '006'),
('207', 'reguler', '007'),
('208', 'reguler', '008'),
('209', 'vip', '009'),
('210', 'vip', '010'),
('311', 'vip', '011');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `kd_pesan` varchar(4) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `id_recep` varchar(3) NOT NULL,
  `id_tamu` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`kd_pesan`, `tgl_pesan`, `id_recep`, `id_tamu`) VALUES
('', '0000-00-00', '', '003'),
('0001', '2022-06-30', '001', '001'),
('0002', '2022-07-01', '002', '002'),
('0003', '2022-07-01', '003', '001'),
('0004', '2022-07-02', '004', '001'),
('0005', '2022-07-02', '001', '003');

-- --------------------------------------------------------

--
-- Table structure for table `recep`
--

CREATE TABLE `recep` (
  `username` varchar(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recep`
--

INSERT INTO `recep` (`username`, `nama`, `password`) VALUES
('admin1', 'administrator1', '81dc'),
('admin2', 'administrator2', '81b0');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` varchar(3) NOT NULL,
  `nama_tamu` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kontak` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `alamat`, `kontak`) VALUES
('001', 'felix', 'panam', '081234567899'),
('002', 'bambang', 'garuda', '089643584286'),
('003', 'udin', 'ujungbatu', '082285446164'),
('004', 'putri', 'padang', '082379541939');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kd_kamar`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`kd_pesan`);

--
-- Indexes for table `recep`
--
ALTER TABLE `recep`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



