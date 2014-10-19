<?php
App::uses('AppController', 'Controller');
/**
 * Ykiendonggops Controller
 *
 * @property Ykiendonggop $Ykiendonggop
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class YkiendonggopsController extends AppController {

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
		$this->Ykiendonggop->recursive = 0;
		$this->set('ykiendonggops', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ykiendonggop->exists($id)) {
			throw new NotFoundException(__('Invalid ykiendonggop'));
		}
		$options = array('conditions' => array('Ykiendonggop.' . $this->Ykiendonggop->primaryKey => $id));
		$this->set('ykiendonggop', $this->Ykiendonggop->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ykiendonggop->create();
			if ($this->Ykiendonggop->save($this->request->data)) {
				$this->Session->setFlash(__('The ykiendonggop has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ykiendonggop could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Ykiendonggop->exists($id)) {
			throw new NotFoundException(__('Invalid ykiendonggop'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ykiendonggop->save($this->request->data)) {
				$this->Session->setFlash(__('The ykiendonggop has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ykiendonggop could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Ykiendonggop.' . $this->Ykiendonggop->primaryKey => $id));
			$this->request->data = $this->Ykiendonggop->find('first', $options);
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
		$this->Ykiendonggop->id = $id;
		if (!$this->Ykiendonggop->exists()) {
			throw new NotFoundException(__('Invalid ykiendonggop'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ykiendonggop->delete()) {
			$this->Session->setFlash(__('The ykiendonggop has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The ykiendonggop could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
