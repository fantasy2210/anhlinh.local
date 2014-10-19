<?php
App::uses('AppController', 'Controller');
/**
 * Linhvucs Controller
 *
 * @property Linhvuc $Linhvuc
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LinhvucsController extends AppController {

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
		$this->Linhvuc->recursive = 0;
		$this->set('linhvucs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Linhvuc->exists($id)) {
			throw new NotFoundException(__('Invalid linhvuc'));
		}
		$options = array('conditions' => array('Linhvuc.' . $this->Linhvuc->primaryKey => $id));
		$this->set('linhvuc', $this->Linhvuc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Linhvuc->create();
			if ($this->Linhvuc->save($this->request->data)) {
				$this->Session->setFlash(__('The linhvuc has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linhvuc could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Linhvuc->exists($id)) {
			throw new NotFoundException(__('Invalid linhvuc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Linhvuc->save($this->request->data)) {
				$this->Session->setFlash(__('The linhvuc has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The linhvuc could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Linhvuc.' . $this->Linhvuc->primaryKey => $id));
			$this->request->data = $this->Linhvuc->find('first', $options);
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
		$this->Linhvuc->id = $id;
		if (!$this->Linhvuc->exists()) {
			throw new NotFoundException(__('Invalid linhvuc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Linhvuc->delete()) {
			$this->Session->setFlash(__('The linhvuc has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The linhvuc could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
