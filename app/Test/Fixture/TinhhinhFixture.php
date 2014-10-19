<?php
/**
 * TinhhinhFixture
 *
 */
class TinhhinhFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tinhhinh';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'thoigian' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tentau' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'khoangcach' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'loaihoatdong' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'vungbien_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'quocgia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'tauca_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_tinhhinh_dao1_idx' => array('column' => 'dao_id', 'unique' => 0),
			'fk_tinhhinh_vungbien1_idx' => array('column' => 'vungbien_id', 'unique' => 0),
			'fk_tinhhinh_quocgia1_idx' => array('column' => 'quocgia_id', 'unique' => 0),
			'fk_tinhhinh_tauca1_idx' => array('column' => 'tauca_id', 'unique' => 0)
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
			'thoigian' => 'Lorem ipsum dolor sit amet',
			'tentau' => 'Lorem ipsum dolor sit amet',
			'khoangcach' => 'Lorem ipsum dolor sit amet',
			'loaihoatdong' => 'Lorem ipsum dolor sit amet',
			'dao_id' => 1,
			'vungbien_id' => 1,
			'quocgia_id' => 1,
			'tauca_id' => 1
		),
	);

}
