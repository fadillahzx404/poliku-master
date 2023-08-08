-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Agu 2023 pada 20.40
-- Versi server: 10.3.39-MariaDB
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benings1_poliku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `untuk_jam` time DEFAULT NULL,
  `untuk_tanggal` date DEFAULT NULL,
  `tanggal_dan_jam_booking` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `jenis_praktik` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `id_dokter`, `id_pasien`, `untuk_jam`, `untuk_tanggal`, `tanggal_dan_jam_booking`, `jenis_praktik`, `keterangan`, `status`) VALUES
(5, 2, 7, '10:00:00', '2023-07-28', '2023-07-04 00:00:00', NULL, NULL, NULL),
(6, 3, 7, '12:00:00', '2023-07-26', '2023-07-04 00:00:00', NULL, NULL, NULL),
(7, 2, 7, '12:00:00', '2023-07-28', '2023-07-04 00:00:00', NULL, NULL, NULL),
(17, 2, 7, '11:00:00', '2023-07-26', '2023-07-04 00:00:00', NULL, NULL, NULL),
(18, NULL, 7, NULL, '2023-07-31', NULL, NULL, NULL, NULL),
(19, 5, 7, '13:00:00', '2023-07-30', '2023-07-04 00:00:00', NULL, NULL, NULL),
(20, 2, 22, '11:00:00', '2023-07-31', '2023-07-05 00:00:00', NULL, NULL, NULL),
(21, 2, 7, '15:00:00', '2023-07-24', '2023-07-19 00:00:00', NULL, NULL, NULL),
(22, 2, 23, '11:00:00', '2023-07-24', '2023-07-20 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `standar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `keterangan`, `standar`) VALUES
(1, 'S02.51-Fraktur mahkota gigi tanpa mengenai pulpa', 'Standar Kemenkes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `jadwal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `username`, `password`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `telepon`, `alamat`, `level`, `jadwal`) VALUES
(2, 'Susi', 'susi', 'susi123', 999122555, 'Sleman Barat', '1997-05-10', 'perempuan', 'susi@example.com', '0852xxxxxxxx', 'Jatiuwung Raya, Tangerang', 'dokter', 'monday,tuesday,wednesday'),
(3, 'abc', 'dokter', 'dokter123', 12345, 'pwr', '2023-01-08', 'laki-laki', 'gmail', '085', 'jalan', 'dokter', 'thursday,friday'),
(5, 'ditaa', 'dita', 'dita123', 2147483647, 'Jkt', '1985-01-12', 'perempuan', 'asdf@gmail.com', '08473913747', 'Jkt', 'dokter', 'saturday,sunday');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `thumbnail`, `title`, `deskripsi`, `active`) VALUES
(2, '1689782069_a2d8789890e6c46fe746.jpeg', 'Bleaching', '<p><i>Bleaching</i> gigi atau pemutihan gigi merupakan prosedur estetika yang digunakan untuk membuat permukaan gigi tampak lebih putih.</p>', 1),
(3, '1687949995_5b8445d39423c660033f.jpg', 'Scaling', '<p>Scaling gigi adalah prosedur untuk melakukan pembersihan karang gigi. Karang gigi terbentuk dari tumpukan plak yang menempel pada permukaan gigi.</p>', 1),
(4, '1687853115_4b692432736a81ea9503.jpg', 'bbbb', '<p>bbbbccc</p>', 2),
(5, '1689782258_2f2489f2fbfdb5c1f4b1.jpeg', 'Cabut gigi', '<p>Cabut gigi adalah prosedur untuk mengangkat gigi, bisa hanya satu gigi atau bahkan lebih. Prosedur ini dilakukan oleh ahli bedah gigi menggunakan alat dan perlengkapan medis yang lengkap.</p>', 1),
(6, '1687946085_eb21e4d8d2d099e88242', 'aa', '<p>aaa</p>', 2),
(7, '1687949786_b21ed1de4d7a8c864483.jpg', 'aa', '<p>bbbbcccaaww</p>', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_pembayaran`, `metode_pembayaran`) VALUES
(1, 'Belum ditentukan'),
(2, 'Tunai'),
(3, 'Non-Tunai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `expired` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama`, `harga`, `stok`, `expired`) VALUES
(1, 'Cefixime 100', 35000, 100, '2024-12-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `merayakan` varchar(100) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `asal_instansi` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `dari_mana_pasien_mengetahui` varchar(20) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `username`, `password`, `merayakan`, `nik`, `pekerjaan`, `jabatan`, `asal_instansi`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `telepon`, `alamat`, `dari_mana_pasien_mengetahui`, `level`) VALUES
(4, 'Dewi', 'dewi', 'dewi123', 'Hari Raya Idul Fitri', 999000222, 'Pengusaha Amplas', 'Direkturat', 'Sandicreations', 'Bojong', '1988-07-09', 'perempuan', 'dewi@example.com', '0814xxxxxxxx', 'Jatiuwung Doyong, Tangerang', 'instagram', 'pasien'),
(7, 'Deni Kobal', 'deni', 'deni123', '', 0, '', '', '', '', '0000-00-00', 'laki-laki', '', '08222222', 'Kp Gembor, Rt 03/06, 15135', 'website', 'pasien'),
(8, 'Deni Kobal', 'deni', 'deni123', '', 0, '', '', '', '', '0000-00-00', 'laki-laki', '', '08222222', 'Kp Gembor, Rt 03/06, 15135', 'website', 'pasien'),
(9, 'Safan', 'Safan', 'Safan160420', '', 0, '', '', '', '', '0000-00-00', 'laki-laki', '', '181828383', 'Jl karet belakang RT 004/004 no ', 'website', 'pasien'),
(10, 'Safan', 'Safan', 'Safan160420', '', 0, '', '', '', '', '0000-00-00', 'laki-laki', '', '181828383', 'Jl karet belakang RT 004/004 no ', 'website', 'pasien'),
(11, 'Safan', 'Safan', 'Safan160420', '', 0, '', '', '', '', '0000-00-00', 'laki-laki', '', '181828383', 'Jl karet belakang RT 004/004 no ', 'website', 'pasien'),
(14, 'arifin', 'arifin', 'arifin123', NULL, 123, 'buruh', NULL, NULL, NULL, NULL, 'laki-laki', NULL, '08', 'purworejo', NULL, NULL),
(15, 'Nurdikha', 'dikha', 'Dikha12', NULL, 2147483647, 'Mahasiswa', NULL, NULL, NULL, NULL, 'perempuan', NULL, '08214757390', 'Jakarta', NULL, NULL),
(16, 'Pai', 'Pailopeu', '12345678', NULL, 0, 'Bandar narkoba ', NULL, NULL, NULL, NULL, 'laki-laki', NULL, '08sekian aja', 'Jl.jalan aja ', NULL, NULL),
(18, 'raisa', 'rnurim', 'sayaresa', NULL, 2147483647, 'karyawan', NULL, NULL, NULL, NULL, 'perempuan', NULL, '085677777777', 'poris', NULL, NULL),
(19, 'raisa', 'rnurin7', 'rsaRSA7', NULL, 2147483647, 'karyawan', NULL, NULL, NULL, NULL, 'perempuan', NULL, '085677777777', 'poris', NULL, NULL),
(20, 'Rina', 'rina', '123rin', NULL, 0, 'Askdk', NULL, NULL, NULL, NULL, 'perempuan', NULL, '0987', 'Jlnsjja', NULL, NULL),
(21, 'Farras', 'fadillahzx', '12345678', NULL, 2147483647, 'ajwd', NULL, NULL, NULL, NULL, 'laki-laki', NULL, '08128216', 'awdawdawd', NULL, NULL),
(22, 'Ddd', 'Ddd', '123456789', NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, 'laki-laki', NULL, '0852456789', 'Hajshshhshsa', NULL, NULL),
(23, 'sinta', 'sinta', 'sinta123', NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, 'perempuan', NULL, '08345679876', 'JL. jKARTa', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `id_periksa` int(11) NOT NULL,
  `invoice` varchar(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tgl_periksa` datetime NOT NULL,
  `anamnesa` text NOT NULL,
  `note` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `diskon` int(11) NOT NULL,
  `token` text DEFAULT NULL,
  `jenis_bayar` int(11) NOT NULL,
  `id_pembayaran` int(11) DEFAULT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`id_periksa`, `invoice`, `id_pasien`, `id_dokter`, `tgl_periksa`, `anamnesa`, `note`, `rekomendasi`, `diskon`, `token`, `jenis_bayar`, `id_pembayaran`, `id_diagnosa`, `status`) VALUES
(2, '698350', 15, 5, '2023-01-20 07:04:00', 'Konsultasi', '', '', 0, '', 0, 2, 1, 'Sudah Bayar'),
(22, '774390', 7, 3, '2023-06-27 00:00:00', 'Tester', 'harus dirawat banget', 'di bor dan laser', 50000, '43f40c42-74d0-4eb5-aa46-abae2fa03b31', 0, 3, 1, 'Sudah Bayar'),
(23, '722396', 7, 3, '2023-06-30 00:00:00', 'Coca cola', 'harus dirawat lah', 'di laser', 100000, '6acd6de1-173b-4e68-804b-63d019709eb3', 0, 2, 1, 'Sudah Bayar'),
(24, '323925', 7, 3, '2023-07-28 00:00:00', 'coba', 'harus dirawat banget', 'di laser', 10000, '899884db-3e00-4cee-aded-0600dd2acb3b', 0, 2, 1, 'Sudah Bayar'),
(25, '703413', 7, 3, '2023-07-19 00:00:00', 'Coca cola', '', '', 0, '4c8695e4-1e58-41c8-9804-d308f9b648db', 0, 2, 1, 'Sudah Bayar'),
(26, '', 23, 2, '0000-00-00 00:00:00', 'Konsultasi', '', '', 0, NULL, 0, NULL, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa_obat`
--

CREATE TABLE `periksa_obat` (
  `id_periksa_obat` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa_obat`
--

INSERT INTO `periksa_obat` (`id_periksa_obat`, `id_periksa`, `obat`) VALUES
(2, 1, 1),
(3, 2, 1),
(4, 6, 1),
(6, 6, 1),
(7, 3, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 9, 1),
(12, 10, 1),
(13, 11, 1),
(14, 12, 1),
(15, 14, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(25, 24, 1),
(26, 26, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa_tindakan`
--

CREATE TABLE `periksa_tindakan` (
  `id_periksa_tindakan` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `tindakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa_tindakan`
--

INSERT INTO `periksa_tindakan` (`id_periksa_tindakan`, `id_periksa`, `tindakan`) VALUES
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(10, 6, 1),
(11, 3, 1),
(12, 7, 1),
(13, 8, 2),
(14, 9, 1),
(15, 10, 1),
(16, 10, 2),
(17, 11, 1),
(18, 12, 1),
(19, 12, 2),
(20, 14, 1),
(21, 14, 2),
(22, 16, 1),
(23, 16, 2),
(24, 17, 1),
(25, 17, 2),
(26, 18, 2),
(27, 19, 2),
(28, 20, 1),
(29, 21, 2),
(30, 22, 2),
(31, 23, 1),
(32, 24, 1),
(33, 25, 1),
(34, 26, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rekam_medis` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `saturasi_oksigen` int(11) DEFAULT NULL,
  `suhu_badan` int(11) DEFAULT NULL,
  `golongan_darah` varchar(2) DEFAULT NULL,
  `diabetes` varchar(5) DEFAULT NULL,
  `haemopilia` varchar(10) DEFAULT NULL,
  `tekanan_darah` varchar(50) DEFAULT NULL,
  `sakit_jantung` varchar(10) DEFAULT NULL,
  `riwayat_penyakit_lain` varchar(50) DEFAULT NULL,
  `alergi_obat` varchar(50) DEFAULT NULL,
  `alergi_makanan` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekam_medis`, `id_pasien`, `id_dokter`, `berat_badan`, `saturasi_oksigen`, `suhu_badan`, `golongan_darah`, `diabetes`, `haemopilia`, `tekanan_darah`, `sakit_jantung`, `riwayat_penyakit_lain`, `alergi_obat`, `alergi_makanan`, `keterangan`) VALUES
(1, 4, 3, 60, 80, 20, 'B', 'tidak', 'tidak', '120/80', 'tidak', '-', '-', '-', '-'),
(2, 7, 3, 70, 95, 0, '', '', '', '', '', '', '', '', ''),
(3, 15, 5, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(4, 18, 2, 0, 0, 0, '', '', '', '', '', '', '', '', ''),
(5, 23, 2, 0, 0, 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `biaya_tindakan` int(11) DEFAULT NULL,
  `biaya_obat` int(11) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `total_biaya` int(11) DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `tanggal_update` date DEFAULT NULL,
  `jam_update` time DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `id_pasien`, `id_dokter`, `deskripsi`, `biaya_tindakan`, `biaya_obat`, `diskon`, `total_biaya`, `metode_pembayaran`, `tanggal_update`, `jam_update`, `status`) VALUES
(1, 4, 2, 'Tambal gigi (100k), Semprot Vitamin gigi (50k), Obat Penumbuh GIgi (20k)', 150000, 20000, 0, 170000, 'tunai', NULL, NULL, 'selesai'),
(2, 4, 2, 'Cek GIgi 500k', 100000, 90000, 0, 690000, 'tunai', '0000-00-00', '00:00:00', 'selesai'),
(3, 9, 2, 'Cek GIgi 500k', 10000, 20000, 0, 530000, 'tunai', '2022-12-22', '10:10:21', 'selesai'),
(4, 9, 2, 'Cek GIgi 500k', 10000, 20000, 0, 530000, 'tunai', '2022-02-22', '10:10:21', 'selesai'),
(5, 9, 2, 'Cek GIgi 500k', 10000, 20000, 0, 530000, 'tunai', '2022-12-22', '10:10:21', 'gagal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `upf` varchar(50) DEFAULT NULL,
  `nama_tindakan` varchar(50) DEFAULT NULL,
  `perawatan` varchar(50) DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `upf`, `nama_tindakan`, `perawatan`, `tarif`) VALUES
(1, 'Periodontia-0013', 'Penambalan Laser', 'Dokter Gigi', 3000000),
(2, 'Prosthodontia-0011', 'Elemen Gigi', 'Dokter Gigi', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `tanggal_update` varchar(15) DEFAULT NULL,
  `jam_update` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `gambar`, `level`, `tanggal_update`, `jam_update`) VALUES
(1, 'admin', 'admin123', 'Admin Poli Gigi', 'admin.webp', 'admin', NULL, NULL),
(2, 'user', 'user123', 'User Poli Gigi', 'user.webp', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`) USING BTREE;

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indeks untuk tabel `periksa_obat`
--
ALTER TABLE `periksa_obat`
  ADD PRIMARY KEY (`id_periksa_obat`);

--
-- Indeks untuk tabel `periksa_tindakan`
--
ALTER TABLE `periksa_tindakan`
  ADD PRIMARY KEY (`id_periksa_tindakan`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekam_medis`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indeks untuk tabel `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `periksa_obat`
--
ALTER TABLE `periksa_obat`
  MODIFY `id_periksa_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `periksa_tindakan`
--
ALTER TABLE `periksa_tindakan`
  MODIFY `id_periksa_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rekam_medis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
