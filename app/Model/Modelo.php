<?php
App::uses('AppModel', 'Model');
/**
 * Modelo Model
 *
 * @property Marcas $Marcas
 * @property Anuncios $Anuncios
 */
class Modelo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'marcas_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'anuncios_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Marcas' => array(
			'className' => 'Marcas',
			'foreignKey' => 'marcas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Anuncios' => array(
			'className' => 'Anuncios',
			'foreignKey' => 'anuncios_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
