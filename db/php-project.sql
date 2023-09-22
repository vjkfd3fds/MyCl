-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2023 at 04:40 PM
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
  `number` int NOT NULL COMMENT 'phone number',
  `total_seats` int NOT NULL COMMENT 'total number of seats',
  `reserved_seats` int NOT NULL COMMENT 'number of reserved seats',
  `management_seats` int NOT NULL COMMENT 'number of reserved seats',
  `about` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'something about the college',
  `certificate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_users`
--

DROP TABLE IF EXISTS `college_users`;
CREATE TABLE IF NOT EXISTS `college_users` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `message`) VALUES
(1, 'jxy', 'thushar17223@gmail.com', 'Very cool website if you ask me LOL'),
(2, 'jay', 'ssid88607@gmail.com', 'Very cool thing if you ask me'),
(3, 'jay', 'ssid88607@gmail.com', 'Very cool website if you ask me'),
(4, 'thushar', 'c8354270@gmail.com', 'ffff'),
(5, 'Sublime', 'thusharthualsipillai@gmai', 'fffffffff');

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
  `profile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
