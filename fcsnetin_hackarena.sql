-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 01:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcsnetin_hackarena`
--

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `challenge_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `challenge_score` bigint(20) NOT NULL,
  `challenge_route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `challenge_flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`id`, `challenge_name`, `challenge_score`, `challenge_route`, `challenge_flag`, `created_at`, `updated_at`) VALUES
(1, 'Find Me', 200, 'findme', 'flag{48dd4e5724c183da3e1b137b6fb06927}', '2020-03-28 12:34:12', '2020-03-28 12:34:12'),
(2, 'Let Her Login', 300, 'letherlogin', 'flag{56cdde5724s1832a341b137b6fb06727}', '2020-04-09 02:49:19', '2020-04-09 02:50:17'),
(3, 'Who Am I', 500, 'whoami', 'flag{res4ex45dfyguh9866e34waxfg}', '2020-04-09 04:26:09', '2020-04-09 04:26:09'),
(4, 'Chess Board', 300, 'chessboard', 'flag{sdfhd5525bnqmrn8r23v23jhg}', '2020-04-09 04:35:26', '2020-04-09 04:35:26'),
(5, 'Secret Message From NASA', 600, 'secretmessage', 'flag{3bb45uh9nqmrn8r23v23jhg}', '2020-04-09 05:24:39', '2020-04-09 05:24:39'),
(6, 'Injection for CORONA', 800, 'injection', 'flag{35n33k5n6dnel45icner45nf9en}', '2020-04-09 05:44:22', '2020-04-09 05:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `dummies`
--

CREATE TABLE `dummies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dummies`
--

INSERT INTO `dummies` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'xhacker', 'xhackerinjectpassword', '2020-04-09 18:30:00', NULL),
(2, 'xhacker', 'xhackerinjectpassword', '2020-04-09 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_21_142505_create_challenges_table', 1),
(5, '2020_04_01_165918_create_perfomances_table', 1),
(6, '2020_04_09_112651_create_dummies_table', 1);

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
-- Table structure for table `perfomances`
--

CREATE TABLE `perfomances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `challenge_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perfomances`
--

INSERT INTO `perfomances` (`id`, `created_at`, `updated_at`, `challenge_id`, `user_id`, `start_time`, `end_time`) VALUES
(89, '2020-04-02 02:16:28', '2020-04-02 02:16:28', 1, 1, '2020-04-02 07:46:28', '2020-04-02 07:46:28'),
(90, '2020-04-09 04:15:37', '2020-04-09 04:15:37', 2, 1, '2020-04-09 09:45:37', '2020-04-09 09:45:37'),
(91, '2020-04-09 04:28:41', '2020-04-09 04:28:41', 3, 1, '2020-04-09 09:58:41', '2020-04-09 09:58:41'),
(92, '2020-04-09 04:52:57', '2020-04-09 04:52:57', 4, 1, '2020-04-09 10:22:57', '2020-04-09 10:22:57'),
(93, '2020-04-09 05:39:35', '2020-04-09 05:39:35', 5, 1, '2020-04-09 11:09:35', '2020-04-09 11:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_score` bigint(20) NOT NULL DEFAULT '0',
  `login_time` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `mobile_no`, `ip_address`, `email`, `email_verified_at`, `password`, `total_score`, `login_time`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rishad', 'rishad', '9745931140', '127.0.0.1', 'rishadp2747@gmail.com', '2020-03-28 12:27:58', '$2y$10$hM4Ghc/yXAGXu2Iepfb0puffOubqUzaicLLb3b5llrLqBwdp/iTh2', 4300, '2020-04-09 04:00:19', '', '2020-03-28 12:26:51', '2020-04-09 05:39:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummies`
--
ALTER TABLE `dummies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `perfomances`
--
ALTER TABLE `perfomances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfomances_challenge_id_foreign` (`challenge_id`),
  ADD KEY `perfomances_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dummies`
--
ALTER TABLE `dummies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perfomances`
--
ALTER TABLE `perfomances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perfomances`
--
ALTER TABLE `perfomances`
  ADD CONSTRAINT `perfomances_challenge_id_foreign` FOREIGN KEY (`challenge_id`) REFERENCES `challenges` (`id`),
  ADD CONSTRAINT `perfomances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
