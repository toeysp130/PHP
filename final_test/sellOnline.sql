-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2021 at 11:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellOnline`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `productid` int(11) NOT NULL,
  `typeid` int(11) NOT NULL,
  `productName` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `costPrice` float NOT NULL,
  `SellPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`productid`, `typeid`, `productName`, `quantity`, `costPrice`, `SellPrice`) VALUES
(1001, 1001, 'APPLE', 5, 18700, 31900),
(1002, 1001, 'Sumsung', 4, 12000, 20000),
(1003, 1001, 'OPPO', 9, 7500, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `product_price`
--

CREATE TABLE `product_price` (
  `typeld` int(100) NOT NULL,
  `TypeName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id_type`, `name_type`) VALUES
(1001, 'มือถือ พร้อมแพ็กเกจ'),
(1002, 'แท็บเล็ต'),
(1003, 'อุปกรณ์เสริม ซิม'),
(1004, 'SIM Card'),
(1005, 'สินค้าอุ่นใจ'),
(1006, 'อุปกรณ์ IOT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `typeid` (`typeid`);

--
-- Indexes for table `product_price`
--
ALTER TABLE `product_price`
  ADD PRIMARY KEY (`typeld`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `product_price`
--
ALTER TABLE `product_price`
  MODIFY `typeld` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2047;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
