-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2023 pada 17.24
-- Versi server: 8.0.30
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjingers`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `game_data`
--

CREATE TABLE `game_data` (
  `playerID` varchar(100) NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `game_data`
--

INSERT INTO `game_data` (`playerID`, `id_kategori`, `nama_pengguna`) VALUES
('374591680545949', 1, 'Ryuuzi'),
('539479367353501', 1, '$SUDI$'),
('678399220', 11, 'UDIN'),
('135590172296349', 1, 'Muhammad_18.12.0628');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode` int NOT NULL,
  `nama_metode` varchar(40) NOT NULL,
  `jenis_metode` varchar(50) NOT NULL,
  `nomor_metode` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metode`, `nama_metode`, `jenis_metode`, `nomor_metode`) VALUES
(1, 'Bank Syariah Mandiri (BSM)', 'BANK', '6836549825'),
(2, 'DANA', 'E-Money', '085348502700'),
(3, 'OVO', 'E-Money', '085348502700'),
(4, 'GOPAY', 'E-Money', '085348502700');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int NOT NULL,
  `tanggal` date NOT NULL,
  `produk` int NOT NULL,
  `playerID` varchar(100) NOT NULL,
  `nominal` int NOT NULL,
  `harga` int NOT NULL,
  `id_metode` int NOT NULL,
  `bukti_tf` varchar(128) NOT NULL,
  `dataNota` varchar(100) DEFAULT NULL,
  `statusP` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `tanggal`, `produk`, `playerID`, `nominal`, `harga`, `id_metode`, `bukti_tf`, `dataNota`, `statusP`) VALUES
(1, '2021-01-02', 1, '374591680545949 ', 470, 20000, 4, 'buktiAOV.jpeg', 'ryuzi@gmail.com ', 'Done'),
(2, '2021-01-02', 1, '539479367353501', 700, 20000, 4, 'buktiAOV.jpeg', '6285348502700 ', 'Done'),
(3, '2021-01-02', 1, '539479367353501 ', 470, 20000, 4, 'buktiAOV.jpeg', ' ', 'Done'),
(4, '2021-01-13', 1, '374591680545949 ', 130, 20000, 2, 'ytPre.jpg', 'sudi@gmail.com ', 'Done'),
(5, '2021-01-13', 1, '374591680545949 ', 600, 20000, 2, 'buktiAOV.jpeg', 'ryusi@gmail.com ', 'Batal'),
(6, '2021-01-14', 1, '374591680545949 ', 470, 73000, 1, 'buktiAOV.jpeg', 'sudi@gmail.com ', 'Done'),
(7, '2021-01-14', 1, '374591680545949 ', 600, 140000, 1, 'buktiAOV.jpeg', '62813485322323 ', 'Done'),
(8, '2021-01-15', 1, '374591680545949 ', 130, 20000, 2, 'Screenshot_2021-01-15-14-22-48-542_id.dana.jpg', 'Manusia352@gmail.com ', 'Done'),
(9, '2021-01-17', 1, '539479367353501 ', 700, 110000, 1, 'buktiAOV.jpeg', '6285346952300 ', 'Done'),
(10, '2021-01-17', 11, '678399220 ', 600, 140000, 2, 'buktiAOV.jpeg', '6285346952300 ', 'Proses'),
(11, '2021-02-05', 1, '374591680545949 ', 1430, 220000, 2, 'WhatsApp Image 2021-02-05 at 21.39.29.jpeg', '62895339489903 ', 'Done'),
(12, '2022-05-18', 1, '374591680545949 ', 130, 20000, 2, 'Pakta Integritas.jpg', 'muhammad.0628@students.amikom.ac.id ', 'Done');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pricelist`
--

CREATE TABLE `tbl_pricelist` (
  `id_produk` int NOT NULL,
  `id_kategori` int NOT NULL,
  `jenis_kategori` varchar(50) NOT NULL,
  `jumlah_voucher` int NOT NULL,
  `harga` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_pricelist`
--

INSERT INTO `tbl_pricelist` (`id_produk`, `id_kategori`, `jenis_kategori`, `jumlah_voucher`, `harga`) VALUES
(1, 1, 'VOC', 130, 20000),
(3, 11, 'Diamonds', 172, 40000),
(5, 1, 'VOC', 230, 37000),
(26, 11, 'Diamonds', 86, 20000),
(27, 1, 'VOC', 470, 73000),
(28, 1, 'VOC', 560, 90000),
(29, 1, 'VOC', 700, 110000),
(30, 1, 'VOC', 950, 145000),
(31, 1, 'VOC', 1430, 220000),
(33, 11, 'Diamonds', 257, 58000),
(34, 11, 'Diamonds', 343, 78000),
(35, 11, 'Diamonds', 429, 100000),
(36, 11, 'Diamonds', 514, 120000),
(37, 1, 'Diamonds', 600, 140000),
(38, 12, 'WC', 300, 40000),
(39, 12, 'WC', 625, 70000),
(41, 11, 'Diamonds', 600, 140000),
(42, 12, 'WC', 1125, 123000),
(43, 12, 'WC', 1650, 174000),
(44, 12, 'WC', 3400, 324000),
(45, 13, 'Points', 300, 30000),
(52, 22, 'Premium', 1, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(128) NOT NULL,
  `jenis_kategori` varchar(50) NOT NULL,
  `metode_layanan` varchar(30) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `slide` char(1) NOT NULL,
  `rekomendasi` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_kategori`, `nama_kategori`, `jenis_kategori`, `metode_layanan`, `gambar`, `deskripsi`, `slide`, `rekomendasi`) VALUES
(1, 'Arena Of Valor', 'VOC ', 'VIA UID', 'aov.jpg', 'Top up Vouchers Arena of Valor hanya dalam hitungan detik! Cukup masukan User ID Arena of Valor Anda, pilih jumlah Vouchers yang Anda inginkan, selesaikan pembayaran, dan Vouchers akan secara langsung ditambahkan ke akun Arena of Valor Anda.  Bayarlah menggunakan GoPay, Dana, OVO, LinkAja, Telkomsel, Indosat, Tri, XL, Smartfren, Bank Transfer, Indomaret, Alfamart, Kredivo, TrueMoney Indonesia, Kartu Kredit dan Doku Wallet. Tanpa perlu kartu kredit, registrasi ataupun log-in.  Unduh Arena of Valor sekarang!', 'Y', 'N'),
(11, 'Mobile Legends', 'Diamonds', 'VIA ID +(SERVER)', 'logo ml.jpg', 'Voucher Mobile Legends', 'Y', 'Y'),
(12, 'L.O.L Wild Rift', 'WC', 'VIA Username Riots', 'LOL.png', 'Voucher LOL WR', 'Y', 'N'),
(13, 'Valorant', 'Points', 'VIA Username Riots', 'valorant.jpeg', 'Voucher Valorant', 'Y', 'Y'),
(21, 'PUBG M', 'UC', 'via open bo', 'pubgg.jpg', 'sasa', 'Y', 'Y'),
(22, 'Youtube Premium ', 'P.A', 'Via invite EMAIL', 'ytPre.jpg', 'Youtube Premium Adalah......................', 'Y', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `noHp_user` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `password`, `email_user`, `noHp_user`, `level`) VALUES
(1, 'Muhammad', 'mamad123', 'mamad@gmail.com', '085348502700', 'ADMIN'),
(2, 'Abdul Rahul', 'pembeli123', 'pembeli@gmail.com', '085486935780', 'CUSTOMER'),
(3, 'Bayu Pradana', 'cust2', 'cust2@gmail.com', '083749204055', 'CUSTOMER'),
(16, '', '', '', '', 'CUSTOMER');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `game_data`
--
ALTER TABLE `game_data`
  ADD PRIMARY KEY (`playerID`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `playerID` (`playerID`),
  ADD KEY `produk` (`produk`),
  ADD KEY `id_metode` (`id_metode`);

--
-- Indeks untuk tabel `tbl_pricelist`
--
ALTER TABLE `tbl_pricelist`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_metode` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_pricelist`
--
ALTER TABLE `tbl_pricelist`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
