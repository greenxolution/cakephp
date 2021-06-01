ALTER TABLE `mws_inventory` ADD `listing_price` DECIMAL(8,2) NOT NULL AFTER `min_price`;

Update `greencloud`.`mws_inventory` LEFT JOIN `greencloud`.`entrenue_products` AS `EntrenueProduct` ON (entrenue_product_id = `EntrenueProduct`.`id`) set min_price = (`EntrenueProduct`.`price` * 1.2) +2

Update `greencloud`.`mws_inventory` LEFT JOIN `greencloud`.`entrenue_products` AS `EntrenueProduct` ON (entrenue_product_id = `EntrenueProduct`.`id`) set mws_inventory.sku = `EntrenueProduct`.`sku`;