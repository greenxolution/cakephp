<div class="tiers view">
<h2><?php echo __('Tier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tier['Tier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tier['Tier']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percent'); ?></dt>
		<dd>
			<?php echo h($tier['Tier']['percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Name'); ?></dt>
		<dd>
			<?php echo h($tier['Tier']['class_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($tier['Tier']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tier Behavior Id'); ?></dt>
		<dd>
			<?php echo h($tier['Tier']['tier_behavior_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tier['Tier']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($tier['Tier']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tier'), array('action' => 'edit', $tier['Tier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tier'), array('action' => 'delete', $tier['Tier']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tier['Tier']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mws Inventories'), array('controller' => 'mws_inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mws Inventory'), array('controller' => 'mws_inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List View Match Invs'), array('controller' => 'view_match_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New View Match Inv'), array('controller' => 'view_match_invs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mws Inventories'); ?></h3>
	<?php if (!empty($tier['MwsInventory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sku'); ?></th>
		<th><?php echo __('Asin'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Tier Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tier['MwsInventory'] as $mwsInventory): ?>
		<tr>
			<td><?php echo $mwsInventory['id']; ?></td>
			<td><?php echo $mwsInventory['sku']; ?></td>
			<td><?php echo $mwsInventory['asin']; ?></td>
			<td><?php echo $mwsInventory['price']; ?></td>
			<td><?php echo $mwsInventory['quantity']; ?></td>
			<td><?php echo $mwsInventory['tier_id']; ?></td>
			<td><?php echo $mwsInventory['created']; ?></td>
			<td><?php echo $mwsInventory['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mws_inventories', 'action' => 'view', $mwsInventory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mws_inventories', 'action' => 'edit', $mwsInventory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mws_inventories', 'action' => 'delete', $mwsInventory['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mwsInventory['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mws Inventory'), array('controller' => 'mws_inventories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related View Match Invs'); ?></h3>
	<?php if (!empty($tier['ViewMatchInv'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('M Sku'); ?></th>
		<th><?php echo __('M Asin'); ?></th>
		<th><?php echo __('M Price'); ?></th>
		<th><?php echo __('M Quantity'); ?></th>
		<th><?php echo __('M Created'); ?></th>
		<th><?php echo __('M Updated'); ?></th>
		<th><?php echo __('Tier Id'); ?></th>
		<th><?php echo __('E Id'); ?></th>
		<th><?php echo __('E Product Id'); ?></th>
		<th><?php echo __('E Model'); ?></th>
		<th><?php echo __('E Sku'); ?></th>
		<th><?php echo __('E Price'); ?></th>
		<th><?php echo __('E Quantity'); ?></th>
		<th><?php echo __('D Created'); ?></th>
		<th><?php echo __('E Updated'); ?></th>
		<th><?php echo __('E Name'); ?></th>
		<th><?php echo __('E Descriptions'); ?></th>
		<th><?php echo __('E Upc'); ?></th>
		<th><?php echo __('E Image 1'); ?></th>
		<th><?php echo __('L Offer'); ?></th>
		<th><?php echo __('L Listingprice'); ?></th>
		<th><?php echo __('L Landingprice'); ?></th>
		<th><?php echo __('L Shipping'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tier['ViewMatchInv'] as $viewMatchInv): ?>
		<tr>
			<td><?php echo $viewMatchInv['id']; ?></td>
			<td><?php echo $viewMatchInv['m_sku']; ?></td>
			<td><?php echo $viewMatchInv['m_asin']; ?></td>
			<td><?php echo $viewMatchInv['m_price']; ?></td>
			<td><?php echo $viewMatchInv['m_quantity']; ?></td>
			<td><?php echo $viewMatchInv['m_created']; ?></td>
			<td><?php echo $viewMatchInv['m_updated']; ?></td>
			<td><?php echo $viewMatchInv['tier_id']; ?></td>
			<td><?php echo $viewMatchInv['e_id']; ?></td>
			<td><?php echo $viewMatchInv['e_product_id']; ?></td>
			<td><?php echo $viewMatchInv['e_model']; ?></td>
			<td><?php echo $viewMatchInv['e_sku']; ?></td>
			<td><?php echo $viewMatchInv['e_price']; ?></td>
			<td><?php echo $viewMatchInv['e_quantity']; ?></td>
			<td><?php echo $viewMatchInv['d_created']; ?></td>
			<td><?php echo $viewMatchInv['e_updated']; ?></td>
			<td><?php echo $viewMatchInv['e_name']; ?></td>
			<td><?php echo $viewMatchInv['e_descriptions']; ?></td>
			<td><?php echo $viewMatchInv['e_upc']; ?></td>
			<td><?php echo $viewMatchInv['e_image_1']; ?></td>
			<td><?php echo $viewMatchInv['l_offer']; ?></td>
			<td><?php echo $viewMatchInv['l_listingprice']; ?></td>
			<td><?php echo $viewMatchInv['l_landingprice']; ?></td>
			<td><?php echo $viewMatchInv['l_shipping']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'view_match_invs', 'action' => 'view', $viewMatchInv['m_sku'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'view_match_invs', 'action' => 'edit', $viewMatchInv['m_sku'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'view_match_invs', 'action' => 'delete', $viewMatchInv['m_sku']), array('confirm' => __('Are you sure you want to delete # %s?', $viewMatchInv['m_sku']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New View Match Inv'), array('controller' => 'view_match_invs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
