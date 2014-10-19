<?php
App::uses('AppModel', 'Model');
/**
 * Vatchat Model
 *
 * @property Nhomvc $Nhomvc
 * @property Nguoinhan $Nguoinhan
 * @property Nguoiquanly $Nguoiquanly
 * @property Suachuavc $Suachuavc
 * @property Sudungvc $Sudungvc
 */
class Vatchat extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'vatchat';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tenvc';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Nhomvc' => array(
			'className' => 'Nhomvc',
			'foreignKey' => 'nhomvc_id',
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
		),
		'Nguoiquanly' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'nguoiquanly_id',
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
		'Suachuavc' => array(
			'className' => 'Suachuavc',
			'foreignKey' => 'vatchat_id',
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
		'Sudungvc' => array(
			'className' => 'Sudungvc',
			'foreignKey' => 'vatchat_id',
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
