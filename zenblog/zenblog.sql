-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2026 at 11:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int NOT NULL,
  `c_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_stastus` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_desc`, `c_stastus`) VALUES
(1, 'Tech', 'Tech', 1),
(2, 'Food', 'Food', 1),
(3, 'Health', 'Health', 1),
(4, 'BD', 'BD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int NOT NULL,
  `p_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `p_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `p_users` int DEFAULT NULL,
  `p_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_status` int DEFAULT '0',
  `p_link` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `p_title`, `p_desc`, `p_users`, `p_date`, `p_category`, `p_status`, `p_link`, `p_img`) VALUES
(12, 'How YouTube Changed the Way We Learn', 'Learning is no longer limited to classrooms and textbooks. YouTube offers millions of tutorials, lectures, and educational channels covering everything from programming and mathematics to cooking and photography. This article discusses how YouTube has become a powerful tool for self-education and lifelong learning.', 0, '15-06-2026', '1', 0, '', '97703.png'),
(13, 'The Evolution of YouTube', 'YouTube has transformed from a small video-sharing platform into one of the worlds largest entertainment and educational hubs. Since its launch in 2005, it has empowered creators, businesses, and educators to reach billions of viewers worldwide. This article explores YouTubes growth, its impact on digital culture, and how it continues to shape the future of online content.', 0, '15-06-2026', '1', 0, '', '57505.png'),
(14, 'The Rise of YouTube Content Creators', 'YouTube has created a new generation of digital entrepreneurs. Content creators can build communities, share their passions, and even earn a full-time income through their videos. This article examines the journey of YouTubers, the challenges they face, and the opportunities available in the creator economy.', 0, '15-06-2026', '4', 0, '', '89643.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int NOT NULL,
  `u_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_phone`, `u_email`, `u_password`) VALUES
(37, 'Karimun Nahar', '32145678654', 'pharaoh1822005@gmail.com', '223344'),
(40, 'ABDUL ALIM', '32145678654', 'pharaoh1822005@gmail.com', '223344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
