<div class="revendas form">
<?php echo $this->Form->create('Revenda'); ?>
	<fieldset>
		<legend><?php echo __('Edit Revenda'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome-fantasia');
		echo $this->Form->input('cnpj');
		echo $this->Form->input('usuarios_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Revenda.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Revenda.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Revendas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
