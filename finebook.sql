-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jan 2016 pada 05.44
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finebook`
--
CREATE DATABASE IF NOT EXISTS `finebook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `finebook`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

DROP TABLE IF EXISTS `buku`;
CREATE TABLE IF NOT EXISTS `buku` (
`kd_buku` int(3) NOT NULL,
  `nama_buku` text NOT NULL,
  `penerbit` text NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `get_book`
--

DROP TABLE IF EXISTS `get_book`;
CREATE TABLE IF NOT EXISTS `get_book` (
  `kd_buku` int(3) NOT NULL,
  `kd_toko` int(3) NOT NULL,
  `jml_buku` int(5) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE IF NOT EXISTS `lokasi` (
  `kd_toko` int(3) NOT NULL,
  `nama_toko` text NOT NULL,
  `alamat` text NOT NULL,
  `kd_pos` varchar(6) NOT NULL,
  `stok_buku` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

DROP TABLE IF EXISTS `pembeli`;
CREATE TABLE IF NOT EXISTS `pembeli` (
`kd_pembeli` int(3) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `kd_pos` varchar(6) NOT NULL,
  `email` text NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencarian`
--

DROP TABLE IF EXISTS `pencarian`;
CREATE TABLE IF NOT EXISTS `pencarian` (
  `kd_pembeli` int(3) NOT NULL,
  `kd_buku` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `get_book`
--
ALTER TABLE `get_book`
 ADD PRIMARY KEY (`kd_buku`,`kd_toko`), ADD KEY `kd_toko` (`kd_toko`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
 ADD PRIMARY KEY (`kd_toko`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
 ADD PRIMARY KEY (`kd_pembeli`);

--
-- Indexes for table `pencarian`
--
ALTER TABLE `pencarian`
 ADD PRIMARY KEY (`kd_pembeli`,`kd_buku`), ADD KEY `kd_buku` (`kd_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `kd_buku` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
MODIFY `kd_pembeli` int(3) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `get_book`
--
ALTER TABLE `get_book`
ADD CONSTRAINT `get_book_ibfk_1` FOREIGN KEY (`kd_toko`) REFERENCES `lokasi` (`kd_toko`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `get_book_ibfk_2` FOREIGN KEY (`kd_buku`) REFERENCES `pencarian` (`kd_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pencarian`
--
ALTER TABLE `pencarian`
ADD CONSTRAINT `pencarian_ibfk_1` FOREIGN KEY (`kd_pembeli`) REFERENCES `pembeli` (`kd_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pencarian_ibfk_2` FOREIGN KEY (`kd_buku`) REFERENCES `buku` (`KD_BUKU`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
