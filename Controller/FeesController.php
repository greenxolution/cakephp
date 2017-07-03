<?php
App::uses('AppController', 'Controller');
/**
 * Fees Controller
 *
 * @property Fee $Fee
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class FeesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fee->recursive = 0;
		$this->set('fees', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fee->exists($id)) {
			throw new NotFoundException(__('Invalid fee'));
		}
		$options = array('conditions' => array('Fee.' . $this->Fee->primaryKey => $id));
		$this->set('fee', $this->Fee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Fee->create();
			if ($this->Fee->save($this->request->data)) {
				$this->Flash->success(__('The fee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The fee could not be saved. Please, try again.'));
			}
		}
		$suppliers = $this->Fee->Supplier->find('list');
		$this->set('unit', $this->Fee->unit);
		$this->set(compact('suppliers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fee->exists($id)) {
			throw new NotFoundException(__('Invalid fee'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fee->save($this->request->data)) {
				$this->Flash->success(__('The fee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The fee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fee.' . $this->Fee->primaryKey => $id));
			$this->request->data = $this->Fee->find('first', $options);
		}
		$suppliers = $this->Fee->Supplier->find('list');
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
		$this->Fee->id = $id;
		if (!$this->Fee->exists()) {
			throw new NotFoundException(__('Invalid fee'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fee->delete()) {
			$this->Flash->success(__('The fee has been deleted.'));
		} else {
			$this->Flash->error(__('The fee could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
