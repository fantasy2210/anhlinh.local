<?php
App::uses('AppController', 'Controller');
/**
 * Quanhegiadinhs Controller
 *
 * @property Quanhegiadinh $Quanhegiadinh
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class QuanhegiadinhsController extends AppController {

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
		$this->Quanhegiadinh->recursive = 0;
		$this->set('quanhegiadinhs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Quanhegiadinh->exists($id)) {
			throw new NotFoundException(__('Invalid quanhegiadinh'));
		}
		$options = array('conditions' => array('Quanhegiadinh.' . $this->Quanhegiadinh->primaryKey => $id));
		$this->set('quanhegiadinh', $this->Quanhegiadinh->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Quanhegiadinh->create();
			if ($this->Quanhegiadinh->save($this->request->data)) {
				$this->Session->setFlash(__('The quanhegiadinh has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quanhegiadinh could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$loaiquanhes = $this->Quanhegiadinh->Loaiquanhe->find('list');
		$danhsaches = $this->Quanhegiadinh->Danhsach->find('list');
		$this->set(compact('loaiquanhes', 'danhsaches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Quanhegiadinh->exists($id)) {
			throw new NotFoundException(__('Invalid quanhegiadinh'));
		}
		if ($this->request->is(array('post', 'put'))) {
			//print_r($this->request->data);die;
			if ($this->Quanhegiadinh->save($this->request->data)) {
				$this->Session->setFlash(__('The quanhegiadinh has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quanhegiadinh could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Quanhegiadinh.' . $this->Quanhegiadinh->primaryKey => $id));
			$this->request->data = $this->Quanhegiadinh->find('first', $options);
		}
		$loaiquanhes = $this->Quanhegiadinh->Loaiquanhe->find('list');
		$danhsaches = $this->Quanhegiadinh->Danhsach->find('list');
		$this->set(compact('loaiquanhes', 'danhsaches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Quanhegiadinh->id = $id;
		if (!$this->Quanhegiadinh->exists()) {
			throw new NotFoundException(__('Invalid quanhegiadinh'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quanhegiadinh->delete()) {
			$this->Session->setFlash(__('The quanhegiadinh has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The quanhegiadinh could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
