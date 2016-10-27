-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2016 at 03:50 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `auther_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `auther_name`) VALUES
(7, 'Heading ', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo', 'sed odio dui'),
(8, 'Heading', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo', 'sed odio dui'),
(9, 'Heading', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo', 'sed odio dui'),
(11, 'Heading', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo', 'sed odio dui'),
(12, 'Heading', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo', 'sed odio dui'),
(13, 'Heading', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo', 'sed odio dui');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
