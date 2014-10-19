<?php
App::uses('AppModel', 'Model');
/**
 * Danhsach Model
 *
 * @property Donvi $Donvi
 * @property Chucvudang $Chucvudang
 * @property Chucvuchinhquyen $Chucvuchinhquyen
 * @property Capbac $Capbac
 * @property Baocaotin $Baocaotin
 * @property Dangkyhoatdong $Dangkyhoatdong
 * @property Ykienchidao $Ykienchidao
 * @property Quanhegiadinh $Quanhegiadinh
 * @property Quatrinhcongtac $Quatrinhcongtac
 */
class Danhsach extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'danhsach';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hovaten';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Donvi' => array(
			'className' => 'Donvi',
			'foreignKey' => 'donvi_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Chucvudang' => array(
			'className' => 'Chucvudang',
			'foreignKey' => 'chucvudang_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Chucvuchinhquyen' => array(
			'className' => 'Chucvuchinhquyen',
			'foreignKey' => 'chucvuchinhquyen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Capbac' => array(
			'className' => 'Capbac',
			'foreignKey' => 'capbac_id',
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
		'Baocaotin' => array(
			'className' => 'Baocaotin',
			'foreignKey' => 'danhsach_id',
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
		'Dangkyhoatdong' => array(
			'className' => 'Dangkyhoatdong',
			'foreignKey' => 'danhsach_id',
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
		'Ykienchidao' => array(
			'className' => 'Ykienchidao',
			'foreignKey' => 'danhsach_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Quanhegiadinh' => array(
			'className' => 'Quanhegiadinh',
			'joinTable' => 'danhsach_quanhegiadinh',
			'foreignKey' => 'danhsach_id',
			'associationForeignKey' => 'quanhegiadinh_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Quatrinhcongtac' => array(
			'className' => 'Quatrinhcongtac',
			'joinTable' => 'danhsach_quatrinhcongtac',
			'foreignKey' => 'danhsach_id',
			'associationForeignKey' => 'quatrinhcongtac_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Vanbanden' => array(
            'className' => 'Vanbanden',
            'joinTable' => 'vanbanden_danhsach',
            'foreignKey' => 'danhsach_id',
            'associationForeignKey' => 'vanbanden_id',
            'unique' => 'keepExisting',
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
        if (!empty($this->data['Danhsach']['ngaynhapngu'])) {
            $this->data['Danhsach']['ngaynhapngu'] = $this->changeFormatDate($this->data['Danhsach']['ngaynhapngu']);
        }
        if (!empty($this->data['Danhsach']['ngaysinh'])) {
            $this->data['Danhsach']['ngaysinh'] = $this->changeFormatDate($this->data['Danhsach']['ngaysinh']);
        }        
        return true;
    }
	function afterFind($results)
    {
        foreach ($results as $key => $val) {
            if (isset($val['Danhsach']['ngaynhapngu']) && $val['Danhsach']['ngaynhapngu'] != '0000-00-00') {
                $results[$key]['Danhsach']['ngaynhapngu'] = $this->dateFormatAfterFind($val['Danhsach']['ngaynhapngu']);
            }
            if (isset($val['Danhsach']['ngaysinh']) && $val['Danhsach']['ngaysinh'] != '0000-00-00') {
                $results[$key]['Danhsach']['ngaysinh'] = $this->dateFormatAfterFind($val['Danhsach']['ngaysinh']);
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
