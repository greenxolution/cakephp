<div class="tierLowerPercents view">
<h2><?php echo __('Tier Lower Percent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tierLowerPercent['TierLowerPercent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percent'); ?></dt>
		<dd>
			<?php echo h($tierLowerPercent['TierLowerPercent']['percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tierLowerPercent['TierLowerPercent']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($tierLowerPercent['TierLowerPercent']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tier Lower Percent'), array('action' => 'edit', $tierLowerPercent['TierLowerPercent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tier Lower Percent'), array('action' => 'delete', $tierLowerPercent['TierLowerPercent']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tierLowerPercent['TierLowerPercent']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tier Lower Percents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier Lower Percent'), array('action' => 'add')); ?> </li>
	</ul>
</div>
