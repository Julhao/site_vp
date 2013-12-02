<?php
App::uses('Anunciante', 'Model');

/**
 * Anunciante Test Case
 *
 */
class AnuncianteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.anunciante',
		'app.usuarios'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Anunciante = ClassRegistry::init('Anunciante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Anunciante);

		parent::tearDown();
	}

}
