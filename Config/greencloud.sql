-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 01:25 PM
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
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entrenue_products_history`
--

CREATE TABLE `entrenue_products_history` (
  `id` int(11) NOT NULL,
  `oldvalue` text,
  `newvalue` text,
  `field` varchar(200) DEFAULT NULL,
  `entrenue_product_id` int(11) DEFAULT NULL,
  `field_type` varchar(200) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `NumberOfPages` text NOT NULL,
  `image` text NOT NULL,
  `provider` text NOT NULL,
  `entrenue_products_id` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `table 48`
--

CREATE TABLE `table 48` (
  `COL 1` varchar(10) DEFAULT NULL,
  `COL 2` varchar(10) DEFAULT NULL,
  `COL 3` varchar(20) DEFAULT NULL,
  `COL 4` varchar(91) DEFAULT NULL,
  `COL 5` varchar(3916) DEFAULT NULL,
  `COL 6` varchar(28) DEFAULT NULL,
  `COL 7` varchar(5) DEFAULT NULL,
  `COL 8` varchar(9) DEFAULT NULL,
  `COL 9` varchar(8) DEFAULT NULL,
  `COL 10` varchar(17) DEFAULT NULL,
  `COL 11` varchar(14) DEFAULT NULL,
  `COL 12` varchar(16) DEFAULT NULL,
  `COL 13` varchar(19) DEFAULT NULL,
  `COL 14` varchar(6) DEFAULT NULL,
  `COL 15` varchar(119) DEFAULT NULL,
  `COL 16` varchar(125) DEFAULT NULL,
  `COL 17` varchar(9) DEFAULT NULL,
  `COL 18` varchar(12) DEFAULT NULL,
  `COL 19` varchar(96) DEFAULT NULL,
  `COL 20` varchar(52) DEFAULT NULL,
  `COL 21` varchar(15) DEFAULT NULL,
  `COL 22` varchar(19) DEFAULT NULL,
  `COL 23` varchar(22) DEFAULT NULL,
  `COL 24` varchar(11) DEFAULT NULL,
  `COL 25` varchar(10) DEFAULT NULL,
  `COL 26` varchar(10) DEFAULT NULL,
  `COL 27` varchar(19) DEFAULT NULL,
  `COL 28` varchar(6620) DEFAULT NULL,
  `COL 29` varchar(873) DEFAULT NULL,
  `COL 30` varchar(481) DEFAULT NULL,
  `COL 31` varchar(1564) DEFAULT NULL,
  `COL 32` varchar(955) DEFAULT NULL,
  `COL 33` varchar(42) DEFAULT NULL,
  `COL 34` varchar(69) DEFAULT NULL,
  `COL 35` varchar(72) DEFAULT NULL,
  `COL 36` varchar(72) DEFAULT NULL,
  `COL 37` varchar(125) DEFAULT NULL,
  `COL 38` varchar(120) DEFAULT NULL,
  `COL 39` varchar(72) DEFAULT NULL,
  `COL 40` varchar(74) DEFAULT NULL,
  `COL 41` varchar(17) DEFAULT NULL,
  `COL 42` varchar(12) DEFAULT NULL,
  `COL 43` varchar(74) DEFAULT NULL,
  `COL 44` varchar(78) DEFAULT NULL,
  `COL 45` varchar(78) DEFAULT NULL,
  `COL 46` varchar(78) DEFAULT NULL,
  `COL 47` varchar(74) DEFAULT NULL,
  `COL 48` varchar(123) DEFAULT NULL,
  `COL 49` varchar(110) DEFAULT NULL,
  `COL 50` varchar(31) DEFAULT NULL,
  `COL 51` varchar(13) DEFAULT NULL,
  `COL 52` varchar(109) DEFAULT NULL,
  `COL 53` varchar(74) DEFAULT NULL,
  `COL 54` varchar(60) DEFAULT NULL,
  `COL 55` varchar(13) DEFAULT NULL,
  `COL 56` varchar(74) DEFAULT NULL,
  `COL 57` varchar(74) DEFAULT NULL,
  `COL 58` varchar(6) DEFAULT NULL,
  `COL 59` varchar(16) DEFAULT NULL,
  `COL 60` varchar(118) DEFAULT NULL,
  `COL 61` varchar(21) DEFAULT NULL,
  `COL 62` varchar(73) DEFAULT NULL,
  `COL 63` varchar(25) DEFAULT NULL,
  `COL 64` varchar(14) DEFAULT NULL,
  `COL 65` varchar(13) DEFAULT NULL,
  `COL 66` varchar(104) DEFAULT NULL,
  `COL 67` varchar(74) DEFAULT NULL,
  `COL 68` varchar(74) DEFAULT NULL,
  `COL 69` varchar(21) DEFAULT NULL,
  `COL 70` varchar(98) DEFAULT NULL,
  `COL 71` varchar(98) DEFAULT NULL,
  `COL 72` varchar(98) DEFAULT NULL,
  `COL 73` varchar(95) DEFAULT NULL,
  `COL 74` varchar(89) DEFAULT NULL,
  `COL 75` varchar(90) DEFAULT NULL,
  `COL 76` varchar(83) DEFAULT NULL,
  `COL 77` varchar(74) DEFAULT NULL,
  `COL 78` varchar(38) DEFAULT NULL,
  `COL 79` varchar(16) DEFAULT NULL,
  `COL 80` varchar(36) DEFAULT NULL,
  `COL 81` varchar(14) DEFAULT NULL,
  `COL 82` varchar(87) DEFAULT NULL,
  `COL 83` varchar(81) DEFAULT NULL,
  `COL 84` varchar(81) DEFAULT NULL,
  `COL 85` varchar(87) DEFAULT NULL,
  `COL 86` varchar(76) DEFAULT NULL,
  `COL 87` varchar(12) DEFAULT NULL,
  `COL 88` varchar(87) DEFAULT NULL,
  `COL 89` varchar(76) DEFAULT NULL,
  `COL 90` varchar(76) DEFAULT NULL,
  `COL 91` varchar(76) DEFAULT NULL,
  `COL 92` varchar(55) DEFAULT NULL,
  `COL 93` varchar(51) DEFAULT NULL,
  `COL 94` varchar(51) DEFAULT NULL,
  `COL 95` varchar(6) DEFAULT NULL,
  `COL 96` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table 49`
--

CREATE TABLE `table 49` (
  `PRODUCT_ID` int(4) DEFAULT NULL,
  `MODEL` varchar(10) DEFAULT NULL,
  `PRODUCT_STYLE_OPTION` varchar(10) DEFAULT NULL,
  `NAME` varchar(91) DEFAULT NULL,
  `DESCRIPTION` varchar(3916) DEFAULT NULL,
  `MANUFACTURER` varchar(28) DEFAULT NULL,
  `PRICE` decimal(6,2) DEFAULT NULL,
  `SALEPRICE` varchar(2) DEFAULT NULL,
  `QUANTITY` int(4) DEFAULT NULL,
  `UPC` varchar(13) DEFAULT NULL,
  `DATE_AVAILABLE` varchar(10) DEFAULT NULL,
  `DATE_ADDED` varchar(16) DEFAULT NULL,
  `DATE_MODIFIED` varchar(19) DEFAULT NULL,
  `STATUS` int(1) DEFAULT NULL,
  `PRODUCT_URL` varchar(119) DEFAULT NULL,
  `IMAGE_1` varchar(125) DEFAULT NULL,
  `MSRP` varchar(9) DEFAULT NULL,
  `PAGES` varchar(12) DEFAULT NULL,
  `SECONDARY_TITLE` varchar(96) DEFAULT NULL,
  `AUTHOR` varchar(52) DEFAULT NULL,
  `BOOK_BINDING` varchar(15) DEFAULT NULL,
  `COUNTRY_OF_ORIGIN` varchar(19) DEFAULT NULL,
  `ITEM_WEIGHT` varchar(22) DEFAULT NULL,
  `ITEM_HEIGHT` varchar(6) DEFAULT NULL,
  `ITEM_WIDTH` varchar(5) DEFAULT NULL,
  `ITEM_DEPTH` varchar(5) DEFAULT NULL,
  `PACKAGE_WEIGHT_LBS_` varchar(7) DEFAULT NULL,
  `TAB_INGREDIENTS` varchar(6620) DEFAULT NULL,
  `TAB_WHATS_INCLUDED` varchar(873) DEFAULT NULL,
  `TAB_RESTRICTIONS` varchar(481) DEFAULT NULL,
  `TAB_SPECIAL_OFFERS` varchar(1564) DEFAULT NULL,
  `TAB_VIDEO` varchar(955) DEFAULT NULL,
  `CATEGORY_1` varchar(42) DEFAULT NULL,
  `CATEGORY_2` varchar(69) DEFAULT NULL,
  `CATEGORY_3` varchar(72) DEFAULT NULL,
  `CATEGORY_4` varchar(72) DEFAULT NULL,
  `IMAGE_2` varchar(125) DEFAULT NULL,
  `IMAGE_3` varchar(120) DEFAULT NULL,
  `CATEGORY_5` varchar(72) DEFAULT NULL,
  `CATEGORY_6` varchar(74) DEFAULT NULL,
  `ISBN` varchar(10) DEFAULT NULL,
  `GAME_GENRE` varchar(12) DEFAULT NULL,
  `CATEGORY_7` varchar(74) DEFAULT NULL,
  `CATEGORY_8` varchar(78) DEFAULT NULL,
  `CATEGORY_9` varchar(78) DEFAULT NULL,
  `CATEGORY_10` varchar(78) DEFAULT NULL,
  `CATEGORY_11` varchar(74) DEFAULT NULL,
  `IMAGE_4` varchar(123) DEFAULT NULL,
  `IMAGE_5` varchar(110) DEFAULT NULL,
  `TYPE_OF_PACKAGING` varchar(31) DEFAULT NULL,
  `TYPE_OF_GAME` varchar(13) DEFAULT NULL,
  `IMAGE_6` varchar(109) DEFAULT NULL,
  `CATEGORY_12` varchar(74) DEFAULT NULL,
  `ITEM_DIAMETER` varchar(60) DEFAULT NULL,
  `DESIGNED_IN` varchar(13) DEFAULT NULL,
  `CATEGORY_13` varchar(74) DEFAULT NULL,
  `CATEGORY_14` varchar(74) DEFAULT NULL,
  `MAP` varchar(6) DEFAULT NULL,
  `ITEM_VOLUME` varchar(16) DEFAULT NULL,
  `MATERIALS` varchar(118) DEFAULT NULL,
  `WATER_RESISTANCE` varchar(21) DEFAULT NULL,
  `BATTERY` varchar(73) DEFAULT NULL,
  `POWER_SOURCE` varchar(25) DEFAULT NULL,
  `PACKAGE_HEIGHT` varchar(6) DEFAULT NULL,
  `PACKAGE_WIDTH` varchar(4) DEFAULT NULL,
  `IMAGE_7` varchar(104) DEFAULT NULL,
  `CATEGORY_15` varchar(74) DEFAULT NULL,
  `CATEGORY_16` varchar(74) DEFAULT NULL,
  `RUNTIME` varchar(21) DEFAULT NULL,
  `IMAGE_8` varchar(98) DEFAULT NULL,
  `IMAGE_9` varchar(98) DEFAULT NULL,
  `IMAGE_10` varchar(98) DEFAULT NULL,
  `IMAGE_11` varchar(95) DEFAULT NULL,
  `IMAGE_12` varchar(89) DEFAULT NULL,
  `IMAGE_13` varchar(90) DEFAULT NULL,
  `IMAGE_14` varchar(83) DEFAULT NULL,
  `CATEGORY_17` varchar(74) DEFAULT NULL,
  `VIBRATION_PATTERNS` varchar(38) DEFAULT NULL,
  `VIBRATION_LEVELS` varchar(16) DEFAULT NULL,
  `INSERTABLE_LENGTH` varchar(36) DEFAULT NULL,
  `PACKAGE_LENGTH` varchar(4) DEFAULT NULL,
  `CATEGORY_18` varchar(55) DEFAULT NULL,
  `CATEGORY_19` varchar(51) DEFAULT NULL,
  `CATEGORY_20` varchar(51) DEFAULT NULL,
  `CBD_MG` varchar(4) DEFAULT NULL,
  `PACKAGE_DEPTH` varchar(3) DEFAULT NULL
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
,`price` varchar(250)
,`map` varchar(250)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_inventory_suppliers`  AS  select `m`.`id` AS `id`,`m`.`sku` AS `sku`,`m`.`asin` AS `asin`,`m`.`min_price` AS `min_price`,`m`.`competitor` AS `competitor`,`m`.`earnings` AS `earnings`,`s`.`id` AS `supplier_id`,`s`.`model` AS `supplier_product_id`,`m`.`price` AS `inv_price`,`s`.`price` AS `price`,`s`.`map` AS `map`,`s`.`updated` AS `supplier_updated`,'entrenue_products' AS `supplier_table`,'MODEL' AS `supplier_id_type`,`m`.`tier_id` AS `tier_id`,`s`.`quantity` AS `quantity` from (`mws_inventory` `m` join `entrenue_products` `s` on((`m`.`sku` = `s`.`SKU`))) union all select `m`.`id` AS `id`,`m`.`sku` AS `sku`,`m`.`asin` AS `asin`,`m`.`min_price` AS `min_price`,`m`.`competitor` AS `competitor`,`m`.`earnings` AS `earnings`,`s`.`id` AS `supplier_id`,`s`.`Nalpac_Item_Number` AS `supplier_product_id`,`m`.`price` AS `inv_price`,`s`.`PRICE` AS `price`,0 AS `map`,`s`.`updated` AS `supplier_updated`,'nalpac_products' AS `supplier_table`,'Nalpac_Item_Number' AS `supplier_id_type`,`m`.`tier_id` AS `tier_id`,`s`.`Quantity_Onhand` AS `quantity` from (`mws_inventory` `m` join `nalpac_products` `s` on((`m`.`sku` = `s`.`SKU`))) ;

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
  ADD UNIQUE KEY `constraint_name` (`model`),
  ADD UNIQUE KEY `entrenue_products_model` (`model`);

--
-- Indexes for table `entrenue_products_history`
--
ALTER TABLE `entrenue_products_history`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `entrenue_products_id` (`entrenue_products_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `entrenue_products_history`
--
ALTER TABLE `entrenue_products_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_offer`
--
ALTER TABLE `item_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tier_behavior`
--
ALTER TABLE `tier_behavior`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mws_inventory`
--
ALTER TABLE `mws_inventory`
  ADD CONSTRAINT `mws_inventory_ibfk_1` FOREIGN KEY (`entrenue_products_id`) REFERENCES `entrenue_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
