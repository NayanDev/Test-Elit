-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2024 at 03:42 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` int NOT NULL,
  `mahasiswa_id` int NOT NULL,
  `pekerjaan_id` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `mahasiswa_id`, `pekerjaan_id`, `foto`, `ijazah`) VALUES
(1, 2, 4, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int UNSIGNED NOT NULL,
  `namaMahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nimMahasiswa` int NOT NULL,
  `angkatanMahasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulskripsiMahasiswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembimbing2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `namaMahasiswa`, `nimMahasiswa`, `angkatanMahasiswa`, `judulskripsiMahasiswa`, `pembimbing1`, `pembimbing2`, `created_at`, `updated_at`) VALUES
(2, 'Nayan Taka', 193, '2024', 'Pengembangan Sistem Inventory', 'Susanto', 'Udin', '2024-07-23 10:30:54', '2024-07-23 10:31:00'),
(3, 'Taka', 1945, '2023', 'Pengembangan Sistem Manajemen', 'Sandi', 'Setiawan', '2024-07-23 10:31:48', '2024-07-23 10:31:57'),
(4, 'Nayantaka', 1945, '2025', 'Pengembangan Sistem Inventory', 'Susanto', 'Khoirudin', '2024-07-23 19:11:35', '2024-07-23 19:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_20_154951_create_mahasiswas_table', 1),
(4, '2024_07_22_041024_create_pekerjaans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `nama`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(2, 'Nayy', 'Bandung', '082983928740', '2024-07-23 09:39:14', '2024-07-23 09:39:14'),
(3, 'Nayan', 'Semarang', '082983928740', '2024-07-23 09:40:23', '2024-07-23 09:40:23'),
(4, 'Programmer', 'Semarang Barat', '082983928740', '2024-07-23 18:15:05', '2024-07-23 18:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nayan', 'nayan@gmail.com', NULL, '$2y$10$LF7/.pNzLf8Bd1L2vfKiYOo/f9DB7EtB6pzjSfhpFbluHNnSYoujW', '6CqryOUZPcIVehgbJHtzbLazXYzAIwmhxbdeL495Nn4nC28OyVaL8hH6UepO', '2024-07-22 18:46:33', '2024-07-22 18:46:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
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
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
