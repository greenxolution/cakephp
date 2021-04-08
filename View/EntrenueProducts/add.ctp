<div class="entrenueProducts form">
<?php echo $this->Form->create('EntrenueProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Entrenue Product'); ?></legend>
	<?php
		echo $this->Form->input('SKU');
		echo $this->Form->input('ASIN');
		echo $this->Form->input('PRODUCT_ID');
		echo $this->Form->input('MODEL');
		echo $this->Form->input('PRODUCT_STYLE_OPTION');
		echo $this->Form->input('NAME');
		echo $this->Form->input('DESCRIPTION');
		echo $this->Form->input('MANUFACTURER');
		echo $this->Form->input('BOOK_BINDING');
		echo $this->Form->input('PRICE');
		echo $this->Form->input('MAP');
		echo $this->Form->input('QUANTITY');
		echo $this->Form->input('UPC');
		echo $this->Form->input('DATE_ADDED');
		echo $this->Form->input('DATE_MODIFIED');
		echo $this->Form->input('STATUS');
		echo $this->Form->input('PRODUCT_URL');
		echo $this->Form->input('IMAGE_1');
		echo $this->Form->input('IMAGE_2');
		echo $this->Form->input('IMAGE_3');
		echo $this->Form->input('IMAGE_4');
		echo $this->Form->input('IMAGE_5');
		echo $this->Form->input('IMAGE_6');
		echo $this->Form->input('IMAGE_7');
		echo $this->Form->input('IMAGE_8');
		echo $this->Form->input('IMAGE_9');
		echo $this->Form->input('IMAGE_10');
		echo $this->Form->input('IMAGE_11');
		echo $this->Form->input('IMAGE_12');
		echo $this->Form->input('IMAGE_13');
		echo $this->Form->input('IMAGE_14');
		echo $this->Form->input('IMAGE_15');
		echo $this->Form->input('WATER_RESISTANCE');
		echo $this->Form->input('BATTERY');
		echo $this->Form->input('POWER_SOURCE');
		echo $this->Form->input('TYPE_OF_PACKAGING');
		echo $this->Form->input('COUNTRY_OF_ORIGIN');
		echo $this->Form->input('MATERIALS');
		echo $this->Form->input('DESIGNED_IN');
		echo $this->Form->input('ITEM_WEIGHT');
		echo $this->Form->input('ITEM_HEIGHT');
		echo $this->Form->input('ITEM_WIDTH');
		echo $this->Form->input('ITEM_DEPTH');
		echo $this->Form->input('PACKAGE_WEIGHT');
		echo $this->Form->input('CATEGORY_1');
		echo $this->Form->input('CATEGORY_2');
		echo $this->Form->input('CATEGORY_3');
		echo $this->Form->input('MWS_CATEGORY');
		echo $this->Form->input('ns2_Binding');
		echo $this->Form->input('Activated');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entrenue Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
