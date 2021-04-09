<?php
App::uses('AppController', 'Controller');
/**
 * MwsInventories Controller
 *
 * @property MwsInventory $MwsInventory
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MwsInventoriesController extends AppController {

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
		
		$this->Prg->commonProcess();
		$this->Paginator->settings['conditions'] = $this->MwsInventory->parseCriteria($this->Prg->parsedParams());
		$this->set('mwsInventories', $this->Paginator->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MwsInventory->exists($id)) {
			throw new NotFoundException(__('Invalid mws inventory'));
		}
		$options = array('conditions' => array('MwsInventory.' . $this->MwsInventory->primaryKey => $id));
		$this->set('mwsInventory', $this->MwsInventory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MwsInventory->create();
			if ($this->MwsInventory->save($this->request->data)) {
				$this->Flash->success(__('The mws inventory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mws inventory could not be saved. Please, try again.'));
			}
		}
		$tiers = $this->MwsInventory->Tier->find('list');
		$this->set(compact('tiers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MwsInventory->exists($id)) {
			throw new NotFoundException(__('Invalid mws inventory'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MwsInventory->save($this->request->data)) {
				$this->Flash->success(__('The mws inventory has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mws inventory could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MwsInventory.' . $this->MwsInventory->primaryKey => $id));
			$this->request->data = $this->MwsInventory->find('first', $options);
		}
		$tiers = $this->MwsInventory->Tier->find('list');
		$this->set(compact('tiers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MwsInventory->id = $id;
		if (!$this->MwsInventory->exists()) {
			throw new NotFoundException(__('Invalid mws inventory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MwsInventory->delete()) {
			$this->Flash->success(__('The mws inventory has been deleted.'));
		} else {
			$this->Flash->error(__('The mws inventory could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
