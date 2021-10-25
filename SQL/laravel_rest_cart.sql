-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 10:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_rest_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `product_id`, `product_name`, `color`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nike sports shoe', 'public/img/products/colors/Screenshot 2021-10-25 155020.png', '2021-10-25 04:20:10', NULL),
(2, 1, 'Nike sports shoe', 'public/img/products/colors/Screenshot 2021-10-25 161432.png', '2021-10-25 04:20:39', NULL),
(3, 2, 'Asics sports shoe', 'public/img/products/colors/Screenshot 2021-10-25 155654.png', '2021-10-25 04:23:07', NULL),
(4, 2, 'Asics sports shoe', 'public/img/products/colors/Screenshot 2021-10-25 162201.png', '2021-10-25 04:23:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_10_23_144256_create_sessions_table', 1),
(7, '2021_10_25_053306_create_orders_table', 2),
(8, '2021_10_25_073330_create_prodeuct_details_table', 3),
(9, '2021_10_25_093141_create_product_details_table', 3),
(10, '2021_10_25_100355_create_colors_table', 4),
(11, '2021_10_25_102609_create_sizes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_coutry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `email`, `product_name`, `to_coutry`, `created_at`, `updated_at`) VALUES
(1, 1, 'afreed46@gmail.com', 'Nike sports shoe', 'Bangladesh', '2021-10-25 03:16:50', NULL),
(2, 2, 'afreed46@gmail.com', 'Asics sports shoe', 'Bangladesh', '2021-10-25 03:28:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `product_name`, `product_image`, `origin`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nike sports shoe', 'public/img/products/Screenshot 2021-10-25 155020.png', 'China', '570 $', '2021-10-25 03:55:17', NULL),
(2, 2, 'Asics sports shoe', 'public/img/products/Screenshot 2021-10-25 155654.png', 'Australia', '450 $', '2021-10-25 03:57:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('IlrlKx5D2kgBcbD7tHeqzJq1oMCzcgGND35vveZV', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFkyR0Z0NU42UVdQcGNFMGR6Mkw1SVAwT0dBRWFaR2NtOE43OUdTeiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbC1yZXN0LWNhcnQvZXhhbXBsZS1hcHAiO319', 1635193815);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `product_id`, `product_name`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nike sports shoe', '40', '50', '2021-10-25 04:43:50', NULL),
(2, 1, 'Nike sports shoe', '39', '40', '2021-10-25 04:44:22', NULL),
(3, 1, 'Nike sports shoe', '38', '60', '2021-10-25 04:44:32', NULL),
(4, 1, 'Nike sports shoe', '37', '25', '2021-10-25 04:44:43', NULL),
(5, 2, 'Asics sports shoe', '40', '100', '2021-10-25 04:44:48', NULL),
(6, 2, 'Asics sports shoe', '39', '60', '2021-10-25 04:44:52', NULL),
(7, 2, 'Asics sports shoe', '38', '50', '2021-10-25 04:45:00', NULL),
(8, 2, 'Asics sports shoe', '37', '25', '2021-10-25 04:45:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Afreed Bin Haque', 'afreed46@gmail.com', NULL, '$2y$10$92IHngOKokigCC9WN3Nko.MxjYtmQXGVNazm/LNHA4QNM4P5nGAuS', NULL, NULL, NULL, NULL, NULL, '2021-10-24 11:20:53', '2021-10-24 11:20:53'),
(2, 'Demo User', 'cuatro.dev@gmail.com', NULL, '$2y$10$UcpVI3tpFdheultl3OqMju/NQUXgNSijsM.reJSXfCR0B4KD8D2va', NULL, NULL, NULL, NULL, NULL, '2021-10-25 08:35:42', '2021-10-25 08:35:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
