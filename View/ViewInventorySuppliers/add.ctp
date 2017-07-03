<div class="viewInventorySuppliers form">
<?php echo $this->Form->create('ViewInventorySupplier'); ?>
	<fieldset>
		<legend><?php echo __('Add View Inventory Supplier'); ?></legend>
	<?php
		echo $this->Form->input('sku');
		echo $this->Form->input('supplier_id');
		echo $this->Form->input('supplier_product_id');
		echo $this->Form->input('inv_price');
		echo $this->Form->input('price');
		echo $this->Form->input('map');
		echo $this->Form->input('supplier_updated');
		echo $this->Form->input('supplier_table');
		echo $this->Form->input('supplier_id_type');
		echo $this->Form->input('tier_id');
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List View Inventory Suppliers'), array('action' => 'index')); ?></li>
	</ul>
</div>
