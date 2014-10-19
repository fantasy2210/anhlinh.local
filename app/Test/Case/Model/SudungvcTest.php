<?php
App::uses('Sudungvc', 'Model');

/**
 * Sudungvc Test Case
 *
 */
class SudungvcTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sudungvc',
		'app.vatchat',
		'app.nhomvc',
		'app.nguoinhan',
		'app.nguoiquanly',
		'app.suachuavc',
		'app.nguoidenghi',
		'app.nguoisudung'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sudungvc = ClassRegistry::init('Sudungvc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sudungvc);

		parent::tearDown();
	}

}
