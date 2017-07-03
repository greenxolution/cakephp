<?php
App::uses('AppModel', 'Model');

App::import('Model','TierBehavior');

App::import('Model','LowestOfferListingsForSKU');

/**
 * ViewInventorySupplier Model
 *
 *
 *CREATE VIEW `view_inventory_suppliers` AS
 select
 `m`.`id`, `m`.`sku` AS `sku`, `m`.`asin`,
 `m`.`min_price`, `m`.`competitor`, `m`.`earnings`, 
 `s`.`id` AS `supplier_id`,`s`.`MODEL` AS `supplier_product_id`,`m`.`price` AS inv_price, `s`.`PRICE` AS `price`,
 `s`.`MAP` AS `map`,`s`.`updated` AS `supplier_updated`,'entrenue_products' AS `supplier_table`, 'MODEL' AS `supplier_id_type`,
 `m`.`tier_id`, `s`.`quantity` AS `quantity`
 from (`mws_inventory` `m` inner join `entrenue_products` `s` on((`m`.`sku` = `s`.`SKU`)))
 
 union all
 select
 `m`.`id`, `m`.`sku` AS `sku`, `m`.`asin`,
 `m`.`min_price`, `m`.`competitor`, `m`.`earnings`, 
 `s`.`id` AS `supplier_id`,`s`.`Nalpac_Item_Number` AS `supplier_product_id`,`m`.`price` AS inv_price, `s`.`Price` AS `price`,
 0 AS `map`,`s`.`updated` AS `supplier_updated`,'nalpac_products' AS `supplier_table`, 'Nalpac_Item_Number' AS `supplier_id_type`,
 `m`.`tier_id`, `s`.`Quantity_Onhand`  AS `quantity`
 from (`mws_inventory` `m` inner join `nalpac_products` `s` on((`m`.`sku` = `s`.`SKU`)))

 


 */
class ViewInventorySupplier extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'sku';
	
	public $order = 'earnings DESC';

	public $virtualFields = array(
			'selected_price' 	=> 'IF( price > map, price, map ) '
	);
	
	public $actsAs = array(
			'Search.Searchable'
	);

	public $table = 'view_inventory_suppliers';

	public $min_quantity = null;

	public $tierBehaviorClass;
	
	public $tierBehaviorName;
	
	public $lowestOfferList;
	
	public $lowestOfferListSkuListingPrice;

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);

		$tiers = $this->query('SELECT * FROM `tier_behavior`');
		
		$this->tierBehaviorClass 	= Hash::combine($tiers, '{n}.tier_behavior.id', '{n}.tier_behavior.class');
		
		$this->tierBehaviorName		= Hash::combine($tiers, '{n}.tier_behavior.id', '{n}.tier_behavior.name');
		
		
		if(Hash::dimensions(Configure::read('LowestOfferListingsForSKU.list')) == 0 ){
			
			$lowestOfferListingsForSKU	= new LowestOfferListingsForSKU();
		
			$lowestOfferListingsForSKU->cacheAllList();
		}
		
		$this->lowestOfferList		= Configure::read('LowestOfferListingsForSKU.list');
		

		$this->lowestOfferListSkuListingPrice = Hash::combine($this->lowestOfferList, '{n}.LowestOfferListingsForSKU.sku', '{n}.LowestOfferListingsForSKU.ListingPrice');
		
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
						$this->alias . '.sku LIKE' => '%' . trim($filter) . '%',
						$this->alias . '.asin LIKE' => '%' . trim($filter) . '%',
	
						$this->alias . '.supplier_table LIKE' => '%' . trim($filter) . '%',
	
				)
		);
		return $condition;
	}
	
	
	public function afterFind($results, $primary = false) {
		
		if(Hash::extract($results, '{n}.ViewInventorySupplier')){
		
			foreach ($results as $key => $val) {
				$tier_id = $results[$key]['ViewInventorySupplier']['tier_id'];
					
				$tierClass = ClassRegistry::init($this->tierBehaviorClass[$tier_id]);;
					
				$tierClass->load($tier_id);
				
				$results[$key]['ViewInventorySupplier']['tier'] = array('competitor' 	=> $this->lowestOfferListSkuListingPrice[$results[$key]['ViewInventorySupplier']['sku']],
						'min_price'		=> $tierClass->minPrice($results[$key]),
						'tier_price' 	=> $tierClass->tierPrice($results[$key]),
						'tier_name'		=> $this->tierBehaviorName[$results[$key]['ViewInventorySupplier']['tier_id']]);
					
// 				debug($this->lowestOfferListSkuListingPrice[$results[$key]['ViewInventorySupplier']['sku']].' - '.$tierClass->minPrice($results[$key]));
// 				$results[$key]['ViewInventorySupplier']['earnings'] = (float) ($this->lowestOfferListSkuListingPrice[$results[$key]['ViewInventorySupplier']['sku']] - $tierClass->minPrice($results[$key]));
			
			}
			
		}
		

		return $results;
	}

	protected function addTierVariables($results){
		
		if(Hash::extract($results, '{n}.ViewInventorySupplier')){
		
			foreach ($results as $key => $val) {
				$tier_id = $results[$key]['ViewInventorySupplier']['tier_id'];
					
				$tierClass = ClassRegistry::init($this->tierBehaviorClass[$tier_id]);;
					
				$tierClass->load($tier_id);
		
				$results[$key]['ViewInventorySupplier']['selected_price'] = ($results[$key]['ViewInventorySupplier']['price'] > $results[$key]['ViewInventorySupplier']['map'])?$results[$key]['ViewInventorySupplier']['price']:$results[$key]['ViewInventorySupplier']['map'];
				
				$results[$key]['ViewInventorySupplier']['tier'] = array('competitor' 	=> $this->lowestOfferListSkuListingPrice[$results[$key]['ViewInventorySupplier']['sku']],
						'min_price'		=> $tierClass->minPrice($results[$key]),
						'tier_price' 	=> $tierClass->tierPrice($results[$key]),
						'tier_name'		=> $this->tierBehaviorName[$results[$key]['ViewInventorySupplier']['tier_id']]);
					
				// 				debug($this->lowestOfferListSkuListingPrice[$results[$key]['ViewInventorySupplier']['sku']].' - '.$tierClass->minPrice($results[$key]));
				$results[$key]['ViewInventorySupplier']['earnings'] = (float) ($this->lowestOfferListSkuListingPrice[$results[$key]['ViewInventorySupplier']['sku']] - $tierClass->minPrice($results[$key]));
					
			}
				
		}
		
		return $results;
	}

	public function setMinQuantity($quantity){

		$this->min_quantity = $quantity;
	}

	/**
	 * Return a list of product based on tier.
	 * The Multiple | Single list
	 * Multiple: the product belongs to more than one providers
	 * Single: the product  belongs to one provider.
	 * 
	 * @param unknown_type $tier_id
	 * @param unknown_type $sku
	 * @return product list
	 * 
	 */
	public function listByTiers($tier_id = null, $sku = null){

		$list['multiple'] 	= $this->listMultiple($tier_id, $sku);


		if($sku == null){


// 			$params = array(
// 					'conditions' => array('ViewInventorySupplier.tier_id' => $tier_id, 'ViewInventorySupplier.quantity >= '	=> $this->min_quantity),
// 					'group' => array('sku HAVING COUNT(*) = 1'),
// 			);
			
			$sql = "SELECT id, sku, asin, supplier_id, supplier_product_id, inv_price, price, map, 
						supplier_updated, supplier_table, supplier_id_type, tier_id, IF( price > map, price, map ) as selected_price,
						price - inv_price as earnings,
						quantity FROM view_inventory_suppliers as ViewInventorySupplier 
						WHERE QUANTITY > ".$this->min_quantity." 
						AND Tier_id = ".$tier_id."
						GROUP BY sku HAVING COUNT(*) = 1";
			
		}
		else{
// 			$params = array(
// 					'conditions' => array(
// 					// 							'ViewInventorySupplier.tier_id' 		=> $tier_id,
// 							'ViewInventorySupplier.sku' 			=> $sku,
// 							'ViewInventorySupplier.quantity >= '	=> $this->min_quantity),
// 					'group' => array('ViewInventorySupplier.sku HAVING (COUNT(*) = 1)'),
// 			);

			$sql = "SELECT *
						FROM view_inventory_suppliers as ViewInventorySupplier 
						WHERE QUANTITY > ".$this->min_quantity." 
						AND Tier_id = ".$tier_id." AND sku = '".$sku."'
						GROUP BY sku HAVING COUNT(*) = 1";
				
		}
		
		debug($sql);
		
		$list['single'] = $this->addTierVariables($this->query($sql));
		
		
// 		$list['single']		= $this->find('all', $params);
		
// 		debug($list['single']);


// 		debug(count($list['single']));

		return $list;
	}

	protected function listMultiple($tier_id, $sku = null){

		if($sku == null){
			
			$multiple_sku = $this->find('all', array(
													'fields' 		=> array('ViewInventorySupplier.sku'),
													'conditions'	=> array('ViewInventorySupplier.tier_id' => $tier_id,
																			'ViewInventorySupplier.quantity >= '	=> $this->min_quantity),
													'group'			=> array('ViewInventorySupplier.sku HAVING (COUNT(*) > 1)')
						));
			
			
			// 				Render  SQL sentence
// 			$dbo = $this->getDatasource();
// 			$logs = $dbo->getLog();
// 			$lastLog = end($logs['log']);
// 			debug($lastLog['query']);
		}
		else{
			$multiple_sku[] = $sku;
			
		}

		$b = array();

		foreach($multiple_sku as $key => $value){

			$a = $this->find('all', array('conditions' => array('ViewInventorySupplier.sku' => $value),
					'group' => array('ViewInventorySupplier.sku HAVING (COUNT(*) > 1)')));
			

			array_push($b, Hash::combine($a, '{n}.ViewInventorySupplier.supplier_table', '{n}'));

		}


// // 				Render  SQL sentence
// 				$dbo = $this->getDatasource();
// 				$logs = $dbo->getLog();
// 				$lastLog = end($logs['log']);
// 				debug($lastLog['query']);

		return $b;

	}

	public function listBySkuTier($tier_id, $sku){

		return $this->find('all', array('conditions' => array('ViewInventorySupplier.sku' => $sku, 'tier_id' => $tier_id)));

	}


}
