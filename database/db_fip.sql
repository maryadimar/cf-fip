-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 01:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lidah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `idgejala` int(1) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(12) NOT NULL,
  `nama_gejala` text NOT NULL,
  PRIMARY KEY (`idgejala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`idgejala`, `kode_gejala`, `nama_gejala`) VALUES
(1, 'G001', 'Bersin-bersin'),
(2, 'G002', 'Mata berair'),
(3, 'G003', 'Lendir hidung yang berlebihan'),
(4, 'G004', 'Diare'),
(5, 'G005', 'Berat badan berkurang'),
(6, 'G006', 'Lemah dan lesu'),
(7, 'G007', 'Hilang nafsu makan'),
(8, 'G008', 'Depresi'),
(9, 'G009', 'Bulu rontok'),
(10, 'G010', 'Demam'),
(11, 'G011', 'Kesulitan bernafas'),
(12, 'G012', 'Cara berjalan tidak stabil'),
(13, 'G013', 'Kejang-kejang'),
(14, 'G014', 'Muntah-muntah'),
(15, 'G015', 'Badan kurus tetapi perut buncit'),
(16, 'G016', 'Daerah sekitar perut menghitam');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `idkomentar` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggalkomentar` datetime NOT NULL,
  PRIMARY KEY (`idkomentar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `komentar`
--


-- --------------------------------------------------------

--
-- Table structure for table `konsulsimpan`
--

CREATE TABLE IF NOT EXISTS `konsulsimpan` (
  `username` varchar(30) NOT NULL,
  `tglkonsul` date NOT NULL,
  `cf` double NOT NULL,
  `nama_penyakit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsulsimpan`
--

INSERT INTO `konsulsimpan` (`username`, `tglkonsul`, `cf`, `nama_penyakit`) VALUES
('', '2016-06-06', 0.255, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.24, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.06, 'Arthritis Gout'),
('', '2016-06-06', 0.255, 'Arthritis Gout'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.06, 'Arthritis Gout'),
('', '2016-06-06', 0.255, 'Arthritis Gout'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.06, 'Arthritis Gout'),
('', '2016-06-06', 0.255, 'Arthritis Gout'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.06, 'Arthritis Gout'),
('', '2016-06-06', 0.255, 'Arthritis Gout'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.06, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.06, 'Arthritis Gout'),
('', '2016-06-06', 0.255, 'Arthritis Gout'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.06, 'Osteoarthritis'),
('', '2016-06-06', 0.075, 'Osteoarthritis'),
('', '2016-06-06', 0, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.06, 'Arthritis Gout'),
('', '2016-06-06', 0.255, 'Arthritis Gout'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.06, 'Osteoarthritis'),
('', '2016-06-06', 0.075, 'Osteoarthritis'),
('', '2016-06-06', 0.08, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.06, 'Arthritis Gout'),
('', '2016-06-06', 0.255, 'Arthritis Gout'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.06, 'Osteoarthritis'),
('', '2016-06-06', 0.075, 'Osteoarthritis'),
('', '2016-06-06', 0.08, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Osteoarthritis'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.06, 'Arthritis Gout'),
('', '2016-06-06', 0.255, 'Arthritis Gout'),
('', '2016-06-06', 0.21, 'Arthritis Gout'),
('', '2016-06-06', 0.85, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.8, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.75, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.6, 'Osteoarthritis'),
('', '2016-06-06', 0.75, 'Osteoarthritis'),
('', '2016-06-06', 0.8, 'Osteoarthritis'),
('', '2016-06-06', 0.7, 'Osteoarthritis'),
('', '2016-06-06', 0.7, 'Arthritis Gout'),
('', '2016-06-06', 0.6, 'Arthritis Gout'),
('', '2016-06-06', 0.85, 'Arthritis Gout'),
('', '2016-06-06', 0.7, 'Arthritis Gout'),
('', '2016-06-06', 0.85, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.8, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.75, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.6, 'Osteoarthritis'),
('', '2016-06-06', 0.75, 'Osteoarthritis'),
('', '2016-06-06', 0.8, 'Osteoarthritis'),
('', '2016-06-06', 0.7, 'Osteoarthritis'),
('', '2016-06-06', 0.7, 'Arthritis Gout'),
('', '2016-06-06', 0.6, 'Arthritis Gout'),
('', '2016-06-06', 0.85, 'Arthritis Gout'),
('', '2016-06-06', 0.7, 'Arthritis Gout'),
('', '2016-06-06', 0.85, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.8, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.75, ' Arthritis Rheumatoid'),
('', '2016-06-06', 0.6, 'Osteoarthritis'),
('', '2016-06-06', 0.75, 'Osteoarthritis'),
('', '2016-06-06', 0.8, 'Osteoarthritis'),
('', '2016-06-06', 0.7, 'Osteoarthritis'),
('', '2016-06-06', 0.7, 'Arthritis Gout'),
('', '2016-06-06', 0.6, 'Arthritis Gout'),
('', '2016-06-06', 0.85, 'Arthritis Gout'),
('', '2016-06-06', 0.7, 'Arthritis Gout'),
('', '2016-06-10', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-10', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-10', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-10', 0.17, ' Arthritis Rheumatoid'),
('', '2016-06-10', 0.16, ' Arthritis Rheumatoid'),
('', '2016-06-10', 0.15, ' Arthritis Rheumatoid'),
('', '2016-06-10', 0.07, 'Arthritis Gout'),
('', '2016-06-10', 0.14, 'Osteoarthritis'),
('', '2016-06-17', 0.85, ' Arthritis Rheumatoid'),
('', '2016-06-20', 0.68, ' Arthritis Rheumatoid'),
('', '2016-06-20', 0.4, ' Arthritis Rheumatoid'),
('', '2016-06-20', 0.375, ' Arthritis Rheumatoid'),
('', '2016-06-20', 0.18, 'Candidiasis'),
('', '2016-06-20', 0.175, 'Candidiasis'),
('', '2016-06-22', 0.8, 'Candidiasis'),
('', '2016-06-22', 0.6, 'Candididasis'),
('', '2016-06-25', 0.66, 'Linear Gingival Erythema'),
('', '2016-06-25', 0.6, 'Linear Gingival Erythema'),
('', '2016-06-25', 0.66, 'Linear Gingival Erythema'),
('', '2016-06-25', 0.6, 'Linear Gingival Erythema'),
('', '2016-06-25', 0.68, 'Hairy Leukoplakia'),
('', '2016-06-25', 0.45, 'Hairy Leukoplakia'),
('', '2016-06-25', 0.2, 'Hairy Leukoplakia'),
('', '2016-06-27', 0.68, 'Hairy Leukoplakia'),
('', '2016-06-27', 0.45, 'Hairy Leukoplakia'),
('', '2016-06-27', 0.2, 'Hairy Leukoplakia'),
('', '2016-06-27', 0.68, 'Hairy Leukoplakia'),
('', '2016-06-27', 0.45, 'Hairy Leukoplakia'),
('', '2016-06-27', 0.2, 'Hairy Leukoplakia'),
('', '2016-06-27', 0.24, 'Candidiasis'),
('', '2016-06-27', 0.12, 'Candididasis'),
('', '2016-06-27', 0.24, 'Candidiasis'),
('', '2016-06-27', 0.06, 'Candididasis'),
('', '2016-06-27', 0.33, 'Linear Gingival Erythema'),
('', '2016-06-27', 0.3, 'Linear Gingival Erythema'),
('', '2016-06-29', 0.544, 'Hairy Leukoplakia'),
('', '2016-06-29', 0.36, 'Hairy Leukoplakia'),
('', '2016-06-29', 0.2, 'Hairy Leukoplakia'),
('', '2016-11-11', 0.85, 'Geographic Tongue'),
('', '2016-11-11', 0.8, 'Geographic Tongue'),
('', '2016-11-11', 0.7, 'Geographic Tongue'),
('', '2016-11-11', 0.85, 'Geographic Tongue'),
('', '2016-11-11', 0.8, 'Geographic Tongue'),
('', '2016-11-11', 0.7, 'Geographic Tongue'),
('', '2016-11-11', 0.85, 'Geographic Tongue'),
('', '2016-11-11', 0.7, 'Geographic Tongue'),
('', '2016-11-13', 0.65, 'Coated Tongue'),
('', '2016-11-13', 0.55, 'Coated Tongue'),
('', '2016-11-13', 0.65, 'Coated Tongue'),
('', '2016-11-13', 0.55, 'Coated Tongue'),
('', '2016-11-13', 0.65, 'Coated Tongue'),
('', '2016-11-13', 0.55, 'Coated Tongue'),
('', '2016-11-13', 0, 'Median Rhomboid Glossitis'),
('', '2016-11-13', 0, 'Median Rhomboid Glossitis'),
('', '2016-11-26', 0.85, 'Geographic Tongue'),
('', '2016-11-26', 0.7, 'Geographic Tongue'),
('', '2016-11-26', 0.85, 'Geographic Tongue'),
('', '2016-11-26', 0.7, 'Geographic Tongue'),
('', '2016-11-28', 0.85, 'Geographic Tongue'),
('', '2016-11-28', 0.7, 'Geographic Tongue'),
('', '2016-12-05', 0.85, 'Geographic Tongue'),
('', '2016-12-05', 0.7, 'Geographic Tongue'),
('', '2016-12-05', 0.65, 'Coated Tongue'),
('', '2016-12-05', 0.55, 'Coated Tongue'),
('', '2016-12-05', 0.85, 'Geographic Tongue'),
('', '2016-12-05', 0.7, 'Geographic Tongue');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE IF NOT EXISTS `konsultasi` (
  `id_konsul` int(11) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(12) NOT NULL,
  `cf` double NOT NULL,
  PRIMARY KEY (`id_konsul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `konsultasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `umur` varchar(5) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `umur`) VALUES
(10, 'rudi', '12345', 'andri', 'L', 'lubeg', '22');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE IF NOT EXISTS `solusi` (
  `idsolusi` int(12) NOT NULL AUTO_INCREMENT,
  `kode_solusi` varchar(12) NOT NULL,
  `nama_solusi` text NOT NULL,
  PRIMARY KEY (`idsolusi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`idsolusi`, `kode_solusi`, `nama_solusi`) VALUES
(1, 'S001', 'Menggunakan vaksin sesuai anjuran dokter'),
(2, 'S002', 'Menjaga kebersihan kandang dan peralatan makan'),
(3, 'S003', 'Memandikan kucing secara rutin'),
(4, 'S004', 'Menjaga pola makan '),
(5, 'S005', 'Hindarkan dari kontaminasi dari tikus dan sejenisnya'),
(6, 'S006', 'Konsultasi pada dokter');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `status` text NOT NULL,
  `tanggalpos` datetime NOT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idstatus`, `username`, `status`, `tanggalpos`) VALUES
(2, 'rudi', 'thanks', '2016-12-06 02:21:48');
