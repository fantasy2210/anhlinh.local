<?php
App::uses('AppController', 'Controller');
/**
 * Dangkyhoatdongs Controller
 *
 * @property Dangkyhoatdong $Dangkyhoatdong
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DangkyhoatdongsController extends AppController {

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
		$this->Dangkyhoatdong->recursive = 0;
		$this->set('dangkyhoatdongs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dangkyhoatdong->exists($id)) {
			throw new NotFoundException(__('Invalid dangkyhoatdong'));
		}
		$options = array('conditions' => array('Dangkyhoatdong.' . $this->Dangkyhoatdong->primaryKey => $id));
		$this->set('dangkyhoatdong', $this->Dangkyhoatdong->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dangkyhoatdong->create();
			if ($this->Dangkyhoatdong->save($this->request->data)) {
				$this->Session->setFlash(__('The dangkyhoatdong has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dangkyhoatdong could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$danhsaches = $this->Dangkyhoatdong->Danhsach->find('list');
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
		if (!$this->Dangkyhoatdong->exists($id)) {
			throw new NotFoundException(__('Invalid dangkyhoatdong'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dangkyhoatdong->save($this->request->data)) {
				$this->Session->setFlash(__('The dangkyhoatdong has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dangkyhoatdong could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Dangkyhoatdong.' . $this->Dangkyhoatdong->primaryKey => $id));
			$this->request->data = $this->Dangkyhoatdong->find('first', $options);
		}
		$danhsaches = $this->Dangkyhoatdong->Danhsach->find('list');
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
		$this->Dangkyhoatdong->id = $id;
		if (!$this->Dangkyhoatdong->exists()) {
			throw new NotFoundException(__('Invalid dangkyhoatdong'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dangkyhoatdong->delete()) {
			$this->Session->setFlash(__('The dangkyhoatdong has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The dangkyhoatdong could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
