-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2020 pada 14.00
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danusanku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(3) NOT NULL,
  `namabrg` varchar(100) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `vendor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `namabrg`, `gambar`, `vendor`) VALUES
(1, 'Beng- Beng', 'https://cf.shopee.co.id/file/835fd891901ceaa8d2579805100fa55c', 'Alfamart'),
(2, 'Lifebuoy', 'https://www.lifebuoy.co.id/sk-eu/content/dam/brands/lifebuoy/indonesia/1883040-hwl---low-01.jpg.rendition.380.380.jpg', 'Toko Pak Ahmad'),
(3, 'Gorengan', 'https://ruangbisnis.co.id/wp-content/uploads/2020/04/image1-2.jpg', 'Kang Gorengan'),
(4, 'Pulpen', 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/3/16/10502548/10502548_dfbcb614-2f6c-4e6b-b320-1457df53be5e_800_800.jpg', 'Fotokopi Ceria'),
(5, 'Voucher Wifi.id', 'https://cf.shopee.co.id/file/918312635d114ac8c4839d3e970a2ca9', 'Asrama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(3) NOT NULL,
  `user` varchar(25) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `kuantitas` int(3) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `user`, `produk`, `kuantitas`, `status`) VALUES
(3, 'admin', 'Beng- Beng', 6, 'Selesai'),
(6, 'admin', 'Lifebuoy', 4, 'Pending'),
(7, 'admin2', 'Beng- Beng', 20, 'Pending'),
(8, 'admin2', 'Voucher Wifi.id', 1, 'Pending'),
(9, 'admin', 'Pulpen', 2, 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `org` varchar(100) NOT NULL,
  `kampus` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nama`, `email`, `org`, `kampus`, `password`) VALUES
('admin', 'Super User', 'aa@mail.com', 'danus', 'telyu', 'admin'),
('admin2', 'SUDOOO', 'kul@ia.h', 'BEM', 'telyu', 'admin2'),
('admin3', 'admin tiga', 'admin3@danusanku.com', 'BEM', 'telyu', 'admin3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
