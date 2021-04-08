<?php

App::import('Model','TierBehavior');

App::import('Model','LowestOfferListingsForSKU');

App::import('Model','Supplier');


/**
 * Application Tier
 *
 *
 * @package       app.Console.Command
 */
class TierShell extends AppShell {
	
	public function main(){
		parent::main();
	
		$this->setVariables();
		
		
		///SEARCH LOWEST PRICE //////
		App::import('Model','LowestOfferListingsForSKU');
		
		$LowestOfferListingsForSKU = new LowestOfferListingsForSKU();
		
		App::import('Model','MwsInventory');
		
		$MwsInventory = new MwsInventory();
		
		$result = $MwsInventory->find('all', array('fields'=>array('sku'),
									'conditions' => array('tier_id' => $this->args[0])));
		
		$LowestOfferListingsForSKU->searchPrices(Set::classicExtract($result, '{n}.MwsInventory.sku'));
		///END SEARCH LOWEST PRICE //////
		
// 		$a = Configure::read('LowestOfferListingsForSKU.list');
		
		
		$tierBehavior = new TierBehavior();
		

		$value['ViewInventorySupplier']['sku'] = '5310043USA';
		
		$tierBehavior->setBehaviour($this->args[0]);
		
// 		$tierBehavior->getListTierPrice('469032723USA');

// 		$tierBehavior->getListTierPrice('8316801USA');
		
		$item_pricing = $tierBehavior->getListTierPrice();
		$tierBehavior->flushPricingFeed($item_pricing);
		
		
		debug('////////////////////////////////////////////END/////////////////////////////////////');
		
	
	}
	
	
	protected function setVariables(){
		
		$lowestOfferListingsForSKU = new LowestOfferListingsForSKU();
		
		$lowestOfferListingsForSKU->cacheAllList();
		
		$supplier = new Supplier();
		
		$supplier->cacheAllList();
		
		$tierBehavior = new TierBehavior();
		
		$tierBehavior->cacheAllList();
		
		
	}

}
