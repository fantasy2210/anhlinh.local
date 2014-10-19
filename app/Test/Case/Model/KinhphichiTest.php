<?php
App::uses('Kinhphichi', 'Model');

/**
 * Kinhphichi Test Case
 *
 */
class KinhphichiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kinhphichi',
		'app.nguoidenghi',
		'app.nguoiduyet'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kinhphichi = ClassRegistry::init('Kinhphichi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kinhphichi);

		parent::tearDown();
	}

}
