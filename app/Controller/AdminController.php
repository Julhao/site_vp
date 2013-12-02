<?php
class AdminController extends AppController {

	var $name = 'Admin';
	var $uses = array();

	function index() {
		$this->set("title_for_layout", "VP Motors");
		$this->layout = false;
	}

}
?>

