<?php
App::uses('Vungbien', 'Model');

/**
 * Vungbien Test Case
 *
 */
class VungbienTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vungbien',
		'app.taucannbatgiu',
		'app.quocgia',
		'app.tauca',
		'app.loaitau',
		'app.tinhhinh',
		'app.dao',
		'app.thoitiet'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vungbien = ClassRegistry::init('Vungbien');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vungbien);

		parent::tearDown();
	}

}
