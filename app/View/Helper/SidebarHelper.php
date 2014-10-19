<?php
App::uses('AppHelper', 'View/Helper');

class SidebarHelper extends AppHelper {

    public function sidebar($control, $action) {
		//print_r($this->params);die;
		if($control == "/") {
			if($this->params['pass'])
			if($this->params['pass'][0] == "home") {
				return " class=\"active\"";
			}
		}
		if(stristr($control,",")) {
			$arrs = explode(",",$control);
			foreach($arrs as $arr) {
				if($arr == $this->params['controller']) {
					return " class=\"active\"";
				}
			}
		}
		if($control == $this->params['controller']) {
			if($action == "" && $this->params['action'] == "index") {
				return " class=\"active\"";
			} else if($action == $this->params['action']) {
				return " class=\"active\"";
			} else {
				return "";
			}
		} else {
			return "";
		}
	}
	public function domat($doamt) {
		switch($doamt) {
			case "0":
				return "<i data-toggle='tooltip' title='Độ mật: thường' class=\"fa fa-eye text-green\"></i>";
			break;
			case 1:
				return "<i data-toggle='tooltip' title='Độ mật: mật' class=\"fa fa-eye text-pink\"></i>";
				break;
			case 2:
				return "<i data-toggle='tooltip' title='Độ mật: tối mật' class=\"fa fa-eye text-orange\"></i>";
				break;
			case 3:
				return "<i data-toggle='tooltip' title='Độ mật: tuyệt mật' class=\"fa fa-eye text-red\"></i>";
				break;			
		}
	}
	public function domattxt($doamt) {
		switch($doamt) {
			case "0":
				return "<i class=\"label label-green\">Thường</i>";
			break;
			case 1:
				return "<i class=\"label label-pink\">Mật</i>";
				break;
			case 2:
				return "<i class=\"label label-orange\">Tối mật</i>";
				break;
			case 3:
				return "<i class=\"label label-red\">Tuyệt mật</i>";
				break;			
		}
	}
	public function duyet($doamt,$text) {
		$texts = "<span data-toggle='tooltip'";
		$texte = "&nbsp;</span>";
		$class = "";
		$tip = "";
		switch($doamt) {
			case "0":
				$class = "label-grey text-white";
				$tip = "Văn bản chưa duyệt";
				break;
			case 1:
				$class =  "label-yellow";
				$tip = "Văn bản chờ duyệt";
				break;
			case 2:
				$class =  "label-blue text-white";
				$tip = "Văn bản không cần duyệt";
				break;
			case 3:
				$class =  "label-green text-white";
				$tip = "Văn bản đã duyệt";
			break;
		}
		if($text === null) {
			if($tip == "Văn bản đã duyệt" || $tip == "Văn bản không cần duyệt") {
				return true;
			} else {
				return false;
			}
		}
		if($text === "") {
			$text = $tip;
		}
		return $texts."title='".$tip."' class='".$class."'>&nbsp;".$text.$texte;
	}
}