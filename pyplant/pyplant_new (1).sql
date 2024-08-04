-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2024 pada 05.27
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyplant_new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_tanaman`
--

CREATE TABLE `jenis_tanaman` (
  `id_jenis_tanaman` char(1) NOT NULL,
  `nama_jenis_tanaman` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_tanaman`
--

INSERT INTO `jenis_tanaman` (`id_jenis_tanaman`, `nama_jenis_tanaman`) VALUES
('0', 'Organik'),
('1', 'Anorganik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_tanaman`
--

CREATE TABLE `kategori_tanaman` (
  `id_kategori_tanaman` char(1) NOT NULL,
  `nama_kategori_tanaman` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_tanaman`
--

INSERT INTO `kategori_tanaman` (`id_kategori_tanaman`, `nama_kategori_tanaman`) VALUES
('0', 'Sayur'),
('1', 'Buah'),
('2', 'Bunga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media_tanam`
--

CREATE TABLE `media_tanam` (
  `id_media_tanam` char(2) NOT NULL,
  `nama_media_tanam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `media_tanam`
--

INSERT INTO `media_tanam` (`id_media_tanam`, `nama_media_tanam`) VALUES
('0', 'Hidroponik'),
('1', 'Pot'),
('2', 'Tanah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` char(4) NOT NULL,
  `id_pengguna` int(4) NOT NULL,
  `nama_notifikasi` varchar(20) NOT NULL,
  `tanggal_jam_notifikasi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username_pengguna` varchar(15) NOT NULL,
  `nama_pengguna` varchar(25) DEFAULT NULL,
  `telp_pengguna` varchar(15) DEFAULT NULL,
  `password_pengguna` char(7) NOT NULL,
  `status_pengguna` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username_pengguna`, `nama_pengguna`, `telp_pengguna`, `password_pengguna`, `status_pengguna`) VALUES
(1, 'asd', 'asd', '00000', 'dsa', '0'),
(2, 'Admin1', 'Admin1', '00000', '123', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` char(4) NOT NULL,
  `id_media_tanam` char(2) NOT NULL,
  `id_jenis_tanaman` char(1) NOT NULL,
  `id_kategori_tanaman` char(1) NOT NULL,
  `nama_tanaman` varchar(20) NOT NULL,
  `deskripsi_tanaman` varchar(50) NOT NULL,
  `cara_merawat_tanaman` varchar(500) NOT NULL,
  `tanah_tanaman` varchar(100) NOT NULL,
  `cuaca_tanaman` varchar(100) NOT NULL,
  `gambar_tanaman` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanaman`
--

INSERT INTO `tanaman` (`id_tanaman`, `id_media_tanam`, `id_jenis_tanaman`, `id_kategori_tanaman`, `nama_tanaman`, `deskripsi_tanaman`, `cara_merawat_tanaman`, `tanah_tanaman`, `cuaca_tanaman`, `gambar_tanaman`) VALUES
('0', '1', '1', '0', 'Sawi ungu', 'aaaa bbbbbbb cccccccc', 'aaaa bbbbbbb cccccccc', '123', '321', 0x89504e470d0a1a0a0000000d494844520000001e0000001e08060000003b30aea2000000097048597300000b1300000b1301009a9c18000000017352474200aece1ce90000000467414d410000b18f0bfc610500000045494441547801edd7310d00200c44d12bc1163610890d84c10806e012f87f6aa797746b481a329464ca06e77da95d476b65cdff9d1a1818181818181818f86138c40b73a90967f2043b67e5fe5e0000000049454e44ae426082),
('2', '0', '0', '0', 'Sawi', '123', '321', '123', '321', 0x89504e470d0a1a0a0000000d494844520000001e0000001e08060000003b30aea2000000097048597300000b1300000b1301009a9c18000000017352474200aece1ce90000000467414d410000b18f0bfc610500000045494441547801edd7310d00200c44d12bc1163610890d84c10806e012f87f6aa797746b481a329464ca06e77da95d476b65cdff9d1a1818181818181818f86138c40b73a90967f2043b67e5fe5e0000000049454e44ae426082);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  ADD PRIMARY KEY (`id_jenis_tanaman`);

--
-- Indeks untuk tabel `kategori_tanaman`
--
ALTER TABLE `kategori_tanaman`
  ADD PRIMARY KEY (`id_kategori_tanaman`);

--
-- Indeks untuk tabel `media_tanam`
--
ALTER TABLE `media_tanam`
  ADD PRIMARY KEY (`id_media_tanam`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`),
  ADD KEY `fk_notifikasi_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `fk_mediatanam_tanaman` (`id_media_tanam`),
  ADD KEY `fk_jenistanaman_tanaman` (`id_jenis_tanaman`),
  ADD KEY `fk_kategoritanaman_tanaman` (`id_kategori_tanaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `fk_notifikasi_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `tanaman`
--
ALTER TABLE `tanaman`
  ADD CONSTRAINT `fk_jenistanaman_tanaman` FOREIGN KEY (`id_jenis_tanaman`) REFERENCES `jenis_tanaman` (`id_jenis_tanaman`),
  ADD CONSTRAINT `fk_kategoritanaman_tanaman` FOREIGN KEY (`id_kategori_tanaman`) REFERENCES `kategori_tanaman` (`id_kategori_tanaman`),
  ADD CONSTRAINT `fk_mediatanam_tanaman` FOREIGN KEY (`id_media_tanam`) REFERENCES `media_tanam` (`id_media_tanam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
