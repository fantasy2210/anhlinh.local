<?php
App::uses('Chucvudang', 'Model');

/**
 * Chucvudang Test Case
 *
 */
class ChucvudangTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.chucvudang',
		'app.danhsach',
		'app.quatrinhcongtac'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Chucvudang = ClassRegistry::init('Chucvudang');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Chucvudang);

		parent::tearDown();
	}

}
