ALTER TABLE `entrenue_products` ADD `activated` BOOLEAN NOT NULL DEFAULT FALSE AFTER `penalized`;

ALTER TABLE `mws_inventory` ADD `Binding` VARCHAR(50) NOT NULL AFTER `item_offer`;