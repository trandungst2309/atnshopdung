-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2023 lúc 11:42 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tdbigbike`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('C001', 'Sport', 'Sport bike'),
('C002', 'Naked', 'Naked bike'),
('C003', 'Classic', 'Classic bike');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('Finn', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 0, 'Kan Thor', '0987654321', 'admin@gmail.com', 17, 8, 2002, '', '', 1),
('trandungst123', 'fcea920f7412b5da7be0cf42b8c93759', 'Tran Dung', 0, 'Soc Trang', '01234567899', 'trandungst123', 23, 9, 2002, '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(6) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `DeliveryDate` datetime NOT NULL,
  `Delivery_loca` varchar(200) NOT NULL,
  `Payment` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('B001', 'S1000RR', 32495, '0.00', 'M Performance', '<p>\r\n	BMW S1000RR M Performance</p>\r\n', '2023-05-22 19:56:27', 1, 'BMW S1000RR.jpg', 'C001'),
('C4SF', 'CB400 Supper Four', 12300, '0.00', 'Supper Four', '<p>\r\n	Honda CB400 Supper Four</p>\r\n', '2023-05-24 19:30:06', 1, 'CB400.png', 'C003'),
('CB1N', 'CB1000R', 12999, '0.00', 'NeoSport ', '<p>\r\n	Honda CB1000R NeoSport Cafe</p>\r\n', '2023-05-24 19:28:08', 1, 'NeoSport.jpg', 'C002'),
('CBR1', 'CBR1000RR-R', 28500, '0.00', 'Fireblade SP', '<p>\r\n	Honda CBR 1000RR-R Fireblade SP</p>\r\n', '2023-05-21 11:14:31', 1, 'CBR.png', 'C001'),
('D001', 'Superleggera V4', 100000, '0.00', 'V4', '<p>\r\n	Ducati&nbsp;Superleggera V4</p>\r\n', '2023-05-21 11:20:16', 1, 'V4S.png', 'C001'),
('K001', 'Ninja H2', 30500, '0.00', 'Supper charge', '<p>\r\n	Kawasaki Ninja H2 Suppercharge</p>\r\n', '2023-05-21 11:24:23', 1, 'H2.jpg', 'C001'),
('KZ1K', 'Z1000R', 10500, '0.00', 'Z1000R', '<p>\r\n	Kawasaki Ninja Z1000R</p>\r\n', '2023-05-24 19:31:06', 1, 'Z1000.jpg', 'C002'),
('YZF1', 'R1M', 17599, '0.00', 'Yamaha R1M', '<p>\r\n	YamahaR1M</p>\r\n', '2023-05-21 11:23:48', 1, 'R1M.jpg', 'C001'),
('YZF6', 'R6', 12199, '0.00', 'YZF-R6', '<p>\r\n	Yamaha YZF-R6</p>\r\n', '2023-05-24 19:31:57', 1, 'R6.jpg', 'C001');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`Username`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
