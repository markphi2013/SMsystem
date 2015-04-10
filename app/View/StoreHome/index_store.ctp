<div class="store-index">
	<h3><?php echo __('Stock Management');?></h3>
	<div class="ttc-data-control">
        <div class="actions tabs">
            <ul>
                <li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Update'), array('action' => 'edit')); ?></li>
                <li><?php echo $this->Html->link(__('Back to Admin menu'), array('controller' => 'storeHome', 'action' => 'index')); ?></li>
            </ul>
        </div>	
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
	<div class="ttc-table-display-area-store">
	<div class="ttc-table-scrolling-area display-height-size">
	<table cellpadding="0" cellspacing="0">
	    <thead>
            <th class="content"><?php echo $this->Paginator->sort('Date');?></th>
            <th class="content"><?php echo $this->Paginator->sort('Import Code');?></th>
            <th class="content"><?php echo $this->Paginator->sort('Product');?></th>
            <th class="content"><?php echo $this->Paginator->sort('Supplier');?></th>
            <th class="content content-prev" style="color:#FF8C0F">
            <?php echo $this->Paginator->sort('Prev-carton');?>
            </th>
            <th class="content" style="color:#FF8C0F">
            <?php echo $this->Paginator->sort('Prev-pieces');?>
            </th>
            <th class="content" style="color:#3B8230">
            <?php echo $this->Paginator->sort('Current-carton');?>
            </th>
            <th class="content" style="color:#3B8230">
            <?php echo $this->Paginator->sort('Current-pieces');?>
            </th>
            <th class="content" style="color:#C43C35">
            <?php echo $this->Paginator->sort('Sold-carton');?>
            </th>
            <th class="content" style="color:#C43C35">
            <?php echo $this->Paginator->sort('Sold-pieces');?>
            </th>
	    </thead>
	    <tbody>
	        <?php foreach ($storeIteams as $storeIteam): ?>
	        <tr>	            
	            <td class="content"><?php //print_r($storeIteam);
	            echo h($this->Time->format('d/m/Y', $storeIteam['StoreHome']['date_time'])); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['StoreHome']['product_import_code']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['Product']['product_name']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['Supplier']['supplier_name']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['StoreHome']['previous_cartons']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['StoreHome']['previous_pieces']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['StoreHome']['current_cartons']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['StoreHome']['current_pieces']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['StoreHome']['sold_cartons']); ?>&nbsp;</td>
	            <td class="content"><?php echo h($storeIteam['StoreHome']['sold_pieces']); ?>&nbsp;</td>
	         </tr>
	        <?php endforeach; ?>
	    </tbody>
	</table>
	</div>
	</div>	
  </div>
