-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 02:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategory`
--

CREATE TABLE `addcategory` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `thumbnail` longtext NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addprice`
--

CREATE TABLE `addprice` (
  `id` int(10) NOT NULL,
  `product` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `MRP` bigint(10) NOT NULL,
  `price` bigint(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addprice`
--

INSERT INTO `addprice` (`id`, `product`, `website`, `MRP`, `price`, `status`, `created_at`) VALUES
(1, 'Shoes', 'flipkart', 0, 0, 'Active', '2022-09-03 09:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `adminvieworder`
--

CREATE TABLE `adminvieworder` (
  `id` int(5) NOT NULL,
  `product` varchar(200) NOT NULL,
  `quantity` bigint(10) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `OID` bigint(10) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_form`
--

CREATE TABLE `admin_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_form`
--

INSERT INTO `admin_form` (`id`, `name`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'jaspreet ', 'jasskaur@gmail.com', '202cb962ac59075b964b07152d234b70', 'Active', '2022-08-20 17:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `bookingform`
--

CREATE TABLE `bookingform` (
  `id` int(5) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` longtext NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` bigint(15) NOT NULL,
  `quantity` bigint(15) NOT NULL,
  `order_id` bigint(10) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `MRP` bigint(20) NOT NULL,
  `description` longtext NOT NULL,
  `quantity` bigint(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `category`, `thumbnail`, `website`, `price`, `MRP`, `description`, `quantity`, `status`, `created_at`) VALUES
(8, 'Shoes', 'footwear', 'wsdo', '', 0, 0, 'ksndaiusug', 4, 'Active', '2022-09-03 08:48:52'),
(10, 'Shoes', 'footwear', '777', 'urbanic@gmail.com', 566, 600, '', 1, 'Active', '2022-09-08 17:52:55'),
(11, 'Shoes', 'footwear', '777', 'urbanic@gmail.com', 566, 600, 'lscsdcjs', 1, 'Active', '2022-09-08 17:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `username`, `email`, `password`, `contact`, `address`, `status`, `created_at`) VALUES
(1, 'himanshu', 'himanshu12@gmail.com', '123', 9876954187, 'sdmfjdgvyfgdygvrh', 'Active', '2022-09-09 05:34:37'),
(3, 'diksha', 'diksha@gmail.com', '123', 7894561234, 'nzxchuxgc', 'Active', '2022-09-09 12:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(5) NOT NULL,
  `website_name` varchar(200) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website_name`, `logo`, `status`, `created_at`) VALUES
(9, 'street style store1', '4497', 'Active', '2022-09-07 03:26:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcategory`
--
ALTER TABLE `addcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addprice`
--
ALTER TABLE `addprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminvieworder`
--
ALTER TABLE `adminvieworder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_form`
--
ALTER TABLE `admin_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bookingform`
--
ALTER TABLE `bookingform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcategory`
--
ALTER TABLE `addcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addprice`
--
ALTER TABLE `addprice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminvieworder`
--
ALTER TABLE `adminvieworder`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_form`
--
ALTER TABLE `admin_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookingform`
--
ALTER TABLE `bookingform`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
