-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 10:26 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eval_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom_ui`
--

CREATE TABLE `custom_ui` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_ui_content`
--

CREATE TABLE `custom_ui_content` (
  `id` int(11) NOT NULL,
  `custom_ui_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `featured_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `featured_image`, `is_active`, `parent_id`) VALUES
(1, 'Services', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: DauphinPlain; line-height: 24px; color: rgb(0, 0, 0); padding: 0px;\"><span style=\"font-family: undefined;\">﻿</span><span style=\"font-family: &quot;Comic Sans MS&quot;;\">What is Lorem Ipsum?</span></h2><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: DauphinPlain; line-height: 24px; color: rgb(0, 0, 0); padding: 0px;\"><span style=\"font-family: Arial;\">﻿</span><span style=\"font-weight: bolder; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: DauphinPlain; line-height: 24px; color: rgb(0, 0, 0); padding: 0px;\"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></h2><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: DauphinPlain; line-height: 24px; color: rgb(0, 0, 0); padding: 0px;\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Where does it come from?</span></h2><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: DauphinPlain; line-height: 24px; color: rgb(0, 0, 0); padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(0, 0, 0); padding: 0px; text-align: justify; font-size: 14px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(0, 0, 0); padding: 0px; text-align: justify; font-size: 14px;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></h2>', 'http://localhost:8000/storage/1538995035.jpeg', 1, NULL),
(4, 'About Us', NULL, NULL, 0, NULL),
(5, 'Clients', NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `caption_position` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption_button_color` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption_title_color` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption_description_color` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` int(11) NOT NULL,
  `slider_id` int(11) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_button` tinyint(1) NOT NULL,
  `button_text` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `is_admin`, `is_active`, `password`, `remember_token`, `profile_image`) VALUES
(1, 'Admin', 'Admin', 'admin@technople.in', 1, 1, '$2y$10$y675mfYA520xT965lC49L.7MXkD4nC0EXjISinT8qaZAwqUjQQtWu', NULL, 'http://localhost:8000/storage/1538976906.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom_ui`
--
ALTER TABLE `custom_ui`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_ui_content`
--
ALTER TABLE `custom_ui_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D37A2342EB33C460` (`custom_ui_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2074E575727ACA70` (`parent_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4389483B2CCC9638` (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom_ui`
--
ALTER TABLE `custom_ui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_ui_content`
--
ALTER TABLE `custom_ui_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `custom_ui_content`
--
ALTER TABLE `custom_ui_content`
  ADD CONSTRAINT `FK_D37A2342EB33C460` FOREIGN KEY (`custom_ui_id`) REFERENCES `custom_ui` (`id`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `FK_2074E575727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `pages` (`id`);

--
-- Constraints for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD CONSTRAINT `FK_4389483B2CCC9638` FOREIGN KEY (`slider_id`) REFERENCES `slider` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
