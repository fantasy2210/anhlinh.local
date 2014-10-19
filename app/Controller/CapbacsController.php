<?php
App::uses('AppController', 'Controller');
/**
 * Capbacs Controller
 *
 * @property Capbac $Capbac
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CapbacsController extends AppController {

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
		$this->Capbac->recursive = 0;
		$this->set('capbacs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Capbac->exists($id)) {
			throw new NotFoundException(__('Invalid capbac'));
		}
		$options = array('conditions' => array('Capbac.' . $this->Capbac->primaryKey => $id));
		$this->set('capbac', $this->Capbac->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Capbac->create();
			if ($this->Capbac->save($this->request->data)) {
				$this->Session->setFlash(__('The capbac has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The capbac could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Capbac->exists($id)) {
			throw new NotFoundException(__('Invalid capbac'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Capbac->save($this->request->data)) {
				$this->Session->setFlash(__('The capbac has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The capbac could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Capbac.' . $this->Capbac->primaryKey => $id));
			$this->request->data = $this->Capbac->find('first', $options);
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
		$this->Capbac->id = $id;
		if (!$this->Capbac->exists()) {
			throw new NotFoundException(__('Invalid capbac'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Capbac->delete()) {
			$this->Session->setFlash(__('The capbac has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The capbac could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
