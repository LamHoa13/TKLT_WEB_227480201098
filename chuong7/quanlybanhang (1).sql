-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 01, 2025 lúc 01:26 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanhang`
--
CREATE DATABASE IF NOT EXISTS `quanlybanhang` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `quanlybanhang`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(10) NOT NULL COMMENT 'Mã hàng',
  `tenhang` varchar(40) NOT NULL COMMENT 'Tên hàng',
  `mansx` varchar(5) NOT NULL COMMENT 'Mã nhà SX',
  `namsx` year(4) NOT NULL COMMENT 'Năm SX',
  `gia` decimal(10,2) NOT NULL COMMENT 'Giá bán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Quản lý bán hàng';

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`) VALUES
('AS01', 'Asus TUF', 'AS', '2017', 520.00),
('AS02', 'Asus Vivobook', 'AS', '2017', 580.00),
('DE01', 'Dell Vostro', 'DE', '2015', 650.00),
('DE02', 'Del Inspiron', 'DE', '2015', 550.00),
('LE01', 'Lenovo Thinkpad', 'LE', '2019', 750.00),
('LE02', 'Lenovo Legion', 'LE', '2020', 540.00),
('LE03', 'Lenovo Yoga', 'LE', '2020', 600.00),
('TO01', 'Toshiba Satellite', 'TO', '2014', 630.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(10) NOT NULL COMMENT 'Mã hóa đơn',
  `makh` varchar(10) NOT NULL COMMENT 'Mã K.Hàng',
  `mahang` varchar(10) NOT NULL COMMENT 'Mã hàng',
  `soluong` int(11) NOT NULL COMMENT 'Số lượng',
  `thanhtien` decimal(15,2) NOT NULL COMMENT 'Thành tiền'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Quản lý bán hàng';

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `mahang`, `soluong`, `thanhtien`) VALUES
('001', 'K001', 'DE01', 2, 0.00),
('001', 'K001', 'DE02', 1, 0.00),
('002', 'K002', 'LE01', 5, 0.00),
('002', 'K002', 'LE02', 3, 0.00),
('003', 'K002', 'TO01', 1, 0.00),
('004', 'K003', 'DE01', 2, 0.00),
('005', 'K004', 'AS01', 4, 0.00),
('005', 'K004', 'LE01', 6, 0.00),
('005', 'K004', 'LE02', 8, 0.00),
('006', 'K005', 'AS01', 5, 0.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(10) NOT NULL COMMENT 'Mã K.Hàng',
  `tenkh` varchar(30) NOT NULL COMMENT 'Tên K.hàng',
  `namsinh` year(4) NOT NULL COMMENT 'Năm sinh ',
  `dienthoai` varchar(10) NOT NULL COMMENT 'Số điện thoại',
  `diachi` varchar(50) NOT NULL COMMENT 'Địa chỉ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Quản lý bán hàng';

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`) VALUES
('K001', 'Nguyễn Thị Lan', '1980', '0913123456', 'Bạc Liêu'),
('K002', 'Ngô Thanh Minh', '1985', '0913024357', 'Vĩnh Lợi'),
('K003', 'Lâm Văn Thanh', '1979', '0913123457', 'Giá Rai'),
('K004', 'Dương Thu Thủy', '1995', '0913024358', 'Hồng Dân'),
('K005', 'Nguyễn Thị Xuân', '1987', '0903223344', 'Phước Long'),
('K006', 'Huỳnh Mẫn Đạt', '1975', '0989122112', 'Bạc Liêu'),
('K007', 'Lâm Hoài Bảo', '1990', '0912131415', 'Bạc Liêu'),
('K008', 'Hồ Trung Tín', '2000', '0944119999', 'Phước Long'),
('K009', 'Trương Xuân Thi', '2001', '0909000111', 'Vĩnh Lợi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` varchar(5) NOT NULL COMMENT 'Mã nhà SX',
  `tennsx` varchar(40) NOT NULL COMMENT 'Tên nhà SX',
  `quocgia` varchar(20) NOT NULL COMMENT 'Quốc gia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Quản lý bán hàng';

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`, `quocgia`) VALUES
('AS', 'ASUS', 'Đài Loan'),
('DE', 'DELL', 'Hoa kỳ'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật bản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tonkho`
--

CREATE TABLE `tonkho` (
  `mahang` varchar(4) NOT NULL,
  `tenhang` varchar(40) DEFAULT NULL,
  `mansx` varchar(2) DEFAULT NULL,
  `namsx` year(4) DEFAULT NULL,
  `gia` decimal(10,0) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tonkho`
--

INSERT INTO `tonkho` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`, `soluong`) VALUES
('DE01', 'Dell Vostro', 'DE', '2015', 650, 20),
('DE02', 'Dell Inspiron', 'DE', '2015', 550, 30);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`,`mahang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`mansx`);

--
-- Chỉ mục cho bảng `tonkho`
--
ALTER TABLE `tonkho`
  ADD PRIMARY KEY (`mahang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
