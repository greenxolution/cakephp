<?php
App::uses('AppController', 'Controller');
/**
 * Configs Controller
 *
 * @property Config $Config
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ConfigsController extends AppController {

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
		$this->Config->recursive = 0;
		$this->set('configs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Config->exists($id)) {
			throw new NotFoundException(__('Invalid config'));
		}
		$options = array('conditions' => array('Config.' . $this->Config->primaryKey => $id));
		$this->set('config', $this->Config->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Config->create();
			if ($this->Config->save($this->request->data)) {
				$this->Flash->success(__('The config has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The config could not be saved. Please, try again.'));
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
		if (!$this->Config->exists($id)) {
			throw new NotFoundException(__('Invalid config'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Config->save($this->request->data)) {
				$this->Flash->success(__('The config has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The config could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Config.' . $this->Config->primaryKey => $id));
			$this->request->data = $this->Config->find('first', $options);
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
		$this->Config->id = $id;
		if (!$this->Config->exists()) {
			throw new NotFoundException(__('Invalid config'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Config->delete()) {
			$this->Flash->success(__('The config has been deleted.'));
		} else {
			$this->Flash->error(__('The config could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
