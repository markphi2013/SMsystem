<?php
App::uses('AppModel', 'Model');
/**
* SaleOrder Model
*
*/
class SaleOrder extends AppModel
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
        'id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'retail_price' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'quantity' => array(
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
