<?php
class HomeController extends AppController {

	var $name = 'Home';
	var $uses = array();

	function index() {
		$this->set("title_for_layout", "VP Motors");
		
	}

}
?>

