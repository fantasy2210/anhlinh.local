<?php
App::uses('AppModel', 'Model');
/**
 * Quanhegiadinh Model
 *
 * @property Loaiquanhe $Loaiquanhe
 * @property Danhsach $Danhsach
 */
class Quanhegiadinh extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'quanhegiadinh';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hovaten';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Loaiquanhe' => array(
			'className' => 'Loaiquanhe',
			'foreignKey' => 'loaiquanhe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Danhsach' => array(
			'className' => 'Danhsach',
			'joinTable' => 'danhsach_quanhegiadinh',
			'foreignKey' => 'quanhegiadinh_id',
			'associationForeignKey' => 'danhsach_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
