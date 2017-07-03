<?php

App::uses('ServiceProductsModel', 'Model');

App::import('Vendor', 'MarketplaceWebServiceProducts_Exception', array('file' => 'MarketplaceWebServiceProducts/Exception.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest', array('file' => 'MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForSKURequest.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_SellerSKUListType', array('file' => 'MarketplaceWebServiceProducts/Model/SellerSKUListType.php'));

/**
 * List Matching Products Model
 *
 */
class LowestOfferListingsForSKU extends ServiceProductsModel {

	public $useTable = 'LowestOfferListingsForSKUResponse';
	/**
	 * Set all MWS Objects relative to LowestOfferListingForSKU
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);


		$this->request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest();

		$this->sku_list = new MarketplaceWebServiceProducts_Model_SellerSKUListType();

		$this->request->setSellerId($this->sellerID);

		$this->request->setExcludeMe(true);

		$this->request->setItemCondition('New');

		$this->request->setMarketplaceId($this->marketPlaceID);

		// 		debug($this->getPrice(array('14318308', '121731USA','103974306')));

		// 				$this->listProduct(array('14318308'));

		// 		debug($this->getPrice(array('14318308', '103974306')));

		// 				debug($this->getPrice(array('14318308', '103974306')));

		// 		debug(Set::countDim($this->products), 1);

		// 		debug($this->getPrice(array('14318308', '103974306')));
	}
	
	public function listAll(){
		
		return $this->find('all');
	}

	/**
	 * Save the Lowest Offer Listing
	 *
	 * @param unknown_type $item
	 */
	public function saveItem($item){

		foreach($item as $key => $value){

			$data['LowestOfferListingsForSKU']['sku']								= $key;
			$data['LowestOfferListingsForSKU']['ItemCondition'] 					= ($value['Qualifiers']['ItemCondition'] != null)?$value['Qualifiers']['ItemCondition']:'UNKNOW';
			$data['LowestOfferListingsForSKU']['NumberOfOfferListingsConsidered']	= ($value['NumberOfOfferListingsConsidered'] != null)?$value['NumberOfOfferListingsConsidered']:0;
			$data['LowestOfferListingsForSKU']['LandedPrice']						= ($value['Price']['LandedPrice']['Amount'] != null)?$value['Price']['LandedPrice']['Amount']:0;
			$data['LowestOfferListingsForSKU']['ListingPrice']						= ($value['Price']['ListingPrice']['Amount'] != null)?$value['Price']['ListingPrice']['Amount']:0;
			$data['LowestOfferListingsForSKU']['Shipping']							= ($value['Price']['Shipping']['Amount'] != null)?$value['Price']['Shipping']['Amount']:0;

		}

		$_this = $this->findBySku($data['LowestOfferListingsForSKU']['sku']);

		if(empty($_this['LowestOfferListingsForSKU']['id'])){
				
			$this->create();
				
			$this->save($data);
		}
		else{

			$this->id = $_this['LowestOfferListingsForSKU']['id'];
				
			$this->save($data);
				
		}
	}

	/**
	 * This return the price based on criteriums: Condition [new|used], 
	 * Lowest Price Level [1:first | 2:seconds...]
	 *
	 */
	public function getPrice($products){

		$this->listProduct($products);

		// 				debug($this->products);

		//There is only one product
		if(isset($this->products['@status']) ){

			if($this->products['@status'] != 'ClientError'){

				$prod = Set::classicExtract($this->products, 'Product.LowestOfferListings.LowestOfferListing.{n}');

				$this->saveItem(array($this->products['SellerSKU'] =>$prod[0]));

				return array($this->products['SellerSKU'] =>$prod[0]);

			}
			else{

				return array($this->products['SellerSKU'] => array('status' => $this->products['Error']));

			}
		}
		else{

			$p = array();
				

			foreach($this->products as $product){

				$prod = Set::classicExtract($product, 'Product.LowestOfferListings.LowestOfferListing.{n}');

				$this->saveItem(array($product['SellerSKU'] => $prod[0]));

				//@TODO: improve the selection of the offer
				array_push($p, array($product['SellerSKU'] => $prod[0]));

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

		$result = $this->invokeGetLowestOfferListingsForSKU( $this->service, $this->request);

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

		$amount		= count(Set::classicExtract($this->arrayResults, 'GetLowestOfferListingsForSKUResponse.GetLowestOfferListingsForSKUResult.{n}'));

		if($amount > 0){

			return Set::classicExtract($this->arrayResults, 'GetLowestOfferListingsForSKUResponse.GetLowestOfferListingsForSKUResult.{n}');
		}

		return Set::classicExtract($this->arrayResults, 'GetLowestOfferListingsForSKUResponse.GetLowestOfferListingsForSKUResult');

	}



	/**
	 * Search LowestOffertListing prices of product
	 * and SAVE these in the LowestOfferListingsForSKUResponse table
	 * 
	 * @param unknown_type $products
	 */
	public function searchPrices($products){


		$products = array_chunk($products, $this->trottle['LowestPrice']['Restore_rate']);

		foreach($products as $key => $sku){

			
			$this->sku_list->setSellerSKU($sku);

			//Invoke the API
			$this->request->setSellerSKUList($this->sku_list);

			$result = $this->invokeGetLowestOfferListingsForSKU( $this->service, $this->request);
			
			$this->saveItems($this->parse($result));

		}
	}
	
	
	/**
	 * Save a bunch of product in the LowestOfferListingsForSKUResponse table
	 * 
	 * @param unknown_type $products
	 */
	public function saveItems($products){
		
		if(count(Set::classicExtract($products,'{n}.@status')) > 0){
			
			foreach($products as $product){
					
				$prod = Set::classicExtract($product, 'Product.LowestOfferListings.LowestOfferListing.{n}');
					
				$this->saveItem(array($product['SellerSKU'] => $prod[0]));
			
			}
		}
		else{
			
			$prod = Set::classicExtract($products, 'Product.LowestOfferListings.LowestOfferListing.{n}');
				
			$this->saveItem(array($products['SellerSKU'] => $prod[0]));			
			
		}
		
		$this->cacheAllList();
		

	}
	
	/**
	 * Save the whole list in Global Variable
	 * 
	 */
	public function cacheAllList(){
		
		$all = $this->listAll();
		
		Configure::write('LowestOfferListingsForSKU.list', $all);
		
		$all_combined = Hash::combine($all, '{n}.LowestOfferListingsForSKU.sku', '{n}.LowestOfferListingsForSKU.ListingPrice');
		
		Configure::write('LowestOfferListingsForSKU.sku-price', $all_combined);
		
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
	 * Get Get Lowest Offer Listings For SKU Action Sample
	 * Gets competitive pricing and related information for a product identified by
	 * the MarketplaceId and ASIN.
	 *
	 * @param MarketplaceWebServiceProducts_Interface $service instance of MarketplaceWebServiceProducts_Interface
	 * @param mixed $request MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU or array of parameters
	 */

	function invokeGetLowestOfferListingsForSKU(MarketplaceWebServiceProducts_Interface $service, $request)
	{
		try {
			$response = $service->GetLowestOfferListingsForSKU($request);

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
