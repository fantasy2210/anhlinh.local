<?php

App::uses('AppController', 'Controller');

/**
 * Daos Controller
 *
 * @property Dao $Dao
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DaosController extends AppController {

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
        $this->Dao->recursive = 0;
        $this->set('daos', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Dao->exists($id)) {
            throw new NotFoundException(__('Invalid dao'));
        }
        $options = array('conditions' => array('Dao.' . $this->Dao->primaryKey => $id));
        $this->set('dao', $this->Dao->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if (!empty($this->request->data)) {
            if ($this->Dao->save($this->request->data)) {
                if ($this->request->is('ajax')) {
                    $this->autoRender = false;

                    echo json_encode(array('success' => 1, 'id' => $this->Dao->id, 'name' => $this->Dao->field('ten')));
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
        if (!$this->Dao->exists($id)) {
            throw new NotFoundException(__('Invalid dao'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Dao->save($this->request->data)) {
                $this->Session->setFlash(__('The dao has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The dao could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Dao.' . $this->Dao->primaryKey => $id));
            $this->request->data = $this->Dao->find('first', $options);
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
        $this->Dao->id = $id;
        if (!$this->Dao->exists()) {
            throw new NotFoundException(__('Invalid dao'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Dao->delete()) {
            $this->Session->setFlash(__('The dao has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The dao could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
