<?php
App::uses('AppModel', 'Model');
/**
 * Dangkyhoatdong Model
 *
 * @property Danhsach $Danhsach
 */
class Dangkyhoatdong extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'dangkyhoatdong';

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
		'Danhsach' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'danhsach_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
