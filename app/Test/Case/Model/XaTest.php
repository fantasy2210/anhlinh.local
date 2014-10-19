<?php
App::uses('Xa', 'Model');

/**
 * Xa Test Case
 *
 */
class XaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.xa',
		'app.huyen',
		'app.tinh',
		'app.donvi',
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
		$this->Xa = ClassRegistry::init('Xa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Xa);

		parent::tearDown();
	}

}
