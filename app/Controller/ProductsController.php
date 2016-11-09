<?php
App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
App::uses('Supplier', 'Model');
App::uses('Receive', 'Model');

class ProductsController extends AppController
{
  
    var $uses = array(
        'Product',
        'Supplier',
        'Receive');

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
        $this->Product->recursive = 0;
        $this->set('products', $this->paginate());
    }
    
    
    /**
    * view method
    *
    * @param string $product_id
    * @return void
    */
    public function view($product_id = null) 
    {
        $this->Product->id = $product_id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid Product.'));
        }
        $this->set('product', $this->Product->read(null, $product_id));
    }
    
    
    /**
    * add method
    *
    * @return void
    */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
            }
        }
        $suppliers  = $this->Product->Supplier->find('list', array('fields' => array('supplier_name')));
        $this->set(compact('suppliers'));
    }
    
    
    /**
    * edit method
    *
    * @param string $id
    * @return void
    */
    public function edit($id = null)
    {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product.'));
        }
        if ($this->request->is('post')) {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The Product has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
            }
        } else {
            $this->request->data = $this->Product->read(null, $id);
        }
        $suppliers  = $this->Product->Supplier->find('list', array('fields' => array('supplier_name')));
        $this->set(compact('suppliers'));
    }
    

    /**
    * receiving method
    *
    * @param string $id
    * @return void
    */
    public function receiving()
    {
       /* $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product.'));
        }*/
        if ($this->request->is('post')) {
            
            if ($this->Receive->save($this->request->data)) {
                $newQuantityStock =  $this->request->data['Receive']['current_stock'] + $this->request->data['Receive']['new_stock'];
                $productUpdateQuantity = array('quantity_stock' => $newQuantityStock);
                $productIsbnWhere = array('product_isbn' => $this->request->data['Receive']['product_isbn']);
                $this->Product->updateAll($productUpdateQuantity,$productIsbnWhere);

                $this->Session->setFlash(__('The Product has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be received. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
            }
        }
        /* else {
            $this->request->data = $this->Product->read(null, $id);
        }*/
        $suppliers  = $this->Product->Supplier->find('list', array('fields' => array('supplier_name')));
        //$products  = $this->Product->find('list', array('fields' => array('product_isbn', 'product_name', 'quantity_stock')));
        $productNamesC  = $this->Product->find('list' , array('fields' => array('product_isbn', 'product_name')));
        $products  = $this->Product->find('all', array('fields' => array('quantity_stock', 'product_name', 'product_isbn', 'supplier_id', 'product_isbn')));
       
        $this->set(compact('suppliers', 'products', 'productNamesC'));
    }
    
    /**
    * delete method
    *
    * @param string $id
    * @return void
    */
    public function delete($id = null) 
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product.'));
        }
        if ($this->Product->delete()) {
            $this->Session->setFlash(__('Product deleted.'),
                'default',
                array('class'=>'message success')
                );
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Product was not deleted.'));
        $this->redirect(array('action' => 'index'));
    }
    

  /*  protected function setOptions()
    {
        $countries                  = $this->Country->getNamesByNames();
        $prefixesByCountriesOptions = $this->Country->getPrefixesByNames();
        $errorTemplateOptions       = $this->Template->getTemplateOptions('unmatching-keyword');
        
        $maxCharacterPerSmsOptions = array_combine(
            $this->ShortCode->maxCharacterPerSmsOptions, 
            $this->ShortCode->maxCharacterPerSmsOptions);
        $this->set(compact('errorTemplateOptions', 'prefixesByCountriesOptions', 'maxCharacterPerSmsOptions', 'countries'));
    }*/
    
}
