<?php
App::uses('Ykienchidao', 'Model');

/**
 * Ykienchidao Test Case
 *
 */
class YkienchidaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ykienchidao',
		'app.donvi',
		'app.tinh',
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
		$this->Ykienchidao = ClassRegistry::init('Ykienchidao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ykienchidao);

		parent::tearDown();
	}

}
