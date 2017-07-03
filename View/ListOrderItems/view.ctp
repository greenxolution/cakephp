<div class="listOrderItems view">
<h2><?php echo __('List Order Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ASIN'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ASIN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SellerSKU'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['SellerSKU']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderItemId'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['OrderItemId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['Title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('QuantityOrdered'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['QuantityOrdered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('QuantityShipped'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['QuantityShipped']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ItemPrice CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ItemPrice_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ItemPrice Amount'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ItemPrice_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingPrice CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ShippingPrice_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingPrice Amount'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ShippingPrice_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GiftWrapPrice CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['GiftWrapPrice_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GiftWrapPrice Amount'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['GiftWrapPrice_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ItemTax CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ItemTax_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ItemTax Amount'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ItemTax_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingTax CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ShippingTax_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingTax Amount'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ShippingTax_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GiftWrapTax CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['GiftWrapTax_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GiftWrapTax Amount'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['GiftWrapTax_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingDiscount CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ShippingDiscount_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ShippingDiscount Amount'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ShippingDiscount_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PromotionDiscount CurrencyCode'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['PromotionDiscount_CurrencyCode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PromotionDiscount Amount'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['PromotionDiscount_Amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PromotionIds'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['PromotionIds']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ConditionNote'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ConditionNote']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ConditionId'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ConditionId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ConditionSubtypeId'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['ConditionSubtypeId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('List Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listOrderItem['ListOrder']['AmazonOrderId'], array('controller' => 'list_orders', 'action' => 'view', $listOrderItem['ListOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($listOrderItem['ListOrderItem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit List Order Item'), array('action' => 'edit', $listOrderItem['ListOrderItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete List Order Item'), array('action' => 'delete', $listOrderItem['ListOrderItem']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $listOrderItem['ListOrderItem']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List List Order Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Order Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List List Orders'), array('controller' => 'list_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List Order'), array('controller' => 'list_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
