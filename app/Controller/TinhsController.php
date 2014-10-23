<?php

App::uses('AppController', 'Controller');

/**
 * Tinhs Controller
 *
 * @property Tinh $Tinh
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TinhsController extends AppController {

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
        $this->Tinh->recursive = 0;
        $this->set('tinhs', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Tinh->exists($id)) {
            throw new NotFoundException(__('Invalid tinh'));
        }
        $options = array('conditions' => array('Tinh.' . $this->Tinh->primaryKey => $id));
        $this->set('tinh', $this->Tinh->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if (!empty($this->request->data)) {
            if ($this->Tinh->save($this->request->data)) {
                if ($this->request->is('ajax')) {
                    $this->autoRender = false;
                    
                    echo json_encode(array('success' => 1, 'id' => $this->Tinh->id, 'name' => $this->Tinh->field('ten')));
                    exit;
                } else {
                    $this->Session->setFlash('Thêm thành công');
                    $this->redirect(array('action' => 'index'));
                }
            } else {
                if ($this->request->is('ajax')) {
                    $this->autoRender = false;
                    echo json_encode(array('success' => 0,'message'=>'Thêm không thành công'));
                    exit;
                } else {
                    $this->Session->setFlash('Lưu không thành công');
                }
            }
        }
        if ($this->request->is('ajax')) {
            $this->layout=null;
            $this->render('ajax_add');
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
        if (!$this->Tinh->exists($id)) {
            throw new NotFoundException(__('Invalid tinh'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Tinh->save($this->request->data)) {
                $this->Session->setFlash(__('The tinh has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tinh could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Tinh.' . $this->Tinh->primaryKey => $id));
            $this->request->data = $this->Tinh->find('first', $options);
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
        $this->Tinh->id = $id;
        if (!$this->Tinh->exists()) {
            throw new NotFoundException(__('Invalid tinh'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Tinh->delete()) {
            $this->Session->setFlash(__('The tinh has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The tinh could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
