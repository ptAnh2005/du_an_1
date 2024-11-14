-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2024 at 02:20 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `iduser` int NOT NULL DEFAULT '0',
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1.Thanh toán trực tiếp.\r\n2.Chuyển khoản.\r\n3.Thanh toán online.',
  `ngaydathang` varchar(50) NOT NULL,
  `total` int NOT NULL DEFAULT '0',
  `bill_status` tinyint(1) DEFAULT '0' COMMENT '0.Đơn hàng mới.\r\n1.Đang xử lý.\r\n2.Đang giao hàng.\r\n3.Đã giao hàng.',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(16, 9, 'nguyen hong quan', 'di trạch hoài đức hà nội', '0354549423', 'ssssss@gmail.com', 0, '08:43:11am 26/07/2024', 39998, 0, NULL, NULL, NULL),
(17, 9, 'nguyen hong quan', 'di trạch hoài đức hà nội', '0354549423', 'ssssss@gmail.com', 0, '08:44:32am 26/07/2024', 52998, 0, NULL, NULL, NULL),
(18, 9, 'nguyen hong quan', 'di trạch hoài đức hà nội', '0354549423', 'ssssss@gmail.com', 0, '09:02:38am 26/07/2024', 65998, 0, NULL, NULL, NULL),
(19, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '09:05:28am 26/07/2024', 19999, 0, NULL, NULL, NULL),
(20, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '09:19:23am 26/07/2024', 19999, 0, NULL, NULL, NULL),
(21, 7, 'cuan12101', '', '', 'cuancuan@gmail.com', 0, '12:11:50pm 26/07/2024', 19999, 0, NULL, NULL, NULL),
(22, 7, 'cuan12101', '', '', 'cuancuan@gmail.com', 0, '12:12:02pm 26/07/2024', 32999, 0, NULL, NULL, NULL),
(23, 7, 'cuan12101', '', '', 'cuancuan@gmail.com', 0, '01:14:25pm 26/07/2024', 45999, 0, NULL, NULL, NULL),
(24, 7, 'cuan12101', '', '', 'cuancuan@gmail.com', 0, '03:01:06pm 26/07/2024', 13000, 0, NULL, NULL, NULL),
(25, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '11:21:53am 27/07/2024', 56999, 0, NULL, NULL, NULL),
(26, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '12:42:59pm 30/07/2024', 19999, 0, NULL, NULL, NULL),
(27, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '12:44:14pm 30/07/2024', 32999, 0, NULL, NULL, NULL),
(28, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '12:58:35pm 30/07/2024', 41887, 0, NULL, NULL, NULL),
(29, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '03:07:33pm 31/07/2024', 19999, 0, NULL, NULL, NULL),
(30, 7, 'cuan12101', '', '', 'cuancuan@gmail.com', 0, '04:22:20pm 31/07/2024', 11000, 0, NULL, NULL, NULL),
(31, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '12:23:20pm 01/08/2024', 46333, 0, NULL, NULL, NULL),
(32, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '12:38:24pm 01/08/2024', 34000, 0, NULL, NULL, NULL),
(33, 3, 'cuan1210', 'di trạch hoài đức hà nội ', '0354549423', 'hongquanabc02@gmail.com', 0, '01:00:49pm 01/08/2024', 53999, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(18, 'very nice', 9, 47, '08:46:28am 26/07/2024'),
(20, 'HELO', 1, 51, '03:01:40pm 31/07/2024'),
(21, 'HELO', 3, 42, '12:37:39pm 01/08/2024');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` int NOT NULL DEFAULT '0',
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `ibbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `ibbill`) VALUES
(42, 9, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 17),
(45, 9, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 18),
(46, 9, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 18),
(51, 7, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 22),
(53, 7, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 23),
(54, 7, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 23),
(55, 7, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 24),
(57, 3, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 25),
(58, 3, 44, 'Mclaren_720s_Spider.jpg', 'Mclaren 720s Spider', 24000, 1, 24000, 25),
(61, 3, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 27),
(63, 3, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 28),
(64, 3, 50, 'Toyota_Supra_MK4.jpg', 'Toyota Supra MK4', 8888, 1, 8888, 28),
(66, 7, 47, 'porsche_panamera_2021.jpg', 'porsche panamera 2021', 11000, 1, 11000, 30),
(68, 3, 51, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 13000, 1, 13000, 31),
(69, 3, 49, 'Rolls_Royce_Phantom_2024.jpg', 'Rolls Royce Phantom 2024', 19000, 1, 19000, 32),
(70, 3, 48, 'Rolls_Royce_Ghost.jpg', 'Rolls Royce Ghost', 15000, 1, 15000, 32),
(71, 3, 49, 'Rolls_Royce_Phantom_2024.jpg', 'Rolls Royce Phantom 2024', 19000, 1, 19000, 33),
(72, 3, 48, 'Rolls_Royce_Ghost.jpg', 'Rolls Royce Ghost', 15000, 1, 15000, 33),
(73, 3, 63, 'Lamborghini_Aventador_SVJ.jpg', 'Lamborghini Aventador SVJ', 19999, 1, 19999, 33);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(25, 'Ferarri'),
(26, 'Rolls Royce'),
(27, 'Lamborghini'),
(28, 'Mecsedec'),
(29, 'Mazda'),
(30, 'Mclaren'),
(31, 'Toyota'),
(32, 'Porsche'),
(33, 'Audi');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `img` varchar(255) DEFAULT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `view` int NOT NULL DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(42, 'Ferrari SF90 Wallpaper', 10000.00, 'Ferrari_SF90_Wallpaper.jpg', 'Ferrari SF90 Wallpaper', 0, 25),
(43, 'Mazda CX-3 1.5 AT', 1000.00, 'Mazda_CX-3_1.5_AT.jpg', 'Mazda CX-3 1.5 AT', 0, 29),
(44, 'Mclaren 720s Spider', 24000.00, 'Mclaren_720s_Spider.jpg', 'Mclaren 720s Spider', 0, 30),
(47, 'porsche panamera 2021', 11000.00, 'porsche_panamera_2021.jpg', 'porsche panamera 2021', 0, 32),
(48, 'Rolls Royce Ghost', 15000.00, 'Rolls_Royce_Ghost.jpg', 'Rolls Royce Ghost', 0, 26),
(49, 'Rolls Royce Phantom 2024', 19000.00, 'Rolls_Royce_Phantom_2024.jpg', 'Rolls Royce Phantom 2024', 0, 26),
(50, 'Toyota Supra MK4', 8888.00, 'Toyota_Supra_MK4.jpg', 'Toyota Supra MK4', 0, 31),
(51, 'Audi R8 Decennium', 13000.00, 'Audi_R8_Decennium.jpg', 'Audi R8 Decennium', 0, 33),
(63, 'Lamborghini Aventador SVJ', 19999.00, 'Lamborghini_Aventador_SVJ.jpg', 'Lamborghini Aventador SVJ', 0, 27);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(3, 'cuan1210', '123456', 'hongquanabc02@gmail.com', 'di trạch hoài đức hà nội ', '0354549423', 1),
(7, 'cuan12101', '11111111', 'cuancuan@gmail.com', NULL, NULL, 1),
(9, 'nguyen hong quan', '1234567890', 'ssssss@gmail.com', 'di trạch hoài đức hà nội', '0354549423', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_user` (`iduser`),
  ADD KEY `fk_cart_pro` (`idpro`),
  ADD KEY `fk_cart_bill` (`ibbill`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_bill` FOREIGN KEY (`ibbill`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cart_pro` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
