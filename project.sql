-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 25. Juli 2014 jam 10:21
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `barang_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(70) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`barang_id`, `nama_barang`, `harga`) VALUES
(62, 'ikan bakar', 23000),
(61, 'sapi bakar', 45000),
(60, 'ayam bakar', 5000),
(59, 'ayam goreng', 4000),
(58, 'gorengan', 1000),
(57, 'bakso', 9000),
(56, 'mie ayam', 8000),
(55, 'indomie', 16000),
(54, 'sabun lifeboy', 2000),
(53, 'shampo rejoice', 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `download_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  PRIMARY KEY (`download_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`download_id`, `nama_file`, `ukuran`) VALUES
(14, 'php-dedicated_copy.jpg', 174),
(12, 'users.sql', 1290),
(11, 'CodeIgniter_2.1.4.zip', 2305259),
(9, 'CodeIgniter_2.1.4.zip', 2305259),
(15, 'form_transaksi.JPG', 69),
(16, 'php-dedicated copy.jpg', 174),
(17, 'php-dedicated_copy.jpg', 174);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`kode_transaksi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `users_id`, `tanggal_transaksi`, `total`) VALUES
(1, 1, '2014-06-24', 40000),
(2, 2, '2014-06-21', 543000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `last_login`) VALUES
(1, 'nurisakbar', '74d7273be4b0ddeac49bfa169b288c5b', '2014-06-24'),
(2, 'ida', '7f78f270e3e1129faf118ed92fdf54db', '2014-06-27'),
(4, 'nuris', '74d7273be4b0ddeac49bfa169b288c5b', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
