<div class="anuncios view">
<h2><?php echo __('Anuncio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['ano']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porta'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['porta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combustive'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['combustive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cambio'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['cambio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estilo'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['estilo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalhes'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['detalhes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preco'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cor'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['cor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuarios'); ?></dt>
		<dd>
			<?php echo $this->Html->link($anuncio['Usuarios']['id'], array('controller' => 'usuarios', 'action' => 'view', $anuncio['Usuarios']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Anuncio'), array('action' => 'edit', $anuncio['Anuncio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Anuncio'), array('action' => 'delete', $anuncio['Anuncio']['id']), null, __('Are you sure you want to delete # %s?', $anuncio['Anuncio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
