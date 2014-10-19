<?php
/**
 * YkiendonggopFixture
 *
 */
class YkiendonggopFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ykiendonggop';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'thoigian' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'ngoidung' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lydo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 205, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hovaten' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 105, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'thoigian' => '2014-09-17 22:14:12',
			'ngoidung' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'lydo' => 'Lorem ipsum dolor sit amet',
			'hovaten' => 'Lorem ipsum dolor sit amet'
		),
	);

}
