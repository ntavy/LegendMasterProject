-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2020 at 06:06 AM
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
(1, '992 South Rd', 'Edwardstown', 5039, 'Adelaide', 'SA', 'Australia', '(08) 8277 9744', 0),
(2, '75 Crown Street', 'East Sydney', 2011, 'Sydney', 'NSW', 'Australia', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandID` int(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandID`, `name`, `description`) VALUES
(1, 'Moccona', 'The heritage behind Moccona was born half a world away in the quaint Netherlands’ village of Joure in 1753. Originally sold in delicatessens and small specialty stores, it symbolised the little indulgence from Europe that added to the pleasures of everyday.\r\n'),
(4, 'Bay Beans', 'Bay Beans coffee brand'),
(5, 'Vittoria Coffee', 'Vittoria Coffee brand'),
(6, 'Jaques Coffee', 'Jaques Coffee Brand');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

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
(28, 'Moccona Freeze Dried Instant Coffee', 'The perfect coffee to enjoy every day.\r\n\r\nThe heritage behind Moccona was born half a world away in the quaint Netherlands’ village of Joure in 1753. Originally sold in delicatessens and small specialty stores, it symbolised the little indulgence from Europe that added to the pleasures of everyday.\r\n\r\nKnown for its premium taste and elegant glass jar, Moccona has become a much-loved classic in homes all over Australia.\r\n\r\nMoccona blends are created by bringing together the world’s finest beans: Arabica and the Robusta. The Arabica has a softer sweeter taste with berry and fruit tones while the Robusta bean has a deep rich flavour.\r\n\r\nTogether they bring the magical blend and character you expect from the perfect cup of coffee. Every time you smell the aroma of Moccona, you’ll be reminded of the great passion that drives us to create moments of pure indulgence - just for you.\r\n\r\nExperience the smooth taste of Moccona Classic Medium Roast. Its full-bodied flavour and rich aroma make it the perfect coffee to enjoy everyday.\r\n\r\nAt Moccona we care about coffee, the people who grow it and the planet it comes from.\r\n\r\nWorking together with our preferred partners like UTZ Certified, we help farmers prosper and help to preserve the environment.', 1, 1, 200, 200, 'tea', 10, 16, '100', 'moccona-hazelnut.jpeg', '2020-08-30', '2020-08-30'),
(29, 'dfdfd', 'ddd', 1, 1, 200, 200, 'tea', 10, 15, '500g', 'aurora.jpeg', '2020-08-30', '2020-08-30'),
(30, 'Jaques 250g Medium Roast - Whole Beans', 'Our medium roast coffee is suited to you if you love a simple plunger, pour over or drip filter coffee', 6, 2, 50, 50, 'coffee', 5, 11, '250g', '250MRBN-FRONT_cbd927a5-f255-41aa-b7d2-0acb8020ed2f_900x.jpg', '2020-09-01', '2020-09-01'),
(31, 'Bay Bean Expresso', 'Bay Bean Expresso red, blue, yellow, white', 4, 1, 40, 40, 'coffee', 10, 16, '500g', '2597523_orig.jpg', '2020-09-01', '2020-09-01'),
(32, 'ESPRESSO COFFEE BEANS', 'ESPRESSO COFFEE BEANS 1KG (LIMITED TIME)', 5, 1, 20, 20, 'coffee', 15, 31, '1kg', 'vittoria-coffee-espresso-special-bar_1.jpg', '2020-09-01', '2020-09-01'),
(33, 'ORO (GOLD) COFFEE BEANS', 'Until now, Brazil Rex has remained exclusive to on premise venues such as leading cafes, restaurants and hotels.', 5, 2, 50, 50, 'coffee', 10, 16, '1kg', 'vittoria_coffee_oro_1.jpg', '2020-09-01', '2020-09-01'),
(34, '  ORGANIC COFFEE BEANS', 'ORGANIC COFFEE BEANS 1KG (LIMITED TIME)', 5, 2, 40, 40, 'coffee', 20, 31, '1kg', 'vittoria_coffee_organic_special_bar_1.jpg', '2020-09-01', '2020-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

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
(1, 'Cole', 1, '2020-08-25'),
(2, 'Woolworths', 2, '2020-09-01');

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
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proCode` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
