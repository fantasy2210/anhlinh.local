<?php

App::uses('AppController', 'Controller');

/**
 * Taucas Controller
 *
 * @property Tauca $Tauca
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TaucasController extends AppController {

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
        $this->Tauca->recursive = 0;
        $this->set('taucas', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Tauca->exists($id)) {
            throw new NotFoundException(__('Invalid tauca'));
        }
        $options = array('conditions' => array('Tauca.' . $this->Tauca->primaryKey => $id));
        $this->set('tauca', $this->Tauca->find('first', $options));
    }

    public function select2() {
        $options = array('conditions' => array());
        $options['conditions']['OR'] = array();
        $row_array = array();
        $return_arr = array();
        if ((isset($this->request->query['term']) && strlen($this->request->query['term']) > 0) || (isset($this->request->query['id']) && is_numeric($this->request->query['id']))) {
            if (isset($this->request->query['term'])) {
                $getVar = $this->request->query['term'];
                $options['conditions']['OR'][] = "Tauca.tentau LIKE '%" . $getVar . "%'";
                $options['conditions']['OR'][] = "Tauca.kyhieu LIKE '%" . $getVar . "%'";
                $options['conditions']['OR'][] = "Tauca.sohieu LIKE '%" . $getVar . "%'";
            } elseif (isset($this->request->query['id'])) {
                $getVar = $this->request->query['id'];
                $options['conditions'][] = "Tauca.id = '" . $getVar . "'";
            }
            $limit = intval($this->request->query['page_limit']);
            if ($limit) {
                $options['limit'] = $limit;
            }
            $this->Tauca->recursive = 0;
            $datas = $this->Tauca->find('all', $options);
            //print_r($datas);die;
            foreach ($datas as $key => $data) {
                $row_array['id'] = $data['Tauca']['id'];
                $row_array['text'] = $data['Tauca']['tentau'];
                $row_array['hanhnghe'] = $data['Tauca']['hanhnghe'];
                array_push($return_arr, $row_array);
            }
        } else {
            $row_array['id'] = 0;
            $row_array['text'] = ('Start Typing....');
            array_push($return_arr, $row_array);
        }
        $ret = array();
        /* this is the return for a single result needed by select2 for initSelection */
        if (isset($this->request->query['id'])) {
            $ret = $row_array;
        }
        /* this is the return for a multiple results needed by select2
         * Your results in select2 options needs to be data.result
         */ else {
            $ret['results'] = $return_arr;
        }
        echo json_encode($ret);
        die;
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if (!empty($this->request->data)) {
            $this->Tauca->create();
            if ($this->Tauca->save($this->request->data)) {
                if ($this->request->is('ajax')) {
                    $this->autoRender = false;

                    echo json_encode(array(
                        'success' => 1,
                        'id' => $this->Tauca->id,
                        'name' => $this->Tauca->field('tentau')
                        
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
        $loaitaus = $this->Tauca->Loaitau->find('list');
        $this->set(compact('loaitaus'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Tauca->exists($id)) {
            throw new NotFoundException(__('Invalid tauca'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Tauca->save($this->request->data)) {
                $this->Session->setFlash(__('The tauca has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tauca could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Tauca.' . $this->Tauca->primaryKey => $id));
            $this->request->data = $this->Tauca->find('first', $options);
        }
        $loaitaus = $this->Tauca->Loaitau->find('list');
        $this->set(compact('loaitaus'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Tauca->id = $id;
        if (!$this->Tauca->exists()) {
            throw new NotFoundException(__('Invalid tauca'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Tauca->delete()) {
            $this->Session->setFlash(__('The tauca has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The tauca could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
