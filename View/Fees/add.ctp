<div class="fees form">
	<?php echo $this->Form->create('Fee'); ?>
	<fieldset>
		<legend>
			<?php echo __('Add Fee'); ?>
		</legend>
		<?php
		echo $this->Form->input('amount');
		echo $this->Form->input('description');
		echo $this->Form->input('unit', array(
				'options' => $unit,
				'empty' => '(choose one)'
		));
		echo $this->Form->input('supplier_id');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3>
		<?php echo __('Actions'); ?>
	</h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fees'), array('action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?>
		</li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
