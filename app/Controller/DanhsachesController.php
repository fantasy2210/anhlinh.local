<?php
App::uses('AppController', 'Controller');
/**
 * Danhsaches Controller
 *
 * @property Danhsach $Danhsach
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DanhsachesController extends AppController {

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
		$this->Danhsach->recursive = 0;
		$this->set('danhsaches', $this->Paginator->paginate());
	}

	public function select2() {
		
		$options = array('conditions' => array());
		$row_array = array();
		$return_arr = array();
		if((isset($this->request->query['term']) && strlen($this->request->query['term']) > 0) || (isset($this->request->query['id']) && is_numeric($this->request->query['id'])))
		{
			if(isset($this->request->query['term']))
			{
				$getVar = $this->request->query['term'];
				$options['conditions'][] = "Danhsach.hovaten LIKE '%" . $getVar ."%'";
			}
			elseif(isset($this->request->query['id']))
			{
				$getVar = $this->request->query['id'];
				$options['conditions'][] = "Danhsach.id = '" . $getVar ."'";
			}
			$limit = intval($this->request->query['page_limit']);
			if($limit) {
				$options['limit'] = $limit;
			}
			$datas = $this->Danhsach->find('list', $options);
			foreach($datas as $key=>$data) {
				$row_array['id'] = $key;
                $row_array['text'] = ($data);
                array_push($return_arr,$row_array);
			}
			//print_r($datas);die;
		} else {
			$row_array['id'] = 0;
			$row_array['text'] = ('Start Typing....');
			array_push($return_arr,$row_array);
		}
		$ret = array();
		/* this is the return for a single result needed by select2 for initSelection */
		if(isset($this->request->query['id']))
		{
			$ret = $row_array;
		}
		/* this is the return for a multiple results needed by select2
		* Your results in select2 options needs to be data.result
		*/
		else
		{
			$ret['results'] = $return_arr;
		}
		echo json_encode($ret);die;
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Danhsach->exists($id)) {
			throw new NotFoundException(__('Invalid danhsach'));
		}
		$options = array('conditions' => array('Danhsach.' . $this->Danhsach->primaryKey => $id));
		$this->set('danhsach', $this->Danhsach->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Danhsach->create();
			if ($this->Danhsach->save($this->request->data)) {
				$this->Session->setFlash(__('The danhsach has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The danhsach could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$donvis = $this->Danhsach->Donvi->find('list');
		$chucvudangs = $this->Danhsach->Chucvudang->find('list');
		$chucvuchinhquyens = $this->Danhsach->Chucvuchinhquyen->find('list');
		$capbacs = $this->Danhsach->Capbac->find('list');
		$quanhegiadinhs = $this->Danhsach->Quanhegiadinh->find('list');
		$quatrinhcongtacs = $this->Danhsach->Quatrinhcongtac->find('list');
		$this->set(compact('donvis', 'chucvudangs', 'chucvuchinhquyens', 'capbacs', 'quanhegiadinhs', 'quatrinhcongtacs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Danhsach->exists($id)) {
			throw new NotFoundException(__('Invalid danhsach'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Danhsach->save($this->request->data)) {
				$this->Session->setFlash(__('The danhsach has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The danhsach could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Danhsach.' . $this->Danhsach->primaryKey => $id));
			$this->request->data = $this->Danhsach->find('first', $options);
		}
		$donvis = $this->Danhsach->Donvi->find('list');
		$chucvudangs = $this->Danhsach->Chucvudang->find('list');
		$chucvuchinhquyens = $this->Danhsach->Chucvuchinhquyen->find('list');
		$capbacs = $this->Danhsach->Capbac->find('list');
		$quanhegiadinhs = $this->Danhsach->Quanhegiadinh->find('list');
		$quatrinhcongtacs = $this->Danhsach->Quatrinhcongtac->find('list');
		$this->set(compact('donvis', 'chucvudangs', 'chucvuchinhquyens', 'capbacs', 'quanhegiadinhs', 'quatrinhcongtacs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Danhsach->id = $id;
		if (!$this->Danhsach->exists()) {
			throw new NotFoundException(__('Invalid danhsach'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Danhsach->delete()) {
			$this->Session->setFlash(__('The danhsach has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The danhsach could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
