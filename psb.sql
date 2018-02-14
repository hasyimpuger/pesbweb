-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 04:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `recover` varchar(20) DEFAULT NULL,
  `keterangan` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `recover`, `keterangan`) VALUES
(1, 'sman05', 'pass05', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_calon`
--

CREATE TABLE IF NOT EXISTS `data_calon` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
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
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `data_calon`
--

INSERT INTO `data_calon` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `kelamin`, `agama`, `telpon`, `smp_asal`, `alamat_smp`, `un_total`, `nama_bpk`, `pendidikan_bpk`, `pekerjaan_bpk`, `penghasilan_bpk`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `foto`, `email`, `password`, `tanggal`, `keterangan`, `status`) VALUES
(1, 'adawd', 'a1231awdaw', '2016-05-12', 'L', 'islam', '213123124', 'adadwa', 'adawda', 'awdwa', 'adawd', 'SD', 'adwwad', '< 1 juta', 'adawdwa', 'SD', 'awdawdaw', 'adawdawda', 'no-image.png', 'contohnya@gmail.com', 'password', '2016-05-07', '', ''),
(18, 'qdqdwdq', 'qdwqdq', '2016-05-17', 'P', 'budha', 'awdawdwa', 'awdawdwa', 'awdawdwa', 'awdaw', 'awdawdaw', 'S3', 'awdwdawda', '< 1 juta', 'adawd', 'SMP', 'awdwadaw', '1-3 Juta', 'e-learning8.png', 'contoh2@gmail.com', 'password', '2016-05-11', '', ''),
(19, 'Faris Irfan', 'Lubuk Alung', '1993-07-21', 'L', 'islam', '085363978728', 'SMPN 01 Lubuk Alung', 'Lubuk Alung', '21312', 'Bapak Saya', 'S1', 'PNS', '1-3 Juta', 'Ibu Saya', 'SMA', 'Rumah Tangga', '< 1 juta', 'FARIS_IRFAN.jpg', 'emailgue@gmail.com', 'passwordq', '2016-05-13', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
