<div class="fotos view">
<h2><?php echo __('Foto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foto['Foto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anuncios'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foto['Anuncios']['id'], array('controller' => 'anuncios', 'action' => 'view', $foto['Anuncios']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foto'), array('action' => 'edit', $foto['Foto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foto'), array('action' => 'delete', $foto['Foto']['id']), null, __('Are you sure you want to delete # %s?', $foto['Foto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fotos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('controller' => 'anuncios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncios'), array('controller' => 'anuncios', 'action' => 'add')); ?> </li>
	</ul>
</div>
