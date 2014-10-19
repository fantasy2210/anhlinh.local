<?php
App::uses('AppController', 'Controller');
/**
 * Nhomvcs Controller
 *
 * @property Nhomvc $Nhomvc
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NhomvcsController extends AppController {

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
		$this->Nhomvc->recursive = 0;
		$this->set('nhomvcs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nhomvc->exists($id)) {
			throw new NotFoundException(__('Invalid nhomvc'));
		}
		$options = array('conditions' => array('Nhomvc.' . $this->Nhomvc->primaryKey => $id));
		$this->set('nhomvc', $this->Nhomvc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nhomvc->create();
			if ($this->Nhomvc->save($this->request->data)) {
				$this->Session->setFlash(__('The nhomvc has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nhomvc could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Nhomvc->exists($id)) {
			throw new NotFoundException(__('Invalid nhomvc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nhomvc->save($this->request->data)) {
				$this->Session->setFlash(__('The nhomvc has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nhomvc could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Nhomvc.' . $this->Nhomvc->primaryKey => $id));
			$this->request->data = $this->Nhomvc->find('first', $options);
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
		$this->Nhomvc->id = $id;
		if (!$this->Nhomvc->exists()) {
			throw new NotFoundException(__('Invalid nhomvc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Nhomvc->delete()) {
			$this->Session->setFlash(__('The nhomvc has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The nhomvc could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
