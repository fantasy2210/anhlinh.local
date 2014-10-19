<?php
App::uses('Quatrinhcongtac', 'Model');

/**
 * Quatrinhcongtac Test Case
 *
 */
class QuatrinhcongtacTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quatrinhcongtac',
		'app.capbac',
		'app.danhsach',
		'app.donvi',
		'app.tinh',
		'app.huyen',
		'app.xa',
		'app.ykienchidao',
		'app.chucvudang',
		'app.chucvuchinhquyen',
		'app.baocaotin',
		'app.dangkyhoatdong',
		'app.quanhegiadinh',
		'app.loaiquanhe',
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
		$this->Quatrinhcongtac = ClassRegistry::init('Quatrinhcongtac');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Quatrinhcongtac);

		parent::tearDown();
	}

}
