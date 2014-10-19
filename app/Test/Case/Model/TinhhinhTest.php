<?php
App::uses('Tinhhinh', 'Model');

/**
 * Tinhhinh Test Case
 *
 */
class TinhhinhTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tinhhinh',
		'app.dao',
		'app.vungbien',
		'app.quocgia',
		'app.tauca',
		'app.loaitau',
		'app.taucannbatgiu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tinhhinh = ClassRegistry::init('Tinhhinh');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tinhhinh);

		parent::tearDown();
	}

}
