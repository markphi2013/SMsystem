<div class="groups form users-index program-body">
<h3><?php echo __('Add Product'); ?></h3>
<?php echo $this->Form->create('Product',  array('type' => 'post'));?>
	<fieldset>
	
	<?php
	    echo $this->Form->input('id');
		echo $this->Form->input('product_isbn', array('label' => __('UPC/EAN/ISBN')));
		echo $this->Form->input('product_name', array('label' => __('Product Name')));
		echo $this->Html->tag('label', __('Supplier name'));
		echo $this->Form->select('supplier_id', $suppliers, array('empty' => __('Choose one.....')));
		echo $this->Form->input('cost_price', array('label' => __('Cost Price')));
		echo $this->Form->input('retail_price', array('label' => __('Retail Price')));		
		echo $this->Form->input('quantity_stock', array('label' => __('Quantity stock')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Back to menu'), array('controller' => 'storeHome', 'action' => 'index')); ?></li>
	</ul>
</div>
</div>
