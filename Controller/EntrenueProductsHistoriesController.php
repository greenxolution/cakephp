<?php
App::uses('AppController', 'Controller');
/**
 * EntrenueProductsHistories Controller
 *
 * @property EntrenueProductsHistory $EntrenueProductsHistory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class EntrenueProductsHistoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EntrenueProductsHistory->recursive = 0;
		$this->set('entrenueProductsHistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EntrenueProductsHistory->exists($id)) {
			throw new NotFoundException(__('Invalid entrenue products history'));
		}
		$options = array('conditions' => array('EntrenueProductsHistory.' . $this->EntrenueProductsHistory->primaryKey => $id));
		$this->set('entrenueProductsHistory', $this->EntrenueProductsHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EntrenueProductsHistory->create();
			if ($this->EntrenueProductsHistory->save($this->request->data)) {
				$this->Flash->success(__('The entrenue products history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entrenue products history could not be saved. Please, try again.'));
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
		if (!$this->EntrenueProductsHistory->exists($id)) {
			throw new NotFoundException(__('Invalid entrenue products history'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EntrenueProductsHistory->save($this->request->data)) {
				$this->Flash->success(__('The entrenue products history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entrenue products history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EntrenueProductsHistory.' . $this->EntrenueProductsHistory->primaryKey => $id));
			$this->request->data = $this->EntrenueProductsHistory->find('first', $options);
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
		if (!$this->EntrenueProductsHistory->exists($id)) {
			throw new NotFoundException(__('Invalid entrenue products history'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EntrenueProductsHistory->delete($id)) {
			$this->Flash->success(__('The entrenue products history has been deleted.'));
		} else {
			$this->Flash->error(__('The entrenue products history could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
