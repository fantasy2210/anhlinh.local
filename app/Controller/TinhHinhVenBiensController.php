<?php

App::uses('AppController', 'Controller');

/**
 * TinhHinhVenBiens Controller
 *
 * @property TinhHinhVenBien $TinhHinhVenBien
 * @property PaginatorComponent $Paginator
 */
class TinhHinhVenBiensController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->TinhHinhVenBien->recursive = 0;
        $this->set('tinhHinhVenBiens', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->TinhHinhVenBien->exists($id)) {
            throw new NotFoundException(__('Invalid tinh hinh ven bien'));
        }
        $options = array('conditions' => array('TinhHinhVenBien.' . $this->TinhHinhVenBien->primaryKey => $id));
        $this->set('tinhHinhVenBien', $this->TinhHinhVenBien->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            if (!empty($this->request->data['TinhHinhVenBen']['thoi_diem'])) {
                $this->request->data['TinhHinhVenBien']['thoi_diem'] = date('Y-m-d H:i', $this->request->data['TinhHinhVenBien']['thoi_diem']);
            }
            $this->TinhHinhVenBien->create();
            if ($this->TinhHinhVenBien->save($this->request->data)) {
                $this->Session->setFlash(__('The tinh hinh ven bien has been saved.'));
                $this->redirect(array('action'=>'index'));  
            }
        }
        $tinhs = $this->TinhHinhVenBien->Tinh->find('list');
        //$huyens = $this->TinhHinhVenBien->Huyen->find('list');
        //$xas = $this->TinhHinhVenBien->Xa->find('list');
        $this->set(compact('tinhs'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->TinhHinhVenBien->exists($id)) {
            throw new NotFoundException(__('Invalid tinh hinh ven bien'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if (!empty($this->request->data['TinhHinhVenBen']['thoi_diem'])) {
                $this->request->data['TinhHinhVenBien']['thoi_diem'] = date('Y-m-d H:i', $this->request->data['TinhHinhVenBien']['thoi_diem']);
            }
            if ($this->TinhHinhVenBien->save($this->request->data)) {
                $this->Session->setFlash(__('The tinh hinh ven bien has been saved.'));
                $this->redirect(array('action'=>'index'));  
            }
        } else {
            $options = array('conditions' => array('TinhHinhVenBien.' . $this->TinhHinhVenBien->primaryKey => $id));
            $this->request->data = $this->TinhHinhVenBien->find('first', $options);
        }
        $tinhs = $this->TinhHinhVenBien->Tinh->find('list');
        $huyens = $this->TinhHinhVenBien->Huyen->find('list');
        $xas = $this->TinhHinhVenBien->Xa->find('list');
        $this->set(compact('tinhs','huyens','xas'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->TinhHinhVenBien->id = $id;
        if (!$this->TinhHinhVenBien->exists()) {
            throw new NotFoundException(__('Invalid tinh hinh ven bien'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->TinhHinhVenBien->delete()) {
            return $this->flash(__('The tinh hinh ven bien has been deleted.'), array('action' => 'index'));
        } else {
            $this->Session->setFlash(__('The tinh hinh ven bien could not be deleted. Please, try again.'));
            $this->redirect(array('action'=>'index'));
        }
    }

}
