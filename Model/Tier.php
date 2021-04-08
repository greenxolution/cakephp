<?php
App::uses('AppModel', 'Model');

App::uses('TierBehavior', 'Model');

/**
 * Tier Model
 *
 */
class Tier extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	public $hasMany = array('MwsInventory', 'ViewMatchInv');
	
	public function listTierBehavior(){
		
		$tierBehavior = new TierBehavior();
		
		return $tierBehavior->listTierBehavior();
	}
	
	public function findLowestTier(){
		
		return $this->ViewMatchInv->find('list', array('fields' => array('SKU', 'e_price'), 'conditions' => array('tier_id' => 2)));
	}
}
