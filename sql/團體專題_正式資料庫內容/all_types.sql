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

-- 正在傾印表格  database_group.product_classes 的資料：~9 rows (近似值)
/*!40000 ALTER TABLE `product_classes` DISABLE KEYS */;
INSERT INTO `product_classes` (`id`, `className`, `sort`, `spec`, `product_main_class_id`, `created_at`, `updated_at`) VALUES
	(1, '上衣', 7, 1, 1, NULL, '2020-10-18 05:04:32'),
	(2, '褲子', 6, 1, 1, NULL, NULL),
	(3, '襪子', 5, 0, 1, NULL, NULL),
	(4, '配件', 4, 0, 1, NULL, NULL),
	(5, '蛋白補給', 3, 0, 2, NULL, NULL),
	(6, '專業營養補給', 2, 0, 2, NULL, NULL),
	(9, '想想還是不對  大概是褲子', 11, 0, 4, '2020-10-18 05:10:19', '2020-10-21 15:23:28'),
	(10, '時尚運動', 1, 0, 2, '2020-10-18 05:14:41', '2020-10-18 05:14:41'),
	(11, '可能是上面的衣服', 6, 0, 2, '2020-10-18 06:14:37', '2020-10-18 06:14:37');
/*!40000 ALTER TABLE `product_classes` ENABLE KEYS */;

-- 正在傾印表格  database_group.product_main_classes 的資料：~2 rows (近似值)
/*!40000 ALTER TABLE `product_main_classes` DISABLE KEYS */;
INSERT INTO `product_main_classes` (`id`, `mainClassName`, `sort`, `created_at`, `updated_at`) VALUES
	(1, '服飾', 2, NULL, NULL),
	(2, '運動保健', 1, NULL, NULL),
	(4, '測試關聯刪除用', 99, '2020-10-21 15:09:20', '2020-10-21 15:09:20');
/*!40000 ALTER TABLE `product_main_classes` ENABLE KEYS */;

-- 正在傾印表格  database_group.product_types 的資料：~25 rows (近似值)
/*!40000 ALTER TABLE `product_types` DISABLE KEYS */;
INSERT INTO `product_types` (`id`, `typeName`, `sort`, `product_class_id`, `created_at`, `updated_at`) VALUES
	(1, '背心', 25, 1, NULL, NULL),
	(2, '短袖', 24, 1, NULL, NULL),
	(3, '七分袖', 23, 1, NULL, NULL),
	(4, '長袖', 22, 1, NULL, NULL),
	(5, '外套', 21, 1, NULL, NULL),
	(6, '毛衣', 20, 1, NULL, NULL),
	(7, '短褲', 19, 2, NULL, NULL),
	(8, '長褲', 18, 2, NULL, NULL),
	(9, '緊身褲', 17, 2, NULL, NULL),
	(10, '牛仔褲', 16, 2, NULL, NULL),
	(11, '船型襪', 15, 3, NULL, NULL),
	(12, '童襪', 14, 3, NULL, NULL),
	(13, '其他襪型', 13, 3, NULL, NULL),
	(14, '帽子', 12, 4, NULL, NULL),
	(15, '墨鏡', 11, 4, NULL, NULL),
	(16, '背包', 10, 4, NULL, NULL),
	(17, '訓練鞋', 9, 4, NULL, NULL),
	(18, '毛巾', 8, 4, NULL, NULL),
	(19, '濃縮乳清蛋白', 7, 5, NULL, NULL),
	(20, '分離乳清蛋白', 6, 5, NULL, NULL),
	(21, '分離大豆蛋白', 5, 5, NULL, NULL),
	(22, '能量乳清蛋白', 4, 5, NULL, NULL),
	(23, '訓練補給', 3, 6, NULL, NULL),
	(24, '能量點心', 2, 6, NULL, NULL),
	(25, '運動水壺', 1, 10, NULL, NULL),
	(26, '隨便一個甚麼東西 大概啦', 8, 9, '2020-10-20 14:34:28', '2020-10-20 14:34:28');
/*!40000 ALTER TABLE `product_types` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
