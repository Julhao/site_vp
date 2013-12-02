<?php
App::uses('CakeEmail', 'Network/Email');

class ContatoController extends AppController {

	var $name = 'Contato';
	var $uses = array();

	function index() {
		$this->set("title_for_layout", "VP Motors");
		
		if( !empty($this->request->data)){
	
		
			/*
			$msg .= "Email:" . $this->request->data['email-contato'] . "<br>";
			$msg .= "Telefone: (" . $this->request->data['ddd-contato'] . ")&nbsp;";
			$msg .= "" . $this->request->data['tel-contato'] . "<br>";
			$msg .= "Cidade:" . $this->request->data['cidade-contato'] . "&nbsp;-&nbsp;";
			$msg .= "" . $this->request->data['estado'] . "<br>";
			$msg .= "Mensagem: <br>" . $this->request->data['mensagem-contato'];
			*/
			
			$Email = new CakeEmail();
			$Email->template('default')
				->emailFormat('html')
				->viewVars(array(
					'nome' => $this->request->data['nome-contato'],
					'email' => $this->request->data['email-contato'],
					'ddd' => $this->request->data['ddd-contato'],
					'tel' => $this->request->data['tel-contato'],
					'cidade' => $this->request->data['cidade-contato'],
					'uf' => $this->request->data['estado'],
					'msg' => $this->request->data['mensagem-contato']
				))
				
				->from(array('site@site.com.br' => 'Site'))
				->to('lincon@bendit.com.br')
				->subject('assunto site')
				->config('smtp');
			
			$this->Contato->set($this->request->data);

			if ($this->Contato->validates()) {
				if($Email->send($this->request->data)){
					$this->Session->setFlash(__('E-mail enviado com sucesso'));
					//return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('E-mail não enviado. Por favor tente novamente!'));
				}
			} else {
			    $this->Session->setFlash(__('Campos não validados, tente novamente'));
			    //return $this->redirect(array('action' => 'index'));
			}

			/*
			$this->Contato->set($this->request->data);

			if ($this->Contato->validates(array('fieldList' => array('nome-contato', 'email-contato')))) {
			    // valid
			} else {
			    // invalid
			}
			$Email->send($this->request->data)){
				$this->Session->setFlash(__('E-mail enviado com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('E-mail não enviado. Por favor tente novamente!'));
			}
			*/
		}
		
	}

}
?>