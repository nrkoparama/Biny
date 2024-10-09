-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 10:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandID`, `name`) VALUES
(1, 'Teelab');

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `cartitemID` int(9) NOT NULL,
  `quantity` int(9) NOT NULL,
  `userID` int(9) NOT NULL,
  `productID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`) VALUES
(1, 'Áo thun'),
(2, 'Áo khoác');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(9) NOT NULL,
  `description` text NOT NULL,
  `commentDate` datetime NOT NULL,
  `productID` int(9) NOT NULL,
  `userID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderdetailID` int(9) NOT NULL,
  `price` double(10,0) NOT NULL,
  `quantity` int(9) NOT NULL,
  `orderID` int(9) NOT NULL,
  `productID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(9) NOT NULL,
  `orderDate` datetime NOT NULL,
  `totalPrice` double(10,0) NOT NULL,
  `paymentGetway` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `userID` int(9) NOT NULL,
  `voucherID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` int(9) NOT NULL,
  `img` varchar(255) NOT NULL,
  `dateAdd` datetime NOT NULL,
  `dateUpdate` datetime NOT NULL,
  `description` text NOT NULL,
  `categoryID` int(5) NOT NULL,
  `brandID` int(5) NOT NULL,
  `noibat` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `name`, `price`, `stock`, `img`, `dateAdd`, `dateUpdate`, `description`, `categoryID`, `brandID`, `noibat`) VALUES
(1, 'Áo thun 1', 120000, 10, 'sp1.webp', '2024-03-28 18:51:29', '2024-03-28 18:51:29', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 1, 1, 0),
(2, 'Áo thun 2', 120000, 10, 'sp2.webp', '2024-03-28 18:51:29', '2024-03-28 18:51:29', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 1, 1, 0),
(3, 'Áo thun 3', 100000, 10, 'sp3.webp', '2024-03-28 18:51:29', '2024-03-28 18:51:29', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 1, 1, 1),
(4, 'Áo thun 4', 100000, 10, 'sp4.webp', '2024-03-28 18:51:29', '2024-03-28 18:51:29', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 1, 1, 0),
(5, 'Áo thun 5', 100000, 10, 'sp5.webp', '2024-03-28 18:51:29', '2024-03-28 18:51:29', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 1, 1, 0),
(6, 'Áo khoác 1', 210000, 10, 'sp6.webp', '2024-03-28 18:51:29', '2024-03-28 18:51:29', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 2, 1, 1),
(7, 'Áo khoác 2', 199000, 10, 'sp7.webp', '2024-03-28 18:51:29', '2024-03-28 18:51:29', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 2, 1, 1),
(8, 'Áo thun 6', 109000, 10, 'sp8.webp', '2024-03-28 18:51:29', '2024-03-28 18:51:29', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 1, 1, 1),
(11, 'Áo thun 9', 100000, 10, 'sp9.webp', '2024-04-09 23:44:32', '2024-04-09 23:44:32', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 1, 1, 0),
(12, 'Áo khoác 10', 100000, 10, 'sp10.webp', '2024-04-09 23:44:32', '2024-04-09 23:44:32', 'Hướng dẫn sử dụng sản phẩm Teelab: - Ngâm áo vào NƯỚC LẠNH có pha giấm hoặc phèn chua từ trong 2 tiếng đồng hồ - Giặt ở nhiệt độ bình thường, với đồ có màu tương tự. - Không dùng hóa chất tẩy. - Hạn chế sử dụng máy sấy và ủi (nếu có) thì ở nhiệt độ thích hợp.  Chính sách bảo hành: - Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng. - Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 2, 1, 0),
(13, 'Áo thun 11', 100000, 10, 'sp11.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 1, 1, 0),
(14, 'Áo thun 12', 100000, 10, 'sp12.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 1, 1, 0),
(15, 'Áo thun 13', 120000, 10, 'sp13.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 1, 1, 0),
(16, 'Áo thun 14', 120000, 10, 'sp14.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 1, 1, 0),
(17, 'Áo thun 15', 100000, 10, 'sp15.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 1, 1, 0),
(18, 'Áo thun 16', 120000, 10, 'sp16.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 1, 1, 0),
(19, 'Áo thun 17', 100000, 10, 'sp17.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 1, 1, 0),
(20, 'Áo khoác 18', 210000, 10, 'sp18.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 2, 1, 0),
(21, 'Áo khoác 19', 210000, 10, 'sp19.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 2, 1, 0),
(22, 'Áo khoác 20', 210000, 10, 'sp20.webp', '2024-04-09 23:56:01', '2024-04-09 23:56:01', '', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(9) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dateAdd` datetime NOT NULL,
  `role` varchar(10) NOT NULL,
  `phone` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `userPassword`, `email`, `address`, `dateAdd`, `role`, `phone`) VALUES
(1, 'dat', '1', 'sakurass1223@gmail.com', '', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `voucherID` int(3) NOT NULL,
  `code` varchar(12) NOT NULL,
  `salePercent` int(2) NOT NULL,
  `quantity` int(9) NOT NULL,
  `dateExpired` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`cartitemID`),
  ADD KEY `FK_cartitem_users` (`userID`),
  ADD KEY `FK_cartitem_product` (`productID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `FK_comment_product` (`productID`),
  ADD KEY `FK_comment_users` (`userID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderdetailID`),
  ADD KEY `FK_orderdetail_orders` (`orderID`),
  ADD KEY `FK_orderdetail_product` (`productID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_orders_users` (`userID`),
  ADD KEY `FK_orders_voucher` (`voucherID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `FK_product_category` (`categoryID`),
  ADD KEY `fk_product_brand` (`brandID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`voucherID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `cartitemID` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderdetailID` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `voucherID` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `FK_cartitem_product` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cartitem_users` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_comment_product` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_comment_users` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `FK_orderdetail_orders` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orderdetail_product` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orders_voucher` FOREIGN KEY (`voucherID`) REFERENCES `voucher` (`voucherID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_category` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`brandID`) REFERENCES `brand` (`brandID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
