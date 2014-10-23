<?php

App::uses('AppController', 'Controller');

/**
 * Huyens Controller
 *
 * @property Huyen $Huyen
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HuyensController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');
    public $helpers = array('Js');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Huyen->recursive = 0;
        $this->set('huyens', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Huyen->exists($id)) {
            throw new NotFoundException(__('Invalid huyen'));
        }
        $options = array('conditions' => array('Huyen.' . $this->Huyen->primaryKey => $id));
        $this->set('huyen', $this->Huyen->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if (!empty($this->request->data)) {
            $this->Huyen->create();
            if ($this->Huyen->save($this->request->data)) {
                if ($this->request->is('ajax')) {
                    $this->autoRender = false;

                    echo json_encode(array(
                        'success' => 1,
                        'id' => $this->Huyen->id,
                        'name' => $this->Huyen->field('ten'),
                        'tinh_id' => $this->Huyen->field('tinh_id')
                    ));
                    exit;
                } else {
                    $this->Session->setFlash('Thêm thành công');
                    $this->redirect(array('action' => 'index'));
                }
            } else {
                if ($this->request->is('ajax')) {
                    $this->autoRender = false;
                    echo json_encode(array('success' => 0, 'message' => 'Thêm không thành công'));
                    exit;
                } else {
                    $this->Session->setFlash('Lưu không thành công');
                }
            }
        }
        $tinhs = $this->Huyen->Tinh->find('list');
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
        if (!$this->Huyen->exists($id)) {
            throw new NotFoundException(__('Invalid huyen'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Huyen->save($this->request->data)) {
                $this->Session->setFlash(__('The huyen has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The huyen could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Huyen.' . $this->Huyen->primaryKey => $id));
            $this->request->data = $this->Huyen->find('first', $options);
        }
        $tinhs = $this->Huyen->Tinh->find('list');
        $this->set(compact('tinhs'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Huyen->id = $id;
        if (!$this->Huyen->exists()) {
            throw new NotFoundException(__('Invalid huyen'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Huyen->delete()) {
            $this->Session->setFlash(__('The huyen has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The huyen could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function getByTinh() {
        $this->layout = null;
        //$this->autoRender = false;
        if (isset($this->request->data['Xa']['tinh_id'])) {
            $tinh_id = $this->request->data['Xa']['tinh_id'];
        }
        if (isset($this->request->data['TinhHinhVenBien']['tinh_id'])) {
            $tinh_id = $this->request->data['TinhHinhVenBien']['tinh_id'];
        }
        $huyens = $this->Huyen->find('list', array(
            'conditions' => array('Huyen.tinh_id' => $tinh_id),
            'recursive' => -1
        ));
        $this->set('huyens', $huyens);
    }

}
