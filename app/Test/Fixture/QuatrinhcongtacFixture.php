<?php
/**
 * QuatrinhcongtacFixture
 *
 */
class QuatrinhcongtacFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'quatrinhcongtac';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'den' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lamgi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'capbac_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'chucvudang_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'chucvuchinhquyen_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'donvi_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_quatrinhcongtac_capbac1_idx' => array('column' => 'capbac_id', 'unique' => 0),
			'fk_quatrinhcongtac_chucvudang1_idx' => array('column' => 'chucvudang_id', 'unique' => 0),
			'fk_quatrinhcongtac_chucvuchinhquyen1_idx' => array('column' => 'chucvuchinhquyen_id', 'unique' => 0),
			'fk_quatrinhcongtac_donvi1_idx' => array('column' => 'donvi_id', 'unique' => 0)
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
			'tu' => 'Lorem ipsum dolor sit amet',
			'den' => 'Lorem ipsum dolor sit amet',
			'lamgi' => 'Lorem ipsum dolor sit amet',
			'capbac_id' => 1,
			'chucvudang_id' => 1,
			'chucvuchinhquyen_id' => 1,
			'donvi_id' => 1
		),
	);

}
