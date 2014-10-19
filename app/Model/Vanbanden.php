<?php
App::uses('AppModel', 'Model');
/**
 * Vanbanden Model
 *
 * @property Loaivanban $Loaivanban
 * @property Noigui $Noigui
 * @property Linhvuc $Linhvuc
 * @property Nguoiduyet $Nguoiduyet
 * @property Nguoinhan $Nguoinhan
 * @property Vanbandi $Vanbandi
 */
class Vanbanden extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'vanbanden';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tenvanban';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Loaivanban' => array(
			'className' => 'Loaivanban',
			'foreignKey' => 'loaivanban_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Noigui' => array(
			'className' => 'Noigui',
			'foreignKey' => 'noigui_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Linhvuc' => array(
			'className' => 'Linhvuc',
			'foreignKey' => 'linhvuc_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nguoiduyet' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'nguoiduyet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nguoinhan' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'nguoinhan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Vanbandi' => array(
			'className' => 'Vanbandi',
			'foreignKey' => 'vanbanden_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Attachfile' => array(
			'className' => 'Attachfile',
			'foreignKey' => 'vanbanden_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	public $hasAndBelongsToMany = array(
        'Danhsach' => array(
            'className' => 'Danhsach',
            'joinTable' => 'vanbanden_danhsach',
            'foreignKey' => 'vanbanden_id',
            'associationForeignKey' => 'danhsach_id',
            'unique' => "keepExisting",
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        )
	);
	function beforeSave($options)
    {
        if (!empty($this->data['Vanbanden']['ngaynhan'])) {
            $this->data['Vanbanden']['ngaynhan'] = $this->changeFormatDate($this->data['Vanbanden']['ngaynhan']);
        }
        if (!empty($this->data['Vanbanden']['ngayvanban'])) {
            $this->data['Vanbanden']['ngayvanban'] = $this->changeFormatDate($this->data['Vanbanden']['ngayvanban']);
        }        
        return true;
    }
	function afterFind($results)
    {
        foreach ($results as $key => $val) {
            if (isset($val['Vanbanden']['ngaynhan']) && $val['Vanbanden']['ngaynhan'] != '0000-00-00') {
                $results[$key]['Vanbanden']['ngaynhan'] = $this->dateFormatAfterFind($val['Vanbanden']['ngaynhan']);
            }
            if (isset($val['Vanbanden']['ngayvanban']) && $val['Vanbanden']['ngayvanban'] != '0000-00-00') {
                $results[$key]['Vanbanden']['ngayvanban'] = $this->dateFormatAfterFind($val['Vanbanden']['ngayvanban']);
            }            
        }
        return $results;
    }
	function dateFormatAfterFind($dateString)
    {
        return date('d/m/Y', strtotime($dateString));
    }
	function changeFormatDate($cdate)
    {
        $ngay = explode("/", $cdate);
        return $ngay[2] . "-" . $ngay[1] . "-" . $ngay[0];
    }
}
