<div class="listOrders index">
	<h2><?php echo __('List Orders'); ?></h2>
<?php foreach ($listOrders as $listOrder): ?>
<?php $class = $listOrder['ListOrder']['class']; ?>
	<table cellpadding="0" cellspacing="0" class="<?php echo $class;?>">
	<thead>
	<tr>
	
			<th><?php echo $this->Paginator->sort('OrderStatus'); ?></th>
			<th><?php echo $this->Paginator->sort('AmazonOrderId'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderTotal_Amount'); ?></th>
			
			<th><?php echo h('Address'); ?></th>
			
			<!-- 
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ShipmentServiceLevelCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderTotal_CurrencyCode'); ?></th>
			
			<th><?php echo $this->Paginator->sort('ShipServiceLevel'); ?></th>
			<th><?php echo $this->Paginator->sort('LatestShipDate'); ?></th>
			<th><?php echo $this->Paginator->sort('MarketplaceId'); ?></th>
			<th><?php echo $this->Paginator->sort('SalesChannel'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingAddress_Phone'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingAddress_PostalCode'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingAddress_Name'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingAddress_CountryCode'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingAddress_StateOrRegion'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingAddress_AddressLine1'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippingAddress_City'); ?></th>
			<th><?php echo $this->Paginator->sort('EarliestDeliveryDate'); ?></th>
			<th><?php echo $this->Paginator->sort('ShippedByAmazonTFM'); ?></th>
			<th><?php echo $this->Paginator->sort('OrderType'); ?></th>
			<th><?php echo $this->Paginator->sort('BuyerEmail'); ?></th>
			<th><?php echo $this->Paginator->sort('FulfillmentChannel'); ?></th>
			<th><?php echo $this->Paginator->sort('LatestDeliveryDate'); ?></th>
			
			<th><?php echo $this->Paginator->sort('BuyerName'); ?></th>
			<th><?php echo $this->Paginator->sort('LastUpdateDate'); ?></th>
			<th><?php echo $this->Paginator->sort('EarliestShipDate'); ?></th>
			<th><?php echo $this->Paginator->sort('PurchaseDate'); ?></th>
			<th><?php echo $this->Paginator->sort('NumberOfItemsUnshipped'); ?></th>
			<th><?php echo $this->Paginator->sort('NumberOfItemsShipped'); ?></th>
			<th><?php echo $this->Paginator->sort('PaymentMethod'); ?></th>
			
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			 -->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	
	<tr class="<?php echo $class;?>">
	
		<td><?php echo h($listOrder['ListOrder']['OrderStatus']).PHP_EOL.h($listOrder['ListOrder']['order_confirmation'])?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['AmazonOrderId']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['OrderTotal_Amount']); ?>&nbsp;</td>
		
		<td><?php 
			echo h($listOrder['ListOrder']['ShippingAddress_Name']).PHP_EOL; 
			echo h($listOrder['ListOrder']['ShippingAddress_AddressLine1']).PHP_EOL;
			echo h($listOrder['ListOrder']['ShippingAddress_StateOrRegion']).', '.
			h($listOrder['ListOrder']['ShippingAddress_PostalCode']).', '.
			h($listOrder['ListOrder']['ShippingAddress_CountryCode']);
		
		?>&nbsp;</td>
		
		<!--  
		<td><?php echo h($listOrder['ListOrder']['id']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShipmentServiceLevelCategory']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['OrderTotal_CurrencyCode']); ?>&nbsp;</td>
		
		<td><?php echo h($listOrder['ListOrder']['ShipServiceLevel']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['LatestShipDate']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['MarketplaceId']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['SalesChannel']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShippingAddress_Phone']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShippingAddress_PostalCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShippingAddress_Name']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShippingAddress_CountryCode']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShippingAddress_StateOrRegion']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShippingAddress_AddressLine1']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShippingAddress_City']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['EarliestDeliveryDate']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['ShippedByAmazonTFM']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['OrderType']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['BuyerEmail']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['FulfillmentChannel']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['LatestDeliveryDate']); ?>&nbsp;</td>
		
		<td><?php echo h($listOrder['ListOrder']['BuyerName']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['LastUpdateDate']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['EarliestShipDate']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['PurchaseDate']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['NumberOfItemsUnshipped']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['NumberOfItemsShipped']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['PaymentMethod']); ?>&nbsp;</td>
		
		<td><?php echo h($listOrder['ListOrder']['created']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['modified']); ?>&nbsp;</td>
		<td><?php echo h($listOrder['ListOrder']['user_id']); ?>&nbsp;</td>
		 -->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $listOrder['ListOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $listOrder['ListOrder']['id'])); ?>
		</td>
	</tr>
	<tr  class="<?php echo $class;?>">
	<td colspan="5">
	<?php 
	if(Hash::dimensions($listOrder['ListOrder']['ViewInventorySupplier']) > 1)
		echo $this->element('inventory_supplier_index', array('viewInventorySuppliers' => $listOrder['ListOrder']['ViewInventorySupplier']));
	else
		echo "THERE IS NOT ANY MORE THIS PRODUCT IN THE DATABASE"; 
		
	?>
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
		<li><?php echo $this->Html->link(__('New List Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List List Order Items'), array('controller' => 'list_order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Order Item'), array('controller' => 'list_order_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Get New Orders'), array('controller' => 'ListOrders', 'action' => 'executeOrders')); ?> </li>
	</ul>
</div>
