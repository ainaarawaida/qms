-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2021 at 02:28 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

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
  `keperluan` text,
  `penemuan` text,
  `bukti_objektif` text,
  `ketakakuran` text,
  `pembetulan` text,
  `tindakan` text,
  `status` varchar(15) NOT NULL,
  `tindakankesan` varchar(255) DEFAULT NULL,
  `tindakantakkesan` varchar(255) DEFAULT NULL,
  `selesai` varchar(255) DEFAULT NULL,
  `belumselesai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ncr`
--

INSERT INTO `ncr` (`no_id`, `staff_no`, `no_audit`, `tarikh_audit`, `no_ncr`, `iso`, `jabatan_unit`, `dokumen`, `keperluan`, `penemuan`, `bukti_objektif`, `ketakakuran`, `pembetulan`, `tindakan`, `status`, `tindakankesan`, `tindakantakkesan`, `selesai`, `belumselesai`) VALUES
(531, 'a300', 'dsds', 'dsds', 'ds', 'dsd', 'sdsds', 'dsd', 'sds', 'dsds', 'dsds', '', '', '', 'post', '', '', '', ''),
(532, '', 'ds', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(533, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(534, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(535, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(536, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(537, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(538, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(539, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(540, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(541, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(542, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(543, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(544, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(545, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(546, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(547, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(548, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(549, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(550, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(551, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(552, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(553, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(554, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(555, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(556, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(557, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(558, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(559, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(560, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(561, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(562, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(563, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(564, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(565, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(566, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(567, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(568, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(569, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(570, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(571, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(572, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(573, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(574, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(575, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(576, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(577, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(578, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(579, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(580, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(581, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(582, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(583, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(584, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(585, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(586, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(587, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(588, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(589, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(590, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(591, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(592, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(593, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(594, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(595, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(596, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(597, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(598, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(599, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(600, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(601, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(602, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(603, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(604, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(605, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(606, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(607, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(608, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(609, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(610, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(611, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(612, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(613, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(614, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(615, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(616, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(617, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(618, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(619, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(620, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(621, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(622, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(623, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(624, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(625, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(626, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(627, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(628, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(629, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(630, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(631, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(632, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(633, 'a200', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(634, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(635, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(636, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(637, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(638, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(639, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(640, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(641, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(642, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(643, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(644, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(645, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(646, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(647, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(648, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(649, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(650, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(651, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(652, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(653, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(654, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(655, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(656, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', ''),
(657, 'a300', '', '', '', '', '', '', '', '', '', '', '', '', 'draf', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ofi`
--

CREATE TABLE `ofi` (
  `no_id` int(11) NOT NULL,
  `klausa` varchar(255) NOT NULL,
  `jabatan_unit` varchar(255) NOT NULL,
  `perincian` text,
  `susulan` text,
  `tarikh_tindakan` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `staff_no` varchar(100) DEFAULT NULL,
  `data` text,
  `user_type` varchar(100) DEFAULT NULL,
  `hantar_ke` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ofi`
--

INSERT INTO `ofi` (`no_id`, `klausa`, `jabatan_unit`, `perincian`, `susulan`, `tarikh_tindakan`, `status`, `staff_no`, `data`, `user_type`, `hantar_ke`) VALUES
(44, '', '', '', '', '', 'post', 'a300', 'a:9:{s:8:\"staff_no\";s:4:\"a300\";s:3:\"bil\";a:2:{i:1;s:1:\"1\";i:2;s:1:\"2\";}s:6:\"klausa\";a:2:{i:1;s:3:\"vcv\";i:2;s:0:\"\";}s:9:\"perincian\";a:2:{i:1;s:4:\"cvcx\";i:2;s:0:\"\";}s:7:\"susulan\";a:1:{i:1;s:6:\"vxcvxc\";}s:15:\"tarikh_tindakan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:16:\"tindakan_susulan\";a:1:{i:2;s:0:\"\";}s:6:\"Hantar\";s:6:\"Hantar\";s:9:\"user_type\";s:14:\"ketuajuruaudit\";}', 'ketuajuruaudit', NULL),
(45, '', '', '', '', '', 'draf', 'a200', 'a:10:{s:8:\"staff_no\";s:4:\"a400\";s:5:\"no_id\";s:2:\"45\";s:3:\"bil\";a:2:{i:1;s:1:\"1\";i:2;s:1:\"2\";}s:6:\"klausa\";a:2:{i:1;s:4:\"dsds\";i:2;s:4:\"cdcx\";}s:9:\"perincian\";a:2:{i:1;s:4:\"dsds\";i:2;s:5:\"cxcxc\";}s:7:\"susulan\";a:2:{i:1;s:5:\"dsdsd\";i:2;s:0:\"\";}s:15:\"tarikh_tindakan\";a:2:{i:1;s:10:\"2021-05-11\";i:2;s:0:\"\";}s:6:\"Simpan\";s:6:\"Simpan\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(46, '', '', '', '', '', 'post', 'a200', 'a:10:{s:8:\"staff_no\";s:4:\"a400\";s:5:\"no_id\";s:2:\"46\";s:3:\"bil\";a:2:{i:1;s:1:\"1\";i:2;s:1:\"2\";}s:6:\"klausa\";a:2:{i:1;s:5:\"fdfsf\";i:2;s:4:\"fsdf\";}s:9:\"perincian\";a:2:{i:1;s:6:\"sdfsdf\";i:2;s:5:\"sdfsd\";}s:7:\"susulan\";a:2:{i:1;s:6:\"sdfsdf\";i:2;s:0:\"\";}s:15:\"tarikh_tindakan\";a:2:{i:1;s:10:\"2021-05-21\";i:2;s:10:\"2021-05-12\";}s:6:\"Hantar\";s:6:\"Hantar\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(47, '', '', '', '', '', 'draf', 'a300', 'a:9:{s:8:\"staff_no\";s:4:\"a300\";s:3:\"bil\";a:3:{i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";}s:6:\"klausa\";a:3:{i:1;s:6:\"dsdsds\";i:2;s:6:\"dsdsds\";i:3;s:0:\"\";}s:9:\"perincian\";a:3:{i:1;s:3:\"dsd\";i:2;s:4:\"dsds\";i:3;s:0:\"\";}s:7:\"susulan\";a:1:{i:1;s:0:\"\";}s:15:\"tarikh_tindakan\";a:3:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}s:16:\"tindakan_susulan\";a:2:{i:2;s:0:\"\";i:3;s:0:\"\";}s:6:\"Simpan\";s:6:\"Simpan\";s:9:\"user_type\";s:14:\"ketuajuruaudit\";}', 'ketuajuruaudit', NULL),
(48, '', '', '', '', '', 'draf', 'a300', 'a:8:{s:8:\"staff_no\";s:4:\"a300\";s:3:\"bil\";a:1:{i:1;s:1:\"1\";}s:6:\"klausa\";a:1:{i:1;s:2:\"ds\";}s:9:\"perincian\";a:1:{i:1;s:4:\"dsds\";}s:7:\"susulan\";a:1:{i:1;s:0:\"\";}s:15:\"tarikh_tindakan\";a:1:{i:1;s:0:\"\";}s:6:\"Simpan\";s:6:\"Simpan\";s:9:\"user_type\";s:14:\"ketuajuruaudit\";}', 'ketuajuruaudit', NULL),
(49, '', '', '', '', '', 'post', 'a300', 'a:9:{s:8:\"staff_no\";s:4:\"a300\";s:3:\"bil\";a:1:{i:1;s:1:\"1\";}s:6:\"klausa\";a:1:{i:1;s:3:\"dsd\";}s:9:\"perincian\";a:1:{i:1;s:3:\"sds\";}s:7:\"susulan\";a:1:{i:1;s:0:\"\";}s:15:\"tarikh_tindakan\";a:1:{i:1;s:0:\"\";}s:6:\"Hantar\";s:6:\"Hantar\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:14:\"ketuajuruaudit\";}', 'ketuajuruaudit', NULL),
(53, '', '', '', '', '', 'draf', 'a200', 'a:10:{s:8:\"staff_no\";s:4:\"a400\";s:5:\"no_id\";s:2:\"53\";s:3:\"bil\";a:2:{i:1;s:1:\"1\";i:2;s:1:\"2\";}s:6:\"klausa\";a:2:{i:1;s:6:\"grtret\";i:2;s:5:\"trgtr\";}s:9:\"perincian\";a:2:{i:1;s:3:\"try\";i:2;s:7:\"henshin\";}s:7:\"susulan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:15:\"tarikh_tindakan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:6:\"Simpan\";s:6:\"Simpan\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(55, '', '', '', '', '', 'draf', 'a400', 'a:10:{s:8:\"staff_no\";s:4:\"a400\";s:5:\"no_id\";s:2:\"55\";s:3:\"bil\";a:2:{i:1;s:1:\"1\";i:2;s:1:\"2\";}s:6:\"klausa\";a:2:{i:1;s:5:\"gergr\";i:2;s:4:\"trgr\";}s:9:\"perincian\";a:2:{i:1;s:6:\"gtrgtr\";i:2;s:7:\"tyrytrf\";}s:7:\"susulan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:15:\"tarikh_tindakan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:6:\"Simpan\";s:6:\"Simpan\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(56, '', '', '', '', '', 'draf', 'a400', 'a:9:{s:8:\"staff_no\";s:4:\"a400\";s:3:\"bil\";a:1:{i:1;s:1:\"1\";}s:6:\"klausa\";a:1:{i:1;s:7:\"hgvjhvv\";}s:9:\"perincian\";a:1:{i:1;s:8:\"yfyughjg\";}s:7:\"susulan\";a:1:{i:1;s:0:\"\";}s:15:\"tarikh_tindakan\";a:1:{i:1;s:0:\"\";}s:6:\"Simpan\";s:6:\"Simpan\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(57, '', '', '', '', '', 'post', 'a400', 'a:9:{s:8:\"staff_no\";s:4:\"a400\";s:3:\"bil\";a:1:{i:1;s:1:\"1\";}s:6:\"klausa\";a:1:{i:1;s:0:\"\";}s:9:\"perincian\";a:1:{i:1;s:0:\"\";}s:7:\"susulan\";a:1:{i:1;s:0:\"\";}s:15:\"tarikh_tindakan\";a:1:{i:1;s:0:\"\";}s:6:\"Hantar\";s:6:\"Hantar\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(58, '', '', '', '', '', 'post', 'a400', 'a:10:{s:8:\"staff_no\";s:4:\"a400\";s:5:\"no_id\";s:2:\"58\";s:3:\"bil\";a:2:{i:1;s:1:\"1\";i:2;s:1:\"2\";}s:6:\"klausa\";a:2:{i:1;s:7:\"fdfdsds\";i:2;s:0:\"\";}s:9:\"perincian\";a:2:{i:1;s:13:\"dfdfdfddsdsds\";i:2;s:0:\"\";}s:7:\"susulan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:15:\"tarikh_tindakan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:6:\"Hantar\";s:6:\"Hantar\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(59, '', '', '', '', '', 'post', 'a400', 'a:9:{s:8:\"staff_no\";s:4:\"a400\";s:3:\"bil\";a:1:{i:1;s:1:\"1\";}s:6:\"klausa\";a:1:{i:1;s:6:\"dsdsds\";}s:9:\"perincian\";a:1:{i:1;s:4:\"dsds\";}s:7:\"susulan\";a:1:{i:1;s:0:\"\";}s:15:\"tarikh_tindakan\";a:1:{i:1;s:0:\"\";}s:6:\"Hantar\";s:6:\"Hantar\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(60, '', '', '', '', '', 'post', 'a400', 'a:10:{s:8:\"staff_no\";s:4:\"a400\";s:5:\"no_id\";s:2:\"60\";s:3:\"bil\";a:2:{i:1;s:1:\"1\";i:2;s:1:\"2\";}s:6:\"klausa\";a:2:{i:1;s:9:\"klausa509\";i:2;s:9:\"klausa376\";}s:9:\"perincian\";a:2:{i:1;s:8:\"rghrthty\";i:2;s:8:\"rgertgrh\";}s:7:\"susulan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:15:\"tarikh_tindakan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:6:\"Hantar\";s:6:\"Hantar\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(61, '', '', '', '', '', 'draf', 'a400', 'a:10:{s:8:\"staff_no\";s:4:\"a400\";s:5:\"no_id\";s:2:\"61\";s:3:\"bil\";a:2:{i:1;s:1:\"1\";i:2;s:1:\"2\";}s:6:\"klausa\";a:2:{i:1;s:9:\"klausa657\";i:2;s:9:\"klausa905\";}s:9:\"perincian\";a:2:{i:1;s:6:\"fghfgh\";i:2;s:6:\"ghjhuk\";}s:7:\"susulan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:15:\"tarikh_tindakan\";a:2:{i:1;s:0:\"\";i:2;s:0:\"\";}s:6:\"Simpan\";s:6:\"Simpan\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900'),
(63, '', '', '', '', '', 'draf', 'a400', 'a:10:{s:8:\"staff_no\";s:4:\"a400\";s:5:\"no_id\";s:2:\"63\";s:3:\"bil\";a:3:{i:1;s:1:\"1\";i:2;s:1:\"2\";i:3;s:1:\"3\";}s:6:\"klausa\";a:3:{i:1;s:4:\"dsds\";i:2;s:6:\"dsdddd\";i:3;s:0:\"\";}s:9:\"perincian\";a:3:{i:1;s:8:\"dsdswwww\";i:2;s:7:\"sdsdsds\";i:3;s:0:\"\";}s:7:\"susulan\";a:3:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}s:15:\"tarikh_tindakan\";a:3:{i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}s:6:\"Simpan\";s:6:\"Simpan\";s:9:\"hantar_ke\";s:4:\"a900\";s:9:\"user_type\";s:9:\"juruaudit\";}', 'juruaudit', 'a900');

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
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=658;

--
-- AUTO_INCREMENT for table `ofi`
--
ALTER TABLE `ofi`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
