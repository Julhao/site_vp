<?php
class DestaqueController extends AppController {

	var $name = 'Destaque';
	var $uses = array();

	function index() {
		$this->set("title_for_layout", "VP Motors");
		
	}
	function interna() {
		$this->set("title_for_layout", "VP Motors");
		$this->layout = false;
	}
}
?>

