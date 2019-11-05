-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2019 at 08:20 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 5.6.37-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kriminal`
--

-- --------------------------------------------------------

--
-- Table structure for table `dpo`
--


--
-- Dumping data for table `dpo`
--

-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `nolaporan` int(5) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `noktp` varchar(30) NOT NULL,
  `isi_laporan` text NOT NULL,
  `kasus` text NOT NULL,
  `lokasi_kejadian` varchar(30) NOT NULL,
  `tgl_kejadian` varchar(30) NOT NULL,
  `jam_kejadian` varchar(30) NOT NULL,
  `kerugian_materi` varchar(30) NOT NULL,
  `kerugian_benda` varchar(30) NOT NULL,
  `kerugian_lain` varchar(30) NOT NULL,
  `nominal_kerugian` varchar(30) NOT NULL,
  `ciri_ciri_pelaku` varchar(30) NOT NULL,
  `kronologis` text NOT NULL,
  `kdpenyidik` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`nolaporan`, `tanggal`, `noktp`, `isi_laporan`, `kasus`, `lokasi_kejadian`, `tgl_kejadian`, `jam_kejadian`, `kerugian_materi`, `kerugian_benda`, `kerugian_lain`, `nominal_kerugian`, `ciri_ciri_pelaku`, `kronologis`, `kdpenyidik`) VALUES
(15, 'tet edit', '321038', 'tet edit', 'tet edit', 'tet edit', 'tet edit', 'tet edit', 'tet edit', 'tet edit', 'tet edit', 'tet edit', 'tet edit', 'tet edit', '9000'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', 'Belum Ditentukan'),
(18, 'khjkh', '1010199200', 'kjh', 'jkhk', 'hjk', 'hjkh', 'khkh', 'khk', 'hkh', 'khk', 'hkh', 'khk', 'kjhkj', 'Belum Ditentukan');

-- --------------------------------------------------------

--
-- Table structure for table `pasal`
--

CREATE TABLE `pasal` (
  `nopasal` varchar(30) NOT NULL,
  `ket_pasal` text NOT NULL,
  `sanksi_min` varchar(30) NOT NULL,
  `sanksi_max` varchar(30) NOT NULL,
  `denda_min` varchar(30) NOT NULL,
  `denda_max` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasal`
--

INSERT INTO `pasal` (`nopasal`, `ket_pasal`, `sanksi_min`, `sanksi_max`, `denda_min`, `denda_max`) VALUES
('1945', 'pemerkosaan', 'jhkjhj', 'khjkh', 'kjhjk', 'hjkhk');

-- --------------------------------------------------------

--
-- Table structure for table `pelapor`
--

CREATE TABLE `pelapor` (
  `noktp` int(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempatlhr` varchar(50) NOT NULL,
  `tgllahr` varchar(30) NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `lurah_desa` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelapor`
--

INSERT INTO `pelapor` (`noktp`, `nama`, `tempatlhr`, `tgllahr`, `jenkel`, `alamat`, `lurah_desa`, `nohp`, `foto`) VALUES
(321038, 'anton', 'sadsadsadasdasdasd', 'ljl', 'jlj', 'ljl', 'jlj', 'ljlk', '86P_20160703_015501.jpg'),
(45454, '4', 'dsfdsf', 'dsfs', 'fsfsfs', 'sdfs', 'sdfsf', 'sfs', '80Chrysanthemum.jpg'),
(0, '', '', '', '', '', '', '', '80'),
(1010199200, 'ljlj', 'ljlj', 'ljlk', 'jlj', 'lkj', 'lkjljjkl', 'jljkl', '26Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penyidik`
--

CREATE TABLE `penyidik` (
  `kdpenyidik` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `jenkel` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyidik`
--

INSERT INTO `penyidik` (`kdpenyidik`, `nama`, `alamat`, `nohp`, `jenkel`, `pangkat`, `foto`) VALUES
(9000, 'jhe', 'haklowas', 'saSa', 'saSAs', 'sdsadsadsad', '38P_20160703_001146.jpg'),
(7877, 'marina', 'jhe', 'jhe', 'jhe', 'jhe', '3213139104_279687919037061_1110670678149448301_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tlhp`
--

CREATE TABLE `tb_tlhp` (
  `notlhp` char(10) NOT NULL,
  `tgl_tlhp` varchar(30) NOT NULL,
  `nolaporan` varchar(30) NOT NULL,
  `jumlah_tim` varchar(30) NOT NULL,
  `catatan_pemeriksaan` text NOT NULL,
  `hasil_sitaan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tlhp`
--

INSERT INTO `tb_tlhp` (`notlhp`, `tgl_tlhp`, `nolaporan`, `jumlah_tim`, `catatan_pemeriksaan`, `hasil_sitaan`) VALUES
('23213', '29-09-2016', '15', '3', 'sdfdsf', 'fdsfdsfds');

-- --------------------------------------------------------

--
-- Table structure for table `temuan_pelaku`
--

CREATE TABLE `temuan_pelaku` (
  `notlhp` varchar(30) NOT NULL,
  `noktpel` varchar(30) NOT NULL,
  `nama_pelaku` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `umur` varchar(5) NOT NULL,
  `status_pelaku` varchar(30) NOT NULL,
  `pasal_dilanggar` varchar(30) NOT NULL,
  `hukuman` varchar(30) NOT NULL,
  `lama` varchar(30) NOT NULL,
  `denda` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temuan_pelaku`
--

INSERT INTO `temuan_pelaku` (`notlhp`, `noktpel`, `nama_pelaku`, `alamat`, `umur`, `status_pelaku`, `pasal_dilanggar`, `hukuman`, `lama`, `denda`) VALUES
('23213', '345232', 'dfsdf', 'sdfdsfsd', 'fsdf', 'sdfsdf', '1945', 'fddsfsd', 'fsdfsdf', 'sdfdsf'),
('23213', '3434343', 'dfgdfg', 'dfgdfgdf', 'dfgdf', 'dfgdfg', '1945', 'dfgdfg', 'dfgdfgd', 'dfgdfgfdg'),
('23213', '23324234324324', 'sdfsdf', 'dsfdsf', 'sdfsd', 'sdfdsf', '1945', 'sdfdsfds', 'fsdfdsf', 'dsfsdfdsf'),
('23213', '464354353', 'xcvdfsdfsd', 'fdsfsdf', 'sdfsd', 'fsdfsd', '1945', 'sdfdsf', 'dsfdsfsd', 'fdsfdsfsd');

-- --------------------------------------------------------

--
-- Table structure for table `tim_pemeriksa`
--

CREATE TABLE `tim_pemeriksa` (
  `notlhp` varchar(30) NOT NULL,
  `kdpenyidik` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim_pemeriksa`
--

INSERT INTO `tim_pemeriksa` (`notlhp`, `kdpenyidik`, `jabatan`) VALUES
('23213', '7877', 'asdsadsa'),
('23213', '9000', 'dsadsad'),
('23213', '9000', 'dasdsad'),
('23213', '9000', 'jhe'),
('23213', '7877', 'marina'),
('23213', '7877', 'dfdsf'),
('23213', '9000', 'dsfdsfdsfds'),
('0', '9000', '78');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dpo`
--
ALTER TABLE `dpo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`nolaporan`);

--
-- Indexes for table `pasal`
--
ALTER TABLE `pasal`
  ADD PRIMARY KEY (`nopasal`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`noktp`);

--
-- Indexes for table `penyidik`
--
ALTER TABLE `penyidik`
  ADD PRIMARY KEY (`kdpenyidik`);

--
-- Indexes for table `tb_tlhp`
--
ALTER TABLE `tb_tlhp`
  ADD PRIMARY KEY (`notlhp`);

--
-- Indexes for table `temuan_pelaku`
--
ALTER TABLE `temuan_pelaku`
  ADD PRIMARY KEY (`noktpel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dpo`
--
ALTER TABLE `dpo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `nolaporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
