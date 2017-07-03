<div class="processingReports index">
	<h2><?php echo __('Processing Reports'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Document'); ?></th>
			<th><?php echo $this->Paginator->sort('StatusCode'); ?></th>
			<th><?php echo $this->Paginator->sort('MessagesProcessed'); ?></th>
			<th><?php echo $this->Paginator->sort('MessagesSuccessful'); ?></th>
			<th><?php echo $this->Paginator->sort('MessagesWithError'); ?></th>
			<th><?php echo $this->Paginator->sort('MessagesWithWarning'); ?></th>
			<th><?php //echo $this->Paginator->sort('Result'); ?></th>
			<th><?php //echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($processingReports as $processingReport): ?>
	<tr>
		<td><?php echo h($processingReport['ProcessingReport']['id']); ?>&nbsp;</td>
		<td><?php echo h($processingReport['ProcessingReport']['Document']); ?>&nbsp;</td>
		<td><?php echo h($processingReport['ProcessingReport']['StatusCode']); ?>&nbsp;</td>
		<td><?php echo h($processingReport['ProcessingReport']['MessagesProcessed']); ?>&nbsp;</td>
		<td><?php echo h($processingReport['ProcessingReport']['MessagesSuccessful']); ?>&nbsp;</td>
		<td><?php echo h($processingReport['ProcessingReport']['MessagesWithError']); ?>&nbsp;</td>
		<td><?php echo h($processingReport['ProcessingReport']['MessagesWithWarning']); ?>&nbsp;</td>
		<td><?php //echo h($processingReport['ProcessingReport']['Result']); ?>&nbsp;</td>
		<td><?php //echo h($processingReport['ProcessingReport']['created']); ?>&nbsp;</td>
		<td><?php echo h($processingReport['ProcessingReport']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $processingReport['ProcessingReport']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $processingReport['ProcessingReport']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $processingReport['ProcessingReport']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $processingReport['ProcessingReport']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Processing Report'), array('action' => 'add')); ?></li>
	</ul>
</div>
