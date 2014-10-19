<?php
App::uses('AppModel', 'Model');
/**
 * Taucannbatgiu Model
 *
 * @property Quocgia $Quocgia
 * @property Vungbien $Vungbien
 * @property Tauca $Tauca
 */
class Taucannbatgiu extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'taucannbatgiu';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'thoigian';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Quocgia' => array(
			'className' => 'Quocgia',
			'foreignKey' => 'quocgia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vungbien' => array(
			'className' => 'Vungbien',
			'foreignKey' => 'vungbien_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tauca' => array(
			'className' => 'Tauca',
			'foreignKey' => 'tauca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
