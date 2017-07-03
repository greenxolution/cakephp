<div class="listOrders form">
<?php echo $this->Form->create('ListOrder'); ?>
	<fieldset>
		<legend><?php echo __('Add List Order'); ?></legend>
	<?php
		echo $this->Form->input('ShipmentServiceLevelCategory');
		echo $this->Form->input('OrderTotal_CurrencyCode');
		echo $this->Form->input('OrderTotal_Amount');
		echo $this->Form->input('ShipServiceLevel');
		echo $this->Form->input('LatestShipDate');
		echo $this->Form->input('MarketplaceId');
		echo $this->Form->input('SalesChannel');
		echo $this->Form->input('ShippingAddress_Phone');
		echo $this->Form->input('ShippingAddress_PostalCode');
		echo $this->Form->input('ShippingAddress_Name');
		echo $this->Form->input('ShippingAddress_CountryCode');
		echo $this->Form->input('ShippingAddress_StateOrRegion');
		echo $this->Form->input('ShippingAddress_AddressLine1');
		echo $this->Form->input('ShippingAddress_City');
		echo $this->Form->input('EarliestDeliveryDate');
		echo $this->Form->input('ShippedByAmazonTFM');
		echo $this->Form->input('OrderType');
		echo $this->Form->input('BuyerEmail');
		echo $this->Form->input('FulfillmentChannel');
		echo $this->Form->input('LatestDeliveryDate');
		echo $this->Form->input('OrderStatus');
		echo $this->Form->input('BuyerName');
		echo $this->Form->input('LastUpdateDate');
		echo $this->Form->input('EarliestShipDate');
		echo $this->Form->input('PurchaseDate');
		echo $this->Form->input('NumberOfItemsUnshipped');
		echo $this->Form->input('NumberOfItemsShipped');
		echo $this->Form->input('PaymentMethod');
		echo $this->Form->input('AmazonOrderId');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List List Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List List Order Items'), array('controller' => 'list_order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Order Item'), array('controller' => 'list_order_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
