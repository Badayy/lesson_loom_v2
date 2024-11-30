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
  `resources_type` enum('profile','certificate','government_id') DEFAULT NULL,
  `filename` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_lesson_loom.file_uploads: ~0 rows (approximately)

-- Dumping structure for table db_lesson_loom.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` tinyint(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `school_id` varchar(50) DEFAULT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `school_acronym` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '0: inactive, 1:active',
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_lesson_loom.users: ~2 rows (approximately)
REPLACE INTO `users` (`id`, `user_role`, `email`, `password`, `fname`, `lname`, `gender`, `birthdate`, `phone`, `address`, `school_id`, `school_name`, `school_acronym`, `status`, `created`) VALUES
	(1, 1, 'admin@gmail.com', 'YWRtaW4=', 'Lesson', 'Loom', NULL, NULL, NULL, NULL, '0001', 'Cordova Public College', 'CPC', 1, '2024-12-01 00:45:54'),
	(2, 2, 'renz@gmail.com', 'YWRtaW4=', 'Renz', 'Escabase', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-12-01 01:51:57');

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
