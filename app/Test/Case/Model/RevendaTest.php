<?php
App::uses('Revenda', 'Model');

/**
 * Revenda Test Case
 *
 */
class RevendaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.revenda',
		'app.usuarios'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Revenda = ClassRegistry::init('Revenda');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Revenda);

		parent::tearDown();
	}

}
