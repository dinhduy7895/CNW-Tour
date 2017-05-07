-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 07, 2017 lúc 04:16 PM
-- Phiên bản máy phục vụ: 5.7.18-0ubuntu0.16.04.1
-- Phiên bản PHP: 7.0.18-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yii2_tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `address`
--

INSERT INTO `address` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'lotyloaaaaaaaaaaa', '2017-05-07 11:08:55', '2017-05-07 11:09:24'),
(3, 'bereta', '2017-05-07 11:09:10', '2017-05-07 11:09:10'),
(4, 'gosidam', '2017-05-07 14:23:19', '2017-05-07 14:23:19'),
(5, 'qulezy', '2017-05-07 14:23:22', '2017-05-07 14:23:22'),
(6, 'reseq', '2017-05-07 14:23:24', '2017-05-07 14:23:24'),
(7, 'muzul', '2017-05-07 14:23:27', '2017-05-07 14:23:27'),
(8, 'luruqucusu', '2017-05-07 14:23:30', '2017-05-07 14:23:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `addressId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `money` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dayTour` int(11) NOT NULL,
  `info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `name`, `dayTour`, `info`, `created_at`, `updated_at`) VALUES
(3, 'd', 111, 'd', '2017-05-10 00:00:00', '2017-05-07 14:36:35'),
(4, 'dasdsa', 4, 'dasdsad', '2017-05-16 00:00:00', '2017-05-23 00:00:00'),
(5, 'dsdsdsadasd', 22, 'dsadas', '2017-05-10 00:00:00', '2017-05-06 23:28:07'),
(6, 'dasdsa', 4, 'dasdsad', '2017-05-16 00:00:00', '2017-05-23 00:00:00'),
(7, 'dsd', 12, 'dsd', '0001-01-01 01:01:01', '0001-01-01 01:01:01'),
(8, 'dsd', 12, 'dsd', '0001-01-01 01:01:01', '0001-01-01 01:01:01'),
(9, 'dsd', 1, '2', '2017-05-06 23:26:41', '2017-05-06 23:26:41'),
(10, 'dsd', 1, '2', '2017-05-06 23:27:00', '2017-05-06 23:27:00'),
(11, 'tewuwab', 12, 'Quia saepe deserunt molestiae ullam ut eum velit quisquam omnis enim nostrud molestias asperiores harum', '2017-05-06 23:27:38', '2017-05-06 23:27:38'),
(12, 'cymoperuta', 6, 'Aliquam voluptates et quibusdam veritatis velit saepe sed in consequatur consequatur sint velit omnis est minim incididunt vero', '2017-05-07 10:50:58', '2017-05-07 10:50:58'),
(13, 'cymoperuta', 6, 'Aliquam voluptates et quibusdam veritatis velit saepe sed in consequatur consequatur sint velit omnis est minim incididunt vero', '2017-05-07 10:51:09', '2017-05-07 10:51:09'),
(14, 'cymoperuta', 6, 'Aliquam voluptates et quibusdam veritatis velit saepe sed in consequatur consequatur sint velit omnis est minim incididunt vero', '2017-05-07 10:51:12', '2017-05-07 10:51:12'),
(15, 'cymoperuta', 6, 'Aliquam voluptates et quibusdam veritatis velit saepe sed in consequatur consequatur sint velit omnis est minim incididunt vero', '2017-05-07 10:51:33', '2017-05-07 10:51:33'),
(16, 'cymoperuta', 1, 'Aliquam voluptates et quibusdam veritatis velit saepe sed in consequatur consequatur sint velit omnis est minim incididunt vero', '2017-05-07 10:51:47', '2017-05-07 10:51:47'),
(17, 'cymoperuta', 1, 'Aliquam voluptates et quibusdam veritatis velit saepe sed in consequatur consequatur sint velit omnis est minim incididunt vero', '2017-05-07 10:52:19', '2017-05-07 10:52:19'),
(18, 'qurygabov', 10, 'Dolorum eu veritatis saepe et est nulla quo possimus quia', '2017-05-07 10:52:48', '2017-05-07 10:52:48'),
(19, 'hikenivygi', 3, 'Odio doloribus in neque odio exercitationem', '2017-05-07 10:57:42', '2017-05-07 10:57:42'),
(20, 'fizehyxefi', 10, 'Iste dolores ut sunt corrupti nisi totam aut veniam cillum deleniti quidem voluptatem aute ad ipsam', '2017-05-07 13:23:30', '2017-05-07 13:23:30'),
(21, 'fizehyxefi', 10, 'Iste dolores ut sunt corrupti nisi totam aut veniam cillum deleniti quidem voluptatem aute ad ipsam', '2017-05-07 13:23:47', '2017-05-07 13:23:47'),
(22, 'fizehyxefi', 10, 'Iste dolores ut sunt corrupti nisi totam aut veniam cillum deleniti quidem voluptatem aute ad ipsam', '2017-05-07 13:24:52', '2017-05-07 13:24:52'),
(23, 'fizehyxefi', 10, 'Iste dolores ut sunt corrupti nisi totam aut veniam cillum deleniti quidem voluptatem aute ad ipsam', '2017-05-07 13:25:04', '2017-05-07 13:25:04'),
(24, 'fizehyxefi', 10, 'Iste dolores ut sunt corrupti nisi totam aut veniam cillum deleniti quidem voluptatem aute ad ipsam', '2017-05-07 13:25:14', '2017-05-07 13:25:14'),
(25, 'fizehyxefi', 10, 'Iste dolores ut sunt corrupti nisi totam aut veniam cillum deleniti quidem voluptatem aute ad ipsam', '2017-05-07 13:25:26', '2017-05-07 13:25:26'),
(26, 'gebataviq', 1, 'Est obcaecati voluptatem eiusmod in atque ad deserunt sint commodi delectus', '2017-05-07 14:15:29', '2017-05-07 14:16:01'),
(27, 'govoj', 9, 'Quia mollit corporis facere ut qui ducimus eaque', '2017-05-07 14:16:18', '2017-05-07 14:16:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_address`
--

CREATE TABLE `tour_address` (
  `id` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `addressId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_address`
--

INSERT INTO `tour_address` (`id`, `tourId`, `addressId`) VALUES
(17, 3, 2),
(18, 3, 3),
(19, 3, 4),
(20, 3, 5),
(21, 3, 6),
(22, 3, 7),
(23, 3, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_type`
--

CREATE TABLE `tour_type` (
  `id` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `typeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `password_reset_token`, `created_at`, `updated_at`) VALUES
(15, 'tofixiz', 'tatimaponu', 'Pa$$w0rd!', NULL, '2017-05-06 15:01:03', '2017-05-06 15:01:03'),
(16, 'admin', 'admin', 'admin', NULL, '2017-05-06 22:31:11', '2017-05-06 22:31:11'),
(17, 'ryjyvih', 'nacikivy', 'Pa$$w0rd!', NULL, '2017-05-06 22:59:05', '2017-05-06 22:59:05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tour_hotel_tbl_address_tbl` (`addressId`);

--
-- Chỉ mục cho bảng `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_price_tbl_tour_tbl` (`tourId`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tour_address`
--
ALTER TABLE `tour_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tour_address_tbl_address_tbl` (`addressId`),
  ADD KEY `fk_tour_address_tbl_tour_tbl` (`tourId`);

--
-- Chỉ mục cho bảng `tour_type`
--
ALTER TABLE `tour_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tour_type_tbl_tour_tbl` (`tourId`),
  ADD KEY `fk_tour_type_tbl_type_tbl` (`typeId`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `tour_address`
--
ALTER TABLE `tour_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `tour_type`
--
ALTER TABLE `tour_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `fk_tour_hotel_tbl_address_tbl` FOREIGN KEY (`addressId`) REFERENCES `address` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `fk_price_tbl_tour_tbl` FOREIGN KEY (`tourId`) REFERENCES `tour` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tour_address`
--
ALTER TABLE `tour_address`
  ADD CONSTRAINT `fk_tour_address_tbl_address_tbl` FOREIGN KEY (`addressId`) REFERENCES `address` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tour_address_tbl_tour_tbl` FOREIGN KEY (`tourId`) REFERENCES `tour` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tour_type`
--
ALTER TABLE `tour_type`
  ADD CONSTRAINT `fk_tour_type_tbl_tour_tbl` FOREIGN KEY (`tourId`) REFERENCES `tour` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tour_type_tbl_type_tbl` FOREIGN KEY (`typeId`) REFERENCES `type` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
