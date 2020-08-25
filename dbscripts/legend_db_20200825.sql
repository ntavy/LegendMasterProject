-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 25, 2020 at 03:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legend_db`
--
CREATE DATABASE IF NOT EXISTS `legend_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `legend_db`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `addressId` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `suburb` varchar(50) NOT NULL,
  `postCode` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `isShippingAdd` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addressId`, `street`, `suburb`, `postCode`, `city`, `state`, `country`, `phoneNumber`, `isShippingAdd`) VALUES
(1, '992 South Rd', 'Edwardstown', 5039, 'Adelaide', 'SA', 'Australia', '(08) 8277 9744', 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `brandID` int(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandID`, `name`, `description`) VALUES
(1, 'Moccona', 'The heritage behind Moccona was born half a world away in the quaint Netherlands’ village of Joure in 1753. Originally sold in delicatessens and small specialty stores, it symbolised the little indulgence from Europe that added to the pleasures of everyday.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `proCode` int(10) UNSIGNED NOT NULL,
  `proName` varchar(100) NOT NULL,
  `proDescription` text NOT NULL,
  `brandID` int(11) NOT NULL,
  `supplierCode` int(11) NOT NULL,
  `importedQuantity` int(11) NOT NULL,
  `remainQuantity` int(11) NOT NULL,
  `typeCode` varchar(10) NOT NULL,
  `purchasedPrice` int(11) NOT NULL,
  `salePrice` int(11) NOT NULL,
  `sizePerPack` varchar(20) NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `addedDate` date NOT NULL,
  `updatedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proCode`, `proName`, `proDescription`, `brandID`, `supplierCode`, `importedQuantity`, `remainQuantity`, `typeCode`, `purchasedPrice`, `salePrice`, `sizePerPack`, `imagePath`, `addedDate`, `updatedDate`) VALUES
(1, 'product name aa', 'dfdfd', 1, 1, 200, 200, 'tea', 10, 15, '100', '', '2020-08-25', '2020-08-25'),
(2, 'product name aa', 'dfdfd', 1, 1, 200, 200, 'tea', 10, 15, '100', '', '2020-08-25', '2020-08-25'),
(3, 'product name aa 555', 'ddfd', 1, 1, 200, 200, 'tea', 10, 15, '100', '', '2020-08-25', '2020-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `supplierCode` int(11) NOT NULL,
  `supplierName` varchar(100) NOT NULL,
  `addressId` int(11) NOT NULL,
  `addedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierCode`, `supplierName`, `addressId`, `addedDate`) VALUES
(1, 'Cole', 1, '2020-08-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressId`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proCode`),
  ADD KEY `FK_SupplierProduct` (`supplierCode`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierCode`),
  ADD KEY `FK_AddressSupplier` (`addressId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proCode` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_SupplierProduct` FOREIGN KEY (`supplierCode`) REFERENCES `supplier` (`supplierCode`);

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `FK_AddressSupplier` FOREIGN KEY (`addressId`) REFERENCES `address` (`addressId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
