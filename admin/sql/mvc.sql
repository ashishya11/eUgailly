-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2018 at 04:21 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_img` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_on` datetime NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1-Active,0-InActive',
  `delete_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '1-Deleted,0-NotDeleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `brand_img`, `created_by`, `created_on`, `modified_by`, `modified_on`, `status`, `delete_status`) VALUES
(1, 'addidas', '1538735986.jpeg', 1, '2018-10-05 16:09:45', 1, '2018-10-05 16:09:45', '1', '0'),
(2, 'nike', '1538735993.jpg', 1, '2018-10-05 16:09:52', 1, '2018-10-05 16:09:52', '1', '0'),
(3, 'hotWheels', '1538736002.jpg', 1, '2018-10-05 16:10:02', 1, '2018-10-05 16:10:02', '1', '0'),
(4, 'samsung', '1538736015.jpeg', 1, '2018-10-05 16:10:15', 1, '2018-10-05 16:10:15', '1', '0'),
(5, 'apple', '1538736027.png', 1, '2018-10-05 16:10:27', 1, '2018-10-05 16:10:27', '1', '0'),
(6, 'parker', '1538736239.jpg', 1, '2018-10-05 16:13:58', 1, '2018-10-05 16:13:58', '1', '0'),
(7, 'classMate', '1538736311.jpg', 1, '2018-10-05 16:15:10', 1, '2018-10-05 16:15:10', '1', '0'),
(8, 'Sony', '1538736376.jpg', 1, '2018-10-05 16:16:15', 1, '2018-10-05 16:16:15', '1', '0'),
(9, 'Mercedes', '1538736462.jpg', 1, '2018-10-05 16:17:41', 1, '2018-10-05 16:17:41', '1', '0'),
(10, 'BMW', '1538736476.jpg', 1, '2018-10-05 16:17:56', 1, '2018-10-05 16:17:56', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1' COMMENT '1-Active,0-InActive',
  `delete_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1-Deleted,0-NotDeleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_on`, `created_by`, `modified_on`, `modified_by`, `status`, `delete_status`) VALUES
(1, 'Stationary', '2018-10-05 15:19:18', 1, '2018-10-05 15:22:48', 2, '1', '0'),
(2, 'electronics', '2018-10-05 15:19:36', 1, '2018-10-05 15:22:44', 2, '1', '0'),
(3, 'Vehicles', '2018-10-05 15:19:46', 1, '2018-10-05 15:22:39', 2, '1', '0'),
(4, 'Furniture', '2018-10-05 15:21:06', 1, '2018-10-05 15:22:50', 2, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1' COMMENT '1-Active,0-InActive',
  `delete_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1-Deleted,0-NotDeleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `modified_on` datetime NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1-Active,0-InActive',
  `delete_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '1-Deleted,0-NotDeleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `sub_category_name`, `created_by`, `created_on`, `modified_by`, `modified_on`, `status`, `delete_status`) VALUES
(1, 1, 'book', 1, '2018-10-05 15:24:50', 1, '2018-10-05 15:24:50', '1', '0'),
(2, 1, 'pen', 1, '2018-10-05 15:24:58', 1, '2018-10-05 15:24:58', '1', '0'),
(3, 1, 'Notebook', 1, '2018-10-05 15:25:09', 1, '2018-10-05 15:25:09', '1', '0'),
(4, 2, 'appliances', 1, '2018-10-05 15:25:55', 1, '2018-10-05 15:25:55', '1', '0'),
(5, 2, 'Mobiles', 1, '2018-10-05 15:26:10', 1, '2018-10-05 15:26:10', '1', '0'),
(6, 2, 'laptops', 1, '2018-10-05 15:26:24', 1, '2018-10-05 15:26:24', '1', '0'),
(7, 3, 'toys', 1, '2018-10-05 15:27:04', 1, '2018-10-05 15:27:03', '1', '0'),
(8, 3, '4 Wheeler', 1, '2018-10-05 15:27:21', 2, '2018-10-05 15:31:05', '1', '0'),
(9, 3, '2 Wheeler', 1, '2018-10-05 15:27:30', 2, '2018-10-05 15:31:12', '1', '0'),
(10, 3, 'Sedan', 1, '2018-10-05 15:27:37', 2, '2018-10-05 15:31:17', '1', '0'),
(11, 3, 'Micro', 1, '2018-10-05 15:27:48', 2, '2018-10-05 15:31:21', '1', '0'),
(12, 4, 'Table', 1, '2018-10-05 15:31:43', 1, '2018-10-05 15:31:43', '1', '0'),
(13, 4, 'Bed', 1, '2018-10-05 15:31:51', 1, '2018-10-05 15:31:51', '1', '0'),
(14, 4, 'Dinnig table', 1, '2018-10-05 15:32:07', 1, '2018-10-05 15:32:07', '1', '0'),
(15, 4, 'Sofa_set', 1, '2018-10-05 15:32:27', 1, '2018-10-05 15:32:27', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `passcode`) VALUES
(1, 'Ashish Kumar Singh', 'ashishk@qexon.com', 'Ashishya@11'),
(2, 'Testo Test', 'hi.testotest11@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
