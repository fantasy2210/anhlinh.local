<?php
App::uses('Capbac', 'Model');

/**
 * Capbac Test Case
 *
 */
class CapbacTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.capbac',
		'app.danhsach',
		'app.quatrinhcongtac'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Capbac = ClassRegistry::init('Capbac');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Capbac);

		parent::tearDown();
	}

}
