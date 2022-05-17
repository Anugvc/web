-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2021 at 11:45 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `userid` int NOT NULL,
  `product_id` int NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `userid`, `product_id`, `created`) VALUES
(1, 1, 1, '2021-07-02 17:32:56'),
(2, 1, 1, '2021-07-02 18:06:00'),
(3, 1, 1, '2021-07-02 18:17:42'),
(4, 13, 1, '2021-07-02 18:40:28'),
(5, 13, 2, '2021-07-02 18:40:31'),
(6, 4, 1, '2021-07-04 13:43:36'),
(7, 4, 1, '2021-07-04 13:43:41'),
(8, 4, 1, '2021-07-04 13:43:42'),
(9, 4, 2, '2021-07-04 13:44:28'),
(10, 1, 1, '2021-07-04 22:46:23'),
(11, 13, 3, '2021-07-04 22:53:40'),
(12, 13, 2, '2021-07-04 23:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `productTable`
--

CREATE TABLE `productTable` (
  `product_id` int NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productTable`
--

INSERT INTO `productTable` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `created`) VALUES
(1, 'anu', 123, 'anu', './60deedc67e8db2.13247971.png', '2021-07-02 16:13:18'),
(2, 'watch', 18900, 'its a watch', './60df0de1056979.96999936.jpeg', '2021-07-02 18:30:17'),
(3, 'phone', 20000, 'its a phone', './60e1ee742c3580.23568139.png', '2021-07-04 22:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_password` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `user_password`, `created`) VALUES
(1, 'aaa', 'anu@gmail.com', 'abc123', '2021-07-02 12:09:56'),
(4, 'aa', 'anu123@gmail.com', 'abc123', '2021-07-02 12:23:47'),
(5, 'anu', 'anugrahvc@gmail.com', 'abc123', '2021-07-02 12:25:46'),
(6, 'abc', 'abc@123.com', 'abc123', '2021-07-02 13:09:21'),
(13, 'anu123', 'abc123@gmail.com', 'abc123', '2021-07-02 18:39:54'),
(20, 'anu', 'aa@123', '', '2021-07-04 13:41:40'),
(21, 'aa@13', 'aaa22222@123.com', '', '2021-07-04 13:42:51'),
(22, 'aa', 'aaaa@123', '', '2021-07-04 18:11:59'),
(23, '', 'aaaa@123', '', '2021-07-04 18:12:17'),
(24, '', 'anu@gmail.com', 'abc123', '2021-07-04 21:20:32'),
(25, 'admin', 'abc@abc.abc', 'abc123', '2021-07-04 22:42:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `productTable`
--
ALTER TABLE `productTable`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `productTable`
--
ALTER TABLE `productTable`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
