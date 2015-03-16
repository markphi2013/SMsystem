<?php
App::uses('Controller', 'Controller');

class AppController extends Controller
{
    var $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login',
                
                ),
            'loginRedirect' => array(
                'controller' => 'programs',
                'action' => 'index'
                ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
                ),
            'authenticate' => array(
                'Basic' => array(
                    'fields' => array('username' => 'email')
                    ),
                'Form' => array(
                    'fields' => array('username' => 'email')
                    )
                ),
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
                )
            ),
        'Acl',
        'Cookie');
    
    
    public function beforeFilter()
    {
        parent::beforeFilter();
    }  
    
    
    public function constructClasses()
    {
        parent::constructClasses();
    }
    
    
    public function beforeRender()
    {
        $this->layout = 'default';
    }
    
    
}
