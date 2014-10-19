<?php
App::uses('AppModel', 'Model');
/**
 * Loaitau Model
 *
 * @property Tauca $Tauca
 */
class Loaitau extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'loaitau';

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
		'Tauca' => array(
			'className' => 'Tauca',
			'foreignKey' => 'loaitau_id',
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
