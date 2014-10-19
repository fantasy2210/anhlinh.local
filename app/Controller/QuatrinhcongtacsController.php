<?php
App::uses('AppController', 'Controller');
/**
 * Quatrinhcongtacs Controller
 *
 * @property Quatrinhcongtac $Quatrinhcongtac
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class QuatrinhcongtacsController extends AppController {

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
		$this->Quatrinhcongtac->recursive = 0;
		$this->set('quatrinhcongtacs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Quatrinhcongtac->exists($id)) {
			throw new NotFoundException(__('Invalid quatrinhcongtac'));
		}
		$options = array('conditions' => array('Quatrinhcongtac.' . $this->Quatrinhcongtac->primaryKey => $id));
		$this->set('quatrinhcongtac', $this->Quatrinhcongtac->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Quatrinhcongtac->create();
			if ($this->Quatrinhcongtac->save($this->request->data)) {
				$this->Session->setFlash(__('The quatrinhcongtac has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quatrinhcongtac could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$capbacs = $this->Quatrinhcongtac->Capbac->find('list');
		$chucvudangs = $this->Quatrinhcongtac->Chucvudang->find('list');
		$chucvuchinhquyens = $this->Quatrinhcongtac->Chucvuchinhquyen->find('list');
		$donvis = $this->Quatrinhcongtac->Donvi->find('list');
		$danhsaches = $this->Quatrinhcongtac->Danhsach->find('list');
		$this->set(compact('capbacs', 'chucvudangs', 'chucvuchinhquyens', 'donvis', 'danhsaches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Quatrinhcongtac->exists($id)) {
			throw new NotFoundException(__('Invalid quatrinhcongtac'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Quatrinhcongtac->save($this->request->data)) {
				$this->Session->setFlash(__('The quatrinhcongtac has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quatrinhcongtac could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Quatrinhcongtac.' . $this->Quatrinhcongtac->primaryKey => $id));
			$this->request->data = $this->Quatrinhcongtac->find('first', $options);
		}
		$capbacs = $this->Quatrinhcongtac->Capbac->find('list');
		$chucvudangs = $this->Quatrinhcongtac->Chucvudang->find('list');
		$chucvuchinhquyens = $this->Quatrinhcongtac->Chucvuchinhquyen->find('list');
		$donvis = $this->Quatrinhcongtac->Donvi->find('list');
		$danhsaches = $this->Quatrinhcongtac->Danhsach->find('list');
		$this->set(compact('capbacs', 'chucvudangs', 'chucvuchinhquyens', 'donvis', 'danhsaches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Quatrinhcongtac->id = $id;
		if (!$this->Quatrinhcongtac->exists()) {
			throw new NotFoundException(__('Invalid quatrinhcongtac'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quatrinhcongtac->delete()) {
			$this->Session->setFlash(__('The quatrinhcongtac has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The quatrinhcongtac could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
