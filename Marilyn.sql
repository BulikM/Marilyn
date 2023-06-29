-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 29 jun 2023 om 06:30
-- Serverversie: 8.0.31
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Marilyn`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `billing_addresses`
--

DROP TABLE IF EXISTS `billing_addresses`;
CREATE TABLE IF NOT EXISTS `billing_addresses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `company_name` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `billing_addresses_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `billing_addresses`
--

INSERT INTO `billing_addresses` (`id`, `user_id`, `company_name`, `vat`, `first_name`, `last_name`, `address_1`, `address_2`, `city`, `province`, `zipcode`, `country`, `phone`, `is_primary`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, NULL, 'marilyn', 'Bulik', 'beversesteenweg', '394', 'roeselare', 'west-vlaanderen', '8800', 'Belgie', '0495/886463', 1, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brands_name_unique` (`name`),
  UNIQUE KEY `brands_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `colors_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Assorted', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(2, 'Beige', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(3, 'Beige Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(4, 'Black', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(5, 'Black Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(6, 'Blue', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(7, 'Blue Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(8, 'Brown', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(9, 'Brown Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(10, 'Burgundy', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(11, 'Cream', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(12, 'Cream Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(13, 'Gold', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(14, 'Green', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(15, 'Green Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(16, 'Grey', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(17, 'Grey Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(18, 'Light Orange', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(19, 'Light Pink', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(20, 'Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(21, 'Natural', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(22, 'Natural Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(23, 'Navy', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(24, 'Navy Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(25, 'Neutrals', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(26, 'Orange', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(27, 'Orange Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(28, 'Pink', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL),
(29, 'Pink Multi', '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `days`
--

DROP TABLE IF EXISTS `days`;
CREATE TABLE IF NOT EXISTS `days` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `days`
--

INSERT INTO `days` (`id`, `name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_16_205016_create_days_table', 1),
(7, '2023_05_16_205034_create_months_table', 1),
(8, '2023_05_17_075529_create_newsletter_infos_table', 1),
(9, '2023_05_17_080645_create_preferences_table', 1),
(10, '2023_05_17_081035_create_read_or_shops_table', 1),
(11, '2023_05_17_081216_create_salutation_table', 1),
(12, '2023_05_18_155057_create_shipping_addresses_table', 1),
(13, '2023_05_18_155749_create_billing_addresses_table', 1),
(14, '2023_06_03_175306_create_products_table', 1),
(15, '2023_06_04_093022_create_images_table', 1),
(16, '2023_06_07_130746_create_brands_table', 1),
(17, '2023_06_07_132037_create_colors_table', 1),
(18, '2023_06_12_140606_create_orders_table', 1),
(19, '2023_06_20_141314_create_order_details_table', 1),
(20, '2023_06_20_142928_create_order_products_table', 1),
(21, '2023_06_24_172215_create_subcategory_table', 1),
(22, '2023_06_26_135004_create_category_table', 1),
(23, '2023_06_27_122209_create_product_subcategories_table', 1),
(24, '2023_06_27_130734_create_product_images_table', 1),
(25, '2023_06_28_100229_create_sizes_table', 1),
(26, '2023_06_29_000507_create_product_propertylists_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `months`
--

DROP TABLE IF EXISTS `months`;
CREATE TABLE IF NOT EXISTS `months` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `months`
--

INSERT INTO `months` (`id`, `name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsletter_infos`
--

DROP TABLE IF EXISTS `newsletter_infos`;
CREATE TABLE IF NOT EXISTS `newsletter_infos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `newsletter_infos`
--

INSERT INTO `newsletter_infos` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'New Podcast Episodes', NULL, NULL, NULL),
(2, 'New youtube content', NULL, NULL, NULL),
(3, 'new articles', NULL, NULL, NULL),
(4, 'new product launches', NULL, NULL, NULL),
(5, 'new marketing promotions', NULL, NULL, NULL),
(6, 'new netflix episodes', NULL, NULL, NULL),
(7, 'new goop events', NULL, NULL, NULL),
(8, 'goop store announcements', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsletter_info_user`
--

DROP TABLE IF EXISTS `newsletter_info_user`;
CREATE TABLE IF NOT EXISTS `newsletter_info_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `newsletter_info_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletter_info_user_user_id_newsletter_info_id_unique` (`user_id`,`newsletter_info_id`),
  KEY `newsletter_info_user_newsletter_info_id_foreign` (`newsletter_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` decimal(6,2) NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `orders_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `company` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping` tinyint(1) NOT NULL DEFAULT '0',
  `billing` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_details_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_products`
--

DROP TABLE IF EXISTS `order_products`;
CREATE TABLE IF NOT EXISTS `order_products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `orders_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `preferences`
--

DROP TABLE IF EXISTS `preferences`;
CREATE TABLE IF NOT EXISTS `preferences` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `preferences`
--

INSERT INTO `preferences` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Beauty', NULL, NULL, NULL),
(2, 'Food & Home', NULL, NULL, NULL),
(3, 'Style', NULL, NULL, NULL),
(4, 'Travel', NULL, NULL, NULL),
(5, 'Wellness', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `preference_user`
--

DROP TABLE IF EXISTS `preference_user`;
CREATE TABLE IF NOT EXISTS `preference_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `preference_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `preference_user_user_id_preference_id_unique` (`user_id`,`preference_id`),
  KEY `preference_user_preference_id_foreign` (`preference_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `image_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`),
  KEY `product_images_image_id_foreign` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_propertylists`
--

DROP TABLE IF EXISTS `product_propertylists`;
CREATE TABLE IF NOT EXISTS `product_propertylists` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `color_id` bigint UNSIGNED DEFAULT NULL,
  `size_id` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_propertylists_product_id_foreign` (`product_id`),
  KEY `product_propertylists_brand_id_foreign` (`brand_id`),
  KEY `product_propertylists_color_id_foreign` (`color_id`),
  KEY `product_propertylists_size_id_foreign` (`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_subcategories`
--

DROP TABLE IF EXISTS `product_subcategories`;
CREATE TABLE IF NOT EXISTS `product_subcategories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `subcategory_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_subcategories_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `read_or_shops`
--

DROP TABLE IF EXISTS `read_or_shops`;
CREATE TABLE IF NOT EXISTS `read_or_shops` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `read_or_shops`
--

INSERT INTO `read_or_shops` (`id`, `name`) VALUES
(1, 'Read'),
(2, 'Shop'),
(3, 'Both');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `salutations`
--

DROP TABLE IF EXISTS `salutations`;
CREATE TABLE IF NOT EXISTS `salutations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `salutations`
--

INSERT INTO `salutations` (`id`, `name`) VALUES
(1, 'Mr'),
(2, 'Mrs'),
(3, 'Miss'),
(4, 'Ms'),
(5, 'X');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shipping_addresses`
--

DROP TABLE IF EXISTS `shipping_addresses`;
CREATE TABLE IF NOT EXISTS `shipping_addresses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `first_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shipping_addresses_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `user_id`, `first_name`, `last_name`, `address_1`, `address_2`, `city`, `province`, `zipcode`, `country`, `phone`, `is_primary`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'marilyn2', 'Bulik2', 'beversesteenweg2', '3942', 'roeselare2', 'west-vlaanderen2', '88002', 'Belgie2', '0495/8864632', 1, '2023-06-29 04:30:06', '2023-06-29 04:30:06', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subcategory_slug_unique` (`slug`),
  KEY `subcategory_parent_id_foreign` (`parent_id`),
  KEY `subcategory_category_id_foreign` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `salutation_id` bigint UNSIGNED DEFAULT NULL,
  `first_name` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_id` bigint UNSIGNED DEFAULT NULL,
  `day_id` bigint UNSIGNED DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_employee` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `read_or_shop_id` bigint UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_day_id_foreign` (`day_id`),
  KEY `users_month_id_foreign` (`month_id`),
  KEY `users_read_or_shop_id_foreign` (`read_or_shop_id`),
  KEY `users_salutation_id_foreign` (`salutation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `salutation_id`, `first_name`, `last_name`, `email`, `phone`, `mobile_phone`, `month_id`, `day_id`, `birthdate`, `email_verified_at`, `password`, `remember_token`, `is_employee`, `is_active`, `created_at`, `updated_at`, `deleted_at`, `read_or_shop_id`) VALUES
(1, NULL, 'Admin', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$fPMx2/xwFUwqMu9.RWoPi.utjphI8n7zVHgFOIjNXCqzEP/rBXV9u', NULL, 1, 1, '2023-06-29 04:30:04', '2023-06-29 04:30:04', NULL, NULL),
(2, NULL, 'Marilyn', NULL, 'marilynbulik@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$asMv2qFYKsvDu9BUZJGc6OMN8Xb6RWB2mBztTnskk4/7RErt4j6vW', NULL, 1, 0, '2023-06-29 04:30:04', '2023-06-29 04:30:04', NULL, NULL),
(3, 1, 'Deondre', 'Klocko', 'cronin.reta@example.org', '1-417-218-8132', '(424) 428-8558', 5, 23, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(4, 3, 'Justice', 'Stokes', 'joel.brakus@example.org', '(334) 214-8759', '(951) 474-7218', 7, 30, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(5, 3, 'Antonia', 'Rodriguez', 'deangelo77@example.org', '(512) 283-1746', '(480) 848-6510', 10, 7, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(6, 3, 'Helmer', 'Altenwerth', 'jeff.trantow@example.com', '(304) 307-0253', '(417) 362-3960', 12, 22, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(7, 5, 'Elisabeth', 'Keeling', 'franecki.megane@example.org', '1-678-641-1925', '+19209293240', 8, 16, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(8, 2, 'Ally', 'Barrows', 'grady.donnelly@example.net', '(763) 990-8848', '+1 (870) 921-7457', 10, 30, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(9, 4, 'Jarrett', 'Kozey', 'diana.vandervort@example.com', '+1-646-232-8010', '206-613-3746', 2, 23, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(10, 2, 'Carissa', 'Wiegand', 'kieran.heller@example.net', '(531) 350-3380', '1-854-445-7794', 3, 5, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(11, 2, 'Emil', 'Ullrich', 'maximo.funk@example.net', '(469) 405-4110', '309.943.0947', 3, 3, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(12, 2, 'Aliza', 'King', 'melissa23@example.org', '+1-380-498-9868', '1-870-786-1886', 8, 6, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(13, 3, 'Silas', 'Kohler', 'hcarroll@example.net', '+1 (478) 989-9195', '1-215-313-5829', 7, 18, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(14, 4, 'Colin', 'Sipes', 'willms.sofia@example.net', '803.873.9676', '732.687.9061', 8, 2, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(15, 4, 'Stanford', 'Emard', 'everett28@example.net', '+1-678-727-1023', '(864) 286-9193', 12, 1, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(16, 1, 'Treva', 'Hackett', 'elnora.lubowitz@example.org', '(919) 324-1041', '463-616-1080', 2, 9, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(17, 3, 'Earl', 'Cassin', 'frederik75@example.net', '+17577969300', '1-785-685-1814', 8, 12, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(18, 4, 'Diana', 'Boyle', 'mollie.zemlak@example.org', '+1-507-365-0423', '+1-865-645-7170', 6, 12, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(19, 2, 'Roscoe', 'Jaskolski', 'manuela.lebsack@example.org', '+1 (984) 732-5441', '(202) 306-9651', 12, 4, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(20, 5, 'Lola', 'Schneider', 'chauncey44@example.com', '+1-520-320-2346', '629.369.6562', 10, 6, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(21, 3, 'Ellen', 'Kassulke', 'bwhite@example.org', '407-944-0690', '(734) 849-7152', 2, 26, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(22, 5, 'Ebba', 'Homenick', 'howell.katheryn@example.org', '872-739-3407', '1-561-299-6951', 6, 2, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(23, 2, 'Dedrick', 'Zemlak', 'fkuvalis@example.net', '+18509565878', '+1.628.353.3045', 1, 21, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(24, 1, 'Dawson', 'Will', 'robin97@example.com', '914-520-6361', '+1-601-576-6017', 10, 10, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(25, 2, 'Leila', 'Graham', 'idell09@example.com', '+19523469404', '725.283.0808', 5, 25, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(26, 5, 'Brandt', 'Kuhic', 'donavon69@example.net', '+19362639884', '+1 (618) 603-2425', 6, 18, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(27, 2, 'Tatum', 'Jaskolski', 'jean20@example.com', '+13647690611', '+1-510-917-2214', 9, 24, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(28, 3, 'Eloy', 'Kunze', 'vincent.marquardt@example.org', '818.565.2089', '+1 (678) 462-8206', 6, 15, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(29, 1, 'Dolly', 'Carter', 'sharber@example.org', '1-231-653-7585', '+1.585.481.8091', 1, 23, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(30, 2, 'Travis', 'Lind', 'madonna.becker@example.com', '630.260.0898', '573-617-9724', 8, 12, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(31, 5, 'Florian', 'Welch', 'charles.cummings@example.com', '929.641.0991', '1-530-428-3142', 8, 13, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(32, 5, 'Dana', 'Hegmann', 'leonor.rau@example.com', '1-818-460-7276', '+1.321.831.2605', 11, 13, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(33, 5, 'Kenny', 'Bauch', 'mhammes@example.org', '605.473.6934', '1-681-906-8950', 3, 8, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(34, 2, 'Laisha', 'Haley', 'fgaylord@example.com', '+1.817.928.9440', '+1-689-276-5110', 11, 7, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(35, 4, 'Flossie', 'Abernathy', 'clarabelle.vonrueden@example.net', '(623) 788-6008', '1-860-200-1672', 12, 19, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(36, 3, 'Judah', 'Jerde', 'augusta.yost@example.com', '+1-629-960-2143', '+1-712-827-5877', 3, 13, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(37, 4, 'Stewart', 'Kunde', 'keaton21@example.com', '+1-312-463-0313', '1-626-826-0555', 9, 17, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(38, 5, 'Quentin', 'Wunsch', 'precious.larson@example.com', '435.939.1799', '425.450.8899', 2, 10, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(39, 1, 'Brett', 'Hayes', 'gerhard63@example.com', '+1.973.877.3654', '+1.801.741.7923', 11, 25, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(40, 2, 'Alison', 'Gulgowski', 'adolph50@example.com', '661.781.7210', '+1.781.864.1414', 1, 24, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(41, 3, 'Ben', 'Nitzsche', 'tyrese01@example.com', '814.676.2887', '(669) 871-7167', 12, 10, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(42, 2, 'Modesto', 'Rowe', 'abner25@example.com', '+1.949.772.1681', '1-912-701-8166', 8, 22, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(43, 3, 'Jakayla', 'Hauck', 'fadel.johnnie@example.org', '1-267-862-7566', '605-706-0979', 6, 31, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(44, 3, 'Mariano', 'Keebler', 'hgoldner@example.com', '+1.404.305.6345', '+1-980-700-9372', 8, 22, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(45, 3, 'Bradly', 'Wiegand', 'lzulauf@example.net', '(240) 512-3177', '+1 (509) 508-8472', 6, 30, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(46, 3, 'Mauricio', 'Goyette', 'alfredo72@example.org', '346-336-5943', '(669) 766-1338', 12, 3, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(47, 5, 'Clarissa', 'Kunde', 'virginie.hartmann@example.net', '+15513155233', '1-312-320-9449', 5, 20, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(48, 3, 'Adrien', 'Hauck', 'ypfeffer@example.com', '1-757-676-9059', '+1-754-767-8193', 3, 19, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(49, 2, 'Beverly', 'Ondricka', 'kub.cleta@example.com', '+1-610-973-9952', '+15317770445', 4, 5, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(50, 5, 'Hermina', 'Spinka', 'norval.willms@example.net', '+1-364-725-9084', '743.806.0282', 6, 23, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(51, 4, 'Aurelie', 'Erdman', 'lucienne.spinka@example.com', '+1.415.775.2527', '+1 (575) 571-1876', 12, 4, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(52, 2, 'Madonna', 'Harris', 'rashawn.gerhold@example.org', '734.964.1604', '650-657-4489', 9, 20, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(53, 3, 'Mavis', 'Metz', 'florian44@example.net', '351.385.5611', '(678) 881-9600', 6, 18, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(54, 3, 'Niko', 'Fahey', 'kendra44@example.org', '+1.859.608.5510', '417-576-4339', 1, 15, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(55, 4, 'Natalie', 'Heidenreich', 'von.general@example.net', '1-484-550-5392', '+1-551-455-6799', 10, 2, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(56, 2, 'Jalyn', 'Bosco', 'immanuel66@example.com', '(423) 528-3472', '+1-405-471-4377', 10, 4, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(57, 4, 'Nickolas', 'Denesik', 'lkirlin@example.org', '+1-828-672-1921', '1-435-848-3750', 12, 30, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(58, 3, 'Jeromy', 'Bashirian', 'jrempel@example.com', '872.595.9251', '947.544.4231', 12, 31, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(59, 2, 'Jeremy', 'Baumbach', 'qweber@example.org', '+1.986.282.0524', '+1 (540) 247-9383', 9, 3, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(60, 3, 'Tobin', 'Kassulke', 'jenkins.michale@example.org', '+1 (620) 310-9676', '+17046365108', 9, 7, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(61, 3, 'Effie', 'Zulauf', 'omer15@example.com', '+12405947488', '1-270-371-5008', 7, 28, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(62, 5, 'Santina', 'Bailey', 'roselyn54@example.net', '+1-405-453-7838', '+13099624048', 11, 31, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(63, 4, 'Annamae', 'Bartell', 'bettie.bauch@example.com', '413-477-0744', '801.287.3745', 12, 16, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(64, 2, 'Greg', 'Heidenreich', 'christiana.walsh@example.org', '484-362-9710', '1-512-836-3133', 12, 11, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(65, 1, 'Candido', 'Hansen', 'moore.cooper@example.org', '+1.781.497.3459', '+1.281.425.0674', 3, 3, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(66, 5, 'Meaghan', 'Hyatt', 'dhackett@example.com', '+1-419-791-2221', '1-240-832-6133', 2, 1, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(67, 3, 'Tevin', 'Gaylord', 'leif.smith@example.net', '1-612-870-4923', '573-955-6365', 6, 31, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(68, 1, 'Morris', 'Denesik', 'zemlak.davon@example.org', '+1-502-266-9211', '+1-318-724-6620', 2, 30, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(69, 4, 'Joaquin', 'Cruickshank', 'foster.abernathy@example.org', '+14242473731', '+1.219.744.7069', 1, 15, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(70, 4, 'Mara', 'Monahan', 'czemlak@example.org', '1-231-826-8955', '+1.331.331.4039', 10, 30, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(71, 1, 'Toni', 'Cummerata', 'kgoodwin@example.org', '1-234-404-5258', '925-335-8649', 12, 30, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(72, 1, 'Hellen', 'Wilderman', 'faye.kassulke@example.org', '+1-623-290-6094', '+1-385-457-3182', 6, 12, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(73, 4, 'Liana', 'Keebler', 'dach.valentina@example.org', '(930) 827-4626', '662-656-4092', 7, 20, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(74, 4, 'Robyn', 'Koelpin', 'jerde.quinn@example.org', '1-386-417-9826', '725.894.0281', 5, 4, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(75, 5, 'Harry', 'Spinka', 'cristobal.walker@example.com', '+1.878.452.7114', '+1-234-552-7693', 10, 22, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(76, 4, 'Caterina', 'Welch', 'mdaniel@example.net', '+1.678.377.9270', '1-580-361-9743', 1, 27, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(77, 2, 'Nicolette', 'Schulist', 'raoul45@example.org', '217-741-2795', '(276) 877-8588', 4, 12, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(78, 5, 'Kayleigh', 'Lynch', 'dale.stark@example.org', '+17479712668', '+1.775.431.6711', 2, 31, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(79, 2, 'Antwon', 'Murphy', 'awolff@example.net', '+1.785.627.3883', '(626) 931-8407', 3, 14, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(80, 2, 'Golden', 'Walsh', 'reynold.murazik@example.net', '702-481-4060', '+15404036910', 3, 15, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(81, 3, 'Steve', 'Hintz', 'annie.kuhlman@example.net', '1-205-349-8308', '706-662-3109', 1, 28, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(82, 1, 'Amanda', 'Wiegand', 'nella37@example.net', '351.863.5561', '425-420-3862', 5, 17, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(83, 3, 'Sophia', 'Kuhlman', 'wilton.jakubowski@example.net', '636.506.1697', '+1 (475) 633-2578', 1, 4, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(84, 2, 'Tamara', 'Klocko', 'xconnelly@example.com', '(240) 321-5105', '+1 (716) 949-5359', 5, 20, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(85, 3, 'Mozell', 'Bogisich', 'amir67@example.net', '1-743-637-0301', '1-424-275-4445', 12, 19, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(86, 3, 'Bret', 'Thompson', 'rolfson.mollie@example.com', '+1-484-401-3188', '+1-862-899-2176', 9, 21, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(87, 3, 'Carlotta', 'Mayer', 'kohler.queenie@example.com', '+1 (551) 603-3736', '1-828-986-9794', 12, 16, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(88, 3, 'Lessie', 'Keeling', 'ccruickshank@example.net', '240.706.8221', '1-479-248-7916', 10, 8, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(89, 4, 'Randy', 'Morissette', 'clementina.stamm@example.com', '1-803-457-4445', '912-563-7076', 1, 19, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(90, 2, 'Monty', 'Krajcik', 'shaun68@example.org', '+1-765-212-2409', '(407) 990-8650', 4, 28, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(91, 3, 'Letitia', 'Mayer', 'ofelia67@example.net', '551.805.2830', '971-604-8808', 1, 7, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(92, 2, 'Amparo', 'Powlowski', 'fcummings@example.org', '272-593-9598', '+1-956-671-4960', 6, 17, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(93, 3, 'Jerrold', 'Waters', 'bradtke.russel@example.net', '(518) 629-1848', '801-781-9756', 10, 15, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(94, 5, 'Joshuah', 'Hayes', 'yhand@example.net', '+14324377965', '1-609-739-0798', 10, 10, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(95, 3, 'Violette', 'Jacobi', 'considine.alessandra@example.com', '+1-765-827-0634', '769.218.7018', 5, 10, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(96, 2, 'Devon', 'Rau', 'michele48@example.com', '+1-878-962-9385', '831-602-7922', 2, 27, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(97, 4, 'Benton', 'Abernathy', 'ines.paucek@example.com', '1-775-622-9311', '1-443-504-3236', 2, 1, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(98, 4, 'Jude', 'Larkin', 'nreichert@example.org', '218-769-6624', '(567) 275-7401', 6, 7, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(99, 4, 'Vita', 'Legros', 'barton.angelina@example.net', '(332) 952-1604', '628.553.1729', 11, 10, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(100, 2, 'Maria', 'VonRueden', 'marques33@example.com', '(331) 514-1838', '818.950.3374', 11, 15, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 2),
(101, 1, 'Watson', 'Walter', 'dvolkman@example.com', '+1 (312) 725-1409', '1-612-894-5165', 12, 26, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 3),
(102, 3, 'Broderick', 'Huels', 'gulgowski.evie@example.net', '+1-434-710-8303', '606-239-5710', 9, 27, NULL, '2023-06-29 04:30:05', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 0, 0, '2023-06-29 04:30:05', '2023-06-29 04:30:05', NULL, 1),
(103, 3, 'Rigoberto', 'Lubowitz', 'medhurst.jaquelin@example.net', '(813) 554-7879', '1-505-767-7044', NULL, NULL, '2001-09-22', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 3),
(104, 5, 'Dina', 'Gulgowski', 'kling.glennie@example.com', '+1-534-339-5235', '+1 (940) 988-4627', NULL, NULL, '1993-08-10', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 2),
(105, 2, 'Aglae', 'Romaguera', 'ryan.albertha@example.net', '(361) 634-0429', '1-225-216-6837', NULL, NULL, '2021-01-11', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 3),
(106, 4, 'Simeon', 'Nicolas', 'btowne@example.net', '+1-425-921-0026', '+12348273423', NULL, NULL, '1989-02-17', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 3),
(107, 5, 'Mortimer', 'Stoltenberg', 'oprohaska@example.net', '(248) 935-2563', '+1.351.268.5306', NULL, NULL, '2005-01-13', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 2),
(108, 1, 'Walker', 'Funk', 'rhoppe@example.com', '505.916.4164', '380-792-6975', NULL, NULL, '1982-05-12', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 1),
(109, 4, 'Bart', 'Brakus', 'goyette.karine@example.org', '1-223-315-9774', '1-225-828-8820', NULL, NULL, '1991-01-15', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 2),
(110, 3, 'Evelyn', 'Hane', 'assunta.schumm@example.org', '+1-843-342-5486', '+12608450137', NULL, NULL, '2010-09-13', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 2),
(111, 1, 'Mac', 'Erdman', 'hershel.schultz@example.com', '(385) 541-9132', '865-562-6074', NULL, NULL, '1979-06-20', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 3),
(112, 4, 'Leta', 'Mueller', 'dell36@example.org', '+1-217-397-5974', '575.318.9256', NULL, NULL, '2007-01-05', '2023-06-29 04:30:06', '$2y$10$5x9j4NAs//ge68R9lkUL1.2N6GBu9eThkwD.OMFWimC.Gb9su8JhG', NULL, 1, 0, NULL, NULL, NULL, 3);

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD CONSTRAINT `billing_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `newsletter_info_user`
--
ALTER TABLE `newsletter_info_user`
  ADD CONSTRAINT `newsletter_info_user_newsletter_info_id_foreign` FOREIGN KEY (`newsletter_info_id`) REFERENCES `newsletter_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `newsletter_info_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `preference_user`
--
ALTER TABLE `preference_user`
  ADD CONSTRAINT `preference_user_preference_id_foreign` FOREIGN KEY (`preference_id`) REFERENCES `preferences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `preference_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `product_propertylists`
--
ALTER TABLE `product_propertylists`
  ADD CONSTRAINT `product_propertylists_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_propertylists_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_propertylists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_propertylists_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `product_subcategories`
--
ALTER TABLE `product_subcategories`
  ADD CONSTRAINT `product_subcategories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD CONSTRAINT `shipping_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subcategory_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `subcategory` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_month_id_foreign` FOREIGN KEY (`month_id`) REFERENCES `months` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_read_or_shop_id_foreign` FOREIGN KEY (`read_or_shop_id`) REFERENCES `read_or_shops` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_salutation_id_foreign` FOREIGN KEY (`salutation_id`) REFERENCES `salutations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
