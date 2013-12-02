<?php echo $this->Html->script(array('jquery', 'http://cidades-estados-js.googlecode.com/files/cidades-estados-1.2-utf8.js', 'jquery.maskedinput'));?>

<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Cadastro'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('sexo', array(
		    'options' => array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'),
		    'empty' => 'Selecione'
		));
		echo $this->Form->input('data_nascimento', array('type' => 'text', 'class' => 'data'));
		echo $this->Form->input('tipo_anunciante', array('label' => 'Tipo Anuncio',
		    'options' => array('Anunciante' => 'Anunciante', 'Revendedor' => 'Revendedor'),
		    'empty' => 'Selecione'
		));

		echo $this->Form->input('nome_fantasia');
		echo $this->Form->input('cnpj', array('class' => 'cnpj'));
		echo $this->Form->input('rg', array('class' => 'rg'));
		echo $this->Form->input('cpf', array('class' => 'cpf'));
		echo $this->Form->input('cep', array('class' => 'cep'));
		echo $this->Form->input('rua');
	?>
	
	<div class="input email">
		<label for="UsuarioEmail">Estado</label>
		<select id="estado1" value="Selecione" name="data[Usuario][estado]"></select>
	</div>
	<div class="input email">
		<label for="UsuarioEmail">Cidade</label>
		<select id="cidade1" value="Selecione" name="data[Usuario][cidade]"></select>
	</div>
	
	<?php
		//echo $this->Form->input('estado', array('id' => ''));
		echo $this->Form->input('bairro');
		echo $this->Form->input('complemento');
		//echo $this->Form->input('cidade');
		echo $this->Form->input('email');
		echo $this->Form->input('senha', array('type' => 'password'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>



</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
 <script language="JavaScript" type="text/javascript" charset="utf-8">
 	new dgCidadesEstados({
      cidade: document.getElementById('cidade1'),
      estado: document.getElementById('estado1')
    });
	$(document).ready(function(){
		$("input.data").mask("99/99/9999");
	    $("input.cpf").mask("999.999.999-99");
	    $("input.rg").mask("99.999.999-9");
	    $("input.cnpj").mask("99.999.999/9999-99");
	    $("input.cep").mask("99.999-999");
	});
</script>