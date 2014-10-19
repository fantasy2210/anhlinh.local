<?php
App::uses('AppController', 'Controller');
/**
 * Chucvuchinhquyens Controller
 *
 * @property Chucvuchinhquyen $Chucvuchinhquyen
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ChucvuchinhquyensController extends AppController {

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
		$this->Chucvuchinhquyen->recursive = 0;
		$this->set('chucvuchinhquyens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Chucvuchinhquyen->exists($id)) {
			throw new NotFoundException(__('Invalid chucvuchinhquyen'));
		}
		$options = array('conditions' => array('Chucvuchinhquyen.' . $this->Chucvuchinhquyen->primaryKey => $id));
		$this->set('chucvuchinhquyen', $this->Chucvuchinhquyen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Chucvuchinhquyen->create();
			if ($this->Chucvuchinhquyen->save($this->request->data)) {
				$this->Session->setFlash(__('The chucvuchinhquyen has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chucvuchinhquyen could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Chucvuchinhquyen->exists($id)) {
			throw new NotFoundException(__('Invalid chucvuchinhquyen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Chucvuchinhquyen->save($this->request->data)) {
				$this->Session->setFlash(__('The chucvuchinhquyen has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chucvuchinhquyen could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Chucvuchinhquyen.' . $this->Chucvuchinhquyen->primaryKey => $id));
			$this->request->data = $this->Chucvuchinhquyen->find('first', $options);
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
		$this->Chucvuchinhquyen->id = $id;
		if (!$this->Chucvuchinhquyen->exists()) {
			throw new NotFoundException(__('Invalid chucvuchinhquyen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Chucvuchinhquyen->delete()) {
			$this->Session->setFlash(__('The chucvuchinhquyen has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The chucvuchinhquyen could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
