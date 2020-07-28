-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 28, 2020 lúc 07:49 AM
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
(3, 40, 'Code không bug', 'bug@gmail.com', '43598459', 'bug@gmail.com'),
(4, 41, 'Nói không với bug', 'localhost', '49584594', 'hetbug@gmail.com');

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
(1, 0, '9', '9', '9', '9'),
(2, 0, '5', '6', '7', '6'),
(3, 27, '7', '3', '9', '6.3333333333333'),
(4, 28, '1', '3', '5', '3'),
(5, 29, '3', '6', '9', '6'),
(6, 30, '8', '9', '7', '8'),
(7, 31, '6', '7', '9', '7.3333333333333'),
(8, 32, '9', '9', '9', '9'),
(10, 34, '2', '5', '3', '3.3333333333333'),
(11, 35, '9', '10', '9', '9.3333333333333'),
(12, 36, '6', '8', '9', '7.6666666666667'),
(13, 37, '6', '9', '9', '8'),
(14, 38, '6', '8', '9', '7.6666666666667'),
(15, 39, '7', '9', '4', '6.6666666666667'),
(16, 40, '4', '8', '3', '5'),
(17, 41, '3', '1', '10', '4.6666666666667');

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
(31, 'Phạm Minh Đức', '621188', 'K58MMT', '465757', 'duc@gmail.com', 2),
(34, 'Phạm Thị Test', '61234', 'K63CNTT', '09999999', 'testhihi@gmail.com', 1),
(35, 'Phạm Thu Hằng', '621128', 'K6CNPM', '0362930759', 'thuhang@gmail.com', 2),
(36, 'Lê Ngọc Tuyên', '605142', 'K60MMT', '0999999999', 'tuyenle@gmail.com', 3),
(41, 'Hết lỗi đi', '95845', 'K65ATTT', '94854957', 'hetbug@gmail.com', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
