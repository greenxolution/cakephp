<?php

App::uses('ServiceProductsModel', 'Model');

App::import('Vendor', 'MarketplaceWebServiceProducts_Exception', array('file' => 'MarketplaceWebServiceProducts/Exception.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest', array('file' => 'MarketplaceWebServiceProducts/Model/GetCompetitivePricingForSKURequest.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_SellerSKUListType', array('file' => 'MarketplaceWebServiceProducts/Model/SellerSKUListType.php'));

/**
 * Competitive Pricing For SKU
 *
 */
class CompetitivePricingForSKU extends ServiceProductsModel {
	
	public $competitivePricingProduct;
	
// 	public $trottle 	= array('CompetitivePricing' =>
// 			array(	'Maximum_request_quota' => 20,
// 					'Restore_rate'			=> 10,
// 					'Hourly_request_quota'	=> 36000,
// 					'Restore_rate_time'		=> 1));
	
	
	public $sku_list;
	/**
	 * Set all MWS Objects relative to CompetitivePricingForSKU
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
	
// 		$this->competitivePricingProduct = new CompetitivePricingProduct();
		
		$this->request = new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest();
		
		$this->sku_list = new MarketplaceWebServiceProducts_Model_SellerSKUListType();
	
		$this->request->setSellerId($this->sellerID);
	
		$this->request->setMarketplaceId($this->marketPlaceID);
	
// 		debug($this->getPrice(array('103974306', '121731USA','12417341USA')));
		
// 		$this->listProduct(array('103974306'));
		
// 		debug($this->getPrice(array('034580404X', '08431003X','0843173823')));

// 		debug(Set::countDim($this->products), 1);
		
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
	
		$result = $this->invokeGetCompetitivePricingForSKU( $this->service, $this->request);
		
		sleep($this->trottle['CompetitivePricing']['Restore_rate_time']);
	
		if ($array) return $this->parse($result);
	
		return $result;
	}
	
	/**
	 * This return the price based on criteriums: Condition [new|used], Lowest Price Level [1:first | 2:seconds...]
	 *
	 */
	public function getPrice($products){
		
		$this->listProduct($products);
		
// 		debug($this->products);
	
		//There is only one product
		if(isset($this->products['@status']) ){
				
			if($this->products['@status'] != 'ClientError'){
	
				//@TODO: this works only when there is only one product per conditions
				foreach(Set::classicExtract($this->products, 'Product.CompetitivePricing.CompetitivePrices.CompetitivePrice') as $key => $value){
	
					if($value['@condition'] == $this->price_criterium_condition){
	
						$value['status'] = $this->products['@status'];
						return array($this->products['SellerSKU'] =>$value);
					}
				}
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
						
							
						foreach(Set::classicExtract($product, 'Product.CompetitivePricing.CompetitivePrices.CompetitivePrice') as $key => $value){
	
							if(isset($value['@condition']) && $value['@condition'] == $this->price_criterium_condition ){
	
								$value['status'] = $product['@status'];
								array_push($p,  array( Set::classicExtract($product, 'SellerSKU') => $value));
	
							}
						}
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
	 * Read the array and return the Product(s)
	 *
	 * @param array $products ASIN
	 * @param array $format [array | object]
	 * @return array $matchingProducts Objects
	 */
	public function listProduct($products = array(), $array = true){
		
		if(count($products) > $this->trottle['CompetitivePricing']['Restore_rate']){
			
			//@TODO: this is an error
			return null;
		}
		
		$this->sku_list->setSellerSKU($products);
		
// 		debug($products);
		
		return $this->products = $this->getProduct($products);
		
	}
	
	/**
	 * From XML to Array
	 *
	 * @return array products
	 */
	public function parse($xml){
	
		App::uses('Xml', 'Utility');
	
		$this->arrayResults 	= Xml::toArray(Xml::build($xml));
		
		$amount		= count(Set::classicExtract($this->arrayResults, 'GetCompetitivePricingForSKUResponse.GetCompetitivePricingForSKUResult.{n}'));

		if($amount > 0){
			
			return Set::classicExtract($this->arrayResults, 'GetCompetitivePricingForSKUResponse.GetCompetitivePricingForSKUResult.{n}');
		}
		
		return Set::classicExtract($this->arrayResults, 'GetCompetitivePricingForSKUResponse.GetCompetitivePricingForSKUResult');
		
	}
	
	/**
	 * Get Get Competitive Pricing For SKU Action Sample
	 * Gets competitive pricing and related information for a product identified by
	 * the MarketplaceId and ASIN.
	 *
	 * @param MarketplaceWebServiceProducts_Interface $service instance of MarketplaceWebServiceProducts_Interface
	 * @param mixed $request MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU or array of parameters
	 */
	
	function invokeGetCompetitivePricingForSKU(MarketplaceWebServiceProducts_Interface $service, $request)
	{
		try {
			$response = $service->GetCompetitivePricingForSKU($request);
	
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
	
	public function getError(){
		
		$error = '<?xml version="1.0"?>
<GetCompetitivePricingForASINResponse xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01">
  <GetCompetitivePricingForASINResult ASIN="034580404X" status="ServerError">
    <Error>
      <Type>Receiver</Type>
      <Code>InternalError</Code>
      <Message>We encountered an internal error.  Please contact the MWS team if this problem persists.</Message>
    </Error>
  </GetCompetitivePricingForASINResult>
  <GetCompetitivePricingForASINResult ASIN="08431003X" status="ServerError">
    <Error>
      <Type>Receiver</Type>
      <Code>InternalError</Code>
      <Message>We encountered an internal error.  Please contact the MWS team if this problem persists.</Message>
    </Error>
  </GetCompetitivePricingForASINResult>
  <GetCompetitivePricingForASINResult ASIN="0843173823" status="ServerError">
    <Error>
      <Type>Receiver</Type>
      <Code>InternalError</Code>
      <Message>We encountered an internal error.  Please contact the MWS team if this problem persists.</Message>
    </Error>
  </GetCompetitivePricingForASINResult>
  <ResponseMetadata>
    <RequestId>1196e465-5f21-4d33-9bc6-85e3c79673e0</RequestId>
  </ResponseMetadata>
</GetCompetitivePricingForASINResponse>';
	}
	
}

class CompetitivePricingProduct extends Product {

	public function __construct($arrayResults = array()) {

		parent::__construct($arrayResults = array());
	}
}