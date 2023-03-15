-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 12:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monkeypox`
--

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cf` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`id`, `gejala_id`, `penyakit_id`, `cf`, `created_at`, `updated_at`) VALUES
(91, 'G001', 'P001', 0.60, '2022-11-03 03:21:43', '2022-11-03 03:21:43'),
(92, 'G002', 'P001', 0.80, '2022-11-03 03:22:04', '2022-11-03 03:22:04'),
(93, 'G003', 'P001', 0.60, '2022-11-03 03:22:21', '2022-11-04 09:33:51'),
(94, 'G004', 'P001', 0.60, '2022-11-03 03:22:53', '2022-11-03 03:22:53'),
(95, 'G005', 'P001', 0.60, '2022-11-03 03:23:51', '2022-11-04 09:33:32'),
(96, 'G006', 'P001', 0.60, '2022-11-03 03:24:26', '2022-11-04 09:31:48'),
(97, 'G007', 'P001', 1.00, '2022-11-03 03:25:03', '2022-11-03 03:25:03'),
(98, 'G008', 'P001', 0.80, '2022-11-03 03:25:52', '2022-11-03 03:25:52'),
(99, 'G009', 'P001', 1.00, '2022-11-03 03:26:25', '2022-11-03 03:26:25'),
(100, 'G010', 'P001', 1.00, '2022-11-03 03:27:03', '2022-11-03 03:27:03'),
(101, 'G011', 'P001', 1.00, '2022-11-03 03:27:24', '2022-11-03 03:27:24'),
(102, 'G012', 'P001', 1.00, '2022-11-03 03:27:55', '2022-11-03 03:27:55'),
(103, 'G013', 'P001', 1.00, '2022-11-03 03:28:20', '2022-11-03 03:28:20'),
(104, 'G014', 'P001', 1.00, '2022-11-03 03:28:51', '2022-11-03 03:28:51'),
(105, 'G015', 'P001', 1.00, '2022-11-03 03:29:07', '2022-11-03 03:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id`, `nama`, `slug`, `deskripsi`, `solusi`, `gambar`, `created_at`, `updated_at`) VALUES
('C001', 'Muhammad Bagas Pangestu', 'muhammad-bagas-pangestu', '<p>Fakultas :Teknik Informatika</p>\r\n\r\n<p>&nbsp;</p>', '<p>Semoga sistem diagnosa penyakit <em>Monkeypox&nbsp;</em>ini dapat bermanfaat bagi masyarakat Indonesia.</p>', '1671460179_20221104_135743-removebg-preview (1) (1).png', '2022-09-14 02:56:59', '2022-12-19 14:29:39'),
('C002', 'Dr. Fiska Rosita,Sp.DV', 'dr-fiska-rositaspdv', '<p>Salah Satu dokter di suatu aplikasi ALODOKTER</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Riwayat Pendidikan</strong></p>\r\n\r\n<p>Fakultas Kedokteran Universitas Brawijaya Kusuma Surabaya (2012)</p>\r\n\r\n<p>Pendidikan Dokter Spesialis Dermatologi dan Venereologi Fakultas Kedokteran</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tempat Praktik</strong></p>\r\n\r\n<p>RSUD Ir. Soekarno,</p>\r\n\r\n<p>Kab. Pulau Morotai, Kabupaten pulau morotai</p>\r\n\r\n<p>&nbsp;</p>', '<p>Semoga sehat selalu....</p>', '1663492251_dr. Fiska Rosita,Sp.DV.PNG', '2022-09-14 03:22:41', '2022-09-23 14:02:29'),
('C003', 'Dr. Hayra Avianggi Sp.DV', 'dr-hayra-avianggi-spdv', '<p><strong>Riwayat Pendidikan</strong></p>\r\n\r\n<ul>\r\n	<li>Universitas Diponegoro, 2021</li>\r\n	<li>Universitas Jendral Soedirman, 2009</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tempat Praktik</strong></p>\r\n\r\n<ul>\r\n	<li>RSPAD Gatot Soebroto Jakarta Pusat, DKI Jakarta</li>\r\n	<li>RS Primaya Pasar Kemis Kab. Tangerang, Banten</li>\r\n	<li>Klinik Derma 51 Kab. Tangerang, Banten</li>\r\n</ul>', '<p>Semoga dapat bermanfaat</p>', '1671460161_Foto Dokter Hayra.png', '2022-11-03 03:47:17', '2022-12-19 14:29:21'),
('C004', 'Dr. Ir. Winarno, M.Kom.', 'dr-ir-winarno-mkom', '<ul>\r\n	<li><strong>Direktur Lembaga Penelitian Dan Pengabdian Kepada Masyarakat</strong></li>\r\n	<li><strong>Dosen Universitas Multimedia Nusantara</strong></li>\r\n	<li><strong>Pembimbing Skripsi dari Mahasiswa Muhammad Bagas Pangestu</strong></li>\r\n</ul>', '<p>.................</p>', '1671460101_Pak Winarno.JPG', '2022-11-14 11:14:32', '2022-12-19 14:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penderita` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int(11) DEFAULT NULL,
  `prov` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentase` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `nama_penderita`, `gender`, `usia`, `prov`, `penyakit_id`, `presentase`, `created_at`, `updated_at`) VALUES
(353, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:04:46', '2022-11-20 08:04:46'),
(354, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:05:32', '2022-11-20 08:05:32'),
(355, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:05:46', '2022-11-20 08:05:46'),
(356, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:06:13', '2022-11-20 08:06:13'),
(357, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:06:49', '2022-11-20 08:06:49'),
(358, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:07:24', '2022-11-20 08:07:24'),
(359, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:07:52', '2022-11-20 08:07:52'),
(360, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 0.99, '2022-11-20 08:08:47', '2022-11-20 08:08:47'),
(361, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:09:16', '2022-11-20 08:09:16'),
(362, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:09:42', '2022-11-20 08:09:42'),
(363, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:09:59', '2022-11-20 08:09:59'),
(364, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:10:14', '2022-11-20 08:10:14'),
(365, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:10:37', '2022-11-20 08:10:37'),
(366, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:10:53', '2022-11-20 08:10:53'),
(367, 'Dokter', 'Perempuan', 32, 'Banten', 'P001', 1.00, '2022-11-20 08:11:05', '2022-11-20 08:11:05'),
(440, 'Fitri', 'Perempuan', 23, 'Banten', 'P001', 0.16, '2022-11-22 13:01:05', '2022-11-22 13:01:05'),
(441, 'Diyah', 'Perempuan', 22, 'Banten', 'P001', 0.00, '2022-11-22 13:14:14', '2022-11-22 13:14:14'),
(444, 'Erina', 'Perempuan', 21, 'Banten', 'P001', 0.00, '2022-11-22 13:21:18', '2022-11-22 13:21:18'),
(445, 'Nurlaela', 'Perempuan', 22, 'DKI Jakarta', 'P001', 0.26, '2022-11-22 13:26:44', '2022-11-22 13:26:44'),
(446, 'Siti Wahyuni', 'Perempuan', 24, 'Banten', 'P001', 0.00, '2022-11-22 13:25:50', '2022-11-22 13:25:50'),
(447, 'Bagas', 'Laki-laki', 22, 'Banten', 'P001', 0.20, '2022-11-22 13:26:22', '2022-11-22 13:26:22'),
(448, 'Monica', 'Perempuan', 30, 'Banten', 'P001', 0.00, '2022-11-22 13:24:27', '2022-11-22 13:24:27'),
(449, 'Setyo Tri Handoko', 'Laki-laki', 35, 'Banten', 'P001', 0.00, '2022-11-22 13:29:25', '2022-11-22 13:29:25'),
(451, 'Adinda', 'Perempuan', 22, 'Banten', 'P001', 0.00, '2022-11-22 13:26:55', '2022-11-22 13:26:55'),
(452, 'Puji', 'Perempuan', 20, 'Banten', 'P001', 0.32, '2022-11-22 13:28:55', '2022-11-22 13:28:55'),
(453, 'cc', 'Perempuan', 22, 'DKI Jakarta', 'P001', 0.00, '2022-11-22 13:38:24', '2022-11-22 13:38:24'),
(454, 'Anisa', 'Perempuan', 22, 'Banten', 'P001', 0.00, '2022-11-22 13:46:51', '2022-11-22 13:46:51'),
(455, 'Firda Fitriani', 'Perempuan', 23, 'Banten', 'P001', 0.00, '2022-11-22 13:59:57', '2022-11-22 13:59:57'),
(456, 'rayya abdel mawaddah', 'Perempuan', 20, 'Banten', 'P001', 0.00, '2022-11-22 14:01:06', '2022-11-22 14:01:06'),
(457, 'sofi', 'Perempuan', 21, 'Banten', 'P001', 0.00, '2022-11-22 14:28:07', '2022-11-22 14:28:07'),
(458, 'Muhammad Tinno', 'Laki-laki', 23, 'Banten', 'P001', 0.00, '2022-11-27 08:23:30', '2022-11-27 08:23:30'),
(459, 'Ridho Firrizki', 'Laki-laki', 23, 'Banten', 'P001', 0.00, '2022-11-27 09:00:52', '2022-11-27 09:00:52'),
(461, 'Mochammad Andrean Pangestu', 'Laki-laki', 23, 'Banten', 'P001', 0.00, '2022-11-27 16:17:19', '2022-11-27 16:17:19'),
(462, 'Umi herlina', 'Perempuan', 20, 'Banten', 'P001', 0.00, '2022-11-27 16:18:27', '2022-11-27 16:18:27'),
(463, 'Rafi', 'Laki-laki', 22, 'Banten', 'P001', 0.00, '2022-11-28 05:22:43', '2022-11-28 05:22:43'),
(464, 'Kevin', 'Laki-laki', 22, 'DKI Jakarta', 'P001', 0.00, '2022-11-28 05:25:34', '2022-11-28 05:25:34'),
(465, 'Regina', 'Perempuan', 22, 'Jawa Barat', 'P001', 0.00, '2022-11-28 05:28:44', '2022-11-28 05:28:44'),
(466, 'Havizar', 'Laki-laki', 22, 'Banten', 'P001', 0.00, '2022-11-28 05:31:10', '2022-11-28 05:31:10'),
(467, 'Danang', 'Laki-laki', 22, 'Banten', 'P001', 0.00, '2022-11-28 05:33:38', '2022-11-28 05:33:38'),
(468, 'Hamzah', 'Laki-laki', 22, 'Banten', 'P001', 0.00, '2022-11-28 05:35:54', '2022-11-28 05:35:54'),
(469, 'Hamzah', 'Laki-laki', 22, 'Banten', 'P001', 0.00, '2022-11-28 05:37:59', '2022-11-28 05:37:59'),
(470, 'Erlangga', 'Laki-laki', 22, 'Banten', 'P001', 0.00, '2022-11-28 05:38:57', '2022-11-28 05:38:57'),
(471, 'Arrafi', 'Laki-laki', 22, 'Banten', 'P001', 0.00, '2022-11-28 05:40:44', '2022-11-28 05:40:44'),
(472, 'Dinda', 'Perempuan', 22, 'DKI Jakarta', 'P001', 0.00, '2022-11-28 06:05:13', '2022-11-28 06:05:13'),
(473, 'Aqsa hamdani', 'Laki-laki', 22, 'Nanggroe Aceh Darussalam', 'P001', 0.00, '2022-11-28 06:08:00', '2022-11-28 06:08:00'),
(474, 'Raisa', 'Perempuan', 22, 'Banten', 'P001', 0.00, '2022-11-28 06:09:45', '2022-11-28 06:09:45'),
(475, 'Rian Glory', 'Laki-laki', 22, 'Jawa Barat', 'P001', 0.00, '2022-11-28 06:12:07', '2022-11-28 06:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('G001', 'Demam Selama 0-5 Hari', '2022-11-03 03:09:04', '2022-11-03 03:09:04'),
('G002', 'Demam Mengigil Lebih dari 38°C', '2022-11-03 03:10:26', '2022-11-03 03:10:26'),
('G003', 'Sakit Kepala', '2022-11-03 03:10:55', '2022-11-03 03:10:55'),
('G004', 'Nyeri Otot', '2022-11-03 03:11:07', '2022-11-03 03:11:07'),
('G005', 'Nyeri Pada Tenggorokan', '2022-11-03 03:11:29', '2022-11-03 03:11:29'),
('G006', 'Lemas/Letih', '2022-11-03 03:12:03', '2022-11-03 03:12:03'),
('G007', 'Pembekakan Pada Gelenjar Getah Bening (Limfadenopati) Pada Leher/Ketiak/Selangkangan', '2022-11-03 03:14:34', '2022-11-03 03:14:34'),
('G008', 'Setelah Timbul Demam, Muncul Ruam Berupa Bintik Cairan', '2022-11-03 03:15:15', '2022-11-03 03:15:15'),
('G009', 'Muncul Ruam Dominan Pada Wajah', '2022-11-03 03:15:52', '2022-11-03 03:15:52'),
('G010', 'Muncul Ruam mulai dari Wajah Menyebar Keseluruh Tubuh', '2022-11-03 03:16:30', '2022-11-03 03:16:30'),
('G011', 'Terdapat Ruam Berupa \"Bintik Berisi Pus/Nanah\"', '2022-11-03 03:17:17', '2022-11-03 03:17:17'),
('G012', 'Memiliki Kesaamaan Pada Bentuk Ruam di Setiap Fase Disemua Area Tubuh', '2022-11-03 03:18:40', '2022-11-03 03:18:40'),
('G013', 'Kontak Langsung Dengan Hewan Yang Terinfeksi', '2022-11-03 03:19:06', '2022-11-03 03:19:06'),
('G014', 'Kontak Langsung Dengan Orang Yang Terinfeksi \"Cacar Monyet\"', '2022-11-03 03:20:03', '2022-11-03 03:20:03'),
('G015', 'Riwayat Perjalanan Ke Negara Endemis pada 21 Hari Sebelum Timbul Gejala', '2022-11-03 03:21:03', '2022-11-03 03:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_14_004839_create_gejala_table', 1),
(5, '2021_07_14_004915_create_penyakit_table', 1),
(6, '2021_07_14_041222_create_basis_pengetahuan_table', 1),
(7, '2021_08_07_131301_add_foreign_gejala_id_on_basis_pengetahuan_table', 1),
(8, '2021_09_01_170016_create_pesan_table', 1),
(9, '2021_10_30_173432_create_diagnosa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `nama`, `slug`, `deskripsi`, `solusi`, `gambar`, `created_at`, `updated_at`) VALUES
('B001', 'Monkeypox-WHO', 'monkeypox-who', '<p>Monkeypox adalah virus zoonosis (virus yang ditularkan ke manusia dari hewan) dengan gejala yang mirip dengan yang terlihat di masa lalu pada pasien cacar, meskipun secara klinis tidak terlalu parah. Dengan pemberantasan cacar pada tahun 1980 dan penghentian selanjutnya dari vaksinasi cacar, monkeypox telah muncul sebagai orthopoxvirus yang paling penting bagi kesehatan masyarakat. Cacar monyet terutama terjadi di Afrika tengah dan barat, seringkali di dekat hutan hujan tropis, dan semakin sering muncul di daerah perkotaan. Hewan inang termasuk berbagai hewan pengerat dan primata non-manusia.</p>\r\n\r\n<p>Virus cacar monyet adalah virus DNA untai ganda berselubung yang termasuk dalam genus Orthopoxvirus dari famili Poxviridae. Ada dua clade genetik yang berbeda dari virus monkeypox: clade Afrika tengah (Congo Basin) dan clade Afrika barat. Clade Cekungan Kongo secara historis menyebabkan penyakit yang lebih parah dan dianggap lebih menular. Pembagian geografis antara dua clades sejauh ini berada di Kamerun, satu-satunya negara di mana kedua clades virus telah ditemukan.</p>', '<p><a href=\"https://www.who.int/news-room/fact-sheets/detail/monkeypox\">https://www.who.int/news-room/fact-sheets/detail/monkeypox</a></p>', '1663113730_cacar_monyet.jpg', '2022-09-14 00:02:10', '2022-09-14 00:02:10'),
('B002', 'Kemenkes Mengkonfirmasi Pasien Cacar Monyet Pertama di Indonesia', 'kemenkes-mengkonfirmasi-pasien-cacar-monyet-pertama-di-indonesia', '<p>Kementerian Kesehatan mengkonfirmasi satu pasien pertama cacar monyet atau&nbsp;<em>monkeypox&nbsp;</em>di Indonesia pada hari ini, Sabtu, 20 Agustus 2022. Juru bicara Kementerian Kesehatan dr. Mohammad Syahril mengatakan pasien dinyatakan positif setelah hasil pemeriksaan PCR keluar Jumat malam.</p>\r\n\r\n<p>Pasien terkonfirmasi pertama cacar monyet di Indonesia adalah laki-laki berusia 27 tahun yang berasal dari Jakarta. Ia terkonfirmasi positif setelah dilakukan tes PCR dua hari sebelumnya.&nbsp;&ldquo;Yang bersangkutan memang baru saja berpergian dari luar negeri,&rdquo; kata dr. Mohammad Syahril saat konferensi virtual, Sabtu, 20 Agustus 2022.</p>\r\n\r\n<p>Ia adalah satu dari 23 pasien yang dites cacar monyet oleh Kemenkes.&nbsp;22 suspek lain dinyatakan negatif. Pasien positif tersebut mengalami gejala pada 14 Agustus 2022. Beberapa gejala yang dialami antara lain demam, pembesaran pada kelenjar limfe, kemudian ruam di muka, telapak tangan, kali, dan sebagian alat kelamin. &ldquo;Pasien saat ini dalam keadaan baik, artinya tidak ada sakit berat,&rdquo; kata Syahril.</p>\r\n\r\n<p>Kementerian Kesehatan telah berkoordinasi dengan dinas kesehatan dan P2P Kemenkes untuk melakukan pengawasan karena cacar monyet adalah penyakit menular. Cacar monyet pertama kali dilaporkan di Inggris pada 6 Mei 2022.</p>\r\n\r\n<p>Organisasi Kesehatan Dunia (WHO) lalu mengumumkan cacar monyet sebagai kedaruratan kesehatan global pada 23 Juli. Hingga saat iniada 86 negara yang melaporkan kasus cacar monyet dengan total 39.708 dan 400 kematian.</p>', '<p><a href=\"https://nasional.tempo.co/read/1624923/kemenkes-mengkonfirmasi-pasien-cacar-monyet-pertama-di-indonesia\">https://nasional.tempo.co/read/1624923/kemenkes-mengkonfirmasi-pasien-cacar-monyet-pertama-di-indonesia</a></p>', '1663113941_841927_720.jpg', '2022-09-14 00:05:41', '2022-09-14 00:05:41'),
('B003', '9 Ciri - ciri Cacar Air yang perlu di waspadai', '9-ciri-ciri-cacar-air-yang-perlu-di-waspadai', '<p>KOMPAS.com - Cacar air adalah infeksi yang menyebabkan ruam gatal dengan lepuh berisi cairan. Penyebab cacar air karena infeksi virus varicella-zoster. Penyakit ini sangat menular, terutama pada penderita yang belum pernah terinfeksi atau belum pernah disuntik vaksin cacar air. Untuk meningkatkan kewaspadaan pada penyakit ini, kenali gejala cacar air yang perlu diwaspadai.</p>\r\n\r\n<p>Ciri-ciri cacar air</p>\r\n\r\n<p>Ciri-ciri cacar air relatif mudah dikenali karena khas dan muncul secara berurutan. Dilansir dari Cleveland Clinic, berikut urutan gejalanya:</p>\r\n\r\n<ul>\r\n	<li>Demam</li>\r\n	<li>Tidak nafsu makan</li>\r\n	<li>Badan lemas atau mudah lelah</li>\r\n	<li>Sakit kepala</li>\r\n	<li>Sakit perut selama satu atau dua hari</li>\r\n	<li>Muncul ruam berupa lepuh kecil-kecil di kulit dan rasanya sangat gatal</li>\r\n	<li>Lepuh berupa benjolan kecil-kecil berisi cairan berwarna keputihan seperti susu</li>\r\n	<li>Setelah lepuh pecah, terbentuk keropeng atau koreng di kulit</li>\r\n	<li>Kulit bekas luka cacar air terlihat seperti bekas jerawat</li>\r\n</ul>\r\n\r\n<p>Dikutip dari Mayo Clinic, ruam berupa lepuh di kulit bakal muncul setelah 10 sampai 21 hari selang penderita terpapar virus penyebab cacar air. Gejala ruam dan bentol-bentol di kulit ini biasanya muncul selama lima sampai 10 hari. Satu sampai dua hari sebelum ruam dan lepuh di kulit muncul, penderita bakal lebih dulu merasakan demam, tidak nafsu makan, sampai sakit kepala.</p>', '<p><a href=\"https://health.kompas.com/read/2022/06/12/140100968/9-ciri-ciri-cacar-air-yang-perlu-diwaspadai\">https://health.kompas.com/read/2022/06/12/140100968/9-ciri-ciri-cacar-air-yang-perlu-diwaspadai</a></p>', '1665201320_62a4cf2b6c294.jpg', '2022-10-08 03:55:20', '2022-10-08 03:56:04'),
('B004', 'WHO recommends new name for monkeypox disease', 'who-recommends-new-name-for-monkeypox-disease', '<p>Who telah merekomendasikan nama cacar monyet menjadi &quot;MPOX&quot;</p>\r\n\r\n<p>Menyusul serangkaian konsultasi dengan para ahli global, WHO akan mulai menggunakan istilah baru yang lebih disukai &quot;mox&quot; sebagai sinonim untuk cacar monyet. Kedua nama tersebut akan digunakan secara bersamaan selama satu tahun sementara &ldquo;cacar monyet&rdquo; dihapuskan.</p>\r\n\r\n<p>Ketika wabah cacar monyet meluas awal tahun ini, bahasa rasis dan menstigmatisasi online, di tempat lain dan di beberapa komunitas diamati dan dilaporkan ke WHO. Dalam beberapa pertemuan, publik dan swasta, sejumlah individu dan negara menyuarakan keprihatinan dan meminta WHO mengusulkan cara untuk mengubah nama tersebut.</p>\r\n\r\n<p>Menetapkan nama untuk penyakit baru dan, sangat luar biasa, untuk penyakit yang sudah ada adalah tanggung jawab WHO di bawah Klasifikasi Penyakit Internasional (ICD) dan Keluarga WHO dari Klasifikasi Terkait Kesehatan Internasional melalui proses konsultatif yang mencakup Negara Anggota WHO.</p>\r\n\r\n<p>WHO, sesuai dengan proses pemutakhiran ICD, mengadakan konsultasi untuk mengumpulkan pandangan dari berbagai pakar, serta negara dan masyarakat umum, yang diundang untuk mengajukan usulan nama baru. Berdasarkan konsultasi tersebut, dan diskusi lebih lanjut dengan Direktur Jenderal WHO Dr Tedros Adhanom Ghebreyesus, WHO merekomendasikan sebagai berikut:</p>\r\n\r\n<p>Adopsi mpox sinonim baru dalam bahasa Inggris untuk penyakit ini.<br />\r\nMpox akan menjadi istilah pilihan, menggantikan monkeypox, setelah masa transisi satu tahun. Ini berfungsi untuk mengurangi kekhawatiran yang dikemukakan oleh para ahli tentang kebingungan yang disebabkan oleh perubahan nama di tengah wabah global. Ini juga memberi waktu untuk menyelesaikan proses pembaruan ICD dan memperbarui publikasi WHO.<br />\r\nSinonim mpox akan dimasukkan dalam ICD-10 online dalam beberapa hari mendatang. Ini akan menjadi bagian dari rilis resmi ICD-11 tahun 2023, yang merupakan standar global saat ini untuk data kesehatan, dokumentasi klinis, dan agregasi statistik.<br />\r\nIstilah &ldquo;cacar monyet&rdquo; akan tetap menjadi istilah yang dapat dicari di ICD, agar sesuai dengan informasi historis.<br />\r\nPertimbangan untuk rekomendasi termasuk alasan, kesesuaian ilmiah, tingkat penggunaan saat ini, pengucapan, kegunaan dalam bahasa yang berbeda, tidak adanya referensi geografis atau zoologi, dan kemudahan pengambilan informasi ilmiah sejarah.</p>\r\n\r\n<p>Biasanya, proses pemutakhiran ICD bisa memakan waktu hingga beberapa tahun. Dalam hal ini, prosesnya dipercepat, meski mengikuti langkah-langkah standar.</p>\r\n\r\n<p>Berbagai badan penasihat disidangkan selama proses konsultasi, termasuk para ahli dari komite penasihat medis dan ilmiah serta klasifikasi dan statistik yang merupakan perwakilan dari otoritas pemerintah dari 45 negara yang berbeda.</p>\r\n\r\n<p>Masalah penggunaan nama baru dalam berbagai bahasa dibahas secara luas. Istilah mpox yang disukai dapat digunakan dalam bahasa lain. Jika muncul masalah penamaan tambahan, ini akan ditangani melalui mekanisme yang sama. Terjemahan biasanya didiskusikan dalam kerja sama formal dengan otoritas pemerintah terkait dan masyarakat ilmiah terkait.</p>\r\n\r\n<p>WHO akan mengadopsi istilah mpox dalam komunikasinya, dan mendorong orang lain untuk mengikuti rekomendasi ini, untuk meminimalkan dampak negatif yang berkelanjutan dari nama saat ini dan dari adopsi nama baru.</p>', '<p><a href=\"https://www.who.int/news/item/28-11-2022-who-recommends-new-name-for-monkeypox-disease\">https://www.who.int/news/item/28-11-2022-who-recommends-new-name-for-monkeypox-disease</a></p>', '1671460296_mpox.PNG', '2022-11-30 10:55:07', '2022-12-19 14:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `slug`, `deskripsi`, `solusi`, `gambar`, `created_at`, `updated_at`) VALUES
('P001', 'Monkeypox', 'monkeypox', '<p>Monkeypox adalah virus zoonosis (virus yang ditularkan ke manusia dari hewan) dengan gejala yang mirip dengan yang terlihat di masa lalu pada pasien cacar, meskipun secara klinis tidak terlalu parah. Dengan pemberantasan cacar pada tahun 1980 dan penghentian selanjutnya dari vaksinasi cacar, monkeypox telah muncul sebagai orthopoxvirus yang paling penting bagi kesehatan masyarakat. Cacar monyet terutama terjadi di Afrika tengah dan barat, seringkali di dekat hutan hujan tropis, dan semakin sering muncul di daerah perkotaan. Hewan inang termasuk berbagai hewan pengerat dan primata non-manusia.</p>', '<p><strong>Menurut Dr. Fiska Rosita Sp,DV.</strong></p>\r\n\r\n<ul>\r\n	<li>Meningkatkan imunitas tubuh, karena ini disebabkan oleh virus.</li>\r\n	<li>Untuk terapi hanya sesuai gejala, virus ini dapat sembuh dan membaik dalam kurang lebih 3-4 minggu.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Menurut Dr. Hayra Avianggi Sp.DV.</strong></p>\r\n\r\n<ul>\r\n	<li><strong>.................</strong></li>\r\n	<li><strong>.................</strong></li>\r\n</ul>', '1663111345_cacar_monyet.jpg', '2022-09-12 00:33:26', '2022-11-06 07:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `prov_id` int(11) NOT NULL,
  `prov_name` varchar(255) DEFAULT NULL,
  `locationid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`prov_id`, `prov_name`, `locationid`, `status`) VALUES
(1, 'ACEH', 1, 1),
(2, 'SUMATERA UTARA', 1, 1),
(3, 'SUMATERA BARAT', 1, 1),
(4, 'RIAU', 1, 1),
(5, 'JAMBI', 1, 1),
(6, 'SUMATERA SELATAN', 1, 1),
(7, 'BENGKULU', 1, 1),
(8, 'LAMPUNG', 1, 1),
(9, 'KEPULAUAN BANGKA BELITUNG', 1, 1),
(10, 'KEPULAUAN RIAU', 1, 1),
(11, 'DKI JAKARTA', 1, 1),
(12, 'JAWA BARAT', 1, 1),
(13, 'JAWA TENGAH', 1, 1),
(14, 'DI YOGYAKARTA', 1, 1),
(15, 'JAWA TIMUR', 1, 1),
(16, 'BANTEN', 1, 1),
(17, 'BALI', 1, 1),
(18, 'NUSA TENGGARA BARAT', 1, 1),
(19, 'NUSA TENGGARA TIMUR', 1, 1),
(20, 'KALIMANTAN BARAT', 1, 1),
(21, 'KALIMANTAN TENGAH', 1, 1),
(22, 'KALIMANTAN SELATAN', 1, 1),
(23, 'KALIMANTAN TIMUR', 1, 1),
(24, 'KALIMANTAN UTARA', 1, 1),
(25, 'SULAWESI UTARA', 1, 1),
(26, 'SULAWESI TENGAH', 1, 1),
(27, 'SULAWESI SELATAN', 1, 1),
(28, 'SULAWESI TENGGARA', 1, 1),
(29, 'GORONTALO', 1, 1),
(30, 'SULAWESI BARAT', 1, 1),
(31, 'MALUKU', 1, 1),
(32, 'MALUKU UTARA', 1, 1),
(33, 'PAPUA', 1, 1),
(34, 'PAPUA BARAT', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin1', 'admin1', 'muhammad.bagas@student.umn.ac.id', '$2y$10$WQxaDS3mv.GWOxMLk171Wej.rh4TMbA.C0XsyaliTAdhEKNH47le2', 'nllXzGNXce5bp2cV0I35lV1L5wGtuGGNl1g36VbADY51FzNjD7xmkhfjC9td', '2022-09-13 21:06:49', '2022-11-28 10:38:49'),
(4, 'admin2', 'admin2', 'admin2@gmail.com', '$2y$10$P588umLPSpxjkCP0qztGNuaCEI.uRlldjoAfsmFdXRepddACkXzrq', NULL, '2022-09-17 14:14:08', '2022-09-17 14:14:08'),
(8, 'dr. Hayra Avianggi, Sp.DV', 'Dokter', 'hayra.medsos@gmail.com', '$2y$10$I/w85BtDr13a78uGCkWNoeX1mkGDLjjFCs4XeRr3GfCpYYgLlAZ.C', NULL, '2022-11-09 11:40:46', '2022-11-10 13:30:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basis_pengetahuan_gejala_id_foreign` (`gejala_id`),
  ADD KEY `basis_pengetahuan_penyakit_id_foreign` (`penyakit_id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnosa_penyakit_id_foreign` (`penyakit_id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`prov_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD CONSTRAINT `basis_pengetahuan_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `basis_pengetahuan_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
