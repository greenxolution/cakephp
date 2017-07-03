<div class="processingReports form">
<?php echo $this->Form->create('ProcessingReport'); ?>
	<fieldset>
		<legend><?php echo __('Edit Processing Report'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('DocumentTransactionID');
		echo $this->Form->input('StatusCode');
		echo $this->Form->input('MessagesProcessed');
		echo $this->Form->input('MessagesSuccessful');
		echo $this->Form->input('MessagesWithError');
		echo $this->Form->input('MessagesWithWarning');
		echo $this->Form->input('Result');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProcessingReport.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ProcessingReport.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Processing Reports'), array('action' => 'index')); ?></li>
	</ul>
</div>
