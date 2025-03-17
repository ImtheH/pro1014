-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2024 at 08:27 AM
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
-- Database: `web2014_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int NOT NULL,
  `user` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dienthoai` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user`, `pass`, `email`, `diachi`, `dienthoai`, `role`) VALUES
(1, 'hoang', 'hoang', 'hoangnvph49147@gmail.com', 'Hà Nội', '0123921273', 1),
(2, 'hoang21', 'haydjff', 'hoangnvph49147@fpt.edu.vn', 'gdhahaaa', '0922112345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int NOT NULL,
  `name_cat` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `name_cat`) VALUES
(1, 'Laptop'),
(2, 'Điện thoại'),
(3, 'Máy tính bảng');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_com` int NOT NULL,
  `detail_com` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_pro` int NOT NULL,
  `date_com` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_com`, `detail_com`, `user`, `id_pro`, `date_com`) VALUES
(4, 'anh', 'hoang', 4, '2024-08-04'),
(6, 'fd', 'hoang', 12, '2024-08-04'),
(7, 'es1', 'hoang', 12, '2024-08-04'),
(8, 'hi', 'hoang', 12, '2024-08-04'),
(9, 'Máy tính mans', 'hoang', 14, '2024-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pro` int NOT NULL,
  `img` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_pro` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `price_pro` int NOT NULL,
  `id_cat` int NOT NULL,
  `detail_pro` text COLLATE utf8mb4_general_ci NOT NULL,
  `view_pro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pro`, `img`, `name_pro`, `price_pro`, `id_cat`, `detail_pro`, `view_pro`) VALUES
(1, 'lenovo1.jpg', 'Lenovo Ideapad3 15ITL6 i3 1115G4', 10090000, 1, 'Chip M2 cho hiệu năng phi thường', 16),
(2, 'lenovo2.jpg', 'Lenovo Ideapad3 15IAU7 i3 1215U', 13190000, 1, 'CPU 8 lõi và GPU lên đến 10 lõi giúp dễ dàng xử lý các tác vụ phức tạp', 18),
(3, 'lenovo3.jpg', 'Lenovo Ideapad1 R7 5700U', 13490000, 1, 'Neural Engine 16 lõi cho các tác vụ sử dụng công nghệ máy học tiên tiến', 2),
(4, 'lenovo4.jpg', 'Lenovo Ideapad5 i5 1235U', 16990000, 1, 'Bộ nhớ thống nhất lên đến 24GB giúp bạn làm việc gì cũng nhanh chóng và trôi chảy', 30),
(5, 'asus1.jpg', 'Asus TUF Gaming F15 i5', 15990000, 1, 'Nhanh hơn đến 20% khi áp dụng bộ lọc và hiệu ứng cho hình ảnh', 0),
(6, 'asus2.jpg', 'Asus Vivobook 16 i5 1335U', 15990000, 1, 'Nhanh hơn đến 40% khi chỉnh sửa các dòng thời gian video phức tạp', 7),
(7, 'asus3.jpg', 'Asus TUF Gaming A15 R5 7535HS', 21990000, 1, 'Hoạt động bền bỉ cả ngày dài với thời lượng pin lên đến 18 giờ', 0),
(8, 'asus4.jpg', 'Asus Vivobook S 14 Flip i5 13500H', 19290000, 1, 'Thiết kế không quạt giảm tối đa tiếng ồn khi sử dụng', 2),
(9, 'ip15max.jpg', 'Iphone15 Pro Max', 30990000, 2, 'Màn hình OLED M12 siêu sắc nét', 0),
(10, 'ip15plus.jpg', 'Iphone15 Plus', 23690000, 2, 'Hệ điều hành iOS 16 bứt phá công nghệ', 0),
(11, 'ip13.jpg', 'Iphone13 128GB', 15290000, 2, 'Camera selfie góc rộng lưu giữ nhiều khoảnh khắc đáng nhớ', 0),
(12, 'ip11.jpg', 'Iphone11', 9990000, 2, 'Iphone11 đa dạng tính năng cải tiến', 13),
(13, 'ip12.jpg', 'Iphone12', 12090000, 2, 'Pin liền lithium-ion kết hợp cùng công nghệ sạc nhanh cải tiến', 0),
(14, 'ip14 promax.jpg', 'Iphone14 Pro Max', 27390000, 2, 'Thiết kế iPhone 14 Pro Max đột phá đầy ngoạn mục', 18),
(15, 'ip14.jpg', 'Iphone14', 17990000, 2, 'Camera sau cảm biến TOF sống động', 6),
(16, 'ip14plus.jpg', 'Iphone14 Plus', 20090000, 2, 'Cấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic', 1),
(17, 'mtb1.jpg', 'OPPO Pad Neo WiFi', 6490000, 3, 'Nâng cao trải nghiệm nghe – nhìn', 0),
(18, 'mtb2.jpg', 'Samsung Galaxy Tab A9+', 7490000, 3, 'Đáp ứng tốt nhu cầu chụp ảnh – quay phim', 0),
(19, 'mtb3.jpg', 'Honor Pad X9', 4590000, 3, 'Giữ nguyên thiết kế quen thuộc với kiểu dáng vuông vức, sang trọng', 0),
(20, 'mtb4.jpg', 'Samsung Galaxy Tab A9', 3490000, 3, 'Tương thích với phụ kiện tốt hơn', 1),
(21, 'mtb5.jpg', 'Ipad 9 WiFi', 7490000, 3, 'Sự xuất hiện của con chip M1 cực “đỉnh”', 0),
(22, 'mtb6.jpg', 'Ipad Air 5 M1 WiFi 64GB', 14590000, 3, 'Thiết kế tinh tế – dẫn đầu xu thế', 3),
(23, 'mtb7.jpg', 'Ipad 10 WiFi 64GB', 11090000, 3, 'Hiệu năng bứt phá mọi giới hạn', 0),
(24, 'mtb8.jpg', 'Lenovo Tab M10(Gen3)', 5290000, 3, 'Cổng kết nối Thunderbolt mạnh mẽ và đa năng', 1),
(29, 'Ảnh chụp màn hình 2024-07-25 015116.png', 'hoangnvph49147', 123333, 1, 'Máy tính 5112', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `comment_ibfk_1` (`id_pro`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_cat` (`id_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_com` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_pro`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
