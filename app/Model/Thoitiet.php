<?php
App::uses('AppModel', 'Model');
/**
 * Thoitiet Model
 *
 * @property Vungbien $Vungbien
 */
class Thoitiet extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'thoitiet';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'noidung';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vungbien' => array(
			'className' => 'Vungbien',
			'foreignKey' => 'vungbien_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
