<?php
App::uses('Ykiendonggop', 'Model');

/**
 * Ykiendonggop Test Case
 *
 */
class YkiendonggopTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ykiendonggop'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ykiendonggop = ClassRegistry::init('Ykiendonggop');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ykiendonggop);

		parent::tearDown();
	}

}
