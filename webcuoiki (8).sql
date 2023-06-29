-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2021 lúc 04:36 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webcuoiki`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapnhan`
--

CREATE TABLE `chapnhan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trinhdo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioithieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gs`
--

CREATE TABLE `gs` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(255) NOT NULL,
  `trinhdo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` text COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioithieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenphuhuynh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gs`
--

INSERT INTO `gs` (`id`, `ten`, `email`, `sdt`, `trinhdo`, `monhoc`, `anh`, `gioitinh`, `gioithieu`, `tenphuhuynh`) VALUES
(247, 'hi', 'hi', 0, 'ih', 'i', 'http://localhost/Webcuoiki/Fileuploadd/coo.png', 'hi', 'hi', ''),
(264, 'Quốc Chí', 'quochi@gmail.com', 123456, 'Đại học', 'Toán ', 'http://localhost/Webcuoiki/Fileuploadd/thayChi.png', 'Nam', 'Nhiệt tình', ''),
(272, 'Vũ Hải Nam', 'hainam@gmail.com', 123312, 'Đại học', 'Địa lý', 'http://localhost/Webcuoiki/Fileuploadd/hainam.png', 'Nam', 'Vui vẻ', ''),
(273, 'Vũ Hải Nam', 'hainam@gmail.com', 123312, 'Đại học', 'Địa lý', 'http://localhost/Webcuoiki/Fileuploadd/hainam.png', 'Nam', 'Vui vẻ', ''),
(288, 'Thanh Trúc', 'nguyenthanhtruc@gmail.com', 1235895121, '12', 'Toán Học', 'http://localhost/Webcuoiki/Fileuploadd/thanhtruc.png', 'Nữ', 'Nhiệt tình', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidungg`
--

CREATE TABLE `nguoidungg` (
  `id` int(11) NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidungg`
--

INSERT INTO `nguoidungg` (`id`, `ho`, `ten`, `gioitinh`, `sdt`, `email`, `diachi`, `taikhoan`, `matkhau`) VALUES
(1, '1', '1', '1', '1', '1', '1', 'admin', 'admin'),
(2, '1', 'Thanh Trúc', '1', '1', '1', '1', '11', '1'),
(3, 'Thanh ', 'Trúc', '1', '1', '1', '11', '1', '1'),
(4, '1', '1', '21', '2', '112', '12', '1', '21'),
(5, 'Thanh ', 'Trúcc', '1', '1', '1', '1', 'ThanhTruc', '123'),
(11, '1', '2', '12', '12', '12', '12', '1', '1'),
(13, '5', '5', '55', '5', '5', '5', '5', '5'),
(14, '45', '4', '54', '54', '54', '5', '45', '4'),
(19, 'Thanh ', 'Trúc', 'Nữ', '12345', '12345', '12345', 'thanhhtrucc', '123'),
(20, 'Thanh ', 'Trúc', 'Nữ', '0123', 'kdsdnk@gmail.com', 'Quảng Bình', 'thanhtruc123', '123'),
(21, 'Thanh ', 'Trúc', 'Nữ', '0123', 'meoudoremon2002@gmail.com', 'Quảng Bình', 'thanhtruc1234', '123'),
(22, 'Thanh ', 'Trúc', 'Nữ', '0123', 'ntttruc.20it5@vku.udn.vn', '123', 'thanhtrucc123', '123'),
(23, 'Thanh', 'Trúc', 'Nữ', '0123', 'meoudoremon2002@gmail.com', '123', 'nguyenthithanhtruc', '123'),
(24, 'Thanh ', 'Trúc', 'Nữ', '0123', 'meoudoremon2002@gmail.com', 'Hồng Thủy', 'nguyenthanhtruc', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(1) NOT NULL,
  `TenQuyen` varchar(225) NOT NULL,
  `ChiTiet` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTiet`) VALUES
(1, 'Admin', 'Quản Trị Viên'),
(2, 'Customer', 'Khách Hàng'),
(3, 'Tutor', 'Gia Sư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuhuynh`
--

CREATE TABLE `phuhuynh` (
  `idphuhuynh` int(11) NOT NULL,
  `tenphuhuynh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdtphuhuynh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lophoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lichhoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trinhdo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuhuynh`
--

INSERT INTO `phuhuynh` (`idphuhuynh`, `tenphuhuynh`, `diachi`, `sdtphuhuynh`, `lophoc`, `lichhoc`, `id`, `ten`, `trinhdo`, `monhoc`, `gioitinh`) VALUES
(15, 'Hello', '7', '7', '7', '7', '30', '', '', '', ''),
(16, '1', '2', '12', '13', '13', '40', '', '', '', ''),
(17, 'Success', '1', '2', '3', '4', '39', '', '', '', ''),
(18, 'Nguyễn Thị Thanh Trúc', '1', '0123', '12', 'Thứ 2', '30', '', '', '', ''),
(19, 'Hì', '1', '', '', '45', '39', '', '', '', ''),
(20, 'Nguyễn Thanh Trúc', 'Hồng Thủy-Lệ Thủy-Quảng Bình', '0826018138', '12', 'Tối thứ 2', '30', '', '', '', ''),
(21, '123', '12', '31', '3', '13', '42', '', '', '', ''),
(22, 'Gia Huy', '1', '1', '1', '1', '31', '', '', '', ''),
(23, 'Hiếu', '12', '12', '1', '2', '49', '', '', '', ''),
(24, 'Hiiiii', '55', '5', '5', '5', '30', '', '', '', ''),
(25, 'Nguyễn Thị Thanh Trúccc', '45', '5', '45', '4', '74', '', '', '', ''),
(26, '8', '8', '8', '8', '8', '31', '', '', '', ''),
(29, 'Trúc', '2', '8', '3', '9', '75', '', '', '', ''),
(30, 'Nguyễn Văn A', 'Quảng Bình ', '123456', '12', 'Tối thứ 2,4,6 ', '76', '', '', '', ''),
(31, 'Thanh Trúc', '11', '1', '1', '1', '30', '', '', '', ''),
(32, 'Nguyễn Thanh Trà', 'Hồng Thủy', '0123456', '8', 'Tối thứ 2, 3, 5, 6', '81', '', '', '', ''),
(33, 'Nguyễn Thị Thanh Trà', '0123', '0123', '9', 'Tối thứ 2, 3, 5, 6', '82', '', '', '', ''),
(34, '123', '4566', '789', '456', '456', '101', '', '', '', ''),
(35, 'Nguyễn Văn A', 'Quảng Bình', '012345', '12', 'Tối thứ 3, 6, 7', '100', '', '', '', ''),
(36, 'Đinh Vương Gia Huy', 'Quảng Nam', '01112112121', '8', 'Tối thứ 3, 5, 7', '99', '', '', '', ''),
(37, 'Đinh Vương Gia Huy', 'Quảng Nam', '01112112121', '8', 'Tối thứ 3, 5, 7', '99', '', '', '', ''),
(38, 'Thanh Trúc', 'Quảng Bình', '011235212', '6', 'Tối thứ 2, 3, 5, 6', '109', '', '', '', ''),
(39, 'Thanh Trà', '12 đường Trần Quốc Tuấn', '01213131', '10', 'Tối thứ 2, 3, 5', '90', '', '', '', ''),
(40, 'Thanh Trà', 'Quảng Bình', '01331', '10', 'Tối thứ 2, 3, 5, 6', '111', '', '', '', ''),
(41, 'Nguyễn Văn A', '1', '1', '1', '1', '111', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `HoTen` varchar(225) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucau`
--

CREATE TABLE `yeucau` (
  `id` int(255) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trinhdo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioithieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `yeucau`
--

INSERT INTO `yeucau` (`id`, `ten`, `email`, `sdt`, `trinhdo`, `monhoc`, `anh`, `gioitinh`, `gioithieu`) VALUES
(76, 'Nguyễn T Thanh Trúc', 'ntttruc.20it5@vku.udn.vn', '1111111111', '12', 'Toán', 'http://localhost/Webcuoiki/Fileuploadd/CoVatLy.png', 'Nữ', 'Năng nổ, hòa đồng'),
(85, 'Gia Huy', 'giahuy@gmail.com', '12345', '12', 'Vật Lý', 'http://localhost/Webcuoiki/Fileuploadd/Huyy.png', 'Nam', 'Nhiệt tình, siêng năng'),
(87, 'Trần Văn Hiếu', 'hieu@gmail.com', '232323', '8', 'Tiếng Anh', 'http://localhost/Webcuoiki/Fileuploadd/Hieu.png', 'Nam', 'Chăm chỉ'),
(88, 'Hoàng Xuân', 'hoangxuan@gmail.com', '123963', '9', 'Tiếng Anh', 'http://localhost/Webcuoiki/Fileuploadd/TiengAnh.png', 'Nữ', 'Hard work and learn form failure'),
(90, 'Kim Long', 'kimlong@gmail.com', '2147483647', '12', 'Địa lý', 'http://localhost/Webcuoiki/Fileuploadd/kimlong.png', 'Nam', 'Nhiệt tình'),
(91, '1223111', '111111111', '1', '1', '1', 'http://localhost/Webcuoiki/Fileuploadd/CoEL.png', '1', '1'),
(92, 'Diệu Linh', 'dieulinh@gmail.com', '123456', 'Đại học ', 'Ngữ Văn', 'http://localhost/Webcuoiki/Fileuploadd/dieulinh.png', 'Nữ', 'Nhiệt tình'),
(93, 'Vũ Hải Nam', 'hainam@gmail.com', '123312', 'Đại học', 'Địa lý', 'http://localhost/Webcuoiki/Fileuploadd/hainam.png', 'Nam', 'Vui vẻ'),
(94, 'Nguyễn Công Chính', 'congchinh@gmail.com', '123456', '12', 'Lịch sử', 'http://localhost/Webcuoiki/Fileuploadd/thaychinh.png', 'Nam', 'Hòa đồng'),
(95, 'Vũ Hải Nam', 'hainam@gmail.com', '123312', 'Đại học', 'Địa lý', 'http://localhost/Webcuoiki/Fileuploadd/hainam.png', 'Nam', 'Vui vẻ'),
(96, 'Vũ Thị Hà', 'vuthiha@gmail.com', '565645', '12', 'Tin học', 'http://localhost/Webcuoiki/Fileuploadd/Ha.png', 'Nữ', 'Nhiệt tình'),
(97, 'Đặng Xuân Chất', 'xuanchat', '466544', 'Đại học', 'Hóa học', 'http://localhost/Webcuoiki/Fileuploadd/xuanchat.png', 'Nam', 'Nhiệt tình'),
(98, 'Đức Hải', 'duchai@gmail.com', '12345', 'Đại học', 'Sinh học', 'http://localhost/Webcuoiki/Fileuploadd/SinhHoc.png', 'Nam', 'Chăm chỉ'),
(99, '1', '2', '3', '4', '5', 'http://localhost/Webcuoiki/Fileuploadd/coo.png', '6', '7'),
(100, 'Vũ Hải Nam', 'hainam@gmail.com', '123312', 'Đại học', 'Địa lý', 'http://localhost/Webcuoiki/Fileuploadd/hainam.png', 'Nam', 'Vui vẻ'),
(102, 'Phạm Gia Huy', 'pghuy@gmail.com', '079512454315', '12', 'Tiếng Anh', 'http://localhost/Webcuoiki/Fileuploadd/pghuy.png', 'Nam', 'Nhiệt tình'),
(103, 'Thanh Hiền', 'thanhhien@gmail.com', '0825697457', '12', 'Hóa học', 'http://localhost/Webcuoiki/Fileuploadd/hien.png', 'Nữ', 'Nhiệt tình'),
(104, 'Thanh Trúc', 'thanhtruc@gmail.com', '012234564645', '12', 'Toán học', 'http://localhost/Webcuoiki/Fileuploadd/thanhtruc.png', 'Nữ', 'Nhiệt tình'),
(105, 'Thu Ngân', 'thungan@gmail.com', '023112121221', 'Đại học', 'Vật lý', 'http://localhost/Webcuoiki/Fileuploadd/thungan.png', 'Nữ', 'Nhiệt tình'),
(106, 'Quỳnh Chi', 'quynhchi@gmail.com', '05611231212', 'Đại học', 'Sinh học ', 'http://localhost/Webcuoiki/Fileuploadd/chi.png', 'Nữ', 'Nhiệt tình'),
(107, 'Gia Huy', 'vuonggiahuy@gmail.com', '0123978545', '12', 'Tiếng Anh', 'http://localhost/Webcuoiki/Fileuploadd/Huyy.png', 'Nam', 'Nhiệt tình'),
(108, 'Trần Văn Hiếu', 'vanhieu@gmail.com', '01231012565', '12', 'Ngữ Văn', 'http://localhost/Webcuoiki/Fileuploadd/tranvanhieu.png', 'Nam', 'Nhiệt tình'),
(110, 'Thanh Truc', 'thanhtruc@gmail.com', '123456', 'Đại Học', 'Toán', 'http://localhost/Webcuoiki/Fileuploadd/Co5.png', 'Nũ', 'Năng nổ, nhiệt tình');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chapnhan`
--
ALTER TABLE `chapnhan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gs`
--
ALTER TABLE `gs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidungg`
--
ALTER TABLE `nguoidungg`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Chỉ mục cho bảng `phuhuynh`
--
ALTER TABLE `phuhuynh`
  ADD PRIMARY KEY (`idphuhuynh`);

--
-- Chỉ mục cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chapnhan`
--
ALTER TABLE `chapnhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gs`
--
ALTER TABLE `gs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT cho bảng `nguoidungg`
--
ALTER TABLE `nguoidungg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `phuhuynh`
--
ALTER TABLE `phuhuynh`
  MODIFY `idphuhuynh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
