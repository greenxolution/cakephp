<div class="configs form">
<?php echo $this->Form->create('Config'); ?>
	<fieldset>
		<legend><?php echo __('Edit Config'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('profit');
		echo $this->Form->input('amazon_fee');
		echo $this->Form->input('max_profit');
		echo $this->Form->input('amazon_operation_fee');
		echo $this->Form->input('min_availability');
		echo $this->Form->input('required_seller_feedback');
		echo $this->Form->input('required_seller_positive_feedback_rating');
		echo $this->Form->input('service_url');
		echo $this->Form->input('active');
		echo $this->Form->input('item_condition');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Config.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Config.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Configs'), array('action' => 'index')); ?></li>
	</ul>
</div>
