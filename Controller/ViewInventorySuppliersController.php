<?php
App::uses('AppController', 'Controller');

App::uses('LowestOfferListingsForSKU', 'Model');

App::uses('TierBehavior', 'Model');
/**
 * ViewInventorySuppliers Controller
 *
 * @property ViewInventorySupplier $ViewInventorySupplier
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ViewInventorySuppliersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session', 'Search.Prg');
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$lowestOfferListingsForSKU	= new LowestOfferListingsForSKU();
		
		$lowestOfferListingsForSKU->cacheAllList();
		
		
		$tierBehavior = new TierBehavior();
		
		$tierBehavior->cacheAllList();
		
		$this->ViewInventorySupplier->recursive = 0;
		
		$this->Prg->commonProcess();
		$this->Paginator->settings['conditions'] = $this->ViewInventorySupplier->parseCriteria($this->Prg->parsedParams());
		$this->set('viewInventorySuppliers', $this->Paginator->paginate());
	}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ViewInventorySupplier->exists($id)) {
			throw new NotFoundException(__('Invalid view inventory supplier'));
		}
		$options = array('conditions' => array('ViewInventorySupplier.' . $this->ViewInventorySupplier->primaryKey => $id));
		$this->set('viewInventorySupplier', $this->ViewInventorySupplier->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ViewInventorySupplier->create();
			if ($this->ViewInventorySupplier->save($this->request->data)) {
				$this->Flash->success(__('The view inventory supplier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The view inventory supplier could not be saved. Please, try again.'));
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
		if (!$this->ViewInventorySupplier->exists($id)) {
			throw new NotFoundException(__('Invalid view inventory supplier'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ViewInventorySupplier->save($this->request->data)) {
				$this->Flash->success(__('The view inventory supplier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The view inventory supplier could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ViewInventorySupplier.' . $this->ViewInventorySupplier->primaryKey => $id));
			$this->request->data = $this->ViewInventorySupplier->find('first', $options);
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
		$this->ViewInventorySupplier->id = $id;
		if (!$this->ViewInventorySupplier->exists()) {
			throw new NotFoundException(__('Invalid view inventory supplier'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ViewInventorySupplier->delete()) {
			$this->Flash->success(__('The view inventory supplier has been deleted.'));
		} else {
			$this->Flash->error(__('The view inventory supplier could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
