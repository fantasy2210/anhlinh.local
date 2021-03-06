<?php
App::uses('AppModel', 'Model');
/**
 * Loaivanban Model
 *
 * @property Vanbanden $Vanbanden
 * @property Vanbandi $Vanbandi
 */
class Loaivanban extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'loaivanban';

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
			'foreignKey' => 'loaivanban_id',
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
			'foreignKey' => 'loaivanban_id',
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
