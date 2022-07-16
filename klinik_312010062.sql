-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 09:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_312010062`
--

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `id_pasien` int(5) DEFAULT NULL,
  `id_dokter` int(5) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `keluhan_pasien` varchar(200) DEFAULT NULL,
  `hasil_diagnosa` varchar(200) DEFAULT NULL,
  `penatalaksanaan` enum('Rawat Jalan','Rawat Inap','Rujuk','lainnya') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `id_pasien`, `id_dokter`, `tgl_berobat`, `keluhan_pasien`, `hasil_diagnosa`, `penatalaksanaan`) VALUES
(3330, 1, 1802, '2022-03-13', 'sesak nafas', 'asma', 'Rawat Inap'),
(3331, 2, 1805, '2022-03-16', 'feses cair dan muntah', 'diare', 'lainnya'),
(3332, 3, 1803, '2022-03-18', 'sakit kepala parah dan penglihatan buram', 'hipertensi', 'Rawat Jalan'),
(3333, 4, 1801, '2022-03-20', 'sendi bengkak dan kaku', 'nyeri sendi', 'lainnya'),
(3334, 5, 1804, '2022-03-24', 'batuk kering dan berkeringat berlebihan', 'emboli paru', 'Rawat Inap');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(5) NOT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`) VALUES
(1801, 'nana'),
(1802, 'fajar'),
(1803, 'rahayu'),
(1804, 'fadlan'),
(1805, 'dewi');

-- --------------------------------------------------------

--
-- Table structure for table `log_obat`
--

CREATE TABLE `log_obat` (
  `id_log` int(100) NOT NULL,
  `id_obat` int(10) DEFAULT NULL,
  `nama_obat_lama` varchar(100) DEFAULT NULL,
  `Nama_obat_baru` varchar(100) DEFAULT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_obat`
--

INSERT INTO `log_obat` (`id_log`, `id_obat`, `nama_obat_lama`, `Nama_obat_baru`, `waktu`) VALUES
(1, 2226, 'tolak angin', 'promag', '2022-06-23'),
(2, 2226, 'promag', 'sekjnfwejf', '2022-06-26'),
(3, 2225, 'Aminofilin', 'antangin', '2022-06-30'),
(4, 2225, 'antangin', 'sanmol', '2022-07-02'),
(0, 2001, 'Promag', 'mixagrip', '2022-07-02'),
(0, 2001, 'mixagrip', 'promag', '2022-07-02'),
(0, 2011, 'paramex', 'amoxilin', '2022-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(5) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`) VALUES
(2001, 'promag'),
(2002, 'kaolin'),
(2003, 'fosinopril'),
(2004, 'ibuprofen'),
(2005, 'apixaban');

--
-- Triggers `obat`
--
DELIMITER $$
CREATE TRIGGER `update_nama_obat` AFTER UPDATE ON `obat` FOR EACH ROW INSERT INTO log_obat 
set id_obat=OLD.id_obat, 
nama_obat_lama = old.nama_obat, 
nama_obat_baru=new.nama_obat, 
waktu = now()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(5) NOT NULL,
  `nama_pasien` varchar(40) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `umur` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `umur`) VALUES
(1, 'alyani', 'P', 22),
(2, 'mawar', 'P', 19),
(3, 'louis', 'L', 24),
(4, 'diana', 'P', 30),
(5, 'iqbal', 'L', 11);

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id_resep` int(11) NOT NULL,
  `id_berobat` int(11) DEFAULT NULL,
  `id_obat` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep_obat`
--

INSERT INTO `resep_obat` (`id_resep`, `id_berobat`, `id_obat`) VALUES
(200, 3330, 2001),
(201, 3331, 2002),
(202, 3332, 2003),
(203, 3333, 2004),
(204, 3334, 2005);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_lengkap` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(551, 'adminklinik1', '5678', 'siti azkia'),
(552, 'adminklinik2', '6785', 'rian ardianto'),
(553, 'adminklinik3', '7856', 'fajar alfian'),
(554, 'adminklinik4', '8567', 'isyana fitriani'),
(555, 'adminklinik5', '6578', 'alifta jihan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewpenyakit`
-- (See below for the actual view)
--
CREATE TABLE `viewpenyakit` (
`id_berobat` int(11)
,`nama_pasien` varchar(40)
,`jenis_kelamin` enum('L','P')
,`umur` int(2)
,`keluhan_pasien` varchar(200)
,`hasil_diagnosa` varchar(200)
,`tgl_berobat` date
,`nama_dokter` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `viewpenyakit`
--
DROP TABLE IF EXISTS `viewpenyakit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewpenyakit`  AS SELECT `a`.`id_berobat` AS `id_berobat`, `b`.`nama_pasien` AS `nama_pasien`, `b`.`jenis_kelamin` AS `jenis_kelamin`, `b`.`umur` AS `umur`, `a`.`keluhan_pasien` AS `keluhan_pasien`, `a`.`hasil_diagnosa` AS `hasil_diagnosa`, `a`.`tgl_berobat` AS `tgl_berobat`, `c`.`nama_dokter` AS `nama_dokter` FROM ((`berobat` `a` join `pasien` `b` on(`a`.`id_pasien` = `b`.`id_pasien`)) join `dokter` `c` on(`a`.`id_dokter` = `c`.`id_dokter`)) WHERE `b`.`jenis_kelamin` = 'L' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_berobat` (`id_berobat`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3336;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1810;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=559;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berobat`
--
ALTER TABLE `berobat`
  ADD CONSTRAINT `id_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `id_berobat` FOREIGN KEY (`id_berobat`) REFERENCES `berobat` (`id_berobat`),
  ADD CONSTRAINT `id_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
