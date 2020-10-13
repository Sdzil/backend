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

-- 正在傾印表格  backend_db.items 的資料：~19 rows (近似值)
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `itemName`, `price`, `image_url`, `content`, `created_at`, `updated_at`, `type_id`) VALUES
	(1, 'John', 101, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice pric', '2019-10-11 21:39:09', '2019-10-11 21:39:09', '1'),
	(2, 'Peter', 102, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-11 21:39:09', '2019-10-11 21:39:09', '2'),
	(3, 'Larry', 1234, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-11 21:39:09', '2019-10-11 21:39:09', '4'),
	(4, 'Tabitha', 1513, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale, if you can not give me a nice price', '2019-10-11 21:39:09', '2019-10-11 21:39:09', '3'),
	(5, 'Susan', 23151, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 00:30:00', '2019-10-14 00:30:00', '5'),
	(6, 'William', 73453, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 00:30:00', '2019-10-14 00:30:00', '7'),
	(7, 'Bessie', 23462, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 00:30:00', '2019-10-14 00:30:00', '5'),
	(8, 'Eva', 235263, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 00:30:00', '2019-10-14 00:30:00', '4'),
	(9, 'Dorothy', 215235, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 03:30:00', '2019-10-14 03:30:00', '1'),
	(10, 'Nannie', 53636, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 03:30:00', '2019-10-14 03:30:00', '2'),
	(11, 'Gerald', 235634, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 04:30:00', '2019-10-14 04:30:00', '3'),
	(12, 'Judith', 12256, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 04:30:00', '2019-10-14 04:30:00', '5'),
	(13, 'Betty', 8354551, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 13:30:00', '2019-10-14 13:30:00', '6'),
	(14, 'Delores', 237474, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 13:30:00', '2019-10-14 13:30:00', '6'),
	(15, 'Gloria', 856342, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 06:30:00', '2019-10-14 06:30:00', '7'),
	(16, 'Bobbie', 12562346, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 06:30:00', '2019-10-14 06:30:00', '5'),
	(17, 'Paul', 63647, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 13:30:00', '2019-10-14 13:30:00', '1'),
	(18, 'Ryan', 15377, 'https://images.chinatimes.com/newsphoto/2019-03-08/900/20190308001822.jpg', 'not for sale if you can not give me a nice price', '2019-10-14 13:30:00', '2019-10-14 13:30:00', '2'),
	(19, '肉肉', 500, '/upload/items/16026124961d7f7abc18fcb43975065399b0d1e48e.png', '5566', '2020-10-13 18:08:16', '2020-10-13 18:08:16', '1');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

-- 正在傾印表格  backend_db.item_types 的資料：~7 rows (近似值)
/*!40000 ALTER TABLE `item_types` DISABLE KEYS */;
INSERT INTO `item_types` (`id`, `type_name`, `sort`, `created_at`, `updated_at`) VALUES
	(1, '短版上衣', '7', NULL, '2020-10-13 18:00:00'),
	(2, '褲子', '6', NULL, NULL),
	(3, '襪子', '5', NULL, NULL),
	(4, '配件', '4', NULL, NULL),
	(5, '蛋白補給', '3', NULL, NULL),
	(6, '專業營養補給', '2', NULL, NULL),
	(7, '時尚運動', '1', NULL, NULL);
/*!40000 ALTER TABLE `item_types` ENABLE KEYS */;

-- 正在傾印表格  backend_db.news 的資料：~3 rows (近似值)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `created_at`, `updated_at`, `title`, `sub_title`, `content`, `image_url`) VALUES
	(1, NULL, NULL, '5566', '5566183', '556612348', '95641283'),
	(2, '2020-10-13 17:07:02', '2020-10-13 17:07:02', '112233', '5566183', '3345678', '/upload/news/1602608822b3e3e393c77e35a4a3f3cbd1e429b5dc.jpg'),
	(3, '2020-10-13 17:09:44', '2020-10-13 17:09:44', 'title55669988', 'Sub_title5566', '66554123', '/upload/news/1602608984084b6fbb10729ed4da8c3d3f5a3ae7c9.jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- 正在傾印表格  backend_db.users 的資料：~10 rows (近似值)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
	(1, 'admin', 'admin@sunyi', NULL, '$2y$10$INLTLHAmiOWH3hiEWvC19OWf0Zhf9A.wiqnK/eROvMSCfw4nrgItS', 'vBW7JTwTmCRzOnVUzbPPsMzCKgF5tLh0SW6qc3qaeMhM0WL46K0gy6kFTilT', '2020-10-12 13:55:19', '2020-10-12 13:55:19', 'super_admin'),
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
