<?php
App::uses('AppModel', 'Model');
/**
 * MirageInventory Model
 *
 */
class MirageInventory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'mirage_inventory';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'asin1';
	
	/**
	 * List Items with virtual fields: SKU, Price
	 *
	 */
	public function listItemsPrice(){
	
		return $this->find('list', array(
				'fields' 		=> array('asin1', 'price')
		));
	}
	public $asin = array('B0083DGMJO','B0083DGMQW','B0083DGN7U');
	

}
