<?php
App::uses('AppModel', 'Model');
/**
 * MwsInventory Model
 *
 */
class MwsInventory extends AppModel {

	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'mws_inventory';
	
	public $name = 'MwsInventory';

	public $belongsTo = array(
			'Tier' => array(
					'className' => 'Tier',
					'foreignKey' => 'tier_id'
			)
	);

	public $min_quantity = 2;
	
	public $actsAs = array(
			'Search.Searchable'
	);
	
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
				)
		);
		return $condition;
	}
	

	public function updateQuantity(){

		/** UPDATE QUANTITY IN MWS_INVENTORY*/
		$this->query('UPDATE `mws_inventory` AS mws INNER JOIN entrenue_products AS en ON mws.sku = en.SKU SET mws.quantity = en.QUANTITY');

	}
	
	public function updateTierVariable($tier_product){
		
		$product = $this->findBySku($tier_product['SKU']);
		
		$this->id = $product['MwsInventory']['id'];
		
		return $this->saveField('min_price', $tier_product['Min_price'],
								'competitor', $tier_product['Competitor'],
								'earnings', $tier_product['earnings']);
		
	}

	public function beforeSave($options = array()){
		//@TODO: this should not be in beforesave method...

// 		if (!empty($this->data['MwsInventory']['sku'])){
				
// 			App::import('Model','SubmitFeed');

// 			$submitFeed = new SubmitFeed();

// 			$_this = $this->findById($this->data['MwsInventory']['id']);

// 			if($_this['MwsInventory']['price'] != $this->data['MwsInventory']['price']){
					
// 				$submitFeed->flushFeed(
// 						array(array(	'SKU'		=> $this->data['MwsInventory']['sku'],
// 								'Estimated' => $this->data['MwsInventory']['price'])),
// 						'repricing');
					
// 			}

// 			if($_this['MwsInventory']['quantity'] != $this->data['MwsInventory']['quantity']){
				
// 				$submitFeed->flushFeed(array(array('ViewMatchInv' => array(	'SKU'		=> $this->data['MwsInventory']['sku'],
// 								'Quantity' => $this->data['MwsInventory']['quantity']))) ,
// 						'inventory');
					
// 			}
// 		}
	}


	public function updatePricesWhenSubmit($items){


		foreach ($items as $key => $item){

			$product = $this->findBySku($item['SKU']);
				
			$this->id = $product['MwsInventory']['id'];
				
			$this->saveField('price', $item['Estimated']);
		}

	}
	/**
	 * UPdate Price by SKU
	 *
	 * @param array $item Array('SellerSKU',RegularPrice:Amount)
	 */
	public function updatePriceBySKU($item = null){

		$product = $this->findBySku(key($item));

		$this->id = $product['MwsInventory']['id'];
		
		if(!isset($item[key($item)]['RegularPrice']['Amount'])){
			
			debug($item);
			exit;
		}

		return $this->saveField('price', $item[key($item)]['RegularPrice']['Amount']);

	}

	public function updatePrices($items){

		foreach ($items as $key => $item){
				
			$this->updatePriceBySKU($item);
		}

	}


	/**
	 * Import the csv file in the table
	 * The csv file is downloade from MWS Inventory report
	 *
	 * @param unknown_type $filename
	 * @param String [inventory_report | open_listings_report_lite
	 */
	public function import($filename = 'InventoryReport07042017.txt', $file_type = 'inventory_report'){
		// to avoid having to tweak the contents of
		// $data you should use your db field name as the heading name
		// eg: Post.id, Post.title, Post.description

		// set the filename to read CSV from
		$filename = WWW_ROOT.DS.'files'.DS.'DOWNLOAD_INV_FILES'.DS . $filename;

		// open the file
		$handle = fopen($filename, "r");

		if(!$handle) return null;
			
		$this->truncate();

		// read the 1st row as headings
		$header = fgetcsv($handle, 0, '	');

		// create a message container
		$return = array(
				'messages' => array(),
				'errors' => array(),
		);


		$i = 0;
		// read each data row in the file
		while (($row = fgetcsv($handle, 0, '	')) !== FALSE) {
			$i++;
			$data = array();

				
			foreach ($row as $k=>$head) {
				// get the data field from Model.field

				if($file_type == 'inventory_report'){
				
					$data['MwsInventory']['sku']	=(isset($row[0])) ? $row[0] : '';
					$data['MwsInventory']['asin']	=(isset($row[1])) ? $row[1] : '';
					$data['MwsInventory']['price']	=(isset($row[2])) ? $row[2] : '';
					$data['MwsInventory']['quantity']	=(isset($row[3])) ? $row[3] : '';
					$data['MwsInventory']['tier_id']	=	2;
				
				}
				
				if($file_type == 'open_listings_report_lite'){
					
					$data['MwsInventory']['sku']	=(isset($row[0])) ? $row[0] : '';
					$data['MwsInventory']['quantity']	=(isset($row[1])) ? $row[1] : '';
					$data['MwsInventory']['price']	=(isset($row[2])) ? $row[2] : '';
					$data['MwsInventory']['asin']	=(isset($row[3])) ? $row[3] : '';
					$data['MwsInventory']['tier_id']	=	2;
				}

				debug($data);


			}
				
			$this->create();
			if (!$this->save($data)) {
				debug( __(sprintf('MwsInventory for Row %d failed to save.',$i), true));
			}
			else{
				debug( __(sprintf('MwsInventory for Row %d was saved.',$i), true));
			}
				
		}

		// close the file
		fclose($handle);

		// return the messages
		return $return;
	}


	/**
	 * Truncate the table
	 *
	 */
	private function truncate(){

		return $this->query('TRUNCATE mws_inventory');

	}
}
