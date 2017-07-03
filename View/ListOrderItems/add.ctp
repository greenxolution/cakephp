<div class="listOrderItems form">
<?php echo $this->Form->create('ListOrderItem'); ?>
	<fieldset>
		<legend><?php echo __('Add List Order Item'); ?></legend>
	<?php
		echo $this->Form->input('ASIN');
		echo $this->Form->input('SellerSKU');
		echo $this->Form->input('OrderItemId');
		echo $this->Form->input('Title');
		echo $this->Form->input('QuantityOrdered');
		echo $this->Form->input('QuantityShipped');
		echo $this->Form->input('ItemPrice_CurrencyCode');
		echo $this->Form->input('ItemPrice_Amount');
		echo $this->Form->input('ShippingPrice_CurrencyCode');
		echo $this->Form->input('ShippingPrice_Amount');
		echo $this->Form->input('GiftWrapPrice_CurrencyCode');
		echo $this->Form->input('GiftWrapPrice_Amount');
		echo $this->Form->input('ItemTax_CurrencyCode');
		echo $this->Form->input('ItemTax_Amount');
		echo $this->Form->input('ShippingTax_CurrencyCode');
		echo $this->Form->input('ShippingTax_Amount');
		echo $this->Form->input('GiftWrapTax_CurrencyCode');
		echo $this->Form->input('GiftWrapTax_Amount');
		echo $this->Form->input('ShippingDiscount_CurrencyCode');
		echo $this->Form->input('ShippingDiscount_Amount');
		echo $this->Form->input('PromotionDiscount_CurrencyCode');
		echo $this->Form->input('PromotionDiscount_Amount');
		echo $this->Form->input('PromotionIds');
		echo $this->Form->input('ConditionNote');
		echo $this->Form->input('ConditionId');
		echo $this->Form->input('ConditionSubtypeId');
		echo $this->Form->input('list_order_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List List Order Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List List Orders'), array('controller' => 'list_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Order'), array('controller' => 'list_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
