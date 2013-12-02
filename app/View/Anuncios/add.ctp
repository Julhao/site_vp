<div class="anuncios form">
<?php echo $this->Form->create('Anuncio'); ?>
	<fieldset>
		<legend><?php echo __('Add Anuncio'); ?></legend>
	<?php
		echo $this->Form->input('ano');
		echo $this->Form->input('porta');
		echo $this->Form->input('combustive');
		echo $this->Form->input('cambio');
		echo $this->Form->input('estilo');
		echo $this->Form->input('detalhes', array('type' => 'textarea'));
		echo $this->Form->input('preco');
		echo $this->Form->input('cor');
		echo $this->Form->input('usuarios_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Anuncios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
