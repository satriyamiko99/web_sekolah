-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 05:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_websekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `judul`, `gambar`, `nama_lengkap`, `tanggal`) VALUES
(1, 'gambar', '8b65d230a9894f177f1080bf71b1fbec.png', 'syahrul', '2023-07-07 02:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_Berita` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diterima`
--

CREATE TABLE `tbl_diterima` (
  `id_Diterima` int(11) NOT NULL,
  `Nisn` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(30) NOT NULL,
  `Tempat_Tanggal_lahir` varchar(70) NOT NULL,
  `Keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diterima`
--

INSERT INTO `tbl_diterima` (`id_Diterima`, `Nisn`, `Nama`, `Jenis_kelamin`, `Tempat_Tanggal_lahir`, `Keterangan`) VALUES
(5, '6463', 'asep', '', 'bener meriah, 01/09/2000', 'Lulus'),
(6, '1234', 'aliya', '', 'tangerang,12 /08/2003', 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekstrakulikuler`
--

CREATE TABLE `tbl_ekstrakulikuler` (
  `id_Ekstrakulikuler` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_formulir`
--

CREATE TABLE `tbl_formulir` (
  `id_formulir` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `dokumen` text NOT NULL,
  `keterangan` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `gambar`, `tanggal`, `keterangan`) VALUES
(2, '3e67709f5199250fbad13fb6828adc1d.png', '2023-09-07', 'ini testing input');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `mata_pelajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `mata_pelajaran`) VALUES
(1, '12332', 'miko', 'bene meriah', '01/06/1999', 'Laki-laki', 'Bahasa inggris'),
(2, '323134', 'mutiara', 'TAKENGON', '2023-09-21', 'Perempuan', 'Ipa'),
(3, '12332', 'miko 2', 'bene meriah', '2023-09-25', 'Laki-laki', 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `Nisn` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `struk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `Nisn`, `nama`, `kelas`, `jenis_kelamin`, `struk`) VALUES
(1, '6463', 'satriya miko 7', '81', 'Laki-laki', 'batch 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `Nisn` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `no_telphone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `Nisn`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `asal_sekolah`, `no_telphone`) VALUES
(1, '21131', 'udin', 'jalung,01/12/2000', 'Laki-laki', 'Ma Nurul islam', '09873551752'),
(2, '6463', 'andika', 'pondok,13/03/2000', 'Laki-laki', 'Ma Nurul islam', '21873639271'),
(3, '123', 'tes', 'weuoiqueqe', 'Laki-laki', 's', '113kkjlkjllkklkj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `hak_akses`) VALUES
(2, 'miko 5', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kepsek'),
(6, 'csfw', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_websekolah`
--

CREATE TABLE `tb_websekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nim` varchar(60) NOT NULL,
  `alamat` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_websekolah`
--

INSERT INTO `tb_websekolah` (`id`, `nama`, `nim`, `alamat`) VALUES
(1, 'agus', '1571687226', 'gempol sari'),
(2, 'anisa', '166163573', 'takengon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_Berita`);

--
-- Indexes for table `tbl_diterima`
--
ALTER TABLE `tbl_diterima`
  ADD PRIMARY KEY (`id_Diterima`);

--
-- Indexes for table `tbl_ekstrakulikuler`
--
ALTER TABLE `tbl_ekstrakulikuler`
  ADD PRIMARY KEY (`id_Ekstrakulikuler`);

--
-- Indexes for table `tbl_formulir`
--
ALTER TABLE `tbl_formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_websekolah`
--
ALTER TABLE `tb_websekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_Berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_diterima`
--
ALTER TABLE `tbl_diterima`
  MODIFY `id_Diterima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_ekstrakulikuler`
--
ALTER TABLE `tbl_ekstrakulikuler`
  MODIFY `id_Ekstrakulikuler` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_formulir`
--
ALTER TABLE `tbl_formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_websekolah`
--
ALTER TABLE `tb_websekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
