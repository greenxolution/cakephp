<?php
App::uses('AppModel', 'Model');
/**
 * Order Model
 *
 */
class Order extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'order';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	public $hasMany = array(
        'OrderItem' => array(
            'className' => 'OrderItem',
            'order' => 'Recipe.created DESC'
        )
    );

	public $validate = array(
		'AmazonOrderId'    => array(
				'notBlank' => array(
						'rule' => array('notBlank'),
						'message' => 'The AmazonOrderId is require'
				),
				'unique' => array(
						'rule' => array('isUnique'),
						'message' => 'The AmazonOrderId is unique'
				)
		)
);

	/**
	 * 
	 * @date: 2021-06-03
	 * 
	 * Return Orders
	 */
	public function getOrders($result = null){

		return  $result->getPayload()->getOrders();
	}



	/**
	 * 
	 * @date: 2021-06-03
	 * 
	 * Returns result of getOrders
	 */
	public function getOrdersResult($created_after = '', $created_before = ''){

		App::import('Model','Submit');

		$submit = new Submit();

		$config = $submit->configSPAPI();

		$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\OrdersApi($config);

		$orderResult = array();

		$marketplace_ids = array($marketplace_id); // string[] | A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces.
		$created_after = "2021-05-01"; // string | A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format.
		$created_before = "2021-06-01"; // string | A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format.
		$last_updated_after = ""; // string | A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
		$last_updated_before = ""; // string | A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
		$order_statuses = array(""); // string[] | A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.).
		$fulfillment_channels = array(""); // string[] | A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: FBA (Fulfillment by Amazon); SellerFulfilled (Fulfilled by the seller).
		$payment_methods = array(""); // string[] | A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS).
		$buyer_email = ""; // string | The email address of a buyer. Used to select orders that contain the specified email address.
		$seller_order_id = ""; // string | An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified.
		$max_results_per_page = 100; // int | A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100.
		$easy_ship_shipment_statuses = array(""); // string[] | A list of EasyShipShipmentStatus values. Used to select Easy Ship orders with statuses that match the specified  values. If EasyShipShipmentStatus is specified, only Amazon Easy Ship orders are returned.Possible values: PendingPickUp (Amazon has not yet picked up the package from the seller). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). Delivered (The package has been delivered to the buyer). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturnedToSeller (The package was not delivered to the buyer and was returned to the seller). ReturningToSeller (The package was not delivered to the buyer and is being returned to the seller).
		$next_token = ""; // string | A string token returned in the response of your previous request.
		$amazon_order_ids = array(); // string[] | A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format.


		try {

			$orderResult = $apiInstance->getOrders($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $next_token, $amazon_order_ids);
			
		} catch (Exception $e) {

			debug ('Exception when calling OrdersV0Api->getOrders: '. $e->getMessage());
		}

		return $orderResult;

	}


	public function insertRecord($orderId, $arr_order_detall){

		$arr_orden = array();
		$arr_orden['Order']['AmazonOrderId'] = $orderId;
		$arr_orden['Order']['SellerOrderId'] = $arr_order_detall->getPayload()->getSellerOrderId();
		$arr_orden['Order']['PurchaseDate'] = $arr_order_detall->getPayload()->getPurchaseDate();
		$arr_orden['Order']['LastUpdateDate'] = $arr_order_detall->getPayload()->getLastUpdateDate();
		$arr_orden['Order']['OrderStatus'] = $arr_order_detall->getPayload()->getOrderStatus();
		$arr_orden['Order']['FulfillmentChannel	'] = $arr_order_detall->getPayload()->getFulfillmentChannel();
		$arr_orden['Order']['SalesChannel'] = $arr_order_detall->getPayload()->getSalesChannel();
		$arr_orden['Order']['OrderChannel'] = $arr_order_detall->getPayload()->getOrderChannel();
		$arr_orden['Order']['ShipServiceLevel'] = $arr_order_detall->getPayload()->getShipServiceLevel();
		$arr_orden['Order']['OrderTotal'] = $arr_order_detall->getPayload()->getOrderTotal()->getAmount();
		$arr_orden['Order']['NumberOfItemsShipped'] = $arr_order_detall->getPayload()->getNumberOfItemsShipped();
		$arr_orden['Order']['NumberOfItemsUnshipped'] = $arr_order_detall->getPayload()->getNumberOfItemsUnshipped();
		$arr_orden['Order']['PaymentExecutionDetail'] = $arr_order_detall->getPayload()->getPaymentExecutionDetail();
		$arr_orden['Order']['PaymentMethod'] = $arr_order_detall->getPayload()->getPaymentMethod();
		$arr_orden['Order']['PaymentMethodDetails'] = $arr_order_detall->getPayload()->getPaymentMethodDetails()[0];
		$arr_orden['Order']['MarketplaceId'] = $arr_order_detall->getPayload()->getMarketplaceId();
		$arr_orden['Order']['ShipmentServiceLevelCategory'] = $arr_order_detall->getPayload()->getShipmentServiceLevelCategory();
		$arr_orden['Order']['EasyShipShipmentStatus'] = $arr_order_detall->getPayload()->getEasyShipShipmentStatus();
		$arr_orden['Order']['CbaDisplayableShippingLabel'] = $arr_order_detall->getPayload()->getCbaDisplayableShippingLabel();
		$arr_orden['Order']['OrderType'] = $arr_order_detall->getPayload()->getOrderType();
		$arr_orden['Order']['EarliestShipDate'] = $arr_order_detall->getPayload()->getEarliestShipDate();
		$arr_orden['Order']['LatestShipDate'] = $arr_order_detall->getPayload()->getLatestShipDate();
		$arr_orden['Order']['EarliestDeliveryDate'] = date("Y-m-d H:i:s", strtotime($arr_order_detall->getPayload()->getEarliestDeliveryDate()));
		$arr_orden['Order']['LatestDeliveryDate'] = date("Y-m-d H:i:s", strtotime($arr_order_detall->getPayload()->getLatestDeliveryDate()));
		$arr_orden['Order']['IsBusinessOrder'] = $arr_order_detall->getPayload()->getIsBusinessOrder();
		$arr_orden['Order']['IsPrime'] = $arr_order_detall->getPayload()->getIsPrime();
		$arr_orden['Order']['IsPremiumOrder'] = $arr_order_detall->getPayload()->getIsPremiumOrder();
		$arr_orden['Order']['IsGlobalExpressEnabled'] = $arr_order_detall->getPayload()->getIsGlobalExpressEnabled();
		$arr_orden['Order']['ReplacedOrderId'] = $arr_order_detall->getPayload()->getReplacedOrderId();
		$arr_orden['Order']['IsReplacementOrder'] = $arr_order_detall->getPayload()->getIsReplacementOrder();
		$arr_orden['Order']['PromiseResponseDueDate'] = date("Y-m-d H:i:s", strtotime($arr_order_detall->getPayload()->getPromiseResponseDueDate()));
		$arr_orden['Order']['IsEstimatedShipDateSet'] = date("Y-m-d H:i:s", strtotime($arr_order_detall->getPayload()->getIsEstimatedShipDateSet()));
		$arr_orden['Order']['IsSoldByAB'] = $arr_order_detall->getPayload()->getIsSoldByAB();
		//$arr_orden['Order']['DefaultShipFromLocationAddress'] = $arr_order_detall->getPayload()->getDefaultShipFromLocationAddress();
		$arr_orden['Order']['FulfillmentInstruction'] = $arr_order_detall->getPayload()->getFulfillmentInstruction();
		//$arr_orden['Order']['IsISPU'] = $arr_order_detall->getPayload()->getIsISPU();
		
		//debug($arr_orden);
		
		$this->create();
		
		if($this->save($arr_orden)){
			return $this->id;
		}

		return false;
		
	}

}
