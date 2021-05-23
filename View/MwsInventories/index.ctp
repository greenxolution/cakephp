<div class="mwsInventories index">
	<h2><?php echo __('Mws Inventories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('sku'); ?></th> -->
			<th><?php echo $this->Paginator->sort('asin'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('offert'); ?></th>
			<th><?php echo $this->Paginator->sort('Eprice'); ?></th>
			<th><?php echo $this->Paginator->sort('MAP'); ?></th>
			<th><?php echo $this->Paginator->sort('eQuantity'); ?></th>
			<th><?php echo $this->Paginator->sort('MwsQuantity'); ?></th>
			<th><?php echo $this->Paginator->sort('tier_id'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('MwsTitle'); ?></th>
			<th><?php echo $this->Paginator->sort('eTitle'); ?></th>
			<th><?php echo $this->Paginator->sort('MwsPages'); ?></th>
			<th><?php echo $this->Paginator->sort('ePages'); ?></th>
			<th><?php echo $this->Paginator->sort('entrenue'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<!-- <th class="actions"><?php echo __('Actions'); ?></th> -->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mwsInventories as $mwsInventory): ?>
	<tr>
		<td><?php echo h($mwsInventory['MwsInventory']['id']); ?>&nbsp;</td>
		<!-- <td><?php echo h($mwsInventory['MwsInventory']['sku']); ?>&nbsp;</td> -->
		<td>
		<?php 
		
		echo $this->Html->link($mwsInventory['MwsInventory']['asin'], 'https://www.amazon.com/dp/'.$mwsInventory['MwsInventory']['asin'],array('class' => 'button', 'target' => '_blank'));
		?>
		</td>
		<!-- <td><?php echo h($mwsInventory['MwsInventory']['asin']); ?>&nbsp;</td> -->
		<td><?php echo h($mwsInventory['MwsInventory']['price']); ?>&nbsp;</td>
		<td><?php echo h($mwsInventory['MwsInventory']['item_offer']); ?>&nbsp;</td>
		<td><?php echo h($mwsInventory['EntrenueProduct']['price']); ?>&nbsp;</td>
		<td><?php echo h($mwsInventory['EntrenueProduct']['map']); ?>&nbsp;</td>
		<td><?php echo h($mwsInventory['EntrenueProduct']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($mwsInventory['MwsInventory']['quantity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mwsInventory['Tier']['name'], array('controller' => 'tiers', 'action' => 'view', $mwsInventory['Tier']['id'])); ?>
		</td>
		<td><?php echo $this->Html->image($mwsInventory['MwsInventory']['image']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image($mwsInventory['EntrenueProduct']['image'], array('width'=>'110px')); ?>&nbsp;</td>
		
		<td><?php echo h($mwsInventory['MwsInventory']['Title']); ?>&nbsp;</td>
		<td>
		<?php 
		
		echo $this->Html->link($mwsInventory['EntrenueProduct']['name'], '/EntrenueProducts/view//'.$mwsInventory['EntrenueProduct']['id'],array('class' => 'button', 'target' => '_blank'));
		?>
		</td>
		<!-- <td><?php echo h($mwsInventory['EntrenueProduct']['name']); ?>&nbsp;</td> -->
		<td><?php echo h($mwsInventory['MwsInventory']['NumberOfPages']); ?>&nbsp;</td>
		<td><?php echo h($mwsInventory['EntrenueProduct']['pages']); ?>&nbsp;</td>
		<td><?php 
		
		echo $this->Html->link($mwsInventory['EntrenueProduct']['model'], 'https://entrenue.com/index.php?route=product/search&search='.$mwsInventory['EntrenueProduct']['model'],array('class' => 'button', 'target' => '_blank'));
		?>&nbsp;
				
	</td>	
		<td><?php echo h($mwsInventory['MwsInventory']['created']); ?>&nbsp;</td>
		<td><?php echo h($mwsInventory['MwsInventory']['updated']); ?>&nbsp;</td>
		<!-- <td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mwsInventory['MwsInventory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mwsInventory['MwsInventory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mwsInventory['MwsInventory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mwsInventory['MwsInventory']['id']))); ?>
		</td> -->
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
		<li><?php echo $this->Html->link(__('New Mws Inventory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
		<li>
		<?php 
		echo $this->Form->create('MwsInventory');
		echo $this->Form->input('MwsInventory.filter', array('label' => 'Query'));
		
		echo $this->Form->submit(__('Submit'));
		echo $this->Form->end();
		?>
		</li>
	</ul>
</div>
