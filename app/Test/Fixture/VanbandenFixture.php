<?php
/**
 * VanbandenFixture
 *
 */
class VanbandenFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'vanbanden';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'so' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kyhieu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'loaivanban_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ngayvanban' => array('type' => 'date', 'null' => true, 'default' => null),
		'ngaynhan' => array('type' => 'date', 'null' => true, 'default' => null),
		'tenvanban' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'noigui_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'nguoiky' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'domat' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'linhvuc_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'nguoiduyet_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'nguoinhan_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'noidungchidao' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'thoigianhoanthanh' => array('type' => 'date', 'null' => true, 'default' => null),
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
			'so' => 'Lorem ip',
			'kyhieu' => 'Lorem ip',
			'loaivanban_id' => 1,
			'ngayvanban' => '2014-09-24',
			'ngaynhan' => '2014-09-24',
			'tenvanban' => 'Lorem ipsum dolor sit amet',
			'noigui_id' => 1,
			'nguoiky' => 'Lorem ipsum dolor sit amet',
			'domat' => 1,
			'linhvuc_id' => 1,
			'nguoiduyet_id' => 1,
			'nguoinhan_id' => 1,
			'noidungchidao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'thoigianhoanthanh' => '2014-09-24'
		),
	);

}
