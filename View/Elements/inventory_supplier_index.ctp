	<?php foreach ($viewInventorySuppliers as $viewInventorySupplier): ?>
	<table cellpadding="0" cellspacing="0" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('sku'); ?></th>
			<!-- <th><?php  echo $this->Paginator->sort('supplier_id'); ?></th> 
			<th><?php echo $this->Paginator->sort('supplier_product_id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('inv_price'); ?></th>
			<!--  <th><?php echo $this->Paginator->sort('price'); ?></th> -->
			<th><?php echo $this->Paginator->sort('selected_price', 'Supplier Price'); ?></th>
			<th><?php echo $this->Paginator->sort('selected_price', 'MWS Price'); ?></th>
			<th><?php echo $this->Paginator->sort('earnings', 'earnings'); ?></th>
			
			<th><?php echo $this->Paginator->sort('supplier_table', 'Supplier'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('supplier_id_type'); ?></th>-->
			<th><?php echo $this->Paginator->sort('tier_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	
	<tr>
		<td><?php 
// 		debug($viewInventorySupplier['ViewInventorySupplier']);
		echo $this->Html->link($viewInventorySupplier['ViewInventorySupplier']['sku'], array('controller' => 'MwsInventories', 'action' => 'edit', $viewInventorySupplier['ViewInventorySupplier']['id']));
		?>&nbsp;</td>
		<!-- <td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['supplier_id']); ?>&nbsp;</td> 
		<td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['supplier_product_id']); ?>&nbsp;</td> -->
		<td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['inv_price']); ?>&nbsp;</td>
		<td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['selected_price']); ?>&nbsp;</td>
		<td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['tier']['competitor']); ?>&nbsp;</td>
		<td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['earnings']); ?>&nbsp;</td>
		
		<td><?php 
		
			echo $this->Html->link($viewInventorySupplier['ViewInventorySupplier']['supplier_product_id'], 'https://entrenue.com/index.php?route=product/search&search='.$viewInventorySupplier['ViewInventorySupplier']['supplier_product_id'],array('class' => 'button', 'target' => '_blank'));
			?>&nbsp;
					
		</td>
		
		<!-- <td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['supplier_id_type']); ?>&nbsp;</td> -->
		<td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['tier']['tier_name']); ?>&nbsp;</td>
		<td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($viewInventorySupplier['ViewInventorySupplier']['supplier_updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', 'controller' => 'ViewInventorySuppliers', $viewInventorySupplier['ViewInventorySupplier']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

