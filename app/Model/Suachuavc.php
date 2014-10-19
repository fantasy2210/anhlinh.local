<?php
App::uses('AppModel', 'Model');
/**
 * Suachuavc Model
 *
 * @property Vatchat $Vatchat
 * @property Nguoidenghi $Nguoidenghi
 */
class Suachuavc extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'suachuavc';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'lydosuachua';


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
		'Nguoidenghi' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'nguoidenghi_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
