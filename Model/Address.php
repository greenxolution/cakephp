<?php
App::uses('AppModel', 'Model');
/**
 * Address Model
 *
 * @property Supplier $Supplier
 */
class Address extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'address';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'address1';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Supplier' => array(
			'className' => 'Supplier',
			'foreignKey' => 'supplier_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
