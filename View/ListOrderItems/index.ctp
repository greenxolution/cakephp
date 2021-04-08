<div class="listOrderItems index">
	<h2><?php echo __('List Order Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ASIN'); ?></th>
			<th><?php echo $this->Paginator->sort('SellerSKU'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderItemId'); ?></th>
			<th><?php echo $this->Paginator->sort('Title'); ?></th>
			<th><?php echo $this->Paginator->sort('QuantityOrdered'); ?></th>
			<th><?php echo $this->Paginator->sort('QuantityShipped'); ?></th>
			<th><?php echo $this->Paginator->sort('ItemPrice_CurrencyCode'); ?></th>
			<th><?php echo $this->Paginator->sort('ItemPrice_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingPrice_CurrencyCode'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingPrice_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('GiftWrapPrice_CurrencyCode'); ?></th>
			<th><?php echo $this->Paginator->sort('GiftWrapPrice_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('ItemTax_CurrencyCode'); ?></th>
			<th><?php echo $this->Paginator->sort('ItemTax_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingTax_CurrencyCode'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingTax_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('GiftWrapTax_CurrencyCode'); ?></th>
			<th><?php echo $this->Paginator->sort('GiftWrapTax_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingDiscount_CurrencyCode'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingDiscount_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('PromotionDiscount_CurrencyCode'); ?></th>
			<th><?php echo $this->Paginator->sort('PromotionDiscount_Amount'); ?></th>
			<th><?php echo $this->Paginator->sort('PromotionIds'); ?></th>
			<th><?php echo $this->Paginator->sort('ConditionNote'); ?></th>
			<th><?php echo $this->Paginator->sort('ConditionId'); ?></th>
			<th><?php echo $this->Paginator->sort('ConditionSubtypeId'); ?></th>
			<th><?php echo $this->Paginator->sort('list_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($listOrderItems as $listOrderItem): ?>
	<tr>
		<td><?php echo h($listOrderItem['ListOrderItem']['id']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ASIN']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['SellerSKU']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['OrderItemId']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['Title']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['QuantityOrdered']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['QuantityShipped']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ItemPrice_CurrencyCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ItemPrice_Amount']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ShippingPrice_CurrencyCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ShippingPrice_Amount']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['GiftWrapPrice_CurrencyCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['GiftWrapPrice_Amount']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ItemTax_CurrencyCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ItemTax_Amount']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ShippingTax_CurrencyCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ShippingTax_Amount']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['GiftWrapTax_CurrencyCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['GiftWrapTax_Amount']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ShippingDiscount_CurrencyCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ShippingDiscount_Amount']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['PromotionDiscount_CurrencyCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['PromotionDiscount_Amount']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['PromotionIds']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ConditionNote']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ConditionId']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['ConditionSubtypeId']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($listOrderItem['ListOrder']['AmazonOrderId'], array('controller' => 'list_orders', 'action' => 'view', $listOrderItem['ListOrder']['id'])); ?>
		</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['created']); ?>&nbsp;</td>
		<td><?php echo h($listOrderItem['ListOrderItem']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $listOrderItem['ListOrderItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $listOrderItem['ListOrderItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $listOrderItem['ListOrderItem']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $listOrderItem['ListOrderItem']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New List Order Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List List Orders'), array('controller' => 'list_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Order'), array('controller' => 'list_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
