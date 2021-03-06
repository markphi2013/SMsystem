<?php
App::uses('AppModel', 'Model');
/**
* Supplier Model
*
*/
class Supplier extends AppModel
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
        'company_name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                ),
            ),
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
    );
    
    
    public $actsAs = array('Acl' => array('type' => 'requester'));
    
    
    public function parentNode()
    {
        return null;
    }
    
    
}
