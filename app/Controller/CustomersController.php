<?php
App::uses('AppController', 'Controller');


class CustomersController extends AppController
{
    
    
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
        $this->Customer->recursive = 0;
        $this->set('customers', $this->paginate());
    }

    
    /**
    * add method
    *
    * @return void
    */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Customer->create();
            if ($this->Customer->save($this->request->data)) {
                $this->Session->setFlash(__('The customer has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Customer could not be saved. Please, try again.'), 
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
        $this->Customer->id = $id;
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid Product.'));
        }
        $this->set('customer', $this->Customer->read(null, $id));
    }
    
    public function edit($id = null)
    {
        $this->Customer->id = $id;
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid group.'));
        }
        if ($this->request->is('post')) {
            if ($this->Customer->save($this->request->data)) {
                $this->Session->setFlash(__('The Customer has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Customer could not be saved. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
            }
        } else {
            $this->request->data = $this->Customer->read(null, $id);
        }
    }
    
    
    public function delete($id = null) 
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Customer->id = $id;
        if (!$this->Customer->exists()) {
            throw new NotFoundException(__('Invalid Customer.'));
        }
        if ($this->Customer->delete()) {
            $this->Session->setFlash(__('Customer deleted.'),
                'default',
                array('class'=>'message success')
                );
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Customer was not deleted.'));
        $this->redirect(array('action' => 'index'));
    }
}
