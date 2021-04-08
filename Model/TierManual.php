<?php
App::uses('TierClass', 'Model');

App::uses('ViewInventorySupplier', 'Model');
/**
 * TierManual Model
 *
 */
class TierManual extends TierClass {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tier_behavior';


	public $virtualFields = array(
			'percent' 	=> 'field1',
			'shipping'	=> 'field2',
			'profit'	=> '1 + field3',
			'min_quantity'	=> 'field4'
	);
	
	public $lowestOfferListingsForSKU;
	
	public $suppliers;
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
		$this->setSuppliers();
	}
	
	public function load($id, $lowestOfferListingsForSKU  = null){
		
		$this->data = $this->findById($id);
		
		$this->lowestOfferListingsForSKU = $lowestOfferListingsForSKU;
		
// 		debug($this->lowestOfferListingsForSKU);
		
	}
	
	public function setSuppliers($supplier = null){
		
		$supplier = new Supplier();
		
		$this->suppliers = $supplier->find('all', array('recursive' => 0));
	}
	

	public function totalFeeBySupplier($value){
		
		$fee =  Set::extract(Set::remove($this->suppliers, '{n}.Supplier[product_table!='.Set::extract($value, 'ViewInventorySupplier.supplier_table').']'), '{n}.Supplier.total_fee');
		
		return $fee[0];
		
	}
	
	public function pricePlusFee($value){
		
		return (float) Set::extract($value, 'ViewInventorySupplier.selected_price') + (float) $this->totalFeeBySupplier($value) ;
	}
	
	public function minPrice($value){
		
// 		debug($this->pricePlusFee($value)  .' = '.  $this->data['TierManual']['profit'] . ' - '. $this->data['TierManual']['shipping']);
		return ((float) $this->pricePlusFee($value)  * (float) $this->data['TierManual']['profit']) + (float) $this->data['TierManual']['shipping'];
	}
	
	public function competitorValue($value){

		return 0;
	}
	
	/**
	 * $value =	'ViewInventorySupplier' => array(
		'id' => '415',
		'sku' => '83349975Korea',
		'supplier_id' => '696',
		'supplier_product_id' => '49975',
		'price' => '8.50',
		'map' => '0',
		'supplier_updated' => '2016-01-22 14:25:26',
		'supplier_table' => 'entrenue_products',
		'supplier_id_type' => 'MODEL',
		'tier_id' => '2',
		'selected_price' => '8.50',
		'fees' => '0',
		'total' => '0'
	)
	 * @param unknown_type $value
	 */
	public function tierPrice($value){
		
		
		$listingPrice 	= $this->competitorValue($value);
		
		$tierPrice 		= 0;
		
		$minPrice		= $this->minPrice($value);
		
// 		debug('MIN:'.$minPrice.' TIER:'.$tierPrice.' LISTING:'.$listingPrice);
		
		if($minPrice > $tierPrice){
			
			return $minPrice;
		}
		else{
			
			return $tierPrice;
			
		}
	}
	
	
	/**
	 * array(
	'supply1_products' => array(
		'ViewInventorySupplier' => array(
			'id' => '422',
			'sku' => '9917100USA',
			'supplier_id' => '46',
			'supplier_product_id' => '17100',
			'price' => '4.17',
			'map' => '0',
			'supplier_updated' => '2016-01-22 14:25:17',
			'supplier_table' => 'supply1_products',
			'supplier_id_type' => 'MODEL',
			'tier_id' => '2',
			'selected_price' => '4.17',
			'fees' => '0',
			'total' => '0'
		)
	),
	'entrenue_products' => array(
		'ViewInventorySupplier' => array(
			'id' => '422',
			'sku' => '9917100USA',
			'supplier_id' => '46',
			'supplier_product_id' => '17100',
			'price' => '4.25',
			'map' => '0',
			'supplier_updated' => '2016-01-22 14:25:17',
			'supplier_table' => 'entrenue_products',
			'supplier_id_type' => 'MODEL',
			'tier_id' => '2',
			'selected_price' => '4.25',
			'fees' => '0',
			'total' => '0'
		)
		)
	)

	 * @param unknown_type $value
	 */
	public function tierPriceMultiple($value){
		
		$a = array();
		
		foreach($value as $key => $item){
			
			array_push($a, $this->tierPrice($item));
		}
		
		return min($a);
		
	}
	
}
