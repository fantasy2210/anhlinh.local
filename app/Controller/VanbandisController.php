<?php
App::uses('AppController', 'Controller');
/**
 * Vanbandis Controller
 *
 * @property Vanbandi $Vanbandi
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VanbandisController extends AppController {

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
		$this->Vanbandi->recursive = 0;
		$this->set('vanbandis', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vanbandi->exists($id)) {
			throw new NotFoundException(__('Invalid vanbandi'));
		}
		$options = array('conditions' => array('Vanbandi.' . $this->Vanbandi->primaryKey => $id));
		$this->set('vanbandi', $this->Vanbandi->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($vbdid = null) {
		if ($this->request->is('post')) {
			$this->Vanbandi->create();
			if ($this->Vanbandi->save($this->request->data)) {
				$this->Session->setFlash(__('The vanbandi has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vanbandi could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$loaivanbans = $this->Vanbandi->Loaivanban->find('list');
		$nguoikies = $this->Vanbandi->Nguoiky->find('list');
		$linhvucs = $this->Vanbandi->Linhvuc->find('list');
		//$vanbandens = $this->Vanbandi->Vanbanden->find('list');		
		$this->set(compact('loaivanbans', 'nguoikies', 'linhvucs', 'vbdid'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vanbandi->exists($id)) {
			throw new NotFoundException(__('Invalid vanbandi'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vanbandi->save($this->request->data)) {
				$this->Session->setFlash(__('The vanbandi has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vanbandi could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Vanbandi.' . $this->Vanbandi->primaryKey => $id));
			$this->request->data = $this->Vanbandi->find('first', $options);
		}
		$loaivanbans = $this->Vanbandi->Loaivanban->find('list');
		$nguoikies = $this->Vanbandi->Nguoiky->find('list');
		$linhvucs = $this->Vanbandi->Linhvuc->find('list');
		$vanbandens = $this->Vanbandi->Vanbanden->find('list');
		$this->set(compact('loaivanbans', 'nguoikies', 'linhvucs', 'vanbandens'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vanbandi->id = $id;
		if (!$this->Vanbandi->exists()) {
			throw new NotFoundException(__('Invalid vanbandi'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vanbandi->delete()) {
			$this->Session->setFlash(__('The vanbandi has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The vanbandi could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
