-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2015 at 04:45 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `in_out_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` varchar(100) NOT NULL,
  `adminIC` varchar(100) NOT NULL,
  `adminJabatan` varchar(100) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminNoTel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminIC`, `adminJabatan`, `adminEmail`, `adminNoTel`) VALUES
('', '', '', '', ''),
('2011876014', '930310-03-5921', 'Jabatan 2', 'wwww@yahoo', '014-5037993'),
('admin1', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `anggotaID` varchar(50) NOT NULL,
  `anggotaIC` varchar(50) NOT NULL,
  `anggotaJabatan` varchar(100) NOT NULL,
  `anggotaEmail` varchar(100) NOT NULL,
  `anggotaNoTel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`anggotaID`, `anggotaIC`, `anggotaJabatan`, `anggotaEmail`, `anggotaNoTel`) VALUES
('staftry', '930310-03-5921', 'Jabatan 2', 'faqih94@yahoo.com', '014-5037993'),
('2011876014', '930310-03-5921', 'Jabatan 7', 'ridhzii94@yahoo.com', '014-5037993');

-- --------------------------------------------------------

--
-- Table structure for table `aras`
--

CREATE TABLE IF NOT EXISTS `aras` (
  `arasId` int(5) NOT NULL,
  `arasNama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aras`
--


-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `hubungiNo` int(15) NOT NULL,
  `hubungiNama` varchar(100) NOT NULL,
  `hubungiEmail` varchar(100) NOT NULL,
  `hubungiMesej` text NOT NULL,
  `hubungiStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubungi`
--


-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `jabatanNo` int(3) NOT NULL,
  `jabatanNama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`jabatanNo`, `jabatanNama`) VALUES
(1, '1'),
(2, '2'),
(3, '3');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `penggunaID` varchar(50) NOT NULL,
  `penggunaKatalaluan` varchar(50) NOT NULL,
  `penggunaNama` text NOT NULL,
  `penggunaJawatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`penggunaID`, `penggunaKatalaluan`, `penggunaNama`, `penggunaJawatan`) VALUES
('admin', 'admin ', 'ridhwan', 'admin'),
('staf1', 'staf', 'staf', 'anggota'),
('staftry', 'staftry', 'Ahmad Faqif Fahmi', 'anggota'),
('staf1', 'saya1', 'firdaus', 'anggota'),
('2011876014', 'wan', 'ridhwan', 'anggota');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `statusTarikh` date NOT NULL,
  `anggotaNama` varchar(100) NOT NULL,
  `statusTujuan` text NOT NULL,
  `statusKeluar` time NOT NULL,
  `statusMasuk` time NOT NULL,
  `statusKebenaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusTarikh`, `anggotaNama`, `statusTujuan`, `statusKeluar`, `statusMasuk`, `statusKebenaran`) VALUES
('2015-02-28', 'root@localhost', '', '00:00:00', '00:00:00', 'Aku'),
('0000-00-00', '', '', '00:00:00', '00:00:00', 'statusKebenaran'),
('0000-00-00', '', '', '00:00:00', '00:00:00', 'statusKebenaran'),
('0000-00-00', '', '', '00:00:00', '00:00:00', 'statusKebenaran'),
('0000-00-00', '', '', '00:00:00', '00:00:00', 'statusKebenaran');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
