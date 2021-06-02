<?php
App::uses('AppController', 'Controller');
/**
 * SubmitFeeds Controller
 *
 * @property SubmitFeed $SubmitFeed
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property nComponent $n
 * @property SessionComponent $Session
 */
class SubmitFeedsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	
	public $feedType = array(	'_POST_PRODUCT_PRICING_DATA_' => 'PRICING',
								'_POST_INVENTORY_AVAILABILITY_DATA_' => 'AVAILABILITY');


	public function feed(){

		$feedApi = new \ClouSale\AmazonSellingPartnerAPI\Api\FeedsApi($config);

    $contentType = 'text/xml; charset=UTF-8'; // please pay attention here, the content_type will be used many time

    $feedDocument = $feedApi->createFeedDocument(new \ClouSale\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentSpecification([
        'content_type' => $contentType,
    ]));

    $feedDocumentId = $feedDocument->getPayload()->getFeedDocumentId();
    $url = $feedDocument->getPayload()->getUrl();
    $key = $feedDocument->getPayload()->getEncryptionDetails()->getKey();
    $key = base64_decode($key, true);
    $initializationVector = base64_decode($feedDocument->getPayload()->getEncryptionDetails()->getInitializationVector(), true);
    $encryptedFeedData = openssl_encrypt(utf8_encode(array2xml([ // array2xml is my private function, you can write your own function
        'data' => 'test',
    ])), 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $initializationVector);

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 90,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => $encryptedFeedData,
        CURLOPT_HTTPHEADER => [
            'Accept: application/xml',
            'Content-Type: ' . $contentType,
        ],
    ));

    $response = curl_exec($curl);

    $error = curl_error($curl);
    $httpcode = (int)curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if ($httpcode >= 200 && $httpcode <= 299) {
        // success
    } else {
        // error
    }
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->response->disableCache();
		
		$this->set('feedType', $this->feedType);
		$this->SubmitFeed->recursive = 0;
		$this->set('submitFeeds', $this->Paginator->paginate());

		Cache::clear();

		debug(Configure::read('SPAPI.refresh_token'));

	
		$marketplace_id = Configure::read('SPAPI.MARKETPLACE.US');

		$config = $this->SubmitFeed->configSPAPI();

		$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\ProductPricingApi($config);

		try {
			// $result = $apiInstance->getItemOffers(Configure::read('SPAPI.MARKETPLACE.US'), 'New', 'ENT18613');
			$result = $apiInstance->getListingOffers(Configure::read('SPAPI.MARKETPLACE.US'), 'New', 'ENT18613');

			// debug($result);
			

			// debug($result->getPayload()->getOffers());

			debug($result->getPayload()->getOffers()[0]->getMyOffer());

			debug($result->getPayload()->getOffers()[0]->getListingPrice());


			debug($result->getPayload()->getOffers()[1]->getMyOffer());
			debug($result->getPayload()->getOffers()[2]->getMyOffer());

			// debug($result->getPayload()->getOffers());

			foreach($result->getPayload()->getOffers() as $key => $offer){

				if($offer->getMyOffer() == true){

					debug($offer->getListingPrice()->getAmount());
				}

			}

			$amount = 0;

			foreach($result->getPayload()->getSummary()->getLowestPrices() as $key => $lowerprice){

				if($lowerprice->condition == 'new'){

					if($amount == 0){

						$amount = $lowerprice->LandedPrice->Amount;


					}
					else {

						if( $amount > $lowerprice->LandedPrice->Amount){

							$amount = $lowerprice->LandedPrice->Amount;
						}

					}
				}
			}

			debug($amount);

			// debug($result->getPayload()->getOffers()[1]->getMyOffer());

			debug($result);

			
		} catch (\Throwable $th) {
			echo 'Exception when calling ProductPricingApi->getItemOffers: ', $e->getMessage(), PHP_EOL;
		}

		// $apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\CatalogApi($config);


		// // $result = $apiInstance->getCatalogItem($marketplace_id, $asin);

		// // debug($result->getPayload()->getAttributeSets()[0]->getTitle());
		
		// // debug($result->getPayload()->getAttributeSets());

		// $query = ""; // string | Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
		// $query_context_id = ""; // string | An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
		// $seller_sku = ""; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
		// $upc = ""; // string | A 12-digit bar code used for retail packaging.
		// $ean = ""; // string | A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
		// $isbn = "1934429953"; // string | The unique commercial book identifier used to identify books internationally.
		// $jan = ""; // string | A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.

		// try {
		// 	$results = $apiInstance->listCatalogItems($marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan);
		// 	debug($results,2);

		// 	foreach ($results->getPayload()->getItems() as $value) {

		// 		// debug($value);

		// 		// debug($value->Identifiers->MarketplaceASIN->MarketplaceId  );
		// 		// debug($value->Identifiers->MarketplaceASIN->MarketplaceId->ASIN  );

		// 		// debug($value->AttributeSets[0]->Title );
		// 		// debug($value->AttributeSets[0]->ListPrice->Amount );
		// 		// debug($value->AttributeSets[0]->NumberOfPages );
		// 		// debug($value->AttributeSets[0]->PublicationDate  );
		// 		# code...
		// 	}
		// 	debug('algo nuevo');
		// } catch (Exception $e) {
		// 	echo 'Exception when calling CatalogApi->listCatalogItems: ', $e->getMessage(), PHP_EOL;
		// }


		// $apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\ProductPricingApi($config);


		// $marketplace_id = $marketplace_id; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
		// $item_condition = "New"; // string | Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
		// $asin = "1934429953"; // string | The Amazon Standard Identification Number (ASIN) of the item.
		
		// try {
		// 	$result = $apiInstance->getItemOffers($marketplace_id, $item_condition, $asin);
		// 	// debug($result);

		// 	// debug($result->getPayload());

		// 	debug($result->getPayload()->getOffers());

		// 	debug($result->getPayload()->getOffers()[0]->getListingPrice()->getAmount());
		// } catch (Exception $e) {
		// 	echo 'Exception when calling ProductPricingApi->getItemOffers: ', $e->getMessage(), PHP_EOL;
		// }
////////////////////////////////////////////////////////////////////////////////////////////////////////////



	// $items = array('MerchantIdentifier'=>Configure::read('SPAPI.MerchantIdentifier'), 'Messages' => array(
	// 	array('OperationType'=>'Update', 'ViewMatchInv'=>array('SKU'=>'45-87DE-NQ23', 'Quantity'=>'11','FulfillmentLatency'=>'1'))
	// ));

	// debug($items);

	// debug($this->SubmitFeed->creating_POST_INVENTORY_AVAILABILITY_DATA($items));


	// $this->SubmitFeed->submitInventoryQuantity($items);

	// exit();


	

		
	}

	public function execute(){
		
		App::import('Model','ProcessingReport');
		
		$processingReport = new ProcessingReport();
		
		$processingReport->saveProcessingReportResult();
		
		return $this->redirect(
				array('controller' => 'SubmitFeeds', 'action' => 'index')
		);
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubmitFeed->exists($id)) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		$options = array('conditions' => array('SubmitFeed.' . $this->SubmitFeed->primaryKey => $id));
		$this->set('submitFeed', $this->SubmitFeed->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubmitFeed->create();
			if ($this->SubmitFeed->save($this->request->data)) {
				$this->Flash->success(__('The submit feed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The submit feed could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubmitFeed->exists($id)) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubmitFeed->save($this->request->data)) {
				$this->Flash->success(__('The submit feed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The submit feed could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubmitFeed.' . $this->SubmitFeed->primaryKey => $id));
			$this->request->data = $this->SubmitFeed->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubmitFeed->id = $id;
		if (!$this->SubmitFeed->exists()) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubmitFeed->delete()) {
			$this->Flash->success(__('The submit feed has been deleted.'));
		} else {
			$this->Flash->error(__('The submit feed could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
