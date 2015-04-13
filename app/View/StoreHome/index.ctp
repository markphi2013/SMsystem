<div class="users-index program-body">
	<h3><?php echo __('Admin');?></h3>
	<p>Page under construction</p>
	<p>Any suggestions are welcome.</p>	
</div>
<div class="admin-action">
<div class="actions break">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
        <li><?php echo $this->Html->link(__('Stock Management'), array('controller' => 'storeHome', 'action' => 'indexStore')); ?> </li>
		<li><?php echo $this->Html->link(__('Supplier Management'), array('controller' => 'Suppliers')); ?> </li>
		<li><?php echo $this->Html->link(__('Products Management'), array('controller' => 'products')); ?> </li>
		<li><?php echo $this->Html->link(__('Users Management'), array('controller' => 'users')); ?></li>
		<li><?php echo $this->Html->link(__('Groups Management'), array('controller' => 'groups')); ?> </li>
	</ul>
</div>
</div>


