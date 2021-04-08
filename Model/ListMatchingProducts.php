<?php

App::uses('ServiceProductsModel', 'Model');

App::import('Vendor', 'MarketplaceWebServiceProducts_Exception', array('file' => 'MarketplaceWebServiceProducts/Exception.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest', array('file' => 'MarketplaceWebServiceProducts/Model/ListMatchingProductsRequest.php'));

// App::import('Vendor', 'MarketplaceWebServiceProducts_Model_SellerSKUListType', array('file' => 'MarketplaceWebServiceProducts/Model/SellerSKUListType.php'));

/**
 * List Matching Products Model
 *
 */
class ListMatchingProducts extends ServiceProductsModel {

	public $useTable = 'ListMatchingProducts';

	public $matchingProducts = array();

	/**
	 * Set all MWS Objects relative to ListMatchingProducts
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);

		$this->request = new MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest();


		$this->request->setSellerId($this->sellerID);

		$this->request->setMarketplaceId($this->marketPlaceID);


				debug($this->getProducts('Suicide Girls: Hard Girls, Soft Light'));

	}


	/**
	 * Read the array and return the ListMatchingProduct
	 *
	 * @param array $products array('UPC','####')
	 * @return array $matchingProducts Objects
	 */
	public function listProduct($products = array()){

		if(is_array($products) && count($products) > 1){

			foreach ($products as $key => $value){

								$matchingProducts[$value] = new MatchingProducts($this->getProducts($value), $value);
				
				
				$this->saveItems($this->getProducts($value), $value);
				

			}

			return $matchingProducts;
		}
		else{

			return new MatchingProducts($this->getProducts($products[0]), $products[0]);
		}

		return null;
	}


	/**
	 * From XML to Array
	 *
	 * @return array products
	 */
	public function parse($xml){

		App::uses('Xml', 'Utility');

		$this->arrayResults 	= Xml::toArray(Xml::build($xml));

		$products 				= Set::classicExtract($this->arrayResults, 'ListMatchingProductsResponse.ListMatchingProductsResult.Products');


		if (is_array($products)) return $products;

		return null;

	}

	public function parseProduct($product = array()){

		debug($product);

		foreach($products as $key => $value){

			$a['asin']	= Hash::extract($product,'{n}.Identifiers.MarketplaceASIN.ASIN');
			$a['price'] = Hash::extract($product,'{n}.AttributeSets.ns2:ItemAttributes.ns2:ListPrice.ns2:Amount');
			$a['manufacturer'] = Hash::extract($product,'{n}.AttributeSets.ns2:ItemAttributes.ns2:Manufacturer');
			$a['title'] = Hash::extract($product,'{n}.AttributeSets.ns2:ItemAttributes.ns2:Title');

		}

		return $a;
	}


	/**
	 * Execute the request of List Matching Products
	 *
	 * @param string $value
	 * @param string $format 'array' | 'xml'
	 * @return xml
	 */
	public function getProducts($value, $format = 'array'){

		$this->request->setQuery($value);

		$result = $this->invokeListMatchingProducts( $this->service, $this->request);

		sleep($this->trottle['LowestPrice']['Restore_rate_time']);

		if ($format == 'array') return $this->parse($result);

		return $result;
	}

	/**
	 * Get List Matching Products Action Sample
	 * Gets competitive pricing and related information for a product identified by
	 * the MarketplaceId and ASIN.
	 *
	 * @param MarketplaceWebServiceProducts_Interface $service instance of MarketplaceWebServiceProducts_Interface
	 * @param mixed $request MarketplaceWebServiceProducts_Model_ListMatchingProducts or array of parameters
	 */
	public function invokeListMatchingProducts(MarketplaceWebServiceProducts_Interface $service, $request)
	{
		try {
			$response = $service->ListMatchingProducts($request);

			// 			echo ("Service Response\n");
			// 			echo ("=============================================================================\n");

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

	public function saveItems($products, $upc = null){


		
		if($products == null ) {
			
			$a['upc']	= $upc;
			
			$this->create();
			debug($a);
			$this->save($a);
			return null;
		}
		
		debug(Hash::dimensions($products));

		if(Hash::dimensions($products) == 5){
			foreach($products as $key => $value){

				foreach($value as $key => $product){
						
					debug($product);

					$a['asin']	= $product['Identifiers']['MarketplaceASIN']['ASIN'] ;
					$a['price'] = (isset($product['AttributeSets']['ns2:ItemAttributes']['ns2:ListPrice']['ns2:Amount']))? $product['AttributeSets']['ns2:ItemAttributes']['ns2:ListPrice']['ns2:Amount']: 0;
					$a['manufacturer'] = $product['AttributeSets']['ns2:ItemAttributes']['ns2:Manufacturer'];
					$a['title'] = $product['AttributeSets']['ns2:ItemAttributes']['ns2:Title'];
					$a['upc']	= $upc;
						
					$this->create();
					debug($a);
					$this->save($a);
				}

				;

			}
		}
		else{
				
			foreach($products as $key => $product){

				debug($product);
					
				$a['asin']	= $product['Identifiers']['MarketplaceASIN']['ASIN'] ;
				$a['price'] = (isset($product['AttributeSets']['ns2:ItemAttributes']['ns2:ListPrice']['ns2:Amount']))? $product['AttributeSets']['ns2:ItemAttributes']['ns2:ListPrice']['ns2:Amount']: 0;
				$a['manufacturer'] = $product['AttributeSets']['ns2:ItemAttributes']['ns2:Manufacturer'];
				$a['title'] = $product['AttributeSets']['ns2:ItemAttributes']['ns2:Title'];
				$a['upc']	= $upc;
					
				$this->create();
				debug($a);
				$this->save($a);
			}
				
		}
	}


}

class MatchingProducts extends Object {

	public $ASIN;

	public $ns2_Binding;

	public $ns2_ProductGroup;

	public $productCategoryId = array();

	public $UPC;

	public function __construct($arrayResults = array(), $value = null) {

		// 		debug($arrayResults);

		// 		$this->ASIN 				= $arrayResults['Product']['Identifiers']['MarketplaceASIN']['ASIN'];

		// 		$this->ns2_Binding			= $arrayResults['Product']['AttributeSets']['ns2:ItemAttributes']['ns2:Binding'];

		// 		$this->ns2_ProductGroup		= $arrayResults['Product']['AttributeSets']['ns2:ItemAttributes']['ns2:ProductGroup'];

		// 		$this->productCategoryId	= $arrayResults['Product']['SalesRankings']['SalesRank'];

		// 		$this->UPC					= $value;

		return $this;
	}
}