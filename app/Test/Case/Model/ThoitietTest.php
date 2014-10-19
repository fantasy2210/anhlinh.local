<?php
App::uses('Thoitiet', 'Model');

/**
 * Thoitiet Test Case
 *
 */
class ThoitietTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.thoitiet',
		'app.vungbien'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Thoitiet = ClassRegistry::init('Thoitiet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Thoitiet);

		parent::tearDown();
	}

}
