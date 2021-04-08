<?php
App::uses('AppController', 'Controller');
/**
 * TierLowerPercents Controller
 *
 * @property TierLowerPercent $TierLowerPercent
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TierLowerPercentsController extends AppController {

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
		$this->TierLowerPercent->recursive = 0;
		$this->set('tierLowerPercents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TierLowerPercent->exists($id)) {
			throw new NotFoundException(__('Invalid tier lower percent'));
		}
		$options = array('conditions' => array('TierLowerPercent.' . $this->TierLowerPercent->primaryKey => $id));
		$this->set('tierLowerPercent', $this->TierLowerPercent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TierLowerPercent->create();
			if ($this->TierLowerPercent->save($this->request->data)) {
				$this->Flash->success(__('The tier lower percent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tier lower percent could not be saved. Please, try again.'));
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
		if (!$this->TierLowerPercent->exists($id)) {
			throw new NotFoundException(__('Invalid tier lower percent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TierLowerPercent->save($this->request->data)) {
				$this->Flash->success(__('The tier lower percent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tier lower percent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TierLowerPercent.' . $this->TierLowerPercent->primaryKey => $id));
			$this->request->data = $this->TierLowerPercent->find('first', $options);
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
		$this->TierLowerPercent->id = $id;
		if (!$this->TierLowerPercent->exists()) {
			throw new NotFoundException(__('Invalid tier lower percent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TierLowerPercent->delete()) {
			$this->Flash->success(__('The tier lower percent has been deleted.'));
		} else {
			$this->Flash->error(__('The tier lower percent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
