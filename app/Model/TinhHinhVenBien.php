<?php
App::uses('AppModel', 'Model');
/**
 * TinhHinhVenBien Model
 *
 * @property Tinh $Tinh
 * @property Huyen $Huyen
 * @property Xa $Xa
 */
class TinhHinhVenBien extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tinh_hinh_ven_bien';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'thoi_diem';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'thoi_diem' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'huyen_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'xa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tieu_de' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'noi_dung' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		),
		'Huyen' => array(
			'className' => 'Huyen',
			'foreignKey' => 'huyen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Xa' => array(
			'className' => 'Xa',
			'foreignKey' => 'xa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
