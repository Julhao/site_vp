<div class="anunciantes index">
	<h2><?php echo __('Anunciantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rg'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('usuarios_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($anunciantes as $anunciante): ?>
	<tr>
		<td><?php echo h($anunciante['Anunciante']['id']); ?>&nbsp;</td>
		<td><?php echo h($anunciante['Anunciante']['rg']); ?>&nbsp;</td>
		<td><?php echo h($anunciante['Anunciante']['cpf']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($anunciante['Usuarios']['id'], array('controller' => 'usuarios', 'action' => 'view', $anunciante['Usuarios']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $anunciante['Anunciante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $anunciante['Anunciante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $anunciante['Anunciante']['id']), null, __('Are you sure you want to delete # %s?', $anunciante['Anunciante']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Anunciante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
