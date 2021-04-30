<div class="entrenueProducts index">
	<h2><?php echo __('Entrenue Products'); ?></h2>
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
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('model'); ?></th>
			<th><?php echo $this->Paginator->sort('upc'); ?></th>
			<th><?php echo $this->Paginator->sort('SKU'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('manufacturer'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('map'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			

			<th><?php echo $this->Paginator->sort('image'); ?></th>


			<th><?php echo $this->Paginator->sort('country_of_origin'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
<!--
			<th><?php echo $this->Paginator->sort('MATERIALS'); ?></th>
			<th><?php echo $this->Paginator->sort('DESIGNED_IN'); ?></th>
			<th><?php echo $this->Paginator->sort('ITEM_WEIGHT'); ?></th>
			<th><?php echo $this->Paginator->sort('ITEM_HEIGHT'); ?></th>
			<th><?php echo $this->Paginator->sort('ITEM_WIDTH'); ?></th>
			<th><?php echo $this->Paginator->sort('ITEM_DEPTH'); ?></th>
			<th><?php echo $this->Paginator->sort('PACKAGE_WEIGHT'); ?></th>
			<th><?php echo $this->Paginator->sort('CATEGORY_1'); ?></th>
			<th><?php echo $this->Paginator->sort('CATEGORY_2'); ?></th>
			<th><?php echo $this->Paginator->sort('CATEGORY_3'); ?></th>-->
			<th><?php echo $this->Paginator->sort('created'); ?></th> 
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
	</tr>
	<?php foreach ($entrenueProducts as $entrenueProduct): ?>
	<tr>
		<td><?php echo $this->Html->link(h($entrenueProduct['EntrenueProduct']['id']), array('action' => 'view', $entrenueProduct['EntrenueProduct']['id']));; ?>&nbsp;</td>
		<td><?php 
		
			echo $this->Html->link($entrenueProduct['EntrenueProduct']['model'], 'https://entrenue.com/index.php?route=product/search&search='.$entrenueProduct['EntrenueProduct']['model'],array('class' => 'button', 'target' => '_blank'));
			?>&nbsp;
					
		</td>		
		<td><?php echo h($entrenueProduct['EntrenueProduct']['upc']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['SKU']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['name']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['manufacturer']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['price']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['map']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['quantity']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image($entrenueProduct['EntrenueProduct']['image'], array('width'=>'110px')); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['country_of_origin']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['created']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['updated']); ?>&nbsp;</td>
	
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entrenueProduct['EntrenueProduct']['id'])); ?>
		</td>
	
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Entrenue Product'), array('action' => 'add')); ?></li>
	</ul>
	
		<?php
    echo $this->Form->create('EntrenueProduct');
    echo $this->Form->input('filter');
    echo $this->Form->input('name');
    echo $this->Form->input('upc');
    echo $this->Form->input('description');
    echo $this->Form->input('manufacturer');
    echo $this->Form->input('categories');
    echo $this->Form->input('model');
    
    echo $this->Form->submit(__('Submit'));
    echo $this->Form->end();
?>
</div>
