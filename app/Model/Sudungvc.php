<?php
App::uses('AppModel', 'Model');
/**
 * Sudungvc Model
 *
 * @property Vatchat $Vatchat
 * @property Nguoisudung $Nguoisudung
 */
class Sudungvc extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'sudungvc';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'mucdich';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vatchat' => array(
			'className' => 'Vatchat',
			'foreignKey' => 'vatchat_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nguoisudung' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'nguoisudung_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
