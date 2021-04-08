<?php
App::uses('AppController', 'Controller');

App::uses('LowestOfferListingsForSKU', 'Model');
/**
 * ListOrders Controller
 *
 * @property ListOrder $ListOrder
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ListOrdersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	
	public function detail($id = null){
		
		if (!$this->ListOrder->exists($id)) {
			throw new NotFoundException(__('Invalid list order'));
		}
		
		
		$options = array('conditions' => array('ListOrder.' . $this->ListOrder->primaryKey => $id));
		
		$order = $this->ListOrder->find('first', $options);
		
		$this->set('entrenueProduct', $this->ListOrder->ListOrderItem->getDetails($id));
		
		$this->set('listOrder', $this->ListOrder->find('first', $options));
	}

	public function executeOrders(){
		
		$this->ListOrder->saveOrders();
		
		return $this->redirect(
				array('controller' => 'ListOrders', 'action' => 'listIndex')
		);
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		
// 		$this->ListOrder->recursive = 0;
		$this->set('listOrders', $this->Paginator->paginate());
		
		
	}
	
	public function listIndex(){
		

		if(Hash::dimensions(Configure::read('LowestOfferListingsForSKU.list')) == 0 ){
			
			$lowestOfferListingsForSKU	= new LowestOfferListingsForSKU();
		
			$lowestOfferListingsForSKU->cacheAllList();
		}
		
		$this->set('listOrders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ListOrder->exists($id)) {
			throw new NotFoundException(__('Invalid list order'));
		}
		$options = array('conditions' => array('ListOrder.' . $this->ListOrder->primaryKey => $id));
		$this->set('listOrder', $this->ListOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ListOrder->create();
			if ($this->ListOrder->save($this->request->data)) {
				$this->Flash->success(__('The list order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The list order could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 
	public function edit($id = null) {
		if (!$this->ListOrder->exists($id)) {
			throw new NotFoundException(__('Invalid list order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ListOrder->save($this->request->data)) {
				$this->Flash->success(__('The list order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The list order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ListOrder.' . $this->ListOrder->primaryKey => $id));
			$this->request->data = $this->ListOrder->find('first', $options);
		}
	}
	*/
	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ListOrder->exists($id)) {
			throw new NotFoundException(__('Invalid list order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ListOrder->save($this->request->data)) {
				$this->Flash->success(__('The list order has been saved.'));
				return $this->redirect(array('action' => 'listIndex'));
			} else {
				$this->Flash->error(__('The list order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ListOrder.' . $this->ListOrder->primaryKey => $id));
			$this->request->data = $this->ListOrder->find('first', $options);
		}
		$suppliers = $this->ListOrder->Supplier->find('list');
		$this->set(compact('suppliers'));
	}	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ListOrder->id = $id;
		if (!$this->ListOrder->exists()) {
			throw new NotFoundException(__('Invalid list order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ListOrder->delete()) {
			$this->Flash->success(__('The list order has been deleted.'));
		} else {
			$this->Flash->error(__('The list order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
