<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AmazonOrderId'); ?></dt>
		<dd>
			<?php echo h($order['Order']['AmazonOrderId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SellerOrderId'); ?></dt>
		<dd>
			<?php echo h($order['Order']['SellerOrderId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PurchaseDate'); ?></dt>
		<dd>
			<?php echo h($order['Order']['PurchaseDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($order['Order']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderStatus'); ?></dt>
		<dd>
			<?php echo h($order['Order']['OrderStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FulfillmentChannel'); ?></dt>
		<dd>
			<?php echo h($order['Order']['FulfillmentChannel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalesChannel'); ?></dt>
		<dd>
			<?php echo h($order['Order']['SalesChannel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderChannel'); ?></dt>
		<dd>
			<?php echo h($order['Order']['OrderChannel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShipServiceLevel'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ShipServiceLevel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderTotal'); ?></dt>
		<dd>
			<?php echo h($order['Order']['OrderTotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberOfItemsShipped'); ?></dt>
		<dd>
			<?php echo h($order['Order']['NumberOfItemsShipped']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberOfItemsUnshipped'); ?></dt>
		<dd>
			<?php echo h($order['Order']['NumberOfItemsUnshipped']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentExecutionDetail'); ?></dt>
		<dd>
			<?php echo h($order['Order']['PaymentExecutionDetail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentMethod'); ?></dt>
		<dd>
			<?php echo h($order['Order']['PaymentMethod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentMethodDetails'); ?></dt>
		<dd>
			<?php echo h($order['Order']['PaymentMethodDetails']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MarketplaceId'); ?></dt>
		<dd>
			<?php echo h($order['Order']['MarketplaceId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShipmentServiceLevelCategory'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ShipmentServiceLevelCategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EasyShipShipmentStatus'); ?></dt>
		<dd>
			<?php echo h($order['Order']['EasyShipShipmentStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CbaDisplayableShippingLabel'); ?></dt>
		<dd>
			<?php echo h($order['Order']['CbaDisplayableShippingLabel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderType'); ?></dt>
		<dd>
			<?php echo h($order['Order']['OrderType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EarliestShipDate'); ?></dt>
		<dd>
			<?php echo h($order['Order']['EarliestShipDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LatestShipDate'); ?></dt>
		<dd>
			<?php echo h($order['Order']['LatestShipDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EarliestDeliveryDate'); ?></dt>
		<dd>
			<?php echo h($order['Order']['EarliestDeliveryDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LatestDeliveryDate'); ?></dt>
		<dd>
			<?php echo h($order['Order']['LatestDeliveryDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsBusinessOrder'); ?></dt>
		<dd>
			<?php echo h($order['Order']['IsBusinessOrder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsPrime'); ?></dt>
		<dd>
			<?php echo h($order['Order']['IsPrime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsPremiumOrder'); ?></dt>
		<dd>
			<?php echo h($order['Order']['IsPremiumOrder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsGlobalExpressEnabled'); ?></dt>
		<dd>
			<?php echo h($order['Order']['IsGlobalExpressEnabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ReplacedOrderId'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ReplacedOrderId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsReplacementOrder'); ?></dt>
		<dd>
			<?php echo h($order['Order']['IsReplacementOrder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PromiseResponseDueDate'); ?></dt>
		<dd>
			<?php echo h($order['Order']['PromiseResponseDueDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsEstimatedShipDateSet'); ?></dt>
		<dd>
			<?php echo h($order['Order']['IsEstimatedShipDateSet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsSoldByAB'); ?></dt>
		<dd>
			<?php echo h($order['Order']['IsSoldByAB']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DefaultShipFromLocationAddress'); ?></dt>
		<dd>
			<?php echo h($order['Order']['DefaultShipFromLocationAddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FulfillmentInstruction'); ?></dt>
		<dd>
			<?php echo h($order['Order']['FulfillmentInstruction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsISPU'); ?></dt>
		<dd>
			<?php echo h($order['Order']['IsISPU']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
	</ul>
</div>
