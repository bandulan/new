-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 03:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpn`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemecahan`
--

CREATE TABLE `pemecahan` (
  `id` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `nib` int(11) NOT NULL,
  `letak` varchar(128) NOT NULL,
  `kel` varchar(64) NOT NULL,
  `kec` varchar(64) NOT NULL,
  `kab` varchar(64) NOT NULL,
  `luas` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(128) NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemecahan`
--

INSERT INTO `pemecahan` (`id`, `id_pemilik`, `nib`, `letak`, `kel`, `kec`, `kab`, `luas`, `deskripsi`, `foto`, `status`) VALUES
(1, 19, 332131, 'JL Raya Gubeng No. 986', '1', '1', 'Lampung', 500, 'Buat anak', '', 'belum'),
(2, 12, 1123, '', '', '', '', 0, '', '', 'Menunggu Verifik');

-- --------------------------------------------------------

--
-- Table structure for table `persil`
--

CREATE TABLE `persil` (
  `id_persil` int(11) NOT NULL,
  `nib` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `alamat_persil` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `batas_utara` varchar(128) NOT NULL,
  `batas_selatan` varchar(128) NOT NULL,
  `batas_timur` varchar(128) NOT NULL,
  `batas_barat` varchar(128) NOT NULL,
  `koordinat_x` varchar(128) NOT NULL,
  `koordinat_y` varchar(128) NOT NULL,
  `luas_nib` varchar(128) NOT NULL,
  `kegiatan` varchar(128) NOT NULL,
  `nama_lurah` varchar(128) NOT NULL,
  `nip_lurah` varchar(128) NOT NULL,
  `verifikasi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persil`
--

INSERT INTO `persil` (`id_persil`, `nib`, `id_pemilik`, `alamat_persil`, `kecamatan`, `kelurahan`, `batas_utara`, `batas_selatan`, `batas_timur`, `batas_barat`, `koordinat_x`, `koordinat_y`, `luas_nib`, `kegiatan`, `nama_lurah`, `nip_lurah`, `verifikasi`) VALUES
(17, 0, 12, 'asasdasd', '', '', '', '', '', '', '', '', '', 'Pendaftaran Baru', '', '', 'Berhasil Diverifikasi'),
(18, 0, 12, 'oke', '', '', '', '', '', '', '', '', '', 'Pendaftaran Baru', '', '', 'Berhasil Diverifikasi'),
(19, 0, 12, 'baru', '', '', '', '', '', '', '', '', '', 'Pendaftaran Baru', '', '', 'Berhasil Diverifikasi'),
(20, 0, 12, 'lagi', '', '', '', '', '', '', '', '', '', 'Pemecahan Sertifikat', '', '', 'Berhasil Diverifikasi'),
(21, 0, 12, 'pemecahan', '', '', '', '', '', '', '', '', '', 'Pemecahan Sertifikat', '', '', 'Berhasil Diverifikasi'),
(22, 0, 12, 'pemecahan lagi', '', '', '', '', '', '', '', '', '', 'Pemecahan Sertifikat', '', '', 'Berhasil Diverifikasi'),
(23, 0, 12, 'BARU', '', '', '', '', '', '', '', '', '', 'Pendaftaran Baru', '', '', 'Berhasil Diverifikasi'),
(24, 0, 12, 'baru', '', '', '', '', '', '', '', '', '', 'Pendaftaran Baru', '', '', 'Berhasil Diverifikasi'),
(25, 0, 12, 'baru lagi', '', '', '', '', '', '', '', '', '', 'Pemecahan Sertifikat', '', '', 'Berhasil Diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `id_proses` int(32) NOT NULL,
  `id_warga` int(32) NOT NULL,
  `kegiatan` varchar(32) NOT NULL,
  `date` int(32) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(32) NOT NULL,
  `id_persil` int(32) NOT NULL,
  `nib` int(32) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `tanggal` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `id_persil`, `nib`, `alamat`, `status`, `deskripsi`, `tanggal`) VALUES
(1, 10, 0, '', '', '', 0),
(2, 6, 0, '', '', '', 0),
(3, 5, 0, '', '', '', 0),
(4, 10, 0, '', '', '', 0),
(5, 11, 0, '', '', '', 0),
(6, 3, 0, '', '', '', 0),
(7, 4, 0, '', '', '', 0),
(8, 5, 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `id_persil` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(32) NOT NULL,
  `id_persil` int(32) NOT NULL,
  `id_pemilik` int(32) NOT NULL,
  `kegiatan` varchar(32) NOT NULL,
  `harga` int(32) NOT NULL,
  `deskripsi` varchar(32) NOT NULL,
  `date` int(32) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `id_persil`, `id_pemilik`, `kegiatan`, `harga`, `deskripsi`, `date`, `status`) VALUES
(1, 24, 0, 'Pendaftaran Baru', 1, '', 0, 'Belum Dibayar'),
(2, 17, 12, 'Pendaftaran Baru', 1, '', 0, 'Belum Dibayar'),
(3, 25, 12, 'Pemecahan Sertifikat', 200000, '', 0, 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Warga');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `ktp` bigint(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telfon` int(11) NOT NULL,
  `agama` varchar(64) NOT NULL,
  `pekerjaan` varchar(64) NOT NULL,
  `no_kk` int(11) NOT NULL,
  `tempat_lhr` varchar(64) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `foto` varchar(128) NOT NULL,
  `nik` bigint(200) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `ktp`, `nama`, `alamat`, `telfon`, `agama`, `pekerjaan`, `no_kk`, `tempat_lhr`, `tanggal_lhr`, `foto`, `nik`, `tanggal_daftar`, `username`, `password`, `role`) VALUES
(12, 6516126, 'Xarles Dufresne', '18, avenue de Bouvines', 1231230912, 'Islam', 'Pekerjaan', 1231230912, 'Libra', '2020-08-31', '0', 0, '2020-08-03', '', '', 0),
(13, 2350423, 'Simon Kulikova', 'Chemin des Bateliers', 2341235, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(14, 2680791, 'Saimi Tompuri', 'rue Beauvau', 26807, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(15, 4105263, 'Ronja Helminen', 'Mahone Bay', 4105263, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(16, 1919513, 'Chan Mai', 'Boulevard Laflèche', 1919, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(17, 6754253, 'Lee Su', 'rue des Églises Est', 675425, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(18, 5932220, 'Mustafa Sayid\r\n', 'Carleton Place', 59322, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(19, 2010817, 'Aadab Aroob Shamoun', 'Koepenicker Str. 59', 2010, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(20, 2191985, 'Gregory Yevdokimov', 'Lietzenburger Strasse 75', 21919, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(21, 4517821, 'Marcello Marchesi', 'Via Francesco Saverio Correra, 122', 45178248, '', '', 0, '', '0000-00-00', '0', 0, '2020-08-03', '', '', 0),
(27, 3322131, 'Tes', 'Tes', 8123123, '', '', 0, '', '0000-00-00', '', 0, '2020-08-15', '', '', 0),
(28, 123, 'asd', 'asd', 123, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(29, 123, 'asd', 'asd', 123, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(30, 123, 'asd', 'asd', 123, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(31, 123, 'asd', 'asd', 123, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(32, 123, 'asdasd', 'asdasd', 123, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(33, 3333, 'asdasdasd', 'asdasdasd', 33333, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(34, 123123, 'asdasd', 'asdasd', 123, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(35, 111, '111', '111', 111, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(36, 11, '1', '1', 11, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0),
(37, 2, '2', '2', 2, '', '', 0, '', '0000-00-00', '', 0, '2020-08-22', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemecahan`
--
ALTER TABLE `pemecahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `persil`
--
ALTER TABLE `persil`
  ADD PRIMARY KEY (`id_persil`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id_proses`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_pemiliki` (`id_pemilik`),
  ADD KEY `id_persil` (`id_persil`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemecahan`
--
ALTER TABLE `pemecahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persil`
--
ALTER TABLE `persil`
  MODIFY `id_persil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `proses`
--
ALTER TABLE `proses`
  MODIFY `id_proses` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemecahan`
--
ALTER TABLE `pemecahan`
  ADD CONSTRAINT `pemecahan_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `warga` (`id_warga`);

--
-- Constraints for table `persil`
--
ALTER TABLE `persil`
  ADD CONSTRAINT `persil_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `warga` (`id_warga`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `surat_ibfk_2` FOREIGN KEY (`id_persil`) REFERENCES `persil` (`id_persil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
