<?php
/**
 * YkienchidaoFixture
 *
 */
class YkienchidaoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ykienchidao';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'thoigian' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'noidung' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'linhvuc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'thoigianhoanthanh' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'donvi_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'danhsach_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'danhsach_id1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_ykienchidao_donvi1_idx' => array('column' => 'donvi_id', 'unique' => 0),
			'fk_ykienchidao_danhsach1_idx' => array('column' => 'danhsach_id', 'unique' => 0),
			'fk_ykienchidao_danhsach2_idx' => array('column' => 'danhsach_id1', 'unique' => 0)
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
			'thoigian' => '2014-09-17 22:13:44',
			'noidung' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'linhvuc' => 'Lorem ipsum dolor sit amet',
			'thoigianhoanthanh' => '2014-09-17 22:13:44',
			'donvi_id' => 1,
			'danhsach_id' => 1,
			'danhsach_id1' => 1
		),
	);

}
