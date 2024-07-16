-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 02:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '0001_01_01_000000_create_users_table', 1),
(6, '2024_07_13_083009_create_users_l_table', 1),
(7, '2024_07_13_092638_update_users_l_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6zDh3EV9ZAkRBbaHiQLNFnpsv54WTJjTSZ3i70y7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo2OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IndheWx1eXFPUXdOMzl6VDJiRUxPRVRmelM5V0Nmazh6UHcyT1JITVMiO3M6ODoibG9nZ2VkaW4iO2I6MTtzOjQ6Im5hbWUiO3M6ODoiQWJkdWxsYWgiO3M6NToiZW1haWwiO3M6MTE6IjFAZ21haWwuY29tIjt9', 1721038765);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(4, 'Abdullah', '1@gmail.com', '$2y$10$fTts9Pt8UlcdgCiECtk1LudYR2NG2KoInSsd6zH3FMr5P9vVg9ZS6'),
(5, 'abdullah12345', '1234567890@gmail.com', '$2y$10$3O58A5f5RbdlNz8NpLCZQ.CMfGufFWl6ijLOFjmuMKdbAnL38PQ6a'),
(9, 'abdullahsheikhmuhammad21@gmail.com', 'abdullahsheikhmuhammad2111@gmail.com', '$2y$10$m7.YtheIzTN2tUr8AbKIFeNhiRovV8IHKvkGl.t8sZJ973W9s2Zpm'),
(10, 'abdullahsheikhmuhammad21@gmail.com', 'abdullahsheikhmuhammad21113@gmail.com', '$2y$10$9I.7DjDMBt2JWeuGVqouguzCzPIzBKHmQ2zLqC3FW./rsSlxhsXZK'),
(12, 'abdullahsheikhmuhammad211@gmail.com', 'abdullahsheikhmuhammad22231@gmail.com', '$2y$10$WFPApKo9HRZvjg6lk1MVueKNaN42WWMAffUaPYda7DQ.lvTpWghG.');

-- --------------------------------------------------------

--
-- Table structure for table `users_l`
--

CREATE TABLE `users_l` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_l`
--

INSERT INTO `users_l` (`id`, `name`, `email`, `password`, `city`, `created_at`) VALUES
(1, 'SHEIKH MUHAMMAD ABDULLAH', 'sheikhAbdullah@gmail.com', '$2y$10$c8YDLO13Law3Omq3t13FpuZmaJr6IDTtXuMvhzadCCwO.mqNpy4Q.', 'Karachi', '2024-07-14 06:05:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_l`
--
ALTER TABLE `users_l`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_l_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_l`
--
ALTER TABLE `users_l`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
