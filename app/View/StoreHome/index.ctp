<div class="users-index program-body">
	<h3><?php echo __('Admin');?></h3>
	<p>Page under construction</p>
	<p>Any suggestions are welcome.</p>	
</div>
<div class="admin-action">
<div class="actions break">
	<h3><?php echo __('Actions'); ?></h3>
	<ul> 
		<li><?php echo $this->Html->link(__('Sales'), array('controller' => 'sales')); ?> </li>       
        <li><?php echo $this->Html->link(__('Products'), array('controller' => 'products')); ?> </li>
		<li><?php echo $this->Html->link(__('Suppliers'), array('controller' => 'Suppliers')); ?> </li>
		<li><?php echo $this->Html->link(__('Customers'), array('controller' => 'Customers')); ?> </li>
		<li><?php echo $this->Html->link(__('Stock '), array('controller' => 'storeHome', 'action' => 'indexStore')); ?> </i>		
		<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users')); ?></li>
		<li><?php echo $this->Html->link(__('User Groups'), array('controller' => 'groups')); ?> </li>
	</ul>
</div>
</div>


