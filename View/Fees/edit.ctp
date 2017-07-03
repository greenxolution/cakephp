<div class="fees form">
<?php echo $this->Form->create('Fee'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('amount');
		echo $this->Form->input('description');
		echo $this->Form->input('unit');
		echo $this->Form->input('supplier_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Fee.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Fee.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Fees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
	</ul>
</div>
