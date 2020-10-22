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

-- 正在傾印表格  database_group.banners 的資料：~0 rows (近似值)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `imageUrl`, `description`, `target`, `link`, `sort`, `created_at`, `updated_at`) VALUES
	(1, '/upload/banners/160328290773278a4a86960eeb576a8fd4c9ec6997.jpg', '鬼滅之刃聯名宣傳，主要形象圖', '_blank', NULL, 99, '2020-10-21 12:21:47', '2020-10-21 12:21:47'),
	(2, '/upload/banners/16032830302b44928ae11fb9384c4cf38708677c48.jpg', '鬼滅之刃聯名宣傳，第二張', '_blank', NULL, 98, '2020-10-21 12:23:50', '2020-10-21 12:23:50'),
	(3, '/upload/banners/16032831036974ce5ac660610b44d9b9fed0ff9548.jpg', '鬼滅之刃聯名宣傳，第三張', '_blank', NULL, 97, '2020-10-21 12:25:03', '2020-10-21 12:25:03'),
	(4, '/upload/banners/16032831575878a7ab84fb43402106c575658472fa.jpg', '咖哩與冰淇淋促銷合購組合', '_blank', NULL, 50, '2020-10-21 12:25:57', '2020-10-21 12:25:57'),
	(6, '/upload/banners/1603283381a97da629b098b75c294dffdc3e463904.jpg', '氖石', '_blank', NULL, 47, '2020-10-21 12:29:41', '2020-10-21 12:29:41'),
	(7, '/upload/banners/1603283445da4fb5c6e93e74d3df8527599fa62642.jpg', '竹節棉片假名印花T-shirt 及 女力太空外套宣傳圖', '_blank', NULL, 46, '2020-10-21 12:30:45', '2020-10-21 12:30:45'),
	(8, '/upload/banners/160328350437a749d808e46495a8da1e5352d03cae.jpg', '品牌logo牛仔褲 深蹲OK!!', '_blank', NULL, 10, '2020-10-21 12:31:44', '2020-10-21 12:31:44'),
	(9, '/upload/banners/16032837549766527f2b5d3e95d4a733fcfb77bd7e.jpg', '圓領毛衣 粗針/細針', '_blank', NULL, 7, '2020-10-21 12:32:21', '2020-10-21 12:36:48'),
	(10, '/upload/banners/1603283577045117b0e0a11a242b9765e79cbf113f.jpg', '防水拉鍊連帽T-shirt', '_blank', NULL, 6, '2020-10-21 12:32:57', '2020-10-21 12:32:57'),
	(11, '/upload/banners/1603283641fc221309746013ac554571fbd180e1c8.jpg', '新襪上市 除臭抑菌 足弓機能 防滑設計 萊卡彈性纖維', '_blank', NULL, 5, '2020-10-21 12:34:01', '2020-10-21 12:34:01'),
	(12, '/upload/banners/1603283907b3e3e393c77e35a4a3f3cbd1e429b5dc.jpg', '冰淇淋新品上市', '_blank', NULL, 48, '2020-10-21 12:38:27', '2020-10-21 12:39:04');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
