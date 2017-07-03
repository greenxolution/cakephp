<div class="tierBehaviors view">
<h2><?php echo __('Tier Behavior'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tierBehavior['TierBehavior']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class'); ?></dt>
		<dd>
			<?php echo h($tierBehavior['TierBehavior']['class']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tierBehavior['TierBehavior']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($tierBehavior['TierBehavior']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tier Behavior'), array('action' => 'edit', $tierBehavior['TierBehavior']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tier Behavior'), array('action' => 'delete', $tierBehavior['TierBehavior']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tierBehavior['TierBehavior']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tier Behaviors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier Behavior'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tiers'); ?></h3>
	<?php if (!empty($tierBehavior['Tier'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Percent'); ?></th>
		<th><?php echo __('Class Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Tier Behavior Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tierBehavior['Tier'] as $tier): ?>
		<tr>
			<td><?php echo $tier['id']; ?></td>
			<td><?php echo $tier['name']; ?></td>
			<td><?php echo $tier['percent']; ?></td>
			<td><?php echo $tier['class_name']; ?></td>
			<td><?php echo $tier['description']; ?></td>
			<td><?php echo $tier['tier_behavior_id']; ?></td>
			<td><?php echo $tier['created']; ?></td>
			<td><?php echo $tier['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tiers', 'action' => 'view', $tier['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tiers', 'action' => 'edit', $tier['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tiers', 'action' => 'delete', $tier['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tier['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
