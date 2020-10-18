-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        10.4.14-MariaDB - mariadb.org binary distribution
-- 伺服器作業系統:                      Win64
-- HeidiSQL 版本:                  11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 傾印 backend_db 的資料庫結構
CREATE DATABASE IF NOT EXISTS `backend_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `backend_db`;

-- 傾印  資料表 backend_db.administrators 結構
CREATE TABLE IF NOT EXISTS `administrators` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.administrators 的資料：~0 rows (近似值)
/*!40000 ALTER TABLE `administrators` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrators` ENABLE KEYS */;

-- 傾印  資料表 backend_db.attractions 結構
CREATE TABLE IF NOT EXISTS `attractions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.attractions 的資料：~0 rows (近似值)
/*!40000 ALTER TABLE `attractions` DISABLE KEYS */;
/*!40000 ALTER TABLE `attractions` ENABLE KEYS */;

-- 傾印  資料表 backend_db.contacts 結構
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.contacts 的資料：~21 rows (近似值)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT IGNORE INTO `contacts` (`id`, `name`, `phoneNumber`, `address`, `email`, `subject`, `content`, `created_at`, `updated_at`) VALUES
	(1, 'Nerd', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(2, 'Nerd1', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(3, 'Nerd2', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(4, 'Nerd3', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(5, 'Nerd4', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(6, 'Nerd5', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(7, 'Nerd6', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(8, 'Nerd7', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(9, 'Nerd8', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(10, 'Nerd9', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(11, 'Nerd10', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(12, 'Nerd11', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(13, 'Nerd12', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(14, 'Nerd13', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(15, 'Nerd14', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(16, 'Nerd15', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(17, 'Nerd16', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(18, 'Nerd17', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(19, 'Nerd18', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(20, 'Nerd19', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL),
	(21, '5566', '112244', '555424', 'admin@sunyi', 'cargo', '3147505566', '2020-10-14 16:23:21', '2020-10-14 16:23:21');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- 傾印  資料表 backend_db.failed_jobs 結構
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.failed_jobs 的資料：~0 rows (近似值)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- 傾印  資料表 backend_db.items 結構
CREATE TABLE IF NOT EXISTS `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `itemName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.items 的資料：~24 rows (近似值)
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT IGNORE INTO `items` (`id`, `itemName`, `price`, `image_url`, `content`, `sort`, `created_at`, `updated_at`, `type_id`) VALUES
	(1, 'John', 101, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice pric', '0', '2019-10-11 21:39:09', '2019-10-11 21:39:09', '1'),
	(2, 'Peter', 102, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-11 21:39:09', '2019-10-11 21:39:09', '2'),
	(4, 'Tabitha', 1513, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale, if you can not give me a nice price', '0', '2019-10-11 21:39:09', '2019-10-11 21:39:09', '3'),
	(5, 'Susan', 23151, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 00:30:00', '2019-10-14 00:30:00', '5'),
	(6, 'William', 73453, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 00:30:00', '2019-10-14 00:30:00', '7'),
	(7, 'Bessie', 23462, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 00:30:00', '2019-10-14 00:30:00', '5'),
	(8, 'Eva', 235263, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 00:30:00', '2019-10-14 00:30:00', '4'),
	(9, 'Dorothy', 215235, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 03:30:00', '2019-10-14 03:30:00', '1'),
	(10, 'Nannie', 53636, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 03:30:00', '2019-10-14 03:30:00', '2'),
	(11, 'Gerald', 235634, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 04:30:00', '2019-10-14 04:30:00', '3'),
	(12, 'Judith', 12256, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 04:30:00', '2019-10-14 04:30:00', '5'),
	(13, 'Betty', 8354551, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 13:30:00', '2019-10-14 13:30:00', '6'),
	(14, 'Delores', 237474, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 13:30:00', '2019-10-14 13:30:00', '6'),
	(15, 'Gloria', 856342, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 06:30:00', '2019-10-14 06:30:00', '7'),
	(16, 'Bobbie', 12562346, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 06:30:00', '2019-10-14 06:30:00', '5'),
	(17, 'Paul', 63647, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 13:30:00', '2019-10-14 13:30:00', '1'),
	(18, 'Ryan', 15377, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '0', '2019-10-14 13:30:00', '2019-10-14 13:30:00', '2'),
	(19, '肉肉', 500, '/upload/items/16026124961d7f7abc18fcb43975065399b0d1e48e.png', '5566', '7', '2020-10-13 18:08:16', '2020-10-13 18:08:16', '1'),
	(20, '肉肉5566', 1000, '/upload/items/16027855233636638817772e42b59d74cff571fbb3.jpg', '<p>112233</p>', '8', '2020-10-15 18:12:03', '2020-10-15 18:12:03', '5'),
	(21, '肉肉5566', 1000, '/upload/items/16027855589872ed9fc22fc182d371c3e9ed316094.jpg', '<p>112233</p>', '8', '2020-10-15 18:12:38', '2020-10-15 18:12:38', '5'),
	(22, '肉肉5566', 1000, '/upload/items/16027856697f1de29e6da19d22b51c68001e7e0e54.png', '<p>112233</p>', '8', '2020-10-15 18:14:29', '2020-10-15 18:14:29', '5'),
	(23, '肉肉5566', 1000, '/upload/items/1602785764202cb962ac59075b964b07152d234b70.png', '<p>112233</p>', '8', '2020-10-15 18:16:04', '2020-10-15 18:16:04', '5'),
	(24, '滿滿的肉肉', 1500, '/upload/items/1602913468045117b0e0a11a242b9765e79cbf113f.png', '<p>總之是測試的肉肉們</p>', '9', '2020-10-16 06:01:38', '2020-10-17 05:44:28', '6'),
	(26, '肉肉NikuNiku', 2000, '/upload/items/1602909839eb160de1de89d9058fcb0b968dbbbd68.jpg', '<p><img src="/upload/img/1602909729cfecdb276f634854f3ef915e2e980c31.png" style="width: 25%;"><img src="https://img.zi.org.tw/sunnylife/fe3914bf0bbd03ff794327d99d542068.jpg" style="width: 25%;"><br></p>', '0', '2020-10-17 04:43:59', '2020-10-17 04:43:59', '5');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- 傾印  資料表 backend_db.item_types 結構
CREATE TABLE IF NOT EXISTS `item_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.item_types 的資料：~7 rows (近似值)
/*!40000 ALTER TABLE `item_types` DISABLE KEYS */;
INSERT IGNORE INTO `item_types` (`id`, `type_name`, `sort`, `created_at`, `updated_at`) VALUES
	(1, '短版上衣', '7', NULL, '2020-10-13 18:00:00'),
	(2, '褲子', '6', NULL, NULL),
	(3, '襪子', '5', NULL, NULL),
	(4, '配件', '4', NULL, NULL),
	(5, '蛋白補給', '3', NULL, NULL),
	(6, '專業營養補給', '2', NULL, NULL),
	(7, '時尚運動', '1', NULL, NULL);
/*!40000 ALTER TABLE `item_types` ENABLE KEYS */;

-- 傾印  資料表 backend_db.migrations 結構
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.migrations 的資料：~19 rows (近似值)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_09_28_083707_create_news_table', 1),
	(5, '2020_10_01_060243_create_attractions_table', 1),
	(6, '2020_10_02_172028_create_administrators_table', 1),
	(7, '2020_10_04_084246_create_sample_datas_table', 1),
	(8, '2020_10_08_081244_create_items_table', 1),
	(9, '2020_10_11_155148_create_item_types_table', 1),
	(10, '2020_10_12_132413_add_role_to_users_table', 1),
	(11, '2020_10_12_011821_add_type_id_to_items', 2),
	(12, '2020_10_13_161142_create_contacts_table', 3),
	(14, '2020_10_15_071058_create_product_imgs_table', 4),
	(16, '2020_10_16_060720_add_sort_to_items_table', 5),
	(17, '2020_10_17_110959_add_sort_to_news_table', 6),
	(18, '2020_10_17_111439_create_product_main_classes_table', 7),
	(19, '2020_10_17_111450_create_product_classes_table', 7),
	(20, '2020_10_17_111503_create_product_types_table', 7),
	(21, '2020_10_17_112512_create_products_table', 8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- 傾印  資料表 backend_db.news 結構
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.news 的資料：~3 rows (近似值)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT IGNORE INTO `news` (`id`, `created_at`, `updated_at`, `title`, `sub_title`, `content`, `sort`, `image_url`) VALUES
	(1, NULL, NULL, '5566', '5566183', '556612348', '0', '95641283'),
	(2, '2020-10-13 17:07:02', '2020-10-13 17:07:02', '112233', '5566183', '3345678', '2', '/upload/news/1602608822b3e3e393c77e35a4a3f3cbd1e429b5dc.jpg'),
	(3, '2020-10-13 17:09:44', '2020-10-13 17:09:44', 'title55669988', 'Sub_title5566', '66554123', '3', '/upload/news/1602608984084b6fbb10729ed4da8c3d3f5a3ae7c9.jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- 傾印  資料表 backend_db.password_resets 結構
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.password_resets 的資料：~0 rows (近似值)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- 傾印  資料表 backend_db.products 結構
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_types_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_product_types_id_foreign` (`product_types_id`) USING BTREE,
  CONSTRAINT `products_product_types_id_foreign` FOREIGN KEY (`product_types_id`) REFERENCES `product_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.products 的資料：~1 rows (近似值)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT IGNORE INTO `products` (`id`, `productName`, `price`, `content`, `sort`, `visible`, `product_types_id`, `created_at`, `updated_at`) VALUES
	(1, 'hello products', 100, '總之是第一筆資料', '99', 'true', 1, NULL, NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- 傾印  資料表 backend_db.product_classes 結構
CREATE TABLE IF NOT EXISTS `product_classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `className` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_main_class_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_classes_product_main_classes_id_foreign` (`product_main_class_id`) USING BTREE,
  CONSTRAINT `product_classes_product_main_class_id_foreign` FOREIGN KEY (`product_main_class_id`) REFERENCES `product_main_classes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.product_classes 的資料：~9 rows (近似值)
/*!40000 ALTER TABLE `product_classes` DISABLE KEYS */;
INSERT IGNORE INTO `product_classes` (`id`, `className`, `sort`, `product_main_class_id`, `created_at`, `updated_at`) VALUES
	(1, '上衣', '7', 1, NULL, '2020-10-18 05:04:32'),
	(2, '褲子', '6', 1, NULL, NULL),
	(3, '襪子', '5', 1, NULL, NULL),
	(4, '配件', '4', 1, NULL, NULL),
	(5, '蛋白補給', '3', 2, NULL, NULL),
	(6, '專業營養補給', '2', 2, NULL, NULL),
	(9, '想想還是不對  大概是褲子', '11', 1, '2020-10-18 05:10:19', '2020-10-18 05:10:19'),
	(10, '時尚運動', '1', 2, '2020-10-18 05:14:41', '2020-10-18 05:14:41'),
	(11, '可能是上面的衣服', '6', 2, '2020-10-18 06:14:37', '2020-10-18 06:14:37');
/*!40000 ALTER TABLE `product_classes` ENABLE KEYS */;

-- 傾印  資料表 backend_db.product_imgs 結構
CREATE TABLE IF NOT EXISTS `product_imgs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.product_imgs 的資料：~1 rows (近似值)
/*!40000 ALTER TABLE `product_imgs` DISABLE KEYS */;
INSERT IGNORE INTO `product_imgs` (`id`, `img_url`, `product_id`, `sort`, `created_at`, `updated_at`) VALUES
	(6, '/upload/product_imgs/1602909839cedebb6e872f539bef8c3f919874e9d7.png', '26', '0', '2020-10-17 04:43:59', '2020-10-17 04:43:59');
/*!40000 ALTER TABLE `product_imgs` ENABLE KEYS */;

-- 傾印  資料表 backend_db.product_main_classes 結構
CREATE TABLE IF NOT EXISTS `product_main_classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mainClassName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.product_main_classes 的資料：~2 rows (近似值)
/*!40000 ALTER TABLE `product_main_classes` DISABLE KEYS */;
INSERT IGNORE INTO `product_main_classes` (`id`, `mainClassName`, `sort`, `created_at`, `updated_at`) VALUES
	(1, '服飾', '2', NULL, NULL),
	(2, '運動保健', '1', NULL, NULL);
/*!40000 ALTER TABLE `product_main_classes` ENABLE KEYS */;

-- 傾印  資料表 backend_db.product_types 結構
CREATE TABLE IF NOT EXISTS `product_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `typeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_class_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_types_product_classes_id_foreign` (`product_class_id`) USING BTREE,
  CONSTRAINT `product_types_product_class_id_foreign` FOREIGN KEY (`product_class_id`) REFERENCES `product_classes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.product_types 的資料：~25 rows (近似值)
/*!40000 ALTER TABLE `product_types` DISABLE KEYS */;
INSERT IGNORE INTO `product_types` (`id`, `typeName`, `sort`, `product_class_id`, `created_at`, `updated_at`) VALUES
	(1, '背心', '25', 1, NULL, NULL),
	(2, '短袖', '24', 1, NULL, NULL),
	(3, '七分袖', '23', 1, NULL, NULL),
	(4, '長袖', '22', 1, NULL, NULL),
	(5, '外套', '21', 1, NULL, NULL),
	(6, '毛衣', '20', 1, NULL, NULL),
	(7, '短褲', '19', 2, NULL, NULL),
	(8, '長褲', '18', 2, NULL, NULL),
	(9, '緊身褲', '17', 2, NULL, NULL),
	(10, '牛仔褲', '16', 2, NULL, NULL),
	(11, '船型襪', '15', 3, NULL, NULL),
	(12, '童襪', '14', 3, NULL, NULL),
	(13, '其他襪型', '13', 3, NULL, NULL),
	(14, '帽子', '12', 4, NULL, NULL),
	(15, '墨鏡', '11', 4, NULL, NULL),
	(16, '背包', '10', 4, NULL, NULL),
	(17, '訓練鞋', '9', 4, NULL, NULL),
	(18, '毛巾', '8', 4, NULL, NULL),
	(19, '濃縮乳清蛋白', '7', 5, NULL, NULL),
	(20, '分離乳清蛋白', '6', 5, NULL, NULL),
	(21, '分離大豆蛋白', '5', 5, NULL, NULL),
	(22, '能量乳清蛋白', '4', 5, NULL, NULL),
	(23, '訓練補給', '3', 6, NULL, NULL),
	(24, '能量點心', '2', 6, NULL, NULL),
	(25, '運動水壺', '1', 10, NULL, NULL);
/*!40000 ALTER TABLE `product_types` ENABLE KEYS */;

-- 傾印  資料表 backend_db.sample_datas 結構
CREATE TABLE IF NOT EXISTS `sample_datas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.sample_datas 的資料：~0 rows (近似值)
/*!40000 ALTER TABLE `sample_datas` DISABLE KEYS */;
/*!40000 ALTER TABLE `sample_datas` ENABLE KEYS */;

-- 傾印  資料表 backend_db.users 結構
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  backend_db.users 的資料：~10 rows (近似值)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
	(1, 'admin', 'admin@sunyi', NULL, '$2y$10$INLTLHAmiOWH3hiEWvC19OWf0Zhf9A.wiqnK/eROvMSCfw4nrgItS', '1z0eg53DS8X4KTCb5VwGpxcrwNk2Wa03V7iP8J45Nv9LAdQRpbnfnjlpXIUA', '2020-10-12 13:55:19', '2020-10-12 13:55:19', 'super_admin'),
	(2, '5566183', '5566@somewhere.com', NULL, '$2y$10$/VH1QadbzuoM71nUPYY5R.eC4YME77EBw0CMjelucPkORpN1QNd7i', NULL, '2020-10-12 13:57:41', '2020-10-12 13:57:41', 'user'),
	(3, '5566', 'madaotaku0314@gmail.com', NULL, '$2y$10$9SJNNTuLWc1wIOY0KpbtDOQhusfsLwbws8D1d5Fueczm/PfRWrBzu', NULL, '2020-10-12 13:58:16', '2020-10-12 13:58:16', 'user'),
	(4, '112233', '112233@sunyi', NULL, '$2y$10$WirJplDXCumSzsKksa.q4utfsJtaNPisUDgcS4vHOS5X3ohx9W2ea', NULL, '2020-10-12 14:17:59', '2020-10-12 14:17:59', 'user'),
	(5, 'admin5566', 'tony_tony750@hotmail.com', NULL, '$2y$10$kGFgmNX7hcuDm9LR2GqfzOjR4y9KMvwcPRF5hvt/ssCwffk1s41Cu', NULL, '2020-10-12 14:18:29', '2020-10-12 14:18:29', 'user'),
	(6, '5566', '5566@5566', NULL, '$2y$10$qNrS2/Fn8z57qQRjzAgF1OlV1O1F/dEBX/RACp/LnqsnQr5ldocza', NULL, '2020-10-12 14:20:57', '2020-10-12 14:20:57', 'user'),
	(7, '112233', '112233@2233', NULL, '$2y$10$KOQ6Si/CFGZAbVzD0jk3IOW2Mz27kA4jNWiO2li/FWEPgkSrRbC56', NULL, '2020-10-12 14:39:17', '2020-10-12 14:39:17', 'user'),
	(8, '112233', '112233@22335566', NULL, '$2y$10$XAmS4eJlzvhHW2jpyC/xmOjAU64q1lX7ltzptWyrgmwBTHmxgd.BK', NULL, '2020-10-12 14:41:47', '2020-10-12 14:41:47', 'user'),
	(9, '564', '456@66', NULL, '$2y$10$.314JpKkdoh2zyrg53cxEeqg2hTtaiT/3Ywi/Wx.smLUeB4MwZ8RG', NULL, '2020-10-12 14:46:47', '2020-10-12 14:46:47', 'admin'),
	(10, '12345', '12345@54321', NULL, '$2y$10$qn6HPjs08lghxcqPydhkG.tcYIUQZo1RSZsQioA0tsiOEVNUx8iB6', NULL, '2020-10-13 18:23:50', '2020-10-13 18:23:50', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
