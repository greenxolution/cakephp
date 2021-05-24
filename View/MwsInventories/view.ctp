<div class="mwsInventories view">
<h2><?php echo __('Mws Inventory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mwsInventory['MwsInventory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sku'); ?></dt>
		<dd>
			<?php echo h($mwsInventory['MwsInventory']['sku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asin'); ?></dt>
		<dd>
			<?php echo h($mwsInventory['MwsInventory']['asin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($mwsInventory['MwsInventory']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($mwsInventory['MwsInventory']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activated'); ?></dt>
		<dd>
			<?php echo h($mwsInventory['MwsInventory']['activated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mwsInventory['Tier']['name'], array('controller' => 'tiers', 'action' => 'view', $mwsInventory['Tier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mwsInventory['MwsInventory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($mwsInventory['MwsInventory']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mws Inventory'), array('action' => 'edit', $mwsInventory['MwsInventory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mws Inventory'), array('action' => 'delete', $mwsInventory['MwsInventory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mwsInventory['MwsInventory']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mws Inventories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mws Inventory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
