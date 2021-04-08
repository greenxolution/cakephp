<?php
App::uses('Order', 'Model');

App::import('Vendor', 'MarketplaceWebServiceOrders_Model_ListOrdersRequest', array('file' => 'MarketplaceWebServiceOrders/Model/ListOrdersRequest.php'));


/**
 * ListOrder Model
 *
 */
class ListOrder extends Order {

	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'list_order';

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'AmazonOrderId';

	public $createdAfter;


	public $hasMany = array(
			'ListOrderItem' => array(
					'className' => 'ListOrderItem',
					'foreignKey' => 'list_order_id'
			)
	);

/*	public $belongsTo = array(
			'Supplier'	=> array(
					'className' => 'Supplier',
					'foreignKey' => 'supplier_id'
					)
			);
*/			
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Supplier' => array(
			'className' => 'Supplier',
			'foreignKey' => 'supplier_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);			
	

	public $order = array("PurchaseDate" => "desc");


	/**
	 * Set all MWS Objects relative to ListMatchingProducts
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);

		$this->request = new MarketplaceWebServiceOrders_Model_ListOrdersRequest();
		
		$this->request->setSellerId(Configure::read('PETER.MWS.SELLER_ID'));

		$this->request->setMarketplaceId('ATVPDKIKX0DER');

		$date = new DateTime();
		$date->sub(new DateInterval('P1W'));

		$this->setCreatedAfter($date->format('F j, Y'));
		
		if(Hash::dimensions(Configure::read('LowestOfferListingsForSKU.list')) == 0 ){
				
			$lowestOfferListingsForSKU	= new LowestOfferListingsForSKU();
		
			$lowestOfferListingsForSKU->cacheAllList();
		}
		
		

	}

	
	public function afterFind($results, $primary = false) {
		
		$viewInventorySupplier = ClassRegistry::init('ViewInventorySupplier');
		
		foreach ($results as $key => $val) {
			
			if (isset($val['ListOrderItem'])) {
				foreach(Hash::extract($results[$key], 'ListOrderItem') as $k => $val){
					
					$results[$key]['ListOrder']['ViewInventorySupplier'][$k] = $viewInventorySupplier->findByAsin($val['ASIN']);
					
					if($results[$key]['ListOrder']['order_confirmation']  != null && 
							$results[$key]['ListOrder']['OrderStatus'] == 'Unshipped'){
						
						$results[$key]['ListOrder']['class']	= 'Onshipping';
					}
					else{
						
						$results[$key]['ListOrder']['class']	= $results[$key]['ListOrder']['OrderStatus'];
					}
					
				}
				
			}
		}
		
		return $results;
	}
	
	
	public function getUnshippedOrderInfo(){

		$this->ListOrderItem->recursive = -1;
		
		return $this->ListOrderItem->find('all', array('joins' =>
				array(	'table' => 'entrenue_products',
						'alias' => 'EntrenueProduct',
						'type' => 'LEFT',
						'conditions' => array(
								'ListOrderItem.SellerSKU = EntrenueProduct.SKU',
						))));
	}

	public function setCreatedAfter($date = 'Jan 22, 2014'){

		App::uses('CakeTime', 'Utility');

		$this->createdAfter = CakeTime::toAtom($date);

	}


	/**
	 * Save orders
	 *
	 */
	public function saveOrders(){

		$orders = $this->getOrders();

		if($orders == null) return null;


		foreach($orders as $key => $value){
				
			$_this = $this->findByAmazonorderid($value['AmazonOrderId']);
				
			if(isset($_this['ListOrder']['id'])){

				$id = $this->id = $_this['ListOrder']['id'];
			}
			else{

				$this->create();
			}
				
				
			if(!in_array($value['OrderStatus'], array('Canceled', 'Pending'))){

				$value['ShippingAddress_Phone']				= (isset($value['ShippingAddress']['Phone']))?$value['ShippingAddress']['Phone']:'';
				$value['ShippingAddress_Name']				= $value['ShippingAddress']['Name'];
				$value['ShippingAddress_AddressLine1']		= $value['ShippingAddress']['AddressLine1'];
				$value['ShippingAddress_City']				= $value['ShippingAddress']['City'];
				$value['ShippingAddress_StateOrRegion']		= $value['ShippingAddress']['StateOrRegion'];
				$value['ShippingAddress_PostalCode']		= $value['ShippingAddress']['PostalCode'];
				$value['ShippingAddress_CountryCode']		= $value['ShippingAddress']['CountryCode'];

				$value['OrderTotal_CurrencyCode']			= $value['OrderTotal']['CurrencyCode'];
				$value['OrderTotal_Amount']					= $value['OrderTotal']['Amount'];
			}
				
				
			if($_this = $this->save($value)){

				if(!isset($_this['ListOrder']['id']))	$_this['ListOrder']['id'] = $id;
				//@TODO: find order items

				$this->ListOrderItem->saveOrderItems($_this);
			}
		}
		
		$this->removePersonalData();

		return $this;

	}




	/**
	 * Execute the request of Orders
	 *
	 * @param string $createAfter
	 * @param string $format 'array' | 'xml'
	 * @return xml
	 */
	public function getOrders($createAfter = 'Jan 22, 2014', $array = true){

		//@TODO: Select the time by the user
		App::uses('CakeTime', 'Utility');


		$this->request->setCreatedAfter($this->createdAfter);

		// object or array of parameters
		$this->xmlResults = $this->invokeListOrders($this->service, $this->request);

		if ($array) return $this->parse($this->xmlResults);

		return $result;
	}


	/**
	 * From XML to Array
	 *
	 * @return array products
	 */
	public function parse($xml){

		App::uses('Xml', 'Utility');

		$this->arrayResults 	= Xml::toArray(Xml::build($xml));

		$a = Set::classicExtract($this->arrayResults, 'ListOrdersResponse.ListOrdersResult.Orders');

		if(isset($a['Order'])){
				
				
			if(count(Set::classicExtract($a, 'Order.{n}')) > 0){


				return Set::classicExtract($a, 'Order.{n}');
			}
			elseif(count(Set::classicExtract($a, 'Order.{n}')) == 0){


				return array(Set::classicExtract($a, 'Order'));
			}
				
		}

		return null;

	}
	
	public function removePersonalData(){
		
		$sql = "UPDATE `list_order` SET 
							ShippingAddress_Phone = '',
							ShippingAddress_Name = '',
							ShippingAddress_postalcode = '',
							ShippingAddress_AddressLine1 = '',
							BuyerEmail = '',
							BuyerName = '' WHERE OrderStatus = 'Shipped'";
		
		$this->query($sql);
	}

	/**
	 * Get List Orders Action Sample
	 * Gets competitive pricing and related information for a product identified by
	 * the MarketplaceId and ASIN.
	 *
	 * @param MarketplaceWebServiceOrders_Interface $service instance of MarketplaceWebServiceOrders_Interface
	 * @param mixed $request MarketplaceWebServiceOrders_Model_ListOrders or array of parameters
	 */

	public function invokeListOrders(MarketplaceWebServiceOrders_Interface $service, $request)
	{
		try {
			$response = $service->ListOrders($request);

// 			echo ("Service Response\n");
// 			echo ("=============================================================================\n");

			$dom = new DOMDocument();
			$dom->loadXML($response->toXML());
			$dom->preserveWhiteSpace = false;
			$dom->formatOutput = true;
// 			echo $dom->saveXML();
// 			echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
				
			return $dom->saveXML();

		} catch (MarketplaceWebServiceOrders_Exception $ex) {
			echo("Caught Exception: " . $ex->getMessage() . "\n");
			echo("Response Status Code: " . $ex->getStatusCode() . "\n");
			echo("Error Code: " . $ex->getErrorCode() . "\n");
			echo("Error Type: " . $ex->getErrorType() . "\n");
			echo("Request ID: " . $ex->getRequestId() . "\n");
			echo("XML: " . $ex->getXML() . "\n");
			echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
		}
	}

}
