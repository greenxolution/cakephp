<?php
App::uses('AppController', 'Controller');
/**
 * SubmitFeeds Controller
 *
 * @property SubmitFeed $SubmitFeed
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property nComponent $n
 * @property SessionComponent $Session
 */
class SubmitFeedsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	
	public $feedType = array(	'_POST_PRODUCT_PRICING_DATA_' => 'PRICING',
								'_POST_INVENTORY_AVAILABILITY_DATA_' => 'AVAILABILITY');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->set('feedType', $this->feedType);
		$this->SubmitFeed->recursive = 0;
		$this->set('submitFeeds', $this->Paginator->paginate());
	}

	public function execute(){
		
		App::import('Model','ProcessingReport');
		
		$processingReport = new ProcessingReport();
		
		$processingReport->saveProcessingReportResult();
		
		return $this->redirect(
				array('controller' => 'SubmitFeeds', 'action' => 'index')
		);
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubmitFeed->exists($id)) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		$options = array('conditions' => array('SubmitFeed.' . $this->SubmitFeed->primaryKey => $id));
		$this->set('submitFeed', $this->SubmitFeed->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubmitFeed->create();
			if ($this->SubmitFeed->save($this->request->data)) {
				$this->Flash->success(__('The submit feed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The submit feed could not be saved. Please, try again.'));
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
		if (!$this->SubmitFeed->exists($id)) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubmitFeed->save($this->request->data)) {
				$this->Flash->success(__('The submit feed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The submit feed could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubmitFeed.' . $this->SubmitFeed->primaryKey => $id));
			$this->request->data = $this->SubmitFeed->find('first', $options);
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
		$this->SubmitFeed->id = $id;
		if (!$this->SubmitFeed->exists()) {
			throw new NotFoundException(__('Invalid submit feed'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubmitFeed->delete()) {
			$this->Flash->success(__('The submit feed has been deleted.'));
		} else {
			$this->Flash->error(__('The submit feed could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
