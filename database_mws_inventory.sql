-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2021 at 08:33 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

use `greencloud`;
--
-- Database: `greencloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `mws_inventory`
--

DROP TABLE IF EXISTS `mws_inventory`;
CREATE TABLE `mws_inventory` (
  `id` int(11) NOT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `asin` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) DEFAULT NULL,
  `tier_id` int(11) DEFAULT NULL,
  `min_price` decimal(8,2) DEFAULT '0.00',
  `competitor` decimal(8,2) NOT NULL DEFAULT '0.00',
  `earnings` float NOT NULL DEFAULT '0',
  `MarketplaceId` text NOT NULL,
  `Title` text NOT NULL,
  `NumberOfPages` int(11) NOT NULL DEFAULT '0',
  `image` text NOT NULL,
  `provider` text NOT NULL,
  `entrenue_product_id` int(11) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `fee_estimate` decimal(8,0) NOT NULL DEFAULT '0',
  `item_offer` decimal(8,2) NOT NULL DEFAULT '0.00',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mws_inventory`
--
ALTER TABLE `mws_inventory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asin` (`asin`),
  ADD KEY `entrenue_products_id` (`entrenue_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mws_inventory`
--
ALTER TABLE `mws_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mws_inventory`
--
ALTER TABLE `mws_inventory`
  ADD CONSTRAINT `mws_inventory_ibfk_1` FOREIGN KEY (`entrenue_product_id`) REFERENCES `entrenue_products` (`id`);
COMMIT;
