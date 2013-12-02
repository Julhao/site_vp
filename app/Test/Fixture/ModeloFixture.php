<?php
/**
 * ModeloFixture
 *
 */
class ModeloFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome_modelo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'marcas_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'anuncios_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'marcas_id', 'anuncios_id'), 'unique' => 1),
			'fk_modelos_marcas1_idx' => array('column' => 'marcas_id', 'unique' => 0),
			'fk_modelos_anuncios1_idx' => array('column' => 'anuncios_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nome_modelo' => 'Lorem ipsum dolor sit amet',
			'marcas_id' => 1,
			'anuncios_id' => 1
		),
	);

}
