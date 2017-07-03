<?php
App::uses('AppModel', 'Model');
/**
 * Supplier Model
 *
 * @property Address $Address
 * @property Fee $Fee
 */
class Supplier extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'supplier';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'supplier_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Fee' => array(
			'className' => 'Fee',
			'foreignKey' => 'supplier_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ListOrder' => array('className' => 'ListOrder',
			'foreignKey' => 'supplier_id','dependent' => false)
	);
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
	}
	
	public function cacheAllList(){
		
		$this->recursive = 0;
		
		$all = $this->find('all');
		
		Configure::write('Supplier.list', $all);
		
	}
	

}
