-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 27, 2020 lúc 05:53 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qlsinhvien1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `tenlop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_cn` int(11) NOT NULL,
  `gvcn` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`id`, `tenlop`, `id_cn`, `gvcn`) VALUES
(1, 'K62CNPM', 1, 'Hoàng Văn Tuân'),
(2, 'K62CNTT', 2, 'Nguyễn Thị Lan'),
(3, 'K62CNPMP', 3, 'Nguyễn Thị Lan'),
(4, 'K63ATTT', 4, 'Phạm Thu Hằng'),
(8, 'K63HTTT', 5, 'Lê Ngọc Tuyên'),
(13, 'K65ATTT', 3, 'ABX');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `id_sv` int(11) NOT NULL,
  `namep` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `addp` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `point`
--

CREATE TABLE `point` (
  `id` int(11) NOT NULL,
  `id_sv` int(11) NOT NULL,
  `diem1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diem2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diem3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tbc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `point`
--

INSERT INTO `point` (`id`, `id_sv`, `diem1`, `diem2`, `diem3`, `tbc`) VALUES
(1, 0, '9', '9', '9', '9'),
(2, 0, '5', '6', '7', '6'),
(3, 27, '7', '3', '9', '6.3333333333333'),
(4, 28, '1', '3', '5', '3'),
(5, 29, '3', '6', '9', '6'),
(6, 30, '8', '9', '7', '8'),
(7, 31, '6', '8', '9', '7.6666666666667'),
(8, 32, '9', '9', '9', '9');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_pos` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `name`, `code`, `class`, `phone`, `email`, `id_pos`) VALUES
(2, 'Lê Ngọc Nhớt', '621199', 'k60MMT', '0999999999', 'nhot@gmail.com', 1),
(18, 'Phạm Thu Hằng', '621128', 'K62CNPM', '0123456789', 'test@gmail.com', 2),
(19, 'Phạm Minh Đức', '590001', 'K59TH', '0345345345', 'duc@gmail.com', 0),
(20, 'Nguyễn Thị Test', '56778', 'K65QLTT', '0904574857', 'thitest@gmail.com', 0),
(23, 'Phạm Thu Hằng', '621128', 'K62CNPM', '099999999', 'thuhang@gmail.com', 2),
(28, 'Nguyễn Văn Test', '984454', 'K87nccdf', '4545', 'hi@gmail.com', 2),
(30, 'Hoàng Văn Tuân', '605142', 'K60TH', '093358453', 'tuanhoang@gmail.com', 3),
(31, 'Phạm Minh Đức', '621188', 'K58MMT', '465757', 'duc@gmail.com', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `point`
--
ALTER TABLE `point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
