<?php 

App::uses('AppModel', 'Model');

App::uses('CakeTime', 'Utility');

App::import('Vendor', 'MarketplaceWebServiceOrders_Client', array('file' => 'MarketplaceWebServiceOrders/Client.php'));

App::import('Vendor', 'MarketplaceWebServiceOrders_Exception', array('file' => 'MarketplaceWebServiceOrders/Exception.php'));



class Order extends AppModel {
	
	public $config;
	
	public $service;
	
	public $serviceUrl = "https://mws.amazonservices.com/Orders/2013-09-01";
	
	public $request;
	
	public $xmlResults;
	
	public $arrayResults;
	
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
	
	
		$this->service = new MarketplaceWebServiceOrders_Client(
				Configure::read('PETER.MWS.AWS_ACCESS_KEY_ID'),
				Configure::read('PETER.MWS.AWS_SECRET_ACCESS_KEY'),
				Configure::read('PETER.MWS.APPLICATION_NAME'),
				Configure::read('PETER.MWS.APPLICATION_VERSION'),
				$this->config);
	
	
	
	}
	
	
}