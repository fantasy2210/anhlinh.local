<?php
App::uses('Linhvuc', 'Model');

/**
 * Linhvuc Test Case
 *
 */
class LinhvucTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.linhvuc',
		'app.vanbanden',
		'app.loaivanban',
		'app.vanbandi',
		'app.danhsach',
		'app.noigui'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Linhvuc = ClassRegistry::init('Linhvuc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Linhvuc);

		parent::tearDown();
	}

}
