<?php
/**
 * TaucannbatgiuFixture
 *
 */
class TaucannbatgiuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'taucannbatgiu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'thoigian' => array('type' => 'date', 'null' => true, 'default' => null),
		'toado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'quocgia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'vungbien_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'tauca_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_taucannbatgiu_quocgia1_idx' => array('column' => 'quocgia_id', 'unique' => 0),
			'fk_taucannbatgiu_vungbien1_idx' => array('column' => 'vungbien_id', 'unique' => 0),
			'fk_taucannbatgiu_tauca1_idx' => array('column' => 'tauca_id', 'unique' => 0)
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
			'thoigian' => '2014-09-17',
			'toado' => 'Lorem ipsum dolor sit amet',
			'quocgia_id' => 1,
			'vungbien_id' => 1,
			'tauca_id' => 1
		),
	);

}
