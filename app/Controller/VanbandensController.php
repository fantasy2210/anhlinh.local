<?php
App::uses('AppController', 'Controller');
/**
 * Vanbandens Controller
 *
 * @property Vanbanden $Vanbanden
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VanbandensController extends AppController {

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
		$this->Vanbanden->recursive = 0;
		$this->set('vanbandens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vanbanden->exists($id)) {
			throw new NotFoundException(__('Invalid vanbanden'));
		}
		$options = array('conditions' => array('Vanbanden.' . $this->Vanbanden->primaryKey => $id));
		$vanbanden = $this->Vanbanden->find('first', $options);
		$das = array();
		if($vanbanden['Danhsach']) {
			foreach($vanbanden['Danhsach'] as $danhsach) {
				$das[] = $danhsach['id'].":".$danhsach['hovaten'];
			}
		}
		//print_r($vanbanden);die;
		$this->set('danhsach', join(",",$das));
		$this->set('vanbanden', $vanbanden);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vanbanden->create();
			if ($this->Vanbanden->save($this->request->data)) {
				$this->Session->setFlash(__('The vanbanden has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vanbanden could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$loaivanbans = $this->Vanbanden->Loaivanban->find('list');
		$noiguis = $this->Vanbanden->Noigui->find('list');
		$linhvucs = $this->Vanbanden->Linhvuc->find('list');
		$nguoiduyets = $this->Vanbanden->Nguoiduyet->find('list');
		$nguoinhans = $this->Vanbanden->Nguoinhan->find('list');
		$this->set(compact('loaivanbans', 'noiguis', 'linhvucs', 'nguoiduyets', 'nguoinhans'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vanbanden->exists($id)) {
			throw new NotFoundException(__('Invalid vanbanden'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vanbanden->save($this->request->data)) {
				$this->Session->setFlash(__('The vanbanden has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vanbanden could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Vanbanden.' . $this->Vanbanden->primaryKey => $id));
			$this->request->data = $this->Vanbanden->find('first', $options);
		}
		$files = array();
		foreach ($this->request->data['Attachfile'] as $vanbanden) {
			$files[] = array('name'=>$vanbanden['name'],'size'=>$vanbanden['size'],'xhr'=>array('responseText'=>$vanbanden['id']));
		}
		$this->set('files',$files);
		$loaivanbans = $this->Vanbanden->Loaivanban->find('list');
		$noiguis = $this->Vanbanden->Noigui->find('list');
		$linhvucs = $this->Vanbanden->Linhvuc->find('list');
		$nguoiduyets = $this->Vanbanden->Nguoiduyet->find('list');
		$nguoinhans = $this->Vanbanden->Nguoinhan->find('list');
		$this->set(compact('loaivanbans', 'noiguis', 'linhvucs', 'nguoiduyets', 'nguoinhans'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function chuyenvanban($id = null) {
		if (!$this->Vanbanden->exists($id)) {
			throw new NotFoundException(__('Invalid vanbanden'));
		}
		if ($this->request->is(array('post', 'put'))) {			
			$data1 = $this->request->data['Vanbanden']['nguoinhan'];
			$data1 = explode(",",$data1);
			$datas = array("Vanbanden"=>array("id"=>$id),"Danhsach"=>array("Danhsach"=>$data1));
			//print_r($datas);die;
			if ($this->Vanbanden->save($datas) ) {
				$this->Session->setFlash(__('The vanbanden has been saved.'), 'default', array('class' => 'alert alert-danger'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The vanbanden could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}
	public function delete($id = null) {
		$this->Vanbanden->id = $id;
		if (!$this->Vanbanden->exists()) {
			throw new NotFoundException(__('Invalid vanbanden'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vanbanden->delete()) {
			$this->Session->setFlash(__('The vanbanden has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The vanbanden could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
