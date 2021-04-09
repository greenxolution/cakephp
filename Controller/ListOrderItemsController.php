<?php
App::uses('AppController', 'Controller');
/**
 * ListOrderItems Controller
 *
 * @property ListOrderItem $ListOrderItem
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ListOrderItemsController extends AppController {

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
// 		$this->ListOrderItem->recursive = 0;

		$this->set('listOrderItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ListOrderItem->exists($id)) {
			throw new NotFoundException(__('Invalid list order item'));
		}
		$options = array('conditions' => array('ListOrderItem.' . $this->ListOrderItem->primaryKey => $id));
		$this->set('listOrderItem', $this->ListOrderItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ListOrderItem->create();
			if ($this->ListOrderItem->save($this->request->data)) {
				$this->Flash->success(__('The list order item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The list order item could not be saved. Please, try again.'));
			}
		}
		$listOrders = $this->ListOrderItem->ListOrder->find('list');
		$this->set(compact('listOrders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ListOrderItem->exists($id)) {
			throw new NotFoundException(__('Invalid list order item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ListOrderItem->save($this->request->data)) {
				$this->Flash->success(__('The list order item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The list order item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ListOrderItem.' . $this->ListOrderItem->primaryKey => $id));
			$this->request->data = $this->ListOrderItem->find('first', $options);
		}
		$listOrders = $this->ListOrderItem->ListOrder->find('list');
		$this->set(compact('listOrders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ListOrderItem->id = $id;
		if (!$this->ListOrderItem->exists()) {
			throw new NotFoundException(__('Invalid list order item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ListOrderItem->delete()) {
			$this->Flash->success(__('The list order item has been deleted.'));
		} else {
			$this->Flash->error(__('The list order item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
