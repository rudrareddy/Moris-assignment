-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2024 at 04:21 AM
-- Server version: 8.0.35-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moris`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_event_calendar_settings`
--

CREATE TABLE `m_event_calendar_settings` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('default','event','mycalendar') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeslot_interval` int DEFAULT NULL,
  `all_day` tinyint(1) DEFAULT NULL,
  `customize` tinyint(1) NOT NULL DEFAULT '0',
  `reserve_time` tinyint(1) DEFAULT NULL,
  `start_date_time` timestamp NOT NULL,
  `end_date_time` timestamp NOT NULL,
  `end_type` enum('never','date','count') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_count` int DEFAULT NULL,
  `heading_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desktop_placeholder` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_placeholder` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar_profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after_booking` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_event_calendar_settings`
--

INSERT INTO `m_event_calendar_settings` (`id`, `user_id`, `event_id`, `type`, `meeting_address`, `location`, `calendar_type`, `status`, `language`, `timezone`, `timeslot_interval`, `all_day`, `customize`, `reserve_time`, `start_date_time`, `end_date_time`, `end_type`, `end_count`, `heading_1`, `heading_2`, `heading_3`, `desktop_placeholder`, `mobile_placeholder`, `calendar_link`, `calendar_profile_image`, `brand_logo`, `after_booking`, `redirect_url`, `privacy_policy_url`, `privacy_policy`, `created_at`, `updated_at`) VALUES
('7b5521e6-11ba-4fab-9ebf-a789654cd201', '7aa82a00-2f2f-4065-abde-858d7c7ef737', NULL, 'mycalendar', 'office location', 'in_person_meeting', 'owner', 1, 'english', 'Asia/Kolkata', 30, 1, 0, 0, '2024-01-13 06:00:00', '2024-01-11 06:30:00', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'amit-singh', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 15:21:13', '2023-12-27 15:21:13'),
('7b5521e6-11ba-4fab-9ebf-a789654cd202', '7aa82a00-2f2f-4065-abde-858d7c7ef737', NULL, 'mycalendar', 'office location', 'in_person_meeting', 'owner', 1, 'english', 'Asia/Kolkata', 30, 1, 0, 0, '2024-01-12 05:00:00', '2024-01-12 05:30:00', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'amit-singh', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 15:21:13', '2023-12-27 15:21:13'),
('7b5521e6-11ba-4fab-9ebf-a789654cd203', '7aa82a00-2f2f-4065-abde-858d7c7ef737', NULL, 'mycalendar', 'Chitradurga', 'in_person_meeting', 'owner', 1, 'english', 'Asia/Kolkata', 30, 1, 0, 0, '2024-01-15 07:00:00', '2024-01-15 07:30:00', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'amit-singh', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 15:21:13', '2023-12-27 15:21:13'),
('7b5521e6-11ba-4fab-9ebf-a789654cd204', '7aa82a00-2f2f-4065-abde-858d7c7ef737', NULL, 'mycalendar', 'Bangalore', 'in_person_meeting', 'owner', 1, 'english', 'Asia/Kolkata', 30, 1, 0, 0, '2024-01-18 04:30:00', '2024-01-18 05:00:00', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'amit-singh', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 15:21:13', '2023-12-27 15:21:13'),
('7b5521e6-11ba-4fab-9ebf-a789654cd205', '7aa82a00-2f2f-4065-abde-858d7c7ef737', NULL, 'mycalendar', 'DVG', 'in_person_meeting', 'owner', 1, 'english', 'Asia/Kolkata', 30, 1, 0, 0, '2024-01-20 04:30:00', '2024-01-20 05:00:00', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'amit-singh', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 15:21:13', '2023-12-27 15:21:13'),
('7b5521e6-11ba-4fab-9ebf-a789654cd206', '7aa82a00-2f2f-4065-abde-858d7c7ef737', NULL, 'mycalendar', 'Republic Day', 'in_person_meeting', 'owner', 1, 'english', 'Asia/Kolkata', 30, 1, 0, 0, '2024-01-26 06:00:00', '2024-01-20 06:30:00', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'amit-singh', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 15:21:13', '2023-12-27 15:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `m_users`
--

CREATE TABLE `m_users` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_reference_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salutation` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `microsoft_id` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_slug` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_country_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_step_auth` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_step_auth_mobile_country` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_step_auth_mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  `client_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_changed_at` timestamp NULL DEFAULT NULL,
  `profile_pin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile_verified` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_users`
--

INSERT INTO `m_users` (`id`, `user_reference_id`, `calendar_link`, `status`, `email`, `password`, `salutation`, `first_name`, `last_name`, `mobile`, `timezone`, `theme`, `google_id`, `microsoft_id`, `display_name`, `user_slug`, `profile_image`, `gender`, `designation`, `department`, `mobile_country_id`, `industry`, `address_id`, `created_by`, `updated_by`, `two_step_auth`, `two_step_auth_mobile_country`, `two_step_auth_mobile`, `password_changed_at`, `client_id`, `pin_changed_at`, `profile_pin`, `remember_token`, `created_at`, `updated_at`, `mobile_verified`, `email_verified`, `email_verified_at`, `mobile_verified_at`) VALUES
('39c8aaca-6227-42d9-a0c6-12c095993df0', NULL, NULL, 1, 'amit@gmail.com', '$2y$10$5763ecBYMIYmvuIhjp4O.ukb8CJOimIj3otAKSwsS1E4xhN1BU2Ea', NULL, 'Amit', 'Singh', NULL, NULL, NULL, NULL, NULL, NULL, 'amit-singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-13 09:28:08', '2023-12-13 09:28:08', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint UNSIGNED NOT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `time`, `created_at`, `updated_at`) VALUES
(1, '9:00am', '2024-01-11 09:49:05', '2024-01-11 09:49:05'),
(2, '10:00am', '2024-01-11 09:49:16', '2024-01-11 09:49:16'),
(3, '11:00am', '2024-01-11 09:49:16', '2024-01-11 09:49:16'),
(4, '12:00pm', '2024-01-11 09:59:48', '2024-01-11 09:59:48'),
(5, '1:00pm', '2024-01-11 10:00:30', '2024-01-11 10:00:30'),
(6, '2:00pm', '2024-01-11 10:00:51', '2024-01-11 10:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `time_intervals`
--

CREATE TABLE `time_intervals` (
  `id` bigint UNSIGNED NOT NULL,
  `time_id` bigint UNSIGNED NOT NULL,
  `time_interval` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_intervals`
--

INSERT INTO `time_intervals` (`id`, `time_id`, `time_interval`, `created_at`, `updated_at`) VALUES
(1, 1, '9:00am-9:30am', '2024-01-11 10:01:10', '2024-01-11 10:01:10'),
(2, 1, '9:30am-10:00am', '2024-01-11 10:01:10', '2024-01-11 10:01:10'),
(3, 2, '10:00am-10:30am', '2024-01-11 10:02:06', '2024-01-11 10:02:06'),
(4, 2, '10:30am-11:00am', '2024-01-11 10:02:06', '2024-01-11 10:02:06'),
(5, 3, '11:00am-11:30am', '2024-01-11 10:02:57', '2024-01-11 10:02:57'),
(6, 3, '11:30am-12:00pm', '2024-01-11 10:02:57', '2024-01-11 10:02:57'),
(7, 4, '12:00pm-12:30pm', '2024-01-11 10:03:39', '2024-01-11 10:03:39'),
(8, 4, '12:30pm-01:00pm', '2024-01-11 10:03:39', '2024-01-11 10:03:39'),
(9, 6, '02:00pm-02:30pm', '2024-01-11 10:04:30', '2024-01-11 10:04:30'),
(10, 6, '02:30pm-03:00pm', '2024-01-11 10:04:59', '2024-01-11 10:04:59'),
(11, 5, '01:00pm-01:30pm', '2024-01-13 09:49:30', '2024-01-13 09:49:34'),
(12, 5, '01:30pm-02:00pm', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_event_calendar_settings`
--
ALTER TABLE `m_event_calendar_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_users`
--
ALTER TABLE `m_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_intervals`
--
ALTER TABLE `time_intervals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_intervals_time_id_foreign` (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `time_intervals`
--
ALTER TABLE `time_intervals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `time_intervals`
--
ALTER TABLE `time_intervals`
  ADD CONSTRAINT `time_intervals_time_id_foreign` FOREIGN KEY (`time_id`) REFERENCES `times` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
