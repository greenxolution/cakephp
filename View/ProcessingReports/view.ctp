<div class="processingReports view">
<h2><?php echo __('Processing Report'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['Document']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StatusCode'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['StatusCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MessagesProcessed'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['MessagesProcessed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MessagesSuccessful'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['MessagesSuccessful']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MessagesWithError'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['MessagesWithError']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MessagesWithWarning'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['MessagesWithWarning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['Result']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($processingReport['ProcessingReport']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Processing Report'), array('action' => 'edit', $processingReport['ProcessingReport']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Processing Report'), array('action' => 'delete', $processingReport['ProcessingReport']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $processingReport['ProcessingReport']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Processing Reports'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processing Report'), array('action' => 'add')); ?> </li>
	</ul>
</div>
