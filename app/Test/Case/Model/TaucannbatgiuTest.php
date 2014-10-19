<?php
App::uses('Taucannbatgiu', 'Model');

/**
 * Taucannbatgiu Test Case
 *
 */
class TaucannbatgiuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.taucannbatgiu',
		'app.quocgia',
		'app.vungbien',
		'app.tauca',
		'app.loaitau',
		'app.tinhhinh'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Taucannbatgiu = ClassRegistry::init('Taucannbatgiu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Taucannbatgiu);

		parent::tearDown();
	}

}
