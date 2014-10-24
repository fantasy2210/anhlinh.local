<?php

App::uses('AppController', 'Controller');

/**
 * Loaiquanhes Controller
 *
 * @property Loaiquanhe $Loaiquanhe
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LoaitausController extends AppController {

    public $uses = array('Loaitau');

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
        $this->Loaitau->recursive = 0;
        $this->set('loaitauses', $this->Paginator->paginate());
    }

    /* Lấy danh sách các loại tàu cho hàm requestAction */

    public function getList() {
        $rs = $this->Loaitau->find('list');
        return $rs;
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Loaitau->exists($id)) {
            throw new NotFoundException(__('Invalid Loaitau'));
        }
        $options = array('conditions' => array('Loaitau.' . $this->Loaitau->primaryKey => $id));
        $this->set('loaitau', $this->Loaitau->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Loaitau->create();
            if ($this->Loaitau->save($this->request->data)) {
                $this->Session->setFlash(__('The Loaitau has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Loaitau could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
        if (!$this->Loaitau->exists($id)) {
            throw new NotFoundException(__('Invalid Loaitau'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Loaitau->save($this->request->data)) {
                $this->Session->setFlash(__('The Loaitau has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Loaitau could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Loaitau.' . $this->Loaitau->primaryKey => $id));
            $this->request->data = $this->Loaitau->find('first', $options);
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
        $this->Loaitau->id = $id;
        if (!$this->Loaitau->exists()) {
            throw new NotFoundException(__('Invalid Loaitau'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Loaitau->delete()) {
            $this->Session->setFlash(__('The Loaitau has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The Loaitau could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
