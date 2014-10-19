<?php
App::uses('AppModel', 'Model');
/**
 * Kinhphichi Model
 *
 * @property Nguoidenghi $Nguoidenghi
 * @property Nguoiduyet $Nguoiduyet
 */
class Kinhphichi extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'kinhphichi';

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
		'Nguoidenghi' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'nguoidenghi_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nguoiduyet' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'nguoiduyet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
