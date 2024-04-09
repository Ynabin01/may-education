-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 06:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `may-edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2a$12$Q/wZm.HgzV6xvTL4NyRY2O/elm3su5K/jy7DBaNextpYFOcJr5gOy', NULL, '2020-09-16 03:15:20', '2023-10-31 11:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `page_status` enum('1','0') NOT NULL,
  `blog_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `number` varchar(50) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `temporary_address` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `job_id` varchar(50) DEFAULT NULL,
  `message` varchar(2000) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_nepali_name` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone_ne` varchar(255) DEFAULT NULL,
  `website_full_address` varchar(255) DEFAULT NULL,
  `address_ne` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_keyword` varchar(255) DEFAULT NULL,
  `page_description` text DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) NOT NULL,
  `site_logo_nepali` varchar(255) DEFAULT NULL,
  `site_status` enum('1','0') NOT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `site_name`, `site_nepali_name`, `site_email`, `phone`, `phone_ne`, `website_full_address`, `address_ne`, `facebook`, `twitter`, `linkedin`, `other`, `page_title`, `page_keyword`, `page_description`, `favicon`, `site_logo`, `site_logo_nepali`, `site_status`, `extra_one`, `extra_two`, `created_at`, `updated_at`, `instagram`, `youtube`) VALUES
(1, 'May Education Consultancy', 'May Education Consultancy', 'info@may.edu.np', '+977 01-4240108', '+977 01-4240108', 'Putalisadak/Tinkune Kathmandu,Nepal', NULL, 'https://www.facebook.com', 'https://twitter.com/', NULL, 'https://www.youtube.com/', 'May Education Consultancy', 'May Education Consultancy', 'Sunday – Friday 10am to 5pm \r\nSaturday – Closed', '1704291671_sslogo.PNG', '1712631324_logo.png', '1680161043_logo.png', '1', '3154/066/067', '', '2020-09-16 03:15:20', '2024-04-09 02:57:32', 'https://www.instagram.com/', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) NOT NULL,
  `company_name` varchar(55) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `minimum_qualification` varchar(255) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `contract_time` varchar(30) DEFAULT NULL,
  `navigation_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deadline` varchar(255) DEFAULT NULL,
  `posted_on` varchar(50) DEFAULT NULL,
  `foodaccommondation` varchar(255) DEFAULT NULL,
  `total_demand` varchar(255) DEFAULT NULL,
  `working_day` varchar(255) DEFAULT NULL,
  `working_hour` varchar(255) DEFAULT NULL,
  `visa_ticket` varchar(255) DEFAULT NULL,
  `service_charge` varchar(255) DEFAULT NULL,
  `lt_number` varchar(255) DEFAULT NULL,
  `interview` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_06_040112_create_admins_table', 1),
(4, '2020_08_06_040148_create_navigations_table', 1),
(5, '2020_08_06_040229_create_navigation_items_table', 1),
(6, '2020_08_06_040251_create_page_types', 1),
(7, '2020_08_06_040325_create_subscribers_table', 1),
(8, '2020_08_06_040351_create_global_settings_table', 1),
(9, '2020_08_06_040430_create_navigation_video_items_table', 1),
(10, '2020_08_06_040522_create_comments_table', 1),
(11, '2022_07_12_231308_create_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nav_name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `caption_nepali` varchar(255) DEFAULT NULL,
  `nav_category` varchar(255) NOT NULL,
  `page_type` varchar(255) NOT NULL,
  `page_template` varchar(255) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `short_content` text DEFAULT NULL,
  `short_content_nepali` text DEFAULT NULL,
  `long_content` text DEFAULT NULL,
  `long_content_nepali` text DEFAULT NULL,
  `parent_page_id` int(11) NOT NULL,
  `icon_image` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `icon_image_caption` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `main_attachment` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_keyword` varchar(255) DEFAULT NULL,
  `page_description` varchar(255) DEFAULT NULL,
  `page_status` enum('1','0') NOT NULL,
  `nav_status` enum('1','0') NOT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `extra_three` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `span` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `link_link` varchar(255) DEFAULT NULL,
  `twit_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `nav_name`, `alias`, `caption`, `caption_nepali`, `nav_category`, `page_type`, `page_template`, `position`, `short_content`, `short_content_nepali`, `long_content`, `long_content_nepali`, `parent_page_id`, `icon_image`, `featured_image`, `icon_image_caption`, `banner_image`, `link`, `main_attachment`, `attachment`, `page_title`, `page_keyword`, `page_description`, `page_status`, `nav_status`, `extra_one`, `extra_two`, `extra_three`, `created_at`, `updated_at`, `span`, `fb_link`, `insta_link`, `link_link`, `twit_link`) VALUES
(2254, 'about', 'about', 'about', NULL, 'Home', 'Group', NULL, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'about', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 16:11:46', '2023-02-15 05:01:21', NULL, '', '', '', ''),
(2265, 'gal1', 'gal1', 'picnic pic', '.', 'Main', 'Photo Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326379_download (1).jfif', NULL, NULL, NULL, NULL, 'gal1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 16:58:42', '2022-07-21 00:57:59', NULL, '', '', '', ''),
(2288, 'gallary1', 'gallary1', 'Gallary1', '.', 'Main', 'Photo Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326408_download (5).jfif', NULL, NULL, NULL, NULL, 'gallary1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:41:18', '2022-07-21 00:58:28', NULL, '', '', '', ''),
(2289, 'gallary2', 'gallary2', 'Gallary2', '.', 'Main', 'Photo Gallery', NULL, 3, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326422_download (6).jfif', NULL, NULL, NULL, NULL, 'gallary2', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:42:28', '2022-07-21 00:58:42', NULL, '', '', '', ''),
(2290, 'gallary4', 'gallary4', 'Gallary4', '.', 'Main', 'Photo Gallery', NULL, 4, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326448_images (2).jfif', NULL, NULL, NULL, NULL, 'gallary4', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:43:57', '2022-07-21 00:59:08', NULL, '', '', '', ''),
(2291, 'gallary5', 'gallary5', 'Gallary5', '.', 'Main', 'Photo Gallery', NULL, 5, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326467_wallpapersden.com_north-america-usa-florida_1280x720.jpg', NULL, NULL, NULL, NULL, 'gallary5', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:44:19', '2022-07-21 00:59:27', NULL, '', '', '', ''),
(2292, 'gallary6', 'gallary6', 'Gallary6', '.', 'Main', 'Photo Gallery', NULL, 6, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326491_wallpapersden.com_dubai-uae-top-view_1280x720.jpg', NULL, NULL, NULL, NULL, 'gallary6', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:45:32', '2022-07-21 00:59:51', NULL, '', '', '', ''),
(2293, 'gallary7', 'gallary7', 'Gallary7', '.', 'Main', 'Photo Gallery', NULL, 7, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326514_images.jfif', NULL, NULL, NULL, NULL, 'gallary7', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:46:16', '2022-07-21 01:00:14', NULL, '', '', '', ''),
(2294, 'gallary8', 'gallary8', 'Gallary7', '.', 'Main', 'Photo Gallery', NULL, 8, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658326532_wallpapersden.com_australia_1280x720.jpg', NULL, NULL, NULL, NULL, 'gallary8', NULL, '1', '0', NULL, NULL, NULL, '2022-07-20 19:47:01', '2022-07-21 01:00:32', NULL, '', '', '', ''),
(2332, 'notice1', 'notice1', 'Misson', NULL, 'Main', 'Notice', NULL, 1, 'Vision & Values', NULL, 'Our Vision is to lead in the creation and delivery of innovative workforce solutions and services that enable our clients to win in the changing world of work', NULL, 2317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'notice1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 04:01:21', '2022-07-22 17:12:00', NULL, '', '', '', ''),
(2340, 'People', 'people', 'People', NULL, 'Main', 'Notice', NULL, 2, 'People', NULL, 'We care about people and the role of work in their lives. We respect people as individuals, trusting them, supporting them, enabling them to achieve their aims in work and in life.\r\n\r\nWe help people develop their careers through planning, work, coaching and training.\r\n\r\nWe recognize everyone’s contribution to our success - our staff, our clients and our candidates. We encourage and reward achievement.', NULL, 2317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'People', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 15:39:15', '2022-07-22 15:39:15', NULL, '', '', '', ''),
(2341, 'Knowledge', 'knowledge', 'Knowledge', NULL, 'Main', 'Notice', NULL, 3, 'Knowledge', NULL, 'We share our knowledge, our expertise and our resources, so that everyone understands what is important now and what’s happening next in the world of work - and knows how best to respond.\r\n\r\nWe actively listen and act upon this information to improve our relationships, solutions and services.', NULL, 2317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Knowledge', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 15:40:55', '2022-07-22 15:40:55', NULL, '', '', '', ''),
(2342, 'Innovation', 'innovation', 'Innovation', NULL, 'Main', 'Notice', NULL, 4, 'Innovation', NULL, 'Based on our understanding of the world of work, we actively pursue the development and adoption of the best practices worldwide. We lead in the world of work. We dare to innovate, to pioneer and to evolve.\r\n\r\nWe never accept the status quo. We constantly challenge the norm to find new and better ways of doing things.\r\n\r\nWe thrive on our entrepreneurial spirit and speed of response; taking risks, knowing that we will not always succeed, but never exposing our clients to risk.', NULL, 2317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Innovation', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 15:41:41', '2022-07-22 15:41:41', NULL, '', '', '', ''),
(2343, 'Certificates1', 'certificates1', 'Membership Certificates', NULL, 'Main', 'Photo Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468241_16 (1).jpg', NULL, NULL, NULL, NULL, 'Certificates1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:00:13', '2022-07-22 16:22:21', NULL, '', '', '', ''),
(2344, 'Certificates2', 'certificates2', 'Appreciation Letter', NULL, 'Main', 'Photo Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468272_17.jpg', NULL, NULL, NULL, NULL, 'Certificates2', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:02:27', '2022-07-22 16:22:52', NULL, '', '', '', ''),
(2345, 'Certificates3', 'certificates3', 'Entry Card', NULL, 'Main', 'Photo Gallery', NULL, 3, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468287_18.jpg', NULL, NULL, NULL, NULL, 'Certificates3', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:03:45', '2022-07-22 16:23:07', NULL, '', '', '', ''),
(2346, 'Certificates4', 'certificates4', 'Shram Tatha Rojgar Bibhag Letter', NULL, 'Main', 'Photo Gallery', NULL, 4, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468302_19.jpg', NULL, NULL, NULL, NULL, 'Certificates4', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:05:52', '2022-07-22 16:23:22', NULL, '', '', '', ''),
(2347, 'Certificates5', 'certificates5', 'Company Registration Paper', NULL, 'Main', 'Photo Gallery', NULL, 5, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468325_20.jpg', NULL, NULL, NULL, NULL, 'Certificates5', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:07:19', '2022-07-22 16:23:45', NULL, '', '', '', ''),
(2348, 'Certificates6', 'certificates6', 'PAN', NULL, 'Main', 'Photo Gallery', NULL, 6, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468367_21 (1).jpg', NULL, NULL, NULL, NULL, 'Certificates6', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:08:22', '2022-07-22 16:24:27', NULL, '', '', '', ''),
(2349, 'Certificates7', 'certificates7', 'Baideshik Rojgar Sewa Sulka Ijazat Patra', NULL, 'Main', 'Photo Gallery', NULL, 7, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468393_22.jpg', NULL, NULL, NULL, NULL, 'Certificates7', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:11:17', '2022-07-22 16:24:53', NULL, '', '', '', ''),
(2350, 'Certificates9', 'certificates9', 'Letter of Appreciation', NULL, 'Main', 'Photo Gallery', NULL, 8, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468410_fodefeen1.jpg', NULL, NULL, NULL, NULL, 'Certificates9', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:17:20', '2022-07-22 16:25:10', NULL, '', '', '', ''),
(2351, 'Certificates10', 'certificates10', 'Certificate of Registration', NULL, 'Main', 'Photo Gallery', NULL, 9, NULL, NULL, NULL, NULL, 2322, NULL, NULL, NULL, '/uploads/banner_image/1658468002_iso-certificate.jpg', NULL, NULL, NULL, NULL, 'Certificates10', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:18:22', '2022-07-22 16:25:18', NULL, '', '', '', ''),
(2352, 'Photo1', 'photo1', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468652_09.jpg', NULL, NULL, NULL, NULL, 'Photo1', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:29:12', '2022-07-22 16:29:12', NULL, '', '', '', ''),
(2353, 'Photo2', 'photo2', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468756_07.jpg', NULL, NULL, NULL, NULL, 'Photo2', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:29:28', '2022-07-22 16:30:56', NULL, '', '', '', ''),
(2354, 'Photo3', 'photo3', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 3, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468744_08.jpg', NULL, NULL, NULL, NULL, 'Photo3', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:30:02', '2022-07-24 15:50:31', NULL, '', '', '', ''),
(2355, 'Photo4', 'photo4', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 4, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468855_05.jpg', NULL, NULL, NULL, NULL, 'Photo4', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:32:35', '2022-07-22 16:32:35', NULL, '', '', '', ''),
(2356, 'Photo5', 'photo5', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 5, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468878_06.jpg', NULL, NULL, NULL, NULL, 'Photo5', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:32:58', '2022-07-22 16:32:58', NULL, '', '', '', ''),
(2357, 'Photo6', 'photo6', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 6, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468910_04.jpg', NULL, NULL, NULL, NULL, 'Photo6', NULL, '0', '0', NULL, NULL, NULL, '2022-07-22 16:33:30', '2022-07-24 15:54:35', NULL, '', '', '', ''),
(2358, 'Photo7', 'photo7', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 7, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468939_03.jpg', NULL, NULL, NULL, NULL, 'Photo7', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:33:59', '2022-07-24 15:52:13', NULL, '', '', '', ''),
(2359, 'Photo8', 'photo8', 'Photo', NULL, 'Main', 'Photo Gallery', NULL, 8, NULL, NULL, NULL, NULL, 2323, NULL, NULL, NULL, '/uploads/banner_image/1658468966_02.jpg', NULL, NULL, NULL, NULL, 'Photo8', NULL, '1', '0', NULL, NULL, NULL, '2022-07-22 16:34:26', '2022-07-24 15:52:13', NULL, '', '', '', ''),
(2361, 'gly', '-gly', 'gly1', NULL, 'Main', 'Photo Gallery', NULL, 9, NULL, NULL, NULL, NULL, 2263, NULL, NULL, NULL, '/uploads/banner_image/1658480717_org.jpg', NULL, NULL, NULL, NULL, 'gly', NULL, '0', '0', NULL, NULL, NULL, '2022-07-22 19:50:17', '2022-07-22 20:05:44', NULL, '', '', '', ''),
(2443, 'photo-gallery', 'photogallery', 'Photo Gallery', NULL, 'Main', 'Group', NULL, 1, NULL, NULL, NULL, NULL, 2418, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'photo-gallery', NULL, '1', '0', NULL, NULL, NULL, '2022-09-11 22:17:33', '2022-09-13 20:55:17', '(21)', '', '', '', ''),
(2444, 'video-gallery', 'videogallery', 'Video Gallery', NULL, 'Main', 'Video Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2418, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'video-gallery', NULL, '1', '0', NULL, NULL, NULL, '2022-09-11 22:18:45', '2022-12-16 19:30:30', '(21)', '', '', '', ''),
(2445, 'video-one', 'videoone', 'Video Gallery', NULL, 'Main', 'Video Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2444, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'video-one', NULL, '1', '0', NULL, NULL, NULL, '2022-09-11 22:19:19', '2022-09-11 22:19:19', '(21)', '', '', '', ''),
(2446, 'photo', 'photo', 'Our Meeting', NULL, 'Main', 'Photo Gallery', NULL, 1, NULL, NULL, NULL, NULL, 2443, NULL, NULL, NULL, '/uploads/banner_image/1670945414_Economy-1.jpg', NULL, NULL, NULL, NULL, 'photo', NULL, '1', '0', NULL, NULL, NULL, '2022-09-11 22:20:26', '2022-12-13 15:30:14', '(21)', '', '', '', ''),
(2472, 'testimonial', 'testimonial-', 'Testimonial', NULL, 'Home', 'Group', NULL, 5, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '/uploads/banner_image/1670837002_chairperson.jpg', NULL, NULL, NULL, NULL, 'testimonial', NULL, '1', '0', NULL, NULL, NULL, '2022-12-12 09:23:22', '2023-03-30 07:06:36', NULL, '', '', '', ''),
(2483, 'food', 'food', 'Manufacturing', NULL, 'Main', 'Group Jobs', NULL, 1, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1676546291_Manufacturing.jpg', NULL, NULL, NULL, NULL, 'food', NULL, '1', '0', NULL, NULL, NULL, '2022-12-13 07:13:38', '2023-02-16 11:18:11', NULL, '', '', '', ''),
(2498, 'security-guards', 'securityguards', 'Security Guards', NULL, 'Main', 'Group Jobs', NULL, 2, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1676546347_Security Guards.jpg', NULL, NULL, NULL, NULL, 'security-guards', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:51:35', '2023-02-16 11:19:07', NULL, '', '', '', ''),
(2499, 'hospitability', 'hospitability', 'Hospitability', NULL, 'Main', 'Group Jobs', NULL, 3, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1676546384_Hospitability.jpg', NULL, NULL, NULL, NULL, 'hospitability', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:52:29', '2023-02-16 11:19:44', NULL, '', '', '', ''),
(2500, 'mining', 'mining', 'Mining', NULL, 'Main', 'Group Jobs', NULL, 4, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1676546411_Mining.jpg', NULL, NULL, NULL, NULL, 'mining', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:55:53', '2023-02-16 11:20:11', NULL, '', '', '', ''),
(2501, 'agriculture', 'agriculture', 'Agriculture', NULL, 'Main', 'Group Jobs', NULL, 5, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1676546445_Agricultlure.jpg', NULL, NULL, NULL, NULL, 'agriculture', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:57:18', '2023-02-16 11:20:45', NULL, '', '', '', ''),
(2502, 'logistics', 'logistics', 'Logistics', NULL, 'Main', 'Group Jobs', NULL, 6, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1676546477_Logistics.jpg', NULL, NULL, NULL, NULL, 'logistics', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 16:59:12', '2023-02-16 11:21:17', NULL, '', '', '', ''),
(2503, 'manufacture-company', 'manufacturecompany', 'Cunstruction', NULL, 'Main', 'Group Jobs', NULL, 7, NULL, NULL, NULL, NULL, 2415, NULL, NULL, NULL, '/uploads/banner_image/1676546508_carousel-3.jpg', NULL, NULL, NULL, NULL, 'manufacture-company', NULL, '1', '0', NULL, NULL, NULL, '2022-12-17 17:00:09', '2023-02-16 11:21:48', NULL, '', '', '', ''),
(2588, 'about-us-one', 'aboutusone', 'Guidance sessions for aspiring students', NULL, 'Home', 'Normal', NULL, 1, NULL, NULL, '<p style=\"text-align: justify;\">May Education Consultancy is one of the best places for students aspiring to study abroad and test preparation. We are a professional’s team to provide outstanding supports for the deserving prospective students.<br />\r\nWe offer comprehensive test preparation, admissions services and financial advice to students for further education in the USA, Canada, UK, Ireland, Germany, Australia, Switzerland, Cyprus, Singapore &amp; India ...</p>', NULL, 2254, NULL, NULL, '10', '/uploads/banner_image/1712633809_about.PNG', NULL, NULL, NULL, '2', 'about-us-one', NULL, '1', '0', NULL, NULL, NULL, '2023-04-03 09:29:30', '2024-04-09 03:42:33', NULL, NULL, NULL, NULL, NULL),
(2596, 'testo2', 'testo2', 'Sharon Aniston', NULL, 'Home', 'Normal', NULL, 3, 'Student', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit id habitant sem id in nisl, imperdiet. Faucibus fusce penatibus enim quam vel lorem egestas sagittis. Mattis mauris id dolor aenean eu vitae vestibulum, ut. Hendrerit id habitant sem id in nisl, imperdiet. Faucibus fusce penatibus enim quam vel lorem egestas sagittis.', NULL, 2472, NULL, NULL, NULL, '/uploads/banner_image/1712639810_Adult-Greek-School.jpg', NULL, NULL, NULL, NULL, 'testo2', NULL, '1', '0', NULL, NULL, NULL, '2023-04-07 06:40:40', '2024-04-09 05:29:42', NULL, NULL, NULL, NULL, NULL),
(2597, 'gallary', 'gallary', 'Gallery', NULL, 'Main', 'Group', NULL, 6, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gallary', NULL, '1', '0', NULL, NULL, NULL, '2023-04-07 06:50:22', '2024-04-09 15:48:59', NULL, NULL, NULL, NULL, NULL),
(2605, 'labour', 'labour', 'Labour', NULL, 'Main', 'Group Jobs', NULL, 1, NULL, NULL, NULL, NULL, 2603, NULL, NULL, NULL, '/uploads/banner_image/1681633388_sadad.PNG', NULL, NULL, NULL, NULL, 'labour', NULL, '1', '0', NULL, NULL, NULL, '2023-04-16 08:17:30', '2023-04-16 08:23:08', NULL, '', '', '', ''),
(2606, 'nabin', 'nabin', 'asdadas', NULL, 'Main', 'Job', NULL, 1, NULL, NULL, NULL, NULL, 2605, '1682853581_Chillout Mashup Music Channel YouTube Thumbnail (6).jpg', NULL, NULL, '/uploads/banner_image/1681636723_about (2).jpg', NULL, NULL, NULL, NULL, 'nabin', NULL, '1', '0', NULL, NULL, NULL, '2023-04-16 09:10:37', '2023-04-30 11:19:41', NULL, '', '', '', ''),
(2607, 'nabinsad', 'nabinsad', 'acscascv', NULL, 'Main', 'Job', NULL, 2, 'safdasfasfasfasf', NULL, '<ul>\r\n	<li><i class=\"fa fa-hand-point-right\"></i><span>Age Limit: 20-37 years</span></li>\r\n	<li><i class=\"fa fa-hand-point-right\"></i><span>Must be well groom, clean, smart and pleasing personality</span></li>\r\n	<li><i class=\"fa fa-hand-point-right\"></i><span>Must have good communicable English</span></li>\r\n	<li><i class=\"fa fa-hand-point-right\"></i><span>Must have 2-5years of experience in related field</span></li>\r\n	<li><i class=\"fa fa-hand-point-right\"></i><span>GCC experience candidate will be highly preferable</span></li>\r\n	<li><i class=\"fa fa-hand-point-right\"></i><span>Candidate should be physically well build, mentally fit and strong</span></li>\r\n	<li><i class=\"fa fa-hand-point-right\"></i><span>Tattoo in visible body parts will not be acceptable</span></li>\r\n</ul>', NULL, 2605, NULL, NULL, NULL, '/uploads/banner_image/1681638828_about (2).jpg', NULL, NULL, NULL, NULL, 'nabinsad', NULL, '1', '0', NULL, NULL, NULL, '2023-04-16 09:53:48', '2023-04-16 10:04:40', NULL, '', '', '', ''),
(2609, 'nabinasfas', 'nabinasfas', 'sdafasd', NULL, 'Main', 'Job', NULL, 3, NULL, NULL, NULL, NULL, 2605, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nabinasfas', NULL, '1', '0', NULL, NULL, NULL, '2023-04-16 10:46:31', '2023-04-16 10:46:31', NULL, '', '', '', ''),
(2650, 'photo-gallery-one', 'photogalleryone', 'Photo Gallery', NULL, 'Main', 'Group', NULL, 1, NULL, NULL, NULL, NULL, 2597, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'photo-gallery-one', NULL, '1', '0', NULL, NULL, NULL, '2023-06-17 03:52:08', '2023-06-17 03:52:08', NULL, NULL, NULL, NULL, NULL),
(2652, 'photo-two', 'phototwo', 'Album', NULL, 'Main', 'Photo Gallery', NULL, 2, NULL, NULL, NULL, NULL, 2650, NULL, NULL, NULL, '/uploads/banner_image/1686978589_image.jpg', NULL, NULL, NULL, NULL, 'photo-two', NULL, '1', '0', NULL, NULL, NULL, '2023-06-17 05:09:49', '2023-06-17 05:09:49', NULL, NULL, NULL, NULL, NULL),
(2742, 'banner', 'banner', 'Banner', NULL, 'Home', 'Group', NULL, 1, 'cacscasc', NULL, NULL, NULL, 0, NULL, '1712634498_about.PNG', NULL, '/uploads/banner_image/1712634498_about.PNG', NULL, NULL, NULL, NULL, 'banner', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 03:48:18', '2024-04-09 16:15:52', NULL, NULL, NULL, NULL, NULL),
(2744, 'banner-one', 'bannerone', 'CATCH YOUR DREAM WITH US', NULL, 'Home', 'Normal', NULL, 1, NULL, NULL, 'Welcome to May Education, where boundless opportunities await on the global stage.', NULL, 2742, NULL, NULL, NULL, '/uploads/banner_image/1712639388_11c.PNG', NULL, '1712639275_Capture.PNG', NULL, NULL, 'banner-one', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 04:28:18', '2024-04-09 05:09:48', NULL, NULL, NULL, NULL, NULL),
(2745, 'sadsad', 'sadsad', 'Samira', NULL, 'Home', 'Normal', NULL, 4, 'Student', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit id habitant sem id in nisl, imperdiet. Faucibus fusce penatibus enim quam vel lorem egestas sagittis. Mattis mauris id dolor aenean eu vitae vestibulum, ut. Hendrerit id habitant sem id in nisl, imperdiet. Faucibus fusce penatibus enim quam vel lorem egestas sagittis.', NULL, 2472, NULL, NULL, NULL, '/uploads/banner_image/1712640630_OIP.jpeg', NULL, NULL, NULL, NULL, 'sadsad', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 05:19:53', '2024-04-09 05:30:30', NULL, NULL, NULL, NULL, NULL),
(2746, 'partners', 'partners-', 'Partners', NULL, 'Home', 'Group', NULL, 19, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'partners', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 05:48:43', '2024-04-09 05:48:43', NULL, NULL, NULL, NULL, NULL),
(2747, 'partners-one', 'partnersone', 'partners', NULL, 'Home', 'Normal', NULL, 1, NULL, NULL, NULL, NULL, 2746, NULL, NULL, NULL, '/uploads/banner_image/1712641757_p2.PNG', NULL, NULL, NULL, NULL, 'partners-one', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 05:49:17', '2024-04-09 05:49:17', NULL, NULL, NULL, NULL, NULL),
(2748, 'partners-two', 'partnerstwo', 'partners', NULL, 'Home', 'Normal', NULL, 2, NULL, NULL, NULL, NULL, 2746, NULL, NULL, NULL, '/uploads/banner_image/1712641786_p3.PNG', NULL, NULL, NULL, NULL, 'partners-two', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 05:49:46', '2024-04-09 05:49:46', NULL, NULL, NULL, NULL, NULL),
(2751, 'universities', 'universities', 'Universities', NULL, 'Main', 'Group', NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'universities', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 15:43:44', '2024-04-09 15:43:53', NULL, NULL, NULL, NULL, NULL),
(2752, 'services', 'services', 'Services', NULL, 'Main', 'Group', NULL, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'services', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 15:45:14', '2024-04-09 15:45:22', NULL, NULL, NULL, NULL, NULL),
(2753, 'abroad-study', 'abroadstudy', 'Abroad Study', NULL, 'Main', 'Group', NULL, 4, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abroad-study', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 15:47:14', '2024-04-09 15:47:14', NULL, NULL, NULL, NULL, NULL),
(2754, 'test-preparation', 'testpreparation', 'Test Preparation', NULL, 'Main', 'Group', NULL, 5, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test-preparation', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 15:47:59', '2024-04-09 15:47:59', NULL, NULL, NULL, NULL, NULL),
(2756, 'blog', 'blog', 'Blog', NULL, 'Main', 'Normal', NULL, 10, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'blog', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 15:49:40', '2024-04-09 15:49:40', NULL, NULL, NULL, NULL, NULL),
(2757, 'about-one', 'aboutone', 'Introduction', NULL, 'Main', 'Normal', NULL, 1, 'May Education Consultancy is one of the best places for students aspiring to study abroad and test preparation. We are a professional’s team to provide outstanding supports for the deserving prospective students. We offer comprehensive test preparation, admissions services and financial advice to students for further education in the USA, Canada, UK, Ireland, Germany, Australia, Switzerland, Cyprus, Singapore &amp; India. Our goal is to offer the most innovative and time-saving admission information that will make the otherwise laborious application process as simple as possible', NULL, '<div style=\"text-align: justify;\">May Education Consultancy is stand quality service and reliability has formed the roots to the individual success for study abroad and future career since over the years. These strong roots have been nurtured by a strong belief that client’s satisfaction is the foundation upon which we are built. We are very successful because of our commitment to excellence in the services rendered by us. Our business goals are inseparable from that of our client’s needs. Our faith in quality is the key to corporate success in an increasing competitive global market. We strive to achieve excellence in all areas of performances. A considerable number of our students have already been attending some of the most well reputed colleges and universities abroad, in pursuit of shaping their future &amp; career. We are one of the best international student recruitment and Solutions Company in Nepal. Through our strong marketing network, we have built a professional platform for institutes and students to achieve their desired goals.</div>\r\n<br />\r\n<strong><meta charset=\"utf-8\" />Mission</strong><br />\r\nThe designer Charles Eames once said, recalling a conversation he’d had with<br />\r\narchitect Eero Saarinen, that “the role of the architect or designer is that of a very<br />\r\ngood, thoughtful host…trying to anticipate<br />\r\n<meta charset=\"utf-8\" /><br />\r\n<strong>Vision</strong><br />\r\nWhen I worked as a web designer, I was fascinated by how design trends changed<br />\r\neach year. Since hanging up my design boots and focusing on being CEO of Envato,<br />\r\nmy focus has shifted from visual', NULL, 0, NULL, NULL, NULL, '/uploads/banner_image/1712678882_unsplashtuv1rzqpuy-2@2x.png', NULL, NULL, NULL, NULL, 'about-one', NULL, '1', '0', NULL, NULL, NULL, '2024-04-09 15:59:37', '2024-04-09 16:10:24', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `navigation_items`
--

CREATE TABLE `navigation_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `navigation_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_nepali` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `content_nepali` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_items`
--

INSERT INTO `navigation_items` (`id`, `sort`, `navigation_id`, `name`, `name_nepali`, `file`, `content`, `content_nepali`, `link`, `extra_one`, `extra_two`, `created_at`, `updated_at`) VALUES
(19, 1, 2322, NULL, NULL, '1658466642_thumb_fodefeen1.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:55:42', '2022-07-22 15:58:47'),
(20, 1, 2322, NULL, NULL, '1658466658_thumb_22.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:55:58', '2022-07-22 15:58:47'),
(21, 1, 2322, NULL, NULL, '1658466669_thumb_20.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:56:09', '2022-07-22 15:58:47'),
(22, 1, 2322, NULL, NULL, '1658466678_thumb_19.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:56:18', '2022-07-22 15:58:47'),
(23, 1, 2322, NULL, NULL, '1658466688_thumb_17.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:56:28', '2022-07-22 15:58:47'),
(24, 1, 2322, NULL, NULL, '1658466697_thumb_16.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-22 15:56:37', '2022-07-22 15:58:47'),
(25, 1, 2445, NULL, NULL, NULL, NULL, NULL, 'https://youtu.be/syKIp6HXf2Y', NULL, NULL, '2022-09-11 22:19:26', '2022-09-11 22:19:26'),
(26, 1, 2445, NULL, NULL, NULL, NULL, NULL, 'https://youtu.be/syKIp6HXf2Y', NULL, NULL, '2022-09-11 22:19:26', '2022-09-11 22:19:26'),
(45, 1, 2457, NULL, NULL, '1663921747_gallery-pic.png', NULL, NULL, NULL, NULL, NULL, '2022-09-13 21:00:14', '2022-09-23 19:14:07'),
(59, 1, 2464, NULL, NULL, '1663998841_2-1.png', NULL, NULL, NULL, NULL, NULL, '2022-09-14 22:23:28', '2022-09-24 16:39:01'),
(60, 2, 2464, NULL, NULL, '1663998858_Ijajat-Patra1-copy-Copy.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-14 22:23:28', '2022-09-24 16:39:18'),
(61, 3, 2464, NULL, NULL, '1663998876_renewed-License.jpeg', NULL, NULL, NULL, NULL, NULL, '2022-09-14 22:23:28', '2022-09-24 16:39:36'),
(62, 1, 2465, NULL, NULL, '1663999042_organization-chart-employment-link.png', NULL, NULL, NULL, NULL, NULL, '2022-09-14 22:25:18', '2022-10-28 17:22:33'),
(63, 1, 2457, NULL, NULL, '1663921783_gallery-pic-1.png', NULL, NULL, NULL, NULL, NULL, '2022-09-23 19:14:43', '2022-09-23 19:14:43'),
(64, 2, 2457, NULL, NULL, '1663921783_gallery-pic-3.png', NULL, NULL, NULL, NULL, NULL, '2022-09-23 19:14:43', '2022-09-23 19:14:43'),
(65, 3, 2457, NULL, NULL, '1663921783_gallery-pic-4.png', NULL, NULL, NULL, NULL, NULL, '2022-09-23 19:14:43', '2022-09-23 19:14:43'),
(66, 1, 2446, NULL, NULL, '1670945328_Economy-1.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-23 19:15:46', '2022-12-13 15:30:15'),
(74, 1, 2462, NULL, NULL, '1670944478_legal-document-1.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:34:32', '2022-12-16 20:07:30'),
(75, 2, 2462, NULL, NULL, '1670944487_legal-document-3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:34:32', '2022-12-16 20:07:30'),
(76, 3, 2462, NULL, NULL, '1670944510_legal-document-2.jpg', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:34:32', '2022-12-16 20:07:30'),
(78, 1, 2463, NULL, NULL, '1663998773_AL-Sary-National-Indoor-Cleaner.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(79, 2, 2463, NULL, NULL, '1663998773_Al-Waha-Farm-Kuwait.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(80, 3, 2463, NULL, NULL, '1663998773_BYSM-Electromechinical-Demand-Qatar.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(81, 4, 2463, NULL, NULL, '1663998773_Kuwait-Waste-Collection-Cleaner.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(82, 5, 2463, NULL, NULL, '1663998773_kuwat-costacoffee.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(83, 6, 2463, NULL, NULL, '1663998773_SP-SP-International-Electro-Mechanical-Works-Demand.png', NULL, NULL, NULL, NULL, NULL, '2022-09-24 16:37:53', '2022-09-24 16:37:53'),
(85, 2, 2446, NULL, NULL, '1670945349_legal-document-3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-13 15:29:09', '2022-12-13 15:30:15'),
(86, 3, 2446, NULL, NULL, '1670945349_legal-document-2.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-13 15:29:09', '2022-12-13 15:30:15'),
(87, 1, 2517, NULL, NULL, '1671354038_legal-document-2.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-18 20:45:38', '2022-12-18 20:45:38'),
(88, 2, 2517, NULL, NULL, '1671354038_legal-document-1.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-18 20:45:38', '2022-12-18 20:45:38'),
(89, 3, 2517, NULL, NULL, '1671354038_legal-document-3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-12-18 20:45:38', '2022-12-18 20:45:38'),
(90, 1, 2517, NULL, NULL, '1671432110_license up to 2080.jpeg', NULL, NULL, NULL, NULL, NULL, '2022-12-19 18:26:50', '2022-12-19 18:26:50'),
(91, 1, 2526, NULL, NULL, '1674798581_1671354038_legal-document-2.jpg', NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:34:41', '2023-01-27 17:34:41'),
(92, 2, 2526, NULL, NULL, '1674798581_1671432110_license up to 2080.jpeg', NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:34:41', '2023-01-27 17:34:41'),
(93, 3, 2526, NULL, NULL, '1674798581_1671354038_legal-document-1q.jpg', NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:34:41', '2023-01-27 17:34:41'),
(94, 4, 2526, NULL, NULL, '1674798581_1671354038_legal-document-3.jpg', NULL, NULL, NULL, NULL, NULL, '2023-01-27 17:34:41', '2023-01-27 17:34:41'),
(96, 1, 2533, '1', NULL, '1678005806_reg.jpg', 'Okay', NULL, NULL, NULL, NULL, '2023-02-12 06:44:48', '2023-03-05 20:32:40'),
(97, 2, 2533, '2', NULL, '1678005850_pan.jpg', 'no', NULL, NULL, NULL, NULL, '2023-02-12 06:44:48', '2023-03-05 20:32:40'),
(98, 3, 2533, '3', NULL, '1678005976_reg back.jpg', NULL, NULL, NULL, NULL, NULL, '2023-02-12 06:44:48', '2023-03-05 20:32:40'),
(99, 4, 2533, '4', NULL, '1678005988_tax clear.jpg', NULL, NULL, NULL, NULL, NULL, '2023-02-12 06:44:48', '2023-03-05 20:32:40'),
(100, 5, 2533, '5', NULL, '1678005941_viber_image_2023-03-05_12-31-52-213.jpg', NULL, NULL, NULL, NULL, NULL, '2023-02-12 06:44:48', '2023-03-05 20:32:40'),
(109, 1, 2560, NULL, NULL, '1678006285_viber_image_2023-03-05_12-31-52-140.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(110, 2, 2560, NULL, NULL, '1678006285_viber_image_2023-03-05_12-31-51-997.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(111, 3, 2560, NULL, NULL, '1678006285_viber_image_2023-03-05_12-31-51-879.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(112, 4, 2560, NULL, NULL, '1678006285_viber_image_2023-03-05_12-31-51-791.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(113, 5, 2560, NULL, NULL, '1678006285_viber_image_2023-03-05_12-31-51-540.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(114, 6, 2560, NULL, NULL, '1678006285_viber_image_2023-03-05_12-31-51-420.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(115, 7, 2560, NULL, NULL, '1678006285_viber_image_2023-03-05_12-31-51-732.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(116, 8, 2560, NULL, NULL, '1678006285_70707277_188570515511945_1936225004257542144_n.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(117, 9, 2560, NULL, NULL, '1678006285_13030_934315036600176_9036367205026918193_n.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(118, 10, 2560, NULL, NULL, '1678006285_10648911_10203133191384776_4783782128477091181_o.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(119, 11, 2560, NULL, NULL, '1678006285_10658656_10203133229225722_3865868328209446927_o.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(120, 12, 2560, NULL, NULL, '1678006285_10917875_892243007474046_3583310694074702412_n.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(121, 13, 2560, NULL, NULL, '1678006285_13030_934315036600176_9036367205026918193_n.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(122, 14, 2560, NULL, NULL, '1678006285_21586801_1660344630663876_6575765492879266436_o.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:36:25', '2023-03-05 20:36:25'),
(123, 1, 2560, NULL, NULL, '1678006398_69463501_185304232505240_6865738709963112448_n.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:38:18', '2023-03-05 20:38:18'),
(124, 2, 2560, NULL, NULL, '1678006398_69537910_185304465838550_6890267783586643968_n.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:38:18', '2023-03-05 20:38:18'),
(125, 3, 2560, NULL, NULL, '1678006398_69782615_185304359171894_5697479018148790272_n.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:38:18', '2023-03-05 20:38:18'),
(126, 4, 2560, NULL, NULL, '1678006398_viber_image_2023-03-05_12-31-51-256.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:38:18', '2023-03-05 20:38:18'),
(127, 1, 2544, NULL, NULL, '1678007266_reg.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:52:46', '2023-03-05 20:52:46'),
(128, 2, 2544, NULL, NULL, '1678007266_pan.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:52:46', '2023-03-05 20:52:46'),
(129, 3, 2544, NULL, NULL, '1678007266_reg back.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:52:46', '2023-03-05 20:52:46'),
(130, 4, 2544, NULL, NULL, '1678007266_tax clear.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:52:46', '2023-03-05 20:52:46'),
(131, 5, 2544, NULL, NULL, '1678007266_CCI05032023_0010.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:52:46', '2023-03-05 20:52:46'),
(132, 6, 2544, NULL, NULL, '1678007266_viber_image_2023-03-05_12-31-52-213.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-05 20:52:46', '2023-03-05 20:52:46'),
(133, 1, 2560, NULL, NULL, '1678273816_unnamed (1).jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-08 22:55:16', '2023-03-08 22:55:16'),
(134, 2, 2560, NULL, NULL, '1678273816_unnamed.jpg', NULL, NULL, NULL, NULL, NULL, '2023-03-08 22:55:16', '2023-03-08 22:55:16'),
(135, 1, 2593, NULL, NULL, '1680517198_about.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-03 10:19:58', '2023-04-03 10:19:58'),
(136, 1, 2595, NULL, NULL, '1680772587_about (1).jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-06 09:16:27', '2023-04-10 05:44:35'),
(137, 1, 2597, NULL, NULL, '1680851034_testimonial-2.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-07 07:03:54', '2024-04-09 15:48:57'),
(138, 1, 2598, NULL, NULL, '1681105527_15.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-10 05:45:27', '2023-04-10 05:45:27'),
(139, 1, 2599, NULL, NULL, '1681105622_15.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-10 05:47:02', '2023-04-10 05:47:02'),
(140, 1, 2593, NULL, NULL, '1681112675_15.jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-10 07:44:35', '2023-04-10 07:44:35'),
(141, 1, 2598, NULL, NULL, '1682839476_pexels-photo-5895248.jpeg', NULL, NULL, NULL, NULL, NULL, '2023-04-30 07:24:36', '2023-04-30 07:24:36'),
(142, 2, 2598, NULL, NULL, '1682839477_Chillout Mashup Music Channel YouTube Thumbnail (5).jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-30 07:24:37', '2023-04-30 07:24:37'),
(143, 3, 2598, NULL, NULL, '1682839477_Chillout Mashup Music Channel YouTube Thumbnail (6).jpg', NULL, NULL, NULL, NULL, NULL, '2023-04-30 07:24:37', '2023-04-30 07:24:37'),
(148, 1, 2651, NULL, NULL, '1686974097_bg-4.jpg', NULL, NULL, NULL, NULL, NULL, '2023-06-17 03:54:57', '2023-06-17 03:55:21'),
(149, 1, 2652, NULL, NULL, '1686981637_image-2.jpg', NULL, NULL, NULL, NULL, NULL, '2023-06-17 05:50:33', '2023-06-17 06:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_video_items`
--

CREATE TABLE `navigation_video_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `nav_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_nepali` varchar(255) DEFAULT NULL,
  `vlink` varchar(255) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `content_nepali` varchar(255) DEFAULT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_types`
--

CREATE TABLE `page_types` (
  `sort` int(10) UNSIGNED NOT NULL,
  `page_type_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_types`
--

INSERT INTO `page_types` (`sort`, `page_type_title`, `created_at`, `updated_at`) VALUES
(1, 'Job', '2020-09-16 03:15:20', '2020-09-16 03:15:20'),
(2, 'Group', '2020-09-16 03:15:20', '2020-09-16 03:15:20'),
(3, 'Photo Gallery', '2020-09-16 03:15:20', '2020-09-16 03:15:20'),
(11, 'Normal', NULL, NULL),
(12, 'Group Jobcategory', NULL, NULL),
(13, 'Group Jobs', NULL, NULL),
(14, 'Video Gallery\r\n', NULL, NULL),
(15, 'Team', NULL, NULL),
(16, 'Group Project', NULL, NULL),
(17, 'Projectdetails', NULL, NULL),
(18, 'Pricing', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_video_items`
--
ALTER TABLE `navigation_video_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_types`
--
ALTER TABLE `page_types`
  ADD PRIMARY KEY (`sort`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2758;

--
-- AUTO_INCREMENT for table `navigation_items`
--
ALTER TABLE `navigation_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `navigation_video_items`
--
ALTER TABLE `navigation_video_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_types`
--
ALTER TABLE `page_types`
  MODIFY `sort` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
