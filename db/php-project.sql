-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2023 at 12:02 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-project`
--
CREATE DATABASE IF NOT EXISTS `php-project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `php-project`;

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adm123');

-- --------------------------------------------------------

--
-- Table structure for table `college_details`
--

DROP TABLE IF EXISTS `college_details`;
CREATE TABLE IF NOT EXISTS `college_details` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'unique id',
  `university` varchar(100) NOT NULL COMMENT 'name of the university',
  `institution` varchar(100) NOT NULL COMMENT 'name of the institution',
  `state` varchar(100) NOT NULL COMMENT 'name of the state',
  `district` varchar(100) NOT NULL COMMENT 'name of the district',
  `address` varchar(100) NOT NULL COMMENT 'address details',
  `programs` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'number of programs',
  `course` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'number of courses',
  `email` varchar(30) NOT NULL COMMENT 'contact info',
  `number` int(20) NOT NULL COMMENT 'phone number',
  `total_seats` int NOT NULL COMMENT 'total number of seats',
  `reserved_seats` int NOT NULL COMMENT 'number of reserved seats',
  `management_seats` int NOT NULL COMMENT 'number of reserved seats',
  `about` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'something about the college',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`id`, `university`, `institution`, `state`, `district`, `address`, `programs`, `course`, `email`, `number`, `total_seats`, `reserved_seats`, `management_seats`, `about`) VALUES
(1, 'kerala University', 'college of applied science adoor', 'Maharashtra', 'Kurnool', 'very cool address', 'pg, diploma, engineering, phd, nursing, doe, ba-1', 'me,be,bba,ps,ce,btech,bsc,ma,msc', 'thushar17223@gmail.c', 2147483647, 7, 7, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `college_users`
--

DROP TABLE IF EXISTS `college_users`;
CREATE TABLE IF NOT EXISTS `college_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `college_users`
--

INSERT INTO `college_users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Thushar', 'T', 'ssid88607@gmail.com', 'thushar33');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `message`) VALUES
(1, 'jay', 'thushar17223@gmail.com', 'very cool website if you ask me lol\r\n'),
(2, 'Sublime', 'thushar17223@gmail.com', 'very cool'),
(3, 'jxy', 'c8354270@gmail.com', 'hope this works'),
(4, 'jxytherealone', 'nikhil.3post@gmail.com', 'Heey man nice website hope this stuffs works very well at the end of the day'),
(5, 'thushar', 'thushar17223@gmail.c', 'very nice lol'),
(6, 'jay', 'nikhil.3post@gmail.com', 'Yay feedback go brrrrrrrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `firstname`, `lastname`, `email`, `password`, `dob`) VALUES
(1, 'Thushar', 'T', 'ssid88607@gmail.com', 'thushar33', '2023-08-16'),
(2, 'Thushar', 'T', 'c8354270@gmail.com', 'thushar33', '2023-08-30'),
(3, 'jxytherealone', 'vdsjk', 'shafiiq688@gmail.com', 'thushar33', '2023-08-08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
