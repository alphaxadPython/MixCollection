-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 01:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `accountNo` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `deliveryLocation` varchar(100) NOT NULL,
  `paymentMean` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `cartegory` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `quantity`, `available`, `cost`, `cartegory`, `photo`) VALUES
(1, 'Jeans Girl', 20, 20, 20000, 'skirt', 'upload/unnamed.png'),
(2, 'Jeans Smart', 30, 30, 25000, 'skirt', 'upload/130-1301743_jeans-pants-blue-denim-cute-aesthetic-outfit-cute.png'),
(3, 'Jeans Blak', 20, 20, 1800, 'skirt', 'upload/900-9005540_mid-rise-skinny-jeans-black-jeans-women-png.jpg'),
(4, 'Jeans mark', 30, 30, 14000, 'skirt', 'upload/515-5157864_women-jeans-png-hd-background-portable-network-graphics.png'),
(5, 'Jeans Cuts', 40, 40, 30000, 'skirt', 'upload/f8ba5cc81747d4d6d22a00d7054e3627.jpg'),
(6, 'Black njumu', 40, 40, 15000, 'menshoo', 'upload/8-black-men-shoes-png-image.png'),
(7, 'Simple rubber', 50, 50, 30000, 'menshoo', 'upload/357-3577966_shoes-for-men-png-transparent-png.png'),
(8, 'Rubber Alena', 15, 15, 5000, 'menshoo', 'upload/809-8091487_men-shoes-clipart-picart-nike-sports-shoes-png.jpg'),
(9, 'Black Squizer', 17, 17, 4000, 'menshoo', 'upload/purepng.com-men-shoesmen-shoesfashiondesignestylehuman-footblackplain-1421526391388drlqa.png'),
(10, 'Runner Rubber', 78, 78, 4000, 'menshoo', 'upload/dance-shoes-png-transparent-dance-shoes-images-5.png'),
(11, 'Guchi Boot', 50, 50, 5000, 'menshoo', 'upload/earton-mens-blue-and-grey-casual-shoes-500x500.png'),
(12, 'American Boot', 50, 50, 15000, 'menshoo', 'upload/images.jpg'),
(13, 'Classic Rubber', 16, 16, 2000, 'menshoo', 'upload/adidas-shoe-sneakers-clip-art-png-favpng-bTCvBP7HS9PEzaHzzMWdjNn75_t.jpg'),
(14, 'Rug Bag', 18, 18, 20000, 'bag', 'upload/women_bag_PNG6427.png'),
(15, 'Classic Bag', 5, 5, 12000, 'bag', 'upload/91-916093_download-hand-luggage.png'),
(16, 'Journey bag', 29, 29, 30000, 'bag', 'upload/purepng.com-nike-lazer-bagbagbackpacksnike-lazer-bagtourist-bags-1421526271674pxn0o.png'),
(17, 'Quip Poch', 19, 19, 15500, 'bag', 'upload/poch.png'),
(18, 'Best Poch', 56, 56, 18000, 'bag', 'upload/bag-icon-33.png'),
(19, 'Hack Bag', 20, 20, 30000, 'bag', 'upload/imagesZcsc.jpg'),
(20, 'High Hilled', 15, 15, 10000, 'womenshooo', 'upload/high.jpg'),
(21, 'Sconco Shoes', 30, 30, 8000, 'womenshooo', 'upload/sconco.png'),
(22, 'Puma Pink', 20, 20, 15000, 'womenshooo', 'upload/imagessdsd.jpg'),
(23, 'Puma Blue', 10, 10, 20000, 'womenshooo', 'upload/puma.jpg'),
(24, 'Qute Pink', 20, 20, 20000, 'womenshooo', 'upload/2c1c5faa-247d-4f85-95c3-dc543e2496e1.jpg'),
(25, 'Best Match', 10, 10, 12000, 'womenshooo', 'upload/Best.jpg'),
(26, 'Hlls shoe', 20, 20, 12000, 'womenshooo', 'upload/hill.png'),
(27, 'Rubber kali', 30, 30, 10000, 'womenshooo', 'upload/Ruber.jpg'),
(28, 'Samsung S3', 10, 10, 200000, 'phone', 'upload/unnamedsad.png'),
(29, 'Samsung edge', 199, 199, 250000, 'phone', 'upload/sumsng.png'),
(30, 'Iphone 5', 20, 20, 280000, 'phone', 'upload/iphone.png'),
(31, 'Iphone 5 S', 30, 30, 295000, 'phone', 'upload/iphone-3g.jpg'),
(32, 'Infinix Smart 5', 40, 40, 250000, 'phone', 'upload/smart5.png'),
(33, 'Mac Screen', 20, 20, 300000, 'laptop', 'upload/apple.png'),
(34, 'Samsung Note', 30, 30, 400000, 'phone', 'upload/samsung.png'),
(35, 'Desktop Min', 40, 40, 350000, 'laptop', 'upload/desk.png'),
(36, 'Smart flat', 550, 550, 500000, 'Tv', 'upload/flat1.png'),
(37, 'Wireless desktop', 40, 40, 600000, 'laptop', 'upload/wireless.png'),
(38, 'Opo Min', 30, 30, 200000, 'phone', 'upload/opo.png'),
(39, 'Multi Color', 50, 50, 400000, 'Tv', 'upload/digital.jpg'),
(40, 'Smart Monitor', 30, 30, 250000, 'laptop', 'upload/monitor.png'),
(41, 'Guchi watch', 30, 30, 5000, 'bag', 'upload/hand.png'),
(42, 'Trouser Jeans', 80, 80, 18000, 'short', 'upload/pack.jpg'),
(43, 'Golden watch', 67, 67, 7000, 'bag', 'upload/handz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'alpha', 'alpha@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
