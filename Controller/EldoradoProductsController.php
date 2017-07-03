<?php
App::uses('AppController', 'Controller');
/**
 * EldoradoProducts Controller
 *
 * @property EldoradoProduct $EldoradoProduct
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EldoradoProductsController extends AppController {

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
		$this->EldoradoProduct->recursive = 0;
		$this->set('eldoradoProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EldoradoProduct->exists($id)) {
			throw new NotFoundException(__('Invalid eldorado product'));
		}
		$options = array('conditions' => array('EldoradoProduct.' . $this->EldoradoProduct->primaryKey => $id));
		$this->set('eldoradoProduct', $this->EldoradoProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EldoradoProduct->create();
			if ($this->EldoradoProduct->save($this->request->data)) {
				$this->Flash->success(__('The eldorado product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The eldorado product could not be saved. Please, try again.'));
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
		if (!$this->EldoradoProduct->exists($id)) {
			throw new NotFoundException(__('Invalid eldorado product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EldoradoProduct->save($this->request->data)) {
				$this->Flash->success(__('The eldorado product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The eldorado product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EldoradoProduct.' . $this->EldoradoProduct->primaryKey => $id));
			$this->request->data = $this->EldoradoProduct->find('first', $options);
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
		$this->EldoradoProduct->id = $id;
		if (!$this->EldoradoProduct->exists()) {
			throw new NotFoundException(__('Invalid eldorado product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EldoradoProduct->delete()) {
			$this->Flash->success(__('The eldorado product has been deleted.'));
		} else {
			$this->Flash->error(__('The eldorado product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
