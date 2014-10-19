<?php
App::uses('AppController', 'Controller');
/**
 * Loaiquanhes Controller
 *
 * @property Loaiquanhe $Loaiquanhe
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TaucannbatgiusController extends AppController {
	public $uses = array('Taucannbatgiu');
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
		$this->Taucannbatgiu->recursive = 0;
		$this->set('taucannbatgius', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Taucannbatgiu->exists($id)) {
			throw new NotFoundException(__('Invalid Taucannbatgiu'));
		}
		$options = array('conditions' => array('Taucannbatgiu.' . $this->Taucannbatgiu->primaryKey => $id));
		$this->set('taucannbatgiu', $this->Taucannbatgiu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Taucannbatgiu->create();
			if ($this->Taucannbatgiu->save($this->request->data)) {
				$this->Session->setFlash(__('The Taucannbatgiu has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Taucannbatgiu could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Taucannbatgiu->exists($id)) {
			throw new NotFoundException(__('Invalid Taucannbatgiu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Taucannbatgiu->save($this->request->data)) {
				$this->Session->setFlash(__('The Taucannbatgiu has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Taucannbatgiu could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Taucannbatgiu.' . $this->Taucannbatgiu->primaryKey => $id));
			$this->request->data = $this->Taucannbatgiu->find('first', $options);
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
		$this->Taucannbatgiu->id = $id;
		if (!$this->Taucannbatgiu->exists()) {
			throw new NotFoundException(__('Invalid Taucannbatgiu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Taucannbatgiu->delete()) {
			$this->Session->setFlash(__('The Taucannbatgiu has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The Taucannbatgiu could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
