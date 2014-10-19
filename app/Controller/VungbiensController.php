<?php
App::uses('AppController', 'Controller');
/**
 * Vungbiens Controller
 *
 * @property Vungbien $Vungbien
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VungbiensController extends AppController {

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
		$this->Vungbien->recursive = 0;
		$this->set('vungbiens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vungbien->exists($id)) {
			throw new NotFoundException(__('Invalid vungbien'));
		}
		$options = array('conditions' => array('Vungbien.' . $this->Vungbien->primaryKey => $id));
		$this->set('vungbien', $this->Vungbien->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vungbien->create();
			if ($this->Vungbien->save($this->request->data)) {
				$this->Session->setFlash(__('The vungbien has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vungbien could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Vungbien->exists($id)) {
			throw new NotFoundException(__('Invalid vungbien'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vungbien->save($this->request->data)) {
				$this->Session->setFlash(__('The vungbien has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vungbien could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Vungbien.' . $this->Vungbien->primaryKey => $id));
			$this->request->data = $this->Vungbien->find('first', $options);
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
		$this->Vungbien->id = $id;
		if (!$this->Vungbien->exists()) {
			throw new NotFoundException(__('Invalid vungbien'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vungbien->delete()) {
			$this->Session->setFlash(__('The vungbien has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The vungbien could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
