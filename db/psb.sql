-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 05:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `recover` varchar(20) DEFAULT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `recover`, `keterangan`) VALUES
(1, 'sman05', 'pass05', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_calon`
--

CREATE TABLE `data_calon` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `smp_asal` varchar(50) NOT NULL,
  `alamat_smp` varchar(100) NOT NULL,
  `un_total` varchar(5) NOT NULL,
  `nama_bpk` varchar(20) NOT NULL,
  `pendidikan_bpk` varchar(20) NOT NULL,
  `pekerjaan_bpk` varchar(20) NOT NULL,
  `penghasilan_bpk` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_ibu` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'no_image.png',
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_calon`
--

INSERT INTO `data_calon` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `kelamin`, `agama`, `telpon`, `smp_asal`, `alamat_smp`, `un_total`, `nama_bpk`, `pendidikan_bpk`, `pekerjaan_bpk`, `penghasilan_bpk`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `foto`, `email`, `password`, `tanggal`, `keterangan`, `status`) VALUES
(20, 'contoh', '123123', '0000-00-00', 'La', 'kristen', '23132134', 'adwwad', 'adwad', '2312', 'adwawddwa', 'SD', 'awdawd', '3-5 Juta', 'adwawdwda', 'S3', '1231312', '1-3 Juta', 'smiley-icon1.jpg', 'emailcontoh@gmail.com', 'password', '2018-02-14', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `tlp_operator` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `tgl_pendaftaran`, `tlp_operator`, `tanggal`) VALUES
(1, '2018-03-19', '088888888', '2018-02-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_calon`
--
ALTER TABLE `data_calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_calon`
--
ALTER TABLE `data_calon`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
