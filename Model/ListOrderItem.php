<?php
App::uses('Order', 'Model');

App::import('Vendor', 'MarketplaceWebServiceOrders_Model_ListOrderItemsRequest', array('file' => 'MarketplaceWebServiceOrders/Model/ListOrderItemsRequest.php'));


/**
 * ListOrder Model
 *
 */
class ListOrderItem extends Order {

	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'list_order_item';

    public $belongsTo = array(
        'ListOrder' => array(
            'className' => 'ListOrder',
            'foreignKey' => 'list_order_id'
        )
    );
    
    public $hasOne = array(
    		'EntrenueProduct' => array(
    				'className' => 'EntrenueProduct',
    				'foreignKey' => false,
//     				'dependent' => true,
    				'conditions' => array('ListOrderItem.SellerSKU = EntrenueProduct.SKU' )
    		)
    );
    
	/**
	 * Display field
	 *
	 * @var string
	 */
	// 	public $displayField = 'AmazonOrderId';



	/**
	 * Set all MWS Objects relative to ListMatchingProducts
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);

		$this->request = new MarketplaceWebServiceOrders_Model_ListOrderItemsRequest();

		$this->request->setSellerId(Configure::read('PETER.MWS.SELLER_ID'));
		
	}


	public function getDetails($orderId = null){
		
		return $this->findAllByListOrderId($orderId);
	}
	
	
	/**
	 * Execute the request of Orders
	 *
	 * @param string $value
	 * @param string $format 'array' | 'xml'
	 * @return xml
	 */
	public function getOrderItems($orderId, $array = true){

		$this->request->setAmazonOrderId($orderId);

// 		debug($this->request->getSellerId());

		// object or array of parameters
		$this->xmlResults = $this->invokeListOrderItems($this->service, $this->request);

// 		debug($this->request->getSellerId());

		if ($array) return $this->parse($this->xmlResults);

		return $result;
	}

	public function saveOrderItems($order){
		
		$items = $this->getOrderItems($order['ListOrder']['AmazonOrderId']);
		
		
		foreach($items as $key => $value){
			
			$_this = $this->findByOrderitemid($value['OrderItemId']);
			
		
			if(!empty($_this['ListOrderItem']['id'])){
				
				$this->id = $_this['ListOrderItem']['id'];
				
			}
			else{
				
				
				$this->create();
			}
			$value['list_order_id']					= $order['ListOrder']['id'];
			
			if(!in_array($order['ListOrder']['OrderStatus'], array('Canceled', 'Pending'))){
			
			$value['ItemPrice_CurrencyCode'] 		= $value['ItemPrice']['CurrencyCode'];
			$value['ItemPrice_Amount'] 				= $value['ItemPrice']['Amount'];
			
			$value['ShippingPrice_CurrencyCode'] 	= $value['ShippingPrice']['CurrencyCode'];
			$value['ShippingPrice_Amount'] 			= $value['ShippingPrice']['Amount'];
				
			$value['GiftWrapPrice_CurrencyCode'] 	= $value['GiftWrapPrice']['CurrencyCode'];
			$value['GiftWrapPrice_Amount'] 			= $value['GiftWrapPrice']['Amount'];
				
			$value['ItemTax_CurrencyCode'] 			= $value['ItemTax']['CurrencyCode'];
			$value['ItemTax_Amount'] 				= $value['ItemTax']['Amount'];
			
			$value['ShippingTax_CurrencyCode'] 		= $value['ShippingTax']['CurrencyCode'];
			$value['ShippingTax_Amount'] 			= $value['ShippingTax']['Amount'];
				
			$value['GiftWrapTax_CurrencyCode'] 		= $value['GiftWrapTax']['CurrencyCode'];
			$value['GiftWrapTax_Amount'] 			= $value['GiftWrapTax']['Amount'];
				
			$value['ShippingDiscount_CurrencyCode'] 	= $value['ShippingDiscount']['CurrencyCode'];
			$value['ShippingDiscount_Amount'] 			= $value['ShippingDiscount']['Amount'];

			$value['PromotionDiscount_CurrencyCode'] 	= $value['PromotionDiscount']['CurrencyCode'];
			$value['PromotionDiscount_Amount'] 			= $value['PromotionDiscount']['Amount'];
			
			}
				
			$this->save($value);
				
		}
		
		

	}

	/**
	 * From XML to Array
	 *
	 * @return array products
	 */
	public function parse($xml){

		App::uses('Xml', 'Utility');

		$this->arrayResults 	= Xml::toArray(Xml::build($xml));

		$amount		= count(Set::classicExtract($this->arrayResults, 'ListOrderItemsResponse.ListOrderItemsResult.OrderItems.{n}'));

		if($amount > 0){

			return Set::classicExtract($this->arrayResults, 'ListOrderItemsResponse.ListOrderItemsResult.OrderItems.{n}');
		}

		return Set::classicExtract($this->arrayResults, 'ListOrderItemsResponse.ListOrderItemsResult.OrderItems');

	}

	/**
	 * Get List Order Items Action Sample
	 * Gets competitive pricing and related information for a product identified by
	 * the MarketplaceId and ASIN.
	 *
	 * @param MarketplaceWebServiceOrders_Interface $service instance of MarketplaceWebServiceOrders_Interface
	 * @param mixed $request MarketplaceWebServiceOrders_Model_ListOrderItems or array of parameters
	 */

	function invokeListOrderItems(MarketplaceWebServiceOrders_Interface $service, $request)
	{
		try {
			$response = $service->ListOrderItems($request);

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
