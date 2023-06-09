-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 05:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(140, '2014_10_12_000000_create_users_table', 1),
(141, '2014_10_12_100000_create_password_resets_table', 1),
(142, '2019_08_19_000000_create_failed_jobs_table', 1),
(143, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(144, '2022_10_31_172808_create_tb_barangs_table', 1),
(145, '2022_10_31_173616_create_tb_kembalis_table', 1),
(146, '2022_10_31_173929_create_tb_detailkembalis_table', 1),
(147, '2022_10_31_173959_create_tb_barangbarus_table', 1),
(148, '2022_10_31_174034_create_tb_tempppinjams_table', 1),
(149, '2022_11_01_003145_create_tb_users_table', 1),
(150, '2022_11_01_003146_create_tb_members_table', 1),
(151, '2022_11_01_024841_create_tb_pinjams_table', 1),
(152, '2022_11_01_042751_create_tb_detailpinjams_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barangbarus`
--

CREATE TABLE `tb_barangbarus` (
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_barangbarus`
--

INSERT INTO `tb_barangbarus` (`id_barang`, `tanggal_masuk`, `jumlah_barang`, `created_at`, `updated_at`) VALUES
(1001, '2022-12-20', 370371209, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barangs`
--

CREATE TABLE `tb_barangs` (
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `deskripsi_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_qrcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_barangs`
--

INSERT INTO `tb_barangs` (`id_barang`, `nama_barang`, `jumlah_barang`, `deskripsi_barang`, `posisi_barang`, `status_barang`, `foto_barang`, `img_qrcode`, `created_at`, `updated_at`) VALUES
(1001, 'duoasasbnu', 78791, '-', '-', 'Aktif', 'HTML5_badge.png', 'avatar.jpg', '2023-02-13 21:48:01', '2023-02-13 21:48:01'),
(1002, 'noisadna', 8209, '-', '-', 'Tidak Aktif', 'facebook-logo-png-2335.png', 'iot.png', '2023-02-13 22:46:21', '2023-02-13 22:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailkembalis`
--

CREATE TABLE `tb_detailkembalis` (
  `id_kembali` bigint(20) UNSIGNED NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_detailkembalis`
--

INSERT INTO `tb_detailkembalis` (`id_kembali`, `id_barang`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 9090, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detailpinjams`
--

CREATE TABLE `tb_detailpinjams` (
  `id_pinjam` bigint(20) UNSIGNED NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_detailpinjams`
--

INSERT INTO `tb_detailpinjams` (`id_pinjam`, `id_barang`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 60310, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kembalis`
--

CREATE TABLE `tb_kembalis` (
  `id_kembali` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` date NOT NULL,
  `conf` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kembalis`
--

INSERT INTO `tb_kembalis` (`id_kembali`, `id_member`, `tgl_kembali`, `conf`, `created_at`, `updated_at`) VALUES
(1, '1', '2012-02-20', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_members`
--

CREATE TABLE `tb_members` (
  `id_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_members`
--

INSERT INTO `tb_members` (`id_member`, `username`, `password`, `pendidikan_member`, `email_member`, `foto`, `no_hp`, `jabatan_member`, `alamat_member`, `status`, `created_at`, `updated_at`) VALUES
('1', 'admin', 'admin', 'S1', 'yy@gmail.com', 'C:\\xampp\\tmp\\phpA7F3.tmp', '749823', 'Admin', 'ddsdsvds', 'Belum Menikah', '2023-02-14 09:39:28', '2023-02-14 09:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjams`
--

CREATE TABLE `tb_pinjams` (
  `id_pinjam` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conf` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pinjams`
--

INSERT INTO `tb_pinjams` (`id_pinjam`, `id_member`, `tgl_pinjam`, `tgl_kembali`, `status`, `conf`, `created_at`, `updated_at`) VALUES
(1, '1', '2022-12-20', '2023-12-20', 'Pilih Status', 781, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempppinjams`
--

CREATE TABLE `tb_tempppinjams` (
  `id_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tempppinjams`
--

INSERT INTO `tb_tempppinjams` (`id_member`, `id_barang`, `jumlah`, `tgl_pinjam`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
('1', '1', 9091091, '2021-12-20', '2023-12-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `nama_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama_member`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
('bhimo', 'admin', '$2y$10$faYFHvCKTYdiH4zXDqm.I.fvqYX3qy1PPQTr.FDoFaDXxDXlZBl2a', '1', NULL, '2023-02-14 09:37:36', '2023-02-14 09:37:36'),
('bhimo', 'bhimo', '$2y$10$THf4gaa7v1xRX96l.Iw0yOfnRjy05EugUUjqrm.mqwqdGFJ2KdcmS', '1', NULL, '2023-02-13 22:57:18', '2023-02-13 22:57:18'),
('bhimo', 'kyura', '$2y$10$r935JjN9JoL4.IEKHJcxdO3VezY4pegPMMF7N2cL.EJNnGJcvd6R2', '1', NULL, '2023-02-13 22:55:14', '2023-02-13 22:55:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_barangbarus`
--
ALTER TABLE `tb_barangbarus`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `tb_barangbarus_id_barang_index` (`id_barang`);

--
-- Indexes for table `tb_barangs`
--
ALTER TABLE `tb_barangs`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_detailkembalis`
--
ALTER TABLE `tb_detailkembalis`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `tb_detailpinjams`
--
ALTER TABLE `tb_detailpinjams`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tb_kembalis`
--
ALTER TABLE `tb_kembalis`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `tb_members`
--
ALTER TABLE `tb_members`
  ADD KEY `tb_members_username_index` (`username`);

--
-- Indexes for table `tb_pinjams`
--
ALTER TABLE `tb_pinjams`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barangbarus`
--
ALTER TABLE `tb_barangbarus`
  MODIFY `id_barang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `tb_barangs`
--
ALTER TABLE `tb_barangs`
  MODIFY `id_barang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `tb_detailkembalis`
--
ALTER TABLE `tb_detailkembalis`
  MODIFY `id_kembali` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detailpinjams`
--
ALTER TABLE `tb_detailpinjams`
  MODIFY `id_pinjam` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kembalis`
--
ALTER TABLE `tb_kembalis`
  MODIFY `id_kembali` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pinjams`
--
ALTER TABLE `tb_pinjams`
  MODIFY `id_pinjam` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barangbarus`
--
ALTER TABLE `tb_barangbarus`
  ADD CONSTRAINT `tb_barangbarus_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `tb_barangs` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_members`
--
ALTER TABLE `tb_members`
  ADD CONSTRAINT `tb_members_username_foreign` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
