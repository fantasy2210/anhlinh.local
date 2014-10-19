<?php
App::uses('AppController', 'Controller');
/**
 * Suachuavcs Controller
 *
 * @property Suachuavc $Suachuavc
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SuachuavcsController extends AppController {

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
		$this->Suachuavc->recursive = 0;
		$this->set('suachuavcs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Suachuavc->exists($id)) {
			throw new NotFoundException(__('Invalid suachuavc'));
		}
		$options = array('conditions' => array('Suachuavc.' . $this->Suachuavc->primaryKey => $id));
		$this->set('suachuavc', $this->Suachuavc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Suachuavc->create();
			if ($this->Suachuavc->save($this->request->data)) {
				$this->Session->setFlash(__('The suachuavc has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suachuavc could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$vatchats = $this->Suachuavc->Vatchat->find('list');
		$nguoidenghis = $this->Suachuavc->Nguoidenghi->find('list');
		$this->set(compact('vatchats', 'nguoidenghis'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Suachuavc->exists($id)) {
			throw new NotFoundException(__('Invalid suachuavc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Suachuavc->save($this->request->data)) {
				$this->Session->setFlash(__('The suachuavc has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suachuavc could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Suachuavc.' . $this->Suachuavc->primaryKey => $id));
			$this->request->data = $this->Suachuavc->find('first', $options);
		}
		$vatchats = $this->Suachuavc->Vatchat->find('list');
		$nguoidenghis = $this->Suachuavc->Nguoidenghi->find('list');
		$this->set(compact('vatchats', 'nguoidenghis'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Suachuavc->id = $id;
		if (!$this->Suachuavc->exists()) {
			throw new NotFoundException(__('Invalid suachuavc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Suachuavc->delete()) {
			$this->Session->setFlash(__('The suachuavc has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The suachuavc could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
