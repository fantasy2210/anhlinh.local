<?php
App::uses('AppModel', 'Model');
/**
 * Ykienchidao Model
 *
 * @property Donvi $Donvi
 * @property Danhsach $Danhsach
 */
class Ykienchidao extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ykienchidao';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'noidung';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Donvi' => array(
			'className' => 'Donvi',
			'foreignKey' => 'donvi_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Danhsach' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'danhsach_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
