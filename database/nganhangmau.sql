-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 06:52 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nganhangmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_recipient`
--

CREATE TABLE `blood_recipient` (
  `reci_id` int(10) NOT NULL,
  `reci_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_age` int(11) NOT NULL,
  `reci_bgrp` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_bqnty` int(11) NOT NULL,
  `reci_sex` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `reci_phno` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blood_recipient`
--

INSERT INTO `blood_recipient` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date`, `reci_phno`) VALUES
(1, 'Ngô Duy Khánh', 20, 'O', 250, 'Nam', '2021-10-21 02:59:37', '0382453623'),
(10, 'Khánh Ngô', 18, 'AB ', 400, 'Nam', '2021-10-21 03:47:08', '03824036312'),
(12, 'Khánh Duy Ngô', 17, 'AB ', 400, 'Nữ', '2021-10-21 04:00:51', '03824034331'),
(13, 'Nguyễn Minh Trang', 17, 'O ', 400, 'Nam', '2021-10-21 04:49:07', '0392348331');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_recipient`
--
ALTER TABLE `blood_recipient`
  ADD PRIMARY KEY (`reci_id`),
  ADD UNIQUE KEY `reci_phno` (`reci_phno`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blood_recipient`
--
ALTER TABLE `blood_recipient`
  MODIFY `reci_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
