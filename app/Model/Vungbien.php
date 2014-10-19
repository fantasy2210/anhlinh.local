<?php
App::uses('AppModel', 'Model');
/**
 * Vungbien Model
 *
 * @property Taucannbatgiu $Taucannbatgiu
 * @property Thoitiet $Thoitiet
 * @property Tinhhinh $Tinhhinh
 */
class Vungbien extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'vungbien';

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
		'Taucannbatgiu' => array(
			'className' => 'Taucannbatgiu',
			'foreignKey' => 'vungbien_id',
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
		'Thoitiet' => array(
			'className' => 'Thoitiet',
			'foreignKey' => 'vungbien_id',
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
			'foreignKey' => 'vungbien_id',
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
