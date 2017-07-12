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
			<th><?php echo $this->Paginator->sort('PRODUCT_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('MODEL'); ?></th>
			<th><?php echo $this->Paginator->sort('PRODUCT_STYLE_OPTION'); ?></th>
			<th><?php echo $this->Paginator->sort('NAME'); ?></th>
<!--			<th><?php echo $this->Paginator->sort('DESCRIPTION'); ?></th> -->
			<th><?php echo $this->Paginator->sort('MANUFACTURER'); ?></th>
			<th><?php echo $this->Paginator->sort('PRICE'); ?></th>
			<th><?php echo $this->Paginator->sort('MAP'); ?></th>
			<th><?php echo $this->Paginator->sort('QUANTITY'); ?></th>
			<th><?php echo $this->Paginator->sort('UPC'); ?></th>
<!--  			
			<th><?php echo $this->Paginator->sort('DATE_ADDED'); ?></th>
			<th><?php echo $this->Paginator->sort('DATE_MODIFIED'); ?></th>
		
			<th><?php echo $this->Paginator->sort('STATUS'); ?></th>
-->				
			<th><?php echo $this->Paginator->sort('PRODUCT_URL'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_1'); ?></th>

<!--			
			<th><?php echo $this->Paginator->sort('IMAGE_2'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_3'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_4'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_5'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_6'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_7'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_8'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_9'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_10'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_11'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_12'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_13'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_14'); ?></th>
			<th><?php echo $this->Paginator->sort('IMAGE_15'); ?></th>
			<th><?php echo $this->Paginator->sort('WATER_RESISTANCE'); ?></th>
			<th><?php echo $this->Paginator->sort('BATTERY'); ?></th>
			<th><?php echo $this->Paginator->sort('POWER_SOURCE'); ?></th>
			<th><?php echo $this->Paginator->sort('TYPE_OF_PACKAGING'); ?></th>
-->
			<th><?php echo $this->Paginator->sort('COUNTRY_OF_ORIGIN'); ?></th>
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
			<th><?php echo $this->Paginator->sort('CATEGORY_3'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th> -->
			<th><?php echo $this->Paginator->sort('updated'); ?></th> <!--
		
			<th class="actions"><?php echo __('Actions'); ?></th>
-->				
	</tr>
	<?php foreach ($entrenueProducts as $entrenueProduct): ?>
	<tr>
		<td><?php echo $this->Html->link(h($entrenueProduct['EntrenueProduct']['id']), array('action' => 'view', $entrenueProduct['EntrenueProduct']['id']));; ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['PRODUCT_ID']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['MODEL']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['PRODUCT_STYLE_OPTION']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['NAME']); ?>&nbsp;</td>
		
	<!--	<td><?php echo $this->Text->truncate($entrenueProduct['EntrenueProduct']['DESCRIPTION'], 90); ?></td> -->
		<td><?php echo h($entrenueProduct['EntrenueProduct']['MANUFACTURER']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['PRICE']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['MAP']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['QUANTITY']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['UPC']); ?>&nbsp;</td>
		
<!-- 		
		<td><?php echo h($entrenueProduct['EntrenueProduct']['DATE_ADDED']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['DATE_MODIFIED']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['STATUS']); ?>&nbsp;</td>
 -->		
		<td><?php echo h($entrenueProduct['EntrenueProduct']['PRODUCT_URL']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image($entrenueProduct['EntrenueProduct']['IMAGE_1'], array('width'=>'110px')); ?>&nbsp;</td>

<!--
		<td><?php echo $this->Html->image($entrenueProduct['EntrenueProduct']['IMAGE_2'], array('width'=>'110px')); ?>&nbsp;</td>
		<td><?php echo $this->Html->image($entrenueProduct['EntrenueProduct']['IMAGE_3'], array('width'=>'110px')); ?>&nbsp;</td>
		<td><?php echo $this->Html->image($entrenueProduct['EntrenueProduct']['IMAGE_4'], array('width'=>'110px')); ?>&nbsp;</td>
		<td><?php echo $this->Html->image($entrenueProduct['EntrenueProduct']['IMAGE_5'], array('width'=>'110px')); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_6']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_7']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_8']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_9']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_10']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_11']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_12']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_13']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_14']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['IMAGE_15']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['WATER_RESISTANCE']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['BATTERY']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['POWER_SOURCE']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['TYPE_OF_PACKAGING']); ?>&nbsp;</td>
-->		
		<td><?php echo h($entrenueProduct['EntrenueProduct']['COUNTRY_OF_ORIGIN']); ?>&nbsp;</td>
<!--		
		<td><?php echo h($entrenueProduct['EntrenueProduct']['MATERIALS']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['DESIGNED_IN']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['ITEM_WEIGHT']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['ITEM_HEIGHT']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['ITEM_WIDTH']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['ITEM_DEPTH']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['PACKAGE_WEIGHT']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['CATEGORY_1']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['CATEGORY_2']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['CATEGORY_3']); ?>&nbsp;</td>
		<td><?php echo h($entrenueProduct['EntrenueProduct']['created']); ?>&nbsp;</td> -->
		<td><?php echo h($entrenueProduct['EntrenueProduct']['updated']); ?>&nbsp;</td> <!--
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entrenueProduct['EntrenueProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entrenueProduct['EntrenueProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entrenueProduct['EntrenueProduct']['id']), null, __('Are you sure you want to delete # %s?', $entrenueProduct['EntrenueProduct']['id'])); ?>
		</td>
-->		
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
    echo $this->Form->input('category_1');
    echo $this->Form->input('model');
    
    echo $this->Form->submit(__('Submit'));
    echo $this->Form->end();
?>
</div>
