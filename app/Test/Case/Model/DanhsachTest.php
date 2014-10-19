<?php
App::uses('Danhsach', 'Model');

/**
 * Danhsach Test Case
 *
 */
class DanhsachTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.danhsach',
		'app.donvi',
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
		$this->Danhsach = ClassRegistry::init('Danhsach');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Danhsach);

		parent::tearDown();
	}

}
