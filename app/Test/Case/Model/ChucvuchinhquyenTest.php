<?php
App::uses('Chucvuchinhquyen', 'Model');

/**
 * Chucvuchinhquyen Test Case
 *
 */
class ChucvuchinhquyenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.chucvuchinhquyen',
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
		$this->Chucvuchinhquyen = ClassRegistry::init('Chucvuchinhquyen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Chucvuchinhquyen);

		parent::tearDown();
	}

}
