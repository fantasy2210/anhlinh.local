<?php
App::uses('AppController', 'Controller');
/**
 * Baocaotins Controller
 *
 * @property Baocaotin $Baocaotin
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BaocaotinsController extends AppController {

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
		$this->Baocaotin->recursive = 0;
		$this->set('baocaotins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Baocaotin->exists($id)) {
			throw new NotFoundException(__('Invalid baocaotin'));
		}
		$options = array('conditions' => array('Baocaotin.' . $this->Baocaotin->primaryKey => $id));
		$this->set('baocaotin', $this->Baocaotin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Baocaotin->create();
			if ($this->Baocaotin->save($this->request->data)) {
				$this->Session->setFlash(__('The baocaotin has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The baocaotin could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$danhsaches = $this->Baocaotin->Danhsach->find('list');
		$this->set(compact('danhsaches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Baocaotin->exists($id)) {
			throw new NotFoundException(__('Invalid baocaotin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Baocaotin->save($this->request->data)) {
				$this->Session->setFlash(__('The baocaotin has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The baocaotin could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Baocaotin.' . $this->Baocaotin->primaryKey => $id));
			$this->request->data = $this->Baocaotin->find('first', $options);
		}
		$danhsaches = $this->Baocaotin->Danhsach->find('list');
		$this->set(compact('danhsaches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Baocaotin->id = $id;
		if (!$this->Baocaotin->exists()) {
			throw new NotFoundException(__('Invalid baocaotin'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Baocaotin->delete()) {
			$this->Session->setFlash(__('The baocaotin has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The baocaotin could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
