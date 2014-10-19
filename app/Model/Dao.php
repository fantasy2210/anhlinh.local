<?php
App::uses('AppModel', 'Model');
/**
 * Dao Model
 *
 * @property Tinhhinh $Tinhhinh
 */
class Dao extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'dao';

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
		'Tinhhinh' => array(
			'className' => 'Tinhhinh',
			'foreignKey' => 'dao_id',
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
