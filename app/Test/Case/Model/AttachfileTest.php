<?php
App::uses('Attachfile', 'Model');

/**
 * Attachfile Test Case
 *
 */
class AttachfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attachfile',
		'app.vanbanden',
		'app.loaivanban',
		'app.vanbandi',
		'app.danhsach',
		'app.donvi',
		'app.tinh',
		'app.huyen',
		'app.xa',
		'app.quatrinhcongtac',
		'app.capbac',
		'app.chucvudang',
		'app.chucvuchinhquyen',
		'app.danhsach_quatrinhcongtac',
		'app.ykienchidao',
		'app.baocaotin',
		'app.dangkyhoatdong',
		'app.quanhegiadinh',
		'app.loaiquanhe',
		'app.danhsach_quanhegiadinh',
		'app.linhvuc',
		'app.noigui'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attachfile = ClassRegistry::init('Attachfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attachfile);

		parent::tearDown();
	}

}
