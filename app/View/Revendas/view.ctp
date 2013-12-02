<div class="revendas view">
<h2><?php echo __('Revenda'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($revenda['Revenda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome-fantasia'); ?></dt>
		<dd>
			<?php echo h($revenda['Revenda']['nome-fantasia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnpj'); ?></dt>
		<dd>
			<?php echo h($revenda['Revenda']['cnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuarios'); ?></dt>
		<dd>
			<?php echo $this->Html->link($revenda['Usuarios']['id'], array('controller' => 'usuarios', 'action' => 'view', $revenda['Usuarios']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Revenda'), array('action' => 'edit', $revenda['Revenda']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Revenda'), array('action' => 'delete', $revenda['Revenda']['id']), null, __('Are you sure you want to delete # %s?', $revenda['Revenda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Revendas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revenda'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
