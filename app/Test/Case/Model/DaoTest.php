<?php
App::uses('Dao', 'Model');

/**
 * Dao Test Case
 *
 */
class DaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dao',
		'app.tinhhinh'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dao = ClassRegistry::init('Dao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dao);

		parent::tearDown();
	}

}
