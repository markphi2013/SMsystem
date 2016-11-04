<?php
App::uses('AppModel', 'Model');
/**
* Product Model
*
*/
class Product extends AppModel
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
        'supplier_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                ),
            ),        
        'cost_price' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                ),
            ),
        'retail_price' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                ),
            ),
        'quantity_stock' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                ),
            ),
        );
    
    public $belongsTo = array(
        'Supplier' => array(
            'className' => 'Supplier',
            'foreignKey' => 'supplier_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
            )
        );
    
    public $actsAs = array('Acl' => array('type' => 'requester'));
    
    
    public function parentNode()
    {
        return null;
    }
    
    
}
