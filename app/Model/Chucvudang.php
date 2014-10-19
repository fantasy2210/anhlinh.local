<?php
App::uses('AppModel', 'Model');
/**
 * Chucvudang Model
 *
 * @property Danhsach $Danhsach
 * @property Quatrinhcongtac $Quatrinhcongtac
 */
class Chucvudang extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'chucvudang';

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
			'foreignKey' => 'chucvudang_id',
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
			'foreignKey' => 'chucvudang_id',
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
