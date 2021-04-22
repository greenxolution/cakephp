-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2021 at 07:49 AM
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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address1` varchar(250) NOT NULL,
  `address2` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `supplier_id` int(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address1`, `address2`, `city`, `zipcode`, `state`, `country`, `supplier_id`, `created`, `updated`) VALUES
(1, '3502 E. Atlanta', '', 'Phoenix', '85040', 'AZ', 'US', 1, '2016-01-16 09:30:03', '2016-01-16 09:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `sku` varchar(20) DEFAULT NULL,
  `product-name` varchar(250) DEFAULT NULL,
  `asin` varchar(20) DEFAULT NULL,
  `field-name` varchar(20) DEFAULT NULL,
  `alert-type` varchar(250) DEFAULT NULL,
  `current-value` varchar(20) DEFAULT NULL,
  `last-updated` varchar(20) DEFAULT NULL,
  `alert-name` varchar(250) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `explanation` varchar(500) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blacklist`
--

INSERT INTO `blacklist` (`sku`, `product-name`, `asin`, `field-name`, `alert-type`, `current-value`, `last-updated`, `alert-name`, `status`, `explanation`, `created`, `modified`) VALUES
('01L7QCXYUD', 'PET Gold Exam Maximiser', '0582824761', 'Product Description', 'Missing', '', '9/25/14 3:19:28 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('01UXL74KZD', 'Creative Confidence Airsid Tpb', '0007517971', 'Product Description', 'Missing', '', '9/25/14 4:40:59 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('02A1NC6G7Q', 'Party', '0141975555', 'Product Description', 'Missing', '', '9/25/14 3:10:01 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('03ILGXABM2', 'Paper Aeroplane', '0571310672', 'Product Description', 'Missing', '', '9/24/14 11:53:24 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('0BIA47F6T3', 'Picture Perfect', '1444754394', 'Product Description', 'Missing', '', '9/25/14 3:18:56 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('0I6SOEM5YQ', 'Books \"What to Do When The Shit Hits The Fan\" Book', '1602391335', 'Material Type', 'Missing', '', '9/25/14 1:41:07 AM P', 'Quality', 'Active', 'Material is important for helping customers find your product.', NULL, NULL),
('0IBSFR647G', 'Coming Home', '1472207122', 'Product Description', 'Missing', '', '9/25/14 2:44:50 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('0K81FHD9TW', 'Flight of the Stone Angel', '1472212975', 'Product Description', 'Missing', '', '9/25/14 4:30:48 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('0R892ZSE5D', 'A Sixpenny Song', '1472209230', 'Product Description', 'Missing', '', '9/25/14 3:06:11 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('0VI35C8AXU', 'Things We Never Say', '075537844X', 'Product Description', 'Missing', '', '9/25/14 5:16:19 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('1DVP9LMJXB', 'Storm (Memory Sorrow & Thorn 4)', '1841498424', 'Product Description', 'Missing', '', '9/24/14 10:46:56 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('1F32H64Q8A', 'Everyday: Schnell & einfach', '1445459701', 'Product Description', 'Missing', '', '9/25/14 4:03:27 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('1PTXY3NO8K', 'Exposure', '0099567253', 'Product Description', 'Missing', '', '9/25/14 12:41:48 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('1PXZ70NA8L', 'Pilgrims', '0747598258', 'Product Description', 'Missing', '', '9/25/14 3:36:09 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('24H0JL3WYC', 'Mistress', '1780890265', 'Product Description', 'Missing', '', '9/25/14 2:06:18 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('24NA0SCPIT', 'One Fifth Avenue', '0349122229', 'Product Description', 'Missing', '', '9/25/14 7:36:39 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('284O76CTDL', 'The Moonshine Dragon', '1781123535', 'Product Description', 'Missing', '', '9/25/14 2:11:04 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('2BPLW547IC', 'Die fliegenden Unterhosen', '1472335805', 'Image', 'Missing', '', '9/25/14 2:13:27 AM P', 'Quality', 'Active', 'Images can make your product more attractive to customers and help them make buying decisions.', NULL, NULL),
('2BPLW547IC', 'Die fliegenden Unterhosen', '1472335805', 'Product Description', 'Missing', '', '9/25/14 2:13:30 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('2F4HSMLKWG', 'Shadow of Night (All Souls Trilogy, #2)', '0143123890', 'Product Description', 'Missing', '', '9/25/14 1:02:53 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('2G14RQK6E7', 'Title', '1408704498', 'Product Description', 'Missing', '', '9/24/14 11:10:48 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('2HA4PI709C', 'Burton\'s Microbiology for the Health Sciences', '1451186347', 'Product Description', 'Missing', '', '9/25/14 12:15:41 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('2SJB5FQY7W', 'General, Organic and Biochemistry', '1259060497', 'Product Description', 'Missing', '', '9/25/14 1:08:09 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('2SXL1GKBZA', 'Lost for Words', '0330454226', 'Product Description', 'Missing', '', '9/25/14 4:07:26 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('3EN9UYRD4H', 'Mummy Laid an Egg!', '0099299119', 'Product Description', 'Missing', '', '9/25/14 1:34:10 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('3I7W2TP1QX', 'Schusswaffen', '1407584170', 'Product Description', 'Missing', '', '9/24/14 11:54:26 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('3N9DYBT0MZ', 'Mammoth Book of New Tattoo Art (Mammoth Books)', '1472111842', 'Product Description', 'Missing', '', '9/25/14 7:03:05 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('3XG5DES0OP', 'Beethoven', '0571312551', 'Product Description', 'Missing', '', '9/25/14 4:06:26 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('42X05K1NZS', 'Last Witness (French Edition)', '0718193725', 'Product Description', 'Missing', '', '9/25/14 5:25:05 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('45HLCDB20P', 'Seurat', '1781607850', 'Product Description', 'Missing', '', '9/25/14 12:29:42 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('4GBQL3STPJ', 'Tuffers\' Alternative Guide to the Ashes', '0755362950', 'Product Description', 'Missing', '', '9/25/14 7:20:50 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('4I8RPW6K91', 'Cornish House', '1409137481', 'Product Description', 'Missing', '', '9/25/14 3:48:17 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('4U1JYFC9OB', 'Death on Blackheath', '0755397177', 'Product Description', 'Missing', '', '9/25/14 12:26:37 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('4WALKUZ5HI', 'Biology: How Life Works', '1464156018', 'Product Description', 'Missing', '', '9/25/14 3:00:35 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('513BON9TQI', 'Trout Fishing in America', '1782113800', 'Product Description', 'Missing', '', '9/25/14 3:55:48 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('51BMPOHYXI', 'How to Speak Money', '057130981X', 'Product Description', 'Missing', '', '9/24/14 11:37:03 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('52DKLWOPME', 'Mirror Sight', '0575099682', 'Product Description', 'Missing', '', '9/25/14 3:03:00 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('52MAVK4DQJ', 'Pilze', '1445410443', 'Product Description', 'Missing', '', '9/24/14 11:37:50 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('54AYBR0NQ1', 'The Papers of Tony Veitch', '0857869922', 'Product Description', 'Missing', '', '9/25/14 3:05:00 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('5N80OXYWTG', 'Raven Black (Shetland Quartet 1)', '0330512943', 'Product Description', 'Missing', '', '9/25/14 5:01:21 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('5VE9D08NZG', 'Prague Cemetery', '0099555980', 'Product Description', 'Missing', '', '9/25/14 12:23:44 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('63MVGBNWPO', 'Dead Ends', '0571308295', 'Product Description', 'Missing', '', '9/25/14 2:04:40 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('68AMBV9PG2', 'Unseen', '1846059984', 'Product Description', 'Missing', '', '9/25/14 2:36:53 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('6A1RGSDZBC', 'Rules of Attraction', '0330536346', 'Product Description', 'Missing', '', '9/25/14 3:09:59 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('6IBD1LXHC8', 'Run Fat Bitch Run', '0751553980', 'Product Description', 'Missing', '', '9/25/14 7:32:19 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('6VXPGS790N', 'Ziehen-Staunen-Entdecken: Sterne & Planeten', '1605538256', 'Product Description', 'Missing', '', '9/24/14 11:25:18 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('6Z2RSDVGX4', 'The World According to Bob: The Further Adventures of One Man and His Street-wise Cat', '1444777572', 'Product Description', 'Missing', '', '9/25/14 7:15:34 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('6ZAB07GT1E', 'Bleeding Edge', '0099590360', 'Product Description', 'Missing', '', '9/25/14 12:51:09 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('73JQ4GUELC', 'The Love Secret', '0749955538', 'Product Description', 'Missing', '', '9/25/14 7:24:28 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('7COP8ZS0X3', 'The Last Dragon', '0755379578', 'Product Description', 'Missing', '', '9/25/14 4:03:28 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('7GSIXO16ZU', 'The Dead in Their Vaulted Arches', '1409114260', 'Product Description', 'Missing', '', '9/25/14 12:21:46 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('7O3AR4PF89', 'Wild Cards: Fort Freak', '0575134240', 'Product Description', 'Missing', '', '9/25/14 12:52:56 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('7OZTY4EMK6', 'The Invention of Wings', '1472212754', 'Product Description', 'Missing', '', '9/25/14 3:57:48 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('7SVM1UECYW', 'Mein Anzieh-Stickerbuch: Im alten Rom', '1782320652', 'Product Description', 'Missing', '', '9/25/14 3:44:55 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('7T1NCYP2XE', 'Things We Never Say', '0755378490', 'Product Description', 'Missing', '', '9/25/14 12:00:57 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('84HXCFS19A', 'The Hydrogen Sonata', '0356501493', 'Product Description', 'Missing', '', '9/25/14 5:01:18 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('8H1406ONBE', 'Untitled 2012', '0141048182', 'Product Description', 'Missing', '', '9/25/14 2:03:36 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('8LOMQIRTFS', 'Diary of a Baby Wombat', '0007351755', 'Product Description', 'Missing', '', '9/24/14 10:49:05 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('8M1UCXDTAJ', 'Cats Cradle (Penguin Modern Classics)', '0141189347', 'Product Description', 'Missing', '', '9/25/14 12:00:33 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('8O3YHA9PRE', 'Historical Sticker Dolly Dressing: 1920s Fashion (Usborne Sticker Dolly Dressing)', '1409537234', 'Product Description', 'Missing', '', '9/25/14 5:10:34 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('90IDH5R32T', 'Siege and Storm', '1780621701', 'Product Description', 'Missing', '', '9/25/14 4:45:26 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('93MTFX1BD4', 'GLOW', '1444765523', 'Product Description', 'Missing', '', '9/25/14 3:10:59 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9486TGA3KV', 'Pennsylvania German Marriages: Index Volume', '0806354429', 'Product Description', 'Missing', '', '9/24/14 10:48:30 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9AF4XIZTRB', 'Straight White Male', '0099592150', 'Product Description', 'Missing', '', '9/25/14 3:00:38 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9GBO58EFQX', 'Moon Tiger', '0141044845', 'Product Description', 'Missing', '', '9/24/14 10:50:40 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9OSVB3JTMD', 'Mary, Mary', '0755349393', 'Product Description', 'Missing', '', '9/25/14 12:46:21 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9S0OG6X8QZ', 'The William Blake Tarot of the Creative Imagination. Revised Edition', '0916804003', 'Product Description', 'Missing', '', '9/25/14 1:59:11 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9TL5HY0W1J', 'Ammonites and Leaping Fish', '0241146380', 'Product Description', 'Missing', '', '9/25/14 3:07:29 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9U1Y340XIA', 'The Undercover Economist Strikes Back', '0349138931', 'Product Description', 'Missing', '', '9/25/14 4:20:52 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9UMI32L6WH', 'Angels in My Hair', '0099551462', 'Product Description', 'Missing', '', '9/25/14 2:33:23 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('9ZPOMH3FC7', 'Lernen mit Sternen - Mathe für 6- bis 7-Jährige', '1472314506', 'Product Description', 'Missing', '', '9/25/14 4:25:02 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('A2ZTQ7C5JI', 'Wetlands', '0007307616', 'Product Description', 'Missing', '', '9/25/14 2:55:27 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('A85MIX0P3K', 'Snapper', '0755396219', 'Product Description', 'Missing', '', '9/25/14 12:54:59 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('A9740KTI8Q', 'Smashing Physics', '1472210301', 'Product Description', 'Missing', '', '9/24/14 11:20:47 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ADF4RTUK12', 'H.I.V.E. 8: Deadlock', '1408815656', 'Product Description', 'Missing', '', '9/25/14 1:09:58 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('AGZECJ1K5W', 'Prayer for Owen Meany', '0552776793', 'Product Description', 'Missing', '', '9/25/14 7:31:03 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('AHT5YF9MR1', 'Earthfall', '1408849755', 'Product Description', 'Missing', '', '9/25/14 1:02:27 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ARL9K2PT10', 'Wo stecken bloß die Pinguine?', '1782320741', 'Product Description', 'Missing', '', '9/25/14 6:50:23 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('AT3Q5LNFCE', '100 Paper Planes to Fold and Fly', '1409551113', 'Product Description', 'Missing', '', '9/25/14 1:14:29 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('AV0D3ENKIM', 'Horse', '0756658241', 'Product Description', 'Missing', '', '9/25/14 2:23:28 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('AY26BFOI8Q', 'The Rainmaker - Level 5', '1405882492', 'Product Description', 'Missing', '', '9/25/14 3:14:46 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('B9ZIM74AE8', 'Divergent', '0007538065', 'Product Description', 'Missing', '', '9/25/14 4:49:47 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BANC67WITY', 'Notes of a Dirty Old Man', '075351382X', 'Product Description', 'Missing', '', '9/25/14 5:19:46 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BAXULW17C9', 'Introduction to Robotics: Mechanics and Control', '1292040041', 'Product Description', 'Missing', '', '9/25/14 12:35:38 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BDPIO092', 'The Mammoth Book of the Lost Chronicles of Sherlock Holmes (Mammoth Books)', '1472110595', 'Product Description', 'Missing', '', '9/24/14 3:43:02 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BDPJQSLV', 'Don Camillo (Italian Edition)', '0850485835', 'Product Description', 'Missing', '', '9/18/14 12:25:53 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BDPZ8SR3', 'Better Together', '1472206614', 'Product Description', 'Missing', '', '9/17/14 4:19:19 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BDPZHUR0', 'Touch', '0099549263', 'Product Description', 'Missing', '', '9/17/14 3:34:44 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BH3XI0CPZ1', 'Mayhem', '1780871287', 'Product Description', 'Missing', '', '9/25/14 12:02:46 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BJSAGEOZ57', 'Through the Woods', '0571288642', 'Product Description', 'Missing', '', '9/25/14 2:29:33 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BQVZOCRK5S', 'Young Hearts Crying (Vintage Classic)', '0099518643', 'Product Description', 'Missing', '', '9/25/14 1:24:48 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BS786F5GR0', 'Cross and Burn', '0751551279', 'Product Description', 'Missing', '', '9/25/14 12:02:22 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BT5DA7IOSC', 'The Black & White Photography Field Guide: The Art of Creating Digital Monochrome', '1781579997', 'Product Description', 'Missing', '', '9/25/14 1:25:07 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('BUW84AZXLV', 'Fuse', '1472201426', 'Product Description', 'Missing', '', '9/25/14 12:58:29 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('C9PJSD51TX', '\" Matilda \" : Level 3, RLA (Penguin Longman Penguin Readers)', '140587676X', 'Product Description', 'Missing', '', '9/25/14 2:33:33 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('CJQRZHGKE4', 'Our Kind of Traitor', '0241967856', 'Product Description', 'Missing', '', '9/25/14 3:52:17 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('CKTDMGEUVO', 'The Meaning of Liff', '0752227599', 'Product Description', 'Missing', '', '9/25/14 3:52:49 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('CMNG3AQIJX', 'A Gentleman Never Tells ...: Tales from Tinseltown', '1782432078', 'Product Description', 'Missing', '', '9/25/14 2:14:17 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('CNFHYGP52R', 'Hallucinating Foucault', '0747585156', 'Product Description', 'Missing', '', '9/25/14 1:07:02 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('CRLNV5SOYE', 'Mirror Mirror', '0755341724', 'Product Description', 'Missing', '', '9/25/14 6:56:55 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('CZXIKQFDH6', 'Harry Potter and the Order of the Phoenix', '1408855690', 'Product Description', 'Missing', '', '9/25/14 4:00:08 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('D1E8XO6WT9', 'Strategic Management: Creating Competitive Advantages', '0077161092', 'Product Description', 'Missing', '', '9/25/14 2:21:57 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('D2A6YVOX91', 'The Lemon Grove', '1472212096', 'Product Description', 'Missing', '', '9/25/14 5:49:47 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('DELT48COU9', 'The Book of Tomorrow', '0007182813', 'Product Description', 'Missing', '', '9/25/14 3:18:38 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('DIV2906NA7', 'Poetry of Birds (French Edition)', '0141027118', 'Product Description', 'Missing', '', '9/25/14 12:38:33 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('DLS7MEF2GQ', 'What Would Mary Berry Do?', '1447253493', 'Product Description', 'Missing', '', '9/25/14 4:24:59 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('DZ4N2ORUFE', 'Eat and Run', '1408833409', 'Product Description', 'Missing', '', '9/25/14 4:36:39 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('E0KO4YCDG1', 'The Drop', '0349140723', 'Product Description', 'Missing', '', '9/25/14 2:04:50 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('E1DGVRP7J9', 'The Crimson Ribbon', '1472204220', 'Product Description', 'Missing', '', '9/25/14 1:10:47 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('EC0H1UW9JP', 'BRS Physiology', '1469832003', 'Product Description', 'Missing', '', '9/25/14 1:37:56 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('EG5VC7LJNT', 'Schwedenrätsel in großer Schrift 17', '1472310438', 'Product Description', 'Missing', '', '9/24/14 11:03:41 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('EHTL5FYPZD', 'General Chemistry The Essential Concepts', '125906042X', 'Product Description', 'Missing', '', '9/25/14 4:17:07 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('EZXYA3PRT5', 'Landline', '1409152111', 'Product Description', 'Missing', '', '9/24/14 11:12:53 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('F3KJB2M6GU', 'Lexicon', '1444764667', 'Product Description', 'Missing', '', '9/25/14 2:34:56 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('FACBWX15TO', 'Fce Expert Students Book With Access Cod', '1447929314', 'Product Description', 'Missing', '', '9/25/14 4:54:10 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('FAXN8ELU4V', 'There\'s a Boy in the Girls\' Bathroom', '0747589526', 'Product Description', 'Missing', '', '9/25/14 4:23:51 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('FCNUVI1HPW', 'Connie Willis SF Gateway Omnibus', '0575131071', 'Product Description', 'Missing', '', '9/25/14 4:07:18 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('FEKWHA1R97', 'Lenkradbuch Gute Fahrt Pitzelpatz', '1412718678', 'Product Description', 'Missing', '', '9/25/14 6:59:32 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('FGEADRP4JW', 'The Night Watchman', '1472113519', 'Product Description', 'Missing', '', '9/24/14 11:57:30 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('FQGDOWMIUC', 'This Is How You Lose Her', '0571294227', 'Product Description', 'Missing', '', '9/25/14 1:22:21 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('FVNGY580OB', 'ESTUDIOS MELODICOS (12)', '0001032372', 'Product Description', 'Missing', '', '9/25/14 6:47:07 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('FYQTVZGNH0', 'Silks', '0330464515', 'Product Description', 'Missing', '', '9/25/14 2:45:40 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('G7513ISP9K', '\" Psycho \" : Level 3, RLA (Penguin Longman Penguin Readers)', '1405879289', 'Product Description', 'Missing', '', '9/24/14 11:41:45 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('GK9O2R75ZC', 'Heilverfahren Aller Krebsarten/The Cure for All Cancers (German Edition)', '0974028762', 'Product Description', 'Missing', '', '9/25/14 5:01:42 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('H8EFIWJ5V0', 'Babette\'s Feast and Other Stories', '0141393769', 'Product Description', 'Missing', '', '9/25/14 4:33:08 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('HDTB7CSP2M', 'Learn Portuguese (Talk Now!) (Portuguese Edition)', '1843520095', 'Operating System', 'Missing', '', '9/25/14 4:28:00 AM P', 'Quality', 'Active', 'Operating_system is important for helping customers find your product.', NULL, NULL),
('HIEJK452UX', 'FCE Gold Plus: Teachers Resource Book (Gold)', '140584874X', 'Product Description', 'Missing', '', '9/25/14 4:05:26 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('HKD0BXCU7P', '\" The Birds \" : Level 2, RLA (Penguin Longman Penguin Readers)', '1405869763', 'Product Description', 'Missing', '', '9/25/14 7:58:37 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('HTEWJQLU2A', 'Then We Take Berlin', '1611855659', 'Product Description', 'Missing', '', '9/25/14 2:56:42 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('HTEWJQLU2A', 'Then We Take Berlin', '1611855659', 'Image', 'Missing', '', '9/25/14 2:56:37 AM P', 'Quality', 'Active', 'Images can make your product more attractive to customers and help them make buying decisions.', NULL, NULL),
('HV13C6EYM2', 'In Pursuit of the Proper Sinner (Inspector Lynley Mysteries 10)', '1444738356', 'Product Description', 'Missing', '', '9/25/14 1:26:42 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('HWRY8KEM9X', 'Cop Town', '178089001X', 'Product Description', 'Missing', '', '9/25/14 3:48:21 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('I4U83KBV06', 'Divergent Trilogy', '0007538030', 'Product Description', 'Missing', '', '9/25/14 4:16:46 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('I7CL351VRM', 'Joyful Wisdom', '0553824449', 'Product Description', 'Missing', '', '9/25/14 6:39:13 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JA8WG6FR19', 'The Testament', '1784080438', 'Product Description', 'Missing', '', '9/25/14 1:04:34 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JCNH0D1KQP', 'New Total English Pre-Intermediate Students\' Book with Active Book Pack', '1408267209', 'Product Description', 'Missing', '', '9/25/14 3:18:42 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JD4G26SFC7', 'Lips Touch: Three Times', '1444731505', 'Product Description', 'Missing', '', '9/25/14 12:58:23 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JEKHRZV6XM', 'Green Eggs and Ham', '0007158467', 'Product Description', 'Missing', '', '9/25/14 12:53:17 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JEXN8461O7', 'Small Island', '1472211065', 'Product Description', 'Missing', '', '9/25/14 1:30:53 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JMFIBLZV8O', 'Cutting Edge Starter Germany Workbook with Key (Cutting Edge)', '0582846706', 'Product Description', 'Missing', '', '9/25/14 4:32:48 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JNMG4TI795', 'The Twistrose Key', '0349001677', 'Product Description', 'Missing', '', '9/25/14 5:04:52 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JX1OLZNBWS', 'Crossing the Line', '1447247876', 'Product Description', 'Missing', '', '9/25/14 4:07:40 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('JYCPMQOHE5', 'The Caravaggio Conspiracy', '1782065040', 'Product Description', 'Missing', '', '9/25/14 12:12:58 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('K5TMOW3HV2', 'The Forever of Ella and Micha (The Secret, #2)', '0751552275', 'Product Description', 'Missing', '', '9/25/14 5:19:05 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('K7W98VIGPL', 'This Side of Brightness', '140880591X', 'Product Description', 'Missing', '', '9/25/14 12:35:40 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('KEPD97Q2JI', 'The Blinding Knife', '1841499080', 'Product Description', 'Missing', '', '9/25/14 2:37:46 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('KPROZ5YJBN', 'New Total English Elementary Students\' Book with Active Book Pack', '1408267160', 'Product Description', 'Missing', '', '9/25/14 7:08:54 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('L5R9ZCVKWG', 'Littleland: All Day Long', '0857631489', 'Product Description', 'Missing', '', '9/25/14 3:07:01 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('L6V3MHR0E1', 'Oscar Wilde and the Dead Man\'s Smile', '0719569907', 'Product Description', 'Missing', '', '9/25/14 7:01:27 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('L8UW74C0EH', 'Broken', '0099538660', 'Product Description', 'Missing', '', '9/25/14 5:16:35 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('L9NHFR2D7A', 'A Trail of Fire', '1409103803', 'Product Description', 'Missing', '', '9/25/14 2:31:49 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('LAYTXSK0BM', 'Blood Song', '0356502481', 'Product Description', 'Missing', '', '9/24/14 11:48:12 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('LDGJB6YEA3', 'German Play Today Guitar Level 1', '0634059521', 'Product Description', 'Missing', '', '9/25/14 1:04:39 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('LQIM38G2VS', 'Ta-tü, ta-ta! Wohin saust die Feuerwehr?', '1782320016', 'Product Description', 'Missing', '', '9/25/14 7:43:16 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('LT3O0SVDPZ', 'Entangled', '0099532824', 'Product Description', 'Missing', '', '9/24/14 11:13:48 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('LT4C7FKVUX', 'How of Happiness', '0749952466', 'Product Description', 'Missing', '', '9/25/14 5:17:24 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('LW07AE6SCR', 'Case Book of Sherlock Holmes', '024195293X', 'Product Description', 'Missing', '', '9/25/14 7:10:09 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('LZKVW1A3GM', 'Bible Study Organizer Chartreuse with Leather-Look Accents', '0310818613', 'Image', 'Non-White Background', 'http://ecx.images-am', '9/25/14 4:43:06 AM P', 'Quality', 'Active', 'To fix the alert please upload an image with a white background.', NULL, NULL),
('LZKVW1A3GM', 'Bible Study Organizer Chartreuse with Leather-Look Accents', '0310818613', 'Image', 'Image Too Small', 'http://ecx.images-am', '9/25/14 4:43:09 AM P', 'Quality', 'Active', 'To fix the alert please upload an image with dimensions greater than 1000 pixels.', NULL, NULL),
('M45J6LQY2S', 'Gold First New Edition Teacher\'s Book', '1447907183', 'Product Description', 'Missing', '', '9/25/14 4:40:23 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('M5UH9EBAXG', 'New Market Leader Interm. SB &CD&CD-ROM', '1405881356', 'Product Description', 'Missing', '', '9/25/14 2:07:31 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('MDC86BXWT2', 'Don\'t Want to Miss a Thing', '075535589X', 'Product Description', 'Missing', '', '9/24/14 11:23:52 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('MHQBZI5K14', 'Stepping Stones for Violin: 26 Pieces for Beginners (Easy String Music)', '0851623727', 'Product Description', 'Missing', '', '9/25/14 3:18:24 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('MNVIUO0XJD', 'Among the Mad', '0719569915', 'Product Description', 'Missing', '', '9/25/14 5:47:13 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('MP46U0TF7I', 'The Post-Birthday World', '0007245149', 'Product Description', 'Missing', '', '9/25/14 4:05:49 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('MRX1JIQFB4', 'Research Methods in Psychology', '1259252965', 'Image', 'Missing', '', '9/25/14 1:37:56 AM P', 'Quality', 'Active', 'Images can make your product more attractive to customers and help them make buying decisions.', NULL, NULL),
('MRX1JIQFB4', 'Research Methods in Psychology', '1259252965', 'Product Description', 'Missing', '', '9/25/14 1:37:55 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('MUG7TWL213', 'Starhawk', '1472207556', 'Product Description', 'Missing', '', '9/25/14 1:45:47 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('MW4ODN5BLF', 'Corduroy Mansions (Corduroy Mansions 1)', '0349122393', 'Product Description', 'Missing', '', '9/24/14 11:00:11 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('MYVUPSIL07', 'Alles aus dem Glas', '1472340523', 'Product Description', 'Missing', '', '9/24/14 11:25:19 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('N6MKILCE45', 'The Violent Century', '1444762893', 'Product Description', 'Missing', '', '9/24/14 11:09:09 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('N9V6XEMJQZ', 'Sisterland', '0385618506', 'Product Description', 'Missing', '', '9/25/14 1:34:10 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('NHFIZMOA1T', 'Pushing the Limits', '1409129233', 'Product Description', 'Missing', '', '9/25/14 5:52:43 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('NJHYP502VG', 'Why Can\'t a Woman be More Like a Man', '0571279252', 'Product Description', 'Missing', '', '9/25/14 1:42:46 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('NYG8QVMBL1', 'Bauer Bolle: Sommerspaß', '1472345118', 'Image', 'Missing', '', '9/25/14 1:25:26 AM P', 'Quality', 'Active', 'Images can make your product more attractive to customers and help them make buying decisions.', NULL, NULL),
('NYG8QVMBL1', 'Bauer Bolle: Sommerspaß', '1472345118', 'Product Description', 'Missing', '', '9/25/14 1:25:31 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('OCD01HFNAK', 'Making Animals Happy', '1408800829', 'Product Description', 'Missing', '', '9/25/14 2:29:28 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ODHBQ2YK1C', 'Doctor Sleep', '1476762740', 'Product Description', 'Missing', '', '9/25/14 1:43:31 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ODWEJYUBVF', 'Disney Die Eiskönigin', '1472334728', 'Product Description', 'Missing', '', '9/25/14 4:16:20 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('OFPZXU6W70', 'The Ruins', '0552152706', 'Product Description', 'Missing', '', '9/25/14 5:00:58 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('OGH98FSTQL', 'A Confederate General from Big Sur', '1782113797', 'Product Description', 'Missing', '', '9/25/14 3:14:23 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('OWFE92KRH1', 'Foster', '0571255655', 'Product Description', 'Missing', '', '9/25/14 2:31:57 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('OXMD58ILGU', 'The Collected Works of A. J. Fikry', '1408704617', 'Product Description', 'Missing', '', '9/25/14 4:42:20 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('OYSHVXTK1A', 'Tempest 3: Timestorm', '0230758487', 'Product Description', 'Missing', '', '9/25/14 2:40:08 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('P9EW5HOF0X', 'Wow! Surprising Facts About Pirates', '0753437465', 'Product Description', 'Missing', '', '9/25/14 2:31:53 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('PD874CNRYG', 'How to Fight Islamist Terror from the Missionary Position', '1472110498', 'Product Description', 'Missing', '', '9/25/14 7:22:01 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('POANWM6I7B', 'Killing Critics', '1472212991', 'Product Description', 'Missing', '', '9/25/14 1:12:14 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('PT87BAESOU', 'History of the Modern World', '007131556X', 'Product Description', 'Missing', '', '9/25/14 4:16:21 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Q0BU7AR8PV', 'All That is', '1447261615', 'Product Description', 'Missing', '', '9/25/14 7:10:55 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Q230AIM5ER', 'Penguin Kids 2 The Enormous Crocodile, (Dahl) Reader (Penguin Kids (Graded Readers))', '1447931327', 'Product Description', 'Missing', '', '9/25/14 7:46:22 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Q3TO9HCR7P', 'The Round House', '1472110005', 'Product Description', 'Missing', '', '9/24/14 11:25:17 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Q5C7ZDU4PB', 'Marketing Management', '0077146042', 'Product Description', 'Missing', '', '9/25/14 3:56:59 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('QAG5MLVD6O', 'Fatal Winter', '1472106245', 'Product Description', 'Missing', '', '9/25/14 4:30:28 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('QC6UJXGMIK', 'Precious Thing', '1472205952', 'Product Description', 'Missing', '', '9/25/14 1:01:17 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('QEVPY7RDTM', 'Kiss Kiss [Audio CD](Chinese Edition)', '071815939X', 'Product Description', 'Missing', '', '9/25/14 5:10:05 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('QMBD3CYXOS', 'Ten in the Bed', '1406353094', 'Product Description', 'Missing', '', '9/25/14 7:30:21 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('QMBYJKOGPH', 'Wayside School Is Falling Down', '1408801736', 'Product Description', 'Missing', '', '9/25/14 3:26:24 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('QNOY7SKJDE', 'Beneath This Man (This Man, #2)', '1409151506', 'Product Description', 'Missing', '', '9/25/14 4:48:34 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('QOMZYBUTVN', 'The Blazing World', '1476769982', 'Product Description', 'Missing', '', '9/24/14 11:44:49 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('R16D3BJ890', 'Cauldron', '1472203291', 'Product Description', 'Missing', '', '9/25/14 4:23:21 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('R20FSWZ36I', '\" The Pearl \" : Level 3 (Penguin Longman Active Reading)', '1405852135', 'Product Description', 'Missing', '', '9/25/14 4:12:38 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('R971J8QCUZ', 'Disney: Lernen mit Sternen Prinzessinnen: Zahlen', '1407567047', 'Product Description', 'Missing', '', '9/25/14 3:49:58 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RBPYCS0TI7', 'The Colour Of Magic', '0552152226', 'Product Description', 'Missing', '', '9/25/14 2:37:21 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RHOF9XNU1L', 'The Comfort of Strangers', '0099754916', 'Product Description', 'Missing', '', '9/25/14 4:55:20 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RNK172VU3A', 'European Rail Timetable 2014: Summer (Rail Guides)', '0992907306', 'Product Description', 'Missing', '', '9/25/14 1:58:06 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RPMS8N10BA', 'Secret Garden', '1846071100', 'Product Description', 'Missing', '', '9/24/14 11:36:34 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RQNYP0XHA4', '27-Button Soundbuch - Mein großes Liederbuch', '1450859488', 'Product Description', 'Missing', '', '9/25/14 5:18:20 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RU2GPWDM1F', 'The Irresistible Blueberry', '1472203879', 'Product Description', 'Missing', '', '9/25/14 1:27:34 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RVS16UFHGJ', 'So Long, and Thanks for All the Fish (Hitchhikers Guide 4)', '0330508601', 'Product Description', 'Missing', '', '9/25/14 5:31:32 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RWUEM1LDJ4', 'Dead Ever After', '0575096632', 'Product Description', 'Missing', '', '9/24/14 10:47:16 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('RZYG7LFE8S', 'Die Bhagavad Gita (German Edition)', '087612032X', 'Product Description', 'Missing', '', '9/25/14 7:11:26 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('S5AQEFB40U', 'Babycalm', '0749958286', 'Product Description', 'Missing', '', '9/25/14 1:31:44 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('S6HWPK5TIA', 'Valour', '0330545760', 'Product Description', 'Missing', '', '9/24/14 10:47:19 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('S9UCTZ3PLN', 'Kartoffeln', '1472357132', 'Product Description', 'Missing', '', '9/25/14 6:53:33 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('S9UCTZ3PLN', 'Kartoffeln', '1472357132', 'Image', 'Missing', '', '9/25/14 6:53:34 AM P', 'Quality', 'Active', 'Images can make your product more attractive to customers and help them make buying decisions.', NULL, NULL),
('SJ45OIQ7YK', 'Paper Works', '1584234326', 'Product Description', 'Missing', '', '9/25/14 7:17:16 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL);
INSERT INTO `blacklist` (`sku`, `product-name`, `asin`, `field-name`, `alert-type`, `current-value`, `last-updated`, `alert-name`, `status`, `explanation`, `created`, `modified`) VALUES
('SV92QTIGPN', 'PLPR6:Beach, The RLA', '1405882573', 'Product Description', 'Missing', '', '9/25/14 3:00:14 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('SWVJ042MPC', 'The Einstein Pursuit', '0755386523', 'Product Description', 'Missing', '', '9/25/14 5:29:01 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('T0593NFU7C', 'Blindness (Vintage Classics)', '009957358X', 'Product Description', 'Missing', '', '9/25/14 1:29:29 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('TAB5E97PG0', 'EXPERT FIRST 3RD EDITION COURSEBOOK WITH MYENGLISHLAB', '144796201X', 'Image', 'Missing', '', '9/25/14 4:16:31 AM P', 'Quality', 'Active', 'Images can make your product more attractive to customers and help them make buying decisions.', NULL, NULL),
('TAB5E97PG0', 'EXPERT FIRST 3RD EDITION COURSEBOOK WITH MYENGLISHLAB', '144796201X', 'Product Description', 'Missing', '', '9/25/14 4:16:32 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('TBJ4KRCI39', 'Proof', '140591663X', 'Product Description', 'Missing', '', '9/24/14 10:54:04 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('TVP8BJS9W4', 'French Parents Don\'t Give In', '0552779539', 'Product Description', 'Missing', '', '9/25/14 12:12:24 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('UD1QEBO7Y6', 'Bruce Lee', '0283070668', 'Product Description', 'Missing', '', '9/25/14 2:32:43 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('UGZTL7JWKE', 'Christine Falls', '0330445324', 'Product Description', 'Missing', '', '9/25/14 12:50:11 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('UHFT2B1L36', 'Ich hab Dich lieb Opa', '140758426X', 'Product Description', 'Missing', '', '9/25/14 1:48:15 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('UMPCOTA3H1', 'The Signature of All Things', '1408850044', 'Product Description', 'Missing', '', '9/24/14 11:05:22 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('UOSRG1ZA82', 'Lernen mit Sternen - Plus und Minus für 6- bis 7-Jährige', '1472314549', 'Product Description', 'Missing', '', '9/25/14 4:34:20 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('UY1V49QK3H', 'All the Light We Cannot See', '0007548672', 'Product Description', 'Missing', '', '9/25/14 3:53:27 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('UYEO5872RZ', 'Wanderlust: A History of Walking', '1783780398', 'Product Description', 'Missing', '', '9/25/14 1:01:34 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('UYZN1SBOP6', 'Historical Records and Studies (Volume 2, PT. 2)', '1235649423', 'Image', 'Image Too Small', 'http://ecx.images-am', '9/24/14 11:31:03 PM ', 'Quality', 'Active', 'To fix the alert please upload an image with dimensions greater than 1000 pixels.', NULL, NULL),
('V0BSDMQW2N', 'Beowulf', '0571230415', 'Product Description', 'Missing', '', '9/25/14 4:37:04 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('V71G9SBEWH', 'The Magic Mountain', '0749386428', 'Product Description', 'Missing', '', '9/25/14 3:40:56 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('V8IQPD92L6', 'Practice Tests Plus PET 3 with Key with Multi-ROM and Audio CD Pack', '1408267942', 'Product Description', 'Missing', '', '9/25/14 4:58:08 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('V8KCUEAQZS', 'This Nights Foul Work', '0099532689', 'Product Description', 'Missing', '', '9/25/14 4:41:23 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('V8ZEJT91K2', 'Hanns and Rudolf', '0099559056', 'Product Description', 'Missing', '', '9/25/14 2:55:03 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VCT0JX1FR6', 'Revenge of the Lawn', '1782113789', 'Product Description', 'Missing', '', '9/25/14 1:41:50 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VGHSBEQNW7', 'The Eight', '0007303548', 'Product Description', 'Missing', '', '9/25/14 3:38:53 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VJID2LRQFZ', 'Seventeen Contradictions and the End of Capitalism', '1781251606', 'Product Description', 'Missing', '', '9/25/14 12:26:09 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VOECZ5R084', 'Eat, Pray, Love. Movie Tie-In: One Woman\'s Search for Everything Across Italy, India and Indonesia (International Export Edition)', '0143118439', 'Product Description', 'Missing', '', '9/25/14 5:44:56 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VOZPXITF5J', 'Be the Pack Leader: Use Cesar\'s Way to Transform Your Dog...and Your Life', '0340976454', 'Product Description', 'Missing', '', '9/25/14 1:18:22 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VPDYFN25G1', 'Goat Mountain', '0434021989', 'Product Description', 'Missing', '', '9/25/14 7:38:20 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VY8NWZCM4S', 'Foundations in Microbiology', '1259255794', 'Product Description', 'Missing', '', '9/25/14 1:52:08 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VYKOL9B54M', 'Monk Who Sold His Ferrari', '0007848420', 'Product Description', 'Missing', '', '9/25/14 2:13:51 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('VZHTBIO63U', 'The Best of Me', '0751553336', 'Product Description', 'Missing', '', '9/25/14 1:47:24 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('W7PXUT9VGJ', 'Pilze', '1445484048', 'Product Description', 'Missing', '', '9/25/14 1:27:34 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('WHENZ96TD1', 'Remains of the Day', '0571258247', 'Product Description', 'Missing', '', '9/25/14 12:17:16 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('WQDC82G0RO', 'Flying Finish', '1405916680', 'Product Description', 'Missing', '', '9/25/14 4:03:42 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('WQLMSZRV3D', 'Steelheart (Reckoners #1)', '057510399X', 'Product Description', 'Missing', '', '9/25/14 3:33:46 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('WVAZL63J2Q', 'Lexicon', '1444764683', 'Product Description', 'Missing', '', '9/25/14 3:27:44 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('WYPL43190X', '3-Button-Soundbuch, wattiert, Auf dem Bauernhof', '1450864686', 'Product Description', 'Missing', '', '9/25/14 1:19:57 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('X5BUPR7DFS', 'Empire Of The Sun', '0007221525', 'Product Description', 'Missing', '', '9/25/14 3:43:47 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('X5IFJU9HLN', 'Abominables Mm Pb', '1407133020', 'Product Description', 'Missing', '', '9/25/14 12:14:39 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('X6VR3W8OQT', 'Crossfire', '0241954266', 'Product Description', 'Missing', '', '9/25/14 12:20:31 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('XQZD2MPOE3', 'Harry Potter: The magical adventure begins . . .  (Harry Potter, #1-3)', '140884995X', 'Product Description', 'Missing', '', '9/25/14 4:15:57 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('XS2E5B47NG', 'Crazy Rich Asians', '0385537646', 'Product Description', 'Missing', '', '9/25/14 2:30:41 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('XSPTH3DURC', 'All Teachers Bright and Beautiful', '0755362225', 'Product Description', 'Missing', '', '9/25/14 2:31:27 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('XUYMQ9R5NL', 'The Tipping Point : How Little Things Can Make a Big Difference', '0349114463', 'Product Description', 'Missing', '', '9/25/14 5:49:47 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('XY7C54P08U', 'Warrior-Prophet', '1841494100', 'Product Description', 'Missing', '', '9/25/14 12:13:52 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('XYNPFH5ALI', 'My Soul to Take', '0340995874', 'Product Description', 'Missing', '', '9/25/14 2:41:37 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Y2VKD6XI31', 'Deathless', '147210868X', 'Product Description', 'Missing', '', '9/25/14 4:47:52 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Y4R6JKDLOX', 'Elephants Can Remember', '0563510412', 'Product Description', 'Missing', '', '9/25/14 5:41:38 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Y6QA42US57', 'Sarah Thornhill Exp', '085786534X', 'Product Description', 'Missing', '', '9/25/14 5:15:10 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('YFT1LOUE72', 'The Beauty of Murder', '1409103927', 'Product Description', 'Missing', '', '9/25/14 6:58:16 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('YG8MR0PQ3T', 'Weaving It Together 3 & 4 Video [VHS]', '0838449654', 'Theatrical Release D', 'Missing', '', '9/25/14 3:21:02 AM P', 'Quality', 'Active', 'Theatrical_release_date is important for helping customers find your product.', NULL, NULL),
('YKSUJ98NLF', 'PLPR6:I Know Why the Caged Bird RLA', '1405882654', 'Product Description', 'Missing', '', '9/25/14 4:44:58 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('YTS27UNLPH', 'Harry Potter & the Order of the Phoenix', '1408841681', 'Product Description', 'Missing', '', '9/25/14 12:00:09 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('YXBF7WU43D', 'The Spring of Kasper Meier', '1408705052', 'Product Description', 'Missing', '', '9/25/14 5:39:43 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Z2QXASEB3R', 'The Honeymoon Hotel', '1782065695', 'Product Description', 'Missing', '', '9/24/14 10:41:00 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Z67FAHKDMV', 'The Mystery of Dr. Fu-Manchu (English Library)', '0003701719', 'Product Description', 'Missing', '', '9/25/14 4:30:23 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('Z9E84TACJU', 'Mein Anzieh-Stickerbuch: Sportler aus aller Welt', '1782321276', 'Product Description', 'Missing', '', '9/25/14 2:43:06 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZF93BOC02M', 'Ich wünschte...', '1445470942', 'Image', 'Missing', '', '9/25/14 5:10:03 AM P', 'Quality', 'Active', 'Images can make your product more attractive to customers and help them make buying decisions.', NULL, NULL),
('ZF93BOC02M', 'Ich wünschte...', '1445470942', 'Product Description', 'Missing', '', '9/25/14 5:10:05 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZKUIPMJ4OL', 'Dogfight', '0374921687', 'Product Description', 'Missing', '', '9/25/14 12:47:56 AM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZM74YVFQD1', 'Opportunities Global Intermediate Students\' Book (Opportunities)', '0582854156', 'Product Description', 'Missing', '', '9/24/14 10:35:27 PM ', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZNBHI4T5LE', 'The Handsome Man\'s De Luxe Cafe', '1408704331', 'Product Description', 'Missing', '', '9/25/14 4:44:11 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZQP84R3VH6', 'Haunted in Death/Eternity in Death', '0749958480', 'Product Description', 'Missing', '', '9/25/14 3:15:38 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZRHWC2EG1I', 'The Long Shadow', '0857206370', 'Product Description', 'Missing', '', '9/25/14 3:22:50 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZUNKCXOJ2D', 'Silence Your Mind', '1409153932', 'Product Description', 'Missing', '', '9/25/14 3:27:54 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZVP1E0KG2D', 'Olive Kitteridge', '0743467728', 'Product Description', 'Missing', '', '9/25/14 3:46:07 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL),
('ZVU427Q1MO', 'The Maleficent Seven (From the World of Skulduggery Pleasant)', '000753194X', 'Product Description', 'Missing', '', '9/25/14 1:41:33 AM P', 'Quality', 'Active', 'Product_description is important for helping customers find your product.', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `compareoffer`
-- (See below for the actual view)
--
CREATE TABLE `compareoffer` (
`id` int(11)
,`SKU` varchar(40)
,`ASIN` varchar(200)
,`Estimated` decimal(20,6)
,`OfferPrice` decimal(8,2)
,`URL` varchar(200)
,`Merchant_Name` varchar(200)
,`TotalNew` varchar(200)
,`AvailabilityType` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(2) NOT NULL,
  `profit` decimal(8,2) NOT NULL,
  `amazon_fee` decimal(8,2) NOT NULL,
  `max_profit` decimal(8,0) NOT NULL,
  `amazon_operation_fee` decimal(8,2) NOT NULL,
  `min_availability` int(4) NOT NULL,
  `required_seller_feedback` int(4) NOT NULL,
  `required_seller_positive_feedback_rating` int(4) NOT NULL,
  `service_url` varchar(250) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `item_condition` varchar(2000) NOT NULL DEFAULT 'Brand New, Perfect Condition, Great Customer Service! Please allow 10-20 business days for delivery. 100% Money Back Guarantee.',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eldorado_prices`
--

CREATE TABLE `eldorado_prices` (
  `id` int(11) NOT NULL,
  `SKU` varchar(50) NOT NULL,
  `UPC` varchar(250) NOT NULL,
  `PRICE` decimal(8,2) DEFAULT NULL,
  `Manufacturer` varchar(250) NOT NULL,
  `MAP` decimal(8,2) DEFAULT NULL,
  `Restriction` varchar(500) NOT NULL,
  `eldorado_products_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eldorado_products`
--

CREATE TABLE `eldorado_products` (
  `id` int(11) NOT NULL,
  `SKU` varchar(50) NOT NULL,
  `Description` text,
  `PRICE` decimal(8,2) DEFAULT NULL,
  `MAP` decimal(8,2) DEFAULT NULL,
  `Grouping_Class` varchar(50) NOT NULL,
  `Product_Class` varchar(50) DEFAULT NULL,
  `Inventory_Class` varchar(50) DEFAULT NULL,
  `Battery_Type` varchar(50) DEFAULT NULL,
  `Date_Active` datetime NOT NULL,
  `Date_Expected` datetime NOT NULL,
  `Preferred_Vendor` varchar(250) NOT NULL,
  `Manufacturer` varchar(250) NOT NULL,
  `Inactive` varchar(1) NOT NULL,
  `Length` varchar(250) NOT NULL,
  `Closeout` varchar(1) NOT NULL,
  `UPC` varchar(250) NOT NULL,
  `Brand` varchar(250) NOT NULL,
  `Remarks` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entrenue_inventory`
--

CREATE TABLE `entrenue_inventory` (
  `id` int(11) NOT NULL,
  `item-name` varchar(200) DEFAULT NULL,
  `item-description` varchar(200) DEFAULT NULL,
  `listing-id` varchar(200) DEFAULT NULL,
  `seller-sku` varchar(200) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `open-date` varchar(200) DEFAULT NULL,
  `image-url` varchar(200) DEFAULT NULL,
  `item-is-marketplace` varchar(200) DEFAULT NULL,
  `product-id-type` varchar(200) DEFAULT NULL,
  `zshop-shipping-fee` varchar(200) DEFAULT NULL,
  `item-note` varchar(200) DEFAULT NULL,
  `item-condition` varchar(200) DEFAULT NULL,
  `zshop-category1` varchar(200) DEFAULT NULL,
  `zshop-browse-path` varchar(200) DEFAULT NULL,
  `zshop-storefront-feature` varchar(200) DEFAULT NULL,
  `asin1` varchar(200) DEFAULT NULL,
  `asin2` varchar(200) DEFAULT NULL,
  `asin3` varchar(200) DEFAULT NULL,
  `will-ship-internationally` varchar(200) DEFAULT NULL,
  `expedited-shipping` varchar(200) DEFAULT NULL,
  `zshop-boldface` varchar(200) DEFAULT NULL,
  `product-id` varchar(200) DEFAULT NULL,
  `bid-for-featured-placement` varchar(200) DEFAULT NULL,
  `add-delete` varchar(200) DEFAULT NULL,
  `pending-quantity` varchar(200) DEFAULT NULL,
  `fulfillment-channel` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `item_offer_id` int(11) NOT NULL,
  `previous_offer_price` decimal(8,2) NOT NULL,
  `previous_quantity` int(4) NOT NULL,
  `offer_price` decimal(8,2) NOT NULL,
  `mirage_inventory_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entrenue_products`
--

CREATE TABLE `entrenue_products` (
  `id` int(11) NOT NULL,
  `SKU` varchar(50) NOT NULL,
  `ASIN` varchar(100) DEFAULT NULL,
  `PRODUCT_ID` int(4) NOT NULL,
  `MODEL` varchar(250) NOT NULL,
  `PRODUCT_STYLE_OPTION` varchar(250) NOT NULL,
  `NAME` varchar(250) NOT NULL,
  `DESCRIPTION` text,
  `MANUFACTURER` varchar(250) DEFAULT NULL,
  `BOOK_BINDING` varchar(200) NOT NULL,
  `PRICE` decimal(8,2) DEFAULT NULL,
  `MAP` varchar(30) DEFAULT '0',
  `QUANTITY` int(11) DEFAULT NULL,
  `UPC` varchar(250) DEFAULT NULL,
  `DATE_ADDED` datetime NOT NULL,
  `DATE_MODIFIED` datetime NOT NULL,
  `STATUS` varchar(250) NOT NULL,
  `PRODUCT_URL` varchar(250) NOT NULL,
  `IMAGE_1` varchar(250) NOT NULL,
  `IMAGE_2` varchar(250) NOT NULL,
  `IMAGE_3` varchar(250) NOT NULL,
  `IMAGE_4` varchar(250) NOT NULL,
  `IMAGE_5` varchar(250) NOT NULL,
  `IMAGE_6` varchar(250) NOT NULL,
  `IMAGE_7` varchar(250) NOT NULL,
  `IMAGE_8` varchar(250) NOT NULL,
  `IMAGE_9` varchar(250) NOT NULL,
  `IMAGE_10` varchar(250) NOT NULL,
  `IMAGE_11` varchar(250) NOT NULL,
  `IMAGE_12` varchar(250) NOT NULL,
  `IMAGE_13` varchar(250) NOT NULL,
  `IMAGE_14` varchar(250) NOT NULL,
  `IMAGE_15` varchar(250) NOT NULL,
  `WATER_RESISTANCE` varchar(250) NOT NULL,
  `BATTERY` varchar(250) NOT NULL,
  `POWER_SOURCE` varchar(250) NOT NULL,
  `TYPE_OF_PACKAGING` varchar(250) NOT NULL,
  `COUNTRY_OF_ORIGIN` varchar(250) NOT NULL,
  `MATERIALS` varchar(250) NOT NULL,
  `DESIGNED_IN` varchar(250) NOT NULL,
  `ITEM_WEIGHT` varchar(250) NOT NULL,
  `ITEM_HEIGHT` varchar(250) NOT NULL,
  `ITEM_WIDTH` varchar(250) NOT NULL,
  `ITEM_DEPTH` varchar(250) NOT NULL,
  `PACKAGE_WEIGHT` varchar(250) NOT NULL,
  `TAB_INGREDIENTS` varchar(250) NOT NULL,
  `TAB_WHATS_INCLUDED` varchar(250) NOT NULL,
  `TAB_RESTRICTIONS` varchar(250) NOT NULL,
  `TAB_SPECIAL_OFFERS` varchar(250) NOT NULL,
  `TAB_VIDEO` varchar(250) NOT NULL,
  `CATEGORY_1` varchar(250) NOT NULL,
  `CATEGORY_2` varchar(250) NOT NULL,
  `CATEGORY_3` varchar(250) NOT NULL,
  `CATEGORY_4` varchar(250) NOT NULL,
  `CATEGORY_5` varchar(250) NOT NULL,
  `CATEGORY_6` varchar(250) NOT NULL,
  `CATEGORY_7` varchar(250) NOT NULL,
  `CATEGORY_8` varchar(250) NOT NULL,
  `CATEGORY_9` varchar(250) NOT NULL,
  `CATEGORY_10` varchar(250) NOT NULL,
  `CATEGORY_11` varchar(250) NOT NULL,
  `CATEGORY_12` varchar(250) NOT NULL,
  `CATEGORY_13` varchar(250) NOT NULL,
  `CATEGORY_14` varchar(250) NOT NULL,
  `CATEGORY_15` varchar(250) NOT NULL,
  `CATEGORY_16` varchar(250) NOT NULL,
  `CATEGORY_17` varchar(250) NOT NULL,
  `CATEGORY_18` varchar(250) NOT NULL,
  `CATEGORY_19` varchar(250) NOT NULL,
  `CATEGORY_20` varchar(250) NOT NULL,
  `MWS_CATEGORY` varchar(250) NOT NULL,
  `ns2_Binding` varchar(200) NOT NULL,
  `Activated` int(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `existing_product`
-- (See below for the actual view)
--
CREATE TABLE `existing_product` (
`sku` varchar(200)
,`asin` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(250) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `amount`, `description`, `unit`, `supplier_id`, `created`, `updated`) VALUES
(1, 2.5, 'Dropshiping', '2', 1, '2016-01-16 14:59:11', '2016-01-16 14:59:11'),
(2, 2.5, 'Dropshiping', '2', 2, '2016-01-16 23:01:49', '2016-01-16 23:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `SKU` varchar(40) DEFAULT NULL,
  `ASIN` varchar(40) DEFAULT NULL,
  `ItemCondition` varchar(20) DEFAULT NULL,
  `ItemSubcondition` varchar(50) NOT NULL,
  `FulfillmentChannel` varchar(20) DEFAULT NULL,
  `ShipsDomestically` varchar(20) DEFAULT NULL,
  `ShippingTime_max` varchar(20) DEFAULT NULL,
  `SellerPositiveFeedbackRating` int(4) NOT NULL,
  `NumberOfOfferListingsConsidered` int(4) DEFAULT NULL,
  `SellerFeedbackCount` int(4) NOT NULL,
  `LandedPrice` decimal(8,2) DEFAULT NULL,
  `ListingPrice` decimal(8,2) NOT NULL,
  `Shipping` decimal(8,2) NOT NULL,
  `MultipleOffersAtLowestPrice` varchar(20) DEFAULT NULL,
  `SellerAmount` int(4) NOT NULL,
  `Status` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_info`
--

CREATE TABLE `history_info` (
  `id` int(4) NOT NULL,
  `sequence` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `item-name` varchar(200) DEFAULT NULL,
  `item-description` varchar(200) DEFAULT NULL,
  `listing-id` varchar(200) DEFAULT NULL,
  `seller-sku` varchar(200) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `open-date` varchar(200) DEFAULT NULL,
  `image-url` varchar(200) DEFAULT NULL,
  `item-is-marketplace` varchar(200) DEFAULT NULL,
  `product-id-type` varchar(200) DEFAULT NULL,
  `zshop-shipping-fee` varchar(200) DEFAULT NULL,
  `item-note` varchar(200) DEFAULT NULL,
  `item-condition` varchar(200) DEFAULT NULL,
  `zshop-category1` varchar(200) DEFAULT NULL,
  `zshop-browse-path` varchar(200) DEFAULT NULL,
  `zshop-storefront-feature` varchar(200) DEFAULT NULL,
  `asin1` varchar(200) DEFAULT NULL,
  `asin2` varchar(200) DEFAULT NULL,
  `asin3` varchar(200) DEFAULT NULL,
  `will-ship-internationally` varchar(200) DEFAULT NULL,
  `expedited-shipping` varchar(200) DEFAULT NULL,
  `zshop-boldface` varchar(200) DEFAULT NULL,
  `product-id` varchar(200) DEFAULT NULL,
  `bid-for-featured-placement` varchar(200) DEFAULT NULL,
  `add-delete` varchar(200) DEFAULT NULL,
  `pending-quantity` varchar(200) DEFAULT NULL,
  `fulfillment-channel` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `item_offer_id` int(11) NOT NULL,
  `previous_offer_price` decimal(8,2) NOT NULL,
  `previous_quantity` int(4) NOT NULL,
  `offer_price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item-name`, `item-description`, `listing-id`, `seller-sku`, `price`, `quantity`, `open-date`, `image-url`, `item-is-marketplace`, `product-id-type`, `zshop-shipping-fee`, `item-note`, `item-condition`, `zshop-category1`, `zshop-browse-path`, `zshop-storefront-feature`, `asin1`, `asin2`, `asin3`, `will-ship-internationally`, `expedited-shipping`, `zshop-boldface`, `product-id`, `bid-for-featured-placement`, `add-delete`, `pending-quantity`, `fulfillment-channel`, `user_id`, `modified`, `item_offer_id`, `previous_offer_price`, `previous_quantity`, `offer_price`) VALUES
('The Right-Brain Business Plan: A Creative, Visual Map for Success [Paperback]...', '', '1103O2PAS8Y', '2QCTMD6I', '20.32', 1, '2014-11-03 12:20:33 PST', '', 'y', '1', '', 'Brand New, Perfect Condition, Great Customer Service! Please allow 10-20 business days for delivery. 100% Money Back Guarantee.', '11', '', '', '', '1577319443', '', '', '1', 'N', '', '1577319443', '', '', '0', 'DEFAULT', NULL, NULL, 0, '0.00', 0, '0.00'),
('Foundations of Business by Pride, William M.; Hughes, Robert J.; Kapoor, Jack R.', '', '1031OY1TW2A', '2R5LVIJNQZ', '108.10', 1, '2014-10-31 11:12:10 PDT', '', 'y', '1', '', '', '', '', '', '', '1111580154', '', '', '1', 'N', '', '1111580154', '', '', '0', 'DEFAULT', NULL, NULL, 0, '0.00', 0, '0.00'),
('The Ride: New Custom Motorcycles and their Builders [Hardcover] by Chris Hunt...', '', '1031OY1Y2PM', '42JEL9N3', '72.22', 1, '2014-10-31 11:16:04 PDT', '', 'y', '1', '', '', '', '', '', '', '3899554914', '', '', '1', 'N', '', '3899554914', '', '', '0', 'DEFAULT', NULL, NULL, 0, '0.00', 0, '0.00'),
('The Happiness Trap: Stop Struggling, Start Living [Import] [Paperback] by Dr....', '', '1031OY2ATBM', 'BDP3CWB7', '15.28', 1, '2014-10-31 11:29:14 PDT', '', 'y', '1', '', '', '', '', '', '', '184529825X', '', '', '1', 'N', '', '184529825X', '', '', '0', 'DEFAULT', NULL, NULL, 0, '0.00', 0, '0.00'),
('The Right-Brain Business Plan: A Creative, Visual Map for Success [Paperback]...', '', '1024OL1Z9WA', 'BDP45T9M', '16.14', 1, '2014-10-23 20:46:35 PDT', '', 'y', '1', '', '', '', '', '', '', '1577319443', '', '', '1', 'N', '', '1577319443', '', '', '0', 'DEFAULT', NULL, NULL, 0, '0.00', 0, '0.00'),
('The Ride: New Custom Motorcycles and their Builders [Hardcover] by Chris Hunt...', '', '1103O2P7DLY', 'FCJ38LER', '69.24', 1, '2014-11-03 12:18:20 PST', '', 'y', '1', '', 'Brand New, Perfect Condition, Great Customer Service! Please allow 10-20 business days for delivery. 100% Money Back Guarantee.', '11', '', '', '', '3899554914', '', '', '1', 'N', '', '3899554914', '', '', '0', 'DEFAULT', NULL, NULL, 0, '0.00', 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_pulled`
--

CREATE TABLE `inventory_pulled` (
  `sku` varchar(40) NOT NULL,
  `ansi` varchar(40) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_offer`
--

CREATE TABLE `item_offer` (
  `id` int(11) NOT NULL,
  `ASIN` varchar(200) DEFAULT NULL,
  `SKU` varchar(40) NOT NULL,
  `LowestNewPrice_CurrencyCode` varchar(200) DEFAULT NULL,
  `LowestNewPrice_FormattedPrice` decimal(8,2) DEFAULT NULL,
  `LowestUsedPrice_CurrencyCode` varchar(200) DEFAULT NULL,
  `LowestUsedPrice_FormattedPrice` decimal(8,2) DEFAULT NULL,
  `TotalNew` varchar(200) DEFAULT NULL,
  `TotalUsed` varchar(200) DEFAULT NULL,
  `TotalCollectible` varchar(200) DEFAULT NULL,
  `TotalRefurbished` varchar(200) DEFAULT NULL,
  `Offers_TotalOffers` varchar(200) DEFAULT NULL,
  `Offers_TotalOfferPages` varchar(200) DEFAULT NULL,
  `Offers_MoreOffersUrl` varchar(200) DEFAULT NULL,
  `Merchant_Name` varchar(200) DEFAULT NULL,
  `OfferAttributes_Condition` varchar(200) DEFAULT NULL,
  `OfferListing_OfferListingId` varchar(200) DEFAULT NULL,
  `OfferListing_Price_CurrencyCode` varchar(200) DEFAULT NULL,
  `OfferListing_Price_FormattedPrice` decimal(8,2) DEFAULT NULL,
  `AmountSaved_CurrencyCode` varchar(200) DEFAULT NULL,
  `AmountSaved_FormattedPrice` decimal(8,2) DEFAULT NULL,
  `PercentageSaved` varchar(200) DEFAULT NULL,
  `Availability` varchar(200) DEFAULT NULL,
  `AvailabilityType` varchar(200) DEFAULT NULL,
  `Availability_MinimumHours` varchar(200) DEFAULT NULL,
  `Availability_MaximumHours` varchar(200) DEFAULT NULL,
  `Availability_IsEligibleForSuperSaverShipping` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `original_price` decimal(8,2) NOT NULL,
  `original_quantity` int(4) NOT NULL,
  `xml` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_offer`
--

INSERT INTO `item_offer` (`id`, `ASIN`, `SKU`, `LowestNewPrice_CurrencyCode`, `LowestNewPrice_FormattedPrice`, `LowestUsedPrice_CurrencyCode`, `LowestUsedPrice_FormattedPrice`, `TotalNew`, `TotalUsed`, `TotalCollectible`, `TotalRefurbished`, `Offers_TotalOffers`, `Offers_TotalOfferPages`, `Offers_MoreOffersUrl`, `Merchant_Name`, `OfferAttributes_Condition`, `OfferListing_OfferListingId`, `OfferListing_Price_CurrencyCode`, `OfferListing_Price_FormattedPrice`, `AmountSaved_CurrencyCode`, `AmountSaved_FormattedPrice`, `PercentageSaved`, `Availability`, `AvailabilityType`, `Availability_MinimumHours`, `Availability_MaximumHours`, `Availability_IsEligibleForSuperSaverShipping`, `created`, `modified`, `user_id`, `original_price`, `original_quantity`, `xml`) VALUES
(1, '1577319443', '2QCTMD6I', 'USD', '9.50', '', '0.00', '58', '', '', '', '', '', 'http://www.amazon.com/gp/offer-listing/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443', 'thebookreaders', 'New', 'DzMso%2BTw2AiK4%2B5IHlHJRbTVtS3dDTADQbcfl15M9zJjot5y1vSlvt8RrWWOyvHrKKzjh2Ou5Xj6oEspJ%2FI8eXe4d4NpkOD%2F1hCx8tcAkE8JkVAHg8eYDewWgtwMXKTtrxAFps%2F65b%2F1zUzG%2BUfpGQ%3D%3D', 'USD', '9.50', NULL, NULL, NULL, 'Usually ships in 1-2 business days', 'now', '', '', '', '2015-06-09 15:37:13', '2015-06-09 15:37:13', NULL, '20.32', 1, '<?xml version=\"1.0\"?>\n<ItemSearchResponse xmlns=\"http://webservices.amazon.com/AWSECommerceService/2011-08-01\"><OperationRequest><RequestId>d5bc3b43-3c16-42bc-85e2-bac66633159b</RequestId><Arguments><Argument Name=\"AWSAccessKeyId\" Value=\"AKIAI4QE44X5C3CMGHOQ\"/><Argument Name=\"AssociateTag\" Value=\"greenxo-20\"/><Argument Name=\"Availability\" Value=\"Available\"/><Argument Name=\"Condition\" Value=\"New\"/><Argument Name=\"Keywords\" Value=\"1577319443\"/><Argument Name=\"Operation\" Value=\"ItemSearch\"/><Argument Name=\"ResponseGroup\" Value=\"ItemAttributes, Offers, OfferFull, OfferSummary\"/><Argument Name=\"SearchIndex\" Value=\"Books\"/><Argument Name=\"Service\" Value=\"AWSECommerceService\"/><Argument Name=\"Timestamp\" Value=\"2015-06-09T19:37:12Z\"/><Argument Name=\"Version\" Value=\"2011-08-01\"/><Argument Name=\"Signature\" Value=\"q/S916IXeLVoiZleRZHRgWS+q0TPokcYji3LOJoxaUk=\"/></Arguments><RequestProcessingTime>0.0337030000000000</RequestProcessingTime></OperationRequest><Items><Request><IsValid>True</IsValid><ItemSearchRequest><Availability>Available</Availability><Condition>New</Condition><Keywords>1577319443</Keywords><ResponseGroup>ItemAttributes</ResponseGroup><ResponseGroup>Offers</ResponseGroup><ResponseGroup>OfferFull</ResponseGroup><ResponseGroup>OfferSummary</ResponseGroup><SearchIndex>Books</SearchIndex></ItemSearchRequest></Request><TotalResults>1</TotalResults><TotalPages>1</TotalPages><MoreSearchResultsUrl>http://www.amazon.com/gp/redirect.html?linkCode=xm2&amp;SubscriptionId=AKIAI4QE44X5C3CMGHOQ&amp;location=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fsearch%3Fkeywords%3D1577319443%26url%3Dsearch-alias%253Dstripbooks&amp;tag=greenxo-20&amp;creative=386001&amp;camp=2025</MoreSearchResultsUrl><Item><ASIN>1577319443</ASIN><DetailPageURL>http://www.amazon.com/The-Right-Brain-Business-Plan-Creative/dp/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3D1577319443</DetailPageURL><ItemLinks><ItemLink><Description>Technical Details</Description><URL>http://www.amazon.com/The-Right-Brain-Business-Plan-Creative/dp/tech-data/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>Add To Baby Registry</Description><URL>http://www.amazon.com/gp/registry/baby/add-item.html%3Fasin.0%3D1577319443%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>Add To Wedding Registry</Description><URL>http://www.amazon.com/gp/registry/wedding/add-item.html%3Fasin.0%3D1577319443%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>Add To Wishlist</Description><URL>http://www.amazon.com/gp/registry/wishlist/add-item.html%3Fasin.0%3D1577319443%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>Tell A Friend</Description><URL>http://www.amazon.com/gp/pdp/taf/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>All Customer Reviews</Description><URL>http://www.amazon.com/review/product/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>All Offers</Description><URL>http://www.amazon.com/gp/offer-listing/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink></ItemLinks><ItemAttributes><Author>Jennifer Lee</Author><Binding>Paperback</Binding><Creator Role=\"Illustrator\">Kate Prentiss</Creator><Creator Role=\"Foreword\">Chris Guillebeau</Creator><EAN>9781577319443</EAN><EANList><EANListElement>9781577319443</EANListElement></EANList><ISBN>1577319443</ISBN><ItemDimensions><Height Units=\"hundredths-inches\">900</Height><Length Units=\"hundredths-inches\">50</Length><Weight Units=\"hundredths-pounds\">88</Weight><Width Units=\"hundredths-inches\">700</Width></ItemDimensions><Label>New World Library</Label><Languages><Language><Name>English</Name><Type>Published</Type></Language><Language><Name>English</Name><Type>Original Language</Type></Language><Language><Name>English</Name><Type>Unknown</Type></Language></Languages><ListPrice><Amount>1995</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$19.95</FormattedPrice></ListPrice><Manufacturer>New World Library</Manufacturer><NumberOfItems>1</NumberOfItems><NumberOfPages>240</NumberOfPages><PackageDimensions><Height Units=\"hundredths-inches\">63</Height><Length Units=\"hundredths-inches\">890</Length><Weight Units=\"hundredths-pounds\">66</Weight><Width Units=\"hundredths-inches\">693</Width></PackageDimensions><PackageQuantity>1</PackageQuantity><ProductGroup>Book</ProductGroup><ProductTypeName>ABIS_BOOK</ProductTypeName><PublicationDate>2011-02-23</PublicationDate><Publisher>New World Library</Publisher><Studio>New World Library</Studio><Title>The Right-Brain Business Plan: A Creative, Visual Map for Success</Title></ItemAttributes><OfferSummary><LowestNewPrice><Amount>950</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$9.50</FormattedPrice></LowestNewPrice><LowestUsedPrice><Amount>598</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$5.98</FormattedPrice></LowestUsedPrice><LowestCollectiblePrice><Amount>1297</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$12.97</FormattedPrice></LowestCollectiblePrice><TotalNew>58</TotalNew><TotalUsed>47</TotalUsed><TotalCollectible>2</TotalCollectible><TotalRefurbished>0</TotalRefurbished></OfferSummary><Offers><TotalOffers>1</TotalOffers><TotalOfferPages>1</TotalOfferPages><MoreOffersUrl>http://www.amazon.com/gp/offer-listing/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</MoreOffersUrl><Offer><Merchant><Name>thebookreaders</Name></Merchant><OfferAttributes><Condition>New</Condition></OfferAttributes><OfferListing><OfferListingId>DzMso%2BTw2AiK4%2B5IHlHJRbTVtS3dDTADQbcfl15M9zJjot5y1vSlvt8RrWWOyvHrKKzjh2Ou5Xj6oEspJ%2FI8eXe4d4NpkOD%2F1hCx8tcAkE8JkVAHg8eYDewWgtwMXKTtrxAFps%2F65b%2F1zUzG%2BUfpGQ%3D%3D</OfferListingId><Price><Amount>950</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$9.50</FormattedPrice></Price><AmountSaved><Amount>1045</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$10.45</FormattedPrice></AmountSaved><PercentageSaved>52</PercentageSaved><Availability>Usually ships in 1-2 business days</Availability><AvailabilityAttributes><AvailabilityType>now</AvailabilityType><MinimumHours>24</MinimumHours><MaximumHours>48</MaximumHours></AvailabilityAttributes><IsEligibleForSuperSaverShipping>0</IsEligibleForSuperSaverShipping></OfferListing></Offer></Offers></Item></Items></ItemSearchResponse>\n'),
(2, '1111580154', '2R5LVIJNQZ', 'USD', '40.00', '', '0.00', '26', '', '', '', '', '', 'http://www.amazon.com/gp/offer-listing/1111580154%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154', 'equusbk1', 'New', 'uWszXiRHvRNCSrcBdjiR83pCyWECZWw5dyPWR%2F8AOZumCfBLKKVaqVO13Ejujbiq0rLHhxNvJuvTA1PNnuL011TgJF87sBFrSMhc%2BJIJfUzkgRL5L3YvYa0ecrClmEsYX1pCbMtJFJlHhl8w9OnEXA%3D%3D', 'USD', '50.95', NULL, NULL, NULL, 'Usually ships in 1-2 business days', 'now', '', '', '', '2015-06-09 15:37:13', '2015-06-09 15:37:13', NULL, '108.10', 1, '<?xml version=\"1.0\"?>\n<ItemSearchResponse xmlns=\"http://webservices.amazon.com/AWSECommerceService/2011-08-01\"><OperationRequest><RequestId>83ac482f-c6ed-4709-957f-1ed08c34b02d</RequestId><Arguments><Argument Name=\"AWSAccessKeyId\" Value=\"AKIAI4QE44X5C3CMGHOQ\"/><Argument Name=\"AssociateTag\" Value=\"greenxo-20\"/><Argument Name=\"Availability\" Value=\"Available\"/><Argument Name=\"Condition\" Value=\"New\"/><Argument Name=\"Keywords\" Value=\"1111580154\"/><Argument Name=\"Operation\" Value=\"ItemSearch\"/><Argument Name=\"ResponseGroup\" Value=\"ItemAttributes, Offers, OfferFull, OfferSummary\"/><Argument Name=\"SearchIndex\" Value=\"Books\"/><Argument Name=\"Service\" Value=\"AWSECommerceService\"/><Argument Name=\"Timestamp\" Value=\"2015-06-09T19:37:13Z\"/><Argument Name=\"Version\" Value=\"2011-08-01\"/><Argument Name=\"Signature\" Value=\"IpOZZyy8t01o7UrEX8m0xUrHBS3ToMk1DX6Lqbcw45M=\"/></Arguments><RequestProcessingTime>0.0223210000000000</RequestProcessingTime></OperationRequest><Items><Request><IsValid>True</IsValid><ItemSearchRequest><Availability>Available</Availability><Condition>New</Condition><Keywords>1111580154</Keywords><ResponseGroup>ItemAttributes</ResponseGroup><ResponseGroup>Offers</ResponseGroup><ResponseGroup>OfferFull</ResponseGroup><ResponseGroup>OfferSummary</ResponseGroup><SearchIndex>Books</SearchIndex></ItemSearchRequest></Request><TotalResults>1</TotalResults><TotalPages>1</TotalPages><MoreSearchResultsUrl>http://www.amazon.com/gp/redirect.html?linkCode=xm2&amp;SubscriptionId=AKIAI4QE44X5C3CMGHOQ&amp;location=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fsearch%3Fkeywords%3D1111580154%26url%3Dsearch-alias%253Dstripbooks&amp;tag=greenxo-20&amp;creative=386001&amp;camp=2025</MoreSearchResultsUrl><Item><ASIN>1111580154</ASIN><DetailPageURL>http://www.amazon.com/Foundations-Business-William-M-Pride/dp/1111580154%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3D1111580154</DetailPageURL><ItemLinks><ItemLink><Description>Technical Details</Description><URL>http://www.amazon.com/Foundations-Business-William-M-Pride/dp/tech-data/1111580154%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154</URL></ItemLink><ItemLink><Description>Add To Baby Registry</Description><URL>http://www.amazon.com/gp/registry/baby/add-item.html%3Fasin.0%3D1111580154%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154</URL></ItemLink><ItemLink><Description>Add To Wedding Registry</Description><URL>http://www.amazon.com/gp/registry/wedding/add-item.html%3Fasin.0%3D1111580154%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154</URL></ItemLink><ItemLink><Description>Add To Wishlist</Description><URL>http://www.amazon.com/gp/registry/wishlist/add-item.html%3Fasin.0%3D1111580154%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154</URL></ItemLink><ItemLink><Description>Tell A Friend</Description><URL>http://www.amazon.com/gp/pdp/taf/1111580154%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154</URL></ItemLink><ItemLink><Description>All Customer Reviews</Description><URL>http://www.amazon.com/review/product/1111580154%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154</URL></ItemLink><ItemLink><Description>All Offers</Description><URL>http://www.amazon.com/gp/offer-listing/1111580154%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154</URL></ItemLink></ItemLinks><ItemAttributes><Author>William M. Pride</Author><Author>Robert J. Hughes</Author><Author>Jack R. Kapoor</Author><Binding>Paperback</Binding><EAN>9781111580155</EAN><EANList><EANListElement>9781111580155</EANListElement></EANList><Edition>3</Edition><ISBN>1111580154</ISBN><IsEligibleForTradeIn>1</IsEligibleForTradeIn><ItemDimensions><Height Units=\"hundredths-inches\">90</Height><Length Units=\"hundredths-inches\">1070</Length><Weight Units=\"hundredths-pounds\">235</Weight><Width Units=\"hundredths-inches\">840</Width></ItemDimensions><Label>Cengage Learning</Label><Languages><Language><Name>English</Name><Type>Published</Type></Language><Language><Name>English</Name><Type>Original Language</Type></Language><Language><Name>English</Name><Type>Unknown</Type></Language></Languages><ListPrice><Amount>9895</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$98.95</FormattedPrice></ListPrice><Manufacturer>Cengage Learning</Manufacturer><NumberOfItems>1</NumberOfItems><NumberOfPages>560</NumberOfPages><PackageDimensions><Height Units=\"hundredths-inches\">90</Height><Length Units=\"hundredths-inches\">1080</Length><Weight Units=\"hundredths-pounds\">243</Weight><Width Units=\"hundredths-inches\">840</Width></PackageDimensions><PackageQuantity>1</PackageQuantity><ProductGroup>Book</ProductGroup><ProductTypeName>ABIS_BOOK</ProductTypeName><PublicationDate>2012-01-01</PublicationDate><Publisher>Cengage Learning</Publisher><Studio>Cengage Learning</Studio><Title>Foundations of Business</Title><TradeInValue><Amount>959</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$9.59</FormattedPrice></TradeInValue></ItemAttributes><OfferSummary><LowestNewPrice><Amount>4000</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$40.00</FormattedPrice></LowestNewPrice><LowestUsedPrice><Amount>1611</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$16.11</FormattedPrice></LowestUsedPrice><TotalNew>26</TotalNew><TotalUsed>73</TotalUsed><TotalCollectible>0</TotalCollectible><TotalRefurbished>0</TotalRefurbished></OfferSummary><Offers><TotalOffers>1</TotalOffers><TotalOfferPages>1</TotalOfferPages><MoreOffersUrl>http://www.amazon.com/gp/offer-listing/1111580154%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1111580154</MoreOffersUrl><Offer><Merchant><Name>equusbk1</Name></Merchant><OfferAttributes><Condition>New</Condition></OfferAttributes><OfferListing><OfferListingId>uWszXiRHvRNCSrcBdjiR83pCyWECZWw5dyPWR%2F8AOZumCfBLKKVaqVO13Ejujbiq0rLHhxNvJuvTA1PNnuL011TgJF87sBFrSMhc%2BJIJfUzkgRL5L3YvYa0ecrClmEsYX1pCbMtJFJlHhl8w9OnEXA%3D%3D</OfferListingId><Price><Amount>5095</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$50.95</FormattedPrice></Price><AmountSaved><Amount>4800</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$48.00</FormattedPrice></AmountSaved><PercentageSaved>49</PercentageSaved><Availability>Usually ships in 1-2 business days</Availability><AvailabilityAttributes><AvailabilityType>now</AvailabilityType><MinimumHours>24</MinimumHours><MaximumHours>48</MaximumHours></AvailabilityAttributes><IsEligibleForSuperSaverShipping>0</IsEligibleForSuperSaverShipping></OfferListing></Offer></Offers></Item></Items></ItemSearchResponse>\n'),
(3, '3899554914', '42JEL9N3', 'USD', '38.33', '', '0.00', '41', '', '', '', '', '', 'http://www.amazon.com/gp/offer-listing/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914', 'One Global Market', 'New', 'E5NEDO7mC0tnidBgr5SEZpqYwf0Xa3AkHb5gGX7mjLqokT8Zmbc%2BWk8xNmRPFZw8ENFuZKv2CbANGGV%2FDAj6w7XbyQeoWjIxa9p8LsIZql88c4gEIQswBsPPhxTtLXhEu%2BxatpGIeNivdG0vWtaelQ%3D%3D', 'USD', '38.33', NULL, NULL, NULL, 'Usually ships in 1-2 business days', 'now', '', '', '', '2015-06-09 15:37:13', '2015-06-09 15:37:13', NULL, '72.22', 1, '<?xml version=\"1.0\"?>\n<ItemSearchResponse xmlns=\"http://webservices.amazon.com/AWSECommerceService/2011-08-01\"><OperationRequest><RequestId>31a84fb0-bede-4452-be95-dcb10f88725a</RequestId><Arguments><Argument Name=\"AWSAccessKeyId\" Value=\"AKIAI4QE44X5C3CMGHOQ\"/><Argument Name=\"AssociateTag\" Value=\"greenxo-20\"/><Argument Name=\"Availability\" Value=\"Available\"/><Argument Name=\"Condition\" Value=\"New\"/><Argument Name=\"Keywords\" Value=\"3899554914\"/><Argument Name=\"Operation\" Value=\"ItemSearch\"/><Argument Name=\"ResponseGroup\" Value=\"ItemAttributes, Offers, OfferFull, OfferSummary\"/><Argument Name=\"SearchIndex\" Value=\"Books\"/><Argument Name=\"Service\" Value=\"AWSECommerceService\"/><Argument Name=\"Timestamp\" Value=\"2015-06-09T19:37:13Z\"/><Argument Name=\"Version\" Value=\"2011-08-01\"/><Argument Name=\"Signature\" Value=\"cFa225eIt6AeHF+SKCmzmwATE5/b7o5xSp23Nv8gVbM=\"/></Arguments><RequestProcessingTime>0.0277140000000000</RequestProcessingTime></OperationRequest><Items><Request><IsValid>True</IsValid><ItemSearchRequest><Availability>Available</Availability><Condition>New</Condition><Keywords>3899554914</Keywords><ResponseGroup>ItemAttributes</ResponseGroup><ResponseGroup>Offers</ResponseGroup><ResponseGroup>OfferFull</ResponseGroup><ResponseGroup>OfferSummary</ResponseGroup><SearchIndex>Books</SearchIndex></ItemSearchRequest></Request><TotalResults>1</TotalResults><TotalPages>1</TotalPages><MoreSearchResultsUrl>http://www.amazon.com/gp/redirect.html?linkCode=xm2&amp;SubscriptionId=AKIAI4QE44X5C3CMGHOQ&amp;location=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fsearch%3Fkeywords%3D3899554914%26url%3Dsearch-alias%253Dstripbooks&amp;tag=greenxo-20&amp;creative=386001&amp;camp=2025</MoreSearchResultsUrl><Item><ASIN>3899554914</ASIN><DetailPageURL>http://www.amazon.com/The-Ride-Custom-Motorcycles-Builders/dp/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3D3899554914</DetailPageURL><ItemLinks><ItemLink><Description>Technical Details</Description><URL>http://www.amazon.com/The-Ride-Custom-Motorcycles-Builders/dp/tech-data/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>Add To Baby Registry</Description><URL>http://www.amazon.com/gp/registry/baby/add-item.html%3Fasin.0%3D3899554914%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>Add To Wedding Registry</Description><URL>http://www.amazon.com/gp/registry/wedding/add-item.html%3Fasin.0%3D3899554914%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>Add To Wishlist</Description><URL>http://www.amazon.com/gp/registry/wishlist/add-item.html%3Fasin.0%3D3899554914%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>Tell A Friend</Description><URL>http://www.amazon.com/gp/pdp/taf/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>All Customer Reviews</Description><URL>http://www.amazon.com/review/product/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>All Offers</Description><URL>http://www.amazon.com/gp/offer-listing/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink></ItemLinks><ItemAttributes><Binding>Hardcover</Binding><Creator Role=\"Editor\">Chris Hunter</Creator><Creator Role=\"Editor\">R. Klanten</Creator><EAN>9783899554915</EAN><EANList><EANListElement>9783899554915</EANListElement></EANList><ISBN>3899554914</ISBN><IsEligibleForTradeIn>1</IsEligibleForTradeIn><ItemDimensions><Height Units=\"hundredths-inches\">1100</Height><Length Units=\"hundredths-inches\">150</Length><Weight Units=\"hundredths-pounds\">0</Weight><Width Units=\"hundredths-inches\">1275</Width></ItemDimensions><Label>Gestalten</Label><Languages><Language><Name>English</Name><Type>Published</Type></Language><Language><Name>English</Name><Type>Original Language</Type></Language><Language><Name>English</Name><Type>Unknown</Type></Language></Languages><ListPrice><Amount>6500</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$65.00</FormattedPrice></ListPrice><Manufacturer>Gestalten</Manufacturer><NumberOfItems>1</NumberOfItems><NumberOfPages>320</NumberOfPages><PackageDimensions><Height Units=\"hundredths-inches\">134</Height><Length Units=\"hundredths-inches\">1197</Length><Weight Units=\"hundredths-pounds\">520</Weight><Width Units=\"hundredths-inches\">1087</Width></PackageDimensions><ProductGroup>Book</ProductGroup><ProductTypeName>ABIS_BOOK</ProductTypeName><PublicationDate>2013-09-13</PublicationDate><Publisher>Gestalten</Publisher><ReleaseDate>2013-09-13</ReleaseDate><Studio>Gestalten</Studio><Title>The Ride: New Custom Motorcycles and their Builders</Title><TradeInValue><Amount>850</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$8.50</FormattedPrice></TradeInValue></ItemAttributes><OfferSummary><LowestNewPrice><Amount>3833</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$38.33</FormattedPrice></LowestNewPrice><LowestUsedPrice><Amount>3494</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$34.94</FormattedPrice></LowestUsedPrice><TotalNew>41</TotalNew><TotalUsed>18</TotalUsed><TotalCollectible>0</TotalCollectible><TotalRefurbished>0</TotalRefurbished></OfferSummary><Offers><TotalOffers>1</TotalOffers><TotalOfferPages>1</TotalOfferPages><MoreOffersUrl>http://www.amazon.com/gp/offer-listing/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</MoreOffersUrl><Offer><Merchant><Name>One Global Market</Name></Merchant><OfferAttributes><Condition>New</Condition></OfferAttributes><OfferListing><OfferListingId>E5NEDO7mC0tnidBgr5SEZpqYwf0Xa3AkHb5gGX7mjLqokT8Zmbc%2BWk8xNmRPFZw8ENFuZKv2CbANGGV%2FDAj6w7XbyQeoWjIxa9p8LsIZql88c4gEIQswBsPPhxTtLXhEu%2BxatpGIeNivdG0vWtaelQ%3D%3D</OfferListingId><Price><Amount>3833</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$38.33</FormattedPrice></Price><AmountSaved><Amount>2667</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$26.67</FormattedPrice></AmountSaved><PercentageSaved>41</PercentageSaved><Availability>Usually ships in 1-2 business days</Availability><AvailabilityAttributes><AvailabilityType>now</AvailabilityType><MinimumHours>24</MinimumHours><MaximumHours>48</MaximumHours></AvailabilityAttributes><IsEligibleForSuperSaverShipping>0</IsEligibleForSuperSaverShipping></OfferListing></Offer></Offers></Item></Items></ItemSearchResponse>\n'),
(4, '184529825X', 'BDP3CWB7', 'USD', '7.68', '', '0.00', '23', '', '', '', '', '', 'http://www.amazon.com/gp/offer-listing/184529825X%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X', 'BRILANTI BOOKS', 'New', 'q%2BJlUanmDI5Ei%2BCmYr06w4%2BVjQarOIfGAo3seQMt02l5H5zXQjPqUp08HcoLV3Xsn7r1kbv5Oe%2BaEZ0QOpY%2FlTv5EGzMn%2BCaqBOnNypuCh%2BCB%2FmVIjNvXtJAXZhRGU92AMtX58FOK4pejWOEV92YyztZiiZji6Zh', 'USD', '7.68', NULL, NULL, NULL, 'Usually ships in 2-3 business days', 'now', '', '', '', '2015-06-09 15:37:13', '2015-06-09 15:37:13', NULL, '15.28', 1, '<?xml version=\"1.0\"?>\n<ItemSearchResponse xmlns=\"http://webservices.amazon.com/AWSECommerceService/2011-08-01\"><OperationRequest><RequestId>29d2e812-86ee-48dd-9856-a2176c46fe0f</RequestId><Arguments><Argument Name=\"AWSAccessKeyId\" Value=\"AKIAI4QE44X5C3CMGHOQ\"/><Argument Name=\"AssociateTag\" Value=\"greenxo-20\"/><Argument Name=\"Availability\" Value=\"Available\"/><Argument Name=\"Condition\" Value=\"New\"/><Argument Name=\"Keywords\" Value=\"184529825X\"/><Argument Name=\"Operation\" Value=\"ItemSearch\"/><Argument Name=\"ResponseGroup\" Value=\"ItemAttributes, Offers, OfferFull, OfferSummary\"/><Argument Name=\"SearchIndex\" Value=\"Books\"/><Argument Name=\"Service\" Value=\"AWSECommerceService\"/><Argument Name=\"Timestamp\" Value=\"2015-06-09T19:37:13Z\"/><Argument Name=\"Version\" Value=\"2011-08-01\"/><Argument Name=\"Signature\" Value=\"Ggqi45fE2Q8bkB0SWIrdq6ZsxQT0mp4qEf+tMrX5lCg=\"/></Arguments><RequestProcessingTime>0.0403740000000000</RequestProcessingTime></OperationRequest><Items><Request><IsValid>True</IsValid><ItemSearchRequest><Availability>Available</Availability><Condition>New</Condition><Keywords>184529825X</Keywords><ResponseGroup>ItemAttributes</ResponseGroup><ResponseGroup>Offers</ResponseGroup><ResponseGroup>OfferFull</ResponseGroup><ResponseGroup>OfferSummary</ResponseGroup><SearchIndex>Books</SearchIndex></ItemSearchRequest></Request><TotalResults>1</TotalResults><TotalPages>1</TotalPages><MoreSearchResultsUrl>http://www.amazon.com/gp/redirect.html?linkCode=xm2&amp;SubscriptionId=AKIAI4QE44X5C3CMGHOQ&amp;location=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fsearch%3Fkeywords%3D184529825X%26url%3Dsearch-alias%253Dstripbooks&amp;tag=greenxo-20&amp;creative=386001&amp;camp=2025</MoreSearchResultsUrl><Item><ASIN>184529825X</ASIN><DetailPageURL>http://www.amazon.com/The-Happiness-Trap-Struggling-Living/dp/184529825X%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3D184529825X</DetailPageURL><ItemLinks><ItemLink><Description>Technical Details</Description><URL>http://www.amazon.com/The-Happiness-Trap-Struggling-Living/dp/tech-data/184529825X%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X</URL></ItemLink><ItemLink><Description>Add To Baby Registry</Description><URL>http://www.amazon.com/gp/registry/baby/add-item.html%3Fasin.0%3D184529825X%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X</URL></ItemLink><ItemLink><Description>Add To Wedding Registry</Description><URL>http://www.amazon.com/gp/registry/wedding/add-item.html%3Fasin.0%3D184529825X%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X</URL></ItemLink><ItemLink><Description>Add To Wishlist</Description><URL>http://www.amazon.com/gp/registry/wishlist/add-item.html%3Fasin.0%3D184529825X%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X</URL></ItemLink><ItemLink><Description>Tell A Friend</Description><URL>http://www.amazon.com/gp/pdp/taf/184529825X%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X</URL></ItemLink><ItemLink><Description>All Customer Reviews</Description><URL>http://www.amazon.com/review/product/184529825X%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X</URL></ItemLink><ItemLink><Description>All Offers</Description><URL>http://www.amazon.com/gp/offer-listing/184529825X%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X</URL></ItemLink></ItemLinks><ItemAttributes><Author>Dr. Russ Harris</Author><Binding>Paperback</Binding><CatalogNumberList><CatalogNumberListElement>184529825X</CatalogNumberListElement></CatalogNumberList><EAN>9781845298258</EAN><EANList><EANListElement>9781845298258</EANListElement></EANList><Edition>Reprint</Edition><Format>Import</Format><ISBN>184529825X</ISBN><ItemDimensions><Height Units=\"hundredths-inches\">776</Height><Length Units=\"hundredths-inches\">500</Length><Weight Units=\"hundredths-pounds\">53</Weight><Width Units=\"hundredths-inches\">87</Width></ItemDimensions><Label>Robinson Publishing</Label><Languages><Language><Name>English</Name><Type>Published</Type></Language><Language><Name>English</Name><Type>Original Language</Type></Language><Language><Name>English</Name><Type>Unknown</Type></Language></Languages><Manufacturer>Robinson Publishing</Manufacturer><NumberOfItems>1</NumberOfItems><NumberOfPages>271</NumberOfPages><PackageDimensions><Height Units=\"hundredths-inches\">94</Height><Length Units=\"hundredths-inches\">764</Length><Weight Units=\"hundredths-pounds\">66</Weight><Width Units=\"hundredths-inches\">504</Width></PackageDimensions><ProductGroup>Book</ProductGroup><ProductTypeName>ABIS_BOOK</ProductTypeName><PublicationDate>2008</PublicationDate><Publisher>Robinson Publishing</Publisher><Studio>Robinson Publishing</Studio><Title>The Happiness Trap: Stop Struggling, Start Living</Title></ItemAttributes><OfferSummary><LowestNewPrice><Amount>768</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$7.68</FormattedPrice></LowestNewPrice><LowestUsedPrice><Amount>578</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$5.78</FormattedPrice></LowestUsedPrice><TotalNew>23</TotalNew><TotalUsed>11</TotalUsed><TotalCollectible>0</TotalCollectible><TotalRefurbished>0</TotalRefurbished></OfferSummary><Offers><TotalOffers>1</TotalOffers><TotalOfferPages>1</TotalOfferPages><MoreOffersUrl>http://www.amazon.com/gp/offer-listing/184529825X%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D184529825X</MoreOffersUrl><Offer><Merchant><Name>BRILANTI BOOKS</Name></Merchant><OfferAttributes><Condition>New</Condition></OfferAttributes><OfferListing><OfferListingId>q%2BJlUanmDI5Ei%2BCmYr06w4%2BVjQarOIfGAo3seQMt02l5H5zXQjPqUp08HcoLV3Xsn7r1kbv5Oe%2BaEZ0QOpY%2FlTv5EGzMn%2BCaqBOnNypuCh%2BCB%2FmVIjNvXtJAXZhRGU92AMtX58FOK4pejWOEV92YyztZiiZji6Zh</OfferListingId><Price><Amount>768</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$7.68</FormattedPrice></Price><Availability>Usually ships in 2-3 business days</Availability><AvailabilityAttributes><AvailabilityType>now</AvailabilityType><MinimumHours>48</MinimumHours><MaximumHours>72</MaximumHours></AvailabilityAttributes><IsEligibleForSuperSaverShipping>0</IsEligibleForSuperSaverShipping></OfferListing></Offer></Offers></Item></Items></ItemSearchResponse>\n'),
(5, '1577319443', 'BDP45T9M', 'USD', '9.50', '', '0.00', '58', '', '', '', '', '', 'http://www.amazon.com/gp/offer-listing/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443', 'thebookreaders', 'New', 'DzMso%2BTw2AiK4%2B5IHlHJRbTVtS3dDTADQbcfl15M9zJjot5y1vSlvt8RrWWOyvHrKKzjh2Ou5Xj6oEspJ%2FI8eXe4d4NpkOD%2F1hCx8tcAkE8JkVAHg8eYDewWgtwMXKTtrxAFps%2F65b%2F1zUzG%2BUfpGQ%3D%3D', 'USD', '9.50', NULL, NULL, NULL, 'Usually ships in 1-2 business days', 'now', '', '', '', '2015-06-09 15:37:14', '2015-06-09 15:37:14', NULL, '16.14', 1, '<?xml version=\"1.0\"?>\n<ItemSearchResponse xmlns=\"http://webservices.amazon.com/AWSECommerceService/2011-08-01\"><OperationRequest><RequestId>262ab673-e3a7-4c4d-badc-724a732ba628</RequestId><Arguments><Argument Name=\"AWSAccessKeyId\" Value=\"AKIAI4QE44X5C3CMGHOQ\"/><Argument Name=\"AssociateTag\" Value=\"greenxo-20\"/><Argument Name=\"Availability\" Value=\"Available\"/><Argument Name=\"Condition\" Value=\"New\"/><Argument Name=\"Keywords\" Value=\"1577319443\"/><Argument Name=\"Operation\" Value=\"ItemSearch\"/><Argument Name=\"ResponseGroup\" Value=\"ItemAttributes, Offers, OfferFull, OfferSummary\"/><Argument Name=\"SearchIndex\" Value=\"Books\"/><Argument Name=\"Service\" Value=\"AWSECommerceService\"/><Argument Name=\"Timestamp\" Value=\"2015-06-09T19:37:13Z\"/><Argument Name=\"Version\" Value=\"2011-08-01\"/><Argument Name=\"Signature\" Value=\"YteB4Pr7gV7HcOTNtzuvtg4oS7D2gpshl2iqKLC8+l0=\"/></Arguments><RequestProcessingTime>0.0375950000000000</RequestProcessingTime></OperationRequest><Items><Request><IsValid>True</IsValid><ItemSearchRequest><Availability>Available</Availability><Condition>New</Condition><Keywords>1577319443</Keywords><ResponseGroup>ItemAttributes</ResponseGroup><ResponseGroup>Offers</ResponseGroup><ResponseGroup>OfferFull</ResponseGroup><ResponseGroup>OfferSummary</ResponseGroup><SearchIndex>Books</SearchIndex></ItemSearchRequest></Request><TotalResults>1</TotalResults><TotalPages>1</TotalPages><MoreSearchResultsUrl>http://www.amazon.com/gp/redirect.html?linkCode=xm2&amp;SubscriptionId=AKIAI4QE44X5C3CMGHOQ&amp;location=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fsearch%3Fkeywords%3D1577319443%26url%3Dsearch-alias%253Dstripbooks&amp;tag=greenxo-20&amp;creative=386001&amp;camp=2025</MoreSearchResultsUrl><Item><ASIN>1577319443</ASIN><DetailPageURL>http://www.amazon.com/The-Right-Brain-Business-Plan-Creative/dp/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3D1577319443</DetailPageURL><ItemLinks><ItemLink><Description>Technical Details</Description><URL>http://www.amazon.com/The-Right-Brain-Business-Plan-Creative/dp/tech-data/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>Add To Baby Registry</Description><URL>http://www.amazon.com/gp/registry/baby/add-item.html%3Fasin.0%3D1577319443%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>Add To Wedding Registry</Description><URL>http://www.amazon.com/gp/registry/wedding/add-item.html%3Fasin.0%3D1577319443%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>Add To Wishlist</Description><URL>http://www.amazon.com/gp/registry/wishlist/add-item.html%3Fasin.0%3D1577319443%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>Tell A Friend</Description><URL>http://www.amazon.com/gp/pdp/taf/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>All Customer Reviews</Description><URL>http://www.amazon.com/review/product/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink><ItemLink><Description>All Offers</Description><URL>http://www.amazon.com/gp/offer-listing/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</URL></ItemLink></ItemLinks><ItemAttributes><Author>Jennifer Lee</Author><Binding>Paperback</Binding><Creator Role=\"Illustrator\">Kate Prentiss</Creator><Creator Role=\"Foreword\">Chris Guillebeau</Creator><EAN>9781577319443</EAN><EANList><EANListElement>9781577319443</EANListElement></EANList><ISBN>1577319443</ISBN><ItemDimensions><Height Units=\"hundredths-inches\">900</Height><Length Units=\"hundredths-inches\">50</Length><Weight Units=\"hundredths-pounds\">88</Weight><Width Units=\"hundredths-inches\">700</Width></ItemDimensions><Label>New World Library</Label><Languages><Language><Name>English</Name><Type>Published</Type></Language><Language><Name>English</Name><Type>Original Language</Type></Language><Language><Name>English</Name><Type>Unknown</Type></Language></Languages><ListPrice><Amount>1995</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$19.95</FormattedPrice></ListPrice><Manufacturer>New World Library</Manufacturer><NumberOfItems>1</NumberOfItems><NumberOfPages>240</NumberOfPages><PackageDimensions><Height Units=\"hundredths-inches\">63</Height><Length Units=\"hundredths-inches\">890</Length><Weight Units=\"hundredths-pounds\">66</Weight><Width Units=\"hundredths-inches\">693</Width></PackageDimensions><PackageQuantity>1</PackageQuantity><ProductGroup>Book</ProductGroup><ProductTypeName>ABIS_BOOK</ProductTypeName><PublicationDate>2011-02-23</PublicationDate><Publisher>New World Library</Publisher><Studio>New World Library</Studio><Title>The Right-Brain Business Plan: A Creative, Visual Map for Success</Title></ItemAttributes><OfferSummary><LowestNewPrice><Amount>950</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$9.50</FormattedPrice></LowestNewPrice><LowestUsedPrice><Amount>598</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$5.98</FormattedPrice></LowestUsedPrice><LowestCollectiblePrice><Amount>1297</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$12.97</FormattedPrice></LowestCollectiblePrice><TotalNew>58</TotalNew><TotalUsed>47</TotalUsed><TotalCollectible>2</TotalCollectible><TotalRefurbished>0</TotalRefurbished></OfferSummary><Offers><TotalOffers>1</TotalOffers><TotalOfferPages>1</TotalOfferPages><MoreOffersUrl>http://www.amazon.com/gp/offer-listing/1577319443%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D1577319443</MoreOffersUrl><Offer><Merchant><Name>thebookreaders</Name></Merchant><OfferAttributes><Condition>New</Condition></OfferAttributes><OfferListing><OfferListingId>DzMso%2BTw2AiK4%2B5IHlHJRbTVtS3dDTADQbcfl15M9zJjot5y1vSlvt8RrWWOyvHrKKzjh2Ou5Xj6oEspJ%2FI8eXe4d4NpkOD%2F1hCx8tcAkE8JkVAHg8eYDewWgtwMXKTtrxAFps%2F65b%2F1zUzG%2BUfpGQ%3D%3D</OfferListingId><Price><Amount>950</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$9.50</FormattedPrice></Price><AmountSaved><Amount>1045</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$10.45</FormattedPrice></AmountSaved><PercentageSaved>52</PercentageSaved><Availability>Usually ships in 1-2 business days</Availability><AvailabilityAttributes><AvailabilityType>now</AvailabilityType><MinimumHours>24</MinimumHours><MaximumHours>48</MaximumHours></AvailabilityAttributes><IsEligibleForSuperSaverShipping>0</IsEligibleForSuperSaverShipping></OfferListing></Offer></Offers></Item></Items></ItemSearchResponse>\n'),
(6, '3899554914', 'FCJ38LER', 'USD', '38.33', '', '0.00', '41', '', '', '', '', '', 'http://www.amazon.com/gp/offer-listing/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914', 'One Global Market', 'New', 'E5NEDO7mC0tnidBgr5SEZpqYwf0Xa3AkHb5gGX7mjLqokT8Zmbc%2BWk8xNmRPFZw8ENFuZKv2CbANGGV%2FDAj6w7XbyQeoWjIxa9p8LsIZql88c4gEIQswBsPPhxTtLXhEu%2BxatpGIeNivdG0vWtaelQ%3D%3D', 'USD', '38.33', NULL, NULL, NULL, 'Usually ships in 1-2 business days', 'now', '', '', '', '2015-06-09 15:37:14', '2015-06-09 15:37:14', NULL, '69.24', 1, '<?xml version=\"1.0\"?>\n<ItemSearchResponse xmlns=\"http://webservices.amazon.com/AWSECommerceService/2011-08-01\"><OperationRequest><RequestId>77e4db5b-7952-4209-98ec-a98e8fdbb571</RequestId><Arguments><Argument Name=\"AWSAccessKeyId\" Value=\"AKIAI4QE44X5C3CMGHOQ\"/><Argument Name=\"AssociateTag\" Value=\"greenxo-20\"/><Argument Name=\"Availability\" Value=\"Available\"/><Argument Name=\"Condition\" Value=\"New\"/><Argument Name=\"Keywords\" Value=\"3899554914\"/><Argument Name=\"Operation\" Value=\"ItemSearch\"/><Argument Name=\"ResponseGroup\" Value=\"ItemAttributes, Offers, OfferFull, OfferSummary\"/><Argument Name=\"SearchIndex\" Value=\"Books\"/><Argument Name=\"Service\" Value=\"AWSECommerceService\"/><Argument Name=\"Timestamp\" Value=\"2015-06-09T19:37:14Z\"/><Argument Name=\"Version\" Value=\"2011-08-01\"/><Argument Name=\"Signature\" Value=\"LO9bLKlnSDgu0DkE59PNL+CXKxCkdVJRIkEpeYjz3uw=\"/></Arguments><RequestProcessingTime>0.0247180000000000</RequestProcessingTime></OperationRequest><Items><Request><IsValid>True</IsValid><ItemSearchRequest><Availability>Available</Availability><Condition>New</Condition><Keywords>3899554914</Keywords><ResponseGroup>ItemAttributes</ResponseGroup><ResponseGroup>Offers</ResponseGroup><ResponseGroup>OfferFull</ResponseGroup><ResponseGroup>OfferSummary</ResponseGroup><SearchIndex>Books</SearchIndex></ItemSearchRequest></Request><TotalResults>1</TotalResults><TotalPages>1</TotalPages><MoreSearchResultsUrl>http://www.amazon.com/gp/redirect.html?linkCode=xm2&amp;SubscriptionId=AKIAI4QE44X5C3CMGHOQ&amp;location=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fsearch%3Fkeywords%3D3899554914%26url%3Dsearch-alias%253Dstripbooks&amp;tag=greenxo-20&amp;creative=386001&amp;camp=2025</MoreSearchResultsUrl><Item><ASIN>3899554914</ASIN><DetailPageURL>http://www.amazon.com/The-Ride-Custom-Motorcycles-Builders/dp/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D165953%26creativeASIN%3D3899554914</DetailPageURL><ItemLinks><ItemLink><Description>Technical Details</Description><URL>http://www.amazon.com/The-Ride-Custom-Motorcycles-Builders/dp/tech-data/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>Add To Baby Registry</Description><URL>http://www.amazon.com/gp/registry/baby/add-item.html%3Fasin.0%3D3899554914%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>Add To Wedding Registry</Description><URL>http://www.amazon.com/gp/registry/wedding/add-item.html%3Fasin.0%3D3899554914%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>Add To Wishlist</Description><URL>http://www.amazon.com/gp/registry/wishlist/add-item.html%3Fasin.0%3D3899554914%26SubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>Tell A Friend</Description><URL>http://www.amazon.com/gp/pdp/taf/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>All Customer Reviews</Description><URL>http://www.amazon.com/review/product/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink><ItemLink><Description>All Offers</Description><URL>http://www.amazon.com/gp/offer-listing/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</URL></ItemLink></ItemLinks><ItemAttributes><Binding>Hardcover</Binding><Creator Role=\"Editor\">Chris Hunter</Creator><Creator Role=\"Editor\">R. Klanten</Creator><EAN>9783899554915</EAN><EANList><EANListElement>9783899554915</EANListElement></EANList><ISBN>3899554914</ISBN><IsEligibleForTradeIn>1</IsEligibleForTradeIn><ItemDimensions><Height Units=\"hundredths-inches\">1100</Height><Length Units=\"hundredths-inches\">150</Length><Weight Units=\"hundredths-pounds\">0</Weight><Width Units=\"hundredths-inches\">1275</Width></ItemDimensions><Label>Gestalten</Label><Languages><Language><Name>English</Name><Type>Published</Type></Language><Language><Name>English</Name><Type>Original Language</Type></Language><Language><Name>English</Name><Type>Unknown</Type></Language></Languages><ListPrice><Amount>6500</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$65.00</FormattedPrice></ListPrice><Manufacturer>Gestalten</Manufacturer><NumberOfItems>1</NumberOfItems><NumberOfPages>320</NumberOfPages><PackageDimensions><Height Units=\"hundredths-inches\">134</Height><Length Units=\"hundredths-inches\">1197</Length><Weight Units=\"hundredths-pounds\">520</Weight><Width Units=\"hundredths-inches\">1087</Width></PackageDimensions><ProductGroup>Book</ProductGroup><ProductTypeName>ABIS_BOOK</ProductTypeName><PublicationDate>2013-09-13</PublicationDate><Publisher>Gestalten</Publisher><ReleaseDate>2013-09-13</ReleaseDate><Studio>Gestalten</Studio><Title>The Ride: New Custom Motorcycles and their Builders</Title><TradeInValue><Amount>850</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$8.50</FormattedPrice></TradeInValue></ItemAttributes><OfferSummary><LowestNewPrice><Amount>3833</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$38.33</FormattedPrice></LowestNewPrice><LowestUsedPrice><Amount>3494</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$34.94</FormattedPrice></LowestUsedPrice><TotalNew>41</TotalNew><TotalUsed>18</TotalUsed><TotalCollectible>0</TotalCollectible><TotalRefurbished>0</TotalRefurbished></OfferSummary><Offers><TotalOffers>1</TotalOffers><TotalOfferPages>1</TotalOfferPages><MoreOffersUrl>http://www.amazon.com/gp/offer-listing/3899554914%3FSubscriptionId%3DAKIAI4QE44X5C3CMGHOQ%26tag%3Dgreenxo-20%26linkCode%3Dxm2%26camp%3D2025%26creative%3D386001%26creativeASIN%3D3899554914</MoreOffersUrl><Offer><Merchant><Name>One Global Market</Name></Merchant><OfferAttributes><Condition>New</Condition></OfferAttributes><OfferListing><OfferListingId>E5NEDO7mC0tnidBgr5SEZpqYwf0Xa3AkHb5gGX7mjLqokT8Zmbc%2BWk8xNmRPFZw8ENFuZKv2CbANGGV%2FDAj6w7XbyQeoWjIxa9p8LsIZql88c4gEIQswBsPPhxTtLXhEu%2BxatpGIeNivdG0vWtaelQ%3D%3D</OfferListingId><Price><Amount>3833</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$38.33</FormattedPrice></Price><AmountSaved><Amount>2667</Amount><CurrencyCode>USD</CurrencyCode><FormattedPrice>$26.67</FormattedPrice></AmountSaved><PercentageSaved>41</PercentageSaved><Availability>Usually ships in 1-2 business days</Availability><AvailabilityAttributes><AvailabilityType>now</AvailabilityType><MinimumHours>24</MinimumHours><MaximumHours>48</MaximumHours></AvailabilityAttributes><IsEligibleForSuperSaverShipping>0</IsEligibleForSuperSaverShipping></OfferListing></Offer></Offers></Item></Items></ItemSearchResponse>\n');

-- --------------------------------------------------------

--
-- Table structure for table `item_offer_track`
--

CREATE TABLE `item_offer_track` (
  `id` int(11) NOT NULL,
  `ASIN` varchar(200) DEFAULT NULL,
  `SKU` varchar(40) NOT NULL,
  `LowestNewPrice_CurrencyCode` varchar(200) DEFAULT NULL,
  `LowestNewPrice_FormattedPrice` decimal(8,2) DEFAULT NULL,
  `LowestUsedPrice_CurrencyCode` varchar(200) DEFAULT NULL,
  `LowestUsedPrice_FormattedPrice` decimal(8,2) DEFAULT NULL,
  `TotalNew` varchar(200) DEFAULT NULL,
  `TotalUsed` varchar(200) DEFAULT NULL,
  `TotalCollectible` varchar(200) DEFAULT NULL,
  `TotalRefurbished` varchar(200) DEFAULT NULL,
  `Offers_TotalOffers` varchar(200) DEFAULT NULL,
  `Offers_TotalOfferPages` varchar(200) DEFAULT NULL,
  `Offers_MoreOffersUrl` varchar(200) DEFAULT NULL,
  `Merchant_Name` varchar(200) DEFAULT NULL,
  `OfferAttributes_Condition` varchar(200) DEFAULT NULL,
  `OfferListing_OfferListingId` varchar(200) DEFAULT NULL,
  `OfferListing_Price_CurrencyCode` varchar(200) DEFAULT NULL,
  `OfferListing_Price_FormattedPrice` decimal(8,2) DEFAULT NULL,
  `AmountSaved_CurrencyCode` varchar(200) DEFAULT NULL,
  `AmountSaved_FormattedPrice` decimal(8,2) DEFAULT NULL,
  `PercentageSaved` varchar(200) DEFAULT NULL,
  `Availability` varchar(200) DEFAULT NULL,
  `AvailabilityType` varchar(200) DEFAULT NULL,
  `Availability_MinimumHours` varchar(200) DEFAULT NULL,
  `Availability_MaximumHours` varchar(200) DEFAULT NULL,
  `Availability_IsEligibleForSuperSaverShipping` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `original_price` decimal(8,2) NOT NULL,
  `original_quantity` int(4) NOT NULL,
  `xml` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list_order`
--

CREATE TABLE `list_order` (
  `id` int(11) NOT NULL,
  `ShipmentServiceLevelCategory` varchar(150) DEFAULT NULL,
  `OrderTotal_CurrencyCode` varchar(5) DEFAULT NULL,
  `OrderTotal_Amount` decimal(8,2) DEFAULT NULL,
  `ShipServiceLevel` varchar(150) DEFAULT NULL,
  `LatestShipDate` varchar(150) DEFAULT NULL,
  `MarketplaceId` varchar(150) DEFAULT NULL,
  `SalesChannel` varchar(150) DEFAULT NULL,
  `ShippingAddress_Phone` varchar(150) DEFAULT NULL,
  `ShippingAddress_PostalCode` varchar(150) DEFAULT NULL,
  `ShippingAddress_Name` varchar(150) DEFAULT NULL,
  `ShippingAddress_CountryCode` varchar(150) DEFAULT NULL,
  `ShippingAddress_StateOrRegion` varchar(150) DEFAULT NULL,
  `ShippingAddress_AddressLine1` varchar(150) DEFAULT NULL,
  `ShippingAddress_City` varchar(150) DEFAULT NULL,
  `EarliestDeliveryDate` varchar(150) DEFAULT NULL,
  `ShippedByAmazonTFM` varchar(150) DEFAULT NULL,
  `OrderType` varchar(150) DEFAULT NULL,
  `BuyerEmail` varchar(150) DEFAULT NULL,
  `FulfillmentChannel` varchar(150) DEFAULT NULL,
  `LatestDeliveryDate` varchar(150) DEFAULT NULL,
  `OrderStatus` varchar(150) DEFAULT NULL,
  `BuyerName` varchar(150) DEFAULT NULL,
  `LastUpdateDate` varchar(150) DEFAULT NULL,
  `EarliestShipDate` varchar(150) DEFAULT NULL,
  `PurchaseDate` varchar(150) DEFAULT NULL,
  `NumberOfItemsUnshipped` varchar(150) DEFAULT NULL,
  `NumberOfItemsShipped` varchar(150) DEFAULT NULL,
  `PaymentMethod` varchar(150) DEFAULT NULL,
  `AmazonOrderId` varchar(150) DEFAULT NULL,
  `supplier_id` int(4) NOT NULL,
  `order_confirmation` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list_order_item`
--

CREATE TABLE `list_order_item` (
  `id` int(11) NOT NULL,
  `ASIN` varchar(150) DEFAULT NULL,
  `SellerSKU` varchar(150) DEFAULT NULL,
  `OrderItemId` varchar(150) DEFAULT NULL,
  `Title` varchar(150) DEFAULT NULL,
  `QuantityOrdered` int(11) DEFAULT NULL,
  `QuantityShipped` int(11) DEFAULT NULL,
  `ItemPrice_CurrencyCode` varchar(5) DEFAULT NULL,
  `ItemPrice_Amount` decimal(8,2) DEFAULT NULL,
  `ShippingPrice_CurrencyCode` varchar(5) DEFAULT NULL,
  `ShippingPrice_Amount` decimal(8,2) DEFAULT NULL,
  `GiftWrapPrice_CurrencyCode` varchar(5) DEFAULT NULL,
  `GiftWrapPrice_Amount` decimal(8,2) DEFAULT NULL,
  `ItemTax_CurrencyCode` varchar(5) DEFAULT NULL,
  `ItemTax_Amount` decimal(8,2) DEFAULT NULL,
  `ShippingTax_CurrencyCode` varchar(5) DEFAULT NULL,
  `ShippingTax_Amount` decimal(8,2) DEFAULT NULL,
  `GiftWrapTax_CurrencyCode` varchar(5) DEFAULT NULL,
  `GiftWrapTax_Amount` decimal(8,2) DEFAULT NULL,
  `ShippingDiscount_CurrencyCode` varchar(5) DEFAULT NULL,
  `ShippingDiscount_Amount` decimal(8,2) DEFAULT NULL,
  `PromotionDiscount_CurrencyCode` varchar(5) DEFAULT NULL,
  `PromotionDiscount_Amount` decimal(8,2) DEFAULT NULL,
  `PromotionIds` varchar(150) DEFAULT NULL,
  `ConditionNote` varchar(400) DEFAULT NULL,
  `ConditionId` varchar(150) DEFAULT NULL,
  `ConditionSubtypeId` varchar(150) DEFAULT NULL,
  `list_order_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowestofferlistingsforasinresponse`
--

CREATE TABLE `lowestofferlistingsforasinresponse` (
  `id` int(11) NOT NULL,
  `sku` varchar(40) NOT NULL,
  `asin` varchar(40) NOT NULL,
  `ItemCondition` varchar(10) NOT NULL,
  `NumberOfOfferListingsConsidered` int(11) NOT NULL,
  `LandedPrice` decimal(8,2) NOT NULL,
  `ListingPrice` decimal(8,2) NOT NULL,
  `Shipping` decimal(8,2) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowestofferlistingsforskuresponse`
--

CREATE TABLE `lowestofferlistingsforskuresponse` (
  `id` int(11) NOT NULL,
  `sku` varchar(40) NOT NULL,
  `ItemCondition` varchar(10) NOT NULL,
  `NumberOfOfferListingsConsidered` int(11) NOT NULL,
  `LandedPrice` decimal(8,2) NOT NULL,
  `ListingPrice` decimal(8,2) NOT NULL,
  `Shipping` decimal(8,2) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mirage_inventory`
--

CREATE TABLE `mirage_inventory` (
  `id` int(11) NOT NULL,
  `item-name` varchar(200) DEFAULT NULL,
  `item-description` varchar(200) DEFAULT NULL,
  `listing-id` varchar(200) DEFAULT NULL,
  `seller-sku` varchar(200) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `open-date` varchar(200) DEFAULT NULL,
  `image-url` varchar(200) DEFAULT NULL,
  `item-is-marketplace` varchar(200) DEFAULT NULL,
  `product-id-type` varchar(200) DEFAULT NULL,
  `zshop-shipping-fee` varchar(200) DEFAULT NULL,
  `item-note` varchar(200) DEFAULT NULL,
  `item-condition` varchar(200) DEFAULT NULL,
  `zshop-category1` varchar(200) DEFAULT NULL,
  `zshop-browse-path` varchar(200) DEFAULT NULL,
  `zshop-storefront-feature` varchar(200) DEFAULT NULL,
  `asin1` varchar(200) DEFAULT NULL,
  `asin2` varchar(200) DEFAULT NULL,
  `asin3` varchar(200) DEFAULT NULL,
  `will-ship-internationally` varchar(200) DEFAULT NULL,
  `expedited-shipping` varchar(200) DEFAULT NULL,
  `zshop-boldface` varchar(200) DEFAULT NULL,
  `product-id` varchar(200) DEFAULT NULL,
  `bid-for-featured-placement` varchar(200) DEFAULT NULL,
  `add-delete` varchar(200) DEFAULT NULL,
  `pending-quantity` varchar(200) DEFAULT NULL,
  `fulfillment-channel` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `item_offer_id` int(11) NOT NULL,
  `previous_offer_price` decimal(8,2) NOT NULL,
  `previous_quantity` int(4) NOT NULL,
  `offer_price` decimal(8,2) NOT NULL,
  `mirage_inventory_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mirage_inventory_2`
--

CREATE TABLE `mirage_inventory_2` (
  `id` int(11) NOT NULL,
  `item-name` varchar(200) DEFAULT NULL,
  `item-description` varchar(200) DEFAULT NULL,
  `listing-id` varchar(200) DEFAULT NULL,
  `seller-sku` varchar(200) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `open-date` varchar(200) DEFAULT NULL,
  `image-url` varchar(200) DEFAULT NULL,
  `item-is-marketplace` varchar(200) DEFAULT NULL,
  `product-id-type` varchar(200) DEFAULT NULL,
  `zshop-shipping-fee` varchar(200) DEFAULT NULL,
  `item-note` varchar(200) DEFAULT NULL,
  `item-condition` varchar(200) DEFAULT NULL,
  `zshop-category1` varchar(200) DEFAULT NULL,
  `zshop-browse-path` varchar(200) DEFAULT NULL,
  `zshop-storefront-feature` varchar(200) DEFAULT NULL,
  `asin1` varchar(200) DEFAULT NULL,
  `asin2` varchar(200) DEFAULT NULL,
  `asin3` varchar(200) DEFAULT NULL,
  `will-ship-internationally` varchar(200) DEFAULT NULL,
  `expedited-shipping` varchar(200) DEFAULT NULL,
  `zshop-boldface` varchar(200) DEFAULT NULL,
  `product-id` varchar(200) DEFAULT NULL,
  `bid-for-featured-placement` varchar(200) DEFAULT NULL,
  `add-delete` varchar(200) DEFAULT NULL,
  `pending-quantity` varchar(200) DEFAULT NULL,
  `fulfillment-channel` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `item_offer_id` int(11) NOT NULL,
  `previous_offer_price` decimal(8,2) NOT NULL,
  `previous_quantity` int(4) NOT NULL,
  `offer_price` decimal(8,2) NOT NULL,
  `mirage_inventory_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mirage_min_price`
--

CREATE TABLE `mirage_min_price` (
  `ansi` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mirage_product`
--

CREATE TABLE `mirage_product` (
  `id` int(11) NOT NULL,
  `SKU` varchar(40) NOT NULL,
  `product_id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `categories` varchar(200) NOT NULL,
  `barcode` varchar(200) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `map` decimal(8,2) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mws_inventory`
--

CREATE TABLE `mws_inventory` (
  `id` int(11) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `asin` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tier_id` int(11) NOT NULL,
  `min_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `competitor` decimal(8,2) NOT NULL DEFAULT '0.00',
  `earnings` float NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `my_prices`
--

CREATE TABLE `my_prices` (
  `id` int(11) NOT NULL,
  `MarketplaceId` varchar(50) NOT NULL,
  `ASIN` varchar(100) NOT NULL,
  `SellerSKU` varchar(100) NOT NULL,
  `LandedPrice` decimal(8,2) NOT NULL,
  `ListingPrice` decimal(8,2) NOT NULL,
  `Shipping` decimal(8,2) NOT NULL,
  `RegularPrice` decimal(8,2) NOT NULL,
  `ItemCondition` decimal(8,2) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nalpac_products`
--

CREATE TABLE `nalpac_products` (
  `id` int(11) NOT NULL,
  `SKU` varchar(50) NOT NULL,
  `ASIN` varchar(100) DEFAULT NULL,
  `Nalpac_Item_Number` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `MFG_Number` varchar(100) NOT NULL,
  `MFG_Name` varchar(500) NOT NULL,
  `PRICE` varchar(40) NOT NULL,
  `MAP` decimal(8,2) DEFAULT NULL,
  `Selling_UOM` varchar(50) NOT NULL,
  `Long_Description` text,
  `extended_desc` text,
  `Quantity_Onhand` varchar(40) NOT NULL,
  `UPC` varchar(250) DEFAULT NULL,
  `Category_ID` varchar(250) DEFAULT NULL,
  `Category_Description` varchar(250) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer_track_info`
--

CREATE TABLE `offer_track_info` (
  `id` int(4) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `ShipmentServiceLevelCategory` varchar(150) DEFAULT NULL,
  `Amount` decimal(8,2) DEFAULT NULL,
  `CurrencyCode` varchar(150) DEFAULT NULL,
  `ShipServiceLevel` varchar(150) DEFAULT NULL,
  `LatestShipDate` varchar(150) DEFAULT NULL,
  `MarketplaceId` varchar(150) DEFAULT NULL,
  `SalesChannel` varchar(150) DEFAULT NULL,
  `Phone` varchar(150) DEFAULT NULL,
  `PostalCode` varchar(150) DEFAULT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `CountryCode` varchar(150) DEFAULT NULL,
  `StateOrRegion` varchar(150) DEFAULT NULL,
  `AddressLine1` varchar(150) DEFAULT NULL,
  `City` varchar(150) DEFAULT NULL,
  `EarliestDeliveryDate` varchar(150) DEFAULT NULL,
  `ShippedByAmazonTFM` varchar(150) DEFAULT NULL,
  `OrderType` varchar(150) DEFAULT NULL,
  `BuyerEmail` varchar(150) DEFAULT NULL,
  `FulfillmentChannel` varchar(150) DEFAULT NULL,
  `LatestDeliveryDate` varchar(150) DEFAULT NULL,
  `OrderStatus` varchar(150) DEFAULT NULL,
  `BuyerName` varchar(150) DEFAULT NULL,
  `LastUpdateDate` varchar(150) DEFAULT NULL,
  `EarliestShipDate` varchar(150) DEFAULT NULL,
  `PurchaseDate` varchar(150) DEFAULT NULL,
  `NumberOfItemsUnshipped` varchar(150) DEFAULT NULL,
  `NumberOfItemsShipped` varchar(150) DEFAULT NULL,
  `PaymentMethod` varchar(150) DEFAULT NULL,
  `AmazonOrderId` varchar(150) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pre_history`
--

CREATE TABLE `pre_history` (
  `id` int(11) NOT NULL,
  `SKU` varchar(40) DEFAULT NULL,
  `ASIN` varchar(40) DEFAULT NULL,
  `ItemCondition` varchar(20) DEFAULT NULL,
  `ItemSubcondition` varchar(50) NOT NULL,
  `FulfillmentChannel` varchar(20) DEFAULT NULL,
  `ShipsDomestically` varchar(20) DEFAULT NULL,
  `ShippingTime_max` varchar(20) DEFAULT NULL,
  `SellerPositiveFeedbackRating` int(4) NOT NULL,
  `NumberOfOfferListingsConsidered` int(4) DEFAULT NULL,
  `SellerFeedbackCount` int(4) NOT NULL,
  `LandedPrice` decimal(8,2) DEFAULT NULL,
  `ListingPrice` decimal(8,2) NOT NULL,
  `Shipping` decimal(8,2) NOT NULL,
  `MultipleOffersAtLowestPrice` varchar(20) DEFAULT NULL,
  `SellerAmount` int(4) NOT NULL,
  `Status` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `processing_report`
--

CREATE TABLE `processing_report` (
  `id` int(11) NOT NULL,
  `Document` varchar(50) NOT NULL,
  `StatusCode` varchar(50) NOT NULL,
  `MessagesProcessed` varchar(50) NOT NULL,
  `MessagesSuccessful` varchar(50) NOT NULL,
  `MessagesWithError` varchar(50) NOT NULL,
  `MessagesWithWarning` varchar(50) NOT NULL,
  `submit_feed_id` int(11) NOT NULL,
  `Result` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sku` varchar(40) DEFAULT NULL,
  `product-id` varchar(40) DEFAULT NULL,
  `product-id-type` varchar(40) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `minimum-seller-allowed-price` decimal(8,2) DEFAULT NULL,
  `maximum-seller-allowed-price` decimal(8,2) DEFAULT NULL,
  `item-condition` varchar(4) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `add-delete` varchar(4) NOT NULL,
  `will-ship-internationally` varchar(40) DEFAULT NULL,
  `expedited-shipping` varchar(40) DEFAULT NULL,
  `standard-plus` varchar(40) DEFAULT NULL,
  `item-note` varchar(40) DEFAULT NULL,
  `fulfillment-center-id` varchar(40) DEFAULT NULL,
  `product-tax-code` varchar(40) DEFAULT NULL,
  `rank` int(4) NOT NULL,
  `status` varchar(40) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products_dd`
--

CREATE TABLE `products_dd` (
  `sku` varchar(40) DEFAULT NULL,
  `product-id` varchar(40) DEFAULT NULL,
  `product-id-type` varchar(40) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `minimum-seller-allowed-price` decimal(8,2) DEFAULT NULL,
  `maximum-seller-allowed-price` decimal(8,2) DEFAULT NULL,
  `item-condition` varchar(4) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `add-delete` varchar(4) NOT NULL,
  `will-ship-internationally` varchar(40) DEFAULT NULL,
  `expedited-shipping` varchar(40) DEFAULT NULL,
  `standard-plus` varchar(40) DEFAULT NULL,
  `item-note` varchar(40) DEFAULT NULL,
  `fulfillment-center-id` varchar(40) DEFAULT NULL,
  `product-tax-code` varchar(40) DEFAULT NULL,
  `rank` int(4) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pulled`
--

CREATE TABLE `pulled` (
  `id` int(4) NOT NULL,
  `productId` varchar(40) NOT NULL,
  `sellerId` varchar(40) NOT NULL,
  `sellerprefix` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `Amount` decimal(8,2) DEFAULT NULL,
  `CurrencyCode` varchar(150) DEFAULT NULL,
  `SalesChannel` varchar(150) DEFAULT NULL,
  `SellerName` varchar(150) DEFAULT NULL,
  `TrackingNumber` varchar(150) DEFAULT NULL,
  `DeliveryCompany` varchar(150) DEFAULT NULL,
  `TrackingNumberURL` varchar(150) DEFAULT NULL,
  `ASIN` varchar(150) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `PaymentMethod` varchar(150) DEFAULT NULL,
  `AmazonOrderId` varchar(150) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `SKU` varchar(40) DEFAULT NULL,
  `ASIN` varchar(40) DEFAULT NULL,
  `ItemCondition` varchar(20) DEFAULT NULL,
  `ItemSubcondition` varchar(50) NOT NULL,
  `FulfillmentChannel` varchar(20) DEFAULT NULL,
  `ShipsDomestically` varchar(20) DEFAULT NULL,
  `ShippingTime_max` varchar(20) DEFAULT NULL,
  `SellerPositiveFeedbackRating` int(4) NOT NULL,
  `NumberOfOfferListingsConsidered` int(4) DEFAULT NULL,
  `SellerFeedbackCount` int(4) NOT NULL,
  `LandedPrice` decimal(8,2) DEFAULT NULL,
  `ListingPrice` decimal(8,2) NOT NULL,
  `Shipping` decimal(8,2) NOT NULL,
  `MultipleOffersAtLowestPrice` varchar(20) DEFAULT NULL,
  `SellerAmount` int(4) NOT NULL,
  `Status` varchar(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submit_feed`
--

CREATE TABLE `submit_feed` (
  `id` int(11) NOT NULL,
  `FeedSubmissionId` varchar(250) NOT NULL,
  `FeedType` varchar(250) NOT NULL,
  `SubmittedDate` datetime NOT NULL,
  `FeedProcessingStatus` varchar(250) NOT NULL,
  `RequestId` varchar(250) NOT NULL,
  `Response` text,
  `File` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `drop_email` varchar(100) NOT NULL,
  `notes` text NOT NULL,
  `product_table` varchar(50) NOT NULL,
  `total_fee` decimal(8,2) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `phone`, `email`, `drop_email`, `notes`, `product_table`, `total_fee`, `created`, `updated`) VALUES
(1, 'Entrenue', '1.800.368.7268', 'dropship@entrenue.com', 'dropship@entrenue.com', 'The first supplier', 'entrenue_products', '2.50', '2016-01-16 09:27:58', '2016-01-16 09:32:27'),
(4, 'Nalpac', '', '', '', '', 'nalpac_products', '2.50', '2016-02-18 21:50:13', '2016-02-18 21:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `table 29`
--

CREATE TABLE `table 29` (
  `COL 1` varchar(80) DEFAULT NULL,
  `COL 2` varchar(16) DEFAULT NULL,
  `COL 3` varchar(11) DEFAULT NULL,
  `COL 4` varchar(21) DEFAULT NULL,
  `COL 5` varchar(5) DEFAULT NULL,
  `COL 6` varchar(8) DEFAULT NULL,
  `COL 7` varchar(23) DEFAULT NULL,
  `COL 8` varchar(9) DEFAULT NULL,
  `COL 9` varchar(19) DEFAULT NULL,
  `COL 10` varchar(15) DEFAULT NULL,
  `COL 11` varchar(18) DEFAULT NULL,
  `COL 12` varchar(19) DEFAULT NULL,
  `COL 13` varchar(14) DEFAULT NULL,
  `COL 14` varchar(15) DEFAULT NULL,
  `COL 15` varchar(17) DEFAULT NULL,
  `COL 16` varchar(24) DEFAULT NULL,
  `COL 17` varchar(10) DEFAULT NULL,
  `COL 18` varchar(5) DEFAULT NULL,
  `COL 19` varchar(5) DEFAULT NULL,
  `COL 20` varchar(25) DEFAULT NULL,
  `COL 21` varchar(18) DEFAULT NULL,
  `COL 22` varchar(14) DEFAULT NULL,
  `COL 23` varchar(13) DEFAULT NULL,
  `COL 24` varchar(26) DEFAULT NULL,
  `COL 25` varchar(10) DEFAULT NULL,
  `COL 26` varchar(16) DEFAULT NULL,
  `COL 27` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tiers`
--

CREATE TABLE `tiers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `percent` decimal(8,4) NOT NULL,
  `class_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `tier_behavior_id` int(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiers`
--

INSERT INTO `tiers` (`id`, `name`, `percent`, `class_name`, `description`, `tier_behavior_id`, `created`, `updated`) VALUES
(1, 'manual', '0.0000', 'manual', 'The price is enter manually ', 0, '2015-12-13 09:35:18', '2015-12-13 09:35:18'),
(2, 'lowest', '0.0200', 'LowestOfferListingsForSKU', 'The price is selected by LowestOfferListingsForSKU', 0, '2015-12-13 09:40:44', '2015-12-13 09:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `tier_behavior`
--

CREATE TABLE `tier_behavior` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `class` varchar(20) NOT NULL,
  `field1` varchar(20) DEFAULT NULL,
  `field2` varchar(20) DEFAULT NULL,
  `field3` varchar(20) DEFAULT NULL,
  `field4` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tier_behavior`
--

INSERT INTO `tier_behavior` (`id`, `name`, `description`, `class`, `field1`, `field2`, `field3`, `field4`, `created`, `updated`) VALUES
(1, 'Manual', '', 'TierManual', '0', '0', '0', '0', '2016-01-25 08:29:39', '2016-01-25 08:29:39'),
(2, 'Lower 10%', 'Profit 5%, 10% under lowest price', 'TierLowerPercent', '0.1', '5.40', '0.02', '3', '2016-01-25 21:33:20', '2016-01-25 21:33:20'),
(3, 'Tier 20%', '20% below the cheapest price', 'TierLowerPercent', '0.2', '3.99', '0.05', '2', '2016-02-21 00:00:00', '2016-02-21 00:00:00'),
(4, 'Lower/profit 30% - 2%', '30% under lowest price and 2% of profit', 'TierLowerPercent', '0.3', '5.99', '0.02', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '15\' Lower/profit 30% - 2%', 'Change every 15min', 'TierLowerPercent', '0.2', '5.99', '0.02', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_inventory`
--

CREATE TABLE `tmp_inventory` (
  `item-name` varchar(200) DEFAULT NULL,
  `item-description` varchar(200) DEFAULT NULL,
  `listing-id` varchar(200) DEFAULT NULL,
  `seller-sku` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `open-date` varchar(200) DEFAULT NULL,
  `image-url` varchar(200) DEFAULT NULL,
  `item-is-marketplace` varchar(200) DEFAULT NULL,
  `product-id-type` varchar(200) DEFAULT NULL,
  `zshop-shipping-fee` varchar(200) DEFAULT NULL,
  `item-note` varchar(200) DEFAULT NULL,
  `item-condition` varchar(200) DEFAULT NULL,
  `zshop-category1` varchar(200) DEFAULT NULL,
  `zshop-browse-path` varchar(200) DEFAULT NULL,
  `zshop-storefront-feature` varchar(200) DEFAULT NULL,
  `asin1` varchar(200) DEFAULT NULL,
  `asin2` varchar(200) DEFAULT NULL,
  `asin3` varchar(200) DEFAULT NULL,
  `will-ship-internationally` varchar(200) DEFAULT NULL,
  `expedited-shipping` varchar(200) DEFAULT NULL,
  `zshop-boldface` varchar(200) DEFAULT NULL,
  `product-id` varchar(200) DEFAULT NULL,
  `bid-for-featured-placement` varchar(200) DEFAULT NULL,
  `add-delete` varchar(200) DEFAULT NULL,
  `pending-quantity` varchar(200) DEFAULT NULL,
  `fulfillment-channel` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `sku` varchar(40) DEFAULT NULL,
  `product-id` varchar(40) DEFAULT NULL,
  `product-id-type` varchar(40) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `minimum-seller-allowed-price` decimal(8,2) DEFAULT NULL,
  `maximum-seller-allowed-price` decimal(8,2) DEFAULT NULL,
  `item-condition` varchar(40) DEFAULT NULL,
  `quantity` varchar(40) DEFAULT NULL,
  `add-delete` varchar(40) DEFAULT NULL,
  `will-ship-internationally` varchar(40) DEFAULT NULL,
  `expedited-shipping` varchar(40) DEFAULT NULL,
  `standard-plus` varchar(40) DEFAULT NULL,
  `item-note` varchar(2000) DEFAULT NULL,
  `fulfillment-center-id` varchar(40) DEFAULT NULL,
  `product-tax-code` varchar(40) DEFAULT NULL,
  `leadtime-to-ship` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `original_price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `uploadfile`
-- (See below for the actual view)
--
CREATE TABLE `uploadfile` (
`sku` varchar(40)
,`product-id` varchar(40)
,`2` int(1)
,`Name_exp_4` decimal(4,2)
,`Name_exp_5` decimal(4,2)
,`Name_exp_6` decimal(4,2)
,`11` int(2)
,`3` int(1)
,`a` varchar(1)
,`1` int(1)
,`Next, Second, Domestic` varchar(22)
,`N` varchar(1)
,`Name_exp_13` char(0)
,`Name_exp_14` char(0)
,`Name_exp_15` char(0)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'pgarcia', '$2y$10$HX5dy1h8NTp4osz.cx.wSeG4.xt2E1sA/0BySwvaGK4ALniqoAmti', 'admin', '2014-10-03 16:59:40', '2015-12-05 14:12:37');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_inventory_suppliers`
-- (See below for the actual view)
--
CREATE TABLE `view_inventory_suppliers` (
`id` int(11)
,`sku` varchar(50)
,`asin` varchar(50)
,`min_price` decimal(8,2)
,`competitor` decimal(8,2)
,`earnings` float
,`supplier_id` int(11)
,`supplier_product_id` varchar(250)
,`inv_price` decimal(8,2)
,`price` varchar(40)
,`map` varchar(30)
,`supplier_updated` datetime
,`supplier_table` varchar(17)
,`supplier_id_type` varchar(18)
,`tier_id` int(11)
,`quantity` varchar(40)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_match_inv`
-- (See below for the actual view)
--
CREATE TABLE `view_match_inv` (
`id` int(11)
,`m_sku` varchar(50)
,`m_asin` varchar(50)
,`m_price` decimal(8,2)
,`m_quantity` int(11)
,`m_created` datetime
,`m_updated` datetime
,`tier_id` int(11)
,`e_id` int(11)
,`e_product_id` int(4)
,`e_model` varchar(250)
,`e_sku` varchar(50)
,`e_price` varchar(30)
,`e_quantity` int(11)
,`d_created` datetime
,`e_updated` datetime
,`e_name` varchar(250)
,`e_descriptions` text
,`e_upc` varchar(250)
,`e_image_1` varchar(250)
,`l_offer` int(11)
,`l_listingprice` decimal(8,2)
,`l_landingprice` decimal(8,2)
,`l_shipping` decimal(8,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_name`
-- (See below for the actual view)
--
CREATE TABLE `view_name` (
`id` int(4)
,`productId` varchar(40)
,`sellerId` varchar(40)
,`sellerprefix` varchar(40)
,`created` datetime
,`user_id` int(11)
,`status` int(4)
);

-- --------------------------------------------------------

--
-- Structure for view `compareoffer`
--
DROP TABLE IF EXISTS `compareoffer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `compareoffer`  AS  select `item_offer`.`id` AS `id`,`item_offer`.`SKU` AS `SKU`,`item_offer`.`ASIN` AS `ASIN`,(((`item_offer`.`OfferListing_Price_FormattedPrice` * 1.15) + 1.35) * `config`.`profit`) AS `Estimated`,`item_offer`.`OfferListing_Price_FormattedPrice` AS `OfferPrice`,`item_offer`.`Offers_MoreOffersUrl` AS `URL`,`item_offer`.`Merchant_Name` AS `Merchant_Name`,`item_offer`.`TotalNew` AS `TotalNew`,`item_offer`.`AvailabilityType` AS `AvailabilityType` from ((`inventory` join `item_offer` on((`inventory`.`seller-sku` = `item_offer`.`SKU`))) join `config` on((`config`.`active` = 1))) ;

-- --------------------------------------------------------

--
-- Structure for view `existing_product`
--
DROP TABLE IF EXISTS `existing_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `existing_product`  AS  select `inventory`.`seller-sku` AS `sku`,`inventory`.`asin1` AS `asin` from `inventory` union select `blacklist`.`sku` AS `sku`,`blacklist`.`asin` AS `asin` from `blacklist` ;

-- --------------------------------------------------------

--
-- Structure for view `uploadfile`
--
DROP TABLE IF EXISTS `uploadfile`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `uploadfile`  AS  select `products`.`sku` AS `sku`,`products`.`product-id` AS `product-id`,2 AS `2`,cast((((`products`.`price` + 1.35) + (`products`.`price` * 0.15)) + 1.99) as decimal(4,2)) AS `Name_exp_4`,cast((((`products`.`price` + 1.35) + (`products`.`price` * 0.15)) + 1.99) as decimal(4,2)) AS `Name_exp_5`,cast((((`products`.`price` + 1.35) + (`products`.`price` * 0.15)) + 10.99) as decimal(4,2)) AS `Name_exp_6`,11 AS `11`,3 AS `3`,'a' AS `a`,1 AS `1`,'Next, Second, Domestic' AS `Next, Second, Domestic`,'N' AS `N`,'' AS `Name_exp_13`,'' AS `Name_exp_14`,'' AS `Name_exp_15` from `products` where ((not((`products`.`product-id` like 'B%'))) and (`products`.`sku` like 'BDP%') and (`products`.`price` > 3.00)) order by `products`.`rank` desc limit 0,500 ;

-- --------------------------------------------------------

--
-- Structure for view `view_inventory_suppliers`
--
DROP TABLE IF EXISTS `view_inventory_suppliers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_inventory_suppliers`  AS  select `m`.`id` AS `id`,`m`.`sku` AS `sku`,`m`.`asin` AS `asin`,`m`.`min_price` AS `min_price`,`m`.`competitor` AS `competitor`,`m`.`earnings` AS `earnings`,`s`.`id` AS `supplier_id`,`s`.`MODEL` AS `supplier_product_id`,`m`.`price` AS `inv_price`,`s`.`PRICE` AS `price`,`s`.`MAP` AS `map`,`s`.`updated` AS `supplier_updated`,'entrenue_products' AS `supplier_table`,'MODEL' AS `supplier_id_type`,`m`.`tier_id` AS `tier_id`,`s`.`QUANTITY` AS `quantity` from (`mws_inventory` `m` join `entrenue_products` `s` on((`m`.`sku` = `s`.`SKU`))) union all select `m`.`id` AS `id`,`m`.`sku` AS `sku`,`m`.`asin` AS `asin`,`m`.`min_price` AS `min_price`,`m`.`competitor` AS `competitor`,`m`.`earnings` AS `earnings`,`s`.`id` AS `supplier_id`,`s`.`Nalpac_Item_Number` AS `supplier_product_id`,`m`.`price` AS `inv_price`,`s`.`PRICE` AS `price`,0 AS `map`,`s`.`updated` AS `supplier_updated`,'nalpac_products' AS `supplier_table`,'Nalpac_Item_Number' AS `supplier_id_type`,`m`.`tier_id` AS `tier_id`,`s`.`Quantity_Onhand` AS `quantity` from (`mws_inventory` `m` join `nalpac_products` `s` on((`m`.`sku` = `s`.`SKU`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_match_inv`
--
DROP TABLE IF EXISTS `view_match_inv`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_match_inv`  AS  select `m`.`id` AS `id`,`m`.`sku` AS `m_sku`,`m`.`asin` AS `m_asin`,`m`.`price` AS `m_price`,`m`.`quantity` AS `m_quantity`,`m`.`created` AS `m_created`,`m`.`updated` AS `m_updated`,`m`.`tier_id` AS `tier_id`,`e`.`id` AS `e_id`,`e`.`PRODUCT_ID` AS `e_product_id`,`e`.`MODEL` AS `e_model`,`e`.`SKU` AS `e_sku`,if(((`e`.`PRICE` > `e`.`MAP`) or isnull(`e`.`MAP`)),`e`.`PRICE`,`e`.`MAP`) AS `e_price`,`e`.`QUANTITY` AS `e_quantity`,`e`.`created` AS `d_created`,`e`.`updated` AS `e_updated`,`e`.`NAME` AS `e_name`,`e`.`DESCRIPTION` AS `e_descriptions`,`e`.`UPC` AS `e_upc`,`e`.`IMAGE_1` AS `e_image_1`,`l`.`NumberOfOfferListingsConsidered` AS `l_offer`,`l`.`ListingPrice` AS `l_listingprice`,`l`.`LandedPrice` AS `l_landingprice`,`l`.`Shipping` AS `l_shipping` from ((`mws_inventory` `m` left join `entrenue_products` `e` on((`m`.`sku` = `e`.`SKU`))) left join `lowestofferlistingsforskuresponse` `l` on((`m`.`sku` = `l`.`sku`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_name`
--
DROP TABLE IF EXISTS `view_name`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_name`  AS  select `pulled`.`id` AS `id`,`pulled`.`productId` AS `productId`,`pulled`.`sellerId` AS `sellerId`,`pulled`.`sellerprefix` AS `sellerprefix`,`pulled`.`created` AS `created`,`pulled`.`user_id` AS `user_id`,`pulled`.`status` AS `status` from `pulled` where (not(`pulled`.`productId` in (select `blacklist`.`asin` from `blacklist` union select `inventory`.`asin1` from `inventory`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state` (`state`);

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD KEY `blacklist_asin` (`asin`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eldorado_prices`
--
ALTER TABLE `eldorado_prices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SKU` (`SKU`),
  ADD UNIQUE KEY `UPC` (`UPC`,`SKU`);

--
-- Indexes for table `eldorado_products`
--
ALTER TABLE `eldorado_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SKU` (`SKU`),
  ADD UNIQUE KEY `UPC` (`UPC`,`SKU`);

--
-- Indexes for table `entrenue_inventory`
--
ALTER TABLE `entrenue_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku_asin` (`seller-sku`,`asin1`),
  ADD KEY `index_inventory_sku` (`seller-sku`);

--
-- Indexes for table `entrenue_products`
--
ALTER TABLE `entrenue_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SKU` (`SKU`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku` (`SKU`),
  ADD KEY `index_asin` (`ASIN`);

--
-- Indexes for table `history_info`
--
ALTER TABLE `history_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD KEY `index_sku_asin` (`seller-sku`,`asin1`),
  ADD KEY `index_inventory_sku` (`seller-sku`);

--
-- Indexes for table `item_offer`
--
ALTER TABLE `item_offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku` (`ASIN`);

--
-- Indexes for table `item_offer_track`
--
ALTER TABLE `item_offer_track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ASIN` (`ASIN`) COMMENT 'index_item_offer_tracking',
  ADD KEY `index_sku_item_offer_track` (`SKU`),
  ADD KEY `index_created_item_offer_track` (`created`);

--
-- Indexes for table `list_order`
--
ALTER TABLE `list_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `AmazonOrderId` (`AmazonOrderId`),
  ADD KEY `index_sku` (`AmazonOrderId`);

--
-- Indexes for table `list_order_item`
--
ALTER TABLE `list_order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku` (`OrderItemId`);

--
-- Indexes for table `lowestofferlistingsforasinresponse`
--
ALTER TABLE `lowestofferlistingsforasinresponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asin` (`asin`),
  ADD KEY `sku` (`sku`);

--
-- Indexes for table `lowestofferlistingsforskuresponse`
--
ALTER TABLE `lowestofferlistingsforskuresponse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mirage_inventory`
--
ALTER TABLE `mirage_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku_asin` (`seller-sku`,`asin1`),
  ADD KEY `index_inventory_sku` (`seller-sku`);

--
-- Indexes for table `mirage_inventory_2`
--
ALTER TABLE `mirage_inventory_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku_asin` (`seller-sku`,`asin1`),
  ADD KEY `index_inventory_sku` (`seller-sku`);

--
-- Indexes for table `mirage_min_price`
--
ALTER TABLE `mirage_min_price`
  ADD PRIMARY KEY (`ansi`);

--
-- Indexes for table `mirage_product`
--
ALTER TABLE `mirage_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mws_inventory`
--
ALTER TABLE `mws_inventory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD UNIQUE KEY `sku_2` (`sku`,`asin`);

--
-- Indexes for table `my_prices`
--
ALTER TABLE `my_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nalpac_products`
--
ALTER TABLE `nalpac_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku_asin_upc_index` (`SKU`,`ASIN`,`UPC`),
  ADD KEY `SKU` (`SKU`);

--
-- Indexes for table `offer_track_info`
--
ALTER TABLE `offer_track_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_offer_info` (`start`),
  ADD KEY `index_offer_info_end` (`end`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku` (`AmazonOrderId`);

--
-- Indexes for table `pre_history`
--
ALTER TABLE `pre_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processing_report`
--
ALTER TABLE `processing_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submit_feed_id` (`submit_feed_id`);

--
-- Indexes for table `pulled`
--
ALTER TABLE `pulled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku` (`AmazonOrderId`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_sku` (`SKU`),
  ADD KEY `index_asin` (`ASIN`);

--
-- Indexes for table `submit_feed`
--
ALTER TABLE `submit_feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`,`drop_email`);

--
-- Indexes for table `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tier_behavior`
--
ALTER TABLE `tier_behavior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_inventory`
--
ALTER TABLE `tmp_inventory`
  ADD KEY `index_sku_asin` (`seller-sku`,`asin1`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_upload_sku` (`sku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eldorado_prices`
--
ALTER TABLE `eldorado_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eldorado_products`
--
ALTER TABLE `eldorado_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entrenue_inventory`
--
ALTER TABLE `entrenue_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entrenue_products`
--
ALTER TABLE `entrenue_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_offer`
--
ALTER TABLE `item_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item_offer_track`
--
ALTER TABLE `item_offer_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_order`
--
ALTER TABLE `list_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_order_item`
--
ALTER TABLE `list_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lowestofferlistingsforasinresponse`
--
ALTER TABLE `lowestofferlistingsforasinresponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lowestofferlistingsforskuresponse`
--
ALTER TABLE `lowestofferlistingsforskuresponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mirage_inventory`
--
ALTER TABLE `mirage_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mirage_inventory_2`
--
ALTER TABLE `mirage_inventory_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mirage_product`
--
ALTER TABLE `mirage_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mws_inventory`
--
ALTER TABLE `mws_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my_prices`
--
ALTER TABLE `my_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nalpac_products`
--
ALTER TABLE `nalpac_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_track_info`
--
ALTER TABLE `offer_track_info`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_history`
--
ALTER TABLE `pre_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processing_report`
--
ALTER TABLE `processing_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pulled`
--
ALTER TABLE `pulled`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submit_feed`
--
ALTER TABLE `submit_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tier_behavior`
--
ALTER TABLE `tier_behavior`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
