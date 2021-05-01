<div class="entrenueProducts view">
<h2><?php echo __('Entrenue Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entrenueProduct['EntrenueProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SKU'); ?></dt>
		<dd>
			<?php echo h($entrenueProduct['EntrenueProduct']['SKU']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MODEL'); ?></dt>
		<dd>
			<?php echo h($entrenueProduct['EntrenueProduct']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NAME'); ?></dt>
		<dd>
			<?php echo h($entrenueProduct['EntrenueProduct']['name']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('CATEGORY'); ?></dt>
		<dd>
			<?php echo h($entrenueProduct['EntrenueProduct']['categories']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DESCRIPTION'); ?></dt>
		<dd>
			<?php echo h($entrenueProduct['EntrenueProduct']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo $this->Html->image($entrenueProduct['EntrenueProduct']['image'], array('width'=>'320px')); h($entrenueProduct['EntrenueProduct']['image']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($entrenueProduct['EntrenueProduct']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($entrenueProduct['EntrenueProduct']['updated']); ?>
			&nbsp;
		</dd>
	</dl>

	<?php debug($entrenueProduct['EntrenueProductsHistory']); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entrenue Product'), array('action' => 'edit', $entrenueProduct['EntrenueProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entrenue Product'), array('action' => 'delete', $entrenueProduct['EntrenueProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $entrenueProduct['EntrenueProduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Entrenue Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entrenue Product'), array('action' => 'add')); ?> </li>
	</ul>
</div>
