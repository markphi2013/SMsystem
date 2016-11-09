<?php
    $this->RequireJs->scripts(array("jquery"));
?>
<div class="groups form users-index program-body">
<h3><?php echo __('Receive Product'); ?></h3>
<?php echo $this->Form->create('Receive',  array('type' => 'post'));?>
	<fieldset>
	
	<?php
		//echo $this->Form->input('id');
		foreach ($products as $product) {			
			$productIsbn = $product['Product']['product_isbn'];
			$productC[$productIsbn] =  $product['Product'];
		}
		echo $this->Html->tag('label', __('Product Name'));
		echo "<br />";
		echo $this->Form->select('product_name', $productNamesC, array('label' => __('Product Name'),
			'id' => 'product-name'));
		$this->Js->set('productCs', $productC);
		$this->Js->get('#product-name')->event('change',
	    	'var productName = $("#product-name option:selected").val();
	    	 var pd = $("#product-name").val();
	    	 var productIsbn = window.app.productCs[productName]["product_isbn"];
	   		 $("#product-isbn").val(productIsbn);
	   		 var productQuantity = window.app.productCs[productName]["quantity_stock"];
	   		 $("#current-stock").val(productQuantity);
	   		 var productSupplier = window.app.productCs[productName]["supplier_id"];
	   		 $("#supplier-name").val(productSupplier);
	    	');

		echo "<br />";
		echo $this->Form->input('product_isbn',
		 array('label' => __('UPC/EAN/ISBN'),
			'id' => 'product-isbn',
			'readonly' => true,
			'style' => 'color:#AAAAAA'));
		/*echo $this->Html->tag('label', __('Supplier name'));
		echo $this->Form->select('supplier_id', $suppliers, array('empty' => __('Choose one.....')));*/
		echo $this->Form->input('supplier_id', 
			array(
	    	'label' => __('Supplier name'),
	    	'id' => 'supplier-name',
	   		'readonly' => true,
	   		'style' => 'color:#AAAAAA'));
		echo $this->Form->input('current_stock',
		 array('label' => __('Current stock'),
			'id' => 'current-stock',
	   		'readonly' => true,
	   		'style' => 'color:#AAAAAA'));
		echo $this->Form->input('new_stock', array('label' => __('New stock')));		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="admin-action">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('View Product'), array('action' => 'view', $this->Form->value('Product.id'))); ?> </li>		
		<li><?php echo $this->Html->link(__('List Product'), array('action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('Back to menu'), array('controller' => 'storeHome', 'action' => 'index')); ?>
		</li>
	</ul>
</div>
</div>
