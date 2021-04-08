<div class="viewInventorySuppliers index">
	<h2><?php echo __('View Inventory Suppliers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
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
	<?php foreach ($viewInventorySuppliers as $viewInventorySupplier): ?>
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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $viewInventorySupplier['ViewInventorySupplier']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New View Inventory Supplier'), array('action' => 'add')); ?></li>
		<li>
		<?php 
		echo $this->Form->create('ViewInventorySupplier');
		echo $this->Form->input('ViewInventorySupplier.filter', array('label' => 'Query'));
		
		echo $this->Form->submit(__('Submit'));
		echo $this->Form->end();
		?>
		
		</li>
	</ul>
</div>
