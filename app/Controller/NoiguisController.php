<?php
App::uses('AppController', 'Controller');
/**
 * Noiguis Controller
 *
 * @property Noigui $Noigui
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NoiguisController extends AppController {

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
		$this->Noigui->recursive = 0;
		$this->set('noiguis', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Noigui->exists($id)) {
			throw new NotFoundException(__('Invalid noigui'));
		}
		$options = array('conditions' => array('Noigui.' . $this->Noigui->primaryKey => $id));
		$this->set('noigui', $this->Noigui->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Noigui->create();
			if ($this->Noigui->save($this->request->data)) {
				$this->Session->setFlash(__('The noigui has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noigui could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Noigui->exists($id)) {
			throw new NotFoundException(__('Invalid noigui'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Noigui->save($this->request->data)) {
				$this->Session->setFlash(__('The noigui has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noigui could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Noigui.' . $this->Noigui->primaryKey => $id));
			$this->request->data = $this->Noigui->find('first', $options);
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
		$this->Noigui->id = $id;
		if (!$this->Noigui->exists()) {
			throw new NotFoundException(__('Invalid noigui'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Noigui->delete()) {
			$this->Session->setFlash(__('The noigui has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The noigui could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
