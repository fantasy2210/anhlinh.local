<?php
App::uses('Loaiquanhe', 'Model');

/**
 * Loaiquanhe Test Case
 *
 */
class LoaiquanheTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.loaiquanhe',
		'app.quanhegiadinh'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Loaiquanhe = ClassRegistry::init('Loaiquanhe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loaiquanhe);

		parent::tearDown();
	}

}
