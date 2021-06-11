-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 07:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(43, 'Golden watch', 67, 67, 7000, 'bag', 'upload/handz.jpg'),
(44, 'Grid Books', 19, 19, 2000, 'station', 'upload/station1.jpg'),
(45, 'Carets covers', 40, 40, 2000, 'station', 'upload/caret.png'),
(46, 'shapener', 10, 10, 200, 'station', 'upload/shap.jpg'),
(47, 'Pencils', 20, 20, 100, 'station', 'upload/pencil.png'),
(48, 'Color Ui', 10, 10, 300, 'station', 'upload/color.png'),
(49, 'Counter pack', 10, 10, 4000, 'station', 'upload/pack.png'),
(50, 'Mikasi', 30, 30, 400, 'station', 'upload/scisor.png'),
(51, 'Note pad', 50, 50, 3000, 'station', 'upload/note.png'),
(52, 'Curry Watch', 30, 30, 4000, 'bag', 'upload/watch.png'),
(53, 'Stock watch', 45, 45, 3000, 'bag', 'upload/stock.jpg'),
(54, 'Pety Watch', 12, 12, 4000, 'bag', 'upload/pety.webp'),
(55, 'Grant Watch', 20, 20, 4000, 'bag', 'upload/grant.png'),
(56, 'Smart Watch', 12, 12, 5000, 'bag', 'upload/smart.png'),
(57, 'Dort Mond B', 40, 40, 15000, 'jezi', 'upload/dot.jpg'),
(58, 'Brazil 2012', 30, 30, 16000, 'jezi', 'upload/braa.png'),
(59, 'Etihad Black', 10, 10, 18000, 'jezi', 'upload/eti.png'),
(60, 'backet vest', 4000, 4000, 12000, 'jezi', 'upload/vest.jpg'),
(61, 'Bacelona 2013', 30, 30, 14000, 'jezi', 'upload/brazil.jpg'),
(62, 'Qatar Baca', 50, 50, 13000, 'jezi', 'upload/qatar.jpg'),
(63, 'Brazil 2019', 12, 12, 4000, 'jezi', 'upload/brazzo.png'),
(64, 'Aresenal 2018', 11, 11, 15000, 'jezi', 'upload/asen.png'),
(65, 'Beach wagon', 12, 12, 3000, 'short', 'upload/12_copy_800x.webp'),
(66, 'Pullo Blue', 23, 23, 2000, 'short', 'upload/pullo.jpg'),
(67, 'Beach marina', 12, 12, 4000, 'short', 'upload/beach.png'),
(68, 'Bob Pens', 12, 12, 2500, 'short', 'upload/bob.png'),
(69, 'Red ganlin', 16, 16, 2400, 'short', 'upload/red.jpg'),
(70, 'White bahari', 14, 14, 3000, 'short', 'upload/bahari.jpg'),
(71, 'Grey Panama', 45, 45, 5000, 'short', 'upload/indexfdgfd.jpg'),
(72, 'jeans comba', 35, 35, 3400, 'short', 'upload/jean.jpg'),
(73, 'Hot pots', 45, 45, 15000, 'app', 'upload/pot.jpg'),
(74, 'Fly pana', 12, 12, 3000, 'app', 'upload/fly.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
