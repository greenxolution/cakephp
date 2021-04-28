<?php
App::uses('AppController', 'Controller');
/**
 * EntrenueProducts Controller
 *
 * @property EntrenueProduct $EntrenueProduct
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EntrenueAPIProductsController extends AppController {

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

		

		$data = $this->EntrenueAPIProduct->find('all',  array(
			'conditions' => array('pagination' => 100,'all'=>false),
		));



		$this->set('products', $data);

		// $this->entrenueProduct = ClassRegistry::init('EntrenueProduct');

		// $this->entrenueProduct->uploadInv();


		// $this->EntrenueAPIProduct->insert();


		

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EntrenueProduct->exists($id)) {
			throw new NotFoundException(__('Invalid entrenue product'));
		}
		$options = array('conditions' => array('EntrenueProduct.' . $this->EntrenueProduct->primaryKey => $id));
		$this->set('entrenueProduct', $this->EntrenueProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EntrenueProduct->create();
			if ($this->EntrenueProduct->save($this->request->data)) {
				$this->Flash->success(__('The entrenue product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entrenue product could not be saved. Please, try again.'));
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
		if (!$this->EntrenueProduct->exists($id)) {
			throw new NotFoundException(__('Invalid entrenue product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EntrenueProduct->save($this->request->data)) {
				$this->Flash->success(__('The entrenue product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The entrenue product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EntrenueProduct.' . $this->EntrenueProduct->primaryKey => $id));
			$this->request->data = $this->EntrenueProduct->find('first', $options);
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
		$this->EntrenueProduct->id = $id;
		if (!$this->EntrenueProduct->exists()) {
			throw new NotFoundException(__('Invalid entrenue product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EntrenueProduct->delete()) {
			$this->Flash->success(__('The entrenue product has been deleted.'));
		} else {
			$this->Flash->error(__('The entrenue product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
