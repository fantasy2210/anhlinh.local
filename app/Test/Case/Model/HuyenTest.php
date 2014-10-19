<?php
App::uses('Huyen', 'Model');

/**
 * Huyen Test Case
 *
 */
class HuyenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.huyen',
		'app.tinh',
		'app.donvi',
		'app.xa',
		'app.danhsach',
		'app.chucvudang',
		'app.quatrinhcongtac',
		'app.chucvuchinhquyen',
		'app.capbac',
		'app.baocaotin',
		'app.dangkyhoatdong',
		'app.ykienchidao',
		'app.quanhegiadinh',
		'app.danhsach_quanhegiadinh',
		'app.danhsach_quatrinhcongtac'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Huyen = ClassRegistry::init('Huyen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Huyen);

		parent::tearDown();
	}

}
