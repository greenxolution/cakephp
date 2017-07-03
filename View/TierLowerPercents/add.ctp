<div class="tierLowerPercents form">
<?php echo $this->Form->create('TierLowerPercent'); ?>
	<fieldset>
		<legend><?php echo __('Add Tier Lower Percent'); ?></legend>
	<?php
		echo $this->Form->input('percent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tier Lower Percents'), array('action' => 'index')); ?></li>
	</ul>
</div>
