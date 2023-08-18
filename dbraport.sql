-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 04:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbraport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'jamaludin21', 'bungur');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_siswa`
--

CREATE TABLE `biodata_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(225) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `absen` int(11) NOT NULL,
  `agama` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `lulusan_sekolah` int(11) NOT NULL,
  `tahun_pelajaran` int(11) NOT NULL,
  `alamat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dimensi`
--

CREATE TABLE `dimensi` (
  `id_dimensi` int(11) NOT NULL,
  `iman` varchar(225) NOT NULL,
  `mandiri` varchar(225) NOT NULL,
  `bergotong_royong` varchar(225) NOT NULL,
  `kreatif` varchar(225) NOT NULL,
  `bernalar_kritis` varchar(225) NOT NULL,
  `bhineka` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dimensi`
--

INSERT INTO `dimensi` (`id_dimensi`, `iman`, `mandiri`, `bergotong_royong`, `kreatif`, `bernalar_kritis`, `bhineka`) VALUES
(1, 'Beriman, bertakwa kepada Tuhan Yang Maha Esa dan Berakhlak Mulia', 'Mandiri', 'Bergotong Royong', 'Kreatif', 'Bernalar Kritis', 'Berkebhinekaan Global');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `nikg` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `jabatan`, `nikg`) VALUES
(1, 'Ihsan Permadi, S.Pd', 'Kepala Sekolah', ''),
(2, 'Tri Cahya Ningrum, S.Pd', 'Wk. Kurikulum', '1345772673230163'),
(3, 'Hasyemi Rofsanjani Haikal, S.E', 'Wk. Kesiswaan', ''),
(4, 'Mahda Chika Calista, S.Pd', 'Bendahara', ''),
(5, 'Dyah Okasari, S.Pd', 'Guru', '9648758659300050'),
(6, 'Panji Sutowo, S.Pd', 'Guru', ''),
(7, 'Nining Marini, S.Pd', 'Tata Usaha', '9637770671230252'),
(8, 'Fenty Noviati Rahayu', 'Guru', ''),
(9, 'Ali Ridho, S.Pd', 'Guru', '9452758660200023'),
(10, 'Asep Saepullah, S.T', 'Guru', '2749757658110042'),
(11, 'M. Syahril Azhari, S.Fil.I', 'Guru', '2536757657200013'),
(12, 'Makosid Fauzi', 'Operator', '1056752655200013');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(225) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `kode_mapel` varchar(225) NOT NULL,
  `kkm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_mapel`, `id_guru`, `kode_mapel`, `kkm`) VALUES
(1, 'Pendidikan Agama', 1, '1', ''),
(2, 'Pendidikan Kewarganegaraan', 11, '3', ''),
(3, 'Bahasa Indonesia', 8, '7', ''),
(4, 'Matematika', 2, '2', ''),
(5, 'Ilmu Pengetahuan Alam', 6, '9', ''),
(6, 'Ilmu Pengetahuan Sosial', 7, '5', ''),
(7, 'Bahasa Inggris', 5, '6', ''),
(8, 'Seni Budaya', 10, '3', ''),
(9, 'Pendidikan Jasmani', NULL, '11', ''),
(10, 'Prakarya', 10, '8a', ''),
(11, 'Bahasa Sunda', 9, '8b', ''),
(12, 'Baca Tulis Quran', 4, '10', '');

-- --------------------------------------------------------

--
-- Table structure for table `ms_kelas`
--

CREATE TABLE `ms_kelas` (
  `id_kelas` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ms_kelas`
--

INSERT INTO `ms_kelas` (`id_kelas`, `keterangan`) VALUES
(1, 7),
(2, 8),
(3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `taqwa` varchar(225) NOT NULL,
  `mandiri` varchar(225) NOT NULL,
  `gotong_royong` varchar(225) NOT NULL,
  `kreatif` varchar(225) NOT NULL,
  `kritis` varchar(225) NOT NULL,
  `bineka` varchar(225) NOT NULL,
  `na_agama` varchar(225) NOT NULL,
  `na_pkn` varchar(225) NOT NULL,
  `na_bi` varchar(225) NOT NULL,
  `na_mtk` varchar(225) NOT NULL,
  `na_ipa` varchar(225) NOT NULL,
  `na_ips` varchar(225) NOT NULL,
  `na_inggris` varchar(225) NOT NULL,
  `na_sb` varchar(225) NOT NULL,
  `na_penjaskes` varchar(225) NOT NULL,
  `na_pk` varchar(225) NOT NULL,
  `pramuka` varchar(225) NOT NULL,
  `silat` varchar(225) NOT NULL,
  `kompetensi_agama` varchar(225) NOT NULL,
  `kompetensi_pkn` varchar(225) NOT NULL,
  `kompetensi_bi` varchar(225) NOT NULL,
  `kompetensi_mtk` varchar(225) NOT NULL,
  `kompetensi_ipa` varchar(225) NOT NULL,
  `kompetensi_ips` varchar(225) NOT NULL,
  `kompetensi_inggris` varchar(225) NOT NULL,
  `kompetensi_sb` varchar(225) NOT NULL,
  `kompetensi_penjaskes` varchar(225) NOT NULL,
  `kompetensi_pk` varchar(225) NOT NULL,
  `sakit` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `tanpa_keterangan` int(11) NOT NULL,
  `catatan_wakel` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `kelas` (`id_kelas`);

--
-- Indexes for table `dimensi`
--
ALTER TABLE `dimensi`
  ADD PRIMARY KEY (`id_dimensi`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `guru` (`id_guru`);

--
-- Indexes for table `ms_kelas`
--
ALTER TABLE `ms_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dimensi`
--
ALTER TABLE `dimensi`
  MODIFY `id_dimensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ms_kelas`
--
ALTER TABLE `ms_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD CONSTRAINT `kelas` FOREIGN KEY (`id_kelas`) REFERENCES `ms_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD CONSTRAINT `guru` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD CONSTRAINT `siswa` FOREIGN KEY (`id_siswa`) REFERENCES `biodata_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
