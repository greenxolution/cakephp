<?php
App::uses('AppModel', 'Model');
/**
 * EntrenueProductsHistory Model
 *
 */
class EntrenueProductsHistory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'entrenue_products_history';

	public $obj = 'EntrenueProduct';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	public function insertRecord($newValue =  array(), $oldValue = array()){

		App::import('Model','EntrenueProduct');

		$entrenueProduct = new EntrenueProduct();


		foreach ($entrenueProduct->history_fields as $key => $field) {

			if($newValue['EntrenueProduct'][$field] != $oldValue['EntrenueProduct'][$field]){

				$entrenueHistory = array('EntrenueProductsHistory'=>array('field'=>$field, 
				'newvalue'=>$newValue['EntrenueProduct'][$field], 
				'oldvalue'=>$oldValue['EntrenueProduct'][$field],
				'entrenue_product_id'=>intval ($oldValue['EntrenueProduct']['id']),
				'field_type'=>gettype($newValue['EntrenueProduct'][$field])));

				debug($entrenueHistory);

				$this->create();

				$this->save($entrenueHistory);


			}
		}
	}

}
