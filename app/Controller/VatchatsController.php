<?php
App::uses('AppController', 'Controller');
/**
 * Vatchats Controller
 *
 * @property Vatchat $Vatchat
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VatchatsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vatchat->recursive = 0;
		$this->set('vatchats', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vatchat->exists($id)) {
			throw new NotFoundException(__('Invalid vatchat'));
		}
		$options = array('conditions' => array('Vatchat.' . $this->Vatchat->primaryKey => $id));
		$this->set('vatchat', $this->Vatchat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vatchat->create();
			if ($this->Vatchat->save($this->request->data)) {
				$this->Session->setFlash(__('The vatchat has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vatchat could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$nhomvcs = $this->Vatchat->Nhomvc->find('list');
		$nguoinhans = $this->Vatchat->Nguoinhan->find('list');
		$nguoiquanlies = $this->Vatchat->Nguoiquanly->find('list');
		$this->set(compact('nhomvcs', 'nguoinhans', 'nguoiquanlies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vatchat->exists($id)) {
			throw new NotFoundException(__('Invalid vatchat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vatchat->save($this->request->data)) {
				$this->Session->setFlash(__('The vatchat has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vatchat could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Vatchat.' . $this->Vatchat->primaryKey => $id));
			$this->request->data = $this->Vatchat->find('first', $options);
		}
		$nhomvcs = $this->Vatchat->Nhomvc->find('list');
		$nguoinhans = $this->Vatchat->Nguoinhan->find('list');
		$nguoiquanlies = $this->Vatchat->Nguoiquanly->find('list');
		$this->set(compact('nhomvcs', 'nguoinhans', 'nguoiquanlies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vatchat->id = $id;
		if (!$this->Vatchat->exists()) {
			throw new NotFoundException(__('Invalid vatchat'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vatchat->delete()) {
			$this->Session->setFlash(__('The vatchat has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The vatchat could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
