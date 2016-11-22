<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('Supplier', 'Model');
App::uses('Sale', 'Model');
App::uses('SaleOrder', 'Model');

class SalesController extends AppController
{
    
    var $uses = array(
        'Product',
        'Supplier',
        'Sale',
        'SaleOrder');
    

    var $helpers = array('Js' => array('Jquery'));

    public function beforeFilter()
    {
        parent::beforeFilter();
    }
    
    
    /**
    * index method
    *
    * @return void
    */
    public function index() 
    {
       // print_r($this->SaleOrder->find('all'));
        $this->SaleOrder->recursive = 0;
        $saleOrders  = $this->SaleOrder->find('all', array('fields' => array('id','retail_price', 'product_name', 'quantity', 'amount')));
        $this->set('saleOrders', $this->paginate());
        $products  = $this->Product->find('all', array('fields' => 
            array('quantity_stock',
             'product_name', 
             'product_isbn', 
             'supplier_id', 
             'product_isbn',
             'retail_price',
             'quantity_stock',)));
        $productNamesC  = $this->Product->find('list' , array('fields' => array('product_isbn', 'product_name')));
        $this->set(compact('productNamesC', 'products', 'saleOrders'));
    }

    
    /**
    * add method
    *
    * @return void
    */
    public function add()
    {
        if ($this->request->is('post')) {
            $amountComput = $this->request->data['Sales']['retail_price'] * $this->request->data['Sales']['quantity'];
            $newQuantityStock = $this->request->data['Sales']['quantity_stock'] - $this->request->data['Sales']['quantity'];
            $salesOrderAmnt = array('amount' => $amountComput);
            $productUpdateQuantity = array('quantity_stock' => $newQuantityStock);
            $productIsbnWhere = array('product_isbn' => $this->request->data['Sales']['product_isbn']);
            $this->Product->updateAll($productUpdateQuantity,$productIsbnWhere);

            $fullData = array_merge($salesOrderAmnt, $this->request->data['Sales']);
            $this->SaleOrder->create();
            if ($this->SaleOrder->save($fullData)) {
                $this->Session->setFlash(__('The Sale has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Sale could not be saved. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
               $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    
    /**
    * view method
    *
    * @param string $id
    * @return void
    */
    public function view($id = null) 
    {
        $this->Sale->id = $id;
        if (!$this->Sale->exists()) {
            throw new NotFoundException(__('Invalid Product.'));
        }
        $this->set('sale', $this->Sale->read(null, $id));
    }
    
    public function edit($id = null)
    {
        $this->Sale->id = $id;
        if (!$this->Sale->exists()) {
            throw new NotFoundException(__('Invalid group.'));
        }
        if ($this->request->is('post')) {
            if ($this->Sale->save($this->request->data)) {
                $this->Session->setFlash(__('The Sale has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Sale could not be saved. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
            }
        } else {
            $this->request->data = $this->Sale->read(null, $id);
        }
    }
    
    
    public function delete($id = null) 
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->SaleOrder->id = $id;
        if (!$this->SaleOrder->exists()) {
            throw new NotFoundException(__('Invalid Sale.'));
        }
        if ($this->SaleOrder->delete()) {
            $this->Session->setFlash(__('Sale deleted.'),
                'default',
                array('class'=>'message success')
                );
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Sale was not deleted.'));
        $this->redirect(array('action' => 'index'));
    }
}
