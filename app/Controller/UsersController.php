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
    var $components = array('LocalizeUtils');
    
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        //For initial creation of the admin users uncomment the line below
        $this->Auth->allow(
            'login',
            'logout');
    }
    
    
    public function index()
    {
        $paginate = array('all');
        //$defaultConditions = array();
        
        if (isset($this->params['named']['sort'])) {
            $paginate['order'] = array($this->params['named']['sort'] => $this->params['named']['direction']);
        }
        
        /*$conditions = $this->Filter->getConditions($this->User, $defaultConditions);
        if ($conditions != null) {
            $paginate['conditions'] = $conditions;
        }*/
        
        $this->set(compact('users'));
    }
    
    
    public function view($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user.'));
        }
        $this->set('user', $this->User->read(null, $id));
    }
    
    
    public function add()
    {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(
                    __('The user has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups   = $this->User->Group->find('list');
        $programs = $this->User->Program->find('list');
        $this->set(compact('groups', 'programs'));
    }
    
    
    public function edit($id = null)
    {
        $this->User->id = $id;
        
        if ($this->Auth->user('group_id') != 1 && $id != $this->Auth->user('id')) {
            $this->Session->setFlash(__('You are not allowed to edit another user\'s details, your tentative has been reported to Vusion adminstrator.'));
            $this->redirect(array('action' => 'edit', $this->Auth->user('id')));
        }            
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user.'));
        } 
        
        if ($this->request->is('post')) {
            $userId = $this->request->data['User']['id'];
            if ($this->Auth->user('group_id') != 1 && $userId != $this->Auth->user('id')) {
                $this->Session->setFlash(__('You are not allowed to edit another user\'s details, your tentative has been reported to Vusion adminstrator.'));
                $this->redirect(array('action' => 'edit', $this->Auth->user('id')));
            }  
            
            if ($user = $this->User->save($this->request->data)) {
                
                $this->Session->setFlash(__('The user has been saved.'),
                    'default',
                    array('class'=>'message success')
                    );
                if ($this->Acl->check(array(
                    'User' => array(
                        'id' => $this->Session->read('Auth.User.id')
                        )
                    ), 'Controllers/Users/index')) {                
                $this->redirect(array('action' => 'index'));
                    } else {                  
                        $this->redirect(array('action' => 'view', $this->Session->read('Auth.User.id')));
                    }
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
        }
        $groups   = $this->User->Group->find('list');
        $programs = $this->User->Program->find('list');
        $this->set(compact('groups', 'programs'));
    }
    
    
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user.'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted.'),
                'default',
                array('class'=>'message success')
                );
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted.'));
        $this->redirect(array('action' => 'index'));
    }
    
    
    public function login()
    {
        if ($this->Auth->user()) {
            $this->Session->setFlash(
                __('Already logged in...'),
                'default', 
                array('class'=>'message success'));
            $this->redirect($this->Auth->redirect());
        }
        
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $group     = $this->Group->findById($this->Session->read('Auth.User.group_id'));
                $groupName = $group['Group']['name'];
                $this->Session->write('groupName', $groupName);
                $this->Session->setFlash(__('Login successful.'),
                    'default',
                    array('class'=>'message success'));
                
                if ($this->Session->read('Auth.redirect')) {
                    $this->redirect($this->Session->read('Auth.redirect'));     
                }
                
                if ($this->Session->read('Auth.User.group_id') == 1) {
                    $this->redirect(array('controller' => 'admin'));
                }
                
                $id          = $this->Auth->user('id');
                $allPrograms = $this->Program->find('authorized', array(
                    'specific_program_access' => 'true',
                    'user_id' => $id));
                if ($this->Session->read('Auth.User.group_id') == 4) {
                    if (count($allPrograms) == 1) {
                        $programUrl = $allPrograms[0]['Program']['url'];
                        $this->redirect(array('program' => $programUrl,
                            'controller' => 'programHome',
                            'action' => 'index'));
                    }
                }
                
                $this->redirect($this->Auth->redirect());
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
    
    
    public function changePassword($id = null)
    {
        $hash           = Configure::read('Security.salt');
        $this->User->id = $id;
        
        if ($this->Auth->user('group_id') != 1 && $id != $this->Auth->user('id')) {
            $this->Session->setFlash(__('You are not allowed to edit another user\'s details, your tentative has been reported to Vusion adminstrator.'));
            $this->redirect(array('action' => 'changePassword', $this->Auth->user('id')));
        }            
        
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user.'));
        }
        $user   = $this->User->read(null, $id);
        $userId = $id;
        $this->set(compact('userId'));
        
        if ($this->request->is('post')) {
            
            if (Security::hash($hash.$this->request->data['oldPassword']) != $user['User']['password']) {
                $this->Session->setFlash(__('Old password is incorrect. Please try again.'));
            } else if ($this->request->data['newPassword'] != $this->request->data['confirmNewPassword']) {
                $this->Session->setFlash(__('New passwords doesn\'t match. Please try again.'));
            } else {
                $user['User']['password'] = $this->request->data['newPassword'];
                if ($this->User->save($user)) {
                    $this->Session->setFlash(__('Password changed successfully.'),
                        'default',
                        array('class'=>'message success')
                        );
                    $this->redirect(array('action' => 'view', $id));
                } else {
                    $this->Session->setFlash(__('Password saving failed.'));
                }    
            }
        }
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
        
        //allow manager to users and programs
        $group = $Group->find('first', array('conditions' => array('name' => 'manager')));
        if ($group == null) {
            echo "Acl ERROR: cannot find the group manager</br>";
        } else {
            $Group->id = $group['Group']['id'];
            $this->Acl->deny($Group, 'controllers');
            echo "Acl Done: ". $group['Group']['name']."</br>";
        }
        
        //allow program manager to programs
        $group = $Group->find('first', array('conditions' => array('name' => 'program manager')));
        if ($group == null) {
            echo "Acl ERROR: cannot find the group program manager</br>";
        } else {
            $Group->id = $group['Group']['id']."</br";
            $this->Acl->deny($Group, 'controllers');
            echo "Acl Done: ". $group['Group']['name']."</br>";
        }
        
        //allow partner to 
        $group = $Group->find('first', array('conditions' => array('name' => 'partner')));
        if ($group == null) {
            echo "Acl ERROR: cannot find the partner</br>";
        } else {
            $Group->id = $group['Group']['id']."</br";
            $this->Acl->deny($Group, 'controllers');
            $this->Acl->allow($Group, 'controllers/Programs/index');
            echo "Acl Done: ". $group['Group']['name']."</br>";
        }
        
        //allow partner messager to
        $group = $Group->find('first', array('conditions' => array('name' => 'partner manager')));
        if ($group == null) {
            echo "Acl ERROR: cannot find the group partner manager</br>";
        } else {
            
            $Group->id = $group['Group']['id'];
            $this->Acl->deny($Group, 'controllers');
            $this->Acl->allow($Group, 'controllers/Programs/index');
            echo "Acl Done: ". $group['Group']['name']."</br>";
        }
        
        echo 'AllDone';
        exit;
    }
    
    
}
