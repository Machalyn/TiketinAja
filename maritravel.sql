-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Nov 2019 pada 07.59
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maritravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bandara`
--

CREATE TABLE `bandara` (
  `id_bandara` varchar(5) NOT NULL,
  `nama_bandara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kereta`
--

CREATE TABLE `kereta` (
  `id_kereta` varchar(5) NOT NULL,
  `nama_k` varchar(20) NOT NULL,
  `kursi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `nama_k`, `kursi`) VALUES
('AG01', 'Argo Parahyangan', 211),
('AGP01', 'Argo Dwipangga', 211),
('JS01', 'jasa maja', 210);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` varchar(10) NOT NULL,
  `nama_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
('1', 'Admin'),
('2', 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_kereta`
--

CREATE TABLE `pemesanan_kereta` (
  `id_pemesanan_k` varchar(5) NOT NULL,
  `kode_pemesanan_k` varchar(10) NOT NULL,
  `tanggal_pemesanan` varchar(20) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `id_rutek` varchar(5) NOT NULL,
  `id_petugas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_pesawat`
--

CREATE TABLE `pemesanan_pesawat` (
  `id_pemesanan` varchar(5) NOT NULL,
  `kode_pemesanan` varchar(10) NOT NULL,
  `tanggal_pemesanan` varchar(20) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `id_rute` varchar(10) NOT NULL,
  `id_petugas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpang`
--

CREATE TABLE `penumpang` (
  `nama_penumpang` varchar(30) NOT NULL,
  `telpon` varchar(12) NOT NULL,
  `title` varchar(10) NOT NULL,
  `id_pemesanan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpang_kereta`
--

CREATE TABLE `penumpang_kereta` (
  `title` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_telpon` int(12) NOT NULL,
  `id_pemesanan_k` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jumlah_kursi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `nama`, `jumlah_kursi`) VALUES
('ps001', 'Lion Air', 215),
('ps002', 'Garuda', 102),
('ps003', 'Air Asia', 145),
('ps004', 'Citi link', 120);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(11) NOT NULL,
  `nama_petugas` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute_kereta`
--

CREATE TABLE `rute_kereta` (
  `id_rutek` varchar(5) NOT NULL,
  `first_route` varchar(20) NOT NULL,
  `last_route` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `id_kereta` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute_kereta`
--

INSERT INTO `rute_kereta` (`id_rutek`, `first_route`, `last_route`, `price`, `id_kereta`) VALUES
('Bdg00', 'Bandung', 'Yogyakarta', 265000, 'JS01'),
('jkt01', 'jakarta', 'tulung agung', 250000, 'JS01'),
('ML001', 'Malang', 'Surarta', 275000, 'AGP01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute_pesawat`
--

CREATE TABLE `rute_pesawat` (
  `id_rute` varchar(10) NOT NULL,
  `rute_awal` text NOT NULL,
  `rute_akhir` text NOT NULL,
  `harga` int(11) NOT NULL,
  `id_pesawat` varchar(5) NOT NULL,
  `jam_berangkat` varchar(6) NOT NULL,
  `jam_tiba` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute_pesawat`
--

INSERT INTO `rute_pesawat` (`id_rute`, `rute_awal`, `rute_akhir`, `harga`, `id_pesawat`, `jam_berangkat`, `jam_tiba`) VALUES
('Bal001', 'Bali ', 'Jakarta', 250000, 'ps002', '12.00', '03:50'),
('jk001', 'Jakarta', 'Bali', 250000, 'ps002', '12.00', '21.30'),
('sem001', 'Jakarta', 'Semarang', 350000, 'ps002', '10.00', '21.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`id_bandara`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pemesanan_kereta`
--
ALTER TABLE `pemesanan_kereta`
  ADD PRIMARY KEY (`id_pemesanan_k`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_rutek` (`id_rutek`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pemesanan_pesawat`
--
ALTER TABLE `pemesanan_pesawat`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `penumpang_kereta`
--
ALTER TABLE `penumpang_kereta`
  ADD KEY `id_pemesanan_k` (`id_pemesanan_k`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `rute_kereta`
--
ALTER TABLE `rute_kereta`
  ADD PRIMARY KEY (`id_rutek`),
  ADD KEY `id_kereta` (`id_kereta`);

--
-- Indexes for table `rute_pesawat`
--
ALTER TABLE `rute_pesawat`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `id_pesawat` (`id_pesawat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan_kereta`
--
ALTER TABLE `pemesanan_kereta`
  ADD CONSTRAINT `pemesanan_kereta_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pemesanan_kereta_ibfk_2` FOREIGN KEY (`id_rutek`) REFERENCES `rute_kereta` (`id_rutek`),
  ADD CONSTRAINT `pemesanan_kereta_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pemesanan_pesawat`
--
ALTER TABLE `pemesanan_pesawat`
  ADD CONSTRAINT `pemesanan_pesawat_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pemesanan_pesawat_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute_pesawat` (`id_rute`),
  ADD CONSTRAINT `pemesanan_pesawat_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `penumpang`
--
ALTER TABLE `penumpang`
  ADD CONSTRAINT `penumpang_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan_pesawat` (`id_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `penumpang_kereta`
--
ALTER TABLE `penumpang_kereta`
  ADD CONSTRAINT `penumpang_kereta_ibfk_1` FOREIGN KEY (`id_pemesanan_k`) REFERENCES `pemesanan_kereta` (`id_pemesanan_k`);

--
-- Ketidakleluasaan untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

--
-- Ketidakleluasaan untuk tabel `rute_kereta`
--
ALTER TABLE `rute_kereta`
  ADD CONSTRAINT `rute_kereta_ibfk_1` FOREIGN KEY (`id_kereta`) REFERENCES `kereta` (`id_kereta`);

--
-- Ketidakleluasaan untuk tabel `rute_pesawat`
--
ALTER TABLE `rute_pesawat`
  ADD CONSTRAINT `rute_pesawat_ibfk_1` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
