<div class="tierBehaviors index">
	<h2><?php echo __('Tier Behaviors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('class'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tierBehaviors as $tierBehavior): ?>
	<tr>
		<td><?php echo h($tierBehavior['TierBehavior']['id']); ?>&nbsp;</td>
		<td><?php echo h($tierBehavior['TierBehavior']['class']); ?>&nbsp;</td>
		<td><?php echo h($tierBehavior['TierBehavior']['created']); ?>&nbsp;</td>
		<td><?php echo h($tierBehavior['TierBehavior']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tierBehavior['TierBehavior']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tierBehavior['TierBehavior']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tierBehavior['TierBehavior']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tierBehavior['TierBehavior']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Tier Behavior'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
