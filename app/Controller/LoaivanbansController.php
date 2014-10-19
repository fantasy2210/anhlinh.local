<?php
App::uses('AppController', 'Controller');
/**
 * Loaivanbans Controller
 *
 * @property Loaivanban $Loaivanban
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LoaivanbansController extends AppController {

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
		$this->Loaivanban->recursive = 0;
		$this->set('loaivanbans', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Loaivanban->exists($id)) {
			throw new NotFoundException(__('Invalid loaivanban'));
		}
		$options = array('conditions' => array('Loaivanban.' . $this->Loaivanban->primaryKey => $id));
		$this->set('loaivanban', $this->Loaivanban->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Loaivanban->create();
			if ($this->Loaivanban->save($this->request->data)) {
				$this->Session->setFlash(__('The loaivanban has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loaivanban could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Loaivanban->exists($id)) {
			throw new NotFoundException(__('Invalid loaivanban'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Loaivanban->save($this->request->data)) {
				$this->Session->setFlash(__('The loaivanban has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loaivanban could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Loaivanban.' . $this->Loaivanban->primaryKey => $id));
			$this->request->data = $this->Loaivanban->find('first', $options);
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
		$this->Loaivanban->id = $id;
		if (!$this->Loaivanban->exists()) {
			throw new NotFoundException(__('Invalid loaivanban'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Loaivanban->delete()) {
			$this->Session->setFlash(__('The loaivanban has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The loaivanban could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
