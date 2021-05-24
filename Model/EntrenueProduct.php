<?php
App::uses('AppModel', 'Model');
/**
 * EntrenueProduct Model
 *
 */
class EntrenueProduct extends AppModel {


	public $xml = '';

	public $_MIN_ALLOW_QUANTITY = 3;

	public $history_fields = array('quantity');

	public $hasMany = array(
        'EntrenueProductsHistory' => array(
            'className' => 'EntrenueProductsHistory'
		),
		'MwsInventory' => array(
            'className' => 'MwsInventory',
        )
    );


	public $SKU_PREFIX = 'ENT';
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'id';


	public $actsAs = array(
			'Search.Searchable'
	);

	public $filterArgs = array(
			'name' => array(
					'type' => 'like',
					'field' => 'name'
			),
			'upc' => array(
					'type' => 'like',
					'field' => 'upc'
			),
			
			'description' => array(
					'type' => 'like',
					'field' => 'description'
			),

			'manufacturer' => array(
					'type' => 'like',
					'field' => 'manufacturer'
			),

			'categories' => array(
					'type' => 'like',
					'field' => 'categories'
			),
			'model' => array(
					'type' => 'like',
					'field' => 'model'
			),
				
			'filter' => array(
					'type' => 'query',
					'method' => 'orConditions'
			)
	);
	
	// Or conditions with like
	public function orConditions($data = array()) {
			
			
		$filter = trim($data['filter']);
		$condition = array(
				'OR' => array(
						$this->alias . '.description LIKE' => '%' . $filter . '%',
						$this->alias . '.name LIKE' => '%' . $filter . '%',
						$this->alias . '.upc LIKE' => '%' . $filter . '%',
						$this->alias . '.manufacturer LIKE' => '%' . $filter . '%',
						$this->alias . '.category_1 LIKE' => '%' . $filter . '%',
						$this->alias . '.model LIKE' => '%' . $filter . '%',
						$this->alias . '.sku LIKE' => '%' . $filter . '%',
						$this->alias . '.asin LIKE' => '%' . $filter . '%',
				)
		);
		return $condition;
	}
	
	/**
	 * this is an array of Model objects
	 * @var EntrenueProduct
	 */
	public $these = array();
	
	public $xml_file_path = 'files/XML_FILES';
	
	public $loader_inventory_file = 'files/LOADER_INV_FILES';
	
	public $file;
	

	/**
	 * 
	 * Pull all data from Entrenue API
	 * 
	 */
	public function pullAllProductEntrenue(){

		App::import('Model','EntrenueAPIProduct');

		$entrenueAPIProduct = new EntrenueAPIProduct();

		$data = array();

		try {

			$data = $entrenueAPIProduct->find('all',  array(
				'conditions' => array('pagination' => 1000,'all'=>1),
			));
		}  
		catch (Exception $e) {
			echo 'Caught EntrenueAPIProduct exception: '.$e->getFile().  $e->getMessage(). "\n";


		}
		finally {

			echo 'EntrenueAPIProduct Amount of oldRecords '.count($data['EntrenueAPIProduct']);
		}

		return $data;

	}

	/**
	 * 
	 * @date: 2021-0522
	 * Returns 0 if the value is <= MIN_QUANTITY
	 * 
	 */
	public function minQuantityAllow($item){

		$item['EntrenueProduct']['quantity']  = ($item['EntrenueProduct']['quantity'] <= $this->_MIN_ALLOW_QUANTITY )? 0 : $item['EntrenueProduct']['quantity'];

		return $item;

	}

	/**
	 * 
	 * @date: 2021-05023
	 * 
	 * Returns only the actived product of the array
	 */
	public function removeNotActive($item){

	}


	/**
	 * @date: 2022-05-22
	 * 
	 * Inserts/Updates Entrenue products
	 * Feed the MWS quantity
	 * If quantity is <= 3 feeds to 0
	 * 
	 */
	public function initUploadEntrenueAndFeedMWS(){

		$data = $this->initUploadEntrenue();

		// $data = array(array('EntrenueProduct'=> array('id'=>22, 'quantity' => 3),array('EntrenueProduct'=> array('id'=>2, 'quantity' => 8) )));

		debug($data);

		$data = array_map(array($this, 'minQuantityAllow'), $data);


		///SUBMIT INVENTORY QUANTITY
		App::import('Model','SubmitFeed');

		// $submitFeed = new SubmitFeed();

		return $submitFeed->submitInventoryQuantity($data);

	}

	
	/**
	 * 
	 * Initialize loading data from Entrenue
	 * Save data at EntrenueProduct model
	 *
	 */
	public function initUploadEntrenue(){

		$data = $this->pullAllProductEntrenue();

		$updatedProduct = array();


		foreach($data['EntrenueAPIProduct'] as $item){

			$entrenueProductArray['EntrenueProduct'] = array();

			$item['SKU'] = $this->SKU_PREFIX.$item['model'];

			$entrenueProductArray['EntrenueProduct'] = $item;


			try {

				$this->create();

				if(!$this->save($entrenueProductArray)){
					debug($this->validationErrors);
				}

				debug('created.: '.$entrenueProductArray['EntrenueProduct']['model']);
				
			} 
			catch (Exception $e) {

				$oldRecord = $this->findByModel($entrenueProductArray['EntrenueProduct']['model']);


				if(count($oldRecord)>0){

					$entrenueProductArray['EntrenueProduct']['id'] = $oldRecord['EntrenueProduct']['id'];
				
					$this->clear();

					if($this->save($entrenueProductArray)){
						
						$updatedProduct[] = $this->EntrenueProductsHistory->insertRecord($entrenueProductArray, $oldRecord );
					}

					debug('updated.: '.$entrenueProductArray['EntrenueProduct']['model']);

				}
				else{

					echo 'Caught EntrenueAPIProduct exception: '.$e->getFile().  $e->getMessage(). "\n";
				}
			}

		}

		return array_filter($updatedProduct);

	}
	
	
	/**
	 *
	 * @param string format [array | object]
	 * @return all items in array
	 */
	public function listAll($format = 'array'){
	
		$list =  $this->find('all', array('conditions' => array('EntrenueProduct.categories LIKE' => "%Novelties%",
				'EntrenueProduct.ASIN' => NULL)));
	
		if($format == 'array') return $list;
	
		return $this->buildObjectList($list);
	
	
	}
	
	/**
	 * Temp method to update ANSI
	 * This method select the product through listAll method,
	 * Looking for in the ListMatchingProducts API by UPC
	 * Return the ANSI and update the ANSI field in the
	 * Entrenue_product table
	 *
	 */
	public function updateANSI(){
	
		App::import('Model','ListMatchingProducts');
	
		$listMatchingProduct = new ListMatchingProducts();
	
		$list = $this->listAll();
	
		foreach($list as $value){
	
			sleep(6);
	
			$p = $listMatchingProduct->listProduct(array($value['EntrenueProduct']['UPC']));
	
			if($p != NULL && $p->UPC != ''){
	
				debug($this->query('UPDATE `entrenue_products` SET ASIN = "'.$p->ASIN.'", ns2_Binding = "'.$p->ns2_Binding.'" WHERE UPC = "'.$p->UPC.'"'));
			}
			else{
	
				debug($value['EntrenueProduct']['UPC'].' - '.$value['EntrenueProduct']['id']);
			}
	
			echo date('h:i:s').PHP_EOL;
	
	
		}
	}
	
	/**
	 * Find items based on UPC
	 * @param unknown_type $matchingProducts
	 * @return Ambigous <multitype:, NULL>
	 */
	public function updateByUPC($matchingProducts){
	
		return $this->find('first',
				array('conditions' =>
						array(	'EntrenueProduct.UPC' 	=> $matchingProducts->UPC,
								'EntrenueProduct.ANSI' 	=> NULL)));
	
	}
	
	
	
	/**
	 * Read and parse an array from the xml file. Default path: WWW_ROOT.files/xmlfile.xml
	 *
	 *
	 */
	public function importXML($file_path = 'files/xmlfile.xml'){
	
		App::uses('Xml', 'Utility');
		App::uses('File', 'Utility');
	
		$file = new File(WWW_ROOT.$file_path);
	
		$xmlObject = new Xml();
	
		$xmlArray = $xmlObject->toArray(Xml::build($file->read()));
	
		$items = Set::classicExtract($xmlArray, 'SHOP.SHOPITEM');
	
		foreach ($items as $item){
			
			debug($item);
			
			$this->update($item);
	
// 			$this->addItem($item);
		}
	
	
		$file->close();
	
	}
	
	/**
	 * Open the xmlFile and Update the entrenue_products table
	 *
	 * @param unknown_type $file_path
	 */
	public function updateFromXML($file = null){
	
		App::uses('Xml', 'Utility');
	
		$xmlObject = new Xml();
	
		if ($file == null) return false;
	
		$xmlArray = $xmlObject->toArray(Xml::build(mb_convert_encoding($file->read(), 'UTF-8' , 'UTF-8' )));
	
		$items = Set::classicExtract($xmlArray, 'SHOP.SHOPITEM');
	
	
		foreach ($items as $item){
	
// 			debug($item);
			$this->update($item);
		}
	
	
	}
	
	/**
	 * Update the entrenue_products table by PRODUCT_ID
	 *
	 * @param unknown_type $item
	 */
	public function update($item){
	
		$prod = $this->findByModel( $item['MODEL']);
		
// 		debug($prod['EntrenueProduct']['id']);
		if(!isset($prod['EntrenueProduct']['id']) ||
				$prod['EntrenueProduct']['id'] == null){
			
			$this->addItem($item);
			
			return true;
		}
		
		$MAP = (isset($item['MAP']))? $item['MAP'] : null;
	 	$this->query('UPDATE `entrenue_products`
				SET PRICE = '.$item['PRICE'].' , QUANTITY = '.$item['QUANTITY'].',
				MAP = "'.$MAP.'",
				updated = "'.date('Y-m-d H:i:s').'"
				WHERE PRODUCT_ID =  '.$item['PRODUCT_ID'].' ');
	
		
		return true;
	}
	
	/**
	 * Add item to table
	 *
	 * @param array $item
	 * @return boolean TRUE the item was added to the table.
	 *
	 */
	public function addItem($item){
	
		$this->create();
	
		$item['ASIN'] = 'NEW';
		
		$a = ereg_replace('(&lt;h2&gt;).*(&lt;\/h2&gt;)$', "", $item['DESCRIPTION']);
		
		$item['DESCRIPTION'] = str_replace("\\", "", $a);
		
// 		$item['CATEGORY_1'] = html_entity_decode($item['CATEGORY_1']);
		
// 		$item['CATEGORY_2'] = (isset($item['CATEGORY_2']))?html_entity_decode($item['CATEGORY_2']):'';
// 		$item['CATEGORY_3'] = html_entity_decode($item['CATEGORY_3']);
// 		$item['CATEGORY_4'] = html_entity_decode($item['CATEGORY_4']);
// 		$item['CATEGORY_5'] = html_entity_decode($item['CATEGORY_5']);
// 		$item['CATEGORY_6'] = html_entity_decode($item['CATEGORY_6']);
// 		$item['CATEGORY_7'] = html_entity_decode($item['CATEGORY_7']);
// 		$item['CATEGORY_8'] = html_entity_decode($item['CATEGORY_8']);
// 		$item['CATEGORY_9'] = html_entity_decode($item['CATEGORY_9']);
// 		$item['CATEGORY_10'] = html_entity_decode($item['CATEGORY_10']);
// 		$item['CATEGORY_11'] = html_entity_decode($item['CATEGORY_11']);
// 		$item['CATEGORY_12'] = html_entity_decode($item['CATEGORY_12']);
// 		$item['CATEGORY_13'] = html_entity_decode($item['CATEGORY_13']);
// 		$item['CATEGORY_14'] = html_entity_decode($item['CATEGORY_14']);
// 		$item['CATEGORY_15'] = html_entity_decode($item['CATEGORY_15']);
// 		$item['CATEGORY_16'] = html_entity_decode($item['CATEGORY_16']);
// 		$item['CATEGORY_17'] = html_entity_decode($item['CATEGORY_17']);
// 		$item['CATEGORY_18'] = html_entity_decode($item['CATEGORY_18']);
// 		$item['CATEGORY_19'] = html_entity_decode($item['CATEGORY_19']);
// 		$item['CATEGORY_20'] = html_entity_decode($item['CATEGORY_20']);
		
		
		return($this->save($item));
	}
	
	
	/**
	 * This invoke to export the xml file in the Entrenue site
	 * This should run before DownloadXmlFile
	 *
	 */
	public function invokeXmlFile(){
	
		App::uses('HttpSocket', 'Network/Http');
	
		$ftp = 'https://entrenue.com/admin/xml-export.php';
	
		$socket = new HttpSocket(array(
				'ssl_allow_self_signed' => true
		));
	
		return $socket->get($ftp);
	
	}
	
	
	/**
	 * Download the xmlfile from Entrenue website
	 * this file has the updated products
	 *
	 * @return boolean
	 */
	public function downloadXmlfile(){
	
		$this->invokeXmlFile();
	
		App::uses('HttpSocket', 'Network/Http');
		App::uses('File', 'Utility');
	
		$ftp = 'https://entrenue.com/admin/xmlfile.xml';
	
		$socket = new HttpSocket(array(
				'ssl_allow_self_signed' => true
		));
	
		$results = $socket->get($ftp);
	
	
		$this->file = new File(WWW_ROOT.$this->xml_file_path.DS.'xmlfile_'.date('Y-m-d-H_i_s').'.xml', true);
	
		if($this->file->write($results)){
			
			debug('DOWNLOAD ENTRENUE FILE');
	
			return true;
	
		}
	
		return false;
	
	}
	
	/**
	 * Query return the product ready to be uploaded in the loader inventory file
	 *
	 *@return array Result of query
	 */
	public function findProductsToUpload(){
	
		$query = 'SELECT  `SKU` ,  `UPC` ,  `PRICE`
		FROM  `entrenue_products`
		WHERE
		price > 0 and quantity > 1 and ns2_Binding in
		(
		"Hardcover",
		"Paperback",
		"Misc."
		)';
	
		return $this->query($query);
	}
	
	/**
	 * Create the Load Inventory File
	 * Save the Loader Inventory file at WWW_ROOT/files/LOADER_INV_FILES
	 *
	 * @param unknown_type $result
	 */
	public function createLoadInventory(){
	
		App::uses('File', 'Utility');
	
		$header ='sku	product-id	product-id-type	price	item-condition	quantity	add-delete	will-ship-internationally	expedited-shipping	standard-plus	item-note	fulfillment-center-id';
	
		$file = new File(WWW_ROOT.$this->loader_inventory_file.DS.'LOADER_INV_'.date('Y-m-d-H_i_s').'.txt', true);
	
		$file->write($header);
	
		foreach($this->findProductsToUpload() as $value){
			//sku	product-id	product-id-type	price	item-condition	quantity	add-delete	will-ship-internationally	expedited-shipping	standard-plus	item-note	fulfillment-center-id
			//KRMFQCC2	9780880880787	3	25.80	11	2	a	N	N	N	In original package
				
			$file->append(	$value['entrenue_products']['SKU'].'	'.
					$value['entrenue_products']['UPC'].'	'.
					'3'.'	'.
					($value['entrenue_products']['PRICE'] * 3).'	'.
					'11'.'	'.
					'2'.'	'.
					'a'.'	'.
					'N'.'	'.
					'N'.'	'.
					'N'.'	'.
					'In original package'.'	'.PHP_EOL
			);
				
		}
	
		$file->close();
	
	}
	
	
}
