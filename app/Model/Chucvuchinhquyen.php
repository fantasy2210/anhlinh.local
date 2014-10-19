<?php
App::uses('AppModel', 'Model');
/**
 * Chucvuchinhquyen Model
 *
 * @property Danhsach $Danhsach
 * @property Quatrinhcongtac $Quatrinhcongtac
 */
class Chucvuchinhquyen extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'chucvuchinhquyen';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ten';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Danhsach' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'chucvuchinhquyen_id',
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
		'Quatrinhcongtac' => array(
			'className' => 'Quatrinhcongtac',
			'foreignKey' => 'chucvuchinhquyen_id',
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

}
