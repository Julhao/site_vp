<div class="modelos view">
<h2><?php echo __('Modelo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Modelo'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['nome_modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marcas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($modelo['Marcas']['id'], array('controller' => 'marcas', 'action' => 'view', $modelo['Marcas']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anuncios'); ?></dt>
		<dd>
			<?php echo $this->Html->link($modelo['Anuncios']['id'], array('controller' => 'anuncios', 'action' => 'view', $modelo['Anuncios']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modelo'), array('action' => 'edit', $modelo['Modelo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modelo'), array('action' => 'delete', $modelo['Modelo']['id']), null, __('Are you sure you want to delete # %s?', $modelo['Modelo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modelos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modelo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marcas'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('controller' => 'anuncios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncios'), array('controller' => 'anuncios', 'action' => 'add')); ?> </li>
	</ul>
</div>
