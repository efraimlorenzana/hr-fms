-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 10:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `Fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_id` int(10) UNSIGNED NOT NULL,
  `Birthday` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `Fullname`, `position_id`, `Birthday`, `gender`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lorenzana, Efraim', 2, '2018-11-20', '1', 'employee_data/picture/Lorenzana, Efraim.JPG', '2018-11-19 09:47:12', '2018-11-19 09:47:12'),
(5, 'Aviles, Jarome A.', 2, '2018-11-13', '1', 'employee_data/picture/Aviles, Jarome A..jpg', '2018-11-19 10:07:47', '2018-11-19 10:07:47'),
(6, 'Mary Advincula', 3, '2018-11-17', '1', 'employee_data/picture/Mary Advincula.png', '2018-11-19 10:10:30', '2018-11-19 10:10:30'),
(7, 'Risti Dolar', 4, '2018-11-09', '2', 'employee_data/picture/Risti Dolar.jpg', '2018-11-19 10:11:54', '2018-11-19 10:11:54'),
(8, 'Jayson Bacarro', 3, '2018-11-23', '1', 'employee_data/picture/Jayson Bacarro.jpg', '2018-11-19 12:05:35', '2018-11-19 12:05:35'),
(9, 'Jolo Cabalogo', 3, '2018-11-21', '1', 'employee_data/picture/Jolo Cabalogo.png', '2018-11-21 20:51:34', '2018-11-21 20:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `employee_file`
--

CREATE TABLE `employee_file` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_file`
--

INSERT INTO `employee_file` (`id`, `employee_id`, `file_id`, `created_at`, `updated_at`) VALUES
(40, 1, 1, NULL, NULL),
(41, 1, 2, NULL, NULL),
(42, 1, 3, NULL, NULL),
(43, 1, 4, NULL, NULL),
(44, 1, 5, NULL, NULL),
(45, 5, 1, NULL, NULL),
(46, 5, 5, NULL, NULL),
(47, 7, 1, NULL, NULL),
(48, 7, 2, NULL, NULL),
(49, 7, 3, NULL, NULL),
(50, 5, 2, NULL, NULL),
(51, 5, 3, NULL, NULL),
(52, 5, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_category`, `path`, `created_at`, `updated_at`) VALUES
(1, 'PERSONAL', 'employee_data/records/personal', NULL, NULL),
(2, 'EMPLOYMENT', 'employee_data/records/employment', NULL, NULL),
(3, 'MEDICAL', 'employee_data/records/medical', NULL, NULL),
(4, 'NOTICES', 'employee_data/records/notices', NULL, NULL),
(5, 'OTHERS', 'employee_data/records/others', NULL, NULL);

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
(12, '2018_11_19_132458_create_employees_table', 2),
(13, '2018_11_19_132927_create_positions_table', 2),
(14, '2018_11_19_133012_alter_employees_to_users', 2),
(16, '2018_11_19_140434_add_column_to_employees', 3),
(19, '2018_11_20_040757_crate_employee_file_table', 5),
(22, '2018_11_20_030110_create__files_table', 6),
(24, '2018_11_20_051650_add_records_table', 7),
(28, '2018_11_21_025153_add_column_to_users', 8),
(29, '2018_11_21_025535_create_roles_table', 8),
(30, '2018_11_21_030058_alter_table_users', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('efraim.lorenzana@gmail.com', '$2y$10$x9LYfZtO607/zcb6b/2UyOqTrOHrj57LTb9qcn6cIORiPs6b/xOJa', '2018-11-20 23:10:23'),
('ef_fame69@yahoo.com', '$2y$10$g3spIPJ2SDRB.h6SWaaWnu8miSRu4Fo9rKA64cDCq/FOc.llYPINa', '2018-11-21 00:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'LABORER', NULL, NULL),
(2, 'CARPENTER', NULL, NULL),
(3, 'STEELMAN', NULL, NULL),
(4, 'MASON', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_file_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_type`, `created_at`, `updated_at`) VALUES
(1, 'superuser', NULL, NULL),
(2, 'editor', NULL, NULL),
(3, 'viewer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Efraim Lorenzan', 'efraim.lorenzana@gmail.com', 1, NULL, '$2y$10$9e6IdcaV8Mw9hLYqhN0mlOG3xkJ8cogr2.X0PyfBWOObCNOJ2Qhbe', 'ZLfbVaYR6AcWIUWCaOTXMWqSLGOG6xKBs8EtNjxORfRxxcMcBqSwcaQmGRuN', '2018-11-19 02:31:15', '2018-11-21 07:19:17'),
(9, 'Jarome Aviles', 'jarome@yahoo.com', 3, NULL, '$2y$10$O14gVUr4uz0mV8P6OI2v8.0iAKZYRFEYqONP3Atz4cmFoaVcSK.wy', NULL, '2018-11-21 04:04:50', '2018-11-21 07:19:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_position_id_foreign` (`position_id`);

--
-- Indexes for table `employee_file`
--
ALTER TABLE `employee_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
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
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `records_employee_file_id_foreign` (`employee_file_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_file`
--
ALTER TABLE `employee_file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_employee_file_id_foreign` FOREIGN KEY (`employee_file_id`) REFERENCES `employee_file` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
