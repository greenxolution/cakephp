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
			<th><?php //echo $this->Paginator->sort('m_created'); ?></th>
			<th><?php //echo $this->Paginator->sort('m_updated'); ?></th>
			<th><?php //echo $this->Paginator->sort('e_id'); ?></th>
			<th><?php echo $this->Paginator->sort('e_product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('e_model'); ?></th>
			<th><?php //echo $this->Paginator->sort('e_sku'); ?></th>
			<th><?php //echo $this->Paginator->sort('e_price'); ?></th>
			<th><?php //echo $this->Paginator->sort('e_quantity'); ?></th>
			<th><?php //echo $this->Paginator->sort('d_created'); ?></th>
			<th><?php //echo $this->Paginator->sort('e_updated'); ?></th>
			<!--   <th class="actions"><?php echo __('Actions'); ?></th> -->
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
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['m_created']); ?>&nbsp;</td>
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['m_updated']); ?>&nbsp;</td>
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['e_id']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_product_id']); ?>&nbsp;</td>
		<td><?php echo h($viewMatchInv['ViewMatchInv']['e_model']); ?>&nbsp;</td>
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['e_sku']); ?>&nbsp;</td>
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['e_price']); ?>&nbsp;</td>
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['e_quantity']); ?>&nbsp;</td>
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['d_created']); ?>&nbsp;</td>
		<td><?php //echo h($viewMatchInv['ViewMatchInv']['e_updated']); ?>&nbsp;</td>
		<!--  <td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $viewMatchInv['ViewMatchInv']['m_sku'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $viewMatchInv['ViewMatchInv']['m_sku'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $viewMatchInv['ViewMatchInv']['m_sku']), array('confirm' => __('Are you sure you want to delete # %s?', $viewMatchInv['ViewMatchInv']['m_sku']))); ?>
		<!--</td>-->
		
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
		<li>
		<?php 
		
		echo $this->Form->create('ViewMatchInvs', array(
				'url' => array_merge(
						array(
								'action' => 'find'
						),
						$this->params['pass']
				)
		)
		);
		echo $this->Form->input('m_sku', array(
				'div' => false
		)
		);
		echo $this->Form->input('m_asin', array(
				'div' => false
		)
		);
		echo $this->Form->submit(__('Search'), array(
				'div' => false
		)
		);
		echo $this->Form->end();
		?>
		
		</li>
	</ul>
</div>
