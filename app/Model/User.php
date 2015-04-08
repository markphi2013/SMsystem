<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
*  User Model
*
*  @property Group $Group
*  @property Program $Program
*/
class User extends AppModel
{
    
    //public $name = 'User';
    
    /**
    *  Display field
    *
    *  @var string
    */
    //public $displayField = 'username';
    /**
    *  Validation rules
    *
    *  @var array
    */
    public $validate = array(
        'username' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'password' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            /*'minLength' => array(
                'rule' => array('minLength', 8),
                'message' => 'Password must be at least 8 characters long'
                ),
            'alphaNumeric' => array(
                'rule' => '/^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z\d]+$/',
                'message' => 'Password must be letters and numbers, and contain atleast one number'
                ),*/
            ),
        'email' => array(
            'email' => array(
                'rule' => 'email',
                'message' => 'Invalid email address',
                ),
            ),
        'group_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                ),
            ),
        'limited_program_access' => array(
            'boolean' => array(
                'rule' => array('boolean'),
                ),
            ),
        );
    
    public $belongsTo = array(
    'Group' => array(
    'className' => 'Group',
    'foreignKey' => 'group_id',
    'conditions' => '',
    'fields' => '',
    'order' => ''
    )
    );
    
    
    public function beforeSave()
    {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
    
    
    
}
