-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2017 at 07:00 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_marketprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `kota` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double(20,10) NOT NULL,
  `lang` double(20,10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `kota`, `lat`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'depok', -6.3878438000, 106.7475848000, '2017-05-09 17:00:00', NULL),
(2, 'tangerang selatan', -6.2954984000, 106.6381734000, '2017-05-17 17:00:00', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2017_05_27_122804_create_locations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED DEFAULT NULL,
  `fullName` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoProfile` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idKota` int(10) UNSIGNED DEFAULT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `idUser`, `fullName`, `fotoProfile`, `idKota`, `alamat`) VALUES
(1, 15, 'Yulianti', 'asdd', 1, 'mampang'),
(2, 4, 'Bambang', 'asdd', 2, 'pancoran mas');

-- --------------------------------------------------------

--
-- Table structure for table `tokos`
--

CREATE TABLE `tokos` (
  `id` int(11) UNSIGNED NOT NULL,
  `idProfil` int(10) UNSIGNED DEFAULT NULL,
  `location_latitude` double(20,10) NOT NULL,
  `location_longitude` double(20,10) NOT NULL,
  `name_point` varchar(50) NOT NULL,
  `map_image_url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_point` text NOT NULL,
  `url_point` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokos`
--

INSERT INTO `tokos` (`id`, `idProfil`, `location_latitude`, `location_longitude`, `name_point`, `map_image_url`, `description_point`, `url_point`, `status`) VALUES
(2, 1, -6.2960270000, 106.6402846000, 'Mampang Print', 'img/pp_user/logo_print.png', 'Jl. Mampang Prapatan VIII No.29, RT.3/RW.2, Tegal Parang, Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12790', '/jasaprint/2', 'kertas'),
(3, 2, -6.3002359000, 106.6405518000, 'Pancoran Print', 'img/img.png', 'jalan pancoran', '/jasaprint/3', 'digital');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `session_start` timestamp NULL DEFAULT NULL,
  `session_end` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `token`, `status`, `session_start`, `session_end`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'bamsaarts', 'bams@aja.com', '$2y$10$na3HIdFu2ImeNfgMqWld5.TtDFY0YUCSBXy6Z9AaSxyaP4oBJ/VwK', 'X2L56y4zsgCt0bh87StG', '0', NULL, NULL, '2017-06-07 01:20:24', '2017-06-07 01:20:24', '0000-00-00 00:00:00'),
(4, 'alfat', 'alfat@aja.com', '$2y$10$nBcAI6jAIZPMDNxaDlD.ruT6cSfLfMQffk/9EZpsnR7CdhyyZh5um', 'lWQ0kM1Hf57Af6eLCMR1', '0', NULL, NULL, '2017-06-09 00:11:19', '2017-06-09 00:11:19', '0000-00-00 00:00:00'),
(5, 'rifqy', 'rifqy@aja.com', '$2y$10$a5dYQqTwEoWjeiBfoNqgquMMucxK4Tp6aybbFqttRAf6.1p9rtDWW', 'tAXnfxDplFthpGXyJ7jF', '0', NULL, NULL, '2017-06-09 00:17:38', '2017-06-09 00:17:38', '0000-00-00 00:00:00'),
(6, 'jabal', 'jabal@aja.com', '$2y$10$g4202YDCT5x1HOvd6gEBLuBNz7X3RL1PkEAmsllqvlUFffAhdJF0m', 'f23CfOY900z4KvYzX65S', '0', NULL, NULL, '2017-06-09 00:20:33', '2017-06-09 00:20:33', '0000-00-00 00:00:00'),
(7, 'dika', 'dika@aja.com', '$2y$10$LWql1acCxDzrotKCYLPiH.4dQxskumgrq2BboFefSBm69jDO1l/Ny', '3qvsbWSsR0DyJc858JVm', '0', NULL, NULL, '2017-06-09 00:22:36', '2017-06-09 00:22:36', '0000-00-00 00:00:00'),
(8, 'rahmat', 'rahmat@aja.com', '$2y$10$CAGH1zXAJhR.tk3QoE6pS.JE.IyVTpNtiUZwFv4ZW5L1nzlSrCzyu', 'DIcfaSwSsftSFHoXPwVX', '0', NULL, NULL, '2017-06-10 06:40:13', '2017-06-10 06:40:13', '0000-00-00 00:00:00'),
(10, 'buldan', 'buldan@aja.com', '$2y$10$1fMD.MW6fGOKnL.00NFdKe8MzaLEUcFg.ZjG.IMIoED50oFEcid6O', 'VnXiEozmgorfKHGvIPTg', '0', NULL, NULL, '2017-06-10 08:00:25', '2017-06-10 08:00:25', '0000-00-00 00:00:00'),
(11, 'fikri', 'fikri@aja.com', '$2y$10$hfGkSRymaKn09Ifey5TiqOS7W2PfZm/dXfjgtgKFqkCopVvS.lwHm', 'v1k1KYqAS5BmhcUxqkEZ', '0', NULL, NULL, '2017-06-10 08:08:48', '2017-06-10 08:08:48', '0000-00-00 00:00:00'),
(12, 'eka', 'eka@aja.com', '$2y$10$4DOoewXrz4ldSbzbauyFK.d0CwlnDwG2dvCkgSlA2DxH0TViAnfGq', 'PsT6g5xNUk5UorHdPJ6u', '0', NULL, NULL, '2017-06-10 08:39:59', '2017-06-10 08:39:59', '0000-00-00 00:00:00'),
(13, 'edi', 'edi@aja.com', '$2y$10$8aVXpFV.z4gYK2kp9rmsIODF7cOZ3yyRxkP7AxVs5yA5KcWjGrD9C', '316lhyevxUMVWoGixKwe', '0', NULL, NULL, '2017-06-10 08:41:53', '2017-06-10 08:41:53', '0000-00-00 00:00:00'),
(15, 'yulianti', 'yuli@aja.com', '$2y$10$KhoZerLjNJEN8QnsurQR..hP5DM0.DgmoaIlOUprKGDXn9h32Z1Re', 'WRwKtjnBr9UbSxd8nZG9', '1', '2017-07-09 19:44:08', NULL, '2017-06-11 00:53:50', '2017-07-09 19:44:08', NULL),
(16, 'tasya', 'tasya@aja.com', '$2y$10$VqLeg4CRqYiDfeW7PAXjUOl8v1VpaXhmp1vQJqVFXTowuCwaleOoC', 'zDsqraPoKDUtsUW53SeZ', '1', NULL, NULL, '2017-06-15 07:34:30', '2017-06-15 08:59:23', NULL),
(17, 'yuliana', 'yuliana@aja.com', '$2y$10$G5Sv5PwIzYgyC8x7d7J.KOL/Lee2CkpvurPUEGNxhHqC2FrTspqni', 'aTa6KhyVpxPXjqfRixKs', '1', '2017-06-25 00:54:11', NULL, '2017-06-24 05:59:04', '2017-06-25 00:54:11', NULL),
(18, 'bambangs', 'bambangs@marketprint.com', '$2y$10$TwcKNRg23jkcpdxUCf673eGrxxBLgb40deTPWU8h6WW4vHirvaROC', 'i1vOYGLrex5WAwEBAWVf', '1', '2017-07-12 19:35:50', NULL, '2017-07-10 07:52:49', '2017-07-12 19:35:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_id_user` (`idUser`),
  ADD KEY `foreign_id_kota` (`idKota`);

--
-- Indexes for table `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_id_profil` (`idProfil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `foreign_id_kota` FOREIGN KEY (`idKota`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `foreign_id_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Constraints for table `tokos`
--
ALTER TABLE `tokos`
  ADD CONSTRAINT `foreign_id_profil` FOREIGN KEY (`idProfil`) REFERENCES `profiles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
