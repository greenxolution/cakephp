<?php
App::uses('AppModel', 'Model');
/**
 * ViewMatchInv Model
 *
 CREATE 
 VIEW `view_match_inv` AS 
 select `m`.`id`,`m`.`sku` AS `m_sku`,`m`.`asin` AS `m_asin`,
  `m`.`price` AS `m_price`,`m`.`quantity` AS `m_quantity`,`m`.`created` AS `m_created`,
  `m`.`updated` AS `m_updated`,
  `m`.`tier_id` as `tier_id`,
  `e`.`id` AS `e_id`, 
  `e`.`PRODUCT_ID` AS `e_product_id`, 
  `e`.`MODEL` AS `e_model`,
  `e`.`SKU` AS `e_sku`, 
  IF(`e`.`PRICE` > `e`.`MAP` OR `e`.`MAP` IS NULL, `e`.`PRICE`, `e`.`MAP`) AS `e_price`,
  `e`.`QUANTITY` AS `e_quantity`,
  `e`.`created` AS `d_created`,
  `e`.`updated` AS `e_updated` ,

  `e`.`NAME` AS `e_name` ,
  `e`.`DESCRIPTION` AS `e_descriptions` , 
  `e`.`UPC` AS `e_upc` ,  
  `e`.`IMAGE_1` AS `e_image_1` ,  
  
 `l`.`NumberOfOfferListingsConsidered` as `l_offer`,
`l`.`ListingPrice` as `l_listingprice`,
`l`.`LandedPrice` as `l_landingprice`,
`l`.`Shipping` as `l_shipping`
  from (`mws_inventory` `m` 
  left join `entrenue_products` `e` 
  on((`m`.`sku` = `e`.`SKU`)))
  left join `LowestOfferListingsForSKUResponse` `l`
  on (`m`.`sku` = `l`.`sku`)
 *
 */
class ViewMatchInv extends AppModel {

	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'view_match_inv';
	
	public $drophipping_fee				= 2.00;
	
	public $shipping_fee				= 5.09;

	public $min_quantity = 3;

	public $virtualFields = array(
			'SKU' 		=> 'ViewMatchInv.m_sku',
			'ANSI'		=> 'ViewMatchInv.m_asin',
			'Quantity'	=> 'IF( ViewMatchInv.e_quantity < 3 , 0 , ViewMatchInv.e_quantity) ',
			'Price'		=> 'ViewMatchInv.e_price',
			'l_price'	=> 'l_listingprice',
			'profit'	=> 'm_price - e_price',
			'earnings'	=> 'l_listingprice - e_price'
	);
	
	public $belongsTo = array(
			'Tier' => array(
					'className' => 'Tier',
					'foreignKey' => 'tier_id'
			)
	);

	public $actsAs = array(
			'Search.Searchable'
	);
	
	/**
	 * Primary key field
	 *
	 * @var string
	 */
	public $primaryKey = 'm_sku';

	
	/**
	 * List Items with virtual fields: SKU, Price
	 * 
	 */
	public function listItemsPrice(){
		
		return $this->find('list', array(
				'fields' 		=> array('SKU', 'e_price')
		));
	}

	/**
	 * List Items with virutal fields: SKU, Quantity
	 * when the Quantity <> e_quantity
	 * Quantity field is mws_inventory table
	 * e_quantity field is entrenue_products table
	 *
	 * @return array (SKU, Quantity)
	 */
	public function listItemsQuantity(){

		return $this->find('all', array(
				'fields' 		=> array('SKU', 'Quantity')
		));
	}

	public $filterArgs = array(
			'filter' => array(
					'type' => 'query',
					'method' => 'orConditions'
			),

	);

	
	// Or conditions with like
	public function orConditions($data = array()) {
		$filter = $data['filter'];
		$condition = array(
				'OR' => array(
						$this->alias . '.m_sku LIKE' => '%' . $filter . '%',
						$this->alias . '.m_asin LIKE' => '%' . $filter . '%',
						
						$this->alias . '.e_name LIKE' => '%' . $filter . '%',
						$this->alias . '.e_descriptions LIKE' => '%' . $filter . '%',
						$this->alias . '.e_upc LIKE' => '%' . $filter . '%',
						$this->alias . '.e_model LIKE' => '%' . $filter . '%',
						$this->alias . '.e_product_id LIKE' => '%' . $filter . '%',
						
				)
		);
		return $condition;
	}
	
	public function myMinPriceBySku($sku = null){
		
		if($sku == null) return 0;
		
		$item = $this->findByMSku($sku, array('field'=>'l_landingprice'));
		
		debug($item['ViewMatchInv']['l_landingprice']);
		
		$value = $item['ViewMatchInv']['l_landingprice'] + $this->shipping_fee + $this->drophipping_fee;
		
		return $value;
	}

}
