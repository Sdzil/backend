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

-- 正在傾印表格  backend_db.contacts 的資料：~20 rows (近似值)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `phoneNumber`, `address`, `email`, `subject`, `content`, `created_at`, `updated_at`) VALUES
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
	(20, 'Nerd19', '0912345678', '總之住在某個奇怪的角落', '5566@sunyi', '為什麼', 'RRRRRRRRRR進度爆炸RRRR', NULL, NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
