<?php
App::uses('AppModel', 'Model');
/**
* Store Model
*
*/
class StoreHome extends AppModel
{
    /**
    * Display field
    *
    * @var string
    */
    public $displayField = 'name';
    /**
    * Validation rules
    *
    * @var array
    */
    public $validate = array(
        'supplier_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'supplier_contact'=> array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'product_name'=> array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
        'carton'=> array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            'numeric' => array(
                'rule' => array('numeric'),
                ),
            ),
        'pieces'=> array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
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
    
    public $belongsTo = array(
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
            ),
        'Supplier' => array(
            'className' => 'Supplier',
            'foreignKey' => 'supplier_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
            )
        );
    
    
}
