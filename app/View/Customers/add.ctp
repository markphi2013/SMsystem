<div class="groups form users-index program-body">
<h3><?php echo __('Add Customer'); ?></h3>
<?php echo $this->Form->create('Customer',  array('type' => 'post'));?>
	<fieldset>
	
	<?php
	    echo $this->Form->input('id');
		echo $this->Form->input('customer_name', array('label' => __('Name')));
		echo $this->Form->input('customer_contact', array('label' => __('Contact')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Back to menu'), array('controller' => 'storeHome', 'action' => 'index')); ?></li>
	</ul>
</div>
</div>
