-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 12:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admindev', '$2y$10$cVIKGaR1mFNVq6b5dAbp5ORGrcOos.cDrjS5Svo2KNqnqu8zWUeK2');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(3) NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `gejala`) VALUES
(1, 'G01', 'Saat motor di starter atau di engkol mesin tidak hidup1'),
(2, 'G02', 'Mesin motor tidak hidup padahal bensin masih penuh'),
(3, 'G03', 'Saat motor di engkol terasa ringan atau los'),
(4, 'G04', 'Kabel coil atau busi tidak mengeluarkan arus listrik'),
(5, 'G05', 'Seluruh kelistrikan mati'),
(6, 'G06', 'Saat motor di starter mesin tidak hidup tapi saat di engkol mesin hidup'),
(7, 'G07', 'Saat motor di starter tidak terdengar suara dinamo atau suara dinamo lemah'),
(8, 'G08', 'Saat motor di starter mesin tidak hidup padahal aki masih bagus'),
(9, 'G09', 'Timbul suara menggelitik pada cylinder head'),
(10, 'G10', 'Timbul suara berisik pada cylinder head atau bagian kepala mesin'),
(11, 'G11', 'Timbul suara berisik pada cylinder head padahal noken as masih bagus'),
(12, 'G12', 'Timbul suara berisik pada cylinder head padahal pelatuk klep masih bagus'),
(13, 'G13', 'Timbul suara gemericik pada mesin'),
(14, 'G14', 'Timbul suara gemericik pada mesin padahal otomatis tensioner masih normal'),
(15, 'G15', 'Banyak rontokan karet atau plastik pada saat ganti oli'),
(16, 'G16', 'Mesin motor terasa bergetar tidak biasa'),
(17, 'G17', 'Suara mesin motor kasar dan keras'),
(18, 'G18', 'Keluar asap putih dari knalpot pada saat start awal'),
(19, 'G19', 'Keluar asap putih tebal dari knalpot'),
(20, 'G20', 'Timbul getaran pada saat start awal'),
(21, 'G21', 'Timbul suara di sekitar CVT'),
(22, 'G22', 'Timbul suara decitan saat akselerasi'),
(23, 'G23', 'Performa motor turun');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `kode_kerusakan` varchar(3) NOT NULL,
  `kerusakan` varchar(1000) NOT NULL,
  `solusi` varchar(1000) NOT NULL,
  `harga` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `kode_kerusakan`, `kerusakan`, `solusi`, `harga`) VALUES
(1, 'K01', 'Gangguan atau kerusakan pada busi', 'Ganti busi motor dengan busi baru', '100000'),
(2, 'K02', 'Gangguan atau kerusakan pada klep', 'Cek kondisi klep Anda, jika klep rusak maka ganti klep dengan klep yang baru. Jika kondisi klep baik baik saja maka cek kondisi per klep, jika per klep rusak maka ganti per klepnya saja', '25000'),
(3, 'K03', 'Gangguan atau kerusakan pada ignition coil atau ECU', 'Cek kondisi ignition coil apakah masih mengeluarkan percikan api, jika tidak mengeluarkan percikan api maka ganti ignition coilnya. Jika ignition coil mengeluarkan percikan api tapi kecil cek kondisi daya aki apakah masih normal, jika di bawah normal maka ganti aki. Jika dengan aki normal pecikan api masih kecil cek kondisi ECU apakah ecu masih normal, jika ECU tidak normal maka ganti ECU', '100000'),
(4, 'K04', 'Gangguan atau kerusakan pada sekring aki', 'Ganti sekring motor yang putus dengan sekring motor yang baru', '100000'),
(5, 'K05', 'Gangguan atau kerusakan pada aki', 'Cas aki hingga daya kembali normal, jika aki cepat drop maka ganti aki dengan aki yang baru', '100000'),
(6, 'K06', 'Gangguan atau kerusakan pada komponen dinamo starter', 'Jika starter masih dapat berputar tetapi mesin tidak hidup maka ganti brush dinamo, jika starter tidak bergerak sama sekali maka ganti keseluruhan dinamo starter', '100000'),
(7, 'K07', 'Gangguan atau kerusakan pada noken as', 'Membawa ke tukang bubut atau mengganti noken as dengan yang baru', '100000'),
(8, 'K08', 'Gangguan atau kerusakan pada pelatuk klep', 'Cek kondisi pelatuk klep, jika masih bagus maka setel kerengganan pelatuk klep. Jika kondisi sudah rusak maka ganti pelatuk klep dengan yang baru', '100000'),
(9, 'K09', 'Gangguan atau kerusakan pada bosh klep', 'Ganti bosh klep dengan yang baru', '100000'),
(10, 'K10', 'Gangguan atau kerusakan pada otomatis tensioner', 'Ganti otomatis tensioner dengan yang baru', '100000'),
(11, 'K11', 'Gangguan atau kerusakan pada rantai keteng', 'Ganti rantai keteng dengan yang baru', '100000'),
(12, 'K12', 'Gangguan atau kerusakan pada rel tensioner', 'Ganti rel tensioner dengan yang baru', '100000'),
(13, 'K13', 'Gangguan atau kerusakan pada bearing kruk as', 'Ganti bearing kruk as dengan yang baru', '100000'),
(14, 'K14', 'Gangguan atau kerusakan pada stang piston', 'Ganti stang piston dengan yang baru', '100000'),
(15, 'K15', 'Gangguan atau kerusakan pada seal bosh klep', 'Ganti seal bosh klep dengan yang baru', '100000'),
(16, 'K16', 'Gangguan atau kerusakan pada ring piston', 'Ganti ring piston dengan yang baru', '100000'),
(17, 'K17', 'Gangguan atau kerusakan pada pemasangan mur kopling secondary', 'Kencangkan mur kopling secondary di dalam CVT bagian belakang', '100000'),
(18, 'K18', 'Gangguan atau kerusakan pada v-belt', 'Ganti v belt dengan yang baru', '100000'),
(19, 'K19', 'Gangguan atau kerusakan pada roller', 'Ganti roller dengan yang baru', '100000'),
(20, 'K20', 'Gangguan atau kerusakan pada kampas kopling sentrifugal', 'Ganti kampas kopling sentrifugal dengan yang baru', '100000'),
(32, 'K21', 'Test', 'dsdsdss', '0'),
(33, 'K22', 'sdasda', 'dasdasda', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id`, `nama`) VALUES
(1, 'Yamaha'),
(2, 'Honda'),
(3, 'Kawasaki');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `id` int(11) NOT NULL,
  `kerusakan_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id`, `kerusakan_id`, `gejala_id`) VALUES
(8, 1, 2),
(9, 1, 1),
(22, 2, 1),
(23, 2, 3),
(24, 3, 1),
(25, 3, 2),
(26, 3, 4),
(30, 4, 1),
(31, 4, 5),
(32, 5, 6),
(33, 5, 7),
(34, 6, 6),
(35, 6, 7),
(36, 6, 8),
(37, 8, 9),
(38, 8, 10),
(40, 7, 9),
(41, 7, 10),
(42, 8, 11),
(44, 9, 9),
(45, 9, 10),
(46, 9, 11),
(47, 9, 12),
(48, 10, 13),
(49, 11, 13),
(50, 11, 14),
(51, 12, 13),
(52, 12, 14),
(53, 12, 15),
(54, 13, 16),
(55, 14, 16),
(56, 14, 17),
(57, 15, 18),
(58, 16, 18),
(59, 16, 19),
(60, 17, 20),
(61, 18, 20),
(62, 18, 21),
(63, 19, 20),
(64, 19, 21),
(65, 19, 23),
(66, 20, 20),
(67, 20, 21),
(68, 20, 22),
(69, 20, 23),
(76, 32, 1),
(77, 32, 2),
(78, 32, 3),
(79, 33, 6),
(80, 33, 7),
(81, 33, 8);

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `parent` varchar(3) DEFAULT NULL,
  `ya` varchar(3) DEFAULT NULL,
  `tidak` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id`, `gejala_id`, `parent`, `ya`, `tidak`) VALUES
(75, 1, NULL, 'G02', 'G06'),
(76, 2, 'G01', 'G04', 'G03'),
(77, 3, 'G01', 'K02', 'G05'),
(78, 4, 'G02', 'K03', 'K01'),
(79, 5, 'G01', 'K04', 'G06'),
(80, 6, 'G06', 'G07', 'G09'),
(81, 7, 'G06', 'G08', 'G09'),
(82, 8, 'G07', 'K06', 'K05'),
(83, 9, 'G12', 'G10', 'G13'),
(84, 10, 'G09', 'G11', 'G13'),
(85, 11, 'G10', 'G12', 'K07'),
(86, 12, 'G11', 'K09', 'K08'),
(87, 13, 'G15', 'G04', 'G18'),
(88, 14, 'G13', 'G15', 'K10'),
(89, 15, 'G14', 'K12', 'K11'),
(90, 16, 'G16', 'G17', 'G18'),
(91, 17, 'G16', 'K14', 'K13'),
(92, 18, 'K14', 'G19', 'G20'),
(93, 19, 'G18', 'K16', 'K15'),
(94, 20, 'G20', 'G21', 'G22'),
(95, 21, 'G20', 'G22', 'K17'),
(96, 23, 'G21', 'G22', 'G23'),
(97, 22, 'G23', 'K20', 'K19');

-- --------------------------------------------------------

--
-- Table structure for table `seri`
--

CREATE TABLE `seri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merek_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seri`
--

INSERT INTO `seri` (`id`, `nama`, `merek_id`) VALUES
(1, 'Nmax', 1),
(2, 'Mio', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `seri` varchar(50) NOT NULL,
  `kerusakan_kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `merek`, `seri`, `kerusakan_kode`) VALUES
(4, 'Burhan Yuswantyo', 'burhanyuswantyo@ymail.com', 'Yamaha', 'Nmax', '0'),
(5, 'Burhan Yuswantyo', 'burhanyuswantyo@ymail.com', 'Yamaha', 'Nmax', 'K01'),
(6, 'asdad', 'owlyuswan@gmail.com', 'Yamaha', 'Mio', 'K08'),
(7, 'ewewew', 'super.admin@keraton.com', 'Yamaha', 'Nmax', 'K06'),
(8, 'M Zainul Anwar', 'super.admin@keraton.com', 'Yamaha', 'Nmax', 'K03'),
(9, 'M Zainul Anwar', 'super.admin@keraton.com', 'Yamaha', 'Nmax', 'K03'),
(10, 'M Zainul Anwar', 'super.admin@keraton.com', 'Yamaha', 'Nmax', 'K03'),
(11, 'M Zainul Anwar', 'super.admin@keraton.com', 'Kawasaki', 'Nmax', 'K03'),
(12, 'M Zainul Anwar', 'asxasasas@gmail.com', 'Honda', 'Nmax', 'K01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seri`
--
ALTER TABLE `seri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `kerusakan`
--
ALTER TABLE `kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `seri`
--
ALTER TABLE `seri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
