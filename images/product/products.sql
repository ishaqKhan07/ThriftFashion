-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 03:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thrift_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `price` int(10) NOT NULL,
  `stock` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `brand`, `name`, `description`, `image`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(3, 'Women Shalwar Suit', 'Gul Ahmed', 'Malai Unstitched  V-4-1', 'Shirt: 1.75 Meter Dyed Trouser: 1.75 Meter', '1660392251.jpg', 1449, 50, '2022-08-13 12:04:11', '2022-08-13 12:04:11'),
(4, 'Women Shalwar Suit', 'Gul Ahmed', 'Malai Unstitched Premium 006', 'Shirt: 1.75 Meter\r\nDyed Trouser: 1.75 Meter', '1660392339.jpg', 1449, 25, '2022-08-13 12:05:39', '2022-08-13 12:05:39'),
(5, 'Women Shalwar Suit', 'Gul Ahmed', 'Malai Unstitched V-4-7', 'Shirt: 1.75 Meter Dyed Trouser: 1.75 Meter', '1660392382.jpg', 1449, 50, '2022-08-13 12:06:22', '2022-08-13 12:06:22'),
(6, 'Women Shalwar Suit', 'Gul Ahmed', 'Malai Unstitched V-4-8', 'Shirt: 1.75 Meter Dyed Trouser: 1.75 Meter', '1660392419.jpg', 1599, 1449, '2022-08-13 12:06:59', '2022-08-13 12:06:59'),
(7, 'Women Shalwar Suit', 'Gul Ahmed', 'Malai Unstitched V-4-10', 'Shirt: 1.75 Meter Dyed Trouser: 1.75 Meter', '1660392439.jpg', 1499, 52, '2022-08-13 12:07:19', '2022-08-13 12:07:19'),
(10, 'Women Pant', 'Puma', 'Womens Denim Pant - White', 'Fabric: Cotton', '1660393353.jpg', 200, 10, '2022-08-13 12:22:33', '2022-08-13 12:22:33'),
(11, 'Women Pant', 'Puma', 'Womens Denim Pant - Off White', 'Fabric: Cotton', '1660393608.jpg', 599, 99, '2022-08-13 12:26:48', '2022-08-13 12:26:48'),
(12, 'Women Pant', 'Puma', 'Womens Cotton Pant - Light Purple\n', 'Fabric: Cotton', '1660393635.jpg', 150, 50, '2022-08-13 12:27:15', '2022-08-13 12:27:15'),
(13, 'Women Pant', 'Puma', 'Womens Cotton Pant - Light Blue\n', 'Fabric: Cotton', '1660393666.jpg', 170, 90, '2022-08-13 12:27:46', '2022-08-13 12:27:46'),
(14, 'Women Pant', 'Puma', 'Womens Denim Pant - Blue', 'Fabric: Cotton', '1660393692.jpg', 150, 14, '2022-08-13 12:28:12', '2022-08-13 12:28:12'),
(15, 'Women Pant', 'Nike', 'ddws', 'Fabric: Cotton', '1660393927.jpg', 2, 2, '2022-08-13 12:32:07', '2022-08-13 12:32:07'),
(16, 'Women Watches', 'H & M', 'Womens Watch - Black', 'Barcode: A58864-C', '1660394064.jpg', 220, 50, '2022-08-13 12:34:24', '2022-08-13 12:34:24'),
(17, 'Women Watches', 'H & M', 'Womens Watch - Silver E', 'Barcode: A58864-F', '1660394119.jpg', 220, 50, '2022-08-13 12:35:19', '2022-08-13 12:35:19'),
(18, 'Women Watches', 'H & M', 'Womens Smart Watch - Purple', 'Barcode: 159624', '1660394177.jpg', 220, 20, '2022-08-13 12:36:17', '2022-08-13 12:36:17'),
(19, 'Women Watches', 'H & M', 'Womens Watch - Dark Brown-Pink', 'Barcode: 159624', '1660394254.jpg', 220, 25, '2022-08-13 12:37:34', '2022-08-13 12:37:34'),
(21, 'Women Watches', 'H & M', 'Womens Watch - Silver E', 'Barcode: A58864-F', '1660394449.jpg', 150, 50, '2022-08-13 12:40:49', '2022-08-13 12:40:49'),
(22, 'Men T-Shirt', 'Polo', 'Neck T-Shirt - Pink', 'Fabric: Jersey', '1660394784.png', 150, 50, '2022-08-13 12:46:24', '2022-08-13 12:46:24'),
(23, 'Men T-Shirt', 'Polo', 'Neck T-Shirt - Yellow', 'Fabric: Jersey', '1660394822.png', 150, 50, '2022-08-13 12:47:02', '2022-08-13 12:47:02'),
(24, 'Men T-Shirt', 'Polo', 'Neck T-Shirt - Black', 'Fabric: Jersey', '1660394861.png', 170, 140, '2022-08-13 12:47:41', '2022-08-13 12:47:41'),
(25, 'Men T-Shirt', 'Polo', 'Neck T-Shirt - Blue', 'Fabric: Jersey', '1660394912.png', 200, 50, '2022-08-13 12:48:32', '2022-08-13 12:48:32'),
(26, 'Men T-Shirt', 'Polo', 'Neck T-Shirt - Red', 'Fabric: Jersey', '1660394956.png', 150, 14, '2022-08-13 12:49:16', '2022-08-13 12:49:16'),
(27, 'Men Pants', 'Adidas', 'Denim Pant - Dark Blue', 'Fabric: Denim', '1660395174.png', 200, 50, '2022-08-13 12:52:54', '2022-08-13 12:52:54'),
(28, 'Men Pants', 'Adidas', 'Denim Pant - Light Blue', 'Fabric: Denim', '1660395207.png', 180, 50, '2022-08-13 12:53:27', '2022-08-13 12:53:27'),
(29, 'Men Pants', 'Adidas', 'Denim Pant - Black', 'Fabric: Denim', '1660395259.png', 150, 20, '2022-08-13 12:54:19', '2022-08-13 12:54:19'),
(30, 'Men Pants', 'Puma', 'Denim Pant 04 - Blue', 'Barcode: A7210601005', '1660395310.png', 250, 15, '2022-08-13 12:55:10', '2022-08-13 12:55:10'),
(31, 'Men Pants', 'Adidas', 'Basic Denim - Grey', 'Barcode: A7546709004', '1660395354.png', 250, 150, '2022-08-13 12:55:54', '2022-08-13 12:55:54'),
(32, 'Men Belt', 'Gucci', 'Belt - BLACK', 'Material: Artificial Leather', '1660395553.png', 250, 15, '2022-08-13 12:59:13', '2022-08-13 12:59:13'),
(33, 'Men Belt', 'Gucci', 'Belt - Brown', 'Material: Artificial Leather', '1660395597.png', 250, 25, '2022-08-13 12:59:57', '2022-08-13 12:59:57'),
(34, 'Men Belt', 'Gucci', 'Belt - Brown', 'Material: Artificial Leather', '1660395639.png', 450, 25, '2022-08-13 13:00:39', '2022-08-13 13:00:39'),
(35, 'Men Belt', 'Gucci', 'Belt - Mustard', 'Material: Artificial leather', '1660395679.png', 250, 20, '2022-08-13 13:01:19', '2022-08-13 13:01:19'),
(36, 'Men Belt', 'Gucci', 'Casual Belt - Black', 'Size: 44 Inch', '1660395717.png', 250, 25, '2022-08-13 13:01:58', '2022-08-13 13:01:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
