<?php
App::uses('AppModel', 'Model');
/**
 * MwsInventoryHistory Model
 *
 */
class MwsInventoryHistory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'mws_inventory_history';

	public $obj = 'MwsInventory';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	/**
	 * 
	 * @date: 2021-05-23
	 * 
	 * Returns updated & activated MwsInventory list
	 * 
	 */
	public function insertRecord($newValue =  array(), $oldValue = array()){

		App::import('Model','MwsInventory');

		$mwsInventory = new MwsInventory();

		$data = array();


		foreach ($mwsInventory->history_fields as $key => $field) {

			if($newValue['MwsInventory'][$field] != $oldValue['MwsInventory'][$field]){

				$entrenueHistory = array('MwsInventoryHistory'=>array('field'=>$field, 
				'newvalue'=>$newValue['MwsInventory'][$field], 
				'oldvalue'=>$oldValue['MwsInventory'][$field],
				'mws_inventory_id'=>intval ($newValue['MwsInventory']['id']),
				'field_type'=>gettype($newValue['MwsInventory'][$field])));

				debug($entrenueHistory);

				try{

					$this->create();

					if($this->save($entrenueHistory)){

						debug('add MwsInventoryHistory.: '.$newValue['MwsInventory']['asin'].'-: '.$newValue['MwsInventory']['item_offer']);
						
						$data = $newValue;
					}

				}catch (Exception $e) {
					
					echo 'Caught MwsInventoryHistoryAPI exception: '.$e->getFile().  $e->getMessage(). "\n";
				
				}

			}
		}

		return count($data)>0?$data:null;
	}

}
