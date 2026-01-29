-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2026 at 03:12 PM
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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `img_url` text NOT NULL,
  `posted_by_id` int NOT NULL,
  `datetimeinserted` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `img_url`, `posted_by_id`, `datetimeinserted`) VALUES
(3, 'Lorem Ipsum Dolor Sit Amit 1', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/fa4da625a2fc87210197e18ec3016a59x83.jpg', 1, '01/26/2026 19:41:04'),
(4, 'Lorem Ipsum Dolor Sit Amit 2', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/1cc28a10bf148e29c3976d5e26d47177x41.jpg', 1, '01/26/2026 19:41:10'),
(5, 'Lorem Ipsum Dolor Sit Amit 3', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/bf9b9cd94f2b3d1a57e79da521fd2ceax0.jpg', 1, '01/26/2026 19:41:17'),
(6, 'Lorem Ipsum Dolor Sit Amit 4', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/57323fb3a2875cbcb08c964639249af9x57.jpg', 1, '01/26/2026 19:41:24'),
(7, 'Lorem Ipsum Dolor Sit Amit 5', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/709b61b191bc2a2b67e5244211279928x20.jpg', 1, '01/26/2026 19:41:33'),
(8, 'Lorem Ipsum Dolor Sit Amit 6', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/7a54618de2ecf2852dcf7ff8124bd05fx17.jpg', 1, '01/26/2026 19:41:36'),
(9, 'Lorem Ipsum Dolor Sit Amit 7', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/bae90790b526b976121d8858188597eax31.jpg', 1, '01/26/2026 19:41:47'),
(10, 'Lorem Ipsum Dolor Sit Amit 8', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/7d85e1eed2255505d0a3222d0668a9fex77.jpg', 1, '01/26/2026 19:41:55'),
(11, 'Lorem Ipsum Dolor Sit Amit 9', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/4663220be2fa1770b970a4c7466ef78cx69.jpg', 1, '01/26/2026 19:42:02'),
(12, 'Lorem Ipsum Dolor Sit Amit 10', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/3d3f13f4da847bc27e404d0fd41fed4fx14.jpg', 1, '01/26/2026 19:42:08'),
(13, 'Lorem Ipsum Dolor Sit Amit 11', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/cccff8da9624207250a3759e73435323x6.jpg', 1, '01/26/2026 19:42:14'),
(14, 'Lorem Ipsum Dolor Sit Amit 12', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/3ed7c53100ca51c6df7546069c7997f4x58.jpg', 1, '01/26/2026 19:42:26'),
(15, 'Lorem Ipsum Dolor Sit Amit 13', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/b53f4d2a9cf3b0428587c75f5ae23256x60.jpg', 1, '01/26/2026 19:50:41'),
(16, 'Lorem Ipsum Dolor Sit Amit 14', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/f0d7658406b1c320b559285c4c44c153x66.jpg', 1, '01/26/2026 19:51:00'),
(17, 'Lorem Ipsum Dolor Sit Amit 15', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/b5d62fc4dbab2c27a388326dbd0bc39cx40.jpg', 1, '01/27/2026 07:19:02');

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
  `posted_by_id` int NOT NULL,
  `datetimeinserted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `business_valuation_exit_entry`
--

INSERT INTO `business_valuation_exit_entry` (`id`, `firstname`, `lastname`, `phone`, `email`, `businessowner`, `investor`, `looking_for_office`, `looking_for_retail`, `looking_for_industrial`, `posted_by_id`, `datetimeinserted`) VALUES
(1, 'andrian patrick', 'dass', '09500919935', 'dreyn0721@gmail.com', '1', '1', '1', '0', '0', 0, '01/16/2026 11:37:14'),
(2, 'andrian patrick', 'catag', '09500919935', 'dreyn0721@gmail.com', '1', '1', '1', '1', '1', 0, '01/16/2026 12:31:40'),
(3, 'test', 'catag', '09500919935', 'dreyn0721@gmail.com', '0', '1', '1', '1', '0', 0, '01/19/2026 09:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `article_id` int NOT NULL,
  `user_id` int NOT NULL,
  `comment` longtext NOT NULL,
  `datetimeinserted` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `comment`, `datetimeinserted`) VALUES
(1, 17, 1, 'asdsddsdadsdasd', '01/27/2026 10:22:25'),
(2, 17, 1, 'asdsddsdadsdasdsadsdd', '01/27/2026 10:22:25'),
(3, 16, 1, 'asdsddsdadsdasdsadsdd', '01/27/2026 10:22:25'),
(4, 17, 1, 'test', '01/27/2026 11:13:02'),
(5, 17, 1, 'asdasdadsdadasdasd', '01/27/2026 11:26:25'),
(6, 17, 1, 'asdasd', '01/27/2026 11:26:44'),
(7, 17, 1, 'zzz', '01/27/2026 11:26:48');

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
  `posted_by_id` int NOT NULL,
  `datetimeinserted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `commercial_real_estate_entry`
--

INSERT INTO `commercial_real_estate_entry` (`id`, `firstname`, `lastname`, `phone`, `email`, `businessowner`, `investor`, `looking_for_office`, `looking_for_retail`, `looking_for_industrial`, `posted_by_id`, `datetimeinserted`) VALUES
(1, 'sadsad', 'dasd', 'asds', '', '', '', '', '', '', 0, '');

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
  `businessvaluation` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `selling` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `buying` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `other` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `posted_by_id` int NOT NULL,
  `datetimeinserted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `residential_real_estate_entry`
--

INSERT INTO `residential_real_estate_entry` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`, `businessvaluation`, `selling`, `buying`, `other`, `posted_by_id`, `datetimeinserted`) VALUES
(1, 'asdsad', 'asdsd', '', '', '', '', '', '', '', 0, ''),
(2, 'asdasda', 'daasdsad', 'sdasdasd', 'dreyn0721@gmail.com', 'asdasdasdsd', '1', '1', '1', '1', 2, '01/29/2026 07:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `datetimeinserted` text NOT NULL,
  `last_login` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `role`, `datetimeinserted`, `last_login`) VALUES
(1, 'dreyn', '0d107d09f5bbe40cade3de5c71e9e9b7', 'dreyn0721@gmail.com', 'andrian', 'patrick', 'admin', '', ''),
(2, 'client', '0d107d09f5bbe40cade3de5c71e9e9b7', 'dreyn1111@gmail.com', 'andrian', 'patrick', 'user', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
