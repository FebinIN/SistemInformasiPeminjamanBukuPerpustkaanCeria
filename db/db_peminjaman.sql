-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 31. Juli 2012 jam 00:40
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_peminjaman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali`
--

CREATE TABLE IF NOT EXISTS `kembali` (
  `No_Buku` varchar(8) NOT NULL,
  `Nama_Anggota` varchar(50) NOT NULL,
  `Tanggal_Pengembalian` date NOT NULL,
  `Judul_Buku` varchar(50) NOT NULL,
  `Pengarang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kembali`
--

INSERT INTO `kembali` (`No_Buku`, `Nama_Anggota`, `Tanggal_Pengembalian`, `Judul_Buku`, `Pengarang`) VALUES
('BHI-0001', 'Febin Ramdanu', '2019-02-01', 'Berbahasa Indonesia Dengan Baik', 'Nasution'),
('PJS-0001', 'Melinda Sari', '2018-12-20', 'Olahraga Air ', 'R Jason');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE IF NOT EXISTS `pinjam` (
  `No_Buku` varchar(8) NOT NULL,
  `Nama_Anggota` varchar(50) NOT NULL,
  `Tanggal_Peminjaman` date NOT NULL,
  `Judul_Buku` varchar(50) NOT NULL,
  `Pengarang` varchar(25) NOT NULL,
  PRIMARY KEY (`No_Buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`No_Buku`, `Nama_Anggota`, `Tanggal_Peminjaman`, `Judul_Buku`, `Pengarang`) VALUES
('BHI-0001', 'Febin Ramdanu', '2019-01-15', 'Berbahasa Indonesia Dengan Baik', 'Nasution'),
('IPA-0001', 'Ely Agustin', '2019-01-02', 'Sistem Reproduksi', 'Jhon Suhayati'),
('MMT-0001', 'Melinda ', '2019-01-03', 'Rumus Teorima Phytagoras', 'Widodo'),
('PJS-0001', 'Melinda Sari', '2018-12-14', 'Olahraga Air ', 'R Jason'),
('SJH-0001', 'Febin Ramdanu', '2019-01-01', 'Sejarah Manusia Purba', 'Agustin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('15220000', 'dadd944dee612184c01892cd70f6d27b', 'muhammadfebrin05@gmail.com', 'Muhammad Febin Ramdanu', 1, 'Programmer'),
('15220325', '6cb2c2abcc715bc78d4e0f593a14241d', 'watii3416@gmail.com', 'Irmawati', 1, 'Programmer'),
('15220515', '1e34203c8f1ca51bfadc0dd34ec2e37e', 'nizariamarketing01@gmail.com', 'Nizaria', 1, 'Programmer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
