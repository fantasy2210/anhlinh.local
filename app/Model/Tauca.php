<?php
App::uses('AppModel', 'Model');
/**
 * Tauca Model
 *
 * @property Loaitau $Loaitau
 * @property Taucannbatgiu $Taucannbatgiu
 * @property Tinhhinh $Tinhhinh
 */
class Tauca extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tauca';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tentau';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Loaitau' => array(
			'className' => 'Loaitau',
			'foreignKey' => 'loaitau_id',
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
		'Taucannbatgiu' => array(
			'className' => 'Taucannbatgiu',
			'foreignKey' => 'tauca_id',
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
		'Tinhhinh' => array(
			'className' => 'Tinhhinh',
			'foreignKey' => 'tauca_id',
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
