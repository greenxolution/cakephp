<?php

App::uses('AppModel', 'Model');

App::import('Vendor', 'MarketplaceWebServiceProducts/Client');

App::import('Vendor', 'MarketplaceWebServiceProducts/Exception.php');


/**
 * Service Products Model Model
 *
 */
class ServiceProductsModel extends AppModel {

	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = false;

	public $serviceUrl = "https://mws.amazonservices.com/Products/2011-10-01";

	public $config;

	public $service;

	public $request;

	public $xmlResults;

	public $arrayResults;

	public $sellerID;

	public $marketPlaceID;

	public $competitivePricingProduct;

	public $price_criterium_condition 		= 'New';

	public $price_criterium_price_leverl 	= 1;

	public $products;

	public $price_criterium_price_type		= 'LandedPrice'; // [LandedPrice | ListingPrice | Shipping]

	public $trottle 	= array('CompetitivePricing' =>
										array(	'Maximum_request_quota' => 20,
												'Restore_rate'			=> 10,
												'Hourly_request_quota'	=> 36000,
												'Restore_rate_time'		=> 1),
								'MyPrice' =>
										array(	'Maximum_request_quota' => 20,
												'Restore_rate'			=> 10,
												'Hourly_request_quota'	=> 36000,
												'Restore_rate_time'		=> 1),
								'LowestPrice' =>
										array(	'Maximum_request_quota' => 20,
												'Restore_rate'			=> 10,
												'Hourly_request_quota'	=> 36000,
												'Restore_rate_time'		=> 1));


	/**
	 * Set all MWS Objects relative to ListMatchingProducts
	 *
	 * @param unknown_type $id
	 * @param unknown_type $table
	 * @param unknown_type $ds
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);

		$this->config = array (
				'ServiceURL' => $this->serviceUrl,
				'ProxyHost' => null,
				'ProxyPort' => -1,
				'MaxErrorRetry' => 3,
		);

		$this->service = new MarketplaceWebServiceProducts_Client(
				Configure::read('PETER.MWS.AWS_ACCESS_KEY_ID'),
				Configure::read('PETER.MWS.AWS_SECRET_ACCESS_KEY'),
				Configure::read('PETER.MWS.APPLICATION_NAME'),
				Configure::read('PETER.MWS.APPLICATION_VERSION'),
				$this->config);
		
		$this->sellerID 		= Configure::read('PETER.MWS.SELLER_ID');

		$this->marketPlaceID	= Configure::read('PETER.MWS.MARKETPLACE_ID');

	}


}

class Product extends Object {

	public $ASIN;

	public function __construct($arrayResults = array()) {

		return $this;

	}
}

