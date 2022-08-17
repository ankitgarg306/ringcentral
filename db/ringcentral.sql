-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2022 at 10:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ringcentral`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `mrn_no` int(11) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `patient_id`, `mrn_no`, `phone_no`, `status`, `created_on`, `modified_on`) VALUES
(1, 'asdf', 'xyz', 'asd@ga.com', 1131, 100, '124141', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(2, 'abcd1', 'xyz1', 'asd@ga1.com', 1132, 101, '124142', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(3, 'abcd2', 'xyz2', 'asda@ga2.com', 1133, 102, '124143', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(4, 'abcd3', 'xyz3', 'asd1@gam.com', 1134, 103, '124144', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(5, 'abcd4', 'xyz4', 'asd2@gam.com', 1135, 104, '124145', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(6, 'abcd5', 'xyz5', 'asd1@gam.com', 1136, 105, '124146', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(7, 'abcd6', 'xyz6', 'asd2@gam.com', 1137, 106, '124147', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(8, 'abcd7', 'xyz7', 'asd1@gam.com', 1138, 107, '124148', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(9, 'abcd8', 'xyz8', 'asd2@gam.com', 1139, 108, '124149', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(10, 'abcd9', 'xyz9', 'asd1@gam.com', 1140, 109, '124150', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(11, 'abcd10', 'xyz10', 'asd2@gam.com', 1141, 110, '124151', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(12, 'abcd11', 'xyz11', 'asd1@gam.com', 1142, 111, '124152', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(13, 'abcd12', 'xyz12', 'asd2@gam.com', 1143, 112, '124153', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(14, 'abcd13', 'xyz13', 'asd1@gam.com', 1144, 113, '124154', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(15, 'abcd14', 'xyz14', 'asd2@gam.com', 1145, 114, '124155', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(16, 'abcd15', 'xyz15', 'asd1@gam.com', 1146, 115, '124156', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(17, 'abcd16', 'xyz16', 'asd2@gam.com', 1147, 116, '124157', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(18, 'abcd17', 'xyz17', 'asd1@gam.com', 1148, 117, '124158', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(19, 'abcd18', 'xyz18', 'asd2@gam.com', 1149, 118, '124159', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(20, 'abcd19', 'xyz19', 'asd1@gam.com', 1150, 119, '124160', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(21, 'abcd20', 'xyz20', 'asd2@gam.com', 1151, 120, '124161', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(22, 'abcd21', 'xyz21', 'asd1@gam.com', 1152, 121, '124162', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(23, 'abcd22', 'xyz22', 'asd2@gam.com', 1153, 122, '124163', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(24, 'abcd23', 'xyz23', 'asd1@gam.com', 1154, 123, '124164', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(25, 'abcd24', 'xyz24', 'asd2@gam.com', 1155, 124, '124165', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(26, 'abcd25', 'xyz25', 'asd1@gam.com', 1156, 125, '124166', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(27, 'abcd26', 'xyz26', 'asd2@gam.com', 1157, 126, '124167', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(28, 'abcd27', 'xyz27', 'asd1@gam.com', 1158, 127, '124168', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(29, 'abcd28', 'xyz28', 'asd2@gam.com', 1159, 128, '124169', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(30, 'abcd29', 'xyz29', 'asd1@gam.com', 1160, 129, '124170', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(31, 'abcd30', 'xyz30', 'asd2@gam.com', 1161, 130, '124171', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(32, 'abcd31', 'xyz31', 'asd1@gam.com', 1162, 131, '124172', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(33, 'abcd32', 'xyz32', 'asd2@gam.com', 1163, 132, '124173', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(34, 'abcd33', 'xyz33', 'asd1@gam.com', 1164, 133, '124174', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(35, 'abcd34', 'xyz34', 'asd2@gam.com', 1165, 134, '124175', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(36, 'abcd35', 'xyz35', 'asd1@gam.com', 1166, 135, '124176', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(37, 'abcd36', 'xyz36', 'asd2@gam.com', 1167, 136, '124177', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(38, 'abcd37', 'xyz37', 'asd1@gam.com', 1168, 137, '124178', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(39, 'abcd38', 'xyz38', 'asd2@gam.com', 1169, 138, '124179', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(40, 'abcd39', 'xyz39', 'asd1@gam.com', 1170, 139, '124180', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(41, 'abcd40', 'xyz40', 'asd2@gam.com', 1171, 140, '124181', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(42, 'abcd41', 'xyz41', 'asd1@gam.com', 1172, 141, '124182', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(43, 'abcd42', 'xyz42', 'asd2@gam.com', 1173, 142, '124183', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40'),
(44, 'abcd43', 'xyz43', 'asd1@gam.com', 1174, 143, '124184', 1, '2022-08-05 20:00:40', '2022-08-05 20:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `message_log`
--

CREATE TABLE `message_log` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(512) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_log`
--

INSERT INTO `message_log` (`id`, `sender_id`, `user_id`, `message`, `status`, `created_on`) VALUES
(2, 1, 2, 'asadsdd', 1, '2022-07-12 02:00:52'),
(3, 2, 0, 'lkhlhkhkh', 1, '2022-07-12 02:23:49'),
(4, 2, 0, 'hhhjhjhjjh', 1, '2022-07-12 02:23:56'),
(7, 0, 2, 'welcome to Ringcentral', 1, '2022-07-12 02:51:21'),
(8, 0, 2, 'Hello good morning Ankit , Rizwan', 1, '2022-07-12 02:51:44'),
(9, 2, 0, 'this is test', 1, '2022-07-12 21:09:37'),
(10, 0, 1, 'sdsdasdfa', 1, '2022-07-17 23:24:57'),
(11, 0, 1, 'fffff', 1, '2022-07-17 23:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `message_template`
--

CREATE TABLE `message_template` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `twillo_api_key` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role_type`, `status`, `created_on`, `modified_on`) VALUES
(1, 'khamaroddin', 'shaikh', 'shaikhkhamroddin@gmail.com', '46c17fb99b9c8c8ae8214834e1edf6b1', 1, 1, '2022-07-27 22:35:08', '2022-07-27 22:35:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`);

--
-- Indexes for table `message_log`
--
ALTER TABLE `message_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_template`
--
ALTER TABLE `message_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574;

--
-- AUTO_INCREMENT for table `message_log`
--
ALTER TABLE `message_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message_template`
--
ALTER TABLE `message_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
