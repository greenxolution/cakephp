<?php
App::uses('AppModel', 'Model');
/**
 * Fee Model
 *
 * @property Supplier $Supplier
 */
class Fee extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'description';

	public $unit = array(1=>'Percentage', 2=>'Nominal');


	// 	public $validate = array(
	// 			'unit' => array(
	// 					'allowedChoice' => array(
	// 							'rule' => array('inList', array('Percentage', 'Nominal')),
	// 							'message' => 'Enter either Percentage or Nominal.'
	// 					)
	// 			)
	// 	);


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

	public function afterSave($created, $options = array()){

		/** UPDATE total_fee FIELD IN THE SUPPLIER **/
		$this->updateTotalFee($this->data['Fee']['supplier_id']);
	}

	public function beforeDelete($cascade = true) {

		/** UPDATE total_fee FIELD IN THE SUPPLIER **/
		$supplier_id  = $this->find('first', array(
				'conditions' => array('Fee.id' => $this->id),
				'fields' => array('Fee.supplier_id')
		));

		$fee = $this->find('count', array(
				'conditions' => array('Fee.id' => $this->id)
		));


		if($fee == 1){
				
			//** MAKE CERO TOTAL FEE//
			$this->query('UPDATE `supplier` SET total_fee = 0 WHERE id = '.$supplier_id['Fee']['supplier_id']);
				
		}
		else{
			
			$this->updateTotalFee($supplier_id['Fee']['supplier_id']);
		}

	}

	/**
	 * Update total_fee field in Supplier table
	 * 
	 * @param id $supplier_id
	 */
	protected function updateTotalFee($supplier_id){

		$this->query('UPDATE `supplier` SET total_fee = (SELECT SUM(amount) FROM FEES WHERE supplier_id = '.$supplier_id.') WHERE id = '.$supplier_id);

	}
}
