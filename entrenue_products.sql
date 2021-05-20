-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2021 at 09:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greencloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `entrenue_products`
--

CREATE TABLE `entrenue_products` (
  `id` int(11) NOT NULL,
  `SKU` varchar(50) NOT NULL,
  `model` varchar(250) DEFAULT NULL,
  `upc` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `secondary_title` varchar(250) DEFAULT NULL,
  `option_name` varchar(250) DEFAULT NULL,
  `description` longtext,
  `tags` text,
  `categories` text,
  `category_ids` varchar(250) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `manufacturer` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `saleprice` varchar(250) DEFAULT NULL,
  `msrp` varchar(250) DEFAULT NULL,
  `map` varchar(250) DEFAULT NULL,
  `weight` varchar(250) DEFAULT NULL,
  `package_weight_lbs` varchar(250) DEFAULT NULL,
  `packaging_type` varchar(250) DEFAULT NULL,
  `case_quantity` varchar(250) DEFAULT NULL,
  `shipping_restrictions` varchar(250) DEFAULT NULL,
  `length` varchar(250) DEFAULT NULL,
  `width` varchar(250) DEFAULT NULL,
  `height` varchar(250) DEFAULT NULL,
  `depth` varchar(250) DEFAULT NULL,
  `diameter` varchar(250) DEFAULT NULL,
  `volume` varchar(250) DEFAULT NULL,
  `materials` varchar(250) DEFAULT NULL,
  `insertable_length` varchar(250) DEFAULT NULL,
  `country_of_origin` varchar(250) DEFAULT NULL,
  `designed_in` varchar(250) DEFAULT NULL,
  `batteries` varchar(250) DEFAULT NULL,
  `power_source` varchar(250) DEFAULT NULL,
  `water_resistance` varchar(250) DEFAULT NULL,
  `author` varchar(250) DEFAULT NULL,
  `pages` varchar(250) DEFAULT NULL,
  `runtime` varchar(250) DEFAULT NULL,
  `game_type` varchar(250) DEFAULT NULL,
  `game_genre` varchar(250) DEFAULT NULL,
  `isbn` varchar(250) DEFAULT NULL,
  `book_binding` varchar(250) DEFAULT NULL,
  `penalized` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entrenue_products`
--
ALTER TABLE `entrenue_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constraint_name` (`model`),
  ADD UNIQUE KEY `entrenue_products_model` (`model`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entrenue_products`
--
ALTER TABLE `entrenue_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
