<?php
App::uses('Noigui', 'Model');

/**
 * Noigui Test Case
 *
 */
class NoiguiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.noigui',
		'app.vanbanden',
		'app.loaivanban',
		'app.vanbandi',
		'app.danhsach',
		'app.linhvuc'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Noigui = ClassRegistry::init('Noigui');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Noigui);

		parent::tearDown();
	}

}
