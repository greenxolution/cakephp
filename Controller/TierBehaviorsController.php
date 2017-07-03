<?php
App::uses('AppController', 'Controller');
/**
 * TierBehaviors Controller
 *
 * @property TierBehavior $TierBehavior
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TierBehaviorsController extends AppController {

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
		$this->TierBehavior->recursive = 0;
		$this->set('tierBehaviors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TierBehavior->exists($id)) {
			throw new NotFoundException(__('Invalid tier behavior'));
		}
		$options = array('conditions' => array('TierBehavior.' . $this->TierBehavior->primaryKey => $id));
		$this->set('tierBehavior', $this->TierBehavior->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TierBehavior->create();
			if ($this->TierBehavior->save($this->request->data)) {
				$this->Flash->success(__('The tier behavior has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tier behavior could not be saved. Please, try again.'));
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
		if (!$this->TierBehavior->exists($id)) {
			throw new NotFoundException(__('Invalid tier behavior'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TierBehavior->save($this->request->data)) {
				$this->Flash->success(__('The tier behavior has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tier behavior could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TierBehavior.' . $this->TierBehavior->primaryKey => $id));
			$this->request->data = $this->TierBehavior->find('first', $options);
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
		$this->TierBehavior->id = $id;
		if (!$this->TierBehavior->exists()) {
			throw new NotFoundException(__('Invalid tier behavior'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TierBehavior->delete()) {
			$this->Flash->success(__('The tier behavior has been deleted.'));
		} else {
			$this->Flash->error(__('The tier behavior could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
