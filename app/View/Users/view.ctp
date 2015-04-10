<div class="users view users-index program-body">
   <h3><?php  echo __('User');?></h3>
	<dl>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo $this->Html->link(__('Change Password'), array('action' => 'changePassword', $user['User']['id'])); ?>
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php
			$isAdmin = $this->AclLink->_allow('controllers/Admin');
			if ($isAdmin) {
			echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); 
			}else{
			    echo h($user['Group']['name']);
			}
			?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>		
	</dl>
  
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> 
		</li>
		<li><?php
		if ($isAdmin) {
		    echo $this->Html->link(__('List Users'), array('action' => 'index')); 
		}
		?> 
		</li>
		<li><?php
		if ($isAdmin) {
		echo $this->Html->link(__('Back to Admin menu'), array('controller' => 'admin', 'action' => 'index'));
		}else{
		echo $this->Html->link(__('Back'), array('controller' => 'storeHome', 'action' => 'index')); 
		}
		?></li>
	</ul>
</div>
</div>
