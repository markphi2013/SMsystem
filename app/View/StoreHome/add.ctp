<div class="groups form users-index program-body">
	<h3><?php echo __('Add Stock'); ?></h3>

	<?php echo $this->Form->create('StoreHome',  array('type' => 'post'));?>
	<fieldset>
	<table>
	<tbody>
	<tr>
	<td><?php echo $this->Form->input('product_import_code', array('label' => __('Import Code'))); ?></td>
	</tr>
	<tr>
	<td><?php 
    echo $this->Html->tag('label', __('Product Name'));
	echo $this->Form->select('product_id', $products, array('empty' => __('Choose one.....')));
	?></td>
	</tr>
	<tr><td></td></tr>
	<tr><td><?php 
	echo $this->Html->tag('label', __('Supplier name'));
	echo $this->Form->select('supplier_id', $suppliers, array('empty' => __('Choose one.....')));
	 ?></td></tr>
	<tr>
	<td class="carton-input"><?php  echo $this->Form->input('current_cartons', array('label' => __('Carton'))); ?></td>
	<td class="carton-input"><?php  echo $this->Form->input('current_pieces', array('label' => __('Pieces'))); ?></td>
	</tr>
	</tbody>
	</table>
	</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Stock'), array('action' => 'indexStore')); ?> </li>
		<li><?php echo $this->Html->link(__('Back to Admin menu'), array('controller' => 'storeHome', 'action' => 'index')); ?></li>
	</ul>
</div>
</div>
