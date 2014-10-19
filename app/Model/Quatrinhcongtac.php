<?php
App::uses('AppModel', 'Model');
/**
 * Quatrinhcongtac Model
 *
 * @property Capbac $Capbac
 * @property Chucvudang $Chucvudang
 * @property Chucvuchinhquyen $Chucvuchinhquyen
 * @property Donvi $Donvi
 * @property Danhsach $Danhsach
 */
class Quatrinhcongtac extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'quatrinhcongtac';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'lamgi';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Capbac' => array(
			'className' => 'Capbac',
			'foreignKey' => 'capbac_id',
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
		'Donvi' => array(
			'className' => 'Donvi',
			'foreignKey' => 'donvi_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Danhsach' => array(
			'className' => 'Danhsach',
			'joinTable' => 'danhsach_quatrinhcongtac',
			'foreignKey' => 'quatrinhcongtac_id',
			'associationForeignKey' => 'danhsach_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
