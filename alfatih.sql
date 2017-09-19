-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 05:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfatih`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gamis', 1, '2016-12-03 19:16:11', '2016-12-03 19:16:11'),
(2, 'Jilbab', 1, '2016-12-03 19:16:28', '2016-12-03 19:16:28'),
(3, 'Tuskbag', 1, '2016-12-03 19:17:05', '2016-12-03 19:17:05'),
(4, 'Jaket', 1, '2016-12-03 19:17:28', '2016-12-03 19:17:28'),
(5, 'Kaos 3D', 1, '2016-12-03 19:17:41', '2016-12-03 19:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_users` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `formid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `id_users`, `name`, `phone`, `address`, `province`, `postal_code`, `formid`, `created_at`, `updated_at`) VALUES
(1, 3, 'agus rianto', '085728220567', 'Jogja', 'DIY', '55892', 'MTQ4MTUyMzYwMQ==', '2016-12-11 23:20:34', '2016-12-11 23:20:34'),
(2, 3, 'agus rianto', '085728220567', 'Jogja', 'DIY', '55892', 'MTQ4MTUyMzYwMQ==', '2016-12-11 23:22:09', '2016-12-11 23:22:09'),
(3, 3, 'agus rianto', '085728220567', 'Jogja', 'DIY', '55892', 'MTQ4MTUyMzYwMQ==', '2016-12-11 23:24:08', '2016-12-11 23:24:08'),
(4, 3, 'agus rianto', '085728220567', 'Jogja', 'DIY', '55892', 'MTQ4MTUyMzYwMQ==', '2016-12-11 23:24:40', '2016-12-11 23:24:40'),
(5, 3, 'agus rianto', '085728220567', 'Jogja', 'DIY', '55892', 'MTQ4MTUyMzYwMQ==', '2016-12-11 23:25:59', '2016-12-11 23:25:59'),
(6, 2, 'adab ', '0212198', 'GK', 'DIY', '1221', 'MTQ4MTUyNDU3Mw==', '2016-12-11 23:36:32', '2016-12-11 23:36:32'),
(7, 3, 'agus rianto pea', '085728220567', 'Jogja', 'DIY', '55892', 'MTQ4MTYyNzYwNg==', '2016-12-13 04:13:36', '2016-12-13 04:13:36'),
(8, 4, 'luqmanul hakim', '089636607271', 'sendowo blok f135', 'jakarta timur', '13720', 'MTQ4MTcwNjY2OQ==', '2016-12-14 02:11:33', '2016-12-14 02:11:33'),
(9, 4, 'agus', '089636607271', 'sendowo blok f135', 'jakarta timur', '13720', 'MTQ4MTcwODczNQ==', '2016-12-14 02:45:53', '2016-12-14 02:45:53'),
(10, 4, 'agus', '1293', 'sendowo', 'dsakj', '123123', 'MTQ4MTcxMzQzMQ==', '2016-12-14 04:04:28', '2016-12-14 04:04:28'),
(11, 4, 'luqmanul hakim', '089636607271', 'sendowo blok f135', 'jakarta timur', '13720', 'MTQ4MTcxNjEzMA==', '2016-12-14 04:49:00', '2016-12-14 04:49:00'),
(12, 4, 'luqmanul hakim', '089636607271', 'sendowo blok f135', 'jakarta timur', '13720', 'MTQ4MTcxNjc4Mw==', '2016-12-14 04:59:46', '2016-12-14 04:59:46'),
(13, 4, 'luqmanul hakim', '089636607271', 'sendowo blok f135', 'jakarta timur', '13720', 'MTQ4MTcxNzE5NA==', '2016-12-14 05:06:36', '2016-12-14 05:06:36'),
(14, 6, 'Meilida Dwi', '085736605882', 'jogja', 'Yogyakarta', '65527', 'MTQ4MTc4NjgzMw==', '2016-12-15 00:27:47', '2016-12-15 00:27:47'),
(15, 6, 'Meilida Dwi', '085736605882', 'jogja', 'Yogyakarta', '65527', 'MTQ4MTc4Njk3MA==', '2016-12-15 00:29:35', '2016-12-15 00:29:35'),
(16, 7, 'Mutiara', '0294858', 'ajdhadi', 'ajshaish', '2423', 'MTQ4MTc5Mjg5Nw==', '2016-12-15 02:09:06', '2016-12-15 02:09:06'),
(17, 8, 'nurul', '981290812', 'jadks', 'adsds', '12313', 'MTQ4NzMzODczNw==', '2017-02-17 06:39:08', '2017-02-17 06:39:08'),
(18, 9, 'hasbi', '01298368312', 'jadksh', 'adshjkadsh', '12312', 'MTQ4NzQ3MzAzOQ==', '2017-02-18 19:57:54', '2017-02-18 19:57:54'),
(19, 9, 'luqman', '23912938', 'asjdkljdsa', 'sdasd', '121', 'MTQ4NzQ3MzE0Mg==', '2017-02-18 19:59:34', '2017-02-18 19:59:34'),
(20, 10, 'lukman hakim', '5', 'jl.cibubur1', 'No State', '13720', 'MTQ4NzU4NTExNQ==', '2017-02-20 03:05:58', '2017-02-20 03:05:58'),
(21, 11, 'qrgqg1', '0876543', 'jhgfd', 'jhgfd', '456', 'MTQ4NzY2NzA5NA==', '2017-02-21 01:51:59', '2017-02-21 01:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('n.loekman@gmail.com', '50ef55d5609f4279c02c09613425b1432f01f7d11c5898323943faa8c88dcef2', '2016-10-30 06:54:51'),
('admin@admin.com', '268ba2b303f64bf32f150cb66d64b67df05b98177ee5b154663a1408fdafbb79', '2016-10-30 06:54:12'),
('luqmanul.hakim@mail.ugm.ac.id', 'df25b986adca1dba47c491b1d351c79d948267dc9d404243ed59a6f5fe6e1b37', '2016-10-30 08:34:01'),
('agusriantoo71@gmail.com', '93412544e6487703a4c18989274c23c04407b1aeabe5ca87f4e0341c5e7ea945', '2016-11-28 22:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `sku` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_cat`, `name`, `desc`, `price`, `sku`, `berat`, `stok`, `created_at`, `updated_at`) VALUES
(6, 2, '4', '<p>4</p>\r\n', 4, '4', 4, 4, '2016-12-04 03:34:02', '2016-12-04 03:34:02'),
(4, 2, '2', '<p>2</p>\r\n', 2, '2', 2, 2, '2016-12-04 03:33:11', '2016-12-04 03:33:11'),
(5, 2, 'Jilbab 1', '<p>3</p>\r\n', 3, ' 3', 3, 3, '2016-12-04 03:33:37', '2016-12-15 00:38:59'),
(3, 2, '1', '<p>1</p>\r\n', 1, '1', 1, 1, '2016-12-04 03:32:47', '2016-12-04 03:32:47'),
(7, 2, 'jilbab 2', '<p>5</p>\r\n', 5, '5', 5, 5, '2016-12-04 03:34:27', '2016-12-04 03:34:27'),
(8, 2, 'jilbab 3', '<p>6</p>\r\n', 6, '6', 6, 5, '2016-12-04 03:34:46', '2016-12-15 00:29:35'),
(9, 1, '1', '<p>1</p>\r\n', 1, '1', 1, 1, '2016-12-04 03:36:42', '2016-12-04 03:36:42'),
(10, 1, '2', '<p>2</p>\r\n', 2, '2', 2, 2, '2016-12-04 03:37:02', '2016-12-04 03:37:02'),
(11, 1, '3', '<p>3</p>\r\n', 3, '3', 3, 3, '2016-12-04 03:37:47', '2016-12-04 03:37:47'),
(12, 1, '4', '<p>4</p>\r\n', 4, '4', 4, 4, '2016-12-04 03:38:16', '2016-12-04 03:38:16'),
(13, 1, 'jilbab 4', '<p>5</p>\r\n', 5, '5', 5, 5, '2016-12-04 03:38:39', '2016-12-04 03:38:39'),
(14, 1, 'jilbab 5', '<p>6</p>\r\n', 6, '6', 6, 6, '2016-12-04 03:39:02', '2016-12-04 03:39:02'),
(15, 5, '1', '<p>1</p>\r\n', 1, '1', 1, 1, '2016-12-04 03:40:09', '2016-12-04 03:40:09'),
(16, 5, '2', '<p>2</p>\r\n', 2, '2', 2, 2, '2016-12-04 03:40:32', '2016-12-04 03:40:32'),
(17, 5, '3', '<p>3</p>\r\n', 3, '3', 3, 3, '2016-12-04 03:42:39', '2016-12-04 03:42:39'),
(18, 5, '4', '<p>4</p>\r\n', 4, '4', 4, 4, '2016-12-04 03:43:28', '2016-12-04 03:43:28'),
(19, 5, '5', '<p>5</p>\r\n', 5, '5', 5, 5, '2016-12-04 03:43:51', '2016-12-04 03:43:51'),
(20, 5, '6', '<p>6</p>\r\n', 6, '6', 6, 5, '2016-12-04 03:44:32', '2016-12-05 01:03:52'),
(21, 4, '  1', '<p>1</p>\r\n', 1, '  1', 1, 1, '2016-12-05 05:44:11', '2016-12-05 22:45:22'),
(22, 4, ' 2', '<p>2</p>\r\n', 2, ' 2', 2, 2, '2016-12-05 05:44:53', '2016-12-05 22:46:01'),
(23, 4, ' 3', '<p>3</p>\r\n', 3, ' 3', 3, 3, '2016-12-05 05:45:14', '2016-12-05 22:46:23'),
(24, 4, ' 4', '<p>4</p>\r\n', 4, ' 4', 4, 3, '2016-12-05 05:45:46', '2017-02-18 19:59:34'),
(25, 4, ' 5', '<p>5</p>\r\n', 5, ' 5', 5, 2, '2016-12-05 05:46:08', '2017-02-18 19:57:54'),
(26, 4, ' 6', '<p>6</p>\r\n', 6, ' 6', 6, 1, '2016-12-05 05:46:31', '2016-12-15 00:27:47'),
(27, 3, ' 1', '<p>1</p>\r\n', 1, ' 1', 1, 0, '2016-12-05 05:48:30', '2017-02-20 03:05:58'),
(28, 3, '  2', '<p>2</p>\r\n', 2, '  2', 2, 7, '2016-12-05 05:49:04', '2017-02-21 02:13:39'),
(29, 3, ' 3', '<p>3</p>\r\n', 3, ' 3', 3, 3, '2016-12-05 05:49:24', '2016-12-05 22:42:02'),
(30, 3, ' 4', '<p>4</p>\r\n', 4, ' 4', 4, 4, '2016-12-05 05:49:55', '2016-12-05 22:42:20'),
(31, 3, '  Tuskbag', '<p>5</p>\r\n', 5, '  5', 5, 0, '2016-12-05 05:50:37', '2017-02-21 01:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(10) NOT NULL,
  `id_product` int(10) UNSIGNED DEFAULT NULL,
  `img_name` varchar(100) DEFAULT NULL,
  `path_thumb` varchar(100) DEFAULT NULL,
  `path_full` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `primary` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `id_product`, `img_name`, `path_thumb`, `path_full`, `created_at`, `updated_at`, `primary`) VALUES
(4, 3, 'feVo4.jpg', 'images/products/thumb/feVo4.jpg', 'images/products/full/feVo4.jpg', '2016-12-04 03:32:47', '2016-12-04 03:32:47', 0),
(5, 4, 'F3qfb.jpg', 'images/products/thumb/F3qfb.jpg', 'images/products/full/F3qfb.jpg', '2016-12-04 03:33:11', '2016-12-04 03:33:11', 0),
(6, 5, 'HhDtY.jpg', 'images/products/thumb/HhDtY.jpg', 'images/products/full/HhDtY.jpg', '2016-12-04 03:33:37', '2016-12-04 03:33:37', 0),
(7, 6, 'angQL.jpg', 'images/products/thumb/angQL.jpg', 'images/products/full/angQL.jpg', '2016-12-04 03:34:02', '2016-12-04 03:34:02', 0),
(8, 7, 'dwSCw.jpg', 'images/products/thumb/dwSCw.jpg', 'images/products/full/dwSCw.jpg', '2016-12-04 03:34:27', '2016-12-04 03:34:27', 0),
(9, 8, 'ZTrPC.jpg', 'images/products/thumb/ZTrPC.jpg', 'images/products/full/ZTrPC.jpg', '2016-12-04 03:34:46', '2016-12-04 03:34:46', 0),
(10, 9, 'DjPp7.jpg', 'images/products/thumb/DjPp7.jpg', 'images/products/full/DjPp7.jpg', '2016-12-04 03:36:42', '2016-12-04 03:36:42', 0),
(11, 10, 'tyStM.jpg', 'images/products/thumb/tyStM.jpg', 'images/products/full/tyStM.jpg', '2016-12-04 03:37:02', '2016-12-04 03:37:02', 0),
(12, 11, 'GaZ7z.jpg', 'images/products/thumb/GaZ7z.jpg', 'images/products/full/GaZ7z.jpg', '2016-12-04 03:37:47', '2016-12-04 03:37:47', 0),
(13, 12, '5iYKe.jpg', 'images/products/thumb/5iYKe.jpg', 'images/products/full/5iYKe.jpg', '2016-12-04 03:38:16', '2016-12-04 03:38:16', 0),
(14, 13, 'ddztN.jpg', 'images/products/thumb/ddztN.jpg', 'images/products/full/ddztN.jpg', '2016-12-04 03:38:39', '2016-12-04 03:38:39', 0),
(15, 14, 'BsDYs.jpg', 'images/products/thumb/BsDYs.jpg', 'images/products/full/BsDYs.jpg', '2016-12-04 03:39:02', '2016-12-04 03:39:02', 0),
(16, 15, 'oJ6tj.jpg', 'images/products/thumb/oJ6tj.jpg', 'images/products/full/oJ6tj.jpg', '2016-12-04 03:40:09', '2016-12-04 03:40:09', 0),
(17, 16, 'zRmoP.jpg', 'images/products/thumb/zRmoP.jpg', 'images/products/full/zRmoP.jpg', '2016-12-04 03:40:32', '2016-12-04 03:40:32', 0),
(18, 17, 'uxNvf.jpg', 'images/products/thumb/uxNvf.jpg', 'images/products/full/uxNvf.jpg', '2016-12-04 03:42:39', '2016-12-04 03:42:39', 0),
(19, 18, '31oR1.jpg', 'images/products/thumb/31oR1.jpg', 'images/products/full/31oR1.jpg', '2016-12-04 03:43:28', '2016-12-04 03:43:28', 0),
(20, 19, 'TAumi.jpg', 'images/products/thumb/TAumi.jpg', 'images/products/full/TAumi.jpg', '2016-12-04 03:43:51', '2016-12-04 03:43:51', 0),
(21, 20, 'VcxfF.jpg', 'images/products/thumb/VcxfF.jpg', 'images/products/full/VcxfF.jpg', '2016-12-04 03:44:32', '2016-12-04 03:44:32', 0),
(41, 21, '02jVK.jpg', 'images/products/thumb/02jVK.jpg', 'images/products/full/02jVK.jpg', '2016-12-05 22:45:22', '2016-12-05 22:45:22', 0),
(42, 22, 'gWs0M.jpg', 'images/products/thumb/gWs0M.jpg', 'images/products/full/gWs0M.jpg', '2016-12-05 22:46:01', '2016-12-05 22:46:01', 0),
(43, 23, 'Bb59B.jpg', 'images/products/thumb/Bb59B.jpg', 'images/products/full/Bb59B.jpg', '2016-12-05 22:46:23', '2016-12-05 22:46:23', 0),
(44, 24, '0VjYY.jpg', 'images/products/thumb/0VjYY.jpg', 'images/products/full/0VjYY.jpg', '2016-12-05 22:46:40', '2016-12-05 22:46:40', 0),
(45, 25, 'RwmH3.jpg', 'images/products/thumb/RwmH3.jpg', 'images/products/full/RwmH3.jpg', '2016-12-05 22:46:57', '2016-12-05 22:46:57', 0),
(46, 26, 'rvyaA.jpg', 'images/products/thumb/rvyaA.jpg', 'images/products/full/rvyaA.jpg', '2016-12-05 22:47:14', '2016-12-05 22:47:14', 0),
(36, 27, 'LXX7z.jpg', 'images/products/thumb/LXX7z.jpg', 'images/products/full/LXX7z.jpg', '2016-12-05 22:41:37', '2016-12-05 22:41:37', 0),
(35, 28, 'MFF1W.jpg', 'images/products/thumb/MFF1W.jpg', 'images/products/full/MFF1W.jpg', '2016-12-05 22:41:15', '2016-12-05 22:41:15', 0),
(37, 29, 'voTQl.jpg', 'images/products/thumb/voTQl.jpg', 'images/products/full/voTQl.jpg', '2016-12-05 22:42:02', '2016-12-05 22:42:02', 0),
(38, 30, 'n5u9V.jpg', 'images/products/thumb/n5u9V.jpg', 'images/products/full/n5u9V.jpg', '2016-12-05 22:42:20', '2016-12-05 22:42:20', 0),
(39, 31, 'EUQ1m.jpg', 'images/products/thumb/EUQ1m.jpg', 'images/products/full/EUQ1m.jpg', '2016-12-05 22:42:43', '2016-12-05 22:42:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'ADMIN', '2016-08-12 21:59:29', '2016-08-12 21:59:29'),
(2, 'member', 'Member', 'MEMBER', '2016-08-12 21:59:29', '2016-08-12 21:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `formid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_price` int(10) UNSIGNED NOT NULL,
  `subtotal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bukti` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Belum Kirim bukti',
  `ongkir` int(11) NOT NULL,
  `notifTrans` int(11) NOT NULL DEFAULT '0',
  `notifBukti` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `product_id`, `id_users`, `formid`, `tanggal`, `qty`, `size`, `total_price`, `subtotal`, `status`, `bukti`, `ongkir`, `notifTrans`, `notifBukti`, `created_at`, `updated_at`) VALUES
(1, 32, 3, 'MTQ4MTUyMzYwMQ==', '2016-12-12', 1, '6', 6, 'Rp 6,00', 'Terbayar', 'images/bukti/1481524073.png', 51000, 1, 1, '2016-12-11 23:20:34', '2016-12-14 03:35:17'),
(2, 31, 2, 'MTQ4MTUyNDU3Mw==', '2016-12-12', 2, '5', 10, 'Rp 10,00', 'Terbayar', 'Belum Kirim bukti', 0, 1, 1, '2016-12-11 23:36:32', '2016-12-15 00:42:55'),
(6, 31, 4, 'MTQ4MTcxMzQzMQ==', '2016-12-14', 1, '5', 5, 'Rp 5,00', 'Belum Terbayar', 'Belum Kirim bukti', 19000, 1, 0, '2016-12-14 04:04:28', '2016-12-15 00:42:55'),
(3, 32, 3, 'MTQ4MTYyNzYwNg==', '2016-12-13', 1, '6', 6, 'Rp 6,00', 'Belum Terbayar', 'Belum Kirim bukti', 0, 1, 1, '2016-12-13 04:13:36', '2016-12-13 04:16:39'),
(4, 32, 4, 'MTQ4MTcwNjY2OQ==', '2016-12-14', 1, '6', 6, 'Rp 6,00', 'Terbayar', 'Belum Kirim bukti', 16500, 1, 0, '2016-12-14 02:11:33', '2016-12-14 03:14:57'),
(5, 28, 4, 'MTQ4MTcwODczNQ==', '2016-12-14', 1, '2', 2, 'Rp 2,00', 'Terbayar', 'images/bukti/1481708794.png', 16500, 1, 1, '2016-12-14 02:45:53', '2016-12-14 03:18:01'),
(7, 32, 4, 'MTQ4MTcxNjEzMA==', '2016-12-14', 1, 'M', 6, 'Rp 6,00', 'Belum Terbayar', 'Belum Kirim bukti', 0, 1, 0, '2016-12-14 04:49:00', '2016-12-15 00:42:55'),
(8, 28, 4, 'MTQ4MTcxNjc4Mw==', '2016-12-14', 4, 'L', 8, 'Rp 8,00', 'Belum Terbayar', 'Belum Kirim bukti', 19000, 1, 0, '2016-12-14 04:59:46', '2016-12-15 00:42:55'),
(9, 25, 4, 'MTQ4MTcxNzE5NA==', '2016-12-14', 1, 'M', 5, 'Rp 5,00', 'Belum Terbayar', 'Belum Kirim bukti', 16500, 1, 0, '2016-12-14 05:06:36', '2016-12-15 00:36:26'),
(10, 26, 6, 'MTQ4MTc4NjgzMw==', '2016-12-15', 5, 'S', 30, 'Rp 36,00', 'Belum Terbayar', 'Belum Kirim bukti', 0, 1, 0, '2016-12-15 00:27:47', '2016-12-15 00:42:55'),
(11, 32, 6, 'MTQ4MTc4NjgzMw==', '2016-12-15', 1, 'S', 6, 'Rp 36,00', 'Belum Terbayar', 'Belum Kirim bukti', 0, 1, 0, '2016-12-15 00:27:47', '2016-12-15 00:42:55'),
(12, 8, 6, 'MTQ4MTc4Njk3MA==', '2016-12-15', 1, 'L', 6, 'Rp 6,00', 'Terbayar', 'images/bukti/1481787018.jpg', 0, 1, 1, '2016-12-15 00:29:35', '2016-12-15 00:42:40'),
(13, 31, 7, 'MTQ4MTc5Mjg5Nw==', '2016-12-15', 1, 'S', 5, 'Rp 5,00', 'Terbayar', 'images/bukti/1481793050.jpg', 5000, 1, 1, '2016-12-15 02:09:06', '2016-12-15 02:12:18'),
(14, 25, 8, 'MTQ4NzMzODczNw==', '2017-02-17', 1, 'M', 5, 'Rp 5,00', 'Terbayar', 'images/bukti/1487338825.png', 18000, 1, 1, '2017-02-17 06:39:08', '2017-02-17 06:41:08'),
(15, 25, 9, 'MTQ4NzQ3MzAzOQ==', '2017-02-19', 1, 'L', 5, 'Rp 5,00', 'Terbayar', 'images/bukti/1487473271.png', 35000, 1, 1, '2017-02-18 19:57:54', '2017-02-18 20:01:47'),
(16, 24, 9, 'MTQ4NzQ3MzE0Mg==', '2017-02-19', 1, 'XXL', 4, 'Rp 4,00', 'Belum Terbayar', 'Belum Kirim bukti', 0, 1, 0, '2017-02-18 19:59:34', '2017-02-18 20:00:45'),
(17, 27, 10, 'MTQ4NzU4NTExNQ==', '2017-02-20', 1, 'L', 1, 'Rp 1,00', 'Terbayar', 'images/bukti/1487585336.png', 1100000, 1, 1, '2017-02-20 03:05:58', '2017-02-20 03:10:14'),
(18, 31, 11, 'MTQ4NzY2NzA5NA==', '2017-02-21', 1, 'XXL', 5, 'Rp 5,00', 'Terbayar', 'images/bukti/1487667288.png', 25000, 1, 1, '2017-02-21 01:51:59', '2017-02-21 01:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) DEFAULT '0',
  `confirmation_code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `confirmed`, `confirmation_code`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$bjhpJ0gk6.QAHlByRw.U5e2g.5rNBwK2IF3wXzSTjReBA7Jbo.ZXW', 'SVJ3jSupuzdXmveJFIGnDeUnJEFYKHW6nR2j16o1UDZ9Dpbtd0wsyJ7iaC2D', 1, '', '2016-12-03 19:13:51', '2017-02-20 02:59:45'),
(2, 'adab ', 'adab.inayah@mail.ugm.ac.id', '$2y$10$M52POsFH6Tf1gKhzCgWVG.VHoG7Tm1oVQA6/F54v5/1HDDS3Z9/su', '3ZpXPG5NBmGMYOadFDRpvAKd7ztrVLMyMeDlNBHRS08pEmzgXyKGHQuijUue', 1, NULL, '2016-12-05 01:00:42', '2016-12-05 01:06:21'),
(3, 'agus rianto', 'agusriantoo71@gmail.com', '$2y$10$M52POsFH6Tf1gKhzCgWVG.VHoG7Tm1oVQA6/F54v5/1HDDS3Z9/su', 'rEP0LVsOPQf87UM4Pitt9dogI00nrZNuigMAqF24Ilogng22MmWZ2AGQ2yHn', 1, NULL, '2016-12-05 22:49:57', '2016-12-14 02:50:14'),
(4, 'luqmanul hakim', 'backupheva@gmail.com', '$2y$10$nSuGhAmc14JltR6mKnfyDOkCxq9yeDOR48sHh0501Hoxs7bpRj7VC', 'dZFlwvXILlwHLSIPSvNKuyne8RqAUax2o4Mlm7AkjPSuNRycBvtNuz00tvQW', 1, NULL, '2016-12-14 02:09:38', '2016-12-14 05:13:25'),
(5, 'blankon', 'blangkonnet@gmail.com', '$2y$10$XYct6Z/58YpuSzaXSVkLc.JZFTMZMutVDHcWkChZDcZd8tRgot4ma', NULL, 0, 'hAw2nP82vvZGRwgGGqOJ4Jwd1MWjlu', '2016-12-14 04:06:39', '2016-12-14 04:06:39'),
(6, 'Meilida Dwi', 'meilida0205@gmail.com', '$2y$10$UfX5bO/WlBXk5ysvvzH2SeArv9AxClIvBPLwCq2.tcV072YCKxdfG', 'jjp2rkbYCsLq3AAtOFc6iqg0hQfypaDG7WKCgnIbdC6Dk6633YF3VuJg0YM8', 1, NULL, '2016-12-15 00:23:45', '2016-12-15 00:30:38'),
(7, 'muti', 'marizky2008@yahoo.co.id', '$2y$10$pFrX9a0g2ZWAxBXMTnKDbuQ5CI0hT.eHB2LBIAH9rhfRrdBysXsje', 'hjv9iJBaP57womB4bR1T1rrz5cVq6P0m5B6ChLcg44oxbwU4Ir4d8aVyQg1Z', 1, NULL, '2016-12-15 02:04:49', '2016-12-15 02:11:18'),
(8, 'nurul', 'nrlhudaas@gmail.com', '$2y$10$PAQt3FsrU2FfW.4e7.zBw.hjnaQZSKSBOAsHSuOKWzxoJ4hFgEduq', '5GvOHrUFVrxbYZmcy3m3WJGaPlPd0nO5TcPVgocQzLdfJujDgXhFoasC3mnU', 1, NULL, '2017-02-17 06:30:03', '2017-02-17 06:33:24'),
(9, 'hasbi', 'hasbiyansyah01@gmail.com', '$2y$10$VMoVLhV6kZcmZGxHI8Lt4eTlR0ZRK.AOs/5Eki90uLZGjV/FXvBEy', NULL, 1, NULL, '2017-02-18 19:54:49', '2017-02-18 19:55:51'),
(10, 'yahyas', 'yahya.setiawan021@gmail.com', '$2y$10$x7TP4Di4KBYifz9Hjacjg.rPOEiIhyJ9O3jHSklf8iN8LHTiFUnwa', NULL, 1, NULL, '2017-02-20 03:01:31', '2017-02-20 03:02:58'),
(11, 'sue', 'azizmuslim222@gmail.com', '$2y$10$ThNQzzzVuRxWA8MDpZSWJuqLgYlXRNVFXWKBME1x2CkDlIhD6sqcu', 'b13aQ9scMTXRuOBxZ2E7hXeGK3ubTp5j0scCnOOUzpH5ZOZU92V2EFinlrKz', 1, NULL, '2017-02-21 01:46:17', '2017-02-21 01:49:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_product_id_foreign` (`product_id`),
  ADD KEY `id_users` (`id_users`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
