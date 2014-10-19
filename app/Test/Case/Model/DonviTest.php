<?php
App::uses('Donvi', 'Model');

/**
 * Donvi Test Case
 *
 */
class DonviTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.donvi',
		'app.tinh',
		'app.huyen',
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
		$this->Donvi = ClassRegistry::init('Donvi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Donvi);

		parent::tearDown();
	}

}
