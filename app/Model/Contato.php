<?php 
	App::uses('AppModel', 'Model');



	class Contato extends AppModel {
		
		public $name = "Contato";
		public $useTable = false;
		
		/**
		 * Validation rules
		 *
		 * @var array
		 */
			public $validate = array(
				'nome-contato' => array(
					'notempty' => array(
						'rule' => array('notempty'),
						'message' => 'Campo não validado',
						//'allowEmpty' => false,
						'required' => true,
						//'last' => false, // Stop validation after this rule
						//'on' => 'create', // Limit validation to 'create' or 'update' operations
					),
				),
				'email-contato' => array(
					'notempty' => array(
						'rule' => 'email',
						'message' => 'Campo não validado',
						//'allowEmpty' => false,
						'required' => true,
						//'last' => false, // Stop validation after this rule
						//'on' => 'create', // Limit validation to 'create' or 'update' operations
					),
				),
			);

			//The Associations below have been created with all possible keys, those that are not needed can be removed

	}
?>