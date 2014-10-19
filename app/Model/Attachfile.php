<?php
App::uses('AppModel', 'Model');
/**
 * Attachfile Model
 *
 * @property Vanbanden $Vanbanden
 * @property Vanbandi $Vanbandi
 */
class Attachfile extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vanbanden' => array(
			'className' => 'Vanbanden',
			'foreignKey' => 'vanbanden_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vanbandi' => array(
			'className' => 'Vanbandi',
			'foreignKey' => 'vanbandi_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
