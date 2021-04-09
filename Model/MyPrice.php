<?php
App::uses('ServiceProductsModel', 'Model');

App::import('Vendor', 'MarketplaceWebServiceProducts_Exception', array('file' => 'MarketplaceWebServiceProducts/Exception.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest', array('file' => 'MarketplaceWebServiceProducts/Model/GetMyPriceForSKURequest.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_SellerSKUListType', array('file' => 'MarketplaceWebServiceProducts/Model/SellerSKUListType.php'));

/**
 * MyPrice Model
 *
 * @property asin $asin
 */
class MyPrice extends ServiceProductsModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
// 	public $hasOne = array(
// 		'asin' => array(
// 			'className' => 'asin',
// 			'foreignKey' => 'asin',
// 			'conditions' => '',
// 			'fields' => '',
// 			'order' => ''
// 		)
// 	);

	/**
	 * Set all MWS Objects relative to CompetitivePricingForSKU
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
	
	
		$this->request = new MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest();
	
		$this->sku_list = new MarketplaceWebServiceProducts_Model_SellerSKUListType();
	
		$this->request->setSellerId($this->sellerID);
	
		$this->request->setMarketplaceId($this->marketPlaceID);
	
// 				debug($this->getPrice(array('103974306', '121731USA','12417341USA')));
	
// 				debug($this->listProduct(array('103974306', '121731USA','12417341USA')));
	
// 				debug($this->getPrice(array('12417341USA')));
	
		// 		debug(Set::countDim($this->products), 1);
	
	}
	
	/**
	 * Read the array and return the Product(s)
	 *
	 * @param array $products ASIN
	 * @param array $format [array | object]
	 * @return array $matchingProducts Objects
	 */
	public function listProduct($products = array(), $array = true){
	
		if(count($products) > $this->trottle['MyPrice']['Restore_rate']){
				
			//@TODO: this is an error
			return null;
		}
	
		$this->sku_list->setSellerSKU($products);
	
		return $this->products = $this->getProduct($products);
	
	}
	
	/**
	 * This return the price based on criteriums: Condition [new|used], Lowest Price Level [1:first | 2:seconds...]
	 *
	 */
	public function getPrice($products){
	
		$this->listProduct($products);
	
		//There is only one product
		if(isset($this->products['@status']) ){
	
			if($this->products['@status'] != 'ClientError'){
				
				debug($this->products);
				
				if(count(Set::classicExtract($this->products, 'Product.Offers.Offer.{n}')) > 0){
				
					$offerlisting = Set::classicExtract($this->products, 'Product.Offers.Offer.{n}');
					
					
					$offerlisting = $offerlisting[0];
				}
				else{
						
					$offerlisting = Set::classicExtract($this->products, 'Product.Offers.Offer');
				}
				
				return array($this->products['SellerSKU'] =>$offerlisting);

			}
			else{
	
				return array($this->products['SellerSKU'] => array('status' => $this->products['@status']));
	
			}
		}
		else{
	
			$p = array();
				
			foreach($this->products as $product){
				
	
				if($product != null){
	
					if(Set::classicExtract($product, '@status') != 'ClientError'){
	
						
						if(count(Set::classicExtract($product, 'Product.Offers.Offer.{n}')) > 0){

							$offerlisting = Set::classicExtract($product, 'Product.Offers.Offer.{n}');
							
							$offerlisting = $offerlisting[0];
						}
						else{
							
							$offerlisting = Set::classicExtract($product, 'Product.Offers.Offer');
						}
						
						
						array_push($p,  array( Set::classicExtract($product, 'SellerSKU') => $offerlisting));
							

					}
					else{
							
						array_push($p,  array( Set::classicExtract($product, 'SellerSKU') => array('status' => $product['@status'])));
					}
				}
				else{
	
					//@TODO: manage this error
				}
			}
			
	
			return $p;
		}
	
		return null;
	
	}

	/**
	 * Execute the request of List Matching Products
	 *
	 * @param string $value
	 * @param string $format 'array' | 'xml'
	 * @return xml
	 */
	public function getProduct($value, $array = true){
	
		$this->request->setSellerSKUList($this->sku_list);
	
		$result = $this->invokeGetMyPriceForSKU( $this->service, $this->request);
	
		sleep($this->trottle['CompetitivePricing']['Restore_rate_time']);
	
		if ($array) return $this->parse($result);
	
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
	
		$amount		= count(Set::classicExtract($this->arrayResults, 'GetMyPriceForSKUResponse.GetMyPriceForSKUResult.{n}'));
	
		if($amount > 0){
				
			return Set::classicExtract($this->arrayResults, 'GetMyPriceForSKUResponse.GetMyPriceForSKUResult.{n}');
		}
	
		return Set::classicExtract($this->arrayResults, 'GetMyPriceForSKUResponse.GetMyPriceForSKUResult');
	
	}
	
	/**
	 * Get Get My Price For SKU Action Sample
	 * Gets competitive pricing and related information for a product identified by
	 * the MarketplaceId and ASIN.
	 *
	 * @param MarketplaceWebServiceProducts_Interface $service instance of MarketplaceWebServiceProducts_Interface
	 * @param mixed $request MarketplaceWebServiceProducts_Model_GetMyPriceForSKU or array of parameters
	 */
	
	function invokeGetMyPriceForSKU(MarketplaceWebServiceProducts_Interface $service, $request)
	{
		try {
			$response = $service->GetMyPriceForSKU($request);
	
			echo ("Service Response\n");
			echo ("=============================================================================\n");
	
			$dom = new DOMDocument();
			$dom->loadXML($response->toXML());
			$dom->preserveWhiteSpace = false;
			$dom->formatOutput = true;
// 			echo $dom->saveXML();
			echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
			
			return $dom->saveXML();
	
		} catch (MarketplaceWebServiceProducts_Exception $ex) {
			echo("Caught Exception: " . $ex->getMessage() . "\n");
			echo("Response Status Code: " . $ex->getStatusCode() . "\n");
			echo("Error Code: " . $ex->getErrorCode() . "\n");
			echo("Error Type: " . $ex->getErrorType() . "\n");
			echo("Request ID: " . $ex->getRequestId() . "\n");
			echo("XML: " . $ex->getXML() . "\n");
			echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
			
			return null;
		}
	}
}
