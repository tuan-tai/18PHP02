-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 24, 2018 lúc 02:40 PM
-- Phiên bản máy phục vụ: 5.7.22-0ubuntu18.04.1
-- Phiên bản PHP: 7.2.5-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `18php02`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `parent_id`, `category_name`) VALUES
(3, NULL, 'iPhone'),
(6, NULL, 'iPad'),
(11, NULL, 'iPod'),
(12, NULL, 'MacBook'),
(13, NULL, 'Others');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `image`, `product_name`, `model`, `price`, `quantity`, `status`, `created`, `updated`) VALUES
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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `priority`) VALUES
(8, 'Tuan', 'tuantai568@gmail.com', '123456', 0),
(21, 'Admin', 'admin@gmail.com', '123456', 0),
(44, 'Test', 'test@gmail.com', '123456', 0),
(45, 'Test1', 'test1@gmail.com', '123456', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `name` (`category_name`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
