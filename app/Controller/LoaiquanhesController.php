<?php
App::uses('AppController', 'Controller');
/**
 * Loaiquanhes Controller
 *
 * @property Loaiquanhe $Loaiquanhe
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LoaiquanhesController extends AppController {

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
		$this->Loaiquanhe->recursive = 0;
		$this->set('loaiquanhes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Loaiquanhe->exists($id)) {
			throw new NotFoundException(__('Invalid loaiquanhe'));
		}
		$options = array('conditions' => array('Loaiquanhe.' . $this->Loaiquanhe->primaryKey => $id));
		$this->set('loaiquanhe', $this->Loaiquanhe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Loaiquanhe->create();
			if ($this->Loaiquanhe->save($this->request->data)) {
				$this->Session->setFlash(__('The loaiquanhe has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loaiquanhe could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Loaiquanhe->exists($id)) {
			throw new NotFoundException(__('Invalid loaiquanhe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Loaiquanhe->save($this->request->data)) {
				$this->Session->setFlash(__('The loaiquanhe has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loaiquanhe could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Loaiquanhe.' . $this->Loaiquanhe->primaryKey => $id));
			$this->request->data = $this->Loaiquanhe->find('first', $options);
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
		$this->Loaiquanhe->id = $id;
		if (!$this->Loaiquanhe->exists()) {
			throw new NotFoundException(__('Invalid loaiquanhe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Loaiquanhe->delete()) {
			$this->Session->setFlash(__('The loaiquanhe has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The loaiquanhe could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
