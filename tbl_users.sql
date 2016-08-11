-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2016 at 09:11 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `matric` varchar(20) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `dept` enum('computer','physics','mathematics','economics','geography') NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `userPic` varchar(200) DEFAULT NULL,
  `joining_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `user_name`, `matric`, `user_email`, `dept`, `user_password`, `userPic`, `joining_date`) VALUES
(15, 'ugochukwu', 'kingsley', 'ugochukwu', '2000/160900', 'ugokingsley5@gmail.com', 'computer', '33ac5d77f5693cfc6e44c38a1438b67e', NULL, '2016-08-09 01:04:58'),
(16, 'samuel', 'okeafor', 'samuel', 'de:2011/pt/1258', 'samuelokeafor8@gmail.com', 'computer', '6244ad4169ebba6e2aadf77aa94a9a8a', NULL, '2016-08-09 23:23:36'),
(17, 'ugochi', 'okeke', 'ugochi', '4000/90000', 'ugochi@gmail.com', 'mathematics', '22aad8b0a30c5ee9647c431db4b31f6f', NULL, '2016-08-10 00:50:03'),
(18, 'patrick', 'osahon', 'patrick', 'we/128900', 'patrick@gmail.com', 'mathematics', 'c6e61aac1b5ff484fda0a9ae260a7d67', NULL, '2016-08-10 18:13:13'),
(19, 'wisdom', 'okon', 'wisdom', '2000/1000', 'wisdom@gmail.com', 'computer', '58a4e529aa1f0a9f51134af6b7cdfb44', NULL, '2016-08-10 18:29:10'),
(20, 'tope', 'badmus', 'tope', '2000/90000', 'tope@gmail.com', 'mathematics', '475686053a92a8c70136e3d1f4b19029', NULL, '2016-08-10 20:51:53'),
(21, 'funmi', 'adeyemi', 'funmi', '2000/4500', 'funmi@gmail.com', 'geography', '148f66a12a711be1b7b928fd4daee3bd', NULL, '2016-08-10 21:07:47'),
(22, 'victor', 'ibru', 'victor_1234', '1991/2000', 'victor@ymail.com', 'mathematics', '12450bda981ad88daa0d04f3e24f43da', NULL, '2016-08-10 21:10:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
