-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 03:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sihaki`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `category`, `image`, `content`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(40, 'Sihaki Politap', 'Merek', 'public/uploads/1658756257pengajuan.jpeg', 'Sihaki Politap Adalah Sebuah Aplikasi Sederhana Pengajuan Hak Cipta, Merek dan Paten', NULL, NULL, '2022-06-14 19:46:33', '2022-07-25 06:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `hak_cipta`
--

CREATE TABLE `hak_cipta` (
  `id` int(36) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama_pencipta` varchar(255) DEFAULT NULL,
  `Kewarganegaran_pencipta` varchar(255) DEFAULT NULL,
  `no_hp_pencipta` varchar(255) DEFAULT NULL,
  `email_pencipta` varchar(255) DEFAULT NULL,
  `alamat_pencipta` text DEFAULT NULL,
  `nama_pemegang` varchar(255) DEFAULT NULL,
  `Kewarganegaraan_pemegang` varchar(255) DEFAULT NULL,
  `no_hp_pemegang` varchar(255) DEFAULT NULL,
  `email_pemegang` varchar(255) DEFAULT NULL,
  `alamat_pemegang` text DEFAULT NULL,
  `jenis_judul_pencipta` text DEFAULT NULL,
  `tempat_pencipta` varchar(255) DEFAULT NULL,
  `tanngal_pertama_kali_pencipta` date DEFAULT NULL,
  `uraian_pencipta` text DEFAULT NULL,
  `tanngal_pembuatan_pencipta` date DEFAULT NULL,
  `file_permohonan_hakcipta` varchar(255) DEFAULT NULL,
  `file_npwp` varchar(255) DEFAULT NULL,
  `file_ktp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_cipta`
--

INSERT INTO `hak_cipta` (`id`, `user_id`, `nama_pencipta`, `Kewarganegaran_pencipta`, `no_hp_pencipta`, `email_pencipta`, `alamat_pencipta`, `nama_pemegang`, `Kewarganegaraan_pemegang`, `no_hp_pemegang`, `email_pemegang`, `alamat_pemegang`, `jenis_judul_pencipta`, `tempat_pencipta`, `tanngal_pertama_kali_pencipta`, `uraian_pencipta`, `tanngal_pembuatan_pencipta`, `file_permohonan_hakcipta`, `file_npwp`, `file_ktp`, `created_at`, `updated_at`) VALUES
(16, 27, 'bayu', 'indonesia', '089694456329', 'bayu@gmail.com', 'sungai awan kanan', 'Politeknik Negri Ketapang', 'Indonesia', '082250867886', 'sentraki@politap.ac.id', 'Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78112', 'fotografi alat musik', 'ketapang', '2022-07-25', 'fotographi tentang alat musik', '2022-07-25', 'hakcipta/docx/Raw9g.docx', 'HakCipta/docs/npwp22/npwp.png', 'HakCipta/docs/ktp22/ktp.jpg', '2022-07-25 10:45:22', '2022-07-25 03:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `hak_paten`
--

CREATE TABLE `hak_paten` (
  `id` int(36) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bertanda` varchar(255) DEFAULT NULL,
  `menyerahkan` varchar(255) DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `penemu` varchar(255) DEFAULT NULL,
  `file_npwp` varchar(255) DEFAULT NULL,
  `file_ktp` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hap_paten_kepemilikan`
--

CREATE TABLE `hap_paten_kepemilikan` (
  `id` int(36) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `file_list` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hap_paten_kepemilikan`
--

INSERT INTO `hap_paten_kepemilikan` (`id`, `user_id`, `judul`, `nama`, `file_list`, `file`, `created_at`, `updated_at`) VALUES
(3, NULL, 'hhh', 'bayu', 'Hakpaten/docs/file-list22/file_list.png', 'hakpaten/docx/wFCE7.docx', '2022-07-25 11:41:21', '2022-07-25 04:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama_pengaju` varchar(100) DEFAULT NULL,
  `nama_merek` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `foto_merek` varchar(255) NOT NULL,
  `foto_ttd` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, '2022_04_07_162335_add_column_level_user_to_users_table', 1),
(5, '2022_04_07_163628_create_users_details_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(7, '2022_05_09_054550_create_pangkalan_table', 3),
(8, '2022_05_09_082931_create_category_table', 3),
(9, '2022_05_09_094914_create_kepengurusan_table', 4),
(10, '2022_05_10_061454_create_pengajuan_table', 5),
(11, '2022_06_05_095957_create_pengelolas_table', 6),
(12, '2022_06_06_144752_create_formulirs_table', 7),
(13, '2022_06_06_153242_create_data_registers_table', 7),
(14, '2022_06_06_153434_create_upload_files_table', 7),
(15, '2022_06_06_153613_create_sertifikasis_table', 7),
(16, '2022_06_22_090036_create_hakciptas_table', 8),
(17, '2022_06_22_101322_create_anggotas_table', 9),
(18, '2022_06_26_102718_create_paten_models_table', 10),
(19, '2022_07_18_055039_create_simadu_pegawai_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_pegawai` varchar(36) NOT NULL,
  `id_category` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` longtext NOT NULL,
  `file` varchar(100) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tgl_upload` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengalihan_hakcipta`
--

CREATE TABLE `pengalihan_hakcipta` (
  `id` int(36) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nama_pelaku` varchar(255) DEFAULT NULL,
  `alamat_pelaku` text DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pemegang` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalihan_hakcipta`
--

INSERT INTO `pengalihan_hakcipta` (`id`, `user_id`, `nama`, `alamat`, `nama_pelaku`, `alamat_pelaku`, `judul`, `tempat`, `tanggal`, `pemegang`, `file`, `created_at`, `updated_at`) VALUES
(1234, 23456, 'esd', 'efrtfg', 'efwerdse', 'ewfsd', 'ewsfd', 'esfd', '2022-07-05', 'efsd', 'esfd', '2022-07-25 12:21:22', '2022-07-25 12:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `pengelolas`
--

CREATE TABLE `pengelolas` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengelolas`
--

INSERT INTO `pengelolas` (`id`, `name`, `nip`, `jabatan`, `content`, `image`, `created_at`, `updated_at`) VALUES
(3, 'A. Nova Zulfahmi, S.Pi., M.Sc.', '19901105 201903 1 007', 'Ketua', 'SIHAKI', 'public/uploads/1658756067foto1.jpeg', '2022-06-14 19:41:23', '2022-07-25 06:34:27'),
(35, 'Nurhanudin, A.Md.', '19890730 201601 189', 'Seketaris', 'SIHAKI', 'public/uploads/1658756124foto2.jpeg', '2022-06-14 19:41:46', '2022-07-25 06:35:24'),
(36, 'Firmanilah Kamil, S.Pd., M.Pd.', '19930818 201903 2 026', 'Divisi Drafter', 'SIHAKI', 'public/uploads/1658756178foto3.jpeg', '2022-06-14 19:42:14', '2022-07-25 06:36:18'),
(37, 'Saima Putrini R. Harahap, S.Pd., M.Pd.', '19910617 201903 2 022', 'Divisi Drafter', 'SIHAKI', 'public/uploads/1658756234foto4.jpeg', '2022-06-14 19:42:48', '2022-07-25 06:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `pernytaan_hakcipta`
--

CREATE TABLE `pernytaan_hakcipta` (
  `id` int(36) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kewarganegara` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `berupa` varchar(255) DEFAULT NULL,
  `berjudul` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tanngal` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `revisi`
--

CREATE TABLE `revisi` (
  `id` int(11) NOT NULL,
  `id_pegawai` varchar(36) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `pesan` longtext NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_pegawai` varchar(36) NOT NULL,
  `file_sertifikat` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `simadu__pegawai`
--

CREATE TABLE `simadu__pegawai` (
  `id` varchar(36) CHARACTER SET utf8mb4 NOT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nup` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nik_ktp` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `gelar_depan` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gelar_belakang` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `simadu__pegawai`
--

INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `created_at`, `updated_at`) VALUES
('02b2a632-7432-4eaa-9898-b2ea879ff373', NULL, '19780803 201509 168', NULL, NULL, 'Heri Darmawan', NULL, 'S.T', 'Ketapang', '1978-08-03', 'Laki-laki', '', '$2y$10$W3LO7bz1A4HOu0JDpEaCBuVLSZ2OniU6h8eymxCl97Ap2WCaAXv1.', '2022-07-17 22:50:41', '2022-07-17 22:50:41'),
('02fb52d1-876d-4dca-83d5-a8d769842eb5', NULL, '19890614 201302 129', NULL, NULL, 'M. Riduan', NULL, 'A.Md', 'Ketapang', '1989-06-14', 'Laki-laki', 'Islam', '$2y$10$sLyPYF4KvctORDr7PAnjqeRldpxGhWUq5dlvvONcC89cQlMjyGmFi', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '19850516 202121 2 004', NULL, NULL, NULL, 'Eva Susana', NULL, 'A.Md', 'Ketapang', '1985-05-16', 'Perempuan', '', '$2y$10$TSkdajFJ4qR1qNBWlLX0XucvvsLIuPSxD5fUuLnhBY2obJkJZCn9O', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', NULL, NULL, NULL, NULL, 'Vensya Aswal Anugerah Panca Poetri', NULL, 'A.Md', 'Pontianak', '1993-03-31', 'Perempuan', 'Islam', '$2y$10$d5qfUtJkXf4PffNWyHvTYOfmErkqzQWxsbvyz8M4Xi8dy0ngtIwPu', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('045cfd08-9a76-4c18-a1eb-b43a99f48c57', NULL, '19920717 201512 174', NULL, NULL, 'Devi Elvira', NULL, 'S.Pd', 'Ketapang', '1992-07-17', 'Perempuan', '', '$2y$10$gSrwA1qezYxRV28zLo90FOBotlZYBATNr/124/RmNHQVJjQJGoPFu', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('0854e795-2c48-484e-b919-675b7be7dc7c', '19830917 202121 1 001', NULL, NULL, NULL, 'Adha Panca Wardanu', NULL, 'S.TP.,M.P', 'Pontianak', '1983-09-17', 'Laki-laki', 'Islam', '$2y$10$E0tk4xAo.MMxHsf5GE/vtOd893lALT3E8YxuJA2P1eMpB26SxK5Cm', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('093cca9b-a773-4867-a5f6-a665467f791b', NULL, '19890622 201601 95', NULL, NULL, 'Juniarti', NULL, 'A.Md', 'Ketapang', '1989-06-22', 'Perempuan', '', '$2y$10$4sUXs1Sb8yj/YL6pAXEk1uiprwwvlJpNkHxxbIIKvZJrst1GDqhES', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('0a89879b-7875-4420-ab42-4ec9cb00e86e', '19910217 202121 1 002', NULL, NULL, NULL, 'Fajar Pebriyono', NULL, 'A. Md', 'Ketapang', '1991-02-17', 'Laki-laki', '', '$2y$10$G6jcMlcDs8.0BmDIbFseMOT3SLvlLmGC/gzhJmOXf4L6gnEpjfyxC', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('0ed02966-83fd-4b68-b3e6-077f75582dd2', NULL, '19961119 202107 260', '6171035911960020', NULL, 'Dyah Novia Nugraheni', NULL, 'S.Tr.Ak.,M.Ak.', 'pontianak', '1996-11-19', 'Perempuan', 'Islam', '$2y$10$lVGIy8/SfpXO01JkO4xrT.M2qjd..orYFBcMJ312y5l7TVUd1/vNK', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('13c7279b-9d2e-4afa-a641-ca2ebc14f151', NULL, NULL, NULL, NULL, 'Moh Rokim', NULL, '', 'Purworejo', '1970-01-01', 'Laki-laki', '', '$2y$10$v/nzsx6x1GVAaO2mAx98TuUrfUXd.DSDZSibUD.NjpXdxxIf3PDFq', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('13dd745d-221f-421f-b78b-138131893d28', NULL, NULL, NULL, NULL, 'Dedi Kurniadi', NULL, '', 'Ketapang', '1970-01-01', 'Laki-laki', '', '$2y$10$TDxLvcMnmoW5dQ4Qjs337O/vh5LWu7cm77cYtEF9.7MEA5tv/Muvq', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('143f2dec-fc53-45e6-a700-989bdf50c019', '19851008 202121 1 005', NULL, NULL, NULL, 'Erick Radwitya', NULL, 'S.ST., MT', 'Ketapang', '1985-10-08', 'Laki-laki', 'Islam', '$2y$10$s2YU60Xtm2Y6B/ijRb22H.btDSAmqrs52C5KD//rG/AxcJjeSqeHu', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('14e636c6-3ca1-4e24-9072-3b0b707abc99', NULL, NULL, NULL, NULL, 'M. Randi Hardiyanto', NULL, '', 'Ketapang', '1993-05-25', 'Laki-laki', '', '$2y$10$4jCY5HS9O.ii2b9ROs1pQ.AHZoej38NojlDYoQ3b3deZA8Yj0CxRa', '2022-07-17 22:50:42', '2022-07-17 22:50:42'),
('15417e2f-797e-43fe-ac3f-54b550f683ad', '19710324 202121 1 001', NULL, NULL, NULL, 'Molyadi', NULL, 'A.Md', 'Ketapang', '1971-03-24', 'Laki-laki', 'Islam', '$2y$10$xgmm4x0NTkgKFQfxL8v8GO1dMdvzbRC6f0BlNpoVXXqR.tTjyrMuC', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('159c1ff3-499e-4acc-84c2-bc844f8da135', '19820310 202121 1 003', NULL, NULL, NULL, 'Trian Adimarta', NULL, 'S.TP., M.Sc', 'Surabaya', '1982-03-10', 'Laki-laki', 'Islam', '$2y$10$rk2m1yp4f7B54xfYJyWBGuabKiMB.pgVL1hZyiCaTtzj9A6AS05Yq', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('16cb2f5a-392a-48bf-b846-bcf548ded51f', NULL, '19920521 201512 175', NULL, NULL, 'Muhamad Reza Lukmana', NULL, 'A.Md', 'Ketapang', '1992-05-21', 'Laki-laki', 'Islam', '$2y$10$HtMglWfl6PFcleP/MxoO8OPnqX43VeH5hHdT8MhVvA4zd7aCVIySi', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', NULL, NULL, NULL, NULL, 'Supiandi', NULL, '', 'Ketapang', '1980-06-09', 'Laki-laki', '', '$2y$10$2b9sFIHT/Iv0SJUPVqZDSOwg/NlLxvoOhV1gyd3xKSVx4F1TB.OmG', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('18514bb6-0287-4061-b323-05247b4132c4', '19720918 202121 2 002', NULL, NULL, NULL, 'Heni Haryani', NULL, NULL, 'Ketapang', '1972-09-18', 'Perempuan', '', '$2y$10$AT0dQaqhX6QHcIH5Y7y79eUfd40aLUxkilzUT3gmCn0kSGxOHd37O', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('189bd94f-5fd1-451a-8a00-031840e9a07a', NULL, NULL, NULL, NULL, 'Khairil', NULL, 'S.P.,M.P', 'Samili', '1981-09-17', 'Laki-laki', 'Islam', '$2y$10$yx2Pn/mPQzP1fmWct2BIce7yd/4OCvSk2v/IMnJUJ.z/H.m.eTf0O', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('18eebaa7-84fd-48ac-9c61-81dfe56e8074', '19770221 200803 1 001', NULL, NULL, NULL, 'Uti Rustam Efendi', NULL, 'S.T., M.T', NULL, '1977-02-21', 'Laki-laki', 'Islam', '$2y$10$KuE7.b70/7RQa75hux.EUuMfzPGPQEUhZQmvi005J86rxxsFy78tS', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('193ca687-65a0-4711-b0c0-1927043c277d', NULL, '19930528 201603 202', NULL, NULL, 'Fachrul Rozie', NULL, 'S.T, M.Tr.T', 'Ketapang', '1993-05-28', 'Laki-laki', 'Islam', '$2y$10$s2XSKkWIxTyOVHzj1wRDOejSiRGCVO1VezfZZpFbEIggODOdypfyu', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('1a3344f4-7b24-487e-a9fb-5ad326c13fff', '19900802 201903 1 003', NULL, NULL, NULL, 'Kondhang Dhika Kusuma', NULL, 'A.Md', 'Surakarta', '1990-08-02', 'Laki-laki', 'Islam', '$2y$10$JB/y47TSu/YRUUBaLJ662u7KNJrAYcspGkXC93P4QD9pTyKDr.6HG', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('1a9c1f07-2017-4492-a4f6-0dc243e7d999', '19911112 201903 1 014', NULL, NULL, NULL, 'Kasrianto Wijaya', NULL, 'A.Md', 'Palopo', '1991-11-12', 'Laki-laki', 'Islam', '$2y$10$OGtyjln5bdRxoL0y9zQZxutDAvq6KbcK.bCET32mlOMlVUvhn2dkS', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('1b0267f4-d517-4512-a4c3-301a96372d12', '19890623 201903 2 015', NULL, NULL, NULL, 'Syarifah Aqla', NULL, 'S.Pd.,M.T', 'Pontianak', '1989-06-23', 'Perempuan', 'Islam', '$2y$10$Jv/RqEUGmAf8CDq6sWzNFOXvpY.0bQO9w4cGz0PbLBz0P7t1vy26.', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('1b483074-16f8-4c4a-908a-ba3e3ee8e7e1', '19780511 202121 1 003', NULL, NULL, NULL, 'Helanianto', NULL, 'S.T.,M.T', 'Randau', '1978-05-11', 'Laki-laki', 'Katholik', '$2y$10$yQM0XY9zEwAtIrbu9VnGEOaP1Zre7EuZANkSvn2LkToNb8wnR4Wia', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('1ba7321f-8186-4fbb-8cff-ff1d597d4336', '19760921 202121 1 002', NULL, NULL, NULL, 'Normansyah', NULL, 'S.T.,M.T', 'Ketapang', '1976-09-21', 'Laki-laki', 'Islam', '$2y$10$ZqB0NigbnlUvho9yQtU39e.qS8cnxBW2iEBAy1Et0yDOBX4t6wlpW', '2022-07-17 22:50:43', '2022-07-17 22:50:43'),
('1d5b7688-73c1-4142-99f3-94bbae58ed79', '19880501 201903 1 007', NULL, NULL, NULL, 'Budi Pratomo Sibuea', NULL, 'S.ST.,M.ST', 'Tebing Karimun', '1988-05-01', 'Laki-laki', 'Kristen', '$2y$10$bMQnCz7vxFYyDeY0PeiLReqVdFTBGX8ouGl34X/HGtvfdh0fbKeym', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('1e0985f8-2c11-4f3f-845b-6bf9a09c3b2d', NULL, '19930128 201609 210', NULL, NULL, 'Ar-Razy Muhammad', NULL, 'S.T', 'Pontianak', '1993-01-28', 'Laki-laki', 'Islam', '$2y$10$JwOaDb8kfJL0NtVy2OWIQeJB91a9A1TuHCktoCaw/Hs2IQT5rloWa', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('1e9dc080-4487-494e-9225-72b737e726c3', NULL, '19880328 201802 230', NULL, NULL, 'Muhammad Fadli', NULL, 'A.Md', 'Semarang', '1988-03-28', 'Laki-laki', 'Islam', '$2y$10$WdXCUdldkxWlfkh4p39F7eqAQRZ/HZMINqR7sqB0x2/mV1rjN6hj6', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('1f160b23-2073-4ad4-9ffc-1e417dc85cc9', NULL, '19900109 201512 171', NULL, NULL, 'Sarwendah Ratnawati Hermanto', NULL, 'S.Pd., M.Sc', 'Surakarta', '1990-01-09', 'Perempuan', 'Islam', '$2y$10$MfgoV824IkVFoBZeEA7cYeIJ/QNHRsIFrY5Fcs15tapzH.vjNCxhq', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('20ab0593-f9f5-405f-86ff-a3f3c50d804b', NULL, '19910413 201509 161', NULL, NULL, 'Rika Fitry Ramanda', NULL, 'M.P', 'Ketapang', '1991-04-13', 'Perempuan', 'Islam', '$2y$10$aX8cV0pCnLgLWePV3.kHN.nn4ujvH.4Y/iIqGOIeKxVn6AtSG7ivy', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('20c6f98d-f528-4fc2-9016-ef526e32b7ba', NULL, '19830327 201701 215', NULL, NULL, 'Uray Sriyani', NULL, '', 'Balai Karangan', '1983-03-27', 'Perempuan', '', '$2y$10$/qv.c0n29G4grUr0GHC2uekr/7.lHi0Jvvc1jHz38SCttM9w76DCK', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('2189d7cd-773e-4845-84a5-fffaa1ea901f', '19880315 201903 2 011', NULL, NULL, NULL, 'Maya Santi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-03-15', 'Perempuan', 'Islam', '$2y$10$sOLVuUVzMkQiHflVRZCnc.MavRhzE0VS36EI2PL.BdO4uLzcsh12G', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('22bf31f9-6306-425e-9d54-89ace70ccda4', '19880424 201903 2 012', NULL, NULL, NULL, 'Hurul\'ain', 'Ir.', 'S.T.,M.T', 'Pemangkat', '1988-04-24', 'Perempuan', 'Islam', '$2y$10$q2PJ1z8oKpl2ywVMW5TJSOiYGCdkSRKqD5xDHGtFL51gG7dre8Ui6', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('22e45ac1-e10f-4134-8739-23fd2faa507c', '19840605 202121 1 005', NULL, NULL, NULL, 'Effendi', NULL, ' A.Md', 'Ketapang', '1984-06-05', 'Laki-laki', '', '$2y$10$StLOgGuv8ajOj94PtB4J9uTBO3m161gXmj9PE1NM/N6I/J.Vzt2b2', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('252e762f-e81d-4c33-8aae-11b68c651c17', NULL, NULL, NULL, NULL, 'Ibnu Hajar', NULL, '', 'Ketapang', '1969-01-29', 'Laki-laki', '', '$2y$10$9V2coQHfmMUGtMnr5Ic27e9UwJObTgbtDyw2aoceukqpJHQAcqrmm', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('26f5893c-c355-4040-9ae4-6e53187c725f', '19740722 202121 1 005', NULL, NULL, NULL, 'Muh Anhar', NULL, 'S.T.,M.T', 'Boyolali', '1974-07-22', 'Laki-laki', 'Islam', '$2y$10$S1sDhx93jpySGKsiiVtr0uplt4IbLib9VTDbqf6v9QbgOSQEuz/YO', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('28e2a56e-3c76-4d19-844f-a3092954f0b7', '19850217 201504 2 002', NULL, NULL, NULL, 'Encik Eko Rifkowaty', NULL, 'S.TP.,M.P', 'Pontianak', '1985-02-17', 'Perempuan', 'Islam', '$2y$10$MXXkNGccv0xciFg4QcPqHOLAnV1hrRU5wEXS7/cQXIIOSi0yetWGG', '2022-07-17 22:50:44', '2022-07-17 22:50:44'),
('29157361-a115-43a4-86ed-fbe66964c0d7', '19810521 202121 1 006', NULL, NULL, NULL, 'Dedi Sartono', NULL, 'A.Md', 'Ketapang', '1981-05-21', 'Laki-laki', '', '$2y$10$p7s7F1k9GyHrbp13pXKkNOZYlL668iysOvwS94dSBdhKvZzI0zOHe', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('295e592a-3426-40a6-899c-8860e5929164', NULL, '19911010 201507 155', NULL, NULL, 'Lita Nurpuspita Sari', NULL, 'S.Sos.', 'Singkawang', '1991-10-10', 'Perempuan', 'Islam', '$2y$10$6eNysxyci1kUG3FPgpxvr.F80BjjssRIioiGs4tsEWGp7eZpivqUa', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('29cb26c6-4361-4341-971d-07be567f2a6f', NULL, '19820601 201602 198', NULL, NULL, 'Lusia Romana', NULL, 'S.IP', 'Pantan', '1982-06-01', 'Perempuan', '', '$2y$10$SkGvhjshrQvnspIM3xHjeuasbtFIhnx8LZ/rWeEdFYG7oY9S6kLsy', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('30ccea2e-48be-4213-ae9a-379abd41a42c', NULL, '19821217 201509 164', NULL, NULL, 'Beny Setiawan', NULL, 'S.TP.,M.P', 'Pontianak', '1982-12-17', 'Laki-laki', 'Islam', '$2y$10$aYnf7bplWPDaboHpZEegN.89qwcbGkx8CLJST9Vbq4lt6JCjBdUAu', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('30f2648e-3a3a-45a0-bdc2-e984af4abb7f', '19890705 202121 1 002', NULL, NULL, NULL, 'M. Iwan Toro', NULL, 'A.Md.', 'Pebihingan', '1989-07-05', 'Laki-laki', 'Islam', '$2y$10$JIjRha3rd1WwxWpeuGL6JeStAwqtL7MMe5FHYomqvlnF5WrrYm.2K', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('31236e8b-5191-4433-95a9-0390e1e13ac1', NULL, '19931213 201601 183', NULL, NULL, 'Yunita', NULL, 'A.Md', 'Ketapang', '1993-12-13', 'Perempuan', 'Islam', '$2y$10$Qf2kv8LOphXUaEbpwUuH..HRudUpf3CeBR62Q3I2lr5pa9FzVALNO', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('321326cb-17cd-4634-bdc8-619c26d4aea3', NULL, '19911112 201411 146', NULL, NULL, 'Winda Arlianty', NULL, 'S.Kom.', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$99.ktoY4U5xewRcVXJIv/eX6gQSEUWyAjyeoDshgSveGO6i8S3UzG', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('32d16bd7-58b5-487a-aab3-66cbb4801605', '19761218 202121 1 004', NULL, NULL, NULL, 'Abang Suryadi', NULL, 'A.Md', 'Putussibau', '1976-12-18', 'Laki-laki', 'Islam', '$2y$10$nlNg8HiUcHhgfsuj48AfgOQuvyJof/lsEm6pRj57qSFFS52xoEmJy', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('35a66251-da37-4d69-b652-7eee40512ca2', '19820521 202121 1 003', NULL, NULL, NULL, 'Refid Ruhibnur', NULL, 'S.ST., M.M.', 'Pontianak', '1982-05-21', 'Laki-laki', 'Islam', '$2y$10$1tflryTUZ5e2tb3CnAd6bOk9asq/UhLThl9VRohpPgCrj0afLhGOG', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('384a1c52-c826-4a58-9dac-effcab2e701a', NULL, '19901117 201604 205', NULL, NULL, 'Uci Novianti', NULL, 'S.Pd', 'Ketapang', '1990-11-17', 'Perempuan', '', '$2y$10$7sTpq/NFN.5gNRIaohGp.uPv0aiDcHps2dOgI/37FneNjmRbgxV3S', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('38e42c98-b490-4f03-a289-35939e035cfa', NULL, '19900123 201601 178', NULL, NULL, 'Irfan Cholid', NULL, 'S.P.,M.MA', 'Ketapang', '1990-01-23', 'Laki-laki', 'Islam', '$2y$10$X63bB3LjdeXAQbynZKjtiecLVriR64pKIzEGoAq8Zop4.kEzZR7Rm', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('3a1f1872-c67a-4bc7-9f92-0c852f44e1ec', NULL, NULL, NULL, NULL, 'Agus Sudrajat', NULL, '', 'Banyumas', '1979-06-08', 'Laki-laki', '', '$2y$10$rXVoPfk6Im4928EKfEAdu.yO4xW/.eY4N5XM54rexF7k24FbsvUgO', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('3ae1bb68-15ef-4eaa-a153-0d7dd87c6654', NULL, NULL, NULL, NULL, 'Rosnila', NULL, '', 'Sembelangaan', '1967-01-05', 'Perempuan', '', '$2y$10$GJnJZMrbkjnU3BW/QAz3tOsvMG8iJclQEWtjHfyw8LyUpt9fEbgQy', '2022-07-17 22:50:45', '2022-07-17 22:50:45'),
('3bb510ed-d9cc-4ae5-bf83-ecb726cbc832', '19640914 198601 1 003', NULL, NULL, NULL, 'Temy Akhyar', NULL, NULL, NULL, NULL, 'Laki-laki', 'Islam', '$2y$10$LeNrpoz9RxlAvednm0ulT.5s0owOE9hoTGRmtC3QAmwKrtGqfDBEy', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('3c7a9d69-339d-4ee3-9943-b9acec923fc5', NULL, '19871107 201507 156', NULL, NULL, 'Lukman Faisal', NULL, 'S.H.', 'Singkawang', '1987-11-07', 'Laki-laki', 'Islam', '$2y$10$jsfMLRthyifFILNr95VjneIFM0EDZdLRD5YjPSZnaaStmZVX.MInG', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('3eeb6e49-8f87-483b-b811-e7b91dc94a8d', NULL, '19911121 201701 214', NULL, NULL, 'Anugrah Bayu Saputra', NULL, 'A.Md', 'Pontianak', '1991-11-21', 'Laki-laki', 'Islam', '$2y$10$fdQINMHT5AfUDw0fDRKAIOSvxNzY6/fEJL27Ylg3R.ne2kcOxLrse', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('3f60bbb2-e5e2-4297-b003-62fe2ffebf43', NULL, '19980609 202104 252', '6104120906980003', 'junaidiju4109@gmail.com', 'Junaidi', NULL, 'A.Md.Kom', 'Ketapang', '1998-06-09', 'Laki-laki', 'Islam', '$2y$10$BXIqzlzmf/hoQHbMhtQYSu3yWJAWltXg0cABrpxyKjtJofcl8VDbu', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('42e5ae5d-611b-4c00-833e-ea735145b325', NULL, '19930216 201809 240', NULL, NULL, 'Ira Arianti', NULL, 'S.P.,M.P', 'Ketapang', '1993-02-16', 'Perempuan', '', '$2y$10$wqyvFFzCSy7WIotF/SKY9ekUfrYVuxzr9iyaQw5ICoQvj8Xw.UO52', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('436521dd-c443-4db6-89ae-9e237e349402', '19791002 202121 2 008', NULL, NULL, NULL, 'Erma Novita', NULL, 'A.Md', 'Ketapang', '1979-10-02', 'Perempuan', 'Islam', '$2y$10$fEKk6wZtoCY5ZMPtXpr1eO.Y.yn/FMWgs.9h/1m5CH141/u8r7qqm', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('43a2c3e2-6794-4fe3-a410-260d71bec47d', NULL, '19840207 201001 092', NULL, NULL, 'M. Hanif Faisal', NULL, 'M.T.', 'Pontianak', '1984-02-07', 'Laki-laki', '', '$2y$10$YfHjqgvwpPg.qz/i8KMDZ.YUMPONdaxL/EX1Qb2snQeMQSw5en0fm', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('4408ed64-f04d-48df-ba7f-9b082c9438fc', NULL, NULL, NULL, NULL, 'Ary Rubiyanto', NULL, '', 'Ketapang', '1989-02-18', 'Laki-laki', '', '$2y$10$NQhI.Yks9nGhfYxRjYK3guqOGxrAmRCsjIY57tN/u6CieV6zKFj.2', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('44c7b811-eae2-42cb-b1d6-243f09822b99', '19890816 201903 1 002', NULL, NULL, NULL, 'Ahmad Ravi', NULL, 'S.Pd.,M.Pd', 'Masamba', '1989-08-16', 'Laki-laki', 'Islam', '$2y$10$IetNQAQukYnHd2RoIarLxO5WoeeSl21Rhjd0smnCF3IOf9E.Y.uJa', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('458c592c-348c-46d1-b344-b792fb64d42c', NULL, '19980908 202008 241', '6104174809980004', NULL, 'Shela Krisdayanti', NULL, 'A.Md.P', NULL, '1998-09-08', 'Perempuan', 'Islam', '$2y$10$0AtWCNHLisx4WoNoJ0/Bcu4INh1K6BkWrKeKvpMUI.sxTGXd8vpHe', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('47ceee1a-b33b-4239-9a46-1e58b5a672ad', NULL, '19830627 201512 176', NULL, NULL, 'Wienda Soesanti Putri', NULL, 'SE', 'Surabaya', '1983-06-27', 'Perempuan', 'Islam', '$2y$10$b8JaPgw9bwnVcdismt5mmuR/BkpfNkMsI3N6OLiMZHugcNHqPsWQq', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('4839ee6d-2c3e-426a-9354-7db9e48ae439', '19880808 202121 1 001', NULL, NULL, NULL, 'Erwin', NULL, 'A.Md', 'Ketapang', '1988-08-08', 'Laki-laki', 'Islam', '$2y$10$anA2xJfslrxSNu.OrWgkQu0OESFy7hl6pMTF/XJvXWxFEAPmwG.qy', '2022-07-17 22:50:46', '2022-07-17 22:50:46'),
('488fb59f-f26b-48f9-96a9-fad9e800e4d1', '19891023 202121 1 001', NULL, NULL, NULL, 'A.Yani', NULL, 'SP', 'Ketapang', '1989-10-23', 'Laki-laki', 'Islam', '$2y$10$avpTFCccA31v8FbZ9Z9P6OBWKiqYSMUBLpfJ2aTDshFmM.X8i7GNq', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('4c3d0071-440e-4e4a-837f-59eea1cc348e', NULL, NULL, NULL, NULL, 'Sy. Adly', NULL, '', 'Ketapang', '1980-09-04', 'Laki-laki', '', '$2y$10$3XSEFmGuMXmXf4TGSKMSY.7p1EZTIInOUT/tK6dhmQFu.d3otGSAC', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('4d744851-78a2-40b9-ada0-0a17f50d990e', '19790626 202121 1 006', NULL, NULL, NULL, 'Sy. Ishak Alkadri', NULL, 'S.ST., M.T', 'Pontianak', '1979-06-26', 'Laki-laki', 'Islam', '$2y$10$uqriu9rWs9cI2tF/iDZBDOXelKo3z.IfjIzgog.GQzrTCT2ppxA1K', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('4e441045-7e87-46c6-8f0c-68298b2934ae', NULL, '19770627 201601 187', NULL, NULL, 'Masyhudi', NULL, 'SE', 'Jakarta', '1977-06-27', 'Laki-laki', 'Islam', '$2y$10$gk0RJW5Fo54WBaOHbcdvfeGA7HNboVkaCwg82KF1iYXUfp2qLEkX.', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('4eae5a1d-bc44-4301-afd8-833a1bd0f6cf', '19880919 201903 1 014', NULL, NULL, NULL, 'Herman', NULL, 'S.Si.,M.T', 'Singkawang', '1988-09-19', 'Laki-laki', 'Budha', '$2y$10$b53TPRbWANpJ9nXNAOG2/Otg8b/eqbhyhBPzkcv4kJecde.M2slm.', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('50660972-640c-49bd-b4f3-b988cfa241ec', '19910414 201903 1 008', NULL, NULL, NULL, 'Sy. Muhammad Zaki', NULL, 'SST', 'Ketapang', '1991-04-14', 'Laki-laki', 'Islam', '$2y$10$li0bpWHS7/rYdal6DnUx8./x2XkKxxNSJhJGMBSVHvEFa6A811KA2', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('5123ac8d-c8fb-436a-b417-28a153cf6c16', '19921021 201903 2 017', NULL, NULL, NULL, 'Diani Dwi Oktavianti', NULL, 'S.ST', 'Putussibau', '1992-10-21', 'Perempuan', 'Islam', '$2y$10$z.SbskQ1kthHrP3y4VtfSOgTG4kSwPgmr4y1/Tti5/yABblHrpxVW', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('51a80ae5-f512-4310-8243-2a4abe75a345', NULL, NULL, NULL, NULL, 'Sy. Abdurrahman', NULL, '', 'Pontianak', '1980-05-09', 'Laki-laki', '', '$2y$10$CJByweoPGlS.xZPEzFOP4ejO9AViqDo513fZQpteCnVP/./FqFMrC', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('53765b6c-4322-4c67-956a-12f6b811fdbc', NULL, '19910102 201406 134', NULL, NULL, 'Januarso', NULL, 'S.P.', 'Ketapang', '1991-01-02', 'Laki-laki', 'Islam', '$2y$10$pJy9DA5K1XK0DpT.6hl6COHVmBc9diEzO76r5KaVRCRIOl0fknvI6', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('54981c04-da78-4aa6-93db-6b30fb625794', NULL, NULL, NULL, NULL, 'Uti Nailul Auhar', NULL, '', 'Ketapang', '1983-06-16', 'Laki-laki', '', '$2y$10$PTDcy6mb2dIa8Q9Ab0rReuylnxpttKf.ks/2BP4R45FEGGBoUfJ1.', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('56391bb3-7220-4c57-97d8-c5e72987d775', NULL, NULL, NULL, NULL, 'Zulinda', NULL, '', 'Ketapang', '1979-09-28', 'Laki-laki', '', '$2y$10$kFgoy1wD3nwPSJgcIDvq8.LIcwR.8KUDNYpIRmTHgpQyhVWC2A9t2', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('56d27921-8de3-4a64-8db0-fa30ec6d9a85', '19820701 202121 2 009', NULL, NULL, NULL, 'Novia Dhian Yulita', NULL, 'A.Md', 'Ketapang', '1982-07-01', 'Perempuan', 'Islam', '$2y$10$ycqr4k7zaiu.LI7ZHDTpX.bVVKD9bbR8g3HiN.u36dD7ooGF8TuIy', '2022-07-17 22:50:47', '2022-07-17 22:50:47'),
('57e7dded-12ef-41c3-a728-71bee06f9526', NULL, '19941011 201803 239', NULL, NULL, 'Alan Purtanto', 'Ir.', 'M.T', 'Sintang', '1994-10-11', 'Laki-laki', 'Katholik', '$2y$10$skjxhxNHda3UHEBfWwI2B.3CCXZXattW1ObHSS/RHU6w30isgSPTK', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('58563118-abc4-4d1b-93a4-58e327972409', NULL, NULL, NULL, NULL, 'Desy Putri Syafrianti', NULL, 'S.Kom', 'Sekadau', '1991-12-02', 'Perempuan', 'Islam', '$2y$10$/bMfgLcHjqCmuxiD7A2hKOtWoqPJZVRoiSewl2imMqslNA4dZY2F6', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('589661c7-7bc4-4517-aeda-812297d91c0c', '19940812 201903 2 019', NULL, NULL, NULL, 'Fionna Araminta Fabiola', NULL, 'S.E', 'Ketapang', '1994-08-12', 'Perempuan', 'Islam', '$2y$10$4Xk8Tc3LYXZfy0IdtJJwI.4m8l7TpTp3Pps.sHTGeIN5lojTq9e/.', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('5997603c-54d6-4b59-bb77-0fda630ee588', NULL, '19910127 201509 166', NULL, NULL, 'Pusparini Akhmad', NULL, 'S.Si', 'Palembang', '1987-01-27', 'Perempuan', 'Islam', '$2y$10$.uv8whwP..9NTraGBUxM7uJEPqqE25oJ01miuOkbYGG1GTVNVUDdW', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('5cde66a2-643d-46ea-83b0-7b1de9399637', NULL, '19890404 201512 117', NULL, NULL, 'Irfan', NULL, 'A.Md', 'Teluk Melano', '1989-04-04', 'Laki-laki', '', '$2y$10$p9/5zu3cwK23Ke.SyS4S2.Qgl10nOaI.bGC3vvSwDOdwhxKxUjTmq', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('5e418a66-3916-43d2-aabb-6ff1908d25f4', '19741026 202121 2 003', NULL, NULL, NULL, 'Utin Ida Fitriana', NULL, 'SE', 'Ketapang', '1974-10-26', 'Perempuan', 'Islam', '$2y$10$PbVnxu6YZRSs7T6rL7.aYePGXyLtsqX3zjM08QjfM5rHSPZDvyVSO', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('5e636dc2-6006-420e-88ac-18b7521e50bb', NULL, '19961218 202008 250', '6104175812960003', NULL, 'AMANDA TIARA REZKI', NULL, 'SM', NULL, '1996-12-18', 'Perempuan', 'Islam', '$2y$10$VbPTbYc.jLCalI.m40a2H.tLcAydJA/AWAy2OeyZb52XRLNo7W.F.', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('5eb61db0-c4dc-4013-b48d-7aaafd73b9b6', NULL, NULL, NULL, NULL, 'Suherman', NULL, '', 'Ketapang', '1988-10-12', 'Laki-laki', '', '$2y$10$crb6e6F/kbkwfQif3Pu40e9BbXhwjHiypa.uYSGXbVKgIB.qu0X4S', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('5fb62dca-5b17-44ef-8849-257eaf4c8cc2', '19840105 202121 1 003', NULL, NULL, NULL, 'Epriyandi', NULL, 'S.T.,M.T', 'Ketapang', '1984-01-05', 'Laki-laki', 'Islam', '$2y$10$6W5PbVzJlW.E4RVwETLvXuPYTOc/DKf9Pquty.ktiXVW6FhaHA2NC', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('5ffd6435-601b-4276-8c73-53c7cecdd701', '19801126 202121 2 005', NULL, NULL, NULL, 'Novitawati', NULL, 'A.Md', 'Ketapang', '1980-11-26', 'Perempuan', 'Islam', '$2y$10$QSJwCz0mokm66oy4OT5kzu62beVh9Kpc15Yf6zcbI5TvPDPok9l76', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('6351842b-6db4-4549-94c6-587f7e8d3883', '19840425 202121 1 001', NULL, NULL, NULL, 'Khairul Muttaqin', NULL, 'S.Pd.I.,M.Ag.', 'Singkawang', '1984-04-25', 'Laki-laki', 'Islam', '$2y$10$/1IT9A95WId9DLqdfPwJDOGyUmIb2RAjQyUvpYkSBWshLmSSmLEGS', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('643a252e-3129-4f67-aba4-8ad6cbaca0c8', '19930818 201903 2 026', NULL, NULL, NULL, 'Firmanilah Kamil', NULL, ' S.Pd.,M.Pd', 'Malang', '1993-08-18', 'Perempuan', '', '$2y$10$0UtrbOC9e7x6Wu3JiH9w1OzP.sIU2t7uv8xZMmc4PQzbD9wM77Y52', '2022-07-17 22:50:48', '2022-07-17 22:50:48'),
('652d3790-71e1-449e-88fb-a380428c0135', '19900619 202121 1 001', NULL, NULL, NULL, 'Zulpandi', NULL, 'A.Md', 'Ketapang', '1990-06-19', 'Laki-laki', 'Islam', '$2y$10$nG6Pvpg63KoR56XYl1/J3uqmrpyY8XAWsruQfF0Javc2GHkiP082S', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('68117ca1-bd03-47f2-849f-08f9d7c0d593', NULL, '19870311 201601 179', NULL, NULL, 'Sopiana', NULL, 'S.P.,M.Si', 'Mentibar', '1987-03-11', 'Perempuan', 'Islam', '$2y$10$z0CjOqoBWt7D1ZgwVJGCTuyzKae8TL7kIYS9..PgXjxOdS3r1XLfq', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('6885f19d-bc29-4b2b-9062-c2fedf8efc79', NULL, '19820623 201509 169', NULL, NULL, 'Saifudin Usman', NULL, 'S.T., M.Tr.Kom', 'Pontianak', '1982-06-23', 'Laki-laki', 'Islam', '$2y$10$YRCD6AXYB0EcjQf9uRkul.85.Wg4gG3VDHKLPVNVoilkBfDno7QNG', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('6c395ad5-e91f-47f3-aa21-bc294c185ada', '19880830 201803 2 001', NULL, NULL, NULL, 'Venti Jatsiyah', NULL, 'S.P.,M.Si', 'Sambas', '1988-08-30', 'Perempuan', '', '$2y$10$FJ902d67rcDgJjGbWiZn6OLKnCm771AncfPc9CK97qChOoXB8WGOq', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('6d42c4a4-f4de-4a38-9b96-bc7f1ee1bea4', NULL, '19790731 201211 123', NULL, NULL, 'Henny Yulianti', NULL, 'A.Md.', 'Ketapang', '1979-07-31', 'Perempuan', 'Islam', '$2y$10$ax6mIrCsaRq35ttPg.YNn.GAT8MLgyr18.HqAGPnUOMnVfydcdwo.', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('6da9d71f-9c64-40cf-b6b7-2d0657767ca4', '19771006 199703 1 003', NULL, NULL, NULL, 'Untoro Budi Harjanto', NULL, NULL, 'Yogyakarta', '1977-10-06', 'Laki-laki', 'Islam', '$2y$10$aLDqvc711JKShmYsw8XkU.4vmunLydIwYIYngQMVSx2sH/NDqqy.K', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('6ed6b0f9-dc4b-4b84-90b6-099cfdd2e1c2', '19721212 202121 2 006', NULL, NULL, NULL, 'Utin Aimanul Habasiah', NULL, 'S.Sos', 'Ketapang', '1972-12-12', 'Perempuan', 'Islam', '$2y$10$Tv4YeLgnwfdwhO/IDPWqF.ik8LSFT1OR9AUSOj8Wdlj9XxD4alRq2', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('6f6de946-5158-424c-8bfe-aa4b8a9c4df6', '19811225 201503 1 001', NULL, NULL, NULL, 'M. Rangga CH', NULL, 'S.Kom', 'Ketapang', '1981-12-25', 'Laki-laki', 'Islam', '$2y$10$rq0tvi4of0WnNE4c1p5/G.cr8MIrDsBbf6Pttzx21ZI1No/MAIJrK', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('709b3b4e-969a-4c04-9e92-5e5654ea1172', '19861031 202121 1 001', NULL, NULL, NULL, 'M. Jimi Rizaldi', NULL, 'S.ST.,M.T', 'Ketapang', '1986-10-31', 'Laki-laki', 'Islam', '$2y$10$fLlu5xAiOyS9fFj.jNJpp.xjtT0QB9Ghb73T.g9qEyOIkzRR5L9.m', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('71b2657e-188b-4504-b605-6a488d35875a', NULL, '19871218 201512 173', NULL, NULL, 'Assrorudin', NULL, 'S.Pd.,M.Pd', 'Sidoarejo', '1987-12-18', 'Laki-laki', 'Islam', '$2y$10$BnNv5mQCcxNXgmBEJq/mj.A1T4UdSevLvmIPfu2VuCJTzqK9d6dsq', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('73d67075-744c-43c1-b3db-90e635121b08', NULL, NULL, NULL, NULL, 'Almiana', NULL, '', 'Ketapang', '1974-05-07', 'Perempuan', '', '$2y$10$UakJ6y/KPZ7yk.oSHw252eyNjaHN2HtwuzYyHUxcjQ53IiWnXyfCa', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('769cc3ea-a955-4af8-9d8b-1509351aded3', '19910704 201903 1 015', NULL, NULL, NULL, 'Darmanto', NULL, 'M.Kom', 'Ngawi', '1991-07-04', 'Laki-laki', 'Islam', '$2y$10$dAkmv1Zeh7ZhdfEtrutbV.m5cmxyEWDdDnRW8.CmnfMiTB8JWDa4S', '2022-07-17 22:50:49', '2022-07-17 22:50:49'),
('78b3c200-ec4f-427c-be1e-eb899e259673', '19810822 202121 1 002', NULL, NULL, NULL, 'Awang Roy Lesmana', NULL, 'A.Md', 'Pontianak', '1981-08-22', 'Laki-laki', '', '$2y$10$UAgaqy35E5qsC/3v9Aq.8uSsfg8pNt5JrXBDQWUsYNzvt1JT6u8xe', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('792d0bfd-2dc1-4f35-8a26-83a306dacfdc', '19900921 202203 1 005', '19900920 201603 201', NULL, NULL, 'Ivan Suwanda', NULL, 'M.T', 'Pontianak', '1990-09-20', 'Laki-laki', 'Islam', '$2y$10$8KCv1FyhIXj1GAKL2P4Pz.5MjQNrs6bL2ozPuenlSQww5WAwCz.Km', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('799b456b-0e87-49de-8367-d2e78e9e74ae', NULL, '19841114 200801 047', NULL, NULL, 'Ningrum Dwi Hastuti', NULL, 'S.TP.,M.P', 'Klaten', '1984-11-14', 'Perempuan', '', '$2y$10$t3rjbNzz2sfGyY0xuH4Rle.WMPCTHRK74y3Q68JC3l9Eu1Pod6qlW', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('79ae72a0-23be-4b20-ba79-703fb35a5eca', '19840504 201903 1 007', NULL, NULL, NULL, 'AKHDIYATUL', NULL, 'S.ST.,M.T', 'Ketapang', '1984-05-04', 'Laki-laki', 'Islam', '$2y$10$I1OlKuQb6I5OQPU0dJUL6eL399prlZpss.ayVwqDPtKo2onlWNOg.', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('7a8c08a9-467b-4afe-8abf-07f6c2431afb', NULL, '19860615 200810 025', NULL, NULL, 'Endi', NULL, 'SE', 'Mambuk', '1986-07-15', 'Laki-laki', 'Islam', '$2y$10$/I6/FyP5l.CTZMPWCRVspeGvGt2PjjsB2g1K6Ro7GQHdS/kx.vDWC', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('7acb40e6-5725-40ae-a4ec-02f6ed63bd94', '19830526 201504 1 001', NULL, NULL, NULL, 'Anto Susanto', NULL, 'SST, M.P', 'Bandung', '1983-05-26', 'Laki-laki', 'Islam', '$2y$10$CV55DCdzvoeDBwNcoKo9Ku4AYKPAV6DnQLrsCMUs9lIuTsy9XWSWi', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('7bd1033c-7dfe-4f83-9aad-e11c292b1d84', NULL, NULL, NULL, NULL, 'Satira', NULL, '', 'Ketapang', '1974-09-06', 'Perempuan', '', '$2y$10$6S8pn60upK9KAnn/aXMzBudgYn6PlNNkTYYRJyHb/RhkEHUoHqDQ2', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('7bea437a-8777-4c94-bf63-8e0ca9651691', '19640610 202121 1 004', NULL, NULL, NULL, 'Uti Sahibul Hekmi', NULL, 'A.Md', 'Ketapang', '1964-06-10', 'Laki-laki', 'Islam', '$2y$10$tf9rCYGEjVXHBYegvMH.B.R1.U12y53Jr/ouKz1UdPiKu4Zd1hyiG', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('7c7c26c8-47b9-48b3-8499-7ef04f7564ec', '19831001 202121 2 004', NULL, NULL, NULL, 'Nely Kurnila', NULL, 'S.Pd., M.Pd', 'Ketapang', '1983-10-01', 'Perempuan', 'Katholik', '$2y$10$.NXQBSD27dw80lA4MtpkR.g.Q502D9bWRGxDWLEC2KAOPjMsQfzgm', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('7e03dfc9-498e-4b16-8bce-d4823ce87ba8', NULL, '19860710 201204 118', NULL, NULL, 'Mustapa', NULL, ' A. Md', 'Ketapang', '1986-07-10', 'Laki-laki', '', '$2y$10$v4oUD4FnaydtFmKbRZ6Hdu5xtCwGsKZXMLy4grQuIZsCbeFSkKZ9m', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('8084ae53-5ac6-40a7-9f5f-dea40fa2aab5', '19870114 201903 1 007', NULL, NULL, NULL, 'Eka Wahyudi', NULL, 'S.Pd., M.Cs', 'Mekar Asri', '1987-01-14', 'Laki-laki', 'Islam', '$2y$10$h6xaJgIoA1KlW.pR/dgozuhLeNTW.jKiU0xwC9C3skeKdWeGdSEBG', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('86f15cfc-fcb7-47a6-ae81-5129f6ef4ddc', '19910310 202121 1 001', NULL, NULL, NULL, 'Sarijanto', NULL, 'A.Md', 'Ketapang', '1991-03-10', 'Laki-laki', '', '$2y$10$WETC68WC420EKdd0sRKIsOXrUzBZA72MaVTROIAWyg/gzuWTihwIq', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('87284e92-8239-44a0-86cd-2040f3406f47', '19870716 202121 1 001', NULL, NULL, NULL, 'Deden Nugraha', NULL, 'S.P', 'Sukaresmi', '1987-07-16', 'Laki-laki', 'Islam', '$2y$10$j60t1XFukmMTL2BNqGNkRuUVsGZQ8EsRUE/gpGGfg9Ek7Zwtd30qi', '2022-07-17 22:50:50', '2022-07-17 22:50:50'),
('8784ed8e-9d88-44a6-bb02-3f085de35b8c', NULL, '19890124 201512 172', NULL, NULL, 'Firman', NULL, 'S.Pd., M.P.Fis', 'Ketapang', '1989-01-24', 'Laki-laki', 'Islam', '$2y$10$/W1AIyahdeXqtRDueLF/4eIR/.MvYQAbQvwMadR.hT7RTmYWFW1wy', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('891f6a6b-8bd9-4ad4-bdd6-13c7b2d46782', NULL, '19950704 201708 222', NULL, NULL, 'Utin Kurnia Putri', NULL, 'A.Md', 'Semarang', '1995-07-04', 'Perempuan', 'Islam', '$2y$10$x1ToUkD6t/ZTrZ0oLeU3IOafMYu9t4CYJ5v//zivYpksHwpNXLuGi', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('89286b3a-69ef-47dc-8038-34175938abbc', NULL, '19880611 201601 196', NULL, NULL, 'Maya Andriana', NULL, 'SE', 'Teluk Melano', '1988-06-11', 'Perempuan', '', '$2y$10$4YMm1r7BiupYPRwJY/ECy.E5EIzP0gxGXu3bJQknn8H3VsXzr/gVC', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8961f1e3-2848-4d15-b6b9-d79fdaa8a107', NULL, NULL, NULL, NULL, 'Karmila', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$NEW.Y/Ss3CrJiDp//Ozf8.tPE/Cm10xarn/d5hh3NWuCr.N2dbob6', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8a2a0fc9-7adb-47bc-978f-a12b9db859aa', '19860414 201903 2 011', NULL, NULL, NULL, 'Rosmalinda', NULL, 'S.ST.,M.P', 'Karang Baru', '1986-04-14', 'Perempuan', 'Islam', '$2y$10$wQofqiYrziaa0CMn.5qaveEk.vxJw3wko/aMYCpOstsTxb/D72Cnm', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8a593376-eea9-4931-b0d7-86b72fd79b74', NULL, NULL, NULL, NULL, 'Henni', NULL, '', 'Ketapang', '1985-07-05', 'Perempuan', '', '$2y$10$fFYN1q8gYLx2NcG4euHcEu5Oh6nqPfIi5PUlSxCtwz4zvPBp38T82', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8a75b21c-c073-4a58-8bf6-de1a0f9b5438', '19860125 201803 1 001', NULL, NULL, NULL, 'Yusuf', NULL, 'S.ST., M.T', 'Ketapang', '1986-01-25', 'Laki-laki', 'Islam', '$2y$10$PHZcgnssqvymDq4IHp2N3u.E/M/s.WkG2hXCkzyoU2z3GPr.LGgSa', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8c2e117d-01ad-4da2-a049-5490e078db83', '19770906 202121 1 003', NULL, NULL, NULL, 'Edi Rahmanto', NULL, ' SE', 'Kelampai', '1977-09-06', 'Laki-laki', '', '$2y$10$2dkhto5JGZd/PYMlOPDynOsnMlBi/PcUrOPVN7S3mFG/.7B13yKtK', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8c6fdd85-dccf-4df8-888d-61910ca28761', '19891028 201903 2 011', NULL, NULL, NULL, 'Roida Oktovia Sihombing', NULL, 'SE', 'Pontianak', '1989-10-28', 'Perempuan', 'Kristen', '$2y$10$Ft/basefPidHtKNEsk9h0.Ic3jcM8BxuzYpde6hLMQqjTXsL9byqW', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8d1a9392-ee5b-4086-a103-c86dbf04d2c6', NULL, NULL, NULL, NULL, 'ADMIN EVENT', NULL, NULL, 'BUMI', '2021-01-01', 'Laki-laki', 'Islam', '$2y$10$NqKlfsD.gGqgyCEvJkTFE.1G7aXriP6vsdcFHQpdfDDf.fihi1UJS', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8da944a0-f7df-43a4-8bda-cc6c2b01cb5f', '19841207 201903 1 005', NULL, NULL, NULL, 'Munawar Kholil', NULL, 'S.Si.,M.Pd', 'Pamekasan', '1984-12-07', 'Laki-laki', 'Islam', '$2y$10$YJ07Xi9IsDaEz6HAY76k7OxxgFU1b.zohLJP/LZfhzHtRe4us5.f6', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8dbaf7b4-fdc6-4664-ad8f-28925262baaf', NULL, '19900126 201409 141', NULL, NULL, 'Syarifah Mastura', NULL, 'S.Pd.', 'Ketapang', '1990-01-26', 'Perempuan', 'Islam', '$2y$10$qp91ybbVFzGid3piJhYtv.mx9KRk3gQRBEzbmAkWbmwYg3JSpQYBG', '2022-07-17 22:50:51', '2022-07-17 22:50:51'),
('8e33ce55-5330-4cb2-836e-a22a0800b01c', '19890424 202121 1 002', NULL, NULL, NULL, 'Halimansyah', NULL, 'A.Md.', 'Kendawangan', '1989-04-24', 'Laki-laki', '', '$2y$10$Y6j6OW5A6T.cQior/9WyF.uGM7Hf9JZpW1LeOY/35iTwscXYlRLoK', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('8eea1d3b-f883-435d-a8a9-453e46053607', '19831217 201903 2 008', NULL, NULL, NULL, 'Alfath Desita Jumiar', NULL, 'S.P.,M.Si', 'Pontianak', '1983-12-17', 'Perempuan', 'Islam', '$2y$10$vybdK0K8k4KQO.9hXsxmj.5/fixhQsEOXwcZ2E5.NfO3bUkqwrMsS', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('8fdecaee-a3ef-4096-9165-26476c4e4753', '19710814 200604 1 005', NULL, NULL, NULL, 'Hidayat', NULL, NULL, 'Ketapang', '1971-08-14', 'Laki-laki', 'Islam', '$2y$10$8PtAFbvT05sbkcbwuai6x.sUXfjeKJkzRvIcJZ07/KS8aM3ZvBp0W', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('8ffd423c-6a57-454d-b643-d1f134117073', NULL, '19780510 200801 055', NULL, NULL, 'Asep Ruchiyat', NULL, 'S.T.,M.T', 'Bengkayang', '1978-05-10', 'Laki-laki', 'Islam', '$2y$10$TGN8wzrvmL/FpKBmf7tJvelKFK.OaOFC7zahEbkPsLIm6Rr8b/Lq6', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('908b7dcc-8b5f-4d2a-b745-3caacb11c1c9', '19900614 202121 2 001', NULL, NULL, NULL, 'Kurnia Dewi Permata Sari', NULL, ' A.Md', 'Ketapang', '1990-06-14', 'Perempuan', '', '$2y$10$9zQrRS8gGoka9ihs6ga/uO2flHL/ofmWbldavAYqRf1370mY5AfEK', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('92408291-4e21-41bc-ba91-b632dbc03201', '19630804 198601 1 005', NULL, NULL, NULL, 'Safi\'ie', NULL, 'SE', NULL, '1963-08-04', 'Laki-laki', 'Islam', '$2y$10$eiOa7S/y/RwGIwLLOEpi4ORroMdaUj9uQ1cx0VVhZoLD3zw1.8Y8S', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('966bb315-7f59-470d-aaae-c9a60336c823', NULL, NULL, '3318091606890003', NULL, 'Rois Indriawan', NULL, NULL, 'Pati', '1989-06-16', 'Laki-laki', 'Islam', '$2y$10$em1Yy/2J.8yxGjyyoeLRE.uSH/wgJo/DCKJDevF6r7l6kurMC8nyy', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('966bb413-e9b5-46d7-9d60-6361134df0ea', NULL, NULL, '6172016207870003', NULL, 'Dewi Nurmayasari', NULL, NULL, NULL, NULL, 'Perempuan', '', '$2y$10$PvuvO9NQeAjchIiPksA/RugkXOgvVKBlJRU1XhX46BVm52c9j93hO', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('968a0145-7799-46f2-b501-e4a26899ac9a', NULL, '19881026 201707 221', NULL, NULL, 'Redika Maulidya', NULL, 'ST', 'Ketapang', '1988-10-26', 'Perempuan', '', '$2y$10$x0o40/x4Q20feDJUE8Uxf.lRCJnPKp/f0Zj6F10D./RUspbqnXo1K', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('97693558-91bc-4335-b3cb-0311f337a795', '19631008 199603 1 003', NULL, NULL, NULL, 'Suratmin', 'Ir.', 'M.T', 'Ketapang', '1963-10-08', 'Laki-laki', 'Islam', '$2y$10$FOprKepYRSF11KXkOrbb9.o.K1iubMFX9feX8exCjXs275cHnZpcG', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('98ae6c59-c188-498e-83e4-e511251529b7', NULL, '19840310 200801 017', NULL, NULL, 'Rustiarni', NULL, 'M.H', 'Ketapang', '1984-03-10', 'Perempuan', 'Islam', '$2y$10$Z7pcgOb4aV4qg0LtodhfoelL0xkrX94PF/ImMB314i4qpV4sWPlD6', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('98baf7ed-28bf-4a5d-8f4b-c0e789081d91', NULL, NULL, NULL, NULL, 'Muhammad Sa\'ari', NULL, '', 'Ketapang', '1963-06-23', 'Laki-laki', '', '$2y$10$5GsNRvxWQRjejey1yGSARuNC0rwyBVNCWE/3ljS8aboD9ujwkbboO', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('98db1f9b-7be6-446f-a5ab-46208a47867b', '19861109 201903 1 005', NULL, NULL, NULL, 'Rosi Arrasyid', NULL, 'A.Md', 'Sentebang', '1986-11-09', 'Laki-laki', 'Islam', '$2y$10$cRZxZCOvI1vMRoPU2GL5cuJR1HnV8selsTo/KYPHmMx8DzobIxq/W', '2022-07-17 22:50:52', '2022-07-17 22:50:52'),
('99bba172-f59c-4bf4-a7df-31b6d3b00050', '19860923 201903 1 005', NULL, NULL, NULL, 'Yudi Chandra', NULL, 'S.ST., M.T', 'Ketapang', '1986-09-23', 'Laki-laki', 'Islam', '$2y$10$Li8mtqmCGHovNudIVht1uu2TiVwBRjs//0TOueBz25t0U8efawhWi', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('9a8e0752-f115-4c47-a7bc-49f8c1a862b4', '19880901 201903 1 010', NULL, NULL, NULL, 'Sy. Indra Septiansyah', NULL, 'S.Si.,M.T', 'Pontianak', '1988-09-01', 'Laki-laki', 'Islam', '$2y$10$7fZTyK883Ulb/OoEF6gsBuRaO.iRZrPtnkQ/cOfjBIWEGB/YpH3D2', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('9b26a021-e661-4f49-ab22-6f49afe9cd9b', NULL, '19790910 200801 058', NULL, NULL, 'Hairian Rahmadi', NULL, 'S.T.,M.T', 'Sungai Jaga B', '1979-09-10', 'Laki-laki', 'Islam', '$2y$10$.L38U7AwsZ7McCkVUR1PvuguacJ.fmWkm4gRqE3cMc.yMMhW/HzJu', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('9b7afb74-0772-48e9-acee-2720557d1384', NULL, NULL, NULL, NULL, 'Ahmad Riduan', NULL, '', 'Ketapang', '1996-02-24', 'Laki-laki', '', '$2y$10$yzs1ps1N909/FzZeCUIZMuGTKyJ1qayMt/hgBa6Ppc5JdwvXy8n7S', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('9cc7f277-d556-4fae-8d75-68e64bcfcad4', NULL, '19820404 201611 213', NULL, NULL, 'Nurhayati', NULL, 'S.P.,M.Si', 'Pedada', '1982-04-04', 'Perempuan', 'Islam', '$2y$10$rEmspqJlzSSVnJu/rLNyhuv1HOzwQB7I/xSmBiDGu/6sAz5gqIUBy', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('9ebea3d2-60b0-4817-9e36-661f71d69e73', NULL, '19950203 202107 259', '6104174302950003', NULL, 'Heni Rahmadianingsih', NULL, 'M.Pd', NULL, NULL, 'Perempuan', '', '$2y$10$D/NIUJ.P/rGna34yIQO/suw6BE4GY9DjO6dfN5oa73FU0GwHdLuNi', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('9faa86a0-147d-4657-9592-160f9bb9d06f', '19850805 202121 2 009', NULL, NULL, NULL, 'Nur Aida', NULL, 'S.Pd.,M. Pd', 'Ketapang', '1985-08-05', 'Perempuan', 'Islam', '$2y$10$vQUY15YpPN/M774OHIvp7eLve680/HcEQ4ssGHLgVl/aNmCYNI586', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('a12f6e04-c76b-44d0-ad59-7427ac275be8', '19931228 201903 1 012', NULL, NULL, NULL, 'Rahmat Aryanto', NULL, 'A.Md', 'Ketapang', '1993-12-28', 'Laki-laki', 'Islam', '$2y$10$83BXKv.nHCClBu5dAAqFge./bWoQebj/YG5nVUJLvcnW3G3y3isda', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('a15ebfc3-4700-4231-b982-f6fd6f150f1f', NULL, NULL, NULL, NULL, 'Evi Mellianti', NULL, 'SST', 'Ketapang', '1993-06-02', 'Perempuan', 'Islam', '$2y$10$BZ7uloBEHEM34.0d4p8h1.ZK6btQSzfqdevXdTkJwGNx8KD3TBaB6', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('a1c5ae62-36d7-4d2e-b207-999afa6a6103', NULL, '19740401 201311 132', NULL, NULL, 'Ahmadin', NULL, 'S.Sos.', 'Pontianak', '1974-04-01', 'Laki-laki', '', '$2y$10$iry3iLtsdfONV6mN0SdNxuvm0OEDV3L0/5bKj3XMK8VLmtKNyvKXC', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('a1f6271f-46a8-4f4d-ad97-b11ed9ecca1b', NULL, '19860505 201602 203', NULL, NULL, 'Ade Herlinda', NULL, 'S.Pd', 'Ketapang', '1986-05-05', 'Perempuan', 'Islam', '$2y$10$buwy5IjAZrlBMy4qghoOfOPvyZT9Ce8n20nw6FNTgd7.Z4BsZoBZq', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('a3cf6b37-c6e0-411e-ab87-9333e5f9e84a', '19800518 202121 1 007', NULL, NULL, NULL, 'Fathurrahmi', NULL, 'SE.,MM.', 'Ketapang', '1980-05-18', 'Laki-laki', 'Islam', '$2y$10$UBYG5LXvkl0.11SNyvhnhu/i2995LFusHjKZenjaEwatG4zhDn/Iy', '2022-07-17 22:50:53', '2022-07-17 22:50:53'),
('a64ec6c9-f25d-40c9-acf2-f8054184f6c5', '19820520 202121 1 005', NULL, NULL, NULL, 'Ardiansyah Putra', NULL, 'A.Md.', 'Pontianak', '1982-05-20', 'Laki-laki', 'Islam', '$2y$10$Jthj7uriD.fthV7HXOhPwuR2L2H2ZxG9YvfoX4EtlK4bSinOcLSDG', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('a7ab3156-4a6a-4d34-b4fd-ecdee3e951de', '19840926 201903 1 008', NULL, NULL, NULL, 'Irianto SP', NULL, 'S.ST.,M.MA', 'Pontianak', '1984-09-26', 'Laki-laki', 'Islam', '$2y$10$pBSCmkHr2ee9PNQhLf9DuOWoJWuy4panQOBaEKjIn2fijS/DxBYve', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('a8025fce-d1b8-4acf-80c2-ace804464787', NULL, NULL, NULL, NULL, 'Andri Gunawan', NULL, '', 'Ketapang', '1988-01-01', 'Laki-laki', '', '$2y$10$Cu7QBoTvd.jS1RWF5hENu.jzawPwTcVNnMRjMeH6Q3m7PNRVen6SK', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('ac0df63f-204d-400a-83bd-66b7fc7d1d8d', '19770503 202121 1 004', NULL, NULL, NULL, 'Yudi Adlia', NULL, 'SE', 'Ketapang', '1977-05-03', 'Laki-laki', 'Islam', '$2y$10$wI5mQ83ReMrzZYYI7u5cue3q.fFGMFpd2Q61BYK92kdZwXiIBotUe', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('aeb5d395-09f4-42b1-8680-75663045684e', NULL, NULL, NULL, NULL, 'Supardi', NULL, '', 'Ketapang', '1979-01-17', 'Laki-laki', '', '$2y$10$Y15lQaSDJTLqT15dyOze/eJVn1GwM7SFKSJINPUgQl0EsFJ78wGsa', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('af76d150-7435-4f3a-bf5f-3fb3d991c626', '19920106 201903 2 015', NULL, NULL, NULL, 'Betti Ses Eka Polonia', NULL, 'S.Pd.,M.Pd', 'Lamongan', '1992-01-06', 'Perempuan', 'Islam', '$2y$10$3X/mIC3lXJ1vnsOHSfmt9OCxTiGOuIJqT4cquxwaJic1JGLo.ISQW', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('b14b7e81-2fc3-45e5-adc1-750cc73f0fb2', NULL, '19740510 200801 041', NULL, NULL, 'Isye Selvianti', NULL, 'SH.,M.AP', 'Solo', '1974-05-10', 'Perempuan', 'Islam', '$2y$10$p5ezHn66iSyEOMhUWvKTQO4nZR/ceekfbPwy52g.UxYQDkjlwcWW6', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('b2035d20-b83c-479d-a032-ecdef5bf9eb0', '19780324 202121 1 005', NULL, NULL, NULL, 'Rodiansyah', NULL, 'A.Md', 'Ketapang', '1978-03-24', 'Laki-laki', 'Islam', '$2y$10$p11UT4iPH0SbVvTKwVPTieCaJy.UNgqI8jKE5IwfNccrBYvm01Wei', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('b2c740a8-348b-4e2e-9713-38c9712fe1d8', '19910617 201903 2 022', NULL, NULL, NULL, 'Saima Putrini R Harahap', NULL, 'S.Pd.,M.Pd', 'Padang Sidimpuan', '1991-06-17', 'Perempuan', 'Islam', '$2y$10$ViC5Avg/osw8bxmfToIgNeplk6lrxwFKUVDC1m6ocsD85G24AMK2a', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('b2f3b1cc-0b55-4c9d-9e5b-0e6c7fac9c8b', '19750619 202121 2 006', NULL, NULL, NULL, 'Rohyati', NULL, 'A.Md', 'Trenggalek', '1975-06-19', 'Perempuan', '', '$2y$10$L1ZU4f7uvafkAvUJAR6HfuEPV.pw.bdkk1RqHFaSHzQ2W3Sgc1itq', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('b3b814f5-e354-47b3-a000-156679809080', '19901105 201903 1 007', NULL, NULL, NULL, 'A. Nova Zulfahmi', NULL, 'S.Pi.,M.Sc', 'Kediri', '1990-11-05', 'Laki-laki', 'Islam', '$2y$10$0jLkK2OprabALPn9dRwakuqhF71Yaul879vtQmqROYx3oGQArcNwm', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('B40tfOOMrM41klXFuQT7gh1fnY6bfSNf7uYT', '12345678900987654321', '12345', '67890', 'admin@localhost.com', 'af', 'an', 'gi', 'ket', '2022-07-03', 'perempuan', 'islam', '$2y$10$JHrzwuvSIMBImSXvnBdOieZW4pf26RFx/dH6/2TDnCOeN0v7T5pcm', '2022-07-21 23:50:20', '2022-07-21 23:50:20'),
('b5f4d025-952e-4260-a45b-ab50e561a491', NULL, '19890730 201601 189', NULL, NULL, 'Nurhanudin', NULL, 'A.Md', 'Ketapang', '1989-07-30', 'Laki-laki', 'Islam', '$2y$10$S1wsmk..XYyKAbziAs/46OwX/L2HeOJV7mYQlUa1QtSKvnQL.NwyG', '2022-07-17 22:50:54', '2022-07-17 22:50:54'),
('b6308b4f-7569-47c1-980f-f266d255b293', '19780926 202121 1 003', NULL, NULL, NULL, 'Martanto', NULL, 'ST., MT', 'Sleman', '1978-09-26', 'Laki-laki', 'Islam', '$2y$10$vncBx3hSkHk0Vyrj9cmU6O9or4if2Cm1mHngAg0BgfwZHSrTxxF4W', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('b674c34c-18d8-4f2e-b78d-ba263ecb6f03', NULL, '19890711 201601 188', NULL, NULL, 'Nanang Hartoni', NULL, 'A.Md', 'Ketapang', '1989-07-11', 'Laki-laki', 'Islam', '$2y$10$Kurop.4qGAPC2fV/HQWnTObd15mqTlzbGEYmLWEvR69McpdLJsTkO', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('b67e1667-7681-4ba7-8eb7-49df4cae2eed', '19890316 202121 1 001', NULL, NULL, NULL, 'Faisal', NULL, 'A.Md.', 'Ketapang', '1989-03-16', 'Laki-laki', 'Islam', '$2y$10$Iesg1vDOkruh3jT.6ZGNZe5IWl6DPUKqKpADo2ff.0lB5N2TuNMme', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('b7369622-3dd7-487f-8add-b67d8512a6c3', NULL, '19911112 201601 184', NULL, NULL, 'Eva Prawinda', NULL, 'S.Pd', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$kt7lGcMJxVxStQhkHfHRyO3pSjR.sTBLZy71siVjTCd7eD9T/Khra', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('b77f8f84-beb9-4d27-8a5f-475ac4fd520b', '19900228 202121 2 001', NULL, NULL, NULL, 'Nisa Zahara', NULL, 'A.Md', 'Ketapang', '1990-02-28', 'Perempuan', 'Islam', '$2y$10$36HAVwTAhc/C0zuF31Ynfu0IoBwGt07jp0vqKOS7Mryl1b5A3jzk6', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('b83e233a-d9b4-459d-93de-d33523c566b0', NULL, '19890424 201509 165', NULL, NULL, 'Indra Pratiwi', NULL, 'M.Pd', 'Ketapang', '1989-04-24', 'Perempuan', 'Islam', '$2y$10$RYegzMyYaWwWBRQw.bOHOeoSTNGWwZqfFiXoLauKFD8M3.3cJIgii', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('b95679cb-9866-4c31-8c5b-960b8ecec93c', NULL, NULL, NULL, NULL, 'Reino Muhammad', NULL, 'ST., M.Cs', 'Indonesia', '1945-08-18', 'Perempuan', '', '$2y$10$vYK/ogVuRO0qK9sJpHoYve/ATTc54qbw/p.mEJm170QiF9Kq.rpo2', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('bc1f265d-00ef-485c-867a-a32b2899a4e8', NULL, '19951222 202104 253', '6104182212950004', NULL, 'Teguh Eko Saputra', NULL, 'A.Md.Kom', 'Mayak', '1995-12-22', 'Laki-laki', 'Islam', '$2y$10$WrueW/.WlxbansxfSwuWc.5YVzBjkvFFfwk/AtMJFm8LM7S2iT3pK', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('c0a53e24-a714-47cc-8651-1f413b8b72fe', NULL, '19881113 201601 182', NULL, NULL, 'Noprizan Azmi', NULL, 'ST', 'Simpang Empat', '1988-11-13', 'Laki-laki', 'Islam', '$2y$10$TAjI9hi0Z1KC/YEyAKBKUORrGA2ECWJndqtJKy89FdeeKBLwb1o4q', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('c37724c8-36bf-4bbf-82ad-bac50ce9078a', NULL, '19940929 201601 193', NULL, NULL, 'Lia Kurnia', NULL, 'SP', 'Ketapang', '1994-09-29', 'Perempuan', 'Islam', '$2y$10$6lo06AohnYhsCtmwOdlrFuK1lhyZFH0wEb5JV.Ou0ekNCbZG3WGny', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('c5bc3f89-addd-4737-bd78-ac8b414679da', '19750808 202121 1 005', NULL, NULL, NULL, 'Sahardi', NULL, 'SE', 'Ketapang', '1975-08-08', 'Laki-laki', '', '$2y$10$V9jN8PvyvbDteBqnjHVzGe5YYkpLWKnt7cLVAgZ3be5HnMsyM/iny', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('cc37bab9-4d25-4dff-9ac9-3552e5921705', NULL, '19890424 201507 158', NULL, NULL, 'Aprianda Ibrahim', NULL, 'S.Kom', NULL, '1989-04-24', 'Laki-laki', 'Islam', '$2y$10$s5z21LsLFBX6o.SmY6eFueP.Awu.Uwb0wr54gHO1t/jNu.GlPS/bi', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('cda69cea-4502-4db3-9954-70f92c28f2f1', NULL, '19860410 201502 153', NULL, NULL, 'Arman', NULL, 'A.Md.', 'Ketapang', '1986-04-10', 'Laki-laki', 'Islam', '$2y$10$KTlCnJLcg19CnZupOc34GOkDVILHDR.G/rsKbbx5NlVf4pWPO4Mhi', '2022-07-17 22:50:55', '2022-07-17 22:50:55'),
('cda9609b-0bed-49c5-96cc-e46831985dc7', NULL, '19950219 201708 220', NULL, NULL, 'Rahmadi', NULL, 'A.Md', 'Ketapang', '1995-02-19', 'Laki-laki', 'Islam', '$2y$10$GJ2DSnN8DwHqEOmaPLfjgO/uWKRct76h17IDkQ3.EF4ksZvd.VUKi', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('cdb42c37-d361-44aa-9d90-85dc5c02cc4c', NULL, '19891220 201404 133', NULL, NULL, 'Emy Arahman', NULL, 'S.Pd., M.Pd', 'Pontianak', '1989-12-20', 'Perempuan', 'Islam', '$2y$10$8P7JHsxq0fUUF5xU0y0Ake6XtGZoUuyuIUou5Hn4Yee6ZfFTMx3s6', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('d039bc2d-7c92-4349-ae77-e67fd4dcea7f', '19830501 202121 1 002', NULL, NULL, NULL, 'Muhammad Rizal', NULL, 'A.Md', 'Ketapang', '1983-05-01', 'Laki-laki', 'Islam', '$2y$10$9ruqJitVvX8/yR62Fz5neO2SULnALjKFJVfALUx0vDn0ilQgexUzS', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('d04a0a35-e772-4766-abc3-d90346ecc0a9', NULL, NULL, NULL, NULL, 'Zulkarnaen', NULL, '', 'Ketapang', '1988-09-24', 'Laki-laki', '', '$2y$10$c231lDAdLnXqLIAOY5rkcui9H2FbKfiui6zgew8HNhwS9RlMRDGT.', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('d2bc54ef-e3ec-46ae-adcf-8f856bbd35fc', '19901230 202121 1 001', NULL, NULL, NULL, 'Nasriadi', NULL, 'A.Md.', 'Watampone', '1990-12-30', 'Laki-laki', 'Islam', '$2y$10$oohfUfZrdoWEIw0RpXxy/.bdvYlQkFjbj86f73Vmpm/zJHQ/DWQsW', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('d307a54a-f25e-4a3b-95e5-75c0a78fe2e2', NULL, '19890807 201302 128', NULL, NULL, 'Diah Chairunisa', NULL, 'SE.', 'Ketapang', '1989-08-07', 'Perempuan', 'Islam', '$2y$10$VwQhUTWmFj5j/zXW9mbunupL2JFS4AEHL7IWwOSwsAu5UwU.dqjHq', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('d399b985-7411-4a15-8eed-fbdb43b44dbc', '19891109 201803 2 001', NULL, NULL, NULL, 'Rizqia Lestika Atimi', NULL, 'S.T., M.T', 'Pontianak', '1989-11-09', 'Perempuan', 'Islam', '$2y$10$lXPkYL5vpvAqz5rw1/juyevmXE5ONTthvBybr4yaujaTFB/hzN0im', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('d4845c8d-dcda-421c-99ec-545bf9527ca1', NULL, '19940130 201601 185', NULL, NULL, 'Utin Asiyatin Nur', NULL, 'SE', 'Ketapang', '1994-01-30', 'Perempuan', 'Islam', '$2y$10$/bogWAm/uvcvZWJMhRiwneOpuSwTN/KCFD6SEHnQvoxkqB.vZ9h32', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('d5090102-10f3-42ae-903d-0e583097ed02', NULL, '19911222 201409 144', NULL, NULL, 'Ningli Diniyati', NULL, 'S, ST', 'Teluk Melano', '1991-12-22', 'Perempuan', 'Islam', '$2y$10$RGFe6XVTqJ9465iwAAf04eqCc3HKXvSFSA4RxlvRmtwYo7algWqpy', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('d8987bf5-6238-4cc0-9be7-305f922cc657', NULL, NULL, NULL, NULL, 'Ernawati', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$kQ64EXyf1Ivv0qhzM65ls.iEtjU7idk7VPZmpK0RMn1QdU7aTHyXS', '2022-07-17 22:50:56', '2022-07-17 22:50:56');
INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `created_at`, `updated_at`) VALUES
('da2352ee-66c7-41f4-b95a-ebfbc4f231ad', '19821107 202121 2 007', NULL, NULL, NULL, 'Dian Fitriarni', NULL, 'S.ST.,M.Sc', 'Ketapang', '1982-11-07', 'Perempuan', 'Islam', '$2y$10$MOxRg7GwQusv.3hBivbYkumfgfADT6ZgVrGq3D5GEYLFQKYaLeQdW', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('da94c955-4436-4ea5-bb45-b8fce9a4b154', NULL, '19910219 201507 154', NULL, NULL, 'Kharisma', NULL, 'S.Kom. M.Kom', 'Ketapang', '1991-02-19', 'Laki-laki', '', '$2y$10$/2jyqjl6hVQQ480WI6PcEuMR91RH1Toi1nTTNo4qJR3Vk/Q1Csk16', '2022-07-17 22:50:56', '2022-07-17 22:50:56'),
('db6d49db-22b0-409f-8450-1beb34250905', '19901111 201903 2 018', NULL, NULL, NULL, 'Novi Indah Pradasari', NULL, 'S.Kom., M.Kom', 'Ketapang', '1990-11-11', 'Perempuan', 'Islam', '$2y$10$aveoIkDtncPxO8dza2Caoue15qne.cQE3N2sEFJZJSX4jf04L6QzO', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('dc497585-9080-4954-8417-89be283b4665', '19881104 201903 1 004', NULL, NULL, NULL, 'Idris Herkan Afandi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-11-04', 'Laki-laki', 'Islam', '$2y$10$isYAx3SNn7nvgTmk7pEpI.LW0GmtC4orNkRNlXGX0WSgV1tvtLtse', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('de4b9779-eb40-42bf-8bfd-6bb1125c1703', NULL, '19840327 201110 103', NULL, NULL, 'Muhammad Taufik', NULL, ' S.T', 'Mempawah', '1984-03-27', 'Laki-laki', '', '$2y$10$jTID/Uh5SrQAhd5/dNYqAOqwoSrrjSows6/NLBokQBvYxFTrx2CfK', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('de9a5fdb-117c-45fe-8b46-ae4ce536270f', NULL, 'NIP.1985 070720 080', NULL, NULL, 'Julyan Purnomo', NULL, 'S.ST., M.T.', 'Ketapang', '1985-07-07', 'Laki-laki', '', '$2y$10$frh57s6ja2mcLKPU6kUmoeTThttcTeogSlDxn1ec0ESezSjau/4Xi', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('dee9fbb6-7eda-4464-8d26-1a41838a13d5', NULL, '19940702 201709 223', NULL, NULL, 'Agung Iswandi', NULL, 'ST', 'Ketapang', '1994-07-02', 'Laki-laki', 'Islam', '$2y$10$.yaDb0rR5577gKrbq14gJOtZRJwlXkr2Y3CtHvxDExZWv8h1Qa.Q6', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('e22b1a40-7094-48a7-8a1b-a7407d679e4c', '19771010 200811 1 024', NULL, NULL, NULL, 'Harsusani', NULL, 'S.T., M.T', NULL, '1970-01-01', 'Perempuan', '', '$2y$10$XiRO.kjMgqt/2oLNe9lIGegTZa8QHfoWPn0WI2uhtXMp1cJBXw9te', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('e32d5a13-49c3-481a-9485-2ad0789512cc', '19880513 202121 1 001', NULL, NULL, NULL, 'Citro Handoyo', NULL, 'S.T', 'Pontianak', '1988-05-13', 'Laki-laki', 'Islam', '$2y$10$qeZbMojlCNma7KBZ1da0eu7jWQSD/KBEUDFboTlVhtjRyJmPCduA2', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('e3825cea-49cf-4e22-8b9e-6927099e859f', NULL, NULL, NULL, NULL, 'Syarif Niswah', NULL, '', 'Ketapang', '1975-05-05', 'Laki-laki', '', '$2y$10$dGFTW43L.TH7kLoEcUFMxOWwc/jwyNlkNIsSPHtd1wxkXiQXfM2km', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('e6ba9e74-e855-4438-b2de-32099b533aa2', NULL, '19880402 201601 191', NULL, NULL, 'Mulyo Hadi Santoso', NULL, ' A.Md', 'Jelai Hulu', '1988-04-02', 'Laki-laki', '', '$2y$10$wk1YJbc0koR7YWN7b3voIuAwE8AdeVGU0KRxvYVqlq5Hm7ErU/3Ey', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('e70044c4-9afe-4ba9-88dc-67ece46c36f8', NULL, NULL, NULL, NULL, 'Nurmalawati', NULL, '', 'Ketapang', '1973-04-13', 'Perempuan', '', '$2y$10$EkB0WhUAQu0P5T.ZevXplOFYeuSJ7I86QQwqBagXEkCw1Lu4aYKEC', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('e8e2dbb1-c651-4a0a-8dea-0926135e428b', '19900121 201803 2 001', NULL, NULL, NULL, 'Sartika', NULL, 'S.Si.,M.T', 'Pontianak', '1990-01-21', 'Perempuan', 'Islam', '$2y$10$4yeFPYVVRwi4UTsmRFkQZelyjmMFi36WKuxDnRIiwKU3zNkqOvFGa', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('e8fd3915-260d-4079-8962-6608c6550e77', '19901203 202121 1 001', NULL, NULL, NULL, 'Wahyu Iswanto', NULL, 'A.Md', 'Ketapang', '1990-12-03', 'Laki-laki', 'Islam', '$2y$10$hUYXluDdPUg1Yr1L459Xi.EYxmEoUpBCOTu4n9Sln1/yEVqSaDoj2', '2022-07-17 22:50:57', '2022-07-17 22:50:57'),
('e9b3eaac-e378-4e61-a660-c06a4f47490a', '19820310 202121 2 011', NULL, NULL, NULL, 'Nenengsih Verawati', NULL, 'S.TP.,M.P', 'Bima', '1982-03-10', 'Perempuan', 'Islam', '$2y$10$38iv6vzzgxRNOPKUkXPB8ebkbfK4xM8F4M3VsweW27yg1o.V4dvjy', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('eb09439a-7370-4b1e-b765-252298ab31a8', NULL, NULL, NULL, NULL, 'M. Hidayat', NULL, '', 'Ketapang', '1978-10-26', 'Laki-laki', '', '$2y$10$yEz/OW0zcYieiw0aMo1Lcus/HPxxkkqa2lOJY5FcuQmi/CVJYRcfW', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('ed7828d3-b34d-4d25-8378-7e3b75a08f66', NULL, '19850220 201601 192', NULL, NULL, 'Abdul Hafid', NULL, 'S.T', 'Nanga Tayap', '1985-02-20', 'Laki-laki', 'Islam', '$2y$10$.N4CDVOJBKYslMnQHy.h/OMBInI2tc9wV4vP90EAGkNYNo3iLZGR6', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('ef103381-4e22-4d34-a141-83dfeb98340f', '19741101 202121 2 005', NULL, NULL, NULL, 'Sri Handayani', NULL, 'A.Md', 'Ketapang', '1974-11-01', 'Perempuan', 'Islam', '$2y$10$G2XIuZAtdH19C44dZzGXzuXqsJj6g7TfbXp3jm1rCK86wD5mObyUu', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('f34be033-0f08-4655-b2ba-b68f4139017f', '19770505 202121 1 007', NULL, NULL, NULL, 'Ismael Marjuki', NULL, 'S.T.,M.T', 'Ampalu Tinggi', '1977-05-05', 'Laki-laki', 'Islam', '$2y$10$nFyZ/BRi1Ih.QohB0hgYI.9lpkQRzhwEz3sEkl9RRaX1q14hT6Ip2', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('f585f46a-98ed-4663-9f26-28891e3127cc', NULL, '19900611 201604 204', NULL, NULL, 'Ari Budiansyah', NULL, 'SE', 'Ketapang', '1990-06-11', 'Laki-laki', 'Islam', '$2y$10$LB2d8b4oZWqdNAeHSvaY7ueZjxvfEe.ZuKW7roP5/ElI0qnQnaAjS', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('f59fa54b-a4e7-4bc2-90c3-6ec9f03a928b', '19681030 200112 1 002', NULL, NULL, NULL, 'Endang Kusmana', NULL, 'S.E.,M.M.,Ak,CA', 'Ciamis', '1968-10-30', 'Laki-laki', 'Islam', '$2y$10$SDAYOAq4PLJcpO840uMIMeqVGCDfSquRjHE0U6lwLzqr0IuSw/GTm', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('f7c75340-cf0b-4402-963f-e8aca8e5936b', NULL, '19920917 202104 251', '6104171709920003', NULL, 'M. Alpiani', NULL, 'S.T', NULL, NULL, 'Laki-laki', '', '$2y$10$Dqox32o9EpPq6MMVwrdto.fWTPj8YwEyhr4gYw0BrivsiT.FNhZii', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('f851e7bd-cc56-49dc-ab9b-97944d6041cd', NULL, '19810817 200801 042', NULL, NULL, 'Syf. Umi Kalsum', NULL, 'S.Sos.,M.AP', 'Ketapang', '1981-08-17', 'Perempuan', 'Islam', '$2y$10$Xgy39xz6Rf6Y5qSnp6DPOOJzHEtg23091xhklNq/89LoD35jCZtYO', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('f97a9a05-82df-4dea-af31-c8014d4ca784', NULL, NULL, NULL, NULL, 'Rico Anugrah', NULL, '', 'Ketapang', '1994-09-01', 'Laki-laki', '', '$2y$10$ncyHuEGbx9Ggw3gepMA1XO/alx38q5vMLNhEoZFKwcsLYais2AdxC', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('fcf015d0-91e5-4808-8aa3-a8cf44bd547b', '19891017 202121 2 001', NULL, NULL, NULL, 'Tri Kumala', NULL, 'SP', 'Ketapang', '1989-10-17', 'Perempuan', 'Islam', '$2y$10$mJOKqecFTu8NAbGqVKcZb.j0srkrsMJSh6qpz2ttHzApkChZJmy4W', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('fd63b679-ae5a-46da-9ac2-3759ece0eac6', '19920414 201903 2 025', NULL, NULL, NULL, 'Mia Anggreini', NULL, 'A.Md', 'Nanga Keduai', '1992-04-14', 'Perempuan', 'Islam', '$2y$10$3jfsuMRulPJwUPFvyh.NQuTEu5HmsT38AQZ5.zQ.ehPwCM/loeDo.', '2022-07-17 22:50:58', '2022-07-17 22:50:58'),
('fea080ab-8d56-4ba0-99f2-5ed8f0d4e1d5', NULL, '19811111 200801 012', NULL, NULL, 'Marisa Nopriyanti', NULL, 'STP., M.P.', 'Ketapang', '1981-11-11', 'Perempuan', 'Islam', '$2y$10$m0rF32oAJYQuB1DDh.kR8.h7zlj3v113SoSYNczgLN0G.P52MX7HS', '2022-07-17 22:50:59', '2022-07-17 22:50:59'),
('fed5ef8b-675f-46be-9dc4-947c09e14dac', NULL, '19911104 201601 190', NULL, NULL, 'Nurimansyah', NULL, ' SP', 'Ketapang', '1991-11-04', 'Laki-laki', '', '$2y$10$3eY50AeO1FFtTOwia.dHPeA7ZlwLmx8Gp2bKHbducPWgHbFD7nMqG', '2022-07-17 22:50:59', '2022-07-17 22:50:59'),
('ueOFgwQmte3GxDky1oAA7xA96Rqn7HfBhzjQ', '12345678900987654321', '12345', '67890', 'admin@localhost.com', 'Anggi', 'an', 'coba', 'ket', '2022-07-12', 'perempuan', 'islam', '$2y$10$BXXyiA/n/jD0nlWlGJOR9eTkmlQ2cJHwx3/gesOnYXubAZ4D0j/Qa', '2022-07-23 03:59:39', '2022-07-23 03:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'admin', 'Anggieta', 'admin@localhost.com', '', NULL, '$2y$10$898MRGrzmwG/Q2SLnn1yaOT6npGbIYMnKO9LO9LEB/KifUzLxAfWO', NULL, '2022-06-22 22:11:26', '2022-07-21 21:37:17'),
(20, 'user', 'user1', 'user1@gmail.com', '', NULL, '$2y$10$zgHZqE.gc4EWgC8FW1chG.wAHa2XpdKnmChRjhHCMS01aJm79SXd2', NULL, '2022-06-23 07:24:06', '2022-06-23 07:24:06'),
(22, 'direktur', 'Direktur Politap', 'direktur@gmail.com', '', NULL, '$2y$10$I3X6S..o0RvmvjrOAd5SmefyqkZgmVFPl4xVpYnIh8suvu.hzA.8C', NULL, '2022-06-25 19:01:30', '2022-06-25 19:01:30'),
(26, 'admin', 'Ayam', 'admin2@localhost.com', NULL, NULL, '$2y$10$YMFWQxPR.7qBJd0VIJqTXOPIZINxMm3ol9BOG.gC7p8hn2W1oKyyy', NULL, '2022-07-24 08:40:07', '2022-07-24 08:40:07'),
(27, 'user', 'bayu pratama', 'bayu@gmail.com', NULL, NULL, '$2y$10$4B8X/lM.2qVitmhcLMZxTuVZaDTCdBjoYvcp8.GWd4ycFtraXVpZq', NULL, '2022-07-25 03:04:11', '2022-07-25 03:04:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hak_cipta`
--
ALTER TABLE `hak_cipta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hak_paten`
--
ALTER TABLE `hak_paten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hap_paten_kepemilikan`
--
ALTER TABLE `hap_paten_kepemilikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengalihan_hakcipta`
--
ALTER TABLE `pengalihan_hakcipta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengelolas`
--
ALTER TABLE `pengelolas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pernytaan_hakcipta`
--
ALTER TABLE `pernytaan_hakcipta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revisi`
--
ALTER TABLE `revisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `simadu__pegawai`
--
ALTER TABLE `simadu__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `hak_cipta`
--
ALTER TABLE `hak_cipta`
  MODIFY `id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hak_paten`
--
ALTER TABLE `hak_paten`
  MODIFY `id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hap_paten_kepemilikan`
--
ALTER TABLE `hap_paten_kepemilikan`
  MODIFY `id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pengalihan_hakcipta`
--
ALTER TABLE `pengalihan_hakcipta`
  MODIFY `id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `pengelolas`
--
ALTER TABLE `pengelolas`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pernytaan_hakcipta`
--
ALTER TABLE `pernytaan_hakcipta`
  MODIFY `id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `revisi`
--
ALTER TABLE `revisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
