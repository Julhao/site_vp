<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Por favor entre com seu login e senha:'); ?></legend>
        <?php echo $this->Form->input('login');
        echo $this->Form->input('senha');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>