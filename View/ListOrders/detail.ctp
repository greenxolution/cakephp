<div class="listOrders view">
<h2><?php echo __('List Order'); ?></h2>
	<dl>

		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_Phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BuyerEmail'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['BuyerEmail']); ?>
			&nbsp;
		</dd>		
		<dt><?php echo __('BuyerName'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['BuyerName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingAddress Name'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AddressLine1'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_AddressLine1']); ?>
			&nbsp;
		</dd>		
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_City']); ?>
			&nbsp;
		</dd>	
		<dt><?php echo __('StateOrRegion'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_StateOrRegion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CountryCode'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_CountryCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PostalCode'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['ShippingAddress_PostalCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AmazonOrderId'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['AmazonOrderId']); ?>
			&nbsp;
		</dd>	
		<dt><?php echo __('PurchaseDate'); ?></dt>
		<dd>
			<?php echo h($listOrder['ListOrder']['PurchaseDate']); ?>
			&nbsp;
		</dd>					

	</dl>
	<dl>
	<dt><?php echo __('ITEMS'); ?></dt>
	<?php 
		foreach($entrenueProduct as $item){
// 			debug($item);
		?>
		<dt><?php echo __('SKU'); ?></dt>
		<dd>
			<?php echo h($item['EntrenueProduct']['SKU']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ASIN'); ?></dt>
		<dd>
			<?php echo h($item['EntrenueProduct']['ASIN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MODEL'); ?></dt>
		<dd>
			<?php echo h($item['EntrenueProduct']['MODEL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UPC'); ?></dt>
		<dd>
			<?php echo h($item['EntrenueProduct']['UPC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NAME'); ?></dt>
		<dd>
			<?php echo h($item['EntrenueProduct']['NAME']); ?>
			&nbsp;
		</dd>
		<?php 
			
		}
	?>
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
