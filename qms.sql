-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 07:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `staff_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `staff_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `staff_pass` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `staff_email` varchar(155) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`staff_no`, `staff_name`, `staff_pass`, `staff_email`) VALUES
('a100', 'aqilah', 'abc123', 'aqilah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `auditee`
--

CREATE TABLE `auditee` (
  `auditee_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `auditee_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `auditee_pass` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `auditee_email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `jabatan_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auditee`
--

INSERT INTO `auditee` (`auditee_no`, `auditee_name`, `auditee_pass`, `auditee_email`, `jabatan_unit`) VALUES
('a900', 'sya', 'abc123', 'sya@gmail.com', 'fkab');

-- --------------------------------------------------------

--
-- Table structure for table `juruaudit`
--

CREATE TABLE `juruaudit` (
  `staff_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `staff_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `staff_pass` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `staff_email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `staff_noTel` varchar(15) NOT NULL,
  `staff_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `juruaudit`
--

INSERT INTO `juruaudit` (`staff_no`, `staff_name`, `staff_pass`, `staff_email`, `staff_noTel`, `staff_img`) VALUES
('a200', 'qila', 'abc123', 'qila@gmail.com', '+6012-3456711', ''),
('a400', 'fatima', 'abc123', 'fatima@gmail.com', '+6012-3456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `ketua_juruaudit`
--

CREATE TABLE `ketua_juruaudit` (
  `staff_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `staff_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `staff_pass` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `staff_email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `staff_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ketua_juruaudit`
--

INSERT INTO `ketua_juruaudit` (`staff_no`, `staff_name`, `staff_pass`, `staff_email`, `staff_img`) VALUES
('a300', 'syahirah', 'abc123', 'syahirah@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `fail_rujukan` varchar(255) NOT NULL,
  `klien` varchar(255) NOT NULL,
  `alamat_audit` text NOT NULL,
  `tarikh_audit` date NOT NULL,
  `tempoh` varchar(255) NOT NULL,
  `standard` varchar(255) NOT NULL,
  `rujukan` varchar(255) NOT NULL,
  `skop` text NOT NULL,
  `aktiviti_klien` text NOT NULL,
  `perubahan` text NOT NULL,
  `amalan_terbaik` text NOT NULL,
  `penilaian` text NOT NULL,
  `bil_ncr` varchar(255) NOT NULL,
  `bil_ofi` varchar(255) NOT NULL,
  `bil_jadual` varchar(255) NOT NULL,
  `rumusan` text NOT NULL,
  `cadangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`fail_rujukan`, `klien`, `alamat_audit`, `tarikh_audit`, `tempoh`, `standard`, `rujukan`, `skop`, `aktiviti_klien`, `perubahan`, `amalan_terbaik`, `penilaian`, `bil_ncr`, `bil_ofi`, `bil_jadual`, `rumusan`, `cadangan`) VALUES
('a1342', 'syahira', 'PUSAT JAMINAN KUALITI UNIVERSITI KEBANGSAAN MALAYSIA 43600 UKM BANGI SELANGOR DARUL EHSAN', '0000-00-00', '2 hari', 'MS ISO 9001: 2015', 'Dokumen Kualiti, Pensijilan ISO Prasiswazah dan Siswazah, Isu 04, Semakan 01 (www.ukm.my/spdukm)', '1. Reka Bentuk dan Pembangunan Program Pengajian Prasiswazah dan Siswazah\r\n2. Penyampaian Perkhidmatan Pengajaran dan \r\nPembelajaran Peringkat Prasiswazah dan \r\nSiswazah ', 'dfdfs', 'fsdfdsf', 'dsfdsf', 'dfssdf', '1', '', '', 'fsfsdff', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ncr`
--

CREATE TABLE `ncr` (
  `no_id` int(11) NOT NULL,
  `staff_no` varchar(255) NOT NULL,
  `no_audit` varchar(10) NOT NULL,
  `tarikh_audit` varchar(255) NOT NULL,
  `no_ncr` varchar(255) NOT NULL,
  `iso` varchar(255) DEFAULT NULL,
  `jabatan_unit` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `keperluan` text DEFAULT NULL,
  `penemuan` text DEFAULT NULL,
  `bukti_objektif` text DEFAULT NULL,
  `ketakakuran` text DEFAULT NULL,
  `pembetulan` text DEFAULT NULL,
  `tindakan` text DEFAULT NULL,
  `status` varchar(15) NOT NULL,
  `tindakankesan` varchar(255) DEFAULT NULL,
  `tindakantakkesan` varchar(255) DEFAULT NULL,
  `selesai` varchar(255) DEFAULT NULL,
  `belumselesai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ofi`
--

CREATE TABLE `ofi` (
  `no_id` int(11) NOT NULL,
  `klausa` varchar(255) NOT NULL,
  `jabatan_unit` varchar(255) NOT NULL,
  `perincian` text DEFAULT NULL,
  `susulan` text DEFAULT NULL,
  `tarikh_tindakan` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id` int(11) NOT NULL,
  `name` varchar(12) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `tarikh_upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`staff_no`);

--
-- Indexes for table `auditee`
--
ALTER TABLE `auditee`
  ADD PRIMARY KEY (`auditee_no`);

--
-- Indexes for table `juruaudit`
--
ALTER TABLE `juruaudit`
  ADD PRIMARY KEY (`staff_no`);

--
-- Indexes for table `ketua_juruaudit`
--
ALTER TABLE `ketua_juruaudit`
  ADD PRIMARY KEY (`staff_no`);

--
-- Indexes for table `ncr`
--
ALTER TABLE `ncr`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `ofi`
--
ALTER TABLE `ofi`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ncr`
--
ALTER TABLE `ncr`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=531;

--
-- AUTO_INCREMENT for table `ofi`
--
ALTER TABLE `ofi`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
