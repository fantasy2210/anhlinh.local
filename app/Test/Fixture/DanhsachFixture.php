<?php
/**
 * DanhsachFixture
 *
 */
class DanhsachFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'danhsach';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'hovaten' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ngaysinh' => array('type' => 'date', 'null' => true, 'default' => null),
		'ngaynhapngu' => array('type' => 'date', 'null' => true, 'default' => null),
		'quequan' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'noithuongtru' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'donvi_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'chucvudang_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'chucvuchinhquyen_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'capbac_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_danhsach_donvi1_idx' => array('column' => 'donvi_id', 'unique' => 0),
			'fk_danhsach_chucvudang1_idx' => array('column' => 'chucvudang_id', 'unique' => 0),
			'fk_danhsach_chucvuchinhquyen1_idx' => array('column' => 'chucvuchinhquyen_id', 'unique' => 0),
			'fk_danhsach_capbac1_idx' => array('column' => 'capbac_id', 'unique' => 0)
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
			'hovaten' => 'Lorem ipsum dolor sit amet',
			'ngaysinh' => '2014-09-17',
			'ngaynhapngu' => '2014-09-17',
			'quequan' => 'Lorem ipsum dolor sit amet',
			'noithuongtru' => 'Lorem ipsum dolor sit amet',
			'donvi_id' => 1,
			'chucvudang_id' => 1,
			'chucvuchinhquyen_id' => 1,
			'capbac_id' => 1
		),
	);

}
