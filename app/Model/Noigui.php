<?php
App::uses('AppModel', 'Model');
/**
 * Noigui Model
 *
 * @property Vanbanden $Vanbanden
 */
class Noigui extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'noigui';

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
		'Vanbanden' => array(
			'className' => 'Vanbanden',
			'foreignKey' => 'noigui_id',
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
