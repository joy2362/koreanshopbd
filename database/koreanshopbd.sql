-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 04:55 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koreanshopbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdullah zahid', '01780134797', 'abdullahzahidjoy@gmail.com', 'public\\backend\\img\\joy2362.jpg', NULL, '$2y$10$x3SDme7azudieXQeXd3wNuL.js.GT0O/X/cezO.NKQTjRzAUlefZG', NULL, '2020-10-16 20:41:31', '2020-10-16 20:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `author`, `post_title`, `post_details`, `post_img`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'test 123123', '<div style=\"font-family: inherit;\"><div class=\"q9uorilb bvz0fpym c1et5uql sf5mxxl7\" style=\"max-width: calc(100% - 26px); overflow-wrap: break-word; display: inline-block; vertical-align: middle; font-family: inherit;\"><div class=\"_680y\" style=\"display: inline-flex; max-width: 100%; position: relative; vertical-align: middle; font-family: inherit;\"><div class=\"_6cuy\" style=\"flex: 1 1 auto; min-width: 0px; width: 404px; font-family: inherit;\"><div class=\"b3i9ofy5 e72ty7fz qlfml3jp inkptoze qmr60zad rq0escxv oo9gr5id q9uorilb kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x d2edcug0 jm1wdb64 l9j0dhe7 l3itjdph qv66sw1b\" style=\"background-color: var(--comment-background); margin: 0px; max-width: 100%; border-radius: 18px; overflow-wrap: break-word; position: relative; color: var(--primary-text); display: inline-block; word-break: break-word; box-sizing: border-box; font-family: inherit;\"><div class=\"tw6a2znq sj5x9vvc d1544ag0 cxgpxx05\" style=\"padding: 8px 12px; font-family: inherit;\"><div class=\"ecm0bbzt e5nlhep0 a8c37x1j\" style=\"padding-bottom: 4px; padding-top: 4px; font-family: inherit;\"><span class=\"d2edcug0 hpfvmrgz qv66sw1b c1et5uql rrkovp55 a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id\" dir=\"auto\" style=\"line-height: 1.3333; display: block; overflow-wrap: break-word; max-width: 100%; min-width: 0px; font-size: 0.9375rem; color: var(--primary-text); word-break: break-word; font-family: inherit;\"><div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql\" style=\"overflow-wrap: break-word; margin: 0px; font-family: inherit;\"><div dir=\"auto\" style=\"font-family: inherit;\">Its...its not out yet... but you wouldn’t know this because you dont wanna buy the game and do it yourself</div></div></span></div></div></div></div></div></div><div class=\"q9uorilb sf5mxxl7 pgctjfs5\" style=\"width: 22px; display: inline-block; vertical-align: middle; font-family: inherit;\"><div class=\"no6464jc pedkr2u6\" style=\"margin-left: 11px; opacity: 1; font-family: inherit;\"><div aria-expanded=\"false\" aria-haspopup=\"menu\" aria-label=\"More\" class=\"oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l dwo3fsh8 pzggbiyp pkj7ub1o bqnlxs5p kkg9azqs c24pa1uk ln9iyx3p fe6kdd0r ar1oviwq l10q8mi9 sq40qgkc s8quxz6p pdjglbur\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; appearance: none; background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; position: relative; flex-basis: auto; cursor: pointer; -webkit-tap-highlight-color: transparent; flex-shrink: 0; display: inline-flex; vertical-align: bottom; box-sizing: border-box; min-height: 0px; font-family: inherit;\"><i class=\"hu5pjgll m6k467ps sp_VWqFkUPqh4z sx_842890\" style=\"vertical-align: -0.25em; filter: var(--filter-secondary-icon); background-image: url(&quot;/rsrc.php/v3/yh/r/LEEsm0W_nSf.png&quot;); background-size: auto; background-repeat: no-repeat; display: inline-block; height: 16px; width: 16px; background-position: 0px -1419px;\"></i><div class=\"s45kfl79 emlxlaya bkmhp75w spb7xbtv i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3\" data-visualcompletion=\"ignore\" style=\"transition-property: opacity; opacity: 0; border-radius: 50%; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; bottom: -8px; left: -8px; top: -8px; right: -8px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; background-color: var(--hover-overlay); font-family: inherit;\"></div></div></div></div></div><ul class=\"_6coi oygrvhab ozuftl9m l66bhrea linoseic\" style=\"list-style-type: none; margin-right: 0px; margin-bottom: 0px; margin-left: 12px; padding: 3px 0px 0px; min-height: 15px; color: var(--secondary-text); display: inline-block; font-size: 12px; line-height: 12px;\"><li class=\"_6coj\" style=\"display: inline-block; color: rgb(176, 179, 184); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; background-color: rgb(36, 37, 38);\"><span style=\"font-family: inherit;\"><div class=\"l9j0dhe7 q9uorilb\" style=\"position: relative; display: inline-block; font-family: inherit;\"><span style=\"font-family: inherit;\"><div aria-label=\"Like\" class=\"oajrlxb2 bp9cbjyn g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 j83agx80 mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr gokke00a du4w35lb lzcic4wl abiwlrkh p8dawk7l buofh1pr taijpn5t\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; align-items: center; flex-direction: row; flex: 1 0 auto; margin: 0px; z-index: 0; background-color: transparent; touch-action: none; min-width: 0px; text-align: inherit; display: flex; position: relative; cursor: pointer; -webkit-tap-highlight-color: transparent; box-sizing: border-box; justify-content: center; min-height: 0px; font-family: inherit;\"><div class=\"m9osqain nhd2j8a9 q9uorilb n3ffmt46 l9j0dhe7 gpro0wi8\" style=\"position: relative; color: var(--secondary-text); font-weight: bold; cursor: pointer; display: inline-block; font-family: inherit;\"><span class=\"q9uorilb sf5mxxl7 bdca9zbp\" style=\"filter: brightness(0) var(--filter-secondary-icon); display: inline-block; vertical-align: middle; font-family: inherit;\"></span>Like</div></div><div aria-label=\"React\" class=\"oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab kkf49tns tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso pmk7jnqg i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l q45zohi1 g0aa4cga\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px 0px 0px 4px; z-index: 0; clip-path: polygon(0px 0px, 0px 0px, 0px 0px, 0px 0px); background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; flex-basis: auto; cursor: pointer; -webkit-tap-highlight-color: transparent; flex-shrink: 0; position: absolute; display: inline-flex; clip: rect(0px, 0px, 0px, 0px); box-sizing: border-box; min-height: 0px; font-family: inherit;\"><i class=\"hu5pjgll m6k467ps sp_VWqFkUPqh4z sx_dcdf14\" style=\"vertical-align: -0.25em; filter: var(--filter-secondary-icon); background-image: url(&quot;/rsrc.php/v3/yh/r/LEEsm0W_nSf.png&quot;); background-size: auto; background-repeat: no-repeat; display: inline-block; height: 12px; width: 12px; background-position: -17px -1492px;\"></i><div class=\"n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s\" data-visualcompletion=\"ignore\" style=\"border-radius: inherit; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; bottom: 0px; left: 0px; top: 0px; right: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; font-family: inherit;\"></div></div></span></div></span></li><li class=\"_6coj\" style=\"display: inline-block; color: rgb(176, 179, 184); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; background-color: rgb(36, 37, 38);\"></li></ul>', 'public/media/blog/Lv6NL61zBT.jpg', 1, '2020-10-16 21:02:17', '2020-10-16 21:02:17'),
(2, 3, 1, 'What is dry skin?', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'public/media/blog/tDAKvdIrK6.jpg', 1, '2020-10-27 03:38:14', '2020-10-27 03:38:14'),
(3, 1, 1, 'What is dry skin? -123', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'public/media/blog/RYV8t5w92z.jpg', 1, '2020-10-27 03:38:29', '2020-10-27 03:38:29'),
(4, 1, 1, 'What is dry skin? -6', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'public/media/blog/bGPRpjNn7V.jpg', 1, '2020-10-27 03:38:46', '2020-10-27 03:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `created_at`, `updated_at`) VALUES
(1, 'SOME BY MI', 'public/media/brand-logo/htIKN.jpg', '2020-10-16 21:00:01', '2020-10-16 21:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'cosmetic', '2020-10-16 20:59:20', '2020-10-16 20:59:20'),
(2, 'test 2', '2020-10-16 20:59:26', '2020-10-16 20:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `compare_lists`
--

CREATE TABLE `compare_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productId` bigint(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compare_lists`
--

INSERT INTO `compare_lists` (`id`, `uId`, `productId`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'B7TYvdQBTaH9RAUaJrV1', 4, NULL, '2020-10-17 18:50:49', '2020-10-17 18:50:49'),
(2, 'hgLz7rcwlZXVkFNTFyA1', 3, NULL, '2020-10-19 10:31:19', '2020-10-19 10:31:19'),
(3, 'RXLNYK3KglwKLxIAmeQI', 1, NULL, '2020-10-21 13:21:45', '2020-10-21 13:21:45'),
(4, 'RXLNYK3KglwKLxIAmeQI', 13, NULL, '2020-10-21 13:21:48', '2020-10-21 13:21:48'),
(5, 'ahc4oYaNjiEDOMM9ZGep', 3, NULL, '2020-10-25 14:48:27', '2020-10-25 14:48:27'),
(6, 'ahc4oYaNjiEDOMM9ZGep', 2, NULL, '2020-10-25 14:48:30', '2020-10-25 14:48:30'),
(7, 'ahc4oYaNjiEDOMM9ZGep', 13, NULL, '2020-10-25 14:48:31', '2020-10-25 14:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DAZM9', '20', 1, '2020-10-16 21:00:54', '2020-10-17 18:21:33');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah zahid', 'abdullahzahidjoy@gmail.com', 'hello', '2020-10-24 10:52:54', '2020-10-24 10:52:54'),
(2, 'Abdullah zahid', 'abdullahzahidjoy@gmail.com', 'dsfsa asdwe restfs', '2020-10-27 03:52:11', '2020-10-27 03:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `main_sliders`
--

CREATE TABLE `main_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_sliders`
--

INSERT INTO `main_sliders` (`id`, `product_id`, `title`, `description`, `background`, `created_at`, `updated_at`) VALUES
(4, 3, 'Buy one get one', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'public/media/slider/vLHplTburX.jpg', '2020-10-27 03:44:18', '2020-10-27 03:44:18'),
(5, 2, 'What is Lorem Ipsum? -1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'public/media/slider/forBVON7FD.jpg', '2020-10-27 03:44:38', '2020-10-27 03:44:38'),
(6, 13, 'test -23', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'public/media/slider/51N6atbKFM.jpg', '2020-10-27 03:45:01', '2020-10-27 03:45:01');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2020_03_08_122457_create_categories_table', 1),
(6, '2020_03_08_135338_create_brands_table', 1),
(7, '2020_03_23_201920_create_coupons_table', 1),
(8, '2020_03_26_015521_create_newsletters_table', 1),
(9, '2020_03_26_192236_create_products_table', 1),
(10, '2020_04_02_030028_create_blogs_table', 1),
(11, '2020_04_02_031758_create_post_categories_table', 1),
(12, '2020_04_16_073624_create_main_sliders_table', 1),
(13, '2020_04_19_194455_create_wishlists_table', 1),
(14, '2020_04_25_180847_create_skin_types_table', 1),
(15, '2020_05_08_055229_create_skin_concerns_table', 1),
(16, '2020_05_18_141356_create_site_details_table', 1),
(17, '2020_10_14_021907_create_compare_lists_table', 1),
(23, '2020_10_18_170736_create_order_details_table', 2),
(24, '2020_10_18_191132_create_shipment_infos_table', 2),
(25, '2020_10_18_143204_create_orders_table', 3),
(26, '2020_10_24_164945_create_feedback_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_order` tinyint(10) NOT NULL DEFAULT 0,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `name`, `email`, `return_order`, `phone`, `amount`, `address`, `status`, `transaction_id`, `card_type`, `store_amount`, `currency`, `order_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Abdullah zahid', 'abdullhzahidjoy@gmail.com', 2, '01780134797', 3800.00, '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', 'deleveryprogress', '5f927936a7218', 'BKASH-BKash', '3705.00', 'BDT', '2020-10-23', NULL, '2020-10-24 15:06:38'),
(2, 1, 'Abdullah zahid', 'abdullhzahidjoy@gmail.com', 2, '01780134797', 3800.00, '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', 'deleveryprogress', '5f927e470569d', 'BKASH-BKash', '3705.00', 'BDT', '2020-10-23', NULL, '2020-10-24 15:07:02'),
(3, 3, 'Abdullah zahid', '2016100000046@seu.edu.bd', 0, '01780134797', 3940.00, '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', 'done', '5f9590eb9325c', 'BKASH-BKash', '3841.50', 'BDT', '2020-10-25', NULL, '2020-10-25 14:52:54'),
(4, 1, 'Abdullah zahid', 'abdullhzahidjoy@gmail.com', 0, '01780134797', 2980.00, '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', 'Processing', '5f97a8d6ef8e6', 'BKASH-BKash', '2905.50', 'BDT', '2020-10-27', NULL, '2020-10-27 04:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singleprice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `userId`, `product_id`, `quantity`, `singleprice`, `totalprice`, `trans_id`, `created_at`, `updated_at`) VALUES
(5, 1, '4', '1', '1200', '1200', '5f8efb55c2010', '2020-10-20 14:59:46', '2020-10-20 14:59:46'),
(6, 1, '3', '1', '1200', '1200', '5f8efb55c2010', '2020-10-20 14:59:46', '2020-10-20 14:59:46'),
(7, 1, '2', '1', '1200', '1200', '5f8efb55c2010', '2020-10-20 14:59:46', '2020-10-20 14:59:46'),
(8, 1, '5', '1', '1700', '1700', '5f8efb55c2010', '2020-10-20 14:59:46', '2020-10-20 14:59:46'),
(9, 1, '1', '1', '1200', '1200', '5f90364de5517', '2020-10-21 13:23:47', '2020-10-21 13:23:47'),
(10, 1, '3', '1', '1200', '1200', '5f9191303da7c', '2020-10-22 14:03:55', '2020-10-22 14:03:55'),
(11, 1, '2', '1', '1200', '1200', '5f91954717735', '2020-10-22 14:21:10', '2020-10-22 14:21:10'),
(12, 1, '13', '1', '1300', '1300', '5f91954717735', '2020-10-22 14:21:10', '2020-10-22 14:21:10'),
(13, 1, '3', '1', '1200', '1200', '5f91954717735', '2020-10-22 14:21:10', '2020-10-22 14:21:10'),
(14, 1, '3', '1', '1200', '1200', '5f92777d9adfc', '2020-10-23 06:26:31', '2020-10-23 06:26:31'),
(15, 1, '13', '1', '1300', '1300', '5f92777d9adfc', '2020-10-23 06:26:31', '2020-10-23 06:26:31'),
(16, 1, '2', '1', '1200', '1200', '5f92777d9adfc', '2020-10-23 06:26:31', '2020-10-23 06:26:31'),
(17, 1, '3', '1', '1200', '1200', '5f9278341f0fb', '2020-10-23 06:29:35', '2020-10-23 06:29:35'),
(18, 1, '2', '1', '1200', '1200', '5f9278341f0fb', '2020-10-23 06:29:35', '2020-10-23 06:29:35'),
(19, 1, '13', '1', '1300', '1300', '5f9278341f0fb', '2020-10-23 06:29:35', '2020-10-23 06:29:35'),
(20, 1, '2', '1', '1200', '1200', '5f927936a7218', '2020-10-23 06:33:49', '2020-10-23 06:33:49'),
(21, 1, '3', '1', '1200', '1200', '5f927936a7218', '2020-10-23 06:33:49', '2020-10-23 06:33:49'),
(22, 1, '13', '1', '1300', '1300', '5f927936a7218', '2020-10-23 06:33:49', '2020-10-23 06:33:49'),
(23, 3, '2', '4', '1200', '4800', '5f9590eb9325c', '2020-10-25 14:51:39', '2020-10-25 14:51:39'),
(24, 1, '17', '3', '1200', '3600', '5f97a8d6ef8e6', '2020-10-27 04:58:16', '2020-10-27 04:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'hair', '2020-10-16 21:02:02', '2020-10-16 21:02:02'),
(2, 'test', '2020-10-27 03:37:48', '2020-10-27 03:37:48'),
(3, 'cosmetic', '2020-10-27 03:37:53', '2020-10-27 03:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skin_type_id` int(11) NOT NULL,
  `skin_concern_id` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_to_use` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_ingredient` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` int(11) NOT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` tinyint(1) DEFAULT NULL,
  `flash_sale` tinyint(1) DEFAULT NULL,
  `trend` tinyint(1) DEFAULT NULL,
  `img_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `skin_type_id`, `skin_concern_id`, `product_stock`, `product_details`, `how_to_use`, `product_ingredient`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `flash_sale`, `trend`, `img_1`, `img_2`, `img_3`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'LANEIGE Lip Sleeping Mask 3g', 'kbd123', '146', 1, 1, 150, '<pre style=\"background-color:#2b2b2b;color:#a9b7c6;font-family:\'JetBrains Mono\',monospace;font-size:9.8pt;\"><span style=\"color:#a5c261;\">owl-slider😂😂😂😂</span></pre>', '<pre style=\"background-color:#2b2b2b;color:#a9b7c6;font-family:\'JetBrains Mono\',monospace;font-size:9.8pt;\"><span style=\"color:#a5c261;\">owl-slider😁😁😁</span></pre>', '<pre style=\"background-color:#2b2b2b;color:#a9b7c6;font-family:\'JetBrains Mono\',monospace;font-size:9.8pt;\"><span style=\"color:#a5c261;\">owl-slider😉😉😉</span></pre>', 1700, 1200, NULL, 1, 1, NULL, 'public/media/product/shgVLpvVHN.jpg', NULL, NULL, 1, '2020-10-17 18:28:54', '2020-10-21 10:52:57'),
(3, 1, 1, 'AHA BHA PHA 30 Days Miracle Toner 123', 'test 1', '149', 1, 2, 150, '<div style=\"font-family: inherit;\"><div class=\"q9uorilb bvz0fpym c1et5uql sf5mxxl7\" style=\"max-width: calc(100% - 26px); overflow-wrap: break-word; display: inline-block; vertical-align: middle; font-family: inherit;\"><div class=\"_680y\" style=\"display: inline-flex; max-width: 100%; position: relative; vertical-align: middle; font-family: inherit;\"><div class=\"_6cuy\" style=\"flex: 1 1 auto; min-width: 0px; width: 404px; font-family: inherit;\"><div class=\"b3i9ofy5 e72ty7fz qlfml3jp inkptoze qmr60zad rq0escxv oo9gr5id q9uorilb kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x d2edcug0 jm1wdb64 l9j0dhe7 l3itjdph qv66sw1b\" style=\"background-color: var(--comment-background); margin: 0px; max-width: 100%; border-radius: 18px; overflow-wrap: break-word; position: relative; color: var(--primary-text); display: inline-block; word-break: break-word; box-sizing: border-box; font-family: inherit;\"><div class=\"tw6a2znq sj5x9vvc d1544ag0 cxgpxx05\" style=\"padding: 8px 12px; font-family: inherit;\"><div class=\"ecm0bbzt e5nlhep0 a8c37x1j\" style=\"padding-bottom: 4px; padding-top: 4px; font-family: inherit;\"><span class=\"d2edcug0 hpfvmrgz qv66sw1b c1et5uql rrkovp55 a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id\" dir=\"auto\" style=\"line-height: 1.3333; display: block; overflow-wrap: break-word; max-width: 100%; min-width: 0px; font-size: 0.9375rem; color: var(--primary-text); word-break: break-word; font-family: inherit;\"><div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql\" style=\"overflow-wrap: break-word; margin: 0px; font-family: inherit;\"><div dir=\"auto\" style=\"font-family: inherit;\">Its...its not out yet... but you wouldn’t know this because you dont wanna buy the game and do it yourself</div></div></span></div></div></div></div></div></div><div class=\"q9uorilb sf5mxxl7 pgctjfs5\" style=\"width: 22px; display: inline-block; vertical-align: middle; font-family: inherit;\"><div class=\"no6464jc pedkr2u6\" style=\"margin-left: 11px; opacity: 1; font-family: inherit;\"><div aria-expanded=\"false\" aria-haspopup=\"menu\" aria-label=\"More\" class=\"oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l dwo3fsh8 pzggbiyp pkj7ub1o bqnlxs5p kkg9azqs c24pa1uk ln9iyx3p fe6kdd0r ar1oviwq l10q8mi9 sq40qgkc s8quxz6p pdjglbur\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; appearance: none; background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; position: relative; flex-basis: auto; cursor: pointer; -webkit-tap-highlight-color: transparent; flex-shrink: 0; display: inline-flex; vertical-align: bottom; box-sizing: border-box; min-height: 0px; font-family: inherit;\"><i class=\"hu5pjgll m6k467ps sp_VWqFkUPqh4z sx_842890\" style=\"vertical-align: -0.25em; filter: var(--filter-secondary-icon); background-image: url(&quot;/rsrc.php/v3/yh/r/LEEsm0W_nSf.png&quot;); background-size: auto; background-repeat: no-repeat; display: inline-block; height: 16px; width: 16px; background-position: 0px -1419px;\"></i><div class=\"s45kfl79 emlxlaya bkmhp75w spb7xbtv i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3\" data-visualcompletion=\"ignore\" style=\"transition-property: opacity; opacity: 0; border-radius: 50%; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; bottom: -8px; left: -8px; top: -8px; right: -8px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; background-color: var(--hover-overlay); font-family: inherit;\"></div></div></div></div></div><ul class=\"_6coi oygrvhab ozuftl9m l66bhrea linoseic\" style=\"list-style-type: none; margin-right: 0px; margin-bottom: 0px; margin-left: 12px; padding: 3px 0px 0px; min-height: 15px; color: var(--secondary-text); display: inline-block; font-size: 12px; line-height: 12px;\"><li class=\"_6coj\" style=\"display: inline-block; color: rgb(176, 179, 184); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; background-color: rgb(36, 37, 38);\"><span style=\"font-family: inherit;\"><div class=\"l9j0dhe7 q9uorilb\" style=\"position: relative; display: inline-block; font-family: inherit;\"><span style=\"font-family: inherit;\"><div aria-label=\"Like\" class=\"oajrlxb2 bp9cbjyn g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 j83agx80 mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr gokke00a du4w35lb lzcic4wl abiwlrkh p8dawk7l buofh1pr taijpn5t\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; align-items: center; flex-direction: row; flex: 1 0 auto; margin: 0px; z-index: 0; background-color: transparent; touch-action: none; min-width: 0px; text-align: inherit; display: flex; position: relative; cursor: pointer; -webkit-tap-highlight-color: transparent; box-sizing: border-box; justify-content: center; min-height: 0px; font-family: inherit;\"><div class=\"m9osqain nhd2j8a9 q9uorilb n3ffmt46 l9j0dhe7 gpro0wi8\" style=\"position: relative; color: var(--secondary-text); font-weight: bold; cursor: pointer; display: inline-block; font-family: inherit;\"><span class=\"q9uorilb sf5mxxl7 bdca9zbp\" style=\"filter: brightness(0) var(--filter-secondary-icon); display: inline-block; vertical-align: middle; font-family: inherit;\"></span>Like</div></div><div aria-label=\"React\" class=\"oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab kkf49tns tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso pmk7jnqg i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l q45zohi1 g0aa4cga\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px 0px 0px 4px; z-index: 0; clip-path: polygon(0px 0px, 0px 0px, 0px 0px, 0px 0px); background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; flex-basis: auto; cursor: pointer; -webkit-tap-highlight-color: transparent; flex-shrink: 0; position: absolute; display: inline-flex; clip: rect(0px, 0px, 0px, 0px); box-sizing: border-box; min-height: 0px; font-family: inherit;\"><i class=\"hu5pjgll m6k467ps sp_VWqFkUPqh4z sx_dcdf14\" style=\"vertical-align: -0.25em; filter: var(--filter-secondary-icon); background-image: url(&quot;/rsrc.php/v3/yh/r/LEEsm0W_nSf.png&quot;); background-size: auto; background-repeat: no-repeat; display: inline-block; height: 12px; width: 12px; background-position: -17px -1492px;\"></i><div class=\"n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s\" data-visualcompletion=\"ignore\" style=\"border-radius: inherit; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; bottom: 0px; left: 0px; top: 0px; right: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; font-family: inherit;\"></div></div></span></div></span></li><li class=\"_6coj\" style=\"display: inline-block; color: rgb(176, 179, 184); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; background-color: rgb(36, 37, 38);\"></li></ul>', '<div style=\"font-family: inherit;\"><div class=\"q9uorilb bvz0fpym c1et5uql sf5mxxl7\" style=\"max-width: calc(100% - 26px); overflow-wrap: break-word; display: inline-block; vertical-align: middle; font-family: inherit;\"><div class=\"_680y\" style=\"display: inline-flex; max-width: 100%; position: relative; vertical-align: middle; font-family: inherit;\"><div class=\"_6cuy\" style=\"flex: 1 1 auto; min-width: 0px; width: 404px; font-family: inherit;\"><div class=\"b3i9ofy5 e72ty7fz qlfml3jp inkptoze qmr60zad rq0escxv oo9gr5id q9uorilb kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x d2edcug0 jm1wdb64 l9j0dhe7 l3itjdph qv66sw1b\" style=\"background-color: var(--comment-background); margin: 0px; max-width: 100%; border-radius: 18px; overflow-wrap: break-word; position: relative; color: var(--primary-text); display: inline-block; word-break: break-word; box-sizing: border-box; font-family: inherit;\"><div class=\"tw6a2znq sj5x9vvc d1544ag0 cxgpxx05\" style=\"padding: 8px 12px; font-family: inherit;\"><div class=\"ecm0bbzt e5nlhep0 a8c37x1j\" style=\"padding-bottom: 4px; padding-top: 4px; font-family: inherit;\"><span class=\"d2edcug0 hpfvmrgz qv66sw1b c1et5uql rrkovp55 a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id\" dir=\"auto\" style=\"line-height: 1.3333; display: block; overflow-wrap: break-word; max-width: 100%; min-width: 0px; font-size: 0.9375rem; color: var(--primary-text); word-break: break-word; font-family: inherit;\"><div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql\" style=\"overflow-wrap: break-word; margin: 0px; font-family: inherit;\"><div dir=\"auto\" style=\"font-family: inherit;\">Its...its not out yet... but you wouldn’t know this because you dont wanna buy the game and do it yourself</div></div></span></div></div></div></div></div></div><div class=\"q9uorilb sf5mxxl7 pgctjfs5\" style=\"width: 22px; display: inline-block; vertical-align: middle; font-family: inherit;\"><div class=\"no6464jc pedkr2u6\" style=\"margin-left: 11px; opacity: 1; font-family: inherit;\"><div aria-expanded=\"false\" aria-haspopup=\"menu\" aria-label=\"More\" class=\"oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l dwo3fsh8 pzggbiyp pkj7ub1o bqnlxs5p kkg9azqs c24pa1uk ln9iyx3p fe6kdd0r ar1oviwq l10q8mi9 sq40qgkc s8quxz6p pdjglbur\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; appearance: none; background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; position: relative; flex-basis: auto; cursor: pointer; -webkit-tap-highlight-color: transparent; flex-shrink: 0; display: inline-flex; vertical-align: bottom; box-sizing: border-box; min-height: 0px; font-family: inherit;\"><i class=\"hu5pjgll m6k467ps sp_VWqFkUPqh4z sx_842890\" style=\"vertical-align: -0.25em; filter: var(--filter-secondary-icon); background-image: url(&quot;/rsrc.php/v3/yh/r/LEEsm0W_nSf.png&quot;); background-size: auto; background-repeat: no-repeat; display: inline-block; height: 16px; width: 16px; background-position: 0px -1419px;\"></i><div class=\"s45kfl79 emlxlaya bkmhp75w spb7xbtv i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3\" data-visualcompletion=\"ignore\" style=\"transition-property: opacity; opacity: 0; border-radius: 50%; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; bottom: -8px; left: -8px; top: -8px; right: -8px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; background-color: var(--hover-overlay); font-family: inherit;\"></div></div></div></div></div><ul class=\"_6coi oygrvhab ozuftl9m l66bhrea linoseic\" style=\"list-style-type: none; margin-right: 0px; margin-bottom: 0px; margin-left: 12px; padding: 3px 0px 0px; min-height: 15px; color: var(--secondary-text); display: inline-block; font-size: 12px; line-height: 12px;\"><li class=\"_6coj\" style=\"display: inline-block; color: rgb(176, 179, 184); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; background-color: rgb(36, 37, 38);\"><span style=\"font-family: inherit;\"><div class=\"l9j0dhe7 q9uorilb\" style=\"position: relative; display: inline-block; font-family: inherit;\"><span style=\"font-family: inherit;\"><div aria-label=\"Like\" class=\"oajrlxb2 bp9cbjyn g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 j83agx80 mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr gokke00a du4w35lb lzcic4wl abiwlrkh p8dawk7l buofh1pr taijpn5t\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; align-items: center; flex-direction: row; flex: 1 0 auto; margin: 0px; z-index: 0; background-color: transparent; touch-action: none; min-width: 0px; text-align: inherit; display: flex; position: relative; cursor: pointer; -webkit-tap-highlight-color: transparent; box-sizing: border-box; justify-content: center; min-height: 0px; font-family: inherit;\"><div class=\"m9osqain nhd2j8a9 q9uorilb n3ffmt46 l9j0dhe7 gpro0wi8\" style=\"position: relative; color: var(--secondary-text); font-weight: bold; cursor: pointer; display: inline-block; font-family: inherit;\"><span class=\"q9uorilb sf5mxxl7 bdca9zbp\" style=\"filter: brightness(0) var(--filter-secondary-icon); display: inline-block; vertical-align: middle; font-family: inherit;\"></span>Like</div></div><div aria-label=\"React\" class=\"oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab kkf49tns tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso pmk7jnqg i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l q45zohi1 g0aa4cga\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px 0px 0px 4px; z-index: 0; clip-path: polygon(0px 0px, 0px 0px, 0px 0px, 0px 0px); background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; flex-basis: auto; cursor: pointer; -webkit-tap-highlight-color: transparent; flex-shrink: 0; position: absolute; display: inline-flex; clip: rect(0px, 0px, 0px, 0px); box-sizing: border-box; min-height: 0px; font-family: inherit;\"><i class=\"hu5pjgll m6k467ps sp_VWqFkUPqh4z sx_dcdf14\" style=\"vertical-align: -0.25em; filter: var(--filter-secondary-icon); background-image: url(&quot;/rsrc.php/v3/yh/r/LEEsm0W_nSf.png&quot;); background-size: auto; background-repeat: no-repeat; display: inline-block; height: 12px; width: 12px; background-position: -17px -1492px;\"></i><div class=\"n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s\" data-visualcompletion=\"ignore\" style=\"border-radius: inherit; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; bottom: 0px; left: 0px; top: 0px; right: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; font-family: inherit;\"></div></div></span></div></span></li><li class=\"_6coj\" style=\"display: inline-block; color: rgb(176, 179, 184); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; background-color: rgb(36, 37, 38);\"></li></ul>', '<div style=\"font-family: inherit;\"><div class=\"q9uorilb bvz0fpym c1et5uql sf5mxxl7\" style=\"max-width: calc(100% - 26px); overflow-wrap: break-word; display: inline-block; vertical-align: middle; font-family: inherit;\"><div class=\"_680y\" style=\"display: inline-flex; max-width: 100%; position: relative; vertical-align: middle; font-family: inherit;\"><div class=\"_6cuy\" style=\"flex: 1 1 auto; min-width: 0px; width: 404px; font-family: inherit;\"><div class=\"b3i9ofy5 e72ty7fz qlfml3jp inkptoze qmr60zad rq0escxv oo9gr5id q9uorilb kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x d2edcug0 jm1wdb64 l9j0dhe7 l3itjdph qv66sw1b\" style=\"background-color: var(--comment-background); margin: 0px; max-width: 100%; border-radius: 18px; overflow-wrap: break-word; position: relative; color: var(--primary-text); display: inline-block; word-break: break-word; box-sizing: border-box; font-family: inherit;\"><div class=\"tw6a2znq sj5x9vvc d1544ag0 cxgpxx05\" style=\"padding: 8px 12px; font-family: inherit;\"><div class=\"ecm0bbzt e5nlhep0 a8c37x1j\" style=\"padding-bottom: 4px; padding-top: 4px; font-family: inherit;\"><span class=\"d2edcug0 hpfvmrgz qv66sw1b c1et5uql rrkovp55 a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id\" dir=\"auto\" style=\"line-height: 1.3333; display: block; overflow-wrap: break-word; max-width: 100%; min-width: 0px; font-size: 0.9375rem; color: var(--primary-text); word-break: break-word; font-family: inherit;\"><div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql\" style=\"overflow-wrap: break-word; margin: 0px; font-family: inherit;\"><div dir=\"auto\" style=\"font-family: inherit;\">Its...its not out yet... but you wouldn’t know this because you dont wanna buy the game and do it yourself</div></div></span></div></div></div></div></div></div><div class=\"q9uorilb sf5mxxl7 pgctjfs5\" style=\"width: 22px; display: inline-block; vertical-align: middle; font-family: inherit;\"><div class=\"no6464jc pedkr2u6\" style=\"margin-left: 11px; opacity: 1; font-family: inherit;\"><div aria-expanded=\"false\" aria-haspopup=\"menu\" aria-label=\"More\" class=\"oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l dwo3fsh8 pzggbiyp pkj7ub1o bqnlxs5p kkg9azqs c24pa1uk ln9iyx3p fe6kdd0r ar1oviwq l10q8mi9 sq40qgkc s8quxz6p pdjglbur\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; appearance: none; background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; position: relative; flex-basis: auto; cursor: pointer; -webkit-tap-highlight-color: transparent; flex-shrink: 0; display: inline-flex; vertical-align: bottom; box-sizing: border-box; min-height: 0px; font-family: inherit;\"><i class=\"hu5pjgll m6k467ps sp_VWqFkUPqh4z sx_842890\" style=\"vertical-align: -0.25em; filter: var(--filter-secondary-icon); background-image: url(&quot;/rsrc.php/v3/yh/r/LEEsm0W_nSf.png&quot;); background-size: auto; background-repeat: no-repeat; display: inline-block; height: 16px; width: 16px; background-position: 0px -1419px;\"></i><div class=\"s45kfl79 emlxlaya bkmhp75w spb7xbtv i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3\" data-visualcompletion=\"ignore\" style=\"transition-property: opacity; opacity: 0; border-radius: 50%; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; bottom: -8px; left: -8px; top: -8px; right: -8px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; background-color: var(--hover-overlay); font-family: inherit;\"></div></div></div></div></div><ul class=\"_6coi oygrvhab ozuftl9m l66bhrea linoseic\" style=\"list-style-type: none; margin-right: 0px; margin-bottom: 0px; margin-left: 12px; padding: 3px 0px 0px; min-height: 15px; color: var(--secondary-text); display: inline-block; font-size: 12px; line-height: 12px;\"><li class=\"_6coj\" style=\"display: inline-block; color: rgb(176, 179, 184); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; background-color: rgb(36, 37, 38);\"><span style=\"font-family: inherit;\"><div class=\"l9j0dhe7 q9uorilb\" style=\"position: relative; display: inline-block; font-family: inherit;\"><span style=\"font-family: inherit;\"><div aria-label=\"Like\" class=\"oajrlxb2 bp9cbjyn g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 j83agx80 mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr gokke00a du4w35lb lzcic4wl abiwlrkh p8dawk7l buofh1pr taijpn5t\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; align-items: center; flex-direction: row; flex: 1 0 auto; margin: 0px; z-index: 0; background-color: transparent; touch-action: none; min-width: 0px; text-align: inherit; display: flex; position: relative; cursor: pointer; -webkit-tap-highlight-color: transparent; box-sizing: border-box; justify-content: center; min-height: 0px; font-family: inherit;\"><div class=\"m9osqain nhd2j8a9 q9uorilb n3ffmt46 l9j0dhe7 gpro0wi8\" style=\"position: relative; color: var(--secondary-text); font-weight: bold; cursor: pointer; display: inline-block; font-family: inherit;\"><span class=\"q9uorilb sf5mxxl7 bdca9zbp\" style=\"filter: brightness(0) var(--filter-secondary-icon); display: inline-block; vertical-align: middle; font-family: inherit;\"></span>Like</div></div><div aria-label=\"React\" class=\"oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab kkf49tns tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso pmk7jnqg i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l q45zohi1 g0aa4cga\" role=\"button\" tabindex=\"0\" style=\"outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px 0px 0px 4px; z-index: 0; clip-path: polygon(0px 0px, 0px 0px, 0px 0px, 0px 0px); background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; flex-basis: auto; cursor: pointer; -webkit-tap-highlight-color: transparent; flex-shrink: 0; position: absolute; display: inline-flex; clip: rect(0px, 0px, 0px, 0px); box-sizing: border-box; min-height: 0px; font-family: inherit;\"><i class=\"hu5pjgll m6k467ps sp_VWqFkUPqh4z sx_dcdf14\" style=\"vertical-align: -0.25em; filter: var(--filter-secondary-icon); background-image: url(&quot;/rsrc.php/v3/yh/r/LEEsm0W_nSf.png&quot;); background-size: auto; background-repeat: no-repeat; display: inline-block; height: 12px; width: 12px; background-position: -17px -1492px;\"></i><div class=\"n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s\" data-visualcompletion=\"ignore\" style=\"border-radius: inherit; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; bottom: 0px; left: 0px; top: 0px; right: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; font-family: inherit;\"></div></div></span></div></span></li><li class=\"_6coj\" style=\"display: inline-block; color: rgb(176, 179, 184); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; background-color: rgb(36, 37, 38);\"></li></ul>', 1700, 1200, NULL, 1, 1, 1, 'public/media/product/vP3iZrwmH3.jpg', NULL, NULL, 1, '2020-10-16 21:01:51', '2020-10-21 10:53:07'),
(13, 1, 1, 'Innisfree Daily UV Protection Cream No Sebum SPF35 PA+++ 50ml', 'ksbd-1', '99', 1, 2, 100, '<div class=\"deep-woo-single-product-content\" style=\"box-sizing: border-box; margin: 10px 0px 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Nunito Sans&quot;; vertical-align: baseline; color: rgb(98, 98, 98);\"><ul style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 21px; margin-left: 3px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style: inside;\"><li style=\"box-sizing: border-box; margin: 0px 0px 4px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 15px; line-height: 1.6; font-family: inherit; vertical-align: baseline;\"><span style=\"color: rgb(68, 68, 68); font-size: 17px;\">𝗔𝗯𝗼𝘂𝘁 : A clean and matte oil control UV protection cream with a special sunflower formulation. The Innisfree Daily UV Protection cream has a 100% mineral filter that gently takes care of your skin, and the porous powder prevents your skin from getting greasy ensuring a clear, matte finish.Portulaca oleracea and centella asiatica extracts soothe your skin that has been exposed to UV rays and other harmful environmental conditions and offer a strong astringent effect.</span></li></ul></div>', '<span style=\"color: rgb(68, 68, 68); font-family: &quot;Nunito Sans&quot;; font-size: 17px;\">𝗨𝘀𝗲: At the last stage of your skincare routine, evenly apply onto easily exposed areas of face.</span>', '<span style=\"color: rgb(68, 68, 68); font-family: &quot;Nunito Sans&quot;; font-size: 17px;\">Cyclopentasiloxane, Water, Zinc Oxide (Ci 77947), Titanium Dioxide (Ci 77891), Methyl Methacrylate Crosspolymer, Peg-10 Dimethicone, Isodecyl Neopentanoate, Silica, Mica (Ci 77019), Dipropylene Glycol, Disteardimonium Hectorite, Glycerin, Cyclomethicone, Magnesium Sulfate, Aluminum Hydroxide, Aluminum Stearate, Vinyl Dimethicone/Methicone Silsesquioxane Crosspolymer, Polymethyl Methacrylate, Methicone, Stearoyl Inulin, Phenoxyethanol, Sorbitan Sesquioleate, Fragrance, Caprylyl Glycol, Propanediol, Microcrystalline Cellulose, Dimethicone/Vinyl Dimethicone Crosspolymer, Glyceryl Caprylate, Polyglyceryl-6 Polyricinoleate, Camellia Sinensis Leaf Extract, Ethylhexylglycerin, Dimethicone, Iron Oxides (Ci 77492), Triethoxycaprylylsilane, Portulaca Oleracea Extract, Centella Asiatica Extract, Cellulose Gum, Iron Oxides (Ci 77491), Iron Oxides (Ci 77499), Helianthus Annuus (Sunflower) Seed Oil, Hamamelis Virginiana (Witch Hazel) Leaf Extract, Opuntia Coccinellifera Fruit Extract, Camellia Japonica Leaf Extract, Orchid Extract, Citrus Unshiu Peel Extract, Citric Acid, Potassium Sorbate, Sodium Benzoate.</span>', 1300, NULL, NULL, 1, 1, NULL, 'public/media/product/IqbBUWWMve.jpg', NULL, NULL, 1, '2020-10-21 13:19:31', '2020-10-21 13:19:31'),
(14, 2, 1, 'AHA BHA PHA 30 Days Miracle Toner', 'ksbd-11', '150ml', 1, 1, 150, '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 1500, NULL, NULL, NULL, 1, NULL, 'public/media/product/fKpSeWaBjl.jpg', NULL, NULL, 1, '2020-10-27 03:30:53', '2020-10-27 03:30:53'),
(15, 1, 1, 'Innisfree Daily UV Protection Cream No Sebum SPF35 PA+++', 'kbd124', '50ml', 1, 2, 150, '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 1600, 1200, NULL, NULL, 1, NULL, 'public/media/product/lO09rgayWn.jpg', NULL, NULL, 1, '2020-10-27 03:31:38', '2020-10-27 03:31:38'),
(16, 2, 1, 'AHA.BHA.PHA 30 Days Miracle Serum 12', 'ksb-03', '50ml', 1, 1, 150, '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 1300, 1200, NULL, NULL, 1, NULL, 'public/media/product/nhxofrhkDE.jpg', NULL, NULL, 1, '2020-10-27 03:33:02', '2020-10-27 03:33:02'),
(17, 1, 1, 'BYE BYE BLACKHEAD 30DAYS MIRACLE GREEN TEA TOX -1', 'kbd125', '117', 1, 1, 120, '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 1500, 1200, NULL, NULL, 1, 1, 'public/media/product/hjDPtkresz.jpg', NULL, NULL, 1, '2020-10-27 03:34:00', '2020-10-27 03:34:00'),
(18, 2, 1, 'LANEIGE Lip Sleeping Mask 3g -2', 'ksbd-12', '30g', 1, 2, 120, '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 1500, NULL, NULL, NULL, 1, NULL, 'public/media/product/8D3wRPNMRO.jpg', NULL, NULL, 1, '2020-10-27 03:34:49', '2020-10-27 03:34:49'),
(19, 1, 1, 'AHA BHA PHA 30 Days Miracle Toner -5', 'ksbd-14', '50ml', 1, 1, 100, '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 1700, NULL, NULL, NULL, NULL, NULL, 'public/media/product/6B5NETCHud.jpg', NULL, NULL, 1, '2020-10-27 03:36:25', '2020-10-27 03:36:25'),
(20, 1, 1, 'AHA BHA PHA 30 Days Miracle Toner -7', 'ksbd-15', '120g', 1, 1, 112, '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 1300, NULL, NULL, NULL, NULL, NULL, 'public/media/product/Om3Fs6bePD.jpg', NULL, NULL, 1, '2020-10-27 03:37:19', '2020-10-27 03:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_infos`
--

CREATE TABLE `shipment_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipment_infos`
--

INSERT INTO `shipment_infos` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `created_at`, `updated_at`) VALUES
(6, '5f8ef94f641b2', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-20 14:50:55', '2020-10-20 14:50:55'),
(7, '5f8efb55c2010', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-20 14:59:33', '2020-10-20 14:59:33'),
(8, '5f90364de5517', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-21 13:23:25', '2020-10-21 13:23:25'),
(9, '5f9191303da7c', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-22 14:03:28', '2020-10-22 14:03:28'),
(10, '5f91954717735', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-22 14:20:55', '2020-10-22 14:20:55'),
(11, '5f92777d9adfc', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-23 06:26:05', '2020-10-23 06:26:05'),
(12, '5f9278341f0fb', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-23 06:29:08', '2020-10-23 06:29:08'),
(13, '5f927936a7218', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-23 06:33:26', '2020-10-23 06:33:26'),
(14, '5f927e470569d', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-23 06:55:03', '2020-10-23 06:55:03'),
(15, '5f9590eb9325c', 'Abdullah Zahid', '01780134797', '2016100000046@seu.edu.bd', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-25 14:51:23', '2020-10-25 14:51:23'),
(16, '5f97a8d6ef8e6', 'Abdullah Zahid', '01780134797', 'abdullhzahidjoy@gmail.com', '45/3-1 Matikata, Dhaka Cantonment Dhaka-1206', '2020-10-27 04:57:58', '2020-10-27 04:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `site_details`
--

CREATE TABLE `site_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_details`
--

INSERT INTO `site_details` (`id`, `site_name`, `address`, `logo`, `phone_1`, `about`, `email`, `facebook_link`, `google_link`, `instagram_link`, `created_at`, `updated_at`) VALUES
(1, 'KoreanShop', 'ishurdi', 'public/media/sitelogo/koreanshopbd.png', '01794790598', 'Korean Shop Bangladesh is all set to bring 100% authentic and the best of Korean Skincare products for Bangladeshi People at a reasonable price.', 'Koreanshopbangladesh@gmail.com', 'Koreanshopbangladesh@gmail.com', 'Koreanshopbangladesh@gmail.com', 'Koreanshopbangladesh@gmail.com', '2020-10-16 20:41:31', '2020-10-16 20:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `skin_concerns`
--

CREATE TABLE `skin_concerns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skin_concern` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skin_concerns`
--

INSERT INTO `skin_concerns` (`id`, `skin_concern`, `created_at`, `updated_at`) VALUES
(1, 'dry', '2020-10-16 21:00:12', '2020-10-16 21:00:12'),
(2, 'dry123', '2020-10-16 21:00:37', '2020-10-16 21:00:37'),
(3, 'asdf', '2020-10-16 21:00:42', '2020-10-16 21:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `skin_types`
--

CREATE TABLE `skin_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_of_skin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skin_types`
--

INSERT INTO `skin_types` (`id`, `type_of_skin`, `created_at`, `updated_at`) VALUES
(1, 'test 123', '2020-10-16 21:01:04', '2020-10-16 21:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `provider`, `provider_id`, `avatar`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah Zahid', 'facebook', '863604800716561', 'https://graph.facebook.com/v3.3/863604800716561/picture?type=normal', NULL, 'abdullhzahidjoy@gmail.com', NULL, NULL, NULL, '2020-10-17 23:15:58', '2020-10-17 23:15:58'),
(2, 'abdullah Zahid', 'google', '102552298308038349330', 'https://lh3.googleusercontent.com/a-/AOh14GjraeZHTmXJ9VgsfGQhRsd-gFsg43rwUroG306l8A=s96-c', NULL, 'md987954@gmail.com', NULL, NULL, NULL, '2020-10-20 13:48:03', '2020-10-20 13:48:03'),
(3, 'Abdullah Zahid', 'google', '118438575078717077306', 'https://lh5.googleusercontent.com/-GHiCNb-FtLY/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckBlYdQ0C3Z6Joc8d7Z9Yt_Rw3UgA/s96-c/photo.jpg', NULL, '2016100000046@seu.edu.bd', NULL, NULL, NULL, '2020-10-25 14:49:43', '2020-10-25 14:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2020-10-19 10:31:42', '2020-10-19 10:31:42'),
(2, 1, 4, '2020-10-19 10:31:43', '2020-10-19 10:31:43'),
(3, 3, 2, '2020-10-25 14:49:51', '2020-10-25 14:49:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare_lists`
--
ALTER TABLE `compare_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_sliders`
--
ALTER TABLE `main_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_infos`
--
ALTER TABLE `shipment_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_details`
--
ALTER TABLE `site_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skin_concerns`
--
ALTER TABLE `skin_concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skin_types`
--
ALTER TABLE `skin_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `compare_lists`
--
ALTER TABLE `compare_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_sliders`
--
ALTER TABLE `main_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shipment_infos`
--
ALTER TABLE `shipment_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `site_details`
--
ALTER TABLE `site_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skin_concerns`
--
ALTER TABLE `skin_concerns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skin_types`
--
ALTER TABLE `skin_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
