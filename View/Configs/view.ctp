<div class="configs view">
<h2><?php echo __('Config'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($config['Config']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profit'); ?></dt>
		<dd>
			<?php echo h($config['Config']['profit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amazon Fee'); ?></dt>
		<dd>
			<?php echo h($config['Config']['amazon_fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Profit'); ?></dt>
		<dd>
			<?php echo h($config['Config']['max_profit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amazon Operation Fee'); ?></dt>
		<dd>
			<?php echo h($config['Config']['amazon_operation_fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Availability'); ?></dt>
		<dd>
			<?php echo h($config['Config']['min_availability']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required Seller Feedback'); ?></dt>
		<dd>
			<?php echo h($config['Config']['required_seller_feedback']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required Seller Positive Feedback Rating'); ?></dt>
		<dd>
			<?php echo h($config['Config']['required_seller_positive_feedback_rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Url'); ?></dt>
		<dd>
			<?php echo h($config['Config']['service_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($config['Config']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Condition'); ?></dt>
		<dd>
			<?php echo h($config['Config']['item_condition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($config['Config']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($config['Config']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Config'), array('action' => 'edit', $config['Config']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Config'), array('action' => 'delete', $config['Config']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $config['Config']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config'), array('action' => 'add')); ?> </li>
	</ul>
</div>
