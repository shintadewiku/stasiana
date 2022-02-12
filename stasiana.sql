-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2018 pada 09.03
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stasiana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adminn`
--

INSERT INTO `adminn` (`id`, `username`, `password`) VALUES
(1, 'malasngoding', '10406c1d7b7421b1a56f0d951e952a95'),
(2, 'cek', '2385948a5a90992e7a7715d1ea510e03'),
(3, 'bapak', 'f3770595e0cb4d9a988bd5da98d2187d'),
(4, 'bnpb', '7d3321956445b711dfd223656704e9fc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bpbd`
--

CREATE TABLE `bpbd` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bpbd`
--

INSERT INTO `bpbd` (`id`, `username`, `password`) VALUES
(1, 'masuk', 'f3770595e0cb4d9a988bd5da98d2187d'),
(2, 'bpbd', '320496dba70303f2e3a1f7ee47e20f28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_laporan`
--

CREATE TABLE `data_laporan` (
  `no` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ktp` int(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` int(13) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` int(20) NOT NULL,
  `kec` int(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pos` int(5) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `bukti` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_laporan`
--

INSERT INTO `data_laporan` (`no`, `nama`, `ktp`, `email`, `tel`, `jenis`, `provinsi`, `kota`, `kec`, `alamat`, `pos`, `lokasi`, `deskripsi`, `bukti`, `status`) VALUES
(1, 'shh', 134567, 'bvcx@gmail.com', 652345678, 'sdfgh', 'fg', 0, 0, 'dfgn', 56678, 'vb', 'bn', 'fgh', 'Diverifikasi'),
(4, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Papua Barat', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', '', ''),
(9, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Yogyakarta', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', 'C:\\Users\\Shinta Dewi\\Pictures\\ui\\template_960 grid', ''),
(10, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Yogyakarta', 0, 0, 'Magelang', 57781, 'da', 'ad', '0', ''),
(11, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Aceh', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', '0', ''),
(12, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Kepulauan Riau', 0, 0, 'Magelang', 57781, 'da', 'ad', '0', ''),
(13, 'a', 789, 'sda@gmail.com', 9888, 'sad', 'Kalimantan Tengah', 0, 0, 'Magelang', 57781, 'da', 'ad', '1', ''),
(14, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Aceh', 0, 0, 'Magelang', 57781, 'da', 'ad', '1', ''),
(15, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Kalimantan Tengah', 0, 0, 'Magelang', 57781, 'da', 'ad', 'uploads/Prototype_sitemap.jpg', ''),
(16, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Aceh', 0, 0, 'Magelang', 57781, 'da', 'ad', 'uploads/logindinas.png', ''),
(17, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Aceh', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(18, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Kalimantan Timur', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(19, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Aceh', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(20, 'shinta', 789, 'sda@gmail.com', 9888, 'sad', 'Aceh', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(21, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Utara', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(22, 'Shaulla Permata', 12, 'sda@gmail.com', 12, 'sad', 'Maluku', 0, 0, 'Ngaglik, Sleman, Yogyakarta', 57781, 'da', 'ad', '', ''),
(23, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Tengah', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(24, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Jawa Tengah', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(25, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Gorontalo', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(26, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Banten', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(27, 'Athallas', 12, 'sda@gmail.com', 12, 'sa', 'Maluku', 0, 0, 'NBSHGSH', 5777, 'da', 'ad', '', ''),
(28, 'a', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Tengah', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(29, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Bengkulu', 0, 0, 'Magelang', 57781, 'da', 'ad', '', ''),
(30, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Jawa Timur', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', '', ''),
(31, 'jsa', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Selatan', 0, 0, 'Magelang', 57781, 'da', 'ad', '580b57fcd9996e24bc43c53e2.png', ''),
(32, 'a', 12, 'sda@gmail.com', 12, 'sad', 'Jawa Timur', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', '5847eb8bcef1014c0b5e48511.png', ''),
(33, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Aceh', 0, 0, 'Magelang', 57781, 'da', 'ad', 'black_cat_black_and_white.png', ''),
(34, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Barat', 0, 0, 'Magelang', 57781, 'da', 'ad', 'cat.jpg', ''),
(35, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Barat', 0, 0, 'Magelang', 57781, 'da', 'ad', 'log.jpg', ''),
(36, 'Shinta Dewi', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Barat', 0, 0, 'Magelang', 57781, 'da', 'ad', 'gmail.png', ''),
(37, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Barat', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', 'gmail1.png', ''),
(38, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Jambi', 0, 0, 'Magelang', 57781, 'da', 'ad', 'bencana.jpg', ''),
(39, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Barat', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', 'sunset.jpg', ''),
(40, 'Athallas', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Barat', 0, 0, 'Magelang', 57781, 'da', 'ad', 'logos1.png', ''),
(41, 'a', 12, 'sda@gmail.com', 12, 'sa', 'Kalimantan Barat', 0, 0, 'Magelang', 57781, 'da', 'ad', 'sunset1.jpg', ''),
(42, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Tengah', 0, 0, 'Magelang', 57781, 'da', 'ad', 'black_cat_black_and_white1.png', ''),
(43, 'shinta', 12, 'sda@gmail.com', 12, 'sa', 'Jawa Tengah', 0, 0, 'Bantul, Yogyakarta', 5777, 'da', 'ad', '5847eb8bcef1014c0b5e48512.png', ''),
(44, 'shinta', 123456, 'sdfg@gmail.com', 3456789, 'erfghjk', 'Maluku', 0, 0, 'dfgh', 456, 'bnm', 'vbn', '11.PNG', ''),
(45, 'shinta', 123456, 'sdfg@gmail.com', 123456, 'sa', 'Jawa Tengah', 0, 0, 'Magelang', 57781, 'da', 'S', '580b57fcd9996e24bc43c53e3.png', ''),
(46, 'shinta', 123456, 'sdfg@gmail.com', 123456, 'sad', 'Kalimantan Barat', 0, 0, 'Magelang', 57781, 'da', 'ad', '580b57fcd9996e24bc43c53e4.png', ''),
(47, 'shinta', 123456, 'sdfg@gmail.com', 123456, 'sa', 'Jawa Tengah', 0, 0, 'Magelang', 57781, 'da', 'ad', '580b57fcd9996e24bc43c53e5.png', ''),
(48, 'shinta', 123456, 'sdfg@gmail.com', 123456, 'sad', 'Kalimantan Barat', 0, 0, 'Magelang', 5777, 'da', 'ad', 'no-gravatar-meow-around-24483b872bfd6e5cd1954267954b3f49fc8b55ec7a3a48481a6510576c1c4550.png', ''),
(49, 'shinta', 123456, 'sdfg@gmail.com', 123456, 'sad', 'Kepulauan Bangka Bel', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', '580b57fcd9996e24bc43c53e6.png', ''),
(50, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(51, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(52, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(53, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(54, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(55, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(56, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(57, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(58, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(59, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(60, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(61, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(62, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(63, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(64, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(65, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(66, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Jawa Tengah', 0, 0, 'Magelang', 5777, 'da', 'S', '580b57fcd9996e24bc43c53e7.png', ''),
(67, 'sa', 2343, 'sda@gmail.com', 12, 'sad', 'Jawa Timur', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', '580b57fcd9996e24bc43c53e8.png', ''),
(68, 'shinta', 2343, 'sda@gmail.com', 2343, 'sad', 'Maluku Utara', 0, 0, 'Bantul, Yogyakarta', 5777, 'da', 'ad', '580b57fcd9996e24bc43c53e9.png', ''),
(69, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(70, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(71, 'shinta', 2343, 'sda@gmail.com', 2343, 'sad', 'Kepulauan Riau', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'S', '5847eb8bcef1014c0b5e48513.png', ''),
(72, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(73, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(74, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(75, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(76, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(77, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(78, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(79, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(80, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(81, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(82, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(83, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(84, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(85, 'shinta', 2343, 'sda@gmail.com', 2343, 'sa', 'Kalimantan Selatan', 0, 0, 'Bantul, Yogyakarta', 5777, 'da', 'ad', 'cloud-157524_960_720.png', ''),
(86, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(87, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(88, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(89, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(90, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kepulauan Bangka Bel', 0, 0, 'Bantul, Yogyakarta', 5777, 'da', 'vbn', 'cat1.jpg', ''),
(91, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Kalimantan Timur', 0, 0, 'Bantul, Yogyakarta', 5777, 'da', 'ad', '580b57fcd9996e24bc43c53e10.png', ''),
(92, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(93, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(94, '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', ''),
(95, 'shinta', 12, 'sda@gmail.com', 12, 'sad', 'Maluku', 0, 0, 'Bantul, Yogyakarta', 57781, 'da', 'ad', '580b57fcd9996e24bc43c53e12.png', 'Tolak Diverifikasi'),
(96, 'Shinta Dewi', 2343, 'sda@gmail.com', 123456, 'erfghjk', 'Kepulauan Bangka Bel', 0, 0, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 23456, 'dfgy54e', 'dffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffsztgesthtfgssaygbdxhfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '580b57fcd9996e24bc43c53e13.png', 'Diverifikasi'),
(97, 'Shaulla Permata', 123456, 'sdfg@gmail.com', 12, 'erfghjk', 'Kepulauan Bangka Bel', 0, 0, 'Magelang', 57781, 'dfgy54e', 'S', 'gmail2.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dinas`
--

CREATE TABLE `dinas` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dinas`
--

INSERT INTO `dinas` (`id`, `username`, `password`) VALUES
(1, 'ayok', 'c317ccbb118d2781da9846a897bff9c2'),
(2, 'dinas', '097dad4a551e3cb88ed7afc7a6c0de40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `nama_file`) VALUES
(1, '1.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `id_pelapor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelapor`
--

INSERT INTO `pelapor` (`id_pelapor`) VALUES
(1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bpbd`
--
ALTER TABLE `bpbd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_laporan`
--
ALTER TABLE `data_laporan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bpbd`
--
ALTER TABLE `bpbd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_laporan`
--
ALTER TABLE `data_laporan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `dinas`
--
ALTER TABLE `dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
