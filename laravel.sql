-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2025 at 02:13 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `heading` text NOT NULL,
  `image` text NOT NULL,
  `alt_tag` text NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `email`, `Password`, `created_at`, `updated_at`) VALUES
(1, 'klm2468nqz', 'admin@mail.com', 'admin@123', '2025-03-18 17:32:20', '2025-03-18 17:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `status` text NOT NULL,
  `slug` text DEFAULT NULL,
  `amenities_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `status`, `slug`, `amenities_type_id`, `created_at`, `updated_at`) VALUES
(5, 'Sumit Maurya', '1', 'sumit-maurya', 3, '2025-07-10 01:40:14', '2025-07-10 01:40:14'),
(6, 'SUMIT', '1', 'sumit', 1, '2025-07-10 01:46:59', '2025-07-10 01:46:59'),
(8, 'admin', '1', 'admin', 5, NULL, NULL),
(9, 'Glow Sign board', '1', 'glow-sign-board', 6, '2025-07-14 06:39:15', '2025-07-14 06:39:15'),
(10, 'Glow Sign board', '1', 'glow-sign-board', 1, '2025-09-25 07:13:18', '2025-09-25 07:13:18'),
(11, 'sunny singh', '1', 'sunny-singh', 4, '2025-09-25 07:13:35', '2025-09-25 07:13:35');

-- --------------------------------------------------------

--
-- Table structure for table `amenities_types`
--

CREATE TABLE `amenities_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities_types`
--

INSERT INTO `amenities_types` (`id`, `name`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'General Services', '1', 'general-services', '2025-04-07 01:47:19', '2025-07-05 03:05:38'),
(3, 'Dining & Food', '1', 'dining-food', '2025-07-04 03:30:54', '2025-07-05 03:06:00'),
(4, 'Guest Comfort', '1', 'guest-comfort', '2025-07-04 03:31:14', '2025-07-05 03:06:19'),
(5, 'Business & Leisure', '1', 'business-leisure', '2025-07-05 03:06:54', '2025-07-05 03:06:54'),
(6, 'Additional Features', '1', 'additional-features', '2025-07-05 03:07:18', '2025-07-05 03:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `author_name` text NOT NULL,
  `blog_name` text NOT NULL,
  `image` text NOT NULL,
  `alt_tag` text NOT NULL,
  `content` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `author_name`, `blog_name`, `image`, `alt_tag`, `content`, `meta_title`, `meta_keyword`, `meta_description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Avni', 'Web Dtesigning Company', '1759140944.jpg', 'static website development for small businesses , Delhi-based static website designers', '<p><strong>Welcome</strong> to Travel Bro: your partner in unforgettable journey We&#39;re passionate about creating unique and memorable journeys that go beyond the normal, exploring new cultures, welcoming the unexpected, and creating unforgettable memories. Founded on March<strong> 3rd, 2025 </strong>our</p>', 'fdsfsdfsd', 'test2  jjjkjk', 'helle o world', 'web-dtesigning-company', 'Active', '2025-09-27 05:53:13', '2025-09-29 04:45:44'),
(3, 'Admin', 'Web Designing Company in Delhi', '1759138503.jpg', 'eCommerce website design in Delhi by First Point Web Design', '<p><strong>Welcome</strong> to Travel Bro: your partner in unforgettable journey We&#39;re passionate about creating unique and memorable journeys that go beyond the normal, exploring new cultures, welcoming the unexpected, and creating unforgettable memories. Founded on March<strong> 3rd, 2025 </strong>our team of committed travel experts has spent years exploring the world, sharing knowledge and expertise to design itineraries that resonate with your passion. Whether you&#39;re looking for a relaxing getaway or an adventure-filled trip, we&#39;ve got the perfect itinerary for you. By choosing Travel Bro, you will experience local expertise, extraordinary service, cost-effective and eco-tourism practices that support local communities and diminish environmental impact.</p>', 'Roasted Beetroot Salad', 'Corportate2', 'Welcome to Travel Bro:', 'web-designing-company-in-delhi', 'Active', '2025-09-29 04:05:03', '2025-09-29 04:05:03'),
(4, 'Kanish', 'Ayurvedic principles for balanced eating', '1759140931.jpg', 'static website development for small businesses , Delhi-based static website designers', '<p>Welcome to Travel Bro: your partner in unforgettable journey We&#39;re passionate about creating unique and...</p>', 'Roasted Beetroot Salad', 'Corportate2', 'Welcome to Travel Bro: your partner in unforgettable journey We\'re passionate about creating unique and...', 'ayurvedic-principles-for-balanced-eating', 'Active', '2025-09-29 04:45:31', '2025-09-29 04:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `firstname`, `lastname`, `image`, `email`, `phone`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(3, 'USER-03', 'ritik', 'Kumar', '1758871361.jpeg', 'test@gmail.com', '58495445221', '121', 'Vendor', 'Active', '2025-04-11 18:23:39', '2025-09-26 01:52:41'),
(13, 'USER-04', 'admin', 'test', '1758871352.jpg', 'manishaniketbro@gmail.com', '4125789632', '123', 'Vendor', 'Inactive', '2025-05-22 05:48:12', '2025-09-26 01:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `htl_amenities_data`
--

CREATE TABLE `htl_amenities_data` (
  `id` int(11) NOT NULL,
  `user_id` char(10) NOT NULL,
  `hotel_id` char(10) NOT NULL,
  `safety_amenities` varchar(500) DEFAULT NULL,
  `common_amentities` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `htl_amenities_data`
--

INSERT INTO `htl_amenities_data` (`id`, `user_id`, `hotel_id`, `safety_amenities`, `common_amentities`, `created_at`, `updated_at`) VALUES
(4, 'USER-03', 'uBObnNOkMR', 'smoke_detector, kitchen, internet', 'heating, kitchen, elevator, intercom, hot_tub', '2025-04-27 12:02:11', '2025-04-27 12:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `htl_booking_data`
--

CREATE TABLE `htl_booking_data` (
  `id` int(11) NOT NULL,
  `user_id` char(10) NOT NULL,
  `hotel_id` char(10) NOT NULL,
  `booking_type_terms` char(1) NOT NULL,
  `policy` char(1) NOT NULL,
  `booking_type` char(1) DEFAULT NULL,
  `per_hour` char(1) NOT NULL,
  `check_out` varchar(30) NOT NULL,
  `check_in` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `htl_booking_data`
--

INSERT INTO `htl_booking_data` (`id`, `user_id`, `hotel_id`, `booking_type_terms`, `policy`, `booking_type`, `per_hour`, `check_out`, `check_in`, `created_at`, `updated_at`) VALUES
(3, 'USER-03', 'uBObnNOkMR', '1', '1', '1', '1', '2025-04-17', '2025-04-01', '2025-04-27 12:02:11', '2025-04-27 12:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `htl_description_data`
--

CREATE TABLE `htl_description_data` (
  `id` int(11) NOT NULL,
  `user_id` char(10) NOT NULL,
  `hotel_id` char(10) NOT NULL,
  `listing_name` varchar(100) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `htl_description_data`
--

INSERT INTO `htl_description_data` (`id`, `user_id`, `hotel_id`, `listing_name`, `summary`, `created_at`, `updated_at`) VALUES
(14, 'USER-03', 'uBObnNOkMR', 'my listing', 'i am testing', '2025-04-27 12:02:11', '2025-04-27 12:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `htl_detail_data`
--

CREATE TABLE `htl_detail_data` (
  `id` int(11) NOT NULL,
  `user_id` char(10) NOT NULL,
  `hotel_id` char(10) NOT NULL,
  `about_place` varchar(500) NOT NULL,
  `great_place` varchar(500) NOT NULL,
  `guest_place` varchar(500) NOT NULL,
  `guest_interect` varchar(500) DEFAULT NULL,
  `other_things` varchar(500) DEFAULT NULL,
  `other_things1` varchar(500) DEFAULT NULL,
  `around_things` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `htl_detail_data`
--

INSERT INTO `htl_detail_data` (`id`, `user_id`, `hotel_id`, `about_place`, `great_place`, `guest_place`, `guest_interect`, `other_things`, `other_things1`, `around_things`, `created_at`, `updated_at`) VALUES
(13, 'USER-03', 'uBObnNOkMR', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', '2025-04-27 12:02:11', '2025-04-27 12:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `htl_location_data`
--

CREATE TABLE `htl_location_data` (
  `id` int(11) NOT NULL,
  `user_id` char(10) NOT NULL,
  `hotel_id` char(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin_code` char(10) NOT NULL,
  `map_url` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `htl_location_data`
--

INSERT INTO `htl_location_data` (`id`, `user_id`, `hotel_id`, `country`, `address1`, `address2`, `city`, `state`, `pin_code`, `map_url`, `created_at`, `updated_at`) VALUES
(12, 'USER-03', 'uBObnNOkMR', '1', 'meethapur', 'meethapur', 'Orai', 'Delhi', '110044', NULL, '2025-04-27 12:02:11', '2025-04-27 12:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `htl_photo_data`
--

CREATE TABLE `htl_photo_data` (
  `id` int(11) NOT NULL,
  `user_id` char(10) NOT NULL,
  `hotel_id` char(10) NOT NULL,
  `images` varchar(500) NOT NULL,
  `videos` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `htl_photo_data`
--

INSERT INTO `htl_photo_data` (`id`, `user_id`, `hotel_id`, `images`, `videos`, `created_at`, `updated_at`) VALUES
(2, 'USER-03', 'uBObnNOkMR', 'BCSL-045.jpg', 'BCSL-045.pdf', '2025-04-27 12:02:11', '2025-04-27 12:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `htl_pricing_data`
--

CREATE TABLE `htl_pricing_data` (
  `id` int(11) NOT NULL,
  `user_id` char(10) NOT NULL,
  `hotel_id` char(10) NOT NULL,
  `price` char(20) NOT NULL,
  `currency` char(20) NOT NULL,
  `additional_pricing` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `htl_pricing_data`
--

INSERT INTO `htl_pricing_data` (`id`, `user_id`, `hotel_id`, `price`, `currency`, `additional_pricing`, `created_at`, `updated_at`) VALUES
(5, 'USER-03', 'uBObnNOkMR', '200', 'usd', 'cleaning_fee, additional_guests', '2025-04-27 12:02:11', '2025-04-27 12:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `htl_room_data`
--

CREATE TABLE `htl_room_data` (
  `id` int(11) NOT NULL,
  `user_id` char(10) NOT NULL,
  `hotel_id` char(10) NOT NULL,
  `king` char(2) NOT NULL,
  `queen` char(2) NOT NULL,
  `double_type` char(2) DEFAULT NULL,
  `sofa_bed` char(2) DEFAULT NULL,
  `single` char(2) DEFAULT NULL,
  `bunk_bed` char(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `htl_room_data`
--

INSERT INTO `htl_room_data` (`id`, `user_id`, `hotel_id`, `king`, `queen`, `double_type`, `sofa_bed`, `single`, `bunk_bed`, `created_at`, `updated_at`) VALUES
(43, 'USER-03', 'uBObnNOkMR', '1', '1', '1', '1', '1', '1', '2025-04-27 12:02:11', '2025-04-27 12:02:11'),
(44, 'USER-03', 'uBObnNOkMR', '1', '1', '1', '1', '1', '1', '2025-04-27 12:02:11', '2025-04-27 12:02:11'),
(45, 'USER-03', 'uBObnNOkMR', '1', '1', '1', '1', '1', '1', '2025-04-27 12:02:11', '2025-04-27 12:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listing_amenities`
--

CREATE TABLE `listing_amenities` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `hotel_id` text DEFAULT NULL,
  `amenity_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_amenities`
--

INSERT INTO `listing_amenities` (`id`, `user_id`, `hotel_id`, `amenity_id`, `created_at`, `updated_at`) VALUES
(12, 'USER-03', 'HOTEL001', 9, '2025-09-26 23:17:34', '2025-09-26 23:17:34'),
(13, 'USER-03', 'HOTEL001', 8, '2025-09-26 23:17:34', '2025-09-26 23:17:34'),
(14, 'USER-03', 'HOTEL001', 5, '2025-09-26 23:17:34', '2025-09-26 23:17:34'),
(15, 'USER-03', 'HOTEL001', 6, '2025-09-26 23:17:34', '2025-09-26 23:17:34'),
(16, 'USER-03', 'HOTEL001', 11, '2025-09-26 23:17:34', '2025-09-26 23:17:34'),
(17, 'USER-03', 'HOTEL016', 9, '2025-09-27 00:42:17', '2025-09-27 00:42:17'),
(18, 'USER-03', 'HOTEL016', 5, '2025-09-27 00:42:17', '2025-09-27 00:42:17'),
(19, 'USER-03', 'HOTEL016', 11, '2025-09-27 00:42:17', '2025-09-27 00:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `listing_basic`
--

CREATE TABLE `listing_basic` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `hotel_id` text DEFAULT NULL,
  `hotel_name` text NOT NULL,
  `hotel_rating` text NOT NULL,
  `hotel_owner_name` text NOT NULL,
  `hotel_designation` text NOT NULL,
  `hotel_primary_no` text NOT NULL,
  `hotel_alternate_no` text NOT NULL,
  `hotel_email` text NOT NULL,
  `hotel_gst_no` text NOT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_basic`
--

INSERT INTO `listing_basic` (`id`, `user_id`, `hotel_id`, `hotel_name`, `hotel_rating`, `hotel_owner_name`, `hotel_designation`, `hotel_primary_no`, `hotel_alternate_no`, `hotel_email`, `hotel_gst_no`, `slug`, `created_at`, `updated_at`) VALUES
(15, 'USER-03', 'HOTEL001', 'Admin', '3', 'Amit', 'Owner', '42455454', '4523453', 'firstpointwebdesign@gmail.com', 'gsss451', 'admin', '2025-09-26 23:16:52', '2025-09-26 23:16:52'),
(16, 'USER-03', 'HOTEL016', 'Admin test', '5', 'Amit', 'Owner erf', '42455454', '4523453', 'childeyedoc@gmail.com', 'gsss451', 'admin-test', '2025-09-27 00:41:50', '2025-09-27 00:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `listing_description`
--

CREATE TABLE `listing_description` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `hotel_id` text DEFAULT NULL,
  `property_type` int(11) NOT NULL,
  `room_type` int(11) NOT NULL,
  `max_guests` text NOT NULL,
  `room_sq_ft` text NOT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_description`
--

INSERT INTO `listing_description` (`id`, `user_id`, `hotel_id`, `property_type`, `room_type`, `max_guests`, `room_sq_ft`, `bedrooms`, `created_at`, `updated_at`) VALUES
(4, 'USER-03', 'HOTEL001', 1, 7, '4', '12000', NULL, '2025-09-26 23:17:04', '2025-09-26 23:17:04'),
(5, 'USER-03', 'HOTEL016', 1, 6, '4', '1200', NULL, '2025-09-27 00:42:01', '2025-09-27 00:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `listing_locations`
--

CREATE TABLE `listing_locations` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `hotel_id` text DEFAULT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pinCode` text NOT NULL,
  `map_url` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_locations`
--

INSERT INTO `listing_locations` (`id`, `user_id`, `hotel_id`, `address1`, `address2`, `city`, `state`, `pinCode`, `map_url`, `created_at`, `updated_at`) VALUES
(3, 'USER-03', 'HOTEL001', 'G-55 (Basement), Masjid Moth, Greater Kailash - II, New Delhi 110048, INDIA', 'gk-3 majid moth', 'South Delhi', 'Delhi', '110019', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.108750205683!2d77.23410747602122!3d28.53645078843644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce22d6aaaaaf3%3A0xbf9b29baf410d046!2sFirst%20Point%20Web%20Design!5e0!3m2!1sen!2sin!4v1751028861226!5m2!1sen!2sin', '2025-09-26 23:17:24', '2025-09-26 23:17:24'),
(4, 'USER-03', 'HOTEL016', 'G-55 (Basement), Masjid Moth, Greater Kailash - II, New Delhi 110048, INDIA', 'gk-3 majid moth', 'South Delhi', 'Delhi', '110048', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1752.821751131367!2d77.28196516783002!3d28.52037165353564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce14b88f7e105%3A0x85d588a59b168daa!2sD-52%2C+Pocket+D%2C+Okhla+Phase+I%2C+Okhla+Industrial+Area%2C+New+Delhi%2C+Delhi+110020%2C+India!5e0!3m2!1sen!2sus!4v1509520881892', '2025-09-27 00:42:10', '2025-09-27 00:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `listing_photos`
--

CREATE TABLE `listing_photos` (
  `id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `hotel_id` text DEFAULT NULL,
  `photo` text NOT NULL,
  `multi_photo` text DEFAULT NULL,
  `video_link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_photos`
--

INSERT INTO `listing_photos` (`id`, `user_id`, `hotel_id`, `photo`, `multi_photo`, `video_link`, `created_at`, `updated_at`) VALUES
(4, 'USER-03', 'HOTEL001', '1758948494__logo interior (1).png', '\"[\\\"1758948494_2150063040.jpg\\\",\\\"1758948494_client-logo-1753442698-0.jpg\\\"]\"', 'https://www.youtube.com/watch?v=R5AB5kJu174', '2025-09-26 23:18:14', '2025-09-26 23:18:14'),
(5, 'USER-03', 'HOTEL016', '1758953555_hdfc.png', '\"[\\\"1758953555_client-logo-1753442698-0.jpg\\\",\\\"1758953555_WhatsApp Image 2025-09-20 at 12.16.18 PM (1).jpeg\\\"]\"', 'https://www.youtube.com/watch?v=R5AB5kJu174', '2025-09-27 00:42:35', '2025-09-27 00:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `listing_policies`
--

CREATE TABLE `listing_policies` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `hotel_id` text NOT NULL,
  `cancel_policy` text NOT NULL,
  `policy_policy` text NOT NULL,
  `check_in_time` text NOT NULL,
  `check_out_time` text NOT NULL,
  `advance` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_policies`
--

INSERT INTO `listing_policies` (`id`, `user_id`, `hotel_id`, `cancel_policy`, `policy_policy`, `check_in_time`, `check_out_time`, `advance`, `created_at`, `updated_at`) VALUES
(1, 'USER-03', 'HOTEL001', '<ul>\r\n	<li>Hello World</li>\r\n	<li>First World</li>\r\n</ul>', '<ul>\r\n	<li>Cancel Policy</li>\r\n	<li>Hello world</li>\r\n</ul>', '11:00', '23:00', '10%', '2025-09-27 00:37:04', '2025-09-27 00:37:04'),
(2, 'USER-03', 'HOTEL016', '<ol>\r\n	<li>hii</li>\r\n	<li>why</li>\r\n	<li>how</li>\r\n</ol>', '<ol>\r\n	<li>hello</li>\r\n	<li>how&nbsp;</li>\r\n	<li>you</li>\r\n</ol>', '11:50', '17:56', '10%', '2025-09-27 00:50:15', '2025-09-27 00:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `listing_pricings`
--

CREATE TABLE `listing_pricings` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `hotel_id` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `currency` text NOT NULL DEFAULT 'INR (₹)',
  `extra_guests` decimal(10,2) DEFAULT NULL,
  `festive_rates` text DEFAULT NULL,
  `group_discount` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listing_pricings`
--

INSERT INTO `listing_pricings` (`id`, `user_id`, `hotel_id`, `price`, `currency`, `extra_guests`, `festive_rates`, `group_discount`, `created_at`, `updated_at`) VALUES
(1, 'USER-03', 'HOTEL001', 849.00, 'INR (₹)', 200.00, '10%', '20%', '2025-09-26 23:19:36', '2025-09-26 23:19:36'),
(2, 'USER-03', 'HOTEL016', 44999.00, 'INR (₹)', 300.00, '10%', '30%', '2025-09-27 00:49:21', '2025-09-27 00:49:21');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2025_04_07_062325_create_admin_table', 2),
(6, '2025_04_07_061305_create_customers_table', 3),
(7, '2025_04_07_071217_create_amenities_types_table', 4),
(8, '2025_04_07_072019_create_amenities_table', 5),
(9, '2025_06_26_065800_create_property_categories_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_categories`
--

CREATE TABLE `property_categories` (
  `id` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `status` text NOT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_categories`
--

INSERT INTO `property_categories` (`id`, `name`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1', 'admin', '2025-07-03 02:34:25', '2025-07-04 01:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` text NOT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `name`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Luxury Room', '1', 'luxury-room', '2025-07-05 02:18:29', '2025-07-05 02:18:29'),
(2, 'Deluxe Room', '1', 'deluxe-room', '2025-07-05 02:25:28', '2025-07-05 02:25:28'),
(3, 'Double Deluxe Room', '1', 'double-deluxe-room', '2025-07-05 02:26:02', '2025-07-05 02:26:02'),
(4, 'Twin Deluxe Room', '1', 'twin-deluxe-room', '2025-07-05 02:26:29', '2025-07-05 02:26:29'),
(5, 'Superior Room', '1', 'superior-room', '2025-07-05 02:26:53', '2025-07-05 02:26:53'),
(6, 'Single Room', '1', 'single-room', '2025-07-05 02:27:25', '2025-07-05 02:27:25'),
(7, 'Family Suite Room', '1', 'family-suite-room', '2025-07-05 02:27:46', '2025-07-05 02:27:46'),
(8, 'Family Room', '1', 'family-room', '2025-07-05 02:28:52', '2025-07-05 02:28:52'),
(9, 'Presidential Suite Room', '1', 'presidential-suite-room', '2025-07-05 02:30:01', '2025-07-05 02:30:01'),
(10, 'Standard Room', '1', 'standard-room', '2025-07-05 02:30:27', '2025-07-05 02:30:27'),
(11, 'Other Room', '1', 'other-room', '2025-07-05 02:30:42', '2025-07-05 02:30:42');

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
('bBj1fDc6gCaa3fRuUFcTKy5sqfZAUcnDPsOgoqM2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3ZlbmRvci9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoic09nOVIwdTcydXNwWVpMZGpFV05WUG1udEVnTVNTRDFCeHNpZDZVUCI7czoxMzoiY3VzdG9tZXJMb2dpbiI7YjoxO3M6ODoidXNlckRhdGEiO086ODoic3RkQ2xhc3MiOjEyOntzOjI6ImlkIjtpOjM7czo3OiJ1c2VyX2lkIjtzOjc6IlVTRVItMDMiO3M6OToiZmlyc3RuYW1lIjtzOjU6InJpdGlrIjtzOjg6Imxhc3RuYW1lIjtzOjU6Ikt1bWFyIjtzOjU6ImltYWdlIjtOO3M6NToiZW1haWwiO3M6MTQ6InRlc3RAZ21haWwuY29tIjtzOjU6InBob25lIjtzOjExOiI1ODQ5NTQ0NTIyMSI7czo4OiJwYXNzd29yZCI7czozOiIxMjEiO3M6NDoicm9sZSI7czo2OiJWZW5kb3IiO3M6Njoic3RhdHVzIjtzOjY6IkFjdGl2ZSI7czoxMDoiY3JlYXRlZF9hdCI7czoxOToiMjAyNS0wNC0xMSAyMzo1MzozOSI7czoxMDoidXBkYXRlZF9hdCI7czoxOToiMjAyNS0wNC0xMSAyMzo1MzozOSI7fXM6MTE6InZlbmRvckxvZ2luIjtiOjE7fQ==', 1744441216),
('bU5APt7EkRkKJSE8daSRKmHTirQdKHsA2VREd19Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6Ik03VzVCbG84aTJPMDRGNW52SGd2Q2NjVU1yaHhyMVI5V1A5RmxwcksiO30=', 1744481106),
('fYdUvcTJDHHDiKA6jtbspwwnpRG7sLlnE1wAEkbB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IlBpeXJ1SzVIYWs1UjhraExJVW1oZnNhcXFrWFZKQ0VjTzVTRXdTUTgiO30=', 1744469120);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'facebook', '# 9958396367', '2025-09-30 02:24:54', '2025-09-30 02:24:54'),
(2, 'twitter', 'https://twitter.com/firstpointwebs', '2025-09-30 02:24:54', '2025-09-30 02:24:54'),
(3, 'linkedin', 'https://www.linkedin.com/company/firstpointwebdesign/', '2025-09-30 02:24:54', '2025-09-30 02:24:54'),
(4, 'pinterest', 'https://www.pinterest.com/gofindlocal', '2025-09-30 02:24:54', '2025-09-30 02:24:54'),
(5, 'youtube', 'https://www.youtube.com/user/firstpointcreations', '2025-09-30 02:24:54', '2025-09-30 02:24:54'),
(6, 'instagram', 'https://www.instagram.com/firstpointcreations/', '2025-09-30 02:24:54', '2025-09-30 02:24:54');

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
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amenities_amenities_type_id_foreign` (`amenities_type_id`);

--
-- Indexes for table `amenities_types`
--
ALTER TABLE `amenities_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `htl_amenities_data`
--
ALTER TABLE `htl_amenities_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htl_booking_data`
--
ALTER TABLE `htl_booking_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htl_description_data`
--
ALTER TABLE `htl_description_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htl_detail_data`
--
ALTER TABLE `htl_detail_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htl_location_data`
--
ALTER TABLE `htl_location_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htl_photo_data`
--
ALTER TABLE `htl_photo_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htl_pricing_data`
--
ALTER TABLE `htl_pricing_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htl_room_data`
--
ALTER TABLE `htl_room_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_amenities`
--
ALTER TABLE `listing_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_basic`
--
ALTER TABLE `listing_basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_description`
--
ALTER TABLE `listing_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_locations`
--
ALTER TABLE `listing_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_photos`
--
ALTER TABLE `listing_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_policies`
--
ALTER TABLE `listing_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_pricings`
--
ALTER TABLE `listing_pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `property_categories`
--
ALTER TABLE `property_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `amenities_types`
--
ALTER TABLE `amenities_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `htl_amenities_data`
--
ALTER TABLE `htl_amenities_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `htl_booking_data`
--
ALTER TABLE `htl_booking_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `htl_description_data`
--
ALTER TABLE `htl_description_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `htl_detail_data`
--
ALTER TABLE `htl_detail_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `htl_location_data`
--
ALTER TABLE `htl_location_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `htl_photo_data`
--
ALTER TABLE `htl_photo_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `htl_pricing_data`
--
ALTER TABLE `htl_pricing_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `htl_room_data`
--
ALTER TABLE `htl_room_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listing_amenities`
--
ALTER TABLE `listing_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `listing_basic`
--
ALTER TABLE `listing_basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `listing_description`
--
ALTER TABLE `listing_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `listing_locations`
--
ALTER TABLE `listing_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `listing_photos`
--
ALTER TABLE `listing_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `listing_policies`
--
ALTER TABLE `listing_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `listing_pricings`
--
ALTER TABLE `listing_pricings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `property_categories`
--
ALTER TABLE `property_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amenities`
--
ALTER TABLE `amenities`
  ADD CONSTRAINT `amenities_amenities_type_id_foreign` FOREIGN KEY (`amenities_type_id`) REFERENCES `amenities_types` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
