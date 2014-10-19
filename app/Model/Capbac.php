<?php
App::uses('AppModel', 'Model');
/**
 * Capbac Model
 *
 * @property Danhsach $Danhsach
 * @property Quatrinhcongtac $Quatrinhcongtac
 */
class Capbac extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'capbac';

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
		'Danhsach' => array(
			'className' => 'Danhsach',
			'foreignKey' => 'capbac_id',
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
		'Quatrinhcongtac' => array(
			'className' => 'Quatrinhcongtac',
			'foreignKey' => 'capbac_id',
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
