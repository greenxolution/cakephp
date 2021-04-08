<div class="listOrders view">
<h2><?php echo __('List Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShipmentServiceLevelCategory'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShipmentServiceLevelCategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderTotal CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['OrderTotal_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderTotal Amount'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['OrderTotal_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShipServiceLevel'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShipServiceLevel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LatestShipDate'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['LatestShipDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MarketplaceId'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['MarketplaceId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalesChannel'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['SalesChannel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingAddress Phone'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_Phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingAddress PostalCode'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_PostalCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingAddress Name'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingAddress CountryCode'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_CountryCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingAddress StateOrRegion'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_StateOrRegion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingAddress AddressLine1'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_AddressLine1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingAddress City'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EarliestDeliveryDate'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['EarliestDeliveryDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippedByAmazonTFM'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippedByAmazonTFM']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderType'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['OrderType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BuyerEmail'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['BuyerEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FulfillmentChannel'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['FulfillmentChannel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LatestDeliveryDate'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['LatestDeliveryDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderStatus'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['OrderStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BuyerName'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['BuyerName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EarliestShipDate'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['EarliestShipDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PurchaseDate'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['PurchaseDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberOfItemsUnshipped'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['NumberOfItemsUnshipped']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumberOfItemsShipped'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['NumberOfItemsShipped']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentMethod'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['PaymentMethod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AmazonOrderId'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['AmazonOrderId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit List Order'), array('action' => 'edit', $listOrder['ListOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete List Order'), array('action' => 'delete', $listOrder['ListOrder']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $listOrder['ListOrder']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List List Order Items'), array('controller' => 'list_order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Order Item'), array('controller' => 'list_order_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related List Order Items'); ?></h3>
	<?php if (!empty($listOrder['ListOrderItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('ASIN'); ?></th>
		<th><?php echo __('SellerSKU'); ?></th>
		<th><?php echo __('OrderItemId'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('QuantityOrdered'); ?></th>
		<th><?php echo __('QuantityShipped'); ?></th>
		<th><?php echo __('ItemPrice CurrencyCode'); ?></th>
		<th><?php echo __('ItemPrice Amount'); ?></th>
		<th><?php echo __('ShippingPrice CurrencyCode'); ?></th>
		<th><?php echo __('ShippingPrice Amount'); ?></th>
		<th><?php echo __('GiftWrapPrice CurrencyCode'); ?></th>
		<th><?php echo __('GiftWrapPrice Amount'); ?></th>
		<th><?php echo __('ItemTax CurrencyCode'); ?></th>
		<th><?php echo __('ItemTax Amount'); ?></th>
		<th><?php echo __('ShippingTax CurrencyCode'); ?></th>
		<th><?php echo __('ShippingTax Amount'); ?></th>
		<th><?php echo __('GiftWrapTax CurrencyCode'); ?></th>
		<th><?php echo __('GiftWrapTax Amount'); ?></th>
		<th><?php echo __('ShippingDiscount CurrencyCode'); ?></th>
		<th><?php echo __('ShippingDiscount Amount'); ?></th>
		<th><?php echo __('PromotionDiscount CurrencyCode'); ?></th>
		<th><?php echo __('PromotionDiscount Amount'); ?></th>
		<th><?php echo __('PromotionIds'); ?></th>
		<th><?php echo __('ConditionNote'); ?></th>
		<th><?php echo __('ConditionId'); ?></th>
		<th><?php echo __('ConditionSubtypeId'); ?></th>
		<th><?php echo __('List Order Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($listOrder['ListOrderItem'] as $listOrderItem): ?>
		<tr>
			<td><?php echo $listOrderItem['id']; ?></td>
			<td><?php echo $listOrderItem['ASIN']; ?></td>
			<td><?php echo $listOrderItem['SellerSKU']; ?></td>
			<td><?php echo $listOrderItem['OrderItemId']; ?></td>
			<td><?php echo $listOrderItem['Title']; ?></td>
			<td><?php echo $listOrderItem['QuantityOrdered']; ?></td>
			<td><?php echo $listOrderItem['QuantityShipped']; ?></td>
			<td><?php echo $listOrderItem['ItemPrice_CurrencyCode']; ?></td>
			<td><?php echo $listOrderItem['ItemPrice_Amount']; ?></td>
			<td><?php echo $listOrderItem['ShippingPrice_CurrencyCode']; ?></td>
			<td><?php echo $listOrderItem['ShippingPrice_Amount']; ?></td>
			<td><?php echo $listOrderItem['GiftWrapPrice_CurrencyCode']; ?></td>
			<td><?php echo $listOrderItem['GiftWrapPrice_Amount']; ?></td>
			<td><?php echo $listOrderItem['ItemTax_CurrencyCode']; ?></td>
			<td><?php echo $listOrderItem['ItemTax_Amount']; ?></td>
			<td><?php echo $listOrderItem['ShippingTax_CurrencyCode']; ?></td>
			<td><?php echo $listOrderItem['ShippingTax_Amount']; ?></td>
			<td><?php echo $listOrderItem['GiftWrapTax_CurrencyCode']; ?></td>
			<td><?php echo $listOrderItem['GiftWrapTax_Amount']; ?></td>
			<td><?php echo $listOrderItem['ShippingDiscount_CurrencyCode']; ?></td>
			<td><?php echo $listOrderItem['ShippingDiscount_Amount']; ?></td>
			<td><?php echo $listOrderItem['PromotionDiscount_CurrencyCode']; ?></td>
			<td><?php echo $listOrderItem['PromotionDiscount_Amount']; ?></td>
			<td><?php echo $listOrderItem['PromotionIds']; ?></td>
			<td><?php echo $listOrderItem['ConditionNote']; ?></td>
			<td><?php echo $listOrderItem['ConditionId']; ?></td>
			<td><?php echo $listOrderItem['ConditionSubtypeId']; ?></td>
			<td><?php echo $listOrderItem['list_order_id']; ?></td>
			<td><?php echo $listOrderItem['created']; ?></td>
			<td><?php echo $listOrderItem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'list_order_items', 'action' => 'view', $listOrderItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'list_order_items', 'action' => 'edit', $listOrderItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'list_order_items', 'action' => 'delete', $listOrderItem['id']), array('confirm' => __('Are you sure you want to delete # %s?', $listOrderItem['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New List Order Item'), array('controller' => 'list_order_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
