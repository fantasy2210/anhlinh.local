<?php
App::uses('AppModel', 'Model');
/**
 * Huyen Model
 *
 * @property Tinh $Tinh
 * @property Donvi $Donvi
 * @property Xa $Xa
 */
class Huyen extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'huyen';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ten';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tinh_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tinh' => array(
			'className' => 'Tinh',
			'foreignKey' => 'tinh_id',
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
			'foreignKey' => 'huyen_id',
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
		'Xa' => array(
			'className' => 'Xa',
			'foreignKey' => 'huyen_id',
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
