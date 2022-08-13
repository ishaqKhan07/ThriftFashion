-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 09:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'test', '1660238661.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'test', '1660238677.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'khan', '1660238804.jpg', '2022-08-11 17:26:44', '2022-08-11 17:26:44'),
(0, 'wdqd', '1660253985.png', '2022-08-11 21:39:45', '2022-08-11 21:39:45'),
(0, 'wdqd', '1660253990.png', '2022-08-11 21:39:50', '2022-08-11 21:39:50'),
(0, 'ishaq', '1660255061.png', '2022-08-11 21:57:41', '2022-08-11 21:57:41'),
(0, 'rwer', '1660255205.png', '2022-08-11 22:00:05', '2022-08-11 22:00:05'),
(0, 'rwer', '1660255211.png', '2022-08-11 22:00:11', '2022-08-11 22:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'mansoor', 'mansooor9869@gmail.com', 'login problem', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, 'mansoor', '', '', ''),
(15, 'mansoor', '', '', ''),
(16, 'hsldghlaw', 'sdjfhjsdkhgl', '', ''),
(17, 'hsldghlaw', 'sdjfhjsdkhgl', '', ''),
(18, 'hsldghlaw', 'sdjfhjsdkhgl', '', ''),
(19, 'hsldghlaw', 'sdjfhjsdkhgl', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_setting`
--

CREATE TABLE `contact_setting` (
  `id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `support_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_setting`
--

INSERT INTO `contact_setting` (`id`, `address`, `phone`, `support_mail`) VALUES
(1, '627 Wakehurst Drive West Haven, CT 0651', 233424234, 'thrift.support@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `username`, `feedback`, `created_at`) VALUES
(12, 'wqdwqd', 'qwdqwd', '2022-08-11 20:51:02'),
(1231, 'qwdwqd', 'wqdwqd', '2022-08-11 20:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'nim9869@gmail.com'),
(2, 'ishaqkhan0023@gmail.com'),
(3, 'thrift.support@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `brand_id` int(11) NOT NULL,
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

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `description`, `image`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Ishaq', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies mi felis, vitae convallis neque pulvinar eget. Quisque sodales augue et purus iaculis, ac dictum massa mattis. Curabitur ut condimentum turpis. Aenean vulputate tincidunt mauris, non volutpat dui suscipit sed. Proin aliquam orci vitae pulvinar consectetur. Vi', '1660373492.jpg', 45, 16, '2022-08-13 06:51:34', '2022-08-13 06:51:34'),
(2, 0, 0, 'abcd', 'qwertyu', '1660374864.jpg', 123, 21, '2022-08-13 07:14:24', '2022-08-13 07:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(145) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'shirt', '2022-08-13 06:49:54', '2022-08-13 06:49:54'),
(2, 'paint', '2022-08-13 06:50:02', '2022-08-13 06:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `quick_links`
--

CREATE TABLE `quick_links` (
  `id` int(11) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `pinterest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quick_links`
--

INSERT INTO `quick_links` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `pinterest`) VALUES
(1, 'www.facebook.comm', 'www.twitter.com', 'www.instagram.com', 'www.linkedin.com', 'www.pinterest.com');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact_no` int(23) NOT NULL,
  `email` text NOT NULL,
  `image` varchar(500) NOT NULL DEFAULT 'images/user.png',
  `password` text NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `contact_no`, `email`, `image`, `password`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'ishaq khan', 2147483647, 'admin@admin.com', '', '$2y$10$N3XbJl.Y4skhQohNhBxineNv2BhmYZuCekN.TnvubnhCchfh61bym', ' Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', 1, '2022-08-12 09:40:39', '2022-08-12 09:40:39'),
(2, 0, 'Sufyan SHah', 2147483647, 'ishaqkhan00023@gmail.com', 'images/users/vlcsnap-2022-06-26-04h06m48s608.png', '$2y$10$5Vf32220aQocqZu0aPMIveb/TaxXkwtQRs1Rvv7MZtpb4AQ2Iy6FG', ' Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', 1, '2022-08-12 11:47:30', '2022-08-12 11:47:30'),
(3, 0, 'qwerty', 2147483647, 'sufyanshahyousufzai@gmail.com', 'images/users/images.jpg', '$2y$10$jhitRaiMxgy21f//awBWl.kePpAdn39JJ1RSZZLgDtzrTgUU602T6', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', 1, '2022-08-12 18:53:25', '2022-08-12 18:53:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_setting`
--
ALTER TABLE `contact_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_links`
--
ALTER TABLE `quick_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_setting`
--
ALTER TABLE `contact_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1232;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(145) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quick_links`
--
ALTER TABLE `quick_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
