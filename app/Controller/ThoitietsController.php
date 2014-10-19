<?php
App::uses('AppController', 'Controller');
/**
 * Thoitiets Controller
 *
 * @property Thoitiet $Thoitiet
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ThoitietsController extends AppController {

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
		$this->Thoitiet->recursive = 0;
		$this->set('thoitiets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Thoitiet->exists($id)) {
			throw new NotFoundException(__('Invalid thoitiet'));
		}
		$options = array('conditions' => array('Thoitiet.' . $this->Thoitiet->primaryKey => $id));
		$this->set('thoitiet', $this->Thoitiet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Thoitiet->create();
			if ($this->Thoitiet->save($this->request->data)) {
				$this->Session->setFlash(__('The thoitiet has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thoitiet could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$vungbiens = $this->Thoitiet->Vungbien->find('list');
		$this->set(compact('vungbiens'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Thoitiet->exists($id)) {
			throw new NotFoundException(__('Invalid thoitiet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Thoitiet->save($this->request->data)) {
				$this->Session->setFlash(__('The thoitiet has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thoitiet could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Thoitiet.' . $this->Thoitiet->primaryKey => $id));
			$this->request->data = $this->Thoitiet->find('first', $options);
		}
		$vungbiens = $this->Thoitiet->Vungbien->find('list');
		$this->set(compact('vungbiens'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Thoitiet->id = $id;
		if (!$this->Thoitiet->exists()) {
			throw new NotFoundException(__('Invalid thoitiet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Thoitiet->delete()) {
			$this->Session->setFlash(__('The thoitiet has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The thoitiet could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
