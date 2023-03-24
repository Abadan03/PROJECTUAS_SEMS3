-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2023 pada 04.23
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `username_admin` varchar(255) DEFAULT NULL,
  `password_admin` varchar(130) DEFAULT NULL,
  `email_admin` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username_admin`, `password_admin`, `email_admin`) VALUES
(1, 'Angela', 'admin', 'admin1', 'angela@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `penumpang_id` int(11) DEFAULT NULL,
  `jadwalpenerbangan_id` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `penumpang_id`, `jadwalpenerbangan_id`, `nama_lengkap`, `tgl_booking`) VALUES
(2, 1, 1, 'Akbar Bintang Mahendra', '2023-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `pesawat_id` int(11) DEFAULT NULL,
  `nama_class` varchar(255) DEFAULT NULL,
  `jumlah_kursi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`id`, `pesawat_id`, `nama_class`, `jumlah_kursi`) VALUES
(20, 1, 'Bussiness Class', 897),
(22, 1, 'Economy', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalpenerbangan`
--

CREATE TABLE `jadwalpenerbangan` (
  `id` int(11) NOT NULL,
  `pesawat_id` int(11) DEFAULT NULL,
  `tgl_keberangkatan` date DEFAULT NULL,
  `asal_kota` varchar(255) DEFAULT NULL,
  `kota_tujuan` varchar(130) DEFAULT NULL,
  `jam_berangkat` datetime DEFAULT NULL,
  `jam_tiba` datetime DEFAULT NULL,
  `bandara_tujuan` varchar(255) DEFAULT NULL,
  `harga_tiket` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwalpenerbangan`
--

INSERT INTO `jadwalpenerbangan` (`id`, `pesawat_id`, `tgl_keberangkatan`, `asal_kota`, `kota_tujuan`, `jam_berangkat`, `jam_tiba`, `bandara_tujuan`, `harga_tiket`) VALUES
(4, 1, '2023-02-10', 'Juanda', 'Denpasar', '2023-02-09 18:53:00', '2023-02-09 23:58:00', 'IGNR', 'Rp.7.000.000'),
(5, 3, '2023-02-11', 'Denpasar', 'Juanda', '2023-02-11 22:14:00', '2023-02-11 14:20:00', 'JUANDA', 'Rp.6.000.000'),
(6, 1, '2023-01-19', 'LabuanBajo', 'Juanda', '2023-02-04 12:17:00', '2023-02-04 13:22:00', 'Soa', 'Rp.2.000.000'),
(7, 1, '2023-02-02', 'Denpasar', 'Solo', '2023-02-02 23:32:00', '2023-02-02 00:33:00', 'AS', 'Rp.9.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpang`
--

CREATE TABLE `penumpang` (
  `id` int(11) NOT NULL,
  `nama_p` varchar(255) DEFAULT NULL,
  `username_p` varchar(255) DEFAULT NULL,
  `password_p` varchar(130) DEFAULT NULL,
  `email_p` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penumpang`
--

INSERT INTO `penumpang` (`id`, `nama_p`, `username_p`, `password_p`, `email_p`) VALUES
(1, 'akbar gtg', 'akbor1', 'akborr', 'akborgtgg@gmail.com'),
(4, 'ada', 'ada123', 'yui', 'ada@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesawat`
--

CREATE TABLE `pesawat` (
  `id` int(11) NOT NULL,
  `tipe_pesawat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesawat`
--

INSERT INTO `pesawat` (`id`, `tipe_pesawat`) VALUES
(1, 'LION-AIR JET 124'),
(2, 'AIR ASIA SUPER-JET'),
(3, 'GARUDA INDONESIA BOEING');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `tgl_cetak` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id`, `booking_id`, `tgl_cetak`) VALUES
(1, 2, '2023-01-31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penumpang_id` (`penumpang_id`),
  ADD KEY `jadwalpenerbangan_id` (`jadwalpenerbangan_id`);

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesawat_id` (`pesawat_id`);

--
-- Indeks untuk tabel `jadwalpenerbangan`
--
ALTER TABLE `jadwalpenerbangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesawat_id` (`pesawat_id`);

--
-- Indeks untuk tabel `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `jadwalpenerbangan`
--
ALTER TABLE `jadwalpenerbangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`pesawat_id`) REFERENCES `pesawat` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwalpenerbangan`
--
ALTER TABLE `jadwalpenerbangan`
  ADD CONSTRAINT `jadwalpenerbangan_ibfk_1` FOREIGN KEY (`pesawat_id`) REFERENCES `pesawat` (`id`);

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
