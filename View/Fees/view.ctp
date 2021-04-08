<div class="fees view">
<h2><?php echo __('Fee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fee['Supplier']['name'], array('controller' => 'suppliers', 'action' => 'view', $fee['Supplier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fee'), array('action' => 'edit', $fee['Fee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fee'), array('action' => 'delete', $fee['Fee']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $fee['Fee']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Fees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('controller' => 'suppliers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('controller' => 'suppliers', 'action' => 'add')); ?> </li>
	</ul>
</div>
