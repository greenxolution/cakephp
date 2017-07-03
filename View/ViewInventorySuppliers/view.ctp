<div class="viewInventorySuppliers view">
<h2><?php echo __('View Inventory Supplier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sku'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['sku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Id'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['supplier_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Product Id'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['supplier_product_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inv Price'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['inv_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Map'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['map']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Updated'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['supplier_updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Table'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['supplier_table']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tier Id'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['tier_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($viewInventorySupplier['ViewInventorySupplier']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit View Inventory Supplier'), array('action' => 'edit', $viewInventorySupplier['ViewInventorySupplier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete View Inventory Supplier'), array('action' => 'delete', $viewInventorySupplier['ViewInventorySupplier']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $viewInventorySupplier['ViewInventorySupplier']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List View Inventory Suppliers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New View Inventory Supplier'), array('action' => 'add')); ?> </li>
	</ul>
</div>
