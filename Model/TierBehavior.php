<?php
App::uses('AppModel', 'Model');

App::uses('ViewInventorySupplier', 'Model');

App::uses('Supplier', 'Model');

/**
 * TierBehavior Model
 *
 * @property Tier $Tier
 */
class TierBehavior extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tier_behavior';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'class';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
// 	public $hasMany = array(
// 		'Tier' => array(
// 			'className' => 'Tier',
// 			'foreignKey' => 'tier_behavior_id',
// 			'dependent' => false,
// 			'conditions' => '',
// 			'fields' => '',
// 			'order' => '',
// 			'limit' => '',
// 			'offset' => '',
// 			'exclusive' => '',
// 			'finderQuery' => '',
// 			'counterQuery' => ''
// 		)
// 	);

	public $supplier = null;
	
	public $product_list = null;
	
	public $behavior = null;
	
	public $viewInventorySupplier = null;
	
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
// 		$lowestOfferListingsForSKU = new LowestOfferListingsForSKU();
		
// 		$this->lowestOfferListingsForSKU = 	$lowestOfferListingsForSKU->listAll();
		
		$this->lowestOfferListingsForSKU = 	Configure::read('LowestOfferListingsForSKU.list');
		
	}
	
	private function loadTiersClasses($data = null){
		
			
		if($id == null) return null;
		
		$this->behavior = ClassRegistry::init($data['TierBehavior']['class']);
		$this->behavior->load($id);
		$this->behavior->lowestOfferListingsForSKU = $this->lowestOfferListingsForSKU;
		
	}
	
	public function setBehaviour($id = null){
		
		if($id != null) $this->id = $id;
		
		$this->data = $this->find('first', array('conditions' => array('id' => $this->id)), 1);
		
		$this->behavior = ClassRegistry::init($this->data['TierBehavior']['class']);
			
		$this->behavior->load($this->id);
		
		$supplier = new Supplier();
		
		$this->behavior->setSuppliers($supplier->find('all', array('recursive' => 0)));
		
		
	}
	
	/**
	 * Load Tier Class
	 * 
	 * @param unknown_type $tier_id
	 */
	public function getTierClass($tier_id){
		
		$this->data = $this->find('first', array('conditions' => array('id' => $tier_id)), 1);
		
		return ClassRegistry::init($this->data['TierBehavior']['class']);
	}
	
	
	/**
	 * Load All or ans Sku Product-list with the ViewInventorySupplier list
	 * 
	 * @param unknown_type $skus
	 */
	public function getListTierPrice($skus = null){
		
		$this->viewInventorySupplier = new ViewInventorySupplier();
		
		$min_quantity = Hash::extract($this->behavior->data, '{s}.min_quantity');
		
		$this->viewInventorySupplier->setMinQuantity($min_quantity[0]);
		
		if($skus != null){
			
// 			debug($this->id);
		
			$this->product_list = $this->viewInventorySupplier->listByTiers($this->id, $skus);
		
		}
		else{
				
			$this->product_list = $this->viewInventorySupplier->listByTiers($this->id);
		}
		
		debug(count($this->product_list));
		
		return $this->listTierPrice($this->product_list);
		
	}
	
	/**
	 * 
	 * Update price in Inv
	 * Return the price based on Tier criterium
	 * 
	 * 
	 * @param unknown_type $product_list
	 */
	public function listTierPrice($product_list = null){
		
		$this->product_list = $product_list;
		
// 		debug($product_list);
		
		$items = array();
		
		//$items ('SKU'=>sku, 'Estimated'=>$$$)
		if(Hash::dimensions($this->product_list['single']) > 1)
		foreach ($this->product_list['single'] as $key => $value){
			
			$item['SKU'] 		= $value['ViewInventorySupplier']['sku'];
			$item['Estimated'] 	= number_format($this->behavior->tierPrice($value), 2);
			$item['Min_price']	= $this->behavior->minPrice($value);
			$item['Competitor']	= $this->behavior->competitorValue($value);
			$item['earnings'] = number_format($item['Estimated'] - $item['Competitor']);
			
			if($item['Competitor'] > $item['Estimated'] ) debug($item);
			
			$sql = "UPDATE mws_inventory SET price = ".$item['Estimated'].", min_price 	= ".$item['Min_price'].", competitor 	= ".$item['Competitor'].", earnings 	= '".($item['Competitor'] - $item['Min_price'])."' WHERE 	sku = '".$item['SKU']."'";
				
			$this->query($sql);
			
			array_push($items, $item);
			
		}
		
		if(Hash::dimensions($this->product_list['multiple']) > 1)
		foreach($this->product_list['multiple'] as $key => $value){
			
			
			$sku = Hash::extract($value, '{s}.ViewInventorySupplier.sku');
			
			$item['SKU'] 		= $sku[0];
			$item['Estimated'] 	= number_format($this->behavior->tierPriceMultiple($value), 2);
			$item['Min_price']	= number_format($this->behavior->minPrice($value), 2);
			$item['Competitor']	= $this->behavior->competitorValue($value);
			$item['earnings'] = number_format($item['Estimated'] - $item['Competitor']);
				
			if($item['Competitor'] > $item['Estimated'] ) debug($item);
			
			$sql = "UPDATE mws_inventory SET price = ".$item['Estimated'].", min_price 	= ".$item['Min_price'].", competitor 	= ".$item['Competitor'].", earnings 	= '".($item['Competitor'] - $item['Min_price'])."' WHERE 	sku = '".$item['SKU']."'";
			
			
			$this->query($sql);
				
			
			array_push($items, $item);
			
		}
		
// 		debug($items);
		
		return $items;
	}
	
	public function makeFlushPricing($skus = null){
		
		$this->flushPricingFeed($this->listTierPrice($skus));
	}
	
	
	public function flushPricingFeed($item_pricing){
		
		$filename = 'Tier_reprice_'.date("Ymd-H-is").'.xml';
		
// 		$feedHandle =  @fopen(WWW_ROOT.'files/FEED_LOG/'.$filename, 'arw+');
		
		App::import('Model','SubmitFeed');
		
		$submitFeed = new SubmitFeed();
		
		$submitFeed->filename = $filename;
		
// 		LAUNCH FEED
		$submitFeed->flushFeed($item_pricing, 'repricing');

// 		debug($item_pricing);
		
// 		fwrite($feedHandle, $submitFeed->creating_POST_PRODUCT_PRICING_DATA($item_pricing));

	}
	
	
	public function cacheAllList(){
	
		$this->recursive = 0;
	
		$all = $this->find('all');
	
		Configure::write('TierBehavior.list', Hash::combine($all, '{n}.TierBehavior.id', '{n}'));
	
	}
// 	/**
// 	 * List virtual fields values of tiers
// 	 * 
// 	 */
// 	public function listTier(){
		
// 		$tiers = $this->find('all');
		
// // 		debug($tiers);
		
// 		foreach($tiers as $key => $value){
			
// 			debug($value);
// 		}
		
// 		return $this->find('all');
// 	}

	

}
