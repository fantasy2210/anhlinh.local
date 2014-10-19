<?php
App::uses('AppModel', 'Model');
/**
 * Xa Model
 *
 * @property Huyen $Huyen
 * @property Donvi $Donvi
 */
class Xa extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'xa';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ten';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Huyen' => array(
			'className' => 'Huyen',
			'foreignKey' => 'huyen_id',
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
		'Donvi' => array(
			'className' => 'Donvi',
			'foreignKey' => 'xa_id',
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
