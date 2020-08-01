-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 01, 2020 lúc 03:47 PM
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
(13, 'K65ATTT', 4, 'Nguyễn Văn B'),
(14, 'K64CNPMP', 1, 'Phạm Thị A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `id_sv` int(11) NOT NULL,
  `namep` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `addp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `emailp` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parents`
--

INSERT INTO `parents` (`id`, `id_sv`, `namep`, `addp`, `phonep`, `emailp`) VALUES
(9, 46, 'Lê Văn Suốt', 'Chương Mỹ, Hà Nội', '0123456789', 'tuyennhot@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `id_sv` int(11) NOT NULL,
  `diem1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diem2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diem3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tbc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `points`
--

INSERT INTO `points` (`id`, `id_sv`, `diem1`, `diem2`, `diem3`, `tbc`) VALUES
(22, 46, '8', '7', '6', '7');

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
(46, 'Lê Ngọc Nhớt', '601034', 'K62CNTT', '0123456789', 'tuyennhot@gmail.com', 0);

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
-- Chỉ mục cho bảng `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `points`
--
ALTER TABLE `points`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
