<?php

App::uses('AppModel', 'Model');


/**
 * Master Model
 *
 * Manage all process
 *
 */
class Master extends AppModel {

	public $restore_rate 			= 10;

	public $maximum_request_quota 	= 20;

	public $percent_below_competitive	= 0.05;

	public $drophipping_fee				= 2.00;

	public $shipping_fee				= 1.50;

	public $items;

	public $pricing = array();

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);

	}
	
	public function run_tiers_repricing(){
		
		App::import('Model','Tier');
		
		$tier = new Tier();
		
		$this->run_lowest_repricing($tier->findLowestTier());
		
	}
	
	
	/**
	 *  1. List Price form ViewMatchInv
	 *  2. Find Lowest Offer Listing Price
	 *  3. Select the best price in GetBestPrice
	 *  4. Flush the best price list through Feed
	 *  
	 *  @version 1.2
	 *  
	 *  1. If the param Items is > 0
	 *  2. List Price form ViewMatchInv
	 *  3. Find Lowest Offer Listing Price
	 *  4. Select the best price in GetBestPrice
	 *  5. Flush the best price list through Feed
	 *  
	 */
	public function run_lowest_repricing($items = array()){
		
		App::import('Model','ViewMatchInv');
		
		$viewMatchInv = new ViewMatchInv();
		
		if(count($items) > 0){
			
			$this->items = $items;
		}
		else{
			
			$this->items = $viewMatchInv->listItemsPrice();
		}
		
		debug($this->items);
		
		App::import('Model','LowestOfferListingsForSKU');
		
		$lowestOfferListingsForSKU = new LowestOfferListingsForSKU();
		
		$temp_array = array();
		
		$i = 0;
		
		foreach($this->items as $key => $item){
			
			$i++;
				
			array_push($temp_array, $key);
				
			if ($this->restore_rate == $i){
			
				$i = 0;
				
			
				$s = $lowestOfferListingsForSKU->getPrice($temp_array);
				
				debug($s);
				
				$this->bestprice($s);
			
				$temp_array = array();
			
			}
		}
		
		//Submit Pricing
		
		App::import('Model','SubmitFeed');
		
		$submitFeed = new SubmitFeed();
		
		$submitFeed->flushFeed($this->pricing, 'repricing');
		
		
		App::import('Model','MwsInventory');
		
		$mwsInventory = new MwsInventory();
		
		$mwsInventory->updatePricesWhenSubmit($this->pricing);
		
	}

	
	/**
	 * This update the MWS Inventory table with the prices taken from MWS
	 *
	 * 		1. List all products in mws_inventory table
	 * 		2. Get My price by SKU
	 * 		3. Update the prices in mws_inventory table
	 */
	public function update_price_at_mws_inventory(){

		App::import('Model','MwsInventory');

		$mwsInventory = new MwsInventory();

		$this->items = $mwsInventory->find('list', array('fields' => array('sku')));

		App::import('Model','MyPrice');

		$myPrice = new MyPrice();
		
		$temp_array = array();
		
		$i = 0;
		
		foreach($this->items as $key => $item){
			
			$i++;
			
			array_push($temp_array, $item);
			
			if ($this->restore_rate == $i){
				
				$i = 0;
				
				
				$mwsInventory->updatePrices($myPrice->getPrice($temp_array));
				
				$temp_array = array();
				
			}
			
		}
		
		//Submit Pricing
		
// 		App::import('Model','SubmitFeed');
		
// 		$submitFeed = new SubmitFeed();
		
// 		$submitFeed->flushFeed($this->pricing, 'repricing');
	}



	/**
	 * Lunch competitive pricing
	 * 
	 *  1. List View Match Int 
	 *  2. Find Competitive Price
	 *  3. Select the best price in GetBestPrice
	 *  4. Flush the best price list through Feed
	 *  
	 */
	public function run_competitive_repricing(){

		App::import('Model','CompetitivePricingForSKU');

		$competitivePricingForSKU = new CompetitivePricingForSKU();

		App::import('Model','ViewMatchInv');

		$viewMatchInv = new ViewMatchInv();

		$this->items = $viewMatchInv->listItemsPrice();

		$temp_array = array();

		$i=0;

		foreach($this->items as $key => $item){
				
			$i++;
				
			array_push($temp_array, $key);
				
			if ($this->restore_rate == $i){

				$i = 0;

				// 				debug($temp_array);
				//Array of 10 items to invoke competitive pricing
				$s = $competitivePricingForSKU->getPrice($temp_array);

				$this->bestprice($s);

				$temp_array = array();
			}
		}

		//Submit Pricing

		App::import('Model','SubmitFeed');

		$submitFeed = new SubmitFeed();

		$submitFeed->flushFeed($this->pricing, 'repricing');


		// 		debug($this->pricing);
	}

	/**
	 * This method follows the following steps
	 * 		1. Invoke to export the xmlfile in Entrenue website
	 * 		2. Download the xmlfile from Entrenue website
	 * 		3. Update the entrenue_products table: PRICE, MAP and QUANTITY FIELDS
	 *		4. Create the Load Inventory File. Save the Loader Inventory file at WWW_ROOT/files/LOADER_INV_FILES
	 *		5. List the items in the View: ViewMatchInv when the quantity are distinct
	 *			from mws_inventory and entrenue_products table.
	 *		6. Flush (invoke) the _POST_INVENTORY_AVAILABILITY_DATA_. Insert the new quantity values in the MWS inventory
	 *		7. Save in submit_feed table the response from the invokation
	 *
	 *
	 */
	public function run_update(){

		App::import('Model','EntrenueProduct');

		debug(date('Y-m-d H:i:s'));

		$entrenue = new EntrenueProduct();

		$entrenue->uploadInv();


		App::import('Model','ViewMatchInv');

		debug(date('Y-m-d H:i:s'));

		$viewMatchInv = new ViewMatchInv();


		App::import('Model','SubmitFeed');

		$feed = new SubmitFeed();

		$feed->flushFeed($viewMatchInv->listItemsQuantity());

		debug(date('Y-m-d H:i:s'));
		
		App::import('Model','MwsInventory');
		
		$inv = new MwsInventory();
		
		$inv->updateQuantity();
		
		
		

	}
	
	/**
	 * Here apply all profits.
	 * This is taken from this->items array
	 *
	 *
	 * @param unknown_type $value
	 */
	private function myMinPrice($value){
	
		$value = $value + $this->shipping_fee + $this->drophipping_fee;
	
		return floatval($value);
	}
	
	
	/**
	 * Return floatval the landedPrice price
	 * This is the price + shipping
	 *
	 * @param floatval $value
	 * @return float landedPrice
	 */
	private function landedPrice($value){
	
		//@todo: improve this code
	
		$a = array_values($value);
	
		return floatval($a[0]['Price']['ListingPrice']['Amount']);
	}
	
	private function profitPrice($competitive, $myMinPrie){
	
		$profit_price = round($competitive - ($competitive * $this->percent_below_competitive), 2);
	
		if($myMinPrie > $profit_price )
			return $myMinPrie;
		else
			return $profit_price;
	}

	/**
	 * Calculate best price
	 *
	 * read two array
	 * @return array with new price
	 *
	 */
	private function bestprice($competitive){
	
	
		foreach($competitive as $key => $value){
			
	
			if($this->landedPrice($value) < $this->myMinPrice($this->items[key($value)])){
	
	
				$price = $this->myMinPrice($this->items[key($value)]);
				
				debug(key($value).'	LANDING < MIN: '.$price.' ORIGIN: '.$this->items[key($value)]);
	
			}
			else{
	
				$price = $this->profitPrice($this->landedPrice($value), $this->myMinPrice($this->items[key($value)]));
				
				debug('LANDING > MIN: '.$price);
	
	
	
			}
	
	debug('LANDING-PRICE: '.$this->landedPrice($value).' | MY-MIN-PRICE: '.$this->myMinPrice($this->items[key($value)]).' | MY-PROFIT: '.$this->profitPrice($this->landedPrice($value), $this->myMinPrice($this->items[key($value)])));
	
			array_push($this->pricing, array('SKU' => key($value), 'Estimated' => $price));
		}
	
	}

}