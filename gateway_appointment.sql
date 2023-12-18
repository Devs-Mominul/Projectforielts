-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2023 at 03:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gateway_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `when_study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_cv_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_cv_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `name`, `email`, `phone_number`, `location`, `message`, `applicant_cv_name`, `spouse_cv_name`, `created_at`, `updated_at`) VALUES
(1, 'tevykos@mailinator.com', 'cecatebip@mailinator.com', '+1 (767) 534-7389', 'xejozaba@mailinator.com', 'Aliquid sunt molesti', '1702508918.docx', '1702508918.pdf', NULL, NULL),
(2, 'xazuvyrax@mailinator.com', 'bycehyxih@mailinator.com', '+1 (265) 309-6984', 'cajonavyg@mailinator.com', 'Aute mollit aliquip', '1702512378.docx', '1702512378.docx', NULL, NULL),
(3, 'xazuvyrax@mailinator.com', 'bycehyxih@mailinator.com', '+1 (265) 309-6984', 'cajonavyg@mailinator.com', 'Aute mollit aliquip', '1702512397.docx', '1702512397.docx', NULL, NULL),
(4, 'nudyvijyxa@mailinator.com', 'moqebomon@mailinator.com', '+1 (814) 245-6007', 'xupamulyj@mailinator.com', 'Ut eveniet veritati', '1702513140.pdf', '1702513140.docx', NULL, NULL),
(5, 'nudyvijyxa@mailinator.com', 'moqebomon@mailinator.com', '+1 (814) 245-6007', 'xupamulyj@mailinator.com', 'Ut eveniet veritati', '1702513292.pdf', '1702513292.docx', '2023-12-14 08:21:32', '2023-12-14 08:21:32'),
(6, 'nudyvijyxa@mailinator.com', 'moqebomon@mailinator.com', '+1 (814) 245-6007', 'xupamulyj@mailinator.com', 'Ut eveniet veritati', '1702513403.pdf', '1702513403.docx', '2023-12-14 08:23:23', '2023-12-14 08:23:23'),
(7, 'teqec@mailinator.com', 'zuwiwawysi@mailinator.com', '+1 (669) 834-6476', 'facuxubu@mailinator.com', 'Quos aut dolore corp', '1702513452.docx', '1702513452.docx', '2023-12-14 08:24:12', '2023-12-14 08:24:12'),
(8, 'kasuky@mailinator.com', 'refem@mailinator.com', '+1 (628) 193-8048', 'takati@mailinator.com', 'Architecto dolor eos', '1702514213.pdf', '1702514213.docx', '2023-12-14 08:36:53', '2023-12-14 08:36:53'),
(9, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702522514.docx', '1702522514.docx', '2023-12-14 10:55:14', '2023-12-14 10:55:14'),
(10, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702522563.docx', '1702522563.docx', '2023-12-14 10:56:03', '2023-12-14 10:56:03'),
(11, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702522861.docx', '1702522861.docx', '2023-12-14 11:01:01', '2023-12-14 11:01:01'),
(12, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702522959.docx', '1702522959.docx', '2023-12-14 11:02:40', '2023-12-14 11:02:40'),
(13, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702523047.docx', '1702523047.docx', '2023-12-14 11:04:07', '2023-12-14 11:04:07'),
(14, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702523112.docx', '1702523112.docx', '2023-12-14 11:05:12', '2023-12-14 11:05:12'),
(15, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702523125.docx', '1702523125.docx', '2023-12-14 11:05:25', '2023-12-14 11:05:25'),
(16, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702523191.docx', '1702523191.docx', '2023-12-14 11:06:31', '2023-12-14 11:06:31'),
(17, 'wipuc@mailinator.com', 'bikudogyb@mailinator.com', '+1 (826) 456-5566', 'tiby@mailinator.com', 'Ipsum nobis eligendi', '1702523297.docx', '1702523297.docx', '2023-12-14 11:08:17', '2023-12-14 11:08:17'),
(18, 'cywi@mailinator.com', 'byhinasywo@mailinator.com', '+1 (656) 409-2958', 'ciqaxyqi@mailinator.com', 'Officia quis Nam ex', '1702531254.pdf', '1702531254.docx', '2023-12-14 13:20:54', '2023-12-14 13:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_08_18_105814_create_appointments_table', 1),
(12, '2023_12_13_223948_create_cvs_table', 1);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
