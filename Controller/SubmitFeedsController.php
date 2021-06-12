<?php
App::uses('AppController', 'Controller');
/**
 * SubmitFeeds Controller
 *
 * @property SubmitFeed $SubmitFeed
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property nComponent $n
 * @property SessionComponent $Session
 */
class SubmitFeedsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	
	public $feedType = array(	'_POST_PRODUCT_PRICING_DATA_' => 'PRICING',
								'_POST_INVENTORY_AVAILABILITY_DATA_' => 'AVAILABILITY');


	public function feed(){

		$feedApi = new \ClouSale\AmazonSellingPartnerAPI\Api\FeedsApi($config);

    $contentType = 'text/xml; charset=UTF-8'; // please pay attention here, the content_type will be used many time

    $feedDocument = $feedApi->createFeedDocument(new \ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentSpecification([
        'content_type' => $contentType,
    ]));

    $feedDocumentId = $feedDocument->getPayload()->getFeedDocumentId();
    $url = $feedDocument->getPayload()->getUrl();
    $key = $feedDocument->getPayload()->getEncryptionDetails()->getKey();
    $key = base64_decode($key, true);
    $initializationVector = base64_decode($feedDocument->getPayload()->getEncryptionDetails()->getInitializationVector(), true);
    $encryptedFeedData = openssl_encrypt(utf8_encode(array2xml([ // array2xml is my private function, you can write your own function
        'data' => 'test',
    ])), 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $initializationVector);

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 90,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => $encryptedFeedData,
        CURLOPT_HTTPHEADER => [
            'Accept: application/xml',
            'Content-Type: ' . $contentType,
        ],
    ));

    $response = curl_exec($curl);

    $error = curl_error($curl);
    $httpcode = (int)curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if ($httpcode >= 200 && $httpcode <= 299) {
        // success
    } else {
        // error
    }
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->response->disableCache();
		
		$this->set('feedType', $this->feedType);
		$this->SubmitFeed->recursive = 0;
		$this->set('submitFeeds', $this->Paginator->paginate());

		Cache::clear();

		debug(Configure::read('SPAPI.refresh_token'));

	
		$marketplace_id = Configure::read('SPAPI.MARKETPLACE.US');

		$config = $this->SubmitFeed->configSPAPI();

		$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\OrdersApi($config);
		// 2019-09-07T-15:50+00
		$marketplace_ids = array($marketplace_id); // string[] | A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces.
		$created_after = "2021-05-01"; // string | A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format.
		$created_before = ""; // string | A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format.
		$last_updated_after = ""; // string | A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
		$last_updated_before = ""; // string | A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format.
		$order_statuses = array(""); // string[] | A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.).
		$fulfillment_channels = array(""); // string[] | A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: FBA (Fulfillment by Amazon); SellerFulfilled (Fulfilled by the seller).
		$payment_methods = array(""); // string[] | A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS).
		$buyer_email = ""; // string | The email address of a buyer. Used to select orders that contain the specified email address.
		$seller_order_id = ""; // string | An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified.
		$max_results_per_page = 56; // int | A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100.
		$easy_ship_shipment_statuses = array(""); // string[] | A list of EasyShipShipmentStatus values. Used to select Easy Ship orders with statuses that match the specified  values. If EasyShipShipmentStatus is specified, only Amazon Easy Ship orders are returned.Possible values: PendingPickUp (Amazon has not yet picked up the package from the seller). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). Delivered (The package has been delivered to the buyer). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturnedToSeller (The package was not delivered to the buyer and was returned to the seller). ReturningToSeller (The package was not delivered to the buyer and is being returned to the seller).
		$next_token = ""; // string | A string token returned in the response of your previous request.
		$amazon_order_ids = array(); // string[] | A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format.


		try {
			
			$result = $apiInstance->getOrders($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $next_token, $amazon_order_ids);
			
		} catch (Exception $e) {
			echo 'Exception when calling OrdersV0Api->getOrders: ', $e->getMessage(), PHP_EOL;
		}

		//debug($orderIds);


		try {

			foreach($result->getPayload()->getOrders() as $key => $order){

				$orderId = $order->getAmazonOrderId();

				$arr_order_detall = $apiInstance->getOrder($orderId);
				//debug($arr_order_detall);

				$resultAddress = $apiInstance->getOrderAddress($orderId);
				debug($resultAddress);
				$resultBuyerInfo = $apiInstance->getOrderBuyerInfo($orderId);
				debug($resultBuyerInfo);

				$resultBuyer = $apiInstance->getOrderAddress($orderId);
	
				$arr_order_item_detall = $apiInstance->getOrderItems($orderId, null);
				//debug($arr_order_item_detall);

				//debug($arr_order_item_detall->getPayload()->getOrderItems()[0]->getSellerSku());

				//debug($arr_order_item_detall->getPayload()->getOrderItems()[0]->getOrderItemId());







				$resultRDT = $apiInstance->getRDT($orderId);
				debug($resultRDT);
				debug($resultRDT['restrictedDataToken']);

				$config = \ClouSale\AmazonSellingPartnerAPI\Configuration::getDefaultConfiguration();
				$config->setAccessToken($resultRDT['restrictedDataToken']);

				$resultAddress = $apiInstance->getOrderAddress($orderId);
				debug($resultAddress);





				

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
				
				debug($arr_orden);
				App::import('Model','Order');
				$order = new Order();
				$order->save($arr_orden);

				//debug($resultItem->getPayload()->getOrderItems()[0]->getSellerSku());

				$arr_orden_item = array();
				//debug($arr_order_item_detall->getPayload()->getOrderItems());
				foreach($arr_order_item_detall->getPayload()->getOrderItems() as $key => $orderitem){	
					$arr_orden_item['OrderItem'][$key]['order_id'] = $orderId;
					$arr_orden_item['OrderItem'][$key]['SellerSKU'] = $orderitem->getSellerSku();
					$arr_orden_item['OrderItem'][$key]['OrderItemId'] = $orderitem->getOrderItemId();
					$arr_orden_item['OrderItem'][$key]['Title'] = $orderitem->getTitle();
					$arr_orden_item['OrderItem'][$key]['QuantityOrdered'] = $orderitem->getQuantityOrdered();
					$arr_orden_item['OrderItem'][$key]['QuantityShipped'] = $orderitem->getQuantityShipped();
					$arr_orden_item['OrderItem'][$key]['ProductInfo'] = $orderitem->getProductInfo()->getNumberOfItems();
					$arr_orden_item['OrderItem'][$key]['PointsGranted'] = $orderitem->getPointsGranted();
					$arr_orden_item['OrderItem'][$key]['ItemPrice'] = $orderitem->getItemPrice()->getAmount();
					$arr_orden_item['OrderItem'][$key]['ShippingPrice'] = $orderitem->getShippingPrice();
					$arr_orden_item['OrderItem'][$key]['ItemTax'] = $orderitem->getItemTax()->getAmount();
					$arr_orden_item['OrderItem'][$key]['ShippingTax'] = $orderitem->getShippingTax();
					$arr_orden_item['OrderItem'][$key]['ShippingDiscount'] = $orderitem->getShippingDiscount();
					$arr_orden_item['OrderItem'][$key]['ShippingDiscountTax'] = $orderitem->getShippingDiscountTax();
					$arr_orden_item['OrderItem'][$key]['PromotionDiscount'] = $orderitem->getPromotionDiscount()->getAmount();
					$arr_orden_item['OrderItem'][$key]['PromotionDiscountTax'] = $orderitem->getPromotionDiscountTax()->getAmount();
					$arr_orden_item['OrderItem'][$key]['PromotionIds'] = $orderitem->getPromotionIds();
					$arr_orden_item['OrderItem'][$key]['CODFee'] = $orderitem->getCODFee();
					$arr_orden_item['OrderItem'][$key]['CODFeeDiscount'] = $orderitem->getCODFeeDiscount();
					$arr_orden_item['OrderItem'][$key]['IsGift'] = $orderitem->getIsGift();
					$arr_orden_item['OrderItem'][$key]['ConditionNote'] = $orderitem->getConditionNote();
					$arr_orden_item['OrderItem'][$key]['ConditionSubtypeId'] = $orderitem->getConditionSubtypeId();
					$arr_orden_item['OrderItem'][$key]['ScheduledDeliveryStartDate'] = $orderitem->getScheduledDeliveryStartDate();
					$arr_orden_item['OrderItem'][$key]['ScheduledDeliveryEndDate'] = $orderitem->getScheduledDeliveryEndDate();
					$arr_orden_item['OrderItem'][$key]['PriceDesignation'] = $orderitem->getPriceDesignation();
					$arr_orden_item['OrderItem'][$key]['TaxCollection'] = $orderitem->getTaxCollection()->getResponsibleParty();
					$arr_orden_item['OrderItem'][$key]['SerialNumberRequired'] = $orderitem->getSerialNumberRequired();
					$arr_orden_item['OrderItem'][$key]['IsTransparency'] = $orderitem->getIsTransparency();
					$arr_orden_item['OrderItem'][$key]['IossNumber'] = $orderitem->getIossNumber();
					//$arr_orden_item['OrderItem'][$key]['StoreChainStoreId'] = $orderitem->getStoreChainStoreId();
					$arr_orden_item['OrderItem'][$key]['DeemedResellerCategory'] = $orderitem->getDeemedResellerCategory();
				}

				debug($arr_orden_item);

			}

		} catch (Exception $e) {
			echo 'Exception when calling OrdersV0Api: ', $e->getMessage(), PHP_EOL;
		}

		/** getListingOffers | getItemOffers 

		$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\ProductPricingApi($config);

		try {
			// $result = $apiInstance->getItemOffers(Configure::read('SPAPI.MARKETPLACE.US'), 'New', 'ENT18613');
			$result = $apiInstance->getListingOffers(Configure::read('SPAPI.MARKETPLACE.US'), 'New', 'ENT18613');

			// debug($result);
			

			// debug($result->getPayload()->getOffers());

			debug($result->getPayload()->getOffers()[0]->getMyOffer());

			debug($result->getPayload()->getOffers()[0]->getListingPrice());


			debug($result->getPayload()->getOffers()[1]->getMyOffer());
			debug($result->getPayload()->getOffers()[2]->getMyOffer());

			// debug($result->getPayload()->getOffers());

			foreach($result->getPayload()->getOffers() as $key => $offer){

				if($offer->getMyOffer() == true){

					debug($offer->getListingPrice()->getAmount());
				}

			}

			$amount = 0;

			foreach($result->getPayload()->getSummary()->getLowestPrices() as $key => $lowerprice){

				if($lowerprice->condition == 'new'){

					if($amount == 0){

						$amount = $lowerprice->LandedPrice->Amount;


					}
					else {

						if( $amount > $lowerprice->LandedPrice->Amount){

							$amount = $lowerprice->LandedPrice->Amount;
						}

					}
				}
			}

			debug($amount);

			// debug($result->getPayload()->getOffers()[1]->getMyOffer());

			debug($result);

			
		} catch (\Throwable $th) {
			echo 'Exception when calling ProductPricingApi->getItemOffers: ', $e->getMessage(), PHP_EOL;
		}

		** END: getListingOffers | getItemOffers */

		// $apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\CatalogApi($config);


		// // $result = $apiInstance->getCatalogItem($marketplace_id, $asin);

		// // debug($result->getPayload()->getAttributeSets()[0]->getTitle());
		
		// // debug($result->getPayload()->getAttributeSets());

		// $query = ""; // string | Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
		// $query_context_id = ""; // string | An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
		// $seller_sku = ""; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
		// $upc = ""; // string | A 12-digit bar code used for retail packaging.
		// $ean = ""; // string | A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
		// $isbn = "1934429953"; // string | The unique commercial book identifier used to identify books internationally.
		// $jan = ""; // string | A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.

		// try {
		// 	$results = $apiInstance->listCatalogItems($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan);
		// 	debug($results,2);

		// 	foreach ($results->getPayload()->getItems() as $value) {

		// 		// debug($value);

		// 		// debug($value->Identifiers->MarketplaceASIN->MarketplaceId  );
		// 		// debug($value->Identifiers->MarketplaceASIN->MarketplaceId->ASIN  );

		// 		// debug($value->AttributeSets[0]->Title );
		// 		// debug($value->AttributeSets[0]->ListPrice->Amount );
		// 		// debug($value->AttributeSets[0]->NumberOfPages );
		// 		// debug($value->AttributeSets[0]->PublicationDate  );
		// 		# code...
		// 	}
		// 	debug('algo nuevo');
		// } catch (Exception $e) {
		// 	echo 'Exception when calling CatalogApi->listCatalogItems: ', $e->getMessage(), PHP_EOL;
		// }


		// $apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\ProductPricingApi($config);


		// $marketplace_id = $marketplace_id; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
		// $item_condition = "New"; // string | Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
		// $asin = "1934429953"; // string | The Amazon Standard Identification Number (ASIN) of the item.
		
		// try {
		// 	$result = $apiInstance->getItemOffers($marketplace_id, $item_condition, $asin);
		// 	// debug($result);

		// 	// debug($result->getPayload());

		// 	debug($result->getPayload()->getOffers());

		// 	debug($result->getPayload()->getOffers()[0]->getListingPrice()->getAmount());
		// } catch (Exception $e) {
		// 	echo 'Exception when calling ProductPricingApi->getItemOffers: ', $e->getMessage(), PHP_EOL;
		// }
////////////////////////////////////////////////////////////////////////////////////////////////////////////



	// $items = array('MerchantIdentifier'=>Configure::read('SPAPI.MerchantIdentifier'), 'Messages' => array(
	// 	array('OperationType'=>'Update', 'ViewMatchInv'=>array('SKU'=>'45-87DE-NQ23', 'Quantity'=>'11','FulfillmentLatency'=>'1'))
	// ));

	// debug($items);

	// debug($this->SubmitFeed->creating_POST_INVENTORY_AVAILABILITY_DATA($items));


	// $this->SubmitFeed->submitInventoryQuantity($items);

	// exit();


	

		
	}

	public function execute(){
		
		App::import('Model','ProcessingReport');
		
		$processingReport = new ProcessingReport();
		
		$processingReport->saveProcessingReportResult();
		
		return $this->redirect(
				array('controller' => 'SubmitFeeds', 'action' => 'index')
		);
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubmitFeed->exists($id)) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		$options = array('conditions' => array('SubmitFeed.' . $this->SubmitFeed->primaryKey => $id));
		$this->set('submitFeed', $this->SubmitFeed->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubmitFeed->create();
			if ($this->SubmitFeed->save($this->request->data)) {
				$this->Flash->success(__('The submit feed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The submit feed could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubmitFeed->exists($id)) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubmitFeed->save($this->request->data)) {
				$this->Flash->success(__('The submit feed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The submit feed could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubmitFeed.' . $this->SubmitFeed->primaryKey => $id));
			$this->request->data = $this->SubmitFeed->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubmitFeed->id = $id;
		if (!$this->SubmitFeed->exists()) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubmitFeed->delete()) {
			$this->Flash->success(__('The submit feed has been deleted.'));
		} else {
			$this->Flash->error(__('The submit feed could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
