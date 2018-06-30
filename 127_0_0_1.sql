-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 30 Juin 2018 à 02:57
-- Version du serveur :  5.6.37
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `18php02`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Apple'),
(2, 'Assus'),
(3, 'Dell'),
(4, 'Samsung');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `image`) VALUES
(1, 1, 'Mac pro2015', 1000, 'mt1.jpg'),
(2, 1, 'Mac pro2017', 2000, 'mt2.jpg'),
(3, 2, 'Assus corei5', 1000, 'mt3.jpg'),
(4, 2, 'Assus corei7', 3000, 'mt4.jpg'),
(5, 3, 'Dell 2014', 1000, 'mt5.jpg'),
(6, 3, 'Dell 2017', 1500, 'mt6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`) VALUES
(1, 1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 0, 'hoaicanh', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 0, 'apple.luong1905', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;--
-- Base de données :  `18php02_shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Apple'),
(2, 'Assus'),
(3, 'Dell'),
(4, 'Samsung'),
(5, 'Others');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `image`) VALUES
(1, 1, 'Apple 8 Red', 30000000, '8-red-300x300.jpg'),
(2, 1, 'Balo laptop', 78000, 'balo.jpg'),
(3, 5, 'Clock gold', 15000000, 'clock-gold-300x300.png'),
(4, 5, 'Clock gold', 15000000, 'clock-gold-300x300.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;--
-- Base de données :  `b_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;--
-- Base de données :  `keo24h`
--

-- --------------------------------------------------------

--
-- Structure de la table `advertises`
--

CREATE TABLE IF NOT EXISTS `advertises` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'advertise_default.png',
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `advertises`
--

INSERT INTO `advertises` (`id`, `title`, `link`, `image`, `position`, `created_at`, `updated_at`) VALUES
(4, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'http://keosanco.com/nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop/', 'group7.png', '2', '2018-06-12 02:18:49', '2018-06-13 19:37:16'),
(5, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'https://www.bong99.com/articles/19-15-thong_tin_ca_nhan_va_cac_giao_dich_co_dam_bao_khong.htm', 'group8.png', '2', '2018-06-13 19:34:38', '2018-06-13 19:34:38'),
(6, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'https://www.bong99.com/articles/19-15-thong_tin_ca_nhan_va_cac_giao_dich_co_dam_bao_khong.htm', 'group9.png', '2', '2018-06-13 19:35:40', '2018-06-13 19:37:44'),
(7, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'http://keosanco.com/nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop/', 'group10.png', '1', '2018-06-14 23:28:58', '2018-06-14 23:28:58'),
(8, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'http://keosanco.com/nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop/', 'group11.png', '1', '2018-06-14 23:29:14', '2018-06-14 23:29:14'),
(9, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'http://keosanco.com/nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop/', 'group12.png', '2', '2018-06-14 23:29:33', '2018-06-14 23:29:33'),
(11, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'https://www.bong99.com/articles/19-15-thong_tin_ca_nhan_va_cac_giao_dich_co_dam_bao_khong.htm', 'group13.png', '2', '2018-06-14 23:30:02', '2018-06-14 23:30:02'),
(12, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'https://www.bong99.com/articles/19-15-thong_tin_ca_nhan_va_cac_giao_dich_co_dam_bao_khong.htm', 'group14.png', '2', '2018-06-14 23:30:12', '2018-06-14 23:30:12');

-- --------------------------------------------------------

--
-- Structure de la table `beauties`
--

CREATE TABLE IF NOT EXISTS `beauties` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `beauties`
--

INSERT INTO `beauties` (`id`, `title`, `description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp&nbsp;Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp&nbsp;Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', '16_46425.jpg', '2018-06-12 19:51:31', '2018-06-12 19:54:25'),
(7, '2', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp&nbsp;Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp&nbsp;Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', '16_46425.jpg', '2018-06-12 19:51:31', '2018-06-16 20:47:23'),
(8, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '<p>as</p>', '<p>as</p>', 'football.jpg', '2018-06-16 20:45:26', '2018-06-16 20:45:26');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bóng đá', '0', '1', NULL, NULL),
(2, 'Bóng đá Anh1', '1', '1', '2018-06-10 07:54:37', '2018-06-10 08:20:12'),
(3, 'Tenis', NULL, '1', '2018-06-10 08:25:05', '2018-06-10 08:33:53'),
(4, 'Worldcup Rusia 2018', NULL, '1', '2018-06-10 21:14:59', '2018-06-10 21:14:59'),
(5, 'Giờ cầu vàng', NULL, '1', '2018-06-15 09:14:30', '2018-06-15 09:14:30');

-- --------------------------------------------------------

--
-- Structure de la table `category_videos`
--

CREATE TABLE IF NOT EXISTS `category_videos` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `category_videos`
--

INSERT INTO `category_videos` (`id`, `name`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hướng Dẫn', NULL, '1', '2018-06-11 20:58:32', '2018-06-11 20:58:32'),
(2, 'Thị trường chuyển nhượng', '1', '1', '2018-06-11 20:59:20', '2018-06-11 21:28:35');

-- --------------------------------------------------------

--
-- Structure de la table `exps`
--

CREATE TABLE IF NOT EXISTS `exps` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `exps`
--

INSERT INTO `exps` (`id`, `title`, `slug`, `image`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'money.jpeg', '<p>Dự đo&aacute;n kết quả trận Real Madrid vs Bayern Munich&nbsp;v&agrave; số ph&uacute;t xuất hiện b&agrave;n thắng mở tỷ số bằng c&aacute;ch comment ở ph&iacute;a cuối b&agrave;i. Chia sẻ b&agrave;i viết tr&ecirc;n trang c&aacute; nh&acirc;n.</p>', '<p>Dự đo&aacute;n kết quả trận Real Madrid vs Bayern Munich&nbsp;v&agrave; số ph&uacute;t xuất hiện b&agrave;n thắng mở tỷ số bằng c&aacute;ch comment ở ph&iacute;a cuối b&agrave;i. Chia sẻ b&agrave;i viết tr&ecirc;n trang c&aacute; nh&acirc;n.</p>', '2018-06-18 21:45:15', '2018-06-18 23:45:45');

-- --------------------------------------------------------

--
-- Structure de la table `gold_bridges`
--

CREATE TABLE IF NOT EXISTS `gold_bridges` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tournament_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `gold_bridges`
--

INSERT INTO `gold_bridges` (`id`, `title`, `tournament_id`, `slug`, `image`, `description`, `content`, `date`, `created_at`, `updated_at`) VALUES
(1, '1 MILLION VIEWS GREAT! THANK YOU SO MUCH FOR YOUR SUPPORTING ME <3﻿', '3', 'a', 'football4.jpg', '<p>aaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaa</p>', '2018-06-27 21:25', '2018-06-16 17:46:45', '2018-06-16 17:46:45'),
(2, 'sa', '3', 'sa', 'football2.jpg', '<p>s</p>', '<p>s</p>', '2018-06-26 07:45', '2018-06-16 17:59:34', '2018-06-16 18:13:30'),
(3, '1 MILLION VIEWS GREAT! THANK YOU SO MUCH FOR YOUR SUPPORTING ME <3﻿', '3', 'a', 'football4.jpg', '<p>aaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaa</p>', '2018-06-27 21:25', '2018-06-16 17:46:45', '2018-06-16 17:46:45'),
(4, '1 MILLION VIEWS GREAT! THANK YOU SO MUCH FOR YOUR SUPPORTING ME <3﻿', '3', 'a', 'football4.jpg', '<p>aaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaa</p>', '2018-06-27 21:25', '2018-06-16 17:46:45', '2018-06-16 17:46:45');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_06_10_122431_create_categories_table', 3),
(7, '2018_06_11_073834_create_tournaments_table', 4),
(14, '2018_06_12_033720_create_category_videos_table', 7),
(15, '2018_06_12_084016_create_advertises_table', 8),
(16, '2018_06_13_015251_create_beauties_table', 9),
(17, '2018_06_13_032933_create_scores_table', 10),
(18, '2018_06_11_090726_create_odds_guides_table', 11),
(19, '2018_06_08_065557_create_posts_table', 12),
(20, '2018_06_15_162353_create_gold_bridges_table', 13),
(21, '2018_06_12_031210_create_videos_table', 14),
(23, '2018_06_18_102351_create_stadia_table', 15),
(24, '2018_06_19_025514_create_predictions_table', 16),
(25, '2018_06_19_043354_create_exps_table', 17);

-- --------------------------------------------------------

--
-- Structure de la table `odds_guides`
--

CREATE TABLE IF NOT EXISTS `odds_guides` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `name_teamA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_teamA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_teamB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_teamB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tournament_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_Asia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_Erope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_compare` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image_default_odds_guide.png',
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `odds_guides`
--

INSERT INTO `odds_guides` (`id`, `title`, `slug`, `description`, `content`, `name_teamA`, `logo_teamA`, `name_teamB`, `logo_teamB`, `tournament_id`, `ratio_Asia`, `ratio_Erope`, `ratio_compare`, `image`, `date`, `created_at`, `updated_at`) VALUES
(1, '2', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'ádasdasd', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', 'Bỉ', 'bi-logo.png', 'Costa Rica', 'costa-rica-logo.png', '2', '2', '1', '3', 'thuy-dien-peru.jpg', '2018-06-02 10:50', '2018-06-13 19:15:24', '2018-06-13 19:15:24'),
(2, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'sdasdad', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', 'Bỉ', 'bi-logo.png', 'Costa Rica', 'costa-rica-logo.png', '2', '2', '1', '3', 'braz.jpg', '2018-06-21 10:50', '2018-06-13 19:15:24', '2018-06-13 19:15:24'),
(3, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, dự đoán, soi kèo Đan Mạch vs Mexico (Giao hữu quốc tế) - Với đội hình già giơ và lối chơi phòng ngự khó chịu, Mexico được xem là kênh đầu tư sáng giá ở màn đụng độ Đan Mạch đêm nay.', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', 'Bỉ', 'bi-logo.png', 'Costa Rica', 'costa-rica-logo.png', '2', '2', '1', '3', 'Spain-vs-Tunisia.jpg', '2018-06-21 10:50', '2018-06-13 19:15:24', '2018-06-13 19:15:24'),
(4, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, dự đoán, soi kèo Đan Mạch vs Mexico (Giao hữu quốc tế) - Với đội hình già giơ và lối chơi phòng ngự khó chịu, Mexico được xem là kênh đầu tư sáng giá ở màn đụng độ Đan Mạch đêm nay.', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', 'Bỉ', 'bi-logo.png', 'Costa Rica', 'costa-rica-logo.png', '2', '2', '1', '3', 'braz.jpg', '2018-06-21 10:50', '2018-06-13 19:15:24', '2018-06-13 19:15:24'),
(5, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, dự đoán, soi kèo Đan Mạch vs Mexico (Giao hữu quốc tế) - Với đội hình già giơ và lối chơi phòng ngự khó chịu, Mexico được xem là kênh đầu tư sáng giá ở màn đụng độ Đan Mạch đêm nay.', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', 'Bỉ', 'bi-logo.png', 'Costa Rica', 'costa-rica-logo.png', '2', '2', '1', '3', 'braz.jpg', '2018-06-21 10:50', '2018-06-13 19:15:24', '2018-06-13 19:15:24'),
(6, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, dự đoán, soi kèo Đan Mạch vs Mexico (Giao hữu quốc tế) - Với đội hình già giơ và lối chơi phòng ngự khó chịu, Mexico được xem là kênh đầu tư sáng giá ở màn đụng độ Đan Mạch đêm nay.', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', 'Bỉ', 'bi-logo.png', 'Costa Rica', 'costa-rica-logo.png', '2', '2', '1', '3', 'thuy-dien-peru.jpg', '2018-06-21 10:50', '2018-06-13 19:15:24', '2018-06-13 19:15:24'),
(7, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, dự đoán, soi kèo Đan Mạch vs Mexico (Giao hữu quốc tế) - Với đội hình già giơ và lối chơi phòng ngự khó chịu, Mexico được xem là kênh đầu tư sáng giá ở màn đụng độ Đan Mạch đêm nay.', '<p>Nhận định, soi k&egrave;o KuPS &ndash; Ilves Tampere, 22h30 ng&agrave;y 12/06: Kh&oacute; ph&aacute; dớp</p>', 'Bỉ', 'bi-logo.png', 'Costa Rica', 'costa-rica-logo.png', '2', '2', '1', '3', 'thuy-dien-peru.jpg', '2018-06-21 10:50', '2018-06-13 19:15:24', '2018-06-13 19:15:24');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tournament_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post_default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `tournament_id`, `slug`, `title`, `content`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, '4', '3', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaaaaaaa</p>', '1', 'braz.jpg', '2018-06-15 01:59:30', '2018-06-15 01:59:30'),
(2, '4', '3', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaaaaaaa</p>', '1', 'braz.jpg', '2018-06-15 01:59:30', '2018-06-15 01:59:30'),
(3, '4', '3', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum auctor fermentum\r\n                                    risus, in ultrices magna', '1', 'braz.jpg', '2018-06-15 01:59:30', '2018-06-15 01:59:30'),
(4, '4', '3', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum auctor fermentum\r\n                                    risus, in ultrices magna', '1', 'braz.jpg', '2018-06-15 01:59:30', '2018-06-15 01:59:30'),
(5, '4', '2', 'nhan-dinh-soi-keo-mu-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Nhận định, soi kèo MU – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '<p>aaaaaaaaaa</p>', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum auctor fermentum\r\n                                    risus, in ultrices magna', '1', 'mu-new.jpg', '2018-06-18 19:46:29', '2018-06-18 19:46:29');

-- --------------------------------------------------------

--
-- Structure de la table `predictions`
--

CREATE TABLE IF NOT EXISTS `predictions` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `predictions`
--

INSERT INTO `predictions` (`id`, `title`, `slug`, `image`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Anais Zanotti - Người đẹp tin tuyển Pháp vô địch World Cup', 'anais-zanotti-nguoi-dep-tin-tuyen-phap-vo-dich-world-cup', 'football1.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaa', '<p>Anais Zanotti - Người đẹp tin tuyển Ph&aacute;p v&ocirc; địch World Cup&nbsp;Anais Zanotti - Người đẹp tin tuyển Ph&aacute;p v&ocirc; địch World Cup</p>', '2018-06-18 20:16:40', '2018-06-18 20:24:22'),
(2, '1Anais Zanotti - Người đẹp tin tuyển Pháp vô địch World Cup', '1anais-zanotti-nguoi-dep-tin-tuyen-phap-vo-dich-world-cup', 'football1.jpg', '<p>1Anais Zanotti - Người đẹp tin tuyển Ph&aacute;p v&ocirc; địch World Cup&nbsp;Anais Zanotti - Người đẹp tin tuyển Ph&aacute;p v&ocirc; địch World Cup</p>', '<p>1Anais Zanotti - Người đẹp tin tuyển Ph&aacute;p v&ocirc; địch World Cup&nbsp;Anais Zanotti - Người đẹp tin tuyển Ph&aacute;p v&ocirc; địch World Cup</p>', '2018-06-18 20:16:40', '2018-06-18 20:24:22');

-- --------------------------------------------------------

--
-- Structure de la table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_teamA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_teamA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_teamB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_teamB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tournament_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_Asia_teamA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_general` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_Asia_teamB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_high` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_general` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_low` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_Europe_win` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_Europe_equal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratio_Europe_lost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `scores`
--

INSERT INTO `scores` (`id`, `title`, `slug`, `name_teamA`, `logo_teamA`, `name_teamB`, `logo_teamB`, `tournament_id`, `ratio_Asia_teamA`, `ratio_general`, `ratio_Asia_teamB`, `goal_high`, `goal_general`, `goal_low`, `ratio_Europe_win`, `ratio_Europe_equal`, `ratio_Europe_lost`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', 'nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop', 'Bỉ', 'bi-logo.png', 'costa rica', 'costa-rica-logo.png', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2018-06-20 09:45', '2018-06-12 21:45:25', '2018-06-12 21:45:25'),
(2, 'title', 'title', 'Bỉ', 'bi-logo.png', 'Costa Rica', 'costa-rica-logo.png', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2018-06-02 09:45', '2018-06-18 21:45:25', '2018-06-13 00:20:59');

-- --------------------------------------------------------

--
-- Structure de la table `stadia`
--

CREATE TABLE IF NOT EXISTS `stadia` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'stadium_default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `stadia`
--

INSERT INTO `stadia` (`id`, `title`, `name`, `description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Donec non euismod nulla, id imperdiet magna. Pellentesque non tempus mi, sed hendrerit lorem.', 'Stadium Ramiret', '2', '2', 'chelsea2.jpg', '2018-06-18 03:43:33', '2018-06-18 04:03:39'),
(3, 'a', '2', '2', '2', 'chelsea2.jpg', '2018-06-18 03:43:33', '2018-06-18 04:03:39');

-- --------------------------------------------------------

--
-- Structure de la table `tournaments`
--

CREATE TABLE IF NOT EXISTS `tournaments` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image_tournament.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tournaments`
--

INSERT INTO `tournaments` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Laliga', '<p>giải đấu hấp dẫn nhất h&agrave;nh cmn tinh</p>', 'ic-laliga.png', '2018-06-11 01:03:03', '2018-06-15 01:20:27'),
(2, 'Premier League', '<p>Giải đấu hay nhất thế giới</p>', 'ic-eng.png', '2018-06-11 01:06:32', '2018-06-15 01:20:17'),
(3, 'Bundesliga', '<p>Good</p>', 'ic-bundesliga.png', '2018-06-15 01:21:09', '2018-06-15 01:21:09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar_default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `address`, `description`, `status`, `phone`, `role`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Super', 'Admin', 'admin@gmail.com', 'Duy Sơn , Duy Xuyên , Quảng Nam', 'Good', '1', '01667486008', '0', 'avatar_default.png', '$2y$10$6JO5maJcWe8eNzFCsBnpXO5B8PVv38.X6fA/KeYOaIYfgqKv9mrxu', 'JC857UEnErVtvOvf9ZoROz7atJ9fdTp9DRJ3aBbuR8gXnKwfTrepqdnySMWm', NULL, NULL),
(5, '2', '2', 'asa@gmail.com', 'Duy Sơn', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', '1', '01667486008', '1', 'phong.png', '$2y$10$MtFAcDaKTi4ym5KIq8FddezTZTm0XOFcL.OmaoVtU5j.0yUQEoFu6', NULL, '2018-06-10 21:13:47', '2018-06-10 21:13:47');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_video_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image_video_default.png',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `videos`
--

INSERT INTO `videos` (`id`, `title`, `category_video_id`, `image`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '1', 'dc1.png', 'http://keosanco.com/nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop/', '<p>aaaaa</p>', '2018-06-17 02:21:25', '2018-06-17 02:24:30'),
(2, 'Nhận định, soi kèo KuPS – Ilves Tampere, 22h30 ngày 12/06: Khó phá dớp', '1', 'dc1.png', 'http://keosanco.com/nhan-dinh-soi-keo-kups-ilves-tampere-22h30-ngay-1206-kho-pha-dop/', '<p>aaaaa</p>', '2018-06-17 02:21:25', '2018-06-17 02:24:30');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beauties`
--
ALTER TABLE `beauties`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category_videos`
--
ALTER TABLE `category_videos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exps`
--
ALTER TABLE `exps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gold_bridges`
--
ALTER TABLE `gold_bridges`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `odds_guides`
--
ALTER TABLE `odds_guides`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `predictions`
--
ALTER TABLE `predictions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stadia`
--
ALTER TABLE `stadia`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `beauties`
--
ALTER TABLE `beauties`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `category_videos`
--
ALTER TABLE `category_videos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `exps`
--
ALTER TABLE `exps`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `gold_bridges`
--
ALTER TABLE `gold_bridges`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `odds_guides`
--
ALTER TABLE `odds_guides`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `predictions`
--
ALTER TABLE `predictions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `stadia`
--
ALTER TABLE `stadia`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;--
-- Base de données :  `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
