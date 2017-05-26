-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 26, 2017 lúc 07:13 PM
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
(20, 'Da Nang ', '2017-05-26 18:29:00', '2017-05-26 18:29:00'),
(21, 'Hue', '2017-05-26 18:29:04', '2017-05-26 18:29:04'),
(22, 'hoi An', '2017-05-26 18:29:08', '2017-05-26 18:29:08'),
(23, 'Quang NAm', '2017-05-26 18:29:12', '2017-05-26 18:29:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `DangKy`
--

CREATE TABLE `DangKy` (
  `id` int(11) NOT NULL,
  `khachHang_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `numOfPeople` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `requirement` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `DangKy`
--

INSERT INTO `DangKy` (`id`, `khachHang_id`, `tour_id`, `numOfPeople`, `create_at`, `requirement`) VALUES
(6, 1, 36, 3, '2017-05-26 18:46:13', 'None'),
(7, 3, 39, 4, '2017-05-26 19:12:00', 'None\r\n'),
(8, 4, 37, 1, '2017-05-26 19:12:33', 'none\r\n');

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

--
-- Đang đổ dữ liệu cho bảng `hotel`
--

INSERT INTO `hotel` (`id`, `addressId`, `name`, `level`, `created_at`, `updated_at`) VALUES
(4, 20, 'Queen', 'Luxury', '2017-05-26 18:31:02', '2017-05-26 18:31:02'),
(5, 21, 'King', 'Normal', '2017-05-26 18:31:13', '2017-05-26 18:31:13'),
(6, 22, 'Faifo', 'Luxury ', '2017-05-26 18:31:25', '2017-05-26 18:31:25'),
(7, 23, 'BumBum', 'Normal ', '2017-05-26 18:31:40', '2017-05-26 18:31:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `KhachHang`
--

CREATE TABLE `KhachHang` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `YearOld` int(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `KhachHang`
--

INSERT INTO `KhachHang` (`Id`, `Name`, `Email`, `Pass`, `FirstName`, `LastName`, `YearOld`, `PhoneNumber`) VALUES
(1, 'user', 'tyxa@yahoo.com', 'user', 'Joel', 'Hogan', 1979, '+994-79-8876139'),
(2, 'user1', 'fipiqaba@yahoo.com', 'user1', 'user1', 'Quinn', 2004, '+578-65-3260518'),
(3, 'Stevenson', 'riguli@yahoo.com', '123', 'Buffy', 'Wilkinson', 1973, '+468-75-9144037'),
(4, 'Messi', 'zeboda@gmail.com', '123', 'Nell', 'Oneal', 1975, '+198-46-8455941');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `f1t2` int(11) NOT NULL,
  `f3t5` int(11) NOT NULL,
  `over5` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `price`
--

INSERT INTO `price` (`id`, `tourId`, `f1t2`, `f3t5`, `over5`, `created_at`, `updated_at`) VALUES
(6, 36, 90, 80, 75, '2017-05-26 18:45:23', '2017-05-26 18:45:23'),
(7, 37, 80, 78, 70, '2017-05-26 19:08:12', '2017-05-26 19:08:12'),
(8, 38, 60, 56, 50, '2017-05-26 19:08:23', '2017-05-26 19:08:23'),
(9, 39, 900, 800, 758, '2017-05-26 19:08:36', '2017-05-26 19:08:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dayTour` int(11) NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `name`, `dayTour`, `info`, `image`, `created_at`, `updated_at`) VALUES
(36, 'Home Cooking Class in Da Nang', 2, 'This 4 hours tour brings you to experience the real culinary and local culture through a cooking class in Da Nang. You will also visit the busiest Han market and see beautiful bridges of Da Nang', 'home-cooking.jpg', '2017-05-26 18:39:32', '2017-05-26 18:39:32'),
(37, 'BIking Moto From Hue', 3, '        Begin to explore the road of World Heritage sites from Da Nang, the gateway to central Vietnam. The route encompasses no less than four UNESCO-designated World Heritage Sites: the ancient imperial city of Hue; the impressive Thien Duong cave and P', 'biker.jpg', '2017-05-26 19:00:06', '2017-05-26 19:00:06'),
(38, 'Let\'s hiking on the moutaint at Quang Nam', 4, 'Visit the Museum of the Vietnam space, you can admire the collection of the architecture of the three regions, the details of old houses, farming tools and antique furniture.\r\n\r\nThe space museum houses antique collectibles and three regions are successfully', 'hiking.jpg', '2017-05-26 19:01:31', '2017-05-26 19:01:31'),
(39, 'Take a tour with your family on the boat', 4, 'Hue is not only associated with the ancient beauty of the temples, palaces, tombs... but also known for the romantic Huong River (Perfume River). Enjoy a boat trip on the beautiful and scenic Perfume River of Hue imperial city, to Thien Mu Pagoda and the ', 'boat.jpg', '2017-05-26 19:06:19', '2017-05-26 19:06:19');

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
(88, 36, 20),
(89, 37, 20),
(90, 37, 21),
(91, 37, 22),
(92, 38, 20),
(93, 38, 21),
(94, 38, 22),
(95, 38, 23),
(96, 39, 20),
(97, 39, 22),
(98, 39, 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_type`
--

CREATE TABLE `tour_type` (
  `id` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `typeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_type`
--

INSERT INTO `tour_type` (`id`, `tourId`, `typeId`) VALUES
(17, 36, 10),
(18, 37, 5),
(19, 37, 6),
(20, 38, 5),
(21, 38, 8),
(22, 38, 9),
(23, 39, 9),
(24, 39, 10);

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

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'Bike', '2017-05-10 00:00:00', '2017-05-31 00:00:00'),
(6, 'MotoBike', '2017-05-10 00:00:00', '2017-05-31 00:00:00'),
(8, 'Hiking', '2017-05-26 18:29:20', '2017-05-26 18:29:20'),
(9, 'Boat', '2017-05-26 18:29:25', '2017-05-26 18:29:25'),
(10, 'Active ', '2017-05-26 18:30:38', '2017-05-26 18:30:38');

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
-- Chỉ mục cho bảng `DangKy`
--
ALTER TABLE `DangKy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_id` (`tour_id`),
  ADD KEY `khachHang_id` (`khachHang_id`),
  ADD KEY `tour_id_2` (`tour_id`);

--
-- Chỉ mục cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tour_hotel_tbl_address_tbl` (`addressId`);

--
-- Chỉ mục cho bảng `KhachHang`
--
ALTER TABLE `KhachHang`
  ADD PRIMARY KEY (`Id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `DangKy`
--
ALTER TABLE `DangKy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `KhachHang`
--
ALTER TABLE `KhachHang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT cho bảng `tour_address`
--
ALTER TABLE `tour_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT cho bảng `tour_type`
--
ALTER TABLE `tour_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `DangKy`
--
ALTER TABLE `DangKy`
  ADD CONSTRAINT `DangKy_ibfk_1` FOREIGN KEY (`khachHang_id`) REFERENCES `KhachHang` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DangKy_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
