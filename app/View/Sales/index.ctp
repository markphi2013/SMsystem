<?php
    $this->RequireJs->scripts(array("jquery"));
?>
<div class="groups index users-index">
	<h3><?php echo __('Sales');?></h3>
	<div class="ttc-data-control">
	<?php echo $this->Form->create('Sales',  array('type' => 'post', 'action'=>'add'));?>
	<fieldset>
	<?php

		function createRandomPassword() {
			$chars = "003232303232023232023456789";
			srand((double)microtime()*1000000);
			$i = 0;
			$pass = '' ;
			while ($i <= 7) {

				$num = rand() % 33;

				$tmp = substr($chars, $num, 1);

				$pass = $pass . $tmp;

				$i++;

			}
			return $pass;
		}
		$finalcode='RS-'.createRandomPassword();
		//print_r($finalcode); 

		echo $this->Form->input('invoice_id', array('label' => __(' '), 'value'=>$finalcode, 'type'=>"hiddens",  'class'=>'sale-qty-input'));

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
	    	 var retailPrice = window.app.productCs[productName]["retail_price"];
	   		 $("#retail-price").val(retailPrice);
	   		 var quantityStock = window.app.productCs[productName]["quantity_stock"];
	   		 $("#quantity-stock").val(quantityStock);
	   		 var productIsbn = window.app.productCs[productName]["product_isbn"];
	   		 $("#product-isbn").val(productIsbn);
	    	');

		echo $this->Form->input('retail_price', array('label' => __(' '), 'id'=>'retail-price', 'type'=>"hidden",  'class'=>'sale-qty-input'));
		echo $this->Form->input('quantity_stock', array('label' => __(' '), 'id'=>'quantity-stock', 'type'=>"hidden",  'class'=>'sale-qty-input'));
		echo $this->Form->input('product_isbn', array('label' => __(' '), 'id'=>'product-isbn', 'type'=>"hidden",  'class'=>'sale-qty-input'));


		echo $this->Form->input('quantity', array('label' => __(' '), 'placeholder'=>'Qty', 'value'=>"1",  'class'=>'sale-qty-input'));

	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	<div id="data-control-nav" class="ttc-paging paging">
	<?php
		echo "<span class='ttc-page-count'>";
		echo $this->Paginator->counter(array(
		    'format' => __('{:start} - {:end} of {:count}')
		    ));
		echo "</span>";
		echo $this->Paginator->prev('<', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->next(' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
	</div>
	<div class="ttc-table-display-area">
	<div class="ttc-table-scrolling-area display-height-size">
	<table cellpadding="0" cellspacing="0">
	    <thead>
            <th class="content"><?php echo $this->Paginator->sort('name');?></th>
            <th class="content"><?php echo $this->Paginator->sort('price');?></th>
            <th class="content"><?php echo $this->Paginator->sort('Qty');?></th>
            <th class="content"><?php echo $this->Paginator->sort('Total');?></th>
            <th class="action-admin"><?php echo __('Actions');?></th>
	    </thead>
	    <tbody>

	        <?php 
	        //print_r($saleOrders);
	        foreach ($saleOrders as $sale): ?>
	        <tr>
	        	<td class="content" id="product-name"><?php echo h($sale['SaleOrder']['product_name']); ?>&nbsp;</td>
	            <td class="content" id="current-stock"><?php echo h($sale['SaleOrder']['retail_price']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($sale['SaleOrder']['quantity']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($sale['SaleOrder']['amount']); ?>&nbsp;</td>
	            <td class="actions action-admin">
	                <?php //echo $this->Html->link(__('Update'), array('action' => 'edit', $product['Product']['id'])); ?>
	                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sale['SaleOrder']['id']), null, __('Are you sure you want to delete "%s" group?', $sale['SaleOrder']['product_name'])); ?>
	             </td>
	         </tr>
	        <?php endforeach; ?>
	    </tbody>
	</table>
	</div>
	</div>	
  </div>
    <div class="admin-action">
    <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('Back to menu'), array('controller' => 'storeHome', 'action' => 'index')); ?></li>
	</ul>
</div>
</div>
