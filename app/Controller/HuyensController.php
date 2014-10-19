<?php
App::uses('AppController', 'Controller');
/**
 * Huyens Controller
 *
 * @property Huyen $Huyen
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HuyensController extends AppController {

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
		$this->Huyen->recursive = 0;
		$this->set('huyens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Huyen->exists($id)) {
			throw new NotFoundException(__('Invalid huyen'));
		}
		$options = array('conditions' => array('Huyen.' . $this->Huyen->primaryKey => $id));
		$this->set('huyen', $this->Huyen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Huyen->create();
			if ($this->Huyen->save($this->request->data)) {
				$this->Session->setFlash(__('The huyen has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The huyen could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$tinhs = $this->Huyen->Tinh->find('list');
		$this->set(compact('tinhs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Huyen->exists($id)) {
			throw new NotFoundException(__('Invalid huyen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Huyen->save($this->request->data)) {
				$this->Session->setFlash(__('The huyen has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The huyen could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Huyen.' . $this->Huyen->primaryKey => $id));
			$this->request->data = $this->Huyen->find('first', $options);
		}
		$tinhs = $this->Huyen->Tinh->find('list');
		$this->set(compact('tinhs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Huyen->id = $id;
		if (!$this->Huyen->exists()) {
			throw new NotFoundException(__('Invalid huyen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Huyen->delete()) {
			$this->Session->setFlash(__('The huyen has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The huyen could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
