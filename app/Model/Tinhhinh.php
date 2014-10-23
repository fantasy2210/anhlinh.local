<?php
App::uses('AppModel', 'Model');
/**
 * Tinhhinh Model
 *
 * @property Dao $Dao
 * @property Vungbien $Vungbien
 * @property Quocgia $Quocgia
 * @property Tauca $Tauca
 */
class Tinhhinh extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tinh_hinh_tren_bien';

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
		'Dao' => array(
			'className' => 'Dao',
			'foreignKey' => 'dao_id',
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
		'Quocgia' => array(
			'className' => 'Quocgia',
			'foreignKey' => 'quocgia_id',
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
