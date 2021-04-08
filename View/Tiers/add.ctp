<div class="tiers form">
<?php echo $this->Form->create('Tier'); ?>
	<fieldset>
		<legend><?php echo __('Add Tier'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('percent');
		echo $this->Form->input('class_name');
		echo $this->Form->input('description');
		echo $this->Form->input('tier_behavior_id', array(
    'options' => $tier_behavior,
    'empty' => '(choose one)'
));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tiers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mws Inventories'), array('controller' => 'mws_inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mws Inventory'), array('controller' => 'mws_inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List View Match Invs'), array('controller' => 'view_match_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New View Match Inv'), array('controller' => 'view_match_invs', 'action' => 'add')); ?> </li>
	</ul>
</div>
