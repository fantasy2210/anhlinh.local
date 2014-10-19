<?php
/**
 * KinhphichiFixture
 *
 */
class KinhphichiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'kinhphichi';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'noidung' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nguonkinhphi' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sotien' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'nguoidenghi_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'nguoiduyet_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'noidung' => 'Lorem ipsum dolor sit amet',
			'nguonkinhphi' => 'Lorem ipsum dolor sit amet',
			'sotien' => 1,
			'nguoidenghi_id' => 1,
			'nguoiduyet_id' => 1
		),
	);

}
