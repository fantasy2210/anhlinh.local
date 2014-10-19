<?php
App::uses('AppController', 'Controller');
/**
 * Chucvudangs Controller
 *
 * @property Chucvudang $Chucvudang
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ChucvudangsController extends AppController {

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
		$this->Chucvudang->recursive = 0;
		$this->set('chucvudangs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Chucvudang->exists($id)) {
			throw new NotFoundException(__('Invalid chucvudang'));
		}
		$options = array('conditions' => array('Chucvudang.' . $this->Chucvudang->primaryKey => $id));
		$this->set('chucvudang', $this->Chucvudang->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Chucvudang->create();
			if ($this->Chucvudang->save($this->request->data)) {
				$this->Session->setFlash(__('The chucvudang has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chucvudang could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Chucvudang->exists($id)) {
			throw new NotFoundException(__('Invalid chucvudang'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Chucvudang->save($this->request->data)) {
				$this->Session->setFlash(__('The chucvudang has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chucvudang could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Chucvudang.' . $this->Chucvudang->primaryKey => $id));
			$this->request->data = $this->Chucvudang->find('first', $options);
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
		$this->Chucvudang->id = $id;
		if (!$this->Chucvudang->exists()) {
			throw new NotFoundException(__('Invalid chucvudang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Chucvudang->delete()) {
			$this->Session->setFlash(__('The chucvudang has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The chucvudang could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
