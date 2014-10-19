<?php
App::uses('AppModel', 'Model');
/**
 * Tinh Model
 *
 * @property Donvi $Donvi
 * @property Huyen $Huyen
 */
class Tinh extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tinh';

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
		'Donvi' => array(
			'className' => 'Donvi',
			'foreignKey' => 'tinh_id',
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
		'Huyen' => array(
			'className' => 'Huyen',
			'foreignKey' => 'tinh_id',
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
