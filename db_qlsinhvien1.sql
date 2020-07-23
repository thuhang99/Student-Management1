-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 23, 2020 lúc 04:18 PM
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
  `ten_cn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gvcn` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`id`, `tenlop`, `ten_cn`, `gvcn`) VALUES
(1, 'K62CNPM', 'Công nghệ phần mềm', 'Nguyễn Thị Lan'),
(2, 'K62CNTT', 'Công nghệ thông tin', 'Nguyễn Thị Lan'),
(3, 'K62CNPMP', 'Công nghệ phần mềm', 'Nguyễn Thị Lan'),
(4, 'K63ATTT', 'An toàn thông tin', 'Phạm Thu Hằng'),
(5, 'K63HTTT', 'Hệ thống thông tin', 'Nguyễn Văn Hạnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `name`, `code`, `class`, `phone`) VALUES
(2, 'Lê Ngọc Nhớt', '621199', 'k60MMT', '0999999999'),
(18, 'Phạm Thu Hằng', '621128', 'K62CNPM', '0123456789'),
(19, 'Phạm Minh Đức', '590001', 'K59TH', '0345345345'),
(20, 'Nguyễn Thị Test', '56778', 'K65QLTT', '0904574857');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
