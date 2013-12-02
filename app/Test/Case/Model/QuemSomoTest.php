<?php
App::uses('QuemSomo', 'Model');

/**
 * QuemSomo Test Case
 *
 */
class QuemSomoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quem_somo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuemSomo = ClassRegistry::init('QuemSomo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuemSomo);

		parent::tearDown();
	}

}
