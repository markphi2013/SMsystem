<div class="groups view users-index program-body">
<h3><?php  echo __('Supplier');?></h3>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['supplier_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($supplier['Supplier']['date_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Supplier'), array('action' => 'edit', $supplier['Supplier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Supplier'), array('action' => 'delete', $supplier['Supplier']['id']), null, __('Are you sure you want to delete "%s" supplier?', $supplier['Supplier']['supplier_name'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Supplier'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Supplier'), array('action' => 'add')); ?> </li>
	</ul>
</div>
</div>
