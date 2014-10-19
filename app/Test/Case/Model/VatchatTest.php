<?php
App::uses('Vatchat', 'Model');

/**
 * Vatchat Test Case
 *
 */
class VatchatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vatchat',
		'app.nhomvc',
		'app.nguoinhan',
		'app.nguoiquanly',
		'app.suachuavc',
		'app.sudungvc'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vatchat = ClassRegistry::init('Vatchat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vatchat);

		parent::tearDown();
	}

}
