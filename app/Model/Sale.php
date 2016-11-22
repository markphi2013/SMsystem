<?php
App::uses('AppModel', 'Model');
/**
* Product Model
*
*/
class Sale extends AppModel
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
        'product_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'sale_price' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'quantity_sold' => array(
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
