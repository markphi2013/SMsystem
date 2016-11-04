<div class="groups form users-index program-body">
<h3><?php echo __('Edit Supplier'); ?></h3>
<?php echo $this->Form->create('Supplier',  array('type' => 'post'));?>
	<fieldset>
	
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_name', array('label' => __('Company Name')));
		echo $this->Form->input('supplier_name', array('label' => __('Name')));
		echo $this->Form->input('supplier_contact', array('label' => __('Supplier contact')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('View Supplier'), array('action' => 'view', $this->Form->value('Supplier.id'))); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier'), array('action' => 'delete', $this->Form->value('Supplier.id')), null, __('Are you sure you want to delete "%s" supplier?', $this->Form->value('Supplier.supplier_name'))); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Back to menu'), array('controller' => 'storeHome', 'action' => 'index')); ?></li>
	</ul>
</div>
</div>
