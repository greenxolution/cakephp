<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('AmazonOrderId'); ?></th>
			<th><?php echo $this->Paginator->sort('SellerOrderId'); ?></th>
			<th><?php echo $this->Paginator->sort('PurchaseDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('FulfillmentChannel'); ?></th>
			<th><?php echo $this->Paginator->sort('SalesChannel'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderChannel'); ?></th>
			<th><?php echo $this->Paginator->sort('ShipServiceLevel'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderTotal'); ?></th>
			<th><?php echo $this->Paginator->sort('NumberOfItemsShipped'); ?></th>
			<th><?php echo $this->Paginator->sort('NumberOfItemsUnshipped'); ?></th>
			<th><?php echo $this->Paginator->sort('PaymentExecutionDetail'); ?></th>
			<th><?php echo $this->Paginator->sort('PaymentMethod'); ?></th>
			<th><?php echo $this->Paginator->sort('PaymentMethodDetails'); ?></th>
			<th><?php echo $this->Paginator->sort('MarketplaceId'); ?></th>
			<th><?php echo $this->Paginator->sort('ShipmentServiceLevelCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('EasyShipShipmentStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('CbaDisplayableShippingLabel'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderType'); ?></th>
			<th><?php echo $this->Paginator->sort('EarliestShipDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LatestShipDate'); ?></th>
			<th><?php echo $this->Paginator->sort('EarliestDeliveryDate'); ?></th>
			<th><?php echo $this->Paginator->sort('LatestDeliveryDate'); ?></th>
			<th><?php echo $this->Paginator->sort('IsBusinessOrder'); ?></th>
			<th><?php echo $this->Paginator->sort('IsPrime'); ?></th>
			<th><?php echo $this->Paginator->sort('IsPremiumOrder'); ?></th>
			<th><?php echo $this->Paginator->sort('IsGlobalExpressEnabled'); ?></th>
			<th><?php echo $this->Paginator->sort('ReplacedOrderId'); ?></th>
			<th><?php echo $this->Paginator->sort('IsReplacementOrder'); ?></th>
			<th><?php echo $this->Paginator->sort('PromiseResponseDueDate'); ?></th>
			<th><?php echo $this->Paginator->sort('IsEstimatedShipDateSet'); ?></th>
			<th><?php echo $this->Paginator->sort('IsSoldByAB'); ?></th>
			<th><?php echo $this->Paginator->sort('DefaultShipFromLocationAddress'); ?></th>
			<th><?php echo $this->Paginator->sort('FulfillmentInstruction'); ?></th>
			<th><?php echo $this->Paginator->sort('IsISPU'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['AmazonOrderId']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['SellerOrderId']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['PurchaseDate']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['OrderStatus']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['FulfillmentChannel']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['SalesChannel']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['OrderChannel']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ShipServiceLevel']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['OrderTotal']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['NumberOfItemsShipped']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['NumberOfItemsUnshipped']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['PaymentExecutionDetail']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['PaymentMethod']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['PaymentMethodDetails']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['MarketplaceId']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ShipmentServiceLevelCategory']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['EasyShipShipmentStatus']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['CbaDisplayableShippingLabel']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['OrderType']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['EarliestShipDate']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['LatestShipDate']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['EarliestDeliveryDate']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['LatestDeliveryDate']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['IsBusinessOrder']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['IsPrime']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['IsPremiumOrder']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['IsGlobalExpressEnabled']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ReplacedOrderId']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['IsReplacementOrder']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['PromiseResponseDueDate']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['IsEstimatedShipDateSet']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['IsSoldByAB']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['DefaultShipFromLocationAddress']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['FulfillmentInstruction']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['IsISPU']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
	</ul>
</div>
