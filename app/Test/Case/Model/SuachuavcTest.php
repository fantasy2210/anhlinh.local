<?php
App::uses('Suachuavc', 'Model');

/**
 * Suachuavc Test Case
 *
 */
class SuachuavcTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.suachuavc',
		'app.vatchat',
		'app.nhomvc',
		'app.nguoinhan',
		'app.nguoiquanly',
		'app.sudungvc',
		'app.nguoidenghi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Suachuavc = ClassRegistry::init('Suachuavc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Suachuavc);

		parent::tearDown();
	}

}
