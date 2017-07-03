<?php
App::uses('AppController', 'Controller');
/**
 * ProcessingReports Controller
 *
 * @property ProcessingReport $ProcessingReport
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProcessingReportsController extends AppController {

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
		$this->ProcessingReport->recursive = 0;
		$this->set('processingReports', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProcessingReport->exists($id)) {
			throw new NotFoundException(__('Invalid processing report'));
		}
		$options = array('conditions' => array('ProcessingReport.' . $this->ProcessingReport->primaryKey => $id));
		$this->set('processingReport', $this->ProcessingReport->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProcessingReport->create();
			if ($this->ProcessingReport->save($this->request->data)) {
				$this->Flash->success(__('The processing report has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The processing report could not be saved. Please, try again.'));
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
		if (!$this->ProcessingReport->exists($id)) {
			throw new NotFoundException(__('Invalid processing report'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProcessingReport->save($this->request->data)) {
				$this->Flash->success(__('The processing report has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The processing report could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProcessingReport.' . $this->ProcessingReport->primaryKey => $id));
			$this->request->data = $this->ProcessingReport->find('first', $options);
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
		$this->ProcessingReport->id = $id;
		if (!$this->ProcessingReport->exists()) {
			throw new NotFoundException(__('Invalid processing report'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProcessingReport->delete()) {
			$this->Flash->success(__('The processing report has been deleted.'));
		} else {
			$this->Flash->error(__('The processing report could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
