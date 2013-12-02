<div class="anunciantes view">
<h2><?php echo __('Anunciante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anunciante['Anunciante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($anunciante['Anunciante']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($anunciante['Anunciante']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuarios'); ?></dt>
		<dd>
			<?php echo $this->Html->link($anunciante['Usuarios']['id'], array('controller' => 'usuarios', 'action' => 'view', $anunciante['Usuarios']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Anunciante'), array('action' => 'edit', $anunciante['Anunciante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Anunciante'), array('action' => 'delete', $anunciante['Anunciante']['id']), null, __('Are you sure you want to delete # %s?', $anunciante['Anunciante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Anunciantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anunciante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
