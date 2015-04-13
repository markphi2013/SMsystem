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
        'supplier_name'=> array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'pieces_per_carton' => array(
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