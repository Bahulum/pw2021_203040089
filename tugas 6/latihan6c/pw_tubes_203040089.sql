-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2021 pada 14.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040089`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sembako`
--

CREATE TABLE `sembako` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Nama_barang` varchar(100) NOT NULL,
  `Merk` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sembako`
--

INSERT INTO `sembako` (`id`, `Gambar`, `Nama_barang`, `Merk`, `Harga`, `Stok`) VALUES
(2, 'susukental.jpg', 'Susu kental manis', 'Frisian flag', 'Rp. 11.000', 476),
(3, 'minyaksania.jpg', 'Minyak goreng', 'Sania', 'Rp. 27.000', 12),
(4, 'bumbukaldu.jpg', 'Bumbu kaldu ayam', 'Roico', 'Rp. 8.500', 1201),
(5, 'minyakgoreng.jpg', 'Minyak goreng', 'Rosebrand', 'Rp. 28.500', 473),
(6, 'beras.jpg', 'Beras', 'Nanas madu', 'Rp. 53.000', 830),
(7, 'mieinstan.jpg', 'Mie goreng instan', 'indomie', 'Rp. 2.500', 1168),
(8, 'tepungterigu.jpg', 'Tepung terigu', 'Segitiga biru', 'Rp. 11.000', 756),
(9, 'tehcelup.jpg', 'Teh celup', 'sosro', 'Rp. 5.700', 1265),
(10, 'susukaleng.jpg', 'Susu kaleng', 'Bearbrand', 'Rp. 10.000', 304),
(13, 'kecapmanis.jpg', 'Kecap manis', 'Bango', 'Rp. 20.000', 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'ulum', '$2y$10$6QQ2GSEc1Qz21I23OYal1u/Alk4chJrvAl8YD1RILfixuslnB5jBK'),
(4, 'anisa', '$2y$10$OI/dnIfre0eJJmB7dvUxpOWrf9ObRwYxz67ufvmeqNtOUXs8m985m');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sembako`
--
ALTER TABLE `sembako`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sembako`
--
ALTER TABLE `sembako`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
