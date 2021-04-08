<?php

App::uses('ServiceProductsModel', 'Model');

App::import('Vendor', 'MarketplaceWebServiceProducts_Exception', array('file' => 'MarketplaceWebServiceProducts/Exception.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest', array('file' => 'MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForASINRequest.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_ASINListType', array('file' => 'MarketplaceWebServiceProducts/Model/ASINListType.php'));
App::import('Vendor', 'MarketplaceWebServiceProducts_Model_SellerASINListType', array('file' => 'MarketplaceWebServiceProducts/Model/SellerASINListType.php'));

/**
 * List Matching Products Model
 *
 */
class LowestOfferListingsForASIN extends ServiceProductsModel {
	
	public $list;
	
	public $useTable = 'LowestOfferListingsForASINResponse';
	/**
	 * Set all MWS Objects relative to LowestOfferListingForSKU
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
	
		$this->request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest();
		
	
		$this->list = new MarketplaceWebServiceProducts_Model_ASINListType();
	
		$this->request->setSellerId($this->sellerID);
		
		$this->request->setExcludeMe(true);
	
		$this->request->setItemCondition('New');
		
		$this->request->setMarketplaceId($this->marketPlaceID);
	
		// 		debug($this->getPrice(array('14318308', '121731USA','103974306')));
	

// 		debug($this->getPrice(array('14318308', '103974306')));
	
// 				debug($this->getPrice(array('14318308', '103974306')));
	
		// 		debug(Set::countDim($this->products), 1);
	
// 		debug($this->getPrice(array('14318308', '103974306')));
	}
	
	/**
	 * Save the Lowest Offer Listing
	 * 
	 * @param unknown_type $item
	 */
	public function saveItem($item){
		
		foreach($item as $key => $value){

			$data['LowestOfferListingsForASIN']['asin']								= $key;
			$data['LowestOfferListingsForASIN']['ItemCondition'] 					= ($value['Qualifiers']['ItemCondition'] != null)?$value['Qualifiers']['ItemCondition']:'UNKNOW';
			$data['LowestOfferListingsForASIN']['NumberOfOfferListingsConsidered']	= ($value['NumberOfOfferListingsConsidered'] != null)?$value['NumberOfOfferListingsConsidered']:0;
			$data['LowestOfferListingsForASIN']['LandedPrice']						= ($value['Price']['LandedPrice']['Amount'] != null)?$value['Price']['LandedPrice']['Amount']:0;
			$data['LowestOfferListingsForASIN']['ListingPrice']						= ($value['Price']['ListingPrice']['Amount'] != null)?$value['Price']['ListingPrice']['Amount']:0;
			$data['LowestOfferListingsForASIN']['Shipping']							= ($value['Price']['Shipping']['Amount'] != null)?$value['Price']['Shipping']['Amount']:0;
		
		}
		
		$_this = $this->findByAsin($data['LowestOfferListingsForASIN']['asin']);

		if(empty($_this['LowestOfferListingsForASIN']['id'])){
			
			$this->create();
			
			$this->save($data);
		}
		else{

			$this->id = $_this['LowestOfferListingsForASIN']['id'];
			
			$this->save($data);
			
		}
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
	
				$prod = Set::classicExtract($this->products, 'Product.LowestOfferListings.LowestOfferListing.{n}');
				
				$this->saveItem(array($this->products['Product']['Identifiers']['MarketplaceASIN']['ASIN'] =>$prod[0]));
				
				return array($this->products['ASIN'] =>$prod[0]);

			}
			else{
	
				return array($this->products['ASIN'] => array('status' => $this->products['Error']));
	
			}
		}
		else{
	
			$p = array();
			
				
			foreach($this->products as $product){
				
				$prod = Set::classicExtract($product, 'Product.LowestOfferListings.LowestOfferListing.{n}');
				
				$this->saveItem(array($product['Product']['Identifiers']['MarketplaceASIN']['ASIN'] => $prod[0]));
				
				//@TODO: improve the selection of the offer
				array_push($p, array($product['Product']['Identifiers']['MarketplaceASIN']['ASIN'] => $prod[0]));

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
	
		$this->request->setASINList($this->list);
	
		$result = $this->invokeGetLowestOfferListingsForASIN( $this->service, $this->request);
	
		sleep($this->trottle['LowestPrice']['Restore_rate_time']);
	
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
		
// 		debug($this->arrayResults);
	
		$amount		= count(Set::classicExtract($this->arrayResults, 'GetLowestOfferListingsForASINResponse.GetLowestOfferListingsForASINResult.{n}'));
	
		if($amount > 0){
				
			return Set::classicExtract($this->arrayResults, 'GetLowestOfferListingsForASINResponse.GetLowestOfferListingsForASINResult.{n}');
		}
	
		return Set::classicExtract($this->arrayResults, 'GetLowestOfferListingsForASINResponse.GetLowestOfferListingsForSKUResult');
	
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
	
		$this->list->setASIN($products);

		debug($products);
	
		return $this->products = $this->getProduct($products);
	
	}
	

	/**
	 * Get Get Lowest Offer Listings For ASIN Action Sample
	 * Gets competitive pricing and related information for a product identified by
	 * the MarketplaceId and ASIN.
	 *
	 * @param MarketplaceWebServiceProducts_Interface $service instance of MarketplaceWebServiceProducts_Interface
	 * @param mixed $request MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN or array of parameters
	 */
	function invokeGetLowestOfferListingsForASIN(MarketplaceWebServiceProducts_Interface $service, $request)
	{
		try {
			$response = $this->service->GetLowestOfferListingsForASIN($this->request);
			
	
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
		}
	}
	

}
