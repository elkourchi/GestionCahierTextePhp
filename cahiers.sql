-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2022 at 12:37 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cahiers`
--

CREATE TABLE `cahiers` (
  `classe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cours` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cahiers`
--

INSERT INTO `cahiers` (`classe`, `date`, `cours`, `details`, `description`, `created_at`, `updated_at`) VALUES
('C1', 'D1', 'C1', 'DT1', 'R1', '2022-06-27 09:15:48', '2022-06-27 09:16:05'),
('C2', 'D2', 'C2', 'DT2', 'R2', '2022-06-27 09:16:28', '2022-06-27 09:16:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cahiers`
--
ALTER TABLE `cahiers`
  ADD PRIMARY KEY (`classe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
