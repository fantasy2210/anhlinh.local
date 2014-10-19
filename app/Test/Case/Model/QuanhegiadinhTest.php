<?php
App::uses('Quanhegiadinh', 'Model');

/**
 * Quanhegiadinh Test Case
 *
 */
class QuanhegiadinhTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quanhegiadinh',
		'app.loaiquanhe',
		'app.danhsach',
		'app.donvi',
		'app.tinh',
		'app.huyen',
		'app.xa',
		'app.quatrinhcongtac',
		'app.ykienchidao',
		'app.chucvudang',
		'app.chucvuchinhquyen',
		'app.capbac',
		'app.baocaotin',
		'app.dangkyhoatdong',
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
		$this->Quanhegiadinh = ClassRegistry::init('Quanhegiadinh');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Quanhegiadinh);

		parent::tearDown();
	}

}
