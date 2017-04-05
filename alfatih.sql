-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 12:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
(7, 3, 'rianto', '021', 'solo', 'jogja', '55880', 'MTQ4MTYwNDU4NQ==', '2016-12-12 21:50:28', '2016-12-12 21:50:28');

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
(5, 2, '3', '<p>3</p>\r\n', 3, '3', 3, 3, '2016-12-04 03:33:37', '2016-12-04 03:33:37'),
(3, 2, '1', '<p>1</p>\r\n', 1, '1', 1, 1, '2016-12-04 03:32:47', '2016-12-04 03:32:47'),
(7, 2, '5', '<p>5</p>\r\n', 5, '5', 5, 5, '2016-12-04 03:34:27', '2016-12-04 03:34:27'),
(8, 2, '6', '<p>6</p>\r\n', 6, '6', 6, 6, '2016-12-04 03:34:46', '2016-12-04 03:34:46'),
(9, 1, '1', '<p>1</p>\r\n', 1, '1', 1, 1, '2016-12-04 03:36:42', '2016-12-04 03:36:42'),
(10, 1, '2', '<p>2</p>\r\n', 2, '2', 2, 2, '2016-12-04 03:37:02', '2016-12-04 03:37:02'),
(11, 1, '3', '<p>3</p>\r\n', 3, '3', 3, 3, '2016-12-04 03:37:47', '2016-12-04 03:37:47'),
(12, 1, '4', '<p>4</p>\r\n', 4, '4', 4, 4, '2016-12-04 03:38:16', '2016-12-04 03:38:16'),
(13, 1, '5', '<p>5</p>\r\n', 5, '5', 5, 5, '2016-12-04 03:38:39', '2016-12-04 03:38:39'),
(14, 1, '6', '<p>6</p>\r\n', 6, '6', 6, 6, '2016-12-04 03:39:02', '2016-12-04 03:39:02'),
(15, 5, '1', '<p>1</p>\r\n', 1, '1', 1, 1, '2016-12-04 03:40:09', '2016-12-04 03:40:09'),
(16, 5, '2', '<p>2</p>\r\n', 2, '2', 2, 2, '2016-12-04 03:40:32', '2016-12-04 03:40:32'),
(17, 5, '3', '<p>3</p>\r\n', 3, '3', 3, 3, '2016-12-04 03:42:39', '2016-12-04 03:42:39'),
(18, 5, '4', '<p>4</p>\r\n', 4, '4', 4, 4, '2016-12-04 03:43:28', '2016-12-04 03:43:28'),
(19, 5, '5', '<p>5</p>\r\n', 5, '5', 5, 5, '2016-12-04 03:43:51', '2016-12-04 03:43:51'),
(20, 5, '    65', '<p>6</p>\r\n', 6, '    6', 6, 5, '2016-12-04 03:44:32', '2016-12-13 03:46:09'),
(21, 4, ' Baseball- Hitam / Putih', '<p>-Cotton fleece</p>\r\n\r\n<p>-Polos</p>\r\n\r\n<p>Standard distro</p>\r\n', 155000, ' BaseballHitamPutih', 600, 100, '2016-12-05 05:44:11', '2016-12-13 03:51:26'),
(22, 4, 'Baseball- Biru Benhur/ Hitam', '<p>-Cotton fleece</p>\r\n\r\n<p>-Polos</p>\r\n\r\n<p>Standard distro</p>\r\n', 155000, 'BaseballBiruHitam', 600, 100, '2016-12-05 05:44:53', '2016-12-13 03:32:09'),
(23, 4, ' Baseball- Merah/Biru Dongker', '<p>-Cotton fleece</p>\r\n\r\n<p>-Polos</p>\r\n\r\n<p>Standard distro</p>\r\n', 155000, '  BaseballMerahBiru', 600, 100, '2016-12-05 05:45:14', '2016-12-13 03:30:41'),
(24, 4, 'Hoodie Jumper - Abu Gelap', '<p>-Cotton fleece</p>\r\n\r\n<p>-Polos</p>\r\n\r\n<p>Standard distro</p>\r\n', 150000, 'JumperAbuGelap', 600, 100, '2016-12-05 05:45:46', '2016-12-13 03:28:36'),
(25, 4, 'Hoodie Jumper - Merah', '<p>-Cotton fleece</p>\r\n\r\n<p>-Polos</p>\r\n\r\n<p>Standard distro</p>\r\n', 150000, 'JumperMerah', 600, 100, '2016-12-05 05:46:08', '2016-12-13 03:27:24'),
(26, 4, '  Hoodie Jumper - Biru Benhur', '<p>-Cotton fleece</p>\r\n\r\n<p>-polos</p>\r\n\r\n<p>Standard distro</p>\r\n', 150000, 'JumperBiru', 600, 100, '2016-12-05 05:46:31', '2016-12-13 03:25:55'),
(27, 3, 'Tuskbag – Rolla Grey', '<p>3 Zipper Pocket<br />\r\nUp To 14&Prime; Laptop Size<br />\r\nBasic Laptop Compartment<br />\r\nPadded Shoulder Strap<br />\r\nMagnetic Front Buckle<br />\r\nOrganizer</p>\r\n', 170000, 'TuskbagRollaGrey', 600, 50, '2016-12-05 05:48:30', '2016-12-13 03:17:53'),
(28, 3, 'Tuskbag-Brown', '<p>3 Zipper Pocket<br />\r\nUp To 14&Prime; Laptop Size<br />\r\nBasic Laptop Compartment<br />\r\nPadded Shoulder Strap<br />\r\nMagnetic Front Buckle<br />\r\nOrganizer</p>\r\n', 160000, 'TuskbagBrown', 600, 50, '2016-12-05 05:49:04', '2016-12-13 03:14:38'),
(29, 3, 'Tuskbag-Gray', '<p>-Bahan : Polyester fabric + kulit imitasi (faux leather)<br />\r\n-Dimensi : 32 x 27 x 13 cm<br />\r\n-Terdapat 1 ruang utama, 1 ruang tambahan di bagian depan, 1 ruang tambahan di bagian penutup tas, dan 2 kantong di bagian samping<br />\r\n-Terdapat slot laptop yang dapat memuat laptop maksimum 12 inch<br />\r\n-Penutup ruang utama tas menggunakan penutup kancing magnetik ditambah tali serut<br />\r\n-Panjang tali tas dapat diatur sesuai dengan keinginan</p>\r\n', 180000, 'TuskbagGray', 800, 50, '2016-12-05 05:49:24', '2016-12-13 03:11:26'),
(30, 3, 'Tuskbag-Taro', '<p>3 Zipper Pocket<br />\r\nUp To 14 Laptop Size<br />\r\nBasic Laptop Compartment<br />\r\nPadded Shoulder Strap<br />\r\nMagnetic Front Buckle<br />\r\nOrganizer<br />\r\n&nbsp;</p>\r\n', 220000, 'TuskbagTaro', 650, 50, '2016-12-05 05:49:55', '2016-12-13 03:03:39'),
(31, 3, 'Tuskbag-Tosca', '<p>-Ukuran 40 x 30 x 12 cm<br />\r\n- 450 gram<br />\r\n- poly fabric<br />\r\n- faux leather<br />\r\n- 2 zipper pocket<br />\r\n- 14&quot; notebook compartment<br />\r\n- padded shoulder strap<br />\r\n- magnetic front buckle</p>\r\n', 210000, 'TuskbagTosca', 450, 50, '2016-12-05 05:50:37', '2016-12-13 02:59:42'),
(32, 3, 'Tuskbag – Boru Black', '<p>1 ruang laptop hingga 15&Prime;<br />\r\nAdjustable Chest Strap<br />\r\nSaku botol minuman di samping<br />\r\nFront &amp; Up Zipper Compartment<br />\r\nBreathable Back System Foam</p>\r\n', 120000, '  TuskbagBlack', 600, 50, '2016-12-05 05:50:58', '2016-12-13 02:56:21');

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
(39, 31, 'EUQ1m.jpg', 'images/products/thumb/EUQ1m.jpg', 'images/products/full/EUQ1m.jpg', '2016-12-05 22:42:43', '2016-12-05 22:42:43', 0),
(40, 32, 'ysu0c.jpg', 'images/products/thumb/ysu0c.jpg', 'images/products/full/ysu0c.jpg', '2016-12-05 22:42:57', '2016-12-05 22:42:57', 0);

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
(3, 2);

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
(1, 32, 3, 'MTQ4MTUyMzYwMQ==', '2016-12-12', 1, '6', 6, 'Rp 6,00', 'Terbayar', 'images/bukti/1481524073.png', 51000, 1, 1, '2016-12-11 23:20:34', '2016-12-11 23:32:43'),
(2, 31, 2, 'MTQ4MTUyNDU3Mw==', '2016-12-12', 2, '5', 10, 'Rp 10,00', 'Belum Terbayar', 'Belum Kirim bukti', 0, 0, 0, '2016-12-11 23:36:32', '2016-12-11 23:36:32'),
(3, 29, 3, 'MTQ4MTYwNDU4NQ==', '2016-12-13', 1, '3', 3, 'Rp 3,00', 'Belum Terbayar', 'images/bukti/1481622172.png', 8000, 1, 1, '2016-12-12 21:50:28', '2016-12-13 04:01:03');

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
(1, 'admin', 'admin@admin.com', '$2y$10$bjhpJ0gk6.QAHlByRw.U5e2g.5rNBwK2IF3wXzSTjReBA7Jbo.ZXW', 'QJGvxQh5WenpSoaC8r7SviCXWDa8xpFecTTbgRnRol8uLEEOAYiJoLu3RPFe', 1, '', '2016-12-03 19:13:51', '2016-12-13 02:45:18'),
(2, 'adab ', 'adab.inayah@mail.ugm.ac.id', '$2y$10$M52POsFH6Tf1gKhzCgWVG.VHoG7Tm1oVQA6/F54v5/1HDDS3Z9/su', '3ZpXPG5NBmGMYOadFDRpvAKd7ztrVLMyMeDlNBHRS08pEmzgXyKGHQuijUue', 1, NULL, '2016-12-05 01:00:42', '2016-12-05 01:06:21'),
(3, 'agus rianto', 'agusriantoo71@gmail.com', '$2y$10$M52POsFH6Tf1gKhzCgWVG.VHoG7Tm1oVQA6/F54v5/1HDDS3Z9/su', 'HH5ydmO99e3wcn0U0AsW7u4Ioa2x0zEbjlYQhI6jqYBbhn5i94uDKfHMqlkp', 1, NULL, '2016-12-05 22:49:57', '2016-12-11 23:35:22');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
