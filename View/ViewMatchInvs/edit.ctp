<div class="viewMatchInvs form">
<?php echo $this->Form->create('ViewMatchInv'); ?>
	<fieldset>
		<legend><?php echo __('Edit View Match Inv'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('m_sku');
		echo $this->Form->input('m_asin');
		echo $this->Form->input('m_price');
		echo $this->Form->input('m_quantity');
		echo $this->Form->input('m_created');
		echo $this->Form->input('m_updated');
		echo $this->Form->input('tier_id');
		echo $this->Form->input('e_id');
		echo $this->Form->input('e_product_id');
		echo $this->Form->input('e_model');
		echo $this->Form->input('e_sku');
		echo $this->Form->input('e_price');
		echo $this->Form->input('e_quantity');
		echo $this->Form->input('d_created');
		echo $this->Form->input('e_updated');
		echo $this->Form->input('e_name');
		echo $this->Form->input('e_descriptions');
		echo $this->Form->input('e_upc');
		echo $this->Form->input('e_image_1');
		echo $this->Form->input('l_offer');
		echo $this->Form->input('l_listingprice');
		echo $this->Form->input('l_landingprice');
		echo $this->Form->input('l_shipping');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ViewMatchInv.m_sku')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ViewMatchInv.m_sku')))); ?></li>
		<li><?php echo $this->Html->link(__('List View Match Invs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
