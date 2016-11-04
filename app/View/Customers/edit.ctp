<div class="groups form users-index program-body">
<h3><?php echo __('Edit Customer'); ?></h3>
<?php echo $this->Form->create('Customer',  array('type' => 'post'));?>
	<fieldset>
	
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_name', array('label' => __('Name')));
		echo $this->Form->input('customer_contact', array('label' => __('Customer contact')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('View Customer'), array('action' => 'view', $this->Form->value('Customer.id'))); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $this->Form->value('Customer.id')), null, __('Are you sure you want to delete "%s" customer?', $this->Form->value('Customer.customer_name'))); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Back to menu'), array('controller' => 'storeHome', 'action' => 'index')); ?></li>
	</ul>
</div>
</div>
