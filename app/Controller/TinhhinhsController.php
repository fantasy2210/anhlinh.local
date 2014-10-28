<?php

App::uses('AppController', 'Controller');

/**
 * Tinhhinhs Controller
 *
 * @property Tinhhinh $Tinhhinh
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TinhhinhsController extends AppController {

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
        $this->Tinhhinh->recursive = 0;
        $this->Paginator->settings = array('order' => array('Tinhhinh.thoigian' => 'desc'));
        $daos = $this->Tinhhinh->Dao->find('list');
        $vungbiens = $this->Tinhhinh->Vungbien->find('list');
        $quocgias = $this->Tinhhinh->Quocgia->find('list');
        $taucas = $this->Tinhhinh->Tauca->find('list');
        $this->set(compact('daos', 'vungbiens', 'quocgias', 'taucas'));
        $this->set('tinhhinhs', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Tinhhinh->exists($id)) {
            throw new NotFoundException(__('Invalid tinhhinh'));
        }
        $options = array('conditions' => array('Tinhhinh.' . $this->Tinhhinh->primaryKey => $id));
        $this->set('tinhhinh', $this->Tinhhinh->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Tinhhinh->create();
            if ($this->Tinhhinh->save($this->request->data)) {
                $this->Session->setFlash(__('The tinhhinh has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tinhhinh could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $daos = $this->Tinhhinh->Dao->find('list');
        $vungbiens = $this->Tinhhinh->Vungbien->find('list');
        $quocgias = $this->Tinhhinh->Quocgia->find('list');
        $taucas = $this->Tinhhinh->Tauca->find('list');
        $this->set(compact('daos', 'vungbiens', 'quocgias', 'taucas'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Tinhhinh->exists($id)) {
            throw new NotFoundException(__('Invalid tinhhinh'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Tinhhinh->save($this->request->data)) {
                $this->Session->setFlash(__('The tinhhinh has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tinhhinh could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Tinhhinh.' . $this->Tinhhinh->primaryKey => $id));
            $this->request->data = $this->Tinhhinh->find('first', $options);
        }
        $daos = $this->Tinhhinh->Dao->find('list');
        $vungbiens = $this->Tinhhinh->Vungbien->find('list');
        $quocgias = $this->Tinhhinh->Quocgia->find('list');
        $taucas = $this->Tinhhinh->Tauca->find('list');
        $this->set(compact('daos', 'vungbiens', 'quocgias', 'taucas'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Tinhhinh->id = $id;
        if (!$this->Tinhhinh->exists()) {
            throw new NotFoundException(__('Invalid tinhhinh'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Tinhhinh->delete()) {
            $this->Session->setFlash(__('The tinhhinh has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The tinhhinh could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
