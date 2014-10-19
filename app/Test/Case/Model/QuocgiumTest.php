<?php
App::uses('Quocgium', 'Model');

/**
 * Quocgium Test Case
 *
 */
class QuocgiumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quocgium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Quocgium = ClassRegistry::init('Quocgium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Quocgium);

		parent::tearDown();
	}

}
