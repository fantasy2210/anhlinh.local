<?php
App::uses('AppController', 'Controller');
/**
 * Sudungvcs Controller
 *
 * @property Sudungvc $Sudungvc
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SudungvcsController extends AppController {

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
		$this->Sudungvc->recursive = 0;
		$this->set('sudungvcs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sudungvc->exists($id)) {
			throw new NotFoundException(__('Invalid sudungvc'));
		}
		$options = array('conditions' => array('Sudungvc.' . $this->Sudungvc->primaryKey => $id));
		$this->set('sudungvc', $this->Sudungvc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sudungvc->create();
			if ($this->Sudungvc->save($this->request->data)) {
				$this->Session->setFlash(__('The sudungvc has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sudungvc could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$vatchats = $this->Sudungvc->Vatchat->find('list');
		$nguoisudungs = $this->Sudungvc->Nguoisudung->find('list');
		$this->set(compact('vatchats', 'nguoisudungs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sudungvc->exists($id)) {
			throw new NotFoundException(__('Invalid sudungvc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sudungvc->save($this->request->data)) {
				$this->Session->setFlash(__('The sudungvc has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sudungvc could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Sudungvc.' . $this->Sudungvc->primaryKey => $id));
			$this->request->data = $this->Sudungvc->find('first', $options);
		}
		$vatchats = $this->Sudungvc->Vatchat->find('list');
		$nguoisudungs = $this->Sudungvc->Nguoisudung->find('list');
		$this->set(compact('vatchats', 'nguoisudungs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sudungvc->id = $id;
		if (!$this->Sudungvc->exists()) {
			throw new NotFoundException(__('Invalid sudungvc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sudungvc->delete()) {
			$this->Session->setFlash(__('The sudungvc has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The sudungvc could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
