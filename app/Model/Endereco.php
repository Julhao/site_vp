<?php
App::uses('AppModel', 'Model');
/**
 * Endereco Model
 *
 * @property Usuarios $Usuarios
 */
class Endereco extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'usuarios_id' => array(
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
		'Usuarios' => array(
			'className' => 'Usuarios',
			'foreignKey' => 'usuarios_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
