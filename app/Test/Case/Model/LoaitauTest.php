<?php
App::uses('Loaitau', 'Model');

/**
 * Loaitau Test Case
 *
 */
class LoaitauTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.loaitau',
		'app.tauca',
		'app.taucannbatgiu',
		'app.quocgia',
		'app.vungbien',
		'app.thoitiet',
		'app.tinhhinh',
		'app.dao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Loaitau = ClassRegistry::init('Loaitau');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loaitau);

		parent::tearDown();
	}

}
