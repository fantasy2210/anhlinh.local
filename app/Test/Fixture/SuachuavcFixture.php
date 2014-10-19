<?php
/**
 * SuachuavcFixture
 *
 */
class SuachuavcFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'suachuavc';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'vatchat_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ngaysuachua' => array('type' => 'date', 'null' => true, 'default' => null),
		'lydosuachua' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nguoidenghi_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'nguondenghi' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cososuachua' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sotiensuachua' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'vatchat_id' => 1,
			'ngaysuachua' => '2014-10-06',
			'lydosuachua' => 'Lorem ipsum dolor sit amet',
			'nguoidenghi_id' => 1,
			'nguondenghi' => 'Lorem ipsum dolor sit amet',
			'cososuachua' => 'Lorem ipsum dolor sit amet',
			'sotiensuachua' => 1
		),
	);

}
