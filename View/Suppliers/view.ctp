<div class="suppliers view">
<h2><?php echo __('Supplier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drop Email'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['drop_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Table'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['product_table']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supplier'), array('action' => 'edit', $supplier['Supplier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier'), array('action' => 'delete', $supplier['Supplier']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $supplier['Supplier']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fees'), array('controller' => 'fees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fee'), array('controller' => 'fees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Addresses'); ?></h3>
	<?php if (!empty($supplier['Address'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Address1'); ?></th>
		<th><?php echo __('Address2'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Supplier Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($supplier['Address'] as $address): ?>
		<tr>
			<td><?php echo $address['id']; ?></td>
			<td><?php echo $address['address1']; ?></td>
			<td><?php echo $address['address2']; ?></td>
			<td><?php echo $address['city']; ?></td>
			<td><?php echo $address['zipcode']; ?></td>
			<td><?php echo $address['state']; ?></td>
			<td><?php echo $address['country']; ?></td>
			<td><?php echo $address['supplier_id']; ?></td>
			<td><?php echo $address['created']; ?></td>
			<td><?php echo $address['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'addresses', 'action' => 'view', $address['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'addresses', 'action' => 'edit', $address['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'addresses', 'action' => 'delete', $address['id']), array('confirm' => __('Are you sure you want to delete # %s?', $address['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Fees'); ?></h3>
	<?php if (!empty($supplier['Fee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Unit'); ?></th>
		<th><?php echo __('Supplier Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($supplier['Fee'] as $fee): ?>
		<tr>
			<td><?php echo $fee['id']; ?></td>
			<td><?php echo $fee['amount']; ?></td>
			<td><?php echo $fee['description']; ?></td>
			<td><?php echo $fee['unit']; ?></td>
			<td><?php echo $fee['supplier_id']; ?></td>
			<td><?php echo $fee['created']; ?></td>
			<td><?php echo $fee['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fees', 'action' => 'view', $fee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fees', 'action' => 'edit', $fee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fees', 'action' => 'delete', $fee['id']), array('confirm' => __('Are you sure you want to delete # %s?', $fee['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fee'), array('controller' => 'fees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
