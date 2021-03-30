-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 04:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `vj_pages`
--

CREATE TABLE `vj_pages` (
  `page_id` int(5) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_title` varchar(250) NOT NULL,
  `page_detail` text NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_keyword` varchar(200) DEFAULT NULL,
  `meta_description` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vj_pages`
--

INSERT INTO `vj_pages` (`page_id`, `page_name`, `page_title`, `page_detail`, `meta_title`, `meta_keyword`, `meta_description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'About Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'About - ', NULL, 'Here is about Sabawoon, about his profile', 1, '2018-05-27 15:50:39', '2021-03-29 13:49:00'),
(3, 'Home', 'Welcome ::  ', '<p>Welcome ::&nbsp; <br></p>', 'Welcome ::  ', 'Welcome :: ', 'Welcome :: ', 1, '2018-07-03 12:32:12', '2021-03-29 13:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `vj_users`
--

CREATE TABLE `vj_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_summary` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vj_users`
--

INSERT INTO `vj_users` (`user_id`, `username`, `password`, `name`, `contact_no`, `email`, `status`, `profile_image`, `profile_summary`, `auth_key`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '$2y$10$R3kyviTWFfgQ0MMi4pSDle3ISpo7nT78pHEaZo4HlinZ080MA6bTq', 'Sabawoon', '123456789', 'admin@admin.com', '1', '1617027639.jpg', 'This is a sticky behavior. It will cause the models it is attached to to remember the user\'s last inputted value. In other words, the last value the user selected will be the default value the next time around the user fills out the form\r\n\r\nIt\'s not perfectly reusable unless you follow the same naming standards as I do, so you may need to modify one or two lines of code (like the relation)', 'mmFGmT2ryb', 'ZBjCF7wVLSZEzYwaxIyBlDO25uqfmzDItzyawnAgza8y8F8wCtEoohjZCHH6', '2018-05-09 00:23:43', '2021-03-29 09:50:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vj_pages`
--
ALTER TABLE `vj_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `vj_users`
--
ALTER TABLE `vj_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vj_pages`
--
ALTER TABLE `vj_pages`
  MODIFY `page_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vj_users`
--
ALTER TABLE `vj_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
