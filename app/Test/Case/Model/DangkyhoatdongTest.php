<?php
App::uses('Dangkyhoatdong', 'Model');

/**
 * Dangkyhoatdong Test Case
 *
 */
class DangkyhoatdongTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dangkyhoatdong',
		'app.danhsach'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dangkyhoatdong = ClassRegistry::init('Dangkyhoatdong');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dangkyhoatdong);

		parent::tearDown();
	}

}
