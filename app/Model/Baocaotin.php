<?php
App::uses('AppModel', 'Model');
/**
 * Baocaotin Model
 *
 * @property Danhsach $Danhsach
 */
class Baocaotin extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'baocaotin';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'noidungtin';


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
