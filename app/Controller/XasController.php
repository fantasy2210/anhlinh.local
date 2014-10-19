<?php
App::uses('AppController', 'Controller');
/**
 * Xas Controller
 *
 * @property Xa $Xa
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class XasController extends AppController {

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
		$this->Xa->recursive = 0;
		$this->set('xas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Xa->exists($id)) {
			throw new NotFoundException(__('Invalid xa'));
		}
		$options = array('conditions' => array('Xa.' . $this->Xa->primaryKey => $id));
		$this->set('xa', $this->Xa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Xa->create();
			if ($this->Xa->save($this->request->data)) {
				$this->Session->setFlash(__('The xa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The xa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$huyens = $this->Xa->Huyen->find('list');
		$this->set(compact('huyens'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Xa->exists($id)) {
			throw new NotFoundException(__('Invalid xa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Xa->save($this->request->data)) {
				$this->Session->setFlash(__('The xa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The xa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Xa.' . $this->Xa->primaryKey => $id));
			$this->request->data = $this->Xa->find('first', $options);
		}
		$huyens = $this->Xa->Huyen->find('list');
		$this->set(compact('huyens'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Xa->id = $id;
		if (!$this->Xa->exists()) {
			throw new NotFoundException(__('Invalid xa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Xa->delete()) {
			$this->Session->setFlash(__('The xa has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The xa could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
