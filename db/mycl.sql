-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2023 at 04:55 AM
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
-- Database: `mycl`
--
CREATE DATABASE IF NOT EXISTS `mycl` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `mycl`;

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
(1, 'admin', 'hopethisworks');

-- --------------------------------------------------------

--
-- Table structure for table `college_details`
--

DROP TABLE IF EXISTS `college_details`;
CREATE TABLE IF NOT EXISTS `college_details` (
  `cid` int NOT NULL COMMENT 'It''s a thing ig',
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
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`cid`, `university`, `institution`, `state`, `district`, `address`, `programs`, `course`, `email`, `number`, `total_seats`, `reserved_seats`, `management_seats`, `about`, `certificate`, `status`) VALUES
(3, 'Meghalaya Univerisity', 'Institute of Human Resources Development', 'Kerala', 'Krishna', 'ttttttttttttttttttt', 'ug, diploma, engineering, phd, nursing, ds, moa, doe, ba-1', 'BE,BBA,PS,CE,BTECH', 'shafiiq688@gmail.com', 5555555, 12, 6, 8, 'ccccccccc', '6ab8664655e969c05f9895766961ff68.jpg', 'unverfied');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `college_users`
--

INSERT INTO `college_users` (`cid`, `firstname`, `lastname`, `email`, `password`, `profile`) VALUES
(1, 'VeryCoolUsername', 'T', 'thushar17223@gmail.c', 'password', 'ba927ff34cd961ce2c184d47e8ead9f6.jpg'),
(2, 'Thushar', 'T', 'c8354270@gmail.com', 'password', 'ba927ff34cd961ce2c184d47e8ead9f6.jpg'),
(3, 'nikhhil', 'T', 'nikhil.3post@gmail.com', 'password', '6ab8664655e969c05f9895766961ff68.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `message`) VALUES
(1, 'jxy', 'thushar17223@gmail.com', 'Very cool website if you ask me LOL'),
(2, 'jay', 'ssid88607@gmail.com', 'Very cool thing if you ask me'),
(3, 'jay', 'ssid88607@gmail.com', 'Very cool website if you ask me'),
(4, 'thushar', 'c8354270@gmail.com', 'ffff'),
(5, 'Sublime', 'thusharthualsipillai@gmai', 'fffffffff'),
(6, 'shaffek', 'shafiiq688@gmail.com', 'kjhkjhkjjk'),
(7, 'Thushar', 'ssid88607@gmail.com', 'Very cool stuff'),
(8, 'thushar', 'ssid88607@gmail.com', 'feedbacks'),
(9, 'vinayak', 'ssid88607@gmail.com', 'i\'m gay\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int NOT NULL,
  `image_name` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `firstname`, `lastname`, `email`, `password`, `dob`, `profile`) VALUES
(1, 'HopeThisWorks', 'TheRealOne', 'thushar17223@gmail.com', 'Doesthiswork', '2023-09-26', '3892bdfe777b2bd94a46854f713441ed.jpg'),
(2, 'nikhhil', 'therealone', 'ssid88607@gmail.com', 'Doesthisworkdd', '2023-09-12', '3892bdfe777b2bd94a46854f713441ed.jpg'),
(3, 'nikhhil', 'therealone', 'shafiiq688@gmail.com', 'password', '2023-10-10', '6ab8664655e969c05f9895766961ff68.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `institution` int NOT NULL,
  `comments` int NOT NULL,
  `em` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
