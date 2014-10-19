<?php
App::uses('Tinh', 'Model');

/**
 * Tinh Test Case
 *
 */
class TinhTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tinh',
		'app.donvi',
		'app.huyen',
		'app.xa',
		'app.danhsach',
		'app.chucvudang',
		'app.quatrinhcongtac',
		'app.capbac',
		'app.chucvuchinhquyen',
		'app.danhsach_quatrinhcongtac',
		'app.baocaotin',
		'app.dangkyhoatdong',
		'app.ykienchidao',
		'app.quanhegiadinh',
		'app.loaiquanhe',
		'app.danhsach_quanhegiadinh'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tinh = ClassRegistry::init('Tinh');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tinh);

		parent::tearDown();
	}

}
