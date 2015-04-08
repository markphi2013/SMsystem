<?php
App::uses('AppController', 'Controller');
App::uses('User', 'Model');
App::uses('Group', 'Model');
App::uses('BasicAuthenticate', 'Controller/Component/Auth/');

class UsersController extends AppController
{
    
    var $uses = array(
        'User',
        'Group');
    
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        //For initial creation of the admin users uncomment the line below
        $this->Auth->allow('login', 'logout');
    }
    
    
    public function login()
    {
        //$hash = 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mik';
        //$top = Security::hash($hash.'2040');
        // print_r($top);
        
        /*if ($this->Auth->user()) {
            $this->Session->setFlash(
                __('Already logged in...'),
                'default', 
                array('class'=>'message success'));
            $this->redirect($this->Auth->redirect());
        }*/
        
        if ($this->request->is('post')) {
            
            if ($this->Auth->login()) {
                /*$group     = $this->Group->findById($this->Session->read('Auth.User.group_id'));
                $groupName = $group['Group']['name'];
                $this->Session->write('groupName', $groupName);*/
                $this->Session->setFlash(__('Login successful.'),
                    'default',
                    array('class'=>'message success'));
                print_r($this->Session->read('Auth.User.group_id'));
                $this->redirect(array('controller' => 'storeHome'));
                //$this->redirect($this->Auth->redirect());
            } else {
                if ($this->request->is('post')) {
                    $this->Session->setFlash(__('Invalid username or password, try again.'));
                }
                return $this->redirect(array('controller' => 'users', 'action' => 'login'));
            }
        }
    }
    
    
    public function logout()
    {
        $this->Session->setFlash(__('Good Bye'),
            'default',
            array('class'=>'message success')
            );
        $this->Session->destroy();
        $this->redirect($this->Auth->logout());
    }
    
    
    public function initDB()
    {
        echo "Acl Start</br>";
        $Group =& $this->User->Group;
        
        //allow admins to everything
        $group     = $Group->find('first', array('conditions' => array('name' => 'administrator')));
        $Group->id = $group['Group']['id'];
        $this->Acl->allow($Group, 'controllers');
        echo "Acl Done: ". $group['Group']['name']."</br>";
        
        echo 'AllDone';
        exit;
        
    }
    
}
