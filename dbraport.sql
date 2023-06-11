-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 02:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'jamaludin21', 'bungur');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `mata_pelajaran` varchar(50) NOT NULL,
  `nikg` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `jabatan`, `mata_pelajaran`, `nikg`) VALUES
(1, 'Ihsan Permadi, S.Pd', 'Kepala Sekolah', 'Pendidikan Agama', ''),
(2, 'Tri Cahya Ningrum, S.Pd', 'Wk. Kurikulum', 'Matematika', '1345772673230163'),
(3, 'Hasyemi Rofsanjani Haikal, S.E', 'Wk. Kesiswaan', 'BK', ''),
(4, 'Mahda Chika Calista, S.Pd', 'Bendahara', 'BTQ', ''),
(5, 'Dyah Okasari, S.Pd', 'Guru', 'Bahasa Inggris', '9648758659300050'),
(6, 'Panji Sutowo, S.Pd', 'Guru', 'IPA', ''),
(7, 'Nining Marini, S.Pd', 'Tata Usaha', 'IPS', '9637770671230252'),
(8, 'Fenty Noviati Rahayu', 'Guru', 'Bahasa Indonesia', ''),
(9, 'Ali Ridho, S.Pd', 'Guru', 'Seni Budaya', '9452758660200023'),
(10, 'Asep Saepullah, S.T', 'Guru', 'Prakarya & Bahasa Sunda', '2749757658110042'),
(11, 'M. Syahril Azhari, S.Fil.I', 'Guru', 'Pendiidkan Kewarganegaraan', '2536757657200013'),
(12, 'Makosid Fauzi', 'Operator', '', '1056752655200013');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(225) NOT NULL,
  `guru_mapel` varchar(225) NOT NULL,
  `kode_mapel` varchar(225) NOT NULL,
  `kkm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_mapel`, `guru_mapel`, `kode_mapel`, `kkm`) VALUES
(1, 'Pendidikan Agama', 'Ihsan Permadi, S.Pd', '1', ''),
(2, 'Pendidikan Kewarganegaraan', 'M. Syahril Azhari, S.Fil.I', '3', ''),
(3, 'Bahasa Indonesia', 'Fenty Noviati Rahayu', '7', ''),
(4, 'Matematika', 'Tri Cahya Ningrum, S.Pd', '2', ''),
(5, 'Ilmu Pengetahuan Alam', 'Panji Sutowo, S.Pd', '9', ''),
(6, 'Ilmu Pengetahuan Sosial', 'Nining Marini, S.Pd', '5', ''),
(7, 'Bahasa Inggris', 'Dyah Okasari, S.Pd', '6', ''),
(8, 'Seni Budaya', 'Ali Rido, S.Sos.I', '3', ''),
(9, 'Pendidikan Jasmani', '', '11', ''),
(10, 'Prakarya', 'Asep Saepullah, S.T', '8a', ''),
(11, 'Bahasa Sunda', 'Asep Saepullah, S.T', '8b', ''),
(12, 'Baca Tulis Quran', 'Mahda Chika Calista, S.Pd', '10', '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai` int(11) NOT NULL,
  `nama_siswa` varchar(225) NOT NULL,
  `kelas` varchar(225) NOT NULL,
  `nisn` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `sekolah` varchar(225) NOT NULL,
  `tahun_pelajaran` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `taqwa` varchar(225) NOT NULL,
  `mandiri` varchar(225) NOT NULL,
  `gotong_royong` varchar(225) NOT NULL,
  `kreatif` varchar(225) NOT NULL,
  `kritis` varchar(225) NOT NULL,
  `bineka` varchar(225) NOT NULL,
  `agama` varchar(225) NOT NULL,
  `pkn` varchar(225) NOT NULL,
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
  `catatan_wakel` varchar(225) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_viii`
--

CREATE TABLE `siswa_viii` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(225) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `kelas` int(11) NOT NULL,
  `kelamin` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(225) NOT NULL,
  `status_keluarga` varchar(225) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `alamat_siswa` varchar(225) NOT NULL,
  `telp_siswa` varchar(50) NOT NULL,
  `sekolah_asal` varchar(225) NOT NULL,
  `pada_kelas` int(11) NOT NULL,
  `pada_tanggal` date NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(225) NOT NULL,
  `alamat_orangtua` varchar(225) NOT NULL,
  `telp_orangtua` int(11) NOT NULL,
  `kerja_ayah` varchar(225) NOT NULL,
  `kerja_ibu` varchar(225) NOT NULL,
  `nama_wali` varchar(225) NOT NULL,
  `alamat_wali` varchar(225) NOT NULL,
  `telp_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `siswa_viii`
--
ALTER TABLE `siswa_viii`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `siswa_viii`
--
ALTER TABLE `siswa_viii`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
