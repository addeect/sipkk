-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 27 Jan 2015 pada 06.22
-- Versi Server: 5.5.36-cll-lve
-- Versi PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `qualityg_prpl3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `BAGIAN`
--

CREATE TABLE IF NOT EXISTS `BAGIAN` (
  `ID_BAGIAN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_BAGIAN` varchar(20) DEFAULT NULL,
  `TGL_ENTRI_BAG` date NOT NULL,
  `STS_BAG` int(11) NOT NULL,
  PRIMARY KEY (`ID_BAGIAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `BAGIAN`
--

INSERT INTO `BAGIAN` (`ID_BAGIAN`, `NAMA_BAGIAN`, `TGL_ENTRI_BAG`, `STS_BAG`) VALUES
(1, 'Mixing', '2015-01-11', 1),
(2, 'Furnace', '2015-01-11', 1),
(3, 'Produksi', '2015-01-11', 1),
(4, 'Design', '2015-01-11', 1),
(5, 'Printing', '2015-01-11', 1),
(6, 'Mould Shop', '2015-01-11', 1),
(7, 'IT', '2015-01-11', 1),
(8, 'Pemasaran', '2015-01-20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `BOBOT`
--

CREATE TABLE IF NOT EXISTS `BOBOT` (
  `ID_BOBOT` int(11) NOT NULL AUTO_INCREMENT,
  `B_TEKNIK_SKILL` decimal(8,2) DEFAULT NULL,
  `B_PERSONALITY` decimal(8,2) DEFAULT NULL,
  `B_ABSENSI` decimal(8,2) DEFAULT NULL,
  `B_SANKSI` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`ID_BOBOT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `BOBOT`
--

INSERT INTO `BOBOT` (`ID_BOBOT`, `B_TEKNIK_SKILL`, `B_PERSONALITY`, `B_ABSENSI`, `B_SANKSI`) VALUES
(1, '0.40', '0.35', '0.15', '0.10'),
(2, '0.40', '0.35', '0.15', '0.10'),
(3, '0.40', '0.35', '0.15', '0.10'),
(4, '0.35', '0.35', '0.20', '0.10'),
(5, '0.30', '0.35', '0.25', '0.10'),
(6, '0.35', '0.35', '0.20', '0.10'),
(7, '0.40', '0.35', '0.15', '0.10'),
(8, '0.30', '0.35', '0.25', '0.10'),
(9, '0.35', '0.35', '0.20', '0.10'),
(10, '0.40', '0.35', '0.15', '0.10'),
(11, '0.36', '0.35', '0.19', '0.10'),
(12, '0.40', '0.35', '0.15', '0.10'),
(13, '0.35', '0.35', '0.20', '0.10'),
(14, '0.30', '0.35', '0.25', '0.10'),
(15, '0.35', '0.35', '0.20', '0.10'),
(16, '0.40', '0.35', '0.15', '0.10'),
(17, '0.50', '0.25', '0.15', '0.10'),
(18, '0.45', '0.30', '0.15', '0.10'),
(19, '0.45', '0.30', '0.25', '0.10'),
(20, '0.45', '0.30', '0.15', '0.10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `JABATAN`
--

CREATE TABLE IF NOT EXISTS `JABATAN` (
  `ID_JABATAN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_JABATAN` varchar(20) DEFAULT NULL,
  `TGL_ENTRI_JAB` date NOT NULL,
  `STS_JAB` int(11) NOT NULL,
  PRIMARY KEY (`ID_JABATAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `JABATAN`
--

INSERT INTO `JABATAN` (`ID_JABATAN`, `NAMA_JABATAN`, `TGL_ENTRI_JAB`, `STS_JAB`) VALUES
(1, 'Operator', '2015-01-11', 1),
(2, 'Supervisor', '2015-01-11', 1),
(3, 'Kepala Regu', '2015-01-11', 1),
(4, 'Kepala Sie', '2015-01-11', 1),
(5, 'Kepala Departemen', '2015-01-11', 1),
(6, 'Staff', '2015-01-11', 1),
(7, 'Anggota', '2015-01-16', 1),
(8, 'Direktur', '2015-01-21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `KARYAWAN`
--

CREATE TABLE IF NOT EXISTS `KARYAWAN` (
  `NIK` char(20) NOT NULL,
  `ID_JABATAN` int(11) DEFAULT NULL,
  `ID_BAGIAN` int(11) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(500) DEFAULT NULL,
  `JK` varchar(1) DEFAULT NULL,
  `TELP` varchar(20) DEFAULT NULL,
  `TGL_MASUK` date NOT NULL,
  `STS_KAR` int(11) NOT NULL,
  PRIMARY KEY (`NIK`),
  KEY `FK_DITEMPATKAN` (`ID_BAGIAN`),
  KEY `FK_MENJABAT` (`ID_JABATAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `KARYAWAN`
--

INSERT INTO `KARYAWAN` (`NIK`, `ID_JABATAN`, `ID_BAGIAN`, `NAMA`, `ALAMAT`, `JK`, `TELP`, `TGL_MASUK`, `STS_KAR`) VALUES
('0004', 1, 5, 'Fukimani', 'Jl. Ebiquitosi No.87', 'L', '098644638823', '2015-01-16', 1),
('0005', 1, 3, 'Bayu', 'Jl. Tenggilis Sari No.4', 'L', '082237423', '2015-01-11', 1),
('0006', 1, 2, 'Jojo', 'Jl. Tenggilis Sari No.5', 'L', '079237463', '2015-01-11', 1),
('0007', 1, 2, 'Fendi', 'Jl. Tenggilis Sari No.6', 'L', '071237463', '2015-01-11', 1),
('0008', 1, 2, 'Rudi', 'Jl. Tenggilis Sari No.6', 'L', '072237463', '2015-01-11', 1),
('0009', 1, 2, 'Hadi', 'Jl. Tenggilis Sari No.7', 'L', '082237463', '2015-01-11', 1),
('0010', 1, 1, 'Kusumo', 'Jl. Tenggilis Sari No.8', 'L', '081237463', '2015-01-11', 1),
('0011', 1, 1, 'Sumitro', 'Jl. Tenggilis Sari No.9', 'L', '08837463', '2015-01-11', 1),
('0012', 1, 1, 'Nyoman', 'Jl. Tenggilis Sari No.10', 'L', '08937463', '2015-01-11', 1),
('0013', 1, 1, 'Supri', 'Jl. Tenggilis Sari No.1', 'L', '08737463', '2015-01-11', 1),
('0014', 1, 1, 'Tejo', 'Jl. Tenggilis Sari No.2', 'L', '06737463', '2015-01-11', 1),
('0015', 1, 1, 'Parno', 'Jl. Tenggilis Sari No.3', 'L', '06738463', '2015-01-11', 1),
('1001', 2, 1, 'Andy', 'Jl. Nutri Sari No.3', 'L', '0821356635', '2014-12-15', 1),
('1002', 5, 3, 'Ichijou', 'Jl. Gunung Sari No.3', 'L', '0811356635', '2013-12-15', 1),
('2005', 6, 7, 'Kirisaki', 'Jl. Nutri Sari No.15', 'P', '08332562311', '2015-01-11', 1),
('2034', 2, 4, 'Deni', 'Jl. Sidoarjo Raya No. 66', 'L', '08883547366', '2015-01-16', 1),
('2161', 1, 1, 'Tejo', 'Jl. Kaliwungu No. 85', 'L', '089944563342', '2015-01-16', 1),
('22151', 2, 2, 'Wikan', 'Jl. Pari 3 Sidoarjo', 'L', '085674326789', '2015-01-22', 1),
('3010', 1, 3, 'Archam', 'Surabaya', 'L', '0899267227', '2015-01-22', 1),
('31152', 1, 3, 'Priyanggoro', 'Jl. Buduran No.13 Sidoarjo', 'L', '0876534567', '2015-01-22', 1),
('31153', 1, 3, 'Bima', 'Jl. Baruk Nirwana No.36 Surabaya', 'L', '08123321123', '2015-01-22', 1),
('32151', 2, 3, 'Wahyu', 'Jl. Candiloka No.14 Sidoarjo', 'L', '085674639876', '2015-01-22', 1),
('35152', 5, 3, 'Yudi Sutanto', 'Jl. Baruk Selatan No.35 Surabaya', 'L', '0867543345', '2015-01-22', 1),
('41152', 1, 4, 'Septiana', 'Jl. Baruk Utara B44 Surabaya', 'P', '08234567890', '2015-01-22', 1),
('41153', 1, 4, 'Dinda', 'Jl. Baruk Tengah B35 Surabaya', 'P', '081234567856', '2015-01-22', 1),
('51152', 1, 5, 'Vito', 'Jl. Edelweiss No.3 Sidoarjo', 'L', '08766788765', '2015-01-22', 1),
('51153', 1, 5, 'Zulfikar', 'Jl. Nirwana Boys Forever No.2 Surabaya', 'L', '0896567876', '2015-01-22', 1),
('52151', 2, 5, 'Adam', 'Jl. Sidorajo No.45 Gresik', 'L', '08564678907', '2015-01-22', 1),
('61215', 2, 4, 'Bobby', 'Taman Candiloka, Sidoarjo', 'L', '08993660688', '2015-01-21', 1),
('61512', 1, 4, 'Ferdi', 'Jl. Bluis No.25 Surabaya', 'L', '08675558534', '2015-01-16', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `KRITERIA`
--

CREATE TABLE IF NOT EXISTS `KRITERIA` (
  `ID_KRITERIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERIODE` int(11) NOT NULL,
  `NIK` char(20) DEFAULT NULL,
  `TEKNIK_SKILL` decimal(8,0) DEFAULT NULL,
  `PERSONALITY` decimal(8,0) DEFAULT NULL,
  `ABSENSI` decimal(8,0) DEFAULT NULL,
  `SANKSI` decimal(8,0) DEFAULT NULL,
  PRIMARY KEY (`ID_KRITERIA`),
  KEY `FK_DINILAI` (`NIK`),
  KEY `FK_ID_PERIODE` (`ID_PERIODE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `KRITERIA`
--

INSERT INTO `KRITERIA` (`ID_KRITERIA`, `ID_PERIODE`, `NIK`, `TEKNIK_SKILL`, `PERSONALITY`, `ABSENSI`, `SANKSI`) VALUES
(9, 2, '0005', '28', '30', '14', '1'),
(10, 2, '0006', '30', '34', '12', '2'),
(11, 2, '0007', '22', '34', '17', '2'),
(12, 2, '0010', '33', '27', '31', '5'),
(13, 2, '0008', '31', '25', '32', '5'),
(15, 2, '0011', '12', '24', '18', '1'),
(16, 2, '0012', '19', '19', '18', '1'),
(17, 2, '0013', '28', '34', '30', '1'),
(18, 2, '0014', '18', '28', '16', '1'),
(19, 2, '0009', '34', '34', '34', '4'),
(20, 2, '0015', '31', '27', '32', '4'),
(21, 3, '0004', '32', '28', '31', '3'),
(22, 4, '0004', '31', '29', '31', '3'),
(23, 4, '0006', '29', '32', '34', '5'),
(24, 4, '0005', '31', '28', '30', '5'),
(25, 4, '0010', '5', '5', '5', '4'),
(26, 5, '61512', '27', '29', '18', '1'),
(27, 6, '61512', '30', '26', '17', '1'),
(28, 6, '0004', '24', '33', '18', '1'),
(29, 6, '0005', '33', '26', '17', '1'),
(30, 6, '0006', '31', '25', '16', '1'),
(31, 6, '0007', '26', '30', '18', '1'),
(32, 6, '0010', '29', '28', '13', '1'),
(33, 6, '0013', '25', '27', '12', '2'),
(34, 6, '0011', '30', '29', '17', '1'),
(35, 6, '41152', '20', '25', '10', '1'),
(36, 8, '41152', '28', '31', '14', '1'),
(37, 8, '41153', '23', '24', '14', '1'),
(38, 8, '61512', '33', '30', '17', '1'),
(39, 8, '0006', '28', '27', '16', '1'),
(40, 8, '0005', '26', '25', '16', '1'),
(41, 8, '0004', '27', '28', '15', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `PENGGUNA`
--

CREATE TABLE IF NOT EXISTS `PENGGUNA` (
  `USERNAME` char(20) NOT NULL,
  `NIK` char(20) DEFAULT NULL,
  `PASSWORD` char(20) DEFAULT NULL,
  `JENIS_PENGGUNA` int(11) DEFAULT NULL,
  `TGL_DAFTAR` date NOT NULL,
  `STS_USER` int(11) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `FK_MEMPUNYAI` (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `PENGGUNA`
--

INSERT INTO `PENGGUNA` (`USERNAME`, `NIK`, `PASSWORD`, `JENIS_PENGGUNA`, `TGL_DAFTAR`, `STS_USER`) VALUES
('andy27', '1001', 'hello', 2, '2015-01-11', 1),
('bobby93', '61215', 'hello', 2, '2015-01-21', 0),
('deni66', '2034', 'hello', 2, '2015-01-16', 1),
('mukti93', '52151', 'hello', 2, '2015-01-22', 1),
('ono12', '1002', 'hello', 3, '2015-01-11', 1),
('saki26', '2005', 'hello', 1, '2015-01-11', 1),
('tio26', '32151', 'hello', 2, '2015-01-22', 1),
('wikan93', '22151', 'hello', 2, '2015-01-22', 1),
('yudi63', '35152', 'hello', 3, '2015-01-22', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `PERHITUNGAN`
--

CREATE TABLE IF NOT EXISTS `PERHITUNGAN` (
  `ID_PERHITUNGAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_KRITERIA` int(11) DEFAULT NULL,
  `ID_PERIODE` int(11) DEFAULT NULL,
  `NIK` char(20) DEFAULT NULL,
  `ID_BOBOT` int(11) DEFAULT NULL,
  `NILAI_VECTOR` decimal(8,3) DEFAULT NULL,
  PRIMARY KEY (`ID_PERHITUNGAN`),
  KEY `FK_BERBOBOT` (`ID_BOBOT`),
  KEY `FK_DIHITUNG` (`ID_KRITERIA`),
  KEY `FK_DIHITUNG_2` (`NIK`),
  KEY `FK_DILAKSANAKAN` (`ID_PERIODE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=184 ;

--
-- Dumping data untuk tabel `PERHITUNGAN`
--

INSERT INTO `PERHITUNGAN` (`ID_PERHITUNGAN`, `ID_KRITERIA`, `ID_PERIODE`, `NIK`, `ID_BOBOT`, `NILAI_VECTOR`) VALUES
(49, 9, 2, '0005', 14, '0.757'),
(50, 10, 2, '0006', 14, '0.752'),
(51, 11, 2, '0007', 14, '0.720'),
(52, 13, 2, '0008', 14, '0.787'),
(53, 19, 2, '0009', 14, '0.925'),
(54, 12, 2, '0010', 14, '0.815'),
(55, 15, 2, '0011', 14, '0.586'),
(56, 16, 2, '0012', 14, '0.597'),
(57, 17, 2, '0013', 14, '0.916'),
(58, 18, 2, '0014', 14, '0.664'),
(59, 20, 2, '0015', 14, '0.810'),
(60, 21, 3, '0004', 14, '0.830'),
(61, 9, 3, '0005', 14, '0.757'),
(62, 10, 3, '0006', 14, '0.752'),
(63, 11, 3, '0007', 14, '0.720'),
(64, 13, 3, '0008', 14, '0.787'),
(65, 19, 3, '0009', 14, '0.925'),
(66, 12, 3, '0010', 14, '0.815'),
(67, 15, 3, '0011', 14, '0.586'),
(68, 16, 3, '0012', 14, '0.597'),
(69, 17, 3, '0013', 14, '0.916'),
(70, 18, 3, '0014', 14, '0.664'),
(71, 20, 3, '0015', 14, '0.810'),
(72, 22, 4, '0004', 14, '0.831'),
(73, 23, 4, '0006', 14, '0.854'),
(74, 22, 4, '0004', 16, '0.831'),
(75, 24, 4, '0005', 16, '0.803'),
(76, 23, 4, '0006', 16, '0.839'),
(77, 25, 4, '0010', 16, '0.160'),
(78, 22, 4, '0004', 16, '0.831'),
(79, 24, 4, '0005', 16, '0.803'),
(80, 23, 4, '0006', 16, '0.839'),
(81, 25, 4, '0010', 16, '0.160'),
(82, 22, 4, '0004', 16, '0.831'),
(83, 24, 4, '0005', 16, '0.803'),
(84, 23, 4, '0006', 16, '0.839'),
(85, 25, 4, '0010', 16, '0.160'),
(86, 22, 4, '0004', 16, '0.831'),
(87, 24, 4, '0005', 16, '0.803'),
(88, 23, 4, '0006', 16, '0.839'),
(89, 25, 4, '0010', 16, '0.160'),
(90, 28, 6, '0004', 17, '0.777'),
(91, 29, 6, '0005', 17, '0.850'),
(92, 30, 6, '0006', 17, '0.811'),
(93, 31, 6, '0007', 17, '0.780'),
(94, 27, 6, '61512', 17, '0.805'),
(95, 28, 6, '0004', 17, '0.777'),
(96, 29, 6, '0005', 17, '0.850'),
(97, 30, 6, '0006', 17, '0.811'),
(98, 31, 6, '0007', 17, '0.780'),
(99, 27, 6, '61512', 17, '0.805'),
(100, 28, 6, '0004', 17, '0.777'),
(101, 29, 6, '0005', 17, '0.850'),
(102, 30, 6, '0006', 17, '0.811'),
(103, 31, 6, '0007', 17, '0.780'),
(104, 27, 6, '61512', 17, '0.805'),
(105, 28, 6, '0004', 17, '0.777'),
(106, 29, 6, '0005', 17, '0.850'),
(107, 30, 6, '0006', 17, '0.811'),
(108, 31, 6, '0007', 17, '0.780'),
(109, 27, 6, '61512', 17, '0.805'),
(110, 28, 6, '0004', 17, '0.777'),
(111, 29, 6, '0005', 17, '0.850'),
(112, 30, 6, '0006', 17, '0.811'),
(113, 31, 6, '0007', 17, '0.780'),
(114, 27, 6, '61512', 17, '0.805'),
(115, 28, 6, '0004', 17, '0.777'),
(116, 29, 6, '0005', 17, '0.850'),
(117, 30, 6, '0006', 17, '0.811'),
(118, 31, 6, '0007', 17, '0.780'),
(119, 27, 6, '61512', 17, '0.805'),
(120, 28, 6, '0004', 17, '0.777'),
(121, 29, 6, '0005', 17, '0.850'),
(122, 30, 6, '0006', 17, '0.811'),
(123, 31, 6, '0007', 17, '0.780'),
(124, 27, 6, '61512', 17, '0.805'),
(125, 28, 6, '0004', 17, '0.777'),
(126, 29, 6, '0005', 17, '0.850'),
(127, 30, 6, '0006', 17, '0.811'),
(128, 31, 6, '0007', 17, '0.780'),
(129, 27, 6, '61512', 17, '0.805'),
(130, 28, 6, '0004', 17, '0.777'),
(131, 29, 6, '0005', 17, '0.850'),
(132, 30, 6, '0006', 17, '0.811'),
(133, 31, 6, '0007', 17, '0.780'),
(134, 27, 6, '61512', 17, '0.805'),
(135, 28, 6, '0004', 17, '0.777'),
(136, 29, 6, '0005', 17, '0.850'),
(137, 30, 6, '0006', 17, '0.811'),
(138, 31, 6, '0007', 17, '0.780'),
(139, 27, 6, '61512', 17, '0.805'),
(140, 28, 6, '0004', 17, '0.777'),
(141, 29, 6, '0005', 17, '0.850'),
(142, 30, 6, '0006', 17, '0.811'),
(143, 31, 6, '0007', 17, '0.780'),
(144, 27, 6, '61512', 17, '0.805'),
(145, 28, 6, '0004', 17, '0.777'),
(146, 29, 6, '0005', 17, '0.850'),
(147, 30, 6, '0006', 17, '0.811'),
(148, 31, 6, '0007', 17, '0.780'),
(149, 27, 6, '61512', 17, '0.805'),
(150, 28, 6, '0004', 17, '0.777'),
(151, 29, 6, '0005', 17, '0.850'),
(152, 30, 6, '0006', 17, '0.811'),
(153, 31, 6, '0007', 17, '0.780'),
(154, 27, 6, '61512', 17, '0.805'),
(155, 28, 6, '0004', 17, '0.777'),
(156, 29, 6, '0005', 17, '0.850'),
(157, 30, 6, '0006', 17, '0.811'),
(158, 31, 6, '0007', 17, '0.780'),
(159, 27, 6, '61512', 17, '0.805'),
(160, 28, 6, '0004', 17, '0.777'),
(161, 29, 6, '0005', 17, '0.850'),
(162, 30, 6, '0006', 17, '0.811'),
(163, 31, 6, '0007', 17, '0.780'),
(164, 32, 6, '0010', 17, '0.787'),
(165, 27, 6, '61512', 17, '0.805'),
(166, 28, 6, '0004', 17, '0.777'),
(167, 29, 6, '0005', 17, '0.850'),
(168, 30, 6, '0006', 17, '0.811'),
(169, 31, 6, '0007', 17, '0.780'),
(170, 32, 6, '0010', 17, '0.787'),
(171, 34, 6, '0011', 17, '0.828'),
(172, 33, 6, '0013', 17, '0.670'),
(173, 35, 6, '41152', 17, '0.624'),
(174, 27, 6, '61512', 17, '0.805'),
(175, 36, 8, '41152', 20, '0.804'),
(176, 37, 8, '41153', 20, '0.681'),
(177, 38, 8, '61512', 20, '0.876'),
(178, 41, 8, '0004', 20, '0.768'),
(179, 40, 8, '0005', 20, '0.735'),
(180, 39, 8, '0006', 20, '0.777'),
(181, 36, 8, '41152', 20, '0.804'),
(182, 37, 8, '41153', 20, '0.681'),
(183, 38, 8, '61512', 20, '0.876');

-- --------------------------------------------------------

--
-- Struktur dari tabel `PERIODE`
--

CREATE TABLE IF NOT EXISTS `PERIODE` (
  `ID_PERIODE` int(11) NOT NULL AUTO_INCREMENT,
  `TANGGAL_MULAI` varchar(20) DEFAULT NULL,
  `TANGGAL_AKHIR` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_PERIODE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `PERIODE`
--

INSERT INTO `PERIODE` (`ID_PERIODE`, `TANGGAL_MULAI`, `TANGGAL_AKHIR`) VALUES
(2, '01/01/2015', '06/01/2015'),
(3, '01/01/2015', '01/06/2015'),
(4, '01/07/2015', '01/12/2015'),
(5, '01/01/2015', '31/01/2015'),
(6, '21/01/2015', '20/07/2015'),
(7, '18/08/2015', '20/08/2015'),
(8, '21/07/2015', '20/01/2016');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `KARYAWAN`
--
ALTER TABLE `KARYAWAN`
  ADD CONSTRAINT `FK_DITEMPATKAN` FOREIGN KEY (`ID_BAGIAN`) REFERENCES `BAGIAN` (`ID_BAGIAN`),
  ADD CONSTRAINT `FK_MENJABAT` FOREIGN KEY (`ID_JABATAN`) REFERENCES `JABATAN` (`ID_JABATAN`);

--
-- Ketidakleluasaan untuk tabel `KRITERIA`
--
ALTER TABLE `KRITERIA`
  ADD CONSTRAINT `FK_ID_PERIODE` FOREIGN KEY (`ID_PERIODE`) REFERENCES `PERIODE` (`ID_PERIODE`),
  ADD CONSTRAINT `FK_DINILAI` FOREIGN KEY (`NIK`) REFERENCES `KARYAWAN` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `PENGGUNA`
--
ALTER TABLE `PENGGUNA`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`NIK`) REFERENCES `KARYAWAN` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `PERHITUNGAN`
--
ALTER TABLE `PERHITUNGAN`
  ADD CONSTRAINT `FK_BERBOBOT` FOREIGN KEY (`ID_BOBOT`) REFERENCES `BOBOT` (`ID_BOBOT`),
  ADD CONSTRAINT `FK_DIHITUNG` FOREIGN KEY (`ID_KRITERIA`) REFERENCES `KRITERIA` (`ID_KRITERIA`),
  ADD CONSTRAINT `FK_DIHITUNG_2` FOREIGN KEY (`NIK`) REFERENCES `KARYAWAN` (`NIK`),
  ADD CONSTRAINT `FK_DILAKSANAKAN` FOREIGN KEY (`ID_PERIODE`) REFERENCES `PERIODE` (`ID_PERIODE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
