<?php
App::uses('AppController', 'Controller');
/**
 * ViewMatchInvs Controller
 *
 * @property ViewMatchInv $ViewMatchInv
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ViewMatchInvsController extends AppController {

// 	public $name = 'ViewMatchInvs';
	
// 	public $uses = 'ViewMatchInv';
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
		
		
		$this->ViewMatchInv->recursive = 0;
		
		$this->Prg->commonProcess();
		$this->Paginator->settings['conditions'] = $this->ViewMatchInv->parseCriteria($this->Prg->parsedParams());
		$this->set('viewMatchInvs', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ViewMatchInv->exists($id)) {
			throw new NotFoundException(__('Invalid view match inv'));
		}
		$options = array('conditions' => array('ViewMatchInv.' . $this->ViewMatchInv->primaryKey => $id));
		$this->set('viewMatchInv', $this->ViewMatchInv->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ViewMatchInv->create();
			if ($this->ViewMatchInv->save($this->request->data)) {
				$this->Flash->success(__('The view match inv has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The view match inv could not be saved. Please, try again.'));
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
		if (!$this->ViewMatchInv->exists($id)) {
			throw new NotFoundException(__('Invalid view match inv'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ViewMatchInv->save($this->request->data)) {
				$this->Flash->success(__('The view match inv has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The view match inv could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ViewMatchInv.' . $this->ViewMatchInv->primaryKey => $id));
			$this->request->data = $this->ViewMatchInv->find('first', $options);
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
		$this->ViewMatchInv->id = $id;
		if (!$this->ViewMatchInv->exists()) {
			throw new NotFoundException(__('Invalid view match inv'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ViewMatchInv->delete()) {
			$this->Flash->success(__('The view match inv has been deleted.'));
		} else {
			$this->Flash->error(__('The view match inv could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
