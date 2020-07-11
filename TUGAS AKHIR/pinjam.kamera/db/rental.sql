-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2020 pada 10.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `foto` varchar(125) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama`, `harga`, `ket`, `foto`) VALUES
(16, 'Kamera nikon', 150000, 'Wajib DP 50%', 'Hayuning-Tech.png'),
(17, 'Tripod', 120000, 'Kembali dalam 2 hari', 'noodles.png'),
(18, 'kamera nikon', 7000000, 'bayar diawal', 'UDINUS.png'),
(19, 'tripod hp', 150000, 'tidak boleh telat', 'logo.png'),
(20, 'tripod', 12000, 'dp 30%', 'kamera-mirrorless-murah-wp.jpg'),
(21, 'Kamera nikon', 13, 'tyfhnb', 'UDINUS.png'),
(22, 'tripod', 9, 'hjhjm,lk', 'kamera-mirrorless-murah-wp.jpg'),
(23, 'kamera', 9, 'ok', 'noodles.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `nama`, `alamat`, `no_hp`) VALUES
(8, 'farah', 'jangli timur', '081 234 567 8910'),
(2, 'Yanti', 'Muntilan', '087766554454'),
(3, 'Lastri', 'Mertoyudan', '085244343215'),
(5, 'Yoga', 'Ciaul', '08975422'),
(6, 'rica', 'Jl sadewa no.10', '081 234 567 8910'),
(7, 'Atika Indah', 'Jl bima 1', '081 234 567 8910'),
(9, 'dinda', 'Jl arjuna no.34', '081 234 567 8910');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id_sewa` int(10) UNSIGNED NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `tgl_sewa` date DEFAULT NULL,
  `lama` int(11) DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `aktif` tinyint(1) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sewa`
--

INSERT INTO `tb_sewa` (`id_sewa`, `id_member`, `id_barang`, `jml`, `tgl_sewa`, `lama`, `tgl_kembali`, `aktif`) VALUES
(6, 1, 16, 1, '2019-08-28', 4, '2019-08-28', 0),
(5, 1, 17, 1, '2019-08-28', 3, '2019-08-28', 0),
(7, 5, 16, 1, '2020-01-30', 3, '2020-07-08', 0),
(8, 3, 17, 2, '2020-07-08', 3, '2020-07-09', 0),
(9, 7, 16, 5, '2020-07-09', 5, NULL, 1),
(10, 6, 17, 6, '2020-07-09', 9, NULL, 1),
(11, 3, 16, 2, '2020-07-09', 7, NULL, 1),
(12, 5, 17, 5, '2020-07-09', 10, NULL, 1),
(13, 6, 16, 4, '2020-07-09', 1, NULL, 1),
(14, 2, 16, 2, '2020-07-09', 4, NULL, 1),
(15, 8, 17, 3, '2020-07-09', 5, NULL, 1),
(16, 9, 16, 3, '2020-07-09', 7, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `role` varchar(125) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `pass`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'owner', 'owner', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  MODIFY `id_sewa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
