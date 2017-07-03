<div class="viewMatchInvs index">
	<h2><?php echo __('View Match Invs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('m_sku'); ?></th>
			<th><?php echo $this->Paginator->sort('m_asin'); ?></th>
			<th><?php echo $this->Paginator->sort('m_price'); ?></th>
			<th><?php echo $this->Paginator->sort('m_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('m_created'); ?></th>
			<th><?php echo $this->Paginator->sort('m_updated'); ?></th>
			<th><?php echo $this->Paginator->sort('tier_id'); ?></th>
			<th><?php echo $this->Paginator->sort('e_id'); ?></th>
			<th><?php echo $this->Paginator->sort('e_product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('e_model'); ?></th>
			<th><?php echo $this->Paginator->sort('e_sku'); ?></th>
			<th><?php echo $this->Paginator->sort('e_price'); ?></th>
			<th><?php echo $this->Paginator->sort('e_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('d_created'); ?></th>
			<th><?php echo $this->Paginator->sort('e_updated'); ?></th>
			<th><?php echo $this->Paginator->sort('e_name'); ?></th>
			<th><?php //echo $this->Paginator->sort('e_descriptions'); ?></th>
			<th><?php echo $this->Paginator->sort('e_upc'); ?></th>
			<th><?php echo $this->Paginator->sort('e_image_1'); ?></th>
			<th><?php echo $this->Paginator->sort('l_offer'); ?></th>
			<th><?php echo $this->Paginator->sort('l_listingprice'); ?></th>
			<th><?php echo $this->Paginator->sort('l_landingprice'); ?></th>
			<th><?php echo $this->Paginator->sort('l_shipping'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($viewMatchInvs as $viewMatchInv): ?>
	<tr>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['id']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['m_sku']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['m_asin']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['m_price']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['m_quantity']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['m_created']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['m_updated']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($viewMatchInv['Tier']['name'], array('controller' => 'tiers', 'action' => 'view', $viewMatchInv['Tier']['id'])); ?>
		</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_id']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_product_id']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_model']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_sku']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_price']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_quantity']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['d_created']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_updated']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_name']); ?>&nbsp;</td>
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['e_descriptions']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_upc']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_image_1']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['l_offer']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['l_listingprice']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['l_landingprice']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['l_shipping']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $viewMatchInv['ViewMatchInv']['m_sku'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $viewMatchInv['ViewMatchInv']['m_sku'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $viewMatchInv['ViewMatchInv']['m_sku']), array('confirm' => __('Are you sure you want to delete # %s?', $viewMatchInv['ViewMatchInv']['m_sku']))); ?>
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
		<li><?php echo $this->Html->link(__('New View Match Inv'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
				<li>
		<?php 
		echo $this->Form->create('ViewMatchInv');
		echo $this->Form->input('ViewMatchInv.filter', array('label' => 'Query'));
		
		echo $this->Form->submit(__('Submit'));
		echo $this->Form->end();
		?>
		
		</li>
	</ul>
</div>
