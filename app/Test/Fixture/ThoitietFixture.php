<?php
/**
 * ThoitietFixture
 *
 */
class ThoitietFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'thoitiet';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'thoigian' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'noidung' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vungbien_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_thoitiet_vungbien1_idx' => array('column' => 'vungbien_id', 'unique' => 0)
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
			'thoigian' => '2014-09-17 22:11:01',
			'noidung' => 'Lorem ipsum dolor sit amet',
			'vungbien_id' => 1
		),
	);

}
