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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->set('feedType', $this->feedType);
		$this->SubmitFeed->recursive = 0;
		$this->set('submitFeeds', $this->Paginator->paginate());

		Cache::clear();

		debug(Configure::read('SPAPI.refresh_token'));

		$accessToken = \ClouSale\AmazonSellingPartnerAPI\SellingPartnerOAuth::getAccessTokenFromRefreshToken(
			Configure::read('SPAPI.refresh_token'),
			Configure::read('SPAPI.client_id'),
			Configure::read('SPAPI.client_secret')
		);
		$assumedRole = \ClouSale\AmazonSellingPartnerAPI\AssumeRole::assume(
			Configure::read('SPAPI.region'),
			Configure::read('SPAPI.access_key'),
			Configure::read('SPAPI.secret_key'),
			Configure::read('SPAPI.role_arn')
		);
		$config = \ClouSale\AmazonSellingPartnerAPI\Configuration::getDefaultConfiguration();
		$config->setHost(Configure::read('SPAPI.endpoint') );
		$config->setAccessToken($accessToken);
		$config->setAccessKey($assumedRole->getAccessKeyId());
		$config->setSecretKey($assumedRole->getSecretAccessKey());
		$config->setRegion(Configure::read('SPAPI.region'));
		$config->setSecurityToken($assumedRole->getSessionToken());
		
		$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\CatalogApi($config);
		
		$marketplace_id = Configure::read('SPAPI.MARKETPLACE.CA');
		$asin = '0446613452';
		
		// $result = $apiInstance->getCatalogItem($marketplace_id, $asin);

		// debug($result->getPayload()->getAttributeSets()[0]->getTitle());
		
		// debug($result->getPayload()->getAttributeSets());

		$query = "penthouse"; // string | Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
$query_context_id = "345345"; // string | An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
$seller_sku = ""; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
$upc = ""; // string | A 12-digit bar code used for retail packaging.
$ean = ""; // string | A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
$isbn = ""; // string | The unique commercial book identifier used to identify books internationally.
$jan = ""; // string | A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.

try {
    $results = $apiInstance->listCatalogItems($marketplace_id, $query);
    debug($results);
	debug('algo nuevo');
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->listCatalogItems: ', $e->getMessage(), PHP_EOL;
}


	

		
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
