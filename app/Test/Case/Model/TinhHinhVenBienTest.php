<?php
App::uses('TinhHinhVenBien', 'Model');

/**
 * TinhHinhVenBien Test Case
 *
 */
class TinhHinhVenBienTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tinh_hinh_ven_bien',
		'app.tinh',
		'app.donvi',
		'app.huyen',
		'app.xa',
		'app.danhsach',
		'app.chucvudang',
		'app.quatrinhcongtac',
		'app.capbac',
		'app.chucvuchinhquyen',
		'app.danhsach_quatrinhcongtac',
		'app.baocaotin',
		'app.dangkyhoatdong',
		'app.ykienchidao',
		'app.quanhegiadinh',
		'app.loaiquanhe',
		'app.danhsach_quanhegiadinh',
		'app.vanbanden',
		'app.loaivanban',
		'app.vanbandi',
		'app.linhvuc',
		'app.attachfile',
		'app.noigui',
		'app.vanbanden_danhsach'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TinhHinhVenBien = ClassRegistry::init('TinhHinhVenBien');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TinhHinhVenBien);

		parent::tearDown();
	}

}
