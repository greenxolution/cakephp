<?php
/**
 * Order Fixture
 */
class OrderFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'order';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'AmazonOrderId' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'SellerOrderId' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PurchaseDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LastUpdateDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'OrderStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FulfillmentChannel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'SalesChannel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'OrderChannel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ShipServiceLevel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'OrderTotal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'NumberOfItemsShipped' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'NumberOfItemsUnshipped' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PaymentExecutionDetail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PaymentMethod' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PaymentMethodDetails' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'MarketplaceId' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ShipmentServiceLevelCategory' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EasyShipShipmentStatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CbaDisplayableShippingLabel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'OrderType' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EarliestShipDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LatestShipDate' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'EarliestDeliveryDate' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'LatestDeliveryDate' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'IsBusinessOrder' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'IsPrime' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'IsPremiumOrder' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'IsGlobalExpressEnabled' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ReplacedOrderId' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'IsReplacementOrder' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'PromiseResponseDueDate' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'IsEstimatedShipDateSet' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'IsSoldByAB' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'DefaultShipFromLocationAddress' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FulfillmentInstruction' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'IsISPU' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'AmazonOrderId' => array('column' => 'AmazonOrderId', 'unique' => 1),
			'index_sku' => array('column' => 'AmazonOrderId', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'AmazonOrderId' => 'Lorem ipsum dolor sit amet',
			'SellerOrderId' => 'Lorem ipsum dolor sit amet',
			'PurchaseDate' => 'Lorem ipsum dolor sit amet',
			'LastUpdateDate' => 'Lorem ipsum dolor sit amet',
			'OrderStatus' => 'Lorem ipsum dolor sit amet',
			'FulfillmentChannel' => 'Lorem ipsum dolor sit amet',
			'SalesChannel' => 'Lorem ipsum dolor sit amet',
			'OrderChannel' => 'Lorem ipsum dolor sit amet',
			'ShipServiceLevel' => 'Lorem ipsum dolor sit amet',
			'OrderTotal' => 'Lorem ipsum dolor sit amet',
			'NumberOfItemsShipped' => 'Lorem ipsum dolor sit amet',
			'NumberOfItemsUnshipped' => 'Lorem ipsum dolor sit amet',
			'PaymentExecutionDetail' => 'Lorem ipsum dolor sit amet',
			'PaymentMethod' => 'Lorem ipsum dolor sit amet',
			'PaymentMethodDetails' => 'Lorem ipsum dolor sit amet',
			'MarketplaceId' => 'Lorem ipsum dolor sit amet',
			'ShipmentServiceLevelCategory' => 'Lorem ipsum dolor sit amet',
			'EasyShipShipmentStatus' => 'Lorem ipsum dolor sit amet',
			'CbaDisplayableShippingLabel' => 'Lorem ipsum dolor sit amet',
			'OrderType' => 'Lorem ipsum dolor sit amet',
			'EarliestShipDate' => 'Lorem ipsum dolor sit amet',
			'LatestShipDate' => 'Lorem ipsum dolor sit amet',
			'EarliestDeliveryDate' => '2021-06-04 07:32:39',
			'LatestDeliveryDate' => '2021-06-04 07:32:39',
			'IsBusinessOrder' => 'Lorem ipsum dolor sit amet',
			'IsPrime' => 'Lorem ipsum dolor sit amet',
			'IsPremiumOrder' => 'Lorem ipsum dolor sit amet',
			'IsGlobalExpressEnabled' => 'Lorem ipsum dolor sit amet',
			'ReplacedOrderId' => 'Lorem ipsum dolor sit amet',
			'IsReplacementOrder' => 'Lorem ipsum dolor sit amet',
			'PromiseResponseDueDate' => '2021-06-04 07:32:39',
			'IsEstimatedShipDateSet' => '2021-06-04 07:32:39',
			'IsSoldByAB' => 'Lorem ipsum dolor sit amet',
			'DefaultShipFromLocationAddress' => 'Lorem ipsum dolor sit amet',
			'FulfillmentInstruction' => 'Lorem ipsum dolor sit amet',
			'IsISPU' => 'Lorem ipsum dolor sit amet',
			'created' => '2021-06-04 07:32:39',
			'modified' => '2021-06-04 07:32:39'
		),
	);


}
