-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2020 pada 05.24
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuisioner2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_puas`
--

CREATE TABLE `tb_puas` (
  `id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_puas`
--

INSERT INTO `tb_puas` (`id`, `nilai`, `tanggal`) VALUES
(1, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sangat_puas`
--

CREATE TABLE `tb_sangat_puas` (
  `id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sangat_puas`
--

INSERT INTO `tb_sangat_puas` (`id`, `nilai`, `tanggal`) VALUES
(1, 1, '0000-00-00'),
(2, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tidak_puas`
--

CREATE TABLE `tb_tidak_puas` (
  `id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tidak_puas`
--

INSERT INTO `tb_tidak_puas` (`id`, `nilai`, `tanggal`) VALUES
(1, 1, '0000-00-00'),
(2, 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_puas`
--
ALTER TABLE `tb_puas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sangat_puas`
--
ALTER TABLE `tb_sangat_puas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tidak_puas`
--
ALTER TABLE `tb_tidak_puas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_puas`
--
ALTER TABLE `tb_puas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sangat_puas`
--
ALTER TABLE `tb_sangat_puas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_tidak_puas`
--
ALTER TABLE `tb_tidak_puas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
