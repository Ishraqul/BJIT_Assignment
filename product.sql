-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 12:29 PM
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
(18, 92, '', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
