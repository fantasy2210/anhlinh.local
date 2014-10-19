<?php
App::uses('Loaivanban', 'Model');

/**
 * Loaivanban Test Case
 *
 */
class LoaivanbanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.loaivanban',
		'app.vanbanden',
		'app.noigui',
		'app.linhvuc',
		'app.danhsach',
		'app.vanbandi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Loaivanban = ClassRegistry::init('Loaivanban');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loaivanban);

		parent::tearDown();
	}

}
