<?php
/**
 * DonviFixture
 *
 */
class DonviFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'donvi';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ten' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dienthoai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'website' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tinh_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'huyen_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'xa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_donvi_tinh1_idx' => array('column' => 'tinh_id', 'unique' => 0),
			'fk_donvi_huyen1_idx' => array('column' => 'huyen_id', 'unique' => 0),
			'fk_donvi_xa1_idx' => array('column' => 'xa_id', 'unique' => 0)
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
			'ten' => 'Lorem ipsum dolor sit amet',
			'dienthoai' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'website' => 'Lorem ipsum dolor sit amet',
			'tinh_id' => 1,
			'huyen_id' => 1,
			'xa_id' => 1
		),
	);

}
