<div class="tierBehaviors form">
<?php echo $this->Form->create('TierBehavior'); ?>
	<fieldset>
		<legend><?php echo __('Add Tier Behavior'); ?></legend>
	<?php
		echo $this->Form->input('class');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tier Behaviors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
