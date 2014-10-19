<?php
App::uses('AppModel', 'Model');
/**
 * Vanbandi Model
 *
 * @property Loaivanban $Loaivanban
 * @property Nguoiky $Nguoiky
 * @property Linhvuc $Linhvuc
 * @property Vanbanden $Vanbanden
 */
class Vanbandi extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'vanbandi';

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
		'Nguoiky' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'nguoiky_id',
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
		'Vanbanden' => array(
			'className' => 'Vanbanden',
			'foreignKey' => 'vanbanden_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public $hasMany = array(		
		'Attachfile' => array(
			'className' => 'Attachfile',
			'foreignKey' => 'vanbandi_id',
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
