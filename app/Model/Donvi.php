<?php
App::uses('AppModel', 'Model');
/**
 * Donvi Model
 *
 * @property Tinh $Tinh
 * @property Huyen $Huyen
 * @property Xa $Xa
 * @property Danhsach $Danhsach
 * @property Quatrinhcongtac $Quatrinhcongtac
 * @property Ykienchidao $Ykienchidao
 */
class Donvi extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'donvi';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ten';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tinh' => array(
			'className' => 'Tinh',
			'foreignKey' => 'tinh_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Huyen' => array(
			'className' => 'Huyen',
			'foreignKey' => 'huyen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Xa' => array(
			'className' => 'Xa',
			'foreignKey' => 'xa_id',
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
		'Danhsach' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'donvi_id',
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
			'foreignKey' => 'donvi_id',
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
			'foreignKey' => 'donvi_id',
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
