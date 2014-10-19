<?php
App::uses('AppController', 'Controller');
/**
 * Kinhphichis Controller
 *
 * @property Kinhphichi $Kinhphichi
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class KinhphichisController extends AppController {

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
		$this->Kinhphichi->recursive = 0;
		$this->set('kinhphichis', $this->Paginator->paginate());
	}

	public function chuaduyet() {
		$this->Kinhphichi->recursive = 0;
		$this->set('kinhphichis', $this->Paginator->paginate());
	}
	
	public function dahuy() {
		$this->Kinhphichi->recursive = 0;
		$this->set('kinhphichis', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Kinhphichi->exists($id)) {
			throw new NotFoundException(__('Invalid kinhphichi'));
		}
		$options = array('conditions' => array('Kinhphichi.' . $this->Kinhphichi->primaryKey => $id));
		$this->set('kinhphichi', $this->Kinhphichi->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kinhphichi->create();
			if ($this->Kinhphichi->save($this->request->data)) {
				$this->Session->setFlash(__('The kinhphichi has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kinhphichi could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$nguoidenghis = $this->Kinhphichi->Nguoidenghi->find('list');
		$nguoiduyets = $this->Kinhphichi->Nguoiduyet->find('list');
		$this->set(compact('nguoidenghis', 'nguoiduyets'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Kinhphichi->exists($id)) {
			throw new NotFoundException(__('Invalid kinhphichi'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Kinhphichi->save($this->request->data)) {
				$this->Session->setFlash(__('The kinhphichi has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kinhphichi could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Kinhphichi.' . $this->Kinhphichi->primaryKey => $id));
			$this->request->data = $this->Kinhphichi->find('first', $options);
		}
		$nguoidenghis = $this->Kinhphichi->Nguoidenghi->find('list');
		$nguoiduyets = $this->Kinhphichi->Nguoiduyet->find('list');
		$this->set(compact('nguoidenghis', 'nguoiduyets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Kinhphichi->id = $id;
		if (!$this->Kinhphichi->exists()) {
			throw new NotFoundException(__('Invalid kinhphichi'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Kinhphichi->delete()) {
			$this->Session->setFlash(__('The kinhphichi has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The kinhphichi could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
