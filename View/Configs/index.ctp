<div class="configs index">
	<h2><?php echo __('Configs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('profit'); ?></th>
			<th><?php echo $this->Paginator->sort('amazon_fee'); ?></th>
			<th><?php echo $this->Paginator->sort('max_profit'); ?></th>
			<th><?php echo $this->Paginator->sort('amazon_operation_fee'); ?></th>
			<th><?php echo $this->Paginator->sort('min_availability'); ?></th>
			<th><?php echo $this->Paginator->sort('required_seller_feedback'); ?></th>
			<th><?php echo $this->Paginator->sort('required_seller_positive_feedback_rating'); ?></th>
			<th><?php echo $this->Paginator->sort('service_url'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('item_condition'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($configs as $config): ?>
	<tr>
		<td><?php echo h($config['Config']['id']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['profit']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['amazon_fee']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['max_profit']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['amazon_operation_fee']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['min_availability']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['required_seller_feedback']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['required_seller_positive_feedback_rating']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['service_url']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['active']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['item_condition']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['created']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $config['Config']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $config['Config']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $config['Config']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $config['Config']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Config'), array('action' => 'add')); ?></li>
	</ul>
</div>
