<div class="groups form users-index program-body">
<h3><?php echo __('Add Product'); ?></h3>
<?php echo $this->Form->create('Product',  array('type' => 'post'));?>
	<fieldset>
	
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_name', array('label' => __('Name')));
		echo $this->Form->input('supplier_id', array('label' => __('Supplier name')));
		echo $this->Form->input('pieces_per_carton', array('label' => __('Pieces per carton')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Product'), array('action' => 'index')); ?> </li>
	</ul>
</div>
</div>
