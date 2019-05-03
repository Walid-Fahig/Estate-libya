-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 03, 2019 at 02:15 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'walid', 'walid@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'walid', 'walid@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Ahmed', 'Ahmed@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Mohammed', 'Mohammed@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'assil', 'assil@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'ali', 'ali@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'shomose', 'shomose@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'aaa', 'aaa@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'amair', 'amair@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
