<?php
App::uses('Baocaotin', 'Model');

/**
 * Baocaotin Test Case
 *
 */
class BaocaotinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.baocaotin',
		'app.danhsach'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Baocaotin = ClassRegistry::init('Baocaotin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Baocaotin);

		parent::tearDown();
	}

}
