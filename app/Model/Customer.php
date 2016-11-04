<?php
App::uses('AppModel', 'Model');
/**
* Customer Model
*
*/
class Customer extends AppModel
{
    /**
    * Display field
    *
    * @var string
    */
    //public $displayField = 'name';
    /**
    * Validation rules
    *
    * @var array
    */
    public $validate = array(
        'customer_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'customer_contact'=> array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
    );
    
    
    public $actsAs = array('Acl' => array('type' => 'requester'));
    
    
    public function parentNode()
    {
        return null;
    }
    
    
}
