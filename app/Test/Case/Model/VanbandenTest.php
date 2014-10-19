<?php
App::uses('Vanbanden', 'Model');

/**
 * Vanbanden Test Case
 *
 */
class VanbandenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vanbanden',
		'app.loaivanban',
		'app.noigui',
		'app.linhvuc',
		'app.nguoiduyet',
		'app.nguoinhan',
		'app.vanbandi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vanbanden = ClassRegistry::init('Vanbanden');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vanbanden);

		parent::tearDown();
	}

}
