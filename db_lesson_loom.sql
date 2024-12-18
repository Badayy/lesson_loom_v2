-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_lesson_loom
CREATE DATABASE IF NOT EXISTS `db_lesson_loom` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_lesson_loom`;

-- Dumping structure for table db_lesson_loom.file_uploads
CREATE TABLE IF NOT EXISTS `file_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resources_id` tinyint(4) DEFAULT NULL,
  `resources_type` enum('profile','certificate','government_ids') DEFAULT NULL,
  `filename` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_lesson_loom.file_uploads: ~0 rows (approximately)

-- Dumping structure for table db_lesson_loom.schools
CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` varchar(50) DEFAULT NULL,
  `sch_acro` varchar(50) DEFAULT NULL,
  `sch_name` varchar(50) DEFAULT NULL,
  `sch_address` varchar(50) DEFAULT NULL,
  `sch_contact` varchar(11) DEFAULT NULL,
  `sch_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: inactive 1:active',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_lesson_loom.schools: ~1 rows (approximately)
REPLACE INTO `schools` (`id`, `sch_id`, `sch_acro`, `sch_name`, `sch_address`, `sch_contact`, `sch_status`, `created`) VALUES
	(1, '0001', 'CPC', 'Cordova, Public, College', 'Gabi, Cordova, Cebu 6017', '234-1117', 1, '2024-12-01 02:48:11');

-- Dumping structure for table db_lesson_loom.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` tinyint(4) NOT NULL,
  `school_id` tinyint(4) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `teacher_id` varchar(50) DEFAULT NULL,
  `last_active_date` datetime DEFAULT NULL,
  `is_online_flg` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: offline 1:online',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: inactive, 1:active',
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_lesson_loom.users: ~2 rows (approximately)
REPLACE INTO `users` (`id`, `user_role`, `school_id`, `email`, `password`, `fname`, `lname`, `gender`, `birthdate`, `contact`, `address`, `teacher_id`, `last_active_date`, `is_online_flg`, `status`, `created`) VALUES
	(1, 1, NULL, 'admin@gmail.com', 'YWRtaW4=', 'Lesson', 'Loom', NULL, NULL, NULL, NULL, NULL, '2024-12-01 02:51:47', 0, 1, '2024-12-01 00:45:54'),
	(2, 2, 1, 'renz@gmail.com', 'YWRtaW4=', 'Renz', 'Escabase', NULL, NULL, NULL, NULL, NULL, '2024-12-01 02:52:28', 0, 1, '2024-12-01 01:51:57');

-- Dumping structure for table db_lesson_loom.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_lesson_loom.user_role: ~3 rows (approximately)
REPLACE INTO `user_role` (`id`, `role`) VALUES
	(1, 'admin'),
	(2, 'school'),
	(3, 'teacher');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
