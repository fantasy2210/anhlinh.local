<?php
App::uses('AppController', 'Controller');
/**
 * Ykienchidaos Controller
 *
 * @property Ykienchidao $Ykienchidao
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class YkienchidaosController extends AppController {

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
		$this->Ykienchidao->recursive = 0;
		$this->set('ykienchidaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ykienchidao->exists($id)) {
			throw new NotFoundException(__('Invalid ykienchidao'));
		}
		$options = array('conditions' => array('Ykienchidao.' . $this->Ykienchidao->primaryKey => $id));
		$this->set('ykienchidao', $this->Ykienchidao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ykienchidao->create();
			if ($this->Ykienchidao->save($this->request->data)) {
				$this->Session->setFlash(__('The ykienchidao has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ykienchidao could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$donvis = $this->Ykienchidao->Donvi->find('list');
		$danhsaches = $this->Ykienchidao->Danhsach->find('list');
		$this->set(compact('donvis', 'danhsaches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ykienchidao->exists($id)) {
			throw new NotFoundException(__('Invalid ykienchidao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ykienchidao->save($this->request->data)) {
				$this->Session->setFlash(__('The ykienchidao has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ykienchidao could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Ykienchidao.' . $this->Ykienchidao->primaryKey => $id));
			$this->request->data = $this->Ykienchidao->find('first', $options);
		}
		$donvis = $this->Ykienchidao->Donvi->find('list');
		$danhsaches = $this->Ykienchidao->Danhsach->find('list');
		$this->set(compact('donvis', 'danhsaches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ykienchidao->id = $id;
		if (!$this->Ykienchidao->exists()) {
			throw new NotFoundException(__('Invalid ykienchidao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ykienchidao->delete()) {
			$this->Session->setFlash(__('The ykienchidao has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The ykienchidao could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
