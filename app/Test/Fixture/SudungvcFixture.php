<?php
/**
 * SudungvcFixture
 *
 */
class SudungvcFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sudungvc';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'vatchat_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ngaysudung' => array('type' => 'date', 'null' => true, 'default' => null),
		'nguoisudung_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'mucdich' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ngaytra' => array('type' => 'date', 'null' => true, 'default' => null),
		'tinhtrangmuon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tinhtrangtra' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'ngaysudung' => '2014-10-06',
			'nguoisudung_id' => 1,
			'mucdich' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ngaytra' => '2014-10-06',
			'tinhtrangmuon' => 'Lorem ipsum dolor sit amet',
			'tinhtrangtra' => 'Lorem ipsum dolor sit amet'
		),
	);

}
