-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 12:12 PM
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
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `ID` int(25) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ID`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(200) NOT NULL,
  `category` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `Description`) VALUES
(89, 'Watches', 'Lorem Ipsum'),
(90, 'Laptop', 'Lorem Ipsum'),
(91, 'Shoes', 'Lorem Ipsum'),
(92, 'Mobile', 'Lorem Ipsum'),
(93, 'Accessories', 'Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `ID` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `total` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`ID`, `name`, `product_name`, `quantity`, `total`) VALUES
(5, 'Ishraqul Islam', 'iPhone13 Pro & Swatch Destination NYC', '3', '1499.99'),
(7, 'Asif', 'MacBook Pro M1, Fossil, Samsung Galaxy S22', '6', '5099.96'),
(8, 'ishraqul98@gmail.com', 'Macbook & Timex', '2', '0.00'),
(9, 'abs@gmail.com', 'Samsung Galaxy S22, Penny Loafers', '1,1', '$949.99'),
(10, 'ishraqul98@gmail.com', 'Nike Air Force 1', '	1', '	100'),
(11, 'sd@gmail.com', 'Samsung Galaxy S22', '	2', '	1799.98'),
(12, 'ishraqul98@gmail.com', 'iPhone13 Pro', '2', '	1799.98'),
(13, 'ishraqul98@gmail.com', 'iPhone13 Pro', '2', '1799.98'),
(14, 'abs@gmail.com', 'Timex Weekender', '1', '200'),
(16, 'ishraqul98@gmail.com', 'Swatch Destination NYC', '1', '300'),
(17, 'ishraqul98@gmail.com', 'Fossil', '2', '300'),
(18, 'ishraqul98@gmail.com', 'Fossil', '	2', '300'),
(19, 'abs@gmail.com', 'Oxford Shoes', '1', '75'),
(20, 'abs@gmail.com', 'Adidas NMD', '2', '100'),
(21, 'abs@gmail.com', 'Adidas NMD', '3', '150'),
(22, 'riptide@gmail.com', 'iPhone13 Pro , MacBook Pro M1', '1 each', '2199.98'),
(23, 'riptide@gmail.com', 'iPhone13 Pro, Spigen Back Cover', '1, 2', '949.99'),
(24, 'ishraqul98@gmail.com', 'iPhone13 Pro', '6', '2149.98'),
(29, 'ishraqul98@gmail.com', 'MacBook Pro M1', '1', '2524.98'),
(30, 'ishraqul98@gmail.com', 'MacBook Pro M1', '1', '2524.98'),
(31, 'ishraqul98@gmail.com', 'MacBook Pro M1', '1', '2524.98'),
(32, 'ishraqul98@gmail.com', 'MacBook Pro M1', '1', '2524.98'),
(33, 'ishraqul98@gmail.com', 'MacBook Pro M1', '1', '2524.98');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(200) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `price`, `quantity`, `description`, `image`) VALUES
(7, 92, 'iPhone13 Pro', 899.99, 50, 'apple', ''),
(9, 92, 'Samsung Galaxy S22', 899.99, 50, 'Lorem Ipsum', ''),
(10, 92, 'One Plus 6T', 599, 10, 'Lorem Ipsum', ''),
(11, 89, 'Timex Weekender', 200, 10, 'Lorem Ipsum', ''),
(12, 89, 'Fossil ', 150, 22, 'Lorem Ipsum', ''),
(13, 89, 'Swatch Destination NYC', 300, 25, 'Lorem Ipsum', ''),
(14, 90, 'MacBook Pro M1', 1299.99, 50, 'Apple', ''),
(15, 91, 'Penny Loafers', 50, 8, 'Lorem Ipsum', ''),
(16, 91, 'Oxford Shoes', 75, 22, 'Lorem Ipsum', ''),
(17, 90, 'HP Pavillion', 550, 8, 'Lorem Ipsum', ''),
(20, 89, 'Fossil Chonograph', 180, 12, 'Lorem Ipsum', ''),
(21, 91, 'Nike Air Force 1', 100, 150, 'Lorem Ipsum', ''),
(26, 91, 'Adidas NMD', 50, 50, 'RUnning SHoe', ''),
(27, 90, 'Dell Inspiron 15', 350, 25, 'Lorem Ipsum', ''),
(28, 93, 'Spigen Back Cover', 25, 100, 'Lorem Ipsum', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(200) NOT NULL,
  `Full_Name` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Full_Name`, `Email`, `Password`) VALUES
(1, 'Ishraqul Islam', 'ishraqul98@gmail.com', '1234'),
(2, 'Asif Bin Saif', 'abs@gmail.com', '1246'),
(3, 'Shoumik Rahman', 'sd@gmail.com', '0909'),
(4, 'Shafiq Islam', 'riptide@gmail.com', '6969');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
