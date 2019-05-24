-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2019 pada 11.44
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokoonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_desc` text COLLATE utf8mb4_unicode_ci,
  `image_src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `image_title`, `image_desc`, `image_src`, `created_at`, `updated_at`) VALUES
(1, 'Skin Premium PUBG', '<h2 style=\"text-align: justify;\">LOREM IPSUM</h2><p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: justify; padding-left: 40px;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style=\"text-align: justify; padding-left: 80px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'girl_art_anime_wind_balcony_100280_1920x1080_20190414_090816.jpg', '2019-04-14 14:08:16', '2019-04-14 14:08:16'),
(2, 'Skin Premium PUBG', '<h2 style=\"text-align: justify;\">LOREM IPSUM</h2><p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: justify; padding-left: 40px;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style=\"text-align: justify; padding-left: 80px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'hatsune_miku_vocaloid_girl_easel_paint_painter_102869_1920x1080_20190414_090816.jpg', '2019-04-14 14:08:16', '2019-04-14 14:08:16'),
(3, 'Skin Premium PUBG', '<h2 style=\"text-align: justify;\">LOREM IPSUM</h2><p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: justify; padding-left: 40px;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style=\"text-align: justify; padding-left: 80px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'kono_oozora_ni_tsubasa_wo_hirogete_habane_kotori_girl_headphones_101131_1920x1080_20190414_090816.jpg', '2019-04-14 14:08:16', '2019-04-14 14:08:16'),
(4, 'Wallpaper', '<h2 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 2rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; background-color: #ffffff; text-align: justify;\">LOREM IPSUM</h2><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify; padding-left: 40px;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify; padding-left: 80px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'sad_20190419_061340.jpg', '2019-04-18 23:13:40', '2019-04-18 23:13:40'),
(5, 'Wallpaper', '<h2 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 2rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; background-color: #ffffff; text-align: justify;\">LOREM IPSUM</h2><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify; padding-left: 40px;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify; padding-left: 80px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'shingeki_no_kyojin_mikasa_ackerman_anime_light_88126_1920x1080_20190419_061340.jpg', '2019-04-18 23:13:40', '2019-04-18 23:13:40'),
(6, 'Wallpaper', '<h2 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 2rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; background-color: #ffffff; text-align: justify;\">LOREM IPSUM</h2><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify; padding-left: 40px;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify; padding-left: 80px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'tkg_20190419_061340.jpg', '2019-04-18 23:13:40', '2019-04-18 23:13:40'),
(10, 'Action Figure', '<p>Merupakan <strong>AF</strong> yang <em><strong>unique dan Lucu</strong></em> sehingga mempunyai banyak penggemar dan peminatnya</p>', '318310_20190426_110053.jpg', '2019-04-26 16:00:53', '2019-04-26 16:00:53'),
(11, 'Action Figure', '<p>Merupakan <strong>AF</strong> yang <em><strong>unique dan Lucu</strong></em> sehingga mempunyai banyak penggemar dan peminatnya</p>', '402897_20190426_110053.jpg', '2019-04-26 16:00:53', '2019-04-26 16:00:53'),
(12, 'Action Figure', '<p>Merupakan <strong>AF</strong> yang <em><strong>unique dan Lucu</strong></em> sehingga mempunyai banyak penggemar dan peminatnya</p>', '606275_20190426_110054.jpg', '2019-04-26 16:00:54', '2019-04-26 16:00:54'),
(13, 'Action Figure', '<p>hhhhhhhh</p>', '318310_20190426_110535.jpg', '2019-04-26 16:05:35', '2019-04-26 16:05:35'),
(14, 'Action Figure', '<p>hhhhhhhh</p>', '402897_20190426_110535.jpg', '2019-04-26 16:05:35', '2019-04-26 16:05:35'),
(15, 'Action Figure', '<p>hhhhhhhh</p>', '606275_20190426_110535.jpg', '2019-04-26 16:05:35', '2019-04-26 16:05:35'),
(16, 'Yugi Oh', '<p>hahahahahah</p>', '85326_20190426_110651.jpg', '2019-04-26 16:06:51', '2019-04-26 16:06:51'),
(17, 'Yugi Oh', '<p>hahahahahah</p>', '613696_20190426_110651.png', '2019-04-26 16:06:51', '2019-04-26 16:06:51'),
(18, 'Yugi Oh', '<p>hahahahahah</p>', '950981_20190426_110651.png', '2019-04-26 16:06:51', '2019-04-26 16:06:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_16_064251_create_products_table', 1),
(4, '2019_03_16_064456_create_carts_table', 1),
(5, '2019_03_16_064521_create_cart_items_table', 1),
(6, '2019_03_16_064549_create_orders_table', 1),
(7, '2019_03_30_035843_create_images_table', 1),
(8, '2019_04_14_210144_create_product_images_table', 1),
(9, '2019_04_25_122145_create_orders_table', 2),
(10, '2019_04_25_122627_create_order_items_table', 3),
(11, '2019_04_27_065125_create_product_reviews_table', 4),
(12, '2019_04_29_054310_create_product_reviews_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total_price`, `shipping_address`, `zip_code`, `created_at`, `updated_at`) VALUES
(5, 2, 'PENDING', '50000', 'Jakarta', 9990, '2019-04-26 19:26:10', '2019-04-26 19:26:10'),
(6, 2, 'PENDING', '50000', 'BAtu Jajar', 19999, '2019-04-26 22:41:22', '2019-04-26 22:41:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 50000, '2019-04-26 03:29:04', '2019-04-26 03:29:04'),
(2, 2, 2, 1, 50000, '2019-04-26 04:02:17', '2019-04-26 04:02:17'),
(3, 3, 3, 5, 10000, '2019-04-26 05:54:18', '2019-04-26 05:54:18'),
(4, 4, 5, 1, 40000, '2019-04-26 19:23:11', '2019-04-26 19:23:11'),
(5, 5, 6, 1, 50000, '2019-04-26 19:26:10', '2019-04-26 19:26:10'),
(6, 6, 6, 1, 50000, '2019-04-26 22:41:22', '2019-04-26 22:41:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `description`, `price`, `image_url`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Skin Premium PUBG', 'Adalah Blalalal', '100000', NULL, NULL, '2019-04-14 14:08:16', '2019-04-14 14:08:16'),
(2, 1, 'Wallpaper', 'Adaalah blala', '50000', NULL, NULL, '2019-04-18 23:13:40', '2019-04-18 23:13:40'),
(5, 2, 'Action Figure', '<p><strong>Merupakan tokoh yang unik</strong> dan bebas. Ia menginnginkan menjadi raja bajak laut agar ia bisa hidup bebas tanpa ada tekanan dari orang lain.</p>', '40000', NULL, NULL, '2019-04-26 16:05:35', '2019-04-26 23:02:56'),
(6, 2, 'Yugi Oh', '<p>hahahahahah</p>', '50000', NULL, NULL, '2019-04-26 16:06:51', '2019-04-26 16:06:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(13, 5, 13, NULL, NULL),
(14, 5, 14, NULL, NULL),
(15, 5, 15, NULL, NULL),
(16, 6, 16, NULL, NULL),
(17, 6, 17, NULL, NULL),
(18, 6, 18, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `description`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '<p>Bagus</p>', 5, '2019-04-28 23:07:15', '2019-04-28 23:07:15'),
(2, 2, 5, '<p>mantap</p>', 1, '2019-04-28 23:13:03', '2019-04-28 23:13:03'),
(3, 1, 5, '<p><em>Nice</em></p>', 5, '2019-04-29 06:46:45', '2019-04-29 06:46:45'),
(4, 1, 1, '<p><strong>cute <em>PISAN</em></strong></p>', 2, '2019-04-29 09:08:42', '2019-04-29 09:08:42'),
(5, 2, 1, '<p><em><strong>Edan gelis uy</strong></em></p>', 3, '2019-04-29 09:13:42', '2019-04-29 09:13:42'),
(6, 2, 6, '<p><strong>Kasepna atuuh</strong></p>', 5, '2019-04-29 09:17:44', '2019-04-29 09:17:44'),
(7, 2, 1, '<p>cek</p>', 1, '2019-04-29 09:18:56', '2019-04-29 09:18:56'),
(8, 2, 6, '<p><em>coba</em></p>', 4, '2019-04-29 09:23:10', '2019-04-29 09:23:10'),
(9, 2, 6, '<p><strong>Hai</strong></p>', 4, '2019-04-29 09:26:11', '2019-04-29 09:26:11'),
(10, 2, 6, '<p><strong>Yo</strong></p>', 5, '2019-04-29 09:26:48', '2019-04-29 09:26:48'),
(11, 2, 6, '<p><strong>widh</strong></p>', 2, '2019-04-29 09:27:32', '2019-04-29 09:27:32'),
(12, 2, 6, '<p>ey</p>', 1, '2019-04-29 09:31:45', '2019-04-29 09:31:45'),
(13, 2, 6, '<p>ey</p>', 1, '2019-04-29 09:32:30', '2019-04-29 09:32:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Miraz Dwi Noviansyah', 'connie.springen123@gmail.com', '2019-04-14 14:04:46', '$2y$10$k6jbRprZfBh/HFLIt3.G1uWJMV4rEcZs0crGugdrCEAghGvxEju/q', NULL, '2019-04-14 14:04:14', '2019-04-14 14:04:46'),
(2, 'Ismail Jamil', 'ismailjamiljauhari22@gmail.com', '2019-04-26 05:49:33', '$2y$10$nDkWVon3GbIiG83vl6lBz.m7bsZ/g9.OmscUf1ni/0ctspJPHVwOu', NULL, '2019-04-26 05:49:10', '2019-04-26 05:49:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`),
  ADD KEY `product_images_image_id_foreign` (`image_id`);

--
-- Indeks untuk tabel `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
