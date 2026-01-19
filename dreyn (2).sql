-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2026 at 03:29 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreyn`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_valuation_exit_entry`
--

DROP TABLE IF EXISTS `business_valuation_exit_entry`;
CREATE TABLE IF NOT EXISTS `business_valuation_exit_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `businessowner` varchar(10) NOT NULL,
  `investor` varchar(10) NOT NULL,
  `looking_for_office` varchar(10) NOT NULL,
  `looking_for_retail` varchar(10) NOT NULL,
  `looking_for_industrial` varchar(10) NOT NULL,
  `datetimeinserted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `business_valuation_exit_entry`
--

INSERT INTO `business_valuation_exit_entry` (`id`, `firstname`, `lastname`, `phone`, `email`, `businessowner`, `investor`, `looking_for_office`, `looking_for_retail`, `looking_for_industrial`, `datetimeinserted`) VALUES
(1, 'andrian patrick', 'dass', '09500919935', 'dreyn0721@gmail.com', '1', '1', '1', '0', '0', '01/16/2026 11:37:14'),
(2, 'andrian patrick', 'catag', '09500919935', 'dreyn0721@gmail.com', '1', '1', '1', '1', '1', '01/16/2026 12:31:40'),
(3, 'test', 'catag', '09500919935', 'dreyn0721@gmail.com', '0', '1', '1', '1', '0', '01/19/2026 09:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_real_estate_entry`
--

DROP TABLE IF EXISTS `commercial_real_estate_entry`;
CREATE TABLE IF NOT EXISTS `commercial_real_estate_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `businessowner` varchar(10) NOT NULL,
  `investor` varchar(10) NOT NULL,
  `looking_for_office` varchar(10) NOT NULL,
  `looking_for_retail` varchar(10) NOT NULL,
  `looking_for_industrial` varchar(10) NOT NULL,
  `datetimeinserted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `commercial_real_estate_entry`
--

INSERT INTO `commercial_real_estate_entry` (`id`, `firstname`, `lastname`, `phone`, `email`, `businessowner`, `investor`, `looking_for_office`, `looking_for_retail`, `looking_for_industrial`, `datetimeinserted`) VALUES
(1, 'sadsad', 'dasd', 'asds', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_disposition_opportunities_entry`
--

DROP TABLE IF EXISTS `real_estate_disposition_opportunities_entry`;
CREATE TABLE IF NOT EXISTS `real_estate_disposition_opportunities_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `businessowner` varchar(10) NOT NULL,
  `investor` varchar(10) NOT NULL,
  `looking_for_office` varchar(10) NOT NULL,
  `looking_for_retail` varchar(10) NOT NULL,
  `looking_for_industrial` varchar(10) NOT NULL,
  `datetimeinserted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `real_estate_disposition_opportunities_entry`
--

INSERT INTO `real_estate_disposition_opportunities_entry` (`id`, `firstname`, `lastname`, `phone`, `email`, `businessowner`, `investor`, `looking_for_office`, `looking_for_retail`, `looking_for_industrial`, `datetimeinserted`) VALUES
(1, 'asdsad', 'asdasds', 'dsadsd', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `residential_real_estate_entry`
--

DROP TABLE IF EXISTS `residential_real_estate_entry`;
CREATE TABLE IF NOT EXISTS `residential_real_estate_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `businessvaluation` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `selling` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `buying` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `other` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datetimeinserted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `residential_real_estate_entry`
--

INSERT INTO `residential_real_estate_entry` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`, `businessvaluation`, `selling`, `buying`, `other`, `datetimeinserted`) VALUES
(1, 'asdsad', 'asdsd', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'dreyn', '0d107d09f5bbe40cade3de5c71e9e9b7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
