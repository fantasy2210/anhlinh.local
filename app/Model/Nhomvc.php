<?php
App::uses('AppModel', 'Model');
/**
 * Nhomvc Model
 *
 * @property Vatchat $Vatchat
 */
class Nhomvc extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'nhomvc';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tennhom';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Vatchat' => array(
			'className' => 'Vatchat',
			'foreignKey' => 'nhomvc_id',
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
