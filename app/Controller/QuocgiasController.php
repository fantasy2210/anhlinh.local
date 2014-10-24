<?php

App::uses('AppController', 'Controller');

/**
 * Quocgia Controller
 *
 * @property Quocgium $Quocgium
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class QuocgiasController extends AppController {

    public $uses = 'Quocgia';

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
        $this->Quocgia->recursive = 0;
        $this->set('quocgia', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        //pr($this);die;
        if (!$this->Quocgia->exists($id)) {
            throw new NotFoundException(__('Invalid Quocgia'));
        }
        $options = array('conditions' => array('Quocgia.' . $this->Quocgia->primaryKey => $id));
        $this->set('quocgia', $this->Quocgia->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if (!empty($this->request->data)) {
            if ($this->Quocgia->save($this->request->data)) {
                if ($this->request->is('ajax')) {
                    $this->autoRender = false;

                    echo json_encode(array('success' => 1, 'id' => $this->Quocgia->id, 'name' => $this->Quocgia->field('ten')));
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
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Quocgia->exists($id)) {
            throw new NotFoundException(__('Invalid Quocgia'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Quocgia->save($this->request->data)) {
                $this->Session->setFlash(__('The Quocgia has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Quocgia could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Quocgia.' . $this->Quocgia->primaryKey => $id));
            $this->request->data = $this->Quocgia->find('first', $options);
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
        $this->Quocgia->id = $id;
        if (!$this->Quocgia->exists()) {
            throw new NotFoundException(__('Invalid quocgium'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Quocgia->delete()) {
            $this->Session->setFlash(__('The quocgium has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The quocgium could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
