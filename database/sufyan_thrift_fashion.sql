-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 02:56 PM
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
  `id` int(45) NOT NULL,
  `user_id` int(45) NOT NULL,
  `username` text NOT NULL,
  `product_id` int(35) NOT NULL,
  `product_name` text NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `username`, `product_id`, `product_name`, `feedback`, `created_at`) VALUES
(1, 2, 'qwdwqd@abc.COM', 2, 'Mansoor Khan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus.', '2022-08-11 20:51:02'),
(2, 1, 'wqdwqd', 1, 'Sufyan Shah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus.', '2022-08-11 20:51:02'),
(4, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:53:35'),
(5, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:45'),
(6, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:45'),
(7, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(8, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(9, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(10, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(11, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(12, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(13, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(14, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(15, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(16, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(17, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(18, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(19, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(20, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(21, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(22, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(23, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(24, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(25, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(26, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:54:59'),
(27, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(28, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(29, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(30, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(31, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(32, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(33, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(34, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(35, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(36, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(37, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00'),
(38, 2, 'Shaheen', 3, 'Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in nulla libero. Duis maximus, ligula vitae lacinia volutpat, nisl odio posuere elit, vitae porta turpis tortor eget dui. Sed a tellus et dolor porttitor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer dapibus nisi risus. Donec in malesuada quam. Vivamus varius tristique blandit. Integer eu risus at augue dapibus pharetra. Donec malesuada non leo nec efficitur. Fusce maximus erat a turpis lobortis,', '2022-08-13 08:55:00');

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
  `username` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(120) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` text NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `username`, `product_id`, `product_name`, `brand_id`, `brand_name`, `qty`, `total_price`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'Delivered', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:22', '2022-08-13 11:06:22'),
(2, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'Delivered', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:47', '2022-08-13 11:06:47'),
(3, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'Dispatch', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:47', '2022-08-13 11:06:47'),
(4, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'Dispatch', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:47', '2022-08-13 11:06:47'),
(5, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:47', '2022-08-13 11:06:47'),
(6, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:47', '2022-08-13 11:06:47'),
(7, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:47', '2022-08-13 11:06:47'),
(8, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:47', '2022-08-13 11:06:47'),
(9, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:47', '2022-08-13 11:06:47'),
(10, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(11, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(12, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(13, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(14, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(15, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(16, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(17, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(18, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:06:48', '2022-08-13 11:06:48'),
(19, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:07:34', '2022-08-13 11:07:34'),
(20, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:07:34', '2022-08-13 11:07:34'),
(21, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:07:34', '2022-08-13 11:07:34'),
(22, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:07:35', '2022-08-13 11:07:35'),
(23, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:07:35', '2022-08-13 11:07:35'),
(24, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:07:35', '2022-08-13 11:07:35'),
(25, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:07:35', '2022-08-13 11:07:35'),
(26, 2, 'Sufyan Shah', 4, 'Lorem Ipsum', 1, 'Nike', 4, 1200, 'pending', 'Saima Trade Tower, B-115, 1st Floor، I.I Chundrigar Rd, Karachi, Karachi City, Sindh', '2022-08-13 11:07:35', '2022-08-13 11:07:35');

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

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(145) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'jeans', '2022-08-12 10:36:02', '2022-08-12 10:36:02'),
(6, 'e', '2022-08-12 11:13:05', '2022-08-12 11:13:05'),
(7, 'Sufyan Shah', '2022-08-13 12:10:42', '2022-08-13 12:10:42'),
(8, 'Mansoor', '2022-08-13 12:30:30', '2022-08-13 12:30:30');

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
  `email` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(145) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
