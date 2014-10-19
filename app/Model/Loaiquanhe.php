<?php
App::uses('AppModel', 'Model');
/**
 * Loaiquanhe Model
 *
 * @property Quanhegiadinh $Quanhegiadinh
 */
class Loaiquanhe extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'loaiquanhe';

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
		'Quanhegiadinh' => array(
			'className' => 'Quanhegiadinh',
			'foreignKey' => 'loaiquanhe_id',
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
