<?php
App::uses('AppController', 'Controller');


class SuppliersController extends AppController
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
        $this->Supplier->recursive = 0;
        $this->set('suppliers', $this->paginate());
    }

    
    /**
    * add method
    *
    * @return void
    */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Supplier->create();
            if ($this->Supplier->save($this->request->data)) {
                $this->Session->setFlash(__('The supplier has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The supplier could not be saved. Please, try again.'), 
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
        $this->Supplier->id = $id;
        if (!$this->Supplier->exists()) {
            throw new NotFoundException(__('Invalid Product.'));
        }
        $this->set('supplier', $this->Supplier->read(null, $id));
    }
    
    public function edit($id = null)
    {
        $this->Supplier->id = $id;
        if (!$this->Supplier->exists()) {
            throw new NotFoundException(__('Invalid group.'));
        }
        if ($this->request->is('post')) {
            if ($this->Supplier->save($this->request->data)) {
                $this->Session->setFlash(__('The Supplier has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The supplier could not be saved. Please, try again.'), 
                    'default',
                    array('class' => "message failure")
                    );
            }
        } else {
            $this->request->data = $this->Supplier->read(null, $id);
        }
    }
    
    
    public function delete($id = null) 
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Supplier->id = $id;
        if (!$this->Supplier->exists()) {
            throw new NotFoundException(__('Invalid supplier.'));
        }
        if ($this->Supplier->delete()) {
            $this->Session->setFlash(__('Supplier deleted.'),
                'default',
                array('class'=>'message success')
                );
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Supplier was not deleted.'));
        $this->redirect(array('action' => 'index'));
    }
}
