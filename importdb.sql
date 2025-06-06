-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2025 at 04:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inter`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`) VALUES
(1, 'car'),
(2, 'bike'),
(3, 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `catagoryid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `marketprice` int(11) NOT NULL,
  `descrip` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catagoryid`, `productname`, `price`, `marketprice`, `descrip`, `img`) VALUES
(1, 1, '2222', 2222, 22, '222', '1749210152_resize.png'),
(2, 1, '221', 222, 2222, '222', '1749210256_resize.png'),
(3, 1, '22', 22, 22222, '22', '1749210314_resize.png'),
(4, 1, '222', 22, 22, '22', '1749210496_profile.jpg'),
(5, 1, '222', 22, 22, '22', '1749210571_resize.png'),
(6, 3, '2321', 213, 231, '', '1749211030_loosu kutties.jpg'),
(7, 1, '22', 222, 22, '22', '1749211103_WhatsApp Image 2024-12-23 at 21.28.17_80d3b286 (1).jpg'),
(8, 1, 'a', 2, 2, '2', '1749211192_resize.png'),
(9, 2, 'bdshjabd', 22, 2, 'yahi', '1749211981_cr7.jpg'),
(10, 1, '2', 2, 22, '2', '1749217021_WhatsApp Image 2025-04-07 at 13.58.45_3ed9f62a.jpg'),
(11, 3, 'yahi', 2, 22, '2', '1749217167_profile.jpg'),
(12, 2, '3', 3, 3, '333', '1749217570_ty.png'),
(13, 2, 'aa', 22, 2, '2', '1749217783_Screenshot 2025-04-03 152713.png'),
(14, 1, 'adsa', 22, 222, 'yahiiii', '1749217902_WhatsApp Image 2025-04-07 at 13.58.45_3ed9f62a.jpg'),
(15, 1, '22', 22, 222, '22', '1749217943_Screenshot 2025-04-03 152713.png'),
(16, 1, '22', 22, 22, '22', '1749218018_tancet.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_catagory_id` (`catagoryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_catagory_id` FOREIGN KEY (`catagoryid`) REFERENCES `catagories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
