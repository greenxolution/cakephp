<div class="viewMatchInvs view">
<h2><?php echo __('View Match Inv'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Sku'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['m_sku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Asin'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['m_asin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Price'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['m_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Quantity'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['m_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Created'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['m_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Updated'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['m_updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($viewMatchInv['Tier']['name'], array('controller' => 'tiers', 'action' => 'view', $viewMatchInv['Tier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Id'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Product Id'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_product_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Model'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Sku'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_sku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Price'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Quantity'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('D Created'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['d_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Updated'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Name'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Descriptions'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_descriptions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Upc'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_upc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Image 1'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['e_image_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('L Offer'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['l_offer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('L Listingprice'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['l_listingprice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('L Landingprice'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['l_landingprice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('L Shipping'); ?></dt>
		<dd>
			<?php echo h($viewMatchInv['ViewMatchInv']['l_shipping']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit View Match Inv'), array('action' => 'edit', $viewMatchInv['ViewMatchInv']['m_sku'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete View Match Inv'), array('action' => 'delete', $viewMatchInv['ViewMatchInv']['m_sku']), array('confirm' => __('Are you sure you want to delete # %s?', $viewMatchInv['ViewMatchInv']['m_sku']))); ?> </li>
		<li><?php echo $this->Html->link(__('List View Match Invs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New View Match Inv'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tiers'), array('controller' => 'tiers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tier'), array('controller' => 'tiers', 'action' => 'add')); ?> </li>
	</ul>
</div>
