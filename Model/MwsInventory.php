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
			),
			'EntrenueProduct' => array(
				'className' => 'EntrenueProduct',
				'foreignKey' => 'entrenue_products_id'
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

	public function pullEntrenueRecords($amount = 10){

		App::import('Model','EntrenueProduct');

		$eProduct = new EntrenueProduct();

		return $eProduct->find('all',array(
			'limit' => $amount, // int
			'fields' => array('id','upc','SKU'),
			'conditions' => array("EntrenueProduct.categories LIKE" => "%book%")
		));


	}

	public function importMatchingSPAPI(){


		$accessToken = \ClouSale\AmazonSellingPartnerAPI\SellingPartnerOAuth::getAccessTokenFromRefreshToken(
			Configure::read('SPAPI.refresh_token'),
			Configure::read('SPAPI.client_id'),
			Configure::read('SPAPI.client_secret')
		);
		$assumedRole = \ClouSale\AmazonSellingPartnerAPI\AssumeRole::assume(
			Configure::read('SPAPI.region'),
			Configure::read('SPAPI.access_key'),
			Configure::read('SPAPI.secret_key'),
			Configure::read('SPAPI.role_arn')
		);
		$config = \ClouSale\AmazonSellingPartnerAPI\Configuration::getDefaultConfiguration();
		$config->setHost(Configure::read('SPAPI.endpoint') );
		$config->setAccessToken($accessToken);
		$config->setAccessKey($assumedRole->getAccessKeyId());
		$config->setSecretKey($assumedRole->getSecretAccessKey());
		$config->setRegion(Configure::read('SPAPI.region'));
		$config->setSecurityToken($assumedRole->getSessionToken());
		
		$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\CatalogApi($config);

		$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\CatalogApi($config);
		
		$marketplace_id = Configure::read('SPAPI.MARKETPLACE.US');

		
		// $result = $apiInstance->getCatalogItem($marketplace_id, $asin);

		// debug($result->getPayload()->getAttributeSets()[0]->getTitle());
		
		// debug($result->getPayload()->getAttributeSets());

		$pulledEntrenue = $this->pullEntrenueRecords(10);

		debug($pulledEntrenue);
		

		foreach ($pulledEntrenue as $key => $entrenueProduct) {

			$query = ""; // string | Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
			$query_context_id = ""; // string | An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
			$seller_sku = ""; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
			$upc = ""; // string | A 12-digit bar code used for retail packaging.
			$ean = ""; // string | A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
			$isbn = $entrenueProduct['EntrenueProduct']['upc']; // string | The unique commercial book identifier used to identify books internationally.
			$jan = ""; // string | A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.
	
			try {
				$results = $apiInstance->listCatalogItems($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan);
				// debug($results,2);
			} catch (\Exception $e) {
				echo 'Exception when calling CatalogApi->listCatalogItems: ', $e->getMessage(), PHP_EOL;
			}
			finally{
				// print_r($results);
			}

				
			foreach ($results->getPayload()->getItems() as $value) {
	
					// debug($value);
				try{
					// debug($value->Identifiers->MarketplaceASIN->MarketplaceId  );
					// debug($value->Identifiers->MarketplaceASIN->ASIN  );
	
					// debug($value->AttributeSets[0]->Title );
					// debug($value->AttributeSets[0]->ListPrice->Amount );
					// debug($value->AttributeSets[0]->NumberOfPages );
					// debug($value->AttributeSets[0]->PublicationDate  );
					# code...

					$this->create();
					$this->save(array('MwsInventory'=>array('MarketplaceId'=>$value->Identifiers->MarketplaceASIN->MarketplaceId,
															'asin'=>$value->Identifiers->MarketplaceASIN->ASIN,
															'Title'=>$value->AttributeSets[0]->Title,
															'NumberOfPages'=>$value->AttributeSets[0]->NumberOfPages,
															'price'=>$value->AttributeSets[0]->ListPrice->Amount,
															'image'=>$value->AttributeSets[0]->SmallImage->URL,
															'provider'=>$entrenueProduct['EntrenueProduct']['SKU'],
															'entrenue_products_id'=>$entrenueProduct['EntrenueProduct']['id'] )));
				}
				catch (\Exception $emysql) {
					print  'ERROR MYSQL-'.$emysql->getMessage();
					$this->save(array('MwsInventory'=>array('MarketplaceId'=>$value->Identifiers->MarketplaceASIN->MarketplaceId,
					'asin'=>$value->Identifiers->MarketplaceASIN->ASIN,
					'Title'=>$value->AttributeSets[0]->Title,
					'NumberOfPages'=>0,
					'price'=>0,
					'image'=>$value->AttributeSets[0]->SmallImage->URL,
					'provider'=>$entrenueProduct['EntrenueProduct']['SKU'],
					'entrenue_products_id'=>$entrenueProduct['EntrenueProduct']['id'])));
				}
				finally{
					print  'ERROR MYSQL-'.$emysql->getMessage();



				}
			
			}
		
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
