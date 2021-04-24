<?php 

class ExecuteShell extends AppShell {
	
	
	public $action = array();
	
	
	public function sub_main(){
		
		
		foreach ($this->args as $key => $value) {
			
			$this->action[$key]	= $value;
		}
		
		$this->out(print_r($this->action));
		
	}
	
	public function feed_push(){
		
		debug(date('Y-m-d H:i:s'));
		App::import('Model','EntrenueProduct');
		
		$products = new EntrenueProduct();
		
		$res = $products->query('SELECT i.sku as SKU, i.price AS Estimated
								FROM `LowestOfferListingsForSKUResponse` as l join entrenue_products as e on
								l.sku = e.sku
								join mws_inventory as i on i.sku = l.sku
								where ((l.listingprice - e.price) - 3) > 0 and e.quantity > 0');
		
		
		$myprices = Hash::extract($res, '{n}.i');
		
		debug($myprices);
		
		App::import('Model','SubmitFeed');
		
		$submitFeed = new SubmitFeed();
		
		$submitFeed->flushFeed($myprices, 'repricing');
		
		debug(date('Y-m-d H:i:s'));
		

	}
	
	public function product(){
		
		App::import('Model','Product');
		
		$products = new Product();
		
		$products->load();
	}
	
	public function entrenue_import_xml(){
		
		App::import('Model','EntrenueProduct');
		
		$entrenueProduct = new EntrenueProduct();
		
		$entrenueProduct->importXML('files/XML_FILES/xmlfile_2016-05-21-05_15_22.xml');
	}
	
	public function eldorado_price(){
	
		App::import('Model','EldoradoPrice');
	
		$eldoradoPrice = new EldoradoPrice();
	
		$eldoradoPrice->import('EldoradoPrices.txt');
	
	
	}
	
	public function nalpac(){
	
		App::import('Model','NalpacProduct');
	
		$nalpac = new NalpacProduct();
	
		$nalpac->import('NalpacItems.txt');
	
	
	}
	
	public function eldorado(){
		
		App::import('Model','EldoradoProduct');
		
		$eldoradoProduct = new EldoradoProduct();
		
		$eldoradoProduct->import('EldoradoJanuary2016.txt');
		
		
	}

	public function main(){

		App::import('Model','EntrenueAPI');
		
		$entrenueProduct = new EntrenueAPI();

		$messages = $entrenueProduct->find('all');

		debug($messages,2);


	}
	
	public function test(){
		
		
		$string = "&lt;p&gt;&quot;When it comes to brewing up scorchingly hot sexual chemistry. Day has few literary rivals.&quot; - Booklist Gideon Cross came into my life like lightning in the darkness... He was beautiful and brilliant, jagged and white-hot. I was drawn to him as I'd never been to anything or anyone in my life. I craved his touch like a drug, even knowing it would weaken me. I was flawed and damaged, and he opened those cracks in me so easily... Gideon knew. He had demons of his own. And we would become the mirrors that reflected each other's most private wounds...and desires. The bonds of his love transformed me, even as I prayed that the torment of our pasts didn't tear us apart... &quot;Bared to You obliterates the competition...Unique and unforgettable.&quot; - Joyfully Reviewed &quot;If I were to recommend any book today to readers who enjoyed Fifty Shades of Grey...this would be the first one I would offer...Scorching love scenes.&quot; - Dear Author &quot;An erotic romance that should not be missed.&quot; - Romance Novel News &quot;Hot...page-meltingly hot.&quot; - Darhk Portal&lt;/p&gt;";
		
		debug($string);
		
		$a = ereg_replace('(&lt;h2&gt;).*(&lt;\/h2&gt;)$', "", $string);
		
		debug($a);
		
		debug(str_replace("\\", "&#13;", $a));
	}
	
	
	/**
	 * Search all Lowest offer in the mws inventory
	 * Save in LowestOfferListingsForSKU table
	 * 
	 */
	public function lowest_offer_list_search(){
		
		App::import('Model','LowestOfferListingsForSKU');
		
		$LowestOfferListingsForSKU = new LowestOfferListingsForSKU();
		
		App::import('Model','MwsInventory');
		
		$MwsInventory = new MwsInventory();
		
		$result = $MwsInventory->find('all', array('fields'=>array('sku')));
		
		
		$LowestOfferListingsForSKU->searchPrices(Set::classicExtract($result, '{n}.MwsInventory.sku'));
		
		
		
	}
	
	public function test_mirage(){
		
		App::import('Model','MirageInventory');
		
		$MirageInventory = new MirageInventory();
		
		
		App::import('Model','LowestOfferListingsForASIN');
		
		$LowestOfferListingsForASIN = new LowestOfferListingsForASIN();
		
		$products = $MirageInventory->listItemsPrice();
		
		$temp_array = array();
		
		foreach ($products as $key => $item) {
			
			$i++;
			
			array_push($temp_array, $key);
			
			if (10 == $i){
				
				$i = 0;
				
					
				debug($temp_array);
				
				
				$s = $LowestOfferListingsForASIN->getPrice($temp_array);
				
				debug($s);
				
// 				$this->bestprice($s);
					
				$temp_array = array();
			}
			;
		}

		
// 		$asin = array('B0083DGMJO', 'B0083DGMQW', 'B0083DGN7U',
// 				'B0083DGO2O');
		
// // 		$LowestOfferListingsForASIN->listProduct($asin);
		
// 		$LowestOfferListingsForASIN->getPrice($asin);
		
	}
	
	/**
	 * this is a test
	 */
	public function test_price(){

		App::import('Model','LowestOfferListingsForASIN');
		
		$LowestOfferListingsForASIN = new LowestOfferListingsForASIN();
		

	}
	
	
	/**
	 * List Orders
	 * 
	 * 	1. List Orders
	 * 	2. Save orders in list_order table
	 * 	3. List Orders Items
	 * 	4. Save List Order Items in list_order_items table
	 * 
	 */
	public function run_list_order(){
		
		App::import('Model','ListOrder');
		
		$listOrder = new ListOrder();
		
		$listOrder->saveOrders();
		
		debug(date('Y-m-d H:i:s'));
		
	}
	
	public function run_tiers_repricing(){
		
		App::import('Model','Master');
		
		$master = new Master();
		
		$master->run_tiers_repricing();
		
		}
	
	
	public function run_lowest_repricing(){
		
		debug(date('Y-m-d H:i:s'));
		
		App::import('Model','Master');
		
		$master = new Master();
		
		$master->run_lowest_repricing();
		
	}
	
	
	/**
	 * This update the MWS Inventory table with the prices taken from MWS
	 * 
	 * 		1. List all products in mws_inventory table
	 * 		2. Get My price by SKU
	 * 		3. Update the prices in mws_inventory table
	 * 
	 */
	public function update_price_at_mws_inventory(){
		debug(date('Y-m-d H:i:s'));
		
		App::import('Model','Master');
		
		$master = new Master();
		
		$master->update_price_at_mws_inventory();
		
		debug(date('Y-m-d H:i:s'));
		
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
	public function update_quantity(){
		
		App::import('Model','Master');
		
		$master = new Master();
		
		$master->run_update();
	}
	
	
	public function update_entrenue(){
		
		App::import('Model','EntrenueProduct');
		
		$entrenueProduct = new EntrenueProduct();
		
		$entrenueProduct->updateFromXML(new File(WWW_ROOT.'files/XML_FILES'.DS.'xmlfile_2016-05-21-05_15_22.xml', true));
		
		
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
		
		App::import('Model','Master');
		
		
		$master = new Master();
		
		$master->run_competitive_repricing();
		
	}
	

	/**
	 * Invoke the export xml file from Entrenue
	 * Down load the xml file
	 * Update the entrenue_products table with values 
	 * Create and save the Loader Inv File
	 * 
	 * Step 1: Run twice per day
	 * 
	 */
	public function invfile(){
		
		App::import('Model','EntrenueProduct');
		
		debug("Entrenue Product Model: FTP");
		
		$entrenue = new EntrenueProduct();
		
		$entrenue->uploadInv();
		
	}
	
	
	/**
	 * 
	 * Invoke Processing Result Request
	 * Save the response in the processing_report table
	 * Update the status in submit_feed table
	 * 
	 */
	public function processing_report_result(){
		
		App::import('Model','ProcessingReport');
		
		debug(date('Y-m-d H:i:s'));
		
		$processingReport = new ProcessingReport();
		
		debug($processingReport->saveProcessingReportResult());
		
	}
	
	public function update_ansi(){
		
		App::import('Model','EntrenueProduct');
		
		debug(date('Y-m-d H:i:s'));
		
		$entrenue = new EntrenueProduct();
		
		$entrenue->updateANSI();
		
		debug(date('Y-m-d H:i:s'));
		
	}

	public function insert_inv(){
		
		App::import('Model','MwsInventory');
		
		debug(date('Y-m-d H:i:s'));
		
		$mwsInventory = new MwsInventory();
		
		debug($mwsInventory->import('Inventory+Report+07-13-2017.txt', 'inventory_report'));
		
	}
	
	
	public function listinv(){
		
		App::import('Model','ViewMatchInv');
		
		debug(date('Y-m-d H:i:s'));
		
		$mwsInventory = new ViewMatchInv();
		
		debug($mwsInventory->listItemsMinQuantity());
	}
	

	
	public function listMatchingProduct(){
		
		
		App::import('Model','ListMatchingProducts');
		
		$listMatchingProduct = new ListMatchingProducts();
		
// 		$listMatchingProduct->listProduct(Hash::extract($listMatchingProduct->query("SELECT UPC FROM  `GreenCloud`.`eldorado_products` WHERE Grouping_Class =  'BK' AND UPC <> '' AND UPC NOT IN (select distinct upc from `test_GreenCloud`.`ListMatchingProducts`)"), '{n}.eldorado_products.UPC'));

		$listMatchingProduct->listProduct(array('9780789450722'));
		
		
		
		$this->out($listMatchingProduct->useTable);
	}
	
	public function feed(){
		
		App::import('Model','SubmitFeed');
		
		$feed = new SubmitFeed();
		
		debug($feed->test2());
		
	}
	
	
	// 	/**
	// 	 * List the MWS Inventory table with SKU, Quantity
	// 	 *
	// 	 * Execute Flush Availability Feed Submit
	// 	 *
	// 	 * Step 2: After Step 1, run twice per day
	// 	 *
	// 	 */
	// 	public function update_quantity2(){
	
	// 		App::import('Model','ViewMatchInv');
	
	// 		debug(date('Y-m-d H:i:s'));
	
	// 		$viewMatchInv = new ViewMatchInv();
	
	// 		debug($viewMatchInv->listItemsPrice());
	
	
	// // 		App::import('Model','SubmitFeed');
	
	// // 		$feed = new SubmitFeed();
	
	// // 		$feed->flushFeed($viewMatchInv->listItemsQuantity());
	
	// // 		debug(date('Y-m-d H:i:s'));
	
	// 	}
	
	// 	public function competitive(){
	
	// 		App::import('Model','CompetitivePricingForASIN');
	
	// 		$competitive = new CompetitivePricingForASIN();
	
	// 	}	
	
	// 	public function test(){
	
	// 		App::import('Model','CompetitivePricingForASIN');
	
	
	// 		$master = new CompetitivePricingForASIN();
	
	// 		debug($master->name);
	// 	}
	
	// 	public function test2(){
	
	// 		App::import('Model','CompetitivePricingForSKU');
	
	
	// 		$master = new CompetitivePricingForSKU();
	
	// 		debug($master->name);
	// 	}
	
	
}

?>
