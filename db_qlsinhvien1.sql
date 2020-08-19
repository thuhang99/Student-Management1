-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2020 lúc 05:20 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'K62CNPM', 3, 'Hoàng Văn Tuân'),
(2, 'K62CNTT', 2, 'Nguyễn Thị Lan'),
(3, 'K62CNPMP', 1, 'Nguyễn Thị Lan'),
(4, 'K63ATTT', 4, 'Phạm Thu Hằng'),
(8, 'K63HTTT', 5, 'Lê Ngọc Tuyên'),
(13, 'K65ATTT', 4, 'Nguyễn Văn B'),
(14, 'K64CNPMP', 1, 'Phạm Thị A'),
(15, 'K65CNPM', 1, 'Phạm Văn B');

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
(14, 51, 'Lê Ngọc B', 'Hà Nội', '0999999999', ''),
(15, 52, 'Nguyễn Thị Test', 'Hà Nội', '0999999999', ''),
(16, 53, 'Phạm Văn Vinh', 'Đông Anh, Hà Nội', '0989199465', ''),
(17, 54, 'Lê Văn Suốt', 'Chương Mỹ, Hà Nội', '0123456789', 'botuyen@gmail.com'),
(18, 55, 'Hoàng Văn B', 'Dương Xá, Gia Lâm', '0123456789', ''),
(19, 56, 'Phạm Văn Vinh', 'Đông Anh, Hà Nội', '0123456789', ''),
(20, 57, 'Nguyễn Văn Bug', 'Hà Nội', '0123456789', ''),
(21, 58, 'Trần Văn Bê', 'Hà Nam', '0123456789', ''),
(22, 59, 'Nguyễn Văn Ba', 'Phú Thọ', '0123456789', 'vanba@gmail.com'),
(23, 60, 'Phạm Thị Thỏ', 'Hà Nội', '0123456789', 'thoxinh@gmail.com'),
(24, 61, 'Phạm Văn Vinh', 'Dục Tú, Đông Anh, Hà Nội', '0989199465', 'phamvinh@gmail.com');

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
(27, 51, '8', '3', '4', '5'),
(28, 52, '5', '3', '1', '3'),
(29, 53, '9', '10', '9', '9.3333333333333'),
(30, 54, '4', '6', '3', '4.3333333333333'),
(31, 55, '6', '7', '8', '7'),
(32, 56, '5', '5', '6', '5.3333333333333'),
(33, 57, '4', '2', '1', '2.3333333333333'),
(34, 58, '7', '9', '7', '7.6666666666667'),
(35, 59, '6', '8', '4', '6'),
(36, 60, '7', '3', '1', '3.6666666666667'),
(37, 61, '9', '10', '9', '9.3333333333333');

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
(54, 'Lê Ngọc Tuyên', '631254', '4', '0123456789', 'tuyenle@gmail.com', 0),
(55, 'Hoàng Văn Tuân', '651123', '13', '0123456789', 'tuanhoang@gmail.com', 1),
(56, 'Phạm Minh Đức', '651111', '13', '0123456789', 'duc@gmail.com', 2),
(57, 'Nguyễn Thị Test', '641111', '14', '0123456789', 'test@gmail.com', 0),
(58, 'Nguyễn Thị An', '621111', '1', '0123456789', 'an@gmail.com', 0),
(59, 'Phạm Thị Hà', '631112', '8', '0123456789', 'thiha@gmail.com', 3),
(60, 'Nguyễn Văn Hải', '641123', '14', '0123456789', 'vanteo@gmail.com', 2),
(61, 'Phạm Thu Hằng', '621128', '1', '0362930759', 'thuhang@gmail.com', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
