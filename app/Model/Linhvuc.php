<?php
App::uses('AppModel', 'Model');
/**
 * Linhvuc Model
 *
 * @property Vanbanden $Vanbanden
 * @property Vanbandi $Vanbandi
 */
class Linhvuc extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'linhvuc';

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
			'foreignKey' => 'linhvuc_id',
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
		'Vanbandi' => array(
			'className' => 'Vanbandi',
			'foreignKey' => 'linhvuc_id',
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
