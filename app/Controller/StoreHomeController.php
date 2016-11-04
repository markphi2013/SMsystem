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
        $this->setOptions();
    }
         

    protected function setOptions()
    {
    
    $suppliers = $this->StoreHome->Supplier->find('list', array('fields' => array('supplier_name')));
    $products  = $this->StoreHome->Product->find('list', array('fields' => array('product_name')));
        $this->set(compact('suppliers','products'));
    
   }
    
    
}
