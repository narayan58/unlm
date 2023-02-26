-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 08:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `verification_code` varchar(100) DEFAULT NULL,
  `verification_date` varchar(100) DEFAULT NULL,
  `verification_status` enum('1','0') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile`, `address`, `city`, `slug`, `email`, `password`, `remember_token`, `status`, `verification_code`, `verification_date`, `verification_status`, `created_at`, `updated_at`) VALUES
(6, 'Caleb Slater', NULL, NULL, NULL, 'caleb-slater', 'bawilulad@mailinator.com', '$2y$10$knA1tmav3PFo7JobhImG4.22WmvJxP7PX/lq31dKN/Jukb4Ke07d.', NULL, '1', '1137R', NULL, '0', '2020-05-12 19:28:26', '2020-05-12 19:28:26'),
(7, 'Yamaha Adhikari', '989952623', 'Maitidevi, Kathmandu Nepal', 'Kathmandu1', 'yamaha', 'adhkikarin641@gmail.com', '$2y$10$Vql.XGfpFUzlk2bRXI6fJO56Cv3PL9bfyYPPyViKvKVl3TURAKQ9W', '9p3JaFhKKDUAt7jaG8R9mv96DZfiRPsTq8AuwIjDo7FsP8pJHmSY0Hp2Coff', '1', '3178K', NULL, '0', '2020-05-12 19:34:12', '2021-06-08 11:22:21'),
(8, 'Narayan Adhikari', NULL, NULL, NULL, 'narayan-adhikari', 'adhikakrin641@gmail.coma', '$2y$10$BlOz17qpYH/McCNgx0/dHuAwja/mokQZv1qI0SeJrCB1Lzf5a640S', NULL, '1', '8894P', NULL, '0', '2020-05-20 08:20:10', '2020-05-20 08:20:10'),
(9, 'Narayan Adhikari', NULL, NULL, NULL, 'narayan-adhikari-1', 'adhikarin641@gmail.coms', '$2y$10$lnf1kcBioNb0eJbffVU.neM6mOHPXGGLLEiWZ8CYgfNNZBKXX.5BG', NULL, '1', '2262S', NULL, '0', '2020-05-20 08:23:18', '2020-05-20 08:23:18'),
(10, 'Narayan Adhikari', NULL, NULL, NULL, 'narayan-adhikari-2', 'adhikarin641@gmail.comaa', '$2y$10$AsG7iqPhIntNpi/1M4W5tOlEkTdxjMWg2SjJU1ErBQog.pwKfLrjS', 'zo53WbNQOTiMQb4WiTC2la3i0Pif35C70mQ77myN87NIwPPv62EHuTaMixVM', '1', '2049X', NULL, '0', '2020-05-20 08:24:55', '2020-05-20 08:24:55'),
(11, 'Yamaha', NULL, NULL, NULL, 'yamaha-1', 'adhikarin641@gmail.comll', '$2y$10$KM/c4dmWDhQn0pilcR.dz.tBp8RLvkKZirKfh906L7inmeeLoIaTm', NULL, '1', '7419R', NULL, '0', '2020-05-20 08:29:13', '2020-05-20 08:29:13'),
(12, 'Arsenio Battle', NULL, NULL, NULL, 'arsenio-battle', 'gifuleruh@mailinator.net', '$2y$10$YvdCyZXs6ztSrQ7bDqmAC.KiPJxCVnx1X9Y6pNN28sNqqlH0.Hzc2', NULL, '1', '4865V', NULL, '0', '2020-05-20 08:36:10', '2020-05-20 08:36:10'),
(13, 'Nabin Dhakal', NULL, NULL, NULL, 'nabin-dhakal', 'ndhakal10@gmail.com', '$2y$10$i1d5rhWRmW92MWWiTzCg1.j1zu6VuKrRtS4Kocivu.ja0n8Kgkbsi', 'ERy2EvM2Y4O5grk4DxEicmgdHSzmlaUKUJ7rApLULrzxqcYhKmvQASF4lEOM', '1', '3090U', NULL, '0', '2020-06-08 09:08:43', '2020-06-08 09:08:43'),
(14, 'Nivaj Shakya', NULL, NULL, NULL, 'nivaj-shakya', 'nivajshakya@gmail.com', '$2y$10$SWa.QTSnyWMoXKc4mCFOGOgChljb9EcX7l3LXMmFEchlAizJK8nsm', NULL, '1', '8082Q', NULL, '0', '2020-08-11 22:08:37', '2020-08-11 22:08:37'),
(15, 'New Narayan', '9864148541', 'Maitidevi, Kathmandu Nepal', 'Kathmandu', 'new-narayan', 'adhikarin6412@gmail.com', '$2y$10$VrIg68RvVjSNfJvQ4fxbxO1l4usOJtgKuc/v8KCLFHkY0/drP3bwq', NULL, '1', '4724Q', NULL, '0', '2021-06-09 13:17:13', '2021-06-09 13:17:13'),
(16, 'Narayan Adhikari', '9864832952', 'Maitidevi, Kathmandu Nepal', 'Kathmandu', 'narayan-adhikari-3', 'adhikarin641@gmail.com', '$2y$10$Y61co.DW6rxRsdycAknaVOYFLbOBuBD6ypr8AsPYkEa3pmvl4OLxC', NULL, '1', '8348K', NULL, '0', '2022-08-16 10:05:56', '2022-08-16 10:05:56'),
(17, 'Ram Kumar Sharma', '98641414141', 'Kathmandu', 'jah', 'ram-kumar-sharma', 'ram@gmail.com', '$2y$10$GwiKxIIOI.QLZWhEQmwCFeqlfoPZUz9Bn6Xq5k4paaP76lfirdc9S', NULL, '1', '7493S', NULL, '0', '2022-08-16 13:01:25', '2022-08-16 13:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2019_11_11_082110_create_tbl_provider_table', 1),
(36, '2014_10_12_000000_create_users_table', 2),
(37, '2014_10_12_100000_create_password_resets_table', 2),
(38, '2019_08_19_000000_create_failed_jobs_table', 2),
(39, '2019_11_10_093032_alter_users_table', 2),
(40, '2019_11_11_073258_create_user_provider_table', 2),
(41, '2017_08_11_073824_create_menus_wp_table', 3),
(42, '2017_08_11_074006_create_menu_items_wp_table', 3),
(43, '2019_12_14_000001_create_personal_access_tokens_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nivajshakya@gmail.com', '$2y$10$um/kDSIc87ALwLW44VaAT.S4akRgUPY3eAjFi1eDFEtah9akUgixy', '2019-11-11 19:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `rel_post_category`
--

CREATE TABLE `rel_post_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rel_post_category`
--

INSERT INTO `rel_post_category` (`id`, `post_id`, `category_id`) VALUES
(14, 13, 8),
(15, 14, 8);

-- --------------------------------------------------------

--
-- Table structure for table `rel_post_tag`
--

CREATE TABLE `rel_post_tag` (
  `id` int(10) NOT NULL,
  `post_id` int(10) DEFAULT NULL,
  `tag_id` int(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rel_post_tag`
--

INSERT INTO `rel_post_tag` (`id`, `post_id`, `tag_id`, `updated_at`, `created_at`) VALUES
(1, 5, 2, '2020-04-12 07:26:41', '2020-04-12 07:26:41'),
(2, 5, 3, '2020-04-12 07:35:57', '2020-04-12 07:35:57'),
(3, 9, 4, '2020-04-12 08:18:55', '2020-04-12 08:18:55'),
(4, 10, 5, '2020-04-12 08:34:54', '2020-04-12 08:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_groups`
--

CREATE TABLE `tbl_admin_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin_groups`
--

INSERT INTO `tbl_admin_groups` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Have all the access', '1', NULL, NULL),
(2, 'Sub-admin', 'User PEFA', '1', NULL, '2019-01-28 02:17:26'),
(3, 'Accounts', 'account department', '1', '2019-04-04 14:04:01', '2019-04-04 14:04:01'),
(4, 'ram ram', 'ram hry', '0', '2019-04-10 12:23:47', '2019-12-11 02:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_menus`
--

CREATE TABLE `tbl_admin_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `menu_name` varchar(191) DEFAULT NULL,
  `menu_controller` varchar(191) DEFAULT NULL,
  `menu_link` varchar(191) DEFAULT NULL,
  `menu_css` varchar(191) DEFAULT NULL,
  `menu_icon` varchar(191) DEFAULT NULL,
  `menu_order` int(10) UNSIGNED NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin_menus`
--

INSERT INTO `tbl_admin_menus` (`id`, `parent_id`, `menu_name`, `menu_controller`, `menu_link`, `menu_css`, `menu_icon`, `menu_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'CMS', NULL, NULL, NULL, 'fa-gears', 1, '1', NULL, NULL),
(2, 0, 'Logs', NULL, NULL, NULL, 'fa-gears', 10, '1', NULL, NULL),
(3, 2, 'Login Logs', 'AdminSiteSettingController', 'successlogin', NULL, 'fa-bullseye', 1, '0', NULL, NULL),
(4, 2, 'Fail Login Logs', 'AdminSiteSettingController', 'faillogin', NULL, 'fa-bullseye', 2, '0', NULL, NULL),
(5, 0, 'Staff Management', 'AdminUIComponentController', NULL, NULL, 'fa-bullseye', 1, '1', NULL, NULL),
(6, 8, 'Pages', 'AdminPagesController', 'pages.index', NULL, 'fa-bullseye', 3, '1', NULL, NULL),
(7, 0, 'Roles Management', NULL, NULL, NULL, 'fa-gears', 4, '1', NULL, NULL),
(8, 0, 'Media Managemnet', NULL, 'dashboard', NULL, 'fa-gears', 3, '1', NULL, NULL),
(9, 7, 'User Groups', 'AdminGroupController', 'usergroup.index', NULL, 'fa-bullseye', 1, '1', NULL, NULL),
(10, 7, 'Roles Access', 'AdminRoleAccessController', 'role-access.index', NULL, 'fa-gears', 1, '1', NULL, NULL),
(12, 1, 'Site Managment', 'AdminSiteSettingController', 'setting', NULL, 'fa-gears', 5, '1', NULL, NULL),
(13, 8, 'Posts', 'AdminPostsController', 'posts.index', NULL, 'fa-gears', 2, '1', NULL, NULL),
(14, 1, 'Album', 'AdminAlbumController', 'album.index', NULL, 'fa-bullseye', 4, '0', NULL, NULL),
(15, 8, 'Category', 'AdminCategoryController', 'category.index', NULL, 'fa-bullseye', 1, '1', NULL, NULL),
(16, 1, 'NewsLetter', 'AdminNewsletterController', 'newsletter.index', NULL, 'fa-bullseye', 4, '0', NULL, NULL),
(17, 8, 'Media Library', 'AdminDashboardController', 'medialibrary', NULL, 'fa-gears', 5, '1', NULL, NULL),
(18, 1, 'Pop Up', 'AdminPopupController', 'popup.index', NULL, 'fa-gears', 4, '0', NULL, NULL),
(21, 1, 'Partner', 'AdminPartnerController', 'partner.index', NULL, 'fa-bullseye', 3, '0', NULL, NULL),
(22, 8, 'FAQ', 'AdminFaqController', 'faq.index', NULL, 'fa-bullseye', 3, '1', NULL, NULL),
(23, 5, 'Staff Category', 'AdminStaffCategoryController', 'staffcategory.index', NULL, 'fa-gears', 1, '0', NULL, NULL),
(24, 1, 'Slider', 'AdminSliderController', 'slider.index', NULL, 'fa-bullseye', 5, '1', NULL, NULL),
(25, 1, 'Video', 'AdminVideoController', 'video.index', NULL, 'fa-bullseye', 4, '0', NULL, NULL),
(26, 1, 'Pillar', 'AdminPillarController', 'pillar.index', NULL, 'fa-bullseye', 5, '0', NULL, NULL),
(27, 1, 'Feedback List', 'AdminContactController', 'contact.index', NULL, 'fa-gears', 5, '0', NULL, NULL),
(28, 1, 'Procurement Financial', 'AdminProcurementFinancialController', 'procurementfinancial.index', NULL, 'fa-bullseye', 1, '0', NULL, NULL),
(29, 2, 'Login Logs', 'AdminSiteSettingController', 'successlogin', NULL, 'fa-bullseye', 1, '1', NULL, NULL),
(30, 2, 'Fail Login Logs', 'AdminSiteSettingController', 'faillogin', NULL, 'fa-bullseye', 2, '1', NULL, NULL),
(32, 8, 'Why Us', 'AdminWhyUsController', 'why-us.index', NULL, 'fa-bullseye', 7, '0', NULL, NULL),
(33, 1, 'Teams', 'TeamController', 'teams.index', NULL, 'fa-bullseye', 6, '0', NULL, NULL),
(34, 1, 'Menu', 'AdminMenuController', 'menu', NULL, 'fa-bullseye', 4, '0', NULL, NULL),
(35, 1, 'Testimonial', 'TestimonialController', 'testimonial.index', NULL, 'fa-bullseye', 4, '0', NULL, NULL),
(36, 0, 'Album', NULL, NULL, NULL, 'fa-gears', 3, '0', NULL, NULL),
(37, 1, 'Album', 'AlbumController', 'album.index', NULL, 'fa-bullseye', 5, '0', NULL, NULL),
(40, 1, 'Download', 'DownloadController', 'download.index', NULL, 'fa-bullseye', 4, '0', NULL, NULL),
(42, 1, 'Offer', 'OfferController', 'offer.index', NULL, 'fa-bullseye', 4, '0', NULL, NULL),
(50, 1, 'Feature', 'FeatureController', 'feature.index', NULL, 'fa-bullseye', 9, '0', NULL, NULL),
(51, 0, 'Product Management', NULL, NULL, NULL, 'fa-gears', 6, '1', NULL, NULL),
(52, 51, 'Product Category', 'ProductCategoryController', 'product-category.index', NULL, 'fa-bullseye', 1, '1', NULL, NULL),
(53, 51, 'Product', 'ProductController', 'product.index', NULL, 'fa-bullseye', 2, '1', NULL, NULL),
(54, 0, 'Customers', NULL, NULL, NULL, 'fa-gears', 4, '1', NULL, NULL),
(55, 54, 'Customer List', 'CustomerController', 'customer.index', NULL, 'fa-bullseye', 2, '1', NULL, NULL),
(56, 51, 'Cart List', 'ProductController', 'cart.list', NULL, 'fa-bullseye', 3, '1', NULL, NULL),
(57, 51, 'Checkout List', 'ProductController', 'checkout.list', NULL, 'fa-bullseye', 4, '1', NULL, NULL),
(58, 51, 'Product SubCategory', 'ProductSubCategoryController', 'product-sub-category.index', NULL, 'fa-bullseye', 1, '1', NULL, NULL),
(59, 0, 'Order Management', NULL, NULL, NULL, 'fa-gears', 6, '1', NULL, NULL),
(60, 59, 'Order List', 'OrderController', 'order.index', NULL, 'fa-bullseye', 1, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_roles`
--

CREATE TABLE `tbl_admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `allow_view` enum('1','0') NOT NULL DEFAULT '1',
  `allow_add` enum('1','0') NOT NULL DEFAULT '1',
  `allow_edit` enum('1','0') NOT NULL DEFAULT '1',
  `allow_delete` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin_roles`
--

INSERT INTO `tbl_admin_roles` (`id`, `user_group_id`, `menu_id`, `allow_view`, `allow_add`, `allow_edit`, `allow_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '1', '1', '1', '2018-01-09 04:43:13', NULL),
(2, 1, 2, '1', '1', '1', '1', '2018-01-09 04:43:13', NULL),
(3, 1, 7, '1', '1', '1', '1', '2018-01-09 04:43:13', NULL),
(4, 1, 8, '1', '1', '1', '1', '2018-01-09 04:43:13', NULL),
(5, 1, 9, '1', '1', '1', '1', '2018-01-09 04:43:13', NULL),
(6, 1, 10, '1', '1', '1', '1', '2018-01-09 04:43:13', NULL),
(7, 1, 5, '1', '1', '1', '1', '2018-01-09 04:43:13', NULL),
(8, 1, 6, '1', '1', '1', '1', '2018-01-09 04:43:13', NULL),
(9, 1, 3, '1', '0', '0', '0', '2018-01-31 10:49:00', NULL),
(10, 1, 4, '1', '0', '0', '0', '2018-01-31 10:49:00', NULL),
(11, 2, 1, '0', '0', '0', '0', '2018-01-31 10:49:14', NULL),
(12, 2, 2, '1', '1', '1', '1', '2018-01-31 10:49:14', NULL),
(13, 2, 3, '1', '1', '1', '1', '2018-01-31 10:49:14', NULL),
(14, 2, 4, '1', '1', '1', '1', '2018-01-31 10:49:14', NULL),
(15, 2, 5, '1', '1', '1', '1', '2018-01-31 10:49:14', NULL),
(16, 2, 6, '0', '0', '0', '0', '2018-01-31 10:49:14', NULL),
(17, 2, 7, '0', '0', '0', '0', '2018-01-31 10:49:14', NULL),
(18, 2, 8, '1', '1', '1', '1', '2018-01-31 10:49:14', NULL),
(19, 2, 9, '0', '0', '0', '0', '2018-01-31 10:49:14', NULL),
(20, 2, 10, '0', '0', '0', '0', '2018-01-31 10:49:14', NULL),
(31, 1, 11, '1', '1', '1', '1', '2018-03-04 04:12:14', NULL),
(32, 2, 11, '0', '0', '0', '0', '2018-03-29 22:44:39', NULL),
(34, 1, 12, '1', '1', '1', '1', '2018-05-22 04:57:02', NULL),
(35, 1, 13, '1', '1', '1', '1', '2018-05-30 02:23:52', NULL),
(51, 1, 14, '1', '1', '1', '1', '2018-07-29 23:40:53', NULL),
(52, 1, 15, '1', '1', '1', '1', '2018-09-26 22:38:16', NULL),
(53, 1, 16, '1', '1', '1', '1', '2018-12-11 04:54:06', NULL),
(54, 1, 17, '1', '1', '1', '1', '2018-12-25 23:22:46', NULL),
(55, 1, 18, '1', '1', '1', '1', '2018-12-25 23:22:46', NULL),
(57, 1, 19, '1', '1', '1', '1', '2019-01-28 05:00:59', NULL),
(58, 1, 20, '1', '1', '1', '1', '2019-01-28 05:01:00', NULL),
(59, 1, 21, '1', '1', '1', '1', '2019-01-29 02:10:15', NULL),
(60, 1, 22, '1', '1', '1', '1', '2019-01-29 03:15:55', NULL),
(61, 1, 23, '1', '1', '1', '1', '2019-01-29 03:49:12', NULL),
(62, 1, 24, '1', '1', '1', '1', '2019-02-05 03:48:13', NULL),
(63, 1, 25, '1', '1', '1', '1', '2019-02-05 04:46:47', NULL),
(64, 1, 26, '1', '1', '1', '1', '2019-02-05 22:32:30', NULL),
(65, 1, 27, '1', '1', '1', '1', '2019-02-10 23:57:23', NULL),
(66, 1, 28, '1', '1', '1', '1', '2019-03-26 05:28:47', NULL),
(67, 2, 12, '0', '0', '0', '0', '2019-04-03 23:20:41', NULL),
(68, 2, 13, '0', '0', '0', '0', '2019-04-03 23:20:41', NULL),
(69, 2, 14, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(70, 2, 15, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(71, 2, 16, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(72, 2, 17, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(73, 2, 18, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(74, 2, 19, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(75, 2, 20, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(76, 2, 21, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(77, 2, 22, '1', '1', '1', '1', '2019-04-03 23:20:42', NULL),
(78, 2, 23, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(79, 2, 24, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(80, 2, 25, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(81, 2, 26, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(82, 2, 27, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(83, 2, 28, '0', '0', '0', '0', '2019-04-03 23:20:42', NULL),
(84, 3, 1, '1', '1', '1', '1', '2019-04-04 04:19:08', NULL),
(85, 3, 2, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(86, 3, 3, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(87, 3, 4, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(88, 3, 5, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(89, 3, 6, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(90, 3, 7, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(91, 3, 8, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(92, 3, 9, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(93, 3, 10, '0', '0', '0', '0', '2019-04-04 04:19:08', NULL),
(94, 3, 11, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(95, 3, 12, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(96, 3, 13, '1', '1', '1', '1', '2019-04-04 04:19:09', NULL),
(97, 3, 14, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(98, 3, 15, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(99, 3, 16, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(100, 3, 17, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(101, 3, 18, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(102, 3, 19, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(103, 3, 20, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(104, 3, 21, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(105, 3, 22, '0', '0', '0', '0', '2019-04-04 04:19:09', NULL),
(106, 3, 23, '0', '0', '0', '0', '2019-04-04 04:19:10', NULL),
(107, 3, 24, '0', '0', '0', '0', '2019-04-04 04:19:10', NULL),
(108, 3, 25, '0', '0', '0', '0', '2019-04-04 04:19:10', NULL),
(109, 3, 26, '0', '0', '0', '0', '2019-04-04 04:19:10', NULL),
(110, 3, 27, '0', '0', '0', '0', '2019-04-04 04:19:10', NULL),
(111, 3, 28, '1', '1', '1', '1', '2019-04-04 04:19:10', NULL),
(112, 1, 29, '1', '1', '1', '1', '2019-10-30 07:06:24', NULL),
(113, 1, 30, '1', '1', '1', '1', '2019-10-30 07:06:24', NULL),
(114, 1, 31, '1', '1', '1', '1', '2019-11-06 06:20:55', NULL),
(115, 1, 32, '1', '1', '1', '1', '2019-11-28 06:54:29', NULL),
(116, 2, 29, '1', '1', '1', '1', '2019-12-11 09:27:10', NULL),
(117, 2, 30, '1', '1', '1', '1', '2019-12-11 09:27:11', NULL),
(118, 2, 32, '0', '0', '0', '0', '2019-12-11 09:27:11', NULL),
(119, 1, 33, '1', '1', '1', '1', '2019-12-11 10:27:07', NULL),
(120, 1, 34, '1', '1', '1', '1', '2019-12-19 06:27:47', NULL),
(121, 1, 35, '1', '1', '1', '1', '2019-12-19 08:30:42', NULL),
(122, 1, 36, '1', '1', '1', '1', '2019-12-19 10:36:54', NULL),
(123, 1, 37, '1', '1', '1', '1', '2019-12-20 05:48:18', NULL),
(124, 1, 38, '1', '1', '1', '1', '2019-12-20 07:02:14', NULL),
(125, 1, 39, '1', '1', '1', '1', '2019-12-20 07:07:11', NULL),
(126, 1, 40, '1', '1', '1', '1', '2019-12-20 10:40:40', NULL),
(127, 1, 41, '1', '1', '1', '1', '2019-12-20 17:47:05', NULL),
(128, 1, 42, '1', '1', '1', '1', '2020-04-12 12:11:47', NULL),
(129, 1, 43, '1', '1', '1', '1', '2020-04-12 14:45:11', NULL),
(130, 1, 44, '1', '1', '1', '1', '2020-04-12 14:45:11', NULL),
(131, 1, 45, '1', '1', '1', '1', '2020-04-12 14:45:11', NULL),
(132, 1, 46, '1', '1', '1', '1', '2020-04-12 14:45:11', NULL),
(133, 1, 47, '1', '1', '1', '1', '2020-04-12 16:58:53', NULL),
(134, 1, 48, '1', '1', '1', '1', '2020-04-12 16:58:53', NULL),
(135, 1, 49, '1', '1', '1', '1', '2020-04-20 15:51:06', NULL),
(136, 1, 50, '1', '1', '1', '1', '2020-04-20 17:41:12', NULL),
(137, 1, 51, '1', '1', '1', '1', '2020-05-04 11:43:11', NULL),
(138, 1, 52, '1', '1', '1', '1', '2020-05-04 11:43:11', NULL),
(139, 1, 53, '1', '1', '1', '1', '2020-05-04 11:43:11', NULL),
(140, 1, 54, '1', '1', '1', '1', '2020-05-20 18:33:02', NULL),
(141, 1, 55, '1', '1', '1', '1', '2020-05-20 18:33:02', NULL),
(142, 1, 56, '1', '1', '1', '1', '2020-05-20 18:46:41', NULL),
(143, 1, 57, '1', '1', '1', '1', '2020-05-20 18:46:41', NULL),
(144, 3, 29, '0', '0', '0', '0', '2021-04-03 15:42:06', NULL),
(145, 3, 30, '0', '0', '0', '0', '2021-04-03 15:42:06', NULL),
(146, 3, 32, '0', '0', '0', '0', '2021-04-03 15:42:06', NULL),
(147, 3, 33, '0', '0', '0', '0', '2021-04-03 15:42:06', NULL),
(148, 3, 34, '0', '0', '0', '0', '2021-04-03 15:42:07', NULL),
(149, 3, 35, '0', '0', '0', '0', '2021-04-03 15:42:07', NULL),
(150, 3, 36, '0', '0', '0', '0', '2021-04-03 15:42:07', NULL),
(151, 3, 37, '0', '0', '0', '0', '2021-04-03 15:42:07', NULL),
(152, 3, 40, '0', '0', '0', '0', '2021-04-03 15:42:07', NULL),
(153, 3, 42, '0', '0', '0', '0', '2021-04-03 15:42:07', NULL),
(154, 3, 50, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(155, 3, 51, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(156, 3, 52, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(157, 3, 53, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(158, 3, 54, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(159, 3, 55, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(160, 3, 56, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(161, 3, 57, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(162, 3, 58, '0', '0', '0', '0', '2021-04-03 15:42:08', NULL),
(163, 1, 58, '1', '1', '1', '1', '2021-04-03 15:42:18', NULL),
(164, 1, 59, '1', '0', '0', '0', '2022-08-16 18:52:12', NULL),
(165, 1, 60, '1', '1', '1', '1', '2022-08-16 18:52:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE `tbl_admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobileno` varchar(20) DEFAULT NULL,
  `ui_skin` varchar(50) DEFAULT 'skin-blue',
  `user_group_id` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `lastlogin` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `username`, `password`, `name`, `email`, `mobileno`, `ui_skin`, `user_group_id`, `status`, `lastlogin`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$10$EMSuRwhlVNfVNuw8aCc09u0r3NZG1qpDiCLKfcYsLSvdLQNVmyHBW', 'SuperAdmiN', 'info@gmail.com', '9841980800', 'skin-purple-light', 1, '1', '2022-08-16 18:47:18', '2017-09-21 09:15:02', '2022-08-16 13:02:18'),
(5, 'accountant', '$2y$10$aa0ejtM5fqXQBcV/fRqXf.zJ4.Wo4q8YBaEj2GzVUbACnPHASMqsK', 'Accountant Name', 'account@gmail.com', '9841414141', 'skin-blue', 3, '1', NULL, '2022-08-16 09:53:20', '2022-08-16 09:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `updated_by` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `slug`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 'Blog', 'blog', 'Blog Category', '1', 1, 0, '2020-04-12 06:55:22', '2020-04-12 06:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`id`, `product_id`, `customer_id`, `status`, `created_at`, `updated_at`) VALUES
(9, 2, 7, '0', '2020-05-20 12:26:22', '2020-05-20 12:26:22'),
(10, 3, 7, '0', '2020-05-20 12:26:22', '2020-05-20 12:26:22'),
(11, 2, 7, '0', '2020-05-20 20:37:18', '2020-05-20 20:37:18'),
(12, 2, 13, '0', '2020-06-08 09:10:08', '2020-06-08 09:10:08'),
(13, 4, 14, '0', '2020-08-11 22:09:28', '2020-08-11 22:09:28'),
(14, 2, 7, '0', '2021-04-04 14:18:54', '2021-04-04 14:18:54'),
(15, 2, 7, '0', '2021-04-04 17:13:29', '2021-04-04 17:13:29'),
(16, 4, 7, '0', '2021-04-04 17:15:01', '2021-04-04 17:15:01'),
(17, 4, 7, '0', '2021-04-07 17:06:03', '2021-04-07 17:06:03'),
(18, 5, 7, '0', '2021-04-17 11:45:43', '2021-04-17 11:45:43'),
(19, 2, 7, '0', '2021-05-02 07:45:42', '2021-05-02 07:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `title`, `description`, `sort_order`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Question Three', '<p>Description three</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 280px; top: 36px;\">&nbsp;</div>', 5, '1', 1, 1, '2019-11-05 21:46:36', '2020-04-12 06:17:51'),
(2, 'Question Two', '<p>Description two</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 235px; top: 36px;\">&nbsp;</div>', 4, '1', 1, 1, '2019-11-05 21:46:42', '2020-04-12 06:17:34'),
(3, 'Question one', '<p>Description One</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 300px; top: 36px;\">&nbsp;</div>', 3, '1', 1, 1, '2019-12-20 02:52:28', '2020-04-12 06:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorite`
--

CREATE TABLE `tbl_favorite` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_favorite`
--

INSERT INTO `tbl_favorite` (`id`, `customer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 14, 2, '2020-05-20 08:44:52', '2020-05-20 08:44:52'),
(4, 7, 2, '2020-05-20 20:42:35', '2020-05-20 20:42:35'),
(5, 13, 2, '2020-06-08 09:57:47', '2020-06-08 09:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneno` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `viewed` tinyint(4) UNSIGNED DEFAULT 0,
  `inserted_date` datetime DEFAULT NULL,
  `status` tinyint(4) UNSIGNED DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `address`, `email`, `phoneno`, `message`, `ip_address`, `viewed`, `inserted_date`, `status`) VALUES
(1, 'Karyn Skinner', 'Dolore quibusdam sol', 'jitagucah@mailinator.com', '+1 (776) 175-9886', 'Quasi est aut ad qua', '::1', 1, '2019-11-27 03:46:30', 1),
(2, 'Karyn Skinner', 'Dolore quibusdam sol', 'jitagucah@mailinator.com', '+1 (776) 175-9886', 'Quasi est aut ad qua', '::1', 1, '2019-11-27 03:46:46', 1),
(3, 'Wayne Kirby', 'Sit nihil qui ducimu', 'xatiqyxi@mailinator.com', '+1 (601) 406-6779', 'Lorem earum accusamu', '::1', 1, '2019-11-27 03:47:25', 1),
(4, 'Hyacinth Huff', NULL, 'jykyso@mailinator.net', '+1 (513) 704-7611', 'Nulla ipsam itaque i', NULL, 0, '2020-04-12 01:36:46', 1),
(5, 'Christen Glenn', NULL, 'peron@mailinator.com', '+1 (997) 866-6761', 'Dolorum incidunt om', NULL, 0, '2020-04-12 01:37:06', 1),
(6, 'Rama Olsen', NULL, 'wisuve@mailinator.com', '+1 (275) 411-3529', 'Ratione ut rerum ill', NULL, 0, '2020-04-12 01:37:12', 1),
(7, 'Elliott Hinton', NULL, 'podymas@mailinator.com', '+1 (895) 901-9792', 'Debitis delectus du', NULL, 1, '2020-04-12 01:37:27', 1),
(8, 'Sara Hoover', NULL, 'gynar@mailinator.com', '+1 (404) 834-9418', 'Dolorum voluptatem', NULL, 1, '2020-04-12 01:38:28', 1),
(9, 'Adena Burt', NULL, 'sedu@mailinator.net', '4555555555', 'Corporis quo impedit', NULL, 0, '2020-05-04 04:03:29', 1),
(10, 'Whitney Maldonado', NULL, 'homyqufet@mailinator.net', '4444444444', 'Unde do debitis vita', NULL, 0, '2020-05-20 02:02:57', 1),
(11, 'Justina Warner', NULL, 'pexiwanu@mailinator.com', '7437437431', 'Voluptates aspernatu', NULL, 0, '2021-05-24 09:54:35', 1),
(12, 'Justina Warner', NULL, 'pexiwanu@mailinator.com', '7437437431', 'Voluptates aspernatu', NULL, 0, '2021-05-24 09:54:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_activity`
--

CREATE TABLE `tbl_login_activity` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `login_date` timestamp NULL DEFAULT NULL,
  `login_device` varchar(256) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_fail_logs`
--

CREATE TABLE `tbl_login_fail_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `fail_password` varchar(191) NOT NULL,
  `ip_address` varchar(191) NOT NULL,
  `login_device` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter_subscription`
--

CREATE TABLE `tbl_newsletter_subscription` (
  `id` int(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `is_subscribe` enum('1','0') DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter_subscription`
--

INSERT INTO `tbl_newsletter_subscription` (`id`, `email`, `is_subscribe`, `updated_at`, `created_at`) VALUES
(1, 'adhikarin641@gmail.com', NULL, '2020-05-05 15:50:40', '2020-05-05 15:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `slug` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `viewcount` int(10) UNSIGNED DEFAULT 1,
  `show_on_homepage` enum('0','1') DEFAULT '0',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `slug`, `title`, `image`, `published_date`, `meta_title`, `meta_keywords`, `meta_description`, `description`, `viewcount`, `show_on_homepage`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(6, 'privacy-policy', 'Privacy Policy', NULL, '2019-12-19', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', '<p><strong>Welcome to Envato&rsquo;s Privacy Policy</strong></p>\r\n<ol start=\"1\">\r\n<li>Hi there, we&rsquo;re Envato Pty Ltd (ABN 11 119 159 741) of Level 1, 121 King Street Melbourne, 3000, Australia (&ldquo;<strong>Envato</strong>&rdquo;) and welcome to our privacy policy which also applies to our Affiliate Companies. This policy sets out how we handle your personal information if you&rsquo;re an Envato user or visitor to our Sites. It applies across Envato Elements, Envato Market, Envato Twenty20, Envato Studio, Envato Sites, Envato Tuts+ and Placeit (the &ldquo;<strong>Sites</strong>&rdquo;).</li>\r\n<li>When we say &lsquo;we&rsquo;, &lsquo;us&rsquo; or &lsquo;Envato&rsquo; it&rsquo;s because that&rsquo;s who we are and we own and run the Sites.</li>\r\n<li>If we say &lsquo;policy&rsquo; we&rsquo;re talking about this privacy policy. If we say &lsquo;user terms&rsquo; we&rsquo;re talking about the rules for using each of the Sites. The rules vary by product and each product makes them separately available and seeks consent to them separately to this policy.</li>\r\n</ol>\r\n<p><strong>The type of personal information we collect</strong></p>\r\n<ol start=\"4\">\r\n<li>We collect certain personal information about visitors and users of our Sites.</li>\r\n<li>The most common types of information we collect include things like: user-names, member names, email addresses, IP addresses, other contact details, survey responses, blogs, photos, payment information such as payment agent details, transactional details, tax information, support queries, forum comments (if applicable), content you direct us to make available on our Sites (such as item descriptions), your actions on our Sites (including any selections or inputs into items) and web and email analytics data. We will also collect personal information from job applications (such as, your CV, the application form itself, cover letter and interview notes).</li>\r\n</ol>\r\n<p><strong>How we collect personal information</strong></p>\r\n<ol start=\"6\">\r\n<li>We collect personal information directly when you provide it to us, automatically as you navigate through the Sites, or through other people when you use services associated with the Sites.</li>\r\n<li>We collect your personal information when you provide it to us when you complete membership registration and buy or provide items or services on our Sites, subscribe to a newsletter, email list, submit feedback, enter a contest, fill out a survey, or send us a communication.</li>\r\n<li>As the operator of digital content marketplaces, we have a legitimate interest in verifying the identity of our authors. We believe that knowing who our authors are will strengthen the integrity of our marketplaces by reducing fraud, making authors more accountable for their content and giving Envato and customers the ability to enforce contracts for authors who break the rules. Envato also has certain legal obligations that require us to know who our authors are in certain circumstances. In light of this, if you are an author we will verify your identity, in particular, your name, full address and date of birth by asking you to show us a Photo ID document. The verification procedure is called Envato Verify. Envato Verify will be carried out by our service provider Jumio Corporation located at 395 Page Mill Road, Suite 150, Palo Alto, California, USA. As part of Envato Verify, you will be asked to take a selfie which will then be compared against your Photo ID document using facial recognition technology. We will use your Photo ID document solely to carry out Envato Verify and delete it after the completion of this process.</li>\r\n</ol>\r\n<p><strong>Personal information we collect about you from others</strong></p>\r\n<ol start=\"9\">\r\n<li>Although we generally collect personal information directly from you, on occasion, we also collect certain categories of personal information about you from other sources. In particular:\r\n<ol>\r\n<li>financial and/or transaction details from payment providers located in the US, UK, and Australia in order to process a transaction;</li>\r\n<li>third party service providers (like Google, Facebook) who are located in the US or UK, which may provide information about you when you link, connect, or login to your account with the third party provider and they send us information such as your registration and profile from that service, this only occurs if you are using Envato Studio. The information varies and is controlled by that service provider or as authorized by you via your privacy settings at that service provider; and</li>\r\n<li>other third party sources/and or partners from Australia, US or UK, whereby we receive additional information about you (to the extent permitted by applicable law), such as demographic data or fraud detection information, and combine it with information we have about you. For example, fraud warnings from service providers like identity verification service. We also receive information about you and your activities on and off the Envato platform through partnerships, or about your experiences and interactions from our partner ad networks. We also receive information about you as a rights holder from our third party authors. For example, information in the form of a model release when your image is used in an item made available on our Sites.</li>\r\n</ol>\r\n</li>\r\n</ol>\r\n<p><strong>How we use personal information</strong></p>\r\n<ol start=\"10\">\r\n<li>We will use your personal information:\r\n<ol>\r\n<li>To fulfil a contract, or take steps linked to a contract: in particular, in facilitating and processing transactions that take place on the Sites, like where you purchase an item from our marketplace.</li>\r\n<li>Where this is necessary for purposes which are in our, or third parties&rsquo;, legitimate interests. These interests include:\r\n<ol>\r\n<li>operating the Sites;</li>\r\n<li>providing you with services described on the Sites;</li>\r\n<li>verifying your identity when you sign in to any of our Sites;</li>\r\n<li>responding to support tickets, and helping facilitate the resolution of any disputes;</li>\r\n<li>updating you with operational news and information about our Sites and services e.g. to notify you about changes to our Sites, website disruptions or security updates;</li>\r\n<li>carrying out technical analysis to determine how to improve the Sites and services we provide;</li>\r\n<li>monitoring activity on the Sites, e.g. to identify potential fraudulent activity and to ensure compliance with the user terms that apply to the Sites;</li>\r\n<li>managing our relationship with you, e.g. by responding to your comments or queries submitted to us on the Sites or asking for your feedback or whether you want to participate in a survey;</li>\r\n<li>managing our legal and operational affairs (including, managing risks relating to content and fraud matters);</li>\r\n<li>training Envato staff about how to best serve our user community;</li>\r\n<li>improving our products and services;</li>\r\n<li>providing general administrative and performance functions and activities; and</li>\r\n<li>verifying your identity by comparing a selfie taken by you against your Photo ID document using facial recognition technology (as is necessary for the establishment, exercise or defense of legal claims); and</li>\r\n<li>processing your job application to Envato.</li>\r\n</ol>\r\n</li>\r\n<li>Where you give us consent:\r\n<ol>\r\n<li>providing you with marketing information about products and services which we feel may interest you; and</li>\r\n<li>customising our services and websites, like advertising that appear on the Site &ndash; where this involves the use of cookies or similar technologies &ndash; in order to provide a more personalised experience.</li>\r\n</ol>\r\n</li>\r\n<li>For purposes which are required by law.</li>\r\n<li>For the purpose of responding to requests by government, a court of law, or law enforcement authorities conducting an investigation.</li>\r\n</ol>\r\n</li>\r\n</ol>\r\n<p><strong>When we disclose your personal information</strong></p>\r\n<ol start=\"11\">\r\n<li>We will disclose personal information to the following recipients:\r\n<ol>\r\n<li>companies that are in the Envato group which are located in Australia, Mexico and the US;</li>\r\n<li>if applicable, authors of any items or services made available to you, so they can facilitate support and license validation, who maybe located in any of the countries our products are available in;</li>\r\n<li>subcontractors and service providers who assist us in connection with the ways we use personal information (as set out above), in particular: website hosting providers which are located in Australia, US and UK; technical and customer support services which are located in Australia, Canada, Philippines, Poland, Mexico, Romania, UK and the US; recruitment agencies which are located in Australia, US and Mexico; marketing and analytics services which are located in the US; security and fraud prevention services which are located in the US; subscription management services which are located in the US; payment processing services which are located in the US, UK and Australia; identification verification services located in the UK; and operational tooling services which are located in the US. Noting that our subcontractors and services providers may also transfer and access such information from other countries in which they have operations.</li>\r\n<li>our professional advisers (lawyers, accountants, financial advisers etc.) which are located in Australia, Ireland, Mexico, UK and USA;</li>\r\n<li>regulators and government authorities in connection with our compliance procedures and obligations;</li>\r\n<li>a purchaser or prospective purchaser of all or part of our assets or our business, and their professional advisers, in connection with the purchase;</li>\r\n<li>a third party to respond to requests relating to a criminal investigation or alleged or suspected illegal activity;</li>\r\n<li>a third party, in order to enforce or defend our rights, or to address financial or reputational risks;</li>\r\n<li>a rights holder in relation to an allegation of intellectual property infringement or any other infringement; and</li>\r\n<li>other recipients where we are authorised or required by law, or requests by government, a court of law, or law enforcement authorities, to do so.</li>\r\n</ol>\r\n</li>\r\n</ol>\r\n<p><strong>Where we transfer and/or store your personal information</strong></p>\r\n<ol start=\"12\">\r\n<li>We are based in Australia and Mexico so your data will be processed in Australia, Mexico and the US. Some of the recipients we have described in section 10 above, and to whom we disclose your personal information, are based in places like Australia, Canada, Ireland, Mexico, Philippines, Poland, Romania, UK, the US, India and Columbia. We do this on the basis of this policy. In order to protect your information, we take care where possible to work with subcontractors and service providers who we believe maintain an acceptable standard of data security compliance.</li>\r\n</ol>\r\n<p><strong>How we keep your personal information secure</strong></p>\r\n<ol start=\"13\">\r\n<li>We store personal information on secure servers that are managed by us and our service providers, and occasionally hard copy files that are kept in a secure location in Australia, Ireland, Mexico and the US. Personal information that we store or transmit is protected by security and access controls, including username and password authentication, two-factor authentication, and data encryption where appropriate.</li>\r\n</ol>\r\n<p><strong>How you can access your personal information</strong></p>\r\n<ol start=\"14\">\r\n<li>You can access some of the personal information that we collect about you by logging in to your account. You also have the right to make a request to access other personal information we hold about you and to request corrections of any errors in that data. You can also close the account you have with us for any of our Sites at any time. To make an access or correction request, contact our privacy champion using the contact details at the end of this policy.</li>\r\n</ol>\r\n<p><strong>Marketing Choices regarding your personal information</strong></p>\r\n<ol start=\"15\">\r\n<li>Where we have your consent to do so (e.g. if you have subscribed to one of our email lists or have indicated that you are interested in receiving offers or information from us), we send you marketing communications by email about products and services that we feel may be of interest to you. You can &lsquo;opt-out&rsquo; of such communications if you would prefer not to receive them in the future by using the &ldquo;unsubscribe&rdquo; facility provided in the communication itself.</li>\r\n<li>You also have choices about cookies, as described below. By modifying your browser preferences, you have the choice to accept all cookies, to be notified when a cookie is set, or to reject all cookies. If you choose to reject cookies some parts of our Sites may not work properly in your case.</li>\r\n</ol>\r\n<p><strong>Cookies (not the type you eat!) and web analytics</strong></p>\r\n<ol start=\"17\">\r\n<li>For more information about how we use cookies, web beacons and similar technologies see our cookie policy&nbsp;<a href=\"https://envato.com/cookies/\">here</a>&nbsp;and for more general information on cookies, see&nbsp;<a href=\"http://www.allaboutcookies.org/\">http://www.allaboutcookies.org</a>.</li>\r\n<li>When you visit our Sites, there&rsquo;s certain information that&rsquo;s recorded which is generally anonymous information and does not reveal your identity. If you&rsquo;re logged into your account some of this information could be associated with your account. We&rsquo;re talking about the following kinds of details:\r\n<ol>\r\n<li>your IP address or proxy server IP address&rsquo;;</li>\r\n<li>the domain name you requested;</li>\r\n<li>the name of your internet service provider is sometimes captured depending on the configuration of your ISP connection;</li>\r\n<li>the date and time of your visit to the website;</li>\r\n<li>the length of your session;</li>\r\n<li>the pages which you have accessed;</li>\r\n<li>the number of times you access our site within any month;</li>\r\n<li>the file URL you look at and information relating to it;</li>\r\n<li>the website which referred you to our Sites;</li>\r\n<li>the operating system which your computer uses; and</li>\r\n<li>the technical capabilities of your web browser.</li>\r\n</ol>\r\n</li>\r\n<li>Occasionally, we will use third party advertising companies to serve ads based on prior visits to our Sites. For example, if you visit our Sites, you may later see an add for our products and services when you visit a different Site. Read more about your options in our&nbsp;<a href=\"https://envato.com/cookies/\">cookie policy</a>.</li>\r\n</ol>\r\n<p><strong>Information about children</strong></p>\r\n<ol start=\"20\">\r\n<li>Our Sites are not suitable for children under the age of 16 years, so if you are under 16 we ask that you do not use our Sites or give us your personal information (if you are a young tech wiz, please direct your nearest responsible adult to use the Sites for you!). If you are from 16 to 18 years, you can browse the Sites but you&rsquo;ll need the supervision of a parent or guardian to become a registered user. It&rsquo;s the responsibility of parents or guardians to monitor their children&rsquo;s use of our Sites.</li>\r\n</ol>\r\n<p><strong>Information you make public or give to others</strong></p>\r\n<ol start=\"21\">\r\n<li>If you make your personal information available to other people, we can&rsquo;t control or accept responsibility for the way they will use or manage that data. There are lots of ways that you can find yourself providing information to other people, like when you post a public message on a forum thread, share information via social media, or make contact with another user (such as a third party Author) whether via our Sites or directly via email. Before making your information publicly available or giving your information to anyone else, think carefully. If giving information to another user via our Sites, ask them how they will handle your information. If you&rsquo;re sharing information via another website, check the privacy policy for that site to understand its information management practices as this privacy policy will not apply.</li>\r\n</ol>\r\n<p><strong>How long we keep your personal information</strong></p>\r\n<ol start=\"22\">\r\n<li>We retain your personal information for as long as is necessary to provide the services to you and others, and to comply with our legal obligations. If you no longer want us to use your personal information or to provide you with the Envato services, you can request that we erase your personal information and close your Envato account. Please note that if you request the erasure of your personal information we will retain information from deleted accounts as necessary for our legitimate business interests, to comply with the law, prevent fraud, collect fees, resolve disputes, troubleshoot problems, assist with investigations or requests by government, a court of law, or law enforcement authorities, enforce the terms of service and take other actions permitted by law. The information we retain will be handled in accordance with this Privacy Policy.</li>\r\n</ol>\r\n<p><strong>When we need to update this policy</strong></p>\r\n<ol start=\"23\">\r\n<li>We will need to change this policy from time to time in order to make sure it stays up to date with the latest legal requirements and any changes to our privacy management practices.</li>\r\n<li>When we do change the policy, we&rsquo;ll make sure to notify you about such changes, where required. A copy of the latest version of this policy will always be available on this page.</li>\r\n</ol>\r\n<p><strong>How you can contact us</strong></p>\r\n<ol start=\"25\">\r\n<li>If you have any questions about our privacy practices or the way in which we have been managing your personal information, please contact our privacy champion in writing at PO Box 16122 Collins Street West Victoria 8007 Australia or&nbsp;<a href=\"mailto:privacy.champion@envato.com\">privacy.champion@envato.com</a>.</li>\r\n<li>We&rsquo;re really glad you made it to the end of the privacy policy, because knowing this stuff is the best way to understand how your personal information is used and how to best manage it!</li>\r\n</ol>\r\n<p><strong>If you&rsquo;re a user or visitor in the European Economic Area these rights also apply to you:</strong></p>\r\n<ol start=\"1\">\r\n<li>For the purposes of applicable EU data protection law (including the General Data Protection Regulation 2016/679 (the &ldquo;<strong>GDPR</strong>&rdquo;), we are a &lsquo;data controller&rsquo; of your personal information.</li>\r\n</ol>\r\n<p><strong>How you can access your personal information</strong></p>\r\n<ol start=\"2\">\r\n<li>You are also entitled to ask us to port your personal information (i.e. to transfer in a structured, commonly used and machine-readable format, to you), to erase it, or restrict its processing. You also have rights to object to some processing that is based on our legitimate interests, such as profiling that we perform for the purposes of direct marketing, and, where we have asked for your consent to process your data, to withdraw this consent as more fully described below.</li>\r\n<li>These rights are limited in some situations &ndash; for example, we can demonstrate that we have a legal requirement to process your personal information. In some instances, this means that we may retain some data even if you withdraw your consent.</li>\r\n<li>Where we require your personal information to comply with legal or contractual obligations, then provision of such data is mandatory: if such data is not provided, then we will not be able to manage our contractual relationship with you, or to meet obligations placed on us. In all other cases, provision of requested personal information is optional.</li>\r\n<li>If you have unresolved concerns you also have the right to complain to data protection authorities. The relevant data protection authority will be the data protection authority of the country: (i) of your habitual residence; (ii) of your place of work; or (iii) in which you consider the alleged infringement has occurred.</li>\r\n</ol>', 1, '0', 1, 1, '1', '2019-12-19 01:14:51', '2020-05-20 07:39:39'),
(9, 'terms-and-conditions', 'Terms and Conditions', NULL, '2020-05-20', 'Terms', 'Terms', 'Terms', '<h2 id=\"welcome\" class=\"t-heading -size-m\">Welcome to Envato Market</h2>\r\n<p class=\"t-body\">1. Hi, we&rsquo;re&nbsp;<a href=\"https://envato.com/\">Envato</a>&nbsp;and welcome! We&rsquo;re happy to have you here and we hope you enjoy your stay. When we say &lsquo;<strong>we</strong>&rsquo;, &lsquo;<strong>us</strong>&rsquo; or &lsquo;<strong>Envato</strong>&rsquo; it&rsquo;s because that&rsquo;s who we are and we own and run the&nbsp;<strong>Envato Market</strong>&nbsp;sites.</p>\r\n<p class=\"t-body\">2. Envato&rsquo;s ecosystem of digital marketplaces helps millions of people around the world get creative and earn online. When you create an account and accept these terms you become a&nbsp;<strong>member</strong>&nbsp;of our community. You will have an&nbsp;<strong>Envato Market account</strong>&nbsp;that will allow you to buy and sell&nbsp;<strong>items</strong>&nbsp;like the ones found on the Envato Market sites and make other related transactions.</p>\r\n<p class=\"t-body\">3. The Envato Market sites are platforms that allow members to buy and sell licenses to use digital items like website themes, production music, motion graphics project files, software code, vectors, images and much, much more. On Envato Market, buyers and authors (sellers) transact with each other directly and we provide the platform to allow the transactions to happen. If you have an Envato Market account, any transactions are logged on your member&rsquo;s statement, which records the payments made by you to authors via Envato Market (as a&nbsp;<strong>buyer</strong>) and by buyers via Envato Market to you (as an&nbsp;<strong>author</strong>).</p>\r\n<p class=\"t-body\">4. The items on Envato Market are owned by the authors, not by us. The items on Envato Market are uploaded at the direction of the author. We provide the platform services; we do not take ownership of the items.</p>\r\n<p class=\"t-body\">5. During your time with us you agree to follow the ground rules outlined in these terms so please read and understand them. If you don&rsquo;t accept the terms then we&rsquo;ll be sad, but you will need to leave because your presence on and use of the Envato Market sites is conditional on your acceptance to be bound by these terms and the&nbsp;<a href=\"https://codecanyon.net/legal/acceptable_use_policy\">Acceptable Use Policy</a>&nbsp;whether you become a member or not.</p>\r\n<h2 id=\"browsing\" class=\"t-heading -size-m\">Envato Websites</h2>\r\n<p class=\"t-body\">6. You can also access Envato Websites via the Envato Market sites. The products offered on Envato Websites (which include hosted theme and hosted starter site subscriptions) are offered by Envato Hosted and Envato Sites and are subject to separate terms and conditions, which you can access here:&nbsp;<a href=\"https://codecanyon.net/legal/market\">Envato Hosted Terms</a>&nbsp;and&nbsp;<a href=\"https://sites.envato.com/terms\">Envato Sites Terms</a>. To avoid any doubt, the Envato Market terms do not apply to the products offered via Envato Websites.</p>\r\n<p class=\"t-body\">7.&nbsp;<strong>Preview Files</strong>: If you stream or download a preview file from our Envato Market sites, you agree that you will not remove any watermarking or other protective measures from the preview file. You agree that you will use the preview file solely for the purposes of evaluating a purchase from Envato Market sites and not for any other purpose.</p>\r\n<h2 id=\"browsing\" class=\"t-heading -size-m\">How browsing and membership works</h2>\r\n<p class=\"t-body\">8.&nbsp;<strong>Browsing</strong>: You need to be 16 years or over to browse the Envato Market sites. We don&rsquo;t knowingly collect any information from anyone aged 16 or under. When browsing the sites you agree to follow our guidelines or instructions and keep in mind that these terms apply to any use of our Envato Market sites whether or not you&rsquo;re a member.</p>\r\n<h3 id=\"membership\" class=\"t-heading -size-s\">Membership</h3>\r\n<p class=\"t-body\">9.&nbsp;<strong>Age</strong>: You need to be 18 years or over to become a member or to buy items. If you&rsquo;re under 18 you will need to get a parent or guardian to buy items or use the account of a parent or legal guardian who is at least 18 years of age, with their permission, and this adult will be responsible for all your activities.</p>\r\n<p class=\"t-body\">10.&nbsp;<strong>Envato Account</strong>: Membership is free. When you become a member you get an Envato Market account that is accessible from any of our Envato Market sites (and is also your Envato account for other Envato services). Your membership will allow you to &lsquo;buy&rsquo; (license) items from authors, participate in our online forums, and generally contribute to our ecosystem of Envato Market sites that help people get creative. Membership also gives you the opportunity to become an author (see&nbsp;<a href=\"https://codecanyon.net/legal/market?_ga=2.144611189.1178986563.1589960925-2079635670.1575274537#becoming-an-author\"><strong>section 31 &ndash; Becoming an Author</strong></a>) or earn referral income (see&nbsp;<a href=\"https://codecanyon.net/legal/market?_ga=2.144611189.1178986563.1589960925-2079635670.1575274537#referrals\"><strong>section 12 &ndash; Referrals</strong></a>).</p>\r\n<p class=\"t-body\">11.&nbsp;<strong>Your responsibility</strong>: You promise that information you give us is true, accurate and complete and, if you sign up for an Envato Market account, that you will keep your account information up-to-date (including a current email address). Your membership is not transferable, that means you cannot sell your account. You are responsible for any use of the Envato Market sites including any activity that occurs in conjunction with your username and password, if you have an Envato Market account, so keep your password secure and don&rsquo;t let any other person use your username or password. If you realise there&rsquo;s any unauthorized use of your password or any breach of security you need to let us know immediately. You must not use a virtual private network or VPN or any other means to avoid compliance with these terms and conditions, or for any fraudulent or illegal reasons</p>', 1, '0', 1, NULL, '1', '2020-05-20 07:56:17', '2020-05-20 07:56:17'),
(10, 'about-us', 'About Us', 'public/uploads/shares/bottom1.jpg', '2021-06-09', 'h', 'h', 'l', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 1, '0', 2, NULL, '1', '2021-06-09 07:37:17', '2021-06-09 07:37:17'),
(11, 'why-us', 'Why Us', 'public/uploads/shares/top1.jpg', '2021-06-09', 'l', 'l', 'l', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 1, '0', 2, NULL, '1', '2021-06-09 07:37:39', '2021-06-09 07:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(10) NOT NULL,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `viewcount` int(11) DEFAULT 1,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `meta_title` varchar(400) DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `title`, `slug`, `description`, `image`, `file`, `published_date`, `viewcount`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(13, 'Lorem Ipsum is simply dummy text of the printing.', 'lorem-ipsum-is-simply-dummy-text-of-the-printing', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'http://localhost/bag-mart/public/uploads/shares/top1.jpg', NULL, '2021-06-09', 1, '1', 'h', 'How it works', 'h', 2, NULL, '2021-06-08 19:02:15', '2021-06-08 19:02:15'),
(14, 'still in their infancy. Various version', 'still-in-their-infancy-various-version', '<p>ing Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Var</p>', 'http://localhost/bag-mart/public/uploads/shares/bottom1.jpg', NULL, '2021-06-09', 1, '1', 'h', 'h', 'h', 2, NULL, '2021-06-08 19:02:44', '2021-06-08 19:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `sku` varchar(10) DEFAULT NULL,
  `product_category_id` int(10) UNSIGNED DEFAULT NULL,
  `product_sub_category_id` int(4) UNSIGNED DEFAULT NULL,
  `is_new` varchar(10) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `short_info` text DEFAULT NULL,
  `old_price` varchar(100) DEFAULT NULL,
  `new_price` varchar(100) DEFAULT NULL,
  `demo_url` varchar(200) DEFAULT NULL,
  `is_feature` int(10) DEFAULT NULL,
  `is_popularity` int(4) DEFAULT 0,
  `image` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `title`, `sku`, `product_category_id`, `product_sub_category_id`, `is_new`, `description`, `short_info`, `old_price`, `new_price`, `demo_url`, `is_feature`, `is_popularity`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Laptop Messenger Bag', 'sku1', 2, 5, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>\r\n<p class=\"w3ls_para\">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>\r\n<p class=\"w3ls_para\">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '1000', '800', NULL, NULL, 0, 'http://127.0.0.1:8000/uploads/shares/b1.jpg', 'laptop-messenger-bag', '1', '2021-05-15 14:33:46', '2022-08-16 11:21:31'),
(7, 'Puma Backpack', 'sku11', 2, 6, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>\r\n<p class=\"w3ls_para\">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>\r\n<p class=\"w3ls_para\">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '1000', '801', NULL, NULL, 1, 'http://127.0.0.1:8000/uploads/shares/b2.jpg', 'puma-backpack', '1', '2021-05-15 14:35:10', '2022-08-16 11:21:41'),
(8, 'Laptop Backpack', 'sku12', 2, 5, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '1500', '802', NULL, NULL, 0, 'http://127.0.0.1:8000/uploads/shares/b1.jpg', 'laptop-backpack', '1', '2021-05-15 14:36:15', '2022-08-16 11:21:50'),
(9, 'Travel Duffel Bag', 'sku12', 2, 7, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '2000', '803', NULL, NULL, 0, 'http://127.0.0.1:8000/uploads/shares/b4.jpg', 'travel-duffel-bag', '1', '2021-05-15 14:50:12', '2022-08-16 11:21:59'),
(10, 'Hand-held Bag', 'sku14', 1, 2, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '1000', '804', NULL, NULL, 1, 'http://127.0.0.1:8000/uploads/shares/b6.jpg', 'hand-held-bag', '1', '2021-05-15 14:51:27', '2022-08-16 11:22:07'),
(11, 'Butterflies Bag', 'sku15', 1, 2, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>', '1500', '805', NULL, NULL, 0, 'http://127.0.0.1:8000/uploads/shares/b7.jpg', 'butterflies-bag', '1', '2021-05-15 14:52:07', '2022-08-16 11:22:15'),
(12, 'Costa Swiss Bag', 'sku1', 1, 4, NULL, '<div class=\"responsive_tabs_agileits\">\r\n<div id=\"horizontalTab\">\r\n<div class=\"resp-tabs-container\">\r\n<div class=\"tab3 resp-tab-content resp-tab-content-active\">\r\n<div class=\"single_page_agile_its_w3ls\">\r\n<p class=\"w3ls_para\">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"w3_agile_latest_arrivals\">&nbsp;</div>', '<div class=\"responsive_tabs_agileits\">\r\n<div id=\"horizontalTab\">\r\n<div class=\"resp-tabs-container\">\r\n<div class=\"tab3 resp-tab-content resp-tab-content-active\">\r\n<div class=\"single_page_agile_its_w3ls\">\r\n<p class=\"w3ls_para\">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"w3_agile_latest_arrivals\">&nbsp;</div>', '2000', '806', NULL, NULL, 0, 'http://127.0.0.1:8000/uploads/shares/b5.jpg', 'costa-swiss-bag', '1', '2021-05-15 14:52:49', '2022-08-16 11:22:22'),
(13, 'Noble Designs Bag', 'sku14', 1, 1, NULL, '<div class=\"responsive_tabs_agileits\">\r\n<div id=\"horizontalTab\">\r\n<div class=\"resp-tabs-container\">\r\n<div class=\"tab3 resp-tab-content resp-tab-content-active\">\r\n<div class=\"single_page_agile_its_w3ls\">\r\n<p class=\"w3ls_para\">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"w3_agile_latest_arrivals\">&nbsp;</div>', '<div class=\"responsive_tabs_agileits\">\r\n<div id=\"horizontalTab\">\r\n<div class=\"resp-tabs-container\">\r\n<div class=\"tab3 resp-tab-content resp-tab-content-active\">\r\n<div class=\"single_page_agile_its_w3ls\">\r\n<p class=\"w3ls_para\">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"w3_agile_latest_arrivals\">&nbsp;</div>', '3000', '807', NULL, NULL, 0, 'http://127.0.0.1:8000/uploads/shares/b3.jpg', 'noble-designs-bag', '1', '2021-05-15 14:53:28', '2022-08-16 11:22:31'),
(14, 'Here is the product Name', NULL, 1, 2, '0', '<p>sdhjjjj dssdjksdh sdhsdhs</p>', '<p>herww</p>', '100', '120', NULL, 0, 0, 'http://127.0.0.1:8000/uploads/shares/b1.jpg', 'here-is-the-product-name', '1', '2022-08-16 11:18:38', '2022-08-16 11:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cart`
--

CREATE TABLE `tbl_product_cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_qty` varchar(10) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keywords` varchar(100) DEFAULT NULL,
  `meta_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`id`, `image`, `title`, `slug`, `status`, `created_at`, `updated_at`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'http://127.0.0.1:8000/uploads/shares/top1.jpg', 'Woman', 'woman', '1', '2020-05-04 11:47:47', '2022-08-16 10:28:57', NULL, NULL, NULL),
(2, 'http://127.0.0.1:8000/uploads/shares/mens.jpg', 'Mens', 'mens', '1', '2020-05-04 12:28:08', '2022-08-16 10:30:34', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_order`
--

CREATE TABLE `tbl_product_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_code` varchar(100) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `order_status` tinyint(4) UNSIGNED DEFAULT NULL,
  `sub_total_price` varchar(10) DEFAULT NULL,
  `shipping_cost` varchar(100) DEFAULT NULL,
  `final_price` varchar(10) DEFAULT NULL,
  `payment_id` tinyint(4) UNSIGNED DEFAULT NULL,
  `payment_status` int(4) DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `municipality_id` int(10) UNSIGNED DEFAULT NULL,
  `is_guest` int(4) UNSIGNED NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` tinyint(4) UNSIGNED DEFAULT NULL,
  `order_datetime` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_order`
--

INSERT INTO `tbl_product_order` (`id`, `order_code`, `user_id`, `name`, `email`, `phone`, `message`, `order_status`, `sub_total_price`, `shipping_cost`, `final_price`, `payment_id`, `payment_status`, `state_id`, `district_id`, `municipality_id`, `is_guest`, `address`, `status`, `order_datetime`, `created_at`, `updated_at`) VALUES
(10, 'BM-21-5-17-1621258658', NULL, 'Chetan Adhikari', 'chetan@gmail.com', '658651284652', 'do fast', 0, '10200', '100', '10300', NULL, 0, NULL, NULL, NULL, 1, NULL, 1, '2021-05-17 13:37:38', '2021-05-17 13:37:38', '2021-05-17 13:37:38'),
(11, 'BM-21-6-2-1622639113', NULL, 'Grant Morrison', 'jexeniv@mailinator.com', '+1 (959) 659-1328', NULL, 0, '2400', '100', '2500', NULL, 0, NULL, NULL, NULL, 1, NULL, 0, '2021-06-02 13:05:13', '2021-06-02 13:05:13', '2021-06-02 13:05:13'),
(12, 'BM-21-6-6-1622998303', 7, 'Yamaha', 'adhikarin641@gmail.com', NULL, NULL, 0, '2406', '100', '2506', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, '2021-06-06 16:51:43', '2021-06-06 16:51:43', '2021-06-06 16:51:43'),
(13, 'BM-21-6-7-1623062296', 7, 'Yamaha', 'adhikarin641@gmail.com', NULL, NULL, 0, '801', '100', '901', NULL, 0, NULL, NULL, NULL, 0, NULL, 1, '2021-06-07 10:38:16', '2021-06-07 10:38:16', '2021-06-07 10:38:16'),
(14, 'BM-21-6-8-1623141448', 7, 'Yamaha', 'adhikarin641@gmail.com', NULL, NULL, 0, '3211', '100', '3311', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, '2021-06-08 08:37:28', '2021-06-08 08:37:28', '2021-06-08 08:37:28'),
(15, 'BM-22-8-16-1660675601', 17, 'Ram Kumar Sharma', 'ram@gmail.com', '98641414141', NULL, 0, '801', '100', '901', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, '2022-08-16 13:01:41', '2022-08-16 13:01:41', '2022-08-16 13:01:41'),
(16, 'BM-22-8-16-1660675989', 17, 'Ram Kumar Sharma', 'ram@gmail.com', '98641414141', NULL, 0, '2404', '100', '2504', NULL, 0, NULL, NULL, NULL, 0, NULL, 0, '2022-08-16 13:08:09', '2022-08-16 13:08:09', '2022-08-16 13:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_order_list`
--

CREATE TABLE `tbl_product_order_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_code_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `product_qty` int(10) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `order_status` tinyint(10) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_order_list`
--

INSERT INTO `tbl_product_order_list` (`id`, `order_code_id`, `product_id`, `product_qty`, `price`, `order_status`, `status`, `created_at`, `updated_at`) VALUES
(17, 10, 11, 2, '2000', 0, 0, '2021-05-17 13:37:39', '2021-05-17 13:37:39'),
(18, 10, 13, 2, '5000', 0, 0, '2021-05-17 13:37:39', '2021-05-17 13:37:39'),
(19, 10, 10, 3, '2400', 0, 0, '2021-05-17 13:37:39', '2021-05-17 13:37:39'),
(20, 10, 7, 1, '800', 0, 0, '2021-05-17 13:37:39', '2021-05-17 13:37:39'),
(21, 11, 10, 3, '2400', 0, 0, '2021-06-02 13:05:15', '2021-06-02 13:05:15'),
(22, 12, 8, 3, '2406', 0, 0, '2021-06-06 16:51:43', '2021-06-06 16:51:43'),
(23, 13, 7, 1, '801', 0, 0, '2021-06-07 10:38:16', '2021-06-07 10:38:16'),
(24, 14, 6, 1, '800', 0, 0, '2021-06-08 08:37:29', '2021-06-08 08:37:29'),
(25, 14, 9, 1, '803', 0, 0, '2021-06-08 08:37:29', '2021-06-08 08:37:29'),
(26, 14, 10, 2, '1608', 0, 0, '2021-06-08 08:37:29', '2021-06-08 08:37:29'),
(27, 15, 7, 1, '801', 0, 0, '2022-08-16 13:01:41', '2022-08-16 13:01:41'),
(28, 16, 7, 2, '1602', 0, 0, '2022-08-16 13:08:09', '2022-08-16 13:08:09'),
(29, 16, 8, 1, '802', 0, 0, '2022-08-16 13:08:09', '2022-08-16 13:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_review`
--

CREATE TABLE `tbl_product_review` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `status` enum('1','0') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_review`
--

INSERT INTO `tbl_product_review` (`id`, `product_id`, `nickname`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Narayan', 'good system', '1', '2020-05-05 17:19:31', '2020-05-05 17:19:31'),
(2, 2, 'Prakash', 'HGood system', '1', '2020-05-05 17:20:27', '2020-05-05 17:20:27'),
(3, 4, 'Narayan Thapa', 'Awesome product loved it.', '0', '2020-07-22 00:47:44', '2020-07-22 00:47:44'),
(4, 2, 'Ezra Albert', 'Aut aute quaerat ali', '0', '2021-04-04 13:56:46', '2021-04-04 13:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_ss`
--

CREATE TABLE `tbl_product_ss` (
  `id` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_ss`
--

INSERT INTO `tbl_product_ss` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 2, 'http://eachscript.com/public/uploads/shares/4.-order-status-update-notification.png', '2020-05-20 20:36:01', '2020-05-20 20:36:01'),
(5, 2, 'http://eachscript.com/public/uploads/shares/1.-advance-woocommerce-statistics-1.png', '2020-05-20 20:36:13', '2020-05-20 20:36:13'),
(6, 3, 'http://eachscript.com/public/uploads/shares/whatsapp_image_2018-12-23_at_23.26.39.jpeg', '2020-05-20 20:45:34', '2020-05-20 20:45:34'),
(7, 3, 'http://eachscript.com/public/uploads/shares/whatsapp_image_2018-12-23_at_23.19.51.jpeg', '2020-05-20 20:45:45', '2020-05-20 20:45:45'),
(8, 4, 'http://eachscript.com/public/uploads/shares/pos/dashboard.png', '2020-07-21 23:39:48', '2020-07-21 23:39:48'),
(9, 4, 'http://eachscript.com/public/uploads/shares/pos/pos.png', '2020-07-21 23:40:05', '2020-07-21 23:40:05'),
(10, 4, 'http://eachscript.com/public/uploads/shares/pos/sale.png', '2020-07-21 23:40:12', '2020-07-21 23:40:12'),
(11, 4, 'http://eachscript.com/public/uploads/shares/pos/bill.png', '2020-07-21 23:40:18', '2020-07-21 23:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_sub_category`
--

CREATE TABLE `tbl_product_sub_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keywords` varchar(100) DEFAULT NULL,
  `meta_description` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_sub_category`
--

INSERT INTO `tbl_product_sub_category` (`id`, `product_category_id`, `title`, `slug`, `image`, `description`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'CLUTCH & ARMBAGS', 'sub-category', 'http://127.0.0.1:8000/uploads/shares/b8.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2022-08-16 10:50:48'),
(2, 1, 'Hand Bag', 'hand-bag', 'http://127.0.0.1:8000/uploads/shares/b8.jpg', NULL, 1, NULL, NULL, NULL, '2021-04-03 16:03:51', '2022-08-16 10:50:58'),
(4, 1, 'Wallets', 'wallets', 'http://127.0.0.1:8000/uploads/shares/b6.jpg', NULL, 1, NULL, NULL, NULL, '2021-05-15 10:39:14', '2022-08-16 10:51:07'),
(5, 2, 'Laptop Bag', 'laptop-bag', 'http://127.0.0.1:8000/uploads/shares/b1.jpg', NULL, 1, NULL, NULL, NULL, '2021-05-15 10:39:36', '2022-08-16 10:51:17'),
(6, 2, 'Sling Bag', 'sling-bag', 'http://127.0.0.1:8000/uploads/shares/b3.jpg', NULL, 1, NULL, NULL, NULL, '2021-05-15 10:39:44', '2022-08-16 10:51:27'),
(7, 2, 'Gym Bag', 'gym-bag', 'http://127.0.0.1:8000/uploads/shares/b6.jpg', NULL, 1, NULL, NULL, NULL, '2021-05-15 10:40:32', '2022-08-16 10:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_view_track`
--

CREATE TABLE `tbl_product_view_track` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(200) DEFAULT NULL,
  `login_device` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_view_track`
--

INSERT INTO `tbl_product_view_track` (`id`, `product_id`, `ip_address`, `login_device`, `created_at`, `updated_at`) VALUES
(1, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:16:05', '2021-05-15 15:16:05'),
(2, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:25:45', '2021-05-15 15:25:45'),
(3, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:29:03', '2021-05-15 15:29:03'),
(4, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:29:52', '2021-05-15 15:29:52'),
(5, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:33:30', '2021-05-15 15:33:30'),
(6, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:34:42', '2021-05-15 15:34:42'),
(7, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:37:42', '2021-05-15 15:37:42'),
(8, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:38:13', '2021-05-15 15:38:13'),
(9, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:40:34', '2021-05-15 15:40:34'),
(10, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:40:41', '2021-05-15 15:40:41'),
(11, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:40:41', '2021-05-15 15:40:41'),
(12, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:44:38', '2021-05-15 15:44:38'),
(13, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:50:08', '2021-05-15 15:50:08'),
(14, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:55:19', '2021-05-15 15:55:19'),
(15, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 15:56:53', '2021-05-15 15:56:53'),
(16, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:08:28', '2021-05-15 16:08:28'),
(17, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:12:08', '2021-05-15 16:12:08'),
(18, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:13:10', '2021-05-15 16:13:10'),
(19, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:15:09', '2021-05-15 16:15:09'),
(20, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:21:46', '2021-05-15 16:21:46'),
(21, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:28:08', '2021-05-15 16:28:08'),
(22, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:31:49', '2021-05-15 16:31:49'),
(23, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:31:58', '2021-05-15 16:31:58'),
(24, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:32:38', '2021-05-15 16:32:38'),
(25, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:43:17', '2021-05-15 16:43:17'),
(26, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:43:49', '2021-05-15 16:43:49'),
(27, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:47:38', '2021-05-15 16:47:38'),
(28, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 16:53:00', '2021-05-15 16:53:00'),
(29, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 17:30:33', '2021-05-15 17:30:33'),
(30, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 17:45:36', '2021-05-15 17:45:36'),
(31, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 17:46:12', '2021-05-15 17:46:12'),
(32, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 17:46:25', '2021-05-15 17:46:25'),
(33, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 17:46:42', '2021-05-15 17:46:42'),
(34, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 17:49:15', '2021-05-15 17:49:15'),
(35, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 17:52:19', '2021-05-15 17:52:19'),
(36, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:17:37', '2021-05-15 19:17:37'),
(37, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:17:54', '2021-05-15 19:17:54'),
(38, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:18:03', '2021-05-15 19:18:03'),
(39, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:18:34', '2021-05-15 19:18:34'),
(40, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:19:21', '2021-05-15 19:19:21'),
(41, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:20:11', '2021-05-15 19:20:11'),
(42, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:20:20', '2021-05-15 19:20:20'),
(43, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:20:28', '2021-05-15 19:20:28'),
(44, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:21:07', '2021-05-15 19:21:07'),
(45, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:21:31', '2021-05-15 19:21:31'),
(46, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:23:51', '2021-05-15 19:23:51'),
(47, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:24:59', '2021-05-15 19:24:59'),
(48, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:25:47', '2021-05-15 19:25:47'),
(49, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:27:21', '2021-05-15 19:27:21'),
(50, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:27:40', '2021-05-15 19:27:40'),
(51, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:27:48', '2021-05-15 19:27:48'),
(52, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:30:37', '2021-05-15 19:30:37'),
(53, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:31:23', '2021-05-15 19:31:23'),
(54, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:33:37', '2021-05-15 19:33:37'),
(55, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:34:15', '2021-05-15 19:34:15'),
(56, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:34:49', '2021-05-15 19:34:49'),
(57, 12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-15 19:42:29', '2021-05-15 19:42:29'),
(58, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:00:50', '2021-05-16 08:00:50'),
(59, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:01:53', '2021-05-16 08:01:53'),
(60, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:07', '2021-05-16 08:02:07'),
(61, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:07', '2021-05-16 08:02:07'),
(62, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:07', '2021-05-16 08:02:07'),
(63, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:08', '2021-05-16 08:02:08'),
(64, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:08', '2021-05-16 08:02:08'),
(65, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:08', '2021-05-16 08:02:08'),
(66, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:08', '2021-05-16 08:02:08'),
(67, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:08', '2021-05-16 08:02:08'),
(68, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:09', '2021-05-16 08:02:09'),
(69, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:09', '2021-05-16 08:02:09'),
(70, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:09', '2021-05-16 08:02:09'),
(71, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:09', '2021-05-16 08:02:09'),
(72, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:09', '2021-05-16 08:02:09'),
(73, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:10', '2021-05-16 08:02:10'),
(74, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:10', '2021-05-16 08:02:10'),
(75, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:10', '2021-05-16 08:02:10'),
(76, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:10', '2021-05-16 08:02:10'),
(77, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:10', '2021-05-16 08:02:10'),
(78, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:10', '2021-05-16 08:02:10'),
(79, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:11', '2021-05-16 08:02:11'),
(80, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:12', '2021-05-16 08:02:12'),
(81, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:12', '2021-05-16 08:02:12'),
(82, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:12', '2021-05-16 08:02:12'),
(83, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:13', '2021-05-16 08:02:13'),
(84, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:13', '2021-05-16 08:02:13'),
(85, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:13', '2021-05-16 08:02:13'),
(86, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:13', '2021-05-16 08:02:13'),
(87, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:14', '2021-05-16 08:02:14'),
(88, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:14', '2021-05-16 08:02:14'),
(89, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:21', '2021-05-16 08:02:21'),
(90, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:21', '2021-05-16 08:02:21'),
(91, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:22', '2021-05-16 08:02:22'),
(92, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:22', '2021-05-16 08:02:22'),
(93, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:22', '2021-05-16 08:02:22'),
(94, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:22', '2021-05-16 08:02:22'),
(95, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:23', '2021-05-16 08:02:23'),
(96, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:23', '2021-05-16 08:02:23'),
(97, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:23', '2021-05-16 08:02:23'),
(98, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:24', '2021-05-16 08:02:24'),
(99, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:24', '2021-05-16 08:02:24'),
(100, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:24', '2021-05-16 08:02:24'),
(101, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:24', '2021-05-16 08:02:24'),
(102, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:24', '2021-05-16 08:02:24'),
(103, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:25', '2021-05-16 08:02:25'),
(104, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:25', '2021-05-16 08:02:25'),
(105, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:25', '2021-05-16 08:02:25'),
(106, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:25', '2021-05-16 08:02:25'),
(107, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:25', '2021-05-16 08:02:25'),
(108, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:26', '2021-05-16 08:02:26'),
(109, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:27', '2021-05-16 08:02:27'),
(110, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:27', '2021-05-16 08:02:27'),
(111, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:27', '2021-05-16 08:02:27'),
(112, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:28', '2021-05-16 08:02:28'),
(113, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:28', '2021-05-16 08:02:28'),
(114, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:28', '2021-05-16 08:02:28'),
(115, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:28', '2021-05-16 08:02:28'),
(116, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:29', '2021-05-16 08:02:29'),
(117, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:29', '2021-05-16 08:02:29'),
(118, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:29', '2021-05-16 08:02:29'),
(119, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:29', '2021-05-16 08:02:29'),
(120, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:30', '2021-05-16 08:02:30'),
(121, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:30', '2021-05-16 08:02:30'),
(122, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:30', '2021-05-16 08:02:30'),
(123, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:30', '2021-05-16 08:02:30'),
(124, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:30', '2021-05-16 08:02:30'),
(125, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:31', '2021-05-16 08:02:31'),
(126, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:31', '2021-05-16 08:02:31'),
(127, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:31', '2021-05-16 08:02:31'),
(128, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:02:31', '2021-05-16 08:02:31'),
(129, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:03:50', '2021-05-16 08:03:50'),
(130, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:04:03', '2021-05-16 08:04:03'),
(131, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:17:32', '2021-05-16 08:17:32'),
(132, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:18:11', '2021-05-16 08:18:11'),
(133, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:26:37', '2021-05-16 08:26:37'),
(134, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:28:07', '2021-05-16 08:28:07'),
(135, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:28:52', '2021-05-16 08:28:52'),
(136, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:29:01', '2021-05-16 08:29:01'),
(137, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:29:12', '2021-05-16 08:29:12'),
(138, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:29:47', '2021-05-16 08:29:47'),
(139, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:31:43', '2021-05-16 08:31:43'),
(140, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:31:44', '2021-05-16 08:31:44'),
(141, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:31:44', '2021-05-16 08:31:44'),
(142, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:34:45', '2021-05-16 08:34:45'),
(143, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:34:51', '2021-05-16 08:34:51'),
(144, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:34:52', '2021-05-16 08:34:52'),
(145, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:35:00', '2021-05-16 08:35:00'),
(146, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:35:06', '2021-05-16 08:35:06'),
(147, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:36:32', '2021-05-16 08:36:32'),
(148, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:37:02', '2021-05-16 08:37:02'),
(149, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:38:36', '2021-05-16 08:38:36'),
(150, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:39:10', '2021-05-16 08:39:10'),
(151, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:39:16', '2021-05-16 08:39:16'),
(152, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:39:43', '2021-05-16 08:39:43'),
(153, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:39:47', '2021-05-16 08:39:47'),
(154, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:48:47', '2021-05-16 08:48:47'),
(155, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:52:54', '2021-05-16 08:52:54'),
(156, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:53:13', '2021-05-16 08:53:13'),
(157, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:53:38', '2021-05-16 08:53:38'),
(158, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:55:20', '2021-05-16 08:55:20'),
(159, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:56:29', '2021-05-16 08:56:29'),
(160, 12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:57:10', '2021-05-16 08:57:10'),
(161, 13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:57:11', '2021-05-16 08:57:11'),
(162, 13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:57:31', '2021-05-16 08:57:31'),
(163, 13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:57:37', '2021-05-16 08:57:37'),
(164, 13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:58:11', '2021-05-16 08:58:11'),
(165, 13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:58:14', '2021-05-16 08:58:14'),
(166, 13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 08:58:23', '2021-05-16 08:58:23'),
(167, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 09:06:04', '2021-05-16 09:06:04'),
(168, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 09:06:11', '2021-05-16 09:06:11'),
(169, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 09:06:27', '2021-05-16 09:06:27'),
(170, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 09:07:31', '2021-05-16 09:07:31'),
(171, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 09:08:33', '2021-05-16 09:08:33'),
(172, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 09:08:45', '2021-05-16 09:08:45'),
(173, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 09:08:51', '2021-05-16 09:08:51'),
(174, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 09:09:29', '2021-05-16 09:09:29'),
(175, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 15:40:55', '2021-05-16 15:40:55'),
(176, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 15:41:05', '2021-05-16 15:41:05'),
(177, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 16:03:26', '2021-05-16 16:03:26'),
(178, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 16:06:23', '2021-05-16 16:06:23'),
(179, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 16:06:51', '2021-05-16 16:06:51'),
(180, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 16:08:53', '2021-05-16 16:08:53'),
(181, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 16:09:07', '2021-05-16 16:09:07'),
(182, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 16:21:17', '2021-05-16 16:21:17'),
(183, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-16 16:22:02', '2021-05-16 16:22:02'),
(184, 10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-17 13:36:07', '2021-05-17 13:36:07'),
(185, 12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-18 17:50:33', '2021-05-18 17:50:33'),
(186, 11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '2021-05-23 13:40:14', '2021-05-23 13:40:14'),
(187, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-02 07:03:13', '2021-06-02 07:03:13'),
(188, 12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-02 07:59:08', '2021-06-02 07:59:08'),
(189, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-02 13:09:20', '2021-06-02 13:09:20'),
(190, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-03 13:20:49', '2021-06-03 13:20:49'),
(191, 6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-03 13:20:49', '2021-06-03 13:20:49'),
(192, 6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-03 13:24:19', '2021-06-03 13:24:19'),
(193, 8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 08:14:39', '2021-06-06 08:14:39'),
(194, 6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 09:30:13', '2021-06-06 09:30:13'),
(195, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 11:54:40', '2021-06-06 11:54:40'),
(196, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:00:26', '2021-06-06 12:00:26'),
(197, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:01:20', '2021-06-06 12:01:20'),
(198, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:02:24', '2021-06-06 12:02:24'),
(199, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:05:12', '2021-06-06 12:05:12'),
(200, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:09:05', '2021-06-06 12:09:05'),
(201, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:09:18', '2021-06-06 12:09:18'),
(202, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:13:19', '2021-06-06 12:13:19'),
(203, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:26:31', '2021-06-06 12:26:31'),
(204, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:31:37', '2021-06-06 12:31:37'),
(205, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:32:13', '2021-06-06 12:32:13'),
(206, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:32:33', '2021-06-06 12:32:33'),
(207, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:33:54', '2021-06-06 12:33:54'),
(208, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:37:07', '2021-06-06 12:37:07'),
(209, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:49:00', '2021-06-06 12:49:00'),
(210, 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:49:06', '2021-06-06 12:49:06'),
(211, 8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:49:11', '2021-06-06 12:49:11'),
(212, 8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:52:00', '2021-06-06 12:52:00'),
(213, 8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-06 12:52:13', '2021-06-06 12:52:13'),
(214, 9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '2021-06-09 12:30:40', '2021-06-09 12:30:40'),
(215, 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 05:20:25', '2022-08-16 05:20:25'),
(216, 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 05:31:21', '2022-08-16 05:31:21'),
(217, 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 05:44:12', '2022-08-16 05:44:12'),
(218, 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 05:44:34', '2022-08-16 05:44:34'),
(219, 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 13:00:04', '2022-08-16 13:00:04'),
(220, 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 13:00:28', '2022-08-16 13:00:28'),
(221, 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 13:01:57', '2022-08-16 13:01:57'),
(222, 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 13:07:47', '2022-08-16 13:07:47'),
(223, 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36', '2022-08-16 13:07:48', '2022-08-16 13:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_setting`
--

CREATE TABLE `tbl_site_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mobile_no` varchar(500) DEFAULT NULL,
  `phone_no` varchar(500) DEFAULT NULL,
  `fax_no` varchar(500) DEFAULT NULL,
  `slogan_text` varchar(256) DEFAULT NULL,
  `facebook` varchar(256) DEFAULT NULL,
  `twitter` varchar(500) DEFAULT NULL,
  `google_plus` varchar(500) DEFAULT NULL,
  `footer_content` text DEFAULT NULL,
  `instagram` varchar(500) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `shortcut_icon` varchar(100) DEFAULT NULL,
  `skype` varchar(500) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `youtube` varchar(500) DEFAULT NULL,
  `whatsapp_number` varchar(256) DEFAULT NULL,
  `playstore_link` varchar(256) DEFAULT NULL,
  `appstore_link` varchar(256) DEFAULT NULL,
  `meta_descriptions` varchar(500) DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `checkmail` varchar(500) DEFAULT NULL,
  `map_detail` varchar(500) DEFAULT NULL,
  `office_hour` varchar(500) DEFAULT NULL,
  `office_day` varchar(100) DEFAULT NULL,
  `total_views` int(10) UNSIGNED DEFAULT NULL,
  `how_we_work_txt` text DEFAULT NULL,
  `choose_from_resturant_txt` text DEFAULT NULL,
  `choose_food_txt` text DEFAULT NULL,
  `delivery_txt` text DEFAULT NULL,
  `contact_us_txt` text DEFAULT NULL,
  `about_us` text DEFAULT NULL,
  `new_product_header` text DEFAULT NULL,
  `all_product_header` text DEFAULT NULL,
  `blog_header` text DEFAULT NULL,
  `faq_content` text DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_site_setting`
--

INSERT INTO `tbl_site_setting` (`id`, `title`, `email`, `address`, `mobile_no`, `phone_no`, `fax_no`, `slogan_text`, `facebook`, `twitter`, `google_plus`, `footer_content`, `instagram`, `logo`, `shortcut_icon`, `skype`, `linkedin`, `youtube`, `whatsapp_number`, `playstore_link`, `appstore_link`, `meta_descriptions`, `meta_keywords`, `checkmail`, `map_detail`, `office_hour`, `office_day`, `total_views`, `how_we_work_txt`, `choose_from_resturant_txt`, `choose_food_txt`, `delivery_txt`, `contact_us_txt`, `about_us`, `new_product_header`, `all_product_header`, `blog_header`, `faq_content`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce', 'info@mail.com', 'Nepal', '98**********', '+977-1-0000001', '+977-1-0000001', 'List your Restaurant or Home Chef at Sajilo Meals', 'https://www.facebook.com/', 'https://twitter.com/home', NULL, 'hh', 'https://www.instagram.com/', 'http://127.0.0.1:8000/uploads/shares/ecommerce-logo.png', 'http://localhost:8080/master-website/public/uploads/shares/images/logo_(1).png', NULL, 'https://www.linkedin.com/', NULL, NULL, '/#', '/#', 'dd', 'dd', 'd.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.924577444284!2d85.33106357081338!3d27.694703324266484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1586087316846!5m2!1sen!2snp', '10:00 A.M. - 6:00 P.M', NULL, 875, NULL, NULL, NULL, NULL, 'Here is a contact us text.', NULL, 'Bored of old fashioned applications? Check out the latest awesome applications.', 'Find the relevant applications of your choice.', 'Learn something new today,.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.faq', 1, '2018-04-30 22:51:36', '2022-08-16 09:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(500) NOT NULL,
  `sub_title` varchar(300) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `sub_title`, `url`, `slug`, `description`, `image`, `published_date`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(10, 'Summer 2020', 'Fashion Collections', 'http://127.0.0.1:8000/shop', 'summer-2020', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>', 'http://127.0.0.1:8000/uploads/shares/slider/bg-banner.f561f8e8.jpg', NULL, 2, 1, '2021-06-02 06:43:23', '2022-08-16 09:57:18', '1'),
(11, 'Summer 2021', 'New Arrived', 'http://127.0.0.1:8000/shop', 'summer-2021', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>', 'http://127.0.0.1:8000/uploads/shares/slider/bg-banner-2.d0671937.jpg', NULL, 2, 1, '2021-06-02 06:44:26', '2022-08-16 09:57:32', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tag`
--

INSERT INTO `tbl_tag` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Insurance', 'insurance', '1', NULL, NULL),
(2, 'In', 'in', '1', '2020-04-12 07:26:41', '2020-04-12 07:26:41'),
(3, 'nepal', 'nepal', '1', '2020-04-12 07:35:57', '2020-04-12 07:35:57'),
(4, 'hey', 'hey', '1', '2020-04-12 08:18:55', '2020-04-12 08:18:55'),
(5, 'Marketing', 'marketing', '1', '2020-04-12 08:34:54', '2020-04-12 08:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_login_logs`
--

CREATE TABLE `tbl_user_login_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `login_date` timestamp NULL DEFAULT NULL,
  `login_device` varchar(191) DEFAULT NULL,
  `ip_address` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_login_logs`
--

INSERT INTO `tbl_user_login_logs` (`id`, `user_id`, `login_date`, `login_device`, `ip_address`) VALUES
(1, 1, '2019-10-10 22:44:25', 'Chrome', '127.0.0.1'),
(2, 1, '2019-10-11 01:52:58', 'Chrome', '127.0.0.1'),
(3, 1, '2019-10-11 01:57:35', 'Chrome', '127.0.0.1'),
(4, 1, '2019-10-11 03:06:32', 'Chrome', '127.0.0.1'),
(5, 1, '2019-10-12 09:40:20', 'Chrome', '127.0.0.1'),
(6, 1, '2019-10-12 10:21:16', 'Chrome', '127.0.0.1'),
(7, 1, '2019-10-13 10:40:20', 'Chrome', '127.0.0.1'),
(8, 1, '2019-10-13 11:06:55', 'Chrome', '127.0.0.1'),
(9, 1, '2019-10-28 22:14:07', 'Chrome', '::1'),
(10, 1, '2019-10-29 20:31:01', 'Chrome', '::1'),
(11, 1, '2019-10-29 22:27:48', 'Chrome', '::1'),
(12, 1, '2019-10-31 07:08:09', 'Chrome', '::1'),
(13, 1, '2019-11-02 22:23:55', 'Chrome', '::1'),
(14, 1, '2019-11-05 21:05:50', 'Chrome', '::1'),
(15, 1, '2019-11-06 20:29:45', 'Chrome', '::1'),
(16, 1, '2019-11-07 00:40:24', 'Chrome', '::1'),
(17, 1, '2019-11-07 01:35:57', 'Chrome', '::1'),
(18, 1, '2019-11-07 19:13:49', 'Chrome', '::1'),
(19, 1, '2019-11-09 19:58:36', 'Chrome', '::1'),
(20, 1, '2019-11-10 01:20:59', 'Chrome', '::1'),
(21, 1, '2019-11-12 02:23:34', 'Chrome', '::1'),
(22, 1, '2019-11-12 21:08:33', 'Chrome', '::1'),
(23, 1, '2019-11-14 22:24:25', 'Chrome', '::1'),
(24, 1, '2019-11-17 19:12:42', 'Chrome', '::1'),
(25, 1, '2019-11-17 23:24:04', 'Chrome', '::1'),
(26, 1, '2019-11-18 01:12:27', 'Chrome', '::1'),
(27, 1, '2019-11-18 09:56:32', 'Chrome', '::1'),
(28, 1, '2019-11-26 01:24:27', 'Chrome', '::1'),
(29, 1, '2019-11-26 20:04:40', 'Chrome', '::1'),
(30, 1, '2019-11-26 23:38:47', 'Chrome', '::1'),
(31, 1, '2019-11-27 02:39:54', 'Chrome', '::1'),
(32, 1, '2019-11-27 02:40:56', 'Chrome', '::1'),
(33, 1, '2019-11-28 00:35:48', 'Chrome', '::1'),
(34, 1, '2019-11-30 01:24:25', 'Chrome', '::1'),
(35, 1, '2019-12-10 00:14:37', 'Chrome', '::1'),
(36, 1, '2019-12-10 06:04:51', 'Chrome', '::1'),
(37, 1, '2019-12-10 23:04:38', 'Chrome', '::1'),
(38, 1, '2019-12-11 00:19:04', 'Chrome', '::1'),
(39, 1, '2019-12-11 00:35:28', 'Chrome', '::1'),
(40, 1, '2019-12-11 01:17:11', 'Chrome', '::1'),
(41, 1, '2019-12-11 01:26:38', 'Chrome', '::1'),
(42, 1, '2019-12-11 01:27:02', 'Chrome', '::1'),
(43, 1, '2019-12-11 01:35:32', 'Chrome', '::1'),
(44, 4, '2019-12-11 03:41:14', 'Chrome', '::1'),
(45, 1, '2019-12-11 10:04:08', 'Chrome', '::1'),
(46, 1, '2019-12-11 23:59:54', 'Chrome', '::1'),
(47, 1, '2019-12-12 03:39:53', 'Chrome', '::1'),
(48, 1, '2019-12-13 00:19:16', 'Chrome', '::1'),
(49, 1, '2019-12-18 00:08:55', 'Chrome', '::1'),
(50, 1, '2019-12-18 11:36:38', 'Chrome', '::1'),
(51, 1, '2019-12-19 00:31:44', 'Chrome', '::1'),
(52, 1, '2019-12-19 23:38:02', 'Chrome', '::1'),
(53, 1, '2019-12-20 09:42:54', 'Chrome', '::1'),
(54, 1, '2019-12-21 13:02:52', 'Chrome', '::1'),
(55, 1, '2019-12-29 03:18:28', 'Chrome', '::1'),
(56, 1, '2019-12-29 10:43:57', 'Chrome', '::1'),
(57, 1, '2019-12-30 00:25:16', 'Chrome', '::1'),
(58, 1, '2019-12-30 04:36:28', 'Chrome', '::1'),
(59, 1, '2019-12-30 10:44:15', 'Chrome', '::1'),
(60, 1, '2020-02-04 02:15:52', 'Chrome', '::1'),
(61, 1, '2020-02-04 16:27:57', 'Chrome', '::1'),
(62, 1, '2020-02-14 05:09:13', 'Chrome', '::1'),
(63, 1, '2020-02-17 05:37:25', 'Chrome', '::1'),
(64, 1, '2020-02-21 07:41:25', 'Chrome', '::1'),
(65, 1, '2020-04-11 08:52:01', 'Chrome', '::1'),
(66, 1, '2020-04-11 19:30:40', 'Chrome', '::1'),
(67, 1, '2020-04-12 06:16:19', 'Chrome', '::1'),
(68, 1, '2020-04-19 07:49:54', 'Chrome', '::1'),
(69, 1, '2020-04-19 12:29:25', 'Chrome', '::1'),
(70, 1, '2020-04-20 07:32:17', 'Chrome', '::1'),
(71, 1, '2020-05-04 11:25:06', 'Chrome', '::1'),
(72, 1, '2020-05-05 15:16:51', 'Chrome', '::1'),
(73, 1, '2020-05-20 07:38:30', 'Chrome', '::1'),
(74, 1, '2020-05-20 17:17:43', 'Chrome', '::1'),
(75, 1, '2020-05-20 19:21:32', 'Chrome', '::1'),
(76, 1, '2020-05-20 20:02:25', 'Chrome', '43.245.86.3'),
(77, 1, '2020-05-20 20:44:43', 'Chrome', '43.245.86.3'),
(78, 1, '2020-05-21 10:55:37', 'Chrome', '43.245.86.3'),
(79, 1, '2020-05-21 21:30:20', 'Chrome', '27.34.26.10'),
(80, 1, '2020-05-30 18:09:07', 'Chrome', '27.34.26.120'),
(81, 1, '2020-06-12 12:11:45', 'Chrome', '27.34.26.72'),
(82, 1, '2020-06-12 12:52:13', 'Chrome', '150.107.107.53'),
(83, 1, '2020-06-14 22:26:26', 'Chrome', '27.34.25.215'),
(84, 1, '2020-06-20 12:40:39', 'Chrome', '110.44.127.184'),
(85, 1, '2020-06-21 12:48:35', 'Chrome', '27.34.26.41'),
(86, 1, '2020-06-22 00:43:10', 'Chrome', '43.245.87.201'),
(87, 1, '2020-06-22 04:49:24', 'Chrome', '27.34.26.178'),
(88, 1, '2020-07-21 23:02:49', 'Chrome', '202.51.76.33'),
(89, 2, '2021-04-04 17:12:09', 'Chrome', '::1'),
(90, 2, '2021-05-15 06:15:16', 'Chrome', '::1'),
(91, 2, '2021-05-15 10:31:24', 'Chrome', '::1'),
(92, 2, '2021-05-15 14:13:54', 'Chrome', '::1'),
(93, 2, '2021-05-23 13:47:17', 'Chrome', '::1'),
(94, 2, '2021-06-02 06:30:34', 'Chrome', '::1'),
(95, 2, '2021-06-08 19:00:16', 'Chrome', '::1'),
(96, 2, '2021-06-09 07:35:52', 'Chrome', '::1'),
(97, 2, '2022-08-16 05:24:17', 'Chrome', '127.0.0.1'),
(98, 2, '2022-08-16 05:52:07', 'Chrome', '127.0.0.1'),
(99, 1, '2022-08-16 09:38:42', 'Chrome', '127.0.0.1'),
(100, 1, '2022-08-16 10:12:29', 'Chrome', '127.0.0.1'),
(101, 1, '2022-08-16 13:02:18', 'Chrome', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verify_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileno_verify` tinyint(3) UNSIGNED DEFAULT 0,
  `email_verify` tinyint(3) UNSIGNED DEFAULT 0,
  `status` tinyint(3) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `verify_token`, `mobileno`, `address`, `mobileno_verify`, `email_verify`, `status`) VALUES
(1, 'Narayan Adhikari', 'adhikarin641@gmail.com', NULL, '$2y$10$v7oFjkcgM6Ak2DphyDtlp.KvbHOZkf6fzqz1uvLm922gX2ClZPGZ6', NULL, '2019-12-10 06:31:30', '2019-12-10 06:31:30', 'd4zN4obZbJk8mF4XAHM76WWmiPz5mzE7glmV1OGp', '9810128614', NULL, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rel_post_category`
--
ALTER TABLE `rel_post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel_post_tag`
--
ALTER TABLE `rel_post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_groups`
--
ALTER TABLE `tbl_admin_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_menus`
--
ALTER TABLE `tbl_admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_roles`
--
ALTER TABLE `tbl_admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_group_id_foreign` (`user_group_id`),
  ADD KEY `user_roles_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_favorite`
--
ALTER TABLE `tbl_favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login_activity`
--
ALTER TABLE `tbl_login_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login_fail_logs`
--
ALTER TABLE `tbl_login_fail_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newsletter_subscription`
--
ALTER TABLE `tbl_newsletter_subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_cart`
--
ALTER TABLE `tbl_product_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_order`
--
ALTER TABLE `tbl_product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_order_list`
--
ALTER TABLE `tbl_product_order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_review`
--
ALTER TABLE `tbl_product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_ss`
--
ALTER TABLE `tbl_product_ss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_sub_category`
--
ALTER TABLE `tbl_product_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_view_track`
--
ALTER TABLE `tbl_product_view_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_site_setting`
--
ALTER TABLE `tbl_site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_login_logs`
--
ALTER TABLE `tbl_user_login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobileno_unique` (`mobileno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `rel_post_category`
--
ALTER TABLE `rel_post_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rel_post_tag`
--
ALTER TABLE `rel_post_tag`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin_groups`
--
ALTER TABLE `tbl_admin_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin_menus`
--
ALTER TABLE `tbl_admin_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_admin_roles`
--
ALTER TABLE `tbl_admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_favorite`
--
ALTER TABLE `tbl_favorite`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_login_activity`
--
ALTER TABLE `tbl_login_activity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login_fail_logs`
--
ALTER TABLE `tbl_login_fail_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_newsletter_subscription`
--
ALTER TABLE `tbl_newsletter_subscription`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_product_cart`
--
ALTER TABLE `tbl_product_cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product_order`
--
ALTER TABLE `tbl_product_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_product_order_list`
--
ALTER TABLE `tbl_product_order_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_product_review`
--
ALTER TABLE `tbl_product_review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product_ss`
--
ALTER TABLE `tbl_product_ss`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_product_sub_category`
--
ALTER TABLE `tbl_product_sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_product_view_track`
--
ALTER TABLE `tbl_product_view_track`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `tbl_site_setting`
--
ALTER TABLE `tbl_site_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_login_logs`
--
ALTER TABLE `tbl_user_login_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
