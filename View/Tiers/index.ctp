<div class="tiers index">
	<h2><?php echo __('Tiers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('percent'); ?></th>
			<th><?php echo $this->Paginator->sort('class_name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('tier_behavior_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tiers as $tier): ?>
	<tr>
		<td><?php echo h($tier['Tier']['id']); ?>&nbsp;</td>
		<td><?php echo h($tier['Tier']['name']); ?>&nbsp;</td>
		<td><?php echo h($tier['Tier']['percent']); ?>&nbsp;</td>
		<td><?php echo h($tier['Tier']['class_name']); ?>&nbsp;</td>
		<td><?php echo h($tier['Tier']['description']); ?>&nbsp;</td>
		<td><?php echo h($tier['Tier']['tier_behavior_id']); ?>&nbsp;</td>
		<td><?php echo h($tier['Tier']['created']); ?>&nbsp;</td>
		<td><?php echo h($tier['Tier']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tier['Tier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tier['Tier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tier['Tier']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tier['Tier']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Tier'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mws Inventories'), array('controller' => 'mws_inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mws Inventory'), array('controller' => 'mws_inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List View Match Invs'), array('controller' => 'view_match_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New View Match Inv'), array('controller' => 'view_match_invs', 'action' => 'add')); ?> </li>
	</ul>
</div>
