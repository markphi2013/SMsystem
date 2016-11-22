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
        $this->Sale->recursive = 0;
        $products  = $this->Product->find('all', array('fields' => 
            array('quantity_stock',
             'product_name', 
             'product_isbn', 
             'supplier_id', 
             'product_isbn')));
         $productNamesC  = $this->Product->find('list' , array('fields' => array('product_isbn', 'product_name')));
       
        $this->set('sales_order', $this->paginate());
        $this->set(compact('productNamesC', 'products'));
    }

    
    /**
    * add method
    *
    * @return void
    */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Sale->create();
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
        $this->Sale->id = $id;
        if (!$this->Sale->exists()) {
            throw new NotFoundException(__('Invalid Sale.'));
        }
        if ($this->Sale->delete()) {
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
