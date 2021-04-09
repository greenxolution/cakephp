<?php
App::uses('AppModel', 'Model');
/**
 * EntrenueInventory Model
 *
 */
class EntrenueInventory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'entrenue_inventory';

}

// SELECT asin1 as `mws-asin`, `inv`.price as `mws-price`, `inv`.quantity as `mws-quantity`,
// `inv`.price as `inv-price`, `inv`.quantity as `inv-quantity`
// FROM  `entrenue_inventory` AS  `inv` 
// LEFT JOIN  `entrenue_products` AS  `prod` ON  `inv`.`seller-sku` =  `prod`.`SKU` 
// LIMIT 0 , 30