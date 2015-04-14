<?php
App::uses('AppController', 'Controller');
App::uses('StoreHome', 'Model');
App::uses('Product', 'Model');

class StoreHomeController extends AppController
{
    var $uses = array(
        'StoreHome',
        'Product'
        );
    
    var $helpers = array('Js' => array('Jquery'));
    
    public function beforeFilter()
    {
        parent::beforeFilter();
    }
    
    
    public function constructClasses()
    {
        parent::constructClasses();
    }
    
    
    public function index() 
    {
        
    }
    
    public function indexStore() 
    {
        $this->StoreHome->recursive = 0;
        $this->set('storeIteams', $this->paginate());
    }
    
    
    public function add()
    {
        if ($this->request->is('post')) {
            $this->StoreHome->create();
            if ($this->StoreHome->save($this->request->data)) {
                $this->Session->setFlash(__('The StoreHome has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'add'));
            } else {
                $this->Session->setFlash(__('The StoreHome could not be saved. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
            }
        }
        $products  = $this->StoreHome->Product->find('list');
        $suppliers  = $this->StoreHome->Supplier->find('list');
        $this->set(compact('products', 'suppliers'));
    }
    
    
    public function edit()
    {
        $storeUpdateOptions = $this->StoreHome->find('list');
        $r = $this->StoreHome->find('list', array(
            'fields' => array('supplier_id','previous_cartons','previous_pieces')
            ));
        print_r($r);
        Print_r('***********');
        print_r($storeUpdateOptions);
        
        /*$this->StoreHome->id = $id;
        if (!$this->StoreHome->exists()) {
            throw new NotFoundException(__('Invalid storeHome.'));
        }
        $this->Product->product_id = $id;
        print_r($id);
        /*if (!$this->StoreHome->exists()) {
            throw new NotFoundException(__('Invalid storeHome.'));
        }*/
        /*if ($this->request->is('post')) {
            if ($this->StoreHome->save($this->request->data)) {
                $this->Session->setFlash(__('The storeHome has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The storeHome could not be saved. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
            }
        } else {
            $this->request->data = $this->StoreHome->read(null, $id);
        }*/
        $products  = $this->StoreHome->Product->find('list');
        $suppliers = $this->StoreHome->Supplier->find('list');
        $this->set(compact('products', 'suppliers', 'r'));
    }
    
    //protected function setOptions()
    //{
    
    
    
   // }
    
    
}
