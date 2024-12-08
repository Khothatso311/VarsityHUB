-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2024 at 06:36 PM
-- Server version: 5.5.28
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `varsity_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_versities`
--

DROP TABLE IF EXISTS `add_versities`;
CREATE TABLE IF NOT EXISTS `add_versities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credits` int(11) NOT NULL,
  `maths` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `english` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_versities`
--

INSERT INTO `add_versities` (`id`, `user_id`, `name`, `description`, `faculty`, `course`, `credits`, `maths`, `english`, `qualification`, `startDate`, `endDate`, `created_at`, `updated_at`) VALUES
(1, 3, 'Limkokwing University', 'Institute of Enterprise', 'Science and  Communication', 'Information Technology', 5, 'gradeC', 'gradeB', 'Degree', '2024-12-07', '2024-12-20', '2024-12-07 03:30:34', '2024-12-07 03:30:34'),
(2, 2, 'National University of Lesotho', 'Institute of higher education in Lesotho', 'Health & Information', 'Nursing', 4, 'gradeB', 'gradeC', 'Degree', '2024-12-07', '2024-12-26', '2024-12-07 06:21:24', '2024-12-07 06:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

DROP TABLE IF EXISTS `applies`;
CREATE TABLE IF NOT EXISTS `applies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_id` int(11) NOT NULL,
  `varsity_id` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accounting` int(11) NOT NULL,
  `computer` int(11) NOT NULL,
  `sesotho` int(11) NOT NULL,
  `business_Studies` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `mathematics` int(11) NOT NULL,
  `physical_Science` int(11) NOT NULL,
  `biology` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applies`
--

INSERT INTO `applies` (`id`, `name_id`, `varsity_id`, `school`, `course`, `accounting`, `computer`, `sesotho`, `business_Studies`, `english`, `mathematics`, `physical_Science`, `biology`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 1, 'Information Technology', 6, 0, 7, 0, 10, 8, 0, 0, '2024-12-07 12:38:18', '2024-12-07 12:38:18'),
(2, 4, 3, 2, 'Nursing', 7, 7, 5, 0, 10, 8, 0, 0, '2024-12-07 16:03:05', '2024-12-07 16:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2023_11_15_091440_create_users_table', 1),
(10, '2024_12_05_233030_create_students_table', 1),
(11, '2024_12_05_233227_create_admins_table', 1),
(12, '2024_12_05_233315_create_versities_table', 1),
(17, '2024_12_06_181702_create_add_versities_table', 2),
(18, '2024_12_07_090623_create_score_marks_table', 3),
(22, '2024_12_07_102709_create_applies_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `score_marks`
--

DROP TABLE IF EXISTS `score_marks`;
CREATE TABLE IF NOT EXISTS `score_marks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `A*` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `E` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `F` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `G` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `U` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `score_marks`
--

INSERT INTO `score_marks` (`id`, `A*`, `A`, `B`, `C`, `D`, `E`, `F`, `G`, `U`, `created_at`, `updated_at`) VALUES
(3, '10', '9', '8', '7', '6', '5', '0', '0', '0', '2024-12-07 10:19:28', '2024-12-07 10:19:28'),
(4, '10', '9', '8', '7', '6', '5', '0', '0', '0', '2024-12-07 15:49:40', '2024-12-07 15:49:40'),
(5, '10', '9', '8', '7', '6', '5', '0', '0', '0', '2024-12-07 15:52:27', '2024-12-07 15:52:27'),
(6, '10', '9', '8', '7', '6', '5', '0', '0', '0', '2024-12-07 16:06:24', '2024-12-07 16:06:24'),
(7, '10', '9', '8', '7', '6', '5', '0', '0', '0', '2024-12-07 16:06:44', '2024-12-07 16:06:44'),
(8, '10', '9', '8', '7', '6', '5', '0', '0', '0', '2024-12-07 16:07:19', '2024-12-07 16:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Retselisitsoe', 'Mathibeli', 'admin', 'mathibeliretselisitsoe545@gmail.com', '$2y$10$bAq.jpp1UPwYtAae1e6xPOAPu0/7QfHtaEkYlpL2ckI./9YJrxemK', 'BknLxOAz85VZgnWoZY75xeG33UvcAzKEN8AbgqVMSRkVFTfLdd77dZqfFpOG', '2024-12-06 18:55:16', '2024-12-07 16:05:48'),
(3, 'Thabo', 'Mafota', 'institute', 'thabo@gmail.com', '$2y$10$2JQ2IJ7vScApIdCt5MwXEeV3RppgcTfyyMST/EJ0KI0xKubc7Hj0S', 'Rfr5CCXOhNVrFhaQGwiCvb3PybvdyobzDYxDIAnIGkphPafjbsvqsWdFPW53', '2024-12-07 02:38:27', '2024-12-07 02:38:27'),
(4, 'Lira', 'mohh', 'student', 'lira@gmail.com', '$2y$10$.lJ/q5cAwHzPb1TRLfAGH.0LqPfs1NIc9cn0MDc8CY58UI3TRK2X2', '7CPbu3HOHOF5s1CWqsmJM665tl6KrQy8NgSVySu4roNisilJTgN0ryRKcJbd', '2024-12-07 07:43:24', '2024-12-07 07:43:24'),
(5, 'Lefa', 'Matsie', 'institute', 'lefa@gmail.com', '$2y$10$139.ubiXRaH/5zbEtBITau3hQhN4YiY9OaL/bZV6SJakZq8uPCgVe', 'S8hXWJQfzMPYrt0lwNhntLF7Mzytug2lQpIPqp1qOFveXj96YVVYjbrejhuF', '2024-12-07 15:54:37', '2024-12-07 15:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `versities`
--

DROP TABLE IF EXISTS `versities`;
CREATE TABLE IF NOT EXISTS `versities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
