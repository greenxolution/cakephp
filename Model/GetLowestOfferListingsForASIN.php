<?php


App::uses('ServiceProductsModel', 'Model');

App::import('Vendor', 'MarketplaceWebServiceProducts_Exception', array('file' => 'MarketplaceWebServiceProducts/Exception.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_GetLowestOfferListingForASINRequest', array('file' => 'MarketplaceWebServiceProducts/Model/GetLowestOfferListingForASINRequest.php'));

App::import('Vendor', 'MarketplaceWebServiceProducts_Model_SellerSKUListType', array('file' => 'MarketplaceWebServiceProducts/Model/SellerSKUListType.php'));

/**
 * List Matching Products Model
 *
 */
class GetLowestOfferListingForASIN extends ServiceProductsModel {



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
	
		debug($this->listProduct(array('9780425276761', '9780880880787')));
	
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
	
		if ($format == 'array') return $this->parse($result);
	
		return $result;
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
			$response = $service->GetLowestOfferListingsForASIN($request);

			echo ("Service Response\n");
			echo ("=============================================================================\n");

			$dom = new DOMDocument();
			$dom->loadXML($response->toXML());
			$dom->preserveWhiteSpace = false;
			$dom->formatOutput = true;
			echo $dom->saveXML();
			echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

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