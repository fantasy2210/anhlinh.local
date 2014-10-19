<?php
App::uses('AppController', 'Controller');
/**
 * Vanbandis Controller
 *
 * @property Vanbandi $Dashboard
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DashboardController extends AppController {
	public $uses = array('Vanbandi', 'Vanbanden','Tinhhinh','Thoitiet');
	 
	public function index() {
		$this->set('title_for_layout', "Bàn làm việc");
		$this->Vanbandi->recursive = 0;
		$vanbandis = $this->Vanbandi->find("all");
		$this->set('vanbandis', $vanbandis);
		$vanbandens = $this->Vanbanden->find("all");
		$this->set('vanbandens', $vanbandis);
		
	}
	 
}