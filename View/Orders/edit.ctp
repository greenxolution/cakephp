<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Edit Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('AmazonOrderId');
		echo $this->Form->input('SellerOrderId');
		echo $this->Form->input('PurchaseDate');
		echo $this->Form->input('LastUpdateDate');
		echo $this->Form->input('OrderStatus');
		echo $this->Form->input('FulfillmentChannel');
		echo $this->Form->input('SalesChannel');
		echo $this->Form->input('OrderChannel');
		echo $this->Form->input('ShipServiceLevel');
		echo $this->Form->input('OrderTotal');
		echo $this->Form->input('NumberOfItemsShipped');
		echo $this->Form->input('NumberOfItemsUnshipped');
		echo $this->Form->input('PaymentExecutionDetail');
		echo $this->Form->input('PaymentMethod');
		echo $this->Form->input('PaymentMethodDetails');
		echo $this->Form->input('MarketplaceId');
		echo $this->Form->input('ShipmentServiceLevelCategory');
		echo $this->Form->input('EasyShipShipmentStatus');
		echo $this->Form->input('CbaDisplayableShippingLabel');
		echo $this->Form->input('OrderType');
		echo $this->Form->input('EarliestShipDate');
		echo $this->Form->input('LatestShipDate');
		echo $this->Form->input('EarliestDeliveryDate');
		echo $this->Form->input('LatestDeliveryDate');
		echo $this->Form->input('IsBusinessOrder');
		echo $this->Form->input('IsPrime');
		echo $this->Form->input('IsPremiumOrder');
		echo $this->Form->input('IsGlobalExpressEnabled');
		echo $this->Form->input('ReplacedOrderId');
		echo $this->Form->input('IsReplacementOrder');
		echo $this->Form->input('PromiseResponseDueDate');
		echo $this->Form->input('IsEstimatedShipDateSet');
		echo $this->Form->input('IsSoldByAB');
		echo $this->Form->input('DefaultShipFromLocationAddress');
		echo $this->Form->input('FulfillmentInstruction');
		echo $this->Form->input('IsISPU');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Order.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Order.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
	</ul>
</div>
