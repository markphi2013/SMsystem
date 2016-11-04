<div class="groups form users-index program-body">
<h3><?php echo __('Add Supplier'); ?></h3>
<?php echo $this->Form->create('Supplier',  array('type' => 'post'));?>
	<fieldset>
	
	<?php
	    echo $this->Form->input('id');
	    echo $this->Form->input('company_name', array('label' => __('Company Name')));
		echo $this->Form->input('supplier_name', array('label' => __('Name')));
		echo $this->Form->input('supplier_contact', array('label' => __('contact')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Suppliers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Back to menu'), array('controller' => 'storeHome', 'action' => 'index')); ?></li>
	</ul>
</div>
</div>
