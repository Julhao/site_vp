<div class="anunciantes form">
<?php echo $this->Form->create('Anunciante'); ?>
	<fieldset>
		<legend><?php echo __('Add Anunciante'); ?></legend>
	<?php
		echo $this->Form->input('rg');
		echo $this->Form->input('cpf');
		echo $this->Form->input('usuarios_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Anunciantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
