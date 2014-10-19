<?php
App::uses('Tauca', 'Model');

/**
 * Tauca Test Case
 *
 */
class TaucaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tauca',
		'app.loaitau',
		'app.taucannbatgiu',
		'app.tinhhinh'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tauca = ClassRegistry::init('Tauca');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tauca);

		parent::tearDown();
	}

}
