-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id_booking` int NOT NULL AUTO_INCREMENT,
  `id_dokter` int DEFAULT NULL,
  `id_pasien` int DEFAULT NULL,
  `untuk_jam` time DEFAULT NULL,
  `untuk_tanggal` date DEFAULT NULL,
  `tanggal_dan_jam_booking` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `jenis_praktik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_booking`),
  KEY `id_dokter` (`id_dokter`),
  KEY `id_pasien` (`id_pasien`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `booking` (`id_booking`, `id_dokter`, `id_pasien`, `untuk_jam`, `untuk_tanggal`, `tanggal_dan_jam_booking`, `jenis_praktik`, `keterangan`, `status`) VALUES
(5,	2,	7,	'10:00:00',	'2023-07-28',	'2023-07-04 00:00:00',	NULL,	NULL,	NULL),
(6,	3,	7,	'12:00:00',	'2023-07-26',	'2023-07-04 00:00:00',	NULL,	NULL,	NULL),
(7,	2,	7,	'12:00:00',	'2023-07-28',	'2023-07-04 00:00:00',	NULL,	NULL,	NULL),
(17,	2,	7,	'11:00:00',	'2023-07-26',	'2023-07-04 00:00:00',	NULL,	NULL,	NULL),
(18,	NULL,	7,	NULL,	'2023-07-31',	NULL,	NULL,	NULL,	NULL),
(19,	5,	7,	'13:00:00',	'2023-07-30',	'2023-07-04 00:00:00',	NULL,	NULL,	NULL),
(20,	NULL,	7,	NULL,	'2023-07-24',	NULL,	NULL,	NULL,	NULL),
(21,	5,	7,	'12:00:00',	'2023-07-29',	'2023-07-17 00:00:00',	NULL,	NULL,	NULL)
ON DUPLICATE KEY UPDATE `id_booking` = VALUES(`id_booking`), `id_dokter` = VALUES(`id_dokter`), `id_pasien` = VALUES(`id_pasien`), `untuk_jam` = VALUES(`untuk_jam`), `untuk_tanggal` = VALUES(`untuk_tanggal`), `tanggal_dan_jam_booking` = VALUES(`tanggal_dan_jam_booking`), `jenis_praktik` = VALUES(`jenis_praktik`), `keterangan` = VALUES(`keterangan`), `status` = VALUES(`status`);

DROP TABLE IF EXISTS `data_sampah`;
CREATE TABLE `data_sampah` (
  `id` int NOT NULL,
  `tinggi` int DEFAULT NULL,
  `tanggal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jam` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

INSERT INTO `data_sampah` (`id`, `tinggi`, `tanggal`, `jam`) VALUES
(1,	265,	'2022-11-24',	'20:29:01'),
(2,	264,	'2022-11-24',	'20:29:03'),
(3,	265,	'2022-11-24',	'20:29:09'),
(4,	432,	'2022-11-24',	'20:29:11'),
(5,	273,	'2022-11-24',	'20:29:16'),
(6,	271,	'2022-11-24',	'20:29:18'),
(7,	288,	'2022-11-24',	'20:29:24'),
(8,	332,	'2022-11-24',	'20:29:26'),
(9,	295,	'2022-11-24',	'20:29:31'),
(10,	296,	'2022-11-24',	'20:29:33'),
(11,	284,	'2022-11-24',	'20:29:36'),
(12,	258,	'2022-11-24',	'20:29:38'),
(13,	225,	'2022-11-24',	'20:29:40'),
(14,	195,	'2022-11-24',	'20:29:43'),
(15,	160,	'2022-11-24',	'20:29:45'),
(16,	118,	'2022-11-24',	'20:29:47'),
(17,	85,	'2022-11-24',	'20:29:49'),
(18,	85,	'2022-11-24',	'20:30:01'),
(19,	85,	'2022-11-24',	'20:30:03'),
(20,	85,	'2022-11-24',	'20:30:05'),
(21,	85,	'2022-11-24',	'20:30:08'),
(22,	86,	'2022-11-24',	'20:30:10'),
(23,	86,	'2022-11-24',	'20:30:12'),
(24,	86,	'2022-11-24',	'20:30:14'),
(25,	86,	'2022-11-24',	'20:30:17'),
(26,	86,	'2022-11-24',	'20:30:19'),
(27,	86,	'2022-11-24',	'20:30:21'),
(28,	86,	'2022-11-24',	'20:30:24'),
(29,	87,	'2022-11-24',	'20:30:26'),
(30,	86,	'2022-11-24',	'20:30:28'),
(31,	86,	'2022-11-24',	'20:30:30'),
(32,	86,	'2022-11-24',	'20:30:32'),
(33,	86,	'2022-11-24',	'20:30:34'),
(34,	86,	'2022-11-24',	'20:30:37'),
(35,	86,	'2022-11-24',	'20:30:39'),
(36,	86,	'2022-11-24',	'20:30:41'),
(37,	86,	'2022-11-24',	'20:30:43'),
(38,	86,	'2022-11-24',	'20:30:46'),
(39,	87,	'2022-11-24',	'20:30:48'),
(40,	87,	'2022-11-24',	'20:30:50'),
(41,	87,	'2022-11-24',	'20:30:52'),
(42,	87,	'2022-11-24',	'20:30:55'),
(43,	87,	'2022-11-24',	'20:30:57'),
(44,	87,	'2022-11-24',	'20:30:59'),
(45,	86,	'2022-11-24',	'20:31:01'),
(46,	87,	'2022-11-24',	'20:31:04'),
(47,	86,	'2022-11-24',	'20:31:06'),
(48,	86,	'2022-11-24',	'20:31:08'),
(49,	86,	'2022-11-24',	'20:31:10'),
(50,	86,	'2022-11-24',	'20:31:13'),
(51,	86,	'2022-11-24',	'20:31:15'),
(52,	86,	'2022-11-24',	'20:31:17'),
(53,	86,	'2022-11-24',	'20:31:19'),
(54,	86,	'2022-11-24',	'20:31:22'),
(55,	86,	'2022-11-24',	'20:31:24'),
(56,	86,	'2022-11-24',	'20:31:26'),
(57,	86,	'2022-11-24',	'20:31:28'),
(58,	86,	'2022-11-24',	'20:31:30'),
(59,	87,	'2022-11-24',	'20:31:33'),
(60,	87,	'2022-11-24',	'20:31:35')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `tinggi` = VALUES(`tinggi`), `tanggal` = VALUES(`tanggal`), `jam` = VALUES(`jam`);

DROP TABLE IF EXISTS `diagnosa`;
CREATE TABLE `diagnosa` (
  `id_diagnosa` int NOT NULL AUTO_INCREMENT,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `standar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_diagnosa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `diagnosa` (`id_diagnosa`, `keterangan`, `standar`) VALUES
(1,	'S02.51-Fraktur mahkota gigi tanpa mengenai pulpa',	'Standar Kemenkes')
ON DUPLICATE KEY UPDATE `id_diagnosa` = VALUES(`id_diagnosa`), `keterangan` = VALUES(`keterangan`), `standar` = VALUES(`standar`);

DROP TABLE IF EXISTS `dokter`;
CREATE TABLE `dokter` (
  `id_dokter` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` int DEFAULT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telepon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `level` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jadwal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_dokter`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

INSERT INTO `dokter` (`id_dokter`, `nama`, `username`, `password`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `telepon`, `alamat`, `level`, `jadwal`) VALUES
(2,	'Susi',	'susi',	'susi123',	999122555,	'Sleman Barat',	'1997-05-10',	'perempuan',	'susi@example.com',	'0852xxxxxxxx',	'Jatiuwung Raya, Tangerang',	'dokter',	'monday,tuesday,wednesday'),
(3,	'abc',	'dokter',	'dokter123',	12345,	'pwr',	'2023-01-08',	'laki-laki',	'gmail',	'085',	'jalan',	'dokter',	'thursday,friday'),
(5,	'ditaa',	'dita',	'dita123',	2147483647,	'Jkt',	'1985-01-12',	'perempuan',	'asdf@gmail.com',	'08473913747',	'Jkt',	'dokter',	'saturday,sunday')
ON DUPLICATE KEY UPDATE `id_dokter` = VALUES(`id_dokter`), `nama` = VALUES(`nama`), `username` = VALUES(`username`), `password` = VALUES(`password`), `nik` = VALUES(`nik`), `tempat_lahir` = VALUES(`tempat_lahir`), `tanggal_lahir` = VALUES(`tanggal_lahir`), `jenis_kelamin` = VALUES(`jenis_kelamin`), `email` = VALUES(`email`), `telepon` = VALUES(`telepon`), `alamat` = VALUES(`alamat`), `level` = VALUES(`level`), `jadwal` = VALUES(`jadwal`);

DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan` (
  `id_layanan` int NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` int NOT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `layanan` (`id_layanan`, `thumbnail`, `title`, `deskripsi`, `active`) VALUES
(2,	'1688471203_4a32283177d1fe2af505.png',	'aabb',	'<p>aaacccaaa</p>',	1),
(3,	'1687949995_5b8445d39423c660033f.jpg',	'aaaa',	'<p>aaaaaccc</p>',	1),
(4,	'1687853115_4b692432736a81ea9503.jpg',	'bbbb',	'<p>bbbbccc</p>',	1),
(5,	'1687948714_1ce641c053f9932821a2.jpg',	'cccc',	'<p>ccccc</p>',	2),
(6,	'1687946085_eb21e4d8d2d099e88242',	'aa',	'<p>aaa</p>',	2),
(7,	'1687949786_b21ed1de4d7a8c864483.jpg',	'aa',	'<p>bbbbcccaaww</p>',	2)
ON DUPLICATE KEY UPDATE `id_layanan` = VALUES(`id_layanan`), `thumbnail` = VALUES(`thumbnail`), `title` = VALUES(`title`), `deskripsi` = VALUES(`deskripsi`), `active` = VALUES(`active`);

DROP TABLE IF EXISTS `metode_pembayaran`;
CREATE TABLE `metode_pembayaran` (
  `id_pembayaran` int NOT NULL AUTO_INCREMENT,
  `metode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `metode_pembayaran` (`id_pembayaran`, `metode_pembayaran`) VALUES
(1,	'Belum ditentukan'),
(2,	'Tunai'),
(3,	'Non-Tunai')
ON DUPLICATE KEY UPDATE `id_pembayaran` = VALUES(`id_pembayaran`), `metode_pembayaran` = VALUES(`metode_pembayaran`);

DROP TABLE IF EXISTS `obat`;
CREATE TABLE `obat` (
  `id_obat` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `expired` date DEFAULT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `obat` (`id_obat`, `nama`, `harga`, `stok`, `expired`) VALUES
(1,	'Cefixime 100',	35000,	100,	'2024-12-16')
ON DUPLICATE KEY UPDATE `id_obat` = VALUES(`id_obat`), `nama` = VALUES(`nama`), `harga` = VALUES(`harga`), `stok` = VALUES(`stok`), `expired` = VALUES(`expired`);

DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien` (
  `id_pasien` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `merayakan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` int DEFAULT NULL,
  `pekerjaan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `asal_instansi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telepon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `dari_mana_pasien_mengetahui` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pasien` (`id_pasien`, `nama`, `username`, `password`, `merayakan`, `nik`, `pekerjaan`, `jabatan`, `asal_instansi`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `telepon`, `alamat`, `dari_mana_pasien_mengetahui`, `level`) VALUES
(4,	'Dewi',	'dewi',	'dewi123',	'Hari Raya Idul Fitri',	999000222,	'Pengusaha Amplas',	'Direkturat',	'Sandicreations',	'Bojong',	'1988-07-09',	'perempuan',	'dewi@example.com',	'0814xxxxxxxx',	'Jatiuwung Doyong, Tangerang',	'instagram',	'pasien'),
(7,	'Deni Kobal',	'deni',	'deni123',	'',	0,	'',	'',	'',	'',	'0000-00-00',	'laki-laki',	'',	'08222222',	'Kp Gembor, Rt 03/06, 15135',	'website',	'pasien'),
(8,	'Deni Kobal',	'deni',	'deni123',	'',	0,	'',	'',	'',	'',	'0000-00-00',	'laki-laki',	'',	'08222222',	'Kp Gembor, Rt 03/06, 15135',	'website',	'pasien'),
(9,	'Safan',	'Safan',	'Safan160420',	'',	0,	'',	'',	'',	'',	'0000-00-00',	'laki-laki',	'',	'181828383',	'Jl karet belakang RT 004/004 no ',	'website',	'pasien'),
(10,	'Safan',	'Safan',	'Safan160420',	'',	0,	'',	'',	'',	'',	'0000-00-00',	'laki-laki',	'',	'181828383',	'Jl karet belakang RT 004/004 no ',	'website',	'pasien'),
(11,	'Safan',	'Safan',	'Safan160420',	'',	0,	'',	'',	'',	'',	'0000-00-00',	'laki-laki',	'',	'181828383',	'Jl karet belakang RT 004/004 no ',	'website',	'pasien'),
(14,	'arifin',	'arifin',	'arifin123',	NULL,	123,	'buruh',	NULL,	NULL,	NULL,	NULL,	'laki-laki',	NULL,	'08',	'purworejo',	NULL,	NULL),
(15,	'Nurdikha',	'dikha',	'Dikha12',	NULL,	2147483647,	'Mahasiswa',	NULL,	NULL,	NULL,	NULL,	'perempuan',	NULL,	'08214757390',	'Jakarta',	NULL,	NULL),
(16,	'Pai',	'Pailopeu',	'12345678',	NULL,	0,	'Bandar narkoba ',	NULL,	NULL,	NULL,	NULL,	'laki-laki',	NULL,	'08sekian aja',	'Jl.jalan aja ',	NULL,	NULL),
(18,	'raisa',	'rnurim',	'sayaresa',	NULL,	2147483647,	'karyawan',	NULL,	NULL,	NULL,	NULL,	'perempuan',	NULL,	'085677777777',	'poris',	NULL,	NULL),
(19,	'raisa',	'rnurin7',	'rsaRSA7',	NULL,	2147483647,	'karyawan',	NULL,	NULL,	NULL,	NULL,	'perempuan',	NULL,	'085677777777',	'poris',	NULL,	NULL),
(20,	'Rina',	'rina',	'123rin',	NULL,	0,	'Askdk',	NULL,	NULL,	NULL,	NULL,	'perempuan',	NULL,	'0987',	'Jlnsjja',	NULL,	NULL),
(21,	'Farras',	'fadillahzx',	'12345678',	NULL,	2147483647,	'ajwd',	NULL,	NULL,	NULL,	NULL,	'laki-laki',	NULL,	'08128216',	'awdawdawd',	NULL,	NULL)
ON DUPLICATE KEY UPDATE `id_pasien` = VALUES(`id_pasien`), `nama` = VALUES(`nama`), `username` = VALUES(`username`), `password` = VALUES(`password`), `merayakan` = VALUES(`merayakan`), `nik` = VALUES(`nik`), `pekerjaan` = VALUES(`pekerjaan`), `jabatan` = VALUES(`jabatan`), `asal_instansi` = VALUES(`asal_instansi`), `tempat_lahir` = VALUES(`tempat_lahir`), `tanggal_lahir` = VALUES(`tanggal_lahir`), `jenis_kelamin` = VALUES(`jenis_kelamin`), `email` = VALUES(`email`), `telepon` = VALUES(`telepon`), `alamat` = VALUES(`alamat`), `dari_mana_pasien_mengetahui` = VALUES(`dari_mana_pasien_mengetahui`), `level` = VALUES(`level`);

DROP TABLE IF EXISTS `periksa`;
CREATE TABLE `periksa` (
  `id_periksa` int NOT NULL AUTO_INCREMENT,
  `invoice` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_pasien` int NOT NULL,
  `id_dokter` int NOT NULL,
  `tgl_periksa` datetime NOT NULL,
  `anamnesa` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rekomendasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diskon` int NOT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `jenis_bayar` int NOT NULL,
  `id_pembayaran` int DEFAULT NULL,
  `id_diagnosa` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_periksa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `periksa` (`id_periksa`, `invoice`, `id_pasien`, `id_dokter`, `tgl_periksa`, `anamnesa`, `note`, `rekomendasi`, `diskon`, `token`, `jenis_bayar`, `id_pembayaran`, `id_diagnosa`, `status`) VALUES
(2,	'698350',	15,	5,	'2023-01-20 07:04:00',	'Konsultasi',	'',	'',	0,	'',	0,	2,	1,	''),
(22,	'774390',	7,	3,	'2023-06-27 00:00:00',	'Tester',	'harus dirawat banget',	'di bor dan laser',	50000,	'43f40c42-74d0-4eb5-aa46-abae2fa03b31',	0,	3,	1,	'Sudah Bayar'),
(23,	'722396',	7,	3,	'2023-06-30 00:00:00',	'Coca cola',	'harus dirawat lah',	'di laser',	100000,	'6acd6de1-173b-4e68-804b-63d019709eb3',	0,	2,	1,	'Sudah Bayar'),
(24,	'323925',	7,	3,	'2023-07-28 00:00:00',	'coba',	'harus dirawat banget',	'di laser',	10000,	'899884db-3e00-4cee-aded-0600dd2acb3b',	0,	2,	1,	'Sudah Bayar'),
(25,	'703413',	7,	3,	'2023-07-19 00:00:00',	'Coca cola',	'',	'',	0,	'4c8695e4-1e58-41c8-9804-d308f9b648db',	0,	2,	1,	'Sudah Bayar'),
(26,	'501638',	7,	5,	'2023-07-27 00:00:00',	'Coca cola',	'',	'',	10000,	'0f04d50b-9527-4576-9fc5-3d5bba56c4cb',	0,	3,	1,	'Sudah Bayar')
ON DUPLICATE KEY UPDATE `id_periksa` = VALUES(`id_periksa`), `invoice` = VALUES(`invoice`), `id_pasien` = VALUES(`id_pasien`), `id_dokter` = VALUES(`id_dokter`), `tgl_periksa` = VALUES(`tgl_periksa`), `anamnesa` = VALUES(`anamnesa`), `note` = VALUES(`note`), `rekomendasi` = VALUES(`rekomendasi`), `diskon` = VALUES(`diskon`), `token` = VALUES(`token`), `jenis_bayar` = VALUES(`jenis_bayar`), `id_pembayaran` = VALUES(`id_pembayaran`), `id_diagnosa` = VALUES(`id_diagnosa`), `status` = VALUES(`status`);

DROP TABLE IF EXISTS `periksa_obat`;
CREATE TABLE `periksa_obat` (
  `id_periksa_obat` int NOT NULL AUTO_INCREMENT,
  `id_periksa` int NOT NULL,
  `obat` int NOT NULL,
  PRIMARY KEY (`id_periksa_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `periksa_obat` (`id_periksa_obat`, `id_periksa`, `obat`) VALUES
(2,	1,	1),
(3,	2,	1),
(4,	6,	1),
(6,	6,	1),
(7,	3,	1),
(8,	7,	1),
(9,	8,	1),
(10,	9,	1),
(11,	9,	1),
(12,	10,	1),
(13,	11,	1),
(14,	12,	1),
(15,	14,	1),
(16,	16,	1),
(17,	17,	1),
(18,	18,	1),
(19,	19,	1),
(20,	20,	1),
(21,	21,	1),
(22,	22,	1),
(23,	23,	1),
(25,	24,	1)
ON DUPLICATE KEY UPDATE `id_periksa_obat` = VALUES(`id_periksa_obat`), `id_periksa` = VALUES(`id_periksa`), `obat` = VALUES(`obat`);

DROP TABLE IF EXISTS `periksa_tindakan`;
CREATE TABLE `periksa_tindakan` (
  `id_periksa_tindakan` int NOT NULL AUTO_INCREMENT,
  `id_periksa` int NOT NULL,
  `tindakan` int NOT NULL,
  PRIMARY KEY (`id_periksa_tindakan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `periksa_tindakan` (`id_periksa_tindakan`, `id_periksa`, `tindakan`) VALUES
(2,	1,	2),
(3,	2,	1),
(4,	2,	2),
(10,	6,	1),
(11,	3,	1),
(12,	7,	1),
(13,	8,	2),
(14,	9,	1),
(15,	10,	1),
(16,	10,	2),
(17,	11,	1),
(18,	12,	1),
(19,	12,	2),
(20,	14,	1),
(21,	14,	2),
(22,	16,	1),
(23,	16,	2),
(24,	17,	1),
(25,	17,	2),
(26,	18,	2),
(27,	19,	2),
(28,	20,	1),
(29,	21,	2),
(30,	22,	2),
(31,	23,	1),
(32,	24,	1),
(33,	25,	1),
(34,	26,	2)
ON DUPLICATE KEY UPDATE `id_periksa_tindakan` = VALUES(`id_periksa_tindakan`), `id_periksa` = VALUES(`id_periksa`), `tindakan` = VALUES(`tindakan`);

DROP TABLE IF EXISTS `rekam_medis`;
CREATE TABLE `rekam_medis` (
  `id_rekam_medis` int NOT NULL AUTO_INCREMENT,
  `id_pasien` int DEFAULT NULL,
  `id_dokter` int DEFAULT NULL,
  `berat_badan` int DEFAULT NULL,
  `saturasi_oksigen` int DEFAULT NULL,
  `suhu_badan` int DEFAULT NULL,
  `golongan_darah` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diabetes` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `haemopilia` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tekanan_darah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sakit_jantung` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `riwayat_penyakit_lain` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alergi_obat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alergi_makanan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_rekam_medis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `rekam_medis` (`id_rekam_medis`, `id_pasien`, `id_dokter`, `berat_badan`, `saturasi_oksigen`, `suhu_badan`, `golongan_darah`, `diabetes`, `haemopilia`, `tekanan_darah`, `sakit_jantung`, `riwayat_penyakit_lain`, `alergi_obat`, `alergi_makanan`, `keterangan`) VALUES
(1,	4,	3,	60,	80,	20,	'B',	'tidak',	'tidak',	'120/80',	'tidak',	'-',	'-',	'-',	'-'),
(2,	7,	5,	70,	95,	0,	'',	'',	'',	'',	'',	'',	'',	'',	''),
(3,	15,	5,	0,	0,	0,	'',	'',	'',	'',	'',	'',	'',	'',	''),
(4,	18,	2,	0,	0,	0,	'',	'',	'',	'',	'',	'',	'',	'',	'')
ON DUPLICATE KEY UPDATE `id_rekam_medis` = VALUES(`id_rekam_medis`), `id_pasien` = VALUES(`id_pasien`), `id_dokter` = VALUES(`id_dokter`), `berat_badan` = VALUES(`berat_badan`), `saturasi_oksigen` = VALUES(`saturasi_oksigen`), `suhu_badan` = VALUES(`suhu_badan`), `golongan_darah` = VALUES(`golongan_darah`), `diabetes` = VALUES(`diabetes`), `haemopilia` = VALUES(`haemopilia`), `tekanan_darah` = VALUES(`tekanan_darah`), `sakit_jantung` = VALUES(`sakit_jantung`), `riwayat_penyakit_lain` = VALUES(`riwayat_penyakit_lain`), `alergi_obat` = VALUES(`alergi_obat`), `alergi_makanan` = VALUES(`alergi_makanan`), `keterangan` = VALUES(`keterangan`);

DROP TABLE IF EXISTS `tagihan`;
CREATE TABLE `tagihan` (
  `id_tagihan` int NOT NULL AUTO_INCREMENT,
  `id_pasien` int DEFAULT NULL,
  `id_dokter` int DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `biaya_tindakan` int DEFAULT NULL,
  `biaya_obat` int DEFAULT NULL,
  `diskon` int DEFAULT NULL,
  `total_biaya` int DEFAULT NULL,
  `metode_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_update` date DEFAULT NULL,
  `jam_update` time DEFAULT NULL,
  `status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_tagihan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tagihan` (`id_tagihan`, `id_pasien`, `id_dokter`, `deskripsi`, `biaya_tindakan`, `biaya_obat`, `diskon`, `total_biaya`, `metode_pembayaran`, `tanggal_update`, `jam_update`, `status`) VALUES
(1,	4,	2,	'Tambal gigi (100k), Semprot Vitamin gigi (50k), Obat Penumbuh GIgi (20k)',	150000,	20000,	0,	170000,	'tunai',	NULL,	NULL,	'selesai'),
(2,	4,	2,	'Cek GIgi 500k',	100000,	90000,	0,	690000,	'tunai',	'0000-00-00',	'00:00:00',	'selesai'),
(3,	9,	2,	'Cek GIgi 500k',	10000,	20000,	0,	530000,	'tunai',	'2022-12-22',	'10:10:21',	'selesai'),
(4,	9,	2,	'Cek GIgi 500k',	10000,	20000,	0,	530000,	'tunai',	'2022-02-22',	'10:10:21',	'selesai'),
(5,	9,	2,	'Cek GIgi 500k',	10000,	20000,	0,	530000,	'tunai',	'2022-12-22',	'10:10:21',	'gagal')
ON DUPLICATE KEY UPDATE `id_tagihan` = VALUES(`id_tagihan`), `id_pasien` = VALUES(`id_pasien`), `id_dokter` = VALUES(`id_dokter`), `deskripsi` = VALUES(`deskripsi`), `biaya_tindakan` = VALUES(`biaya_tindakan`), `biaya_obat` = VALUES(`biaya_obat`), `diskon` = VALUES(`diskon`), `total_biaya` = VALUES(`total_biaya`), `metode_pembayaran` = VALUES(`metode_pembayaran`), `tanggal_update` = VALUES(`tanggal_update`), `jam_update` = VALUES(`jam_update`), `status` = VALUES(`status`);

DROP TABLE IF EXISTS `tarif`;
CREATE TABLE `tarif` (
  `id_tarif` int NOT NULL AUTO_INCREMENT,
  `upf` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_tindakan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `perawatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tarif` int DEFAULT NULL,
  PRIMARY KEY (`id_tarif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tarif` (`id_tarif`, `upf`, `nama_tindakan`, `perawatan`, `tarif`) VALUES
(1,	'Periodontia-0013',	'Penambalan Laser',	'Dokter Gigi',	3000000),
(2,	'Prosthodontia-0011',	'Elemen Gigi',	'Dokter Gigi',	1000000)
ON DUPLICATE KEY UPDATE `id_tarif` = VALUES(`id_tarif`), `upf` = VALUES(`upf`), `nama_tindakan` = VALUES(`nama_tindakan`), `perawatan` = VALUES(`perawatan`), `tarif` = VALUES(`tarif`);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_update` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jam_update` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `gambar`, `level`, `tanggal_update`, `jam_update`) VALUES
(1,	'admin',	'admin123',	'Admin Poli Gigi',	'admin.webp',	'admin',	NULL,	NULL),
(2,	'user',	'user123',	'User Poli Gigi',	'user.webp',	'user',	NULL,	NULL)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `username` = VALUES(`username`), `password` = VALUES(`password`), `nama` = VALUES(`nama`), `gambar` = VALUES(`gambar`), `level` = VALUES(`level`), `tanggal_update` = VALUES(`tanggal_update`), `jam_update` = VALUES(`jam_update`);

-- 2023-07-17 12:19:47
