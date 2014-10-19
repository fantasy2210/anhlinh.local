<?php
/**
 * VatchatFixture
 *
 */
class VatchatFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'vatchat';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tenvc' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kyhieu' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dacdiem' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nhomvc_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'giatien' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'noicap' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ngaycap' => array('type' => 'date', 'null' => true, 'default' => null),
		'nguoinhan_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'chatluong' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nguoiquanly_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'vitri' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'huongdan' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'tenvc' => 'Lorem ipsum dolor sit amet',
			'kyhieu' => 'Lorem ipsum dolor sit amet',
			'dacdiem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'nhomvc_id' => 1,
			'giatien' => 1,
			'noicap' => 'Lorem ipsum dolor sit amet',
			'ngaycap' => '2014-10-06',
			'nguoinhan_id' => 1,
			'chatluong' => 'Lorem ipsum dolor sit amet',
			'nguoiquanly_id' => 1,
			'vitri' => 'Lorem ipsum dolor sit amet',
			'huongdan' => 'Lorem ipsum dolor sit amet'
		),
	);

}
