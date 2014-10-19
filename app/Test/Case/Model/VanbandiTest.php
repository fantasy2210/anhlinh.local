<?php
App::uses('Vanbandi', 'Model');

/**
 * Vanbandi Test Case
 *
 */
class VanbandiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vanbandi',
		'app.loaivanban',
		'app.nguoiky',
		'app.linhvuc',
		'app.vanbanden',
		'app.noigui',
		'app.nguoiduyet',
		'app.nguoinhan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vanbandi = ClassRegistry::init('Vanbandi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vanbandi);

		parent::tearDown();
	}

}
