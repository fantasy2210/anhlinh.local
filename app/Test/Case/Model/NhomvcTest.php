<?php
App::uses('Nhomvc', 'Model');

/**
 * Nhomvc Test Case
 *
 */
class NhomvcTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nhomvc',
		'app.vatchat',
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
		$this->Nhomvc = ClassRegistry::init('Nhomvc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nhomvc);

		parent::tearDown();
	}

}
