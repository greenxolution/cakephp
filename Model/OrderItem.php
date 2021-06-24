<?php
App::uses('AppModel', 'Model');
/**
 * OrderItem Model
 *
 * @property Order $Order
 */
class OrderItem extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'order_item';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	public function insertRecord($ordern_id, $arr_order_item_detall){

		$arr_orden_item = array();
		//debug($arr_order_item_detall->getPayload()->getOrderItems());
		foreach($arr_order_item_detall->getPayload()->getOrderItems() as $key => $orderitem){	
			$arr_orden_item[$key]['OrderItem']['order_id'] = $ordern_id;
			$arr_orden_item[$key]['OrderItem']['SellerSKU'] = $orderitem->getSellerSku();
			$arr_orden_item[$key]['OrderItem']['OrderItemId'] = $orderitem->getOrderItemId();
			$arr_orden_item[$key]['OrderItem']['Title'] = $orderitem->getTitle();
			$arr_orden_item[$key]['OrderItem']['QuantityOrdered'] = $orderitem->getQuantityOrdered();
			$arr_orden_item[$key]['OrderItem']['QuantityShipped'] = $orderitem->getQuantityShipped();
			$arr_orden_item[$key]['OrderItem']['ProductInfo'] = $orderitem->getProductInfo()->getNumberOfItems();
			$arr_orden_item[$key]['OrderItem']['PointsGranted'] = $orderitem->getPointsGranted();
			$arr_orden_item[$key]['OrderItem']['ItemPrice'] = $orderitem->getItemPrice()->getAmount();
			$arr_orden_item[$key]['OrderItem']['ShippingPrice'] = $orderitem->getShippingPrice();
			$arr_orden_item[$key]['OrderItem']['ItemTax'] = $orderitem->getItemTax()->getAmount();
			$arr_orden_item[$key]['OrderItem']['ShippingTax'] = $orderitem->getShippingTax();
			$arr_orden_item[$key]['OrderItem']['ShippingDiscount'] = $orderitem->getShippingDiscount();
			$arr_orden_item[$key]['OrderItem']['ShippingDiscountTax'] = $orderitem->getShippingDiscountTax();
			$arr_orden_item[$key]['OrderItem']['PromotionDiscount'] = $orderitem->getPromotionDiscount()->getAmount();
			$arr_orden_item[$key]['OrderItem']['PromotionDiscountTax'] = $orderitem->getPromotionDiscountTax()->getAmount();
			$arr_orden_item[$key]['OrderItem']['PromotionIds'] = $orderitem->getPromotionIds();
			$arr_orden_item[$key]['OrderItem']['CODFee'] = $orderitem->getCODFee();
			$arr_orden_item[$key]['OrderItem']['CODFeeDiscount'] = $orderitem->getCODFeeDiscount();
			$arr_orden_item[$key]['OrderItem']['IsGift'] = $orderitem->getIsGift();
			$arr_orden_item[$key]['OrderItem']['ConditionNote'] = $orderitem->getConditionNote();
			$arr_orden_item[$key]['OrderItem']['ConditionSubtypeId'] = $orderitem->getConditionSubtypeId();
			$arr_orden_item[$key]['OrderItem']['ConditionId'] = $orderitem->getConditionId();
			$arr_orden_item[$key]['OrderItem']['ScheduledDeliveryStartDate'] = $orderitem->getScheduledDeliveryStartDate();
			$arr_orden_item[$key]['OrderItem']['ScheduledDeliveryEndDate'] = $orderitem->getScheduledDeliveryEndDate();
			$arr_orden_item[$key]['OrderItem']['PriceDesignation'] = $orderitem->getPriceDesignation();
			$arr_orden_item[$key]['OrderItem']['TaxCollection'] = $orderitem->getTaxCollection()->getResponsibleParty();
			$arr_orden_item[$key]['OrderItem']['SerialNumberRequired'] = $orderitem->getSerialNumberRequired();
			$arr_orden_item[$key]['OrderItem']['IsTransparency'] = $orderitem->getIsTransparency();
			$arr_orden_item[$key]['OrderItem']['IossNumber'] = $orderitem->getIossNumber();
			//$arr_orden_item[$key]['OrderItem']['StoreChainStoreId'] = $orderitem->getStoreChainStoreId();
			$arr_orden_item[$key]['OrderItem']['DeemedResellerCategory'] = $orderitem->getDeemedResellerCategory();
		}

		//debug($arr_orden_item);
		$this->create();
		
		$this->saveAll($arr_orden_item);

		return $arr_orden_item;
	}
}
