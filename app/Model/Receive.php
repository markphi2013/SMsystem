<?php
App::uses('AppModel', 'Model');
/**
* Product Model
*
*/
class Receive extends AppModel
{
    /**
    * Display field
    *
    * @var string
    */
   // public $displayField = 'name';
    /**
    * Validation rules
    *
    * @var array
    */
    public $validate = array(
        'product_isbn' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'product_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'quantity_stock' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                ),
            ),
        );
    
   
    public $actsAs = array('Acl' => array('type' => 'requester'));
    
    
    public function parentNode()
    {
        return null;
    }
    
    
}
