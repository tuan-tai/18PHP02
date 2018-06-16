-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2018 at 08:16 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `18php02`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(3, NULL, 'iPhone'),
(6, NULL, 'iPad'),
(11, NULL, 'iPod'),
(12, NULL, 'MacBook'),
(13, NULL, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `cat_id` int(10) unsigned NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `image`, `name`, `model`, `price`, `quantity`, `status`, `created`, `updated`) VALUES
(1, 3, 'ip7-all.jpg', 'iPhone 7 Plus Edit - 2', 'ip2017', 15000000, 55, 1, '2018-06-15 20:17:00', '2018-06-15 20:33:02'),
(2, 3, '8-red-300x300.jpg', 'iPhone 8 Red', 'ip2018', 20000000, 20, 1, '2018-06-15 20:11:12', NULL),
(3, 3, 'ipx-300x300.jpg', 'iPhone X', 'ipXXX', 55000000, 39, 1, '2018-06-15 20:11:41', NULL),
(4, 12, 'macbook-air.png', 'Macbook Air', 'MB-XXX', 21000000, 23, 1, '2018-06-15 20:12:17', NULL),
(5, 12, 'macbook-pro-13.png', 'Macbook Pro 13 inch', 'MBP-XXX', 39000000, 10, 1, '2018-06-15 20:13:02', NULL),
(6, 12, 'macbook-pro-15.png', 'Macbook Pro 15 inch', 'MBP15-XXX', 50000000, 20, 1, '2018-06-15 20:13:48', NULL),
(7, 13, 'clock-gray-300x300.png', 'Clock Gray', 'CG-AAA', 13000000, 100, 1, '2018-06-15 20:14:30', NULL),
(8, 13, 'clock-silver-300x300.png', 'Clock Silver', 'CG-XYZ', 14000000, 999, 1, '2018-06-15 20:15:10', NULL),
(10, 13, 'clock-gold-300x300.png', 'Clock Gold', 'CG-GGG', 15000000, 99, 1, '2018-06-15 23:25:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priority` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `priority`) VALUES
(8, 'Tuan', 'tuantai568@gmail.com', '123456', 0),
(21, 'Admin', 'admin@gmail.com', '123456', 0),
(44, 'Test', 'test@gmail.com', '123456', 0),
(45, 'Test1', 'test1@gmail.com', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
