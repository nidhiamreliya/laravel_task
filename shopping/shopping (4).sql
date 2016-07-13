-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2016 at 09:50 AM
-- Server version: 5.5.49
-- PHP Version: 5.6.22-1+donate.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'ciZWMaUto3QA50Ydj7xrEJaxAK6dJg3Y', 1, '2016-06-27 00:17:32', '2016-06-27 00:17:32', '2016-06-27 00:17:32'),
(2, 6, 'JOIgRpFKbRvei9ZmP0MzEWsz0X2BBJ5y', 1, '2016-06-28 23:03:21', '2016-06-28 23:03:21', '2016-06-28 23:03:21'),
(3, 6, 'I4g3JrxxuCJmzJimEm4SGiejnCoRU4Tq', 1, '2016-06-30 07:08:37', '2016-06-30 07:08:37', '2016-06-30 07:08:37'),
(4, 7, '6dNMGZsjZu31isHRIlVGe4LRtCT3bLjH', 1, '2016-06-30 07:10:48', '2016-06-30 07:10:48', '2016-06-30 07:10:48'),
(5, 8, '7xpgjVkUxqF2RV2SXgZu2yIZjXx09GuX', 1, '2016-06-30 07:29:24', '2016-06-30 07:29:24', '2016-06-30 07:29:24'),
(6, 9, 'YEXBX4Ku2g4LxspuLKypvQH6da8a5hno', 1, '2016-06-30 07:31:56', '2016-06-30 07:31:56', '2016-06-30 07:31:56'),
(7, 10, '5EPryeyQWmgxCvUm6fBqAFFs1xpliMCy', 1, '2016-06-30 23:54:05', '2016-06-30 23:54:05', '2016-06-30 23:54:05'),
(8, 11, 'tImPhLG1GekOI5V7TJcwPV713p7yr6DY', 1, '2016-07-01 00:07:30', '2016-07-01 00:07:30', '2016-07-01 00:07:30'),
(9, 12, 'vBmG5st8HxQyM8TZYD4uAJWkJGEqhTXJ', 1, '2016-07-01 00:21:42', '2016-07-01 00:21:42', '2016-07-01 00:21:42'),
(10, 13, '6p9ZFqRUmfXLFZsgbb94cRdlDHPuz7lG', 1, '2016-07-01 00:37:13', '2016-07-01 00:37:13', '2016-07-01 00:37:13'),
(11, 14, 'fJaPEdaPoixUhgCkUnelPP5tnFEehi9T', 1, '2016-07-01 00:39:11', '2016-07-01 00:39:11', '2016-07-01 00:39:11'),
(12, 15, 'MUKoYMSd5zv2Bts0HjFAwfooZQuDwhmY', 1, '2016-07-01 01:53:34', '2016-07-01 01:53:34', '2016-07-01 01:53:34'),
(13, 16, 'HEG9zDMCNhdSsf9uneenOI7eAokx7Qmi', 1, '2016-07-01 02:15:23', '2016-07-01 02:15:23', '2016-07-01 02:15:23'),
(14, 17, 'HNcSKzULMUdFCVPGqSbzXzzkvbSyGYxN', 1, '2016-07-01 02:18:59', '2016-07-01 02:18:59', '2016-07-01 02:18:59'),
(15, 18, 'z6vxerrZigJV7lWNH79U2JDzK2vaumrv', 1, '2016-07-01 02:22:56', '2016-07-01 02:22:56', '2016-07-01 02:22:56'),
(16, 19, 'JUaKikeDTOVgaQAMrCmheRS8SZOXvbmQ', 1, '2016-07-01 02:26:40', '2016-07-01 02:26:40', '2016-07-01 02:26:40'),
(17, 20, 'XgR3UgldANPcPoTbepytpkuajCfp6aVu', 1, '2016-07-04 06:14:04', '2016-07-04 06:14:03', '2016-07-04 06:14:04'),
(18, 21, '2FY5GlZlPptkTICo2xJxVYWhBJ404xoB', 1, '2016-07-06 04:03:42', '2016-07-06 04:03:42', '2016-07-06 04:03:42'),
(19, 22, '2WIZm8zM2rp5sfhGNHYxMMi3c2Yutk1E', 1, '2016-07-06 07:28:53', '2016-07-06 07:28:53', '2016-07-06 07:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_user_id_foreign` (`user_id`),
  KEY `cart_product_id_foreign` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `session_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 1, 'b16cd4f99cbc42e5801ef3ca98e7f811be793b51', 69, 1, '2016-07-06 05:16:40', '2016-07-06 05:16:40'),
(3, 1, 'b16cd4f99cbc42e5801ef3ca98e7f811be793b51', 32, 1, '2016-07-06 05:17:30', '2016-07-06 05:17:30'),
(6, 22, 'b16cd4f99cbc42e5801ef3ca98e7f811be793b51', 31, 1, '2016-07-06 07:24:51', '2016-07-06 07:28:53'),
(7, 22, 'b16cd4f99cbc42e5801ef3ca98e7f811be793b51', 34, 1, '2016-07-06 07:24:57', '2016-07-06 07:28:53'),
(15, 15, '7584545e425e3d94508e16579612b9d42c68b158', 72, 2, '2016-07-08 01:50:39', '2016-07-08 02:12:36'),
(16, 15, '7584545e425e3d94508e16579612b9d42c68b158', 71, 1, '2016-07-08 02:10:07', '2016-07-08 02:12:36'),
(17, 16, '7584545e425e3d94508e16579612b9d42c68b158', 30, 1, '2016-07-08 02:16:49', '2016-07-08 02:17:03'),
(18, 1, '7584545e425e3d94508e16579612b9d42c68b158', 30, 1, '2016-07-08 05:23:25', '2016-07-08 05:23:25'),
(19, NULL, '0890ce6ad09432e5ccb1f033152130ff784e68c0', 60, 1, '2016-07-11 01:11:24', '2016-07-11 01:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Rings', 1, 'rings', NULL, '2016-07-07 04:25:21'),
(2, 'Nacklaces', 1, 'nacklaces', NULL, '2016-07-07 04:25:24'),
(3, 'Bangles', 1, 'bangles', NULL, '2016-07-07 04:25:28'),
(10, 'Earings', 1, 'earings', NULL, '2016-07-07 04:25:32'),
(13, 'Bracelet', 1, 'bracelet', NULL, '2016-07-07 04:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_07_02_230147_migration_cartalyst_sentinel', 1),
('2016_06_18_062202_create_category_table', 2),
('2016_06_20_042751_products', 2),
('2016_06_20_050558_cart', 2),
('2016_06_20_050610_orders', 2),
('2016_06_20_050618_order_details', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `order_date` date NOT NULL,
  `sh_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NotDelivered',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `sh_address`, `amount`, `delivery_date`, `status`, `created_at`, `updated_at`) VALUES
(9, 15, '2016-07-06', 'address,rajkot,123456,gujrat,india', 50000.00, '2016-07-08', 'canceled', '2016-07-06 04:37:58', '2016-07-08 07:34:27'),
(10, 17, '2016-07-06', 'address line ,rajkot,123456,gujrat,india', 42000.00, '2016-07-08', 'delivered', '2016-07-06 07:17:00', '2016-07-08 07:34:32'),
(11, 16, '2016-07-08', 'Rajkot,Rajkot,360000,gujrat,india', 217100.00, NULL, 'NotDelivered', '2016-07-08 01:11:28', '2016-07-08 01:11:28'),
(12, 17, '2016-07-08', 'address line ,rajkot,123456,gujrat,india', 60000.00, NULL, 'NotDelivered', '2016-07-08 05:27:18', '2016-07-08 05:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(12, 9, 31, 1, '2016-07-06 04:37:58', '2016-07-06 04:37:58'),
(13, 10, 72, 10, '2016-07-06 07:17:00', '2016-07-06 07:17:00'),
(14, 10, 35, 1, '2016-07-06 07:17:00', '2016-07-06 07:17:00'),
(15, 11, 31, 4, '2016-07-08 01:11:28', '2016-07-08 01:11:28'),
(16, 11, 37, 3, '2016-07-08 01:11:28', '2016-07-08 01:11:28'),
(17, 11, 72, 1, '2016-07-08 01:11:28', '2016-07-08 01:11:28'),
(18, 11, 33, 1, '2016-07-08 01:11:28', '2016-07-08 01:11:28'),
(19, 11, 51, 1, '2016-07-08 01:11:28', '2016-07-08 01:11:28'),
(20, 12, 30, 1, '2016-07-08 05:27:18', '2016-07-08 05:27:18'),
(21, 12, 33, 1, '2016-07-08 05:27:18', '2016-07-08 05:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=105 ;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(7, 1, 's4eyQKs8I1HpbI0191zrBzNrYU2mbojv', '2016-06-27 00:44:04', '2016-06-27 00:44:04'),
(8, 1, 'wB12E3AFYAvrhZAIvv9eKjkw0T1dgjU0', '2016-06-27 01:15:41', '2016-06-27 01:15:41'),
(9, 1, 'dKfgtou4dByBi06XjiG1LLztxqVQby2f', '2016-06-27 01:16:38', '2016-06-27 01:16:38'),
(10, 1, 'CuYrd8V1Rpz2XsR9yysYXUZVEzxLPPSi', '2016-06-27 22:39:07', '2016-06-27 22:39:07'),
(11, 1, 'cp7arnjZJOL2w5m7rnFza7QpQpg9wpm6', '2016-06-28 00:27:49', '2016-06-28 00:27:49'),
(14, 1, 'gFTV40DGgIN9sXpXM7u1TjKgWUVvXxWr', '2016-06-29 04:35:43', '2016-06-29 04:35:43'),
(15, 1, 'udIXnRXuf5SblAe3LXVK81VSWPMxG7vV', '2016-06-29 07:02:48', '2016-06-29 07:02:48'),
(16, 1, 'ziffbwQ24u80yWLoGoLDkh1tpsPubrZ6', '2016-06-29 22:51:25', '2016-06-29 22:51:25'),
(17, 1, 'NzFbMuJAtcmV8dH8WcXpqNrfZxnwBlSQ', '2016-07-01 00:58:21', '2016-07-01 00:58:21'),
(18, 14, 'vY1V7i9n1pxhJBFgddywo0yeLpP6xQcs', '2016-07-01 01:50:14', '2016-07-01 01:50:14'),
(21, 19, 'r8qjoPU2tyowl5t4l2Emak2nVZUDhXvk', '2016-07-01 02:26:40', '2016-07-01 02:26:40'),
(23, 15, 'c7kPwtkqx4JTXaJOOYApOPVRYNShuQ9G', '2016-07-02 03:39:18', '2016-07-02 03:39:18'),
(27, 16, 'yYDBSMtd1PwDrGmseTkEUBGHHjRwfr4D', '2016-07-02 05:28:51', '2016-07-02 05:28:51'),
(32, 15, '57sebOC7EhqPOJdck5GqkEPqGtyZxfko', '2016-07-04 02:30:28', '2016-07-04 02:30:28'),
(33, 15, 'uISHYfmbcfKysoWEPzVNnrV5ap2s1iJQ', '2016-07-04 02:30:58', '2016-07-04 02:30:58'),
(34, 15, 'ZP3FyPrYbSK9dxxChHRMnLBAkag2Np6y', '2016-07-04 02:31:28', '2016-07-04 02:31:28'),
(35, 16, '6ac5NVzlWGSRQFsQV7HnddbDK76c3tT7', '2016-07-04 03:38:00', '2016-07-04 03:38:00'),
(36, 16, '5dH0gxgXlZ5LaAw8n6rh6ldYk4QlbRGv', '2016-07-04 03:39:21', '2016-07-04 03:39:21'),
(37, 16, 'svvhSmQv910gB4eRvsEjuM1ekkBmi2cF', '2016-07-04 03:40:14', '2016-07-04 03:40:14'),
(38, 16, 'qVJPE3m9iSQyOuB3hE8ZZrKOVn7J7UEr', '2016-07-04 03:40:34', '2016-07-04 03:40:34'),
(39, 16, 'OpXhxW4F4y8H4nZryEIYTaEP3dQQbqPi', '2016-07-04 03:42:02', '2016-07-04 03:42:02'),
(44, 16, 'Q4yTccIMRiGId1LqfxI0TAQmdqzIiCzL', '2016-07-04 04:03:28', '2016-07-04 04:03:28'),
(51, 16, 'HlnQXra5d3Qj6rmhXtLZlVq0j9oiok3G', '2016-07-04 04:31:19', '2016-07-04 04:31:19'),
(54, 15, 'TfUwv4vbnDEzfpvU3JQVFKC6yP0hNttX', '2016-07-04 04:48:23', '2016-07-04 04:48:23'),
(59, 16, 'mH2IeRmRBx6F5vuXA2s7kbqPQ9Q3RpMM', '2016-07-04 06:24:10', '2016-07-04 06:24:10'),
(62, 18, 'ZFSYoyHy8Hu6tVeoTB5QAImBw4Gt8kpY', '2016-07-05 01:14:55', '2016-07-05 01:14:55'),
(63, 1, 'HRCp7HvWGaa2jWtwoEOPBiiybThuVYHu', '2016-07-05 03:58:15', '2016-07-05 03:58:15'),
(65, 1, '0e78dyQrFUtkDfVkIKzCjwGLCwr0Zko9', '2016-07-05 06:29:54', '2016-07-05 06:29:54'),
(67, 16, 'klDubqpk5YD4rb5PQJrCFlNRsB1cFWsN', '2016-07-06 01:38:47', '2016-07-06 01:38:47'),
(68, 16, '0zndc9nfIgkAGZCBzLncJ2qgTyzPuAsf', '2016-07-06 01:39:24', '2016-07-06 01:39:24'),
(72, 1, 'aWvhnAXIqYQOBPhfiCzG42GPOstyOP0f', '2016-07-06 05:00:25', '2016-07-06 05:00:25'),
(75, 1, 'OctgotGfKZHfYsh92ONYs9JBVIiLHCjQ', '2016-07-06 05:42:26', '2016-07-06 05:42:26'),
(77, 1, '3MPskoC9dVVkCpGJqukSXlViTlVxXfY2', '2016-07-07 01:13:52', '2016-07-07 01:13:52'),
(78, 1, '6gzoovMmz7YaGUcdyTn6ESOxgRUZTQt5', '2016-07-07 02:00:43', '2016-07-07 02:00:43'),
(83, 1, '2vtUZp6TFVG7tZsOLqYeMaWUAfpzlP6s', '2016-07-07 04:29:55', '2016-07-07 04:29:55'),
(84, 15, 'anMfESVGwGi8gxwQzPdp94wXqVkNaMoV', '2016-07-07 07:11:51', '2016-07-07 07:11:51'),
(94, 16, 'h7GufaxuhNksp4sNf5ejG3ZQGwbV17Ur', '2016-07-08 02:17:03', '2016-07-08 02:17:03'),
(95, 1, 'c1DFQnGPR2CyiggPWKs8oOOLbHhRpztK', '2016-07-08 05:22:26', '2016-07-08 05:22:26'),
(97, 1, 'C7cmKdr5N39AADuTRycgFgIcib9yBwAT', '2016-07-08 05:29:49', '2016-07-08 05:29:49'),
(98, 1, 'HTTyMGpPVwKrlq5cphIErN6Cx2z47OP6', '2016-07-08 07:08:59', '2016-07-08 07:08:59'),
(101, 1, 'ODBGlqNZVY1UQZ4XAyktlafnvlGBVWJz', '2016-07-11 00:52:36', '2016-07-11 00:52:36'),
(102, 1, '19v40KBuwchZHO56S27sCsVDJdXPwig1', '2016-07-11 04:03:16', '2016-07-11 04:03:16'),
(103, 1, 'Ma5zKgXJ76qtA7EPxQ7xK4mmknLium0I', '2016-07-11 04:11:56', '2016-07-11 04:11:56'),
(104, 1, 'iT9EUmo58NXTlKAPTQY5VRFxzAaM03qF', '2016-07-11 07:04:17', '2016-07-11 07:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `price`, `description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(29, 'nacklace110', 2, 100.00, '18 carret gold12', 'nacklace110.jpg', 0, 'nacklace110', NULL, '2016-07-11 00:52:44'),
(30, 'nacklace111', 2, 50000.00, '18 carret gold with diomands', 'nacklace111.jpg', 1, 'nacklace111', NULL, '2016-07-07 04:25:24'),
(31, 'nacklace112', 2, 500.00, '18 carret diomands', 'nacklace112.png', 1, 'nacklace112', NULL, '2016-07-10 23:26:39'),
(32, 'nacklace113', 2, 50000.00, 'jfhfjfjf', 'nacklace113.jpg', 1, 'nacklace113', NULL, '2016-07-07 04:25:24'),
(33, 'bangle147', 3, 10000.00, 'gold bangles', 'bangle147.jpg', 1, 'bangle147', NULL, '2016-07-07 04:25:28'),
(34, 'bangle148', 3, 20000.00, '18 carret gold', 'bangle148.jpg', 1, 'bangle148', NULL, '2016-07-07 04:25:28'),
(35, 'bangle149', 3, 40000.00, '18 carret gold with pink dimonds', 'bangle149.jpg', 1, 'bangle149', NULL, '2016-07-07 04:25:28'),
(36, 'earing110', 10, 2000.00, 'diomand', 'earing110.jpg', 1, 'earing110', NULL, '2016-07-07 04:25:32'),
(37, 'earing115', 10, 300.00, 'real diomands', 'earing115.jpg', 1, 'earing115', NULL, '2016-07-07 04:25:32'),
(38, 'earing118', 10, 3000.00, 'diomand with blue', 'earing118.jpg', 1, 'earing118', NULL, '2016-07-07 04:25:32'),
(41, 'nacklace852', 2, 1400.00, 'diomand 50', 'nacklace852.jpg', 1, 'nacklace852', NULL, '2016-07-07 04:25:24'),
(42, 'nacklace853', 2, 8000.00, 'diamonds with white breds', 'nacklace853.jpg', 1, 'nacklace853', NULL, '2016-07-07 04:25:24'),
(43, 'nacklace', 2, 8000.00, 'diomand with pink', 'nacklace.jpg', 1, 'nacklace', NULL, '2016-07-07 04:25:24'),
(50, 'bracelat01', 13, 500.00, 'gold', 'bracelat01.JPG', 1, 'bracelat01', NULL, '2016-07-07 04:25:36'),
(51, 'bracelet02', 13, 6000.00, 'golgplated', 'bracelet02.jpg', 1, 'bracelet02', NULL, '2016-07-07 04:25:36'),
(52, 'bracelet234', 13, 5000.00, 'pink diomands', 'bracelet234.jpg', 1, 'bracelet234', NULL, '2016-07-07 04:25:36'),
(53, 'bracelet40', 13, 5000.00, 'newly', 'bracelet40.jpg', 1, 'bracelet40', NULL, '2016-07-07 04:25:36'),
(55, 'nacklace109', 2, 756.00, 'jdfdjk', 'nacklace109.jpg', 1, 'nacklace109', NULL, '2016-07-07 04:25:24'),
(56, 'nacklaces1236', 2, 1000.00, 'no description', 'nacklaces1236.jpg', 1, 'nacklaces1236', NULL, '2016-07-07 04:25:24'),
(57, 'nacklaces1587', 2, 2000.00, 'no description', 'nacklaces1587.png', 1, 'nacklaces1587', NULL, '2016-07-07 04:25:24'),
(58, 'bangle687', 3, 5000.00, 'no description', 'bangle687.jpg', 1, 'bangle687', NULL, '2016-07-07 04:25:28'),
(59, 'newearing', 10, 400.00, 'none', 'newearing.jpg', 1, 'newearing', NULL, '2016-07-07 04:25:32'),
(60, 'bracelet456', 13, 500.00, 'none', 'bracelet456.jpg', 1, 'bracelet456', NULL, '2016-07-07 04:25:36'),
(61, 'new1458', 13, 500.00, 'none', 'new1458.jpg', 1, 'new1458', NULL, '2016-07-07 04:25:36'),
(66, 'ring1112', 1, 1000.00, 'gold', 'ring1112.png', 1, 'ring1112', NULL, '2016-07-07 04:25:21'),
(67, 'ring888', 1, 2000.00, 'diomand with flower', 'ring888.jpg', 1, 'ring888', NULL, '2016-07-07 04:25:21'),
(68, 'ring110', 1, 2000.00, 'gold with diomand', 'ring110.jpg', 1, 'ring110', NULL, '2016-07-07 04:25:21'),
(69, 'ring785', 1, 300.00, 'silver', 'ring785.jpg', 1, 'ring785', NULL, '2016-07-07 04:25:21'),
(70, 'bracelet4564', 13, 100.00, 'none', 'bracelet4564.jpg', 1, 'bracelet4564', NULL, '2016-07-07 04:25:36'),
(71, 'bracelet5785465', 13, 200.00, 'none', 'bracelet5785465.JPG', 1, 'bracelet5785465', NULL, '2016-07-10 23:42:00'),
(72, 'bracelet57', 13, 200.00, 'none', 'bracelet57.jpg', 1, 'bracelet57', NULL, '2016-07-07 04:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'administratior', NULL, '2016-06-27 05:40:20', '2016-06-27 05:40:20'),
(2, 'Client', 'client', NULL, '2016-06-27 05:40:20', '2016-06-27 05:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-06-27 00:17:32', '2016-06-27 00:17:32'),
(2, 2, '2016-06-28 10:10:52', '2016-06-28 10:10:52'),
(3, 2, '2016-06-29 12:26:41', '2016-06-29 12:26:41'),
(4, 2, '2016-06-29 12:26:41', '2016-06-29 12:26:41'),
(5, 2, '2016-06-29 12:26:55', '2016-06-29 12:26:55'),
(6, 2, '2016-06-30 07:08:37', '2016-06-30 07:08:37'),
(7, 2, '2016-06-30 07:10:48', '2016-06-30 07:10:48'),
(8, 2, '2016-06-30 07:29:24', '2016-06-30 07:29:24'),
(9, 2, '2016-06-30 07:31:56', '2016-06-30 07:31:56'),
(10, 2, '2016-06-30 23:54:05', '2016-06-30 23:54:05'),
(11, 2, '2016-07-01 00:07:30', '2016-07-01 00:07:30'),
(12, 2, '2016-07-01 00:21:42', '2016-07-01 00:21:42'),
(13, 2, '2016-07-01 00:37:13', '2016-07-01 00:37:13'),
(14, 2, '2016-07-01 00:39:11', '2016-07-01 00:39:11'),
(15, 2, '2016-07-01 01:53:34', '2016-07-01 01:53:34'),
(16, 2, '2016-07-01 02:15:23', '2016-07-01 02:15:23'),
(17, 2, '2016-07-01 02:18:59', '2016-07-01 02:18:59'),
(18, 2, '2016-07-01 02:22:56', '2016-07-01 02:22:56'),
(19, 2, '2016-07-01 02:26:40', '2016-07-01 02:26:40'),
(20, 2, '2016-07-04 06:14:04', '2016-07-04 06:14:04'),
(21, 2, '2016-07-06 04:03:42', '2016-07-06 04:03:42'),
(22, 2, '2016-07-06 07:28:53', '2016-07-06 07:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=106 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2016-06-28 23:02:11', '2016-06-28 23:02:11'),
(2, NULL, 'ip', '127.0.0.1', '2016-06-28 23:02:11', '2016-06-28 23:02:11'),
(3, 1, 'user', NULL, '2016-06-28 23:02:11', '2016-06-28 23:02:11'),
(4, NULL, 'global', NULL, '2016-06-29 00:09:12', '2016-06-29 00:09:12'),
(5, NULL, 'ip', '127.0.0.1', '2016-06-29 00:09:12', '2016-06-29 00:09:12'),
(6, 1, 'user', NULL, '2016-06-29 00:09:12', '2016-06-29 00:09:12'),
(7, NULL, 'global', NULL, '2016-06-29 04:35:38', '2016-06-29 04:35:38'),
(8, NULL, 'ip', '127.0.0.1', '2016-06-29 04:35:38', '2016-06-29 04:35:38'),
(9, 1, 'user', NULL, '2016-06-29 04:35:38', '2016-06-29 04:35:38'),
(10, NULL, 'global', NULL, '2016-06-29 07:02:41', '2016-06-29 07:02:41'),
(11, NULL, 'ip', '127.0.0.1', '2016-06-29 07:02:41', '2016-06-29 07:02:41'),
(12, 1, 'user', NULL, '2016-06-29 07:02:41', '2016-06-29 07:02:41'),
(13, NULL, 'global', NULL, '2016-06-29 22:51:17', '2016-06-29 22:51:17'),
(14, NULL, 'ip', '127.0.0.1', '2016-06-29 22:51:17', '2016-06-29 22:51:17'),
(15, 1, 'user', NULL, '2016-06-29 22:51:17', '2016-06-29 22:51:17'),
(16, NULL, 'global', NULL, '2016-07-01 00:58:16', '2016-07-01 00:58:16'),
(17, NULL, 'ip', '127.0.0.1', '2016-07-01 00:58:16', '2016-07-01 00:58:16'),
(18, 1, 'user', NULL, '2016-07-01 00:58:16', '2016-07-01 00:58:16'),
(19, NULL, 'global', NULL, '2016-07-01 01:47:15', '2016-07-01 01:47:15'),
(20, NULL, 'ip', '127.0.0.1', '2016-07-01 01:47:15', '2016-07-01 01:47:15'),
(21, 2, 'user', NULL, '2016-07-01 01:47:15', '2016-07-01 01:47:15'),
(22, NULL, 'global', NULL, '2016-07-01 01:47:21', '2016-07-01 01:47:21'),
(23, NULL, 'ip', '127.0.0.1', '2016-07-01 01:47:21', '2016-07-01 01:47:21'),
(24, 2, 'user', NULL, '2016-07-01 01:47:21', '2016-07-01 01:47:21'),
(25, NULL, 'global', NULL, '2016-07-01 01:50:00', '2016-07-01 01:50:00'),
(26, NULL, 'ip', '127.0.0.1', '2016-07-01 01:50:00', '2016-07-01 01:50:00'),
(27, 14, 'user', NULL, '2016-07-01 01:50:00', '2016-07-01 01:50:00'),
(28, NULL, 'global', NULL, '2016-07-01 04:36:56', '2016-07-01 04:36:56'),
(29, NULL, 'ip', '127.0.0.1', '2016-07-01 04:36:56', '2016-07-01 04:36:56'),
(30, 1, 'user', NULL, '2016-07-01 04:36:56', '2016-07-01 04:36:56'),
(31, NULL, 'global', NULL, '2016-07-01 04:47:10', '2016-07-01 04:47:10'),
(32, NULL, 'ip', '127.0.0.1', '2016-07-01 04:47:10', '2016-07-01 04:47:10'),
(33, 1, 'user', NULL, '2016-07-01 04:47:10', '2016-07-01 04:47:10'),
(34, NULL, 'global', NULL, '2016-07-01 04:47:15', '2016-07-01 04:47:15'),
(35, NULL, 'ip', '127.0.0.1', '2016-07-01 04:47:15', '2016-07-01 04:47:15'),
(36, 1, 'user', NULL, '2016-07-01 04:47:15', '2016-07-01 04:47:15'),
(37, NULL, 'global', NULL, '2016-07-01 05:18:47', '2016-07-01 05:18:47'),
(38, NULL, 'ip', '127.0.0.1', '2016-07-01 05:18:47', '2016-07-01 05:18:47'),
(39, 1, 'user', NULL, '2016-07-01 05:18:48', '2016-07-01 05:18:48'),
(40, NULL, 'global', NULL, '2016-07-05 00:51:02', '2016-07-05 00:51:02'),
(41, NULL, 'ip', '127.0.0.1', '2016-07-05 00:51:02', '2016-07-05 00:51:02'),
(42, 15, 'user', NULL, '2016-07-05 00:51:02', '2016-07-05 00:51:02'),
(43, NULL, 'global', NULL, '2016-07-05 01:06:20', '2016-07-05 01:06:20'),
(44, NULL, 'ip', '127.0.0.1', '2016-07-05 01:06:20', '2016-07-05 01:06:20'),
(45, 18, 'user', NULL, '2016-07-05 01:06:20', '2016-07-05 01:06:20'),
(46, NULL, 'global', NULL, '2016-07-05 01:06:27', '2016-07-05 01:06:27'),
(47, NULL, 'ip', '127.0.0.1', '2016-07-05 01:06:27', '2016-07-05 01:06:27'),
(48, 18, 'user', NULL, '2016-07-05 01:06:27', '2016-07-05 01:06:27'),
(49, NULL, 'global', NULL, '2016-07-05 01:06:33', '2016-07-05 01:06:33'),
(50, NULL, 'ip', '127.0.0.1', '2016-07-05 01:06:33', '2016-07-05 01:06:33'),
(51, 18, 'user', NULL, '2016-07-05 01:06:33', '2016-07-05 01:06:33'),
(52, NULL, 'global', NULL, '2016-07-05 03:58:10', '2016-07-05 03:58:10'),
(53, NULL, 'ip', '127.0.0.1', '2016-07-05 03:58:10', '2016-07-05 03:58:10'),
(54, 1, 'user', NULL, '2016-07-05 03:58:10', '2016-07-05 03:58:10'),
(55, NULL, 'global', NULL, '2016-07-05 04:04:11', '2016-07-05 04:04:11'),
(56, NULL, 'ip', '127.0.0.1', '2016-07-05 04:04:12', '2016-07-05 04:04:12'),
(57, 1, 'user', NULL, '2016-07-05 04:04:12', '2016-07-05 04:04:12'),
(58, NULL, 'global', NULL, '2016-07-06 01:36:11', '2016-07-06 01:36:11'),
(59, NULL, 'ip', '127.0.0.1', '2016-07-06 01:36:11', '2016-07-06 01:36:11'),
(60, NULL, 'global', NULL, '2016-07-06 01:36:16', '2016-07-06 01:36:16'),
(61, NULL, 'ip', '127.0.0.1', '2016-07-06 01:36:16', '2016-07-06 01:36:16'),
(62, NULL, 'global', NULL, '2016-07-06 01:36:54', '2016-07-06 01:36:54'),
(63, NULL, 'ip', '127.0.0.1', '2016-07-06 01:36:54', '2016-07-06 01:36:54'),
(64, NULL, 'global', NULL, '2016-07-06 01:37:00', '2016-07-06 01:37:00'),
(65, NULL, 'ip', '127.0.0.1', '2016-07-06 01:37:00', '2016-07-06 01:37:00'),
(66, NULL, 'global', NULL, '2016-07-06 01:49:52', '2016-07-06 01:49:52'),
(67, NULL, 'ip', '127.0.0.1', '2016-07-06 01:49:52', '2016-07-06 01:49:52'),
(68, 15, 'user', NULL, '2016-07-06 01:49:52', '2016-07-06 01:49:52'),
(69, NULL, 'global', NULL, '2016-07-06 01:50:07', '2016-07-06 01:50:07'),
(70, NULL, 'ip', '127.0.0.1', '2016-07-06 01:50:07', '2016-07-06 01:50:07'),
(71, NULL, 'global', NULL, '2016-07-06 03:56:41', '2016-07-06 03:56:41'),
(72, NULL, 'global', NULL, '2016-07-06 03:56:41', '2016-07-06 03:56:41'),
(73, NULL, 'ip', '127.0.0.1', '2016-07-06 03:56:41', '2016-07-06 03:56:41'),
(74, NULL, 'ip', '127.0.0.1', '2016-07-06 03:56:41', '2016-07-06 03:56:41'),
(75, NULL, 'global', NULL, '2016-07-06 03:57:01', '2016-07-06 03:57:01'),
(76, NULL, 'ip', '127.0.0.1', '2016-07-06 03:57:01', '2016-07-06 03:57:01'),
(77, NULL, 'global', NULL, '2016-07-06 06:54:11', '2016-07-06 06:54:11'),
(78, NULL, 'ip', '127.0.0.1', '2016-07-06 06:54:11', '2016-07-06 06:54:11'),
(79, NULL, 'global', NULL, '2016-07-06 07:15:18', '2016-07-06 07:15:18'),
(80, NULL, 'ip', '127.0.0.1', '2016-07-06 07:15:18', '2016-07-06 07:15:18'),
(81, 20, 'user', NULL, '2016-07-06 07:15:18', '2016-07-06 07:15:18'),
(82, NULL, 'global', NULL, '2016-07-07 04:07:14', '2016-07-07 04:07:14'),
(83, NULL, 'ip', '127.0.0.1', '2016-07-07 04:07:14', '2016-07-07 04:07:14'),
(84, 16, 'user', NULL, '2016-07-07 04:07:14', '2016-07-07 04:07:14'),
(85, NULL, 'global', NULL, '2016-07-07 04:11:55', '2016-07-07 04:11:55'),
(86, NULL, 'ip', '127.0.0.1', '2016-07-07 04:11:55', '2016-07-07 04:11:55'),
(87, 16, 'user', NULL, '2016-07-07 04:11:55', '2016-07-07 04:11:55'),
(88, NULL, 'global', NULL, '2016-07-07 22:48:34', '2016-07-07 22:48:34'),
(89, NULL, 'ip', '127.0.0.1', '2016-07-07 22:48:34', '2016-07-07 22:48:34'),
(90, 16, 'user', NULL, '2016-07-07 22:48:34', '2016-07-07 22:48:34'),
(91, NULL, 'global', NULL, '2016-07-08 00:13:48', '2016-07-08 00:13:48'),
(92, NULL, 'ip', '127.0.0.1', '2016-07-08 00:13:48', '2016-07-08 00:13:48'),
(93, 16, 'user', NULL, '2016-07-08 00:13:48', '2016-07-08 00:13:48'),
(94, NULL, 'global', NULL, '2016-07-08 00:30:54', '2016-07-08 00:30:54'),
(95, NULL, 'ip', '127.0.0.1', '2016-07-08 00:30:54', '2016-07-08 00:30:54'),
(96, 15, 'user', NULL, '2016-07-08 00:30:54', '2016-07-08 00:30:54'),
(97, NULL, 'global', NULL, '2016-07-08 00:31:00', '2016-07-08 00:31:00'),
(98, NULL, 'ip', '127.0.0.1', '2016-07-08 00:31:00', '2016-07-08 00:31:00'),
(99, 15, 'user', NULL, '2016-07-08 00:31:00', '2016-07-08 00:31:00'),
(100, NULL, 'global', NULL, '2016-07-08 05:26:00', '2016-07-08 05:26:00'),
(101, NULL, 'ip', '127.0.0.1', '2016-07-08 05:26:00', '2016-07-08 05:26:00'),
(102, 18, 'user', NULL, '2016-07-08 05:26:00', '2016-07-08 05:26:00'),
(103, NULL, 'global', NULL, '2016-07-08 05:26:06', '2016-07-08 05:26:06'),
(104, NULL, 'ip', '127.0.0.1', '2016-07-08 05:26:06', '2016-07-08 05:26:06'),
(105, 18, 'user', NULL, '2016-07-08 05:26:06', '2016-07-08 05:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` bigint(6) NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password_token` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`, `address`, `contact_no`, `city`, `zip_code`, `state`, `country`, `slug`, `password_token`) VALUES
(1, 'admin@gmail.com', '$2y$10$9TW1egWRL.Uu4Fpq/s8WiOOYhUyzVvG95DiZRZORK49UqxsaNnubu', NULL, '2016-07-11 07:04:17', 'Admin', 'admin', '2016-06-28 23:03:21', '2016-07-11 07:04:17', '', 0, '', 0, '', '', 'admin1', 'eyJpdiI6IkxtT0tNZ1VWUTFGckRqYVphRlVyREE9PSIsInZhbHVlIjoiQ1NnTXY4VzNkaFBtUzRwZ2JOQjVCZz09IiwibWFjIjoiZTcyOGI1YTBkMGJkNTMyZjhiOWQzMTBlZGY5NjBmZGM0ZjIyZmIyNjk2YjJkZDY4NWQyZDk2ZjZiNWU2NjA0NCJ9'),
(15, 'nirali@gmail.com', '$2y$10$yHiMEAMgVnng0Wmbembm9.vSzqRMXyrfvDQN4SJa6qhEUObkmvj.a', NULL, '2016-07-08 02:12:36', 'nirali', 'raiyani', '2016-07-01 01:53:34', '2016-07-08 02:12:36', 'address', 1470236985, 'rajkot', 123456, 'gujrat', 'india', 'niraliraiyani15', 'eyJpdiI6IlwvMjVSa3k0bjdqWUhmcGJxZERKVzZnPT0iLCJ2YWx1ZSI6IkR4S1VzVk5Ta3pIUFhCNDJkRlJzSHc9PSIsIm1hYyI6ImIwZGE0YjljNDU4MWFjZmJhZmVlMDdmMjQ2NDg1NmE4ZTY2MTFkOWU1YmJlY2RhMWNkNTcwOGUwODE4NjljNmIifQ=='),
(16, 'nidhi@gmail.com', '$2y$10$K4rmBYQGGYFz8b602M8greSOYozmOMnTDBsWKVwG1mQ0dMAGVKEBu', NULL, '2016-07-08 02:17:03', 'Nidhi', 'Amreliya', '2016-07-01 02:15:23', '2016-07-08 02:17:03', 'Rajkot', 2154512141, 'Rajkot', 360000, 'gujrat', 'india', 'nidhiamreliya16', 'eyJpdiI6InBBa0NOdng4dEhobWFNRTdpVWhlNVE9PSIsInZhbHVlIjoiNGVESWl1TG9BYmhoNFZncmZUR2hsUT09IiwibWFjIjoiMTE4MmQ4Njc4NWRhYTE4MTVhMmVmMWEyZGQyODIxZjQzNDEzODNlYjMyMGY0ODBiZjg1NDMxMmZiMjcwY2IxMiJ9'),
(17, 'namu@gmail.com', '$2y$10$EgHNqWg9hs87TAxipJpu9eKpTttmBr9Kimc86RlDnLQ1LE2aYACuy', NULL, '2016-07-08 05:26:21', 'namrata', 'tilak', '2016-07-01 02:18:59', '2016-07-08 05:26:21', 'address line ', 4545454445, 'rajkot', 123456, 'gujrat', 'india', 'namratatilak17', NULL),
(18, 'mehul@gmail.com', '$2y$10$BoWU6TxApVnrtEPzlgH98eTugwCptz.4cgd8hA27rslJJIu0Cqgp6', NULL, '2016-07-05 01:14:55', 'Mehul', 'limbasiya', '2016-07-01 02:22:56', '2016-07-06 03:51:55', 'gdhjf', 1473698520, 'rajkot', 325896, 'gujrat', 'india', 'mehullimbasiya18', 'eyJpdiI6IktqXC9LTXFDT0ZveE9jV2xRekJmOEZnPT0iLCJ2YWx1ZSI6ImtBXC9wUGVVTHdCQkdTNzJScnZkdXZ3PT0iLCJtYWMiOiJjYzc5YjIyZDYyYzQ0NmE5MzNhNWQzOTNlMDQyYjU2N2RiMDBmOTc4ZDRjMTBiMGUxNDYwNWZiNjgwM2FjNmU4In0='),
(19, 'darshan@gmail.com', '$2y$10$54bIC0q/4dGwk28pOeMKv.pxlwvU3Y2FB/eovE/0hijB8gju1Tobu', NULL, '2016-07-01 02:26:40', 'darshan', 'rathod', '2016-07-01 02:26:40', '2016-07-01 02:26:40', 'address line12', 1234567890, 'rajkot', 360006, 'gujrat', 'india', 'darshanrathod19', NULL),
(20, 'namrata@gmail.com', '$2y$10$kwBEU79/f2uleimiUi.J3uv/S.2Pn76Y5vlZccXSiN9DlfXcB6YTi', NULL, '2016-07-04 06:14:04', 'namrata', 'dobariya', '2016-07-04 06:14:03', '2016-07-06 04:06:00', 'testaddress', 1455569874, 'rajkot', 321456, 'gujrat', 'india', 'namratadobariya20', 'eyJpdiI6Ino4emVBc1I4TzRJc0dyeE9NbTJNT0E9PSIsInZhbHVlIjoiTU5NbFRYYVh1ZDB3UlRka1RwSmZCZz09IiwibWFjIjoiNjY2ZWE1Zjg1OGQ2NTA4NDg5ZjNkZDE5MDQ4ZDUxNWY2OWIxMTM4ZGI3NTgyZWZjY2M3MWU0NWVhZjI5NzczOSJ9'),
(21, 'mohit@gmail.com', '$2y$10$xUqePO38nYOUDIshjo1CJ.zJuxco6LLD6n38ulgZqXIw5Ep2mYsZG', NULL, '2016-07-06 04:03:42', 'mohit', 'bhalodiya', '2016-07-06 04:03:42', '2016-07-06 04:03:42', 'address', 1478509632, 'rajkot', 123456, 'gujrat', 'india', 'mohitbhalodiya21', NULL),
(22, 'jay@gmail.com', '$2y$10$I/woXvzIo7HWihQhYUMzSewYw13o/Yo0aMTsjBOH1cFhZj83sOrYu', NULL, '2016-07-06 07:28:53', 'jay', 'patel', '2016-07-06 07:28:53', '2016-07-06 07:28:53', 'hgfgdjhfkg', 1111111111, 'rajkot', 111111, 'gujrat', 'india', 'jaypatel22', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
